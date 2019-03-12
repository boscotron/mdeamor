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

$pet = explode("/",$_GET['peticion']);

if($pet[0]=='__'&&$pet[1]=='auth'){
	$url= $jmyWeb->url_actual(['return'=>true]);
	$u=explode(RUTA_ACTUAL,$url);
	$jmyWeb ->redireccionar($jmyWeb->url_inicio(['return'=>true])."oauth/".$u[1]);
}

$out = $jmy->ver([	
			"TABLA"=>"blog", 		
			"COLUMNAS"=>["titulo","subtitulo","imagen_1","url","fecha","sub_titulo"],
			"SALIDA"=>"ARRAY"
			//"FO"=>true
			//"ID_F"=>'blog'
		]);
$t = $jmyWeb->cargar(["pagina"=>"inicio"]);
//$jmyWeb ->pre(['p'=>$t,'t'=>'TITULO_ARAY']);


$jmyWeb ->cargar_js(["url"=>$jmyWeb->url_templet(['return'=>true])."assets/js/inicio.js"]);
$jmyWeb ->cargar_vista(["url"=>"inicio.php","data"=>["blog"=>$out['otFm']]]);

?>