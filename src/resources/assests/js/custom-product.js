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

    $(window).on('resize', function () {
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

    $('#tabs-default').responsiveTabs({
        startCollapsed: 'accordion'
    });

    $("#img-preview").owlCarousel({
        navigation: false, 
        slideSpeed : 600,
        autoPlay : 7000,
        singleItem:true,
        pagination: true,
        navigationText: [
          "<i class='fa fa-caret-left'></i>",
          "<i class='fa fa-caret-right'></i>"
        ],
    });

    $("#product-owl").owlCarousel({
        navigation: false, 
        navigationText: ["<i class='fa fa-caret-left'></i>","<i class='fa fa-caret-right'></i>"],
        slideSpeed : 600,
        autoPlay : 8000,
        items : 3,
        itemsDesktop      : [1199,2],
        itemsDesktopSmall     : [979,2],
        itemsTablet       : [768,2],
        itemsMobile       : [479,1],
        pagination: false
    });


	//Back To Top
	$('#to-top').on( 'click', function() {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
	

})(jQuery);