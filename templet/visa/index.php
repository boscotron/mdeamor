<?php
/* Hola esto es un ejemplo para desarollo de terceros 

Algunas funciones disponibles:

//Cargar un archivo CSS en head despues de las cargas de hojas de estilos principales
	$this->cargar_js(["url"=>"https://..."]);

//Cargar un archivo Javascript en footer despues de las cargas de librerías principales 
	$this->cargar_js(["url"=>"https://..."]); 

//Carga de ruta templet
	echo $ruta_templet;
	
//Detectar si el usuario tiene session
	if( $this->sesion() )
		echo 'usuario tiene sesión';
	else
		echo 'usuario fuera de la sesion';

*/
$ruta_templet = $this->url_templet(['return'=>1]).'visa/';

//EDITAR A PARTIR DE AQUÍ

$this->cargar_css(["url"=>$ruta_templet."style.css"]);  // carga de hoja de estilos 

$this->cargar_js(["url"=>$ruta_templet."script.js"]);  //carga de javacript

?>
<style>
	img.v-button:focus {
    outline: none;
	}
	#pagos-container{
		margin:30px auto;
	}
</style>
<div class="container" id="pagos-container">
<div class="uk-grid-divider uk-grid-margin uk-grid" uk-grid="">
            <div class="uk-width-expand@m uk-first-column">
               <div class="uk-margin uk-text-center uk-panel uk-scrollspy-inview uk-animation-fade" uk-scrollspy-class="" style="">
                  <h3 class="el-title uk-margin uk-h3 uk-heading-line">
                     <span>Donar con Visa Checkout</span>
                  </h3>
                  <img src="https://ministeriosdeamor.org.mx/templet//images/home/visa.jpg" class="el-image" alt="">
                  <div class="el-content uk-margin">
                     <p class="p1" style="text-align: center;">Se aceptan todas las tarjetas de crédito.</p>
                  </div>
                  <p>
                  	<label>Selecciona el monto de la donación</label>
                  	<select class="form-control" id="monto-visa">
                  		<option value="200">$200 MXN</option>
                  		<option value="300">$300 MXN</option>
                  		<option value="400">$400 MXN</option>
                  		<option value="5000">$500 MXN</option>
                  		<option value="1000">$1,000 MXN</option>
                  		<option value="10000">$10,000 MXN</option>
                  	</select><br/><br/>
                  	    <img alt="Visa Checkout" class="v-button" role="button" src="https://sandbox.secure.checkout.visa.com/wallet-services-web/xo/button.png"/>
        <script type="text/javascript" src="https://sandbox-assets.secure.checkout.visa.com/checkout-widget/resources/js/integration/v1/sdk.js"></script>
                  </p>
               </div>
            </div>
            <div class="uk-width-expand@m">
               <div class="uk-margin uk-text-center uk-panel uk-scrollspy-inview uk-animation-fade" uk-scrollspy-class="" style="">
                  <h3 class="el-title uk-margin uk-h3 uk-heading-line">
                     <span>Donar con Paypal</span>
                  </h3>
                  <img src="https://ministeriosdeamor.org.mx/templet//images/home/paypal.jpg" class="el-image" alt="">
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