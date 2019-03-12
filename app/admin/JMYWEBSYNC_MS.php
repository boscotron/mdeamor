<?php
$r['v1']=$jmy->ver([	
		"TABLA"=>$t['head']['TABLA'],		
			"SALIDA"=>"ARRAY"				
	]);				
$fn = (true)? $out->fn([
		"fn"=>"responder-solicitud",
		"token"=>$tkn['token'],
		"ID_F"=>json_encode([$_GET['peticion']]),
		"guardar"=>json_encode($r['v1'])
	]):false;				

	?>