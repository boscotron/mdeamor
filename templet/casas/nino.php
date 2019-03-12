<?php //$this ->pre(['p'=>$data,'t'=>'data']); 
$page = $data['data']['id_nino'];
$tabla = $data['data']['tabla'];
?>
<style>
select.btn-mini {
    height: auto;
    line-height: 14px;
}

/* this is optional (see below) */
select.btn {
    -webkit-appearance: button;
       -moz-appearance: button;
            appearance: button;
    padding-right: 16px;
}

select.btn-mini + .caret {
    margin-left: -20px;
    margin-top: 9px;
}
</style>
<input type="hidden" id="id_nino" value="<?php echo $data['data']['id_niño']; ?>">
<div class="containerb" style="padding: 0;">
    <div class="row px-2">
        <div class="card col-sm-12 bg-light">
            <div class="card-body">            
                <div class="row">
                    <div class="col-xs-2 col-sm-2">
                        <div class="jmy_web_slider"  data-page="<?php echo $page; ?>"   data-tabla="<?php echo $tabla; ?>"  id="marco"  data-marco="marco" data-var='<?php echo json_encode([ [ "type"=>"imagen",
                            "id"=>"foto_perfil",
                            "idadd"=>"foto_perfil",
                            "width"=>"800",
                            "height"=>"800"
                            ]]); ?>'></div>
                        <img src="<?php $this->pnt('foto_perfil',$this->url_templet(['return'=>true]).'images/icono_perfil.gif'); ?>" with="100%">
                    </div>
                    <div class="col-xs-8 col-sm-5">         
                        <blockquote>
                            <p class="jmy_web_div" data-page="<?php echo $page; ?>" id="nombre"  data-tabla="<?php echo $tabla; ?>" data-editor="no" tabindex="1"><?php $this->pnt('nombre','Nombre del niño o niña'); ?></p>
                        </blockquote>
                        <blockquote>
                            <p class="jmy_web_div" data-page="<?php echo $page; ?>" id="apellido_paterno"  data-tabla="<?php echo $tabla; ?>" data-editor="no" tabindex="2"><?php $this->pnt('apellido_paterno','Apellido Paterno del niño o niña'); ?></p>
                        </blockquote>
                        <blockquote>
                            <p class="jmy_web_div" data-page="<?php echo $page; ?>" id="apellido_materno"  data-tabla="<?php echo $tabla; ?>" data-editor="no"  tabindex="3"><?php $this->pnt('apellido_materno','Apellido Materno del niño o niña'); ?></p>
                        </blockquote>
                    </div>
                    <div class="col-xs-12 col-sm-5">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="d-flex w-100 justify-content-between">
                                    <p class="mb-1 jmy_web_div" data-page="<?php echo $page; ?>"  data-tabla="<?php echo $tabla; ?>"  id="lugar_de_nacimiento" data-editor="no" tabindex="4">
                                    <?php $this->pnt('lugar_de_nacimiento','México.'); ?></p>
                                    <small>Lugar de naciemiento</small>                       
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex w-100 justify-content-between"> 
                                    <div class="form-group w-80">   
                                        <select 
                                        type="select" 
                                        class="form-control input-sm btn-mini  jmy_web_div" 
                                        data-lista-id="lista_casas" 
                                        placeholder="Seleccione una casa" 
                                        data-value="<?php $this->pnt('casa_asignada'); ?>"   
                                        data-tabla="<?php echo $tabla; ?>" 
                                        data-page="<?php echo $page; ?>" 
                                        id="casa_asignada" 
                                        tabindex="5" >
                                        </select>
                                    </div>
                                    <small>Casa hogar</small>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex w-100 justify-content-between">
                                    <p class="mb-1 jmy_web_div" data-page="<?php echo $page; ?>"  data-tabla="<?php echo $tabla; ?>"  id="lugar_nacimiento" data-editor="no" tabindex="4">
                                    <?php $this->pnt('fecha_de_nacimiento','dd/mm/aaaa'); ?></p>
                                    <small>Fecha de naciemiento</small>                       
                                </div>
                            </li>
                                         
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row px-2">
        <div class="card col-md-12 text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" id="tabs_" >
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Generales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="card-section" id="generales">
                
                    <div class="row">                
                        <div class="col-sm-6 col-md-5 col-lg-3 text-center">
                            <div class="card text-left">
                                <div class="card-header"> 
                                    <div class="row">
                                        <div class="col-md-6">Información</div>
                                        <div class="col-md-4 ml-auto">
                                            <?php 
                                            if($data['data']['modulos']['casas']>3){
                                            echo '<button type="button" id="opciones_generales" class="btn btn-primary btn-sm"><i class="fa fa-gear"></i></button>'; } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body"> 
                                    <input type="hidden" id="data-page" value="<?php echo $page; ?>" >
                                    <input type="hidden" id="data-tabla" value="<?php echo $tabla; ?>" >
                                    <div class="row opciones_extra" >                
                                        <div class="col-sm-12 text-center">
                                            <div class="form-group">
                                                <label for="json_ninos_generales">JSON CONFIGURACIÓN:</label>
                                                <textarea type="textarea" rows="2" class="form-control jmy_web_div" data-page="configuracion" data-tabla="<?php echo $tabla; ?>" id="json_ninos_generales" data-editor="no"><?php $this->pnt('json_ninos_generales','',["secundario"=>"configuracion"]); ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-group" id="lista_campos">
                                       <li class="list-group-item list-group-item-action list-group-item-light">
                                      
                                            <div class="row">
                                              
                                            </div>
                                        </li>             
                                    </ul>
                            
                                    <div class="card-footer text-muted">
                                    <button type="button" class="btn btn-outline-primary btn-block btn-sm"><i class="fa fa-plus"></i> Agregar información</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-4 text-left">
                            <div class="card text-left">
                                <div class="card-header">
                                    Comentarios <b> Generales</b>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">En mantenimiento</h5>
                                    <p class="card-text">En breve tendremos lista esta sección.</p>
                                </div>
                                <div class="card-footer text-muted">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4  col-lg-5 text-center">
                        <?php
                            echo $this->archivos([	
                                    'ruta'=>'casas/general/',
                                    'height'=>'500',
                                    'width'=>'100%',
                                    'permisos'=>[ 	
                                        //'des_del_file'=>true, // Desactivar eleiminar archivos
                                        'des_regresar'=>true,
                                        'des_cre_folder'=>true,
                                        'des_del_folder'=>true,
                                        //'des_upload'=>true,
                                        //'des_rename_files'=>true,
                                        'des_rename_folders'=>true,
                                        //'des_duplicate'=>true,
                                        'des_breadcrumb'=>true,
                                        ]
                            ]);
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
