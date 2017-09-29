<?php
require_once(getabspath("classes/cipherer.php"));




$tdataunidad = array();	
	$tdataunidad[".truncateText"] = true;
	$tdataunidad[".NumberOfChars"] = 80; 
	$tdataunidad[".ShortName"] = "unidad";
	$tdataunidad[".OwnerID"] = "";
	$tdataunidad[".OriginalTable"] = "unidad";

//	field labels
$fieldLabelsunidad = array();
$fieldToolTipsunidad = array();
$pageTitlesunidad = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsunidad["Spanish"] = array();
	$fieldToolTipsunidad["Spanish"] = array();
	$pageTitlesunidad["Spanish"] = array();
	$fieldLabelsunidad["Spanish"]["id"] = "Id";
	$fieldToolTipsunidad["Spanish"]["id"] = "";
	$fieldLabelsunidad["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsunidad["Spanish"]["nombre"] = "";
	$fieldLabelsunidad["Spanish"]["direccion"] = "Direccion";
	$fieldToolTipsunidad["Spanish"]["direccion"] = "";
	$fieldLabelsunidad["Spanish"]["latitud"] = "Latitud";
	$fieldToolTipsunidad["Spanish"]["latitud"] = "";
	$fieldLabelsunidad["Spanish"]["longitud"] = "Longitud";
	$fieldToolTipsunidad["Spanish"]["longitud"] = "";
	$fieldLabelsunidad["Spanish"]["fiscal"] = "Fiscal";
	$fieldToolTipsunidad["Spanish"]["fiscal"] = "";
	$fieldLabelsunidad["Spanish"]["telefono"] = "Telefono";
	$fieldToolTipsunidad["Spanish"]["telefono"] = "";
	$fieldLabelsunidad["Spanish"]["distrito"] = "Distrito";
	$fieldToolTipsunidad["Spanish"]["distrito"] = "";
	$fieldLabelsunidad["Spanish"]["region"] = "Region";
	$fieldToolTipsunidad["Spanish"]["region"] = "";
	$fieldLabelsunidad["Spanish"]["unidad"] = "Unidad";
	$fieldToolTipsunidad["Spanish"]["unidad"] = "";
	$fieldLabelsunidad["Spanish"]["idFiscal"] = "Id Fiscal";
	$fieldToolTipsunidad["Spanish"]["idFiscal"] = "";
	if (count($fieldToolTipsunidad["Spanish"]))
		$tdataunidad[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsunidad[""] = array();
	$fieldToolTipsunidad[""] = array();
	$pageTitlesunidad[""] = array();
	$fieldLabelsunidad[""]["id"] = "Id";
	$fieldToolTipsunidad[""]["id"] = "";
	$fieldLabelsunidad[""]["nombre"] = "Nombre";
	$fieldToolTipsunidad[""]["nombre"] = "";
	$fieldLabelsunidad[""]["direccion"] = "Direccion";
	$fieldToolTipsunidad[""]["direccion"] = "";
	$fieldLabelsunidad[""]["latitud"] = "Latitud";
	$fieldToolTipsunidad[""]["latitud"] = "";
	$fieldLabelsunidad[""]["longitud"] = "Longitud";
	$fieldToolTipsunidad[""]["longitud"] = "";
	$fieldLabelsunidad[""]["fiscal"] = "Fiscal";
	$fieldToolTipsunidad[""]["fiscal"] = "";
	$fieldLabelsunidad[""]["telefono"] = "Telefono";
	$fieldToolTipsunidad[""]["telefono"] = "";
	$fieldLabelsunidad[""]["distrito"] = "Distrito";
	$fieldToolTipsunidad[""]["distrito"] = "";
	$fieldLabelsunidad[""]["region"] = "Region";
	$fieldToolTipsunidad[""]["region"] = "";
	$fieldLabelsunidad[""]["unidad"] = "Unidad";
	$fieldToolTipsunidad[""]["unidad"] = "";
	$fieldLabelsunidad[""]["idFiscal"] = "Id Fiscal";
	$fieldToolTipsunidad[""]["idFiscal"] = "";
	if (count($fieldToolTipsunidad[""]))
		$tdataunidad[".isUseToolTips"] = true;
}
	
	
	$tdataunidad[".NCSearch"] = true;



$tdataunidad[".shortTableName"] = "unidad";
$tdataunidad[".nSecOptions"] = 0;
$tdataunidad[".recsPerRowList"] = 1;
$tdataunidad[".recsPerRowPrint"] = 1;
$tdataunidad[".mainTableOwnerID"] = "";
$tdataunidad[".moveNext"] = 1;
$tdataunidad[".entityType"] = 0;

$tdataunidad[".strOriginalTableName"] = "unidad";




$tdataunidad[".showAddInPopup"] = false;

$tdataunidad[".showEditInPopup"] = false;

$tdataunidad[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataunidad[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataunidad[".fieldsForRegister"] = array();

$tdataunidad[".listAjax"] = false;

	$tdataunidad[".audit"] = false;

	$tdataunidad[".locking"] = false;









$tdataunidad[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataunidad[".searchSaving"] = false;
//

$tdataunidad[".showSearchPanel"] = true;
		$tdataunidad[".flexibleSearch"] = true;		

if (isMobile())
	$tdataunidad[".isUseAjaxSuggest"] = false;
else 
	$tdataunidad[".isUseAjaxSuggest"] = true;

$tdataunidad[".rowHighlite"] = true;



$tdataunidad[".addPageEvents"] = false;

// use timepicker for search panel
$tdataunidad[".isUseTimeForSearch"] = false;





$tdataunidad[".allSearchFields"] = array();
$tdataunidad[".filterFields"] = array();
$tdataunidad[".requiredSearchFields"] = array();



$tdataunidad[".googleLikeFields"] = array();
$tdataunidad[".googleLikeFields"][] = "id";
$tdataunidad[".googleLikeFields"][] = "nombre";
$tdataunidad[".googleLikeFields"][] = "direccion";
$tdataunidad[".googleLikeFields"][] = "latitud";
$tdataunidad[".googleLikeFields"][] = "longitud";
$tdataunidad[".googleLikeFields"][] = "fiscal";
$tdataunidad[".googleLikeFields"][] = "telefono";
$tdataunidad[".googleLikeFields"][] = "distrito";
$tdataunidad[".googleLikeFields"][] = "region";
$tdataunidad[".googleLikeFields"][] = "unidad";
$tdataunidad[".googleLikeFields"][] = "idFiscal";


$tdataunidad[".advSearchFields"] = array();
$tdataunidad[".advSearchFields"][] = "id";
$tdataunidad[".advSearchFields"][] = "nombre";
$tdataunidad[".advSearchFields"][] = "direccion";
$tdataunidad[".advSearchFields"][] = "latitud";
$tdataunidad[".advSearchFields"][] = "longitud";
$tdataunidad[".advSearchFields"][] = "fiscal";
$tdataunidad[".advSearchFields"][] = "telefono";
$tdataunidad[".advSearchFields"][] = "distrito";
$tdataunidad[".advSearchFields"][] = "region";
$tdataunidad[".advSearchFields"][] = "unidad";
$tdataunidad[".advSearchFields"][] = "idFiscal";

$tdataunidad[".tableType"] = "list";

$tdataunidad[".printerPageOrientation"] = 0;
$tdataunidad[".nPrinterPageScale"] = 100;

$tdataunidad[".nPrinterSplitRecords"] = 40;

$tdataunidad[".nPrinterPDFSplitRecords"] = 40;



$tdataunidad[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataunidad[".pageSize"] = 20;

$tdataunidad[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataunidad[".strOrderBy"] = $tstrOrderBy;

$tdataunidad[".orderindexes"] = array();

$tdataunidad[".sqlHead"] = "SELECT id,  	nombre,  	direccion,  	latitud,  	longitud,  	fiscal,  	telefono,  	distrito,  	region,  	unidad,  	idFiscal";
$tdataunidad[".sqlFrom"] = "FROM unidad";
$tdataunidad[".sqlWhereExpr"] = "";
$tdataunidad[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataunidad[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataunidad[".arrGroupsPerPage"] = $arrGPP;

$tdataunidad[".highlightSearchResults"] = true;

$tableKeysunidad = array();
$tableKeysunidad[] = "id";
$tdataunidad[".Keys"] = $tableKeysunidad;

$tdataunidad[".listFields"] = array();
$tdataunidad[".listFields"][] = "id";
$tdataunidad[".listFields"][] = "nombre";
$tdataunidad[".listFields"][] = "direccion";
$tdataunidad[".listFields"][] = "latitud";
$tdataunidad[".listFields"][] = "longitud";
$tdataunidad[".listFields"][] = "fiscal";
$tdataunidad[".listFields"][] = "telefono";
$tdataunidad[".listFields"][] = "distrito";
$tdataunidad[".listFields"][] = "region";
$tdataunidad[".listFields"][] = "unidad";
$tdataunidad[".listFields"][] = "idFiscal";

$tdataunidad[".hideMobileList"] = array();


$tdataunidad[".viewFields"] = array();
$tdataunidad[".viewFields"][] = "id";
$tdataunidad[".viewFields"][] = "nombre";
$tdataunidad[".viewFields"][] = "direccion";
$tdataunidad[".viewFields"][] = "latitud";
$tdataunidad[".viewFields"][] = "longitud";
$tdataunidad[".viewFields"][] = "fiscal";
$tdataunidad[".viewFields"][] = "telefono";
$tdataunidad[".viewFields"][] = "distrito";
$tdataunidad[".viewFields"][] = "region";
$tdataunidad[".viewFields"][] = "unidad";
$tdataunidad[".viewFields"][] = "idFiscal";

$tdataunidad[".addFields"] = array();
$tdataunidad[".addFields"][] = "nombre";
$tdataunidad[".addFields"][] = "direccion";
$tdataunidad[".addFields"][] = "latitud";
$tdataunidad[".addFields"][] = "longitud";
$tdataunidad[".addFields"][] = "fiscal";
$tdataunidad[".addFields"][] = "telefono";
$tdataunidad[".addFields"][] = "distrito";
$tdataunidad[".addFields"][] = "region";
$tdataunidad[".addFields"][] = "unidad";
$tdataunidad[".addFields"][] = "idFiscal";

$tdataunidad[".masterListFields"] = array();
$tdataunidad[".masterListFields"][] = "id";
$tdataunidad[".masterListFields"][] = "nombre";
$tdataunidad[".masterListFields"][] = "direccion";
$tdataunidad[".masterListFields"][] = "latitud";
$tdataunidad[".masterListFields"][] = "longitud";
$tdataunidad[".masterListFields"][] = "fiscal";
$tdataunidad[".masterListFields"][] = "telefono";
$tdataunidad[".masterListFields"][] = "distrito";
$tdataunidad[".masterListFields"][] = "region";
$tdataunidad[".masterListFields"][] = "unidad";
$tdataunidad[".masterListFields"][] = "idFiscal";

$tdataunidad[".inlineAddFields"] = array();
$tdataunidad[".inlineAddFields"][] = "nombre";
$tdataunidad[".inlineAddFields"][] = "direccion";
$tdataunidad[".inlineAddFields"][] = "latitud";
$tdataunidad[".inlineAddFields"][] = "longitud";
$tdataunidad[".inlineAddFields"][] = "fiscal";
$tdataunidad[".inlineAddFields"][] = "telefono";
$tdataunidad[".inlineAddFields"][] = "distrito";
$tdataunidad[".inlineAddFields"][] = "region";
$tdataunidad[".inlineAddFields"][] = "unidad";
$tdataunidad[".inlineAddFields"][] = "idFiscal";

$tdataunidad[".editFields"] = array();
$tdataunidad[".editFields"][] = "nombre";
$tdataunidad[".editFields"][] = "direccion";
$tdataunidad[".editFields"][] = "latitud";
$tdataunidad[".editFields"][] = "longitud";
$tdataunidad[".editFields"][] = "fiscal";
$tdataunidad[".editFields"][] = "telefono";
$tdataunidad[".editFields"][] = "distrito";
$tdataunidad[".editFields"][] = "region";
$tdataunidad[".editFields"][] = "unidad";
$tdataunidad[".editFields"][] = "idFiscal";

$tdataunidad[".inlineEditFields"] = array();
$tdataunidad[".inlineEditFields"][] = "nombre";
$tdataunidad[".inlineEditFields"][] = "direccion";
$tdataunidad[".inlineEditFields"][] = "latitud";
$tdataunidad[".inlineEditFields"][] = "longitud";
$tdataunidad[".inlineEditFields"][] = "fiscal";
$tdataunidad[".inlineEditFields"][] = "telefono";
$tdataunidad[".inlineEditFields"][] = "distrito";
$tdataunidad[".inlineEditFields"][] = "region";
$tdataunidad[".inlineEditFields"][] = "unidad";
$tdataunidad[".inlineEditFields"][] = "idFiscal";

$tdataunidad[".exportFields"] = array();
$tdataunidad[".exportFields"][] = "id";
$tdataunidad[".exportFields"][] = "nombre";
$tdataunidad[".exportFields"][] = "direccion";
$tdataunidad[".exportFields"][] = "latitud";
$tdataunidad[".exportFields"][] = "longitud";
$tdataunidad[".exportFields"][] = "fiscal";
$tdataunidad[".exportFields"][] = "telefono";
$tdataunidad[".exportFields"][] = "distrito";
$tdataunidad[".exportFields"][] = "region";
$tdataunidad[".exportFields"][] = "unidad";
$tdataunidad[".exportFields"][] = "idFiscal";

$tdataunidad[".importFields"] = array();
$tdataunidad[".importFields"][] = "id";
$tdataunidad[".importFields"][] = "nombre";
$tdataunidad[".importFields"][] = "direccion";
$tdataunidad[".importFields"][] = "latitud";
$tdataunidad[".importFields"][] = "longitud";
$tdataunidad[".importFields"][] = "fiscal";
$tdataunidad[".importFields"][] = "telefono";
$tdataunidad[".importFields"][] = "distrito";
$tdataunidad[".importFields"][] = "region";
$tdataunidad[".importFields"][] = "unidad";
$tdataunidad[".importFields"][] = "idFiscal";

$tdataunidad[".printFields"] = array();
$tdataunidad[".printFields"][] = "id";
$tdataunidad[".printFields"][] = "nombre";
$tdataunidad[".printFields"][] = "direccion";
$tdataunidad[".printFields"][] = "latitud";
$tdataunidad[".printFields"][] = "longitud";
$tdataunidad[".printFields"][] = "fiscal";
$tdataunidad[".printFields"][] = "telefono";
$tdataunidad[".printFields"][] = "distrito";
$tdataunidad[".printFields"][] = "region";
$tdataunidad[".printFields"][] = "unidad";
$tdataunidad[".printFields"][] = "idFiscal";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "unidad";
	$fdata["Label"] = GetFieldLabel("unidad","id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";
	
		
		
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
	
	
	
	

	

	
	$tdataunidad["id"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "unidad";
	$fdata["Label"] = GetFieldLabel("unidad","nombre"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "nombre"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";
	
		
		
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
			$edata["EditParams"].= " maxlength=512";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataunidad["nombre"] = $fdata;
//	direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "direccion";
	$fdata["GoodName"] = "direccion";
	$fdata["ownerTable"] = "unidad";
	$fdata["Label"] = GetFieldLabel("unidad","direccion"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "direccion"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "direccion";
	
		
		
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
			$edata["EditParams"].= " maxlength=512";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataunidad["direccion"] = $fdata;
//	latitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "latitud";
	$fdata["GoodName"] = "latitud";
	$fdata["ownerTable"] = "unidad";
	$fdata["Label"] = GetFieldLabel("unidad","latitud"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "latitud"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "latitud";
	
		
		
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
			$edata["EditParams"].= " maxlength=15";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataunidad["latitud"] = $fdata;
//	longitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "longitud";
	$fdata["GoodName"] = "longitud";
	$fdata["ownerTable"] = "unidad";
	$fdata["Label"] = GetFieldLabel("unidad","longitud"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "longitud"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "longitud";
	
		
		
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
			$edata["EditParams"].= " maxlength=15";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataunidad["longitud"] = $fdata;
//	fiscal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fiscal";
	$fdata["GoodName"] = "fiscal";
	$fdata["ownerTable"] = "unidad";
	$fdata["Label"] = GetFieldLabel("unidad","fiscal"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "fiscal"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fiscal";
	
		
		
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
	
	
	
	

	

	
	$tdataunidad["fiscal"] = $fdata;
//	telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "telefono";
	$fdata["GoodName"] = "telefono";
	$fdata["ownerTable"] = "unidad";
	$fdata["Label"] = GetFieldLabel("unidad","telefono"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "telefono"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "telefono";
	
		
		
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
	
	
	
	

	

	
	$tdataunidad["telefono"] = $fdata;
//	distrito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "distrito";
	$fdata["GoodName"] = "distrito";
	$fdata["ownerTable"] = "unidad";
	$fdata["Label"] = GetFieldLabel("unidad","distrito"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "distrito"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "distrito";
	
		
		
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
			$edata["EditParams"].= " maxlength=2";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataunidad["distrito"] = $fdata;
//	region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "region";
	$fdata["GoodName"] = "region";
	$fdata["ownerTable"] = "unidad";
	$fdata["Label"] = GetFieldLabel("unidad","region"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "region"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "region";
	
		
		
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
			$edata["EditParams"].= " maxlength=45";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataunidad["region"] = $fdata;
//	unidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "unidad";
	$fdata["GoodName"] = "unidad";
	$fdata["ownerTable"] = "unidad";
	$fdata["Label"] = GetFieldLabel("unidad","unidad"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "unidad"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unidad";
	
		
		
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
			$edata["EditParams"].= " maxlength=100";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataunidad["unidad"] = $fdata;
//	idFiscal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "idFiscal";
	$fdata["GoodName"] = "idFiscal";
	$fdata["ownerTable"] = "unidad";
	$fdata["Label"] = GetFieldLabel("unidad","idFiscal"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idFiscal"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idFiscal";
	
		
		
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
	
	
	
	

	

	
	$tdataunidad["idFiscal"] = $fdata;

	
$tables_data["unidad"]=&$tdataunidad;
$field_labels["unidad"] = &$fieldLabelsunidad;
$fieldToolTips["unidad"] = &$fieldToolTipsunidad;
$page_titles["unidad"] = &$pageTitlesunidad;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["unidad"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["unidad"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_unidad()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nombre,  	direccion,  	latitud,  	longitud,  	fiscal,  	telefono,  	distrito,  	region,  	unidad,  	idFiscal";
$proto0["m_strFrom"] = "FROM unidad";
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
	"m_strName" => "id",
	"m_strTable" => "unidad",
	"m_srcTableName" => "unidad"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "unidad";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "unidad",
	"m_srcTableName" => "unidad"
));

$proto7["m_sql"] = "nombre";
$proto7["m_srcTableName"] = "unidad";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion",
	"m_strTable" => "unidad",
	"m_srcTableName" => "unidad"
));

$proto9["m_sql"] = "direccion";
$proto9["m_srcTableName"] = "unidad";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "latitud",
	"m_strTable" => "unidad",
	"m_srcTableName" => "unidad"
));

$proto11["m_sql"] = "latitud";
$proto11["m_srcTableName"] = "unidad";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "longitud",
	"m_strTable" => "unidad",
	"m_srcTableName" => "unidad"
));

$proto13["m_sql"] = "longitud";
$proto13["m_srcTableName"] = "unidad";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "fiscal",
	"m_strTable" => "unidad",
	"m_srcTableName" => "unidad"
));

$proto15["m_sql"] = "fiscal";
$proto15["m_srcTableName"] = "unidad";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "telefono",
	"m_strTable" => "unidad",
	"m_srcTableName" => "unidad"
));

$proto17["m_sql"] = "telefono";
$proto17["m_srcTableName"] = "unidad";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "distrito",
	"m_strTable" => "unidad",
	"m_srcTableName" => "unidad"
));

$proto19["m_sql"] = "distrito";
$proto19["m_srcTableName"] = "unidad";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "region",
	"m_strTable" => "unidad",
	"m_srcTableName" => "unidad"
));

$proto21["m_sql"] = "region";
$proto21["m_srcTableName"] = "unidad";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "unidad",
	"m_strTable" => "unidad",
	"m_srcTableName" => "unidad"
));

$proto23["m_sql"] = "unidad";
$proto23["m_srcTableName"] = "unidad";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "idFiscal",
	"m_strTable" => "unidad",
	"m_srcTableName" => "unidad"
));

$proto25["m_sql"] = "idFiscal";
$proto25["m_srcTableName"] = "unidad";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "unidad";
$proto28["m_srcTableName"] = "unidad";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "id";
$proto28["m_columns"][] = "nombre";
$proto28["m_columns"][] = "direccion";
$proto28["m_columns"][] = "latitud";
$proto28["m_columns"][] = "longitud";
$proto28["m_columns"][] = "fiscal";
$proto28["m_columns"][] = "telefono";
$proto28["m_columns"][] = "distrito";
$proto28["m_columns"][] = "region";
$proto28["m_columns"][] = "unidad";
$proto28["m_columns"][] = "idFiscal";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "unidad";
$proto27["m_alias"] = "";
$proto27["m_srcTableName"] = "unidad";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="unidad";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_unidad = createSqlQuery_unidad();


	
											
	
$tdataunidad[".sqlquery"] = $queryData_unidad;

$tableEvents["unidad"] = new eventsBase;
$tdataunidad[".hasEvents"] = false;

?>