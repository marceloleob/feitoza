$(document).ready(function ()
{
	/**
	 * Carrega os sliders
	 */
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

	/**
	 * Carrega os Reviews
	 */
	if ($('.owl-reviews').length) {
		var owl = $('.owl-reviews');
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

	/**
	 * Carrega os Sponsors
	 */
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

	/**
	 * Mostra a mensagem de retorno por 4 segundos
	 */
	$('.alert').animate({
		opacity: 1.0
	}, 5000).fadeOut('slow');

	/**
	 * Fecha a mensagem caso seja clicada
	 */
	$('.alert .close').click(function (e) {
		e.preventDefault();
		$(this).parent().parent().fadeOut('slow');
		return false;
	});

	/**
	 * Verifica se existe mensagem na pagina para ser mostrada
	 */
	if ($('.alert').length) {
		var attr = $('#breadcrumb').attr('data-target');
		// animate
		$('html, body').stop().animate({
			scrollTop: $(attr).last().offset().top
		}, 1000);
	}

	/**
	 * Scroll to a Specific Div
	 */
	if ($('.scroll-to-target').length) {
		// Go to top page
		$(".scroll-to-top").on('click', function () {
			var target = $(this).attr('data-target');
			// animate
			$('html, body').animate({
				scrollTop: $(target).offset().top
			}, 1500);
		});
		// Go to message contact
		$('.scroll-to-down').on('click', function (event) {
			var attr = $(this).attr('data-target');
			// default action of the event will not be triggered
			event.preventDefault();
			// animate
			$('html, body').stop().animate({
				scrollTop: $(attr).last().offset().top
			}, 1000);
		});
	}

	/**
	 * Gallery Filters
	 */
	if ($('.gallery-list').length) {

        var containerEl = document.querySelector('.gallery-list');

        var mixer = mixitup(containerEl, {
            animation: {
                duration: 438,
                nudge: true,
                reverseOut: false,
                effects: 'fade translateZ(-100px)'
            }
        });
    }

	/**
	 * LightBox / Fancybox
	 */
	if ($('#lightgallery').length) {

	    $("#lightgallery").lightGallery({
	        thumbnail: true,
	        animateThumb: true,
	        showThumbByDefault: true
	    });
    }

	/**
	 * Metodo que controla o botao de scroll
	 */
	function headerStyle()
	{
		if ($('.main-header').length) {
			var windowpos = $(window).scrollTop();
			var siteHeader = $('.main-header');
			var siteHeaderHeight = $('.main-header').height();
			var scrollLink = $('.scroll-to-top');
			if (windowpos >= siteHeaderHeight) {
				siteHeader.addClass('fixed-header');
				scrollLink.fadeIn(300);
			} else {
				siteHeader.removeClass('fixed-header');
				scrollLink.fadeOut(300);
			}
		}
	}

	$(window).on('scroll', function () {
		headerStyle();
	});
});
