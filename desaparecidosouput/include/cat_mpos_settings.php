<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacat_mpos = array();	
	$tdatacat_mpos[".truncateText"] = true;
	$tdatacat_mpos[".NumberOfChars"] = 80; 
	$tdatacat_mpos[".ShortName"] = "cat_mpos";
	$tdatacat_mpos[".OwnerID"] = "";
	$tdatacat_mpos[".OriginalTable"] = "cat_mpos";

//	field labels
$fieldLabelscat_mpos = array();
$fieldToolTipscat_mpos = array();
$pageTitlescat_mpos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_mpos["Spanish"] = array();
	$fieldToolTipscat_mpos["Spanish"] = array();
	$pageTitlescat_mpos["Spanish"] = array();
	$fieldLabelscat_mpos["Spanish"]["id"] = "Id";
	$fieldToolTipscat_mpos["Spanish"]["id"] = "";
	$fieldLabelscat_mpos["Spanish"]["fkEdo"] = "Fk Edo";
	$fieldToolTipscat_mpos["Spanish"]["fkEdo"] = "";
	$fieldLabelscat_mpos["Spanish"]["cve_mun"] = "Cve Mun";
	$fieldToolTipscat_mpos["Spanish"]["cve_mun"] = "";
	$fieldLabelscat_mpos["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipscat_mpos["Spanish"]["nombre"] = "";
	$fieldLabelscat_mpos["Spanish"]["cve_cab"] = "Cve Cab";
	$fieldToolTipscat_mpos["Spanish"]["cve_cab"] = "";
	$fieldLabelscat_mpos["Spanish"]["nom_cab"] = "Nom Cab";
	$fieldToolTipscat_mpos["Spanish"]["nom_cab"] = "";
	if (count($fieldToolTipscat_mpos["Spanish"]))
		$tdatacat_mpos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscat_mpos[""] = array();
	$fieldToolTipscat_mpos[""] = array();
	$pageTitlescat_mpos[""] = array();
	if (count($fieldToolTipscat_mpos[""]))
		$tdatacat_mpos[".isUseToolTips"] = true;
}
	
	
	$tdatacat_mpos[".NCSearch"] = true;



$tdatacat_mpos[".shortTableName"] = "cat_mpos";
$tdatacat_mpos[".nSecOptions"] = 0;
$tdatacat_mpos[".recsPerRowList"] = 1;
$tdatacat_mpos[".recsPerRowPrint"] = 1;
$tdatacat_mpos[".mainTableOwnerID"] = "";
$tdatacat_mpos[".moveNext"] = 1;
$tdatacat_mpos[".entityType"] = 0;

$tdatacat_mpos[".strOriginalTableName"] = "cat_mpos";




$tdatacat_mpos[".showAddInPopup"] = false;

$tdatacat_mpos[".showEditInPopup"] = false;

$tdatacat_mpos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacat_mpos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacat_mpos[".fieldsForRegister"] = array();

$tdatacat_mpos[".listAjax"] = false;

	$tdatacat_mpos[".audit"] = false;

	$tdatacat_mpos[".locking"] = false;









