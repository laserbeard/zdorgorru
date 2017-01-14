/* js/registration-step-oms.js */




$(function() {
      
      $('.registration-step-change-value-btn').click(function(event) {
      	$('.registration-step--expand').removeClass('registration-step--expand');
        $(this).parents('.registration-step').addClass('registration-step--expand');
      });
      
 });