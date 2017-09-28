<?php
/**
 * Class for display admin_rights_list with Active directory data 
 */
class RightsPage_AD extends RightsPage
{	
	/**
	 * Contructor
	 *
	 * @param array $params
	 * @return RightsPage_AD
	 */
	function RightsPage_AD(&$params)
	{
		// call parent constructor
		parent::RightsPage($params);
		
	}
	
	function fillGroupsArr()
	{
		global $cman;
		$grConnection = $cman->getForUserGroups(); 		
		
		//	select groups list
		$this->groups[-2] = "<"."Por defecto".">";
		$this->groups[-3] = "<"."Invitado".">";
		
		$sql = "select ". $grConnection->addFieldWrappers( "GroupID" ) .", ". $grConnection->addFieldWrappers( "Label" )
			." from ". $grConnection->addTableWrappers( "desaparecidos_uggroups" ) ." order by ". $grConnection->addFieldWrappers( "Label" );
		
		$qResult = $grConnection->query( $sql );
		while( $tdata = $qResult->fetchNumeric() )
		{
			$this->groups[ $tdata[0] ] = $tdata[1];
		}
	}
	
	function commonAssign() 
	{
		parent::commonAssign();
		$this->xt->assign("menu_block",false);	
	}
}
?>