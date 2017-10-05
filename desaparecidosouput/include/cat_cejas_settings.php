<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacat_cejas = array();	
	$tdatacat_cejas[".truncateText"] = true;
	$tdatacat_cejas[".NumberOfChars"] = 80; 
	$tdatacat_cejas[".ShortName"] = "cat_cejas";
	$tdatacat_cejas[".OwnerID"] = "";
	$tdatacat_cejas[".OriginalTable"] = "cat_cejas";

//	field labels
$fieldLabelscat_cejas = array();
$fieldToolTipscat_cejas = array();
$pageTitlescat_cejas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_cejas["Spanish"] = array();
	$fieldToolTipscat_cejas["Spanish"] = array();
	$pageTitlescat_cejas["Spanish"] = array();
	$fieldLabelscat_cejas["Spanish"]["idcejas"] = "Idcejas";
	$fieldToolTipscat_cejas["Spanish"]["idcejas"] = "";
	$fieldLabelscat_cejas["Spanish"]["cejas"] = "Cejas";
	$fieldToolTipscat_cejas["Spanish"]["cejas"] = "";
	if (count($fieldToolTipscat_cejas["Spanish"]))
		$tdatacat_cejas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscat_cejas[""] = array();
	$fieldToolTipscat_cejas[""] = array();
	$pageTitlescat_cejas[""] = array();
	if (count($fieldToolTipscat_cejas[""]))
		$tdatacat_cejas[".isUseToolTips"] = true;
}
	
	
	$tdatacat_cejas[".NCSearch"] = true;



$tdatacat_cejas[".shortTableName"] = "cat_cejas";
$tdatacat_cejas[".nSecOptions"] = 0;
$tdatacat_cejas[".recsPerRowList"] = 1;
$tdatacat_cejas[".recsPerRowPrint"] = 1;
$tdatacat_cejas[".mainTableOwnerID"] = "";
$tdatacat_cejas[".moveNext"] = 1;
$tdatacat_cejas[".entityType"] = 0;

$tdatacat_cejas[".strOriginalTableName"] = "cat_cejas";




$tdatacat_cejas[".showAddInPopup"] = false;

$tdatacat_cejas[".showEditInPopup"] = false;

$tdatacat_cejas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacat_cejas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacat_cejas[".fieldsForRegister"] = array();

$tdatacat_cejas[".listAjax"] = false;

	$tdatacat_cejas[".audit"] = false;

	$tdatacat_cejas[".locking"] = false;









