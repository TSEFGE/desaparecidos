<?php
/**
 * Class for display members_list with Active directory data 
 */
class MembersPage_AD extends ListPage_Lookup
{
	var $resultData = array();
	
	var $strFilterClause = '';
	
	var $issetRecords = array();
	
	var $recNumber = 1;
	
	var $useCustomLDAP = false;
	
	var $ldapObj = null;
	
	
	function MembersPage_AD($params)
	{
		parent::ListPage_Embed($params);
		
		$this->issetRecords = $this->getDBMembers();
		$this->useCustomLDAP = GetGlobalData("customLDAP", false);
	}
	
	function getGroupUsersByName($aGrName)
	{
		$this->ldapObj = new RunnerLdap( GetGlobalData("ADDomain",""), GetGlobalData("ADServer",null), $this->useCustomLDAP );
		if( GetGlobalData("ADSingleSign", 0) )
			$ldapconn = $this->ldapObj->runner_ldap_connect( GetGlobalData("ADLogin", ''), GetGlobalData("ADPassword", '') );
		else
			$ldapconn = $this->ldapObj->runner_ldap_connect($_SESSION["UserID"], $_SESSION["UserPass"]);
		
		if($ldapconn) 
		{
			$filter = $this->getMembersFilter( $aGrName );
			$attributes = $this->useCustomLDAP ? array() : array('samaccountname', 'distinguishedname','objectcategory','mail');
			$data = $this->ldapObj->runner_ldap_getData($filter, $attributes);
			
			if($data)
			{
				$result = $this->getMembersResult( $data );
				$this->ldapObj->runner_ldap_unbind();
				return $result;
			}
		}
		$this->ldapObj->runner_ldap_unbind();
		return null;
	}
	
	/**
	 * Get a members filter
	 * @param String aGrName
	 * @return String
	 */ 
	function getMembersFilter( $aGrName )
	{
		global $customLDAPSettings;
		
		if( !$this->useCustomLDAP )
			return "(&(|(objectCategory=group)(objectCategory=user))(|(cn=".$aGrName."*)(samaccountname=".$aGrName."*)))";
			
		$memberFilter = $customLDAPSettings["memberFilter"];
		if( $memberFilter )
			return str_replace( "%s", $aGrName, $this->ldapObj->getProcessedPattern($memberFilter, "") );
			
		return "";
	}
	
	/**
	 * @param &Array data
	 * @return Array
	 */ 
	function getMembersResult( &$data ) 
	{
		global $customLDAPSettings;
		
		if( $this->useCustomLDAP )
		{
			$memberUserAttrMap = $customLDAPSettings["memberUserAttrMap"];
			$memberGroupAttrMap = $customLDAPSettings["memberGroupAttrMap"];
		}
		
		$i = 0;
		$result = array();
		while( $i < sizeof($data) )
		{
			$email = '';

			if( !$this->useCustomLDAP )
			{
				if( isset($data[$i]["mail"]) )
					$email = $data[$i]["mail"];
						
				$result[] = array(
					"name" => $data[$i]["samaccountname"], 
					"displayname" => $this->ldapObj->ldap_getCN( $data[$i]["distinguishedname"] ), 
					"category" => $this->ldapObj->ldap_getCN( $data[$i]["objectcategory"] ), 
					"email" => $email
				);
			}
			else if( $customLDAPSettings["memberAttrMap"] ) 
			{
				$memberAttrMap = $customLDAPSettings["memberAttrMap"];
				$nameAttr = $this->getAttrValue( $data[$i], $memberAttrMap["name"] );	
				
				if( $nameAttr )	
				{					
					$result[] = array(
						"name" => $this->ldapObj->processAttrValue( $nameAttr ), 
						"displayname" => $this->ldapObj->processAttrValue( $this->getAttrValue( $data[$i], $memberAttrMap["displayname"] ) ), 
						"category" => $this->ldapObj->processAttrValue( $this->getAttrValue( $data[$i], $memberAttrMap["category"] ) ), 
						"email" => $this->ldapObj->processAttrValue( $this->getAttrValue( $data[$i], $memberAttrMap["email"] ) )
					);
				}
			}			
			$i++;
		}
		
		return $result;	
	}
	
	/**
	 * @param &Array data
	 * @param Mixed attrNames
	 * @return Mixed
	 */
	protected function getAttrValue( &$data, $attrNames )
	{
		$attrs = $attrNames;
		if( !is_array($attrs) )
			$attrs = array( $attrNames );
			
		foreach( $attrs as $attrName )
		{
			if( $data[ $attrName ] )
				return $data[ $attrName ];
		}
		
		return '';	
	}
	
	/**
	 *
	 */
	function getDBMembers()
	{
		global $cman;
		$grConnection = $cman->getForUserGroups();
		
		$sql = "select ". $grConnection->addFieldWrappers( "" ) ." from ".$grConnection->addTableWrappers( "" );
		$qResult = $grConnection->query($sql);
		
		$members = array();
		while( $tdata = $qResult->fetchNumeric() )
		{
			$members[] = $tdata[0];
		}
		
		return $members;
	}
	
	function isIssetRecord($name)
	{
		if (!in_array($name,$this->issetRecords))
			return true;
		return false;
	}
	
