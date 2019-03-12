<?php
$link_user =($this->sesion())?$this->url_inicio(['return'=>true]).'administrador': 'https://comsis.mx/app/entrar/?re='.$this->url_inicio(['return'=>true]).'administrador/entrar/&api=e2ad454bea7d919f0fc411a8b885580c&api_web='.JMY_API.'&sep=1';
 ?>
<!DOCTYPE html>
<html lang="en-gb" dir="ltr" vocab="http://schema.org/">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?php $this->url_templet(); ?>/images/sampledata/favicon.png">
        <link rel="apple-touch-icon-precomposed" href="/templates/yootheme/vendor/yootheme/theme/platforms/joomla/assets/images/apple-touch-icon.png">
        <meta charset="utf-8" /> 
	<base href="<?php $this->url_inicio(); ?>" />
	<meta name="author" content="Ministerios de Amor" />
	<meta name="description" content="Ministerios de Amor - BETA" />
	<meta name="generator" content="Joomla! - Open Source Content Management" />
	<title>Ministerios de Amor </title>
	<link href="<?php $this->url_inicio(); ?>component/foxcontact/name/foxcontact/root/media/task/loader.load/type/css/uid/m90" rel="stylesheet" />
	<link href="<?php $this->url_templet(); ?>templates/yootheme/css/theme.css?v=1529125978" rel="stylesheet" id="theme-style-css" />
	<link href="<?php $this->url_templet(); ?>media/widgetkit/wk-styles-f91fdc45.css" rel="stylesheet" id="wk-styles-css" />
	<link href="<?php $this->url_templet(); ?>css/estilos.css" rel="stylesheet" id="wk-styles-css" />
    <?php  $this->llamar_css(); ?> 
	<script type="application/json" class="joomla-script-options new">{"csrf.token":"c0c1663f25b138077cbc9c489f033eb2","system.paths":{"root":"","base":""},"system.keepalive":{"interval":840000,"uri":"\/index.php\/component\/ajax\/?format=json"}}</script>
	<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
	<script src="<?php $this->url_templet(); ?>media/jui/js/jquery-noconflict.js?69cb09a67a3060db044ca594f20ba60f"></script>
	<script src="<?php $this->url_templet(); ?>media/jui/js/jquery-migrate.min.js?69cb09a67a3060db044ca594f20ba60f"></script>
	<script src="<?php $this->url_templet(); ?>media/jui/js/bootstrap.min.js?69cb09a67a3060db044ca594f20ba60f"></script>
	<script src="<?php $this->url_templet(); ?>media/system/js/core.js?69cb09a67a3060db044ca594f20ba60f"></script>
	<!--[if lt IE 9]><script src="/media/system/js/polyfill.event.js?69cb09a67a3060db044ca594f20ba60f"></script><![endif]-->
	<script src="<?php $this->url_templet(); ?>media/system/js/keepalive.js?69cb09a67a3060db044ca594f20ba60f"></script>
	<script src="<?php $this->url_templet(); ?>index.php/component/foxcontact/name/foxtext/root/components/task/loader.load/type/js/uid/m90"></script>
	<script src="<?php $this->url_templet(); ?>media/com_foxcontact/js/base.min.js?v=1529125983"></script>
	<script src="<?php $this->url_templet(); ?>templates/yootheme/vendor/assets/uikit/dist/js/uikit.min.js?v=1.10.4"></script>
	<script src="<?php $this->url_templet(); ?>templates/yootheme/vendor/assets/uikit/dist/js/uikit-icons-morgan-consulting.min.js?v=1.10.4"></script>
	<script src="<?php $this->url_templet(); ?>templates/yootheme/js/theme.js?v=1.10.4"></script>
	<script src="<?php $this->url_templet(); ?>media/widgetkit/uikit2-225f1131.js"></script>
	<script src="<?php $this->url_templet(); ?>media/widgetkit/wk-scripts-0a9c0858.js"></script>
	<script>
