(function($) {

    "use strict";
////////////////////////////////////////////////////////
///////////////Floating menu///////////////////////////
////////////////////////////////////////////////////////




/* ----------------------------------------------------------
        2 - Make banner takes the Full Height of the window
    ------------------------------------------------------------ */
    var homeSec = $("#id-home");
    homeSec.height($(window).height());

    $(window).on("resize", function() {
        homeSec.height($(window).height());
    });

////////////////////////////////////////////////////////
///////////////animate-text///////////////////////////
////////////////////////////////////////////////////////

	var typed2 = new Typed('#animate-text', {
		strings: ["IT Solutions which meets your business needs", "technical resources for better operations", "services for result based management"],
		typeSpeed: 80,
		backDelay: 5000,
		startDelay: 1000,
		loop: true
	  });

////////////////////////////////////////////////////////
///////////////Smooth scroll for top navbar///////////////////////////
////////////////////////////////////////////////////////


/* smoothScroll.init({
			speed: 1000,
			easing: 'easeInOutCubic',
			offset: 30,
			updateURL: true,
			callbackBefore: function ( toggle, anchor ) {},
			callbackAfter: function ( toggle, anchor ) {}
}); */

$('#menu').onePageNav({
	currentClass: 'active',
	changeHash: false,
	scrollSpeed: 750,
	scrollThreshold: 0.5,
	filter: '',
	easing: 'swing',
	begin: function() {
		//I get fired when the animation is starting
	},
	end: function() {
		//I get fired when the animation is ending
	},
	scrollChange: function($currentListItem) {
		//I get fired when you enter a section and I pass the list item of the section
	}
});


// Mixitup gallery
jQuery(document).ready(function() {
	var mixer = mixitup("#mixitUp-item");
});


////////////////////////////////////////////////////////
///////////////owl-carousel ///////////////////////////
////////////////////////////////////////////////////////
$('.owl-carousel').owlCarousel({
    loop:true,
	autoplay:true,
    margin:10,
    nav:false,
	dots:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});
////////////////////////////////////////////////////////
///////////////back to top ///////////////////////////
////////////////////////////////////////////////////////


jQuery(document).ready(function() {
				var offset = 220;
				var duration = 500;
				jQuery(window).scroll(function() {
					if (jQuery(this).scrollTop() > offset) {
						jQuery('.back-to-top').fadeIn(duration);
					} else {
						jQuery('.back-to-top').fadeOut(duration);
					}
				});

				jQuery('.back-to-top').click(function(event) {
					event.preventDefault();
					jQuery('html, body').animate({scrollTop: 0}, duration);
					return false;
			})
});

////////////////////////////////////////////////////////
///////////////preloader ///////////////////////////
////////////////////////////////////////////////////////

$(window).load(function()
{
	$(".preloader sk-folding-cube").fadeOut(500);
	$(".preloader").fadeOut(500);
});

})(jQuery);
