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
if(MODO_DESAROLLADOR || $_SESSION['JMY3WEB'][DOY]) {
 echo $jmyWeb->archivos([	'ruta'=>'carpeta/',
					'height'=>'500',
					'width'=>'100%',
					'permisos'=>[ 	
								//'des_del_file'=>true, // Desactivar eleiminar archivos
								//'des_regresar'=>true,
								//'des_cre_folder'=>true,
								//'des_del_folder'=>true,
								//'des_upload'=>true,
								//'des_rename_files'=>true,
								//'des_rename_folders'=>true,
								//'des_duplicate'=>true,
								//'des_breadcrumb'=>true,
						]
			]);
}else{
	$jmyWeb ->cargar_vista(["url"=>"error404.php"]);	
}

//$jmyWeb ->cargar_vista(["url"=>"contacto.php"]);

?>