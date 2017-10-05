<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacat_estatus = array();	
	$tdatacat_estatus[".truncateText"] = true;
	$tdatacat_estatus[".NumberOfChars"] = 80; 
	$tdatacat_estatus[".ShortName"] = "cat_estatus";
	$tdatacat_estatus[".OwnerID"] = "";
	$tdatacat_estatus[".OriginalTable"] = "cat_estatus";

//	field labels
$fieldLabelscat_estatus = array();
$fieldToolTipscat_estatus = array();
$pageTitlescat_estatus = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_estatus["Spanish"] = array();
	$fieldToolTipscat_estatus["Spanish"] = array();
	$pageTitlescat_estatus["Spanish"] = array();
	$fieldLabelscat_estatus["Spanish"]["id"] = "Id";
	$fieldToolTipscat_estatus["Spanish"]["id"] = "";
	$fieldLabelscat_estatus["Spanish"]["estatus"] = "Estatus";
	$fieldToolTipscat_estatus["Spanish"]["estatus"] = "";
	if (count($fieldToolTipscat_estatus["Spanish"]))
		$tdatacat_estatus[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscat_estatus[""] = array();
	$fieldToolTipscat_estatus[""] = array();
	$pageTitlescat_estatus[""] = array();
	if (count($fieldToolTipscat_estatus[""]))
		$tdatacat_estatus[".isUseToolTips"] = true;
}
	
	
	$tdatacat_estatus[".NCSearch"] = true;



$tdatacat_estatus[".shortTableName"] = "cat_estatus";
$tdatacat_estatus[".nSecOptions"] = 0;
$tdatacat_estatus[".recsPerRowList"] = 1;
$tdatacat_estatus[".recsPerRowPrint"] = 1;
$tdatacat_estatus[".mainTableOwnerID"] = "";
$tdatacat_estatus[".moveNext"] = 1;
$tdatacat_estatus[".entityType"] = 0;

$tdatacat_estatus[".strOriginalTableName"] = "cat_estatus";




$tdatacat_estatus[".showAddInPopup"] = false;

$tdatacat_estatus[".showEditInPopup"] = false;

