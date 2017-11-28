$('document').ready(function () {

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

	// Add Placeholder To Search

	//====================================

	$("#s").attr("placeholder", "Search");
	$(".footer-search #s").attr("placeholder", "Search");

	//====================================

	// Accordion

	//====================================

	$(function () {
		var trigger = $('.accordion-trigger');
		var content = $('.accordion-content');

		//Hide Content On Load
		content.hide();

		//Show First Instance Of Content
		content.first().show();

		trigger.first().addClass('active');

		//Show Accodrion Content When Link Is Clicked
		trigger.on('click', function (e) {
			var active = $('.active');

			content.slideUp();
			active.removeClass('active');
			$(this).addClass('active');
			$(this).next().slideDown();
			return false;
		});

	});
	
});

	//====================================

	// Sidebar Dropdown

	//====================================

//mobile nav

$(window).click(function(e) {
	if ($(e.target).hasClass('mobile-trigger')) {
		$('.mobile-menu').addClass('is--open');
	}
});