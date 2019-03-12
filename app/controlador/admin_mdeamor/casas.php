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
//$peticion = explode("/",$_GET['peticion']);
$data['peticion'] = $peticion;
$tabla = 'general_ninos';
$session = $jmyWeb->session();
$modulos = $jmyWeb->modulos(['modulos_permisos'=>true]);
$data['modulos'] = $modulos['modulos_permisos'];
if($data['modulos']['casas']>0){
    $tabla=$tabla.'_'.$session['body']['api_web']['ID_F'];
    switch ($peticion[1]) {
        case 'instalar':            
            if($session['permiso']>3)
                $jmyWeb ->pre(['p'=>$jmy->db([$tabla]),'t'=>'Estado DB']);
            else
                $jmyWeb ->pre(['p'=>'Usuario sin acceso a esta sección','t'=>'Error']);
        break;
        case 'nino':
            
            $jmyWeb->cargar_css(["url"=>$jmyWeb->url_app(['return'=>true])."js/jsoneditor/jsoneditor.min.css"]);    
            $jmyWeb->cargar_js(["url"=>$jmyWeb->url_app(['return'=>true])."js/jsoneditor/jsoneditor.min.js"]);    
            $jmyWeb->cargar_js(["url"=>$jmyWeb->url_templet(["return"=>true])."js/modernizr.custom.js"]);
            $jmyWeb->cargar_js(["url"=>$jmyWeb->url_templet(["return"=>true])."js/sweetalert2.all.js"]);
            $jmyWeb->cargar_js(["url"=>$jmyWeb->url_templet(["return"=>true])."js/administrador_casas.js?f=".$version]);
            $data['tabla'] = $tabla;
            $data['id_nino'] = ($peticion[2]!='')?$peticion[2]:uniqid();
            $data['carga'] = $jmyWeb -> cargar([ 
                "pagina"=>$data['id_nino'],
                "tabla"=>$tabla
            ]); 
           // $jmyWeb ->pre(['p'=>$data['carga'],'t'=>'TITULO_ARRAY']);
            $jmyWeb -> cargar([ 
                "pagina"=>"configuracion",
                "tabla"=>$tabla,
                "secundario"=>"configuracion"
            ]);
            //$jmyWeb ->pre(['p'=>$jmy->ver(["TABLA"=>$tabla,"ID"=>$data['id_nino'],"FO"=>true]),'t'=>'TITULO_ARRAY']);
            $url_marco="casas/nino.php";
        break;
        default:
            $jmyWeb->cargar_js(["url"=>$jmyWeb->url_templet(["return"=>true])."js/modernizr.custom.js"]);
            $jmyWeb->cargar_js(["url"=>$jmyWeb->url_templet(["return"=>true])."js/sweetalert2.all.js"]);
            $jmyWeb->cargar_css(["url"=>"https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"]);    
            $jmyWeb->cargar_js(["url"=>"https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"]);    
            $jmyWeb->cargar_js(["url"=>$jmyWeb->url_templet(["return"=>true])."js/administrador_casas.js?f=".$version]);
            $data['tabla'] = $tabla;
            $data['id_nino'] = ($peticion[2]!='')?$peticion[2]:uniqid();
            $data['carga'] = $jmyWeb -> cargar([ 
                "pagina"=>$data['id_nino'],
                "tabla"=>$tabla
            ]);
            
            $jmyWeb -> cargar([ 
                "pagina"=>"configuracion",
                "tabla"=>$tabla,
                "secundario"=>"configuracion"
            ]);
            $url_marco="casas/lista.php";

        break;
    }
}else{
    $jmyWeb ->pre(['p'=>'Usuario sin acceso a esta sección','t'=>'Error']);
}

//$jmyWeb ->pre(['p'=>$jmyWeb->modulos()    ,'t'=>'TITULO_ARRAY']);

