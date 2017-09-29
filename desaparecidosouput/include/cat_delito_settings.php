<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacat_delito = array();	
	$tdatacat_delito[".truncateText"] = true;
	$tdatacat_delito[".NumberOfChars"] = 80; 
	$tdatacat_delito[".ShortName"] = "cat_delito";
	$tdatacat_delito[".OwnerID"] = "";
	$tdatacat_delito[".OriginalTable"] = "cat_delito";

//	field labels
$fieldLabelscat_delito = array();
$fieldToolTipscat_delito = array();
$pageTitlescat_delito = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_delito["Spanish"] = array();
	$fieldToolTipscat_delito["Spanish"] = array();
	$pageTitlescat_delito["Spanish"] = array();
	$fieldLabelscat_delito["Spanish"]["id"] = "Id";
	$fieldToolTipscat_delito["Spanish"]["id"] = "";
	$fieldLabelscat_delito["Spanish"]["delito"] = "Delito";
	$fieldToolTipscat_delito["Spanish"]["delito"] = "";
	if (count($fieldToolTipscat_delito["Spanish"]))
		$tdatacat_delito[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscat_delito[""] = array();
	$fieldToolTipscat_delito[""] = array();
	$pageTitlescat_delito[""] = array();
	$fieldLabelscat_delito[""]["id"] = "Id";
	$fieldToolTipscat_delito[""]["id"] = "";
	$fieldLabelscat_delito[""]["delito"] = "Delito";
	$fieldToolTipscat_delito[""]["delito"] = "";
	if (count($fieldToolTipscat_delito[""]))
		$tdatacat_delito[".isUseToolTips"] = true;
}
	
	
	$tdatacat_delito[".NCSearch"] = true;



$tdatacat_delito[".shortTableName"] = "cat_delito";
$tdatacat_delito[".nSecOptions"] = 0;
$tdatacat_delito[".recsPerRowList"] = 1;
$tdatacat_delito[".recsPerRowPrint"] = 1;
$tdatacat_delito[".mainTableOwnerID"] = "";
$tdatacat_delito[".moveNext"] = 1;
$tdatacat_delito[".entityType"] = 0;

$tdatacat_delito[".strOriginalTableName"] = "cat_delito";




$tdatacat_delito[".showAddInPopup"] = false;

$tdatacat_delito[".showEditInPopup"] = false;

