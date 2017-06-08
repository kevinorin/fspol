"use strict";

// Window Load
$(window).load(function(){
   $('.teaser-grid .thumbnail,.same-height,.additional-filter .selected-filter .btn').matchHeight(); // For same height of boxes 
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

	$('.grey-light-out-select').selectpicker({
		style: 'btn-grey btn-outline btn-light',
		size: 4
	});

	$('.rating').rating();

	$(".lock-icon").click(function(){
		$(".lock-modal").addClass("show");
	});

	$(".add-filt-btn").click(function(){
		$(this).closest(".filter-section").find(".filter-detail").slideToggle(500);
	});
	
	$(".close-filter").click(function(){
		$(this).closest(".filter-section").find(".filter-detail").slideUp(500);
	});

	$(".filter-list .btn").click(function(){
		$(this).addClass("active");
	});

	$(".static-filter .btn").click(function(){
		$(this).addClass("active");
	});

	$(".read-full .btn").click(function(){
		$(this).addClass("hide").parent(".read-full").prev(".campaign-text").addClass("text-open");
	});
});


$(function() {

    $(".swich-input input").bootstrapSwitch({
    	onText: '',
		offText: ''
    });
    
    $('.swich-input input:checked').closest(".field-switch").find(".label-left").addClass("active");

	$('.swich-input input').on('switchChange.bootstrapSwitch', function (event, state) {
		if($(this).is(':checked')) {
         	$(this).closest(".field-switch").find(".label-left").addClass("active");
        }
        else{
        	$(this).closest(".field-switch").find(".label-left").removeClass("active");
        }
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