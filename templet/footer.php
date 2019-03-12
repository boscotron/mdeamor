<?php
$this->cargar(["pagina"=>"footer","secundario"=>1]);
?>

    <div class="uk-section-secondary uk-section uk-section-xsmall">
    <div class="uk-container uk-container-expand">
        <div class="uk-grid-divider uk-grid-margin" uk-grid>
            <div class="uk-width-expand@m">
                <div class="uk-margin">
                <h3 style="text-align: center;" class="jmy_web_div" data-page="<?php echo $page; ?>" id="titulo_links" data-editor="no"><?php $this->pnt('titulo_links','Ministerios de Amor',["secundario"=>"footer"]); ?></h3>
		
					<p style="text-align: center; " class="jmy_web_div" data-page="footer" id="footer_links" data-editor="on"><?php $this->pnt('footer_links','<a href="'.$this->url_inicio(["return"=>true]).'">Mda</a><br /><a href="'.$this->url_inicio(["return"=>true]).'conocenos">Conócenos</a><br /><a href="'.$this->url_inicio(["return"=>true]).'transparencia">Transparencia</a><br /><a href="'.$this->url_inicio(["return"=>true]).'noticias">Noticias</a><br /><a href="'.$this->url_inicio(["return"=>true]).'contacto">Contacto</a>',["secundario"=>"footer"]); ?></p>					
			
				</div>
            </div>
			 <div class="uk-width-expand@m">
                <div class="uk-margin">
                <h3 style="text-align: center;" class="jmy_web_div" data-page="<?php echo $page; ?>" id="titulo_links_legal" data-editor="no"><?php $this->pnt('titulo_links_legal','Aviso de privacidad',["secundario"=>"footer"]); ?></h3>
		
					<p style="text-align: center; " class="jmy_web_div" data-page="footer" id="footer_links_legal" data-editor="on"><?php $this->pnt('footer_links_legal','<a href="'.$this->url_inicio(["return"=>true]).'legal">Ver más</a>',["secundario"=>"footer"]); ?></p>					
			
				</div>
            </div>
            <div class="uk-width-expand@m">
                <div class="uk-margin jmy_web_div" data-page="footer" id="footer_datos_contacto" data-editor="on"><?php $this->pnt('footer_datos_contacto','<h3 style="text-align: center;">Contacto</h3>
					<p style="text-align: center;">CDMX: (55)56 11 11 11</p>
					<p style="text-align: center;">
                    Actipan No.16 Col. Insurgentes Mixcoacán<br /> 
					</p>
              
					<div class="uk-child-width-auto uk-grid-small uk-flex-center" uk-grid>
                    <div>
                        <a uk-icon="icon: facebook" href="https://www.facebook.com/MinisteriosDeAmor.Oficial/" class="el-link uk-icon-button"></a>
                        
                            <a uk-icon="icon: mail" href="mailto:contacto@ministeriosdeamor.org.mx" class="el-link uk-icon-button"></a>
                        </div>',["secundario"=>"footer"]); ?> </div>
				 <ul class="uk-grid-small uk-flex-inline uk-flex-middle uk-flex-nowrap" uk-grid>
                                            <li>
                                                <a href="https://www.facebook.com/MinisteriosDeAmor.Oficial/" class="uk-icon-button" target="_blank" uk-icon="facebook"></a>
                                            </li>
											<li>
                                                <a href="https://twitter.com/minisdeamor/" class="uk-icon-button" target="_blank" uk-icon="twitter"></a>
                                            </li>
											<li>
                                                <a href="https://www.instagram.com/ministeriosdeamor_oficial/" class="uk-icon-button" target="_blank" uk-icon="instagram"></a>
                                            </li>
											<li>
                                                <a href="https://www.youtube.com/user/ministeriosamor" class="uk-icon-button" target="_blank" uk-icon="youtube"></a>
                                            </li>
											
                                            <li>
                                                <a href="<?php echo $link_user; ?>" class="uk-icon-button" target="_blank" uk-icon="user"></a>
                                            </li>
                                        </ul>
                </div>
				
				
                <div class="uk-width-expand@m">
                    <div class="uk-margin">
                    <h3 style="text-align: left;">Contactanos</h3>
                    </div>
                    <div class="uk-panel">
                    <div id="fox-container-m90" class="fox-container fox-container-module">
                        <a id="m90"></a>
                        <form name="fox-form-m90" action="<?php $this->url_inicio(); ?>" method="post" enctype="multipart/form-data" novalidate="" class="fox-form fox-form-stacked fox-form-label-inside">
                            <!-- Fox Contact [scope:module] [id:90] [ver:3.8.0] [time:52.17] -->
                            <div class="fox-row">
                                <div class="fox-column fox-column12">
                                <div id="fox-m90-board-box" class="fox-item fox-item-board fox-item-board-labels control-group"></div>
                                <div id="fox-m90-name-box" class="fox-item fox-item-name control-group">
                                    <div class="controls"><input id="fox-m90-name" name="fox_form[m90][name]" type="text" value="" placeholder="Nombre*"/></div>
                                </div>
                                <div id="fox-m90-email-box" class="fox-item fox-item-email control-group">
                                    <div class="controls"><input id="fox-m90-email" name="fox_form[m90][email]" type="email" value="" placeholder="Email*"/></div>
                                </div>
                                <div id="fox-m90-textarea1-box" class="fox-item fox-item-text-area control-group">
                                    <div class="controls"><textarea id="fox-m90-textarea1" name="fox_form[m90][textarea1]" style="height: 50px;" placeholder="Comentarios" data-options="{&quot;max&quot;:0}" class="fox-item-textarea-input elastic"></textarea></div>
                                </div>
                                <div id="fox-m90-submit-box" class="fox-item fox-item-submit fox-item-submit-fields control-group">
                                    <div class="controls"><button type="submit" class="btn btn-primary submit-button"><span class="caption">Submit</span></button></div>
                                </div>
                                </div>
                            </div>
                            <input type="hidden" name="option" value="com_foxcontact"/><input type="hidden" name="task" value="form.send"/><input type="hidden" name="uid" value="m90"/><input type="hidden" name="fox_form_page_uri" value="http://18.ministeriosdeamor.org.mx/"/><input type="hidden" name="fox_form_page_title" value="Ministerios de Amor - BETA - Mda"/>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
            <div class="uk-grid-margin" uk-grid>
                <div class="uk-width-3-4@m">
                    <div class="uk-margin">
                    <p class="jmy_web_div" data-page="footer" id="footer_derechos" data-editor="no"><?php $this->pnt('footer_derechos','Ministerios de Amor A.C. Todos los Derechos Reservados.',["secundario"=>"footer"]); ?></p><small><a href="https://comsis.mx/" target="_blank" >App web comsis</a></small>
                    </div>
                </div>
                <div class="uk-width-expand@m">
                    <div class="uk-margin uk-text-center">
                    <a href="#" uk-totop uk-scroll></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        <div class="test_visa">
     <?php /*   <img alt="Visa Checkout" class="v-button" role="button"
            src="https://sandbox.secure.checkout.visa.com/wallet-services-web/xo/button.png"/>
        <script type="text/javascript"
            src="https://sandbox-assets.secure.checkout.visa.com/checkout-widget/resources/js/integration/v1/sdk.js"></script>
            */?>
        <?php  $this->llamar_js(); ?> 
        </div>
    </body>
</html>