$tdatacat_estatus[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacat_estatus[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacat_estatus[".fieldsForRegister"] = array();

$tdatacat_estatus[".listAjax"] = false;

	$tdatacat_estatus[".audit"] = false;

	$tdatacat_estatus[".locking"] = false;









$tdatacat_estatus[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacat_estatus[".searchSaving"] = false;
//

$tdatacat_estatus[".showSearchPanel"] = true;
		$tdatacat_estatus[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacat_estatus[".isUseAjaxSuggest"] = false;
else 
	$tdatacat_estatus[".isUseAjaxSuggest"] = true;

$tdatacat_estatus[".rowHighlite"] = true;



$tdatacat_estatus[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_estatus[".isUseTimeForSearch"] = false;





$tdatacat_estatus[".allSearchFields"] = array();
$tdatacat_estatus[".filterFields"] = array();
$tdatacat_estatus[".requiredSearchFields"] = array();

$tdatacat_estatus[".allSearchFields"][] = "id";
	$tdatacat_estatus[".allSearchFields"][] = "estatus";
	

$tdatacat_estatus[".googleLikeFields"] = array();
$tdatacat_estatus[".googleLikeFields"][] = "id";
$tdatacat_estatus[".googleLikeFields"][] = "estatus";


$tdatacat_estatus[".advSearchFields"] = array();
$tdatacat_estatus[".advSearchFields"][] = "id";
$tdatacat_estatus[".advSearchFields"][] = "estatus";

$tdatacat_estatus[".tableType"] = "list";

$tdatacat_estatus[".printerPageOrientation"] = 0;
$tdatacat_estatus[".nPrinterPageScale"] = 100;

$tdatacat_estatus[".nPrinterSplitRecords"] = 40;

$tdatacat_estatus[".nPrinterPDFSplitRecords"] = 40;



$tdatacat_estatus[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatacat_estatus[".pageSize"] = 20;

$tdatacat_estatus[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacat_estatus[".strOrderBy"] = $tstrOrderBy;

$tdatacat_estatus[".orderindexes"] = array();

$tdatacat_estatus[".sqlHead"] = "SELECT id,  	estatus";
$tdatacat_estatus[".sqlFrom"] = "FROM cat_estatus";
$tdatacat_estatus[".sqlWhereExpr"] = "";
$tdatacat_estatus[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_estatus[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_estatus[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_estatus[".highlightSearchResults"] = true;

$tableKeyscat_estatus = array();
$tableKeyscat_estatus[] = "id";
$tdatacat_estatus[".Keys"] = $tableKeyscat_estatus;

$tdatacat_estatus[".listFields"] = array();
$tdatacat_estatus[".listFields"][] = "id";
$tdatacat_estatus[".listFields"][] = "estatus";

$tdatacat_estatus[".hideMobileList"] = array();


$tdatacat_estatus[".viewFields"] = array();
$tdatacat_estatus[".viewFields"][] = "id";
$tdatacat_estatus[".viewFields"][] = "estatus";

$tdatacat_estatus[".addFields"] = array();
$tdatacat_estatus[".addFields"][] = "estatus";

$tdatacat_estatus[".masterListFields"] = array();
$tdatacat_estatus[".masterListFields"][] = "id";
$tdatacat_estatus[".masterListFields"][] = "estatus";

$tdatacat_estatus[".inlineAddFields"] = array();
$tdatacat_estatus[".inlineAddFields"][] = "estatus";

$tdatacat_estatus[".editFields"] = array();
$tdatacat_estatus[".editFields"][] = "estatus";

$tdatacat_estatus[".inlineEditFields"] = array();
$tdatacat_estatus[".inlineEditFields"][] = "estatus";

$tdatacat_estatus[".exportFields"] = array();
$tdatacat_estatus[".exportFields"][] = "id";
$tdatacat_estatus[".exportFields"][] = "estatus";

$tdatacat_estatus[".importFields"] = array();
$tdatacat_estatus[".importFields"][] = "id";
$tdatacat_estatus[".importFields"][] = "estatus";

$tdatacat_estatus[".printFields"] = array();
$tdatacat_estatus[".printFields"][] = "id";
$tdatacat_estatus[".printFields"][] = "estatus";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "cat_estatus";
	$fdata["Label"] = GetFieldLabel("cat_estatus","id"); 
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

	

	
	$tdatacat_estatus["id"] = $fdata;
//	estatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "estatus";
	$fdata["GoodName"] = "estatus";
	$fdata["ownerTable"] = "cat_estatus";
	$fdata["Label"] = GetFieldLabel("cat_estatus","estatus"); 
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
	
		$fdata["strField"] = "estatus"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estatus";
	
		
		
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
			$edata["EditParams"].= " maxlength=200";
	
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

	

	
	$tdatacat_estatus["estatus"] = $fdata;

	
$tables_data["cat_estatus"]=&$tdatacat_estatus;
$field_labels["cat_estatus"] = &$fieldLabelscat_estatus;
$fieldToolTips["cat_estatus"] = &$fieldToolTipscat_estatus;
$page_titles["cat_estatus"] = &$pageTitlescat_estatus;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cat_estatus"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["cat_estatus"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_cat_estatus()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	estatus";
$proto0["m_strFrom"] = "FROM cat_estatus";
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
	"m_strTable" => "cat_estatus",
	"m_srcTableName" => "cat_estatus"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "cat_estatus";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "estatus",
	"m_strTable" => "cat_estatus",
	"m_srcTableName" => "cat_estatus"
));

$proto7["m_sql"] = "estatus";
$proto7["m_srcTableName"] = "cat_estatus";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "cat_estatus";
$proto10["m_srcTableName"] = "cat_estatus";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "id";
$proto10["m_columns"][] = "estatus";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "cat_estatus";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "cat_estatus";
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
$proto0["m_srcTableName"]="cat_estatus";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_estatus = createSqlQuery_cat_estatus();


	
		
	
$tdatacat_estatus[".sqlquery"] = $queryData_cat_estatus;

$tableEvents["cat_estatus"] = new eventsBase;
$tdatacat_estatus[".hasEvents"] = false;

?>