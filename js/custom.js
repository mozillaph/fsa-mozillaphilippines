"use strict";

// start custom scripts
(function($) {
jQuery(document).ready(function($){
    /*==========  Swicher ==========*/
    $('body').append('<script type="text/javascript" src="customizer/script.js"></script>');

    /*==========  Progress bar  ==========*/
    function animate() {
        $(".progress-bar").each(function(){
            var progressValue = $(this).attr('data-value');
            $(this).animate({width: progressValue +'%'}, 6000);
        });
    }
    $('#contact-wrap').waypoint(function() {
        animate();
    });    

    /*==========  Disables ==========*/
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
        $('#animate_css_file, #wow_js_file').remove();
    } else {

        /*==========  WOW Animations  ==========*/
        var wow = new WOW(
          {
            animateClass: 'animated',
            offset:       100
          }
        );
         wow.init(); 

    }

    /*==========  Logo Retina ==========*/
    if( window.devicePixelRatio > 1 ) {
        var logoWidth = $('#logo img').width();
        var logoHeight = $('#logo img').height();
        $('#logo img').attr("src", "images/logo@2x.png");
        $('#logo img').css({ 'width': logoWidth , 'height': logoHeight });
    }    

    /*==========  weDo Item Hover  ==========*/
        $('.weDo-item').each(function(){
        var memberImage = $(this).find('.member-face').attr('style');
        var current = $(this).find('.change-color');
        $(this).find('.hex-in2.outer-hex').first().hover(function(){
            $(this).find('.member-face').css('background','#000');
            $(current).css('background-color','#f3b202');
            $(this).find('.socials').show();
        },function(){
            $(this).find('.socials').hide();
            $(this).find('.member-face').attr('style', memberImage);
            $(current).css('background-color','#fff');
        });
        });

    /*==========  Gallery Item Hover  ==========*/

    $('.gallery-item').hover(function(){
        $(this).find('.gallery-info').stop(true,true).animate({ "top": "0" } );
    },function(){
        $(this).find('.gallery-info').stop(true,true).animate({ "top": "-999" } );
    });

    /*==========  FlexSlider  ==========*/
    $('.flexslider').flexslider({
        animation: "fade",
        animationLoop: false,
        directionNav: false,
        slideshow: false
    });

    /*==========  Pie Chart  ==========*/
    $('.days').waypoint(function() { 
        $('.chart').easyPieChart({
            easing: 'easeOutBounce',
            barColor: '#f3b202',
            trackColor: '#595959',
            lineWidth: '18',
            lineCap: 'butt',
            size: '160',
            scaleColor: false,
            onStep: function(from, to, percent) {
                $(this.el).find('.percent').text(Math.round(percent));
            }
        });
    }); 

    /*==========  Smooth Scroll  ==========*/
    $('a[href*=#]:not([href=#])').click(function() {
        $("li.active").removeClass("active").find('.nav-active-mark').remove();
        $(this).parent().addClass('active').end().append('<span class="nav-active-mark"></span>');
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 53
        }, 1000);
        return false;
      }
    }
    });
  
    /*==========  Graph Bars Animate  ==========*/
    $('.days').waypoint(function() {
        $('.graph ul li.bar').each(function() {
            var curBarHeight = $(this).data('bar-height');
            $(this).animate({ height: curBarHeight }, 2000, "easeInOutBack");
        });
    });

    /*==========  Intro Note Box Tooltip  ==========*/
    /*$('.note-1').hover(function(){
        $(this).find('.note-tooltip').fadeIn();
    },function(){
        $(this).find('.note-tooltip').fadeOut();
    });
    */
    
    /*==========  PrettyPhoto  ==========*/
    $("a[data-rel^='prettyPhoto']").prettyPhoto({theme:'dark_rounded'});

    /*==========  Flickr  ==========*/
    var flickrImageSrc = [ ];
    var flickrLink = [ ];
    $('.flickr_badge_image').each(function(i){
        flickrImageSrc[i] = $(this).find('img').attr('src'); 
        flickrLink[i] = $(this).find('a').attr('href');        
    });
    $('.flickr-item').each(function(i){
        $(this).find('.hex-area').css('background-image', 'url(' + flickrImageSrc[i] + ')');
        $(this).find('.flickr-link').attr('href', flickrLink[i] );
    });    

    /*==========  Window Resize  ==========*/
    var windowWidth = $(window).width();
    var numberOfHexagon = windowWidth / 106;
    var offsetBackground = ((numberOfHexagon - 14) * 106 ) /2;
    $('#hexagon-overlay').css('background-position', offsetBackground + 'px' + ' ' + 'top');

    $(window).resize(function() {
      var currentWindowWidth = $(window).width();
      if(currentWindowWidth <= 940) return;
      $('#hexagon-overlay').css('background-position', - ( ( (windowWidth - currentWindowWidth)/2 ) - offsetBackground ) + 'px' + ' ' + 'top');
    });

    /*==========  Mobile Menu  ==========*/
    $('.mobile-nav-toggle').on('click',function(){
        if($(this).attr('class') == 'mobile-nav-toggle deactive') {
            $('#mobile-navigation').fadeIn();
            $(this).removeClass('deactive');
        } else {
            $('#mobile-navigation').fadeOut();
            $(this).addClass('deactive');
        }
    });

    $("#mobile-navigation li a").on("click", function(){
        $('#mobile-navigation').fadeOut();
        $(".mobile-nav-toggle").addClass('deactive');

    });

    $(window).resize(function(){
                var w = $(window).width();
                if(w > 767) {
                    $('#mobile-navigation').fadeOut();
                    $(".mobile-nav-toggle").addClass('deactive');
                }
            });
    
    /*==========  Contact Form Validation  ==========*/
    
    function isValidEmailAddress(emailAddress) {
        var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
        return pattern.test(emailAddress);
    }    

    $('.contact-form form').submit(function() {
    
        var hasError = false;
      
        var comment = $('#message-txt').val();
        if ($.trim(comment) == '') {
            $('#message-txt').addClass('error');
            $('#message-txt').focus();
            hasError = true;
        }
        else {
            $('#message-txt').removeClass('error');
        }

        var subject = $('#subject-txt').val();
        if ($.trim(subject) == '') {
            $('#subject-txt').addClass('error');
            $('#subject-txt').focus();
            hasError = true;
        }
        else {
            $('#subject-txt').removeClass('error');
        }        
        
        var emailVal = $('#email-txt').val();
        if ($.trim(emailVal) == '' || !isValidEmailAddress(emailVal)) {
            $('#email-txt').addClass('error');
            $('#email-txt').focus();
            hasError = true;
        }
        else {
            $('#email-txt').removeClass('error');
        }
        
        
       var name = $('#name-txt').val();
        if ($.trim(name) == '') {
            $('#name-txt').addClass('error');
            $('#name-txt').focus();
            hasError = true;
            
        }
        else {
            $('#name-txt').removeClass('error');
        }
        
        if (!hasError) {
            $('#submit').fadeOut('normal', function(){
                $('.loading').css({
                    display: "block"
                });
                
            });
            
            $.post($('.contact-form form').attr('action'), $('.contact-form form').serialize(), function(data){
                $('.log').html(data);
                $('.loading').remove();
                $('.contact-form form').slideUp('slow');
            });
            
        }
        
        return false;
        
    });    
 


}); // end jquery init
})(jQuery);
