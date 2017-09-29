<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacat_cabcol = array();	
	$tdatacat_cabcol[".truncateText"] = true;
	$tdatacat_cabcol[".NumberOfChars"] = 80; 
	$tdatacat_cabcol[".ShortName"] = "cat_cabcol";
	$tdatacat_cabcol[".OwnerID"] = "";
	$tdatacat_cabcol[".OriginalTable"] = "cat_cabcol";

//	field labels
$fieldLabelscat_cabcol = array();
$fieldToolTipscat_cabcol = array();
$pageTitlescat_cabcol = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_cabcol["Spanish"] = array();
	$fieldToolTipscat_cabcol["Spanish"] = array();
	$pageTitlescat_cabcol["Spanish"] = array();
	$fieldLabelscat_cabcol["Spanish"]["idcabcol"] = "Idcabcol";
	$fieldToolTipscat_cabcol["Spanish"]["idcabcol"] = "";
	$fieldLabelscat_cabcol["Spanish"]["cabcol"] = "Cabcol";
	$fieldToolTipscat_cabcol["Spanish"]["cabcol"] = "";
	if (count($fieldToolTipscat_cabcol["Spanish"]))
		$tdatacat_cabcol[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscat_cabcol[""] = array();
	$fieldToolTipscat_cabcol[""] = array();
	$pageTitlescat_cabcol[""] = array();
	$fieldLabelscat_cabcol[""]["idcabcol"] = "Idcabcol";
	$fieldToolTipscat_cabcol[""]["idcabcol"] = "";
	$fieldLabelscat_cabcol[""]["cabcol"] = "Cabcol";
	$fieldToolTipscat_cabcol[""]["cabcol"] = "";
	if (count($fieldToolTipscat_cabcol[""]))
		$tdatacat_cabcol[".isUseToolTips"] = true;
}
	
	
	$tdatacat_cabcol[".NCSearch"] = true;



$tdatacat_cabcol[".shortTableName"] = "cat_cabcol";
$tdatacat_cabcol[".nSecOptions"] = 0;
$tdatacat_cabcol[".recsPerRowList"] = 1;
$tdatacat_cabcol[".recsPerRowPrint"] = 1;
$tdatacat_cabcol[".mainTableOwnerID"] = "";
$tdatacat_cabcol[".moveNext"] = 1;
$tdatacat_cabcol[".entityType"] = 0;

$tdatacat_cabcol[".strOriginalTableName"] = "cat_cabcol";




$tdatacat_cabcol[".showAddInPopup"] = false;

$tdatacat_cabcol[".showEditInPopup"] = false;

