<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacat_comp = array();	
	$tdatacat_comp[".truncateText"] = true;
	$tdatacat_comp[".NumberOfChars"] = 80; 
	$tdatacat_comp[".ShortName"] = "cat_comp";
	$tdatacat_comp[".OwnerID"] = "";
	$tdatacat_comp[".OriginalTable"] = "cat_comp";

//	field labels
$fieldLabelscat_comp = array();
$fieldToolTipscat_comp = array();
$pageTitlescat_comp = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_comp["Spanish"] = array();
	$fieldToolTipscat_comp["Spanish"] = array();
	$pageTitlescat_comp["Spanish"] = array();
	$fieldLabelscat_comp["Spanish"]["idcomp"] = "Idcomp";
	$fieldToolTipscat_comp["Spanish"]["idcomp"] = "";
	$fieldLabelscat_comp["Spanish"]["complexion"] = "Complexion";
	$fieldToolTipscat_comp["Spanish"]["complexion"] = "";
	if (count($fieldToolTipscat_comp["Spanish"]))
		$tdatacat_comp[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscat_comp[""] = array();
	$fieldToolTipscat_comp[""] = array();
	$pageTitlescat_comp[""] = array();
	$fieldLabelscat_comp[""]["idcomp"] = "Idcomp";
	$fieldToolTipscat_comp[""]["idcomp"] = "";
	$fieldLabelscat_comp[""]["complexion"] = "Complexion";
	$fieldToolTipscat_comp[""]["complexion"] = "";
	if (count($fieldToolTipscat_comp[""]))
		$tdatacat_comp[".isUseToolTips"] = true;
}
	
	
	$tdatacat_comp[".NCSearch"] = true;



$tdatacat_comp[".shortTableName"] = "cat_comp";
$tdatacat_comp[".nSecOptions"] = 0;
$tdatacat_comp[".recsPerRowList"] = 1;
$tdatacat_comp[".recsPerRowPrint"] = 1;
$tdatacat_comp[".mainTableOwnerID"] = "";
$tdatacat_comp[".moveNext"] = 1;
$tdatacat_comp[".entityType"] = 0;

$tdatacat_comp[".strOriginalTableName"] = "cat_comp";




$tdatacat_comp[".showAddInPopup"] = false;

$tdatacat_comp[".showEditInPopup"] = false;

