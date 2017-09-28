<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacat_menton = array();	
	$tdatacat_menton[".truncateText"] = true;
	$tdatacat_menton[".NumberOfChars"] = 80; 
	$tdatacat_menton[".ShortName"] = "cat_menton";
	$tdatacat_menton[".OwnerID"] = "";
	$tdatacat_menton[".OriginalTable"] = "cat_menton";

//	field labels
$fieldLabelscat_menton = array();
$fieldToolTipscat_menton = array();
$pageTitlescat_menton = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_menton["Spanish"] = array();
	$fieldToolTipscat_menton["Spanish"] = array();
	$pageTitlescat_menton["Spanish"] = array();
	$fieldLabelscat_menton["Spanish"]["idmenton"] = "Idmenton";
	$fieldToolTipscat_menton["Spanish"]["idmenton"] = "";
	$fieldLabelscat_menton["Spanish"]["menton"] = "Menton";
	$fieldToolTipscat_menton["Spanish"]["menton"] = "";
	if (count($fieldToolTipscat_menton["Spanish"]))
		$tdatacat_menton[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscat_menton[""] = array();
	$fieldToolTipscat_menton[""] = array();
	$pageTitlescat_menton[""] = array();
	if (count($fieldToolTipscat_menton[""]))
		$tdatacat_menton[".isUseToolTips"] = true;
}
	
	
	$tdatacat_menton[".NCSearch"] = true;



$tdatacat_menton[".shortTableName"] = "cat_menton";
$tdatacat_menton[".nSecOptions"] = 0;
$tdatacat_menton[".recsPerRowList"] = 1;
$tdatacat_menton[".recsPerRowPrint"] = 1;
$tdatacat_menton[".mainTableOwnerID"] = "";
$tdatacat_menton[".moveNext"] = 1;
$tdatacat_menton[".entityType"] = 0;

$tdatacat_menton[".strOriginalTableName"] = "cat_menton";




$tdatacat_menton[".showAddInPopup"] = false;

$tdatacat_menton[".showEditInPopup"] = false;

