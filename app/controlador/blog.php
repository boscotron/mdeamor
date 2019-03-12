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

Instalacion, ingrese a la ruta  http://TUHOST.COM/blog/instalar

Para crear nuevos posts use la url: http://TUHOST.COM/blog/NOMBRE-DE-TU-POST/guardar

*/
$gt = $_GET;

$gu = true; // ingreso de blogs 
$tabla = 'blog';

if($gt['peticion']=='instalar'){ $jmyWeb->pre(["p"=>$jmy->db([$tabla])]); }else{
	$gt['peticion']=($_POST['nuevo_titulo']!='')?$_POST['nuevo_titulo']:$gt['peticion'];
	if($gt['peticion']!=''){


		/* tratamiento a la url */
		$url = strtolower($gt['peticion']); // quitar espacios trim() y minusculas strolower()		
		$url = preg_replace("/^[0-9a-zA-Z]+$/","",$url); // quitar caracteres no aceptados mas los que esten en la expreción regular		
		$pet = explode('/', $url); // separa instrucciones para el blog
		$url = $pet[0]; // url de registro en base de datos
		if(in_array('pre',$pet)){ $jmyWeb ->pre(["p"=>$url]); }
		/* fin de tratamiento URL */
		$jmy = new JMY3MySQL();
		
		$o = $jmy->ver([	
				"TABLA"=>$tabla, 		
				"V"=>$url, 
				"COL"=>["url"],
				//"SALIDA"=>"ID_F"
			]);

		if(in_array('pre',$pet)){ $jmyWeb ->pre(["p"=>$o]); }
		
		/* Rutina para guardar nuevo registro o existente */
		if($gu && in_array('guardar',$pet)){ //verifica que se encuentre en las reglas de guardar
			$g =[ 'url'=>$url ];

			$g =$jmy->guardar([	
				"TABLA"=>$tabla, 
				"ID_F"=>($o['otKey'][0]!='')?$o['otKey'][0]:uniqid(), // Genera ID si es nuevo registro
				"A_D"=>TRUE, 
				"GUARDAR"=>$g,
			]);

			$o = $jmy->ver([	
				"TABLA"=>$tabla, 		
				"V"=>$url, 
				"COL"=>["url"],
			]);
		}

		if($gu && count($o['ot'])<1){

			$out['alerta']=[
				'mensaje'=>"Página nueva, ¿quieres guardarla?",
				'link'=>".blog/".$url."/guardar",
			];
			if(in_array('pre',$pet)){
				$jmyWeb ->pre(["p"=>$o,"t"=>"o"]);
				$jmyWeb ->pre(["p"=>$out,"t"=>"out"]);
			}else{
				$jmyWeb ->pre(["p"=>$out,"t"=>$t]);
				$jmyWeb ->cargar_vista(["url"=>"blog-single.php","data"=>$out,"url"=>$url]);
			}			

		}elseif(count($o['otKey'])>0){

			//carga de datos del tema de blog
			$tema = $jmyWeb -> cargar([ "pagina"=>'blog',
									 	"tabla"=>"vistaweb", 
									 	"secundario"=>"tema_blog", 
									]);
			$out['id']=$o['otKey'][0];
			//carga de datos del post en el blog
			$t = $jmyWeb -> cargar([ "pagina"=>$out['id'],
									 "tabla"=>$tabla 
									]);
			//Últimos Post
			$ultimos = $jmy->ver([	
				"TABLA"=>"blog", 		
				"COLUMNAS"=>["titulo","imagen_1","url","fecha"],
				"LIMIT"=>"LIMIT 4"
				//"FO"=>true
				//"ID_F"=>'blog'
			]);

			if(in_array('pre',$pet)){				
				/*$jmyWeb ->pre(['p'=>$_POST,'t'=>'POST']);
				$jmyWeb ->pre(['p'=>$o,'t'=>'o']);
				$jmyWeb ->pre(['p'=>$ultimos,'t'=>'ULTIMOS']);
				$jmyWeb ->pre(['p'=>$tema,'t'=>'TEMA']);
				$jmyWeb ->pre(['p'=>$out,'t'=>'TITULO_ARAY']);
				$jmyWeb ->pre(['p'=>$t,'t'=>'TTT']);*/
				$jmyWeb ->pre(["p"=>$out,"t"=>"Variables disponibles en $data"]);
			}else{
				$jmyWeb -> cargar_vista(["url"=>"blog-single.php",
										 "data"=>["url"=>$out['id'],"blog"=>$out,"ultimos"=>$ultimos]
										]);			}

		}else{
			$jmyWeb ->cargar_vista(["url"=>"error404.php"]);
		}
		//$out = $jmyWeb->cargar(["pagina"=>$nombre]);
		//$out = $print[ot][$nombre];
		//$jmyWeb ->pre(['p'=>$out,'t'=>'TITULO_ARAY']);
	}else{ // CARGA LA PAGINA DE LISTA DE BLOG
		$out = $jmy->ver([	
			"TABLA"=>"blog", 		
			"COLUMNAS"=>["titulo","texto","imagen_1","url","fecha","autor","call_cat"], // Columnas en petición 
			"SALIDA"=>"ARRAY"
		]);
		$p =$jmyWeb -> cargar([ "pagina"=>"blog",
								"tabla"=>'vistaweb'
									]);
		$jmyWeb ->cargar_vista(["url"=>"blog.php","data"=>["resultados"=>$out['otFm']]]);
	}
}
?>