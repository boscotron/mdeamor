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
$DI=($_GET['ruta']!='')?$_GET['ruta']:TEMPLET_HOME;$RU=RUTA_APP;$ER=0;
require($RU."class/jmy3webCore.class.php");$jmycore=new JMY3WEBCORE();
require($RU."class/token_jmy.class.php");$jmyconect=new HiJMY();
if(ESTADO_WEB=='PUBLICO'||$jmycore->acceso()){
	require($RU."class/jmy3mysql.class.php"); $jmy = new JMY3MySQL();
	require($RU."class/jmy3webHelp.class.php"); $jmyWeb = new JMY3WEB();
	if(!in_array($DI,['entrar','INSTALAR','JMYWEBSYNC','JMYWEBCODE'])){
		if(file_exists($RU.'controlador/'.$DI.'.php')) include($RU.'controlador/'.$DI.'.php'); else $ER++;
		if(file_exists(BASE_TEMPLET.$DI.'.php')&&$ER>0) include(BASE_TEMPLET.$DI.'.php'); else if($ER>0) include($RU.'controlador/error404.php');
	}else{ if(file_exists($RU.'admin/'.$DI.'.php')) include($RU.'admin/'.$DI.'.php'); else include($RU.'controlador/error404.php'); }
}else{ if(file_exists(BASE_TEMPLET.TEMPLET_MANTENIMIENTO)) include(BASE_TEMPLET.TEMPLET_MANTENIMIENTO); else include($RU.'mantenimiento.php'); }
?> 