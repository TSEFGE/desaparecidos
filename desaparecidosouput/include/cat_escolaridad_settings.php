<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacat_escolaridad = array();	
	$tdatacat_escolaridad[".truncateText"] = true;
	$tdatacat_escolaridad[".NumberOfChars"] = 80; 
	$tdatacat_escolaridad[".ShortName"] = "cat_escolaridad";
	$tdatacat_escolaridad[".OwnerID"] = "";
	$tdatacat_escolaridad[".OriginalTable"] = "cat_escolaridad";

//	field labels
$fieldLabelscat_escolaridad = array();
$fieldToolTipscat_escolaridad = array();
$pageTitlescat_escolaridad = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_escolaridad["Spanish"] = array();
	$fieldToolTipscat_escolaridad["Spanish"] = array();
	$pageTitlescat_escolaridad["Spanish"] = array();
	$fieldLabelscat_escolaridad["Spanish"]["idescolaridad"] = "Idescolaridad";
	$fieldToolTipscat_escolaridad["Spanish"]["idescolaridad"] = "";
	$fieldLabelscat_escolaridad["Spanish"]["escolaridad"] = "Escolaridad";
	$fieldToolTipscat_escolaridad["Spanish"]["escolaridad"] = "";
	if (count($fieldToolTipscat_escolaridad["Spanish"]))
		$tdatacat_escolaridad[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscat_escolaridad[""] = array();
	$fieldToolTipscat_escolaridad[""] = array();
	$pageTitlescat_escolaridad[""] = array();
	if (count($fieldToolTipscat_escolaridad[""]))
		$tdatacat_escolaridad[".isUseToolTips"] = true;
}
	
	
	$tdatacat_escolaridad[".NCSearch"] = true;



$tdatacat_escolaridad[".shortTableName"] = "cat_escolaridad";
$tdatacat_escolaridad[".nSecOptions"] = 0;
$tdatacat_escolaridad[".recsPerRowList"] = 1;
$tdatacat_escolaridad[".recsPerRowPrint"] = 1;
$tdatacat_escolaridad[".mainTableOwnerID"] = "";
$tdatacat_escolaridad[".moveNext"] = 1;
$tdatacat_escolaridad[".entityType"] = 0;

$tdatacat_escolaridad[".strOriginalTableName"] = "cat_escolaridad";




$tdatacat_escolaridad[".showAddInPopup"] = false;

$tdatacat_escolaridad[".showEditInPopup"] = false;

