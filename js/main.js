// slider
$(function () {
	var burgerCarousel = $('.burgers-slider').owlCarousel({
		items : 1,
		nav : true,
		navContainer: $('.burger-slider__controls'),
		navText: ['', ''],
		loop: true
	});

	$('.burger-slider__btn_next').on('click', function(e) {
		e.preventDefault();
		burgerCarousel.trigger('next.owl.carousel');
	});

	$('.burger-slider__btn_prev').on('click', function(e) {
		e.preventDefault();
		burgerCarousel.trigger('prev.owl.carousel');
	});
});

//accordion
$(function () {
	$('.team-acco__trigger').on('click', function(e){
	    e.preventDefault();
	    
	    var $this = $(this),
		    item = $this.closest('.team-acco__item'),
		    container = $this.closest('.team-acco'),
		    items = container.find('.team-acco__item'),
		    content = item.find('.team-acco__content'),
		    otherContent = container.find('.team-acco__content');
		
		if (!item.hasClass('active')) {

			items.removeClass('active');
			item.addClass('active');
			otherContent.slideUp();
			content.slideDown();

		} else {

			item.removeClass('active');
			content.slideUp();

		}
	});
});

//horizontal accordion
$(function(){
	$('.menu-acco__trigger').on('click', function(e){
	    e.preventDefault();

		var $this = $(this),
			container = $this.closest('.menu-acco'),
			item = $this.closest('.menu-acco__item'),
			items = container.find('.menu-acco__item'),
			activeItem = items.filter('.active'),
			content = item.find('.menu-acco__content'),
			activeContent = activeItem.find('.menu-acco__content');

		if (!item.hasClass('active')) {

			items.removeClass('active');
			item.addClass('active');

			activeContent.animate({
				'width' : '0px'
			});

			content.animate({
				'width' : '550px'
			});

		} else {

			item.removeClass('active');
			content.animate({
				'width' : '0px'
			});

		}
	});

	// клик вне аккордеона
	$(document).on('click', function (e) {
		var $this = $(e.target);

		if (!$this.closest('.menu-acco').length) {
			$('.menu-acco__content').animate({
				'width' : '0px'
			});

			$('.menu-acco__item').removeClass('active');
		}
	});
});

//input mask
$(function(){
	$('.phone-mask').inputmask('+7 (999) 999 99 99');
});

//one page scroll
$(function () {
	var
		sections = $('.section'),
		display = $('.maincontent'),
		screen = 0,
		inscroll = false;

	sections.filter(':first-child').addClass('active');

	var scrollToSection = function (sectionEq) {
		var position = 0;

		if (!inscroll) {
			inscroll = true;
			screen = sectionEq;

			position = (sections.eq(sectionEq).index() * -100) + '%';

			sections.eq(sectionEq).addClass('active')
				.siblings().removeClass('active');

			display.css({
				'transform' :  'translate3d(0,' + position + ', 0)'
			});

			setTimeout(function () {
				inscroll = false;

				$('.fixed-menu__item').eq(sectionEq).addClass('active')
					.siblings().removeClass('active');
			}, 1300)
		}
	}

	document.querySelector('.wrapper')
		.addEventListener('wheel', function (e) {
			var activeSection = sections.filter('.active');

			if (!inscroll) {

				if (e.deltaY > 0) { //скроллим вниз
					if (activeSection.next().length) {
						screen = activeSection.next().index();
					}
				}

				if (e.deltaY < 0) { //спроллим вверх
					if (activeSection.prev().length) {
						screen = activeSection.prev().index()
					}
				}

				scrollToSection(screen);
			}
		});

	$('.down-arrow').on('click', function(e){
	    e.preventDefault();

		scrollToSection(1);
	});

	$('.nav__link, .fixed-menu__link, .burgers-slider__buy, .order-link')
		.on('click', function(e){
		    e.preventDefault();

		    scrollToSection(parseInt($(this).attr('href')));
		});
});

//yandex map
$(function () {
	ymaps.ready(init);
	var myMap;

	function init(){
		myMap = new ymaps.Map("map", {
			center: [55.754375, 37.622128],
			zoom: 11,
			controls : [],
		});

		var coords = [
				[55.763280, 37.616635],
				[55.749631, 37.641354],
				[55.756407, 37.590199],
			],
			myCollection = new ymaps.GeoObjectCollection({}, {
				draggable: false,
				iconLayout: 'default#image',
				iconImageHref: '../img/icons/map-marker.svg',
				iconImageSize: [46, 57],
				iconImageOffset: [-26, -52]
			});

		for (var i = 0; i < coords.length; i++) {
			myCollection.add(new ymaps.Placemark(coords[i]));
		}

		myMap.geoObjects.add(myCollection);

		myMap.behaviors.disable('scrollZoom');
	}
});

//fancybox
$(function () {
	$('.review__view').fancybox({
		type: 'inline',
		maxWidth : 460,
		fitToView : false,
		padding : 0
	});
	
	$('.full-review__close').on('click', function(e){
	    e.preventDefault();
		$.fancybox.close();
	});
});

//form submit
$(function(){
    $('#order-form').on('submit', function(e){
        e.preventDefault();

	    var
		    form = $(this),
		    formData = form.serialize();

		$.post('../mail.php', formData, function (data) {
			var popup = data.status ? '#success' : '#error';

			$.fancybox.open([
				{ href: popup }
			], {
				type: 'inline',
				maxWidth : 250,
				fitToView : false,
				padding : 0,
				afterClose : function () {
					form.trigger('reset');
				}
			});
		});
    });
	
	$('.status-popup__close').on('click', function(e){
	    e.preventDefault();
		$.fancybox.close();
	});
}());