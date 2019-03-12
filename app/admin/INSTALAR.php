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
//require('../../config.inc.php');
$cu=new mysqli(DB_HO,DB_US,DB_PA,DB_DB);
if($cu->connect_error){$error[]='Error de Conexión ('.$mysqli->connect_errno.')'.$mysqli->error;}else{
$n='CREATE TABLE IF NOT EXISTS `cat_d` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(250) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `NAME` (`NAME`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;';
if(!$cu->query($n)){$error[] = "Tabla existente-".$cu->error;}else{$jmyWeb ->pre(['p'=>['db'=>true],'t'=>'CAT INDEX']);}
$jmyWeb ->pre(['p'=>$jmy->db(['vistaweb','blog','catalogos']),'t'=>'Auto DB']);
if(TABLAS_EXTRAS!=''){
  $jmyWeb ->pre(['p'=>$jmy->db(explode(',',TABLAS_EXTRAS)),'t'=>'Extras DB']);
}

/*comprobacion */
$jmy->guardar([
  "TABLA"=>"vistaweb",
  "ID"=>"TEST",
  "A_D"=>true,
  "GUARDAR"=>["VARIABLE_PRUEBA"=>"Hola bienvenido a JMYWeb ".JMY_VERSION.". Instalación correcta."]
  ]);
$jmyWeb ->pre(['p'=>$jmy->ver(["TABLA"=>"vistaweb","ID"=>"TEST"]),'t'=>'Prueba DB']);
/*fin comprobacion */
if(count($error)>0){
  $jmyWeb ->pre(['p'=>$error,'t'=>'ERROR']);
}else{
  $jmyWeb ->redireccionar(RUTA_ACTUAL.'entrar/instalar');

}


}