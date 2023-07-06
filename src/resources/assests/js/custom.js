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

	//Responsive Tabs

	$('#widget-tabs').responsiveTabs({
        startCollapsed: 'accordion'
    });
    $('#tabs-default').responsiveTabs({
        startCollapsed: 'accordion'
    });



    //All Sliders

    $("#related-post").owlCarousel({
        navigation: true, 
        navigationText: ["<i class='fa fa-caret-left'></i>","<i class='fa fa-caret-right'></i>"],
        slideSpeed : 600,
        autoPlay : 8000,
        items : 3,
		itemsDesktop      : [1199,2],
		itemsDesktopSmall     : [979,3],
		itemsTablet       : [768,2],
		itemsMobile       : [479,1],
        pagination: false
    });


    $(document).ready(function () { // wait until the document is ready
		$('.contact-form #submit').on( 'click', function(){ // when the button is clicked the code executes
			$('.error').fadeOut('slow'); // reset the error messages (hides them)

			var error = false; // we will set this true if the form isn't valid

			var name = $('input#name').val(); // get the value of the input field
			if(name == "" || name == " ") {
				$('#err-name').fadeIn('slow'); // show the error message
				error = true; // change the error state to true
			}

			var email_compare = /^([a-z0-9_.-]+)@([da-z.-]+).([a-z.]{2,6})$/; // Syntax to compare against input
			var email = $('input#email').val(); // get the value of the input field
			if (email == "" || email == " ") { // check if the field is empty
				$('#err-email').fadeIn('slow'); // error - empty
				error = true;
			}else if (!email_compare.test(email)) { // if it's not empty check the format against our email_compare variable
				$('#err-emailvld').fadeIn('slow'); // error - not right format
				error = true;
			}

			if(error == true) {
				$('#err-form').slideDown('slow');
				return false;
			}

			var data_string = $('#ajax-form').serialize(); // Collect data from form

			$.ajax({
				type: "POST",
				url: $('#ajax-form').attr('action'),
				data: data_string,
				timeout: 6000,
				error: function(request,error) {
					if (error == "timeout") {
						$('#err-timedout').slideDown('slow');
					}
					else {
						$('#err-state').slideDown('slow');
						$("#err-state").html('An error occurred: ' + error + '');
					}
				},
				success: function() {
					$('#ajax-form').slideUp('slow');
					$('#ajaxsuccess').slideDown('slow');
				}
			});

			return false; // stops user browser being directed to the php file
		}); // end click function
			
	});

    


    //Back To Top
    $('#to-top').on( 'click', function() {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
	

})(jQuery);