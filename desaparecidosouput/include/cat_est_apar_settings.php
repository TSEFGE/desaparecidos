<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacat_est_apar = array();	
	$tdatacat_est_apar[".truncateText"] = true;
	$tdatacat_est_apar[".NumberOfChars"] = 80; 
	$tdatacat_est_apar[".ShortName"] = "cat_est_apar";
	$tdatacat_est_apar[".OwnerID"] = "";
	$tdatacat_est_apar[".OriginalTable"] = "cat_est_apar";

//	field labels
$fieldLabelscat_est_apar = array();
$fieldToolTipscat_est_apar = array();
$pageTitlescat_est_apar = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_est_apar["Spanish"] = array();
	$fieldToolTipscat_est_apar["Spanish"] = array();
	$pageTitlescat_est_apar["Spanish"] = array();
	$fieldLabelscat_est_apar["Spanish"]["id"] = "Id";
	$fieldToolTipscat_est_apar["Spanish"]["id"] = "";
	$fieldLabelscat_est_apar["Spanish"]["Estatus"] = "Estatus";
	$fieldToolTipscat_est_apar["Spanish"]["Estatus"] = "";
	if (count($fieldToolTipscat_est_apar["Spanish"]))
		$tdatacat_est_apar[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscat_est_apar[""] = array();
	$fieldToolTipscat_est_apar[""] = array();
	$pageTitlescat_est_apar[""] = array();
	$fieldLabelscat_est_apar[""]["id"] = "Id";
	$fieldToolTipscat_est_apar[""]["id"] = "";
	$fieldLabelscat_est_apar[""]["Estatus"] = "Estatus";
	$fieldToolTipscat_est_apar[""]["Estatus"] = "";
	if (count($fieldToolTipscat_est_apar[""]))
		$tdatacat_est_apar[".isUseToolTips"] = true;
}
	
	
	$tdatacat_est_apar[".NCSearch"] = true;



$tdatacat_est_apar[".shortTableName"] = "cat_est_apar";
$tdatacat_est_apar[".nSecOptions"] = 0;
$tdatacat_est_apar[".recsPerRowList"] = 1;
$tdatacat_est_apar[".recsPerRowPrint"] = 1;
$tdatacat_est_apar[".mainTableOwnerID"] = "";
$tdatacat_est_apar[".moveNext"] = 1;
$tdatacat_est_apar[".entityType"] = 0;

$tdatacat_est_apar[".strOriginalTableName"] = "cat_est_apar";




$tdatacat_est_apar[".showAddInPopup"] = false;

$tdatacat_est_apar[".showEditInPopup"] = false;

