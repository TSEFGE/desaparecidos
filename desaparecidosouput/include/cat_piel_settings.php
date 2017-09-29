<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacat_piel = array();	
	$tdatacat_piel[".truncateText"] = true;
	$tdatacat_piel[".NumberOfChars"] = 80; 
	$tdatacat_piel[".ShortName"] = "cat_piel";
	$tdatacat_piel[".OwnerID"] = "";
	$tdatacat_piel[".OriginalTable"] = "cat_piel";

//	field labels
$fieldLabelscat_piel = array();
$fieldToolTipscat_piel = array();
$pageTitlescat_piel = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_piel["Spanish"] = array();
	$fieldToolTipscat_piel["Spanish"] = array();
	$pageTitlescat_piel["Spanish"] = array();
	$fieldLabelscat_piel["Spanish"]["idpiel"] = "Idpiel";
	$fieldToolTipscat_piel["Spanish"]["idpiel"] = "";
	$fieldLabelscat_piel["Spanish"]["piel"] = "Piel";
	$fieldToolTipscat_piel["Spanish"]["piel"] = "";
	if (count($fieldToolTipscat_piel["Spanish"]))
		$tdatacat_piel[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscat_piel[""] = array();
	$fieldToolTipscat_piel[""] = array();
	$pageTitlescat_piel[""] = array();
	$fieldLabelscat_piel[""]["idpiel"] = "Idpiel";
	$fieldToolTipscat_piel[""]["idpiel"] = "";
	$fieldLabelscat_piel[""]["piel"] = "Piel";
	$fieldToolTipscat_piel[""]["piel"] = "";
	if (count($fieldToolTipscat_piel[""]))
		$tdatacat_piel[".isUseToolTips"] = true;
}
	
	
	$tdatacat_piel[".NCSearch"] = true;



$tdatacat_piel[".shortTableName"] = "cat_piel";
$tdatacat_piel[".nSecOptions"] = 0;
$tdatacat_piel[".recsPerRowList"] = 1;
$tdatacat_piel[".recsPerRowPrint"] = 1;
$tdatacat_piel[".mainTableOwnerID"] = "";
$tdatacat_piel[".moveNext"] = 1;
$tdatacat_piel[".entityType"] = 0;

$tdatacat_piel[".strOriginalTableName"] = "cat_piel";




$tdatacat_piel[".showAddInPopup"] = false;

$tdatacat_piel[".showEditInPopup"] = false;

