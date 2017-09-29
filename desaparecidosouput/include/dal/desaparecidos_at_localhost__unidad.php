<?php
$dalTableunidad = array();
$dalTableunidad["id"] = array("type"=>3,"varname"=>"id");
$dalTableunidad["nombre"] = array("type"=>200,"varname"=>"nombre");
$dalTableunidad["direccion"] = array("type"=>200,"varname"=>"direccion");
$dalTableunidad["latitud"] = array("type"=>200,"varname"=>"latitud");
$dalTableunidad["longitud"] = array("type"=>200,"varname"=>"longitud");
$dalTableunidad["fiscal"] = array("type"=>200,"varname"=>"fiscal");
$dalTableunidad["telefono"] = array("type"=>200,"varname"=>"telefono");
$dalTableunidad["distrito"] = array("type"=>200,"varname"=>"distrito");
$dalTableunidad["region"] = array("type"=>200,"varname"=>"region");
$dalTableunidad["unidad"] = array("type"=>200,"varname"=>"unidad");
$dalTableunidad["idFiscal"] = array("type"=>3,"varname"=>"idFiscal");
	$dalTableunidad["id"]["key"]=true;

$dal_info["desaparecidos_at_localhost__unidad"] = &$dalTableunidad;
?>