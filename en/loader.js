$(document).ready(function() {


// *************
// Selectbox
// *************
$('.filter select').selectbox();


// *************
// Validate
// *************
$('form').validate({
		onKeyup : true,
		eachValidField : function() {
			$(this).closest('div').removeClass('error').addClass('success');
		},
		eachInvalidField : function() {
			$(this).closest('div').removeClass('success').addClass('error');
		}
});


// *************
// Colorbox
// *************
$(".group1").colorbox({
	rel:'group1',
	className: 'hideElement',
	iframe:true,
	innerWidth:640,
	innerHeight:390
});

$(".group2").colorbox({
	rel:'group2', //current: "Ð¸Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð¸Ðµ {current} Ð¸Ð· {total}",
	title: false
});

$(".group3").colorbox({
	rel:'group3', //current: "Ð¸Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð¸Ðµ {current} Ð¸Ð· {total}",
	title: false,
	className: 'hideElement'
});

// *************
// BlackAndWhite
// *************
$('.bwWrapper').BlackAndWhite({
	hoverEffect : true, // default true
	// set the path to BnWWorker.js for a superfast implementation
	webworkerPath : false,
	// for the images with a fluid width and height
	responsive:true,
	// this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
	intensity:1,
	speed: { //this property could also be just speed: value for both fadeIn and fadeOut
			fadeIn: 200, // 200ms for fadeIn animations
			fadeOut: 800 // 800ms for fadeOut animations
	}
});


// *************
// BxSlider
// *************
$('.form-bxslider').bxSlider({
	mode: 'fade',
	auto: true,
	pause: 10000,
	pagerCustom: '#dafault_pager',
	onSliderLoad: function() {
		$('.form-bxslider li').each(function() {
			var setTimeoutID;
			if ( $(this).is(':visible') ) {
				setTimeoutID = setTimeout(function() {
					$('.fin_1').animate({ 'opacity': 1 }, 700);
				}, 400);

				setTimeoutID = setTimeout(function() {
					$('.fin_2').animate({ 'opacity': 1 }, 700);
				}, 800);
				setTimeoutID = setTimeout(function() {
					$('.fin_3').animate({ 'opacity': 1 }, 700);
				}, 1400);
			}
		});

	}
});

$('.app-bx').bxSlider({
	mode: 'fade',
	auto: true,
	pause: 4000,
	controls: false,
	autoHover: true,
	pagerCustom: '#dafault_pager',
	onSliderLoad: function() {
		$('.app-bx li').each(function() {
			var setTimeoutID;
			if ( $(this).is(':visible') ) {
				setTimeoutID = setTimeout(function() {
					$('.fin_1').animate({ 'opacity': 1 }, 700);
				}, 400);

				setTimeoutID = setTimeout(function() {
					$('.fin_2').animate({ 'opacity': 1 }, 700);
				}, 800);
				setTimeoutID = setTimeout(function() {
					$('.fin_3').animate({ 'opacity': 1 }, 700);
				}, 1400);
			}
		});

	}
});

$('.video-bx').bxSlider({ //disabled
	mode: 'fade',
	controls: false,
	pager: false,
	onSliderLoad: function() {
		$('.video-bx li').each(function() {
			var setTimeoutID;
			if ( $(this).is(':visible') ) {
				setTimeoutID = setTimeout(function() {
					$('.fin_1').animate({ 'opacity': 1 }, 700);
				}, 400);

				setTimeoutID = setTimeout(function() {
					$('.fin_2').animate({ 'opacity': 1 }, 700);
				}, 800);
				setTimeoutID = setTimeout(function() {
					$('.fin_3').animate({ 'opacity': 1 }, 700);
				}, 1400);
			}
		});

	}
});


$('.aboutUs-slider').bxSlider({
	mode: 'horizontal',
	pause: 5000,
	autoHover: true,
	pager: false,
	auto: true
});









});