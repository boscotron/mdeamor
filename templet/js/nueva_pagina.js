var urlify = function(a){return a.toLowerCase().replace(/[^a-z0-9]+/g, "-").replace(/^-+|-+$/g, "-").replace(/^-+|-+$/g, '')};
jQuery(function ($) {  
    $(document).ready(function() {
       $(".agregar_url").on('click',function(){
		   let t=$(this).data('target'), u=$(this).data('url');
		   if(t!=undefined&&t!=''){
			   let v=$("#"+t).val(),d=$("#"+t).val();
			   window.location = location.origin+'/'+u+'/'+urlify(v);
		   }
	   });	   
    } );
});