$tdatacat_cejas[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacat_cejas[".searchSaving"] = false;
//

$tdatacat_cejas[".showSearchPanel"] = true;
		$tdatacat_cejas[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacat_cejas[".isUseAjaxSuggest"] = false;
else 
	$tdatacat_cejas[".isUseAjaxSuggest"] = true;

$tdatacat_cejas[".rowHighlite"] = true;



$tdatacat_cejas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_cejas[".isUseTimeForSearch"] = false;





$tdatacat_cejas[".allSearchFields"] = array();
$tdatacat_cejas[".filterFields"] = array();
$tdatacat_cejas[".requiredSearchFields"] = array();

$tdatacat_cejas[".allSearchFields"][] = "idcejas";
	$tdatacat_cejas[".allSearchFields"][] = "cejas";
	

$tdatacat_cejas[".googleLikeFields"] = array();
$tdatacat_cejas[".googleLikeFields"][] = "idcejas";
$tdatacat_cejas[".googleLikeFields"][] = "cejas";


$tdatacat_cejas[".advSearchFields"] = array();
$tdatacat_cejas[".advSearchFields"][] = "idcejas";
$tdatacat_cejas[".advSearchFields"][] = "cejas";

$tdatacat_cejas[".tableType"] = "list";

$tdatacat_cejas[".printerPageOrientation"] = 0;
$tdatacat_cejas[".nPrinterPageScale"] = 100;

$tdatacat_cejas[".nPrinterSplitRecords"] = 40;

$tdatacat_cejas[".nPrinterPDFSplitRecords"] = 40;



$tdatacat_cejas[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatacat_cejas[".pageSize"] = 20;

$tdatacat_cejas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacat_cejas[".strOrderBy"] = $tstrOrderBy;

$tdatacat_cejas[".orderindexes"] = array();

$tdatacat_cejas[".sqlHead"] = "SELECT idcejas,  	cejas";
$tdatacat_cejas[".sqlFrom"] = "FROM cat_cejas";
$tdatacat_cejas[".sqlWhereExpr"] = "";
$tdatacat_cejas[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_cejas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_cejas[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_cejas[".highlightSearchResults"] = true;

$tableKeyscat_cejas = array();
$tableKeyscat_cejas[] = "idcejas";
$tdatacat_cejas[".Keys"] = $tableKeyscat_cejas;

$tdatacat_cejas[".listFields"] = array();
$tdatacat_cejas[".listFields"][] = "idcejas";
$tdatacat_cejas[".listFields"][] = "cejas";

$tdatacat_cejas[".hideMobileList"] = array();


$tdatacat_cejas[".viewFields"] = array();
$tdatacat_cejas[".viewFields"][] = "idcejas";
$tdatacat_cejas[".viewFields"][] = "cejas";

$tdatacat_cejas[".addFields"] = array();
$tdatacat_cejas[".addFields"][] = "cejas";

$tdatacat_cejas[".masterListFields"] = array();
$tdatacat_cejas[".masterListFields"][] = "idcejas";
$tdatacat_cejas[".masterListFields"][] = "cejas";

$tdatacat_cejas[".inlineAddFields"] = array();
$tdatacat_cejas[".inlineAddFields"][] = "cejas";

$tdatacat_cejas[".editFields"] = array();
$tdatacat_cejas[".editFields"][] = "cejas";

$tdatacat_cejas[".inlineEditFields"] = array();
$tdatacat_cejas[".inlineEditFields"][] = "cejas";

$tdatacat_cejas[".exportFields"] = array();
$tdatacat_cejas[".exportFields"][] = "idcejas";
$tdatacat_cejas[".exportFields"][] = "cejas";

$tdatacat_cejas[".importFields"] = array();
$tdatacat_cejas[".importFields"][] = "idcejas";
$tdatacat_cejas[".importFields"][] = "cejas";

$tdatacat_cejas[".printFields"] = array();
$tdatacat_cejas[".printFields"][] = "idcejas";
$tdatacat_cejas[".printFields"][] = "cejas";

//	idcejas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idcejas";
	$fdata["GoodName"] = "idcejas";
	$fdata["ownerTable"] = "cat_cejas";
	$fdata["Label"] = GetFieldLabel("cat_cejas","idcejas"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idcejas"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idcejas";
	
		
		
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

	

	
	$tdatacat_cejas["idcejas"] = $fdata;
//	cejas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cejas";
	$fdata["GoodName"] = "cejas";
	$fdata["ownerTable"] = "cat_cejas";
	$fdata["Label"] = GetFieldLabel("cat_cejas","cejas"); 
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
	
		$fdata["strField"] = "cejas"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cejas";
	
		
		
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

	

	
	$tdatacat_cejas["cejas"] = $fdata;

	
$tables_data["cat_cejas"]=&$tdatacat_cejas;
$field_labels["cat_cejas"] = &$fieldLabelscat_cejas;
$fieldToolTips["cat_cejas"] = &$fieldToolTipscat_cejas;
$page_titles["cat_cejas"] = &$pageTitlescat_cejas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cat_cejas"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["cat_cejas"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_cat_cejas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idcejas,  	cejas";
$proto0["m_strFrom"] = "FROM cat_cejas";
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
	"m_strName" => "idcejas",
	"m_strTable" => "cat_cejas",
	"m_srcTableName" => "cat_cejas"
));

$proto5["m_sql"] = "idcejas";
$proto5["m_srcTableName"] = "cat_cejas";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "cejas",
	"m_strTable" => "cat_cejas",
	"m_srcTableName" => "cat_cejas"
));

$proto7["m_sql"] = "cejas";
$proto7["m_srcTableName"] = "cat_cejas";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "cat_cejas";
$proto10["m_srcTableName"] = "cat_cejas";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "idcejas";
$proto10["m_columns"][] = "cejas";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "cat_cejas";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "cat_cejas";
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
$proto0["m_srcTableName"]="cat_cejas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_cejas = createSqlQuery_cat_cejas();


	
		
	
$tdatacat_cejas[".sqlquery"] = $queryData_cat_cejas;

$tableEvents["cat_cejas"] = new eventsBase;
$tdatacat_cejas[".hasEvents"] = false;

?>