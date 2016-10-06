// FLEXSLIDER ===============================================================================
$(window).load(function() {
			$('.flexslider').flexslider();
		});
// HOVER IMAGE MAGNIFY===============================================================================
$(document).ready(function(){
    //Set opacity on each span to 0%
    $(".magnify").css({'opacity':'0'});

	$('.picture a').hover(
		function() {
			$(this).find('.magnify').stop().fadeTo(800, 1);
		},
		function() {
			$(this).find('.magnify').stop().fadeTo(800, 0);
		}
	)
});	


// HOVER IMAGE MAGNIFY===============================================================================
$(document).ready(function(){
    //Set opacity on each span to 0%
    $(".magnify_2").css({'opacity':'0'});

	$('.pictures a').hover(
		function() {
			$(this).find('.magnify_2').stop().fadeTo(800, 1);
		},
		function() {
			$(this).find('.magnify_2').stop().fadeTo(800, 0);
		}
	)
});	

// MENU MOBILE ===============================================================================
 $(document).ready(function(){   
    
		//When btn is clicked
		$(".btn-responsive-menu").click(function() {
			$("#top-nav").slideToggle(400);
		
		});
    
    });

/* GOOGLE MAP  ======================================== */	
$('#map').gmap3({
marker:{
    latLng: [18.33123, -64.97117]
  },
  map:{
    options:{
      zoom: 15
    }
  }
});
/* TOOLTIP  ======================================== */	
	$('.tooltip_1').poshytip({
				className: 'tip-twitter',
				showTimeout: 1,
				alignTo: 'target',
				alignX: 'center',
				offsetY: 5,
				allowTipHover: false,
				fade: true,
				slide: true
			})


