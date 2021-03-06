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
$peticion = explode("/",$_GET['peticion']);
if($peticion[0]=='salir'){$jmyWeb->sesion([],1);}
if($peticion[0]=='entrar'){$jmyWeb->sesion([$peticion[1],$peticion[2]]);$jmyWeb->guardar_session();}
$version = (MODO_DESAROLLADOR)?date('U'):'';
$ruta_js='assets/js';
$ruta_css='assets/css';
$jmyWeb->cargar_css(["url"=>$jmyWeb->url_inicio(["return"=>true])."app/vista/administrador.css"]);    
$jmyWeb->cargar_css(["url"=>"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"]);    
$jmyWeb->cargar_css(["url"=>"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"]); 
$jmyWeb->cargar_js(["url"=>$jmyWeb->cdn()."app/jmyweb/v1/assets/js/jmy_administrador/administrador_sesion.js?fe=".$version]); 
$jmyWeb->cargar_js(["url"=>"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"]);    
$jmyWeb->cargar_js(["url"=>"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"]); 
$url_entrada = 'https://comsis.mx/app/entrar/?re='.$jmyWeb->url_inicio(['return'=>true]).'administrador/entrar/&api=e2ad454bea7d919f0fc411a8b885580c&api_web='.JMY_API.'&sep=1';
     
$jmyWeb->cargar_css(["url"=>$jmyWeb->cdn()."app/jmyweb/v1/assets/js/jsoneditor/jsoneditor.min.css"]);    
$jmyWeb->cargar_js(["url"=>$jmyWeb->cdn()."app/jmyweb/v1/assets/js/jsoneditor/jsoneditor.min.js"]);  
if($jmyWeb->sesion()){  
    $data = [];
    switch($peticion[0]):
        case 'instalar':
            if($s=$jmyWeb->sesion(['return'=>'permisos_api'])>3){       
                $jmyWeb->pre(['p'=>$jmy->col(['modulos',1]),'t'=>'Columna']);
                $t[]=TABLA_USUARIOS.'__'.$jmyWeb->sesion(['return'=>'db']);
                $t[]='administrador_config_'.$jmyWeb->sesion(['return'=>'db']);
                $jmyWeb->pre(['p'=>$jmy->db($t),'t'=>'DB']);
                $jmyWeb->pre(['p'=>$jmy->guardar([
                    'TABLA'=>$t,
                    'ID'=>$jmyWeb->sesion(['return'=>'user_id']),
                    'A_D'=>true,
                    'GUARDAR'=>[
                        'modulos'=>'[{"modulo":"administrador","permiso":"4"}]'
                    ]]),'t'=>'G']);
            }else{$jmyWeb ->pre(['p'=>'Acceso restringido','t'=>'Error']);}
        break;
        case 'entrar':
            $jmyWeb->guardar_session();
            $url_marco="../".BASE_APP."vista/jmy_administrador/administrador_dashboard.php";
        break;
        case 'salir':            
            $url_marco="../".BASE_APP."vista/jmy_administrador/administrador_salida.php";
        break;
        case 'importar':      
            $jmyWeb->cargar_css(["url"=>$jmyWeb->cdn()."app/jmyweb/v1/assets/js/jsoneditor/jsoneditor.min.css"]);    
             $jmyWeb->cargar_js(["url"=>$jmyWeb->cdn()."app/jmyweb/v1/assets/js/jsoneditor/jsoneditor.min.js"]);    
            $jmyWeb->cargar_css(["url"=>"https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"]);    
             $jmyWeb->cargar_js(["url"=>"https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"]);    
             $jmyWeb->cargar_js(["url"=>$jmyWeb->cdn()."app/jmyweb/v1/assets/js/jmy_administrador/administrador_importar.js?f=".$version]);    
            $s=$jmyWeb->session();
            $t='importar_'.$s['body']['api_web']['ID_F'];
            switch ($peticion[1]) {
                case 'instalar':
                    $jmyWeb ->pre(['p'=>$jmy->db([$t]),'t'=>'DB Instalar importador']);
                break;
                default:
                break;
            }
            $url_marco="../".BASE_APP."vista/jmy_administrador/administrador_importar.php";
        break;
        case 'modulos':      
            $jmyWeb->cargar_css(["url"=>"https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"]);    
            $jmyWeb->cargar_js(["url"=>"https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"]);    
            $jmyWeb->cargar_js(["url"=>$jmyWeb->cdn()."app/jmyweb/v1/assets/js/jmy_administrador/administrador_modulos.js?f=".$version]);    
            $url_marco="../".BASE_APP."vista/jmy_administrador/administrador_modulos.php";
        break;
        case 'usuarios':      
            $jmyWeb->cargar_css(["url"=>"https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"]);    
            $jmyWeb->cargar_js(["url"=>"https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"]); 
            $jmyWeb->cargar_js(["url"=>$jmyWeb->cdn()."app/jmyweb/v1/assets/js/jmy_administrador/administrador_usuarios.js?f=".$version]);
            //$jmyWeb->cargar_js(["url"=>$jmyWeb->url_templet(['return'=>1])."js/perfil.js?d=".date('U')]);
            $url_marco="../".BASE_APP."vista/jmy_administrador/administrador_usuarios.php";
            $url_sub_marco='perfil_detalle.php';
        break;
        case 'lista_perfiles': 
            $t=TABLA_USUARIOS.'__'.$jmyWeb->sesion(['return'=>'db']);
            $out['filtro'] = $jmy->ver([
                "TABLA"=>$t,
                "COL"=>["perfil_principal"],
                "V"=>$jmyWeb->sesion(['return'=>'user_id'])
            ]);
            $out['perfil'] = $jmy->ver([
                "TABLA"=>$t,
                "ID_F"=>$out['filtro']['otKey'],
                "SALIDA"=>"ARRAY"
            ]);
        break;
        default:
            if(file_exists('config_administrador.php')){
                require_once('config_administrador.php');                
                $url_marco=(is_array($modulos[$peticion[0]]))?$modulos[$peticion[0]]['url_marco']:'error404.php';
                if(file_exists($modulos[$peticion[0]]['controlador']))
                    require_once($modulos[$peticion[0]]['controlador']);
            }else{ $url_marco = "../".BASE_APP."vista/jmy_administrador/administrador_dashboard.php";}
    endswitch;
    $jmyWeb->cargar_js(["url"=>$jmyWeb->cdn()."app/jmyweb/v1/assets/js/jmy_administrador/administrador.js?f=".$version]);    
    
    $jmyWeb->cargar_vista([
        "url"=>"../".BASE_APP."vista/jmy_administrador/administrador_marco.php",
        "data"=>[ 
            "url_marco" => BASE_TEMPLET.'/'.$url_marco,
            "url_sub_marco" => BASE_TEMPLET.'/'.$url_sub_marco,
            "data" => $data,
            "animacion" => $data['animacion']
            
        ]]);
}else{
    $jmyWeb->cargar_vista([
        "url"=>"../".BASE_APP."vista/jmy_administrador/administrador_marco.php",
        "data"=>[ 
            "url_marco" => BASE_APP."vista/jmy_administrador/administrador_salida.php",
            "url_entrada" => $url_entrada,
            "animacion" => true
    ]]);
}
