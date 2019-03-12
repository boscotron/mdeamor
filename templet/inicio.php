<?php 

$page ='inicio';
$sliders=$this->pnt('no_sliders_top','2',["return"=>1]);
//$this->pre(['p'=>$sliders,'t'=>'TITULO_ARAY']);
$table="vistaweb";
 ?> 
<div class="uk-section-default uk-section uk-padding-remove-vertical">
   <div class="uk-grid-margin" uk-grid>
      <div class="uk-width-1-1@m">
         <div class="uk-margin" uk-slideshow="minHeight: 200;maxHeight: 500">
			  <div class="jmy_web_contador" data-page="<?php echo $page; ?>" id="no_sliders_top" data-value="<?php echo $sliders; ?>" data-titulo="Número de sliders "></div>
            <div class="uk-position-relative">
               <ul class="uk-slideshow-items" style="min-height: 200px">
			   <?php for($i=0;$i<$sliders;$i++){ ?>
				<li class="el-item" >
                     <div class="jmy_web_slider"  data-page="<?php echo $page; ?>"   data-tabla="<?php echo $table; ?>"  id="marco_foto_principal"  data-marco="marco_foto_principal" data-var='<?php echo json_encode([ [   
                         "type"=>"imagen",
                         "id"=>"foto_principal_".$i,
                         "idadd"=>"foto_principal_".$i,
                          "width"=>"1215",
                          "height"=>"500",
                          "url"=>$this->url_templet(["return"=>true]).' images/slides/sv1.jpg'  ]]); ?>'></div>
                     <img src="<?php $this->pnt('foto_principal',$this->url_templet(['return'=>true]).'images/home/top_final.jpg'); ?>" id="foto_principal_<?php echo $i ?>" class="el-image" alt uk-cover>        
                     <div class="uk-position-cover uk-flex uk-flex-right uk-flex-middle uk-container uk-section">
                        <div class="el-overlay uk-panel">
                           <h3 class="el-title uk-margin uk-h3 uk-heading-bullet uk-text-primary jmy_web_div fondo-blanco-box" data-tabla="<?php echo $table; ?>"   data-page="<?php echo $page; ?>" id="titulo_foto_principal_<?php echo $i ?>" data-editor="no"><?php $this->pnt('titulo_foto_principal_'.$i,'Ellos sólo necesitan una oportunidad'); ?></h3>
                           <div class="el-content uk-margin fondo-blanco-box jmy_web_div" data-tabla="<?php echo $table; ?>" data-page="<?php echo $page; ?>" id="subtitulo_foto_principal" data-editor="no"><?php $this->pnt('subtitulo_foto_principal','Ministerios de Amor edifica vidas libres y productivas'); ?></div>
                        </div> 
                     </div>  
                  </li>
				  <?php } ?>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="uk-section-default uk-section uk-padding-remove-bottom">
   <div class="uk-position-relative">
      <div class="uk-container">
         <div class="uk-margin-large" uk-grid>
            <div class="uk-width-1-1@m">
               <h2 class="uk-text-center uk-h1 uk-heading-bullet jmy_web_div" data-page="<?php echo $page; ?>" id="bienvenida_h2" data-editor="no"><?php $this->pnt('bienvenida_h2','Bienvenidos'); ?></h2>
               <div class="uk-margin">
                  <h3 style="text-align: center;" class="p1 jmy_web_div" data-page="<?php echo $page; ?>" id="bienvenida_h3" data-editor="no"><?php $this->pnt('bienvenida_h3','<span class="s1">Con tu ayuda los niños de la calle... Sí pueden volver a nacer</span>'); ?></h3>
                  <p style="text-align: justify;" class="p2 jmy_web_div" data-page="<?php echo $page; ?>" id="bienvenida_p2" data-editor="no"><?php $this->pnt('bienvenida_p2','<span class="s1">Ministerios de Amor nace por amor a la población más marginada del país: Niños en situación de calle. Tenemos como objetivo lograr que niños rescatados de la calle, niños en situación de riesgo, huérfanos e hijos de reclusos sean reintegrados a la sociedad como personas seguras, independientes y productivas.</span>'); ?></p>
                  <p style="text-align: justify;" class="p3 jmy_web_div" data-page="<?php echo $page; ?>" id="bienvenida_p3" data-editor="no"><?php $this->pnt('bienvenida_p3','<span class="s2">Ministerios de Amor brinda asistencia integral, es decir, un hogar con amor donde vivir; educación académica y moral; atención médica y psicológica y actividades recreativas Este año cumplimos 30 años de labor ininterrumpida lo que significa generaciones enteras de niños rescatados.</span>'); ?></p>
               </div>
            </div>
         </div>
         <div class="uk-grid-margin" uk-grid>
            <div class="uk-width-expand@m">
            </div>
            <div class="uk-width-1-2@m">
               <div class="uk-margin">
               <div class="jmy_web_slider"  data-page="<?php echo $page; ?>"   data-tabla="vistaweb"  id="marco"  data-marco="marco" data-var='<?php echo json_encode([[ "type"=>"text",
                        "id"=>"bienvenida_video",
                        "idadd"=>"bienvenida_video",
                        "value"=>'<iframe width="100%" height="280" src="https://www.youtube.com/embed/ZDTQzte2xdU?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>',
                         ]]); ?>'></div>
                
                <?php $this->pnt('bienvenida_video','<iframe width="100%" height="280" src="https://www.youtube.com/embed/ZDTQzte2xdU?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'); ?>
                  
               </div>
            </div>
            <div class="uk-width-expand@m">
            </div>
         </div>
      </div>
      <div class="tm-section-title uk-position-top-right uk-position-medium uk-margin-remove-vertical">
         <div class="tm-rotate-180 jmy_web_div" data-page="<?php echo $page; ?>" id="bienvenida_firma" data-editor="no"><?php $this->pnt('bienvenida_firma','Ministerios de Amor'); ?></div>
      </div>
   </div>
