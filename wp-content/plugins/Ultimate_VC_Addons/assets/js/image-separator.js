<<<<<<< HEAD
// JavaScript Document
(function ( $ ) {
	$(document).ready(function(){
		$(document).trigger('ultImageSeparator');
	});
	$(window).load(function(){
		$(document).trigger('ultImageSeparator');
	});
	$(document).on('ultImageSeparator', function(event){
		$('.ult-easy-separator-wrapper').each(function(i,wr){
			var vc_row = $(this).attr('data-vc-row');
			var $row = $(this).parents('.'+vc_row+':first');
			if($row.hasClass('upb-background-text')) {
				$row = $row.parents('.'+vc_row+':first');
			}
			$(this).appendTo($row).find('.ult-no-animation').css({'opacity':'1'});
		});
	});
=======
// JavaScript Document
(function ( $ ) {
	$(document).ready(function(){
		$(document).trigger('ultImageSeparator');
	});
	$(window).load(function(){
		$(document).trigger('ultImageSeparator');
	});
	$(document).on('ultImageSeparator', function(event){
		$('.ult-easy-separator-wrapper').each(function(i,wr){
			var vc_row = $(this).attr('data-vc-row');
			var $row = $(this).parents('.'+vc_row+':first');
			if($row.hasClass('upb-background-text')) {
				$row = $row.parents('.'+vc_row+':first');
			}
			$(this).appendTo($row).find('.ult-no-animation').css({'opacity':'1'});
		});
	});
>>>>>>> 676c6ed3ea2781a8ef08b445789c78df38727548
}( jQuery ));