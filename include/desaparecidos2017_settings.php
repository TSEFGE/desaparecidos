<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadesaparecidos2017 = array();	
	$tdatadesaparecidos2017[".truncateText"] = true;
	$tdatadesaparecidos2017[".NumberOfChars"] = 80; 
	$tdatadesaparecidos2017[".ShortName"] = "desaparecidos2017";
	$tdatadesaparecidos2017[".OwnerID"] = "";
	$tdatadesaparecidos2017[".OriginalTable"] = "desaparecidos2017";

//	field labels
$fieldLabelsdesaparecidos2017 = array();
$fieldToolTipsdesaparecidos2017 = array();
$pageTitlesdesaparecidos2017 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdesaparecidos2017["Spanish"] = array();
	$fieldToolTipsdesaparecidos2017["Spanish"] = array();
	$pageTitlesdesaparecidos2017["Spanish"] = array();
	$fieldLabelsdesaparecidos2017["Spanish"]["Id"] = "Id";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Id"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Tipo"] = "Tipo";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Tipo"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["TipoDoc"] = "Tipo Doc";
	$fieldToolTipsdesaparecidos2017["Spanish"]["TipoDoc"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Mun"] = "Mun";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Mun"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Estado"] = "Estado";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Estado"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Ofic"] = "Ofic";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Ofic"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["FRecib"] = "FRecib";
	$fieldToolTipsdesaparecidos2017["Spanish"]["FRecib"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["FInicio"] = "FInicio";
	$fieldToolTipsdesaparecidos2017["Spanish"]["FInicio"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["FExtrav"] = "FExtrav";
	$fieldToolTipsdesaparecidos2017["Spanish"]["FExtrav"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Nombre"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["APat"] = "APat";
	$fieldToolTipsdesaparecidos2017["Spanish"]["APat"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["AMat"] = "AMat";
	$fieldToolTipsdesaparecidos2017["Spanish"]["AMat"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["UsrBaja"] = "Usr Baja";
	$fieldToolTipsdesaparecidos2017["Spanish"]["UsrBaja"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["FecBaja"] = "Fec Baja";
	$fieldToolTipsdesaparecidos2017["Spanish"]["FecBaja"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Status"] = "Status";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Status"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["FAparicion"] = "FAparicion";
	$fieldToolTipsdesaparecidos2017["Spanish"]["FAparicion"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Oficio"] = "Oficio";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Oficio"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["EstApar"] = "Est Apar";
	$fieldToolTipsdesaparecidos2017["Spanish"]["EstApar"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Sexo"] = "Sexo";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Sexo"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Edad"] = "Edad";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Edad"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Nac"] = "Nac";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Nac"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Origen"] = "Origen";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Origen"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Escolaridad"] = "Escolaridad";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Escolaridad"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Est"] = "Est";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Est"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Compl"] = "Compl";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Compl"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Ojos"] = "Ojos";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Ojos"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Piel"] = "Piel";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Piel"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Cab"] = "Cab";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Cab"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["TCab"] = "TCab";
	$fieldToolTipsdesaparecidos2017["Spanish"]["TCab"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Nariz"] = "Nariz";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Nariz"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Labios"] = "Labios";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Labios"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Menton"] = "Menton";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Menton"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Cejas"] = "Cejas";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Cejas"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["VFacial"] = "VFacial";
	$fieldToolTipsdesaparecidos2017["Spanish"]["VFacial"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Particularidades"] = "Particularidades";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Particularidades"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Nota"] = "Nota";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Nota"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["DescHechos"] = "Desc Hechos";
	$fieldToolTipsdesaparecidos2017["Spanish"]["DescHechos"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Obseva"] = "Obseva";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Obseva"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["InvMin"] = "Inv Min";
	$fieldToolTipsdesaparecidos2017["Spanish"]["InvMin"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["MinPub"] = "Min Pub";
	$fieldToolTipsdesaparecidos2017["Spanish"]["MinPub"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Agencia"] = "Agencia";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Agencia"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["RutFoto"] = "Rut Foto";
	$fieldToolTipsdesaparecidos2017["Spanish"]["RutFoto"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["FCaptura"] = "FCaptura";
	$fieldToolTipsdesaparecidos2017["Spanish"]["FCaptura"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Usuario"] = "Usuario";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Usuario"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Delito"] = "Delito";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Delito"] = "";
	if (count($fieldToolTipsdesaparecidos2017["Spanish"]))
		$tdatadesaparecidos2017[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdesaparecidos2017[""] = array();
	$fieldToolTipsdesaparecidos2017[""] = array();
	$pageTitlesdesaparecidos2017[""] = array();
	if (count($fieldToolTipsdesaparecidos2017[""]))
		$tdatadesaparecidos2017[".isUseToolTips"] = true;
}
	
	
	$tdatadesaparecidos2017[".NCSearch"] = true;



$tdatadesaparecidos2017[".shortTableName"] = "desaparecidos2017";
$tdatadesaparecidos2017[".nSecOptions"] = 0;
$tdatadesaparecidos2017[".recsPerRowList"] = 1;
$tdatadesaparecidos2017[".recsPerRowPrint"] = 1;
$tdatadesaparecidos2017[".mainTableOwnerID"] = "";
$tdatadesaparecidos2017[".moveNext"] = 1;
$tdatadesaparecidos2017[".entityType"] = 0;

$tdatadesaparecidos2017[".strOriginalTableName"] = "desaparecidos2017";




$tdatadesaparecidos2017[".showAddInPopup"] = false;

$tdatadesaparecidos2017[".showEditInPopup"] = false;

$tdatadesaparecidos2017[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadesaparecidos2017[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadesaparecidos2017[".fieldsForRegister"] = array();

$tdatadesaparecidos2017[".listAjax"] = false;

	$tdatadesaparecidos2017[".audit"] = false;

	$tdatadesaparecidos2017[".locking"] = false;



$tdatadesaparecidos2017[".list"] = true;


$tdatadesaparecidos2017[".import"] = true;

$tdatadesaparecidos2017[".exportTo"] = true;

$tdatadesaparecidos2017[".printFriendly"] = true;


$tdatadesaparecidos2017[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatadesaparecidos2017[".searchSaving"] = false;
//

$tdatadesaparecidos2017[".showSearchPanel"] = true;
		$tdatadesaparecidos2017[".flexibleSearch"] = true;		

if (isMobile())
	$tdatadesaparecidos2017[".isUseAjaxSuggest"] = false;
else 
	$tdatadesaparecidos2017[".isUseAjaxSuggest"] = true;

$tdatadesaparecidos2017[".rowHighlite"] = true;



$tdatadesaparecidos2017[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadesaparecidos2017[".isUseTimeForSearch"] = false;





$tdatadesaparecidos2017[".allSearchFields"] = array();
$tdatadesaparecidos2017[".filterFields"] = array();
$tdatadesaparecidos2017[".requiredSearchFields"] = array();

$tdatadesaparecidos2017[".allSearchFields"][] = "Id";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Tipo";
	$tdatadesaparecidos2017[".allSearchFields"][] = "TipoDoc";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Mun";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Estado";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Ofic";
	$tdatadesaparecidos2017[".allSearchFields"][] = "FRecib";
	$tdatadesaparecidos2017[".allSearchFields"][] = "FInicio";
	$tdatadesaparecidos2017[".allSearchFields"][] = "FExtrav";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Nombre";
	$tdatadesaparecidos2017[".allSearchFields"][] = "APat";
	$tdatadesaparecidos2017[".allSearchFields"][] = "AMat";
	$tdatadesaparecidos2017[".allSearchFields"][] = "UsrBaja";
	$tdatadesaparecidos2017[".allSearchFields"][] = "FecBaja";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Status";
	$tdatadesaparecidos2017[".allSearchFields"][] = "FAparicion";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Oficio";
	$tdatadesaparecidos2017[".allSearchFields"][] = "EstApar";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Sexo";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Edad";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Nac";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Origen";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Escolaridad";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Est";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Compl";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Ojos";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Piel";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Cab";
	$tdatadesaparecidos2017[".allSearchFields"][] = "TCab";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Nariz";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Labios";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Menton";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Cejas";
	$tdatadesaparecidos2017[".allSearchFields"][] = "VFacial";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Particularidades";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Nota";
	$tdatadesaparecidos2017[".allSearchFields"][] = "DescHechos";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Obseva";
	$tdatadesaparecidos2017[".allSearchFields"][] = "InvMin";
	$tdatadesaparecidos2017[".allSearchFields"][] = "MinPub";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Agencia";
	$tdatadesaparecidos2017[".allSearchFields"][] = "RutFoto";
	$tdatadesaparecidos2017[".allSearchFields"][] = "FCaptura";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Usuario";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Delito";
	

$tdatadesaparecidos2017[".googleLikeFields"] = array();
$tdatadesaparecidos2017[".googleLikeFields"][] = "Id";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Tipo";
$tdatadesaparecidos2017[".googleLikeFields"][] = "TipoDoc";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Mun";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Estado";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Ofic";
$tdatadesaparecidos2017[".googleLikeFields"][] = "FRecib";
$tdatadesaparecidos2017[".googleLikeFields"][] = "FInicio";
$tdatadesaparecidos2017[".googleLikeFields"][] = "FExtrav";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Nombre";
$tdatadesaparecidos2017[".googleLikeFields"][] = "APat";
$tdatadesaparecidos2017[".googleLikeFields"][] = "AMat";
$tdatadesaparecidos2017[".googleLikeFields"][] = "UsrBaja";
$tdatadesaparecidos2017[".googleLikeFields"][] = "FecBaja";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Status";
$tdatadesaparecidos2017[".googleLikeFields"][] = "FAparicion";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Oficio";
$tdatadesaparecidos2017[".googleLikeFields"][] = "EstApar";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Sexo";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Edad";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Nac";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Origen";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Escolaridad";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Est";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Compl";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Ojos";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Piel";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Cab";
$tdatadesaparecidos2017[".googleLikeFields"][] = "TCab";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Nariz";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Labios";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Menton";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Cejas";
$tdatadesaparecidos2017[".googleLikeFields"][] = "VFacial";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Particularidades";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Nota";
$tdatadesaparecidos2017[".googleLikeFields"][] = "DescHechos";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Obseva";
$tdatadesaparecidos2017[".googleLikeFields"][] = "InvMin";
$tdatadesaparecidos2017[".googleLikeFields"][] = "MinPub";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Agencia";
$tdatadesaparecidos2017[".googleLikeFields"][] = "RutFoto";
$tdatadesaparecidos2017[".googleLikeFields"][] = "FCaptura";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Usuario";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Delito";


$tdatadesaparecidos2017[".advSearchFields"] = array();
$tdatadesaparecidos2017[".advSearchFields"][] = "Id";
$tdatadesaparecidos2017[".advSearchFields"][] = "Tipo";
$tdatadesaparecidos2017[".advSearchFields"][] = "TipoDoc";
$tdatadesaparecidos2017[".advSearchFields"][] = "Mun";
$tdatadesaparecidos2017[".advSearchFields"][] = "Estado";
$tdatadesaparecidos2017[".advSearchFields"][] = "Ofic";
$tdatadesaparecidos2017[".advSearchFields"][] = "FRecib";
$tdatadesaparecidos2017[".advSearchFields"][] = "FInicio";
$tdatadesaparecidos2017[".advSearchFields"][] = "FExtrav";
$tdatadesaparecidos2017[".advSearchFields"][] = "Nombre";
$tdatadesaparecidos2017[".advSearchFields"][] = "APat";
$tdatadesaparecidos2017[".advSearchFields"][] = "AMat";
$tdatadesaparecidos2017[".advSearchFields"][] = "UsrBaja";
$tdatadesaparecidos2017[".advSearchFields"][] = "FecBaja";
$tdatadesaparecidos2017[".advSearchFields"][] = "Status";
$tdatadesaparecidos2017[".advSearchFields"][] = "FAparicion";
$tdatadesaparecidos2017[".advSearchFields"][] = "Oficio";
$tdatadesaparecidos2017[".advSearchFields"][] = "EstApar";
$tdatadesaparecidos2017[".advSearchFields"][] = "Sexo";
$tdatadesaparecidos2017[".advSearchFields"][] = "Edad";
$tdatadesaparecidos2017[".advSearchFields"][] = "Nac";
$tdatadesaparecidos2017[".advSearchFields"][] = "Origen";
$tdatadesaparecidos2017[".advSearchFields"][] = "Escolaridad";
$tdatadesaparecidos2017[".advSearchFields"][] = "Est";
$tdatadesaparecidos2017[".advSearchFields"][] = "Compl";
$tdatadesaparecidos2017[".advSearchFields"][] = "Ojos";
$tdatadesaparecidos2017[".advSearchFields"][] = "Piel";
$tdatadesaparecidos2017[".advSearchFields"][] = "Cab";
$tdatadesaparecidos2017[".advSearchFields"][] = "TCab";
$tdatadesaparecidos2017[".advSearchFields"][] = "Nariz";
$tdatadesaparecidos2017[".advSearchFields"][] = "Labios";
$tdatadesaparecidos2017[".advSearchFields"][] = "Menton";
$tdatadesaparecidos2017[".advSearchFields"][] = "Cejas";
$tdatadesaparecidos2017[".advSearchFields"][] = "VFacial";
$tdatadesaparecidos2017[".advSearchFields"][] = "Particularidades";
$tdatadesaparecidos2017[".advSearchFields"][] = "Nota";
$tdatadesaparecidos2017[".advSearchFields"][] = "DescHechos";
$tdatadesaparecidos2017[".advSearchFields"][] = "Obseva";
$tdatadesaparecidos2017[".advSearchFields"][] = "InvMin";
$tdatadesaparecidos2017[".advSearchFields"][] = "MinPub";
$tdatadesaparecidos2017[".advSearchFields"][] = "Agencia";
$tdatadesaparecidos2017[".advSearchFields"][] = "RutFoto";
$tdatadesaparecidos2017[".advSearchFields"][] = "FCaptura";
$tdatadesaparecidos2017[".advSearchFields"][] = "Usuario";
$tdatadesaparecidos2017[".advSearchFields"][] = "Delito";

$tdatadesaparecidos2017[".tableType"] = "list";

$tdatadesaparecidos2017[".printerPageOrientation"] = 0;
$tdatadesaparecidos2017[".nPrinterPageScale"] = 100;

$tdatadesaparecidos2017[".nPrinterSplitRecords"] = 40;

$tdatadesaparecidos2017[".nPrinterPDFSplitRecords"] = 40;



$tdatadesaparecidos2017[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatadesaparecidos2017[".pageSize"] = 20;

$tdatadesaparecidos2017[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadesaparecidos2017[".strOrderBy"] = $tstrOrderBy;

$tdatadesaparecidos2017[".orderindexes"] = array();

$tdatadesaparecidos2017[".sqlHead"] = "SELECT Id,  	Tipo,  	TipoDoc,  	Mun,  	Estado,  	Ofic,  	FRecib,  	FInicio,  	FExtrav,  	Nombre,  	APat,  	AMat,  	UsrBaja,  	FecBaja,  	Status,  	FAparicion,  	Oficio,  	EstApar,  	Sexo,  	Edad,  	Nac,  	Origen,  	Escolaridad,  	Est,  	Compl,  	Ojos,  	Piel,  	Cab,  	TCab,  	Nariz,  	Labios,  	Menton,  	Cejas,  	VFacial,  	Particularidades,  	Nota,  	DescHechos,  	Obseva,  	InvMin,  	MinPub,  	Agencia,  	RutFoto,  	FCaptura,  	Usuario,  	Delito";
$tdatadesaparecidos2017[".sqlFrom"] = "FROM desaparecidos2017";
$tdatadesaparecidos2017[".sqlWhereExpr"] = "";
$tdatadesaparecidos2017[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadesaparecidos2017[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadesaparecidos2017[".arrGroupsPerPage"] = $arrGPP;

$tdatadesaparecidos2017[".highlightSearchResults"] = true;

$tableKeysdesaparecidos2017 = array();
$tdatadesaparecidos2017[".Keys"] = $tableKeysdesaparecidos2017;

$tdatadesaparecidos2017[".listFields"] = array();
$tdatadesaparecidos2017[".listFields"][] = "Id";
$tdatadesaparecidos2017[".listFields"][] = "Tipo";
$tdatadesaparecidos2017[".listFields"][] = "TipoDoc";
$tdatadesaparecidos2017[".listFields"][] = "Mun";
$tdatadesaparecidos2017[".listFields"][] = "Estado";
$tdatadesaparecidos2017[".listFields"][] = "Ofic";
$tdatadesaparecidos2017[".listFields"][] = "FRecib";
$tdatadesaparecidos2017[".listFields"][] = "FInicio";
$tdatadesaparecidos2017[".listFields"][] = "FExtrav";
$tdatadesaparecidos2017[".listFields"][] = "Nombre";
$tdatadesaparecidos2017[".listFields"][] = "APat";
$tdatadesaparecidos2017[".listFields"][] = "AMat";
$tdatadesaparecidos2017[".listFields"][] = "UsrBaja";
$tdatadesaparecidos2017[".listFields"][] = "FecBaja";
$tdatadesaparecidos2017[".listFields"][] = "Status";
$tdatadesaparecidos2017[".listFields"][] = "FAparicion";
$tdatadesaparecidos2017[".listFields"][] = "Oficio";
$tdatadesaparecidos2017[".listFields"][] = "EstApar";
$tdatadesaparecidos2017[".listFields"][] = "Sexo";
$tdatadesaparecidos2017[".listFields"][] = "Edad";
$tdatadesaparecidos2017[".listFields"][] = "Nac";
$tdatadesaparecidos2017[".listFields"][] = "Origen";
$tdatadesaparecidos2017[".listFields"][] = "Escolaridad";
$tdatadesaparecidos2017[".listFields"][] = "Est";
$tdatadesaparecidos2017[".listFields"][] = "Compl";
$tdatadesaparecidos2017[".listFields"][] = "Ojos";
$tdatadesaparecidos2017[".listFields"][] = "Piel";
$tdatadesaparecidos2017[".listFields"][] = "Cab";
$tdatadesaparecidos2017[".listFields"][] = "TCab";
$tdatadesaparecidos2017[".listFields"][] = "Nariz";
$tdatadesaparecidos2017[".listFields"][] = "Labios";
$tdatadesaparecidos2017[".listFields"][] = "Menton";
$tdatadesaparecidos2017[".listFields"][] = "Cejas";
$tdatadesaparecidos2017[".listFields"][] = "VFacial";
$tdatadesaparecidos2017[".listFields"][] = "Particularidades";
$tdatadesaparecidos2017[".listFields"][] = "Nota";
$tdatadesaparecidos2017[".listFields"][] = "DescHechos";
$tdatadesaparecidos2017[".listFields"][] = "Obseva";
$tdatadesaparecidos2017[".listFields"][] = "InvMin";
$tdatadesaparecidos2017[".listFields"][] = "MinPub";
$tdatadesaparecidos2017[".listFields"][] = "Agencia";
$tdatadesaparecidos2017[".listFields"][] = "RutFoto";
$tdatadesaparecidos2017[".listFields"][] = "FCaptura";
$tdatadesaparecidos2017[".listFields"][] = "Usuario";
$tdatadesaparecidos2017[".listFields"][] = "Delito";

$tdatadesaparecidos2017[".hideMobileList"] = array();


$tdatadesaparecidos2017[".viewFields"] = array();

$tdatadesaparecidos2017[".addFields"] = array();

$tdatadesaparecidos2017[".masterListFields"] = array();
$tdatadesaparecidos2017[".masterListFields"][] = "Id";
$tdatadesaparecidos2017[".masterListFields"][] = "Tipo";
$tdatadesaparecidos2017[".masterListFields"][] = "TipoDoc";
$tdatadesaparecidos2017[".masterListFields"][] = "Mun";
$tdatadesaparecidos2017[".masterListFields"][] = "Estado";
$tdatadesaparecidos2017[".masterListFields"][] = "Ofic";
$tdatadesaparecidos2017[".masterListFields"][] = "FRecib";
$tdatadesaparecidos2017[".masterListFields"][] = "FInicio";
$tdatadesaparecidos2017[".masterListFields"][] = "FExtrav";
$tdatadesaparecidos2017[".masterListFields"][] = "Nombre";
$tdatadesaparecidos2017[".masterListFields"][] = "APat";
$tdatadesaparecidos2017[".masterListFields"][] = "AMat";
$tdatadesaparecidos2017[".masterListFields"][] = "UsrBaja";
$tdatadesaparecidos2017[".masterListFields"][] = "FecBaja";
$tdatadesaparecidos2017[".masterListFields"][] = "Status";
$tdatadesaparecidos2017[".masterListFields"][] = "FAparicion";
$tdatadesaparecidos2017[".masterListFields"][] = "Oficio";
$tdatadesaparecidos2017[".masterListFields"][] = "EstApar";
$tdatadesaparecidos2017[".masterListFields"][] = "Sexo";
$tdatadesaparecidos2017[".masterListFields"][] = "Edad";
$tdatadesaparecidos2017[".masterListFields"][] = "Nac";
$tdatadesaparecidos2017[".masterListFields"][] = "Origen";
$tdatadesaparecidos2017[".masterListFields"][] = "Escolaridad";
$tdatadesaparecidos2017[".masterListFields"][] = "Est";
$tdatadesaparecidos2017[".masterListFields"][] = "Compl";
$tdatadesaparecidos2017[".masterListFields"][] = "Ojos";
$tdatadesaparecidos2017[".masterListFields"][] = "Piel";
$tdatadesaparecidos2017[".masterListFields"][] = "Cab";
$tdatadesaparecidos2017[".masterListFields"][] = "TCab";
$tdatadesaparecidos2017[".masterListFields"][] = "Nariz";
$tdatadesaparecidos2017[".masterListFields"][] = "Labios";
$tdatadesaparecidos2017[".masterListFields"][] = "Menton";
$tdatadesaparecidos2017[".masterListFields"][] = "Cejas";
$tdatadesaparecidos2017[".masterListFields"][] = "VFacial";
$tdatadesaparecidos2017[".masterListFields"][] = "Particularidades";
$tdatadesaparecidos2017[".masterListFields"][] = "Nota";
$tdatadesaparecidos2017[".masterListFields"][] = "DescHechos";
$tdatadesaparecidos2017[".masterListFields"][] = "Obseva";
$tdatadesaparecidos2017[".masterListFields"][] = "InvMin";
$tdatadesaparecidos2017[".masterListFields"][] = "MinPub";
$tdatadesaparecidos2017[".masterListFields"][] = "Agencia";
$tdatadesaparecidos2017[".masterListFields"][] = "RutFoto";
$tdatadesaparecidos2017[".masterListFields"][] = "FCaptura";
$tdatadesaparecidos2017[".masterListFields"][] = "Usuario";
$tdatadesaparecidos2017[".masterListFields"][] = "Delito";

$tdatadesaparecidos2017[".inlineAddFields"] = array();

$tdatadesaparecidos2017[".editFields"] = array();

$tdatadesaparecidos2017[".inlineEditFields"] = array();

$tdatadesaparecidos2017[".exportFields"] = array();
$tdatadesaparecidos2017[".exportFields"][] = "Id";
$tdatadesaparecidos2017[".exportFields"][] = "Tipo";
$tdatadesaparecidos2017[".exportFields"][] = "TipoDoc";
$tdatadesaparecidos2017[".exportFields"][] = "Mun";
$tdatadesaparecidos2017[".exportFields"][] = "Estado";
$tdatadesaparecidos2017[".exportFields"][] = "Ofic";
$tdatadesaparecidos2017[".exportFields"][] = "FRecib";
$tdatadesaparecidos2017[".exportFields"][] = "FInicio";
$tdatadesaparecidos2017[".exportFields"][] = "FExtrav";
$tdatadesaparecidos2017[".exportFields"][] = "Nombre";
$tdatadesaparecidos2017[".exportFields"][] = "APat";
$tdatadesaparecidos2017[".exportFields"][] = "AMat";
$tdatadesaparecidos2017[".exportFields"][] = "UsrBaja";
$tdatadesaparecidos2017[".exportFields"][] = "FecBaja";
$tdatadesaparecidos2017[".exportFields"][] = "Status";
$tdatadesaparecidos2017[".exportFields"][] = "FAparicion";
$tdatadesaparecidos2017[".exportFields"][] = "Oficio";
$tdatadesaparecidos2017[".exportFields"][] = "EstApar";
$tdatadesaparecidos2017[".exportFields"][] = "Sexo";
$tdatadesaparecidos2017[".exportFields"][] = "Edad";
$tdatadesaparecidos2017[".exportFields"][] = "Nac";
$tdatadesaparecidos2017[".exportFields"][] = "Origen";
$tdatadesaparecidos2017[".exportFields"][] = "Escolaridad";
$tdatadesaparecidos2017[".exportFields"][] = "Est";
$tdatadesaparecidos2017[".exportFields"][] = "Compl";
$tdatadesaparecidos2017[".exportFields"][] = "Ojos";
$tdatadesaparecidos2017[".exportFields"][] = "Piel";
$tdatadesaparecidos2017[".exportFields"][] = "Cab";
$tdatadesaparecidos2017[".exportFields"][] = "TCab";
$tdatadesaparecidos2017[".exportFields"][] = "Nariz";
$tdatadesaparecidos2017[".exportFields"][] = "Labios";
$tdatadesaparecidos2017[".exportFields"][] = "Menton";
$tdatadesaparecidos2017[".exportFields"][] = "Cejas";
$tdatadesaparecidos2017[".exportFields"][] = "VFacial";
$tdatadesaparecidos2017[".exportFields"][] = "Particularidades";
$tdatadesaparecidos2017[".exportFields"][] = "Nota";
$tdatadesaparecidos2017[".exportFields"][] = "DescHechos";
$tdatadesaparecidos2017[".exportFields"][] = "Obseva";
$tdatadesaparecidos2017[".exportFields"][] = "InvMin";
$tdatadesaparecidos2017[".exportFields"][] = "MinPub";
$tdatadesaparecidos2017[".exportFields"][] = "Agencia";
$tdatadesaparecidos2017[".exportFields"][] = "RutFoto";
$tdatadesaparecidos2017[".exportFields"][] = "FCaptura";
$tdatadesaparecidos2017[".exportFields"][] = "Usuario";
$tdatadesaparecidos2017[".exportFields"][] = "Delito";

$tdatadesaparecidos2017[".importFields"] = array();
$tdatadesaparecidos2017[".importFields"][] = "Id";
$tdatadesaparecidos2017[".importFields"][] = "Tipo";
$tdatadesaparecidos2017[".importFields"][] = "TipoDoc";
$tdatadesaparecidos2017[".importFields"][] = "Mun";
$tdatadesaparecidos2017[".importFields"][] = "Estado";
$tdatadesaparecidos2017[".importFields"][] = "Ofic";
$tdatadesaparecidos2017[".importFields"][] = "FRecib";
$tdatadesaparecidos2017[".importFields"][] = "FInicio";
$tdatadesaparecidos2017[".importFields"][] = "FExtrav";
$tdatadesaparecidos2017[".importFields"][] = "Nombre";
$tdatadesaparecidos2017[".importFields"][] = "APat";
$tdatadesaparecidos2017[".importFields"][] = "AMat";
$tdatadesaparecidos2017[".importFields"][] = "UsrBaja";
$tdatadesaparecidos2017[".importFields"][] = "FecBaja";
$tdatadesaparecidos2017[".importFields"][] = "Status";
$tdatadesaparecidos2017[".importFields"][] = "FAparicion";
$tdatadesaparecidos2017[".importFields"][] = "Oficio";
$tdatadesaparecidos2017[".importFields"][] = "EstApar";
$tdatadesaparecidos2017[".importFields"][] = "Sexo";
$tdatadesaparecidos2017[".importFields"][] = "Edad";
$tdatadesaparecidos2017[".importFields"][] = "Nac";
$tdatadesaparecidos2017[".importFields"][] = "Origen";
$tdatadesaparecidos2017[".importFields"][] = "Escolaridad";
$tdatadesaparecidos2017[".importFields"][] = "Est";
$tdatadesaparecidos2017[".importFields"][] = "Compl";
$tdatadesaparecidos2017[".importFields"][] = "Ojos";
$tdatadesaparecidos2017[".importFields"][] = "Piel";
$tdatadesaparecidos2017[".importFields"][] = "Cab";
$tdatadesaparecidos2017[".importFields"][] = "TCab";
$tdatadesaparecidos2017[".importFields"][] = "Nariz";
$tdatadesaparecidos2017[".importFields"][] = "Labios";
$tdatadesaparecidos2017[".importFields"][] = "Menton";
$tdatadesaparecidos2017[".importFields"][] = "Cejas";
$tdatadesaparecidos2017[".importFields"][] = "VFacial";
$tdatadesaparecidos2017[".importFields"][] = "Particularidades";
$tdatadesaparecidos2017[".importFields"][] = "Nota";
$tdatadesaparecidos2017[".importFields"][] = "DescHechos";
$tdatadesaparecidos2017[".importFields"][] = "Obseva";
$tdatadesaparecidos2017[".importFields"][] = "InvMin";
$tdatadesaparecidos2017[".importFields"][] = "MinPub";
$tdatadesaparecidos2017[".importFields"][] = "Agencia";
$tdatadesaparecidos2017[".importFields"][] = "RutFoto";
$tdatadesaparecidos2017[".importFields"][] = "FCaptura";
$tdatadesaparecidos2017[".importFields"][] = "Usuario";
$tdatadesaparecidos2017[".importFields"][] = "Delito";

$tdatadesaparecidos2017[".printFields"] = array();
$tdatadesaparecidos2017[".printFields"][] = "Id";
$tdatadesaparecidos2017[".printFields"][] = "Tipo";
$tdatadesaparecidos2017[".printFields"][] = "TipoDoc";
$tdatadesaparecidos2017[".printFields"][] = "Mun";
$tdatadesaparecidos2017[".printFields"][] = "Estado";
$tdatadesaparecidos2017[".printFields"][] = "Ofic";
$tdatadesaparecidos2017[".printFields"][] = "FRecib";
$tdatadesaparecidos2017[".printFields"][] = "FInicio";
$tdatadesaparecidos2017[".printFields"][] = "FExtrav";
$tdatadesaparecidos2017[".printFields"][] = "Nombre";
$tdatadesaparecidos2017[".printFields"][] = "APat";
$tdatadesaparecidos2017[".printFields"][] = "AMat";
$tdatadesaparecidos2017[".printFields"][] = "UsrBaja";
$tdatadesaparecidos2017[".printFields"][] = "FecBaja";
$tdatadesaparecidos2017[".printFields"][] = "Status";
$tdatadesaparecidos2017[".printFields"][] = "FAparicion";
$tdatadesaparecidos2017[".printFields"][] = "Oficio";
$tdatadesaparecidos2017[".printFields"][] = "EstApar";
$tdatadesaparecidos2017[".printFields"][] = "Sexo";
$tdatadesaparecidos2017[".printFields"][] = "Edad";
$tdatadesaparecidos2017[".printFields"][] = "Nac";
$tdatadesaparecidos2017[".printFields"][] = "Origen";
$tdatadesaparecidos2017[".printFields"][] = "Escolaridad";
$tdatadesaparecidos2017[".printFields"][] = "Est";
$tdatadesaparecidos2017[".printFields"][] = "Compl";
$tdatadesaparecidos2017[".printFields"][] = "Ojos";
$tdatadesaparecidos2017[".printFields"][] = "Piel";
$tdatadesaparecidos2017[".printFields"][] = "Cab";
$tdatadesaparecidos2017[".printFields"][] = "TCab";
$tdatadesaparecidos2017[".printFields"][] = "Nariz";
$tdatadesaparecidos2017[".printFields"][] = "Labios";
$tdatadesaparecidos2017[".printFields"][] = "Menton";
$tdatadesaparecidos2017[".printFields"][] = "Cejas";
$tdatadesaparecidos2017[".printFields"][] = "VFacial";
$tdatadesaparecidos2017[".printFields"][] = "Particularidades";
$tdatadesaparecidos2017[".printFields"][] = "Nota";
$tdatadesaparecidos2017[".printFields"][] = "DescHechos";
$tdatadesaparecidos2017[".printFields"][] = "Obseva";
$tdatadesaparecidos2017[".printFields"][] = "InvMin";
$tdatadesaparecidos2017[".printFields"][] = "MinPub";
$tdatadesaparecidos2017[".printFields"][] = "Agencia";
$tdatadesaparecidos2017[".printFields"][] = "RutFoto";
$tdatadesaparecidos2017[".printFields"][] = "FCaptura";
$tdatadesaparecidos2017[".printFields"][] = "Usuario";
$tdatadesaparecidos2017[".printFields"][] = "Delito";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["Id"] = $fdata;
//	Tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Tipo";
	$fdata["GoodName"] = "Tipo";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Tipo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Tipo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tipo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["Tipo"] = $fdata;
//	TipoDoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TipoDoc";
	$fdata["GoodName"] = "TipoDoc";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","TipoDoc"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TipoDoc"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoDoc";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["TipoDoc"] = $fdata;
//	Mun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Mun";
	$fdata["GoodName"] = "Mun";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Mun"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Mun"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Mun";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["Mun"] = $fdata;
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Estado"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Estado"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Estado";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["Estado"] = $fdata;
//	Ofic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Ofic";
	$fdata["GoodName"] = "Ofic";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Ofic"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Ofic"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ofic";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["Ofic"] = $fdata;
//	FRecib
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "FRecib";
	$fdata["GoodName"] = "FRecib";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","FRecib"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "FRecib"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FRecib";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["FRecib"] = $fdata;
//	FInicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FInicio";
	$fdata["GoodName"] = "FInicio";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","FInicio"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "FInicio"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FInicio";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["FInicio"] = $fdata;
//	FExtrav
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "FExtrav";
	$fdata["GoodName"] = "FExtrav";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","FExtrav"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "FExtrav"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FExtrav";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["FExtrav"] = $fdata;
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Nombre"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Nombre"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nombre";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["Nombre"] = $fdata;
//	APat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "APat";
	$fdata["GoodName"] = "APat";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","APat"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "APat"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APat";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["APat"] = $fdata;
//	AMat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "AMat";
	$fdata["GoodName"] = "AMat";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","AMat"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "AMat"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AMat";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["AMat"] = $fdata;
//	UsrBaja
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "UsrBaja";
	$fdata["GoodName"] = "UsrBaja";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","UsrBaja"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "UsrBaja"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UsrBaja";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=30";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["UsrBaja"] = $fdata;
//	FecBaja
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "FecBaja";
	$fdata["GoodName"] = "FecBaja";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","FecBaja"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "FecBaja"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FecBaja";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["FecBaja"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Status"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Status"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Status";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["Status"] = $fdata;
//	FAparicion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "FAparicion";
	$fdata["GoodName"] = "FAparicion";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","FAparicion"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "FAparicion"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FAparicion";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["FAparicion"] = $fdata;
//	Oficio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Oficio";
	$fdata["GoodName"] = "Oficio";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Oficio"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Oficio"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Oficio";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["Oficio"] = $fdata;
//	EstApar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "EstApar";
	$fdata["GoodName"] = "EstApar";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","EstApar"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "EstApar"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EstApar";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["EstApar"] = $fdata;
//	Sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Sexo";
	$fdata["GoodName"] = "Sexo";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Sexo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Sexo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sexo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["Sexo"] = $fdata;
//	Edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Edad";
	$fdata["GoodName"] = "Edad";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Edad"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Edad"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Edad";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["Edad"] = $fdata;
//	Nac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Nac";
	$fdata["GoodName"] = "Nac";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Nac"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Nac"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nac";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["Nac"] = $fdata;
//	Origen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Origen";
	$fdata["GoodName"] = "Origen";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Origen"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Origen"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Origen";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["Origen"] = $fdata;
//	Escolaridad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Escolaridad";
	$fdata["GoodName"] = "Escolaridad";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Escolaridad"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Escolaridad"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Escolaridad";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["Escolaridad"] = $fdata;
//	Est
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Est";
	$fdata["GoodName"] = "Est";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Est"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Est"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Est";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["Est"] = $fdata;
//	Compl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Compl";
	$fdata["GoodName"] = "Compl";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Compl"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Compl"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Compl";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["Compl"] = $fdata;
//	Ojos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Ojos";
	$fdata["GoodName"] = "Ojos";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Ojos"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Ojos"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ojos";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["Ojos"] = $fdata;
//	Piel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Piel";
	$fdata["GoodName"] = "Piel";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Piel"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Piel"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Piel";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["Piel"] = $fdata;
//	Cab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Cab";
	$fdata["GoodName"] = "Cab";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Cab"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Cab"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cab";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["Cab"] = $fdata;
//	TCab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "TCab";
	$fdata["GoodName"] = "TCab";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","TCab"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TCab"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TCab";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["TCab"] = $fdata;
//	Nariz
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Nariz";
	$fdata["GoodName"] = "Nariz";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Nariz"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Nariz"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nariz";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["Nariz"] = $fdata;
//	Labios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Labios";
	$fdata["GoodName"] = "Labios";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Labios"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Labios"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Labios";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["Labios"] = $fdata;
//	Menton
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "Menton";
	$fdata["GoodName"] = "Menton";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Menton"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Menton"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Menton";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["Menton"] = $fdata;
//	Cejas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Cejas";
	$fdata["GoodName"] = "Cejas";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Cejas"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Cejas"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cejas";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["Cejas"] = $fdata;
//	VFacial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "VFacial";
	$fdata["GoodName"] = "VFacial";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","VFacial"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "VFacial"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VFacial";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["VFacial"] = $fdata;
//	Particularidades
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Particularidades";
	$fdata["GoodName"] = "Particularidades";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Particularidades"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Particularidades"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Particularidades";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["Particularidades"] = $fdata;
//	Nota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Nota";
	$fdata["GoodName"] = "Nota";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Nota"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Nota"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nota";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["Nota"] = $fdata;
//	DescHechos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "DescHechos";
	$fdata["GoodName"] = "DescHechos";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","DescHechos"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "DescHechos"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DescHechos";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["DescHechos"] = $fdata;
//	Obseva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Obseva";
	$fdata["GoodName"] = "Obseva";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Obseva"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Obseva"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Obseva";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["Obseva"] = $fdata;
//	InvMin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "InvMin";
	$fdata["GoodName"] = "InvMin";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","InvMin"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "InvMin"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InvMin";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["InvMin"] = $fdata;
//	MinPub
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "MinPub";
	$fdata["GoodName"] = "MinPub";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","MinPub"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MinPub"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MinPub";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=150";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["MinPub"] = $fdata;
//	Agencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "Agencia";
	$fdata["GoodName"] = "Agencia";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Agencia"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Agencia"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Agencia";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["Agencia"] = $fdata;
//	RutFoto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "RutFoto";
	$fdata["GoodName"] = "RutFoto";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","RutFoto"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "RutFoto"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RutFoto";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["RutFoto"] = $fdata;
//	FCaptura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "FCaptura";
	$fdata["GoodName"] = "FCaptura";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","FCaptura"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "FCaptura"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FCaptura";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["FCaptura"] = $fdata;
//	Usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "Usuario";
	$fdata["GoodName"] = "Usuario";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Usuario"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Usuario"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Usuario";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["Usuario"] = $fdata;
//	Delito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "Delito";
	$fdata["GoodName"] = "Delito";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Delito"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Delito"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Delito";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatadesaparecidos2017["Delito"] = $fdata;

	
$tables_data["desaparecidos2017"]=&$tdatadesaparecidos2017;
$field_labels["desaparecidos2017"] = &$fieldLabelsdesaparecidos2017;
$fieldToolTips["desaparecidos2017"] = &$fieldToolTipsdesaparecidos2017;
$page_titles["desaparecidos2017"] = &$pageTitlesdesaparecidos2017;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["desaparecidos2017"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["desaparecidos2017"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_desaparecidos2017()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  	Tipo,  	TipoDoc,  	Mun,  	Estado,  	Ofic,  	FRecib,  	FInicio,  	FExtrav,  	Nombre,  	APat,  	AMat,  	UsrBaja,  	FecBaja,  	Status,  	FAparicion,  	Oficio,  	EstApar,  	Sexo,  	Edad,  	Nac,  	Origen,  	Escolaridad,  	Est,  	Compl,  	Ojos,  	Piel,  	Cab,  	TCab,  	Nariz,  	Labios,  	Menton,  	Cejas,  	VFacial,  	Particularidades,  	Nota,  	DescHechos,  	Obseva,  	InvMin,  	MinPub,  	Agencia,  	RutFoto,  	FCaptura,  	Usuario,  	Delito";
$proto0["m_strFrom"] = "FROM desaparecidos2017";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "Id",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto5["m_sql"] = "Id";
$proto5["m_srcTableName"] = "desaparecidos2017";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto7["m_sql"] = "Tipo";
$proto7["m_srcTableName"] = "desaparecidos2017";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoDoc",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto9["m_sql"] = "TipoDoc";
$proto9["m_srcTableName"] = "desaparecidos2017";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Mun",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto11["m_sql"] = "Mun";
$proto11["m_srcTableName"] = "desaparecidos2017";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto13["m_sql"] = "Estado";
$proto13["m_srcTableName"] = "desaparecidos2017";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Ofic",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto15["m_sql"] = "Ofic";
$proto15["m_srcTableName"] = "desaparecidos2017";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "FRecib",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto17["m_sql"] = "FRecib";
$proto17["m_srcTableName"] = "desaparecidos2017";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "FInicio",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto19["m_sql"] = "FInicio";
$proto19["m_srcTableName"] = "desaparecidos2017";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "FExtrav",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto21["m_sql"] = "FExtrav";
$proto21["m_srcTableName"] = "desaparecidos2017";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto23["m_sql"] = "Nombre";
$proto23["m_srcTableName"] = "desaparecidos2017";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "APat",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto25["m_sql"] = "APat";
$proto25["m_srcTableName"] = "desaparecidos2017";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "AMat",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto27["m_sql"] = "AMat";
$proto27["m_srcTableName"] = "desaparecidos2017";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "UsrBaja",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto29["m_sql"] = "UsrBaja";
$proto29["m_srcTableName"] = "desaparecidos2017";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "FecBaja",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto31["m_sql"] = "FecBaja";
$proto31["m_srcTableName"] = "desaparecidos2017";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto33["m_sql"] = "Status";
$proto33["m_srcTableName"] = "desaparecidos2017";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "FAparicion",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto35["m_sql"] = "FAparicion";
$proto35["m_srcTableName"] = "desaparecidos2017";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "Oficio",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto37["m_sql"] = "Oficio";
$proto37["m_srcTableName"] = "desaparecidos2017";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "EstApar",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto39["m_sql"] = "EstApar";
$proto39["m_srcTableName"] = "desaparecidos2017";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "Sexo",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto41["m_sql"] = "Sexo";
$proto41["m_srcTableName"] = "desaparecidos2017";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "Edad",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto43["m_sql"] = "Edad";
$proto43["m_srcTableName"] = "desaparecidos2017";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "Nac",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto45["m_sql"] = "Nac";
$proto45["m_srcTableName"] = "desaparecidos2017";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "Origen",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto47["m_sql"] = "Origen";
$proto47["m_srcTableName"] = "desaparecidos2017";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "Escolaridad",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto49["m_sql"] = "Escolaridad";
$proto49["m_srcTableName"] = "desaparecidos2017";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "Est",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto51["m_sql"] = "Est";
$proto51["m_srcTableName"] = "desaparecidos2017";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "Compl",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto53["m_sql"] = "Compl";
$proto53["m_srcTableName"] = "desaparecidos2017";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "Ojos",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto55["m_sql"] = "Ojos";
$proto55["m_srcTableName"] = "desaparecidos2017";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "Piel",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto57["m_sql"] = "Piel";
$proto57["m_srcTableName"] = "desaparecidos2017";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "Cab",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto59["m_sql"] = "Cab";
$proto59["m_srcTableName"] = "desaparecidos2017";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "TCab",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto61["m_sql"] = "TCab";
$proto61["m_srcTableName"] = "desaparecidos2017";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "Nariz",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto63["m_sql"] = "Nariz";
$proto63["m_srcTableName"] = "desaparecidos2017";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "Labios",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto65["m_sql"] = "Labios";
$proto65["m_srcTableName"] = "desaparecidos2017";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "Menton",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto67["m_sql"] = "Menton";
$proto67["m_srcTableName"] = "desaparecidos2017";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "Cejas",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto69["m_sql"] = "Cejas";
$proto69["m_srcTableName"] = "desaparecidos2017";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "VFacial",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto71["m_sql"] = "VFacial";
$proto71["m_srcTableName"] = "desaparecidos2017";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "Particularidades",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto73["m_sql"] = "Particularidades";
$proto73["m_srcTableName"] = "desaparecidos2017";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "Nota",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto75["m_sql"] = "Nota";
$proto75["m_srcTableName"] = "desaparecidos2017";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "DescHechos",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto77["m_sql"] = "DescHechos";
$proto77["m_srcTableName"] = "desaparecidos2017";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "Obseva",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto79["m_sql"] = "Obseva";
$proto79["m_srcTableName"] = "desaparecidos2017";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "InvMin",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto81["m_sql"] = "InvMin";
$proto81["m_srcTableName"] = "desaparecidos2017";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "MinPub",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto83["m_sql"] = "MinPub";
$proto83["m_srcTableName"] = "desaparecidos2017";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto0["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "Agencia",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto85["m_sql"] = "Agencia";
$proto85["m_srcTableName"] = "desaparecidos2017";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto0["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLField(array(
	"m_strName" => "RutFoto",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto87["m_sql"] = "RutFoto";
$proto87["m_srcTableName"] = "desaparecidos2017";
$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "";
$obj = new SQLFieldListItem($proto87);

$proto0["m_fieldlist"][]=$obj;
						$proto89=array();
			$obj = new SQLField(array(
	"m_strName" => "FCaptura",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto89["m_sql"] = "FCaptura";
$proto89["m_srcTableName"] = "desaparecidos2017";
$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "";
$obj = new SQLFieldListItem($proto89);

$proto0["m_fieldlist"][]=$obj;
						$proto91=array();
			$obj = new SQLField(array(
	"m_strName" => "Usuario",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto91["m_sql"] = "Usuario";
$proto91["m_srcTableName"] = "desaparecidos2017";
$proto91["m_expr"]=$obj;
$proto91["m_alias"] = "";
$obj = new SQLFieldListItem($proto91);

$proto0["m_fieldlist"][]=$obj;
						$proto93=array();
			$obj = new SQLField(array(
	"m_strName" => "Delito",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto93["m_sql"] = "Delito";
$proto93["m_srcTableName"] = "desaparecidos2017";
$proto93["m_expr"]=$obj;
$proto93["m_alias"] = "";
$obj = new SQLFieldListItem($proto93);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto95=array();
$proto95["m_link"] = "SQLL_MAIN";
			$proto96=array();
$proto96["m_strName"] = "desaparecidos2017";
$proto96["m_srcTableName"] = "desaparecidos2017";
$proto96["m_columns"] = array();
$proto96["m_columns"][] = "Id";
$proto96["m_columns"][] = "Tipo";
$proto96["m_columns"][] = "TipoDoc";
$proto96["m_columns"][] = "Mun";
$proto96["m_columns"][] = "Estado";
$proto96["m_columns"][] = "Ofic";
$proto96["m_columns"][] = "FRecib";
$proto96["m_columns"][] = "FInicio";
$proto96["m_columns"][] = "FExtrav";
$proto96["m_columns"][] = "Nombre";
$proto96["m_columns"][] = "APat";
$proto96["m_columns"][] = "AMat";
$proto96["m_columns"][] = "UsrBaja";
$proto96["m_columns"][] = "FecBaja";
$proto96["m_columns"][] = "Status";
$proto96["m_columns"][] = "FAparicion";
$proto96["m_columns"][] = "Oficio";
$proto96["m_columns"][] = "EstApar";
$proto96["m_columns"][] = "Sexo";
$proto96["m_columns"][] = "Edad";
$proto96["m_columns"][] = "Nac";
$proto96["m_columns"][] = "Origen";
$proto96["m_columns"][] = "Escolaridad";
$proto96["m_columns"][] = "Est";
$proto96["m_columns"][] = "Compl";
$proto96["m_columns"][] = "Ojos";
$proto96["m_columns"][] = "Piel";
$proto96["m_columns"][] = "Cab";
$proto96["m_columns"][] = "TCab";
$proto96["m_columns"][] = "Nariz";
$proto96["m_columns"][] = "Labios";
$proto96["m_columns"][] = "Menton";
$proto96["m_columns"][] = "Cejas";
$proto96["m_columns"][] = "VFacial";
$proto96["m_columns"][] = "Particularidades";
$proto96["m_columns"][] = "Nota";
$proto96["m_columns"][] = "DescHechos";
$proto96["m_columns"][] = "Obseva";
$proto96["m_columns"][] = "InvMin";
$proto96["m_columns"][] = "MinPub";
$proto96["m_columns"][] = "Agencia";
$proto96["m_columns"][] = "RutFoto";
$proto96["m_columns"][] = "FCaptura";
$proto96["m_columns"][] = "Usuario";
$proto96["m_columns"][] = "Delito";
$obj = new SQLTable($proto96);

$proto95["m_table"] = $obj;
$proto95["m_sql"] = "desaparecidos2017";
$proto95["m_alias"] = "";
$proto95["m_srcTableName"] = "desaparecidos2017";
$proto97=array();
$proto97["m_sql"] = "";
$proto97["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto97["m_column"]=$obj;
$proto97["m_contained"] = array();
$proto97["m_strCase"] = "";
$proto97["m_havingmode"] = false;
$proto97["m_inBrackets"] = false;
$proto97["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto97);

$proto95["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto95);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="desaparecidos2017";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_desaparecidos2017 = createSqlQuery_desaparecidos2017();


	
																																													
	
$tdatadesaparecidos2017[".sqlquery"] = $queryData_desaparecidos2017;

$tableEvents["desaparecidos2017"] = new eventsBase;
$tdatadesaparecidos2017[".hasEvents"] = false;

?>