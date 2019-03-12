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
if(file_exists('config_administrador.php'))
    require_once('config_administrador.php');
$peticion = explode('/',$_GET['peticion']);
//$jmyWeb ->pre(['p'=>$peticion,'t'=>'peticion']);
$out['session'] =$jmyWeb->session();
$out['error'] = '';
$out['post'] = $_POST;
function obtener_estructura_directorios($ruta){
    $arbol = [];
    $directorio = opendir($ruta); //ruta actual
    while ($archivo = readdir($directorio)) {
            if (!is_dir($archivo))
                $arbol[] =  $archivo;
        }
    return $arbol;
}
switch($peticion[0]):
    case 'instalar':
        $jmyWeb ->pre(['p'=>$jmy->db([TABLA_USUARIOS."__".$out['session']['body']['api_web']['ID_F']]),'t'=>'INSTALADOR Administrador']);        
    break;
    case 'sesion':
        $p=$_POST['data'];
        if($p['u']!='' && $p['t']!=''){
            $session = $jmyWeb->session([$p['u'],$p['t']]);
            $jmyWeb->guardar_session();
        }
        $out['post'] =$_POST;
        $out['session'] =[
            "u"=>$out['session']["user"]["user_id"],
            "t"=>$out['session']["user"]["token"]
        ];
    break;
    case 'importar':
        require(BASE_APP.'controlador/administrador_jmy/administrador_importar.php');
    break;
    case 'fn':
        require(BASE_APP.'controlador/administrador_jmy/administrador_fn.php');
    break;
    case 'usuarios':
        require(BASE_APP.'controlador/administrador_jmy/administrador_usuarios.php'); 
    break;
    default:
        if(file_exists('config_administrador.php')){
            require_once('config_administrador.php');                
            if(file_exists($modulos[$peticion[0]]['controlador_ws']))
                require_once($modulos[$peticion[0]]['controlador_ws']);
        }
endswitch;
if(is_array($out))
    echo json_encode($out);