$tdatacat_est_apar[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacat_est_apar[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacat_est_apar[".fieldsForRegister"] = array();

$tdatacat_est_apar[".listAjax"] = false;

	$tdatacat_est_apar[".audit"] = false;

	$tdatacat_est_apar[".locking"] = false;









$tdatacat_est_apar[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacat_est_apar[".searchSaving"] = false;
//

$tdatacat_est_apar[".showSearchPanel"] = true;
		$tdatacat_est_apar[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacat_est_apar[".isUseAjaxSuggest"] = false;
else 
	$tdatacat_est_apar[".isUseAjaxSuggest"] = true;

$tdatacat_est_apar[".rowHighlite"] = true;



$tdatacat_est_apar[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_est_apar[".isUseTimeForSearch"] = false;





$tdatacat_est_apar[".allSearchFields"] = array();
$tdatacat_est_apar[".filterFields"] = array();
$tdatacat_est_apar[".requiredSearchFields"] = array();



$tdatacat_est_apar[".googleLikeFields"] = array();
$tdatacat_est_apar[".googleLikeFields"][] = "id";
$tdatacat_est_apar[".googleLikeFields"][] = "Estatus";


$tdatacat_est_apar[".advSearchFields"] = array();
$tdatacat_est_apar[".advSearchFields"][] = "id";
$tdatacat_est_apar[".advSearchFields"][] = "Estatus";

$tdatacat_est_apar[".tableType"] = "list";

$tdatacat_est_apar[".printerPageOrientation"] = 0;
$tdatacat_est_apar[".nPrinterPageScale"] = 100;

$tdatacat_est_apar[".nPrinterSplitRecords"] = 40;

$tdatacat_est_apar[".nPrinterPDFSplitRecords"] = 40;



$tdatacat_est_apar[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatacat_est_apar[".pageSize"] = 20;

$tdatacat_est_apar[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacat_est_apar[".strOrderBy"] = $tstrOrderBy;

$tdatacat_est_apar[".orderindexes"] = array();

$tdatacat_est_apar[".sqlHead"] = "SELECT id,  	Estatus";
$tdatacat_est_apar[".sqlFrom"] = "FROM cat_est_apar";
$tdatacat_est_apar[".sqlWhereExpr"] = "";
$tdatacat_est_apar[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_est_apar[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_est_apar[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_est_apar[".highlightSearchResults"] = true;

$tableKeyscat_est_apar = array();
$tableKeyscat_est_apar[] = "id";
$tdatacat_est_apar[".Keys"] = $tableKeyscat_est_apar;

$tdatacat_est_apar[".listFields"] = array();
$tdatacat_est_apar[".listFields"][] = "id";
$tdatacat_est_apar[".listFields"][] = "Estatus";

$tdatacat_est_apar[".hideMobileList"] = array();


$tdatacat_est_apar[".viewFields"] = array();
$tdatacat_est_apar[".viewFields"][] = "id";
$tdatacat_est_apar[".viewFields"][] = "Estatus";

$tdatacat_est_apar[".addFields"] = array();
$tdatacat_est_apar[".addFields"][] = "Estatus";

$tdatacat_est_apar[".masterListFields"] = array();
$tdatacat_est_apar[".masterListFields"][] = "id";
$tdatacat_est_apar[".masterListFields"][] = "Estatus";

$tdatacat_est_apar[".inlineAddFields"] = array();
$tdatacat_est_apar[".inlineAddFields"][] = "Estatus";

$tdatacat_est_apar[".editFields"] = array();
$tdatacat_est_apar[".editFields"][] = "Estatus";

$tdatacat_est_apar[".inlineEditFields"] = array();
$tdatacat_est_apar[".inlineEditFields"][] = "Estatus";

$tdatacat_est_apar[".exportFields"] = array();
$tdatacat_est_apar[".exportFields"][] = "id";
$tdatacat_est_apar[".exportFields"][] = "Estatus";

$tdatacat_est_apar[".importFields"] = array();
$tdatacat_est_apar[".importFields"][] = "id";
$tdatacat_est_apar[".importFields"][] = "Estatus";

$tdatacat_est_apar[".printFields"] = array();
$tdatacat_est_apar[".printFields"][] = "id";
$tdatacat_est_apar[".printFields"][] = "Estatus";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "cat_est_apar";
	$fdata["Label"] = GetFieldLabel("cat_est_apar","id"); 
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
	
	
	
	

	

	
	$tdatacat_est_apar["id"] = $fdata;
//	Estatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Estatus";
	$fdata["GoodName"] = "Estatus";
	$fdata["ownerTable"] = "cat_est_apar";
	$fdata["Label"] = GetFieldLabel("cat_est_apar","Estatus"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Estatus"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Estatus";
	
		
		
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
	
	
	
	

	

	
	$tdatacat_est_apar["Estatus"] = $fdata;

	
$tables_data["cat_est_apar"]=&$tdatacat_est_apar;
$field_labels["cat_est_apar"] = &$fieldLabelscat_est_apar;
$fieldToolTips["cat_est_apar"] = &$fieldToolTipscat_est_apar;
$page_titles["cat_est_apar"] = &$pageTitlescat_est_apar;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cat_est_apar"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["cat_est_apar"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_cat_est_apar()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	Estatus";
$proto0["m_strFrom"] = "FROM cat_est_apar";
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
	"m_strTable" => "cat_est_apar",
	"m_srcTableName" => "cat_est_apar"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "cat_est_apar";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Estatus",
	"m_strTable" => "cat_est_apar",
	"m_srcTableName" => "cat_est_apar"
));

$proto7["m_sql"] = "Estatus";
$proto7["m_srcTableName"] = "cat_est_apar";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "cat_est_apar";
$proto10["m_srcTableName"] = "cat_est_apar";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "id";
$proto10["m_columns"][] = "Estatus";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "cat_est_apar";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "cat_est_apar";
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
$proto0["m_srcTableName"]="cat_est_apar";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_est_apar = createSqlQuery_cat_est_apar();


	
		
	
$tdatacat_est_apar[".sqlquery"] = $queryData_cat_est_apar;

$tableEvents["cat_est_apar"] = new eventsBase;
$tdatacat_est_apar[".hasEvents"] = false;

?>