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
if($_SESSION['JMY3WEB'][DOY]){

    $tmp = explode("/",$_GET['peticion']);
    if($tmp[1]!=''){
        $id_empleado = $tmp[1];
        $_GET['peticion']=$tmp[0];

    }
    switch($_GET['peticion']):
        case 'instalar':
            $jmyWeb->pre(['p'=>$jmy->db(["estetica_empleados","estetica_historial","estetica_productos","estetica_proveedores"]),'t'=>'Estado de DB']);    
        break;
        case 'editar_empleado':
            $datos = $jmy->ver([	"TABLA"=>"estetica_empleados", // STRING
                    //"SALIDA"=>"ARRAY",
                    "ID_F"=>$id_empleado,
                    //"COL"=>["puesto"], // ARRAY OPCIONAL
            ]);
            $datos = $datos['ot'][$id_empleado];
            $jmyWeb->cargar_js(["url"=>BASE_TEMPLET."js/empleados.js","unico"=>true]);
            $jmyWeb ->cargar_vista(["url"=>"editar_empleado.php",
                                    "data"=>["datos"=>$datos, "id"=>$id_empleado]]);
        break;
        case 'empleado':
            $datos = $jmy->ver([	"TABLA"=>"estetica_empleados", // STRING
                    //"SALIDA"=>"ARRAY",
                    "ID_F"=>$id_empleado,
                    //"COL"=>["puesto"], // ARRAY OPCIONAL
            ]);
            $datos = $datos['ot'][$id_empleado];
            
            $jmyWeb ->cargar_vista(["url"=>"ver_empleados.php",
                                    "data"=>["datos"=>$datos, "id"=>$id_empleado]]);
        break;
        case 'agregar_empleado_guardar':
            $estado = $jmy->guardar([	
                            "TABLA"=>"estetica_empleados", // STRING
                            "A_D"=>TRUE, 
                            "ID_F"=>$_POST['ide'],
                            "GUARDAR"=>[
                                "nombre"=>$_POST['nombre'],
                                "puesto"=>$_POST['puesto'],
                                "direccion"=>$_POST['direccion'],
                                "telefono"=>$_POST['telefono'],
                                "fecha_de_nacimiento"=>$_POST['fecha_de_nacimiento'],    
                            ],
                                ]);
                                
                                echo json_encode(["POST"=>$_POST,"GET"=>$_GET,"estado"=>$estado]);
                                break;
        case 'agregar_empleado':
            $jmyWeb ->pre(['p'=>$_GET,'t'=>'GET']);
            $jmyWeb->cargar_js(["url"=>BASE_TEMPLET."js/empleados.js","unico"=>true]); // carga JS externo 
            $jmyWeb ->cargar_vista(["url"=>"formulario_empleado.php"]);
        break;
        case 'lista_empleado' :
            $lista = $jmy->ver([	"TABLA"=>"estetica_empleados", // STRING
                                    "SALIDA"=>"ARRAY",
                                     //"COL"=>["puesto"], // ARRAY OPCIONAL
                        ]);
        // $jmyWeb ->pre(['p'=>$lista,'t'=>'LISTA']);
            $jmyWeb ->cargar_vista(["url"=>"lista_empleado.php","data"=>["lista"=>$lista]]);
        break;
        
        default:
    endswitch;
}else{
    $jmyWeb ->cargar_vista(["url"=>"404.php"]);
}


?>