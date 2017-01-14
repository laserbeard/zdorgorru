/* js/registration-step-oms-2.js */


$(function() {
      
      $('.multilevel-menu__arrow-btn').click(function(event) {
			$(this).parents('.multilevel-menu__list').eq(0).find('.multilevel-menu__item--active').removeClass('multilevel-menu__item--active');
       		$(this).parent('.multilevel-menu__item').addClass('multilevel-menu__item--active');
      });

      $('.multilevel-menu--clinic .multilevel-menu__arrow-btn').click(function(event) {
			$('.multilevel-menu__result--clinic').addClass('multilevel-menu__result--visible');
     });
      
 });