$tdatacat_comp[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacat_comp[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacat_comp[".fieldsForRegister"] = array();

$tdatacat_comp[".listAjax"] = false;

	$tdatacat_comp[".audit"] = false;

	$tdatacat_comp[".locking"] = false;









$tdatacat_comp[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacat_comp[".searchSaving"] = false;
//

$tdatacat_comp[".showSearchPanel"] = true;
		$tdatacat_comp[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacat_comp[".isUseAjaxSuggest"] = false;
else 
	$tdatacat_comp[".isUseAjaxSuggest"] = true;

$tdatacat_comp[".rowHighlite"] = true;



$tdatacat_comp[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_comp[".isUseTimeForSearch"] = false;





$tdatacat_comp[".allSearchFields"] = array();
$tdatacat_comp[".filterFields"] = array();
$tdatacat_comp[".requiredSearchFields"] = array();



$tdatacat_comp[".googleLikeFields"] = array();
$tdatacat_comp[".googleLikeFields"][] = "idcomp";
$tdatacat_comp[".googleLikeFields"][] = "complexion";


$tdatacat_comp[".advSearchFields"] = array();
$tdatacat_comp[".advSearchFields"][] = "idcomp";
$tdatacat_comp[".advSearchFields"][] = "complexion";

$tdatacat_comp[".tableType"] = "list";

$tdatacat_comp[".printerPageOrientation"] = 0;
$tdatacat_comp[".nPrinterPageScale"] = 100;

$tdatacat_comp[".nPrinterSplitRecords"] = 40;

$tdatacat_comp[".nPrinterPDFSplitRecords"] = 40;



$tdatacat_comp[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatacat_comp[".pageSize"] = 20;

$tdatacat_comp[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacat_comp[".strOrderBy"] = $tstrOrderBy;

$tdatacat_comp[".orderindexes"] = array();

$tdatacat_comp[".sqlHead"] = "SELECT idcomp,  	complexion";
$tdatacat_comp[".sqlFrom"] = "FROM cat_comp";
$tdatacat_comp[".sqlWhereExpr"] = "";
$tdatacat_comp[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_comp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_comp[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_comp[".highlightSearchResults"] = true;

$tableKeyscat_comp = array();
$tableKeyscat_comp[] = "idcomp";
$tdatacat_comp[".Keys"] = $tableKeyscat_comp;

$tdatacat_comp[".listFields"] = array();
$tdatacat_comp[".listFields"][] = "idcomp";
$tdatacat_comp[".listFields"][] = "complexion";

$tdatacat_comp[".hideMobileList"] = array();


$tdatacat_comp[".viewFields"] = array();
$tdatacat_comp[".viewFields"][] = "idcomp";
$tdatacat_comp[".viewFields"][] = "complexion";

$tdatacat_comp[".addFields"] = array();
$tdatacat_comp[".addFields"][] = "complexion";

$tdatacat_comp[".masterListFields"] = array();
$tdatacat_comp[".masterListFields"][] = "idcomp";
$tdatacat_comp[".masterListFields"][] = "complexion";

$tdatacat_comp[".inlineAddFields"] = array();
$tdatacat_comp[".inlineAddFields"][] = "complexion";

$tdatacat_comp[".editFields"] = array();
$tdatacat_comp[".editFields"][] = "complexion";

$tdatacat_comp[".inlineEditFields"] = array();
$tdatacat_comp[".inlineEditFields"][] = "complexion";

$tdatacat_comp[".exportFields"] = array();
$tdatacat_comp[".exportFields"][] = "idcomp";
$tdatacat_comp[".exportFields"][] = "complexion";

$tdatacat_comp[".importFields"] = array();
$tdatacat_comp[".importFields"][] = "idcomp";
$tdatacat_comp[".importFields"][] = "complexion";

$tdatacat_comp[".printFields"] = array();
$tdatacat_comp[".printFields"][] = "idcomp";
$tdatacat_comp[".printFields"][] = "complexion";

//	idcomp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idcomp";
	$fdata["GoodName"] = "idcomp";
	$fdata["ownerTable"] = "cat_comp";
	$fdata["Label"] = GetFieldLabel("cat_comp","idcomp"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idcomp"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idcomp";
	
		
		
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
	
	
	
	

	

	
	$tdatacat_comp["idcomp"] = $fdata;
//	complexion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "complexion";
	$fdata["GoodName"] = "complexion";
	$fdata["ownerTable"] = "cat_comp";
	$fdata["Label"] = GetFieldLabel("cat_comp","complexion"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "complexion"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "complexion";
	
		
		
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
	
	
	
	

	

	
	$tdatacat_comp["complexion"] = $fdata;

	
$tables_data["cat_comp"]=&$tdatacat_comp;
$field_labels["cat_comp"] = &$fieldLabelscat_comp;
$fieldToolTips["cat_comp"] = &$fieldToolTipscat_comp;
$page_titles["cat_comp"] = &$pageTitlescat_comp;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cat_comp"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["cat_comp"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_cat_comp()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idcomp,  	complexion";
$proto0["m_strFrom"] = "FROM cat_comp";
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
	"m_strName" => "idcomp",
	"m_strTable" => "cat_comp",
	"m_srcTableName" => "cat_comp"
));

$proto5["m_sql"] = "idcomp";
$proto5["m_srcTableName"] = "cat_comp";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "complexion",
	"m_strTable" => "cat_comp",
	"m_srcTableName" => "cat_comp"
));

$proto7["m_sql"] = "complexion";
$proto7["m_srcTableName"] = "cat_comp";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "cat_comp";
$proto10["m_srcTableName"] = "cat_comp";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "idcomp";
$proto10["m_columns"][] = "complexion";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "cat_comp";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "cat_comp";
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
$proto0["m_srcTableName"]="cat_comp";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_comp = createSqlQuery_cat_comp();


	
		
	
$tdatacat_comp[".sqlquery"] = $queryData_cat_comp;

$tableEvents["cat_comp"] = new eventsBase;
$tdatacat_comp[".hasEvents"] = false;

?>