</div>
<div class="uk-section-default uk-section">
   <div class="uk-container">
      <div class="uk-grid-small uk-grid-margin-small" uk-grid>
         <div class="uk-width-expand@m">
            <div class="uk-margin uk-text-center">
               <div class="el-container uk-inline-clip uk-transition-toggle uk-light">
                  <div class="uk-transition-fade el-image uk-inline uk-background-norepeat uk-background-cover" style="background-image: url('<?php $this->url_templet(); ?>/images/home/grid.jpg');"><img src="<?php $this->url_templet(); ?>/images/home/grid.jpg" alt class="uk-invisible"></div>
                  <div class="el-overlay uk-position-cover uk-overlay-primary"></div>
                  <div class="uk-position-center">
                     <div class="uk-overlay">
                        <h3 class="el-title uk-margin uk-heading-primary uk-heading-divider jmy_web_div" data-page="<?php echo $page; ?>" id="cuadros_h3_0" data-editor="no"><?php $this->pnt('cuadros_h3_0','LOS NIÑOS'); ?></h3>
                        <div class="el-content uk-margin jmy_web_div" data-page="<?php echo $page; ?>" id="cuadros_cont_0" data-editor="no"><?php $this->pnt('cuadros_cont_0','que asiste Ministerios de Amor'); ?></div>
                     </div>
                  </div>
                  <a href="http://54.148.42.145/~minister/index.php/home/los-ninos" class="uk-position-cover"></a>
               </div>
            </div>
            <div class="uk-margin uk-text-center">
               <div class="el-container uk-inline-clip uk-transition-toggle uk-light">
                  <div class="uk-transition-fade el-image uk-inline uk-background-norepeat uk-background-cover" style="background-image: url('<?php $this->url_templet(); ?>/images/home/grid.jpg');"><img src="<?php $this->url_templet(); ?>/images/home/grid.jpg" alt class="uk-invisible"></div>
                  <div class="el-overlay uk-position-cover uk-tile-secondary"></div>
                  <div class="uk-position-center">
                     <div class="uk-overlay">
                        <h3 class="el-title uk-margin uk-heading-primary uk-heading-divider jmy_web_div" data-page="<?php echo $page; ?>" id="cuadros_h3_1" data-editor="no"><?php $this->pnt('cuadros_h3_1','LA HISTORIA'); ?></h3>
                        <div class="el-content uk-margin jmy_web_div" data-page="<?php echo $page; ?>" id="cuadros_cont_1" data-editor="no"><?php $this->pnt('cuadros_cont_1','cumplimos 30 años'); ?></div>
                     </div>
                  </div>
                  <a href="http://54.148.42.145/~minister/index.php/home/la-historia" class="uk-position-cover"></a>
               </div>
            </div>
         </div>
         <div class="uk-width-expand@m">
            <div class="uk-margin uk-text-center">
               <div class="el-container uk-inline-clip uk-transition-toggle uk-light">
                  <div class="uk-transition-fade el-image uk-inline uk-background-norepeat uk-background-cover" style="background-image: url('<?php $this->url_templet(); ?>/images/home/grid.jpg');"><img src="<?php $this->url_templet(); ?>/images/home/grid.jpg" alt class="uk-invisible"></div>
                  <div class="el-overlay uk-position-cover uk-tile-secondary"></div>
                  <div class="uk-position-center">
                     <div class="uk-overlay">
                        <h3 class="el-title uk-margin uk-heading-primary uk-heading-divider jmy_web_div" data-page="<?php echo $page; ?>" id="cuadros_h3_2" data-editor="no"><?php $this->pnt('cuadros_h3_2','LA ATENCIÓN'); ?></h3>
                        <div class="el-content uk-margin jmy_web_div" data-page="<?php echo $page; ?>" id="cuadros_cont_2" data-editor="no"><?php $this->pnt('cuadros_cont_2','que brindamos es integral'); ?></div>
                     </div>
                  </div>
                  <a href="http://54.148.42.145/~minister/index.php/home/la-atencion" class="uk-position-cover"></a>
               </div>
            </div>
         </div>
         <div class="uk-width-expand@m">
            <div class="uk-margin uk-text-center">
               <div class="el-container uk-inline-clip uk-transition-toggle uk-light">
                  <div class="uk-transition-fade el-image uk-inline uk-background-norepeat uk-background-cover" style="background-image: url('<?php $this->url_templet(); ?>/images/home/grid.jpg');"><img src="<?php $this->url_templet(); ?>/images/home/grid.jpg" alt class="uk-invisible"></div>
                  <div class="el-overlay uk-position-cover uk-overlay-primary"></div>
                  <div class="uk-position-center">
                     <div class="uk-overlay">
                        <h3 class="el-title uk-margin uk-heading-primary uk-heading-divider jmy_web_div" data-page="<?php echo $page; ?>" id="cuadros_h3_3" data-editor="no"><?php $this->pnt('cuadros_h3_3','LAS CASAS'); ?></h3>
                        <div class="el-content uk-margin jmy_web_div" data-page="<?php echo $page; ?>" id="cuadros_cont_3" data-editor="no"><?php $this->pnt('cuadros_cont_3','son 9 casas en total. En 4 estados'); ?></div>
                     </div>
                  </div>
                  <a href="http://54.148.42.145/~minister/index.php/home/las-casa" class="uk-position-cover"></a>
               </div>
            </div>
            <div class="uk-margin uk-text-center">
               <div class="el-container uk-inline-clip uk-transition-toggle uk-light">
                  <div class="uk-transition-fade el-image uk-inline uk-background-norepeat uk-background-cover" style="background-image: url('<?php $this->url_templet(); ?>/images/home/grid.jpg');"><img src="<?php $this->url_templet(); ?>/images/home/grid.jpg" alt class="uk-invisible"></div>
                  <div class="el-overlay uk-position-cover uk-tile-secondary"></div>
                  <div class="uk-position-center">
                     <div class="uk-overlay">
                        <h3 class="el-title uk-margin uk-heading-primary uk-heading-divider jmy_web_div" data-page="<?php echo $page; ?>" id="cuadros_h3_4" data-editor="no"><?php $this->pnt('cuadros_h3_4','LOS LOGROS'); ?></h3>
                        <div class="el-content uk-margin jmy_web_div" data-page="<?php echo $page; ?>" id="cuadros_cont_4" data-editor="no"><?php $this->pnt('cuadros_cont_4','cientos de egresados exitosos'); ?></div>
                     </div>
                  </div>
                  <a href="http://54.148.42.145/~minister/index.php/home/los-logros" class="uk-position-cover"></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="uk-section-muted uk-section">
   <div class="uk-container uk-container-expand">
      <div class="uk-grid-margin" uk-grid>
         <div class="uk-width-1-1@m">
            <h2 class="uk-text-center uk-h1 uk-heading-bullet jmy_web_div" data-page="<?php echo $page; ?>" id="ayuda_h2" data-editor="no"><?php $this->pnt('ayuda_h2','¿Cómo puedes ayudar?'); ?></h2>
            <div class="uk-margin">
                <h3 style="text-align: center;" class="p1 jmy_web_div" data-page="<?php echo $page; ?>" id="ayuda_h3" data-editor="no"><?php $this->pnt('ayuda_h3','<b>Gracias por sumarte a nuestro esfuerzo</b>'); ?></h3>
                <p style="text-align: justify;" class="p2 jmy_web_div" data-page="<?php echo $page; ?>" id="ayuda_p1" data-editor="on"><?php $this->pnt('ayuda_p1','<span class="s1">Con la ayuda de personas comprometidas con nuestro país hemos logrado que todos estos niños salgan de una injusta condena. Gracias al apoyo de nuestros donadores Ministerios de Amor tiene 30 años, de éxitos y de vidas transformadas.</span>'); ?></p>
                 
            </div>
         </div>
      </div>
      <div class="uk-grid-margin" uk-grid>
        <?php $no_ayuda_carrucel = $this->pnt('no_ayuda_carrucel','3',["return"=>true]); ?>
        <div class="jmy_web_contador" data-page="<?php echo $page; ?>" id="no_imagenes" data-value="<?php echo $no_ayuda_carrucel ; ?>" data-titulo="Número de clientes "></div>
      </div>
      <div class="uk-grid-margin" uk-grid>
         <?php
            for ($i=0; $i < $no_ayuda_carrucel  ; $i++) { ?>
         <div class="uk-width-expand@m">
            <div class="uk-margin uk-text-center uk-card uk-card-default uk-card-body">
               
                <div class="jmy_web_slider"  data-page="<?php echo $page; ?>"   data-tabla="vistaweb"  id="marco_ayuda_carrucel_img_<?php echo $i; ?>"  data-marco="marco_ayuda_carrucel_img_<?php echo $i; ?>" data-var='<?php echo json_encode([[ 
                    "type"=>"imagen",
                    "id"=>"ayuda_carrucel_img_".$i,
                    "idadd"=>"ayuda_carrucel_img_".$i,
                     "width"=>"400",
                     "height"=>"400"
                    ]]); ?>'>
                    <img src="<?php $this->pnt('ayuda_carrucel_img_'.$i,$this->url_templet(['return'=>true]).'/images/home/padrino.jpg'); ?>" id="ayuda_carrucel_img_<?php echo $i; ?>" class="el-image uk-border-circle" alt>
                </div>

                      
                <h3 class="el-title uk-margin uk-card-title uk-heading-bullet jmy_web_div" data-page="<?php echo $page; ?>" id="ayuda_carrucel_h3_<?php echo $i; ?>" data-editor="no"><?php $this->pnt('ayuda_carrucel_h3_'.$i,'Siendo Padrino'); ?></h3>

                <div class="el-content uk-margin jmy_web_div" data-page="<?php echo $page; ?>" id="ayuda_carrucel_content_<?php echo $i; ?>" data-editor="no"><?php $this->pnt('ayuda_carrucel_content_'.$i,'A través de aportaciones económicas mensuales desde 100 pesos.'); ?></div>

                <p><a href="<?php $this->pnt('ayuda_carrucel_btn_'.$i.'_href','#'); ?>" uk-scroll class="el-link uk-button uk-button-secondary jmy_web_div" data-page="<?php echo $page; ?>" id="ayuda_carrucel_btn_<?php echo $i; ?>" data-editor="no"><?php $this->pnt('ayuda_carrucel_btn_'.$i,'Quiero saber más'); ?></a></p>

            </div>
        </div>
        <?php } ?>
      </div>
   </div>
