<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacat_edos = array();	
	$tdatacat_edos[".truncateText"] = true;
	$tdatacat_edos[".NumberOfChars"] = 80; 
	$tdatacat_edos[".ShortName"] = "cat_edos";
	$tdatacat_edos[".OwnerID"] = "";
	$tdatacat_edos[".OriginalTable"] = "cat_edos";

//	field labels
$fieldLabelscat_edos = array();
$fieldToolTipscat_edos = array();
$pageTitlescat_edos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_edos["Spanish"] = array();
	$fieldToolTipscat_edos["Spanish"] = array();
	$pageTitlescat_edos["Spanish"] = array();
	$fieldLabelscat_edos["Spanish"]["id"] = "Id";
	$fieldToolTipscat_edos["Spanish"]["id"] = "";
	$fieldLabelscat_edos["Spanish"]["nom_ent"] = "Nom Ent";
	$fieldToolTipscat_edos["Spanish"]["nom_ent"] = "";
	$fieldLabelscat_edos["Spanish"]["nom_abr"] = "Nom Abr";
	$fieldToolTipscat_edos["Spanish"]["nom_abr"] = "";
	if (count($fieldToolTipscat_edos["Spanish"]))
		$tdatacat_edos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscat_edos[""] = array();
	$fieldToolTipscat_edos[""] = array();
	$pageTitlescat_edos[""] = array();
	if (count($fieldToolTipscat_edos[""]))
		$tdatacat_edos[".isUseToolTips"] = true;
}
	
	
	$tdatacat_edos[".NCSearch"] = true;



$tdatacat_edos[".shortTableName"] = "cat_edos";
$tdatacat_edos[".nSecOptions"] = 0;
$tdatacat_edos[".recsPerRowList"] = 1;
$tdatacat_edos[".recsPerRowPrint"] = 1;
$tdatacat_edos[".mainTableOwnerID"] = "";
$tdatacat_edos[".moveNext"] = 1;
$tdatacat_edos[".entityType"] = 0;

$tdatacat_edos[".strOriginalTableName"] = "cat_edos";




$tdatacat_edos[".showAddInPopup"] = false;

$tdatacat_edos[".showEditInPopup"] = false;

$tdatacat_edos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacat_edos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacat_edos[".fieldsForRegister"] = array();

$tdatacat_edos[".listAjax"] = false;

	$tdatacat_edos[".audit"] = false;

	$tdatacat_edos[".locking"] = false;









