<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacat_sexo = array();	
	$tdatacat_sexo[".truncateText"] = true;
	$tdatacat_sexo[".NumberOfChars"] = 80; 
	$tdatacat_sexo[".ShortName"] = "cat_sexo";
	$tdatacat_sexo[".OwnerID"] = "";
	$tdatacat_sexo[".OriginalTable"] = "cat_sexo";

//	field labels
$fieldLabelscat_sexo = array();
$fieldToolTipscat_sexo = array();
$pageTitlescat_sexo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_sexo["Spanish"] = array();
	$fieldToolTipscat_sexo["Spanish"] = array();
	$pageTitlescat_sexo["Spanish"] = array();
	$fieldLabelscat_sexo["Spanish"]["id"] = "Id";
	$fieldToolTipscat_sexo["Spanish"]["id"] = "";
	$fieldLabelscat_sexo["Spanish"]["sexo"] = "Sexo";
	$fieldToolTipscat_sexo["Spanish"]["sexo"] = "";
	if (count($fieldToolTipscat_sexo["Spanish"]))
		$tdatacat_sexo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscat_sexo[""] = array();
	$fieldToolTipscat_sexo[""] = array();
	$pageTitlescat_sexo[""] = array();
	$fieldLabelscat_sexo[""]["id"] = "Id";
	$fieldToolTipscat_sexo[""]["id"] = "";
	$fieldLabelscat_sexo[""]["sexo"] = "Sexo";
	$fieldToolTipscat_sexo[""]["sexo"] = "";
	if (count($fieldToolTipscat_sexo[""]))
		$tdatacat_sexo[".isUseToolTips"] = true;
}
	
	
	$tdatacat_sexo[".NCSearch"] = true;



$tdatacat_sexo[".shortTableName"] = "cat_sexo";
$tdatacat_sexo[".nSecOptions"] = 0;
$tdatacat_sexo[".recsPerRowList"] = 1;
$tdatacat_sexo[".recsPerRowPrint"] = 1;
$tdatacat_sexo[".mainTableOwnerID"] = "";
$tdatacat_sexo[".moveNext"] = 1;
$tdatacat_sexo[".entityType"] = 0;

$tdatacat_sexo[".strOriginalTableName"] = "cat_sexo";




$tdatacat_sexo[".showAddInPopup"] = false;

$tdatacat_sexo[".showEditInPopup"] = false;

