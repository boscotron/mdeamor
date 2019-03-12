
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
        "tabla"=>'productos'
    ];
    switch ($_GET['peticion']) {
        case 'instalar':
            if($jmyWeb->modoEditor()){
                $jmyWeb->pre(['p'=>$jmy->db([$config['tabla']]),'t'=>'Instalación DB']);
            }else{
                $out['error']='Sessión no iniciada';
            }        
            break;
        case 'marcas-lista':

            $tmp = $jmy->ver([	
                "TABLA"=>$config['tabla'],
                "COL"=>['nombre_marca']
            ]);
        
            $out['ver'] = $jmy->ver([	
                "TABLA"=>$config['tabla'],
                "ID_F"=>$tmp['otKey'], 
                "SALIDA"=>'ARRAY',
            ]);
            

        break;
        case 'marcas':
            if($jmyWeb->modoEditor()){
                if($_POST['nombre']!=''){
                    $out['id']=($_POST['id']!='')?$_POST['id']:uniqid();
                    $out['g']= $jmy->guardar([	"TABLA"=>$config['tabla'], 
                            "ID_F"=>$out['id'], 
                            "A_D"=>TRUE, 
                            "GUARDAR"=>['nombre_marca'=>$_POST['nombre']],
                        ]);
                }
                if($out['id']!='' ||  $_POST['id']!=''){
                    $out['ver'] = $jmy->ver([	
                        "TABLA"=>$config['tabla'],
                        "ID_F"=>($_POST['id']!='')?$_POST['id']:$out['id'], 
                    ]);
                }
            }else{
                $out['error']='Sessión no iniciada';
            }
        break;  
        case 'productos':
            if($jmyWeb->modoEditor()){
                if($_POST['nombre']!='' && $_POST['id_marca']!=''){
                    $out['id']=($_POST['id']!='')?$_POST['id']:uniqid();
                    $out['g']= $jmy->guardar([	"TABLA"=>$config['tabla'], 
                            "ID_F"=>$out['id'], 
                            "A_D"=>TRUE, 
                            "GUARDAR"=>[
                                'nombre_producto'=>$_POST['nombre'],
                                'id_marca'=>$_POST['id_marca'],
                            ],
                        ]);
                }
                if($out['id']!='' ||  $_POST['id']!=''){
                    $out['ver'] = $jmy->ver([	
                        "TABLA"=>$config['tabla'],
                        "ID_F"=>($_POST['id']!='')?$_POST['id']:$out['id'], 
                    ]);
                }
                if($_POST['nombre']=='' && $_POST['id_marca']!=''){
                    $tmp = $jmy->ver([	
                        "TABLA"=>$config['tabla'],
                        "COL"=>['id_marca'],
                        "V"=>$_POST['id_marca']
                        //"ID_F"=>($_POST['id']!='')?$_POST['id']:$out['id'], 
                    ]);
                
                    $out['ver'] = $jmy->ver([	
                        "TABLA"=>$config['tabla'],
                        "ID_F"=>$tmp['otKey'], 
                    ]);
                    
                }
            }else{
                $out['error']='Sessión no iniciada';
            }
            break;      
            
        case 'productos-lista':
            $out['ver'] = $jmy->ver([	
                "TABLA"=>$config['tabla'],
                "COL"=>['id_marca'] 
            ]);
            $out['ver'] = $jmy->ver([	
                "TABLA"=>$config['tabla'],
                "ID"=>$out['ver']['otKey'], 
                "SALIDA"=>'ARRAY', 
            ]);
        break;      
        case 'producto-editar':
            $out['hola']='mundo';
            if($jmyWeb->modoEditor()){
                $out['id']=($_POST['id_producto']!='')?$_POST['id_producto']:uniqid();
                if($_POST['guardar']['nombre']!=''){ 

                    if($_POST['id_marca']!='')
                        $_POST['guardar']['id_marca'] = $_POST['id_marca'];

                    $out['g']= $jmy->guardar([	
                            "TABLA"=>$config['tabla'], 
                            "ID_F"=>$out['id'],
                            "A_D"=>TRUE, 
                            "GUARDAR"=>$_POST['guardar'],
                        ]);
                }

                if($out['id']!=''){
                    $out['ver'] = $jmy->ver([	
                        "TABLA"=>$config['tabla'],
                        "ID_F"=>$out['id'], 
                    ]);
                }
           


            }else{
                $out['error']='Sessión no iniciada';
            }
        break;      
        case 'producto-borrar':
            $out['fn']='producto-borrar';
            if($jmyWeb->modoEditor()){
                $out['id']=$_POST['id_producto'];

                if($out['id']!=''){
                    $out['ver'] = $jmy->ver([	
                        "TABLA"=>$config['tabla'],
                        "ID_F"=>$out['id'], 
                    ]); 
                    if(is_array($out['ver']['ot'][$out['id']])){
                        $out['columnas'] = array_keys($out['ver']['ot'][$out['id']]);
                        $jmy->borrar([	
                            "TABLA"=>$config['tabla'], 
                            "ID_F"=>$out['id'],
                            "COLUMNAS"=>$out['columnas'], 
                        ]);
                    }
                }

                if($out['id']!=''){
                    $out['ver'] = $jmy->ver([	
                        "TABLA"=>$config['tabla'],
                        "ID_F"=>$out['id'], 
                    ]);
                }
           


            }else{
                $out['error']='Sessión no iniciada';
            }
        break;        
        default:
            # code...
            break;
    }



echo json_encode([  
    'POST'=>$_POST,
    'GET'=>$_GET,
    'out'=>$out
    ]);
    ?>
