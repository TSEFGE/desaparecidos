<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacat_valida = array();	
	$tdatacat_valida[".truncateText"] = true;
	$tdatacat_valida[".NumberOfChars"] = 80; 
	$tdatacat_valida[".ShortName"] = "cat_valida";
	$tdatacat_valida[".OwnerID"] = "";
	$tdatacat_valida[".OriginalTable"] = "cat_valida";

//	field labels
$fieldLabelscat_valida = array();
$fieldToolTipscat_valida = array();
$pageTitlescat_valida = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_valida["Spanish"] = array();
	$fieldToolTipscat_valida["Spanish"] = array();
	$pageTitlescat_valida["Spanish"] = array();
	$fieldLabelscat_valida["Spanish"]["idValida"] = "Id Valida";
	$fieldToolTipscat_valida["Spanish"]["idValida"] = "";
	$fieldLabelscat_valida["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipscat_valida["Spanish"]["Nombre"] = "";
	if (count($fieldToolTipscat_valida["Spanish"]))
		$tdatacat_valida[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscat_valida[""] = array();
	$fieldToolTipscat_valida[""] = array();
	$pageTitlescat_valida[""] = array();
	if (count($fieldToolTipscat_valida[""]))
		$tdatacat_valida[".isUseToolTips"] = true;
}
	
	
	$tdatacat_valida[".NCSearch"] = true;



$tdatacat_valida[".shortTableName"] = "cat_valida";
$tdatacat_valida[".nSecOptions"] = 0;
$tdatacat_valida[".recsPerRowList"] = 1;
$tdatacat_valida[".recsPerRowPrint"] = 1;
$tdatacat_valida[".mainTableOwnerID"] = "";
$tdatacat_valida[".moveNext"] = 1;
$tdatacat_valida[".entityType"] = 0;

$tdatacat_valida[".strOriginalTableName"] = "cat_valida";




$tdatacat_valida[".showAddInPopup"] = false;

$tdatacat_valida[".showEditInPopup"] = false;

$tdatacat_valida[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacat_valida[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacat_valida[".fieldsForRegister"] = array();

$tdatacat_valida[".listAjax"] = false;

	$tdatacat_valida[".audit"] = false;

	$tdatacat_valida[".locking"] = false;









$tdatacat_valida[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacat_valida[".searchSaving"] = false;
//

$tdatacat_valida[".showSearchPanel"] = true;
		$tdatacat_valida[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacat_valida[".isUseAjaxSuggest"] = false;
else 
	$tdatacat_valida[".isUseAjaxSuggest"] = true;

$tdatacat_valida[".rowHighlite"] = true;



$tdatacat_valida[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_valida[".isUseTimeForSearch"] = false;





$tdatacat_valida[".allSearchFields"] = array();
$tdatacat_valida[".filterFields"] = array();
$tdatacat_valida[".requiredSearchFields"] = array();

$tdatacat_valida[".allSearchFields"][] = "idValida";
	$tdatacat_valida[".allSearchFields"][] = "Nombre";
	

$tdatacat_valida[".googleLikeFields"] = array();
$tdatacat_valida[".googleLikeFields"][] = "idValida";
$tdatacat_valida[".googleLikeFields"][] = "Nombre";


$tdatacat_valida[".advSearchFields"] = array();
$tdatacat_valida[".advSearchFields"][] = "idValida";
$tdatacat_valida[".advSearchFields"][] = "Nombre";

$tdatacat_valida[".tableType"] = "list";

$tdatacat_valida[".printerPageOrientation"] = 0;
$tdatacat_valida[".nPrinterPageScale"] = 100;

$tdatacat_valida[".nPrinterSplitRecords"] = 40;

$tdatacat_valida[".nPrinterPDFSplitRecords"] = 40;



$tdatacat_valida[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatacat_valida[".pageSize"] = 20;

$tdatacat_valida[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacat_valida[".strOrderBy"] = $tstrOrderBy;

$tdatacat_valida[".orderindexes"] = array();

$tdatacat_valida[".sqlHead"] = "SELECT idValida,  	Nombre";
$tdatacat_valida[".sqlFrom"] = "FROM cat_valida";
$tdatacat_valida[".sqlWhereExpr"] = "";
$tdatacat_valida[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_valida[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_valida[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_valida[".highlightSearchResults"] = true;

$tableKeyscat_valida = array();
$tableKeyscat_valida[] = "idValida";
$tdatacat_valida[".Keys"] = $tableKeyscat_valida;

$tdatacat_valida[".listFields"] = array();
$tdatacat_valida[".listFields"][] = "idValida";
$tdatacat_valida[".listFields"][] = "Nombre";

$tdatacat_valida[".hideMobileList"] = array();


$tdatacat_valida[".viewFields"] = array();
$tdatacat_valida[".viewFields"][] = "idValida";
$tdatacat_valida[".viewFields"][] = "Nombre";

$tdatacat_valida[".addFields"] = array();
$tdatacat_valida[".addFields"][] = "Nombre";

$tdatacat_valida[".masterListFields"] = array();
$tdatacat_valida[".masterListFields"][] = "idValida";
$tdatacat_valida[".masterListFields"][] = "Nombre";

$tdatacat_valida[".inlineAddFields"] = array();
$tdatacat_valida[".inlineAddFields"][] = "Nombre";

$tdatacat_valida[".editFields"] = array();
$tdatacat_valida[".editFields"][] = "Nombre";

$tdatacat_valida[".inlineEditFields"] = array();
$tdatacat_valida[".inlineEditFields"][] = "Nombre";

$tdatacat_valida[".exportFields"] = array();
$tdatacat_valida[".exportFields"][] = "idValida";
$tdatacat_valida[".exportFields"][] = "Nombre";

$tdatacat_valida[".importFields"] = array();
$tdatacat_valida[".importFields"][] = "idValida";
$tdatacat_valida[".importFields"][] = "Nombre";

$tdatacat_valida[".printFields"] = array();
$tdatacat_valida[".printFields"][] = "idValida";
$tdatacat_valida[".printFields"][] = "Nombre";

//	idValida
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idValida";
	$fdata["GoodName"] = "idValida";
	$fdata["ownerTable"] = "cat_valida";
	$fdata["Label"] = GetFieldLabel("cat_valida","idValida"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idValida"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idValida";
	
		
		
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

	

	
	$tdatacat_valida["idValida"] = $fdata;
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "cat_valida";
	$fdata["Label"] = GetFieldLabel("cat_valida","Nombre"); 
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
	
		$fdata["strField"] = "Nombre"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nombre";
	
		
		
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

	

	
	$tdatacat_valida["Nombre"] = $fdata;

	
$tables_data["cat_valida"]=&$tdatacat_valida;
$field_labels["cat_valida"] = &$fieldLabelscat_valida;
$fieldToolTips["cat_valida"] = &$fieldToolTipscat_valida;
$page_titles["cat_valida"] = &$pageTitlescat_valida;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cat_valida"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["cat_valida"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_cat_valida()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idValida,  	Nombre";
$proto0["m_strFrom"] = "FROM cat_valida";
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
	"m_strName" => "idValida",
	"m_strTable" => "cat_valida",
	"m_srcTableName" => "cat_valida"
));

$proto5["m_sql"] = "idValida";
$proto5["m_srcTableName"] = "cat_valida";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "cat_valida",
	"m_srcTableName" => "cat_valida"
));

$proto7["m_sql"] = "Nombre";
$proto7["m_srcTableName"] = "cat_valida";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "cat_valida";
$proto10["m_srcTableName"] = "cat_valida";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "idValida";
$proto10["m_columns"][] = "Nombre";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "cat_valida";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "cat_valida";
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
$proto0["m_srcTableName"]="cat_valida";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_valida = createSqlQuery_cat_valida();


	
		
	
$tdatacat_valida[".sqlquery"] = $queryData_cat_valida;

$tableEvents["cat_valida"] = new eventsBase;
$tdatacat_valida[".hasEvents"] = false;

?>