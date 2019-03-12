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
$session = $jmyWeb->session(); 
//$out['session'] = $session;
$idUsuario = $session['user']['user_id'];
$out['perfiles'] = $idUsuario;

if($idUsuario!=''){
    $out['perfiles']['principal']=$jmy->ver([
        "TABLA"=>"clientes_".$session['body']['api_web']['ID_F'],
        "ID"=>$idUsuario,
    ]);
    $out['perfiles']['principal'] = (is_array($out['perfiles']['principal']['ot'][$idUsuario]))?$out['perfiles']['principal']['ot'][$idUsuario]:["error"=>"No existe usuario"];

    
    switch ($peticion[0]) {
        case 'preferencias-empleado-guardar':            
            if($peticion[1]!=''){
                $out['preferencias']['post'] = $_POST;
                $out['preferencias']['id'] = $peticion[1];
                $out['preferencias']['guardar'] = $jmy->guardar([
                    'TABLA'=>'personal',
                    'A_D'=>true,
                    'ID'=>$peticion[1],
                    'GUARDAR'=>$_POST['guardar'],
                ]);
            }
        case 'preferencias-empleado':
            
            if($peticion[1]!=''){
                $out['preferencias']['ver'] = $jmy->ver([
                    'TABLA'=>'personal',
                    'ID'=>$peticion[1],
                ]);
            }
        break;
        case 'ver': 
            $out['peticion'] = $peticion;
            if($peticion[1]!=''){
                $out['perfil'] = $jmy->ver([
                    "TABLA"=>"clientes_".$session['body']['api_web']['ID_F'],
                    "ID"=>$peticion[1],
                ]);
                $out['perfil'] = (is_array($out['perfil']['ot'][$peticion[1]]))?$out['perfil']['ot'][$peticion[1]]:["error"=>"No existe usuario"];
            }else{
                $out['perfil'] = ["error"=>"No de entrego id usuario"];
            }
        break;
        case 'lista_perfiles': 
            $out['filtro'] = $jmy->ver([
                "TABLA"=>"clientes_".$session['body']['api_web']['ID_F'],
                "COL"=>["perfil_principal"],
                "V"=>$idUsuario
            ]);
            $out['perfil'] = $jmy->ver([
                "TABLA"=>"clientes_".$session['body']['api_web']['ID_F'],
                "ID_F"=>$out['filtro']['otKey'],
                "SALIDA"=>"ARRAY"
            ]);
        break;
        case 'guardar':
            $id=($peticion[1]!='')?$peticion[1]:uniqid();
            if(is_array($_POST)){
                $out['guardar'] = $_POST;
                if(!$out['guardar']['admin']){
                    $out['guardar']['perfil_principal']=$idUsuario;
                }else{
                    unset($out['guardar']['admin']);
                }
                $out['perfil'] = $jmy->guardar([
                    "TABLA"=>"clientes_".$session['body']['api_web']['ID_F'],
                    "ID"=>$id,
                    "A_D"=>true,
                    "GUARDAR"=>$out['guardar']
                ]);
            }
            $out['perfil'] = $jmy->ver([
                "TABLA"=>"clientes_".$session['body']['api_web']['ID_F'],
                "ID"=>$id,
            ]);
        break;    
        case 'historial':
        break;    
        default:
            $out = ["error"=>"No hay peticon o función"];
        break;
    }
}else{
    $out = ["error"=>"No hay session"];
}
echo json_encode($out);
?>