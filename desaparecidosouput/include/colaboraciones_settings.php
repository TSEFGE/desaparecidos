<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacolaboraciones = array();	
	$tdatacolaboraciones[".truncateText"] = true;
	$tdatacolaboraciones[".NumberOfChars"] = 80; 
	$tdatacolaboraciones[".ShortName"] = "colaboraciones";
	$tdatacolaboraciones[".OwnerID"] = "Usuario";
	$tdatacolaboraciones[".OriginalTable"] = "colaboraciones";

//	field labels
$fieldLabelscolaboraciones = array();
$fieldToolTipscolaboraciones = array();
$pageTitlescolaboraciones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscolaboraciones["Spanish"] = array();
	$fieldToolTipscolaboraciones["Spanish"] = array();
	$pageTitlescolaboraciones["Spanish"] = array();
	$fieldLabelscolaboraciones["Spanish"]["Id"] = "Id";
	$fieldToolTipscolaboraciones["Spanish"]["Id"] = "";
	$fieldLabelscolaboraciones["Spanish"]["Estado"] = "Estado";
	$fieldToolTipscolaboraciones["Spanish"]["Estado"] = "Estado donde se inicia la carpeta de investigación";
	$fieldLabelscolaboraciones["Spanish"]["Mun"] = "Municipio";
	$fieldToolTipscolaboraciones["Spanish"]["Mun"] = "Municipio donde se inicia la carpeta de investigación";
	$fieldLabelscolaboraciones["Spanish"]["uipj"] = "UIPJ";
	$fieldToolTipscolaboraciones["Spanish"]["uipj"] = "";
	$fieldLabelscolaboraciones["Spanish"]["numFiscal"] = "Número de Fiscal";
	$fieldToolTipscolaboraciones["Spanish"]["numFiscal"] = "";
	$fieldLabelscolaboraciones["Spanish"]["a_oInv"] = "Año de Investigación";
	$fieldToolTipscolaboraciones["Spanish"]["añoInv"] = "";
	$fieldLabelscolaboraciones["Spanish"]["numInv"] = "Número de Colaboración";
	$fieldToolTipscolaboraciones["Spanish"]["numInv"] = "Solo capturar el número correspondiente de la carpeta de investigación";
	$fieldLabelscolaboraciones["Spanish"]["FInicio"] = "Fecha de Inicio";
	$fieldToolTipscolaboraciones["Spanish"]["FInicio"] = "";
	$fieldLabelscolaboraciones["Spanish"]["MinPub"] = "Fiscal";
	$fieldToolTipscolaboraciones["Spanish"]["MinPub"] = "";
	$fieldLabelscolaboraciones["Spanish"]["Agencia"] = "Agencia";
	$fieldToolTipscolaboraciones["Spanish"]["Agencia"] = "";
	$fieldLabelscolaboraciones["Spanish"]["Ofic"] = "Oficio de <br>Colaboración";
	$fieldToolTipscolaboraciones["Spanish"]["Ofic"] = "Número de oficio con el que solicitará su publicación a Centro de Información";
	$fieldLabelscolaboraciones["Spanish"]["FExtrav"] = "Fecha de Extravío";
	$fieldToolTipscolaboraciones["Spanish"]["FExtrav"] = "";
	$fieldLabelscolaboraciones["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipscolaboraciones["Spanish"]["Nombre"] = "";
	$fieldLabelscolaboraciones["Spanish"]["APat"] = "Paterno";
	$fieldToolTipscolaboraciones["Spanish"]["APat"] = "";
	$fieldLabelscolaboraciones["Spanish"]["AMat"] = "Materno";
	$fieldToolTipscolaboraciones["Spanish"]["AMat"] = "";
	$fieldLabelscolaboraciones["Spanish"]["Sexo"] = "Sexo";
	$fieldToolTipscolaboraciones["Spanish"]["Sexo"] = "";
	$fieldLabelscolaboraciones["Spanish"]["EdadA"] = "Edad Años";
	$fieldToolTipscolaboraciones["Spanish"]["EdadA"] = "";
	$fieldLabelscolaboraciones["Spanish"]["EdadM"] = "Edad Meses";
	$fieldToolTipscolaboraciones["Spanish"]["EdadM"] = "";
	$fieldLabelscolaboraciones["Spanish"]["Nac"] = "Nacionalidad";
	$fieldToolTipscolaboraciones["Spanish"]["Nac"] = "";
	$fieldLabelscolaboraciones["Spanish"]["Origen"] = "Estado de Origen";
	$fieldToolTipscolaboraciones["Spanish"]["Origen"] = "";
	$fieldLabelscolaboraciones["Spanish"]["MpoOrigen"] = "Municipio de Origen";
	$fieldToolTipscolaboraciones["Spanish"]["MpoOrigen"] = "";
	$fieldLabelscolaboraciones["Spanish"]["Escolaridad"] = "Escolaridad";
	$fieldToolTipscolaboraciones["Spanish"]["Escolaridad"] = "";
	$fieldLabelscolaboraciones["Spanish"]["Est"] = "Estatura";
	$fieldToolTipscolaboraciones["Spanish"]["Est"] = "Ingrese solo número sin abreviaturas o palabras";
	$fieldLabelscolaboraciones["Spanish"]["Compl"] = "Complexión";
	$fieldToolTipscolaboraciones["Spanish"]["Compl"] = "";
	$fieldLabelscolaboraciones["Spanish"]["Ojos"] = "Ojos";
	$fieldToolTipscolaboraciones["Spanish"]["Ojos"] = "";
	$fieldLabelscolaboraciones["Spanish"]["Piel"] = "Piel";
	$fieldToolTipscolaboraciones["Spanish"]["Piel"] = "";
	$fieldLabelscolaboraciones["Spanish"]["Cab"] = "Cabello";
	$fieldToolTipscolaboraciones["Spanish"]["Cab"] = "";
	$fieldLabelscolaboraciones["Spanish"]["TCab"] = "Tipo de Cabello";
	$fieldToolTipscolaboraciones["Spanish"]["TCab"] = "";
	$fieldLabelscolaboraciones["Spanish"]["Cabcol"] = "Color de Cabello";
	$fieldToolTipscolaboraciones["Spanish"]["Cabcol"] = "";
	$fieldLabelscolaboraciones["Spanish"]["Nariz"] = "Nariz";
	$fieldToolTipscolaboraciones["Spanish"]["Nariz"] = "";
	$fieldLabelscolaboraciones["Spanish"]["Labios"] = "Labios";
	$fieldToolTipscolaboraciones["Spanish"]["Labios"] = "";
	$fieldLabelscolaboraciones["Spanish"]["Menton"] = "Menton";
	$fieldToolTipscolaboraciones["Spanish"]["Menton"] = "";
	$fieldLabelscolaboraciones["Spanish"]["Cejas"] = "Cejas";
	$fieldToolTipscolaboraciones["Spanish"]["Cejas"] = "";
	$fieldLabelscolaboraciones["Spanish"]["VFacial"] = "Vello Facial";
	$fieldToolTipscolaboraciones["Spanish"]["VFacial"] = "";
	$fieldLabelscolaboraciones["Spanish"]["Delito"] = "    Tipo de Desaparición";
	$fieldToolTipscolaboraciones["Spanish"]["Delito"] = "";
	$fieldLabelscolaboraciones["Spanish"]["Particularidades"] = "Particularidades";
	$fieldToolTipscolaboraciones["Spanish"]["Particularidades"] = "Lunares, tatuajes, perforaciones, etcétera.";
	$fieldLabelscolaboraciones["Spanish"]["Nota"] = "Vestimenta";
	$fieldToolTipscolaboraciones["Spanish"]["Nota"] = "";
	$fieldLabelscolaboraciones["Spanish"]["DescHechos"] = "Hechos";
	$fieldToolTipscolaboraciones["Spanish"]["DescHechos"] = "";
	$fieldLabelscolaboraciones["Spanish"]["Obseva"] = "Obsevaciones";
	$fieldToolTipscolaboraciones["Spanish"]["Obseva"] = "Anotación que considere pertinente";
	$fieldLabelscolaboraciones["Spanish"]["Status"] = "Estatus";
	$fieldToolTipscolaboraciones["Spanish"]["Status"] = "";
	$fieldLabelscolaboraciones["Spanish"]["FAparicion"] = "Fecha de Localizado";
	$fieldToolTipscolaboraciones["Spanish"]["FAparicion"] = "";
	$fieldLabelscolaboraciones["Spanish"]["Oficio"] = "Oficio";
	$fieldToolTipscolaboraciones["Spanish"]["Oficio"] = "";
	$fieldLabelscolaboraciones["Spanish"]["EstApar"] = "Estado del Aparecido";
	$fieldToolTipscolaboraciones["Spanish"]["EstApar"] = "";
	$fieldLabelscolaboraciones["Spanish"]["Tipo"] = "Tipo";
	$fieldToolTipscolaboraciones["Spanish"]["Tipo"] = "";
	$fieldLabelscolaboraciones["Spanish"]["FRecib"] = "FRecib";
	$fieldToolTipscolaboraciones["Spanish"]["FRecib"] = "";
	$fieldLabelscolaboraciones["Spanish"]["UsrBaja"] = "Usr Baja";
	$fieldToolTipscolaboraciones["Spanish"]["UsrBaja"] = "";
	$fieldLabelscolaboraciones["Spanish"]["FecBaja"] = "Fec Baja";
	$fieldToolTipscolaboraciones["Spanish"]["FecBaja"] = "";
	$fieldLabelscolaboraciones["Spanish"]["RutFoto"] = "Rut Foto";
	$fieldToolTipscolaboraciones["Spanish"]["RutFoto"] = "";
	$fieldLabelscolaboraciones["Spanish"]["FCaptura"] = "FCaptura";
	$fieldToolTipscolaboraciones["Spanish"]["FCaptura"] = "";
	$fieldLabelscolaboraciones["Spanish"]["TipoDoc"] = "Tipo Doc";
	$fieldToolTipscolaboraciones["Spanish"]["TipoDoc"] = "";
	$fieldLabelscolaboraciones["Spanish"]["Usuario"] = "Usuario";
	$fieldToolTipscolaboraciones["Spanish"]["Usuario"] = "";
	$fieldLabelscolaboraciones["Spanish"]["fotoChica"] = "Foto Chica";
	$fieldToolTipscolaboraciones["Spanish"]["fotoChica"] = "";
	$fieldLabelscolaboraciones["Spanish"]["fotoGrande"] = "Foto Grande";
	$fieldToolTipscolaboraciones["Spanish"]["fotoGrande"] = "";
	$pageTitlescolaboraciones["Spanish"]["add"] = "Registro Público de Personas Desaparecidas";
	if (count($fieldToolTipscolaboraciones["Spanish"]))
		$tdatacolaboraciones[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscolaboraciones[""] = array();
	$fieldToolTipscolaboraciones[""] = array();
	$pageTitlescolaboraciones[""] = array();
	$fieldLabelscolaboraciones[""]["Id"] = "Id";
	$fieldToolTipscolaboraciones[""]["Id"] = "";
	if (count($fieldToolTipscolaboraciones[""]))
		$tdatacolaboraciones[".isUseToolTips"] = true;
}
	
	
	$tdatacolaboraciones[".NCSearch"] = true;



$tdatacolaboraciones[".shortTableName"] = "colaboraciones";
$tdatacolaboraciones[".nSecOptions"] = 1;
$tdatacolaboraciones[".recsPerRowList"] = 1;
$tdatacolaboraciones[".recsPerRowPrint"] = 1;
$tdatacolaboraciones[".mainTableOwnerID"] = "Usuario";
$tdatacolaboraciones[".moveNext"] = 1;
$tdatacolaboraciones[".entityType"] = 0;

$tdatacolaboraciones[".strOriginalTableName"] = "colaboraciones";




$tdatacolaboraciones[".showAddInPopup"] = false;

$tdatacolaboraciones[".showEditInPopup"] = false;

$tdatacolaboraciones[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacolaboraciones[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacolaboraciones[".fieldsForRegister"] = array();

$tdatacolaboraciones[".listAjax"] = false;

	$tdatacolaboraciones[".audit"] = false;

	$tdatacolaboraciones[".locking"] = false;

$tdatacolaboraciones[".edit"] = true;
$tdatacolaboraciones[".afterEditAction"] = 1;
$tdatacolaboraciones[".closePopupAfterEdit"] = 1;
$tdatacolaboraciones[".afterEditActionDetTable"] = "";

$tdatacolaboraciones[".add"] = true;
$tdatacolaboraciones[".afterAddAction"] = 1;
$tdatacolaboraciones[".closePopupAfterAdd"] = 1;
$tdatacolaboraciones[".afterAddActionDetTable"] = "";

$tdatacolaboraciones[".list"] = true;

$tdatacolaboraciones[".view"] = true;

$tdatacolaboraciones[".import"] = true;

$tdatacolaboraciones[".exportTo"] = true;

$tdatacolaboraciones[".printFriendly"] = true;


$tdatacolaboraciones[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacolaboraciones[".searchSaving"] = false;
//

$tdatacolaboraciones[".showSearchPanel"] = true;
		$tdatacolaboraciones[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacolaboraciones[".isUseAjaxSuggest"] = false;
else 
	$tdatacolaboraciones[".isUseAjaxSuggest"] = true;

$tdatacolaboraciones[".rowHighlite"] = true;



$tdatacolaboraciones[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacolaboraciones[".isUseTimeForSearch"] = false;





$tdatacolaboraciones[".allSearchFields"] = array();
$tdatacolaboraciones[".filterFields"] = array();
$tdatacolaboraciones[".requiredSearchFields"] = array();

$tdatacolaboraciones[".allSearchFields"][] = "Estado";
	$tdatacolaboraciones[".allSearchFields"][] = "Mun";
	$tdatacolaboraciones[".allSearchFields"][] = "uipj";
	$tdatacolaboraciones[".allSearchFields"][] = "numFiscal";
	$tdatacolaboraciones[".allSearchFields"][] = "añoInv";
	$tdatacolaboraciones[".allSearchFields"][] = "numInv";
	$tdatacolaboraciones[".allSearchFields"][] = "FInicio";
	$tdatacolaboraciones[".allSearchFields"][] = "MinPub";
	$tdatacolaboraciones[".allSearchFields"][] = "FExtrav";
	$tdatacolaboraciones[".allSearchFields"][] = "Nombre";
	$tdatacolaboraciones[".allSearchFields"][] = "APat";
	$tdatacolaboraciones[".allSearchFields"][] = "AMat";
	$tdatacolaboraciones[".allSearchFields"][] = "Status";
	$tdatacolaboraciones[".allSearchFields"][] = "FAparicion";
	

$tdatacolaboraciones[".googleLikeFields"] = array();
$tdatacolaboraciones[".googleLikeFields"][] = "Id";
$tdatacolaboraciones[".googleLikeFields"][] = "Estado";
$tdatacolaboraciones[".googleLikeFields"][] = "Mun";
$tdatacolaboraciones[".googleLikeFields"][] = "uipj";
$tdatacolaboraciones[".googleLikeFields"][] = "numFiscal";
$tdatacolaboraciones[".googleLikeFields"][] = "añoInv";
$tdatacolaboraciones[".googleLikeFields"][] = "numInv";
$tdatacolaboraciones[".googleLikeFields"][] = "FInicio";
$tdatacolaboraciones[".googleLikeFields"][] = "MinPub";
$tdatacolaboraciones[".googleLikeFields"][] = "Agencia";
$tdatacolaboraciones[".googleLikeFields"][] = "Ofic";
$tdatacolaboraciones[".googleLikeFields"][] = "FExtrav";
$tdatacolaboraciones[".googleLikeFields"][] = "Nombre";
$tdatacolaboraciones[".googleLikeFields"][] = "APat";
$tdatacolaboraciones[".googleLikeFields"][] = "AMat";
$tdatacolaboraciones[".googleLikeFields"][] = "Sexo";
$tdatacolaboraciones[".googleLikeFields"][] = "EdadA";
$tdatacolaboraciones[".googleLikeFields"][] = "EdadM";
$tdatacolaboraciones[".googleLikeFields"][] = "Nac";
$tdatacolaboraciones[".googleLikeFields"][] = "Origen";
$tdatacolaboraciones[".googleLikeFields"][] = "MpoOrigen";
$tdatacolaboraciones[".googleLikeFields"][] = "Escolaridad";
$tdatacolaboraciones[".googleLikeFields"][] = "Est";
$tdatacolaboraciones[".googleLikeFields"][] = "Compl";
$tdatacolaboraciones[".googleLikeFields"][] = "Ojos";
$tdatacolaboraciones[".googleLikeFields"][] = "Piel";
$tdatacolaboraciones[".googleLikeFields"][] = "Cab";
$tdatacolaboraciones[".googleLikeFields"][] = "TCab";
$tdatacolaboraciones[".googleLikeFields"][] = "Cabcol";
$tdatacolaboraciones[".googleLikeFields"][] = "Nariz";
$tdatacolaboraciones[".googleLikeFields"][] = "Labios";
$tdatacolaboraciones[".googleLikeFields"][] = "Menton";
$tdatacolaboraciones[".googleLikeFields"][] = "Cejas";
$tdatacolaboraciones[".googleLikeFields"][] = "VFacial";
$tdatacolaboraciones[".googleLikeFields"][] = "Delito";
$tdatacolaboraciones[".googleLikeFields"][] = "Particularidades";
$tdatacolaboraciones[".googleLikeFields"][] = "Nota";
$tdatacolaboraciones[".googleLikeFields"][] = "DescHechos";
$tdatacolaboraciones[".googleLikeFields"][] = "Obseva";
$tdatacolaboraciones[".googleLikeFields"][] = "Status";
$tdatacolaboraciones[".googleLikeFields"][] = "FAparicion";
$tdatacolaboraciones[".googleLikeFields"][] = "Oficio";
$tdatacolaboraciones[".googleLikeFields"][] = "EstApar";
$tdatacolaboraciones[".googleLikeFields"][] = "Tipo";
$tdatacolaboraciones[".googleLikeFields"][] = "FRecib";
$tdatacolaboraciones[".googleLikeFields"][] = "UsrBaja";
$tdatacolaboraciones[".googleLikeFields"][] = "FecBaja";
$tdatacolaboraciones[".googleLikeFields"][] = "RutFoto";
$tdatacolaboraciones[".googleLikeFields"][] = "FCaptura";
$tdatacolaboraciones[".googleLikeFields"][] = "TipoDoc";
$tdatacolaboraciones[".googleLikeFields"][] = "Usuario";
$tdatacolaboraciones[".googleLikeFields"][] = "fotoChica";
$tdatacolaboraciones[".googleLikeFields"][] = "fotoGrande";


$tdatacolaboraciones[".advSearchFields"] = array();
$tdatacolaboraciones[".advSearchFields"][] = "Estado";
$tdatacolaboraciones[".advSearchFields"][] = "Mun";
$tdatacolaboraciones[".advSearchFields"][] = "uipj";
$tdatacolaboraciones[".advSearchFields"][] = "numFiscal";
$tdatacolaboraciones[".advSearchFields"][] = "añoInv";
$tdatacolaboraciones[".advSearchFields"][] = "numInv";
$tdatacolaboraciones[".advSearchFields"][] = "FInicio";
$tdatacolaboraciones[".advSearchFields"][] = "MinPub";
$tdatacolaboraciones[".advSearchFields"][] = "FExtrav";
$tdatacolaboraciones[".advSearchFields"][] = "Nombre";
$tdatacolaboraciones[".advSearchFields"][] = "APat";
$tdatacolaboraciones[".advSearchFields"][] = "AMat";
$tdatacolaboraciones[".advSearchFields"][] = "Status";
$tdatacolaboraciones[".advSearchFields"][] = "FAparicion";

$tdatacolaboraciones[".tableType"] = "list";

$tdatacolaboraciones[".printerPageOrientation"] = 0;
$tdatacolaboraciones[".nPrinterPageScale"] = 100;

$tdatacolaboraciones[".nPrinterSplitRecords"] = 40;

$tdatacolaboraciones[".nPrinterPDFSplitRecords"] = 40;



$tdatacolaboraciones[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatacolaboraciones[".pageSize"] = 20;

$tdatacolaboraciones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacolaboraciones[".strOrderBy"] = $tstrOrderBy;

$tdatacolaboraciones[".orderindexes"] = array();

$tdatacolaboraciones[".sqlHead"] = "SELECT Id,  	Estado,  	Mun,  	uipj,  	numFiscal,  	`añoInv`,  	numInv,  	FInicio,  	MinPub,  	Agencia,  	Ofic,  	FExtrav,  	Nombre,  	APat,  	AMat,  	Sexo,  	EdadA,  	EdadM,  	Nac,  	Origen,  	MpoOrigen,  	Escolaridad,  	Est,  	Compl,  	Ojos,  	Piel,  	Cab,  	TCab,  	Cabcol,  	Nariz,  	Labios,  	Menton,  	Cejas,  	VFacial,  	Delito,  	Particularidades,  	Nota,  	DescHechos,  	Obseva,  	Status,  	FAparicion,  	Oficio,  	EstApar,  	Tipo,  	FRecib,  	UsrBaja,  	FecBaja,  	RutFoto,  	FCaptura,  	TipoDoc,  	Usuario,  	fotoChica,  	fotoGrande";
$tdatacolaboraciones[".sqlFrom"] = "FROM colaboraciones";
$tdatacolaboraciones[".sqlWhereExpr"] = "";
$tdatacolaboraciones[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacolaboraciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacolaboraciones[".arrGroupsPerPage"] = $arrGPP;

$tdatacolaboraciones[".highlightSearchResults"] = true;

$tableKeyscolaboraciones = array();
$tableKeyscolaboraciones[] = "Id";
$tdatacolaboraciones[".Keys"] = $tableKeyscolaboraciones;

$tdatacolaboraciones[".listFields"] = array();
$tdatacolaboraciones[".listFields"][] = "Estado";
$tdatacolaboraciones[".listFields"][] = "Mun";
$tdatacolaboraciones[".listFields"][] = "numInv";
$tdatacolaboraciones[".listFields"][] = "FInicio";
$tdatacolaboraciones[".listFields"][] = "MinPub";
$tdatacolaboraciones[".listFields"][] = "FExtrav";
$tdatacolaboraciones[".listFields"][] = "Nombre";
$tdatacolaboraciones[".listFields"][] = "APat";
$tdatacolaboraciones[".listFields"][] = "AMat";
$tdatacolaboraciones[".listFields"][] = "Status";
$tdatacolaboraciones[".listFields"][] = "FAparicion";

$tdatacolaboraciones[".hideMobileList"] = array();


$tdatacolaboraciones[".viewFields"] = array();
$tdatacolaboraciones[".viewFields"][] = "Estado";
$tdatacolaboraciones[".viewFields"][] = "Mun";
$tdatacolaboraciones[".viewFields"][] = "uipj";
$tdatacolaboraciones[".viewFields"][] = "numFiscal";
$tdatacolaboraciones[".viewFields"][] = "añoInv";
$tdatacolaboraciones[".viewFields"][] = "numInv";
$tdatacolaboraciones[".viewFields"][] = "FInicio";
$tdatacolaboraciones[".viewFields"][] = "MinPub";
$tdatacolaboraciones[".viewFields"][] = "Ofic";
$tdatacolaboraciones[".viewFields"][] = "FExtrav";
$tdatacolaboraciones[".viewFields"][] = "Nombre";
$tdatacolaboraciones[".viewFields"][] = "APat";
$tdatacolaboraciones[".viewFields"][] = "AMat";
$tdatacolaboraciones[".viewFields"][] = "Sexo";
$tdatacolaboraciones[".viewFields"][] = "EdadA";
$tdatacolaboraciones[".viewFields"][] = "EdadM";
$tdatacolaboraciones[".viewFields"][] = "Nac";
$tdatacolaboraciones[".viewFields"][] = "Origen";
$tdatacolaboraciones[".viewFields"][] = "MpoOrigen";
$tdatacolaboraciones[".viewFields"][] = "Escolaridad";
$tdatacolaboraciones[".viewFields"][] = "Est";
$tdatacolaboraciones[".viewFields"][] = "Compl";
$tdatacolaboraciones[".viewFields"][] = "Ojos";
$tdatacolaboraciones[".viewFields"][] = "Piel";
$tdatacolaboraciones[".viewFields"][] = "Cab";
$tdatacolaboraciones[".viewFields"][] = "TCab";
$tdatacolaboraciones[".viewFields"][] = "Cabcol";
$tdatacolaboraciones[".viewFields"][] = "Nariz";
$tdatacolaboraciones[".viewFields"][] = "Labios";
$tdatacolaboraciones[".viewFields"][] = "Menton";
$tdatacolaboraciones[".viewFields"][] = "Cejas";
$tdatacolaboraciones[".viewFields"][] = "VFacial";
$tdatacolaboraciones[".viewFields"][] = "Delito";
$tdatacolaboraciones[".viewFields"][] = "Particularidades";
$tdatacolaboraciones[".viewFields"][] = "Nota";
$tdatacolaboraciones[".viewFields"][] = "DescHechos";
$tdatacolaboraciones[".viewFields"][] = "Obseva";
$tdatacolaboraciones[".viewFields"][] = "Status";
$tdatacolaboraciones[".viewFields"][] = "FAparicion";
$tdatacolaboraciones[".viewFields"][] = "Oficio";
$tdatacolaboraciones[".viewFields"][] = "EstApar";
$tdatacolaboraciones[".viewFields"][] = "fotoChica";
$tdatacolaboraciones[".viewFields"][] = "fotoGrande";

$tdatacolaboraciones[".addFields"] = array();
$tdatacolaboraciones[".addFields"][] = "Estado";
$tdatacolaboraciones[".addFields"][] = "Mun";
$tdatacolaboraciones[".addFields"][] = "uipj";
$tdatacolaboraciones[".addFields"][] = "numFiscal";
$tdatacolaboraciones[".addFields"][] = "añoInv";
$tdatacolaboraciones[".addFields"][] = "numInv";
$tdatacolaboraciones[".addFields"][] = "FInicio";
$tdatacolaboraciones[".addFields"][] = "MinPub";
$tdatacolaboraciones[".addFields"][] = "Ofic";
$tdatacolaboraciones[".addFields"][] = "FExtrav";
$tdatacolaboraciones[".addFields"][] = "Nombre";
$tdatacolaboraciones[".addFields"][] = "APat";
$tdatacolaboraciones[".addFields"][] = "fotoGrande";
$tdatacolaboraciones[".addFields"][] = "Sexo";
$tdatacolaboraciones[".addFields"][] = "EdadA";
$tdatacolaboraciones[".addFields"][] = "EdadM";
$tdatacolaboraciones[".addFields"][] = "Nac";
$tdatacolaboraciones[".addFields"][] = "Origen";
$tdatacolaboraciones[".addFields"][] = "MpoOrigen";
$tdatacolaboraciones[".addFields"][] = "Escolaridad";
$tdatacolaboraciones[".addFields"][] = "Est";
$tdatacolaboraciones[".addFields"][] = "Compl";
$tdatacolaboraciones[".addFields"][] = "Ojos";
$tdatacolaboraciones[".addFields"][] = "Piel";
$tdatacolaboraciones[".addFields"][] = "Cab";
$tdatacolaboraciones[".addFields"][] = "TCab";
$tdatacolaboraciones[".addFields"][] = "Cabcol";
$tdatacolaboraciones[".addFields"][] = "Nariz";
$tdatacolaboraciones[".addFields"][] = "Labios";
$tdatacolaboraciones[".addFields"][] = "Menton";
$tdatacolaboraciones[".addFields"][] = "Cejas";
$tdatacolaboraciones[".addFields"][] = "VFacial";
$tdatacolaboraciones[".addFields"][] = "Delito";
$tdatacolaboraciones[".addFields"][] = "Particularidades";
$tdatacolaboraciones[".addFields"][] = "Nota";
$tdatacolaboraciones[".addFields"][] = "DescHechos";
$tdatacolaboraciones[".addFields"][] = "Obseva";
$tdatacolaboraciones[".addFields"][] = "Status";
$tdatacolaboraciones[".addFields"][] = "FAparicion";
$tdatacolaboraciones[".addFields"][] = "Oficio";
$tdatacolaboraciones[".addFields"][] = "EstApar";
$tdatacolaboraciones[".addFields"][] = "fotoChica";
$tdatacolaboraciones[".addFields"][] = "AMat";

$tdatacolaboraciones[".masterListFields"] = array();
$tdatacolaboraciones[".masterListFields"][] = "Id";
$tdatacolaboraciones[".masterListFields"][] = "Estado";
$tdatacolaboraciones[".masterListFields"][] = "Mun";
$tdatacolaboraciones[".masterListFields"][] = "uipj";
$tdatacolaboraciones[".masterListFields"][] = "numFiscal";
$tdatacolaboraciones[".masterListFields"][] = "añoInv";
$tdatacolaboraciones[".masterListFields"][] = "numInv";
$tdatacolaboraciones[".masterListFields"][] = "FInicio";
$tdatacolaboraciones[".masterListFields"][] = "MinPub";
$tdatacolaboraciones[".masterListFields"][] = "Agencia";
$tdatacolaboraciones[".masterListFields"][] = "Ofic";
$tdatacolaboraciones[".masterListFields"][] = "FExtrav";
$tdatacolaboraciones[".masterListFields"][] = "Nombre";
$tdatacolaboraciones[".masterListFields"][] = "APat";
$tdatacolaboraciones[".masterListFields"][] = "AMat";
$tdatacolaboraciones[".masterListFields"][] = "Sexo";
$tdatacolaboraciones[".masterListFields"][] = "EdadA";
$tdatacolaboraciones[".masterListFields"][] = "EdadM";
$tdatacolaboraciones[".masterListFields"][] = "Nac";
$tdatacolaboraciones[".masterListFields"][] = "Origen";
$tdatacolaboraciones[".masterListFields"][] = "MpoOrigen";
$tdatacolaboraciones[".masterListFields"][] = "Escolaridad";
$tdatacolaboraciones[".masterListFields"][] = "Est";
$tdatacolaboraciones[".masterListFields"][] = "Compl";
$tdatacolaboraciones[".masterListFields"][] = "Ojos";
$tdatacolaboraciones[".masterListFields"][] = "Piel";
$tdatacolaboraciones[".masterListFields"][] = "Cab";
$tdatacolaboraciones[".masterListFields"][] = "TCab";
$tdatacolaboraciones[".masterListFields"][] = "Cabcol";
$tdatacolaboraciones[".masterListFields"][] = "Nariz";
$tdatacolaboraciones[".masterListFields"][] = "Labios";
$tdatacolaboraciones[".masterListFields"][] = "Menton";
$tdatacolaboraciones[".masterListFields"][] = "Cejas";
$tdatacolaboraciones[".masterListFields"][] = "VFacial";
$tdatacolaboraciones[".masterListFields"][] = "Delito";
$tdatacolaboraciones[".masterListFields"][] = "Particularidades";
$tdatacolaboraciones[".masterListFields"][] = "Nota";
$tdatacolaboraciones[".masterListFields"][] = "DescHechos";
$tdatacolaboraciones[".masterListFields"][] = "Obseva";
$tdatacolaboraciones[".masterListFields"][] = "Status";
$tdatacolaboraciones[".masterListFields"][] = "FAparicion";
$tdatacolaboraciones[".masterListFields"][] = "Oficio";
$tdatacolaboraciones[".masterListFields"][] = "EstApar";
$tdatacolaboraciones[".masterListFields"][] = "Tipo";
$tdatacolaboraciones[".masterListFields"][] = "FRecib";
$tdatacolaboraciones[".masterListFields"][] = "UsrBaja";
$tdatacolaboraciones[".masterListFields"][] = "FecBaja";
$tdatacolaboraciones[".masterListFields"][] = "RutFoto";
$tdatacolaboraciones[".masterListFields"][] = "FCaptura";
$tdatacolaboraciones[".masterListFields"][] = "TipoDoc";
$tdatacolaboraciones[".masterListFields"][] = "Usuario";
$tdatacolaboraciones[".masterListFields"][] = "fotoChica";
$tdatacolaboraciones[".masterListFields"][] = "fotoGrande";

$tdatacolaboraciones[".inlineAddFields"] = array();

$tdatacolaboraciones[".editFields"] = array();
$tdatacolaboraciones[".editFields"][] = "Estado";
$tdatacolaboraciones[".editFields"][] = "Mun";
$tdatacolaboraciones[".editFields"][] = "uipj";
$tdatacolaboraciones[".editFields"][] = "numFiscal";
$tdatacolaboraciones[".editFields"][] = "añoInv";
$tdatacolaboraciones[".editFields"][] = "numInv";
$tdatacolaboraciones[".editFields"][] = "FInicio";
$tdatacolaboraciones[".editFields"][] = "MinPub";
$tdatacolaboraciones[".editFields"][] = "Ofic";
$tdatacolaboraciones[".editFields"][] = "FExtrav";
$tdatacolaboraciones[".editFields"][] = "Nombre";
$tdatacolaboraciones[".editFields"][] = "APat";
$tdatacolaboraciones[".editFields"][] = "AMat";
$tdatacolaboraciones[".editFields"][] = "Sexo";
$tdatacolaboraciones[".editFields"][] = "EdadA";
$tdatacolaboraciones[".editFields"][] = "EdadM";
$tdatacolaboraciones[".editFields"][] = "Nac";
$tdatacolaboraciones[".editFields"][] = "Origen";
$tdatacolaboraciones[".editFields"][] = "MpoOrigen";
$tdatacolaboraciones[".editFields"][] = "Escolaridad";
$tdatacolaboraciones[".editFields"][] = "Est";
$tdatacolaboraciones[".editFields"][] = "Compl";
$tdatacolaboraciones[".editFields"][] = "Ojos";
$tdatacolaboraciones[".editFields"][] = "Piel";
$tdatacolaboraciones[".editFields"][] = "Cab";
$tdatacolaboraciones[".editFields"][] = "TCab";
$tdatacolaboraciones[".editFields"][] = "Cabcol";
$tdatacolaboraciones[".editFields"][] = "Nariz";
$tdatacolaboraciones[".editFields"][] = "Labios";
$tdatacolaboraciones[".editFields"][] = "Menton";
$tdatacolaboraciones[".editFields"][] = "Cejas";
$tdatacolaboraciones[".editFields"][] = "VFacial";
$tdatacolaboraciones[".editFields"][] = "Delito";
$tdatacolaboraciones[".editFields"][] = "Particularidades";
$tdatacolaboraciones[".editFields"][] = "Nota";
$tdatacolaboraciones[".editFields"][] = "DescHechos";
$tdatacolaboraciones[".editFields"][] = "Obseva";
$tdatacolaboraciones[".editFields"][] = "Status";
$tdatacolaboraciones[".editFields"][] = "FAparicion";
$tdatacolaboraciones[".editFields"][] = "Oficio";
$tdatacolaboraciones[".editFields"][] = "EstApar";
$tdatacolaboraciones[".editFields"][] = "fotoChica";
$tdatacolaboraciones[".editFields"][] = "fotoGrande";

$tdatacolaboraciones[".inlineEditFields"] = array();

$tdatacolaboraciones[".exportFields"] = array();
$tdatacolaboraciones[".exportFields"][] = "Estado";
$tdatacolaboraciones[".exportFields"][] = "Mun";
$tdatacolaboraciones[".exportFields"][] = "uipj";
$tdatacolaboraciones[".exportFields"][] = "numFiscal";
$tdatacolaboraciones[".exportFields"][] = "añoInv";
$tdatacolaboraciones[".exportFields"][] = "numInv";
$tdatacolaboraciones[".exportFields"][] = "FInicio";
$tdatacolaboraciones[".exportFields"][] = "MinPub";
$tdatacolaboraciones[".exportFields"][] = "Ofic";
$tdatacolaboraciones[".exportFields"][] = "FExtrav";
$tdatacolaboraciones[".exportFields"][] = "Nombre";
$tdatacolaboraciones[".exportFields"][] = "APat";
$tdatacolaboraciones[".exportFields"][] = "AMat";
$tdatacolaboraciones[".exportFields"][] = "Sexo";
$tdatacolaboraciones[".exportFields"][] = "EdadA";
$tdatacolaboraciones[".exportFields"][] = "EdadM";
$tdatacolaboraciones[".exportFields"][] = "Nac";
$tdatacolaboraciones[".exportFields"][] = "Origen";
$tdatacolaboraciones[".exportFields"][] = "MpoOrigen";
$tdatacolaboraciones[".exportFields"][] = "Escolaridad";
$tdatacolaboraciones[".exportFields"][] = "Est";
$tdatacolaboraciones[".exportFields"][] = "Compl";
$tdatacolaboraciones[".exportFields"][] = "Ojos";
$tdatacolaboraciones[".exportFields"][] = "Piel";
$tdatacolaboraciones[".exportFields"][] = "Cab";
$tdatacolaboraciones[".exportFields"][] = "TCab";
$tdatacolaboraciones[".exportFields"][] = "Cabcol";
$tdatacolaboraciones[".exportFields"][] = "Nariz";
$tdatacolaboraciones[".exportFields"][] = "Labios";
$tdatacolaboraciones[".exportFields"][] = "Menton";
$tdatacolaboraciones[".exportFields"][] = "Cejas";
$tdatacolaboraciones[".exportFields"][] = "VFacial";
$tdatacolaboraciones[".exportFields"][] = "Delito";
$tdatacolaboraciones[".exportFields"][] = "Particularidades";
$tdatacolaboraciones[".exportFields"][] = "Nota";
$tdatacolaboraciones[".exportFields"][] = "DescHechos";
$tdatacolaboraciones[".exportFields"][] = "Obseva";
$tdatacolaboraciones[".exportFields"][] = "Status";
$tdatacolaboraciones[".exportFields"][] = "FAparicion";
$tdatacolaboraciones[".exportFields"][] = "Oficio";
$tdatacolaboraciones[".exportFields"][] = "EstApar";

$tdatacolaboraciones[".importFields"] = array();
$tdatacolaboraciones[".importFields"][] = "Estado";
$tdatacolaboraciones[".importFields"][] = "Mun";
$tdatacolaboraciones[".importFields"][] = "uipj";
$tdatacolaboraciones[".importFields"][] = "numFiscal";
$tdatacolaboraciones[".importFields"][] = "añoInv";
$tdatacolaboraciones[".importFields"][] = "numInv";
$tdatacolaboraciones[".importFields"][] = "FInicio";
$tdatacolaboraciones[".importFields"][] = "MinPub";
$tdatacolaboraciones[".importFields"][] = "Ofic";
$tdatacolaboraciones[".importFields"][] = "FExtrav";
$tdatacolaboraciones[".importFields"][] = "Nombre";
$tdatacolaboraciones[".importFields"][] = "APat";
$tdatacolaboraciones[".importFields"][] = "AMat";
$tdatacolaboraciones[".importFields"][] = "Sexo";
$tdatacolaboraciones[".importFields"][] = "EdadA";
$tdatacolaboraciones[".importFields"][] = "EdadM";
$tdatacolaboraciones[".importFields"][] = "Nac";
$tdatacolaboraciones[".importFields"][] = "Origen";
$tdatacolaboraciones[".importFields"][] = "MpoOrigen";
$tdatacolaboraciones[".importFields"][] = "Escolaridad";
$tdatacolaboraciones[".importFields"][] = "Est";
$tdatacolaboraciones[".importFields"][] = "Compl";
$tdatacolaboraciones[".importFields"][] = "Ojos";
$tdatacolaboraciones[".importFields"][] = "Piel";
$tdatacolaboraciones[".importFields"][] = "Cab";
$tdatacolaboraciones[".importFields"][] = "TCab";
$tdatacolaboraciones[".importFields"][] = "Cabcol";
$tdatacolaboraciones[".importFields"][] = "Nariz";
$tdatacolaboraciones[".importFields"][] = "Labios";
$tdatacolaboraciones[".importFields"][] = "Menton";
$tdatacolaboraciones[".importFields"][] = "Cejas";
$tdatacolaboraciones[".importFields"][] = "VFacial";
$tdatacolaboraciones[".importFields"][] = "Delito";
$tdatacolaboraciones[".importFields"][] = "Particularidades";
$tdatacolaboraciones[".importFields"][] = "Nota";
$tdatacolaboraciones[".importFields"][] = "DescHechos";
$tdatacolaboraciones[".importFields"][] = "Obseva";
$tdatacolaboraciones[".importFields"][] = "Status";
$tdatacolaboraciones[".importFields"][] = "FAparicion";
$tdatacolaboraciones[".importFields"][] = "Oficio";
$tdatacolaboraciones[".importFields"][] = "EstApar";

$tdatacolaboraciones[".printFields"] = array();
$tdatacolaboraciones[".printFields"][] = "Estado";
$tdatacolaboraciones[".printFields"][] = "Mun";
$tdatacolaboraciones[".printFields"][] = "uipj";
$tdatacolaboraciones[".printFields"][] = "numFiscal";
$tdatacolaboraciones[".printFields"][] = "añoInv";
$tdatacolaboraciones[".printFields"][] = "numInv";
$tdatacolaboraciones[".printFields"][] = "FInicio";
$tdatacolaboraciones[".printFields"][] = "MinPub";
$tdatacolaboraciones[".printFields"][] = "Ofic";
$tdatacolaboraciones[".printFields"][] = "FExtrav";
$tdatacolaboraciones[".printFields"][] = "Nombre";
$tdatacolaboraciones[".printFields"][] = "APat";
$tdatacolaboraciones[".printFields"][] = "AMat";
$tdatacolaboraciones[".printFields"][] = "Sexo";
$tdatacolaboraciones[".printFields"][] = "EdadA";
$tdatacolaboraciones[".printFields"][] = "EdadM";
$tdatacolaboraciones[".printFields"][] = "Nac";
$tdatacolaboraciones[".printFields"][] = "Origen";
$tdatacolaboraciones[".printFields"][] = "MpoOrigen";
$tdatacolaboraciones[".printFields"][] = "Escolaridad";
$tdatacolaboraciones[".printFields"][] = "Est";
$tdatacolaboraciones[".printFields"][] = "Compl";
$tdatacolaboraciones[".printFields"][] = "Ojos";
$tdatacolaboraciones[".printFields"][] = "Piel";
$tdatacolaboraciones[".printFields"][] = "Cab";
$tdatacolaboraciones[".printFields"][] = "TCab";
$tdatacolaboraciones[".printFields"][] = "Cabcol";
$tdatacolaboraciones[".printFields"][] = "Nariz";
$tdatacolaboraciones[".printFields"][] = "Labios";
$tdatacolaboraciones[".printFields"][] = "Menton";
$tdatacolaboraciones[".printFields"][] = "Cejas";
$tdatacolaboraciones[".printFields"][] = "VFacial";
$tdatacolaboraciones[".printFields"][] = "Delito";
$tdatacolaboraciones[".printFields"][] = "Particularidades";
$tdatacolaboraciones[".printFields"][] = "Nota";
$tdatacolaboraciones[".printFields"][] = "DescHechos";
$tdatacolaboraciones[".printFields"][] = "Obseva";
$tdatacolaboraciones[".printFields"][] = "Status";
$tdatacolaboraciones[".printFields"][] = "FAparicion";
$tdatacolaboraciones[".printFields"][] = "Oficio";
$tdatacolaboraciones[".printFields"][] = "EstApar";
$tdatacolaboraciones[".printFields"][] = "fotoChica";
$tdatacolaboraciones[".printFields"][] = "fotoGrande";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","Id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Id";
	
		
		
				
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
	
	
	
	

	

	
	$tdatacolaboraciones["Id"] = $fdata;
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","Estado"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_edos";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nom_ent";
	
		
	$edata["LookupOrderBy"] = "nom_ent";
	
		
			
		
				
				//dependent dropdowns	
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "Mun";
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatacolaboraciones["Estado"] = $fdata;
//	Mun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Mun";
	$fdata["GoodName"] = "Mun";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","Mun"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_mpos";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";
	
		
	$edata["LookupOrderBy"] = "nombre";
	
		
		$edata["UseCategory"] = true; 
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "Estado", "lookup" => "fkEdo" );
		
		
				
	
	
		
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

	

	
	$tdatacolaboraciones["Mun"] = $fdata;
//	uipj
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "uipj";
	$fdata["GoodName"] = "uipj";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","uipj"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "uipj"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uipj";
	
		
		
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "unidad";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre";
	
		
	$edata["LookupOrderBy"] = "nombre";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatacolaboraciones["uipj"] = $fdata;
//	numFiscal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "numFiscal";
	$fdata["GoodName"] = "numFiscal";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","numFiscal"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "numFiscal"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numFiscal";
	
		
		
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

	

	
	$tdatacolaboraciones["numFiscal"] = $fdata;
//	añoInv
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "añoInv";
	$fdata["GoodName"] = "a_oInv";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","a_oInv"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "añoInv"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`añoInv`";
	
		
		
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

	

	
	$tdatacolaboraciones["añoInv"] = $fdata;
//	numInv
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "numInv";
	$fdata["GoodName"] = "numInv";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","numInv"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "numInv"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numInv";
	
		
		
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

	

	
	$tdatacolaboraciones["numInv"] = $fdata;
//	FInicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FInicio";
	$fdata["GoodName"] = "FInicio";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","FInicio"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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

	

	
	$tdatacolaboraciones["FInicio"] = $fdata;
//	MinPub
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "MinPub";
	$fdata["GoodName"] = "MinPub";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","MinPub"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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

	

	
	$tdatacolaboraciones["MinPub"] = $fdata;
//	Agencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Agencia";
	$fdata["GoodName"] = "Agencia";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","Agencia"); 
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
	
	
	
	

	

	
	$tdatacolaboraciones["Agencia"] = $fdata;
//	Ofic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Ofic";
	$fdata["GoodName"] = "Ofic";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","Ofic"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
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
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdatacolaboraciones["Ofic"] = $fdata;
//	FExtrav
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "FExtrav";
	$fdata["GoodName"] = "FExtrav";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","FExtrav"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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

	

	
	$tdatacolaboraciones["FExtrav"] = $fdata;
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","Nombre"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatacolaboraciones["Nombre"] = $fdata;
//	APat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "APat";
	$fdata["GoodName"] = "APat";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","APat"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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

	

	
	$tdatacolaboraciones["APat"] = $fdata;
//	AMat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "AMat";
	$fdata["GoodName"] = "AMat";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","AMat"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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

	

	
	$tdatacolaboraciones["AMat"] = $fdata;
//	Sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Sexo";
	$fdata["GoodName"] = "Sexo";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","Sexo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_sexo";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "sexo";
	
		
	$edata["LookupOrderBy"] = "sexo";
	
		
			
		
				
	
	
		
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
	
	
	
	

	

	
	$tdatacolaboraciones["Sexo"] = $fdata;
//	EdadA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "EdadA";
	$fdata["GoodName"] = "EdadA";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","EdadA"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
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
	
	
	
	

	

	
	$tdatacolaboraciones["EdadA"] = $fdata;
//	EdadM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "EdadM";
	$fdata["GoodName"] = "EdadM";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","EdadM"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
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
	
	
	
	

	

	
	$tdatacolaboraciones["EdadM"] = $fdata;
//	Nac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Nac";
	$fdata["GoodName"] = "Nac";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","Nac"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "catnacionalidad";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "Clave";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nacionalidad";
	
		
	$edata["LookupOrderBy"] = "Nacionalidad";
	
		
			
		
				
	
	
		
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
	
	
	
	

	

	
	$tdatacolaboraciones["Nac"] = $fdata;
//	Origen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Origen";
	$fdata["GoodName"] = "Origen";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","Origen"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_edos";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nom_ent";
	
		
	$edata["LookupOrderBy"] = "nom_ent";
	
		
			
		
				
				//dependent dropdowns	
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "MpoOrigen";
	
	
		
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
	
	
	
	

	

	
	$tdatacolaboraciones["Origen"] = $fdata;
//	MpoOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "MpoOrigen";
	$fdata["GoodName"] = "MpoOrigen";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","MpoOrigen"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MpoOrigen"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MpoOrigen";
	
		
		
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_mpos";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";
	
		
	$edata["LookupOrderBy"] = "nombre";
	
		
		$edata["UseCategory"] = true; 
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "Origen", "lookup" => "fkEdo" );
		
		
				
	
	
		
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
	
	
	
	

	

	
	$tdatacolaboraciones["MpoOrigen"] = $fdata;
//	Escolaridad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Escolaridad";
	$fdata["GoodName"] = "Escolaridad";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","Escolaridad"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_escolaridad";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "idescolaridad";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "escolaridad";
	
		
	$edata["LookupOrderBy"] = "escolaridad";
	
		
			
		
				
	
	
		
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
	
	
	
	

	

	
	$tdatacolaboraciones["Escolaridad"] = $fdata;
//	Est
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Est";
	$fdata["GoodName"] = "Est";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","Est"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
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
	
	
	
	

	

	
	$tdatacolaboraciones["Est"] = $fdata;
//	Compl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Compl";
	$fdata["GoodName"] = "Compl";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","Compl"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_comp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "idcomp";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "complexion";
	
		
	$edata["LookupOrderBy"] = "complexion";
	
		
			
		
				
	
	
		
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
	
	
	
	

	

	
	$tdatacolaboraciones["Compl"] = $fdata;
//	Ojos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Ojos";
	$fdata["GoodName"] = "Ojos";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","Ojos"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_ojos";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "idojos";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ojos";
	
		
	$edata["LookupOrderBy"] = "ojos";
	
		
			
		
				
	
	
		
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
	
	
	
	

	

	
	$tdatacolaboraciones["Ojos"] = $fdata;
//	Piel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Piel";
	$fdata["GoodName"] = "Piel";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","Piel"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_piel";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "idpiel";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "piel";
	
		
	$edata["LookupOrderBy"] = "piel";
	
		
			
		
				
	
	
		
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
	
	
	
	

	

	
	$tdatacolaboraciones["Piel"] = $fdata;
//	Cab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Cab";
	$fdata["GoodName"] = "Cab";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","Cab"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_cabtam";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "idcabtam";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "cabtam";
	
		
	$edata["LookupOrderBy"] = "cabtam";
	
		
			
		
				
	
	
		
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
	
	
	
	

	

	
	$tdatacolaboraciones["Cab"] = $fdata;
//	TCab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "TCab";
	$fdata["GoodName"] = "TCab";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","TCab"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_cabtip";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "idcabtip";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "cabtip";
	
		
	$edata["LookupOrderBy"] = "cabtip";
	
		
			
		
				
	
	
		
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
	
	
	
	

	

	
	$tdatacolaboraciones["TCab"] = $fdata;
//	Cabcol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "Cabcol";
	$fdata["GoodName"] = "Cabcol";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","Cabcol"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_cabcol";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "idcabcol";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "cabcol";
	
		
	$edata["LookupOrderBy"] = "cabcol";
	
		
			
		
				
	
	
		
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
	
	
	
	

	

	
	$tdatacolaboraciones["Cabcol"] = $fdata;
//	Nariz
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Nariz";
	$fdata["GoodName"] = "Nariz";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","Nariz"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_nariz";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "idnariz";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nariz";
	
		
	$edata["LookupOrderBy"] = "nariz";
	
		
			
		
				
	
	
		
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
	
	
	
	

	

	
	$tdatacolaboraciones["Nariz"] = $fdata;
//	Labios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Labios";
	$fdata["GoodName"] = "Labios";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","Labios"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_labios";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "idlabios";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "labios";
	
		
	$edata["LookupOrderBy"] = "labios";
	
		
			
		
				
	
	
		
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
	
	
	
	

	

	
	$tdatacolaboraciones["Labios"] = $fdata;
//	Menton
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "Menton";
	$fdata["GoodName"] = "Menton";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","Menton"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_menton";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "idmenton";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "menton";
	
		
	$edata["LookupOrderBy"] = "menton";
	
		
			
		
				
	
	
		
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
	
	
	
	

	

	
	$tdatacolaboraciones["Menton"] = $fdata;
//	Cejas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Cejas";
	$fdata["GoodName"] = "Cejas";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","Cejas"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_cejas";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "idcejas";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "cejas";
	
		
	$edata["LookupOrderBy"] = "cejas";
	
		
			
		
				
	
	
		
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
	
	
	
	

	

	
	$tdatacolaboraciones["Cejas"] = $fdata;
//	VFacial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "VFacial";
	$fdata["GoodName"] = "VFacial";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","VFacial"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_vfacial";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "idvfacial";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "vfacial";
	
		
	$edata["LookupOrderBy"] = "vfacial";
	
		
			
		
				
	
	
		
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
	
	
	
	

	

	
	$tdatacolaboraciones["VFacial"] = $fdata;
//	Delito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Delito";
	$fdata["GoodName"] = "Delito";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","Delito"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_delito";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "delito";
	
		
	$edata["LookupOrderBy"] = "delito";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 130;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdatacolaboraciones["Delito"] = $fdata;
//	Particularidades
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Particularidades";
	$fdata["GoodName"] = "Particularidades";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","Particularidades"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
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
	
	
	
	

	

	
	$tdatacolaboraciones["Particularidades"] = $fdata;
//	Nota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Nota";
	$fdata["GoodName"] = "Nota";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","Nota"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
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
	
	
	
	

	

	
	$tdatacolaboraciones["Nota"] = $fdata;
//	DescHechos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "DescHechos";
	$fdata["GoodName"] = "DescHechos";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","DescHechos"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
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
	
	
	
	

	

	
	$tdatacolaboraciones["DescHechos"] = $fdata;
//	Obseva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Obseva";
	$fdata["GoodName"] = "Obseva";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","Obseva"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
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
	
		
		
		$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdatacolaboraciones["Obseva"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","Status"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_estatus";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "estatus";
	
		
	$edata["LookupOrderBy"] = "estatus";
	
		
			
		
				
	
	
		
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

	

	
	$tdatacolaboraciones["Status"] = $fdata;
//	FAparicion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "FAparicion";
	$fdata["GoodName"] = "FAparicion";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","FAparicion"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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

	

	
	$tdatacolaboraciones["FAparicion"] = $fdata;
//	Oficio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "Oficio";
	$fdata["GoodName"] = "Oficio";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","Oficio"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
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
	
	
	
	

	

	
	$tdatacolaboraciones["Oficio"] = $fdata;
//	EstApar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "EstApar";
	$fdata["GoodName"] = "EstApar";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","EstApar"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_est_apar";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Estatus";
	
		
	$edata["LookupOrderBy"] = "Estatus";
	
		
			
		
				
	
	
		
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
	
	
	
	

	

	
	$tdatacolaboraciones["EstApar"] = $fdata;
//	Tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "Tipo";
	$fdata["GoodName"] = "Tipo";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","Tipo"); 
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
	
	
	
	

	

	
	$tdatacolaboraciones["Tipo"] = $fdata;
//	FRecib
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "FRecib";
	$fdata["GoodName"] = "FRecib";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","FRecib"); 
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
	
	
	
	

	

	
	$tdatacolaboraciones["FRecib"] = $fdata;
//	UsrBaja
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "UsrBaja";
	$fdata["GoodName"] = "UsrBaja";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","UsrBaja"); 
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
	
	
	
	

	

	
	$tdatacolaboraciones["UsrBaja"] = $fdata;
//	FecBaja
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "FecBaja";
	$fdata["GoodName"] = "FecBaja";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","FecBaja"); 
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
	
	
	
	

	

	
	$tdatacolaboraciones["FecBaja"] = $fdata;
//	RutFoto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "RutFoto";
	$fdata["GoodName"] = "RutFoto";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","RutFoto"); 
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
	
	
	
	

	

	
	$tdatacolaboraciones["RutFoto"] = $fdata;
//	FCaptura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "FCaptura";
	$fdata["GoodName"] = "FCaptura";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","FCaptura"); 
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
	
	
	
	

	

	
	$tdatacolaboraciones["FCaptura"] = $fdata;
//	TipoDoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "TipoDoc";
	$fdata["GoodName"] = "TipoDoc";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","TipoDoc"); 
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
	
	
	
	

	

	
	$tdatacolaboraciones["TipoDoc"] = $fdata;
//	Usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "Usuario";
	$fdata["GoodName"] = "Usuario";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","Usuario"); 
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
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdatacolaboraciones["Usuario"] = $fdata;
//	fotoChica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "fotoChica";
	$fdata["GoodName"] = "fotoChica";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","fotoChica"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "fotoChica"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fotoChica";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "File-based Image");
	
		
		
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 60;
	$vdata["ThumbHeight"] = 80;	
			$vdata["ImageWidth"] = 457;
	$vdata["ImageHeight"] = 0;
	
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 150;
	
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 80;
	
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	$fdata["Absolute"] = true;
	
	

	

	
	$tdatacolaboraciones["fotoChica"] = $fdata;
//	fotoGrande
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "fotoGrande";
	$fdata["GoodName"] = "fotoGrande";
	$fdata["ownerTable"] = "colaboraciones";
	$fdata["Label"] = GetFieldLabel("colaboraciones","fotoGrande"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "fotoGrande"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fotoGrande";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "File-based Image");
	
		
		
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 170;
	$vdata["ThumbHeight"] = 200;	
			$vdata["ImageWidth"] = 457;
	$vdata["ImageHeight"] = 0;
	
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 150;
	
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 200;
	
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	$fdata["Absolute"] = true;
	
	

	

	
	$tdatacolaboraciones["fotoGrande"] = $fdata;

	
$tables_data["colaboraciones"]=&$tdatacolaboraciones;
$field_labels["colaboraciones"] = &$fieldLabelscolaboraciones;
$fieldToolTips["colaboraciones"] = &$fieldToolTipscolaboraciones;
$page_titles["colaboraciones"] = &$pageTitlescolaboraciones;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["colaboraciones"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["colaboraciones"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_colaboraciones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  	Estado,  	Mun,  	uipj,  	numFiscal,  	`añoInv`,  	numInv,  	FInicio,  	MinPub,  	Agencia,  	Ofic,  	FExtrav,  	Nombre,  	APat,  	AMat,  	Sexo,  	EdadA,  	EdadM,  	Nac,  	Origen,  	MpoOrigen,  	Escolaridad,  	Est,  	Compl,  	Ojos,  	Piel,  	Cab,  	TCab,  	Cabcol,  	Nariz,  	Labios,  	Menton,  	Cejas,  	VFacial,  	Delito,  	Particularidades,  	Nota,  	DescHechos,  	Obseva,  	Status,  	FAparicion,  	Oficio,  	EstApar,  	Tipo,  	FRecib,  	UsrBaja,  	FecBaja,  	RutFoto,  	FCaptura,  	TipoDoc,  	Usuario,  	fotoChica,  	fotoGrande";
$proto0["m_strFrom"] = "FROM colaboraciones";
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
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto5["m_sql"] = "Id";
$proto5["m_srcTableName"] = "colaboraciones";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto7["m_sql"] = "Estado";
$proto7["m_srcTableName"] = "colaboraciones";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Mun",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto9["m_sql"] = "Mun";
$proto9["m_srcTableName"] = "colaboraciones";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "uipj",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto11["m_sql"] = "uipj";
$proto11["m_srcTableName"] = "colaboraciones";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "numFiscal",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto13["m_sql"] = "numFiscal";
$proto13["m_srcTableName"] = "colaboraciones";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "añoInv",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto15["m_sql"] = "`añoInv`";
$proto15["m_srcTableName"] = "colaboraciones";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "numInv",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto17["m_sql"] = "numInv";
$proto17["m_srcTableName"] = "colaboraciones";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "FInicio",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto19["m_sql"] = "FInicio";
$proto19["m_srcTableName"] = "colaboraciones";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "MinPub",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto21["m_sql"] = "MinPub";
$proto21["m_srcTableName"] = "colaboraciones";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Agencia",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto23["m_sql"] = "Agencia";
$proto23["m_srcTableName"] = "colaboraciones";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Ofic",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto25["m_sql"] = "Ofic";
$proto25["m_srcTableName"] = "colaboraciones";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "FExtrav",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto27["m_sql"] = "FExtrav";
$proto27["m_srcTableName"] = "colaboraciones";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto29["m_sql"] = "Nombre";
$proto29["m_srcTableName"] = "colaboraciones";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "APat",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto31["m_sql"] = "APat";
$proto31["m_srcTableName"] = "colaboraciones";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "AMat",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto33["m_sql"] = "AMat";
$proto33["m_srcTableName"] = "colaboraciones";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "Sexo",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto35["m_sql"] = "Sexo";
$proto35["m_srcTableName"] = "colaboraciones";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "EdadA",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto37["m_sql"] = "EdadA";
$proto37["m_srcTableName"] = "colaboraciones";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "EdadM",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto39["m_sql"] = "EdadM";
$proto39["m_srcTableName"] = "colaboraciones";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "Nac",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto41["m_sql"] = "Nac";
$proto41["m_srcTableName"] = "colaboraciones";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "Origen",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto43["m_sql"] = "Origen";
$proto43["m_srcTableName"] = "colaboraciones";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "MpoOrigen",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto45["m_sql"] = "MpoOrigen";
$proto45["m_srcTableName"] = "colaboraciones";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "Escolaridad",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto47["m_sql"] = "Escolaridad";
$proto47["m_srcTableName"] = "colaboraciones";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "Est",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto49["m_sql"] = "Est";
$proto49["m_srcTableName"] = "colaboraciones";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "Compl",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto51["m_sql"] = "Compl";
$proto51["m_srcTableName"] = "colaboraciones";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "Ojos",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto53["m_sql"] = "Ojos";
$proto53["m_srcTableName"] = "colaboraciones";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "Piel",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto55["m_sql"] = "Piel";
$proto55["m_srcTableName"] = "colaboraciones";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "Cab",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto57["m_sql"] = "Cab";
$proto57["m_srcTableName"] = "colaboraciones";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "TCab",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto59["m_sql"] = "TCab";
$proto59["m_srcTableName"] = "colaboraciones";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "Cabcol",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto61["m_sql"] = "Cabcol";
$proto61["m_srcTableName"] = "colaboraciones";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "Nariz",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto63["m_sql"] = "Nariz";
$proto63["m_srcTableName"] = "colaboraciones";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "Labios",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto65["m_sql"] = "Labios";
$proto65["m_srcTableName"] = "colaboraciones";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "Menton",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto67["m_sql"] = "Menton";
$proto67["m_srcTableName"] = "colaboraciones";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "Cejas",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto69["m_sql"] = "Cejas";
$proto69["m_srcTableName"] = "colaboraciones";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "VFacial",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto71["m_sql"] = "VFacial";
$proto71["m_srcTableName"] = "colaboraciones";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "Delito",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto73["m_sql"] = "Delito";
$proto73["m_srcTableName"] = "colaboraciones";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "Particularidades",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto75["m_sql"] = "Particularidades";
$proto75["m_srcTableName"] = "colaboraciones";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "Nota",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto77["m_sql"] = "Nota";
$proto77["m_srcTableName"] = "colaboraciones";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "DescHechos",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto79["m_sql"] = "DescHechos";
$proto79["m_srcTableName"] = "colaboraciones";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "Obseva",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto81["m_sql"] = "Obseva";
$proto81["m_srcTableName"] = "colaboraciones";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto83["m_sql"] = "Status";
$proto83["m_srcTableName"] = "colaboraciones";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto0["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "FAparicion",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto85["m_sql"] = "FAparicion";
$proto85["m_srcTableName"] = "colaboraciones";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto0["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLField(array(
	"m_strName" => "Oficio",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto87["m_sql"] = "Oficio";
$proto87["m_srcTableName"] = "colaboraciones";
$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "";
$obj = new SQLFieldListItem($proto87);

$proto0["m_fieldlist"][]=$obj;
						$proto89=array();
			$obj = new SQLField(array(
	"m_strName" => "EstApar",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto89["m_sql"] = "EstApar";
$proto89["m_srcTableName"] = "colaboraciones";
$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "";
$obj = new SQLFieldListItem($proto89);

$proto0["m_fieldlist"][]=$obj;
						$proto91=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto91["m_sql"] = "Tipo";
$proto91["m_srcTableName"] = "colaboraciones";
$proto91["m_expr"]=$obj;
$proto91["m_alias"] = "";
$obj = new SQLFieldListItem($proto91);

$proto0["m_fieldlist"][]=$obj;
						$proto93=array();
			$obj = new SQLField(array(
	"m_strName" => "FRecib",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto93["m_sql"] = "FRecib";
$proto93["m_srcTableName"] = "colaboraciones";
$proto93["m_expr"]=$obj;
$proto93["m_alias"] = "";
$obj = new SQLFieldListItem($proto93);

$proto0["m_fieldlist"][]=$obj;
						$proto95=array();
			$obj = new SQLField(array(
	"m_strName" => "UsrBaja",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto95["m_sql"] = "UsrBaja";
$proto95["m_srcTableName"] = "colaboraciones";
$proto95["m_expr"]=$obj;
$proto95["m_alias"] = "";
$obj = new SQLFieldListItem($proto95);

$proto0["m_fieldlist"][]=$obj;
						$proto97=array();
			$obj = new SQLField(array(
	"m_strName" => "FecBaja",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto97["m_sql"] = "FecBaja";
$proto97["m_srcTableName"] = "colaboraciones";
$proto97["m_expr"]=$obj;
$proto97["m_alias"] = "";
$obj = new SQLFieldListItem($proto97);

$proto0["m_fieldlist"][]=$obj;
						$proto99=array();
			$obj = new SQLField(array(
	"m_strName" => "RutFoto",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto99["m_sql"] = "RutFoto";
$proto99["m_srcTableName"] = "colaboraciones";
$proto99["m_expr"]=$obj;
$proto99["m_alias"] = "";
$obj = new SQLFieldListItem($proto99);

$proto0["m_fieldlist"][]=$obj;
						$proto101=array();
			$obj = new SQLField(array(
	"m_strName" => "FCaptura",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto101["m_sql"] = "FCaptura";
$proto101["m_srcTableName"] = "colaboraciones";
$proto101["m_expr"]=$obj;
$proto101["m_alias"] = "";
$obj = new SQLFieldListItem($proto101);

$proto0["m_fieldlist"][]=$obj;
						$proto103=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoDoc",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto103["m_sql"] = "TipoDoc";
$proto103["m_srcTableName"] = "colaboraciones";
$proto103["m_expr"]=$obj;
$proto103["m_alias"] = "";
$obj = new SQLFieldListItem($proto103);

$proto0["m_fieldlist"][]=$obj;
						$proto105=array();
			$obj = new SQLField(array(
	"m_strName" => "Usuario",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto105["m_sql"] = "Usuario";
$proto105["m_srcTableName"] = "colaboraciones";
$proto105["m_expr"]=$obj;
$proto105["m_alias"] = "";
$obj = new SQLFieldListItem($proto105);

$proto0["m_fieldlist"][]=$obj;
						$proto107=array();
			$obj = new SQLField(array(
	"m_strName" => "fotoChica",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto107["m_sql"] = "fotoChica";
$proto107["m_srcTableName"] = "colaboraciones";
$proto107["m_expr"]=$obj;
$proto107["m_alias"] = "";
$obj = new SQLFieldListItem($proto107);

$proto0["m_fieldlist"][]=$obj;
						$proto109=array();
			$obj = new SQLField(array(
	"m_strName" => "fotoGrande",
	"m_strTable" => "colaboraciones",
	"m_srcTableName" => "colaboraciones"
));

$proto109["m_sql"] = "fotoGrande";
$proto109["m_srcTableName"] = "colaboraciones";
$proto109["m_expr"]=$obj;
$proto109["m_alias"] = "";
$obj = new SQLFieldListItem($proto109);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto111=array();
$proto111["m_link"] = "SQLL_MAIN";
			$proto112=array();
$proto112["m_strName"] = "colaboraciones";
$proto112["m_srcTableName"] = "colaboraciones";
$proto112["m_columns"] = array();
$proto112["m_columns"][] = "Id";
$proto112["m_columns"][] = "Estado";
$proto112["m_columns"][] = "Mun";
$proto112["m_columns"][] = "uipj";
$proto112["m_columns"][] = "numFiscal";
$proto112["m_columns"][] = "añoInv";
$proto112["m_columns"][] = "numInv";
$proto112["m_columns"][] = "FInicio";
$proto112["m_columns"][] = "MinPub";
$proto112["m_columns"][] = "Agencia";
$proto112["m_columns"][] = "Ofic";
$proto112["m_columns"][] = "FExtrav";
$proto112["m_columns"][] = "Nombre";
$proto112["m_columns"][] = "APat";
$proto112["m_columns"][] = "AMat";
$proto112["m_columns"][] = "Sexo";
$proto112["m_columns"][] = "EdadA";
$proto112["m_columns"][] = "EdadM";
$proto112["m_columns"][] = "Nac";
$proto112["m_columns"][] = "Origen";
$proto112["m_columns"][] = "MpoOrigen";
$proto112["m_columns"][] = "Escolaridad";
$proto112["m_columns"][] = "Est";
$proto112["m_columns"][] = "Compl";
$proto112["m_columns"][] = "Ojos";
$proto112["m_columns"][] = "Piel";
$proto112["m_columns"][] = "Cab";
$proto112["m_columns"][] = "TCab";
$proto112["m_columns"][] = "Cabcol";
$proto112["m_columns"][] = "Nariz";
$proto112["m_columns"][] = "Labios";
$proto112["m_columns"][] = "Menton";
$proto112["m_columns"][] = "Cejas";
$proto112["m_columns"][] = "VFacial";
$proto112["m_columns"][] = "Delito";
$proto112["m_columns"][] = "Particularidades";
$proto112["m_columns"][] = "Nota";
$proto112["m_columns"][] = "DescHechos";
$proto112["m_columns"][] = "Obseva";
$proto112["m_columns"][] = "Status";
$proto112["m_columns"][] = "FAparicion";
$proto112["m_columns"][] = "Oficio";
$proto112["m_columns"][] = "EstApar";
$proto112["m_columns"][] = "Tipo";
$proto112["m_columns"][] = "FRecib";
$proto112["m_columns"][] = "UsrBaja";
$proto112["m_columns"][] = "FecBaja";
$proto112["m_columns"][] = "RutFoto";
$proto112["m_columns"][] = "FCaptura";
$proto112["m_columns"][] = "TipoDoc";
$proto112["m_columns"][] = "Usuario";
$proto112["m_columns"][] = "fotoChica";
$proto112["m_columns"][] = "fotoGrande";
$obj = new SQLTable($proto112);

$proto111["m_table"] = $obj;
$proto111["m_sql"] = "colaboraciones";
$proto111["m_alias"] = "";
$proto111["m_srcTableName"] = "colaboraciones";
$proto113=array();
$proto113["m_sql"] = "";
$proto113["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto113["m_column"]=$obj;
$proto113["m_contained"] = array();
$proto113["m_strCase"] = "";
$proto113["m_havingmode"] = false;
$proto113["m_inBrackets"] = false;
$proto113["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto113);

$proto111["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto111);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="colaboraciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_colaboraciones = createSqlQuery_colaboraciones();


	
																																																					
	
$tdatacolaboraciones[".sqlquery"] = $queryData_colaboraciones;

include_once(getabspath("include/colaboraciones_events.php"));
$tableEvents["colaboraciones"] = new eventclass_colaboraciones;
$tdatacolaboraciones[".hasEvents"] = true;

?>