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

	//Isotop Projects

	window.onresize = function(event) {
		$('#gallery').isotope('reLayout');
  	};

  	$(window).load(function() {
		// --------------------------------------------------
		// filtering gallery
		// --------------------------------------------------
		var $container = $('#gallery');
		$container.isotope({
			itemSelector: '.item',
			filter: '*'
		});

		$('#filter a').on( 'click', function() {
			var $this = $(this);
			if ( $this.hasClass('current') ) {
				return false;
				}
			var $optionSet = $this.parents();
			$optionSet.find('.current').removeClass('current');
			$this.addClass('current');
					
			var selector = $(this).attr('data-filter');
			$container.isotope({ 
				filter: selector,
			});
			return false;
		});

	});

	//Colorbox Project

	$(".zoomin").colorbox({rel:'item-image', maxWidth:'80%', maxHeight:'80%', transition: 'elastic'});


	//Back To Top
	$('#to-top').on( 'click', function() {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
	

})(jQuery);