$tdatacat_delito[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacat_delito[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacat_delito[".fieldsForRegister"] = array();

$tdatacat_delito[".listAjax"] = false;

	$tdatacat_delito[".audit"] = false;

	$tdatacat_delito[".locking"] = false;









$tdatacat_delito[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacat_delito[".searchSaving"] = false;
//

$tdatacat_delito[".showSearchPanel"] = true;
		$tdatacat_delito[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacat_delito[".isUseAjaxSuggest"] = false;
else 
	$tdatacat_delito[".isUseAjaxSuggest"] = true;

$tdatacat_delito[".rowHighlite"] = true;



$tdatacat_delito[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_delito[".isUseTimeForSearch"] = false;





$tdatacat_delito[".allSearchFields"] = array();
$tdatacat_delito[".filterFields"] = array();
$tdatacat_delito[".requiredSearchFields"] = array();



$tdatacat_delito[".googleLikeFields"] = array();
$tdatacat_delito[".googleLikeFields"][] = "id";
$tdatacat_delito[".googleLikeFields"][] = "delito";


$tdatacat_delito[".advSearchFields"] = array();
$tdatacat_delito[".advSearchFields"][] = "id";
$tdatacat_delito[".advSearchFields"][] = "delito";

$tdatacat_delito[".tableType"] = "list";

$tdatacat_delito[".printerPageOrientation"] = 0;
$tdatacat_delito[".nPrinterPageScale"] = 100;

$tdatacat_delito[".nPrinterSplitRecords"] = 40;

$tdatacat_delito[".nPrinterPDFSplitRecords"] = 40;



$tdatacat_delito[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatacat_delito[".pageSize"] = 20;

$tdatacat_delito[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacat_delito[".strOrderBy"] = $tstrOrderBy;

$tdatacat_delito[".orderindexes"] = array();

$tdatacat_delito[".sqlHead"] = "SELECT id,  	delito";
$tdatacat_delito[".sqlFrom"] = "FROM cat_delito";
$tdatacat_delito[".sqlWhereExpr"] = "";
$tdatacat_delito[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_delito[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_delito[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_delito[".highlightSearchResults"] = true;

$tableKeyscat_delito = array();
$tableKeyscat_delito[] = "id";
$tdatacat_delito[".Keys"] = $tableKeyscat_delito;

$tdatacat_delito[".listFields"] = array();
$tdatacat_delito[".listFields"][] = "id";
$tdatacat_delito[".listFields"][] = "delito";

$tdatacat_delito[".hideMobileList"] = array();


$tdatacat_delito[".viewFields"] = array();
$tdatacat_delito[".viewFields"][] = "id";
$tdatacat_delito[".viewFields"][] = "delito";

$tdatacat_delito[".addFields"] = array();
$tdatacat_delito[".addFields"][] = "delito";

$tdatacat_delito[".masterListFields"] = array();
$tdatacat_delito[".masterListFields"][] = "id";
$tdatacat_delito[".masterListFields"][] = "delito";

$tdatacat_delito[".inlineAddFields"] = array();
$tdatacat_delito[".inlineAddFields"][] = "delito";

$tdatacat_delito[".editFields"] = array();
$tdatacat_delito[".editFields"][] = "delito";

$tdatacat_delito[".inlineEditFields"] = array();
$tdatacat_delito[".inlineEditFields"][] = "delito";

$tdatacat_delito[".exportFields"] = array();
$tdatacat_delito[".exportFields"][] = "id";
$tdatacat_delito[".exportFields"][] = "delito";

$tdatacat_delito[".importFields"] = array();
$tdatacat_delito[".importFields"][] = "id";
$tdatacat_delito[".importFields"][] = "delito";

$tdatacat_delito[".printFields"] = array();
$tdatacat_delito[".printFields"][] = "id";
$tdatacat_delito[".printFields"][] = "delito";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "cat_delito";
	$fdata["Label"] = GetFieldLabel("cat_delito","id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
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
	
	
	
	

	

	
	$tdatacat_delito["id"] = $fdata;
//	delito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "delito";
	$fdata["GoodName"] = "delito";
	$fdata["ownerTable"] = "cat_delito";
	$fdata["Label"] = GetFieldLabel("cat_delito","delito"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "delito"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "delito";
	
		
		
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
	
	
	
	

	

	
	$tdatacat_delito["delito"] = $fdata;

	
$tables_data["cat_delito"]=&$tdatacat_delito;
$field_labels["cat_delito"] = &$fieldLabelscat_delito;
$fieldToolTips["cat_delito"] = &$fieldToolTipscat_delito;
$page_titles["cat_delito"] = &$pageTitlescat_delito;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cat_delito"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["cat_delito"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_cat_delito()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	delito";
$proto0["m_strFrom"] = "FROM cat_delito";
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
	"m_strTable" => "cat_delito",
	"m_srcTableName" => "cat_delito"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "cat_delito";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "cat_delito",
	"m_srcTableName" => "cat_delito"
));

$proto7["m_sql"] = "delito";
$proto7["m_srcTableName"] = "cat_delito";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "cat_delito";
$proto10["m_srcTableName"] = "cat_delito";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "id";
$proto10["m_columns"][] = "delito";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "cat_delito";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "cat_delito";
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
$proto0["m_srcTableName"]="cat_delito";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_delito = createSqlQuery_cat_delito();


	
		
	
$tdatacat_delito[".sqlquery"] = $queryData_cat_delito;

$tableEvents["cat_delito"] = new eventsBase;
$tdatacat_delito[".hasEvents"] = false;

?>