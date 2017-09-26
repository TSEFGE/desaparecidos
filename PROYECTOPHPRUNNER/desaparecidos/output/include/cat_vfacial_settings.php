<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacat_vfacial = array();	
	$tdatacat_vfacial[".truncateText"] = true;
	$tdatacat_vfacial[".NumberOfChars"] = 80; 
	$tdatacat_vfacial[".ShortName"] = "cat_vfacial";
	$tdatacat_vfacial[".OwnerID"] = "";
	$tdatacat_vfacial[".OriginalTable"] = "cat_vfacial";

//	field labels
$fieldLabelscat_vfacial = array();
$fieldToolTipscat_vfacial = array();
$pageTitlescat_vfacial = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_vfacial["Spanish"] = array();
	$fieldToolTipscat_vfacial["Spanish"] = array();
	$pageTitlescat_vfacial["Spanish"] = array();
	$fieldLabelscat_vfacial["Spanish"]["idvfacial"] = "Idvfacial";
	$fieldToolTipscat_vfacial["Spanish"]["idvfacial"] = "";
	$fieldLabelscat_vfacial["Spanish"]["vfacial"] = "Vfacial";
	$fieldToolTipscat_vfacial["Spanish"]["vfacial"] = "";
	if (count($fieldToolTipscat_vfacial["Spanish"]))
		$tdatacat_vfacial[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscat_vfacial[""] = array();
	$fieldToolTipscat_vfacial[""] = array();
	$pageTitlescat_vfacial[""] = array();
	if (count($fieldToolTipscat_vfacial[""]))
		$tdatacat_vfacial[".isUseToolTips"] = true;
}
	
	
	$tdatacat_vfacial[".NCSearch"] = true;



$tdatacat_vfacial[".shortTableName"] = "cat_vfacial";
$tdatacat_vfacial[".nSecOptions"] = 0;
$tdatacat_vfacial[".recsPerRowList"] = 1;
$tdatacat_vfacial[".recsPerRowPrint"] = 1;
$tdatacat_vfacial[".mainTableOwnerID"] = "";
$tdatacat_vfacial[".moveNext"] = 1;
$tdatacat_vfacial[".entityType"] = 0;

$tdatacat_vfacial[".strOriginalTableName"] = "cat_vfacial";




$tdatacat_vfacial[".showAddInPopup"] = false;

$tdatacat_vfacial[".showEditInPopup"] = false;

