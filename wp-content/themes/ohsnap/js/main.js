$(document).ready(function () {

	//====================================

	// Nav Animation

	//====================================

	$('.null-item a').css('cssText', 'color: #4a7eb8 !important; font-wight: 700 !important;');

	$(window).scroll(function () {
		var scroll = $(window).scrollTop();

		if (scroll >= 300) {
			$('.nav').addClass('is-scrolled');
		} else {
			$('.nav').removeClass('is-scrolled');
		}

	});

	//====================================

	// Slider

	//====================================

	$(document).on('ready', function () {
		$(".hero-slider").slick({
			dots: true,
			arrows: false,
			autoplay: true,
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
		});

	});

	//====================================

	// Nav Offset

	//====================================

	$("#s").attr("placeholder", "Search");

});
