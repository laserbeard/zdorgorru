/* js/modal-dialog.js */

$('.doctor-item__btn--appointment-manage').click(function(event) {
	$('.modal-dialog').removeClass('ng-hide');
});

$('.modal-dialog__close').click(function(event) {
	$('.modal-dialog').addClass('ng-hide');
});