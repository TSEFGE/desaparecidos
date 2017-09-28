<?php
$dalTabledesaparecidos_audit = array();
$dalTabledesaparecidos_audit["id"] = array("type"=>3,"varname"=>"id");
$dalTabledesaparecidos_audit["datetime"] = array("type"=>135,"varname"=>"datetime");
$dalTabledesaparecidos_audit["ip"] = array("type"=>200,"varname"=>"ip");
$dalTabledesaparecidos_audit["user"] = array("type"=>200,"varname"=>"user");
$dalTabledesaparecidos_audit["table"] = array("type"=>200,"varname"=>"table");
$dalTabledesaparecidos_audit["action"] = array("type"=>200,"varname"=>"action");
$dalTabledesaparecidos_audit["description"] = array("type"=>201,"varname"=>"description");
	$dalTabledesaparecidos_audit["id"]["key"]=true;

$dal_info["desaparecidos_at_localhost__desaparecidos_audit"] = &$dalTabledesaparecidos_audit;
?>