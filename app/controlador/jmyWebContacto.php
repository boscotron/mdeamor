<?php
/*
La licencia MIT (MIT)

Copyright (c) 2019 Concomsis S.A. de C.V.

Por la presente se otorga el permiso, sin cargo, a cualquier persona que obtenga una copia de
este software y los archivos de documentación asociados (el "Software"), para tratar en
el Software sin restricciones, incluidos, entre otros, los derechos de
usar, copiar, modificar, fusionar, publicar, distribuir, sublicenciar y / o vender copias de
el Software, y para permitir que las personas a quienes se suministra el Software lo hagan,
sujeto a las siguientes condiciones:

El aviso de copyright anterior y este aviso de permiso se incluirán en todas las
Copias o partes sustanciales del Software.

EL SOFTWARE SE PROPORCIONA "TAL CUAL", SIN GARANTÍA DE NINGÚN TIPO, EXPRESA O
IMPLÍCITOS, INCLUIDOS, PERO NO LIMITADOS A LAS GARANTÍAS DE COMERCIABILIDAD, APTITUD
PARA UN PROPÓSITO PARTICULAR Y NO INCUMPLIMIENTO. EN NINGÚN CASO LOS AUTORES O
LOS TITULARES DEL DERECHO DE AUTOR SERÁN RESPONSABLES POR CUALQUIER RECLAMACIÓN, DAÑOS U OTRAS RESPONSABILIDADES, SI
EN UNA ACCIÓN DE CONTRATO, CORTE O DE OTRA MANERA, DERIVADO DE, FUERA O EN
CONEXIÓN CON EL SOFTWARE O EL USO U OTRAS REPARACIONES EN EL SOFTWARE.
*/
$datos = $_POST["d"];
if(is_array($datos)){
	$html = "Se registro un nuevo contacto: <br>";
	for ($i=0; $i <count($datos) ; $i++) { 
		$html = $html."<br> ".$datos[$i]['campo'].": ".$datos[$i]['valor'];
		$guardar[$datos[$i]['campo']] = $datos[$i]['valor'];
	}
	//$jmy->db(["formularios_contacto"]);	
	$g=$jmy->guardar([	"TABLA"=>"formularios_contacto", 
						"A_D"=>TRUE, 
						"GUARDAR"=>$guardar,
					]);
	$to      = 'jm@comsis.mx';
	$subject = "Nuevo contacto" ;
	$header = "From: noreply@templet.comsis.com\r\n"; 
	$header.= "MIME-Version: 1.0\r\n"; 
	$header.= "Content-Type: text/html; charset=utf-8\r\n"; 
	$header.= "X-Priority: 1\r\n"; 
	mail($to, $subject, $html, $header);
	$out['html']=$html;
}	
echo json_encode([
	"OUT"=>$out,
	"POST"=>$_POST,
	"G"=>$g,
	"guardar"=>$guardar,
	"GET"=>$_GET,
	"REQUEST"=>$_REQUEST
]);
?> 