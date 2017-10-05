<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacat_cabtip = array();	
	$tdatacat_cabtip[".truncateText"] = true;
	$tdatacat_cabtip[".NumberOfChars"] = 80; 
	$tdatacat_cabtip[".ShortName"] = "cat_cabtip";
	$tdatacat_cabtip[".OwnerID"] = "";
	$tdatacat_cabtip[".OriginalTable"] = "cat_cabtip";

//	field labels
$fieldLabelscat_cabtip = array();
$fieldToolTipscat_cabtip = array();
$pageTitlescat_cabtip = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_cabtip["Spanish"] = array();
	$fieldToolTipscat_cabtip["Spanish"] = array();
	$pageTitlescat_cabtip["Spanish"] = array();
	$fieldLabelscat_cabtip["Spanish"]["idcabtip"] = "Idcabtip";
	$fieldToolTipscat_cabtip["Spanish"]["idcabtip"] = "";
	$fieldLabelscat_cabtip["Spanish"]["cabtip"] = "Cabtip";
	$fieldToolTipscat_cabtip["Spanish"]["cabtip"] = "";
	if (count($fieldToolTipscat_cabtip["Spanish"]))
		$tdatacat_cabtip[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscat_cabtip[""] = array();
	$fieldToolTipscat_cabtip[""] = array();
	$pageTitlescat_cabtip[""] = array();
	if (count($fieldToolTipscat_cabtip[""]))
		$tdatacat_cabtip[".isUseToolTips"] = true;
}
	
	
	$tdatacat_cabtip[".NCSearch"] = true;



$tdatacat_cabtip[".shortTableName"] = "cat_cabtip";
$tdatacat_cabtip[".nSecOptions"] = 0;
$tdatacat_cabtip[".recsPerRowList"] = 1;
$tdatacat_cabtip[".recsPerRowPrint"] = 1;
$tdatacat_cabtip[".mainTableOwnerID"] = "";
$tdatacat_cabtip[".moveNext"] = 1;
$tdatacat_cabtip[".entityType"] = 0;

$tdatacat_cabtip[".strOriginalTableName"] = "cat_cabtip";




$tdatacat_cabtip[".showAddInPopup"] = false;

$tdatacat_cabtip[".showEditInPopup"] = false;

