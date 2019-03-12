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

    //$jmyWeb ->pre(['p'=>$peticion,'t'=>'peticion']);
    $out ['peticion']= $peticion;
    switch ($peticion[1]):
        case 'lista':
            $session = $jmyWeb->session();
            $tabla ='general_ninos';
            $tabla=$tabla.'_'.$session['body']['api_web']['ID_F'];
            $out = [];
            $col = ($peticion[2]!='')?explode(',',$peticion[2]):['nombre','apellido_paterno','apellido_materno'];
            $ver = $jmy->ver([
                "TABLA"=>$tabla,
                //"FO"=>true,
                //"ID"=>$out['p']['id'],
                "SALIDA"=>"ARRAY",
                "COL"=>$col,
            ]);
            for ($i=0; $i < count($ver['otFm']) ; $i++) { 
                $t=[];
                foreach ($col as $kc => $vc) {
                    $t[]=$ver['otFm'][$i][$vc];
                }
                $t[]='<a href="'.$jmyWeb->url_inicio(['return'=>true]).'administrador/casas/nino/'.$ver['otFm'][$i]['ID_F'].'"> <i class="fa fa-eye"></i> </a>';
                $out['data'][] = $t;
            }
            //$jmyWeb ->pre(['p'=>$out,'t'=>'TITULO_ARRAY']);
        break;
        default:
            $out['p'] = $_POST;
            $out['ver'] = $jmy->ver([
                "TABLA"=>$out['p']['tabla'],
                "ID"=>$out['p']['id'],
                "COL"=>$out['p']['col'],
            ]);
            $out['ver'] =$out['ver']['ot'][$out['p']['id']];
    endswitch;
}else{

}