/* js/registration-step-oms-3-1.js */

$(function() {
   //    $('.multilevel-menu--doctor .multilevel-menu__white-btn').click(function(event) {
			// $('.multilevel-menu--doctor').addClass('hidden');
			// $('.registration-step-calendar').removeClass('hidden');
   //    });
   

    $('.multilevel-menu--doctor .multilevel-menu__arrow-btn').click(function(event) {
			$('.multilevel-menu__result--doctor').addClass('multilevel-menu__result--visible');
     });


    $('.doctor-item__btn').click(function(event) {
    	
		$("#demo_form").removeClass('ng-hide');
     });


    $('.multilevel-menu__load-more-btn').click(function(event) {
    	
		$(".multilevel-menu__item--hidden").each(function(index, el) {
			$(this).toggleClass('multilevel-menu__item--visible');	
		});

		$(this).find('.multilevel-menu__load-more-btn-icon').toggleClass('multilevel-menu__load-more-btn-icon--active');
     });


    $(".datepicker").datepicker({
				yearRange: "1900:2016",
				nextText: "",
				prevText: "",
				firstDay: 1,
				dayNamesMin: ["", "", "", "", "", "", ""],
				monthNames: [
					'Январь', "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь",
					"Октябрь", "Ноябрь", "Декабрь"
				],
				monthNamesShort: [
					'Январь', "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь",
					"Октябрь", "Ноябрь", "Декабрь"
				],
			});



    

 });
