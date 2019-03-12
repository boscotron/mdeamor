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
/*
require('../config.inc.php');
require("../app/class/token_jmy.class.php");
require("../app/class/jmy3mysql.class.php");
*/
$jmyconect = new HiJMY();
$jmy = new JMY3MySQL();
$ID_F = '';
$get = $jmyconect->get($_POST);
$out=[
	//"JMY_KEY"=>JMY_KEY,
	//"JMY_SECRET_KEY"=>JMY_SECRET_KEY,
	"GET"=>$get,
	
	"db"=>$jmy->db([$get['post']['TABLA']]),
	
					
	"guardar"=>$jmy->guardar([	"TABLA"=>"PRODUCTOS", // STRING
								"ID_F"=>[$get['id']], // Array
								"A_D"=>TRUE, 
								"GUARDAR"=>$get['post']['CAMPOS'],
					]),
	
	"ver"=>$jmy->ver([	"TABLA"=>$get['post']['TABLA'], // STRING
						//"ID_D"=>["NOMBRE","APELLIDO","SEXO","SEXO"], // ARRAY OPCIONAL
						"ID_F"=>$get['post']['TABLA'], // STRING OPCIONAL
						//"ID_V"=>[5,6], // ARRAY OPCIONAL
						//"ID_S"=>[7,8], // ARRAY OPCIONAL
						//"LIKE_V"=>["angora","luciernaga"], // ARRAY OPCIONAL
						//"LIKE_V_OPER"=>"AND" // STRING OPCIONAL
					]),				
	/*				
	"borrar"=>$jmy->borrar([	"TABLA"=>"PRODUCTOS", // STRING
								"ID_D"=>["APELLIDO"], // ARRAY 
								"ID_F"=>$ID_F, // STRING 
					]),
	"ver2"=>$jmy->ver([	"TABLA"=>"PRODUCTOS", // STRING
						"ID_D"=>["NOMBRE","APELLIDO","SEXO","SEXO"], // ARRAY OPCIONAL
						"ID_F"=>$ID_F, // STRING OPCIONAL
						//"ID_V"=>[5,6], // ARRAY OPCIONAL
						//"ID_S"=>[7,8], // ARRAY OPCIONAL
						//"LIKE_V"=>["angora","luciernaga"], // ARRAY OPCIONAL
						//"LIKE_V_OPER"=>"AND" // STRING OPCIONAL
					]),*/
					
];
echo json_encode($out);
/*echo '<pre>';
print_r($out);
echo '</pre>';*/