</div>
<div class="uk-section-default uk-section" uk-scrollspy="{&quot;target&quot;:&quot;[uk-scrollspy-class]&quot;,&quot;cls&quot;:&quot;uk-animation-fade&quot;,&quot;delay&quot;:false}">
   <div class="uk-position-relative">
      <div class="uk-container">
         <div class="uk-margin-large" uk-grid>
            <div class="uk-width-1-1@m">
                <h2 class="uk-text-center uk-h1 uk-heading-bullet jmy_web_div" data-page="<?php echo $page; ?>" id="atencion_h2" data-editor="no"><?php $this->pnt('atencion_h2','Atención Integral'); ?></h2>
                <div class="uk-margin">
                    <h3 style="text-align: center;" class="p1 jmy_web_div" data-page="<?php echo $page; ?>" id="atencion_h3" data-editor="no"><?php $this->pnt('atencion_h3','<span class="s1">Ayúdanos a tener los recursos suficientes que garanticen<br /> el desarrollo de nuestros pequeños.</span>'); ?></h3>

                    <p style="text-align: justify;" class="p2 jmy_web_div" data-page="<?php echo $page; ?>" id="atencion_p1" data-editor="on"><?php $this->pnt('atencion_p1','<span class="s1">En Ministerios de Amor reconocemos que los niños y adolescente deben aprender, jugar, gozar de buena salud y desarrollarse independientemente. </span><span class="s1">Ministerios de Amor tiene el compromiso de salvaguardar el desarrollo completo, digno e integral en cada uno de nuestros beneficiarios.</span>'); ?></p>

                </div>              
            </div>
         </div>
         <div class="uk-grid-divider uk-grid-margin" uk-grid>
            <div class="uk-width-expand@m">
               <div class="uk-margin uk-text-center uk-panel" uk-scrollspy-class>
                  <h3 class="el-title uk-margin uk-h3 uk-heading-line">
                     <span>Donar con Visa Checkout</span>
                  </h3>
                  <img src="<?php $this->url_templet(); ?>/images/home/visa.jpg" class="el-image" alt>
                  <div class="el-content uk-margin">
                     <p class="p1" style="text-align: center;">Se aceptan todas las tarjetas de crédito.</p>
                  </div>
                  <p><a href="#" uk-scroll class="el-link uk-button uk-button-default">Próximamente</a></p>
               </div>
            </div>
            <div class="uk-width-expand@m">
               <div class="uk-margin uk-text-center uk-panel" uk-scrollspy-class>
                  <h3 class="el-title uk-margin uk-h3 uk-heading-line">
                     <span>Donar con Paypal</span>
                  </h3>
                  <img src="<?php $this->url_templet(); ?>/images/home/paypal.jpg" class="el-image" alt>
                  <div class="el-content uk-margin">
                     <p class="p1" style="text-align: center;">Se aceptan donaciones con Paypal y con todas las tarjetas de crédito.</p>
                     <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="VA6PB8STH2Z5Q">
                        <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                        <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="tm-section-title uk-position-top-right uk-position-medium uk-margin-remove-vertical">
         <div class="tm-rotate-180">Ministerios de Amor</div>
      </div>
   </div>
