<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadesaparecidos = array();	
	$tdatadesaparecidos[".truncateText"] = true;
	$tdatadesaparecidos[".NumberOfChars"] = 80; 
	$tdatadesaparecidos[".ShortName"] = "desaparecidos";
	$tdatadesaparecidos[".OwnerID"] = "Usuario";
	$tdatadesaparecidos[".OriginalTable"] = "desaparecidos";

//	field labels
$fieldLabelsdesaparecidos = array();
$fieldToolTipsdesaparecidos = array();
$pageTitlesdesaparecidos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdesaparecidos["Spanish"] = array();
	$fieldToolTipsdesaparecidos["Spanish"] = array();
	$pageTitlesdesaparecidos["Spanish"] = array();
	$fieldLabelsdesaparecidos["Spanish"]["Id"] = "Id";
	$fieldToolTipsdesaparecidos["Spanish"]["Id"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["Estado"] = "Estado";
	$fieldToolTipsdesaparecidos["Spanish"]["Estado"] = "Estado donde se inicia la carpeta de investigación";
	$fieldLabelsdesaparecidos["Spanish"]["Mun"] = "Municipio";
	$fieldToolTipsdesaparecidos["Spanish"]["Mun"] = "Municipio donde se inicia la carpeta de investigación";
	$fieldLabelsdesaparecidos["Spanish"]["uipj"] = "UIPJ";
	$fieldToolTipsdesaparecidos["Spanish"]["uipj"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["numFiscal"] = "Número de Fiscal";
	$fieldToolTipsdesaparecidos["Spanish"]["numFiscal"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["a_oInv"] = "Año de Investigación";
	$fieldToolTipsdesaparecidos["Spanish"]["añoInv"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["numInv"] = "Número de Carpeta";
	$fieldToolTipsdesaparecidos["Spanish"]["numInv"] = "Solo capturar el número correspondiente de la carpeta de investigación";
	$fieldLabelsdesaparecidos["Spanish"]["FInicio"] = "Fecha de Inicio";
	$fieldToolTipsdesaparecidos["Spanish"]["FInicio"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["MinPub"] = "Fiscal";
	$fieldToolTipsdesaparecidos["Spanish"]["MinPub"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["Agencia"] = "Agencia";
	$fieldToolTipsdesaparecidos["Spanish"]["Agencia"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["Ofic"] = "Oficio de <br>Colaboración";
	$fieldToolTipsdesaparecidos["Spanish"]["Ofic"] = "Número de oficio con el que solicitará su publicación a Centro de Información";
	$fieldLabelsdesaparecidos["Spanish"]["FExtrav"] = "Fecha de Extravío";
	$fieldToolTipsdesaparecidos["Spanish"]["FExtrav"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipsdesaparecidos["Spanish"]["Nombre"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["APat"] = "Paterno";
	$fieldToolTipsdesaparecidos["Spanish"]["APat"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["AMat"] = "Materno";
	$fieldToolTipsdesaparecidos["Spanish"]["AMat"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["identResg"] = "Identidad <br>Resguardada";
	$fieldToolTipsdesaparecidos["Spanish"]["identResg"] = "Favor de capturar iniciales o número que se designe para la persona con identidad reguardada ya que es lo que se publicará en el portal";
	$fieldLabelsdesaparecidos["Spanish"]["Sexo"] = "Sexo";
	$fieldToolTipsdesaparecidos["Spanish"]["Sexo"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["EdadA"] = "Edad Años";
	$fieldToolTipsdesaparecidos["Spanish"]["EdadA"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["EdadM"] = "Edad Meses";
	$fieldToolTipsdesaparecidos["Spanish"]["EdadM"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["Nac"] = "Nacionalidad";
	$fieldToolTipsdesaparecidos["Spanish"]["Nac"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["Origen"] = "Estado de Origen";
	$fieldToolTipsdesaparecidos["Spanish"]["Origen"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["MpoOrigen"] = "Municipio de Origen";
	$fieldToolTipsdesaparecidos["Spanish"]["MpoOrigen"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["Escolaridad"] = "Escolaridad";
	$fieldToolTipsdesaparecidos["Spanish"]["Escolaridad"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["Est"] = "Estatura";
	$fieldToolTipsdesaparecidos["Spanish"]["Est"] = "Ingrese solo número sin abreviaturas o palabras";
	$fieldLabelsdesaparecidos["Spanish"]["Compl"] = "Complexión";
	$fieldToolTipsdesaparecidos["Spanish"]["Compl"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["Ojos"] = "Ojos";
	$fieldToolTipsdesaparecidos["Spanish"]["Ojos"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["Piel"] = "Piel";
	$fieldToolTipsdesaparecidos["Spanish"]["Piel"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["Cab"] = "Cabello";
	$fieldToolTipsdesaparecidos["Spanish"]["Cab"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["TCab"] = "Tipo de Cabello";
	$fieldToolTipsdesaparecidos["Spanish"]["TCab"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["Cabcol"] = "Color de Cabello";
	$fieldToolTipsdesaparecidos["Spanish"]["Cabcol"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["Nariz"] = "Nariz";
	$fieldToolTipsdesaparecidos["Spanish"]["Nariz"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["Labios"] = "Labios";
	$fieldToolTipsdesaparecidos["Spanish"]["Labios"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["Menton"] = "Menton";
	$fieldToolTipsdesaparecidos["Spanish"]["Menton"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["Cejas"] = "Cejas";
	$fieldToolTipsdesaparecidos["Spanish"]["Cejas"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["VFacial"] = "Vello Facial";
	$fieldToolTipsdesaparecidos["Spanish"]["VFacial"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["Delito"] = "Tipo de Desaparición";
	$fieldToolTipsdesaparecidos["Spanish"]["Delito"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["Particularidades"] = "Particularidades";
	$fieldToolTipsdesaparecidos["Spanish"]["Particularidades"] = "Lunares, tatuajes, perforaciones, etcétera.";
	$fieldLabelsdesaparecidos["Spanish"]["Nota"] = "Vestimenta";
	$fieldToolTipsdesaparecidos["Spanish"]["Nota"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["DescHechos"] = "Hechos";
	$fieldToolTipsdesaparecidos["Spanish"]["DescHechos"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["Obseva"] = "Obsevaciones";
	$fieldToolTipsdesaparecidos["Spanish"]["Obseva"] = "Anotación que considere pertinente";
	$fieldLabelsdesaparecidos["Spanish"]["Status"] = "Estatus";
	$fieldToolTipsdesaparecidos["Spanish"]["Status"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["FAparicion"] = "Fecha de Localizado";
	$fieldToolTipsdesaparecidos["Spanish"]["FAparicion"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["Oficio"] = "Oficio";
	$fieldToolTipsdesaparecidos["Spanish"]["Oficio"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["EstApar"] = "Estado del Aparecido";
	$fieldToolTipsdesaparecidos["Spanish"]["EstApar"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["Tipo"] = "Tipo";
	$fieldToolTipsdesaparecidos["Spanish"]["Tipo"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["FRecib"] = "FRecib";
	$fieldToolTipsdesaparecidos["Spanish"]["FRecib"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["UsrBaja"] = "Usr Baja";
	$fieldToolTipsdesaparecidos["Spanish"]["UsrBaja"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["FecBaja"] = "Fec Baja";
	$fieldToolTipsdesaparecidos["Spanish"]["FecBaja"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["RutFoto"] = "Rut Foto";
	$fieldToolTipsdesaparecidos["Spanish"]["RutFoto"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["FCaptura"] = "FCaptura";
	$fieldToolTipsdesaparecidos["Spanish"]["FCaptura"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["TipoDoc"] = "Tipo Doc";
	$fieldToolTipsdesaparecidos["Spanish"]["TipoDoc"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["Usuario"] = "Usuario";
	$fieldToolTipsdesaparecidos["Spanish"]["Usuario"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["fotoChica"] = "Foto Chica";
	$fieldToolTipsdesaparecidos["Spanish"]["fotoChica"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["fotoGrande"] = "Foto Grande";
	$fieldToolTipsdesaparecidos["Spanish"]["fotoGrande"] = "";
	$fieldLabelsdesaparecidos["Spanish"]["validacion"] = "Validación";
	$fieldToolTipsdesaparecidos["Spanish"]["validacion"] = "";
	$pageTitlesdesaparecidos["Spanish"]["add"] = "Registro Público de Personas Desaparecidas";
	if (count($fieldToolTipsdesaparecidos["Spanish"]))
		$tdatadesaparecidos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdesaparecidos[""] = array();
	$fieldToolTipsdesaparecidos[""] = array();
	$pageTitlesdesaparecidos[""] = array();
	$fieldLabelsdesaparecidos[""]["Id"] = "Id";
	$fieldToolTipsdesaparecidos[""]["Id"] = "";
	if (count($fieldToolTipsdesaparecidos[""]))
		$tdatadesaparecidos[".isUseToolTips"] = true;
}
	
	
	$tdatadesaparecidos[".NCSearch"] = true;



$tdatadesaparecidos[".shortTableName"] = "desaparecidos";
$tdatadesaparecidos[".nSecOptions"] = 1;
$tdatadesaparecidos[".recsPerRowList"] = 1;
$tdatadesaparecidos[".recsPerRowPrint"] = 1;
$tdatadesaparecidos[".mainTableOwnerID"] = "Usuario";
$tdatadesaparecidos[".moveNext"] = 1;
$tdatadesaparecidos[".entityType"] = 0;

$tdatadesaparecidos[".strOriginalTableName"] = "desaparecidos";




$tdatadesaparecidos[".showAddInPopup"] = false;

$tdatadesaparecidos[".showEditInPopup"] = false;

$tdatadesaparecidos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadesaparecidos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadesaparecidos[".fieldsForRegister"] = array();

$tdatadesaparecidos[".listAjax"] = false;

	$tdatadesaparecidos[".audit"] = false;

	$tdatadesaparecidos[".locking"] = false;

$tdatadesaparecidos[".edit"] = true;
$tdatadesaparecidos[".afterEditAction"] = 1;
$tdatadesaparecidos[".closePopupAfterEdit"] = 1;
$tdatadesaparecidos[".afterEditActionDetTable"] = "";

$tdatadesaparecidos[".add"] = true;
$tdatadesaparecidos[".afterAddAction"] = 1;
$tdatadesaparecidos[".closePopupAfterAdd"] = 1;
$tdatadesaparecidos[".afterAddActionDetTable"] = "";

$tdatadesaparecidos[".list"] = true;

$tdatadesaparecidos[".view"] = true;

$tdatadesaparecidos[".import"] = true;

$tdatadesaparecidos[".exportTo"] = true;

$tdatadesaparecidos[".printFriendly"] = true;


$tdatadesaparecidos[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatadesaparecidos[".searchSaving"] = false;
//

$tdatadesaparecidos[".showSearchPanel"] = true;
		$tdatadesaparecidos[".flexibleSearch"] = true;		

if (isMobile())
	$tdatadesaparecidos[".isUseAjaxSuggest"] = false;
else 
	$tdatadesaparecidos[".isUseAjaxSuggest"] = true;

$tdatadesaparecidos[".rowHighlite"] = true;



$tdatadesaparecidos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadesaparecidos[".isUseTimeForSearch"] = false;





$tdatadesaparecidos[".allSearchFields"] = array();
$tdatadesaparecidos[".filterFields"] = array();
$tdatadesaparecidos[".requiredSearchFields"] = array();

$tdatadesaparecidos[".allSearchFields"][] = "añoInv";
	$tdatadesaparecidos[".allSearchFields"][] = "identResg";
	$tdatadesaparecidos[".allSearchFields"][] = "uipj";
	$tdatadesaparecidos[".allSearchFields"][] = "numFiscal";
	$tdatadesaparecidos[".allSearchFields"][] = "Estado";
	$tdatadesaparecidos[".allSearchFields"][] = "Mun";
	$tdatadesaparecidos[".allSearchFields"][] = "numInv";
	$tdatadesaparecidos[".allSearchFields"][] = "FInicio";
	$tdatadesaparecidos[".allSearchFields"][] = "MinPub";
	$tdatadesaparecidos[".allSearchFields"][] = "FExtrav";
	$tdatadesaparecidos[".allSearchFields"][] = "Nombre";
	$tdatadesaparecidos[".allSearchFields"][] = "APat";
	$tdatadesaparecidos[".allSearchFields"][] = "AMat";
	$tdatadesaparecidos[".allSearchFields"][] = "Status";
	$tdatadesaparecidos[".allSearchFields"][] = "FAparicion";
	

$tdatadesaparecidos[".googleLikeFields"] = array();
$tdatadesaparecidos[".googleLikeFields"][] = "Id";
$tdatadesaparecidos[".googleLikeFields"][] = "Estado";
$tdatadesaparecidos[".googleLikeFields"][] = "Mun";
$tdatadesaparecidos[".googleLikeFields"][] = "uipj";
$tdatadesaparecidos[".googleLikeFields"][] = "numFiscal";
$tdatadesaparecidos[".googleLikeFields"][] = "añoInv";
$tdatadesaparecidos[".googleLikeFields"][] = "numInv";
$tdatadesaparecidos[".googleLikeFields"][] = "FInicio";
$tdatadesaparecidos[".googleLikeFields"][] = "MinPub";
$tdatadesaparecidos[".googleLikeFields"][] = "Agencia";
$tdatadesaparecidos[".googleLikeFields"][] = "Ofic";
$tdatadesaparecidos[".googleLikeFields"][] = "FExtrav";
$tdatadesaparecidos[".googleLikeFields"][] = "Nombre";
$tdatadesaparecidos[".googleLikeFields"][] = "APat";
$tdatadesaparecidos[".googleLikeFields"][] = "AMat";
$tdatadesaparecidos[".googleLikeFields"][] = "identResg";
$tdatadesaparecidos[".googleLikeFields"][] = "Sexo";
$tdatadesaparecidos[".googleLikeFields"][] = "EdadA";
$tdatadesaparecidos[".googleLikeFields"][] = "EdadM";
$tdatadesaparecidos[".googleLikeFields"][] = "Nac";
$tdatadesaparecidos[".googleLikeFields"][] = "Origen";
$tdatadesaparecidos[".googleLikeFields"][] = "MpoOrigen";
$tdatadesaparecidos[".googleLikeFields"][] = "Escolaridad";
$tdatadesaparecidos[".googleLikeFields"][] = "Est";
$tdatadesaparecidos[".googleLikeFields"][] = "Compl";
$tdatadesaparecidos[".googleLikeFields"][] = "Ojos";
$tdatadesaparecidos[".googleLikeFields"][] = "Piel";
$tdatadesaparecidos[".googleLikeFields"][] = "Cab";
$tdatadesaparecidos[".googleLikeFields"][] = "TCab";
$tdatadesaparecidos[".googleLikeFields"][] = "Cabcol";
$tdatadesaparecidos[".googleLikeFields"][] = "Nariz";
$tdatadesaparecidos[".googleLikeFields"][] = "Labios";
$tdatadesaparecidos[".googleLikeFields"][] = "Menton";
$tdatadesaparecidos[".googleLikeFields"][] = "Cejas";
$tdatadesaparecidos[".googleLikeFields"][] = "VFacial";
$tdatadesaparecidos[".googleLikeFields"][] = "Delito";
$tdatadesaparecidos[".googleLikeFields"][] = "Particularidades";
$tdatadesaparecidos[".googleLikeFields"][] = "Nota";
$tdatadesaparecidos[".googleLikeFields"][] = "DescHechos";
$tdatadesaparecidos[".googleLikeFields"][] = "Obseva";
$tdatadesaparecidos[".googleLikeFields"][] = "Status";
$tdatadesaparecidos[".googleLikeFields"][] = "FAparicion";
$tdatadesaparecidos[".googleLikeFields"][] = "Oficio";
$tdatadesaparecidos[".googleLikeFields"][] = "EstApar";
$tdatadesaparecidos[".googleLikeFields"][] = "Tipo";
$tdatadesaparecidos[".googleLikeFields"][] = "FRecib";
$tdatadesaparecidos[".googleLikeFields"][] = "UsrBaja";
$tdatadesaparecidos[".googleLikeFields"][] = "FecBaja";
$tdatadesaparecidos[".googleLikeFields"][] = "RutFoto";
$tdatadesaparecidos[".googleLikeFields"][] = "FCaptura";
$tdatadesaparecidos[".googleLikeFields"][] = "TipoDoc";
$tdatadesaparecidos[".googleLikeFields"][] = "Usuario";
$tdatadesaparecidos[".googleLikeFields"][] = "fotoChica";
$tdatadesaparecidos[".googleLikeFields"][] = "fotoGrande";
$tdatadesaparecidos[".googleLikeFields"][] = "validacion";


$tdatadesaparecidos[".advSearchFields"] = array();
$tdatadesaparecidos[".advSearchFields"][] = "añoInv";
$tdatadesaparecidos[".advSearchFields"][] = "identResg";
$tdatadesaparecidos[".advSearchFields"][] = "uipj";
$tdatadesaparecidos[".advSearchFields"][] = "numFiscal";
$tdatadesaparecidos[".advSearchFields"][] = "Estado";
$tdatadesaparecidos[".advSearchFields"][] = "Mun";
$tdatadesaparecidos[".advSearchFields"][] = "numInv";
$tdatadesaparecidos[".advSearchFields"][] = "FInicio";
$tdatadesaparecidos[".advSearchFields"][] = "MinPub";
$tdatadesaparecidos[".advSearchFields"][] = "FExtrav";
$tdatadesaparecidos[".advSearchFields"][] = "Nombre";
$tdatadesaparecidos[".advSearchFields"][] = "APat";
$tdatadesaparecidos[".advSearchFields"][] = "AMat";
$tdatadesaparecidos[".advSearchFields"][] = "Status";
$tdatadesaparecidos[".advSearchFields"][] = "FAparicion";

$tdatadesaparecidos[".tableType"] = "list";

$tdatadesaparecidos[".printerPageOrientation"] = 0;
$tdatadesaparecidos[".nPrinterPageScale"] = 100;

$tdatadesaparecidos[".nPrinterSplitRecords"] = 40;

$tdatadesaparecidos[".nPrinterPDFSplitRecords"] = 40;



$tdatadesaparecidos[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatadesaparecidos[".pageSize"] = 20;

$tdatadesaparecidos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadesaparecidos[".strOrderBy"] = $tstrOrderBy;

$tdatadesaparecidos[".orderindexes"] = array();

$tdatadesaparecidos[".sqlHead"] = "SELECT Id,  	Estado,  	Mun,  	uipj,  	numFiscal,  	`añoInv`,  	numInv,  	FInicio,  	MinPub,  	Agencia,  	Ofic,  	FExtrav,  	Nombre,  	APat,  	AMat,  	identResg,  	Sexo,  	EdadA,  	EdadM,  	Nac,  	Origen,  	MpoOrigen,  	Escolaridad,  	Est,  	Compl,  	Ojos,  	Piel,  	Cab,  	TCab,  	Cabcol,  	Nariz,  	Labios,  	Menton,  	Cejas,  	VFacial,  	Delito,  	Particularidades,  	Nota,  	DescHechos,  	Obseva,  	Status,  	FAparicion,  	Oficio,  	EstApar,  	Tipo,  	FRecib,  	UsrBaja,  	FecBaja,  	RutFoto,  	FCaptura,  	TipoDoc,  	Usuario,  	fotoChica,  	fotoGrande,  	validacion";
$tdatadesaparecidos[".sqlFrom"] = "FROM desaparecidos";
$tdatadesaparecidos[".sqlWhereExpr"] = "";
$tdatadesaparecidos[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadesaparecidos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadesaparecidos[".arrGroupsPerPage"] = $arrGPP;

$tdatadesaparecidos[".highlightSearchResults"] = true;

$tableKeysdesaparecidos = array();
$tableKeysdesaparecidos[] = "Id";
$tdatadesaparecidos[".Keys"] = $tableKeysdesaparecidos;

$tdatadesaparecidos[".listFields"] = array();
$tdatadesaparecidos[".listFields"][] = "identResg";
$tdatadesaparecidos[".listFields"][] = "Estado";
$tdatadesaparecidos[".listFields"][] = "Mun";
$tdatadesaparecidos[".listFields"][] = "numInv";
$tdatadesaparecidos[".listFields"][] = "FInicio";
$tdatadesaparecidos[".listFields"][] = "MinPub";
$tdatadesaparecidos[".listFields"][] = "FExtrav";
$tdatadesaparecidos[".listFields"][] = "Nombre";
$tdatadesaparecidos[".listFields"][] = "APat";
$tdatadesaparecidos[".listFields"][] = "AMat";
$tdatadesaparecidos[".listFields"][] = "Status";
$tdatadesaparecidos[".listFields"][] = "FAparicion";

$tdatadesaparecidos[".hideMobileList"] = array();


$tdatadesaparecidos[".viewFields"] = array();
$tdatadesaparecidos[".viewFields"][] = "Estado";
$tdatadesaparecidos[".viewFields"][] = "Mun";
$tdatadesaparecidos[".viewFields"][] = "uipj";
$tdatadesaparecidos[".viewFields"][] = "numFiscal";
$tdatadesaparecidos[".viewFields"][] = "añoInv";
$tdatadesaparecidos[".viewFields"][] = "numInv";
$tdatadesaparecidos[".viewFields"][] = "FInicio";
$tdatadesaparecidos[".viewFields"][] = "MinPub";
$tdatadesaparecidos[".viewFields"][] = "Ofic";
$tdatadesaparecidos[".viewFields"][] = "FExtrav";
$tdatadesaparecidos[".viewFields"][] = "Nombre";
$tdatadesaparecidos[".viewFields"][] = "APat";
$tdatadesaparecidos[".viewFields"][] = "AMat";
$tdatadesaparecidos[".viewFields"][] = "identResg";
$tdatadesaparecidos[".viewFields"][] = "Sexo";
$tdatadesaparecidos[".viewFields"][] = "EdadA";
$tdatadesaparecidos[".viewFields"][] = "EdadM";
$tdatadesaparecidos[".viewFields"][] = "Nac";
$tdatadesaparecidos[".viewFields"][] = "Origen";
$tdatadesaparecidos[".viewFields"][] = "MpoOrigen";
$tdatadesaparecidos[".viewFields"][] = "Escolaridad";
$tdatadesaparecidos[".viewFields"][] = "Est";
$tdatadesaparecidos[".viewFields"][] = "Compl";
$tdatadesaparecidos[".viewFields"][] = "Ojos";
$tdatadesaparecidos[".viewFields"][] = "Piel";
$tdatadesaparecidos[".viewFields"][] = "Cab";
$tdatadesaparecidos[".viewFields"][] = "TCab";
$tdatadesaparecidos[".viewFields"][] = "Cabcol";
$tdatadesaparecidos[".viewFields"][] = "Nariz";
$tdatadesaparecidos[".viewFields"][] = "Labios";
$tdatadesaparecidos[".viewFields"][] = "Menton";
$tdatadesaparecidos[".viewFields"][] = "Cejas";
$tdatadesaparecidos[".viewFields"][] = "VFacial";
$tdatadesaparecidos[".viewFields"][] = "Delito";
$tdatadesaparecidos[".viewFields"][] = "Particularidades";
$tdatadesaparecidos[".viewFields"][] = "Nota";
$tdatadesaparecidos[".viewFields"][] = "DescHechos";
$tdatadesaparecidos[".viewFields"][] = "Obseva";
$tdatadesaparecidos[".viewFields"][] = "Status";
$tdatadesaparecidos[".viewFields"][] = "FAparicion";
$tdatadesaparecidos[".viewFields"][] = "Oficio";
$tdatadesaparecidos[".viewFields"][] = "EstApar";
$tdatadesaparecidos[".viewFields"][] = "fotoChica";
$tdatadesaparecidos[".viewFields"][] = "fotoGrande";
$tdatadesaparecidos[".viewFields"][] = "validacion";

$tdatadesaparecidos[".addFields"] = array();
$tdatadesaparecidos[".addFields"][] = "Estado";
$tdatadesaparecidos[".addFields"][] = "Mun";
$tdatadesaparecidos[".addFields"][] = "uipj";
$tdatadesaparecidos[".addFields"][] = "numFiscal";
$tdatadesaparecidos[".addFields"][] = "añoInv";
$tdatadesaparecidos[".addFields"][] = "numInv";
$tdatadesaparecidos[".addFields"][] = "FInicio";
$tdatadesaparecidos[".addFields"][] = "MinPub";
$tdatadesaparecidos[".addFields"][] = "Ofic";
$tdatadesaparecidos[".addFields"][] = "FExtrav";
$tdatadesaparecidos[".addFields"][] = "Nombre";
$tdatadesaparecidos[".addFields"][] = "APat";
$tdatadesaparecidos[".addFields"][] = "AMat";
$tdatadesaparecidos[".addFields"][] = "identResg";
$tdatadesaparecidos[".addFields"][] = "Sexo";
$tdatadesaparecidos[".addFields"][] = "EdadA";
$tdatadesaparecidos[".addFields"][] = "EdadM";
$tdatadesaparecidos[".addFields"][] = "Nac";
$tdatadesaparecidos[".addFields"][] = "Origen";
$tdatadesaparecidos[".addFields"][] = "MpoOrigen";
$tdatadesaparecidos[".addFields"][] = "Escolaridad";
$tdatadesaparecidos[".addFields"][] = "Est";
$tdatadesaparecidos[".addFields"][] = "Compl";
$tdatadesaparecidos[".addFields"][] = "Ojos";
$tdatadesaparecidos[".addFields"][] = "Piel";
$tdatadesaparecidos[".addFields"][] = "Cab";
$tdatadesaparecidos[".addFields"][] = "TCab";
$tdatadesaparecidos[".addFields"][] = "Cabcol";
$tdatadesaparecidos[".addFields"][] = "Nariz";
$tdatadesaparecidos[".addFields"][] = "Labios";
$tdatadesaparecidos[".addFields"][] = "Menton";
$tdatadesaparecidos[".addFields"][] = "Cejas";
$tdatadesaparecidos[".addFields"][] = "VFacial";
$tdatadesaparecidos[".addFields"][] = "Delito";
$tdatadesaparecidos[".addFields"][] = "Particularidades";
$tdatadesaparecidos[".addFields"][] = "Nota";
$tdatadesaparecidos[".addFields"][] = "DescHechos";
$tdatadesaparecidos[".addFields"][] = "Obseva";
$tdatadesaparecidos[".addFields"][] = "Status";
$tdatadesaparecidos[".addFields"][] = "FAparicion";
$tdatadesaparecidos[".addFields"][] = "Oficio";
$tdatadesaparecidos[".addFields"][] = "EstApar";
$tdatadesaparecidos[".addFields"][] = "fotoChica";
$tdatadesaparecidos[".addFields"][] = "fotoGrande";
$tdatadesaparecidos[".addFields"][] = "validacion";

$tdatadesaparecidos[".masterListFields"] = array();
$tdatadesaparecidos[".masterListFields"][] = "Id";
$tdatadesaparecidos[".masterListFields"][] = "Estado";
$tdatadesaparecidos[".masterListFields"][] = "Mun";
$tdatadesaparecidos[".masterListFields"][] = "uipj";
$tdatadesaparecidos[".masterListFields"][] = "numFiscal";
$tdatadesaparecidos[".masterListFields"][] = "añoInv";
$tdatadesaparecidos[".masterListFields"][] = "numInv";
$tdatadesaparecidos[".masterListFields"][] = "FInicio";
$tdatadesaparecidos[".masterListFields"][] = "MinPub";
$tdatadesaparecidos[".masterListFields"][] = "Agencia";
$tdatadesaparecidos[".masterListFields"][] = "Ofic";
$tdatadesaparecidos[".masterListFields"][] = "FExtrav";
$tdatadesaparecidos[".masterListFields"][] = "Nombre";
$tdatadesaparecidos[".masterListFields"][] = "APat";
$tdatadesaparecidos[".masterListFields"][] = "AMat";
$tdatadesaparecidos[".masterListFields"][] = "identResg";
$tdatadesaparecidos[".masterListFields"][] = "Sexo";
$tdatadesaparecidos[".masterListFields"][] = "EdadA";
$tdatadesaparecidos[".masterListFields"][] = "EdadM";
$tdatadesaparecidos[".masterListFields"][] = "Nac";
$tdatadesaparecidos[".masterListFields"][] = "Origen";
$tdatadesaparecidos[".masterListFields"][] = "MpoOrigen";
$tdatadesaparecidos[".masterListFields"][] = "Escolaridad";
$tdatadesaparecidos[".masterListFields"][] = "Est";
$tdatadesaparecidos[".masterListFields"][] = "Compl";
$tdatadesaparecidos[".masterListFields"][] = "Ojos";
$tdatadesaparecidos[".masterListFields"][] = "Piel";
$tdatadesaparecidos[".masterListFields"][] = "Cab";
$tdatadesaparecidos[".masterListFields"][] = "TCab";
$tdatadesaparecidos[".masterListFields"][] = "Cabcol";
$tdatadesaparecidos[".masterListFields"][] = "Nariz";
$tdatadesaparecidos[".masterListFields"][] = "Labios";
$tdatadesaparecidos[".masterListFields"][] = "Menton";
$tdatadesaparecidos[".masterListFields"][] = "Cejas";
$tdatadesaparecidos[".masterListFields"][] = "VFacial";
$tdatadesaparecidos[".masterListFields"][] = "Delito";
$tdatadesaparecidos[".masterListFields"][] = "Particularidades";
$tdatadesaparecidos[".masterListFields"][] = "Nota";
$tdatadesaparecidos[".masterListFields"][] = "DescHechos";
$tdatadesaparecidos[".masterListFields"][] = "Obseva";
$tdatadesaparecidos[".masterListFields"][] = "Status";
$tdatadesaparecidos[".masterListFields"][] = "FAparicion";
$tdatadesaparecidos[".masterListFields"][] = "Oficio";
$tdatadesaparecidos[".masterListFields"][] = "EstApar";
$tdatadesaparecidos[".masterListFields"][] = "Tipo";
$tdatadesaparecidos[".masterListFields"][] = "FRecib";
$tdatadesaparecidos[".masterListFields"][] = "UsrBaja";
$tdatadesaparecidos[".masterListFields"][] = "FecBaja";
$tdatadesaparecidos[".masterListFields"][] = "RutFoto";
$tdatadesaparecidos[".masterListFields"][] = "FCaptura";
$tdatadesaparecidos[".masterListFields"][] = "TipoDoc";
$tdatadesaparecidos[".masterListFields"][] = "Usuario";
$tdatadesaparecidos[".masterListFields"][] = "fotoChica";
$tdatadesaparecidos[".masterListFields"][] = "fotoGrande";
$tdatadesaparecidos[".masterListFields"][] = "validacion";

$tdatadesaparecidos[".inlineAddFields"] = array();

$tdatadesaparecidos[".editFields"] = array();
$tdatadesaparecidos[".editFields"][] = "Estado";
$tdatadesaparecidos[".editFields"][] = "Mun";
$tdatadesaparecidos[".editFields"][] = "uipj";
$tdatadesaparecidos[".editFields"][] = "numFiscal";
$tdatadesaparecidos[".editFields"][] = "añoInv";
$tdatadesaparecidos[".editFields"][] = "numInv";
$tdatadesaparecidos[".editFields"][] = "FInicio";
$tdatadesaparecidos[".editFields"][] = "MinPub";
$tdatadesaparecidos[".editFields"][] = "Ofic";
$tdatadesaparecidos[".editFields"][] = "FExtrav";
$tdatadesaparecidos[".editFields"][] = "Nombre";
$tdatadesaparecidos[".editFields"][] = "APat";
$tdatadesaparecidos[".editFields"][] = "AMat";
$tdatadesaparecidos[".editFields"][] = "identResg";
$tdatadesaparecidos[".editFields"][] = "Sexo";
$tdatadesaparecidos[".editFields"][] = "EdadA";
$tdatadesaparecidos[".editFields"][] = "EdadM";
$tdatadesaparecidos[".editFields"][] = "Nac";
$tdatadesaparecidos[".editFields"][] = "Origen";
$tdatadesaparecidos[".editFields"][] = "MpoOrigen";
$tdatadesaparecidos[".editFields"][] = "Escolaridad";
$tdatadesaparecidos[".editFields"][] = "Est";
$tdatadesaparecidos[".editFields"][] = "Compl";
$tdatadesaparecidos[".editFields"][] = "Ojos";
$tdatadesaparecidos[".editFields"][] = "Piel";
$tdatadesaparecidos[".editFields"][] = "Cab";
$tdatadesaparecidos[".editFields"][] = "TCab";
$tdatadesaparecidos[".editFields"][] = "Cabcol";
$tdatadesaparecidos[".editFields"][] = "Nariz";
$tdatadesaparecidos[".editFields"][] = "Labios";
$tdatadesaparecidos[".editFields"][] = "Menton";
$tdatadesaparecidos[".editFields"][] = "Cejas";
$tdatadesaparecidos[".editFields"][] = "VFacial";
$tdatadesaparecidos[".editFields"][] = "Delito";
$tdatadesaparecidos[".editFields"][] = "Particularidades";
$tdatadesaparecidos[".editFields"][] = "Nota";
$tdatadesaparecidos[".editFields"][] = "DescHechos";
$tdatadesaparecidos[".editFields"][] = "Obseva";
$tdatadesaparecidos[".editFields"][] = "Status";
$tdatadesaparecidos[".editFields"][] = "FAparicion";
$tdatadesaparecidos[".editFields"][] = "Oficio";
$tdatadesaparecidos[".editFields"][] = "EstApar";
$tdatadesaparecidos[".editFields"][] = "fotoChica";
$tdatadesaparecidos[".editFields"][] = "fotoGrande";
$tdatadesaparecidos[".editFields"][] = "validacion";

$tdatadesaparecidos[".inlineEditFields"] = array();

$tdatadesaparecidos[".exportFields"] = array();
$tdatadesaparecidos[".exportFields"][] = "Estado";
$tdatadesaparecidos[".exportFields"][] = "Mun";
$tdatadesaparecidos[".exportFields"][] = "uipj";
$tdatadesaparecidos[".exportFields"][] = "numFiscal";
$tdatadesaparecidos[".exportFields"][] = "añoInv";
$tdatadesaparecidos[".exportFields"][] = "numInv";
$tdatadesaparecidos[".exportFields"][] = "FInicio";
$tdatadesaparecidos[".exportFields"][] = "MinPub";
$tdatadesaparecidos[".exportFields"][] = "Ofic";
$tdatadesaparecidos[".exportFields"][] = "FExtrav";
$tdatadesaparecidos[".exportFields"][] = "Nombre";
$tdatadesaparecidos[".exportFields"][] = "APat";
$tdatadesaparecidos[".exportFields"][] = "AMat";
$tdatadesaparecidos[".exportFields"][] = "identResg";
$tdatadesaparecidos[".exportFields"][] = "Sexo";
$tdatadesaparecidos[".exportFields"][] = "EdadA";
$tdatadesaparecidos[".exportFields"][] = "EdadM";
$tdatadesaparecidos[".exportFields"][] = "Nac";
$tdatadesaparecidos[".exportFields"][] = "Origen";
$tdatadesaparecidos[".exportFields"][] = "MpoOrigen";
$tdatadesaparecidos[".exportFields"][] = "Escolaridad";
$tdatadesaparecidos[".exportFields"][] = "Est";
$tdatadesaparecidos[".exportFields"][] = "Compl";
$tdatadesaparecidos[".exportFields"][] = "Ojos";
$tdatadesaparecidos[".exportFields"][] = "Piel";
$tdatadesaparecidos[".exportFields"][] = "Cab";
$tdatadesaparecidos[".exportFields"][] = "TCab";
$tdatadesaparecidos[".exportFields"][] = "Cabcol";
$tdatadesaparecidos[".exportFields"][] = "Nariz";
$tdatadesaparecidos[".exportFields"][] = "Labios";
$tdatadesaparecidos[".exportFields"][] = "Menton";
$tdatadesaparecidos[".exportFields"][] = "Cejas";
$tdatadesaparecidos[".exportFields"][] = "VFacial";
$tdatadesaparecidos[".exportFields"][] = "Delito";
$tdatadesaparecidos[".exportFields"][] = "Particularidades";
$tdatadesaparecidos[".exportFields"][] = "Nota";
$tdatadesaparecidos[".exportFields"][] = "DescHechos";
$tdatadesaparecidos[".exportFields"][] = "Obseva";
$tdatadesaparecidos[".exportFields"][] = "Status";
$tdatadesaparecidos[".exportFields"][] = "FAparicion";
$tdatadesaparecidos[".exportFields"][] = "Oficio";
$tdatadesaparecidos[".exportFields"][] = "EstApar";
$tdatadesaparecidos[".exportFields"][] = "validacion";

$tdatadesaparecidos[".importFields"] = array();
$tdatadesaparecidos[".importFields"][] = "Estado";
$tdatadesaparecidos[".importFields"][] = "Mun";
$tdatadesaparecidos[".importFields"][] = "uipj";
$tdatadesaparecidos[".importFields"][] = "numFiscal";
$tdatadesaparecidos[".importFields"][] = "añoInv";
$tdatadesaparecidos[".importFields"][] = "numInv";
$tdatadesaparecidos[".importFields"][] = "FInicio";
$tdatadesaparecidos[".importFields"][] = "MinPub";
$tdatadesaparecidos[".importFields"][] = "Ofic";
$tdatadesaparecidos[".importFields"][] = "FExtrav";
$tdatadesaparecidos[".importFields"][] = "Nombre";
$tdatadesaparecidos[".importFields"][] = "APat";
$tdatadesaparecidos[".importFields"][] = "AMat";
$tdatadesaparecidos[".importFields"][] = "identResg";
$tdatadesaparecidos[".importFields"][] = "Sexo";
$tdatadesaparecidos[".importFields"][] = "EdadA";
$tdatadesaparecidos[".importFields"][] = "EdadM";
$tdatadesaparecidos[".importFields"][] = "Nac";
$tdatadesaparecidos[".importFields"][] = "Origen";
$tdatadesaparecidos[".importFields"][] = "MpoOrigen";
$tdatadesaparecidos[".importFields"][] = "Escolaridad";
$tdatadesaparecidos[".importFields"][] = "Est";
$tdatadesaparecidos[".importFields"][] = "Compl";
$tdatadesaparecidos[".importFields"][] = "Ojos";
$tdatadesaparecidos[".importFields"][] = "Piel";
$tdatadesaparecidos[".importFields"][] = "Cab";
$tdatadesaparecidos[".importFields"][] = "TCab";
$tdatadesaparecidos[".importFields"][] = "Cabcol";
$tdatadesaparecidos[".importFields"][] = "Nariz";
$tdatadesaparecidos[".importFields"][] = "Labios";
$tdatadesaparecidos[".importFields"][] = "Menton";
$tdatadesaparecidos[".importFields"][] = "Cejas";
$tdatadesaparecidos[".importFields"][] = "VFacial";
$tdatadesaparecidos[".importFields"][] = "Delito";
$tdatadesaparecidos[".importFields"][] = "Particularidades";
$tdatadesaparecidos[".importFields"][] = "Nota";
$tdatadesaparecidos[".importFields"][] = "DescHechos";
$tdatadesaparecidos[".importFields"][] = "Obseva";
$tdatadesaparecidos[".importFields"][] = "Status";
$tdatadesaparecidos[".importFields"][] = "FAparicion";
$tdatadesaparecidos[".importFields"][] = "Oficio";
$tdatadesaparecidos[".importFields"][] = "EstApar";
$tdatadesaparecidos[".importFields"][] = "validacion";

$tdatadesaparecidos[".printFields"] = array();
$tdatadesaparecidos[".printFields"][] = "Estado";
$tdatadesaparecidos[".printFields"][] = "Mun";
$tdatadesaparecidos[".printFields"][] = "uipj";
$tdatadesaparecidos[".printFields"][] = "numFiscal";
$tdatadesaparecidos[".printFields"][] = "añoInv";
$tdatadesaparecidos[".printFields"][] = "numInv";
$tdatadesaparecidos[".printFields"][] = "FInicio";
$tdatadesaparecidos[".printFields"][] = "MinPub";
$tdatadesaparecidos[".printFields"][] = "Ofic";
$tdatadesaparecidos[".printFields"][] = "FExtrav";
$tdatadesaparecidos[".printFields"][] = "Nombre";
$tdatadesaparecidos[".printFields"][] = "APat";
$tdatadesaparecidos[".printFields"][] = "AMat";
$tdatadesaparecidos[".printFields"][] = "identResg";
$tdatadesaparecidos[".printFields"][] = "Sexo";
$tdatadesaparecidos[".printFields"][] = "EdadA";
$tdatadesaparecidos[".printFields"][] = "EdadM";
$tdatadesaparecidos[".printFields"][] = "Nac";
$tdatadesaparecidos[".printFields"][] = "Origen";
$tdatadesaparecidos[".printFields"][] = "MpoOrigen";
$tdatadesaparecidos[".printFields"][] = "Escolaridad";
$tdatadesaparecidos[".printFields"][] = "Est";
$tdatadesaparecidos[".printFields"][] = "Compl";
$tdatadesaparecidos[".printFields"][] = "Ojos";
$tdatadesaparecidos[".printFields"][] = "Piel";
$tdatadesaparecidos[".printFields"][] = "Cab";
$tdatadesaparecidos[".printFields"][] = "TCab";
$tdatadesaparecidos[".printFields"][] = "Cabcol";
$tdatadesaparecidos[".printFields"][] = "Nariz";
$tdatadesaparecidos[".printFields"][] = "Labios";
$tdatadesaparecidos[".printFields"][] = "Menton";
$tdatadesaparecidos[".printFields"][] = "Cejas";
$tdatadesaparecidos[".printFields"][] = "VFacial";
$tdatadesaparecidos[".printFields"][] = "Delito";
$tdatadesaparecidos[".printFields"][] = "Particularidades";
$tdatadesaparecidos[".printFields"][] = "Nota";
$tdatadesaparecidos[".printFields"][] = "DescHechos";
$tdatadesaparecidos[".printFields"][] = "Obseva";
$tdatadesaparecidos[".printFields"][] = "Status";
$tdatadesaparecidos[".printFields"][] = "FAparicion";
$tdatadesaparecidos[".printFields"][] = "Oficio";
$tdatadesaparecidos[".printFields"][] = "EstApar";
$tdatadesaparecidos[".printFields"][] = "fotoChica";
$tdatadesaparecidos[".printFields"][] = "fotoGrande";
$tdatadesaparecidos[".printFields"][] = "validacion";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","Id"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["Id"] = $fdata;
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","Estado"); 
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

	

	
	$tdatadesaparecidos["Estado"] = $fdata;
//	Mun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Mun";
	$fdata["GoodName"] = "Mun";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","Mun"); 
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

	

	
	$tdatadesaparecidos["Mun"] = $fdata;
//	uipj
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "uipj";
	$fdata["GoodName"] = "uipj";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","uipj"); 
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
	$edata["LinkFieldType"] = 0;
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

	

	
	$tdatadesaparecidos["uipj"] = $fdata;
//	numFiscal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "numFiscal";
	$fdata["GoodName"] = "numFiscal";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","numFiscal"); 
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

	

	
	$tdatadesaparecidos["numFiscal"] = $fdata;
//	añoInv
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "añoInv";
	$fdata["GoodName"] = "a_oInv";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","a_oInv"); 
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

	

	
	$tdatadesaparecidos["añoInv"] = $fdata;
//	numInv
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "numInv";
	$fdata["GoodName"] = "numInv";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","numInv"); 
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

	

	
	$tdatadesaparecidos["numInv"] = $fdata;
//	FInicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FInicio";
	$fdata["GoodName"] = "FInicio";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","FInicio"); 
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
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatadesaparecidos["FInicio"] = $fdata;
//	MinPub
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "MinPub";
	$fdata["GoodName"] = "MinPub";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","MinPub"); 
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

	

	
	$tdatadesaparecidos["MinPub"] = $fdata;
//	Agencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Agencia";
	$fdata["GoodName"] = "Agencia";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","Agencia"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["Agencia"] = $fdata;
//	Ofic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Ofic";
	$fdata["GoodName"] = "Ofic";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","Ofic"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["Ofic"] = $fdata;
//	FExtrav
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "FExtrav";
	$fdata["GoodName"] = "FExtrav";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","FExtrav"); 
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
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatadesaparecidos["FExtrav"] = $fdata;
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","Nombre"); 
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

	

	
	$tdatadesaparecidos["Nombre"] = $fdata;
//	APat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "APat";
	$fdata["GoodName"] = "APat";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","APat"); 
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

	

	
	$tdatadesaparecidos["APat"] = $fdata;
//	AMat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "AMat";
	$fdata["GoodName"] = "AMat";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","AMat"); 
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

	

	
	$tdatadesaparecidos["AMat"] = $fdata;
//	identResg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "identResg";
	$fdata["GoodName"] = "identResg";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","identResg"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "identResg"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "identResg";
	
		
		
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

	

	
	$tdatadesaparecidos["identResg"] = $fdata;
//	Sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Sexo";
	$fdata["GoodName"] = "Sexo";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","Sexo"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["Sexo"] = $fdata;
//	EdadA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "EdadA";
	$fdata["GoodName"] = "EdadA";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","EdadA"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["EdadA"] = $fdata;
//	EdadM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "EdadM";
	$fdata["GoodName"] = "EdadM";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","EdadM"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["EdadM"] = $fdata;
//	Nac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Nac";
	$fdata["GoodName"] = "Nac";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","Nac"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["Nac"] = $fdata;
//	Origen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Origen";
	$fdata["GoodName"] = "Origen";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","Origen"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
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
	
	
	
	

	

	
	$tdatadesaparecidos["Origen"] = $fdata;
//	MpoOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "MpoOrigen";
	$fdata["GoodName"] = "MpoOrigen";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","MpoOrigen"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["MpoOrigen"] = $fdata;
//	Escolaridad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Escolaridad";
	$fdata["GoodName"] = "Escolaridad";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","Escolaridad"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["Escolaridad"] = $fdata;
//	Est
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Est";
	$fdata["GoodName"] = "Est";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","Est"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["Est"] = $fdata;
//	Compl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Compl";
	$fdata["GoodName"] = "Compl";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","Compl"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["Compl"] = $fdata;
//	Ojos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Ojos";
	$fdata["GoodName"] = "Ojos";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","Ojos"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["Ojos"] = $fdata;
//	Piel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Piel";
	$fdata["GoodName"] = "Piel";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","Piel"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["Piel"] = $fdata;
//	Cab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Cab";
	$fdata["GoodName"] = "Cab";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","Cab"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["Cab"] = $fdata;
//	TCab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "TCab";
	$fdata["GoodName"] = "TCab";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","TCab"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["TCab"] = $fdata;
//	Cabcol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Cabcol";
	$fdata["GoodName"] = "Cabcol";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","Cabcol"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["Cabcol"] = $fdata;
//	Nariz
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Nariz";
	$fdata["GoodName"] = "Nariz";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","Nariz"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["Nariz"] = $fdata;
//	Labios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "Labios";
	$fdata["GoodName"] = "Labios";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","Labios"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["Labios"] = $fdata;
//	Menton
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Menton";
	$fdata["GoodName"] = "Menton";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","Menton"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["Menton"] = $fdata;
//	Cejas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Cejas";
	$fdata["GoodName"] = "Cejas";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","Cejas"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["Cejas"] = $fdata;
//	VFacial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "VFacial";
	$fdata["GoodName"] = "VFacial";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","VFacial"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["VFacial"] = $fdata;
//	Delito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Delito";
	$fdata["GoodName"] = "Delito";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","Delito"); 
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


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 150;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdatadesaparecidos["Delito"] = $fdata;
//	Particularidades
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Particularidades";
	$fdata["GoodName"] = "Particularidades";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","Particularidades"); 
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
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 50;
			$edata["nCols"] = 200;
	
		
		
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
	
	
	
	

	

	
	$tdatadesaparecidos["Particularidades"] = $fdata;
//	Nota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Nota";
	$fdata["GoodName"] = "Nota";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","Nota"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["Nota"] = $fdata;
//	DescHechos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "DescHechos";
	$fdata["GoodName"] = "DescHechos";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","DescHechos"); 
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
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 50;
			$edata["nCols"] = 200;
	
		
		
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
	
	
	
	

	

	
	$tdatadesaparecidos["DescHechos"] = $fdata;
//	Obseva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Obseva";
	$fdata["GoodName"] = "Obseva";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","Obseva"); 
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
	
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdatadesaparecidos["Obseva"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","Status"); 
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

	

	
	$tdatadesaparecidos["Status"] = $fdata;
//	FAparicion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "FAparicion";
	$fdata["GoodName"] = "FAparicion";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","FAparicion"); 
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

	

	
	$tdatadesaparecidos["FAparicion"] = $fdata;
//	Oficio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "Oficio";
	$fdata["GoodName"] = "Oficio";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","Oficio"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["Oficio"] = $fdata;
//	EstApar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "EstApar";
	$fdata["GoodName"] = "EstApar";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","EstApar"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["EstApar"] = $fdata;
//	Tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "Tipo";
	$fdata["GoodName"] = "Tipo";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","Tipo"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["Tipo"] = $fdata;
//	FRecib
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "FRecib";
	$fdata["GoodName"] = "FRecib";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","FRecib"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["FRecib"] = $fdata;
//	UsrBaja
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "UsrBaja";
	$fdata["GoodName"] = "UsrBaja";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","UsrBaja"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["UsrBaja"] = $fdata;
//	FecBaja
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "FecBaja";
	$fdata["GoodName"] = "FecBaja";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","FecBaja"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["FecBaja"] = $fdata;
//	RutFoto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "RutFoto";
	$fdata["GoodName"] = "RutFoto";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","RutFoto"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["RutFoto"] = $fdata;
//	FCaptura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "FCaptura";
	$fdata["GoodName"] = "FCaptura";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","FCaptura"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["FCaptura"] = $fdata;
//	TipoDoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "TipoDoc";
	$fdata["GoodName"] = "TipoDoc";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","TipoDoc"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["TipoDoc"] = $fdata;
//	Usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "Usuario";
	$fdata["GoodName"] = "Usuario";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","Usuario"); 
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
	
	
	
	

	

	
	$tdatadesaparecidos["Usuario"] = $fdata;
//	fotoChica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "fotoChica";
	$fdata["GoodName"] = "fotoChica";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","fotoChica"); 
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
	
	$vdata = array("ViewFormat" => "Document Download");
	
		
		
		
				$vdata["ShowThumbnail"] = true; 
					$vdata["ShowIcon"] = true; 
			
		
		
		
		
		
		
		
		
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
	
	

	

	
	$tdatadesaparecidos["fotoChica"] = $fdata;
//	fotoGrande
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "fotoGrande";
	$fdata["GoodName"] = "fotoGrande";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","fotoGrande"); 
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
	$vdata["ThumbWidth"] = 72;
	$vdata["ThumbHeight"] = 72;	
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
	
	

	

	
	$tdatadesaparecidos["fotoGrande"] = $fdata;
//	validacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "validacion";
	$fdata["GoodName"] = "validacion";
	$fdata["ownerTable"] = "desaparecidos";
	$fdata["Label"] = GetFieldLabel("desaparecidos","validacion"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "validacion"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "validacion";
	
		
		
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
	$edata["LookupTable"] = "cat_valida";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "idValida";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nombre";
	
		
	$edata["LookupOrderBy"] = "Nombre";
	
		
			
		
				
	
	
		
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
	
	
	
	

	

	
	$tdatadesaparecidos["validacion"] = $fdata;

	
$tables_data["desaparecidos"]=&$tdatadesaparecidos;
$field_labels["desaparecidos"] = &$fieldLabelsdesaparecidos;
$fieldToolTips["desaparecidos"] = &$fieldToolTipsdesaparecidos;
$page_titles["desaparecidos"] = &$pageTitlesdesaparecidos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["desaparecidos"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["desaparecidos"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_desaparecidos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  	Estado,  	Mun,  	uipj,  	numFiscal,  	`añoInv`,  	numInv,  	FInicio,  	MinPub,  	Agencia,  	Ofic,  	FExtrav,  	Nombre,  	APat,  	AMat,  	identResg,  	Sexo,  	EdadA,  	EdadM,  	Nac,  	Origen,  	MpoOrigen,  	Escolaridad,  	Est,  	Compl,  	Ojos,  	Piel,  	Cab,  	TCab,  	Cabcol,  	Nariz,  	Labios,  	Menton,  	Cejas,  	VFacial,  	Delito,  	Particularidades,  	Nota,  	DescHechos,  	Obseva,  	Status,  	FAparicion,  	Oficio,  	EstApar,  	Tipo,  	FRecib,  	UsrBaja,  	FecBaja,  	RutFoto,  	FCaptura,  	TipoDoc,  	Usuario,  	fotoChica,  	fotoGrande,  	validacion";
$proto0["m_strFrom"] = "FROM desaparecidos";
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
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto5["m_sql"] = "Id";
$proto5["m_srcTableName"] = "desaparecidos";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto7["m_sql"] = "Estado";
$proto7["m_srcTableName"] = "desaparecidos";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Mun",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto9["m_sql"] = "Mun";
$proto9["m_srcTableName"] = "desaparecidos";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "uipj",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto11["m_sql"] = "uipj";
$proto11["m_srcTableName"] = "desaparecidos";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "numFiscal",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto13["m_sql"] = "numFiscal";
$proto13["m_srcTableName"] = "desaparecidos";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "añoInv",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto15["m_sql"] = "`añoInv`";
$proto15["m_srcTableName"] = "desaparecidos";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "numInv",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto17["m_sql"] = "numInv";
$proto17["m_srcTableName"] = "desaparecidos";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "FInicio",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto19["m_sql"] = "FInicio";
$proto19["m_srcTableName"] = "desaparecidos";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "MinPub",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto21["m_sql"] = "MinPub";
$proto21["m_srcTableName"] = "desaparecidos";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Agencia",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto23["m_sql"] = "Agencia";
$proto23["m_srcTableName"] = "desaparecidos";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Ofic",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto25["m_sql"] = "Ofic";
$proto25["m_srcTableName"] = "desaparecidos";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "FExtrav",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto27["m_sql"] = "FExtrav";
$proto27["m_srcTableName"] = "desaparecidos";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto29["m_sql"] = "Nombre";
$proto29["m_srcTableName"] = "desaparecidos";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "APat",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto31["m_sql"] = "APat";
$proto31["m_srcTableName"] = "desaparecidos";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "AMat",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto33["m_sql"] = "AMat";
$proto33["m_srcTableName"] = "desaparecidos";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "identResg",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto35["m_sql"] = "identResg";
$proto35["m_srcTableName"] = "desaparecidos";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "Sexo",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto37["m_sql"] = "Sexo";
$proto37["m_srcTableName"] = "desaparecidos";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "EdadA",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto39["m_sql"] = "EdadA";
$proto39["m_srcTableName"] = "desaparecidos";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "EdadM",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto41["m_sql"] = "EdadM";
$proto41["m_srcTableName"] = "desaparecidos";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "Nac",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto43["m_sql"] = "Nac";
$proto43["m_srcTableName"] = "desaparecidos";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "Origen",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto45["m_sql"] = "Origen";
$proto45["m_srcTableName"] = "desaparecidos";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "MpoOrigen",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto47["m_sql"] = "MpoOrigen";
$proto47["m_srcTableName"] = "desaparecidos";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "Escolaridad",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto49["m_sql"] = "Escolaridad";
$proto49["m_srcTableName"] = "desaparecidos";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "Est",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto51["m_sql"] = "Est";
$proto51["m_srcTableName"] = "desaparecidos";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "Compl",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto53["m_sql"] = "Compl";
$proto53["m_srcTableName"] = "desaparecidos";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "Ojos",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto55["m_sql"] = "Ojos";
$proto55["m_srcTableName"] = "desaparecidos";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "Piel",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto57["m_sql"] = "Piel";
$proto57["m_srcTableName"] = "desaparecidos";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "Cab",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto59["m_sql"] = "Cab";
$proto59["m_srcTableName"] = "desaparecidos";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "TCab",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto61["m_sql"] = "TCab";
$proto61["m_srcTableName"] = "desaparecidos";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "Cabcol",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto63["m_sql"] = "Cabcol";
$proto63["m_srcTableName"] = "desaparecidos";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "Nariz",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto65["m_sql"] = "Nariz";
$proto65["m_srcTableName"] = "desaparecidos";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "Labios",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto67["m_sql"] = "Labios";
$proto67["m_srcTableName"] = "desaparecidos";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "Menton",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto69["m_sql"] = "Menton";
$proto69["m_srcTableName"] = "desaparecidos";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "Cejas",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto71["m_sql"] = "Cejas";
$proto71["m_srcTableName"] = "desaparecidos";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "VFacial",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto73["m_sql"] = "VFacial";
$proto73["m_srcTableName"] = "desaparecidos";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "Delito",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto75["m_sql"] = "Delito";
$proto75["m_srcTableName"] = "desaparecidos";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "Particularidades",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto77["m_sql"] = "Particularidades";
$proto77["m_srcTableName"] = "desaparecidos";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "Nota",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto79["m_sql"] = "Nota";
$proto79["m_srcTableName"] = "desaparecidos";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "DescHechos",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto81["m_sql"] = "DescHechos";
$proto81["m_srcTableName"] = "desaparecidos";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "Obseva",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto83["m_sql"] = "Obseva";
$proto83["m_srcTableName"] = "desaparecidos";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto0["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto85["m_sql"] = "Status";
$proto85["m_srcTableName"] = "desaparecidos";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto0["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLField(array(
	"m_strName" => "FAparicion",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto87["m_sql"] = "FAparicion";
$proto87["m_srcTableName"] = "desaparecidos";
$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "";
$obj = new SQLFieldListItem($proto87);

$proto0["m_fieldlist"][]=$obj;
						$proto89=array();
			$obj = new SQLField(array(
	"m_strName" => "Oficio",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto89["m_sql"] = "Oficio";
$proto89["m_srcTableName"] = "desaparecidos";
$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "";
$obj = new SQLFieldListItem($proto89);

$proto0["m_fieldlist"][]=$obj;
						$proto91=array();
			$obj = new SQLField(array(
	"m_strName" => "EstApar",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto91["m_sql"] = "EstApar";
$proto91["m_srcTableName"] = "desaparecidos";
$proto91["m_expr"]=$obj;
$proto91["m_alias"] = "";
$obj = new SQLFieldListItem($proto91);

$proto0["m_fieldlist"][]=$obj;
						$proto93=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto93["m_sql"] = "Tipo";
$proto93["m_srcTableName"] = "desaparecidos";
$proto93["m_expr"]=$obj;
$proto93["m_alias"] = "";
$obj = new SQLFieldListItem($proto93);

$proto0["m_fieldlist"][]=$obj;
						$proto95=array();
			$obj = new SQLField(array(
	"m_strName" => "FRecib",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto95["m_sql"] = "FRecib";
$proto95["m_srcTableName"] = "desaparecidos";
$proto95["m_expr"]=$obj;
$proto95["m_alias"] = "";
$obj = new SQLFieldListItem($proto95);

$proto0["m_fieldlist"][]=$obj;
						$proto97=array();
			$obj = new SQLField(array(
	"m_strName" => "UsrBaja",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto97["m_sql"] = "UsrBaja";
$proto97["m_srcTableName"] = "desaparecidos";
$proto97["m_expr"]=$obj;
$proto97["m_alias"] = "";
$obj = new SQLFieldListItem($proto97);

$proto0["m_fieldlist"][]=$obj;
						$proto99=array();
			$obj = new SQLField(array(
	"m_strName" => "FecBaja",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto99["m_sql"] = "FecBaja";
$proto99["m_srcTableName"] = "desaparecidos";
$proto99["m_expr"]=$obj;
$proto99["m_alias"] = "";
$obj = new SQLFieldListItem($proto99);

$proto0["m_fieldlist"][]=$obj;
						$proto101=array();
			$obj = new SQLField(array(
	"m_strName" => "RutFoto",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto101["m_sql"] = "RutFoto";
$proto101["m_srcTableName"] = "desaparecidos";
$proto101["m_expr"]=$obj;
$proto101["m_alias"] = "";
$obj = new SQLFieldListItem($proto101);

$proto0["m_fieldlist"][]=$obj;
						$proto103=array();
			$obj = new SQLField(array(
	"m_strName" => "FCaptura",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto103["m_sql"] = "FCaptura";
$proto103["m_srcTableName"] = "desaparecidos";
$proto103["m_expr"]=$obj;
$proto103["m_alias"] = "";
$obj = new SQLFieldListItem($proto103);

$proto0["m_fieldlist"][]=$obj;
						$proto105=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoDoc",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto105["m_sql"] = "TipoDoc";
$proto105["m_srcTableName"] = "desaparecidos";
$proto105["m_expr"]=$obj;
$proto105["m_alias"] = "";
$obj = new SQLFieldListItem($proto105);

$proto0["m_fieldlist"][]=$obj;
						$proto107=array();
			$obj = new SQLField(array(
	"m_strName" => "Usuario",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto107["m_sql"] = "Usuario";
$proto107["m_srcTableName"] = "desaparecidos";
$proto107["m_expr"]=$obj;
$proto107["m_alias"] = "";
$obj = new SQLFieldListItem($proto107);

$proto0["m_fieldlist"][]=$obj;
						$proto109=array();
			$obj = new SQLField(array(
	"m_strName" => "fotoChica",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto109["m_sql"] = "fotoChica";
$proto109["m_srcTableName"] = "desaparecidos";
$proto109["m_expr"]=$obj;
$proto109["m_alias"] = "";
$obj = new SQLFieldListItem($proto109);

$proto0["m_fieldlist"][]=$obj;
						$proto111=array();
			$obj = new SQLField(array(
	"m_strName" => "fotoGrande",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto111["m_sql"] = "fotoGrande";
$proto111["m_srcTableName"] = "desaparecidos";
$proto111["m_expr"]=$obj;
$proto111["m_alias"] = "";
$obj = new SQLFieldListItem($proto111);

$proto0["m_fieldlist"][]=$obj;
						$proto113=array();
			$obj = new SQLField(array(
	"m_strName" => "validacion",
	"m_strTable" => "desaparecidos",
	"m_srcTableName" => "desaparecidos"
));

$proto113["m_sql"] = "validacion";
$proto113["m_srcTableName"] = "desaparecidos";
$proto113["m_expr"]=$obj;
$proto113["m_alias"] = "";
$obj = new SQLFieldListItem($proto113);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto115=array();
$proto115["m_link"] = "SQLL_MAIN";
			$proto116=array();
$proto116["m_strName"] = "desaparecidos";
$proto116["m_srcTableName"] = "desaparecidos";
$proto116["m_columns"] = array();
$proto116["m_columns"][] = "Id";
$proto116["m_columns"][] = "Estado";
$proto116["m_columns"][] = "Mun";
$proto116["m_columns"][] = "uipj";
$proto116["m_columns"][] = "numFiscal";
$proto116["m_columns"][] = "añoInv";
$proto116["m_columns"][] = "numInv";
$proto116["m_columns"][] = "FInicio";
$proto116["m_columns"][] = "MinPub";
$proto116["m_columns"][] = "Agencia";
$proto116["m_columns"][] = "Ofic";
$proto116["m_columns"][] = "FExtrav";
$proto116["m_columns"][] = "Nombre";
$proto116["m_columns"][] = "APat";
$proto116["m_columns"][] = "AMat";
$proto116["m_columns"][] = "identResg";
$proto116["m_columns"][] = "Sexo";
$proto116["m_columns"][] = "EdadA";
$proto116["m_columns"][] = "EdadM";
$proto116["m_columns"][] = "Nac";
$proto116["m_columns"][] = "Origen";
$proto116["m_columns"][] = "MpoOrigen";
$proto116["m_columns"][] = "Escolaridad";
$proto116["m_columns"][] = "Est";
$proto116["m_columns"][] = "Compl";
$proto116["m_columns"][] = "Ojos";
$proto116["m_columns"][] = "Piel";
$proto116["m_columns"][] = "Cab";
$proto116["m_columns"][] = "TCab";
$proto116["m_columns"][] = "Cabcol";
$proto116["m_columns"][] = "Nariz";
$proto116["m_columns"][] = "Labios";
$proto116["m_columns"][] = "Menton";
$proto116["m_columns"][] = "Cejas";
$proto116["m_columns"][] = "VFacial";
$proto116["m_columns"][] = "Delito";
$proto116["m_columns"][] = "Particularidades";
$proto116["m_columns"][] = "Nota";
$proto116["m_columns"][] = "DescHechos";
$proto116["m_columns"][] = "Obseva";
$proto116["m_columns"][] = "Status";
$proto116["m_columns"][] = "FAparicion";
$proto116["m_columns"][] = "Oficio";
$proto116["m_columns"][] = "EstApar";
$proto116["m_columns"][] = "Tipo";
$proto116["m_columns"][] = "FRecib";
$proto116["m_columns"][] = "UsrBaja";
$proto116["m_columns"][] = "FecBaja";
$proto116["m_columns"][] = "RutFoto";
$proto116["m_columns"][] = "FCaptura";
$proto116["m_columns"][] = "TipoDoc";
$proto116["m_columns"][] = "Usuario";
$proto116["m_columns"][] = "fotoChica";
$proto116["m_columns"][] = "fotoGrande";
$proto116["m_columns"][] = "validacion";
$obj = new SQLTable($proto116);

$proto115["m_table"] = $obj;
$proto115["m_sql"] = "desaparecidos";
$proto115["m_alias"] = "";
$proto115["m_srcTableName"] = "desaparecidos";
$proto117=array();
$proto117["m_sql"] = "";
$proto117["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto117["m_column"]=$obj;
$proto117["m_contained"] = array();
$proto117["m_strCase"] = "";
$proto117["m_havingmode"] = false;
$proto117["m_inBrackets"] = false;
$proto117["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto117);

$proto115["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto115);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="desaparecidos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_desaparecidos = createSqlQuery_desaparecidos();


	
																																																							
	
$tdatadesaparecidos[".sqlquery"] = $queryData_desaparecidos;

$tableEvents["desaparecidos"] = new eventsBase;
$tdatadesaparecidos[".hasEvents"] = false;

?>