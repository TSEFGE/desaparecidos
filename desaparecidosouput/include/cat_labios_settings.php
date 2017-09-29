<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacat_labios = array();	
	$tdatacat_labios[".truncateText"] = true;
	$tdatacat_labios[".NumberOfChars"] = 80; 
	$tdatacat_labios[".ShortName"] = "cat_labios";
	$tdatacat_labios[".OwnerID"] = "";
	$tdatacat_labios[".OriginalTable"] = "cat_labios";

//	field labels
$fieldLabelscat_labios = array();
$fieldToolTipscat_labios = array();
$pageTitlescat_labios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_labios["Spanish"] = array();
	$fieldToolTipscat_labios["Spanish"] = array();
	$pageTitlescat_labios["Spanish"] = array();
	$fieldLabelscat_labios["Spanish"]["idlabios"] = "Idlabios";
	$fieldToolTipscat_labios["Spanish"]["idlabios"] = "";
	$fieldLabelscat_labios["Spanish"]["labios"] = "Labios";
	$fieldToolTipscat_labios["Spanish"]["labios"] = "";
	if (count($fieldToolTipscat_labios["Spanish"]))
		$tdatacat_labios[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscat_labios[""] = array();
	$fieldToolTipscat_labios[""] = array();
	$pageTitlescat_labios[""] = array();
	$fieldLabelscat_labios[""]["idlabios"] = "Idlabios";
	$fieldToolTipscat_labios[""]["idlabios"] = "";
	$fieldLabelscat_labios[""]["labios"] = "Labios";
	$fieldToolTipscat_labios[""]["labios"] = "";
	if (count($fieldToolTipscat_labios[""]))
		$tdatacat_labios[".isUseToolTips"] = true;
}
	
	
	$tdatacat_labios[".NCSearch"] = true;



$tdatacat_labios[".shortTableName"] = "cat_labios";
$tdatacat_labios[".nSecOptions"] = 0;
$tdatacat_labios[".recsPerRowList"] = 1;
$tdatacat_labios[".recsPerRowPrint"] = 1;
$tdatacat_labios[".mainTableOwnerID"] = "";
$tdatacat_labios[".moveNext"] = 1;
$tdatacat_labios[".entityType"] = 0;

$tdatacat_labios[".strOriginalTableName"] = "cat_labios";




$tdatacat_labios[".showAddInPopup"] = false;

$tdatacat_labios[".showEditInPopup"] = false;