$tdatacat_menton[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacat_menton[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacat_menton[".fieldsForRegister"] = array();

$tdatacat_menton[".listAjax"] = false;

	$tdatacat_menton[".audit"] = false;

	$tdatacat_menton[".locking"] = false;

$tdatacat_menton[".edit"] = true;
$tdatacat_menton[".afterEditAction"] = 1;
$tdatacat_menton[".closePopupAfterEdit"] = 1;
$tdatacat_menton[".afterEditActionDetTable"] = "";

$tdatacat_menton[".add"] = true;
$tdatacat_menton[".afterAddAction"] = 1;
$tdatacat_menton[".closePopupAfterAdd"] = 1;
$tdatacat_menton[".afterAddActionDetTable"] = "";

$tdatacat_menton[".list"] = true;

$tdatacat_menton[".inlineEdit"] = true;
$tdatacat_menton[".inlineAdd"] = true;
$tdatacat_menton[".view"] = true;

$tdatacat_menton[".import"] = true;

$tdatacat_menton[".exportTo"] = true;

$tdatacat_menton[".printFriendly"] = true;

$tdatacat_menton[".delete"] = true;

$tdatacat_menton[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacat_menton[".searchSaving"] = false;
//

$tdatacat_menton[".showSearchPanel"] = true;
		$tdatacat_menton[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacat_menton[".isUseAjaxSuggest"] = false;
else 
	$tdatacat_menton[".isUseAjaxSuggest"] = true;

$tdatacat_menton[".rowHighlite"] = true;



$tdatacat_menton[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_menton[".isUseTimeForSearch"] = false;





$tdatacat_menton[".allSearchFields"] = array();
$tdatacat_menton[".filterFields"] = array();
$tdatacat_menton[".requiredSearchFields"] = array();

$tdatacat_menton[".allSearchFields"][] = "idmenton";
	$tdatacat_menton[".allSearchFields"][] = "menton";
	

$tdatacat_menton[".googleLikeFields"] = array();
$tdatacat_menton[".googleLikeFields"][] = "idmenton";
$tdatacat_menton[".googleLikeFields"][] = "menton";


$tdatacat_menton[".advSearchFields"] = array();
$tdatacat_menton[".advSearchFields"][] = "idmenton";
$tdatacat_menton[".advSearchFields"][] = "menton";

$tdatacat_menton[".tableType"] = "list";

$tdatacat_menton[".printerPageOrientation"] = 0;
$tdatacat_menton[".nPrinterPageScale"] = 100;

$tdatacat_menton[".nPrinterSplitRecords"] = 40;

$tdatacat_menton[".nPrinterPDFSplitRecords"] = 40;



$tdatacat_menton[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatacat_menton[".pageSize"] = 20;

$tdatacat_menton[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacat_menton[".strOrderBy"] = $tstrOrderBy;

$tdatacat_menton[".orderindexes"] = array();

$tdatacat_menton[".sqlHead"] = "SELECT idmenton,  	menton";
$tdatacat_menton[".sqlFrom"] = "FROM cat_menton";
$tdatacat_menton[".sqlWhereExpr"] = "";
$tdatacat_menton[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_menton[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_menton[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_menton[".highlightSearchResults"] = true;

$tableKeyscat_menton = array();
$tableKeyscat_menton[] = "idmenton";
$tdatacat_menton[".Keys"] = $tableKeyscat_menton;

$tdatacat_menton[".listFields"] = array();
$tdatacat_menton[".listFields"][] = "idmenton";
$tdatacat_menton[".listFields"][] = "menton";

$tdatacat_menton[".hideMobileList"] = array();


$tdatacat_menton[".viewFields"] = array();
$tdatacat_menton[".viewFields"][] = "idmenton";
$tdatacat_menton[".viewFields"][] = "menton";

$tdatacat_menton[".addFields"] = array();
$tdatacat_menton[".addFields"][] = "menton";

$tdatacat_menton[".masterListFields"] = array();
$tdatacat_menton[".masterListFields"][] = "idmenton";
$tdatacat_menton[".masterListFields"][] = "menton";

$tdatacat_menton[".inlineAddFields"] = array();
$tdatacat_menton[".inlineAddFields"][] = "menton";

$tdatacat_menton[".editFields"] = array();
$tdatacat_menton[".editFields"][] = "menton";

$tdatacat_menton[".inlineEditFields"] = array();
$tdatacat_menton[".inlineEditFields"][] = "menton";

$tdatacat_menton[".exportFields"] = array();
$tdatacat_menton[".exportFields"][] = "idmenton";
$tdatacat_menton[".exportFields"][] = "menton";

$tdatacat_menton[".importFields"] = array();
$tdatacat_menton[".importFields"][] = "idmenton";
$tdatacat_menton[".importFields"][] = "menton";

$tdatacat_menton[".printFields"] = array();
$tdatacat_menton[".printFields"][] = "idmenton";
$tdatacat_menton[".printFields"][] = "menton";

//	idmenton
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idmenton";
	$fdata["GoodName"] = "idmenton";
	$fdata["ownerTable"] = "cat_menton";
	$fdata["Label"] = GetFieldLabel("cat_menton","idmenton"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idmenton"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idmenton";
	
		
		
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

	

	
	$tdatacat_menton["idmenton"] = $fdata;
//	menton
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "menton";
	$fdata["GoodName"] = "menton";
	$fdata["ownerTable"] = "cat_menton";
	$fdata["Label"] = GetFieldLabel("cat_menton","menton"); 
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
	
		$fdata["strField"] = "menton"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "menton";
	
		
		
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

	

	
	$tdatacat_menton["menton"] = $fdata;

	
$tables_data["cat_menton"]=&$tdatacat_menton;
$field_labels["cat_menton"] = &$fieldLabelscat_menton;
$fieldToolTips["cat_menton"] = &$fieldToolTipscat_menton;
$page_titles["cat_menton"] = &$pageTitlescat_menton;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cat_menton"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["cat_menton"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_cat_menton()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idmenton,  	menton";
$proto0["m_strFrom"] = "FROM cat_menton";
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
	"m_strName" => "idmenton",
	"m_strTable" => "cat_menton",
	"m_srcTableName" => "cat_menton"
));

$proto5["m_sql"] = "idmenton";
$proto5["m_srcTableName"] = "cat_menton";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "menton",
	"m_strTable" => "cat_menton",
	"m_srcTableName" => "cat_menton"
));

$proto7["m_sql"] = "menton";
$proto7["m_srcTableName"] = "cat_menton";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "cat_menton";
$proto10["m_srcTableName"] = "cat_menton";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "idmenton";
$proto10["m_columns"][] = "menton";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "cat_menton";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "cat_menton";
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
$proto0["m_srcTableName"]="cat_menton";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_menton = createSqlQuery_cat_menton();


	
		
	
$tdatacat_menton[".sqlquery"] = $queryData_cat_menton;

$tableEvents["cat_menton"] = new eventsBase;
$tdatacat_menton[".hasEvents"] = false;

?>