<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacat_cabtam = array();	
	$tdatacat_cabtam[".truncateText"] = true;
	$tdatacat_cabtam[".NumberOfChars"] = 80; 
	$tdatacat_cabtam[".ShortName"] = "cat_cabtam";
	$tdatacat_cabtam[".OwnerID"] = "";
	$tdatacat_cabtam[".OriginalTable"] = "cat_cabtam";

//	field labels
$fieldLabelscat_cabtam = array();
$fieldToolTipscat_cabtam = array();
$pageTitlescat_cabtam = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_cabtam["Spanish"] = array();
	$fieldToolTipscat_cabtam["Spanish"] = array();
	$pageTitlescat_cabtam["Spanish"] = array();
	$fieldLabelscat_cabtam["Spanish"]["idcabtam"] = "Idcabtam";
	$fieldToolTipscat_cabtam["Spanish"]["idcabtam"] = "";
	$fieldLabelscat_cabtam["Spanish"]["cabtam"] = "Cabtam";
	$fieldToolTipscat_cabtam["Spanish"]["cabtam"] = "";
	if (count($fieldToolTipscat_cabtam["Spanish"]))
		$tdatacat_cabtam[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscat_cabtam[""] = array();
	$fieldToolTipscat_cabtam[""] = array();
	$pageTitlescat_cabtam[""] = array();
	if (count($fieldToolTipscat_cabtam[""]))
		$tdatacat_cabtam[".isUseToolTips"] = true;
}
	
	
	$tdatacat_cabtam[".NCSearch"] = true;



$tdatacat_cabtam[".shortTableName"] = "cat_cabtam";
$tdatacat_cabtam[".nSecOptions"] = 0;
$tdatacat_cabtam[".recsPerRowList"] = 1;
$tdatacat_cabtam[".recsPerRowPrint"] = 1;
$tdatacat_cabtam[".mainTableOwnerID"] = "";
$tdatacat_cabtam[".moveNext"] = 1;
$tdatacat_cabtam[".entityType"] = 0;

$tdatacat_cabtam[".strOriginalTableName"] = "cat_cabtam";




$tdatacat_cabtam[".showAddInPopup"] = false;

$tdatacat_cabtam[".showEditInPopup"] = false;

