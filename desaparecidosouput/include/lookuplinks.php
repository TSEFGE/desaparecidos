<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["cat_edos"]["desaparecidos2017.Estado"]["edit"] = array("table" => "desaparecidos2017", "field" => "Estado", "page" => "edit");
	$lookupTableLinks["cat_mpos"]["desaparecidos2017.Mun"]["edit"] = array("table" => "desaparecidos2017", "field" => "Mun", "page" => "edit");
	$lookupTableLinks["unidad"]["desaparecidos2017.uipj"]["edit"] = array("table" => "desaparecidos2017", "field" => "uipj", "page" => "edit");
	$lookupTableLinks["cat_sexo"]["desaparecidos2017.Sexo"]["edit"] = array("table" => "desaparecidos2017", "field" => "Sexo", "page" => "edit");
	$lookupTableLinks["catnacionalidad"]["desaparecidos2017.Nac"]["edit"] = array("table" => "desaparecidos2017", "field" => "Nac", "page" => "edit");
	$lookupTableLinks["cat_edos"]["desaparecidos2017.Origen"]["edit"] = array("table" => "desaparecidos2017", "field" => "Origen", "page" => "edit");
	$lookupTableLinks["cat_escolaridad"]["desaparecidos2017.Escolaridad"]["edit"] = array("table" => "desaparecidos2017", "field" => "Escolaridad", "page" => "edit");
	$lookupTableLinks["cat_comp"]["desaparecidos2017.Compl"]["edit"] = array("table" => "desaparecidos2017", "field" => "Compl", "page" => "edit");
	$lookupTableLinks["cat_ojos"]["desaparecidos2017.Ojos"]["edit"] = array("table" => "desaparecidos2017", "field" => "Ojos", "page" => "edit");
	$lookupTableLinks["cat_piel"]["desaparecidos2017.Piel"]["edit"] = array("table" => "desaparecidos2017", "field" => "Piel", "page" => "edit");
	$lookupTableLinks["cat_cabtam"]["desaparecidos2017.Cab"]["edit"] = array("table" => "desaparecidos2017", "field" => "Cab", "page" => "edit");
	$lookupTableLinks["cat_cabtip"]["desaparecidos2017.TCab"]["edit"] = array("table" => "desaparecidos2017", "field" => "TCab", "page" => "edit");
	$lookupTableLinks["cat_cabcol"]["desaparecidos2017.Cabcol"]["edit"] = array("table" => "desaparecidos2017", "field" => "Cabcol", "page" => "edit");
	$lookupTableLinks["cat_nariz"]["desaparecidos2017.Nariz"]["edit"] = array("table" => "desaparecidos2017", "field" => "Nariz", "page" => "edit");
	$lookupTableLinks["cat_labios"]["desaparecidos2017.Labios"]["edit"] = array("table" => "desaparecidos2017", "field" => "Labios", "page" => "edit");
	$lookupTableLinks["cat_menton"]["desaparecidos2017.Menton"]["edit"] = array("table" => "desaparecidos2017", "field" => "Menton", "page" => "edit");
	$lookupTableLinks["cat_cejas"]["desaparecidos2017.Cejas"]["edit"] = array("table" => "desaparecidos2017", "field" => "Cejas", "page" => "edit");
	$lookupTableLinks["cat_vfacial"]["desaparecidos2017.VFacial"]["edit"] = array("table" => "desaparecidos2017", "field" => "VFacial", "page" => "edit");
	$lookupTableLinks["cat_delito"]["desaparecidos2017.Delito"]["edit"] = array("table" => "desaparecidos2017", "field" => "Delito", "page" => "edit");
	$lookupTableLinks["cat_estatus"]["desaparecidos2017.Status"]["edit"] = array("table" => "desaparecidos2017", "field" => "Status", "page" => "edit");
	$lookupTableLinks["cat_est_apar"]["desaparecidos2017.EstApar"]["edit"] = array("table" => "desaparecidos2017", "field" => "EstApar", "page" => "edit");
}

?>