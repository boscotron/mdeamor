<?php 
$animacion = $data['animacion'];
$page = $data['page'];
$tabla = ($data['tabla']!='')?$data['tabla']:'clientes';
//$this ->pre(['p'=>$data,'t'=>'DATA']);
?>

<!--PAGE-->
<div id="zoom"><img src=""></div>
<?php if($data['animacion']){?><div id="page">
    <div class="cd-background-wrapper">
        <figure class="cd-floating-background">
            <div class="base-layer dark-overlay">
                <div class="slider"></div>
            </div>
            <!--end layer-->
            <!--end layer-->
            <div class="layer animate" data-layer-depth="200" >
                <div id="content">             
                    <div class="content-wrapper">
                        <div class="container esporas" >     
                            <canvas id="displayCanvas" ></canvas>
                        </div>
                    </div>
                </div>
                <!--end content-->
            </div>
            <!--end layer-->
            <div class="layer animate" data-layer-depth="600">
                <div id="content">             
                    <div class="content-wrapper">
                        <div class="container opacity90">     
                            
                        <img src="<?php $this->pnt('logo_cliente',$this->url_templet(['return'=>true]).'assets/img/marca_fondo_logo.png',["secundario"=>"header"]); ?>" id="imagen" alt="" class="zoom-in clip-svg maskimg logo_cliente">

                            <svg width="0" height="0">
                            <defs>
                                <clipPath id="myClip">
                                <circle cx="400" cy="300" r="300"/>
                                </clipPath>
                            </defs>
                            </svg>

                        </div>
                    </div>
                </div>
                <!--end content-->
            </div>
            <div class="layer animate" data-layer-depth="900">
                <div id="content">             
                    <div class="content-wrapper">
                        <div class="container opacity30">     
                            <img src="<?php $this->url_templet(); ?>assets/img/logo_layer_1.png" class="logo_layers" alt="">
                        </div>
                    </div>
                </div>
                <!--end content-->
            </div>
            <!--end layer-->
            <!--end layer-->
            <div class="layer animate" data-layer-depth="600">
                <div id="content">               
                    <div class="content-wrapper">
                        <div class="container opacity40">       
                    <img src="<?php $this->url_templet(); ?>assets/img/logo_layer_2.png" class="logo_layers" alt=""> 
                        </div>
                    </div>                                 
                </div>
                <!--end content-->
            </div>
            <!--end layer-->
            <!--end layer-->
            <div class="layer animate" data-layer-depth="750">
                <div id="content">			
                    <div class="content-wrapper">
                        <div class="container opacity50">    		
                    <img src="<?php $this->url_templet(); ?>assets/img/logo_layer_3.png" class="logo_layers" alt=""> 
                        </div>
                    </div>                                 
                </div>
                <!--end content-->
            </div>
            <!--end layer-->
            <div class="layer animate pointer-events-none" data-layer-depth="500">
                <div id="particles-js"></div>
            </div>
            <!--end layer-->
            <div class="layer animate" data-layer-depth="1000">
                <div id="content">
                    <div class="content-wrapper bsk">
                        <div class="container texto_movil">
                            <div class="brand">
                                <a href="<?php $this->url_inicio(); ?>">
                                    <img src="<?php $this->url_templet(); ?>assets/img/logo.png" alt="">
                                </a>
                            </div>
                            <!--end brand-->
                            <div class="heading">
                                
                              
                            
                            </div>
                            <!--end heading-->
                        </div>
                        <!--end container-->
                    </div>
                    <!--end content-wrapper-->
                </div>
                <!--end content-->
            </div>
        </figure>
        <!--end cd-floating-background-->
    </div>
    <!--end cd-background-wrapper-->
</div> <?php } ?>
<!--end page-->

<!--SIDE PANEL-->

<!--end side-panel-->

<div col="row " style="position: absolute;width: 100%;z-index: 99999;top:0;">
    <div col="col-md-12" >
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark administrdor_nav" style="margin-bottom: 0px !important;">
            <a href="#" class="navbar-brand jmy_web_div" data-page="configuracion_panel" id="titulo_panel" data-editor="no"><?php $this->pnt('titulo_panel','Panel JMY V3'); ?></a>
            <button class="navbar-toggler navbar-toggler-bsk" type="button"  data-target="#navbarSupportedContent" >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class=" navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto" id="nav_administrador">
                </ul>
            </div>
        </nav>
    </div>
</div>

<div col="row" id="contenido_administrador">
    <div col="col-md-12">
        <?php 
        if(file_exists($data['url_marco']))
            include_once($data['url_marco']);
        else
            $this->pre(['p'=>['No se pudo cargar este módulo, consultelo con su administrador',$data['url_marco']],'t'=>'Error']);
        ?>
    </div>
</div>
<!-- Modal -->
<div class="ventana " tabindex="-1" id="alerta" >
  <div class="modal-header">
    <h4 id="alerta_titulo">Cargando...</h4>
    <button type="button" class="close alerta_cerrar" >×</button>
  </div>
  <div class="modal-body">
    <div id="alerta_mensaje">Cargando Módulo clientes</div>
  </div>
  <div class="modal-footer">
    
    <div id="alerta_mensje_footer"></div>
    <button class="btn btn-dark alerta_cerrar" >Cerrar</button>
    <div id="alerta_continuar_div"></div>
  </div>
</div>





