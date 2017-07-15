$(document).ready(function() {

//---------------------------------------------------------
// === placeholder ===
//---------------------------------------------------------

if(!Modernizr.input.placeholder){
	$('[placeholder]').focus(function() {var input = $(this);if (input.val() == input.attr('placeholder')) {input.val('');input.removeClass('placeholder');}}).blur(function() {var input = $(this);if (input.val() == '' || input.val() == input.attr('placeholder')) {input.addClass('placeholder');input.val(input.attr('placeholder'));}}).blur();$('[placeholder]').parents('form').submit(function() {$(this).find('[placeholder]').each(function() {var input = $(this);if (input.val() == input.attr('placeholder')) {input.val('');}})});
};

//---------------------------------------------------------
// === other class ===
//---------------------------------------------------------

$('ul li:last-child').addClass('lastItem');
$('ul li:first-child').addClass('firstItem');
$('#gallery .span6:eq(-1), #gallery .span6:eq(-2)').addClass('mar-clear');


//---------------------------------------------------------
// === change elements ===
//---------------------------------------------------------

// message is sent
$('.complete').appendTo('body');
setTimeoutID = setTimeout(function() {
	$('.complete').animate({ 'opacity': 0 }, 700);
}, 10000);
$('.complete').hover(function() {
	$(this).animate({ 'opacity': 'hide' }, 350);
})

// mob menu
$('.mob-ver-menu').click(function() {
	$(this).toggleClass('active')
	$('.trig-mob ul').slideToggle();
})

// random captcha
var a = (10 - 0.5 + Math.random() * (300-10+1)).toFixed();
var b = (5 - 0.5 + Math.random() * (40-5+1)).toFixed();
var result = +a + +b;

$('#numb1').html(a);
$('#numb2').html(b);
$('#chek').attr("data-pattern", result);









// ---------------------------------------------------------
// === options ===
// ---------------------------------------------------------

// **************
// Value
// **************
$("[data-default]").focus(function() {
if ( this.value == this.getAttribute( 'data-default' ) ) {
	this.value = "";
}
}).blur(function() {
if ( this.value == "" ) {
	this.value = this.getAttribute( 'data-default' );
}
}).blur();


// **************
// Back to Top
// **************
jQuery(window).scroll(function () {
	if (jQuery(this).scrollTop() > 270) {
		jQuery('#back-top').fadeIn();
	} else {
		jQuery('#back-top').fadeOut();
	}
});
jQuery('#back-top').click(function () {
	jQuery('body,html').stop(false, false).animate({
		scrollTop: 0
	}, 800);
	return false;
});


// **************
// FadeIn body
// **************
"use strict";
(function($) {

	$.fn.visible = function(partial) {

		var $t            = $(this),
			$w            = $(window),
			viewTop       = $w.scrollTop(),
			viewBottom    = viewTop + $w.height(),
			_top          = $t.offset().top,
			_bottom       = _top + $t.height(),
			compareTop    = partial === true ? _bottom : _top,
			compareBottom = partial === true ? _top : _bottom;

		return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

	};

})(jQuery);

var win = $(window);

var setVisibleBlock = function() {
	var allMods = $(".content .container:not(.non-come), .footer .container");
	allMods.each(function(i, el) {
		var $el = $(el);
		if ($el.visible(true)) {
			$el.addClass("come-in");
		}
	});
};

setVisibleBlock();

/* --------- Options Rate-paralax ------------ */

var opacityRate = 1.2;
var speedRate = 4;
var backgroundSpeedRate = 1;
var header = $('.header');
var promoEffect = $('.container.promo-effect');
var promo = $('.promo');
var lastScrollTop = 0;

win.scroll(function() {
	if (header.length) {
		promoEffect.css('opacity', (1 - $(document).scrollTop() * opacityRate / header.offset().top));
	}
	promoEffect.css('top', (-1) * $(document).scrollTop() / speedRate);
	promo.css('background-position', "0px " + $(document).scrollTop() * backgroundSpeedRate + "px");

	var scrollTop = $(this).scrollTop();

	if (scrollTop > lastScrollTop) {
		setVisibleBlock();
	}

	lastScrollTop = scrollTop;

});

// **************
// ScrollAnchor
// **************
$('[data-scroll]').on('click', function() {
	var scrollAnchor = $(this).attr('data-scroll'),
		scrollPoint = $('[data-anchor="' + scrollAnchor + '"]').offset().top - 30;
	$('body,html').animate({
		scrollTop: scrollPoint
	}, 500);
	return false;
});












});
