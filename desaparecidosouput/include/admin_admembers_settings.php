<?php
require_once(getabspath("classes/cipherer.php"));




$tdataadmin_admembers = array();	
	$tdataadmin_admembers[".truncateText"] = true;
	$tdataadmin_admembers[".NumberOfChars"] = 80; 
	$tdataadmin_admembers[".ShortName"] = "admin_admembers";
	$tdataadmin_admembers[".OwnerID"] = "";
	$tdataadmin_admembers[".OriginalTable"] = "desaparecidos_uggroups";

//	field labels
$fieldLabelsadmin_admembers = array();
$fieldToolTipsadmin_admembers = array();
$pageTitlesadmin_admembers = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsadmin_admembers["Spanish"] = array();
	$fieldToolTipsadmin_admembers["Spanish"] = array();
	$pageTitlesadmin_admembers["Spanish"] = array();
	$fieldLabelsadmin_admembers["Spanish"]["GroupID"] = "Group ID";
	$fieldToolTipsadmin_admembers["Spanish"]["GroupID"] = "";
	$fieldLabelsadmin_admembers["Spanish"]["Label"] = "Label";
	$fieldToolTipsadmin_admembers["Spanish"]["Label"] = "";
	if (count($fieldToolTipsadmin_admembers["Spanish"]))
		$tdataadmin_admembers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsadmin_admembers[""] = array();
	$fieldToolTipsadmin_admembers[""] = array();
	$pageTitlesadmin_admembers[""] = array();
	$fieldLabelsadmin_admembers[""]["GroupID"] = "Group ID";
	$fieldToolTipsadmin_admembers[""]["GroupID"] = "";
	$fieldLabelsadmin_admembers[""]["Label"] = "Label";
	$fieldToolTipsadmin_admembers[""]["Label"] = "";
	if (count($fieldToolTipsadmin_admembers[""]))
		$tdataadmin_admembers[".isUseToolTips"] = true;
}
	
	
	$tdataadmin_admembers[".NCSearch"] = true;



$tdataadmin_admembers[".shortTableName"] = "admin_admembers";
$tdataadmin_admembers[".nSecOptions"] = 0;
$tdataadmin_admembers[".recsPerRowList"] = 1;
$tdataadmin_admembers[".recsPerRowPrint"] = 1;
$tdataadmin_admembers[".mainTableOwnerID"] = "";
$tdataadmin_admembers[".moveNext"] = 1;
$tdataadmin_admembers[".entityType"] = 1;

$tdataadmin_admembers[".strOriginalTableName"] = "desaparecidos_uggroups";




$tdataadmin_admembers[".showAddInPopup"] = false;

$tdataadmin_admembers[".showEditInPopup"] = false;

