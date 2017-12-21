//jQuery for page scrolling feature - requires jQuery Easing plugin
var $m = jQuery.noConflict();
$m(function() {
   
   //Filter page Restaurantes
   $m('.select-estado').change(function() {
        var estado = $m(this).val();
        console.log(estado);
        if( estado != "all"){
        	$m('.filtr-item').hide(100);
      		$m('.filtr-item[data-estado="' + estado + '"]').show(100);
      	}else{
      		$m('.filtr-item').show(100);
      	};
    });


});