$tdatacat_sexo[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacat_sexo[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacat_sexo[".fieldsForRegister"] = array();

$tdatacat_sexo[".listAjax"] = false;

	$tdatacat_sexo[".audit"] = false;

	$tdatacat_sexo[".locking"] = false;









$tdatacat_sexo[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacat_sexo[".searchSaving"] = false;
//

$tdatacat_sexo[".showSearchPanel"] = true;
		$tdatacat_sexo[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacat_sexo[".isUseAjaxSuggest"] = false;
else 
	$tdatacat_sexo[".isUseAjaxSuggest"] = true;

$tdatacat_sexo[".rowHighlite"] = true;



$tdatacat_sexo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_sexo[".isUseTimeForSearch"] = false;





$tdatacat_sexo[".allSearchFields"] = array();
$tdatacat_sexo[".filterFields"] = array();
$tdatacat_sexo[".requiredSearchFields"] = array();



$tdatacat_sexo[".googleLikeFields"] = array();
$tdatacat_sexo[".googleLikeFields"][] = "id";
$tdatacat_sexo[".googleLikeFields"][] = "sexo";


$tdatacat_sexo[".advSearchFields"] = array();
$tdatacat_sexo[".advSearchFields"][] = "id";
$tdatacat_sexo[".advSearchFields"][] = "sexo";

$tdatacat_sexo[".tableType"] = "list";

$tdatacat_sexo[".printerPageOrientation"] = 0;
$tdatacat_sexo[".nPrinterPageScale"] = 100;

$tdatacat_sexo[".nPrinterSplitRecords"] = 40;

$tdatacat_sexo[".nPrinterPDFSplitRecords"] = 40;



$tdatacat_sexo[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatacat_sexo[".pageSize"] = 20;

$tdatacat_sexo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacat_sexo[".strOrderBy"] = $tstrOrderBy;

$tdatacat_sexo[".orderindexes"] = array();

$tdatacat_sexo[".sqlHead"] = "SELECT id,  	sexo";
$tdatacat_sexo[".sqlFrom"] = "FROM cat_sexo";
$tdatacat_sexo[".sqlWhereExpr"] = "";
$tdatacat_sexo[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_sexo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_sexo[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_sexo[".highlightSearchResults"] = true;

$tableKeyscat_sexo = array();
$tableKeyscat_sexo[] = "id";
$tdatacat_sexo[".Keys"] = $tableKeyscat_sexo;

$tdatacat_sexo[".listFields"] = array();
$tdatacat_sexo[".listFields"][] = "id";
$tdatacat_sexo[".listFields"][] = "sexo";

$tdatacat_sexo[".hideMobileList"] = array();


$tdatacat_sexo[".viewFields"] = array();
$tdatacat_sexo[".viewFields"][] = "id";
$tdatacat_sexo[".viewFields"][] = "sexo";

$tdatacat_sexo[".addFields"] = array();
$tdatacat_sexo[".addFields"][] = "sexo";

$tdatacat_sexo[".masterListFields"] = array();
$tdatacat_sexo[".masterListFields"][] = "id";
$tdatacat_sexo[".masterListFields"][] = "sexo";

$tdatacat_sexo[".inlineAddFields"] = array();
$tdatacat_sexo[".inlineAddFields"][] = "sexo";

$tdatacat_sexo[".editFields"] = array();
$tdatacat_sexo[".editFields"][] = "sexo";

$tdatacat_sexo[".inlineEditFields"] = array();
$tdatacat_sexo[".inlineEditFields"][] = "sexo";

$tdatacat_sexo[".exportFields"] = array();
$tdatacat_sexo[".exportFields"][] = "id";
$tdatacat_sexo[".exportFields"][] = "sexo";

$tdatacat_sexo[".importFields"] = array();
$tdatacat_sexo[".importFields"][] = "id";
$tdatacat_sexo[".importFields"][] = "sexo";

$tdatacat_sexo[".printFields"] = array();
$tdatacat_sexo[".printFields"][] = "id";
$tdatacat_sexo[".printFields"][] = "sexo";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "cat_sexo";
	$fdata["Label"] = GetFieldLabel("cat_sexo","id"); 
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
	
	
	
	

	

	
	$tdatacat_sexo["id"] = $fdata;
//	sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sexo";
	$fdata["GoodName"] = "sexo";
	$fdata["ownerTable"] = "cat_sexo";
	$fdata["Label"] = GetFieldLabel("cat_sexo","sexo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "sexo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sexo";
	
		
		
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
	
	
	
	

	

	
	$tdatacat_sexo["sexo"] = $fdata;

	
$tables_data["cat_sexo"]=&$tdatacat_sexo;
$field_labels["cat_sexo"] = &$fieldLabelscat_sexo;
$fieldToolTips["cat_sexo"] = &$fieldToolTipscat_sexo;
$page_titles["cat_sexo"] = &$pageTitlescat_sexo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cat_sexo"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["cat_sexo"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_cat_sexo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	sexo";
$proto0["m_strFrom"] = "FROM cat_sexo";
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
	"m_strTable" => "cat_sexo",
	"m_srcTableName" => "cat_sexo"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "cat_sexo";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "cat_sexo",
	"m_srcTableName" => "cat_sexo"
));

$proto7["m_sql"] = "sexo";
$proto7["m_srcTableName"] = "cat_sexo";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "cat_sexo";
$proto10["m_srcTableName"] = "cat_sexo";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "id";
$proto10["m_columns"][] = "sexo";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "cat_sexo";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "cat_sexo";
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
$proto0["m_srcTableName"]="cat_sexo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_sexo = createSqlQuery_cat_sexo();


	
		
	
$tdatacat_sexo[".sqlquery"] = $queryData_cat_sexo;

$tableEvents["cat_sexo"] = new eventsBase;
$tdatacat_sexo[".hasEvents"] = false;

?>