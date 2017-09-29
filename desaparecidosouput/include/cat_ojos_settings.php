<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacat_ojos = array();	
	$tdatacat_ojos[".truncateText"] = true;
	$tdatacat_ojos[".NumberOfChars"] = 80; 
	$tdatacat_ojos[".ShortName"] = "cat_ojos";
	$tdatacat_ojos[".OwnerID"] = "";
	$tdatacat_ojos[".OriginalTable"] = "cat_ojos";

//	field labels
$fieldLabelscat_ojos = array();
$fieldToolTipscat_ojos = array();
$pageTitlescat_ojos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_ojos["Spanish"] = array();
	$fieldToolTipscat_ojos["Spanish"] = array();
	$pageTitlescat_ojos["Spanish"] = array();
	$fieldLabelscat_ojos["Spanish"]["idojos"] = "Idojos";
	$fieldToolTipscat_ojos["Spanish"]["idojos"] = "";
	$fieldLabelscat_ojos["Spanish"]["ojos"] = "Ojos";
	$fieldToolTipscat_ojos["Spanish"]["ojos"] = "";
	if (count($fieldToolTipscat_ojos["Spanish"]))
		$tdatacat_ojos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscat_ojos[""] = array();
	$fieldToolTipscat_ojos[""] = array();
	$pageTitlescat_ojos[""] = array();
	$fieldLabelscat_ojos[""]["idojos"] = "Idojos";
	$fieldToolTipscat_ojos[""]["idojos"] = "";
	$fieldLabelscat_ojos[""]["ojos"] = "Ojos";
	$fieldToolTipscat_ojos[""]["ojos"] = "";
	if (count($fieldToolTipscat_ojos[""]))
		$tdatacat_ojos[".isUseToolTips"] = true;
}
	
	
	$tdatacat_ojos[".NCSearch"] = true;



$tdatacat_ojos[".shortTableName"] = "cat_ojos";
$tdatacat_ojos[".nSecOptions"] = 0;
$tdatacat_ojos[".recsPerRowList"] = 1;
$tdatacat_ojos[".recsPerRowPrint"] = 1;
$tdatacat_ojos[".mainTableOwnerID"] = "";
$tdatacat_ojos[".moveNext"] = 1;
$tdatacat_ojos[".entityType"] = 0;

$tdatacat_ojos[".strOriginalTableName"] = "cat_ojos";




$tdatacat_ojos[".showAddInPopup"] = false;

$tdatacat_ojos[".showEditInPopup"] = false;

$tdatacat_ojos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacat_ojos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacat_ojos[".fieldsForRegister"] = array();

$tdatacat_ojos[".listAjax"] = false;

	$tdatacat_ojos[".audit"] = false;

	$tdatacat_ojos[".locking"] = false;