$tdatacat_cabtam[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacat_cabtam[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacat_cabtam[".fieldsForRegister"] = array();

$tdatacat_cabtam[".listAjax"] = false;

	$tdatacat_cabtam[".audit"] = false;

	$tdatacat_cabtam[".locking"] = false;

$tdatacat_cabtam[".edit"] = true;
$tdatacat_cabtam[".afterEditAction"] = 1;
$tdatacat_cabtam[".closePopupAfterEdit"] = 1;
$tdatacat_cabtam[".afterEditActionDetTable"] = "";

$tdatacat_cabtam[".add"] = true;
$tdatacat_cabtam[".afterAddAction"] = 1;
$tdatacat_cabtam[".closePopupAfterAdd"] = 1;
$tdatacat_cabtam[".afterAddActionDetTable"] = "";

$tdatacat_cabtam[".list"] = true;

$tdatacat_cabtam[".inlineEdit"] = true;
$tdatacat_cabtam[".inlineAdd"] = true;
$tdatacat_cabtam[".view"] = true;

$tdatacat_cabtam[".import"] = true;

$tdatacat_cabtam[".exportTo"] = true;

$tdatacat_cabtam[".printFriendly"] = true;

$tdatacat_cabtam[".delete"] = true;

$tdatacat_cabtam[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacat_cabtam[".searchSaving"] = false;
//

$tdatacat_cabtam[".showSearchPanel"] = true;
		$tdatacat_cabtam[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacat_cabtam[".isUseAjaxSuggest"] = false;
else 
	$tdatacat_cabtam[".isUseAjaxSuggest"] = true;

$tdatacat_cabtam[".rowHighlite"] = true;



$tdatacat_cabtam[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_cabtam[".isUseTimeForSearch"] = false;





$tdatacat_cabtam[".allSearchFields"] = array();
$tdatacat_cabtam[".filterFields"] = array();
$tdatacat_cabtam[".requiredSearchFields"] = array();

$tdatacat_cabtam[".allSearchFields"][] = "idcabtam";
	$tdatacat_cabtam[".allSearchFields"][] = "cabtam";
	

$tdatacat_cabtam[".googleLikeFields"] = array();
$tdatacat_cabtam[".googleLikeFields"][] = "idcabtam";
$tdatacat_cabtam[".googleLikeFields"][] = "cabtam";


$tdatacat_cabtam[".advSearchFields"] = array();
$tdatacat_cabtam[".advSearchFields"][] = "idcabtam";
$tdatacat_cabtam[".advSearchFields"][] = "cabtam";

$tdatacat_cabtam[".tableType"] = "list";

$tdatacat_cabtam[".printerPageOrientation"] = 0;
$tdatacat_cabtam[".nPrinterPageScale"] = 100;

$tdatacat_cabtam[".nPrinterSplitRecords"] = 40;

$tdatacat_cabtam[".nPrinterPDFSplitRecords"] = 40;



$tdatacat_cabtam[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatacat_cabtam[".pageSize"] = 20;

$tdatacat_cabtam[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacat_cabtam[".strOrderBy"] = $tstrOrderBy;

$tdatacat_cabtam[".orderindexes"] = array();

$tdatacat_cabtam[".sqlHead"] = "SELECT idcabtam,  	cabtam";
$tdatacat_cabtam[".sqlFrom"] = "FROM cat_cabtam";
$tdatacat_cabtam[".sqlWhereExpr"] = "";
$tdatacat_cabtam[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_cabtam[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_cabtam[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_cabtam[".highlightSearchResults"] = true;

$tableKeyscat_cabtam = array();
$tableKeyscat_cabtam[] = "idcabtam";
$tdatacat_cabtam[".Keys"] = $tableKeyscat_cabtam;

$tdatacat_cabtam[".listFields"] = array();
$tdatacat_cabtam[".listFields"][] = "idcabtam";
$tdatacat_cabtam[".listFields"][] = "cabtam";

$tdatacat_cabtam[".hideMobileList"] = array();


$tdatacat_cabtam[".viewFields"] = array();
$tdatacat_cabtam[".viewFields"][] = "idcabtam";
$tdatacat_cabtam[".viewFields"][] = "cabtam";

$tdatacat_cabtam[".addFields"] = array();
$tdatacat_cabtam[".addFields"][] = "cabtam";

$tdatacat_cabtam[".masterListFields"] = array();
$tdatacat_cabtam[".masterListFields"][] = "idcabtam";
$tdatacat_cabtam[".masterListFields"][] = "cabtam";

$tdatacat_cabtam[".inlineAddFields"] = array();
$tdatacat_cabtam[".inlineAddFields"][] = "cabtam";

$tdatacat_cabtam[".editFields"] = array();
$tdatacat_cabtam[".editFields"][] = "cabtam";

$tdatacat_cabtam[".inlineEditFields"] = array();
$tdatacat_cabtam[".inlineEditFields"][] = "cabtam";

$tdatacat_cabtam[".exportFields"] = array();
$tdatacat_cabtam[".exportFields"][] = "idcabtam";
$tdatacat_cabtam[".exportFields"][] = "cabtam";

$tdatacat_cabtam[".importFields"] = array();
$tdatacat_cabtam[".importFields"][] = "idcabtam";
$tdatacat_cabtam[".importFields"][] = "cabtam";

$tdatacat_cabtam[".printFields"] = array();
$tdatacat_cabtam[".printFields"][] = "idcabtam";
$tdatacat_cabtam[".printFields"][] = "cabtam";

//	idcabtam
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idcabtam";
	$fdata["GoodName"] = "idcabtam";
	$fdata["ownerTable"] = "cat_cabtam";
	$fdata["Label"] = GetFieldLabel("cat_cabtam","idcabtam"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idcabtam"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idcabtam";
	
		
		
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

	

	
	$tdatacat_cabtam["idcabtam"] = $fdata;
//	cabtam
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cabtam";
	$fdata["GoodName"] = "cabtam";
	$fdata["ownerTable"] = "cat_cabtam";
	$fdata["Label"] = GetFieldLabel("cat_cabtam","cabtam"); 
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
	
		$fdata["strField"] = "cabtam"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cabtam";
	
		
		
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatacat_cabtam["cabtam"] = $fdata;

	
$tables_data["cat_cabtam"]=&$tdatacat_cabtam;
$field_labels["cat_cabtam"] = &$fieldLabelscat_cabtam;
$fieldToolTips["cat_cabtam"] = &$fieldToolTipscat_cabtam;
$page_titles["cat_cabtam"] = &$pageTitlescat_cabtam;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cat_cabtam"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["cat_cabtam"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_cat_cabtam()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idcabtam,  	cabtam";
$proto0["m_strFrom"] = "FROM cat_cabtam";
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
	"m_strName" => "idcabtam",
	"m_strTable" => "cat_cabtam",
	"m_srcTableName" => "cat_cabtam"
));

$proto5["m_sql"] = "idcabtam";
$proto5["m_srcTableName"] = "cat_cabtam";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "cabtam",
	"m_strTable" => "cat_cabtam",
	"m_srcTableName" => "cat_cabtam"
));

$proto7["m_sql"] = "cabtam";
$proto7["m_srcTableName"] = "cat_cabtam";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "cat_cabtam";
$proto10["m_srcTableName"] = "cat_cabtam";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "idcabtam";
$proto10["m_columns"][] = "cabtam";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "cat_cabtam";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "cat_cabtam";
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

$proto9["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto9);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_cabtam";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_cabtam = createSqlQuery_cat_cabtam();


	
		
	
$tdatacat_cabtam[".sqlquery"] = $queryData_cat_cabtam;

$tableEvents["cat_cabtam"] = new eventsBase;
$tdatacat_cabtam[".hasEvents"] = false;

?>