$tdatacat_escolaridad[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacat_escolaridad[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacat_escolaridad[".fieldsForRegister"] = array();

$tdatacat_escolaridad[".listAjax"] = false;

	$tdatacat_escolaridad[".audit"] = false;

	$tdatacat_escolaridad[".locking"] = false;

$tdatacat_escolaridad[".edit"] = true;
$tdatacat_escolaridad[".afterEditAction"] = 1;
$tdatacat_escolaridad[".closePopupAfterEdit"] = 1;
$tdatacat_escolaridad[".afterEditActionDetTable"] = "";

$tdatacat_escolaridad[".add"] = true;
$tdatacat_escolaridad[".afterAddAction"] = 1;
$tdatacat_escolaridad[".closePopupAfterAdd"] = 1;
$tdatacat_escolaridad[".afterAddActionDetTable"] = "";

$tdatacat_escolaridad[".list"] = true;

$tdatacat_escolaridad[".inlineEdit"] = true;
$tdatacat_escolaridad[".inlineAdd"] = true;
$tdatacat_escolaridad[".view"] = true;

$tdatacat_escolaridad[".import"] = true;

$tdatacat_escolaridad[".exportTo"] = true;

$tdatacat_escolaridad[".printFriendly"] = true;

$tdatacat_escolaridad[".delete"] = true;

$tdatacat_escolaridad[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacat_escolaridad[".searchSaving"] = false;
//

$tdatacat_escolaridad[".showSearchPanel"] = true;
		$tdatacat_escolaridad[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacat_escolaridad[".isUseAjaxSuggest"] = false;
else 
	$tdatacat_escolaridad[".isUseAjaxSuggest"] = true;

$tdatacat_escolaridad[".rowHighlite"] = true;



$tdatacat_escolaridad[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_escolaridad[".isUseTimeForSearch"] = false;





$tdatacat_escolaridad[".allSearchFields"] = array();
$tdatacat_escolaridad[".filterFields"] = array();
$tdatacat_escolaridad[".requiredSearchFields"] = array();

$tdatacat_escolaridad[".allSearchFields"][] = "idescolaridad";
	$tdatacat_escolaridad[".allSearchFields"][] = "escolaridad";
	

$tdatacat_escolaridad[".googleLikeFields"] = array();
$tdatacat_escolaridad[".googleLikeFields"][] = "idescolaridad";
$tdatacat_escolaridad[".googleLikeFields"][] = "escolaridad";


$tdatacat_escolaridad[".advSearchFields"] = array();
$tdatacat_escolaridad[".advSearchFields"][] = "idescolaridad";
$tdatacat_escolaridad[".advSearchFields"][] = "escolaridad";

$tdatacat_escolaridad[".tableType"] = "list";

$tdatacat_escolaridad[".printerPageOrientation"] = 0;
$tdatacat_escolaridad[".nPrinterPageScale"] = 100;

$tdatacat_escolaridad[".nPrinterSplitRecords"] = 40;

$tdatacat_escolaridad[".nPrinterPDFSplitRecords"] = 40;



$tdatacat_escolaridad[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatacat_escolaridad[".pageSize"] = 20;

$tdatacat_escolaridad[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacat_escolaridad[".strOrderBy"] = $tstrOrderBy;

$tdatacat_escolaridad[".orderindexes"] = array();

$tdatacat_escolaridad[".sqlHead"] = "SELECT idescolaridad,  	escolaridad";
$tdatacat_escolaridad[".sqlFrom"] = "FROM cat_escolaridad";
$tdatacat_escolaridad[".sqlWhereExpr"] = "";
$tdatacat_escolaridad[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_escolaridad[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_escolaridad[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_escolaridad[".highlightSearchResults"] = true;

$tableKeyscat_escolaridad = array();
$tableKeyscat_escolaridad[] = "idescolaridad";
$tdatacat_escolaridad[".Keys"] = $tableKeyscat_escolaridad;

$tdatacat_escolaridad[".listFields"] = array();
$tdatacat_escolaridad[".listFields"][] = "idescolaridad";
$tdatacat_escolaridad[".listFields"][] = "escolaridad";

$tdatacat_escolaridad[".hideMobileList"] = array();


$tdatacat_escolaridad[".viewFields"] = array();
$tdatacat_escolaridad[".viewFields"][] = "idescolaridad";
$tdatacat_escolaridad[".viewFields"][] = "escolaridad";

$tdatacat_escolaridad[".addFields"] = array();
$tdatacat_escolaridad[".addFields"][] = "escolaridad";

$tdatacat_escolaridad[".masterListFields"] = array();
$tdatacat_escolaridad[".masterListFields"][] = "idescolaridad";
$tdatacat_escolaridad[".masterListFields"][] = "escolaridad";

$tdatacat_escolaridad[".inlineAddFields"] = array();
$tdatacat_escolaridad[".inlineAddFields"][] = "escolaridad";

$tdatacat_escolaridad[".editFields"] = array();
$tdatacat_escolaridad[".editFields"][] = "escolaridad";

$tdatacat_escolaridad[".inlineEditFields"] = array();
$tdatacat_escolaridad[".inlineEditFields"][] = "escolaridad";

$tdatacat_escolaridad[".exportFields"] = array();
$tdatacat_escolaridad[".exportFields"][] = "idescolaridad";
$tdatacat_escolaridad[".exportFields"][] = "escolaridad";

$tdatacat_escolaridad[".importFields"] = array();
$tdatacat_escolaridad[".importFields"][] = "idescolaridad";
$tdatacat_escolaridad[".importFields"][] = "escolaridad";

$tdatacat_escolaridad[".printFields"] = array();
$tdatacat_escolaridad[".printFields"][] = "idescolaridad";
$tdatacat_escolaridad[".printFields"][] = "escolaridad";

//	idescolaridad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idescolaridad";
	$fdata["GoodName"] = "idescolaridad";
	$fdata["ownerTable"] = "cat_escolaridad";
	$fdata["Label"] = GetFieldLabel("cat_escolaridad","idescolaridad"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idescolaridad"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idescolaridad";
	
		
		
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

	

	
	$tdatacat_escolaridad["idescolaridad"] = $fdata;
//	escolaridad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "escolaridad";
	$fdata["GoodName"] = "escolaridad";
	$fdata["ownerTable"] = "cat_escolaridad";
	$fdata["Label"] = GetFieldLabel("cat_escolaridad","escolaridad"); 
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
	
		$fdata["strField"] = "escolaridad"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolaridad";
	
		
		
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

	

	
	$tdatacat_escolaridad["escolaridad"] = $fdata;

	
$tables_data["cat_escolaridad"]=&$tdatacat_escolaridad;
$field_labels["cat_escolaridad"] = &$fieldLabelscat_escolaridad;
$fieldToolTips["cat_escolaridad"] = &$fieldToolTipscat_escolaridad;
$page_titles["cat_escolaridad"] = &$pageTitlescat_escolaridad;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cat_escolaridad"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["cat_escolaridad"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_cat_escolaridad()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idescolaridad,  	escolaridad";
$proto0["m_strFrom"] = "FROM cat_escolaridad";
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
	"m_strName" => "idescolaridad",
	"m_strTable" => "cat_escolaridad",
	"m_srcTableName" => "cat_escolaridad"
));

$proto5["m_sql"] = "idescolaridad";
$proto5["m_srcTableName"] = "cat_escolaridad";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "escolaridad",
	"m_strTable" => "cat_escolaridad",
	"m_srcTableName" => "cat_escolaridad"
));

$proto7["m_sql"] = "escolaridad";
$proto7["m_srcTableName"] = "cat_escolaridad";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "cat_escolaridad";
$proto10["m_srcTableName"] = "cat_escolaridad";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "idescolaridad";
$proto10["m_columns"][] = "escolaridad";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "cat_escolaridad";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "cat_escolaridad";
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
$proto0["m_srcTableName"]="cat_escolaridad";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_escolaridad = createSqlQuery_cat_escolaridad();


	
		
	
$tdatacat_escolaridad[".sqlquery"] = $queryData_cat_escolaridad;

$tableEvents["cat_escolaridad"] = new eventsBase;
$tdatacat_escolaridad[".hasEvents"] = false;

?>