$tdatacat_ojos[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacat_ojos[".searchSaving"] = false;
//

$tdatacat_ojos[".showSearchPanel"] = true;
		$tdatacat_ojos[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacat_ojos[".isUseAjaxSuggest"] = false;
else 
	$tdatacat_ojos[".isUseAjaxSuggest"] = true;

$tdatacat_ojos[".rowHighlite"] = true;



$tdatacat_ojos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_ojos[".isUseTimeForSearch"] = false;





$tdatacat_ojos[".allSearchFields"] = array();
$tdatacat_ojos[".filterFields"] = array();
$tdatacat_ojos[".requiredSearchFields"] = array();



$tdatacat_ojos[".googleLikeFields"] = array();
$tdatacat_ojos[".googleLikeFields"][] = "idojos";
$tdatacat_ojos[".googleLikeFields"][] = "ojos";


$tdatacat_ojos[".advSearchFields"] = array();
$tdatacat_ojos[".advSearchFields"][] = "idojos";
$tdatacat_ojos[".advSearchFields"][] = "ojos";

$tdatacat_ojos[".tableType"] = "list";

$tdatacat_ojos[".printerPageOrientation"] = 0;
$tdatacat_ojos[".nPrinterPageScale"] = 100;

$tdatacat_ojos[".nPrinterSplitRecords"] = 40;

$tdatacat_ojos[".nPrinterPDFSplitRecords"] = 40;



$tdatacat_ojos[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatacat_ojos[".pageSize"] = 20;

$tdatacat_ojos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacat_ojos[".strOrderBy"] = $tstrOrderBy;

$tdatacat_ojos[".orderindexes"] = array();

$tdatacat_ojos[".sqlHead"] = "SELECT idojos,  	ojos";
$tdatacat_ojos[".sqlFrom"] = "FROM cat_ojos";
$tdatacat_ojos[".sqlWhereExpr"] = "";
$tdatacat_ojos[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_ojos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_ojos[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_ojos[".highlightSearchResults"] = true;

$tableKeyscat_ojos = array();
$tableKeyscat_ojos[] = "idojos";
$tdatacat_ojos[".Keys"] = $tableKeyscat_ojos;

$tdatacat_ojos[".listFields"] = array();
$tdatacat_ojos[".listFields"][] = "idojos";
$tdatacat_ojos[".listFields"][] = "ojos";

$tdatacat_ojos[".hideMobileList"] = array();


$tdatacat_ojos[".viewFields"] = array();
$tdatacat_ojos[".viewFields"][] = "idojos";
$tdatacat_ojos[".viewFields"][] = "ojos";

$tdatacat_ojos[".addFields"] = array();
$tdatacat_ojos[".addFields"][] = "ojos";

$tdatacat_ojos[".masterListFields"] = array();
$tdatacat_ojos[".masterListFields"][] = "idojos";
$tdatacat_ojos[".masterListFields"][] = "ojos";

$tdatacat_ojos[".inlineAddFields"] = array();
$tdatacat_ojos[".inlineAddFields"][] = "ojos";

$tdatacat_ojos[".editFields"] = array();
$tdatacat_ojos[".editFields"][] = "ojos";

$tdatacat_ojos[".inlineEditFields"] = array();
$tdatacat_ojos[".inlineEditFields"][] = "ojos";

$tdatacat_ojos[".exportFields"] = array();
$tdatacat_ojos[".exportFields"][] = "idojos";
$tdatacat_ojos[".exportFields"][] = "ojos";

$tdatacat_ojos[".importFields"] = array();
$tdatacat_ojos[".importFields"][] = "idojos";
$tdatacat_ojos[".importFields"][] = "ojos";

$tdatacat_ojos[".printFields"] = array();
$tdatacat_ojos[".printFields"][] = "idojos";
$tdatacat_ojos[".printFields"][] = "ojos";

//	idojos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idojos";
	$fdata["GoodName"] = "idojos";
	$fdata["ownerTable"] = "cat_ojos";
	$fdata["Label"] = GetFieldLabel("cat_ojos","idojos"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idojos"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idojos";
	
		
		
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
	
	
	
	

	

	
	$tdatacat_ojos["idojos"] = $fdata;
//	ojos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ojos";
	$fdata["GoodName"] = "ojos";
	$fdata["ownerTable"] = "cat_ojos";
	$fdata["Label"] = GetFieldLabel("cat_ojos","ojos"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ojos"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ojos";
	
		
		
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
	
	
	
	

	

	
	$tdatacat_ojos["ojos"] = $fdata;

	
$tables_data["cat_ojos"]=&$tdatacat_ojos;
$field_labels["cat_ojos"] = &$fieldLabelscat_ojos;
$fieldToolTips["cat_ojos"] = &$fieldToolTipscat_ojos;
$page_titles["cat_ojos"] = &$pageTitlescat_ojos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cat_ojos"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["cat_ojos"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_cat_ojos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idojos,  	ojos";
$proto0["m_strFrom"] = "FROM cat_ojos";
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
	"m_strName" => "idojos",
	"m_strTable" => "cat_ojos",
	"m_srcTableName" => "cat_ojos"
));

$proto5["m_sql"] = "idojos";
$proto5["m_srcTableName"] = "cat_ojos";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ojos",
	"m_strTable" => "cat_ojos",
	"m_srcTableName" => "cat_ojos"
));

$proto7["m_sql"] = "ojos";
$proto7["m_srcTableName"] = "cat_ojos";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "cat_ojos";
$proto10["m_srcTableName"] = "cat_ojos";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "idojos";
$proto10["m_columns"][] = "ojos";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "cat_ojos";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "cat_ojos";
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
$proto0["m_srcTableName"]="cat_ojos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_ojos = createSqlQuery_cat_ojos();


	
		
	
$tdatacat_ojos[".sqlquery"] = $queryData_cat_ojos;

$tableEvents["cat_ojos"] = new eventsBase;
$tdatacat_ojos[".hasEvents"] = false;

?>