$tdataadmin_admembers[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadmin_admembers[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadmin_admembers[".fieldsForRegister"] = array();

$tdataadmin_admembers[".listAjax"] = false;

	$tdataadmin_admembers[".audit"] = false;

	$tdataadmin_admembers[".locking"] = false;









$tdataadmin_admembers[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataadmin_admembers[".searchSaving"] = false;
//

$tdataadmin_admembers[".showSearchPanel"] = true;
		$tdataadmin_admembers[".flexibleSearch"] = true;		

if (isMobile())
	$tdataadmin_admembers[".isUseAjaxSuggest"] = false;
else 
	$tdataadmin_admembers[".isUseAjaxSuggest"] = true;

$tdataadmin_admembers[".rowHighlite"] = true;



$tdataadmin_admembers[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_admembers[".isUseTimeForSearch"] = false;





$tdataadmin_admembers[".allSearchFields"] = array();
$tdataadmin_admembers[".filterFields"] = array();
$tdataadmin_admembers[".requiredSearchFields"] = array();

$tdataadmin_admembers[".allSearchFields"][] = "GroupID";
	$tdataadmin_admembers[".allSearchFields"][] = "Label";
	

$tdataadmin_admembers[".googleLikeFields"] = array();
$tdataadmin_admembers[".googleLikeFields"][] = "GroupID";
$tdataadmin_admembers[".googleLikeFields"][] = "Label";


$tdataadmin_admembers[".advSearchFields"] = array();
$tdataadmin_admembers[".advSearchFields"][] = "GroupID";
$tdataadmin_admembers[".advSearchFields"][] = "Label";

$tdataadmin_admembers[".tableType"] = "list";

$tdataadmin_admembers[".printerPageOrientation"] = 0;
$tdataadmin_admembers[".nPrinterPageScale"] = 100;

$tdataadmin_admembers[".nPrinterSplitRecords"] = 40;

$tdataadmin_admembers[".nPrinterPDFSplitRecords"] = 40;



$tdataadmin_admembers[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataadmin_admembers[".pageSize"] = 20;

$tdataadmin_admembers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadmin_admembers[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_admembers[".orderindexes"] = array();

$tdataadmin_admembers[".sqlHead"] = "SELECT GroupID,  	`Label`";
$tdataadmin_admembers[".sqlFrom"] = "FROM desaparecidos_uggroups";
$tdataadmin_admembers[".sqlWhereExpr"] = "";
$tdataadmin_admembers[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_admembers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_admembers[".arrGroupsPerPage"] = $arrGPP;

$tdataadmin_admembers[".highlightSearchResults"] = true;

$tableKeysadmin_admembers = array();
$tableKeysadmin_admembers[] = "GroupID";
$tdataadmin_admembers[".Keys"] = $tableKeysadmin_admembers;

$tdataadmin_admembers[".listFields"] = array();
$tdataadmin_admembers[".listFields"][] = "GroupID";
$tdataadmin_admembers[".listFields"][] = "Label";

$tdataadmin_admembers[".hideMobileList"] = array();


$tdataadmin_admembers[".viewFields"] = array();
$tdataadmin_admembers[".viewFields"][] = "GroupID";
$tdataadmin_admembers[".viewFields"][] = "Label";

$tdataadmin_admembers[".addFields"] = array();
$tdataadmin_admembers[".addFields"][] = "Label";

$tdataadmin_admembers[".masterListFields"] = array();
$tdataadmin_admembers[".masterListFields"][] = "GroupID";
$tdataadmin_admembers[".masterListFields"][] = "Label";

$tdataadmin_admembers[".inlineAddFields"] = array();
$tdataadmin_admembers[".inlineAddFields"][] = "Label";

$tdataadmin_admembers[".editFields"] = array();
$tdataadmin_admembers[".editFields"][] = "Label";

$tdataadmin_admembers[".inlineEditFields"] = array();
$tdataadmin_admembers[".inlineEditFields"][] = "Label";

$tdataadmin_admembers[".exportFields"] = array();
$tdataadmin_admembers[".exportFields"][] = "GroupID";
$tdataadmin_admembers[".exportFields"][] = "Label";

$tdataadmin_admembers[".importFields"] = array();
$tdataadmin_admembers[".importFields"][] = "GroupID";
$tdataadmin_admembers[".importFields"][] = "Label";

$tdataadmin_admembers[".printFields"] = array();
$tdataadmin_admembers[".printFields"][] = "GroupID";
$tdataadmin_admembers[".printFields"][] = "Label";

//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "desaparecidos_uggroups";
	$fdata["Label"] = GetFieldLabel("admin_admembers","GroupID"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "GroupID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GroupID";
	
		
		
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

	

	
	$tdataadmin_admembers["GroupID"] = $fdata;
//	Label
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Label";
	$fdata["GoodName"] = "Label";
	$fdata["ownerTable"] = "desaparecidos_uggroups";
	$fdata["Label"] = GetFieldLabel("admin_admembers","Label"); 
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
	
		$fdata["strField"] = "Label"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Label`";
	
		
		
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
			$edata["EditParams"].= " maxlength=300";
	
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

	

	
	$tdataadmin_admembers["Label"] = $fdata;

	
$tables_data["admin_admembers"]=&$tdataadmin_admembers;
$field_labels["admin_admembers"] = &$fieldLabelsadmin_admembers;
$fieldToolTips["admin_admembers"] = &$fieldToolTipsadmin_admembers;
$page_titles["admin_admembers"] = &$pageTitlesadmin_admembers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_admembers"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["admin_admembers"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_admin_admembers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "GroupID,  	`Label`";
$proto0["m_strFrom"] = "FROM desaparecidos_uggroups";
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
	"m_strName" => "GroupID",
	"m_strTable" => "desaparecidos_uggroups",
	"m_srcTableName" => "admin_admembers"
));

$proto5["m_sql"] = "GroupID";
$proto5["m_srcTableName"] = "admin_admembers";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Label",
	"m_strTable" => "desaparecidos_uggroups",
	"m_srcTableName" => "admin_admembers"
));

$proto7["m_sql"] = "`Label`";
$proto7["m_srcTableName"] = "admin_admembers";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "desaparecidos_uggroups";
$proto10["m_srcTableName"] = "admin_admembers";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "GroupID";
$proto10["m_columns"][] = "Label";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "desaparecidos_uggroups";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "admin_admembers";
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
$proto0["m_srcTableName"]="admin_admembers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_admembers = createSqlQuery_admin_admembers();


	
		
	
$tdataadmin_admembers[".sqlquery"] = $queryData_admin_admembers;

$tableEvents["admin_admembers"] = new eventsBase;
$tdataadmin_admembers[".hasEvents"] = false;

?>