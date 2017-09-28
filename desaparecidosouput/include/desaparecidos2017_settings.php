<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadesaparecidos2017 = array();	
	$tdatadesaparecidos2017[".truncateText"] = true;
	$tdatadesaparecidos2017[".NumberOfChars"] = 80; 
	$tdatadesaparecidos2017[".ShortName"] = "desaparecidos2017";
	$tdatadesaparecidos2017[".OwnerID"] = "Usuario";
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
	$fieldLabelsdesaparecidos2017["Spanish"]["Estado"] = "Estado";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Estado"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Mun"] = "Municipio";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Mun"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["InvMin"] = "Carpeta de <br>Investigación";
	$fieldToolTipsdesaparecidos2017["Spanish"]["InvMin"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["FInicio"] = "Fecha de Inicio";
	$fieldToolTipsdesaparecidos2017["Spanish"]["FInicio"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["MinPub"] = "Fiscal";
	$fieldToolTipsdesaparecidos2017["Spanish"]["MinPub"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Agencia"] = "Agencia";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Agencia"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Ofic"] = "Oficio de <br> Colaboración";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Ofic"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["FExtrav"] = "Fecha de Extravío";
	$fieldToolTipsdesaparecidos2017["Spanish"]["FExtrav"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Nombre"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["APat"] = "Paterno";
	$fieldToolTipsdesaparecidos2017["Spanish"]["APat"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["AMat"] = "Materno";
	$fieldToolTipsdesaparecidos2017["Spanish"]["AMat"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Sexo"] = "Sexo";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Sexo"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["EdadA"] = "Edad Años";
	$fieldToolTipsdesaparecidos2017["Spanish"]["EdadA"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["EdadM"] = "Edad Meses";
	$fieldToolTipsdesaparecidos2017["Spanish"]["EdadM"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Nac"] = "Nacionalidad";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Nac"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Origen"] = "Origen";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Origen"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Escolaridad"] = "Escolaridad";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Escolaridad"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Est"] = "Estatura";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Est"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Compl"] = "Complexión";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Compl"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Ojos"] = "Ojos";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Ojos"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Piel"] = "Piel";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Piel"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Cab"] = "Cabello";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Cab"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["TCab"] = "Tipo de Cabello";
	$fieldToolTipsdesaparecidos2017["Spanish"]["TCab"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Cabcol"] = "Color de Cabello";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Cabcol"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Nariz"] = "Nariz";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Nariz"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Labios"] = "Labios";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Labios"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Menton"] = "Menton";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Menton"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Cejas"] = "Cejas";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Cejas"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["VFacial"] = "Vello Facial";
	$fieldToolTipsdesaparecidos2017["Spanish"]["VFacial"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Delito"] = "Delito";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Delito"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Particularidades"] = "Particularidades";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Particularidades"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Nota"] = "Vestimenta";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Nota"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["DescHechos"] = "Hechos";
	$fieldToolTipsdesaparecidos2017["Spanish"]["DescHechos"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Obseva"] = "Obsevaciones";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Obseva"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Status"] = "Estatus";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Status"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["FAparicion"] = "Fecha de Localizado";
	$fieldToolTipsdesaparecidos2017["Spanish"]["FAparicion"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Oficio"] = "Oficio";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Oficio"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["EstApar"] = "Estado del Aparecido";
	$fieldToolTipsdesaparecidos2017["Spanish"]["EstApar"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Tipo"] = "Tipo";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Tipo"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["FRecib"] = "FRecib";
	$fieldToolTipsdesaparecidos2017["Spanish"]["FRecib"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["UsrBaja"] = "Usr Baja";
	$fieldToolTipsdesaparecidos2017["Spanish"]["UsrBaja"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["FecBaja"] = "Fec Baja";
	$fieldToolTipsdesaparecidos2017["Spanish"]["FecBaja"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["RutFoto"] = "Rut Foto";
	$fieldToolTipsdesaparecidos2017["Spanish"]["RutFoto"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["FCaptura"] = "FCaptura";
	$fieldToolTipsdesaparecidos2017["Spanish"]["FCaptura"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["TipoDoc"] = "Tipo Doc";
	$fieldToolTipsdesaparecidos2017["Spanish"]["TipoDoc"] = "";
	$fieldLabelsdesaparecidos2017["Spanish"]["Usuario"] = "Usuario";
	$fieldToolTipsdesaparecidos2017["Spanish"]["Usuario"] = "";
	if (count($fieldToolTipsdesaparecidos2017["Spanish"]))
		$tdatadesaparecidos2017[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdesaparecidos2017[""] = array();
	$fieldToolTipsdesaparecidos2017[""] = array();
	$pageTitlesdesaparecidos2017[""] = array();
	$fieldLabelsdesaparecidos2017[""]["Id"] = "Id";
	$fieldToolTipsdesaparecidos2017[""]["Id"] = "";
	if (count($fieldToolTipsdesaparecidos2017[""]))
		$tdatadesaparecidos2017[".isUseToolTips"] = true;
}
	
	
	$tdatadesaparecidos2017[".NCSearch"] = true;



$tdatadesaparecidos2017[".shortTableName"] = "desaparecidos2017";
$tdatadesaparecidos2017[".nSecOptions"] = 1;
$tdatadesaparecidos2017[".recsPerRowList"] = 1;
$tdatadesaparecidos2017[".recsPerRowPrint"] = 1;
$tdatadesaparecidos2017[".mainTableOwnerID"] = "Usuario";
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

$tdatadesaparecidos2017[".edit"] = true;
$tdatadesaparecidos2017[".afterEditAction"] = 1;
$tdatadesaparecidos2017[".closePopupAfterEdit"] = 1;
$tdatadesaparecidos2017[".afterEditActionDetTable"] = "";

$tdatadesaparecidos2017[".add"] = true;
$tdatadesaparecidos2017[".afterAddAction"] = 1;
$tdatadesaparecidos2017[".closePopupAfterAdd"] = 1;
$tdatadesaparecidos2017[".afterAddActionDetTable"] = "";

$tdatadesaparecidos2017[".list"] = true;

$tdatadesaparecidos2017[".inlineEdit"] = true;
$tdatadesaparecidos2017[".inlineAdd"] = true;
$tdatadesaparecidos2017[".view"] = true;

$tdatadesaparecidos2017[".import"] = true;

$tdatadesaparecidos2017[".exportTo"] = true;

$tdatadesaparecidos2017[".printFriendly"] = true;

$tdatadesaparecidos2017[".delete"] = true;

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
	$tdatadesaparecidos2017[".allSearchFields"][] = "Estado";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Mun";
	$tdatadesaparecidos2017[".allSearchFields"][] = "InvMin";
	$tdatadesaparecidos2017[".allSearchFields"][] = "FInicio";
	$tdatadesaparecidos2017[".allSearchFields"][] = "MinPub";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Ofic";
	$tdatadesaparecidos2017[".allSearchFields"][] = "FExtrav";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Nombre";
	$tdatadesaparecidos2017[".allSearchFields"][] = "APat";
	$tdatadesaparecidos2017[".allSearchFields"][] = "AMat";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Sexo";
	$tdatadesaparecidos2017[".allSearchFields"][] = "EdadA";
	$tdatadesaparecidos2017[".allSearchFields"][] = "EdadM";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Nac";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Origen";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Escolaridad";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Est";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Compl";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Ojos";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Piel";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Cab";
	$tdatadesaparecidos2017[".allSearchFields"][] = "TCab";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Cabcol";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Nariz";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Labios";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Menton";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Cejas";
	$tdatadesaparecidos2017[".allSearchFields"][] = "VFacial";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Delito";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Particularidades";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Nota";
	$tdatadesaparecidos2017[".allSearchFields"][] = "DescHechos";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Obseva";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Status";
	$tdatadesaparecidos2017[".allSearchFields"][] = "FAparicion";
	$tdatadesaparecidos2017[".allSearchFields"][] = "Oficio";
	$tdatadesaparecidos2017[".allSearchFields"][] = "EstApar";
	

$tdatadesaparecidos2017[".googleLikeFields"] = array();
$tdatadesaparecidos2017[".googleLikeFields"][] = "Id";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Estado";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Mun";
$tdatadesaparecidos2017[".googleLikeFields"][] = "InvMin";
$tdatadesaparecidos2017[".googleLikeFields"][] = "FInicio";
$tdatadesaparecidos2017[".googleLikeFields"][] = "MinPub";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Agencia";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Ofic";
$tdatadesaparecidos2017[".googleLikeFields"][] = "FExtrav";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Nombre";
$tdatadesaparecidos2017[".googleLikeFields"][] = "APat";
$tdatadesaparecidos2017[".googleLikeFields"][] = "AMat";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Sexo";
$tdatadesaparecidos2017[".googleLikeFields"][] = "EdadA";
$tdatadesaparecidos2017[".googleLikeFields"][] = "EdadM";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Nac";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Origen";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Escolaridad";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Est";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Compl";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Ojos";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Piel";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Cab";
$tdatadesaparecidos2017[".googleLikeFields"][] = "TCab";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Cabcol";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Nariz";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Labios";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Menton";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Cejas";
$tdatadesaparecidos2017[".googleLikeFields"][] = "VFacial";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Delito";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Particularidades";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Nota";
$tdatadesaparecidos2017[".googleLikeFields"][] = "DescHechos";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Obseva";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Status";
$tdatadesaparecidos2017[".googleLikeFields"][] = "FAparicion";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Oficio";
$tdatadesaparecidos2017[".googleLikeFields"][] = "EstApar";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Tipo";
$tdatadesaparecidos2017[".googleLikeFields"][] = "FRecib";
$tdatadesaparecidos2017[".googleLikeFields"][] = "UsrBaja";
$tdatadesaparecidos2017[".googleLikeFields"][] = "FecBaja";
$tdatadesaparecidos2017[".googleLikeFields"][] = "RutFoto";
$tdatadesaparecidos2017[".googleLikeFields"][] = "FCaptura";
$tdatadesaparecidos2017[".googleLikeFields"][] = "TipoDoc";
$tdatadesaparecidos2017[".googleLikeFields"][] = "Usuario";


$tdatadesaparecidos2017[".advSearchFields"] = array();
$tdatadesaparecidos2017[".advSearchFields"][] = "Id";
$tdatadesaparecidos2017[".advSearchFields"][] = "Estado";
$tdatadesaparecidos2017[".advSearchFields"][] = "Mun";
$tdatadesaparecidos2017[".advSearchFields"][] = "InvMin";
$tdatadesaparecidos2017[".advSearchFields"][] = "FInicio";
$tdatadesaparecidos2017[".advSearchFields"][] = "MinPub";
$tdatadesaparecidos2017[".advSearchFields"][] = "Ofic";
$tdatadesaparecidos2017[".advSearchFields"][] = "FExtrav";
$tdatadesaparecidos2017[".advSearchFields"][] = "Nombre";
$tdatadesaparecidos2017[".advSearchFields"][] = "APat";
$tdatadesaparecidos2017[".advSearchFields"][] = "AMat";
$tdatadesaparecidos2017[".advSearchFields"][] = "Sexo";
$tdatadesaparecidos2017[".advSearchFields"][] = "EdadA";
$tdatadesaparecidos2017[".advSearchFields"][] = "EdadM";
$tdatadesaparecidos2017[".advSearchFields"][] = "Nac";
$tdatadesaparecidos2017[".advSearchFields"][] = "Origen";
$tdatadesaparecidos2017[".advSearchFields"][] = "Escolaridad";
$tdatadesaparecidos2017[".advSearchFields"][] = "Est";
$tdatadesaparecidos2017[".advSearchFields"][] = "Compl";
$tdatadesaparecidos2017[".advSearchFields"][] = "Ojos";
$tdatadesaparecidos2017[".advSearchFields"][] = "Piel";
$tdatadesaparecidos2017[".advSearchFields"][] = "Cab";
$tdatadesaparecidos2017[".advSearchFields"][] = "TCab";
$tdatadesaparecidos2017[".advSearchFields"][] = "Cabcol";
$tdatadesaparecidos2017[".advSearchFields"][] = "Nariz";
$tdatadesaparecidos2017[".advSearchFields"][] = "Labios";
$tdatadesaparecidos2017[".advSearchFields"][] = "Menton";
$tdatadesaparecidos2017[".advSearchFields"][] = "Cejas";
$tdatadesaparecidos2017[".advSearchFields"][] = "VFacial";
$tdatadesaparecidos2017[".advSearchFields"][] = "Delito";
$tdatadesaparecidos2017[".advSearchFields"][] = "Particularidades";
$tdatadesaparecidos2017[".advSearchFields"][] = "Nota";
$tdatadesaparecidos2017[".advSearchFields"][] = "DescHechos";
$tdatadesaparecidos2017[".advSearchFields"][] = "Obseva";
$tdatadesaparecidos2017[".advSearchFields"][] = "Status";
$tdatadesaparecidos2017[".advSearchFields"][] = "FAparicion";
$tdatadesaparecidos2017[".advSearchFields"][] = "Oficio";
$tdatadesaparecidos2017[".advSearchFields"][] = "EstApar";

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

$tdatadesaparecidos2017[".sqlHead"] = "SELECT Id,  	Estado,  	Mun,  	InvMin,  	FInicio,  	MinPub,  	Agencia,  	Ofic,  	FExtrav,  	Nombre,  	APat,  	AMat,  	Sexo,  	EdadA,  	EdadM,  	Nac,  	Origen,  	Escolaridad,  	Est,  	Compl,  	Ojos,  	Piel,  	Cab,  	TCab,  	Cabcol,  	Nariz,  	Labios,  	Menton,  	Cejas,  	VFacial,  	Delito,  	Particularidades,  	Nota,  	DescHechos,  	Obseva,  	Status,  	FAparicion,  	Oficio,  	EstApar,  	Tipo,  	FRecib,  	UsrBaja,  	FecBaja,  	RutFoto,  	FCaptura,  	TipoDoc,  	Usuario";
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
$tableKeysdesaparecidos2017[] = "Id";
$tdatadesaparecidos2017[".Keys"] = $tableKeysdesaparecidos2017;

$tdatadesaparecidos2017[".listFields"] = array();
$tdatadesaparecidos2017[".listFields"][] = "Id";
$tdatadesaparecidos2017[".listFields"][] = "Estado";
$tdatadesaparecidos2017[".listFields"][] = "Mun";
$tdatadesaparecidos2017[".listFields"][] = "InvMin";
$tdatadesaparecidos2017[".listFields"][] = "FInicio";
$tdatadesaparecidos2017[".listFields"][] = "MinPub";
$tdatadesaparecidos2017[".listFields"][] = "Ofic";
$tdatadesaparecidos2017[".listFields"][] = "FExtrav";
$tdatadesaparecidos2017[".listFields"][] = "Nombre";
$tdatadesaparecidos2017[".listFields"][] = "APat";
$tdatadesaparecidos2017[".listFields"][] = "AMat";
$tdatadesaparecidos2017[".listFields"][] = "Sexo";
$tdatadesaparecidos2017[".listFields"][] = "EdadA";
$tdatadesaparecidos2017[".listFields"][] = "EdadM";
$tdatadesaparecidos2017[".listFields"][] = "Nac";
$tdatadesaparecidos2017[".listFields"][] = "Origen";
$tdatadesaparecidos2017[".listFields"][] = "Escolaridad";
$tdatadesaparecidos2017[".listFields"][] = "Est";
$tdatadesaparecidos2017[".listFields"][] = "Compl";
$tdatadesaparecidos2017[".listFields"][] = "Ojos";
$tdatadesaparecidos2017[".listFields"][] = "Piel";
$tdatadesaparecidos2017[".listFields"][] = "Cab";
$tdatadesaparecidos2017[".listFields"][] = "TCab";
$tdatadesaparecidos2017[".listFields"][] = "Cabcol";
$tdatadesaparecidos2017[".listFields"][] = "Nariz";
$tdatadesaparecidos2017[".listFields"][] = "Labios";
$tdatadesaparecidos2017[".listFields"][] = "Menton";
$tdatadesaparecidos2017[".listFields"][] = "Cejas";
$tdatadesaparecidos2017[".listFields"][] = "VFacial";
$tdatadesaparecidos2017[".listFields"][] = "Delito";
$tdatadesaparecidos2017[".listFields"][] = "Particularidades";
$tdatadesaparecidos2017[".listFields"][] = "Nota";
$tdatadesaparecidos2017[".listFields"][] = "DescHechos";
$tdatadesaparecidos2017[".listFields"][] = "Obseva";
$tdatadesaparecidos2017[".listFields"][] = "Status";
$tdatadesaparecidos2017[".listFields"][] = "FAparicion";
$tdatadesaparecidos2017[".listFields"][] = "Oficio";
$tdatadesaparecidos2017[".listFields"][] = "EstApar";

$tdatadesaparecidos2017[".hideMobileList"] = array();


$tdatadesaparecidos2017[".viewFields"] = array();
$tdatadesaparecidos2017[".viewFields"][] = "Id";
$tdatadesaparecidos2017[".viewFields"][] = "Estado";
$tdatadesaparecidos2017[".viewFields"][] = "Mun";
$tdatadesaparecidos2017[".viewFields"][] = "InvMin";
$tdatadesaparecidos2017[".viewFields"][] = "FInicio";
$tdatadesaparecidos2017[".viewFields"][] = "MinPub";
$tdatadesaparecidos2017[".viewFields"][] = "Ofic";
$tdatadesaparecidos2017[".viewFields"][] = "FExtrav";
$tdatadesaparecidos2017[".viewFields"][] = "Nombre";
$tdatadesaparecidos2017[".viewFields"][] = "APat";
$tdatadesaparecidos2017[".viewFields"][] = "AMat";
$tdatadesaparecidos2017[".viewFields"][] = "Sexo";
$tdatadesaparecidos2017[".viewFields"][] = "EdadA";
$tdatadesaparecidos2017[".viewFields"][] = "EdadM";
$tdatadesaparecidos2017[".viewFields"][] = "Nac";
$tdatadesaparecidos2017[".viewFields"][] = "Origen";
$tdatadesaparecidos2017[".viewFields"][] = "Escolaridad";
$tdatadesaparecidos2017[".viewFields"][] = "Est";
$tdatadesaparecidos2017[".viewFields"][] = "Compl";
$tdatadesaparecidos2017[".viewFields"][] = "Ojos";
$tdatadesaparecidos2017[".viewFields"][] = "Piel";
$tdatadesaparecidos2017[".viewFields"][] = "Cab";
$tdatadesaparecidos2017[".viewFields"][] = "TCab";
$tdatadesaparecidos2017[".viewFields"][] = "Cabcol";
$tdatadesaparecidos2017[".viewFields"][] = "Nariz";
$tdatadesaparecidos2017[".viewFields"][] = "Labios";
$tdatadesaparecidos2017[".viewFields"][] = "Menton";
$tdatadesaparecidos2017[".viewFields"][] = "Cejas";
$tdatadesaparecidos2017[".viewFields"][] = "VFacial";
$tdatadesaparecidos2017[".viewFields"][] = "Delito";
$tdatadesaparecidos2017[".viewFields"][] = "Particularidades";
$tdatadesaparecidos2017[".viewFields"][] = "Nota";
$tdatadesaparecidos2017[".viewFields"][] = "DescHechos";
$tdatadesaparecidos2017[".viewFields"][] = "Obseva";
$tdatadesaparecidos2017[".viewFields"][] = "Status";
$tdatadesaparecidos2017[".viewFields"][] = "FAparicion";
$tdatadesaparecidos2017[".viewFields"][] = "Oficio";
$tdatadesaparecidos2017[".viewFields"][] = "EstApar";

$tdatadesaparecidos2017[".addFields"] = array();
$tdatadesaparecidos2017[".addFields"][] = "Estado";
$tdatadesaparecidos2017[".addFields"][] = "Mun";
$tdatadesaparecidos2017[".addFields"][] = "InvMin";
$tdatadesaparecidos2017[".addFields"][] = "FInicio";
$tdatadesaparecidos2017[".addFields"][] = "Ofic";
$tdatadesaparecidos2017[".addFields"][] = "FExtrav";
$tdatadesaparecidos2017[".addFields"][] = "Nombre";
$tdatadesaparecidos2017[".addFields"][] = "APat";
$tdatadesaparecidos2017[".addFields"][] = "AMat";
$tdatadesaparecidos2017[".addFields"][] = "Sexo";
$tdatadesaparecidos2017[".addFields"][] = "EdadA";
$tdatadesaparecidos2017[".addFields"][] = "EdadM";
$tdatadesaparecidos2017[".addFields"][] = "Nac";
$tdatadesaparecidos2017[".addFields"][] = "Origen";
$tdatadesaparecidos2017[".addFields"][] = "Escolaridad";
$tdatadesaparecidos2017[".addFields"][] = "Est";
$tdatadesaparecidos2017[".addFields"][] = "Compl";
$tdatadesaparecidos2017[".addFields"][] = "Ojos";
$tdatadesaparecidos2017[".addFields"][] = "Piel";
$tdatadesaparecidos2017[".addFields"][] = "Cab";
$tdatadesaparecidos2017[".addFields"][] = "TCab";
$tdatadesaparecidos2017[".addFields"][] = "Cabcol";
$tdatadesaparecidos2017[".addFields"][] = "Nariz";
$tdatadesaparecidos2017[".addFields"][] = "Labios";
$tdatadesaparecidos2017[".addFields"][] = "Menton";
$tdatadesaparecidos2017[".addFields"][] = "Cejas";
$tdatadesaparecidos2017[".addFields"][] = "VFacial";
$tdatadesaparecidos2017[".addFields"][] = "Delito";
$tdatadesaparecidos2017[".addFields"][] = "Particularidades";
$tdatadesaparecidos2017[".addFields"][] = "Nota";
$tdatadesaparecidos2017[".addFields"][] = "DescHechos";
$tdatadesaparecidos2017[".addFields"][] = "Obseva";
$tdatadesaparecidos2017[".addFields"][] = "Status";
$tdatadesaparecidos2017[".addFields"][] = "FAparicion";
$tdatadesaparecidos2017[".addFields"][] = "Oficio";
$tdatadesaparecidos2017[".addFields"][] = "EstApar";

$tdatadesaparecidos2017[".masterListFields"] = array();
$tdatadesaparecidos2017[".masterListFields"][] = "Id";
$tdatadesaparecidos2017[".masterListFields"][] = "Estado";
$tdatadesaparecidos2017[".masterListFields"][] = "Mun";
$tdatadesaparecidos2017[".masterListFields"][] = "InvMin";
$tdatadesaparecidos2017[".masterListFields"][] = "FInicio";
$tdatadesaparecidos2017[".masterListFields"][] = "MinPub";
$tdatadesaparecidos2017[".masterListFields"][] = "Agencia";
$tdatadesaparecidos2017[".masterListFields"][] = "Ofic";
$tdatadesaparecidos2017[".masterListFields"][] = "FExtrav";
$tdatadesaparecidos2017[".masterListFields"][] = "Nombre";
$tdatadesaparecidos2017[".masterListFields"][] = "APat";
$tdatadesaparecidos2017[".masterListFields"][] = "AMat";
$tdatadesaparecidos2017[".masterListFields"][] = "Sexo";
$tdatadesaparecidos2017[".masterListFields"][] = "EdadA";
$tdatadesaparecidos2017[".masterListFields"][] = "EdadM";
$tdatadesaparecidos2017[".masterListFields"][] = "Nac";
$tdatadesaparecidos2017[".masterListFields"][] = "Origen";
$tdatadesaparecidos2017[".masterListFields"][] = "Escolaridad";
$tdatadesaparecidos2017[".masterListFields"][] = "Est";
$tdatadesaparecidos2017[".masterListFields"][] = "Compl";
$tdatadesaparecidos2017[".masterListFields"][] = "Ojos";
$tdatadesaparecidos2017[".masterListFields"][] = "Piel";
$tdatadesaparecidos2017[".masterListFields"][] = "Cab";
$tdatadesaparecidos2017[".masterListFields"][] = "TCab";
$tdatadesaparecidos2017[".masterListFields"][] = "Cabcol";
$tdatadesaparecidos2017[".masterListFields"][] = "Nariz";
$tdatadesaparecidos2017[".masterListFields"][] = "Labios";
$tdatadesaparecidos2017[".masterListFields"][] = "Menton";
$tdatadesaparecidos2017[".masterListFields"][] = "Cejas";
$tdatadesaparecidos2017[".masterListFields"][] = "VFacial";
$tdatadesaparecidos2017[".masterListFields"][] = "Delito";
$tdatadesaparecidos2017[".masterListFields"][] = "Particularidades";
$tdatadesaparecidos2017[".masterListFields"][] = "Nota";
$tdatadesaparecidos2017[".masterListFields"][] = "DescHechos";
$tdatadesaparecidos2017[".masterListFields"][] = "Obseva";
$tdatadesaparecidos2017[".masterListFields"][] = "Status";
$tdatadesaparecidos2017[".masterListFields"][] = "FAparicion";
$tdatadesaparecidos2017[".masterListFields"][] = "Oficio";
$tdatadesaparecidos2017[".masterListFields"][] = "EstApar";
$tdatadesaparecidos2017[".masterListFields"][] = "Tipo";
$tdatadesaparecidos2017[".masterListFields"][] = "FRecib";
$tdatadesaparecidos2017[".masterListFields"][] = "UsrBaja";
$tdatadesaparecidos2017[".masterListFields"][] = "FecBaja";
$tdatadesaparecidos2017[".masterListFields"][] = "RutFoto";
$tdatadesaparecidos2017[".masterListFields"][] = "FCaptura";
$tdatadesaparecidos2017[".masterListFields"][] = "TipoDoc";
$tdatadesaparecidos2017[".masterListFields"][] = "Usuario";

$tdatadesaparecidos2017[".inlineAddFields"] = array();
$tdatadesaparecidos2017[".inlineAddFields"][] = "Estado";
$tdatadesaparecidos2017[".inlineAddFields"][] = "Mun";
$tdatadesaparecidos2017[".inlineAddFields"][] = "InvMin";
$tdatadesaparecidos2017[".inlineAddFields"][] = "FInicio";
$tdatadesaparecidos2017[".inlineAddFields"][] = "Ofic";
$tdatadesaparecidos2017[".inlineAddFields"][] = "FExtrav";
$tdatadesaparecidos2017[".inlineAddFields"][] = "Nombre";
$tdatadesaparecidos2017[".inlineAddFields"][] = "APat";
$tdatadesaparecidos2017[".inlineAddFields"][] = "AMat";
$tdatadesaparecidos2017[".inlineAddFields"][] = "Sexo";
$tdatadesaparecidos2017[".inlineAddFields"][] = "EdadA";
$tdatadesaparecidos2017[".inlineAddFields"][] = "EdadM";
$tdatadesaparecidos2017[".inlineAddFields"][] = "Nac";
$tdatadesaparecidos2017[".inlineAddFields"][] = "Origen";
$tdatadesaparecidos2017[".inlineAddFields"][] = "Escolaridad";
$tdatadesaparecidos2017[".inlineAddFields"][] = "Est";
$tdatadesaparecidos2017[".inlineAddFields"][] = "Compl";
$tdatadesaparecidos2017[".inlineAddFields"][] = "Ojos";
$tdatadesaparecidos2017[".inlineAddFields"][] = "Piel";
$tdatadesaparecidos2017[".inlineAddFields"][] = "Cab";
$tdatadesaparecidos2017[".inlineAddFields"][] = "TCab";
$tdatadesaparecidos2017[".inlineAddFields"][] = "Cabcol";
$tdatadesaparecidos2017[".inlineAddFields"][] = "Nariz";
$tdatadesaparecidos2017[".inlineAddFields"][] = "Labios";
$tdatadesaparecidos2017[".inlineAddFields"][] = "Menton";
$tdatadesaparecidos2017[".inlineAddFields"][] = "Cejas";
$tdatadesaparecidos2017[".inlineAddFields"][] = "VFacial";
$tdatadesaparecidos2017[".inlineAddFields"][] = "Delito";
$tdatadesaparecidos2017[".inlineAddFields"][] = "Particularidades";
$tdatadesaparecidos2017[".inlineAddFields"][] = "Nota";
$tdatadesaparecidos2017[".inlineAddFields"][] = "DescHechos";
$tdatadesaparecidos2017[".inlineAddFields"][] = "Obseva";
$tdatadesaparecidos2017[".inlineAddFields"][] = "Status";
$tdatadesaparecidos2017[".inlineAddFields"][] = "FAparicion";
$tdatadesaparecidos2017[".inlineAddFields"][] = "Oficio";
$tdatadesaparecidos2017[".inlineAddFields"][] = "EstApar";

$tdatadesaparecidos2017[".editFields"] = array();
$tdatadesaparecidos2017[".editFields"][] = "Estado";
$tdatadesaparecidos2017[".editFields"][] = "Mun";
$tdatadesaparecidos2017[".editFields"][] = "InvMin";
$tdatadesaparecidos2017[".editFields"][] = "FInicio";
$tdatadesaparecidos2017[".editFields"][] = "MinPub";
$tdatadesaparecidos2017[".editFields"][] = "Ofic";
$tdatadesaparecidos2017[".editFields"][] = "FExtrav";
$tdatadesaparecidos2017[".editFields"][] = "Nombre";
$tdatadesaparecidos2017[".editFields"][] = "APat";
$tdatadesaparecidos2017[".editFields"][] = "AMat";
$tdatadesaparecidos2017[".editFields"][] = "Sexo";
$tdatadesaparecidos2017[".editFields"][] = "EdadA";
$tdatadesaparecidos2017[".editFields"][] = "EdadM";
$tdatadesaparecidos2017[".editFields"][] = "Nac";
$tdatadesaparecidos2017[".editFields"][] = "Origen";
$tdatadesaparecidos2017[".editFields"][] = "Escolaridad";
$tdatadesaparecidos2017[".editFields"][] = "Est";
$tdatadesaparecidos2017[".editFields"][] = "Compl";
$tdatadesaparecidos2017[".editFields"][] = "Ojos";
$tdatadesaparecidos2017[".editFields"][] = "Piel";
$tdatadesaparecidos2017[".editFields"][] = "Cab";
$tdatadesaparecidos2017[".editFields"][] = "TCab";
$tdatadesaparecidos2017[".editFields"][] = "Cabcol";
$tdatadesaparecidos2017[".editFields"][] = "Nariz";
$tdatadesaparecidos2017[".editFields"][] = "Labios";
$tdatadesaparecidos2017[".editFields"][] = "Menton";
$tdatadesaparecidos2017[".editFields"][] = "Cejas";
$tdatadesaparecidos2017[".editFields"][] = "VFacial";
$tdatadesaparecidos2017[".editFields"][] = "Delito";
$tdatadesaparecidos2017[".editFields"][] = "Particularidades";
$tdatadesaparecidos2017[".editFields"][] = "Nota";
$tdatadesaparecidos2017[".editFields"][] = "DescHechos";
$tdatadesaparecidos2017[".editFields"][] = "Obseva";
$tdatadesaparecidos2017[".editFields"][] = "Status";
$tdatadesaparecidos2017[".editFields"][] = "FAparicion";
$tdatadesaparecidos2017[".editFields"][] = "Oficio";
$tdatadesaparecidos2017[".editFields"][] = "EstApar";

$tdatadesaparecidos2017[".inlineEditFields"] = array();
$tdatadesaparecidos2017[".inlineEditFields"][] = "Estado";
$tdatadesaparecidos2017[".inlineEditFields"][] = "Mun";
$tdatadesaparecidos2017[".inlineEditFields"][] = "InvMin";
$tdatadesaparecidos2017[".inlineEditFields"][] = "FInicio";
$tdatadesaparecidos2017[".inlineEditFields"][] = "MinPub";
$tdatadesaparecidos2017[".inlineEditFields"][] = "Ofic";
$tdatadesaparecidos2017[".inlineEditFields"][] = "FExtrav";
$tdatadesaparecidos2017[".inlineEditFields"][] = "Nombre";
$tdatadesaparecidos2017[".inlineEditFields"][] = "APat";
$tdatadesaparecidos2017[".inlineEditFields"][] = "AMat";
$tdatadesaparecidos2017[".inlineEditFields"][] = "Sexo";
$tdatadesaparecidos2017[".inlineEditFields"][] = "EdadA";
$tdatadesaparecidos2017[".inlineEditFields"][] = "EdadM";
$tdatadesaparecidos2017[".inlineEditFields"][] = "Nac";
$tdatadesaparecidos2017[".inlineEditFields"][] = "Origen";
$tdatadesaparecidos2017[".inlineEditFields"][] = "Escolaridad";
$tdatadesaparecidos2017[".inlineEditFields"][] = "Est";
$tdatadesaparecidos2017[".inlineEditFields"][] = "Compl";
$tdatadesaparecidos2017[".inlineEditFields"][] = "Ojos";
$tdatadesaparecidos2017[".inlineEditFields"][] = "Piel";
$tdatadesaparecidos2017[".inlineEditFields"][] = "Cab";
$tdatadesaparecidos2017[".inlineEditFields"][] = "TCab";
$tdatadesaparecidos2017[".inlineEditFields"][] = "Cabcol";
$tdatadesaparecidos2017[".inlineEditFields"][] = "Nariz";
$tdatadesaparecidos2017[".inlineEditFields"][] = "Labios";
$tdatadesaparecidos2017[".inlineEditFields"][] = "Menton";
$tdatadesaparecidos2017[".inlineEditFields"][] = "Cejas";
$tdatadesaparecidos2017[".inlineEditFields"][] = "VFacial";
$tdatadesaparecidos2017[".inlineEditFields"][] = "Delito";
$tdatadesaparecidos2017[".inlineEditFields"][] = "Particularidades";
$tdatadesaparecidos2017[".inlineEditFields"][] = "Nota";
$tdatadesaparecidos2017[".inlineEditFields"][] = "DescHechos";
$tdatadesaparecidos2017[".inlineEditFields"][] = "Obseva";
$tdatadesaparecidos2017[".inlineEditFields"][] = "Status";
$tdatadesaparecidos2017[".inlineEditFields"][] = "FAparicion";
$tdatadesaparecidos2017[".inlineEditFields"][] = "Oficio";
$tdatadesaparecidos2017[".inlineEditFields"][] = "EstApar";

$tdatadesaparecidos2017[".exportFields"] = array();
$tdatadesaparecidos2017[".exportFields"][] = "Id";
$tdatadesaparecidos2017[".exportFields"][] = "Estado";
$tdatadesaparecidos2017[".exportFields"][] = "Mun";
$tdatadesaparecidos2017[".exportFields"][] = "InvMin";
$tdatadesaparecidos2017[".exportFields"][] = "FInicio";
$tdatadesaparecidos2017[".exportFields"][] = "MinPub";
$tdatadesaparecidos2017[".exportFields"][] = "Ofic";
$tdatadesaparecidos2017[".exportFields"][] = "FExtrav";
$tdatadesaparecidos2017[".exportFields"][] = "Nombre";
$tdatadesaparecidos2017[".exportFields"][] = "APat";
$tdatadesaparecidos2017[".exportFields"][] = "AMat";
$tdatadesaparecidos2017[".exportFields"][] = "Sexo";
$tdatadesaparecidos2017[".exportFields"][] = "EdadA";
$tdatadesaparecidos2017[".exportFields"][] = "EdadM";
$tdatadesaparecidos2017[".exportFields"][] = "Nac";
$tdatadesaparecidos2017[".exportFields"][] = "Origen";
$tdatadesaparecidos2017[".exportFields"][] = "Escolaridad";
$tdatadesaparecidos2017[".exportFields"][] = "Est";
$tdatadesaparecidos2017[".exportFields"][] = "Compl";
$tdatadesaparecidos2017[".exportFields"][] = "Ojos";
$tdatadesaparecidos2017[".exportFields"][] = "Piel";
$tdatadesaparecidos2017[".exportFields"][] = "Cab";
$tdatadesaparecidos2017[".exportFields"][] = "TCab";
$tdatadesaparecidos2017[".exportFields"][] = "Cabcol";
$tdatadesaparecidos2017[".exportFields"][] = "Nariz";
$tdatadesaparecidos2017[".exportFields"][] = "Labios";
$tdatadesaparecidos2017[".exportFields"][] = "Menton";
$tdatadesaparecidos2017[".exportFields"][] = "Cejas";
$tdatadesaparecidos2017[".exportFields"][] = "VFacial";
$tdatadesaparecidos2017[".exportFields"][] = "Delito";
$tdatadesaparecidos2017[".exportFields"][] = "Particularidades";
$tdatadesaparecidos2017[".exportFields"][] = "Nota";
$tdatadesaparecidos2017[".exportFields"][] = "DescHechos";
$tdatadesaparecidos2017[".exportFields"][] = "Obseva";
$tdatadesaparecidos2017[".exportFields"][] = "Status";
$tdatadesaparecidos2017[".exportFields"][] = "FAparicion";
$tdatadesaparecidos2017[".exportFields"][] = "Oficio";
$tdatadesaparecidos2017[".exportFields"][] = "EstApar";

$tdatadesaparecidos2017[".importFields"] = array();
$tdatadesaparecidos2017[".importFields"][] = "Id";
$tdatadesaparecidos2017[".importFields"][] = "Estado";
$tdatadesaparecidos2017[".importFields"][] = "Mun";
$tdatadesaparecidos2017[".importFields"][] = "InvMin";
$tdatadesaparecidos2017[".importFields"][] = "FInicio";
$tdatadesaparecidos2017[".importFields"][] = "MinPub";
$tdatadesaparecidos2017[".importFields"][] = "Ofic";
$tdatadesaparecidos2017[".importFields"][] = "FExtrav";
$tdatadesaparecidos2017[".importFields"][] = "Nombre";
$tdatadesaparecidos2017[".importFields"][] = "APat";
$tdatadesaparecidos2017[".importFields"][] = "AMat";
$tdatadesaparecidos2017[".importFields"][] = "Sexo";
$tdatadesaparecidos2017[".importFields"][] = "EdadA";
$tdatadesaparecidos2017[".importFields"][] = "EdadM";
$tdatadesaparecidos2017[".importFields"][] = "Nac";
$tdatadesaparecidos2017[".importFields"][] = "Origen";
$tdatadesaparecidos2017[".importFields"][] = "Escolaridad";
$tdatadesaparecidos2017[".importFields"][] = "Est";
$tdatadesaparecidos2017[".importFields"][] = "Compl";
$tdatadesaparecidos2017[".importFields"][] = "Ojos";
$tdatadesaparecidos2017[".importFields"][] = "Piel";
$tdatadesaparecidos2017[".importFields"][] = "Cab";
$tdatadesaparecidos2017[".importFields"][] = "TCab";
$tdatadesaparecidos2017[".importFields"][] = "Cabcol";
$tdatadesaparecidos2017[".importFields"][] = "Nariz";
$tdatadesaparecidos2017[".importFields"][] = "Labios";
$tdatadesaparecidos2017[".importFields"][] = "Menton";
$tdatadesaparecidos2017[".importFields"][] = "Cejas";
$tdatadesaparecidos2017[".importFields"][] = "VFacial";
$tdatadesaparecidos2017[".importFields"][] = "Delito";
$tdatadesaparecidos2017[".importFields"][] = "Particularidades";
$tdatadesaparecidos2017[".importFields"][] = "Nota";
$tdatadesaparecidos2017[".importFields"][] = "DescHechos";
$tdatadesaparecidos2017[".importFields"][] = "Obseva";
$tdatadesaparecidos2017[".importFields"][] = "Status";
$tdatadesaparecidos2017[".importFields"][] = "FAparicion";
$tdatadesaparecidos2017[".importFields"][] = "Oficio";
$tdatadesaparecidos2017[".importFields"][] = "EstApar";

$tdatadesaparecidos2017[".printFields"] = array();
$tdatadesaparecidos2017[".printFields"][] = "Id";
$tdatadesaparecidos2017[".printFields"][] = "Estado";
$tdatadesaparecidos2017[".printFields"][] = "Mun";
$tdatadesaparecidos2017[".printFields"][] = "InvMin";
$tdatadesaparecidos2017[".printFields"][] = "FInicio";
$tdatadesaparecidos2017[".printFields"][] = "MinPub";
$tdatadesaparecidos2017[".printFields"][] = "Ofic";
$tdatadesaparecidos2017[".printFields"][] = "FExtrav";
$tdatadesaparecidos2017[".printFields"][] = "Nombre";
$tdatadesaparecidos2017[".printFields"][] = "APat";
$tdatadesaparecidos2017[".printFields"][] = "AMat";
$tdatadesaparecidos2017[".printFields"][] = "Sexo";
$tdatadesaparecidos2017[".printFields"][] = "EdadA";
$tdatadesaparecidos2017[".printFields"][] = "EdadM";
$tdatadesaparecidos2017[".printFields"][] = "Nac";
$tdatadesaparecidos2017[".printFields"][] = "Origen";
$tdatadesaparecidos2017[".printFields"][] = "Escolaridad";
$tdatadesaparecidos2017[".printFields"][] = "Est";
$tdatadesaparecidos2017[".printFields"][] = "Compl";
$tdatadesaparecidos2017[".printFields"][] = "Ojos";
$tdatadesaparecidos2017[".printFields"][] = "Piel";
$tdatadesaparecidos2017[".printFields"][] = "Cab";
$tdatadesaparecidos2017[".printFields"][] = "TCab";
$tdatadesaparecidos2017[".printFields"][] = "Cabcol";
$tdatadesaparecidos2017[".printFields"][] = "Nariz";
$tdatadesaparecidos2017[".printFields"][] = "Labios";
$tdatadesaparecidos2017[".printFields"][] = "Menton";
$tdatadesaparecidos2017[".printFields"][] = "Cejas";
$tdatadesaparecidos2017[".printFields"][] = "VFacial";
$tdatadesaparecidos2017[".printFields"][] = "Delito";
$tdatadesaparecidos2017[".printFields"][] = "Particularidades";
$tdatadesaparecidos2017[".printFields"][] = "Nota";
$tdatadesaparecidos2017[".printFields"][] = "DescHechos";
$tdatadesaparecidos2017[".printFields"][] = "Obseva";
$tdatadesaparecidos2017[".printFields"][] = "Status";
$tdatadesaparecidos2017[".printFields"][] = "FAparicion";
$tdatadesaparecidos2017[".printFields"][] = "Oficio";
$tdatadesaparecidos2017[".printFields"][] = "EstApar";

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
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
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
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Estado"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "cat_edos";
	$edata["LookupConnId"] = "desaparecidos_at_localhost";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nom_ent";
	
		
	$edata["LookupOrderBy"] = "nom_ent";
	
		
			
		
		$edata["SimpleAdd"] = true;
			
				//dependent dropdowns	
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "Mun";
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		
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

	

	
	$tdatadesaparecidos2017["Estado"] = $fdata;
//	Mun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Mun";
	$fdata["GoodName"] = "Mun";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Mun"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "cat_mpos";
	$edata["LookupConnId"] = "desaparecidos_at_localhost";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre";
	
		
	$edata["LookupOrderBy"] = "nombre";
	
		
		$edata["UseCategory"] = true; 
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "Estado", "lookup" => "fkEdo" );
		
		
		$edata["SimpleAdd"] = true;
			
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 180;
	
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

	

	
	$tdatadesaparecidos2017["Mun"] = $fdata;
//	InvMin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "InvMin";
	$fdata["GoodName"] = "InvMin";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","InvMin"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
		$edata["controlWidth"] = 150;
	
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
//	FInicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FInicio";
	$fdata["GoodName"] = "FInicio";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","FInicio"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
//	MinPub
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "MinPub";
	$fdata["GoodName"] = "MinPub";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","MinPub"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
	$fdata["Index"] = 7;
	$fdata["strName"] = "Agencia";
	$fdata["GoodName"] = "Agencia";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Agencia"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Agencia"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Agencia";
	
		
		
				
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
	
	
	
	

	

	
	$tdatadesaparecidos2017["Agencia"] = $fdata;
//	Ofic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Ofic";
	$fdata["GoodName"] = "Ofic";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Ofic"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
//	Sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Sexo";
	$fdata["GoodName"] = "Sexo";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Sexo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "cat_sexo";
	$edata["LookupConnId"] = "desaparecidos_at_localhost";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "sexo";
	
		
	$edata["LookupOrderBy"] = "sexo";
	
		
			
		
		$edata["SimpleAdd"] = true;
			
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
//	EdadA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "EdadA";
	$fdata["GoodName"] = "EdadA";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","EdadA"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "EdadA"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EdadA";
	
		
		
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

	

	
	$tdatadesaparecidos2017["EdadA"] = $fdata;
//	EdadM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "EdadM";
	$fdata["GoodName"] = "EdadM";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","EdadM"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "EdadM"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EdadM";
	
		
		
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

	

	
	$tdatadesaparecidos2017["EdadM"] = $fdata;
//	Nac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Nac";
	$fdata["GoodName"] = "Nac";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Nac"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "catnacionalidad";
	$edata["LookupConnId"] = "desaparecidos_at_localhost";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "Clave";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Nacionalidad";
	
		
	$edata["LookupOrderBy"] = "Nacionalidad";
	
		
			
		
		$edata["SimpleAdd"] = true;
			
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
	$fdata["Index"] = 17;
	$fdata["strName"] = "Origen";
	$fdata["GoodName"] = "Origen";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Origen"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "cat_edos";
	$edata["LookupConnId"] = "desaparecidos_at_localhost";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nom_ent";
	
		
	$edata["LookupOrderBy"] = "nom_ent";
	
		
			
		
		$edata["SimpleAdd"] = true;
			
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
	$fdata["Index"] = 18;
	$fdata["strName"] = "Escolaridad";
	$fdata["GoodName"] = "Escolaridad";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Escolaridad"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "cat_escolaridad";
	$edata["LookupConnId"] = "desaparecidos_at_localhost";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "idescolaridad";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "escolaridad";
	
		
	$edata["LookupOrderBy"] = "escolaridad";
	
		
			
		
		$edata["SimpleAdd"] = true;
			
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
	$fdata["Index"] = 19;
	$fdata["strName"] = "Est";
	$fdata["GoodName"] = "Est";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Est"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	$fdata["Index"] = 20;
	$fdata["strName"] = "Compl";
	$fdata["GoodName"] = "Compl";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Compl"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "cat_comp";
	$edata["LookupConnId"] = "desaparecidos_at_localhost";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "idcomp";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "complexion";
	
		
	$edata["LookupOrderBy"] = "complexion";
	
		
			
		
		$edata["SimpleAdd"] = true;
			
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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

	

	
	$tdatadesaparecidos2017["Compl"] = $fdata;
//	Ojos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Ojos";
	$fdata["GoodName"] = "Ojos";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Ojos"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "cat_ojos";
	$edata["LookupConnId"] = "desaparecidos_at_localhost";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "idojos";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ojos";
	
		
	$edata["LookupOrderBy"] = "ojos";
	
		
			
		
		$edata["SimpleAdd"] = true;
			
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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

	

	
	$tdatadesaparecidos2017["Ojos"] = $fdata;
//	Piel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Piel";
	$fdata["GoodName"] = "Piel";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Piel"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "cat_piel";
	$edata["LookupConnId"] = "desaparecidos_at_localhost";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "idpiel";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "piel";
	
		
	$edata["LookupOrderBy"] = "piel";
	
		
			
		
		$edata["SimpleAdd"] = true;
			
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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

	

	
	$tdatadesaparecidos2017["Piel"] = $fdata;
//	Cab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Cab";
	$fdata["GoodName"] = "Cab";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Cab"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "cat_cabtam";
	$edata["LookupConnId"] = "desaparecidos_at_localhost";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "idcabtam";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "cabtam";
	
		
	$edata["LookupOrderBy"] = "cabtam";
	
		
			
		
		$edata["SimpleAdd"] = true;
			
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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

	

	
	$tdatadesaparecidos2017["Cab"] = $fdata;
//	TCab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "TCab";
	$fdata["GoodName"] = "TCab";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","TCab"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "cat_cabtip";
	$edata["LookupConnId"] = "desaparecidos_at_localhost";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "idcabtip";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "cabtip";
	
		
	$edata["LookupOrderBy"] = "cabtip";
	
		
			
		
		$edata["SimpleAdd"] = true;
			
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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

	

	
	$tdatadesaparecidos2017["TCab"] = $fdata;
//	Cabcol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Cabcol";
	$fdata["GoodName"] = "Cabcol";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Cabcol"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Cabcol"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cabcol";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "cat_cabcol";
	$edata["LookupConnId"] = "desaparecidos_at_localhost";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "idcabcol";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "cabcol";
	
		
	$edata["LookupOrderBy"] = "cabcol";
	
		
			
		
		$edata["SimpleAdd"] = true;
			
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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

	

	
	$tdatadesaparecidos2017["Cabcol"] = $fdata;
//	Nariz
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Nariz";
	$fdata["GoodName"] = "Nariz";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Nariz"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "cat_nariz";
	$edata["LookupConnId"] = "desaparecidos_at_localhost";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "idnariz";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nariz";
	
		
	$edata["LookupOrderBy"] = "nariz";
	
		
			
		
		$edata["SimpleAdd"] = true;
			
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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

	

	
	$tdatadesaparecidos2017["Nariz"] = $fdata;
//	Labios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Labios";
	$fdata["GoodName"] = "Labios";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Labios"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "cat_labios";
	$edata["LookupConnId"] = "desaparecidos_at_localhost";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "idlabios";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "labios";
	
		
	$edata["LookupOrderBy"] = "labios";
	
		
			
		
		$edata["SimpleAdd"] = true;
			
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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

	

	
	$tdatadesaparecidos2017["Labios"] = $fdata;
//	Menton
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Menton";
	$fdata["GoodName"] = "Menton";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Menton"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "cat_menton";
	$edata["LookupConnId"] = "desaparecidos_at_localhost";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "idmenton";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "menton";
	
		
	$edata["LookupOrderBy"] = "menton";
	
		
			
		
		$edata["SimpleAdd"] = true;
			
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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

	

	
	$tdatadesaparecidos2017["Menton"] = $fdata;
//	Cejas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "Cejas";
	$fdata["GoodName"] = "Cejas";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Cejas"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "cat_cejas";
	$edata["LookupConnId"] = "desaparecidos_at_localhost";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "idcejas";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "cejas";
	
		
	$edata["LookupOrderBy"] = "cejas";
	
		
			
		
		$edata["SimpleAdd"] = true;
			
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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

	

	
	$tdatadesaparecidos2017["Cejas"] = $fdata;
//	VFacial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "VFacial";
	$fdata["GoodName"] = "VFacial";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","VFacial"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "cat_vfacial";
	$edata["LookupConnId"] = "desaparecidos_at_localhost";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "idvfacial";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "vfacial";
	
		
	$edata["LookupOrderBy"] = "vfacial";
	
		
			
		
		$edata["SimpleAdd"] = true;
			
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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

	

	
	$tdatadesaparecidos2017["VFacial"] = $fdata;
//	Delito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Delito";
	$fdata["GoodName"] = "Delito";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Delito"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "cat_delito";
	$edata["LookupConnId"] = "desaparecidos_at_localhost";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "delito";
	
		
	$edata["LookupOrderBy"] = "delito";
	
		
			
		
		$edata["SimpleAdd"] = true;
			
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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

	

	
	$tdatadesaparecidos2017["Delito"] = $fdata;
//	Particularidades
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "Particularidades";
	$fdata["GoodName"] = "Particularidades";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Particularidades"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 50;
			$edata["nCols"] = 200;
	
		
		
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
	$fdata["Index"] = 33;
	$fdata["strName"] = "Nota";
	$fdata["GoodName"] = "Nota";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Nota"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 50;
			$edata["nCols"] = 200;
	
		
		
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
	$fdata["Index"] = 34;
	$fdata["strName"] = "DescHechos";
	$fdata["GoodName"] = "DescHechos";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","DescHechos"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 50;
			$edata["nCols"] = 200;
	
		
		
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
	$fdata["Index"] = 35;
	$fdata["strName"] = "Obseva";
	$fdata["GoodName"] = "Obseva";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Obseva"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 50;
			$edata["nCols"] = 200;
	
		
		
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
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Status"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "cat_estatus";
	$edata["LookupConnId"] = "desaparecidos_at_localhost";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "estatus";
	
		
	$edata["LookupOrderBy"] = "estatus";
	
		
			
		
		$edata["SimpleAdd"] = true;
			
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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

	

	
	$tdatadesaparecidos2017["Status"] = $fdata;
//	FAparicion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "FAparicion";
	$fdata["GoodName"] = "FAparicion";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","FAparicion"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	$fdata["Index"] = 38;
	$fdata["strName"] = "Oficio";
	$fdata["GoodName"] = "Oficio";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Oficio"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	$fdata["Index"] = 39;
	$fdata["strName"] = "EstApar";
	$fdata["GoodName"] = "EstApar";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","EstApar"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "cat_est_apar";
	$edata["LookupConnId"] = "desaparecidos_at_localhost";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Estatus";
	
		
	$edata["LookupOrderBy"] = "Estatus";
	
		
			
		
		$edata["SimpleAdd"] = true;
			
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
//	Tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Tipo";
	$fdata["GoodName"] = "Tipo";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Tipo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Tipo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tipo";
	
		
		
				
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
	
	
	
	

	

	
	$tdatadesaparecidos2017["Tipo"] = $fdata;
//	FRecib
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "FRecib";
	$fdata["GoodName"] = "FRecib";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","FRecib"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "FRecib"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FRecib";
	
		
		
				
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
	
	
	
	

	

	
	$tdatadesaparecidos2017["FRecib"] = $fdata;
//	UsrBaja
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "UsrBaja";
	$fdata["GoodName"] = "UsrBaja";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","UsrBaja"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "UsrBaja"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UsrBaja";
	
		
		
				
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
	
	
	
	

	

	
	$tdatadesaparecidos2017["UsrBaja"] = $fdata;
//	FecBaja
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "FecBaja";
	$fdata["GoodName"] = "FecBaja";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","FecBaja"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "FecBaja"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FecBaja";
	
		
		
				
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
	
	
	
	

	

	
	$tdatadesaparecidos2017["FecBaja"] = $fdata;
//	RutFoto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "RutFoto";
	$fdata["GoodName"] = "RutFoto";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","RutFoto"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "RutFoto"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RutFoto";
	
		
		
				
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
	
	
	
	

	

	
	$tdatadesaparecidos2017["RutFoto"] = $fdata;
//	FCaptura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "FCaptura";
	$fdata["GoodName"] = "FCaptura";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","FCaptura"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "FCaptura"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FCaptura";
	
		
		
				
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
	
	
	
	

	

	
	$tdatadesaparecidos2017["FCaptura"] = $fdata;
//	TipoDoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "TipoDoc";
	$fdata["GoodName"] = "TipoDoc";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","TipoDoc"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "TipoDoc"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoDoc";
	
		
		
				
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
	
	
	
	

	

	
	$tdatadesaparecidos2017["TipoDoc"] = $fdata;
//	Usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "Usuario";
	$fdata["GoodName"] = "Usuario";
	$fdata["ownerTable"] = "desaparecidos2017";
	$fdata["Label"] = GetFieldLabel("desaparecidos2017","Usuario"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Usuario"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Usuario";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdatadesaparecidos2017["Usuario"] = $fdata;

	
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
$proto0["m_strFieldList"] = "Id,  	Estado,  	Mun,  	InvMin,  	FInicio,  	MinPub,  	Agencia,  	Ofic,  	FExtrav,  	Nombre,  	APat,  	AMat,  	Sexo,  	EdadA,  	EdadM,  	Nac,  	Origen,  	Escolaridad,  	Est,  	Compl,  	Ojos,  	Piel,  	Cab,  	TCab,  	Cabcol,  	Nariz,  	Labios,  	Menton,  	Cejas,  	VFacial,  	Delito,  	Particularidades,  	Nota,  	DescHechos,  	Obseva,  	Status,  	FAparicion,  	Oficio,  	EstApar,  	Tipo,  	FRecib,  	UsrBaja,  	FecBaja,  	RutFoto,  	FCaptura,  	TipoDoc,  	Usuario";
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
	"m_strName" => "Estado",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto7["m_sql"] = "Estado";
$proto7["m_srcTableName"] = "desaparecidos2017";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Mun",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto9["m_sql"] = "Mun";
$proto9["m_srcTableName"] = "desaparecidos2017";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "InvMin",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto11["m_sql"] = "InvMin";
$proto11["m_srcTableName"] = "desaparecidos2017";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "FInicio",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto13["m_sql"] = "FInicio";
$proto13["m_srcTableName"] = "desaparecidos2017";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "MinPub",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto15["m_sql"] = "MinPub";
$proto15["m_srcTableName"] = "desaparecidos2017";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Agencia",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto17["m_sql"] = "Agencia";
$proto17["m_srcTableName"] = "desaparecidos2017";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Ofic",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto19["m_sql"] = "Ofic";
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
	"m_strName" => "Sexo",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto29["m_sql"] = "Sexo";
$proto29["m_srcTableName"] = "desaparecidos2017";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "EdadA",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto31["m_sql"] = "EdadA";
$proto31["m_srcTableName"] = "desaparecidos2017";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "EdadM",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto33["m_sql"] = "EdadM";
$proto33["m_srcTableName"] = "desaparecidos2017";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "Nac",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto35["m_sql"] = "Nac";
$proto35["m_srcTableName"] = "desaparecidos2017";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "Origen",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto37["m_sql"] = "Origen";
$proto37["m_srcTableName"] = "desaparecidos2017";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "Escolaridad",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto39["m_sql"] = "Escolaridad";
$proto39["m_srcTableName"] = "desaparecidos2017";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "Est",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto41["m_sql"] = "Est";
$proto41["m_srcTableName"] = "desaparecidos2017";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "Compl",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto43["m_sql"] = "Compl";
$proto43["m_srcTableName"] = "desaparecidos2017";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "Ojos",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto45["m_sql"] = "Ojos";
$proto45["m_srcTableName"] = "desaparecidos2017";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "Piel",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto47["m_sql"] = "Piel";
$proto47["m_srcTableName"] = "desaparecidos2017";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "Cab",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto49["m_sql"] = "Cab";
$proto49["m_srcTableName"] = "desaparecidos2017";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "TCab",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto51["m_sql"] = "TCab";
$proto51["m_srcTableName"] = "desaparecidos2017";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "Cabcol",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto53["m_sql"] = "Cabcol";
$proto53["m_srcTableName"] = "desaparecidos2017";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "Nariz",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto55["m_sql"] = "Nariz";
$proto55["m_srcTableName"] = "desaparecidos2017";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "Labios",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto57["m_sql"] = "Labios";
$proto57["m_srcTableName"] = "desaparecidos2017";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "Menton",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto59["m_sql"] = "Menton";
$proto59["m_srcTableName"] = "desaparecidos2017";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "Cejas",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto61["m_sql"] = "Cejas";
$proto61["m_srcTableName"] = "desaparecidos2017";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "VFacial",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto63["m_sql"] = "VFacial";
$proto63["m_srcTableName"] = "desaparecidos2017";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "Delito",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto65["m_sql"] = "Delito";
$proto65["m_srcTableName"] = "desaparecidos2017";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "Particularidades",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto67["m_sql"] = "Particularidades";
$proto67["m_srcTableName"] = "desaparecidos2017";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "Nota",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto69["m_sql"] = "Nota";
$proto69["m_srcTableName"] = "desaparecidos2017";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "DescHechos",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto71["m_sql"] = "DescHechos";
$proto71["m_srcTableName"] = "desaparecidos2017";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "Obseva",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto73["m_sql"] = "Obseva";
$proto73["m_srcTableName"] = "desaparecidos2017";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto75["m_sql"] = "Status";
$proto75["m_srcTableName"] = "desaparecidos2017";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "FAparicion",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto77["m_sql"] = "FAparicion";
$proto77["m_srcTableName"] = "desaparecidos2017";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "Oficio",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto79["m_sql"] = "Oficio";
$proto79["m_srcTableName"] = "desaparecidos2017";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "EstApar",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto81["m_sql"] = "EstApar";
$proto81["m_srcTableName"] = "desaparecidos2017";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto83["m_sql"] = "Tipo";
$proto83["m_srcTableName"] = "desaparecidos2017";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto0["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "FRecib",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto85["m_sql"] = "FRecib";
$proto85["m_srcTableName"] = "desaparecidos2017";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto0["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLField(array(
	"m_strName" => "UsrBaja",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto87["m_sql"] = "UsrBaja";
$proto87["m_srcTableName"] = "desaparecidos2017";
$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "";
$obj = new SQLFieldListItem($proto87);

$proto0["m_fieldlist"][]=$obj;
						$proto89=array();
			$obj = new SQLField(array(
	"m_strName" => "FecBaja",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto89["m_sql"] = "FecBaja";
$proto89["m_srcTableName"] = "desaparecidos2017";
$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "";
$obj = new SQLFieldListItem($proto89);

$proto0["m_fieldlist"][]=$obj;
						$proto91=array();
			$obj = new SQLField(array(
	"m_strName" => "RutFoto",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto91["m_sql"] = "RutFoto";
$proto91["m_srcTableName"] = "desaparecidos2017";
$proto91["m_expr"]=$obj;
$proto91["m_alias"] = "";
$obj = new SQLFieldListItem($proto91);

$proto0["m_fieldlist"][]=$obj;
						$proto93=array();
			$obj = new SQLField(array(
	"m_strName" => "FCaptura",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto93["m_sql"] = "FCaptura";
$proto93["m_srcTableName"] = "desaparecidos2017";
$proto93["m_expr"]=$obj;
$proto93["m_alias"] = "";
$obj = new SQLFieldListItem($proto93);

$proto0["m_fieldlist"][]=$obj;
						$proto95=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoDoc",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto95["m_sql"] = "TipoDoc";
$proto95["m_srcTableName"] = "desaparecidos2017";
$proto95["m_expr"]=$obj;
$proto95["m_alias"] = "";
$obj = new SQLFieldListItem($proto95);

$proto0["m_fieldlist"][]=$obj;
						$proto97=array();
			$obj = new SQLField(array(
	"m_strName" => "Usuario",
	"m_strTable" => "desaparecidos2017",
	"m_srcTableName" => "desaparecidos2017"
));

$proto97["m_sql"] = "Usuario";
$proto97["m_srcTableName"] = "desaparecidos2017";
$proto97["m_expr"]=$obj;
$proto97["m_alias"] = "";
$obj = new SQLFieldListItem($proto97);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto99=array();
$proto99["m_link"] = "SQLL_MAIN";
			$proto100=array();
$proto100["m_strName"] = "desaparecidos2017";
$proto100["m_srcTableName"] = "desaparecidos2017";
$proto100["m_columns"] = array();
$proto100["m_columns"][] = "Id";
$proto100["m_columns"][] = "Estado";
$proto100["m_columns"][] = "Mun";
$proto100["m_columns"][] = "InvMin";
$proto100["m_columns"][] = "FInicio";
$proto100["m_columns"][] = "MinPub";
$proto100["m_columns"][] = "Agencia";
$proto100["m_columns"][] = "Ofic";
$proto100["m_columns"][] = "FExtrav";
$proto100["m_columns"][] = "Nombre";
$proto100["m_columns"][] = "APat";
$proto100["m_columns"][] = "AMat";
$proto100["m_columns"][] = "Sexo";
$proto100["m_columns"][] = "EdadA";
$proto100["m_columns"][] = "EdadM";
$proto100["m_columns"][] = "Nac";
$proto100["m_columns"][] = "Origen";
$proto100["m_columns"][] = "Escolaridad";
$proto100["m_columns"][] = "Est";
$proto100["m_columns"][] = "Compl";
$proto100["m_columns"][] = "Ojos";
$proto100["m_columns"][] = "Piel";
$proto100["m_columns"][] = "Cab";
$proto100["m_columns"][] = "TCab";
$proto100["m_columns"][] = "Cabcol";
$proto100["m_columns"][] = "Nariz";
$proto100["m_columns"][] = "Labios";
$proto100["m_columns"][] = "Menton";
$proto100["m_columns"][] = "Cejas";
$proto100["m_columns"][] = "VFacial";
$proto100["m_columns"][] = "Delito";
$proto100["m_columns"][] = "Particularidades";
$proto100["m_columns"][] = "Nota";
$proto100["m_columns"][] = "DescHechos";
$proto100["m_columns"][] = "Obseva";
$proto100["m_columns"][] = "Status";
$proto100["m_columns"][] = "FAparicion";
$proto100["m_columns"][] = "Oficio";
$proto100["m_columns"][] = "EstApar";
$proto100["m_columns"][] = "Tipo";
$proto100["m_columns"][] = "FRecib";
$proto100["m_columns"][] = "UsrBaja";
$proto100["m_columns"][] = "FecBaja";
$proto100["m_columns"][] = "RutFoto";
$proto100["m_columns"][] = "FCaptura";
$proto100["m_columns"][] = "TipoDoc";
$proto100["m_columns"][] = "Usuario";
$obj = new SQLTable($proto100);

$proto99["m_table"] = $obj;
$proto99["m_sql"] = "desaparecidos2017";
$proto99["m_alias"] = "";
$proto99["m_srcTableName"] = "desaparecidos2017";
$proto101=array();
$proto101["m_sql"] = "";
$proto101["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto101["m_column"]=$obj;
$proto101["m_contained"] = array();
$proto101["m_strCase"] = "";
$proto101["m_havingmode"] = false;
$proto101["m_inBrackets"] = false;
$proto101["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto101);

$proto99["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto99);

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