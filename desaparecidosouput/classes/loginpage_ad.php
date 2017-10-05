<?php
include_once(getabspath("classes/runnerldap.php"));
/**
 * Class for login page with Active Directory
 *
 */
class LoginPage_AD extends LoginPage 
{
	public $ldapObj = null;
	
	public $ldap_domainName = null;
	
	public $ldap_serverIP = null;
	
	public $useCustomLDAP = false;
	
	
	function LoginPage_AD(&$params) 
	{
		// call parent constructor
		parent::LoginPage($params);
		
		$this->auditObj = GetAuditObject();
		$this->ldap_domainName = GetGlobalData("ADDomain","");
		$this->ldap_serverIP = GetGlobalData("ADServer","localhost");
		
		$this->useCustomLDAP = GetGlobalData("customLDAP", false);
	}
	
	function getRemoteUserName()
	{
		$arrUsername =  explode('\\',$_SERVER["REMOTE_USER"]);
		if (isset($arrUsername[1]))
			return $arrUsername[1];
		
		return $_SERVER["REMOTE_USER"];
	}
	
	function LogInAuto()
	{
		$pUsername = $this->getRemoteUserName();
		
		$_SESSION["UserID"] = $pUsername;
		$_SESSION["UserPass"] = '';
		$_SESSION["UserName"] = runner_htmlspecialchars( $pUsername );
		$_SESSION["AccessLevel"] = ACCESS_LEVEL_USER;
		$_SESSION["GroupID"] = $pUsername;
			
		if($this->auditObj)	{
			$this->auditObj->LogLogin($pUsername);
			$this->auditObj->LoginSuccessful();
		}	
			$_SESSION["OwnerID"] = $_SESSION["UserID"];
		$_SESSION["_colaboraciones_OwnerID"] = $_SESSION["UserID"];
			$_SESSION["_desaparecidos_OwnerID"] = $_SESSION["UserID"];
		return true;
	}
	
	
	function LogIn($pUsername, $pPassword)
	{	
		global $customLDAPSettings;
		
		if( GetGlobalData("ADSingleSign", 0) && $_SERVER["REMOTE_USER"] && $pUsername == '' && $pPassword == '' ) 
		{
			return $this->LogInAuto();
		}
		
		$this->ldapObj = new RunnerLdap(GetGlobalData("ADDomain",""), GetGlobalData("ADServer",null), $this->useCustomLDAP);
		// connect to ldap server
		$ldapconn = $this->ldapObj->runner_ldap_connect($pUsername, $pPassword);
	
		if ($ldapconn && $this->isCaptchaOk) 
		{	
			if (GetGlobalData("ADSingleSign",0) && $_SERVER["REMOTE_USER"])
				$pUsername = $this->getRemoteUserName();
			
					
			//LDAP bind successful...
			$filter = $this->getLoginFilter( $pUsername );
			$attributes = $this->useCustomLDAP ? array() : array("samaccountname","displayname","memberof", "primarygroupid", "objectsid", "distinguishedname", "userprincipalname");
			$entries = $this->ldapObj->runner_ldap_getData($filter, $attributes);
			
			if( $entries )
			{ 					
				if ( !$this->useCustomLDAP && $this->pSet->isCaseInsensitiveUsername() )
				{
					if (strcmp($entries[0]['samaccountname'],$pUsername) 
						&& strcmp($entries[0]['userprincipalname'],$pUsername."@".GetGlobalData("ADDomain",""))
						&& strcmp($entries[0]['userprincipalname'],$pUsername)
					)
						return false;
				}
								
				$_SESSION["UserID"] = $pUsername;
				$_SESSION["UserPass"] = $pPassword;
				$_SESSION["UserName"] = runner_htmlspecialchars( $pUsername );
				$_SESSION["AccessLevel"] = ACCESS_LEVEL_USER;
				$_SESSION["GroupID"] = $pUsername;
				
				if( !$this->useCustomLDAP )	
				{
					$_SESSION["DistName"] = $entries[0]['distinguishedname'];
					if( $entries[0]['displayname'] != null && $entries[0]['displayname'] != '' )  
						$_SESSION["UserName"] = runner_htmlspecialchars( $entries[0]['displayname'] );					
				}
				else
				{
					$displayNameAttr = $customLDAPSettings["displayNameAttr"];
					if( $displayNameAttr && $entries[0][ $displayNameAttr ] != '')
						$_SESSION["UserName"] = runner_htmlspecialchars( $entries[0][ $displayNameAttr ] );
				}
				
				$userGroups = $this->getUserGroups( $pUsername, $entries[0]);
				
				$this->addGroupsFromAD($userGroups);
				$_SESSION["GroupID"] = implode(",",$userGroups);
				if($this->auditObj)	{
					$this->auditObj->LogLogin($pUsername);
					$this->auditObj->LoginSuccessful();
				}
					
				$adminUsers = GetGlobalData("ADAdmins",array()); 
					
				if (in_array($pUsername,$adminUsers))
					$_SESSION["AccessLevel"] = ACCESS_LEVEL_ADMIN;
					
					$_SESSION["OwnerID"] = $_SESSION["UserID"];
				$_SESSION["_colaboraciones_OwnerID"] = $_SESSION["UserID"];
					$_SESSION["_desaparecidos_OwnerID"] = $_SESSION["UserID"];
									
				return true;	
			}
			else
				$this->message = "Conexión inválida";//"Invalid Login";
		}
		else 
		{
			if (!$ldapconn)
				$this->message = $this->ldapObj->ldap_error();//"Invalid Login";
		}
		
		if($this->auditObj) 
		{
			$this->auditObj->LogLoginFailed($pUsername);
			$this->auditObj->LoginUnsuccessful($pUsername);
		}
		$this->ldapObj->runner_ldap_unbind();
		return false;
	}
	
