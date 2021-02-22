$(function(){
	$(window).scroll(function(){

		if($(this).scrollTop() < 2){
        	$(".pinning-header-container").css("background","transparent");
        	
		}else{
			$(".pinning-header-container").css("background","rgba(20,20,20");
        	
		}
	});
});




 
    $(document).ready(function(){
         
        $(".op").on('click', function(){
            $(".theme-lakira").toggle();
        });
        $(".mo-o").on('click', function(){
            $(".a-lps").css("display","block");

        });
        $(".fa-times").on('click', function(){
            $(".a-lps").css("display","none");
        });
        $(".small .fa-volume-up").on('click', function(){
            $(".small .fa-volume-up").fadeOut(0);
            $(".small .fa-volume-mute").fadeIn(0);
            $("#bg-video").prop('muted', true);
        });
        $(".small .fa-volume-mute").on('click', function(){
            $(".small .fa-volume-up").fadeIn(0);
            $(".small .fa-volume-mute").fadeOut(0);
            $("#bg-video").prop('muted', false);
        });
        $(".small .fa-redo-alt").on('click', function(){
        	$(".small .fa-redo-alt").fadeOut(0);
        	$(".small .fa-volume-up").fadeIn(0);
        	$("#bg-video").prop('muted', false);
            $("#bg-video")[0].play();
        });
$("video").prop('muted', false);
        // when video is play
        $("#bg-video")[0].onplay = function(){
        	$(".hero-image-wrapper img").fadeOut();
        	$(".meta-layer .titleWrapper").css("transform", "translate3d(0px, 85%, 0px)");
        	$(".meta-layer .titleWrapper").css("width", "70%");
        	$(".meta-layer .info-wrapper").css("transform", "translate3d(0px, 80%, 0px)");
        	$(".meta-layer .info-wrapper").css("opacity", "0");
        	$(".meta-layer .info-wrapper").css("text-shadow", "2px 2px 4px rgba(0,0,0,1);");
            $(".hero-image-wrapper img").css("opacity","0");
            $(".meta-layer .info-wrapper").css("transition-delay","0.5s");
            $(".meta-layer .titleWrapper2").css("display","none");
            
        };

        // and video is end
        $("#bg-video")[0].onended = function(){
            $(".hero-image-wrapper img").fadeIn(1);
            $(".small .fa-redo-alt").fadeIn(0);
            $(".small .fa-volume-up").fadeOut(0);
            $(".small .fa-volume-mute").fadeOut(0);
            $(".meta-layer .titleWrapper").css("transform", "translate3d(0px, 0px, 0px)");
			$(".meta-layer .info-wrapper").css("transform", "translate3d(0px, 0px, 0px)");
        	$(".meta-layer .info-wrapper").css("opacity", "1");
        	$(".meta-layer .titleWrapper").css("width", "90%");
        };
});

$(function(){
	$(window).scroll(function(){
		if($(this).scrollTop() < 200){

		}else{
			$(".hero-image-wrapper img").fadeIn(1);
        	$(".small .fa-redo-alt").fadeIn(0);
            $(".small .fa-volume-up").fadeOut(0);
            $(".small .fa-volume-mute").fadeOut(0);
            $("#bg-video")[0].pause();
            $(".meta-layer .titleWrapper").css("transform", "translate3d(0px, 0px, 0px)");
			$(".meta-layer .info-wrapper").css("transform", "translate3d(0px, 0px, 0px)");
        	$(".meta-layer .info-wrapper").css("opacity", "1");
        	$(".meta-layer .titleWrapper").css("width", "90%");
		}
	});
});


//scroll 1

jQuery(document).ready(function($){var owl=$("#genr_actualizado");owl.owlCarousel({items:8,stopOnHover:true,pagination:false,itemsDesktop:[2300,8],itemsDesktopSmall:true,itemsDesktopSmall:[1920,7],itemsTablet:[1400,6],itemsTabletSmall:true,itemsTabletSmall:[1200,5],itemsMobileSmall:true,itemsMobile:[800,4],itemsMobileSmall:true,itemsMobileSmall:[500,3.3],});$(".pagina_prev").click(function(){owl.trigger('owl.prev');})
$(".pagina_next").click(function(){owl.trigger('owl.next');})});

//scroll 2
jQuery(document).ready(function($){var owl=$("#genr_actualizado1");owl.owlCarousel({items:8,stopOnHover:true,pagination:false,itemsDesktop:[2300,8],itemsDesktopSmall:true,itemsDesktopSmall:[1920,7],itemsTablet:[1400,6],itemsTabletSmall:true,itemsTabletSmall:[1200,5],itemsMobile:[800,4],itemsMobileSmall:true,itemsMobileSmall:[500,3.3],});$(".pagina_prev1").click(function(){owl.trigger('owl.prev');})
$(".pagina_next1").click(function(){owl.trigger('owl.next');})});

//scroll 2
jQuery(document).ready(function($){var owl=$("#genr_actualizado2");owl.owlCarousel({items:8,stopOnHover:true,pagination:false,itemsDesktop:[2300,8],itemsDesktopSmall:true,itemsDesktopSmall:[1920,7],itemsTablet:[1400,6],itemsTabletSmall:true,itemsTabletSmall:[1200,5],itemsMobile:[800,4],itemsMobileSmall:true,itemsMobileSmall:[500,3.3],});$(".pagina_prev2").click(function(){owl.trigger('owl.prev');})
$(".pagina_next2").click(function(){owl.trigger('owl.next');})});



