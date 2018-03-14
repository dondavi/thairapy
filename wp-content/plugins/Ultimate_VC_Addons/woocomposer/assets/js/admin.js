<<<<<<< HEAD
(function($) {
	"use strict";
	jQuery(document).ready(function(e) {
		var display_type = jQuery("#display_type"),
			per_page = jQuery("#per_page"),
			columns = jQuery("#columns"),
			orderby = jQuery("#orderby"),
			order = jQuery("#order"),
			cat = jQuery("#cat").prev('label');
		alert(display_type.val());
		display_type.bind("change",function(){
			alert(jQuery(this).val());
		});
		cat.hasClass('none')
	});
=======
(function($) {
	"use strict";
	jQuery(document).ready(function(e) {
		var display_type = jQuery("#display_type"),
			per_page = jQuery("#per_page"),
			columns = jQuery("#columns"),
			orderby = jQuery("#orderby"),
			order = jQuery("#order"),
			cat = jQuery("#cat").prev('label');
		alert(display_type.val());
		display_type.bind("change",function(){
			alert(jQuery(this).val());
		});
		cat.hasClass('none')
	});
>>>>>>> 676c6ed3ea2781a8ef08b445789c78df38727548
})(jQuery);;