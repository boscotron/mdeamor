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
$session = $jmyWeb->session();
 
$out['busqueda']=$jmy->ver([	
    "TABLA"=>"personal",
    "LIKE_V"=>$_POST['servicios'],
]);

 $out['resultado']=$jmy->ver([	
    "TABLA"=>"personal",
    "ID_F"=>$out['busqueda']['otKey'], 
   // "LIKE_V"=>[strtolower($_POST['servicios'])],
    "SALIDA"=>'ARRAY'
]);

$out['ResultadoNombre']=$jmy->ver([	
    "TABLA"=>"clientes_".$session["body"]["api_web"]["ID_F"],
    //"COL"=>["tipo"],
    //"LIKE_V"=>["empleado"],
    "ID_F"=>$out["resultado"]['otKey'],
    "SALIDA"=>'ARRAY',
]);
echo  json_encode(['out'=>$out,'post'=>$_POST]);
//$jmyWeb ->pre(['p'=>$out,'t'=>'TITULO_ARRAY']);