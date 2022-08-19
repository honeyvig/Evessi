jQuery(document).ready( function() {
	"use strict";
	var wntr_boxes = new Object();
	// new!
	var wntr_nonces = new Object();
	function dt_find_boxes() {
		jQuery('.metabox-holder .postbox').each(function(){
			var this_id = jQuery(this).attr('id');
			if(this_id.match(/wt/i)){
				wntr_boxes[this_id] = '#'+this_id;
				//new!
				if( typeof (nonce_field = jQuery(this).find('input[type="hidden"][name*="nonce_"]').attr('id')) != 'undefined' ) {
					wntr_nonces[this_id] = '#'+nonce_field;
				}
			}
		});
	}
	// new!
	dt_find_boxes();
	function wntr_toggle_boxes() {
		var metaBoxes = arguments,
			$wpMetaBoxesSwitcher = jQuery('#adv-settings');
		if( typeof arguments[0] == 'object' ) {
			metaBoxes = arguments[0];
		}
		for(var key in wntr_boxes) {
			$wpMetaBoxesSwitcher.find(wntr_boxes[key] + '-hide').prop('checked', '');
			jQuery(wntr_boxes[key]).hide();
			//new!
			if( 'dt_blocked_nonce' != jQuery(wntr_nonces[key]).attr('class') ) {
				jQuery(wntr_nonces[key]).attr('name', 'blocked_'+jQuery(wntr_nonces[key]).attr('name'));
				jQuery(wntr_nonces[key]).attr('class', 'dt_blocked_nonce');
			}
		}
		for(var i=0;i<metaBoxes.length;i++) {
			$wpMetaBoxesSwitcher.find(metaBoxes[i] + '-hide').prop('checked', true);
			jQuery(metaBoxes[i]).show();
			// new!
			var nonce_key = metaBoxes[i].slice(1);
			if( 'dt_blocked_nonce' == jQuery(wntr_nonces[nonce_key]).attr('class') ) {
				var new_name = jQuery(wntr_nonces[nonce_key]).attr('name').replace("blocked_", "");
				jQuery(wntr_nonces[nonce_key]).attr('name', new_name);
				jQuery(wntr_nonces[nonce_key]).attr('class', '');
			}
		}
	}
	jQuery("#page_template").change(function() {
		var templateName = jQuery(this).val(),activeMetaBoxes = new Array();	
		for( var metabox in wtMetaboxes ) {
			// choose to show or not to show
			if ( !wtMetaboxes[metabox].length || wtMetaboxes[metabox].indexOf(templateName) > -1 ) { activeMetaBoxes.push('#'+metabox); }
		}
		if ( activeMetaBoxes.length ) {
			wntr_toggle_boxes(activeMetaBoxes);
		} else {
			wntr_toggle_boxes();
		}
		jQuery(this).trigger('wtBoxesToggled');
	});
	jQuery("#page_template").trigger('change');
});