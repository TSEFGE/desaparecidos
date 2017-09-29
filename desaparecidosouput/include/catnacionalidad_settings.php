<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacatnacionalidad = array();	
	$tdatacatnacionalidad[".truncateText"] = true;
	$tdatacatnacionalidad[".NumberOfChars"] = 80; 
	$tdatacatnacionalidad[".ShortName"] = "catnacionalidad";
	$tdatacatnacionalidad[".OwnerID"] = "";
	$tdatacatnacionalidad[".OriginalTable"] = "catnacionalidad";

//	field labels
$fieldLabelscatnacionalidad = array();
$fieldToolTipscatnacionalidad = array();
$pageTitlescatnacionalidad = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscatnacionalidad["Spanish"] = array();
	$fieldToolTipscatnacionalidad["Spanish"] = array();
	$pageTitlescatnacionalidad["Spanish"] = array();
	$fieldLabelscatnacionalidad["Spanish"]["Clave"] = "Clave";
	$fieldToolTipscatnacionalidad["Spanish"]["Clave"] = "";
	$fieldLabelscatnacionalidad["Spanish"]["Nacionalidad"] = "Nacionalidad";
	$fieldToolTipscatnacionalidad["Spanish"]["Nacionalidad"] = "";
	if (count($fieldToolTipscatnacionalidad["Spanish"]))
		$tdatacatnacionalidad[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscatnacionalidad[""] = array();
	$fieldToolTipscatnacionalidad[""] = array();
	$pageTitlescatnacionalidad[""] = array();
	$fieldLabelscatnacionalidad[""]["Clave"] = "Clave";
	$fieldToolTipscatnacionalidad[""]["Clave"] = "";
	$fieldLabelscatnacionalidad[""]["Nacionalidad"] = "Nacionalidad";
	$fieldToolTipscatnacionalidad[""]["Nacionalidad"] = "";
	if (count($fieldToolTipscatnacionalidad[""]))
		$tdatacatnacionalidad[".isUseToolTips"] = true;
}
	
	
	$tdatacatnacionalidad[".NCSearch"] = true;



$tdatacatnacionalidad[".shortTableName"] = "catnacionalidad";
$tdatacatnacionalidad[".nSecOptions"] = 0;
$tdatacatnacionalidad[".recsPerRowList"] = 1;
$tdatacatnacionalidad[".recsPerRowPrint"] = 1;
$tdatacatnacionalidad[".mainTableOwnerID"] = "";
$tdatacatnacionalidad[".moveNext"] = 1;
$tdatacatnacionalidad[".entityType"] = 0;

$tdatacatnacionalidad[".strOriginalTableName"] = "catnacionalidad";




$tdatacatnacionalidad[".showAddInPopup"] = false;

$tdatacatnacionalidad[".showEditInPopup"] = false;