$tdatacat_edos[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacat_edos[".searchSaving"] = false;
//

$tdatacat_edos[".showSearchPanel"] = true;
		$tdatacat_edos[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacat_edos[".isUseAjaxSuggest"] = false;
else 
	$tdatacat_edos[".isUseAjaxSuggest"] = true;

$tdatacat_edos[".rowHighlite"] = true;



$tdatacat_edos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_edos[".isUseTimeForSearch"] = false;





$tdatacat_edos[".allSearchFields"] = array();
$tdatacat_edos[".filterFields"] = array();
$tdatacat_edos[".requiredSearchFields"] = array();

$tdatacat_edos[".allSearchFields"][] = "id";
	$tdatacat_edos[".allSearchFields"][] = "nom_ent";
	$tdatacat_edos[".allSearchFields"][] = "nom_abr";
	

$tdatacat_edos[".googleLikeFields"] = array();
$tdatacat_edos[".googleLikeFields"][] = "id";
$tdatacat_edos[".googleLikeFields"][] = "nom_ent";
$tdatacat_edos[".googleLikeFields"][] = "nom_abr";


$tdatacat_edos[".advSearchFields"] = array();
$tdatacat_edos[".advSearchFields"][] = "id";
$tdatacat_edos[".advSearchFields"][] = "nom_ent";
$tdatacat_edos[".advSearchFields"][] = "nom_abr";

$tdatacat_edos[".tableType"] = "list";

$tdatacat_edos[".printerPageOrientation"] = 0;
$tdatacat_edos[".nPrinterPageScale"] = 100;

$tdatacat_edos[".nPrinterSplitRecords"] = 40;

$tdatacat_edos[".nPrinterPDFSplitRecords"] = 40;



$tdatacat_edos[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatacat_edos[".pageSize"] = 20;

$tdatacat_edos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacat_edos[".strOrderBy"] = $tstrOrderBy;

$tdatacat_edos[".orderindexes"] = array();

$tdatacat_edos[".sqlHead"] = "SELECT id,  	nom_ent,  	nom_abr";
$tdatacat_edos[".sqlFrom"] = "FROM cat_edos";
$tdatacat_edos[".sqlWhereExpr"] = "";
$tdatacat_edos[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_edos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_edos[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_edos[".highlightSearchResults"] = true;

$tableKeyscat_edos = array();
$tableKeyscat_edos[] = "id";
$tdatacat_edos[".Keys"] = $tableKeyscat_edos;

$tdatacat_edos[".listFields"] = array();
$tdatacat_edos[".listFields"][] = "id";
$tdatacat_edos[".listFields"][] = "nom_ent";
$tdatacat_edos[".listFields"][] = "nom_abr";

$tdatacat_edos[".hideMobileList"] = array();


$tdatacat_edos[".viewFields"] = array();
$tdatacat_edos[".viewFields"][] = "id";
$tdatacat_edos[".viewFields"][] = "nom_ent";
$tdatacat_edos[".viewFields"][] = "nom_abr";

$tdatacat_edos[".addFields"] = array();
$tdatacat_edos[".addFields"][] = "nom_ent";
$tdatacat_edos[".addFields"][] = "nom_abr";

$tdatacat_edos[".masterListFields"] = array();
$tdatacat_edos[".masterListFields"][] = "id";
$tdatacat_edos[".masterListFields"][] = "nom_ent";
$tdatacat_edos[".masterListFields"][] = "nom_abr";

$tdatacat_edos[".inlineAddFields"] = array();
$tdatacat_edos[".inlineAddFields"][] = "nom_ent";
$tdatacat_edos[".inlineAddFields"][] = "nom_abr";

$tdatacat_edos[".editFields"] = array();
$tdatacat_edos[".editFields"][] = "nom_ent";
$tdatacat_edos[".editFields"][] = "nom_abr";

$tdatacat_edos[".inlineEditFields"] = array();
$tdatacat_edos[".inlineEditFields"][] = "nom_ent";
$tdatacat_edos[".inlineEditFields"][] = "nom_abr";

$tdatacat_edos[".exportFields"] = array();
$tdatacat_edos[".exportFields"][] = "id";
$tdatacat_edos[".exportFields"][] = "nom_ent";
$tdatacat_edos[".exportFields"][] = "nom_abr";

$tdatacat_edos[".importFields"] = array();
$tdatacat_edos[".importFields"][] = "id";
$tdatacat_edos[".importFields"][] = "nom_ent";
$tdatacat_edos[".importFields"][] = "nom_abr";

$tdatacat_edos[".printFields"] = array();
$tdatacat_edos[".printFields"][] = "id";
$tdatacat_edos[".printFields"][] = "nom_ent";
$tdatacat_edos[".printFields"][] = "nom_abr";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "cat_edos";
	$fdata["Label"] = GetFieldLabel("cat_edos","id"); 
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

	

	
	$tdatacat_edos["id"] = $fdata;
//	nom_ent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nom_ent";
	$fdata["GoodName"] = "nom_ent";
	$fdata["ownerTable"] = "cat_edos";
	$fdata["Label"] = GetFieldLabel("cat_edos","nom_ent"); 
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
	
		$fdata["strField"] = "nom_ent"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nom_ent";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatacat_edos["nom_ent"] = $fdata;
//	nom_abr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nom_abr";
	$fdata["GoodName"] = "nom_abr";
	$fdata["ownerTable"] = "cat_edos";
	$fdata["Label"] = GetFieldLabel("cat_edos","nom_abr"); 
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
	
		$fdata["strField"] = "nom_abr"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nom_abr";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatacat_edos["nom_abr"] = $fdata;

	
$tables_data["cat_edos"]=&$tdatacat_edos;
$field_labels["cat_edos"] = &$fieldLabelscat_edos;
$fieldToolTips["cat_edos"] = &$fieldToolTipscat_edos;
$page_titles["cat_edos"] = &$pageTitlescat_edos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cat_edos"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["cat_edos"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_cat_edos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nom_ent,  	nom_abr";
$proto0["m_strFrom"] = "FROM cat_edos";
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
	"m_strTable" => "cat_edos",
	"m_srcTableName" => "cat_edos"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "cat_edos";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nom_ent",
	"m_strTable" => "cat_edos",
	"m_srcTableName" => "cat_edos"
));

$proto7["m_sql"] = "nom_ent";
$proto7["m_srcTableName"] = "cat_edos";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "nom_abr",
	"m_strTable" => "cat_edos",
	"m_srcTableName" => "cat_edos"
));

$proto9["m_sql"] = "nom_abr";
$proto9["m_srcTableName"] = "cat_edos";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "cat_edos";
$proto12["m_srcTableName"] = "cat_edos";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "nom_ent";
$proto12["m_columns"][] = "nom_abr";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "cat_edos";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "cat_edos";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_edos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_edos = createSqlQuery_cat_edos();


	
			
	
$tdatacat_edos[".sqlquery"] = $queryData_cat_edos;

$tableEvents["cat_edos"] = new eventsBase;
$tdatacat_edos[".hasEvents"] = false;

?>