	/**
	 * Get a list of user groups
	 * @param String pUsername
	 * @param Array loginEntry
	 * @return Array
	 */
	protected function getUserGroups( $pUsername, $loginEntry )
	{
		global $customLDAPSettings;
		
		if ( !$this->useCustomLDAP )
		{
			$i = 0;
			$userGroups = array();
			while ($i < sizeof($loginEntry['memberof']))
			{
				$userGroups[] = $this->ldapObj->ldap_getCN($loginEntry['memberof'][$i]);
				$i++;
			}
			if(array_key_exists('primarygroupid', $loginEntry))
			{
				$filter = "(&(objectSID=".$this->ldapObj->getGroupSid($loginEntry['objectsid'], $loginEntry['primarygroupid'])."))";
				$attributes = array("cn");
				$entries = $this->ldapObj->runner_ldap_getData($filter,$attributes);
				if(count($entries))
				{
					$userGroups[] = $entries[0]["cn"];
				}
			}
			
			return $userGroups;
		}		
		
		$userGroups = array( $pUsername );
		
		$groupNameAttr = $customLDAPSettings["groupNameAttr"];
		$groupFilter = $customLDAPSettings["groupFilter"];
		if( !$groupFilter || !$groupNameAttr )
			return $userGroups;
		
		//	read groups the user belongs to
		$filter = $this->ldapObj->getProcessedPattern($groupFilter, $pUsername);
		$entries = $this->ldapObj->runner_ldap_getData($filter);
		
		if($entries !== FALSE)
		{
			foreach($entries as $group)
			{
				$userGroups[] = $this->ldapObj->processAttrValue( $group[ $groupNameAttr ] );
			}
		}
		
		return $userGroups;	
	}
	
	/**
	 * Get the uset login filter
	 * @param String pUsername
	 * @return String
	 */
	function getLoginFilter( $pUsername )
	{
		global $customLDAPSettings;
		
		if( !$this->useCustomLDAP )
			return "(&(objectCategory=person)(|(sAMAccountName=".$pUsername.")(userprincipalname=".$pUsername."@".GetGlobalData("ADDomain","").")(userprincipalname=".$pUsername.")))";
		
		$loginFilter = $customLDAPSettings['loginFilter'];	
		if( $loginFilter )
		{
			return $this->ldapObj->getProcessedPattern($loginFilter, $pUsername);
		}
		
		return "";
	}
	
	function addGroupsFromAD(&$userGroups)
	{
		global $cman, $adNestedPermissions;
		
		if( !$adNestedPermissions ) 
			return;
			
		$dConnection = $cman->getForUserGroups();
		
		$labelField = $dConnection->addFieldWrappers( "Label" );
		$sql = "select " . $labelField ." from ". $dConnection->addTableWrappers("desaparecidos_uggroups") ."order by". $labelField;
		$qResult = $dConnection->query( $sql );	
		
		$dbgroups = array();
		while( $tdata = $qResult->fetchNumeric() )
		{
			$dbgroups[$tdata[0]] = true;
		}
		
		$filter = "(member:1.2.840.113556.1.4.1941:=".$_SESSION["DistName"].")";
		$entries_dn = $this->ldapObj->runner_ldap_getData($filter, array("cn"));
		if( !$entries_dn )
			return;
		for($n = 0; $n < count($entries_dn); ++$n)
		{
			$adgroup = $entries_dn[$n]["cn"];
			if( $dbgroups[ $adgroup ] && !in_array($adgroup, $userGroups) )
				$userGroups[] = $adgroup;
		}	
	}
}