$tdatacat_cabcol[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacat_cabcol[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacat_cabcol[".fieldsForRegister"] = array();

$tdatacat_cabcol[".listAjax"] = false;

	$tdatacat_cabcol[".audit"] = false;

	$tdatacat_cabcol[".locking"] = false;









$tdatacat_cabcol[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacat_cabcol[".searchSaving"] = false;
//

$tdatacat_cabcol[".showSearchPanel"] = true;
		$tdatacat_cabcol[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacat_cabcol[".isUseAjaxSuggest"] = false;
else 
	$tdatacat_cabcol[".isUseAjaxSuggest"] = true;

$tdatacat_cabcol[".rowHighlite"] = true;



$tdatacat_cabcol[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_cabcol[".isUseTimeForSearch"] = false;





$tdatacat_cabcol[".allSearchFields"] = array();
$tdatacat_cabcol[".filterFields"] = array();
$tdatacat_cabcol[".requiredSearchFields"] = array();



$tdatacat_cabcol[".googleLikeFields"] = array();
$tdatacat_cabcol[".googleLikeFields"][] = "idcabcol";
$tdatacat_cabcol[".googleLikeFields"][] = "cabcol";


$tdatacat_cabcol[".advSearchFields"] = array();
$tdatacat_cabcol[".advSearchFields"][] = "idcabcol";
$tdatacat_cabcol[".advSearchFields"][] = "cabcol";

$tdatacat_cabcol[".tableType"] = "list";

$tdatacat_cabcol[".printerPageOrientation"] = 0;
$tdatacat_cabcol[".nPrinterPageScale"] = 100;

$tdatacat_cabcol[".nPrinterSplitRecords"] = 40;

$tdatacat_cabcol[".nPrinterPDFSplitRecords"] = 40;



$tdatacat_cabcol[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatacat_cabcol[".pageSize"] = 20;

$tdatacat_cabcol[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacat_cabcol[".strOrderBy"] = $tstrOrderBy;

$tdatacat_cabcol[".orderindexes"] = array();

$tdatacat_cabcol[".sqlHead"] = "SELECT idcabcol,  	cabcol";
$tdatacat_cabcol[".sqlFrom"] = "FROM cat_cabcol";
$tdatacat_cabcol[".sqlWhereExpr"] = "";
$tdatacat_cabcol[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_cabcol[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_cabcol[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_cabcol[".highlightSearchResults"] = true;

$tableKeyscat_cabcol = array();
$tableKeyscat_cabcol[] = "idcabcol";
$tdatacat_cabcol[".Keys"] = $tableKeyscat_cabcol;

$tdatacat_cabcol[".listFields"] = array();
$tdatacat_cabcol[".listFields"][] = "idcabcol";
$tdatacat_cabcol[".listFields"][] = "cabcol";

$tdatacat_cabcol[".hideMobileList"] = array();


$tdatacat_cabcol[".viewFields"] = array();
$tdatacat_cabcol[".viewFields"][] = "idcabcol";
$tdatacat_cabcol[".viewFields"][] = "cabcol";

$tdatacat_cabcol[".addFields"] = array();
$tdatacat_cabcol[".addFields"][] = "cabcol";

$tdatacat_cabcol[".masterListFields"] = array();
$tdatacat_cabcol[".masterListFields"][] = "idcabcol";
$tdatacat_cabcol[".masterListFields"][] = "cabcol";

$tdatacat_cabcol[".inlineAddFields"] = array();
$tdatacat_cabcol[".inlineAddFields"][] = "cabcol";

$tdatacat_cabcol[".editFields"] = array();
$tdatacat_cabcol[".editFields"][] = "cabcol";

$tdatacat_cabcol[".inlineEditFields"] = array();
$tdatacat_cabcol[".inlineEditFields"][] = "cabcol";

$tdatacat_cabcol[".exportFields"] = array();
$tdatacat_cabcol[".exportFields"][] = "idcabcol";
$tdatacat_cabcol[".exportFields"][] = "cabcol";

$tdatacat_cabcol[".importFields"] = array();
$tdatacat_cabcol[".importFields"][] = "idcabcol";
$tdatacat_cabcol[".importFields"][] = "cabcol";

$tdatacat_cabcol[".printFields"] = array();
$tdatacat_cabcol[".printFields"][] = "idcabcol";
$tdatacat_cabcol[".printFields"][] = "cabcol";

//	idcabcol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idcabcol";
	$fdata["GoodName"] = "idcabcol";
	$fdata["ownerTable"] = "cat_cabcol";
	$fdata["Label"] = GetFieldLabel("cat_cabcol","idcabcol"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idcabcol"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idcabcol";
	
		
		
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
	
	
	
	

	

	
	$tdatacat_cabcol["idcabcol"] = $fdata;
//	cabcol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cabcol";
	$fdata["GoodName"] = "cabcol";
	$fdata["ownerTable"] = "cat_cabcol";
	$fdata["Label"] = GetFieldLabel("cat_cabcol","cabcol"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cabcol"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cabcol";
	
		
		
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
	
	
	
	

	

	
	$tdatacat_cabcol["cabcol"] = $fdata;

	
$tables_data["cat_cabcol"]=&$tdatacat_cabcol;
$field_labels["cat_cabcol"] = &$fieldLabelscat_cabcol;
$fieldToolTips["cat_cabcol"] = &$fieldToolTipscat_cabcol;
$page_titles["cat_cabcol"] = &$pageTitlescat_cabcol;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cat_cabcol"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["cat_cabcol"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_cat_cabcol()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idcabcol,  	cabcol";
$proto0["m_strFrom"] = "FROM cat_cabcol";
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
	"m_strName" => "idcabcol",
	"m_strTable" => "cat_cabcol",
	"m_srcTableName" => "cat_cabcol"
));

$proto5["m_sql"] = "idcabcol";
$proto5["m_srcTableName"] = "cat_cabcol";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "cabcol",
	"m_strTable" => "cat_cabcol",
	"m_srcTableName" => "cat_cabcol"
));

$proto7["m_sql"] = "cabcol";
$proto7["m_srcTableName"] = "cat_cabcol";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "cat_cabcol";
$proto10["m_srcTableName"] = "cat_cabcol";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "idcabcol";
$proto10["m_columns"][] = "cabcol";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "cat_cabcol";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "cat_cabcol";
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
$proto0["m_srcTableName"]="cat_cabcol";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_cabcol = createSqlQuery_cat_cabcol();


	
		
	
$tdatacat_cabcol[".sqlquery"] = $queryData_cat_cabcol;

$tableEvents["cat_cabcol"] = new eventsBase;
$tdatacat_cabcol[".hasEvents"] = false;

?>