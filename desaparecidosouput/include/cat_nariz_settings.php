<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacat_nariz = array();	
	$tdatacat_nariz[".truncateText"] = true;
	$tdatacat_nariz[".NumberOfChars"] = 80; 
	$tdatacat_nariz[".ShortName"] = "cat_nariz";
	$tdatacat_nariz[".OwnerID"] = "";
	$tdatacat_nariz[".OriginalTable"] = "cat_nariz";

//	field labels
$fieldLabelscat_nariz = array();
$fieldToolTipscat_nariz = array();
$pageTitlescat_nariz = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_nariz["Spanish"] = array();
	$fieldToolTipscat_nariz["Spanish"] = array();
	$pageTitlescat_nariz["Spanish"] = array();
	$fieldLabelscat_nariz["Spanish"]["idnariz"] = "Idnariz";
	$fieldToolTipscat_nariz["Spanish"]["idnariz"] = "";
	$fieldLabelscat_nariz["Spanish"]["nariz"] = "Nariz";
	$fieldToolTipscat_nariz["Spanish"]["nariz"] = "";
	if (count($fieldToolTipscat_nariz["Spanish"]))
		$tdatacat_nariz[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscat_nariz[""] = array();
	$fieldToolTipscat_nariz[""] = array();
	$pageTitlescat_nariz[""] = array();
	if (count($fieldToolTipscat_nariz[""]))
		$tdatacat_nariz[".isUseToolTips"] = true;
}
	
	
	$tdatacat_nariz[".NCSearch"] = true;



$tdatacat_nariz[".shortTableName"] = "cat_nariz";
$tdatacat_nariz[".nSecOptions"] = 0;
$tdatacat_nariz[".recsPerRowList"] = 1;
$tdatacat_nariz[".recsPerRowPrint"] = 1;
$tdatacat_nariz[".mainTableOwnerID"] = "";
$tdatacat_nariz[".moveNext"] = 1;
$tdatacat_nariz[".entityType"] = 0;

$tdatacat_nariz[".strOriginalTableName"] = "cat_nariz";




$tdatacat_nariz[".showAddInPopup"] = false;

$tdatacat_nariz[".showEditInPopup"] = false;

