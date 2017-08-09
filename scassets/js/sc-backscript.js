

jQuery(function( $ ) {
		$('a.shortcodes-list-item').click(function() {
		var shortcode_target = $(this).attr("data-target");
			$('#return-selected-shortcode').load(shortcode_target);
			$('#shortcodes-list-wrapper').removeClass('showthis').addClass('masked');
			$('#epc-shortcode-header').removeClass('masked').addClass('showthis');
			$('#return-selected-shortcode').removeClass('masked').addClass('showthis');
			$('#adding-btn').removeClass('masked').addClass('showthis');
		});
		$('#back-menu-shortcode').click(function() {
			$('#shortcodes-list-wrapper').removeClass('masked').addClass('showthis');
			$('#epc-shortcode-header').removeClass('showthis').addClass('masked');
			$('#return-selected-shortcode').removeClass('showthis').addClass('masked');
			$('#adding-btn').removeClass('showthis').addClass('masked');
		});
		$('#generate-shortcode').click(function() {
			$('#shortcodes-list-wrapper').removeClass('masked').addClass('showthis');
			$('#epc-shortcode-header').removeClass('showthis').addClass('masked');
			$('#return-selected-shortcode').removeClass('showthis').addClass('masked');
		});
		
		Foundation.global.namespace = '';
		jQuery(document).foundation();

});

	
	
 
	
   
 