$tdatacat_labios[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacat_labios[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacat_labios[".fieldsForRegister"] = array();

$tdatacat_labios[".listAjax"] = false;

	$tdatacat_labios[".audit"] = false;

	$tdatacat_labios[".locking"] = false;









$tdatacat_labios[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacat_labios[".searchSaving"] = false;
//

$tdatacat_labios[".showSearchPanel"] = true;
		$tdatacat_labios[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacat_labios[".isUseAjaxSuggest"] = false;
else 
	$tdatacat_labios[".isUseAjaxSuggest"] = true;

$tdatacat_labios[".rowHighlite"] = true;



$tdatacat_labios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_labios[".isUseTimeForSearch"] = false;





$tdatacat_labios[".allSearchFields"] = array();
$tdatacat_labios[".filterFields"] = array();
$tdatacat_labios[".requiredSearchFields"] = array();



$tdatacat_labios[".googleLikeFields"] = array();
$tdatacat_labios[".googleLikeFields"][] = "idlabios";
$tdatacat_labios[".googleLikeFields"][] = "labios";


$tdatacat_labios[".advSearchFields"] = array();
$tdatacat_labios[".advSearchFields"][] = "idlabios";
$tdatacat_labios[".advSearchFields"][] = "labios";

$tdatacat_labios[".tableType"] = "list";

$tdatacat_labios[".printerPageOrientation"] = 0;
$tdatacat_labios[".nPrinterPageScale"] = 100;

$tdatacat_labios[".nPrinterSplitRecords"] = 40;

$tdatacat_labios[".nPrinterPDFSplitRecords"] = 40;



$tdatacat_labios[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatacat_labios[".pageSize"] = 20;

$tdatacat_labios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacat_labios[".strOrderBy"] = $tstrOrderBy;

$tdatacat_labios[".orderindexes"] = array();

$tdatacat_labios[".sqlHead"] = "SELECT idlabios,  	labios";
$tdatacat_labios[".sqlFrom"] = "FROM cat_labios";
$tdatacat_labios[".sqlWhereExpr"] = "";
$tdatacat_labios[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_labios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_labios[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_labios[".highlightSearchResults"] = true;

$tableKeyscat_labios = array();
$tableKeyscat_labios[] = "idlabios";
$tdatacat_labios[".Keys"] = $tableKeyscat_labios;

$tdatacat_labios[".listFields"] = array();
$tdatacat_labios[".listFields"][] = "idlabios";
$tdatacat_labios[".listFields"][] = "labios";

$tdatacat_labios[".hideMobileList"] = array();


$tdatacat_labios[".viewFields"] = array();
$tdatacat_labios[".viewFields"][] = "idlabios";
$tdatacat_labios[".viewFields"][] = "labios";

$tdatacat_labios[".addFields"] = array();
$tdatacat_labios[".addFields"][] = "labios";

$tdatacat_labios[".masterListFields"] = array();
$tdatacat_labios[".masterListFields"][] = "idlabios";
$tdatacat_labios[".masterListFields"][] = "labios";

$tdatacat_labios[".inlineAddFields"] = array();
$tdatacat_labios[".inlineAddFields"][] = "labios";

$tdatacat_labios[".editFields"] = array();
$tdatacat_labios[".editFields"][] = "labios";

$tdatacat_labios[".inlineEditFields"] = array();
$tdatacat_labios[".inlineEditFields"][] = "labios";

$tdatacat_labios[".exportFields"] = array();
$tdatacat_labios[".exportFields"][] = "idlabios";
$tdatacat_labios[".exportFields"][] = "labios";

$tdatacat_labios[".importFields"] = array();
$tdatacat_labios[".importFields"][] = "idlabios";
$tdatacat_labios[".importFields"][] = "labios";

$tdatacat_labios[".printFields"] = array();
$tdatacat_labios[".printFields"][] = "idlabios";
$tdatacat_labios[".printFields"][] = "labios";

//	idlabios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idlabios";
	$fdata["GoodName"] = "idlabios";
	$fdata["ownerTable"] = "cat_labios";
	$fdata["Label"] = GetFieldLabel("cat_labios","idlabios"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idlabios"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idlabios";
	
		
		
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
	
	
	
	

	

	
	$tdatacat_labios["idlabios"] = $fdata;
//	labios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "labios";
	$fdata["GoodName"] = "labios";
	$fdata["ownerTable"] = "cat_labios";
	$fdata["Label"] = GetFieldLabel("cat_labios","labios"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "labios"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "labios";
	
		
		
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
	
	
	
	

	

	
	$tdatacat_labios["labios"] = $fdata;

	
$tables_data["cat_labios"]=&$tdatacat_labios;
$field_labels["cat_labios"] = &$fieldLabelscat_labios;
$fieldToolTips["cat_labios"] = &$fieldToolTipscat_labios;
$page_titles["cat_labios"] = &$pageTitlescat_labios;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cat_labios"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["cat_labios"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_cat_labios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idlabios,  	labios";
$proto0["m_strFrom"] = "FROM cat_labios";
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
	"m_strName" => "idlabios",
	"m_strTable" => "cat_labios",
	"m_srcTableName" => "cat_labios"
));

$proto5["m_sql"] = "idlabios";
$proto5["m_srcTableName"] = "cat_labios";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "labios",
	"m_strTable" => "cat_labios",
	"m_srcTableName" => "cat_labios"
));

$proto7["m_sql"] = "labios";
$proto7["m_srcTableName"] = "cat_labios";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "cat_labios";
$proto10["m_srcTableName"] = "cat_labios";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "idlabios";
$proto10["m_columns"][] = "labios";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "cat_labios";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "cat_labios";
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
$proto0["m_srcTableName"]="cat_labios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_labios = createSqlQuery_cat_labios();


	
		
	
$tdatacat_labios[".sqlquery"] = $queryData_cat_labios;

$tableEvents["cat_labios"] = new eventsBase;
$tdatacat_labios[".hasEvents"] = false;

?>