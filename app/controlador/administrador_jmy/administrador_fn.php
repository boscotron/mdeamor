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
if($jmyWeb->sesion()){
    switch ($peticion[1]) {
        /*case 'json_campos':
            $t = 'administrador_config_'.$jmyWeb->sesion(['return'=>'db']);
        break;*/
        case 'json_campos':
            $t=$_POST['t'];
            $id="json_campos_".$t['id'];
            $in=$_POST['i'];
            $tabla='administrador_config'."_".$jmyWeb->sesion(['return'=>'db']);
            if($t['guardar']!='')
                $out['guardar']= $jmy->guardar([
                    "TABLA"=>$tabla,
                    "ID"=>$id,
                    "A_D"=>true,
                    "GUARDAR"=>["json_campos"=>$t['guardar']],
                ]);
            $out['json_campos']=$jmy->ver([
                "TABLA"=>$tabla,
                "ID"=>$id,
                //"COL"=>["json_campos"],
                "SALIDA"=>"ARRAY",
            ]);
            $out['vista']=$out['json_campos']['ot'][$id];
            $out['json_campos']=$out['vista']['json_campos'];
            $j=json_decode($out['json_campos'],1);
            if($in['page']!=''&&$in['tabla']!=''&&is_array($j)){
                $b=[];
                foreach($j as $k=>$v){$b[]=$v["id"];}
                $out['ver']=$jmy->ver([
                    "TABLA"=>$in['tabla'],
                    "ID"=>$in['page'],
                    "COL"=>$b,
                    //"SALIDA"=>"ARRAY",
                ]);
                $out['ver']=$out['ver']['ot'][$in['page']];
            }
        break;
        case 'ver':
            $p=$_POST['perfil'];
            $out=$jmy->ver([
                    "TABLA"=>$p['tabla'],
                    "ID"=>$p['page'],
                    "COL"=>$p['page'],
            ]);
        break;
        
        default:
            # code...
            break;
    }
}else{
    $out['error'] =['No hay sesión activa'];
}