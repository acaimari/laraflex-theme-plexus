(function($) {
	"use strict";

	//Preloader
    $(window).load(function() {
        $('.images-preloader').fadeOut();
    });

	//Header Scroll
	
	function init() {
        window.addEventListener('scroll', function(e){
			
			var mq = window.matchMedia( "(min-width: 992px)" );
			
			if (mq.matches) {
				var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 10,
                header = document.querySelector(".main-bar");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
            } else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                }

            }
			}

            
        });
    }
    window.onload = init();

    //Position Navigation

    $(window).bind('resize', function () {
        var hbar = $('.site-header').outerHeight(),
            sbar = $('header .sub-bar').height();
        $('.main-bar .nav').css('top', hbar);
        $("header .main-bar").css('top', sbar);
    }).trigger('resize');
    
    // Menu Mobile
	
	$('.btn-toggle').on('click',function(){

		var parent = $(this).parents('header');
		if(parent.find('nav').hasClass('menu-mobile')){
            parent.find('nav').removeClass('menu-mobile');
        }else{
            parent.find('nav').addClass('menu-mobile');
        }

        if(parent.find('.top-info').hasClass('menu-mobile')){
            parent.find('.top-info').removeClass('menu-mobile');
        }else{
            parent.find('.top-info').addClass('menu-mobile');
        }

	});
	
	$( '.arrow-parent' ).on( 'click', function() {

		$(this).parent().find(' > ul').toggle();
		
	} );

    jQuery(document).ready(function($){
        $('.counter-skills').counterUp({
            delay: 100,
            time: 2000
        });
    });

    $("#testimonials").owlCarousel({
        navigation: false, 
        slideSpeed : 600,
        autoPlay : 6000,
        singleItem:true,
        pagination: true,
        navigationText: [
          "<i class='fa fa-caret-left'></i>",
          "<i class='fa fa-caret-right'></i>"
        ],
    });


    //Colorbox Project

    $(".zoomin").colorbox({rel:'item-image', maxWidth:'80%', maxHeight:'80%', transition: 'elastic'});

	//Back To Top
	$('#to-top').on( 'click', function() {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });

    // Owl Client
        $("#clients").owlCarousel({
        navigation: false, 
        navigationText: ["<i class='fa fa-caret-left'></i>","<i class='fa fa-caret-right'></i>"],
        slideSpeed : 600,
        autoPlay : 8000,
        items : 5,
        itemsDesktop      : [1199,5],
        itemsDesktopSmall     : [979,4],
        itemsTablet       : [768,3],
        itemsMobile       : [479,2],
        pagination: false
    });

    // Calling LayerSlider on the target element
        $("#layerslider").layerSlider({
          responsive: true,
          layersContainer : 1170,
          skinsPath:'layerslider/skins/',
        });
        
     /* ==========================================================================
       Twitter
       ========================================================================== */

    var config2 = {
      "id": '579924271629094913',
      "domId": 'twitter-owl',
      "maxTweets": 5,
      "enableLinks": true,
      "showUser": false,
      "showTime": true,
      "showImages": false,
      "lang": 'en'
    };
    twitterFetcher.fetch(config2);
    /* 
       OWL & Tweet
       ========================================================================== */
    var myVar2 = setInterval(myTimer2, 3000);

    function myTimer2() {
            $(function() {
                $("#twitter-owl ul").owlCarousel({
           
                autoPlay: true, //Set AutoPlay to 3 seconds
                items : 1,
                itemsDesktop      : [1199,1],
                itemsDesktopSmall     : [979,1],
                itemsTablet       : [768,1],
                itemsMobile       : [479,1],
                pagination:false,
                navigation:true,
                navigationText: [
                  "<i class='fa fa-angle-left'></i>",
                  "<i class='fa fa-angle-right'></i>"
                ],
                transitionStyle : "fade"
                });
            });
    }      

	

})(jQuery);