</div>
<div class="uk-section-primary uk-section">
   <div class="uk-container">
      <div class="uk-grid-margin" uk-grid>
         <div class="uk-width-1-1@m">
            <h1 class="uk-text-center uk-heading-bullet jmy_web_div" data-page="<?php echo $page; ?>" id="CAMBIAR" data-editor="no"><?php $this->pnt('CAMBIAR','Testimonio '); ?></h1>
            <div class="uk-margin">
               <h3  style="text-align: center;" class="p1 jmy_web_div" data-page="<?php echo $page; ?>" id="CAMBIAR" data-editor="no"><?php $this->pnt('CAMBIAR','<span class="s1">¿Qué dicen las personas de nosotros?</span>'); ?></h3>
               <p style="text-align: center;" class="p2 jmy_web_div" data-page="<?php echo $page; ?>" id="CAMBIAR" data-editor="no"><?php $this->pnt('CAMBIAR','<span class="s2">En Ministerios de Amor nuestro compromiso es con nuestros beneficiarios, pero también con las personas que hacen posible esta labor. Valoramos a cada una de las personas que colaboran con nosotros porque son parte de la familia Ministerios de Amor. Y queremos compartir con ustedes estos testimonios.</span>'); ?></p>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="uk-section-default uk-section">
<?php $no_staff = $this->pnt('no_staff','4',["return"=>true]); ?>
    <div class="jmy_web_contador" data-page="<?php echo $page; ?>" id="no_staff" data-value="<?php echo $no_staff; ?>" data-titulo="Número de clientes "></div>
