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
if($jmyWeb->sesion()){
	$o=["error"=>"datos insuficientes"];
	$p=$jmyWeb->modulos();
	$ps=0;
	for($i=0; $i < count($p['modulos_permisos']); $i++){
		if(!$ps)
			$ps=( $p['modulos_permisos'][$i]['permiso']>=1)?true:false;
	}
	if($_POST['pagina']!=''&&$_POST['id']!=''&&$_POST['valor']!='' && ($_SESSION['JMY3WEB'][DOY] || $ps)){
		$o=$jmyWeb->guardar(['pagina'=>$_POST['pagina'],'id'=>$_POST['id'],'valor'=>$_POST['valor'],'tabla'=>($_POST['tabla']!='')?$_POST['tabla']:'vistaweb','opciones'=>$_POST['opciones']]);
		if($_POST['opciones']['href']!='')
			$o['href']=$jmyWeb->guardar(['pagina'=>$_POST['pagina'],'id'=>$_POST['id'].'_href','valor'=>$_POST['opciones']['href'],'tabla'=>$_POST['tabla']]);
	}elseif($_POST['pagina']!=''&&$_POST['id']!=''&&$_POST['valor']!=''){
		$o=['out'=>'No tienes acceso a escribir en esta sección'];
	}
	$o['POST']=$_POST;
	$o['p']=$p;
	$o['ps']=$ps;
}else{
	$o=["error"=>"No hay sesión activa"];
}
echo json_encode($o);
?>