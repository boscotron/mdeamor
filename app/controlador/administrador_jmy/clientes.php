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
    $session=$jmyWeb->sesion();
    $config=[
        "nombre_seccion"=>"Dashboard",
        "url_seccion"=>"dashboard",
        "tabla"=>"dashboard",
        "tabla_clientes"=>"clientes",
        "tabla_notas"=>"notas",
        "tabla_cotizaciones"=>"cotizaciones",
        "tabla_proyectos"=>"proyectos",
        "tabla_presentaciones"=>"presentaciones",
        "vista_pagina"=>"pagina",
        "lista_pagina"=>"lista_pagina",
        "breadcrum"=>true
    ];
    $pet = explode('/', strtolower($_GET['peticion'])); 
    $url = (trim($pet[1])!='')?trim($pet[1]):''; 
    if(trim($pet[2])!=''){
        unset($pet[0]);unset($pet[1]); $peticiones=explode(',',implode(',',$pet));
    }
    $jmyWeb->cargar_css(['url'=>$jmyWeb->url_templet(['return'=>true]).'assets/css/bootstrap-responsive.min.css','unico'=>true]);
    $jmyWeb->cargar_css(['url'=>$jmyWeb->url_templet(['return'=>true]).'assets/css/boosttrapTheme.css','unico'=>true]);
    $jmyWeb->cargar_css(['url'=>$jmyWeb->url_templet(['return'=>true]).'assets/css/clientes.css?f='.date('U'),'unico'=>true]);
    $jmyWeb->cargar_js(['url'=>$jmyWeb->url_templet(['return'=>true]).'assets/js/jquery-ui.js','unico'=>true]);
    //$jmyWeb->cargar_js(['url'=>'https://cdn.ckeditor.com/ckeditor5/11.0.1/inline/ckeditor.js','unico'=>true]);
    $jmyWeb->cargar_js(['url'=>$jmyWeb->url_templet(['return'=>true]).'assets/js/bootstrap.min.js','unico'=>true]);
    //$peticiones;
    if($peticiones[0]!=""){
        //$jmyWeb ->pre(['p'=>$session,'t'=>'session']);
        if($session['body']['api_web']['ID_F']!=''){
            $info_cliente = $jmy->ver([
                    "TABLA"=>$config['tabla_clientes']."__".$session['body']['api_web']['ID_F'],
                    //"COL"=>["url"],
                    //"V"=>[$peticiones[1]],
                    "ID"=>[$peticiones[0]],
                ]);
         //$jmyWeb ->pre(['p'=>$config['tabla_clientes']."_".$session['body']['api_web']['ID_F'],'t'=>'tabla']);
         //$jmyWeb ->pre(['p'=>$peticiones,'t'=>'peticiones']);
		 $info_cliente_key = $info_cliente['otKey'][0];
		 $info_cliente = $info_cliente['ot'][$info_cliente['otKey'][0]];
        }
    }
   // $jmyWeb ->pre(['p'=>$session['user']['user_id'],'t'=>'Session']);
    //$jmyWeb ->pre(['p'=>$session['body'],'t'=>'Session']);
		$jmyWeb->cargar_js(['url'=>'https://cdnjs.cloudflare.com/ajax/libs/vis/4.21.0/vis.min.js','unico'=>true]);
        $jmyWeb->cargar_js(['url'=>$jmyWeb->cdn().'app/jmyweb/v1/assets/js/dashboard-clientes-notas.js?d='.date('U'),'unico'=>true]);
        $jmyWeb->cargar_js(['url'=>$jmyWeb->cdn().'app/jmyweb/v1/assets/js/dashboard-clientes-cotizaciones.js?d='.date('U'),'unico'=>true]);
        $jmyWeb->cargar_js(['url'=>$jmyWeb->cdn().'app/jmyweb/v1/assets/js/dashboard-clientes-proyectos.js?d='.date('U'),'unico'=>true]);
        $jmyWeb->cargar_js(['url'=>$jmyWeb->cdn().'app/jmyweb/v1/assets/js/dashboard-clientes-presentaciones.js?d='.date('U'),'unico'=>true]);
        $jmyWeb->cargar_js(['url'=>$jmyWeb->cdn().'app/jmyweb/v1/assets/js/dashboard-clientes.js?d='.date('U'),'unico'=>true]);
        $jmyWeb->cargar_css(["url"=>"https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"]);    
        $jmyWeb->cargar_js(["url"=>"https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"]); 
    if($session['user']['user_id']!=''){
        switch ($url) {
            case 'error':
                $jmyWeb->cargar_vista(['url'=>'error404.php','data'=>['pagina'=>'dashboarderror']]);
            break;
            case 'error-sin-acceso':
                $jmyWeb->cargar_vista(['url'=>'error404.php','data'=>['pagina'=>'dashboarderror-noaaceso']]);
            break;
            case 'notas':
                $jmyWeb->cargar([
                    "pagina"=>$peticiones[0],
                    "tabla"=>$config['tabla_clientes'].'__'.$session['body']['api_web']['ID_F'],
                    "secundario"=>'cliente',
                ]);
                $out = $jmyWeb->cargar(["pagina"=>$peticiones[1],
                                        "tabla"=>$config['tabla_notas'].'__'.$session['body']['api_web']['ID_F'],
                                        ]);
                $out=$out['ot'][$peticiones[1]];
                $editor=(($out['usuario_editor']==$session['user']['user_id'])||($out['tipoacceso']=='editar' && in_array($out['estado'],['todos','restringido'])))?true:false;
               // $jmyWeb ->pre(['p'=>$out,'t'=>'carga']);
               
                $url_marco = "detalle_cliente-notas.php";
                $data = [ 
                    "animacion"=>true,
                    "peticiones"=>$peticiones,
                    "sec"=>$url,
                    "editor"=>$editor,
                    "pagina"=>$peticiones[1],
                    "tabla"=>$config['tabla_notas'].'__'.$session['body']['api_web']['ID_F'],
                    "id_cliente"=>$info_cliente_key,
                    "nombre_cliente"=>$info_cliente['nombre_clientes'],
                    "id_fn_ver"=>$peticiones[1],
                ];
            break;
            case 'cotizaciones':
                $idsVer = explode('-',$peticiones[1]);
                $idVer = $idsVer[0];
                $redirect=false;
                //$jmyWeb ->pre(['p'=>$idsVer,'t'=>'TITULO_ARRAY']);
                
                if($idsVer[1]=='copiar'){ 


                    $copiar['ver']=$jmy->ver([
                        "TABLA"=>$config['tabla_cotizaciones'].'__'.$session['body']['api_web']['ID_F'],
                        "ID_F"=>[$idVer],
                        "SALIDA"=>"ARRAY",
                    ]);
                   // $jmyWeb ->pre(['p'=>$copiar['ver']['otFm'][0],'t'=>'TITULO_ARRAY']);
                    $copiar['ver'] = $copiar['ver']['otFm'][0];
                    $copiar['ver']['fecha_creacion'] =date('U');
                    $copiar['ver']['usuario_editor'] =[];
                    $copiar['ver']['id_cliente'] =$peticiones[0];
                    $copiar['ver']['estado'] ='privado';
                    $copiar['ver']['usuario_editor'] =$session['user']['user_id'];
                    $copiar['ver']['nombre_cotizaciones'] = 'COPIA DE: '.$copiar['ver']['nombre_cotizaciones'];
                    $idVer = uniqid();
                    $copiar['ver']=$jmy->guardar([
                        "TABLA"=>$config['tabla_cotizaciones'].'__'.$session['body']['api_web']['ID_F'],
                        "ID_F"=>$idVer,
                        "A_D"=>true,
                        "GUARDAR"=>$copiar['ver'],
                    ]);
                    $redirect=true;
                    $url_redirect=$jmyWeb->url_inicio(['return'=>true]).'administrador/clientes/cotizaciones/'.$info_cliente_key.'/'.$idVer;
                    $copiar['url_redirect']=$url_redirect;
                    //$jmyWeb ->pre(['p'=>$copiar,'t'=>'TITULO_ARRAY']);
                    //die();
                }
                
                $url_publico=$jmyWeb->url_inicio(['return'=>true]).'pu/cotizacion/'.$session['body']['api_web']['ID_F'].'/'.$idVer; 
              
                $jmyWeb->cargar([
                    "pagina"=>$peticiones[0],
                    "tabla"=>$config['tabla_clientes'].'__'.$session['body']['api_web']['ID_F'],
                    "secundario"=>'cliente',
                ]);
                $out = $jmyWeb->cargar(["pagina"=>$idVer,
                                        "tabla"=>$config['tabla_cotizaciones'].'__'.$session['body']['api_web']['ID_F'],
                                        ]);
                $out=$out['ot'][$idVer];
                $editor=(($out['usuario_editor']==$session['user']['user_id'])||($session['body']['permisos_api']['PERMISOS']>3)||($out['tipoacceso']=='editar' && in_array($out['estado'],['todos','restringido'])))?true:false;
                //$jmyWeb ->pre(['p'=>$out,'t'=>'carga']);
            
               $jmyWeb->cargar_css(['url'=>$jmyWeb->url_templet(['return'=>true]).'assets/css/cotizaciones.css','unico'=>true]);
                $url_marco = "detalle_cliente-cotizaciones.php";
                $data = [ 
                    "animacion"=>true,
                    "peticiones"=>$peticiones,
                    "sec"=>$url,
                    "editor"=>$editor,
                    "pagina"=>$idVer,
                    "tabla"=>$config['tabla_cotizaciones'].'__'.$session['body']['api_web']['ID_F'],
                    "id_cliente"=>$info_cliente_key,
                    "nombre_cliente"=>$info_cliente['nombre_clientes'],
                    "id_fn_ver"=>$idVer,
                   // "copiar"=>$copiar,
                    "redirect"=>$redirect,
                    "url_redirect"=>$url_redirect,
                    "url_publico"=>$url_publico
                    ];


            break;
            
           
            case 'proyectos':




                $idsVer = explode('-',$peticiones[1]);
                $idVer = $idsVer[0];
                $redirect=false;
                if($idsVer[1]=='copiar'){ 


                    $copiar['ver']=$jmy->ver([
                        "TABLA"=>$config['tabla_proyectos'].'__'.$session['body']['api_web']['ID_F'],
                        "ID_F"=>[$idVer],
                        "SALIDA"=>"ARRAY",
                    ]);
                   // $jmyWeb ->pre(['p'=>$copiar['ver']['otFm'][0],'t'=>'TITULO_ARRAY']);
                    $copiar['ver'] = $copiar['ver']['otFm'][0];
                    $copiar['ver']['fecha_creacion'] =date('U');
                    $copiar['ver']['id_cliente'] =$peticiones[0];
                    $copiar['ver']['estado'] ='privado';
                    $copiar['ver']['usuario_editor'] =$session['user']['user_id'];
                    $copiar['ver']['nombre_proyectos'] = 'COPIA DE: '.$copiar['ver']['nombre_proyectos'];
                    $idVer = uniqid();
                    $copiar['ver']=$jmy->guardar([
                        "TABLA"=>$config['tabla_proyectos'].'__'.$session['body']['api_web']['ID_F'],
                        "ID_F"=>$idVer,
                        "A_D"=>true,
                        "GUARDAR"=>$copiar['ver'],
                    ]);
                    $redirect=true;
                    
                }

                $url_redirect=$jmyWeb->url_inicio(['return'=>true]).'administrador/clientesproyectos/'.$info_cliente_key.'/'.$idVer;
                $url_publico=$jmyWeb->url_inicio(['return'=>true]).'pu/proyectos/'.$session['body']['api_web']['ID_F'].'/'.$idVer; 
                
                $jmyWeb->cargar([
                    "pagina"=>$peticiones[0],
                    "tabla"=>$config['tabla_clientes'].'__'.$session['body']['api_web']['ID_F'],
                    "secundario"=>'cliente',
                ]);
                $out = $jmyWeb->cargar(["pagina"=>$idVer,
                                        "tabla"=>$config['tabla_proyectos'].'__'.$session['body']['api_web']['ID_F'],
                                        ]);
                $out=$out['ot'][$idVer];
                $editor=(($out['usuario_editor']==$session['user']['user_id'])||($out['tipoacceso']=='editar' && in_array($out['estado'],['todos','restringido'])))?true:false;
                //$jmyWeb ->pre(['p'=>$out,'t'=>'carga']);
              
               $jmyWeb->cargar_css(['url'=>'templet/assets/css/proyectos.css','unico'=>true]);
               $jmyWeb->cargar_css(['url'=>'templet/assets/css/proyectos-tl.css','unico'=>true]);
               
               $jmyWeb->cargar_css(['url'=>'https://cdnjs.cloudflare.com/ajax/libs/vis/4.21.0/vis.min.css','unico'=>true]);
               $url_marco = "detalle_cliente-proyectos.php";
                $data = [ 
                    "animacion"=>false,
                    "peticiones"=>$peticiones,
                    "sec"=>$url,
                    "editor"=>$editor,
                    "pagina"=>$idVer,
                    "tabla"=>$config['tabla_proyectos'].'__'.$session['body']['api_web']['ID_F'],
                    "id_cliente"=>$info_cliente_key,
                    "nombre_cliente"=>$info_cliente['nombre_clientes'],
                    "id_fn_ver"=>$idVer,
                   // "copiar"=>$copiar,
                    "redirect"=>$redirect,
                    "url_redirect"=>$url_redirect,
                    "url_publico"=>$url_publico
                    ];
                    
            break;
            
           
            case 'presentaciones':
                $idsVer = explode('-',$peticiones[1]);
                $idVer = $idsVer[0];
                $redirect=false;
                if($idsVer[1]=='copiar'){ 


                    $copiar['ver']=$jmy->ver([
                        "TABLA"=>$config['tabla_presentaciones'].'__'.$session['body']['api_web']['ID_F'],
                        "ID_F"=>[$idVer],
                        "SALIDA"=>"ARRAY",
                    ]);
                   // $jmyWeb ->pre(['p'=>$copiar['ver']['otFm'][0],'t'=>'TITULO_ARRAY']);
                    $copiar['ver'] = $copiar['ver']['otFm'][0];
                    $copiar['ver']['fecha_creacion'] =date('U');
                    $copiar['ver']['id_cliente'] =$peticiones[0];
                    $copiar['ver']['estado'] ='privado';
                    $copiar['ver']['usuario_editor'] =$session['user']['user_id'];
                    $copiar['ver']['nombre_presentaciones'] = 'COPIA DE: '.$copiar['ver']['nombre_presentaciones'];
                    $idVer = uniqid();
                    $copiar['ver']=$jmy->guardar([
                        "TABLA"=>$config['tabla_presentaciones'].'__'.$session['body']['api_web']['ID_F'],
                        "ID_F"=>$idVer,
                        "A_D"=>true,
                        "GUARDAR"=>$copiar['ver'],
                    ]);
                    $redirect=true;
                    
                }

                $url_redirect=$jmyWeb->url_inicio(['return'=>true]).'administrador/clientes/presentaciones/'.$info_cliente_key.'/'.$idVer;
                $url_publico=$jmyWeb->url_inicio(['return'=>true]).'pu/presentaciones/'.$session['body']['api_web']['ID_F'].'/'.$idVer; 
                
                $jmyWeb->cargar([
                    "pagina"=>$peticiones[0],
                    "tabla"=>$config['tabla_clientes'].'__'.$session['body']['api_web']['ID_F'],
                    "secundario"=>'cliente',
                ]);
                $out = $jmyWeb->cargar(["pagina"=>$idVer,
                                        "tabla"=>$config['tabla_presentaciones'].'__'.$session['body']['api_web']['ID_F'], 
                                        ]);
				//$jmyWeb ->pre(['p'=>$out,'t'=>'out']);				
                $out=$out['ot'][$idVer];
                $editor=(($out['usuario_editor']==$session['user']['user_id'])||($out['tipoacceso']=='editar' && in_array($out['estado'],['todos','restringido'])))?true:false;
                //$jmyWeb ->pre(['p'=>$out,'t'=>'carga']);
              
               $jmyWeb->cargar_css(['url'=>'templet/assets/css/presentaciones.css','unico'=>true]);
               $url_marco = "detalle_cliente-presentaciones.php";
               $data = [ 
                "animacion"=>true,
                "peticiones"=>$peticiones,
                "sec"=>$url,
                "editor"=>$editor,
                "pagina"=>$idVer,
                "tabla"=>$config['tabla_proyectos'].'__'.$session['body']['api_web']['ID_F'],
                "id_cliente"=>$info_cliente_key,
                "nombre_cliente"=>$info_cliente['nombre_clientes'],
                "id_fn_ver"=>$idVer,
               // "copiar"=>$copiar,
                "redirect"=>$redirect,
                "url_redirect"=>$url_redirect,
                "url_publico"=>$url_publico
                ];
            break;
            
            default:
                $out = $jmyWeb->cargar([
                    "pagina"=>$peticiones[0],
                    "tabla"=>$config['tabla_clientes'].'__'.$session['body']['api_web']['ID_F'],
                ]);
                $out=$out['ot'][$peticiones[0]];
                $editor=(($out['usuario_editor']==$session['user']['user_id'])||($out['tipoacceso']=='editar' && in_array($out['estado'],['todos','restringido'])))?true:false;
                

                $url_marco = "jmy/detalle_cliente.php";
                $data = [ 
                    "animacion"=>true,
                    "peticiones"=>$peticiones,
                    "sec"=>$url,
                    "t"=>$jmyWeb->sesion(["return"=>"db"]),
                    "editor"=>$editor,
                    "pagina"=>$peticiones[0],
                    "tabla"=>'clientes__'.$session['body']['api_web']['ID_F'],
                    "id_cliente"=>$info_cliente_key,
                    "nombre_cliente"=>$info_cliente['nombre_clientes'],
                ];
            break;
        }
}else{
    //$jmyWeb->cargar_vista(['url'=>'error404.php','data'=>['pagina'=>'dashboarderror-noacceso']]);
}
}else{
    //$jmyWeb->cargar_vista(['url'=>'login.php','data'=>['pagina'=>'dashboarderror']]);
}
//$jmyWeb ->pre(['p'=>$out,'t'=>'TITULO_ARRAY']);