document.addEventListener('DOMContentLoaded', function() {
    Array.prototype.slice.call(document.querySelectorAll('a span[id^="cloak"]')).forEach(function(span) {
        span.innerText = span.textContent;
    });
});
	</script>        
    
    </head>
    <body class="">
        <div id="jmy_web"></div>
        <div id="jmy_web_tools"></div>
        <div class="uk-offcanvas-content">
            <div class="tm-page">
                <div class="tm-header-mobile uk-hidden@m">
                    <nav class="uk-navbar-container" uk-navbar>
                        <div class="uk-navbar-left">
                            <a class="uk-navbar-toggle" href="#tm-mobile" uk-toggle>
                                <div uk-navbar-toggle-icon></div>
                            </a>
                        </div>
                        <div class="uk-navbar-center">
                            <a class="uk-navbar-item uk-logo" href=""<?php $this->url_inicio(); ?>">
                                <img src="<?php $this->url_templet(); ?>/images/sampledata/logo_final.png" class="uk-responsive-height" alt>       
                            </a>
                        </div>
                    </nav>
                    <div id="tm-mobile" uk-offcanvas mode="slide" overlay>
                        <div class="uk-offcanvas-bar">
                            <button class="uk-offcanvas-close" type="button" uk-close></button>
                            <div class="uk-child-width-1-1" uk-grid>
                            <div>
                            <div class="uk-panel" id="module-0">
                                <ul class="uk-nav uk-nav-default">
                                    <li class="uk-active"><a href="<?php $this->url_inicio(); ?>">Mda</a></li>
                                    <li class="uk-parent"><a href="<?php $this->url_inicio(); ?>conocenos">Conócenos</a>
                                    <ul class="uk-nav-sub">
                                        <li><a href="<?php $this->url_inicio(); ?>conocenos/proyectos">Proyectos</a></li>
                                        <li><a href="<?php $this->url_inicio(); ?>blog">Blog</a></li>
                                        <li><a href="<?php $this->url_inicio(); ?>conocenos/faq">FAQ</a></li>
                                        <li><a href="<?php $this->url_inicio(); ?>conocenos/galeria">Galería</a></li></ul></li>
                                    <li><a href="<?php $this->url_inicio(); ?>conocenos/transparencia">Transparencia</a></li>
                                    <li><a href="<?php $this->url_inicio(); ?>blog">Noticias</a></li>
                                    <li><a href="<?php $this->url_inicio(); ?>contacto">Contacto</a></li>
                                    <li><a href="<?php echo $link_user; ?>">Entrar</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
        <div class="tm-header uk-visible@m" uk-header>
            <div uk-sticky media="768" cls-active="uk-navbar-sticky" sel-target=".uk-navbar-container">
                <div class="uk-navbar-container">
                    <div class="uk-container uk-container-expand">
                        <nav class="uk-navbar" uk-navbar="{&quot;align&quot;:&quot;left&quot;}">
                            <div class="uk-navbar-left">
                                <a href=""<?php $this->url_inicio(); ?>" class="uk-navbar-item uk-logo">
                                    <img src="<?php $this->url_templet(); ?>/images/sampledata/logo_final.png" class="uk-responsive-height" alt>
                                </a>
                            </div>
                            <div class="uk-navbar-right">           
                                <ul class="uk-navbar-nav">
                                    <li class="uk-active"><a href="<?php $this->url_inicio(); ?>">Mda</a></li>
                                    <li class="uk-parent"><a href="<?php $this->url_inicio(); ?>conocenos">Conócenos</a>
                                        <div class="uk-navbar-dropdown">
                                            <div class="uk-navbar-dropdown-grid uk-child-width-1-1" uk-grid><div>
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li><a href="<?php $this->url_inicio(); ?>conocenos/proyectos">Proyectos</a></li>
                                                <li><a href="<?php $this->url_inicio(); ?>blog">Blog</a></li>
                                                <li><a href="<?php $this->url_inicio(); ?>conocenos/faq">FAQ</a></li>
                                                <li><a href="<?php $this->url_inicio(); ?>conocenos/galeria">Galería</a></li>
                                                <li><a href="<?php $this->url_inicio(); ?>conocenos/videos">Vídeos</a></li>
                                            </ul>
                                        </div>            
                                    </li>
                                    <li>
                                        <a href="<?php $this->url_inicio(); ?>conocenos/transparencia">Transparencia</a>
                                    </li>
                                    <li>
                                        <a href="<?php $this->url_inicio(); ?>blog">Noticias</a>
                                    </li>
                                    <li>
                                        <a href="<?php $this->url_inicio(); ?>contacto">Contacto</a>
                                    </li>
                                </ul>          
                               
                                <div class="uk-navbar-item" id="module-tm-1">
                                    <div class="custom " >
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
                                </div>
                            </div>
                        </nav>            
                    </div>
                </div>
            </div>
        </div>