$tdatacat_cabtip[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacat_cabtip[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacat_cabtip[".fieldsForRegister"] = array();

$tdatacat_cabtip[".listAjax"] = false;

	$tdatacat_cabtip[".audit"] = false;

	$tdatacat_cabtip[".locking"] = false;









$tdatacat_cabtip[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacat_cabtip[".searchSaving"] = false;
//

$tdatacat_cabtip[".showSearchPanel"] = true;
		$tdatacat_cabtip[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacat_cabtip[".isUseAjaxSuggest"] = false;
else 
	$tdatacat_cabtip[".isUseAjaxSuggest"] = true;

$tdatacat_cabtip[".rowHighlite"] = true;



$tdatacat_cabtip[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_cabtip[".isUseTimeForSearch"] = false;





$tdatacat_cabtip[".allSearchFields"] = array();
$tdatacat_cabtip[".filterFields"] = array();
$tdatacat_cabtip[".requiredSearchFields"] = array();

$tdatacat_cabtip[".allSearchFields"][] = "idcabtip";
	$tdatacat_cabtip[".allSearchFields"][] = "cabtip";
	

$tdatacat_cabtip[".googleLikeFields"] = array();
$tdatacat_cabtip[".googleLikeFields"][] = "idcabtip";
$tdatacat_cabtip[".googleLikeFields"][] = "cabtip";


$tdatacat_cabtip[".advSearchFields"] = array();
$tdatacat_cabtip[".advSearchFields"][] = "idcabtip";
$tdatacat_cabtip[".advSearchFields"][] = "cabtip";

$tdatacat_cabtip[".tableType"] = "list";

$tdatacat_cabtip[".printerPageOrientation"] = 0;
$tdatacat_cabtip[".nPrinterPageScale"] = 100;

$tdatacat_cabtip[".nPrinterSplitRecords"] = 40;

$tdatacat_cabtip[".nPrinterPDFSplitRecords"] = 40;



$tdatacat_cabtip[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatacat_cabtip[".pageSize"] = 20;

$tdatacat_cabtip[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacat_cabtip[".strOrderBy"] = $tstrOrderBy;

$tdatacat_cabtip[".orderindexes"] = array();

$tdatacat_cabtip[".sqlHead"] = "SELECT idcabtip,  	cabtip";
$tdatacat_cabtip[".sqlFrom"] = "FROM cat_cabtip";
$tdatacat_cabtip[".sqlWhereExpr"] = "";
$tdatacat_cabtip[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_cabtip[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_cabtip[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_cabtip[".highlightSearchResults"] = true;

$tableKeyscat_cabtip = array();
$tableKeyscat_cabtip[] = "idcabtip";
$tdatacat_cabtip[".Keys"] = $tableKeyscat_cabtip;

$tdatacat_cabtip[".listFields"] = array();
$tdatacat_cabtip[".listFields"][] = "idcabtip";
$tdatacat_cabtip[".listFields"][] = "cabtip";

$tdatacat_cabtip[".hideMobileList"] = array();


$tdatacat_cabtip[".viewFields"] = array();
$tdatacat_cabtip[".viewFields"][] = "idcabtip";
$tdatacat_cabtip[".viewFields"][] = "cabtip";

$tdatacat_cabtip[".addFields"] = array();
$tdatacat_cabtip[".addFields"][] = "cabtip";

$tdatacat_cabtip[".masterListFields"] = array();
$tdatacat_cabtip[".masterListFields"][] = "idcabtip";
$tdatacat_cabtip[".masterListFields"][] = "cabtip";

$tdatacat_cabtip[".inlineAddFields"] = array();
$tdatacat_cabtip[".inlineAddFields"][] = "cabtip";

$tdatacat_cabtip[".editFields"] = array();
$tdatacat_cabtip[".editFields"][] = "cabtip";

$tdatacat_cabtip[".inlineEditFields"] = array();
$tdatacat_cabtip[".inlineEditFields"][] = "cabtip";

$tdatacat_cabtip[".exportFields"] = array();
$tdatacat_cabtip[".exportFields"][] = "idcabtip";
$tdatacat_cabtip[".exportFields"][] = "cabtip";

$tdatacat_cabtip[".importFields"] = array();
$tdatacat_cabtip[".importFields"][] = "idcabtip";
$tdatacat_cabtip[".importFields"][] = "cabtip";

$tdatacat_cabtip[".printFields"] = array();
$tdatacat_cabtip[".printFields"][] = "idcabtip";
$tdatacat_cabtip[".printFields"][] = "cabtip";

//	idcabtip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idcabtip";
	$fdata["GoodName"] = "idcabtip";
	$fdata["ownerTable"] = "cat_cabtip";
	$fdata["Label"] = GetFieldLabel("cat_cabtip","idcabtip"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idcabtip"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idcabtip";
	
		
		
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

	

	
	$tdatacat_cabtip["idcabtip"] = $fdata;
//	cabtip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cabtip";
	$fdata["GoodName"] = "cabtip";
	$fdata["ownerTable"] = "cat_cabtip";
	$fdata["Label"] = GetFieldLabel("cat_cabtip","cabtip"); 
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
	
		$fdata["strField"] = "cabtip"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cabtip";
	
		
		
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

	

	
	$tdatacat_cabtip["cabtip"] = $fdata;

	
$tables_data["cat_cabtip"]=&$tdatacat_cabtip;
$field_labels["cat_cabtip"] = &$fieldLabelscat_cabtip;
$fieldToolTips["cat_cabtip"] = &$fieldToolTipscat_cabtip;
$page_titles["cat_cabtip"] = &$pageTitlescat_cabtip;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cat_cabtip"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["cat_cabtip"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_cat_cabtip()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idcabtip,  	cabtip";
$proto0["m_strFrom"] = "FROM cat_cabtip";
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
	"m_strName" => "idcabtip",
	"m_strTable" => "cat_cabtip",
	"m_srcTableName" => "cat_cabtip"
));

$proto5["m_sql"] = "idcabtip";
$proto5["m_srcTableName"] = "cat_cabtip";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "cabtip",
	"m_strTable" => "cat_cabtip",
	"m_srcTableName" => "cat_cabtip"
));

$proto7["m_sql"] = "cabtip";
$proto7["m_srcTableName"] = "cat_cabtip";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "cat_cabtip";
$proto10["m_srcTableName"] = "cat_cabtip";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "idcabtip";
$proto10["m_columns"][] = "cabtip";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "cat_cabtip";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "cat_cabtip";
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
$proto0["m_srcTableName"]="cat_cabtip";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_cabtip = createSqlQuery_cat_cabtip();


	
		
	
$tdatacat_cabtip[".sqlquery"] = $queryData_cat_cabtip;

$tableEvents["cat_cabtip"] = new eventsBase;
$tdatacat_cabtip[".hasEvents"] = false;

?>