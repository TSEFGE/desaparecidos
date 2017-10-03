<?php
/**
 * Display list of members from Active Directory
 * user if @BUILDER.nLoginMethod==LOGIN_AD
*/

@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/admin_admembers_variables.php");

if( !Security::processAdminPageSecurity( true ) )
	return;




$layout = new TLayout("ug_admembers", "Office1DeliciousGray1", "MobileDeliciousGray1");
$layout->version = 2;
$layout->blocks["center"] = array();
$layout->containers["message"] = array();
$layout->container_properties["message"] = array(  );
$layout->containers["message"][] = array("name"=>"message", 
	"block"=>"message_block", "substyle"=>1  );

$layout->skins["message"] = "2";

$layout->blocks["center"][] = "message";
$layout->containers["grid"] = array();
$layout->container_properties["grid"] = array(  );
$layout->containers["grid"][] = array("name"=>"ugadmemgrid", 
	"block"=>"grid_block", "substyle"=>1  );

$layout->skins["grid"] = "grid";

$layout->blocks["center"][] = "grid";
$layout->containers["pagination"] = array();
$layout->container_properties["pagination"] = array(  );
$layout->containers["pagination"][] = array("name"=>"pagination", 
	"block"=>"pagination_block", "substyle"=>1  );

$layout->skins["pagination"] = "2";

$layout->blocks["center"][] = "pagination";
$layout->blocks["top"] = array();
$layout->containers["search"] = array();
$layout->container_properties["search"] = array(  );
$layout->containers["search"][] = array("name"=>"search", 
	"block"=>"searchform_block", "substyle"=>1  );

$layout->containers["search"][] = array("name"=>"recordcontrolsad", 
	"block"=>"recordcontrolsad_block", "substyle"=>1  );

$layout->skins["search"] = "2";

$layout->blocks["top"][] = "search";
$page_layouts["admin_admembers_list"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button2");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");



require_once('include/xtempl.php');
require_once("classes/searchclause.php");
require_once("classes/searchcontrol.php");
require_once("classes/panelsearchcontrol.php");
require_once("classes/searchpanel.php");

require_once("classes/runnerldap.php");
require_once('classes/listpage.php');
require_once('classes/listpage_embed.php');
require_once('classes/listpage_lookup.php');
require_once("classes/searchpanellookup.php");
require_once('classes/memberspage_ad.php');
$xt = new Xtempl();

$options = array();
//array of params for classes
$options["pageType"] = PAGE_LIST;
$options["id"] = postvalue("id") ? postvalue("id") : 1;
$options["mode"] = MEMBERS_PAGE;
$options['xt'] = &$xt;

$pageObject = ListPage::createListPage($strTableName, $options);

if( postvalue("a") == "addgr" )
{
	$returnJSON = array();
	
	$grConnection = $cman->getForUserGroups();
	
	//save values
	$sql = "insert into ". $grConnection->addTableWrappers( "desaparecidos_uggroups" ) 
		." (". $grConnection->addFieldWrappers( "Label" ) .") values (". $grConnection->prepareString( postvalue("name") ) .")";
	$grConnection->exec( $sql );
	
	$sql = "select max(". $grConnection->addFieldWrappers( "GroupID" ) .") from ". $grConnection->addTableWrappers( "desaparecidos_uggroups" );
	$data = $grConnection->query( $sql )->fetchNumeric();
	if ($data)
	{
		$returnJSON['success'] = true;
		$returnJSON['id'] = $data[0];
	}
	else 
	{
		$returnJSON['success'] = false;
		$returnJSON['message'] = "Error adding group!";
	}
	
	echo printJSON( $returnJSON );	
	exit();
}
	
// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();

?>