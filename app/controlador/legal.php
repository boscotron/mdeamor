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

$config=[

    "nombre_seccion"=>"Páginas",

    "url_seccion"=>"legal",

    "tabla"=>"vistaweb__legal",

    "vista_pagina"=>"legal_page",

    "lista_pagina"=>"legal_list",

    "breadcrum"=>true

];

$pet = explode('/', strtolower($_GET['peticion'])); 

$url = (trim($pet[0])!='')?trim($pet[0]):''; 

if($url=='instalar')

    $jmyWeb ->pre(['p'=>($jmyWeb->modoEditor())?$jmy->db([$config['tabla']]):['No hay sessión iniciada'],'t'=>'Instalacaión']);

if($url!=''){

    $out = $jmyWeb->cargar(["pagina"=>$url,"tabla"=>$config['tabla']]);

    $out['page'] = $url;

    $out['tabla'] = $config['tabla'];

    $out['nombre_seccion'] = $config['nombre_seccion'];

    $out['url_seccion'] = $config['url_seccion'];

    $out['breadcrum'] = $config['breadcrum'];

    if($jmyWeb->modoEditor() || count($out['otKey'])>0)

        $jmyWeb->cargar_vista(["url"=>$config['vista_pagina'].".php","data"=>$out]);

    else

        $jmyWeb->cargar_vista(["url"=>"error404.php","data"=>['page'=>"404".$config['vista_pagina']]]);

}else{

    $jmyWeb->cargar(["pagina"=>$config['lista_pagina'],"tabla"=>$config['tabla']]);

    $lista = $jmy->ver([	

        "TABLA"=>$config['tabla'] ,

        "COLUMNAS"=>["titulo","imagen","url","fecha"],

        "SALIDA"=>"ARRAY"

    ]);

    //$jmyWeb ->pre(['p'=>[$config,$lista],'t'=>'lista']);

	$jmyWeb->cargar_js(['url'=>$jmyWeb->url_templet(['return'=>1]).'js/nueva_pagina.js']);

    $jmyWeb->cargar_vista([

        "url"=>$config['lista_pagina'].".php",

        "data"=>['page'=>$config['lista_pagina'],"tabla"=>$config['tabla'],"lista"=>$lista['otFm'],"url_seccion"=>$config['url_seccion']]

    ]);

}

?>