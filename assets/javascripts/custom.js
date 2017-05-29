"use strict";

// Window Load
$(window).load(function(){
   $('.teaser-grid .thumbnail').matchHeight(); // For same height of boxes 
});

// Window Ready
$(document).ready(function(){
	$(".cust-acc-title").on('click',function(){
		$(this).parent(".cust-acc-head").toggleClass("active").next(".custom-accordian-body").slideToggle(800);
	});
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