$tdatacatnacionalidad[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacatnacionalidad[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacatnacionalidad[".fieldsForRegister"] = array();

$tdatacatnacionalidad[".listAjax"] = false;

	$tdatacatnacionalidad[".audit"] = false;

	$tdatacatnacionalidad[".locking"] = false;









$tdatacatnacionalidad[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacatnacionalidad[".searchSaving"] = false;
//

$tdatacatnacionalidad[".showSearchPanel"] = true;
		$tdatacatnacionalidad[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacatnacionalidad[".isUseAjaxSuggest"] = false;
else 
	$tdatacatnacionalidad[".isUseAjaxSuggest"] = true;

$tdatacatnacionalidad[".rowHighlite"] = true;



$tdatacatnacionalidad[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacatnacionalidad[".isUseTimeForSearch"] = false;





$tdatacatnacionalidad[".allSearchFields"] = array();
$tdatacatnacionalidad[".filterFields"] = array();
$tdatacatnacionalidad[".requiredSearchFields"] = array();



$tdatacatnacionalidad[".googleLikeFields"] = array();
$tdatacatnacionalidad[".googleLikeFields"][] = "Clave";
$tdatacatnacionalidad[".googleLikeFields"][] = "Nacionalidad";


$tdatacatnacionalidad[".advSearchFields"] = array();
$tdatacatnacionalidad[".advSearchFields"][] = "Clave";
$tdatacatnacionalidad[".advSearchFields"][] = "Nacionalidad";

$tdatacatnacionalidad[".tableType"] = "list";

$tdatacatnacionalidad[".printerPageOrientation"] = 0;
$tdatacatnacionalidad[".nPrinterPageScale"] = 100;

$tdatacatnacionalidad[".nPrinterSplitRecords"] = 40;

$tdatacatnacionalidad[".nPrinterPDFSplitRecords"] = 40;



$tdatacatnacionalidad[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatacatnacionalidad[".pageSize"] = 20;

$tdatacatnacionalidad[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacatnacionalidad[".strOrderBy"] = $tstrOrderBy;

$tdatacatnacionalidad[".orderindexes"] = array();

$tdatacatnacionalidad[".sqlHead"] = "SELECT Clave,  	Nacionalidad";
$tdatacatnacionalidad[".sqlFrom"] = "FROM catnacionalidad";
$tdatacatnacionalidad[".sqlWhereExpr"] = "";
$tdatacatnacionalidad[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacatnacionalidad[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacatnacionalidad[".arrGroupsPerPage"] = $arrGPP;

$tdatacatnacionalidad[".highlightSearchResults"] = true;

$tableKeyscatnacionalidad = array();
$tdatacatnacionalidad[".Keys"] = $tableKeyscatnacionalidad;

$tdatacatnacionalidad[".listFields"] = array();
$tdatacatnacionalidad[".listFields"][] = "Clave";
$tdatacatnacionalidad[".listFields"][] = "Nacionalidad";

$tdatacatnacionalidad[".hideMobileList"] = array();


$tdatacatnacionalidad[".viewFields"] = array();
$tdatacatnacionalidad[".viewFields"][] = "Clave";
$tdatacatnacionalidad[".viewFields"][] = "Nacionalidad";

$tdatacatnacionalidad[".addFields"] = array();
$tdatacatnacionalidad[".addFields"][] = "Nacionalidad";

$tdatacatnacionalidad[".masterListFields"] = array();
$tdatacatnacionalidad[".masterListFields"][] = "Clave";
$tdatacatnacionalidad[".masterListFields"][] = "Nacionalidad";

$tdatacatnacionalidad[".inlineAddFields"] = array();
$tdatacatnacionalidad[".inlineAddFields"][] = "Nacionalidad";

$tdatacatnacionalidad[".editFields"] = array();
$tdatacatnacionalidad[".editFields"][] = "Nacionalidad";

$tdatacatnacionalidad[".inlineEditFields"] = array();
$tdatacatnacionalidad[".inlineEditFields"][] = "Nacionalidad";

$tdatacatnacionalidad[".exportFields"] = array();
$tdatacatnacionalidad[".exportFields"][] = "Clave";
$tdatacatnacionalidad[".exportFields"][] = "Nacionalidad";

$tdatacatnacionalidad[".importFields"] = array();
$tdatacatnacionalidad[".importFields"][] = "Clave";
$tdatacatnacionalidad[".importFields"][] = "Nacionalidad";

$tdatacatnacionalidad[".printFields"] = array();
$tdatacatnacionalidad[".printFields"][] = "Clave";
$tdatacatnacionalidad[".printFields"][] = "Nacionalidad";

//	Clave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Clave";
	$fdata["GoodName"] = "Clave";
	$fdata["ownerTable"] = "catnacionalidad";
	$fdata["Label"] = GetFieldLabel("catnacionalidad","Clave"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Clave"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Clave";
	
		
		
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
	
	
	
	

	

	
	$tdatacatnacionalidad["Clave"] = $fdata;
//	Nacionalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nacionalidad";
	$fdata["GoodName"] = "Nacionalidad";
	$fdata["ownerTable"] = "catnacionalidad";
	$fdata["Label"] = GetFieldLabel("catnacionalidad","Nacionalidad"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Nacionalidad"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nacionalidad";
	
		
		
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
	
	
	
	

	

	
	$tdatacatnacionalidad["Nacionalidad"] = $fdata;

	
$tables_data["catnacionalidad"]=&$tdatacatnacionalidad;
$field_labels["catnacionalidad"] = &$fieldLabelscatnacionalidad;
$fieldToolTips["catnacionalidad"] = &$fieldToolTipscatnacionalidad;
$page_titles["catnacionalidad"] = &$pageTitlescatnacionalidad;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["catnacionalidad"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["catnacionalidad"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_catnacionalidad()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Clave,  	Nacionalidad";
$proto0["m_strFrom"] = "FROM catnacionalidad";
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
	"m_strName" => "Clave",
	"m_strTable" => "catnacionalidad",
	"m_srcTableName" => "catnacionalidad"
));

$proto5["m_sql"] = "Clave";
$proto5["m_srcTableName"] = "catnacionalidad";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Nacionalidad",
	"m_strTable" => "catnacionalidad",
	"m_srcTableName" => "catnacionalidad"
));

$proto7["m_sql"] = "Nacionalidad";
$proto7["m_srcTableName"] = "catnacionalidad";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "catnacionalidad";
$proto10["m_srcTableName"] = "catnacionalidad";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "Clave";
$proto10["m_columns"][] = "Nacionalidad";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "catnacionalidad";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "catnacionalidad";
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
$proto0["m_srcTableName"]="catnacionalidad";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_catnacionalidad = createSqlQuery_catnacionalidad();


	
		
	
$tdatacatnacionalidad[".sqlquery"] = $queryData_catnacionalidad;

$tableEvents["catnacionalidad"] = new eventsBase;
$tdatacatnacionalidad[".hasEvents"] = false;

?>