"use strict";

// Window Load
$(window).load(function(){
<<<<<<< HEAD
   $('.teaser-grid .thumbnail,.same-height,.additional-filter .selected-filter .btn').matchHeight(); // For same height of boxes 
=======
   $('.teaser-grid .thumbnail,.same-height').matchHeight(); // For same height of boxes 
>>>>>>> 26cb523c9b638e0da5cbcabf1b2edfa9cad74738
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

<<<<<<< HEAD
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

=======
	$('.rating').rating();

>>>>>>> 26cb523c9b638e0da5cbcabf1b2edfa9cad74738
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