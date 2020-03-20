$(document).ready(function ()
{



	/* ==========================================================================
	When document is loading, do
	========================================================================== */
	$(window).on('load', function () {

		if ($('.owl-slider').length) {
			var owl = $('.owl-slider');
			owl.owlCarousel({
                loop: true,
                center: true,
                items: 1,
                margin: 30,
                fluidSpeed: 450,
                autoplay: true,
				autoplayTimeout: 5000,
                autoplayHoverPause: true,
			});
		}

		if ($('.owl-testimonials').length) {
			var owl = $('.owl-testimonials');
			owl.owlCarousel({
				loop: true,
				margin: 10,
				autoplay: true,
				autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsiveClass: true,
				responsive: {
					0: {
						items: 1
					},
					600: {
						items: 1
					},
					800: {
						items: 1
					},
					1024: {
						items: 2
					},
					1200: {
						items: 2
					},
					1400: {
						items: 2
					}
				}
			});
		}

		if ($('.owl-sponsors').length) {
			var owl = $('.owl-sponsors');
			owl.owlCarousel({
                center: true,
				loop: true,
				margin: 5,
				autoplay: true,
				autoplayTimeout: 4000,
                autoplayHoverPause: true,
                responsiveClass: true,
				responsive: {
					0: {
						items: 1
					},
					600: {
						items: 2
					},
					800: {
						items: 3
					},
					1024: {
						items: 4
					},
					1200: {
						items: 4
					},
					1400: {
						items: 4
					}
				}
			});
		}
	});
});
