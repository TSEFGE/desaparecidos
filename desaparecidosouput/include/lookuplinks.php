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

	$lookupTableLinks["cat_edos"]["colaboraciones.Estado"]["edit"] = array("table" => "colaboraciones", "field" => "Estado", "page" => "edit");
	$lookupTableLinks["cat_mpos"]["colaboraciones.Mun"]["edit"] = array("table" => "colaboraciones", "field" => "Mun", "page" => "edit");
	$lookupTableLinks["unidad"]["colaboraciones.uipj"]["edit"] = array("table" => "colaboraciones", "field" => "uipj", "page" => "edit");
	$lookupTableLinks["cat_sexo"]["colaboraciones.Sexo"]["edit"] = array("table" => "colaboraciones", "field" => "Sexo", "page" => "edit");
	$lookupTableLinks["catnacionalidad"]["colaboraciones.Nac"]["edit"] = array("table" => "colaboraciones", "field" => "Nac", "page" => "edit");
	$lookupTableLinks["cat_edos"]["colaboraciones.Origen"]["edit"] = array("table" => "colaboraciones", "field" => "Origen", "page" => "edit");
	$lookupTableLinks["cat_mpos"]["colaboraciones.MpoOrigen"]["edit"] = array("table" => "colaboraciones", "field" => "MpoOrigen", "page" => "edit");
	$lookupTableLinks["cat_escolaridad"]["colaboraciones.Escolaridad"]["edit"] = array("table" => "colaboraciones", "field" => "Escolaridad", "page" => "edit");
	$lookupTableLinks["cat_comp"]["colaboraciones.Compl"]["edit"] = array("table" => "colaboraciones", "field" => "Compl", "page" => "edit");
	$lookupTableLinks["cat_ojos"]["colaboraciones.Ojos"]["edit"] = array("table" => "colaboraciones", "field" => "Ojos", "page" => "edit");
	$lookupTableLinks["cat_piel"]["colaboraciones.Piel"]["edit"] = array("table" => "colaboraciones", "field" => "Piel", "page" => "edit");
	$lookupTableLinks["cat_cabtam"]["colaboraciones.Cab"]["edit"] = array("table" => "colaboraciones", "field" => "Cab", "page" => "edit");
	$lookupTableLinks["cat_cabtip"]["colaboraciones.TCab"]["edit"] = array("table" => "colaboraciones", "field" => "TCab", "page" => "edit");
	$lookupTableLinks["cat_cabcol"]["colaboraciones.Cabcol"]["edit"] = array("table" => "colaboraciones", "field" => "Cabcol", "page" => "edit");
	$lookupTableLinks["cat_nariz"]["colaboraciones.Nariz"]["edit"] = array("table" => "colaboraciones", "field" => "Nariz", "page" => "edit");
	$lookupTableLinks["cat_labios"]["colaboraciones.Labios"]["edit"] = array("table" => "colaboraciones", "field" => "Labios", "page" => "edit");
	$lookupTableLinks["cat_menton"]["colaboraciones.Menton"]["edit"] = array("table" => "colaboraciones", "field" => "Menton", "page" => "edit");
	$lookupTableLinks["cat_cejas"]["colaboraciones.Cejas"]["edit"] = array("table" => "colaboraciones", "field" => "Cejas", "page" => "edit");
	$lookupTableLinks["cat_vfacial"]["colaboraciones.VFacial"]["edit"] = array("table" => "colaboraciones", "field" => "VFacial", "page" => "edit");
	$lookupTableLinks["cat_delito"]["colaboraciones.Delito"]["edit"] = array("table" => "colaboraciones", "field" => "Delito", "page" => "edit");
	$lookupTableLinks["cat_estatus"]["colaboraciones.Status"]["edit"] = array("table" => "colaboraciones", "field" => "Status", "page" => "edit");
	$lookupTableLinks["cat_est_apar"]["colaboraciones.EstApar"]["edit"] = array("table" => "colaboraciones", "field" => "EstApar", "page" => "edit");
	$lookupTableLinks["cat_edos"]["desaparecidos.Estado"]["edit"] = array("table" => "desaparecidos", "field" => "Estado", "page" => "edit");
	$lookupTableLinks["cat_mpos"]["desaparecidos.Mun"]["edit"] = array("table" => "desaparecidos", "field" => "Mun", "page" => "edit");
	$lookupTableLinks["unidad"]["desaparecidos.uipj"]["edit"] = array("table" => "desaparecidos", "field" => "uipj", "page" => "edit");
	$lookupTableLinks["cat_sexo"]["desaparecidos.Sexo"]["edit"] = array("table" => "desaparecidos", "field" => "Sexo", "page" => "edit");
	$lookupTableLinks["catnacionalidad"]["desaparecidos.Nac"]["edit"] = array("table" => "desaparecidos", "field" => "Nac", "page" => "edit");
	$lookupTableLinks["cat_edos"]["desaparecidos.Origen"]["edit"] = array("table" => "desaparecidos", "field" => "Origen", "page" => "edit");
	$lookupTableLinks["cat_mpos"]["desaparecidos.MpoOrigen"]["edit"] = array("table" => "desaparecidos", "field" => "MpoOrigen", "page" => "edit");
	$lookupTableLinks["cat_escolaridad"]["desaparecidos.Escolaridad"]["edit"] = array("table" => "desaparecidos", "field" => "Escolaridad", "page" => "edit");
	$lookupTableLinks["cat_comp"]["desaparecidos.Compl"]["edit"] = array("table" => "desaparecidos", "field" => "Compl", "page" => "edit");
	$lookupTableLinks["cat_ojos"]["desaparecidos.Ojos"]["edit"] = array("table" => "desaparecidos", "field" => "Ojos", "page" => "edit");
	$lookupTableLinks["cat_piel"]["desaparecidos.Piel"]["edit"] = array("table" => "desaparecidos", "field" => "Piel", "page" => "edit");
	$lookupTableLinks["cat_cabtam"]["desaparecidos.Cab"]["edit"] = array("table" => "desaparecidos", "field" => "Cab", "page" => "edit");
	$lookupTableLinks["cat_cabtip"]["desaparecidos.TCab"]["edit"] = array("table" => "desaparecidos", "field" => "TCab", "page" => "edit");
	$lookupTableLinks["cat_cabcol"]["desaparecidos.Cabcol"]["edit"] = array("table" => "desaparecidos", "field" => "Cabcol", "page" => "edit");
	$lookupTableLinks["cat_nariz"]["desaparecidos.Nariz"]["edit"] = array("table" => "desaparecidos", "field" => "Nariz", "page" => "edit");
	$lookupTableLinks["cat_labios"]["desaparecidos.Labios"]["edit"] = array("table" => "desaparecidos", "field" => "Labios", "page" => "edit");
	$lookupTableLinks["cat_menton"]["desaparecidos.Menton"]["edit"] = array("table" => "desaparecidos", "field" => "Menton", "page" => "edit");
	$lookupTableLinks["cat_cejas"]["desaparecidos.Cejas"]["edit"] = array("table" => "desaparecidos", "field" => "Cejas", "page" => "edit");
	$lookupTableLinks["cat_vfacial"]["desaparecidos.VFacial"]["edit"] = array("table" => "desaparecidos", "field" => "VFacial", "page" => "edit");
	$lookupTableLinks["cat_delito"]["desaparecidos.Delito"]["edit"] = array("table" => "desaparecidos", "field" => "Delito", "page" => "edit");
	$lookupTableLinks["cat_estatus"]["desaparecidos.Status"]["edit"] = array("table" => "desaparecidos", "field" => "Status", "page" => "edit");
	$lookupTableLinks["cat_est_apar"]["desaparecidos.EstApar"]["edit"] = array("table" => "desaparecidos", "field" => "EstApar", "page" => "edit");
	$lookupTableLinks["cat_valida"]["desaparecidos.validacion"]["edit"] = array("table" => "desaparecidos", "field" => "validacion", "page" => "edit");
}

?>