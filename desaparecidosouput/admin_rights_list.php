<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/admin_rights_variables.php");

if( !Security::processAdminPageSecurity( false ) )
	return;


$tables = array();
$pageMask = array();
$table = "cat_cabcol";
$mask="";
			
$pageMask[$table] = $mask;
$tables[$table] = array("cat_cabcol", " " . "Cat Cabcol");
$table = "cat_cabtam";
$mask="";
			
$pageMask[$table] = $mask;
$tables[$table] = array("cat_cabtam", " " . "Cat Cabtam");
$table = "cat_cejas";
$mask="";
			
$pageMask[$table] = $mask;
$tables[$table] = array("cat_cejas", " " . "Cat Cejas");
$table = "cat_cabtip";
$mask="";
			
$pageMask[$table] = $mask;
$tables[$table] = array("cat_cabtip", " " . "Cat Cabtip");
$table = "cat_comp";
$mask="";
			
$pageMask[$table] = $mask;
$tables[$table] = array("cat_comp", " " . "Cat Comp");
$table = "cat_delito";
$mask="";
			
$pageMask[$table] = $mask;
$tables[$table] = array("cat_delito", " " . "Cat Delito");
$table = "cat_edos";
$mask="";
			
$pageMask[$table] = $mask;
$tables[$table] = array("cat_edos", " " . "Cat Edos");
$table = "cat_escolaridad";
$mask="";
			
$pageMask[$table] = $mask;
$tables[$table] = array("cat_escolaridad", " " . "Cat Escolaridad");
$table = "cat_est_apar";
$mask="";
			
$pageMask[$table] = $mask;
$tables[$table] = array("cat_est_apar", " " . "Cat Est Apar");
$table = "cat_estatus";
$mask="";
			
$pageMask[$table] = $mask;
$tables[$table] = array("cat_estatus", " " . "Cat Estatus");
$table = "cat_labios";
$mask="";
			
$pageMask[$table] = $mask;
$tables[$table] = array("cat_labios", " " . "Cat Labios");
$table = "cat_menton";
$mask="";
			
$pageMask[$table] = $mask;
$tables[$table] = array("cat_menton", " " . "Cat Menton");
$table = "cat_mpos";
$mask="";
			
$pageMask[$table] = $mask;
$tables[$table] = array("cat_mpos", " " . "Cat Mpos");
$table = "cat_nariz";
$mask="";
			
$pageMask[$table] = $mask;
$tables[$table] = array("cat_nariz", " " . "Cat Nariz");
$table = "cat_ojos";
$mask="";
			
$pageMask[$table] = $mask;
$tables[$table] = array("cat_ojos", " " . "Cat Ojos");
$table = "cat_piel";
$mask="";
			
$pageMask[$table] = $mask;
$tables[$table] = array("cat_piel", " " . "Cat Piel");
$table = "cat_sexo";
$mask="";
			
$pageMask[$table] = $mask;
$tables[$table] = array("cat_sexo", " " . "Cat Sexo");
$table = "cat_valida";
$mask="";
			
$pageMask[$table] = $mask;
$tables[$table] = array("cat_valida", " " . "Cat Valida");
$table = "cat_vfacial";
$mask="";
			
$pageMask[$table] = $mask;
$tables[$table] = array("cat_vfacial", " " . "Cat Vfacial");
$table = "catnacionalidad";
$mask="";
			
$pageMask[$table] = $mask;
$tables[$table] = array("catnacionalidad", " " . "Catnacionalidad");
$table = "colaboraciones";
$mask="";
	$mask .= "A";
	$mask .= "E";
		$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("colaboraciones", " " . "Colaboraciones");
$table = "desaparecidos";
$mask="";
	$mask .= "A";
	$mask .= "E";
		$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("desaparecidos", " " . "Desaparecidos");
$table = "unidad";
$mask="";
			
$pageMask[$table] = $mask;
$tables[$table] = array("unidad", " " . "Unidad");




$layout = new TLayout("ug_rights", "Office1DeliciousGray1", "MobileDeliciousGray1");
$layout->version = 2;
$layout->blocks["center"] = array();
$layout->containers["ugcontrols"] = array();
$layout->container_properties["ugcontrols"] = array(  );
$layout->containers["ugcontrols"][] = array("name"=>"ugbuttons", 
	"block"=>"savebuttons_block", "substyle"=>1  );

$layout->containers["ugcontrols"][] = array("name"=>"ugrightbuttons", 
	"block"=>"savebuttons_block", "substyle"=>1  );

$layout->skins["ugcontrols"] = "1";

$layout->blocks["center"][] = "ugcontrols";
$layout->containers["message"] = array();
$layout->container_properties["message"] = array(  );
$layout->containers["message"][] = array("name"=>"message", 
	"block"=>"message_block", "substyle"=>1  );

$layout->skins["message"] = "1";

$layout->blocks["center"][] = "message";
$layout->containers["grid"] = array();
$layout->container_properties["grid"] = array(  );
$layout->containers["grid"][] = array("name"=>"ugrightsblock", 
	"block"=>"rights_block", "substyle"=>1  );

$layout->skins["grid"] = "grid";

$layout->blocks["center"][] = "grid";
$layout->containers["pagination"] = array();
$layout->container_properties["pagination"] = array(  );
$layout->containers["pagination"][] = array("name"=>"pagination", 
	"block"=>"pagination_block", "substyle"=>1  );

$layout->skins["pagination"] = "2";

$layout->blocks["center"][] = "pagination";
$layout->blocks["left"] = array();
$layout->containers["left"] = array();
$layout->container_properties["left"] = array(  );
$layout->containers["left"][] = array("name"=>"loggedas", 
	"block"=>"security_block", "substyle"=>1  );

$layout->containers["left"][] = array("name"=>"vmenu", 
	"block"=>"menu_block", "substyle"=>1  );

$layout->skins["left"] = "menu";

$layout->blocks["left"][] = "left";
$layout->containers["uggroup"] = array();
$layout->container_properties["uggroup"] = array(  );
$layout->containers["uggroup"][] = array("name"=>"ugrightsgroup", 
	"block"=>"", "substyle"=>1  );

$layout->skins["uggroup"] = "1";

$layout->blocks["left"][] = "uggroup";
$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";

$layout->blocks["top"][] = "master";
$layout->skins["toplinks"] = "2";

$layout->blocks["top"][] = "toplinks";
$page_layouts["admin_rights_list"] = $layout;

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
require_once('classes/listpage.php');
require_once('classes/rightspage.php');
require_once('classes/rightspage_ad.php');

$xt = new Xtempl();

$options = array();
$options["pageType"] = PAGE_LIST;
$options["id"] = postvalue("id") ? postvalue("id") : 1;
$options["mode"] = RIGHTS_PAGE;
$options['xt'] = &$xt;


$options["tables"] = $tables;
$options["pageMasks"] = $pageMask;

$pageObject = ListPage::createListPage($strTableName, $options);

if( postvalue("a") == "saveRights" )
{
	$modifiedRights = my_json_decode(postvalue('values'));
	$pageObject->saveRights($modifiedRights);
	return;
}

 
// add buttons if exist

// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();
	


?>