$tdatacat_nariz[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacat_nariz[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacat_nariz[".fieldsForRegister"] = array();

$tdatacat_nariz[".listAjax"] = false;

	$tdatacat_nariz[".audit"] = false;

	$tdatacat_nariz[".locking"] = false;









$tdatacat_nariz[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacat_nariz[".searchSaving"] = false;
//

$tdatacat_nariz[".showSearchPanel"] = true;
		$tdatacat_nariz[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacat_nariz[".isUseAjaxSuggest"] = false;
else 
	$tdatacat_nariz[".isUseAjaxSuggest"] = true;

$tdatacat_nariz[".rowHighlite"] = true;



$tdatacat_nariz[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_nariz[".isUseTimeForSearch"] = false;





$tdatacat_nariz[".allSearchFields"] = array();
$tdatacat_nariz[".filterFields"] = array();
$tdatacat_nariz[".requiredSearchFields"] = array();

$tdatacat_nariz[".allSearchFields"][] = "idnariz";
	$tdatacat_nariz[".allSearchFields"][] = "nariz";
	

$tdatacat_nariz[".googleLikeFields"] = array();
$tdatacat_nariz[".googleLikeFields"][] = "idnariz";
$tdatacat_nariz[".googleLikeFields"][] = "nariz";


$tdatacat_nariz[".advSearchFields"] = array();
$tdatacat_nariz[".advSearchFields"][] = "idnariz";
$tdatacat_nariz[".advSearchFields"][] = "nariz";

$tdatacat_nariz[".tableType"] = "list";

$tdatacat_nariz[".printerPageOrientation"] = 0;
$tdatacat_nariz[".nPrinterPageScale"] = 100;

$tdatacat_nariz[".nPrinterSplitRecords"] = 40;

$tdatacat_nariz[".nPrinterPDFSplitRecords"] = 40;



$tdatacat_nariz[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatacat_nariz[".pageSize"] = 20;

$tdatacat_nariz[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacat_nariz[".strOrderBy"] = $tstrOrderBy;

$tdatacat_nariz[".orderindexes"] = array();

$tdatacat_nariz[".sqlHead"] = "SELECT idnariz,  	nariz";
$tdatacat_nariz[".sqlFrom"] = "FROM cat_nariz";
$tdatacat_nariz[".sqlWhereExpr"] = "";
$tdatacat_nariz[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_nariz[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_nariz[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_nariz[".highlightSearchResults"] = true;

$tableKeyscat_nariz = array();
$tableKeyscat_nariz[] = "idnariz";
$tdatacat_nariz[".Keys"] = $tableKeyscat_nariz;

$tdatacat_nariz[".listFields"] = array();
$tdatacat_nariz[".listFields"][] = "idnariz";
$tdatacat_nariz[".listFields"][] = "nariz";

$tdatacat_nariz[".hideMobileList"] = array();


$tdatacat_nariz[".viewFields"] = array();
$tdatacat_nariz[".viewFields"][] = "idnariz";
$tdatacat_nariz[".viewFields"][] = "nariz";

$tdatacat_nariz[".addFields"] = array();
$tdatacat_nariz[".addFields"][] = "nariz";

$tdatacat_nariz[".masterListFields"] = array();
$tdatacat_nariz[".masterListFields"][] = "idnariz";
$tdatacat_nariz[".masterListFields"][] = "nariz";

$tdatacat_nariz[".inlineAddFields"] = array();
$tdatacat_nariz[".inlineAddFields"][] = "nariz";

$tdatacat_nariz[".editFields"] = array();
$tdatacat_nariz[".editFields"][] = "nariz";

$tdatacat_nariz[".inlineEditFields"] = array();
$tdatacat_nariz[".inlineEditFields"][] = "nariz";

$tdatacat_nariz[".exportFields"] = array();
$tdatacat_nariz[".exportFields"][] = "idnariz";
$tdatacat_nariz[".exportFields"][] = "nariz";

$tdatacat_nariz[".importFields"] = array();
$tdatacat_nariz[".importFields"][] = "idnariz";
$tdatacat_nariz[".importFields"][] = "nariz";

$tdatacat_nariz[".printFields"] = array();
$tdatacat_nariz[".printFields"][] = "idnariz";
$tdatacat_nariz[".printFields"][] = "nariz";

//	idnariz
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idnariz";
	$fdata["GoodName"] = "idnariz";
	$fdata["ownerTable"] = "cat_nariz";
	$fdata["Label"] = GetFieldLabel("cat_nariz","idnariz"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idnariz"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idnariz";
	
		
		
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

	

	
	$tdatacat_nariz["idnariz"] = $fdata;
//	nariz
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nariz";
	$fdata["GoodName"] = "nariz";
	$fdata["ownerTable"] = "cat_nariz";
	$fdata["Label"] = GetFieldLabel("cat_nariz","nariz"); 
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
	
		$fdata["strField"] = "nariz"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nariz";
	
		
		
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

	

	
	$tdatacat_nariz["nariz"] = $fdata;

	
$tables_data["cat_nariz"]=&$tdatacat_nariz;
$field_labels["cat_nariz"] = &$fieldLabelscat_nariz;
$fieldToolTips["cat_nariz"] = &$fieldToolTipscat_nariz;
$page_titles["cat_nariz"] = &$pageTitlescat_nariz;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cat_nariz"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["cat_nariz"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_cat_nariz()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idnariz,  	nariz";
$proto0["m_strFrom"] = "FROM cat_nariz";
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
	"m_strName" => "idnariz",
	"m_strTable" => "cat_nariz",
	"m_srcTableName" => "cat_nariz"
));

$proto5["m_sql"] = "idnariz";
$proto5["m_srcTableName"] = "cat_nariz";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nariz",
	"m_strTable" => "cat_nariz",
	"m_srcTableName" => "cat_nariz"
));

$proto7["m_sql"] = "nariz";
$proto7["m_srcTableName"] = "cat_nariz";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "cat_nariz";
$proto10["m_srcTableName"] = "cat_nariz";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "idnariz";
$proto10["m_columns"][] = "nariz";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "cat_nariz";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "cat_nariz";
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
$proto0["m_srcTableName"]="cat_nariz";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_nariz = createSqlQuery_cat_nariz();


	
		
	
$tdatacat_nariz[".sqlquery"] = $queryData_cat_nariz;

$tableEvents["cat_nariz"] = new eventsBase;
$tdatacat_nariz[".hasEvents"] = false;

?>