$tdatacat_mpos[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacat_mpos[".searchSaving"] = false;
//

$tdatacat_mpos[".showSearchPanel"] = true;
		$tdatacat_mpos[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacat_mpos[".isUseAjaxSuggest"] = false;
else 
	$tdatacat_mpos[".isUseAjaxSuggest"] = true;

$tdatacat_mpos[".rowHighlite"] = true;



$tdatacat_mpos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_mpos[".isUseTimeForSearch"] = false;





$tdatacat_mpos[".allSearchFields"] = array();
$tdatacat_mpos[".filterFields"] = array();
$tdatacat_mpos[".requiredSearchFields"] = array();

$tdatacat_mpos[".allSearchFields"][] = "id";
	$tdatacat_mpos[".allSearchFields"][] = "fkEdo";
	$tdatacat_mpos[".allSearchFields"][] = "cve_mun";
	$tdatacat_mpos[".allSearchFields"][] = "nombre";
	$tdatacat_mpos[".allSearchFields"][] = "cve_cab";
	$tdatacat_mpos[".allSearchFields"][] = "nom_cab";
	

$tdatacat_mpos[".googleLikeFields"] = array();
$tdatacat_mpos[".googleLikeFields"][] = "id";
$tdatacat_mpos[".googleLikeFields"][] = "fkEdo";
$tdatacat_mpos[".googleLikeFields"][] = "cve_mun";
$tdatacat_mpos[".googleLikeFields"][] = "nombre";
$tdatacat_mpos[".googleLikeFields"][] = "cve_cab";
$tdatacat_mpos[".googleLikeFields"][] = "nom_cab";


$tdatacat_mpos[".advSearchFields"] = array();
$tdatacat_mpos[".advSearchFields"][] = "id";
$tdatacat_mpos[".advSearchFields"][] = "fkEdo";
$tdatacat_mpos[".advSearchFields"][] = "cve_mun";
$tdatacat_mpos[".advSearchFields"][] = "nombre";
$tdatacat_mpos[".advSearchFields"][] = "cve_cab";
$tdatacat_mpos[".advSearchFields"][] = "nom_cab";

$tdatacat_mpos[".tableType"] = "list";

$tdatacat_mpos[".printerPageOrientation"] = 0;
$tdatacat_mpos[".nPrinterPageScale"] = 100;

$tdatacat_mpos[".nPrinterSplitRecords"] = 40;

$tdatacat_mpos[".nPrinterPDFSplitRecords"] = 40;



$tdatacat_mpos[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatacat_mpos[".pageSize"] = 20;

$tdatacat_mpos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacat_mpos[".strOrderBy"] = $tstrOrderBy;

$tdatacat_mpos[".orderindexes"] = array();

$tdatacat_mpos[".sqlHead"] = "SELECT id,  	fkEdo,  	cve_mun,  	nombre,  	cve_cab,  	nom_cab";
$tdatacat_mpos[".sqlFrom"] = "FROM cat_mpos";
$tdatacat_mpos[".sqlWhereExpr"] = "";
$tdatacat_mpos[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_mpos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_mpos[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_mpos[".highlightSearchResults"] = true;

$tableKeyscat_mpos = array();
$tableKeyscat_mpos[] = "id";
$tdatacat_mpos[".Keys"] = $tableKeyscat_mpos;

$tdatacat_mpos[".listFields"] = array();
$tdatacat_mpos[".listFields"][] = "id";
$tdatacat_mpos[".listFields"][] = "fkEdo";
$tdatacat_mpos[".listFields"][] = "cve_mun";
$tdatacat_mpos[".listFields"][] = "nombre";
$tdatacat_mpos[".listFields"][] = "cve_cab";
$tdatacat_mpos[".listFields"][] = "nom_cab";

$tdatacat_mpos[".hideMobileList"] = array();


$tdatacat_mpos[".viewFields"] = array();
$tdatacat_mpos[".viewFields"][] = "id";
$tdatacat_mpos[".viewFields"][] = "fkEdo";
$tdatacat_mpos[".viewFields"][] = "cve_mun";
$tdatacat_mpos[".viewFields"][] = "nombre";
$tdatacat_mpos[".viewFields"][] = "cve_cab";
$tdatacat_mpos[".viewFields"][] = "nom_cab";

$tdatacat_mpos[".addFields"] = array();
$tdatacat_mpos[".addFields"][] = "fkEdo";
$tdatacat_mpos[".addFields"][] = "cve_mun";
$tdatacat_mpos[".addFields"][] = "nombre";
$tdatacat_mpos[".addFields"][] = "cve_cab";
$tdatacat_mpos[".addFields"][] = "nom_cab";

$tdatacat_mpos[".masterListFields"] = array();
$tdatacat_mpos[".masterListFields"][] = "id";
$tdatacat_mpos[".masterListFields"][] = "fkEdo";
$tdatacat_mpos[".masterListFields"][] = "cve_mun";
$tdatacat_mpos[".masterListFields"][] = "nombre";
$tdatacat_mpos[".masterListFields"][] = "cve_cab";
$tdatacat_mpos[".masterListFields"][] = "nom_cab";

$tdatacat_mpos[".inlineAddFields"] = array();
$tdatacat_mpos[".inlineAddFields"][] = "fkEdo";
$tdatacat_mpos[".inlineAddFields"][] = "cve_mun";
$tdatacat_mpos[".inlineAddFields"][] = "nombre";
$tdatacat_mpos[".inlineAddFields"][] = "cve_cab";
$tdatacat_mpos[".inlineAddFields"][] = "nom_cab";

$tdatacat_mpos[".editFields"] = array();
$tdatacat_mpos[".editFields"][] = "fkEdo";
$tdatacat_mpos[".editFields"][] = "cve_mun";
$tdatacat_mpos[".editFields"][] = "nombre";
$tdatacat_mpos[".editFields"][] = "cve_cab";
$tdatacat_mpos[".editFields"][] = "nom_cab";

$tdatacat_mpos[".inlineEditFields"] = array();
$tdatacat_mpos[".inlineEditFields"][] = "fkEdo";
$tdatacat_mpos[".inlineEditFields"][] = "cve_mun";
$tdatacat_mpos[".inlineEditFields"][] = "nombre";
$tdatacat_mpos[".inlineEditFields"][] = "cve_cab";
$tdatacat_mpos[".inlineEditFields"][] = "nom_cab";

$tdatacat_mpos[".exportFields"] = array();
$tdatacat_mpos[".exportFields"][] = "id";
$tdatacat_mpos[".exportFields"][] = "fkEdo";
$tdatacat_mpos[".exportFields"][] = "cve_mun";
$tdatacat_mpos[".exportFields"][] = "nombre";
$tdatacat_mpos[".exportFields"][] = "cve_cab";
$tdatacat_mpos[".exportFields"][] = "nom_cab";

$tdatacat_mpos[".importFields"] = array();
$tdatacat_mpos[".importFields"][] = "id";
$tdatacat_mpos[".importFields"][] = "fkEdo";
$tdatacat_mpos[".importFields"][] = "cve_mun";
$tdatacat_mpos[".importFields"][] = "nombre";
$tdatacat_mpos[".importFields"][] = "cve_cab";
$tdatacat_mpos[".importFields"][] = "nom_cab";

$tdatacat_mpos[".printFields"] = array();
$tdatacat_mpos[".printFields"][] = "id";
$tdatacat_mpos[".printFields"][] = "fkEdo";
$tdatacat_mpos[".printFields"][] = "cve_mun";
$tdatacat_mpos[".printFields"][] = "nombre";
$tdatacat_mpos[".printFields"][] = "cve_cab";
$tdatacat_mpos[".printFields"][] = "nom_cab";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "cat_mpos";
	$fdata["Label"] = GetFieldLabel("cat_mpos","id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatacat_mpos["id"] = $fdata;
//	fkEdo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fkEdo";
	$fdata["GoodName"] = "fkEdo";
	$fdata["ownerTable"] = "cat_mpos";
	$fdata["Label"] = GetFieldLabel("cat_mpos","fkEdo"); 
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
	
		$fdata["strField"] = "fkEdo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fkEdo";
	
		
		
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

	

	
	$tdatacat_mpos["fkEdo"] = $fdata;
//	cve_mun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cve_mun";
	$fdata["GoodName"] = "cve_mun";
	$fdata["ownerTable"] = "cat_mpos";
	$fdata["Label"] = GetFieldLabel("cat_mpos","cve_mun"); 
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
	
		$fdata["strField"] = "cve_mun"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cve_mun";
	
		
		
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

	

	
	$tdatacat_mpos["cve_mun"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "cat_mpos";
	$fdata["Label"] = GetFieldLabel("cat_mpos","nombre"); 
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
			$edata["EditParams"].= " maxlength=800";
	
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

	

	
	$tdatacat_mpos["nombre"] = $fdata;
//	cve_cab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cve_cab";
	$fdata["GoodName"] = "cve_cab";
	$fdata["ownerTable"] = "cat_mpos";
	$fdata["Label"] = GetFieldLabel("cat_mpos","cve_cab"); 
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
	
		$fdata["strField"] = "cve_cab"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cve_cab";
	
		
		
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

	

	
	$tdatacat_mpos["cve_cab"] = $fdata;
//	nom_cab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nom_cab";
	$fdata["GoodName"] = "nom_cab";
	$fdata["ownerTable"] = "cat_mpos";
	$fdata["Label"] = GetFieldLabel("cat_mpos","nom_cab"); 
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
	
		$fdata["strField"] = "nom_cab"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nom_cab";
	
		
		
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
			$edata["EditParams"].= " maxlength=800";
	
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

	

	
	$tdatacat_mpos["nom_cab"] = $fdata;

	
$tables_data["cat_mpos"]=&$tdatacat_mpos;
$field_labels["cat_mpos"] = &$fieldLabelscat_mpos;
$fieldToolTips["cat_mpos"] = &$fieldToolTipscat_mpos;
$page_titles["cat_mpos"] = &$pageTitlescat_mpos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cat_mpos"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["cat_mpos"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_cat_mpos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	fkEdo,  	cve_mun,  	nombre,  	cve_cab,  	nom_cab";
$proto0["m_strFrom"] = "FROM cat_mpos";
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
	"m_strTable" => "cat_mpos",
	"m_srcTableName" => "cat_mpos"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "cat_mpos";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "fkEdo",
	"m_strTable" => "cat_mpos",
	"m_srcTableName" => "cat_mpos"
));

$proto7["m_sql"] = "fkEdo";
$proto7["m_srcTableName"] = "cat_mpos";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "cve_mun",
	"m_strTable" => "cat_mpos",
	"m_srcTableName" => "cat_mpos"
));

$proto9["m_sql"] = "cve_mun";
$proto9["m_srcTableName"] = "cat_mpos";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "cat_mpos",
	"m_srcTableName" => "cat_mpos"
));

$proto11["m_sql"] = "nombre";
$proto11["m_srcTableName"] = "cat_mpos";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "cve_cab",
	"m_strTable" => "cat_mpos",
	"m_srcTableName" => "cat_mpos"
));

$proto13["m_sql"] = "cve_cab";
$proto13["m_srcTableName"] = "cat_mpos";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "nom_cab",
	"m_strTable" => "cat_mpos",
	"m_srcTableName" => "cat_mpos"
));

$proto15["m_sql"] = "nom_cab";
$proto15["m_srcTableName"] = "cat_mpos";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "cat_mpos";
$proto18["m_srcTableName"] = "cat_mpos";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "id";
$proto18["m_columns"][] = "fkEdo";
$proto18["m_columns"][] = "cve_mun";
$proto18["m_columns"][] = "nombre";
$proto18["m_columns"][] = "cve_cab";
$proto18["m_columns"][] = "nom_cab";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "cat_mpos";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "cat_mpos";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_mpos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_mpos = createSqlQuery_cat_mpos();


	
						
	
$tdatacat_mpos[".sqlquery"] = $queryData_cat_mpos;

$tableEvents["cat_mpos"] = new eventsBase;
$tdatacat_mpos[".hasEvents"] = false;

?>