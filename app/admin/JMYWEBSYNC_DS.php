<?php
$r['v1']=$jmy->ver([	
		"TABLA"=>$t['head']['TABLA'],
		"ID_F"=>$t['head']['ID_F'], 						
	]);				
$r['r1']=json_decode($r['v1']['ot']['global']['contador_meses'],1);
if(is_array($r['r1'])){
	$r['v2']=$jmy->ver([	
			"TABLA"=>$t['head']['TABLA'], 
			"ID_F"=>$r['r1'],
			"SALIDA"=>"ARRAY"							
		]);
}

$fn = (true)? $out->fn([
		"fn"=>"responder-solicitud",
		"token"=>$tkn['token'],
		"ID_F"=>json_encode([$_GET['peticion']]),
		"guardar"=>json_encode(["estadisticas"=>[
						"totales"=>$r['v1']['ot']['global']['visitas'],
						"mensual"=>$r['v2']['otFm'],
					]])
	]):false;				

	?>