"use strict";

// Window Load
$(window).load(function(){
   $('.teaser-grid .thumbnail,.same-height,.additional-filter .selected-filter .btn').matchHeight(); // For same height of boxes 
});

// Window Ready
$(document).ready(function(){
	// For Mobile accordian
	$(".cust-acc-title").bind('click',function(){
		$(this).parent(".cust-acc-head").toggleClass("active").next(".custom-accordian-body").slideToggle(800);
	});

	// Blue color jquery selectbox
	$('.blue-light-out-select').selectpicker({
		style: 'btn-blue btn-outline btn-light',
		size: 4
	});

	// Purple color jquery selectbox
	$('.purple-light-out-select').selectpicker({
		style: 'btn-purple btn-outline btn-light',
		size: 4
	});

	// Grey color jquery selectbox
	$('.grey-light-out-select').selectpicker({
		style: 'btn-grey btn-outline btn-light',
		size: 4
	});

	// Bootstrap star rating
	$('.rating').rating();

	// On click lock icon modal open
	$(".lock-icon").bind('click',function(){
		$(".lock-modal").addClass("show");
	});

	// Filter slidetoggle
	$(".add-filt-btn").bind('click',function(){
		$(this).closest(".filter-section").find(".filter-detail").slideToggle(500);
	});
	
	// Close Filter
	$(".close-filter,.close-btn-filt").bind('click',function(){
		$(this).closest(".filter-section").find(".filter-detail").slideUp(500);
	});

	// Onclick filter item add class active
	$(".filter-list .btn").bind('click',function(){
		$(this).addClass("active");
	});

	// Onclick filter item add class active
	$(".static-filter .btn").bind('click',function(){
		$(this).addClass("active");
	});

	// Read more text
	$(".read-full .btn").bind('click',function(){
		$(this).addClass("hide").parent(".read-full").prev(".campaign-text").addClass("text-open");
	});

	// camp-slider Slider
	$('.camp-slider').slick({
	  infinite: true,
	  speed: 300,
	  slidesToShow: 5,
	  slidesToScroll: 1,
	  centerMode: true,
  	  centerPadding: 0,
  	  prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button"><em class="fa fa-angle-left ltpurple"></em></button>',
      nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><em class="fa fa-angle-right ltpurple"></em></button>',
	  responsive: [
	    {
	      breakpoint: 1199,
	      settings: {
	        slidesToShow: 4,
	      }
	    },
	    {
	      breakpoint: 991,
	      settings: {
	        slidesToShow: 3,
	      }
	    },
	    {
	      breakpoint: 767,
	      settings: {
	        slidesToShow: 2,
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	      }
	    }
	  ]
	});
});


$(function() {

	// Toggle Switch
    $(".swich-input input").bootstrapSwitch({
    	onText: '',
		offText: ''
    });
    
    // Toggle Switch default checked
    $('.swich-input input:checked').closest(".field-switch").find(".label-left").addClass("active");

    // Toggle Switch state change
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