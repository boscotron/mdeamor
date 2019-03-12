<?php 
   // $this ->pre(['p'=>$data,'t'=>'TITULO_ARRAY']);  
    $table = "blog";
    $page = $data['blog']['id'];
?>
<div class="uk-section-default uk-section uk-padding-remove-vertical">
   <div class="uk-grid-margin" uk-grid>
      <div class="uk-width-1-1@m">
         <div class="uk-margin" uk-slideshow="minHeight: 200;maxHeight: 500">
            <div class="uk-position-relative">
               <ul class="uk-slideshow-items" style="min-height: 200px">
                  <li class="el-item" >
                     <div class="jmy_web_slider"  data-page="<?php echo $page; ?>"   data-tabla="<?php echo $table; ?>"  id="marco_foto_principal"  data-marco="marco_foto_principal" data-var='<?php echo json_encode([ [   
                         "type"=>"imagen",
                         "id"=>"foto_principal",
                         "idadd"=>"foto_principal",
                          "width"=>"1215",
                          "height"=>"500",
                          "url"=>$this->url_templet(["return"=>true]).' images/slides/sv1.jpg'  ]]); ?>'></div>
                     <img src="<?php $this->pnt('foto_principal',$this->url_templet(['return'=>true]).'images/conocenos/conocenos.jpg'); ?>" id="foto_principal" class="el-image" alt uk-cover>        
                     <div class="uk-position-cover uk-flex uk-flex-right uk-flex-middle uk-container uk-section">
                        <div class="el-overlay uk-panel">
                           <h3 class="el-title uk-margin uk-h3 uk-heading-bullet uk-text-primary jmy_web_div" data-tabla="<?php echo $table; ?>"   data-page="<?php echo $page; ?>" id="titulo_foto_principal" data-editor="no"><?php $this->pnt('titulo_foto_principal','Ellos sólo necesitan una oportunidad'); ?></h3>
                           <div class="el-content uk-margin jmy_web_div" data-tabla="<?php echo $table; ?>" data-page="<?php echo $page; ?>" id="subtitulo_foto_principal" data-editor="no"><?php $this->pnt('subtitulo_foto_principal','Ministerios de Amor edifica vidas libres y productivas'); ?></div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="uk-section-default uk-section">
   <div class="uk-container">
      <div class="uk-grid-margin" uk-grid>
         <div class="uk-width-1-1@m">
            <div class="uk-margin">
               <h1 class="p1 jmy_web_div" data-tabla="<?php echo $table; ?>" data-page="<?php echo $page; ?>" id="titulo" data-editor="no"><?php $this->pnt('titulo','<span class="s1">¿Cuáles son los requisitos de ingreso para un menor?</span>'); ?></h1>
               <div class="jmy_web_div" data-tabla="<?php echo $table; ?>" data-page="<?php echo $page; ?>" id="nota_principal" data-editor="on"><?php $this->pnt('nota_principal','<p class="p2"><span class="s2">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio</span></p>
                    <p class="p3"><span class="s1">Et harum quidem rerum facilis est et expedita distinctio. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</span></p>'); ?></div>
            </div>
         </div>
      </div>
   </div>
</div>
