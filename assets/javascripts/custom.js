"use strict";

// Window Load
$(window).load(function(){
   $('.teaser-grid .thumbnail,.same-height').matchHeight(); // For same height of boxes 
});

// Window Ready
$(document).ready(function(){
	$(".cust-acc-title").on('click',function(){
		$(this).parent(".cust-acc-head").toggleClass("active").next(".custom-accordian-body").slideToggle(800);
	});

	$('.blue-light-out-select').selectpicker({
		style: 'btn-blue btn-outline btn-light',
		size: 4
	});

	$('.purple-light-out-select').selectpicker({
		style: 'btn-purple btn-outline btn-light',
		size: 4
	});

	$('.rating').rating();

});

// on click page scroll
$(function() {
	$('.page-scroll').bind('click', function(event) {
		var $anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top
		}, 800, 'linear');
	
		event.preventDefault();
	});
});