</div>
<div class="uk-section-default uk-section">
  
   <div class="uk-container">   
      <div class="uk-grid-margin" uk-grid>
         <div class="uk-width-1-1@m">
            <h1 class="uk-text-center uk-heading-bullet jmy_web_div" data-page="<?php echo $page; ?>" id="staff_h1" data-editor="no"><?php $this->pnt('staff_h1','Staff'); ?></h1>
         </div>
      </div>
      <div class="uk-grid-margin" uk-grid>
         
      <?php
        for ($i=0; $i < $no_staff ; $i++) {  ?>   
         <div class="uk-width-expand@m uk-width-1-2@s">
            <div class="uk-margin uk-text-center uk-panel">
                <div class="jmy_web_slider"  data-page="<?php echo $page; ?>"   data-tabla="vistaweb"  id="marcostaff_<?php echo $i; ?>"  data-marco="marcostaff_<?php echo $i; ?>" data-var='<?php echo json_encode([ [ 
                    "type"=>"imagen",
                    "id"=>"staff_img_".$i,
                    "idadd"=>"staff_img_".$i,
                     "width"=>"500",
                     "height"=>"558"
                     ]]); ?>'></div>
               <img src="<?php $this->pnt('staff_img_'.$i,$this->url_templet(['return'=>true]).'/images/home/8.jpg'); ?>" class="el-image uk-border-rounded" alt>        
               <h3 class="el-title uk-margin uk-heading-bullet jmy_web_div" data-page="<?php echo $page; ?>" id="staff_h3_<?php echo $i; ?>" data-editor="no"><?php $this->pnt('staff_h3_'.$i,'Nombre'); ?></h3>
               <div class="el-content uk-margin">
                  <p class="p1 jmy_web_div" data-page="<?php echo $page; ?>" id="staff_rango_<?php echo $i; ?>" data-editor="no"><?php $this->pnt('staff_rango_'.$i,'Subdirectora'); ?></p>
               </div>
            </div>
         </div>
         <?php } ?>


      </div>
   </div>
