/*
        To have multiple slideshows on the same page
        they just need to have separate IDs
      */
	  $('#slides2').slidesjs({
        width: 940,
        height: 640,
        navigation: false
      });
	  //Menu moviles
	   $('#slides3').slidesjs({
        width: 300,
        height: 370,
        navigation: false
      });
	  //Portada
      $('#slides').slidesjs({
        width: 940,
        height: 410,
        navigation: false,
        start: 1,
        play: {
          auto: true
        }
      });
	  $(document).ready(main);
 
var contador = 1;
 
function main () {
	//agregar clase para aparecer y desaparecer menu
	$('#mostrar-nav').on('click',function(){
		$('nav').toggleClass('mostrar');
	});

};//cierra funcion script

$(document).ready(function(){
        var cambio = false;
        $('nav li a').each(function(index) {
            if(this.href.trim() == window.location){
                $(this).parent().addClass("active");
                cambio = true;
            }
        });
        if(!cambio){
            $('nav ul li:first').addClass("active");
        }
 });
 




$(document).ready(function(){
	var altura = $('#mostrar-nav').offset().top;
	
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('nav').removeClass('mostrar');
		} else {
			
			$('nav').toggleClass('mostrar');
		}
	});
 
});