$tdatacat_piel[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacat_piel[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacat_piel[".fieldsForRegister"] = array();

$tdatacat_piel[".listAjax"] = false;

	$tdatacat_piel[".audit"] = false;

	$tdatacat_piel[".locking"] = false;









$tdatacat_piel[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacat_piel[".searchSaving"] = false;
//

$tdatacat_piel[".showSearchPanel"] = true;
		$tdatacat_piel[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacat_piel[".isUseAjaxSuggest"] = false;
else 
	$tdatacat_piel[".isUseAjaxSuggest"] = true;

$tdatacat_piel[".rowHighlite"] = true;



$tdatacat_piel[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_piel[".isUseTimeForSearch"] = false;





$tdatacat_piel[".allSearchFields"] = array();
$tdatacat_piel[".filterFields"] = array();
$tdatacat_piel[".requiredSearchFields"] = array();



$tdatacat_piel[".googleLikeFields"] = array();
$tdatacat_piel[".googleLikeFields"][] = "idpiel";
$tdatacat_piel[".googleLikeFields"][] = "piel";


$tdatacat_piel[".advSearchFields"] = array();
$tdatacat_piel[".advSearchFields"][] = "idpiel";
$tdatacat_piel[".advSearchFields"][] = "piel";

$tdatacat_piel[".tableType"] = "list";

$tdatacat_piel[".printerPageOrientation"] = 0;
$tdatacat_piel[".nPrinterPageScale"] = 100;

$tdatacat_piel[".nPrinterSplitRecords"] = 40;

$tdatacat_piel[".nPrinterPDFSplitRecords"] = 40;



$tdatacat_piel[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatacat_piel[".pageSize"] = 20;

$tdatacat_piel[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacat_piel[".strOrderBy"] = $tstrOrderBy;

$tdatacat_piel[".orderindexes"] = array();

$tdatacat_piel[".sqlHead"] = "SELECT idpiel,  	piel";
$tdatacat_piel[".sqlFrom"] = "FROM cat_piel";
$tdatacat_piel[".sqlWhereExpr"] = "";
$tdatacat_piel[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_piel[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_piel[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_piel[".highlightSearchResults"] = true;

$tableKeyscat_piel = array();
$tableKeyscat_piel[] = "idpiel";
$tdatacat_piel[".Keys"] = $tableKeyscat_piel;

$tdatacat_piel[".listFields"] = array();
$tdatacat_piel[".listFields"][] = "idpiel";
$tdatacat_piel[".listFields"][] = "piel";

$tdatacat_piel[".hideMobileList"] = array();


$tdatacat_piel[".viewFields"] = array();
$tdatacat_piel[".viewFields"][] = "idpiel";
$tdatacat_piel[".viewFields"][] = "piel";

$tdatacat_piel[".addFields"] = array();
$tdatacat_piel[".addFields"][] = "piel";

$tdatacat_piel[".masterListFields"] = array();
$tdatacat_piel[".masterListFields"][] = "idpiel";
$tdatacat_piel[".masterListFields"][] = "piel";

$tdatacat_piel[".inlineAddFields"] = array();
$tdatacat_piel[".inlineAddFields"][] = "piel";

$tdatacat_piel[".editFields"] = array();
$tdatacat_piel[".editFields"][] = "piel";

$tdatacat_piel[".inlineEditFields"] = array();
$tdatacat_piel[".inlineEditFields"][] = "piel";

$tdatacat_piel[".exportFields"] = array();
$tdatacat_piel[".exportFields"][] = "idpiel";
$tdatacat_piel[".exportFields"][] = "piel";

$tdatacat_piel[".importFields"] = array();
$tdatacat_piel[".importFields"][] = "idpiel";
$tdatacat_piel[".importFields"][] = "piel";

$tdatacat_piel[".printFields"] = array();
$tdatacat_piel[".printFields"][] = "idpiel";
$tdatacat_piel[".printFields"][] = "piel";

//	idpiel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idpiel";
	$fdata["GoodName"] = "idpiel";
	$fdata["ownerTable"] = "cat_piel";
	$fdata["Label"] = GetFieldLabel("cat_piel","idpiel"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idpiel"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idpiel";
	
		
		
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
	
	
	
	

	

	
	$tdatacat_piel["idpiel"] = $fdata;
//	piel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "piel";
	$fdata["GoodName"] = "piel";
	$fdata["ownerTable"] = "cat_piel";
	$fdata["Label"] = GetFieldLabel("cat_piel","piel"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "piel"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "piel";
	
		
		
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
	
	
	
	

	

	
	$tdatacat_piel["piel"] = $fdata;

	
$tables_data["cat_piel"]=&$tdatacat_piel;
$field_labels["cat_piel"] = &$fieldLabelscat_piel;
$fieldToolTips["cat_piel"] = &$fieldToolTipscat_piel;
$page_titles["cat_piel"] = &$pageTitlescat_piel;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cat_piel"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["cat_piel"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_cat_piel()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idpiel,  	piel";
$proto0["m_strFrom"] = "FROM cat_piel";
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
	"m_strName" => "idpiel",
	"m_strTable" => "cat_piel",
	"m_srcTableName" => "cat_piel"
));

$proto5["m_sql"] = "idpiel";
$proto5["m_srcTableName"] = "cat_piel";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "piel",
	"m_strTable" => "cat_piel",
	"m_srcTableName" => "cat_piel"
));

$proto7["m_sql"] = "piel";
$proto7["m_srcTableName"] = "cat_piel";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "cat_piel";
$proto10["m_srcTableName"] = "cat_piel";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "idpiel";
$proto10["m_columns"][] = "piel";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "cat_piel";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "cat_piel";
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
$proto0["m_srcTableName"]="cat_piel";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_piel = createSqlQuery_cat_piel();


	
		
	
$tdatacat_piel[".sqlquery"] = $queryData_cat_piel;

$tableEvents["cat_piel"] = new eventsBase;
$tdatacat_piel[".hasEvents"] = false;

?>