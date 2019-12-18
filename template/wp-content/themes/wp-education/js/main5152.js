(function($) { 
  'use strict';

	/**
	 * Ajax Course Search
	 */
 
	$('.ep-course-search-field').keyup(function(event) {
	 
		$(this).attr('autocomplete','off');
		var $button = $(this).parent('.input-group').find('#ep-course-search-btn');
		$button.html('<i class="fa fa-spinner fa-spin fa-fw"></i>');
		var searchTerm = $(this).val();

		if (!searchTerm.trim()) {
            $('.ep-course-ajax-search-result-inner').fadeOut().html("");
            $button.html('<i class="fa fa-search" aria-hidden="true"></i>');
            return;
        }

		if(searchTerm){
			if(searchTerm.length > 2){
				$.ajax({
					url : ep_home_url+'/wp-admin/admin-ajax.php',
					type:"POST",
					data:{
						'action': 'ep_ajax_course_search',
						'term' : searchTerm
					},
					success:function(result){
						$('.ep-course-ajax-search-result-inner').fadeIn().html(result);
						$button.html('<i class="fa fa-search" aria-hidden="true"></i>');
					}
				});
			}
		}
	});

	/* Hide search result on body click */
	$(document).mouseup(function (e){
	    var container = $(".ep-course-ajax-search-result-inner");
	    if ( !container.is(e.target) && container.has(e.target).length === 0 ){
	        container.hide();
	    }
	});


	/**
	* Slick Nav 
	*/

	$('.ep-mobile-menu').slicknav({
		prependTo: '.ep-mobile-menu-wrapper',
		parentTag: 'span',
		allowParentLinks: true,
		duplicate: false,
		label: '',
		closedSymbol: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
		openedSymbol: '<i class="fa fa-angle-down" aria-hidden="true"></i>',
	});


	/**
	 * Remove menu title attribute on hover
	 */
	
	$(".navbar-educationpress a").hover(function(){
		$(this).data("title", $(this).attr("title")).removeAttr("title");
	});


	/**
	 * Course Slider
	 */
	
	$(".ep-course-slider").each(function() {
	    var t = $(this),
	        auto 			= t.data("autoplay") ? !0 : !1,
	        rtl 			= t.data("direction") ? t.data("direction") : '',
	        items 			= t.data("items") ? parseInt(t.data("items")) : '',
	        desktopsmall 	= t.data("desktopsmall") ? parseInt(t.data("desktopsmall")) : '',
	        tablet 			= t.data("tablet") ? parseInt(t.data("tablet")) : '',
	        mobile 			= t.data("mobile") ? parseInt(t.data("mobile")) : '',
	        nav 			= t.data("navigation") ? !0 : !1,
	        pag 			= t.data("pagination") ? !0 : !1,
	        single_item 	= t.data("single_item") ? !0 : !1;
	        
	        // console.log(pag);
	    $(this).owlCarousel({
	        autoPlay: auto,
	        direction: rtl,
	        items : items,
	        itemsDesktop: [1200, items],
            itemsDesktopSmall: [1024, desktopsmall],
            itemsTablet: [768, tablet],
            itemsMobile: [480, mobile],
            navigation: nav,
            navigationText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
            pagination: pag,
            singleItem : single_item,
    		transitionStyle : "fade",
	    });
	});


	/**
	 * Course instructor Slider
	 */
	
	$(".ep-instructor-content-type-slider").each(function() {
	    var t = $(this),
	        auto 			= t.data("autoplay") ? !0 : !1,
	        rtl 			= t.data("direction") ? t.data("direction") : '',
	        items 			= t.data("items") ? parseInt(t.data("items")) : '',
	        desktopsmall 	= t.data("desktopsmall") ? parseInt(t.data("desktopsmall")) : '',
	        tablet 			= t.data("tablet") ? parseInt(t.data("tablet")) : '',
	        mobile 			= t.data("mobile") ? parseInt(t.data("mobile")) : '',
	        nav 			= t.data("navigation") ? !0 : !1,
	        pag 			= t.data("pagination") ? !0 : !1;
	        
	    // console.log(pag);
	    $(this).owlCarousel({
	        autoPlay: auto,
	        direction: rtl,
	        items : items,
	        itemsDesktop: [1200, items],
            itemsDesktopSmall: [1024, desktopsmall],
            itemsTablet: [768, tablet],
            itemsMobile: [480, mobile],
            navigation: nav,
            navigationText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
            pagination: pag,
    		transitionStyle : "fade",
	    });
	});


	/**
	 * Blog post Slider
	 */
	
	$(".ep-post-slider").each(function() {
	    var t = $(this),
	        auto 			= t.data("autoplay") ? !0 : !1,
	        rtl 			= t.data("direction") ? t.data("direction") : '',
	        items 			= t.data("items") ? parseInt(t.data("items")) : '',
	        desktopsmall 	= t.data("desktopsmall") ? parseInt(t.data("desktopsmall")) : '',
	        tablet 			= t.data("tablet") ? parseInt(t.data("tablet")) : '',
	        mobile 			= t.data("mobile") ? parseInt(t.data("mobile")) : '',
	        nav 			= t.data("navigation") ? !0 : !1,
	        pag 			= t.data("pagination") ? !0 : !1;
	        
	    // console.log(pag);
	    $(this).owlCarousel({
	        autoPlay: auto,
	        direction: rtl,
	        items : items,
	        itemsDesktop: [1200, items],
            itemsDesktopSmall: [1024, desktopsmall],
            itemsTablet: [768, tablet],
            itemsMobile: [480, mobile],
            navigation: nav,
            navigationText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
            pagination: pag,
    		transitionStyle : "fade",
	    });
	});


	/**
	 * Testimonial Slider
	 */
	
	$(".ep-testimonials").each(function() {
	    var t = $(this),
	        auto 			= t.data("autoplay") ? !0 : !1,
	        rtl 			= t.data("direction") ? t.data("direction") : '',
	        nav 			= t.data("navigation") ? !0 : !1,
	        pag 			= t.data("pagination") ? !0 : !1;
	        
	    // console.log(pag);
	    $(this).owlCarousel({
	        autoPlay: auto,
	        direction: rtl,
	        items : 1,
	        itemsDesktop: [1200, 1],
            itemsDesktopSmall: [1024, 1],
            itemsTablet: [768, 1],
            itemsMobile: [480, 1],
            navigation: nav,
            navigationText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
            pagination: pag,
            singleItem : true,
    		transitionStyle : "fade",
	    });
	});

	/**
	 * Course Slider
	 */
	
	$(".ep-event-slider").each(function() {
	    var t = $(this),
	        auto 			= t.data("autoplay") ? !0 : !1,
	        rtl 			= t.data("direction") ? t.data("direction") : '',
	        items 			= t.data("items") ? parseInt(t.data("items")) : '',
	        desktopsmall 	= t.data("desktopsmall") ? parseInt(t.data("desktopsmall")) : '',
	        tablet 			= t.data("tablet") ? parseInt(t.data("tablet")) : '',
	        mobile 			= t.data("mobile") ? parseInt(t.data("mobile")) : '',
	        nav 			= t.data("navigation") ? !0 : !1,
	        pag 			= t.data("pagination") ? !0 : !1;
	        
	        // console.log(pag);
	    $(this).owlCarousel({
	        autoPlay: auto,
	        direction: rtl,
	        items : items,
	        itemsDesktop: [1200, items],
            itemsDesktopSmall: [1024, desktopsmall],
            itemsTablet: [768, tablet],
            itemsMobile: [480, mobile],
            navigation: nav,
            navigationText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
            pagination: pag,
    		transitionStyle : "fade",
	    });
	});



	/**
	 * Course List / grid view
	 */
	

	$('#ep_course_list').click(function(event){event.preventDefault();$('.ep-course-item').addClass('ep-course-item-list');});
    $('#ep_course_grid').click(function(event){event.preventDefault();$('.ep-course-item').removeClass('ep-course-item-list');$('.ep-course-item').addClass('ep-course-item-grid');});


	/**
	 * Hide Header on on scroll down
	 */

	// get header height (without border)
	var getHeaderHeight = $('.navbar-educationpress').outerHeight();

	// init variable for last scroll position
	var lastScrollPosition = 0;

	$(window).scroll(function() {
		var currentScrollPosition = $(window).scrollTop();

		if ($(window).scrollTop() > 2 * (getHeaderHeight) ) {

			$('.navbar-educationpress').removeClass('nav-down').addClass('nav-up');

			if (currentScrollPosition < lastScrollPosition) {
				$('.navbar-educationpress').removeClass('nav-up').addClass('nav-down').addClass('hide-pre-header').addClass('shrink-header');
			}
			lastScrollPosition = currentScrollPosition;
		}else{
			$('.navbar-educationpress').removeClass('hide-pre-header').removeClass('shrink-header');
		}
	});


	/**
	 * LMS statistics Counter Up
	 */
	
	if ( $.isFunction($.fn.counterUp) ) {
		$('.ep-counter-number').counterUp({
		    delay: 10,
		    time: 1000
		});
	}	
	
	/**
	 * Adding Classes
	 */

	$('table').addClass('table table-bordered');
	

	/**
	* Course review form on hover
	*/

    if (!$('.add-review').length) {
		return;
	}
	var $star = $('.add-review .fill');
	var $review = $('#ep-review-value');
	$star.find('li').on('mouseover',
		function () {
			$(this).nextAll().find('span').removeClass('fa-star').addClass('fa-star-o');
			$(this).prevAll().find('span').removeClass('fa-star-o').addClass('fa-star');
			$(this).find('span').removeClass('fa-star-o').addClass('fa-star');
			$review.val($(this).index() + 1);
		}
	);

})(jQuery);