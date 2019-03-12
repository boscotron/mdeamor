<div class="uk-section-default uk-section uk-padding-remove-vertical">
   <div class="uk-grid-margin" uk-grid>
      <div class="uk-width-1-1@m">
         <div class="uk-margin" uk-slideshow="minHeight: 200;maxHeight: 500">
            <div class="uk-position-relative">
               <ul class="uk-slideshow-items" style="min-height: 200px">
                  <li class="el-item" >
                     <img src="<?php $this->url_templet(); ?>images/home/top_final.jpg" class="el-image" alt uk-cover>        
                     <div class="uk-position-cover uk-flex uk-flex-right uk-flex-middle uk-container uk-section">
                        <div class="el-overlay uk-panel">
                           <h3 class="el-title uk-margin uk-h3 uk-heading-bullet uk-text-primary">
                              Ellos sólo necesitan una oportunidad    
                           </h3>
                           <div class="el-content uk-margin">Ministerios de Amor edifica vidas libres y productivas
                           </div>
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
               <h1 style="text-align: center;">Galería</h1>
               <p>
               <div id="wk-grid61d" class="wk-grid-width-1-1 wk-grid-width-small-1-1 wk-grid-width-medium-1-3 wk-grid-width-large-1-3 wk-grid-width-xlarge-1-3 wk-grid wk-grid-match wk-grid-collapse wk-text-center " data-wk-grid-match="{target:'> div > .wk-panel', row:true}" data-wk-grid-margin >
                  <div>
                     <div class="wk-panel">
                        <div class="wk-text-center wk-panel-teaser"><img src="<?php $this->url_templet(); ?>images/galeria/galeria01.jpg" class=" wk-overlay-scale" alt="Galeria01" width="400" height="400"></div>
                     </div>
                  </div>
                  <div>
                     <div class="wk-panel">
                        <div class="wk-text-center wk-panel-teaser"><img src="<?php $this->url_templet(); ?>images/galeria/galeria03.jpg" class=" wk-overlay-scale" alt="Galeria03" width="400" height="400"></div>
                     </div>
                  </div>
                  <div>
                     <div class="wk-panel">
                        <div class="wk-text-center wk-panel-teaser"><img src="<?php $this->url_templet(); ?>images/galeria/galeria04.jpg" class=" wk-overlay-scale" alt="Galeria04" width="400" height="400"></div>
                     </div>
                  </div>
                  <div>
                     <div class="wk-panel">
                        <div class="wk-text-center wk-panel-teaser"><img src="<?php $this->url_templet(); ?>images/galeria/galeria05.jpg" class=" wk-overlay-scale" alt="Galeria05" width="400" height="400"></div>
                     </div>
                  </div>
                  <div>
                     <div class="wk-panel">
                        <div class="wk-text-center wk-panel-teaser"><img src="<?php $this->url_templet(); ?>images/galeria/galeria06.jpg" class=" wk-overlay-scale" alt="Galeria06" width="400" height="400"></div>
                     </div>
                  </div>
                  <div>
                     <div class="wk-panel">
                        <div class="wk-text-center wk-panel-teaser"><img src="<?php $this->url_templet(); ?>images/galeria/galeria07.jpg" class=" wk-overlay-scale" alt="Galeria07" width="400" height="400"></div>
                     </div>
                  </div>
                  <div>
                     <div class="wk-panel">
                        <div class="wk-text-center wk-panel-teaser"><img src="<?php $this->url_templet(); ?>images/galeria/galeria08.jpg" class=" wk-overlay-scale" alt="Galeria08" width="400" height="400"></div>
                     </div>
                  </div>
                  <div>
                     <div class="wk-panel">
                        <div class="wk-text-center wk-panel-teaser"><img src="<?php $this->url_templet(); ?>images/galeria/galeria09.jpg" class=" wk-overlay-scale" alt="Galeria09" width="400" height="400"></div>
                     </div>
                  </div>
                  <div>
                     <div class="wk-panel">
                        <div class="wk-text-center wk-panel-teaser"><img src="<?php $this->url_templet(); ?>images/galeria/galeria10.jpg" class=" wk-overlay-scale" alt="Galeria10" width="400" height="400"></div>
                     </div>
                  </div>
               </div>
               <script>
                  (function($){
                  
                      // get the images of the gallery and replace it by a canvas of the same size to fix the problem with overlapping images on load.
                      $('img[width][height]:not(.wk-overlay-panel)', $('#wk-grid61d')).each(function() {
                  
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