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
$gt = $_GET;
$url = strtolower($gt['peticion']); // quitar espacios trim() y minusculas strolower()
//$url = preg_replace("/^[0-9a-zA-Z]+$/","",$url); // quitar caracteres no aceptados mas los que esten en la expreción regular
$pet = explode('/', $url); // separa instrucciones para el blog
$url = trim($pet[0]); // url de registro en base de datos
//$jmyWeb ->pre(['p'=>$url,'t'=>'URL']);

/*$db = "servicios";
$t = $jmyWeb->modoEditor();
if($jmyWeb->modoEditor()){
	$VerificarDB = new JMY3MySQL();
	$VerificarDB->db([$db]);
}*/



if(in_array('pre',$pet)){ 
	$jmyWeb ->pre(['p'=>$out,'t'=>'PRE']);
}else{
	if($url!=''){
		$jmyWeb->cargar(["pagina"=>$url]);
		$out['pagina']=$url;
		echo $jmyWeb ->cargar_vista(["url"=>"servicios-detalles.php","data"=>$out]);	
	}else{
		$out = $jmyWeb->cargar(["pagina"=>"servicios"]);
		//$jmyWeb ->pre(['p'=>$out,'t'=>'TITULO_ARAY']);
		$out = $print[ot]['inicio'];
		$jmyWeb ->cargar_vista(["url"=>"servicios.php","data"=>$out]);
	}
}
?>