$tdatacat_vfacial[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacat_vfacial[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacat_vfacial[".fieldsForRegister"] = array();

$tdatacat_vfacial[".listAjax"] = false;

	$tdatacat_vfacial[".audit"] = false;

	$tdatacat_vfacial[".locking"] = false;

$tdatacat_vfacial[".edit"] = true;
$tdatacat_vfacial[".afterEditAction"] = 1;
$tdatacat_vfacial[".closePopupAfterEdit"] = 1;
$tdatacat_vfacial[".afterEditActionDetTable"] = "";

$tdatacat_vfacial[".add"] = true;
$tdatacat_vfacial[".afterAddAction"] = 1;
$tdatacat_vfacial[".closePopupAfterAdd"] = 1;
$tdatacat_vfacial[".afterAddActionDetTable"] = "";

$tdatacat_vfacial[".list"] = true;

$tdatacat_vfacial[".inlineEdit"] = true;
$tdatacat_vfacial[".inlineAdd"] = true;
$tdatacat_vfacial[".view"] = true;

$tdatacat_vfacial[".import"] = true;

$tdatacat_vfacial[".exportTo"] = true;

$tdatacat_vfacial[".printFriendly"] = true;

$tdatacat_vfacial[".delete"] = true;

$tdatacat_vfacial[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacat_vfacial[".searchSaving"] = false;
//

$tdatacat_vfacial[".showSearchPanel"] = true;
		$tdatacat_vfacial[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacat_vfacial[".isUseAjaxSuggest"] = false;
else 
	$tdatacat_vfacial[".isUseAjaxSuggest"] = true;

$tdatacat_vfacial[".rowHighlite"] = true;



$tdatacat_vfacial[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_vfacial[".isUseTimeForSearch"] = false;





$tdatacat_vfacial[".allSearchFields"] = array();
$tdatacat_vfacial[".filterFields"] = array();
$tdatacat_vfacial[".requiredSearchFields"] = array();

$tdatacat_vfacial[".allSearchFields"][] = "idvfacial";
	$tdatacat_vfacial[".allSearchFields"][] = "vfacial";
	

$tdatacat_vfacial[".googleLikeFields"] = array();
$tdatacat_vfacial[".googleLikeFields"][] = "idvfacial";
$tdatacat_vfacial[".googleLikeFields"][] = "vfacial";


$tdatacat_vfacial[".advSearchFields"] = array();
$tdatacat_vfacial[".advSearchFields"][] = "idvfacial";
$tdatacat_vfacial[".advSearchFields"][] = "vfacial";

$tdatacat_vfacial[".tableType"] = "list";

$tdatacat_vfacial[".printerPageOrientation"] = 0;
$tdatacat_vfacial[".nPrinterPageScale"] = 100;

$tdatacat_vfacial[".nPrinterSplitRecords"] = 40;

$tdatacat_vfacial[".nPrinterPDFSplitRecords"] = 40;



$tdatacat_vfacial[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatacat_vfacial[".pageSize"] = 20;

$tdatacat_vfacial[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacat_vfacial[".strOrderBy"] = $tstrOrderBy;

$tdatacat_vfacial[".orderindexes"] = array();

$tdatacat_vfacial[".sqlHead"] = "SELECT idvfacial,  	vfacial";
$tdatacat_vfacial[".sqlFrom"] = "FROM cat_vfacial";
$tdatacat_vfacial[".sqlWhereExpr"] = "";
$tdatacat_vfacial[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_vfacial[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_vfacial[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_vfacial[".highlightSearchResults"] = true;

$tableKeyscat_vfacial = array();
$tableKeyscat_vfacial[] = "idvfacial";
$tdatacat_vfacial[".Keys"] = $tableKeyscat_vfacial;

$tdatacat_vfacial[".listFields"] = array();
$tdatacat_vfacial[".listFields"][] = "idvfacial";
$tdatacat_vfacial[".listFields"][] = "vfacial";

$tdatacat_vfacial[".hideMobileList"] = array();


$tdatacat_vfacial[".viewFields"] = array();
$tdatacat_vfacial[".viewFields"][] = "idvfacial";
$tdatacat_vfacial[".viewFields"][] = "vfacial";

$tdatacat_vfacial[".addFields"] = array();
$tdatacat_vfacial[".addFields"][] = "vfacial";

$tdatacat_vfacial[".masterListFields"] = array();
$tdatacat_vfacial[".masterListFields"][] = "idvfacial";
$tdatacat_vfacial[".masterListFields"][] = "vfacial";

$tdatacat_vfacial[".inlineAddFields"] = array();
$tdatacat_vfacial[".inlineAddFields"][] = "vfacial";

$tdatacat_vfacial[".editFields"] = array();
$tdatacat_vfacial[".editFields"][] = "vfacial";

$tdatacat_vfacial[".inlineEditFields"] = array();
$tdatacat_vfacial[".inlineEditFields"][] = "vfacial";

$tdatacat_vfacial[".exportFields"] = array();
$tdatacat_vfacial[".exportFields"][] = "idvfacial";
$tdatacat_vfacial[".exportFields"][] = "vfacial";

$tdatacat_vfacial[".importFields"] = array();
$tdatacat_vfacial[".importFields"][] = "idvfacial";
$tdatacat_vfacial[".importFields"][] = "vfacial";

$tdatacat_vfacial[".printFields"] = array();
$tdatacat_vfacial[".printFields"][] = "idvfacial";
$tdatacat_vfacial[".printFields"][] = "vfacial";

//	idvfacial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idvfacial";
	$fdata["GoodName"] = "idvfacial";
	$fdata["ownerTable"] = "cat_vfacial";
	$fdata["Label"] = GetFieldLabel("cat_vfacial","idvfacial"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idvfacial"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idvfacial";
	
		
		
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

	

	
	$tdatacat_vfacial["idvfacial"] = $fdata;
//	vfacial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "vfacial";
	$fdata["GoodName"] = "vfacial";
	$fdata["ownerTable"] = "cat_vfacial";
	$fdata["Label"] = GetFieldLabel("cat_vfacial","vfacial"); 
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
	
		$fdata["strField"] = "vfacial"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vfacial";
	
		
		
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

	

	
	$tdatacat_vfacial["vfacial"] = $fdata;

	
$tables_data["cat_vfacial"]=&$tdatacat_vfacial;
$field_labels["cat_vfacial"] = &$fieldLabelscat_vfacial;
$fieldToolTips["cat_vfacial"] = &$fieldToolTipscat_vfacial;
$page_titles["cat_vfacial"] = &$pageTitlescat_vfacial;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cat_vfacial"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["cat_vfacial"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_cat_vfacial()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idvfacial,  	vfacial";
$proto0["m_strFrom"] = "FROM cat_vfacial";
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
	"m_strName" => "idvfacial",
	"m_strTable" => "cat_vfacial",
	"m_srcTableName" => "cat_vfacial"
));

$proto5["m_sql"] = "idvfacial";
$proto5["m_srcTableName"] = "cat_vfacial";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "vfacial",
	"m_strTable" => "cat_vfacial",
	"m_srcTableName" => "cat_vfacial"
));

$proto7["m_sql"] = "vfacial";
$proto7["m_srcTableName"] = "cat_vfacial";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "cat_vfacial";
$proto10["m_srcTableName"] = "cat_vfacial";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "idvfacial";
$proto10["m_columns"][] = "vfacial";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "cat_vfacial";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "cat_vfacial";
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
$proto0["m_srcTableName"]="cat_vfacial";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_vfacial = createSqlQuery_cat_vfacial();


	
		
	
$tdatacat_vfacial[".sqlquery"] = $queryData_cat_vfacial;

$tableEvents["cat_vfacial"] = new eventsBase;
$tdatacat_vfacial[".hasEvents"] = false;

?>