	/**
	 * Common assign for diferent mode on list page
	 * Branch classes add to this method its individualy code
	 */
	function commonAssign() 
	{
		parent::commonAssign();
		$this->xt->assign("add_link", true);
		$this->xt->assign("addselectlink_attrs","id = \"addSelBtn\" ");
		$this->xt->assign("recordcontrolsad_block",true);
		$this->xt->assign("checkbox_header", true);
		$this->xt->assign("checkboxheader_attrs", "id=\"chooseAll_".$this->id."\" class=\"chooseAll".$this->id."\"");
		$this->xt->assign("message_block", true);
	}
	
	/**
	 * Checks if need to display grid
	 */
	function isDispGrid() 
	{
		return true;
	}
	
	/**
	 * Builds SQL query, for retrieve data from DB
	 */
	function buildSQL() 
	{
		$this->strFilterClause = $this->searchClauseObj->_where[ $this->sessionPrefix."_simpleSrch" ];	
	}
	
	/**
	 * Calcs pagination info
	 */
	function buildPagination() 
	{
		parent::buildPagination();
		$this->recNumber = $this->pageSize * ($this->myPage - 1);
	}
	
	/**
	 * Seeks recs, depending on page number etc.
	 * @param string $strSQL
	 */
	function seekPageInRecSet() 
	{					
		$this->resultData = $this->getGroupUsersByName( $this->strFilterClause );
		$this->numRowsFromSQL = sizeof( $this->resultData );
		$this->recSet = sizeof( $this->resultData );
	}
	
	function beforeProccessRow()
	{
		
		if (($this->recNumber <= ($this->pageSize * $this->myPage)-1) && ($this->recNumber <= $this->numRowsFromSQL-1))
		{
			$data = $this->resultData[ $this->recNumber ];
			return $data;
		}
		return false;
	}
	
	function fillGridData()
	{	
		$rowClass = false;
		//	fill $rowInfo array
		$rowInfo = array();	
		// add grid data
		$data = $this->beforeProccessRow();

		$this->controlsMap['gridRows'] = array();
		
		// like usual grid data fill 
		while($data)
		{
			$row = array();
			
			$row["rowclass"] = "";
			if(!$rowClass) 
			{
				$row["rowclass"] .= "interlaced";
				$rowClass = true;
			} 
			else 
				$rowClass = false;
			
			$row["rowattrs"] = " id=\"gridRow".$this->recNumber."\"";
			
			$gridRowInd = count($this->controlsMap['gridRows']);
			$this->controlsMap['gridRows'][ $gridRowInd ]['id'] = $this->recNumber;
			$this->controlsMap['gridRows'][ $gridRowInd ]['rowInd'] = $gridRowInd;
			$this->controlsMap['gridRows'][ $gridRowInd ]['keys'] = array('name' => $data["name"]);
						
			$row["grid_record"] = array();
			$row["grid_record"]["data"] = array();
		
			$row["add_link"] = $this->isIssetRecord($data["name"]);
			$row["checkbox"] = $this->isIssetRecord($data["name"]);
			
			$row["addlink_attrs"] = "href='#' id='iAddLink".$this->recNumber."' ";
			$row["checkbox_attrs"] = "name=\"selection[]\" value=\"".$this->recNumber."\" id=\"check".$this->id."_".$this->recNumber."\"";
			$row["username"] = runner_htmlspecialchars($data["name"]);
			$row["displayusername"] = runner_htmlspecialchars($data["displayname"]); 
			$row["categoryuser"] = runner_htmlspecialchars($data["category"]);
			$row["emailuser"] = runner_htmlspecialchars($data["email"]);
			$row["recNo"] = $this->recNumber; 
			$this->recNumber++;
	
			//	assign row spacings for vertical layout
			$row["grid_rowspace"] = true;
			$row["grid_recordspace"] = array("data" => array());
			for($i = 0; $i < $this->colsOnPage * 2 - 1; $i++)
				$row["grid_recordspace"]["data"][] = true;
			
			if($this->eventExists("BeforeMoveNextList"))
				$this->eventsObject->BeforeMoveNextList($data, $row, $record, $this);
			
			$rowInfo[] = $row;
			
			$data = $this->beforeProccessRow();
			
		}
		
		// assign grid rows		
		$this->xt->assign_loopsection("grid_row", $rowInfo);
	}
	
	function prepareForBuildPage()
	{	
		//Sorting fields
		$this->orderClause->buildOrderParams();
		
		// delete record
		$this->deleteRecords();
			
		// build sql query
		$this->buildSQL();
		
		// seek page must be executed after build pagination
		$this->seekPageInRecSet();
		
		// build pagination block
		$this->buildPagination();
				
		// fill grid data
		$this->fillGridData();
		
		// add common js code
		$this->addCommonJs();
		
		// add common html code
		$this->addCommonHtml();
		
		// Set common assign
		$this->commonAssign();	
	}
	
	function showPage() 
	{
		$this->BeforeShowList();
		
		$bricksExcept = array("ugadmemgrid", "message", "search", "recordcontrolsad", "pagination");
					
		$this->xt->hideAllBricksExcept($bricksExcept);
		
		if ($this->numRowsFromSQL)
			$this->xt->displayBrickHidden("message");
		
		$this->xt->prepare_template($this->templatefile);
		$this->showPageAjax();
		exit(); // .net compatibility issue
	}
}
?>