</div>
<div class="uk-section-default uk-section" uk-scrollspy="{&quot;target&quot;:&quot;[uk-scrollspy-class]&quot;,&quot;cls&quot;:&quot;uk-animation-scale-up&quot;,&quot;delay&quot;:false}">
   <div class="uk-container">
      <div class="uk-grid-margin" uk-grid>
         <div class="uk-width-1-1@m">
            <h1 uk-scrollspy-class="uk-animation-scale-up" class="uk-text-center uk-heading-bullet jmy_web_div" data-page="<?php echo $page; ?>" id="aliados_h1_" data-editor="no"><?php $this->pnt('aliados_h1_','Nuestros aliados'); ?></h1>
            <div class="uk-margin" uk-scrollspy-class>
               <h3 style="text-align: center;" class="p1 jmy_web_div" data-page="<?php echo $page; ?>" id="aliados_h3_" data-editor="no"><?php $this->pnt('aliados_h3_','<span class="s1">Gracias por su compromiso con la niñez mexicana</span>'); ?></h3>
               <p>
                    <?php $no_aliados = $this->pnt('no_aliados','4',["return"=>true]); ?>
                    <div class="jmy_web_contador" data-page="<?php echo $page; ?>" id="no_aliados" data-value="<?php echo $no_aliados; ?>" data-titulo="Número de clientes "></div>
               </p>               
               <p>               
               <div id="wk-grid5ec" class="wk-grid-width-1-1 wk-grid-width-small-1-1 wk-grid-width-medium-1-4 wk-grid-width-large-1-4 wk-grid-width-xlarge-1-4 wk-grid wk-grid-match " data-wk-grid-match="{target:'> div > .wk-panel', row:true}" data-wk-grid-margin >
               <?php
                 for ($i=0; $i < $no_aliados ; $i++) {  ?>   
                  <div>
                     <div class="wk-panel">
                        <div class="wk-panel-teaser">
                           <figure class="wk-overlay wk-overlay-hover ">
                           <div class="jmy_web_slider"  data-page="<?php echo $page; ?>"   data-tabla="vistaweb"  id="marcoaliados_img_<?php echo $i; ?>"  data-marco="marcoaliados_img_<?php echo $i; ?>" data-var='<?php echo json_encode([ [ 
                                    "type"=>"imagen",
                                    "id"=>"aliados_img_".$i,
                                    "idadd"=>"aliados_img_".$i,
                                    "width"=>"400",
                                    "height"=>"250"
                                    ],[
										"type"=>"text",
										"id"=>"aliados_url_".$i,
										"placeholder"=>"Url vinculo".$i,
										"value"=>$this->pnt('aliados_url_'.$i,'#',["return"=>1]),
									]]); ?>'></div>
                                <a href="<?php $this->pnt('aliados_url_'.$i,'#'); ?>" target="_blanc"><img src="<?php $this->pnt('aliados_img_'.$i,$this->url_templet(['return'=>true]).'/images/home/logos/1.png'); ?>" class="el-image uk-border-rounded" id="aliados_img_<?php echo $i; ?>" alt="1" width="400" height="250"></a>
                             
                           </figure>
                        </div>
                     </div>
                  </div>
                <?php } ?>

                  
               </div>
               <script>
                  (function($){                  
                      // get the images of the gallery and replace it by a canvas of the same size to fix the problem with overlapping images on load.
                      $('img[width][height]:not(.wk-overlay-panel)', $('#wk-grid5ec')).each(function() {                  
                          var $img = $(this);                  
                          if (this.width == 'auto' || this.height == 'auto' || !$img.is(':visible')) {
                              return;
                          }                  
                          var $canvas = $('<canvas class="wk-responsive-width"></canvas>').attr({width:$img.attr('width'), height:$img.attr('height')}),
                              img = new Image,
                              release = function() {
                                  $canvas.remove();
                                  $img.css('display', '');
                                  release = function(){};
                              };                  
                          $img.css('display', 'none').after($canvas);                  
                          $(img).on('load', function(){ release(); });
                          setTimeout(function(){ release(); }, 1000);                  
                          img.src = this.src;                  
                      });                  
                  })(jQuery);
               </script>
               </p>
            </div>
         </div>
      </div>
   </div>
</div>