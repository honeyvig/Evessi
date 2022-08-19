jQuery(document).ready(function() {
	"use strict";
	
	jQuery('#wntr-panel-switch').addClass('panel-open');
	//=================== Show or Hide Control Panel ========================//
	jQuery('#wntr-panel-switch').on(function(){
		if ( jQuery(this).hasClass('panel-open') ) {
			jQuery('#wntr-control-panel').animate( { right: 0 } );
			jQuery('#wntr-control-panel').css({'box-shadow': '0 0 10px #adadad'});
			jQuery(this).removeClass('panel-open');
			jQuery(this).addClass('panel-close');
			jQuery.cookie('wntr_panel_open', 0);
		}else if ( jQuery(this).hasClass('panel-close') ) {
			jQuery('#wntr-control-panel').animate( { right: -250 } );
			jQuery('#wntr-control-panel').css({'box-shadow': 'none'});
			jQuery(this).addClass('panel-open');
			jQuery(this).removeClass('panel-close');
			jQuery.cookie('wntr_panel_open', 1);
		}
	});
	//=================== BACKGROUND COLOR SETTINGS ========================//
	var wntr_bkgcolor;
	if(jQuery.cookie('wntr_bkgcolor')) {
		wntr_bkgcolor = jQuery.cookie('wntr_bkgcolor');
	} else {
		wntr_bkgcolor = bkg_color_default;
	}
	jQuery('#wntr-panel-bkgcolor').ColorPicker({
		color: wntr_bkgcolor,
		onShow: function (colpkr) {
			jQuery(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			jQuery(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb) {
			jQuery('body').css('backgroundColor', '#' + hex);
			jQuery('#wntr-panel-bkgcolor').css('backgroundColor', '#' + hex);
			jQuery('#panel_form').on(function() {
				jQuery.cookie('wntr_bkgcolor', hex);
		    });
		}
	});
	//=================== TEXTURE SETTINGS ========================//
	jQuery('#wntr-control-panel a.wntr-panel-item').on(function(){
		var wntr_texture_value = jQuery(this).attr('title');
		jQuery('body').css('backgroundImage', 'url(' + wntr_theme_path + '/images/webi/colorpicker/pattern/' + wntr_texture_value + '.png)' );
		jQuery('body').css('background-repeat','repeat');		
		jQuery('#panel_form').on(function() {
			jQuery.cookie('wntr_texture', wntr_texture_value);
		});
	});
	//=================== BODY SETTINGS ========================//
	var wntr_bodyfont_tag = 'body';
	jQuery('#wntr-panel-body-font').change(function(){
		var wntr_bodyfont_encoded = jQuery(this).val(),
			wntr_bodyfont_value = jQuery(this).val().replace(' ','+');
		jQuery('head').append('<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family='+ wntr_bodyfont_value + '" />');
		jQuery('head').append('<style type="text/css">' + wntr_bodyfont_tag + ' { font-family: "' + wntr_bodyfont_encoded + '"; }</style>');
		jQuery('#panel_form').on(function() {
			jQuery.cookie('wntr_bodyfont', wntr_bodyfont_encoded);
	    });
	});
	var wntr_bodyfont_color;
	if(jQuery.cookie('wntr_bodyfont_color')) {
		wntr_bodyfont_color = jQuery.cookie('wntr_bodyfont_color');
	} else {
		wntr_bodyfont_color = bodyfont_color_default;
	}
	jQuery('#wntr-panel-body-font-color').ColorPicker({
		color: wntr_bodyfont_color,
		onShow: function (colpkr) {
			jQuery(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			jQuery(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb) {
			jQuery(wntr_bodyfont_tag).css('color', '#' + hex);
			jQuery('#wntr-panel-body-font-color').css('backgroundColor', '#' + hex);
			jQuery('#panel_form').on(function() {
				jQuery.cookie('wntr_bodyfont_color', hex);
	    	});
		}
	});
	//=================== HEADER SETTINGS ========================//
	var wntr_headerfont_tag = 'h1,h2,h3,h4,h5,h6';
	jQuery('#wntr-panel-header-font').change(function(){
		var wntr_headerfont_encoded = jQuery(this).val(),
			wntr_headerfont_value = jQuery(this).val().replace(' ','+');
			jQuery('head').append('<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=' + wntr_headerfont_value + '" />');
			jQuery('head').append('<style type="text/css">' + wntr_headerfont_tag + ' { font-family: "' + wntr_headerfont_encoded + '"; }</style>');
			jQuery('#panel_form').on(function() {
				jQuery.cookie('wntr_headerfont', wntr_headerfont_encoded);
	    	});
	});
	var wntr_headerfont_color;
	if(jQuery.cookie('wntr_headerfont_color')) {
		wntr_headerfont_color = jQuery.cookie('wntr_headerfont_color');
	} else {
		wntr_headerfont_color = headerfont_color_default;
	}
	jQuery('#wntr-panel-header-font-color').ColorPicker({
		color: wntr_headerfont_color,
		onShow: function (colpkr) {
			jQuery(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			jQuery(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb) {
			jQuery(wntr_headerfont_tag).css('color', '#' + hex);
			jQuery('#wntr-panel-header-font-color').css('backgroundColor', '#' + hex);
			jQuery('#panel_form').on(function() {
				jQuery.cookie('wntr_headerfont_color', hex);
	    	});
		}
	});
	//=================== NAVIGATION SETTINGS ========================//
	var wntr_navfont_tag = '.primary-navigation a';
	jQuery('#wntr-panel-nav-font').change(function(){
		var wntr_navfont_encoded = jQuery(this).val(),
			wntr_navfont_value = jQuery(this).val().replace(' ','+');
		jQuery('head').append('<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=' + wntr_navfont_value + '" />');
		jQuery('head').append('<style type="text/css">' + wntr_navfont_tag + ' { font-family: "' + wntr_navfont_encoded + '"; }</style>');
		jQuery('#panel_form').on(function() {
			jQuery.cookie('wntr_navfont', wntr_navfont_encoded);
	    });
	});
	var wntr_navfont_color;
	if(jQuery.cookie('wntr_navfont_color')) {
		wntr_navfont_color = jQuery.cookie('wntr_navfont_color');
	} else {
		wntr_navfont_color = navfont_color_default;
	}
	jQuery('#wntr-panel-nav-font-color').ColorPicker({
		color: wntr_navfont_color,
		onShow: function (colpkr) {
			jQuery(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			jQuery(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb) {
			jQuery(wntr_navfont_tag).css('color', '#' + hex );
			jQuery('#wntr-panel-nav-font-color').css('backgroundColor', '#' + hex);
			jQuery('#panel_form').on(function() {
				jQuery.cookie('wntr_navfont_color', hex);
	    	});
		}
	});
	//=================== LINK COLOR SETTINGS ========================//
	var wntr_linkcolor;
	if(jQuery.cookie('wntr_linkcolor')) {
		wntr_linkcolor = jQuery.cookie('wntr_linkcolor');
	} else {
		wntr_linkcolor = link_color_default;
	}
	jQuery('#wntr-panel-linkcolor').ColorPicker({
		color: wntr_linkcolor,
		onShow: function (colpkr) {
			jQuery(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			jQuery(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb) {
			jQuery('a').css('color', '#' + hex);
			jQuery('#wntr-panel-linkcolor').css('backgroundColor', '#' + hex);
			jQuery('#panel_form').on(function() {
				jQuery.cookie('wntr_linkcolor', hex);
		    });
		}
	});
	//=================== FOOTER COLOR SETTINGS ========================//
	var wntr_footercolor_tag = '.footer-main a',
		wntr_footercolor;
	if(jQuery.cookie('wntr_footercolor')) {
		wntr_footercolor = jQuery.cookie('wntr_footercolor');
	} else {
		wntr_footercolor = footer_link_color_default;
	}
	jQuery('#wntr-panel-footercolor').ColorPicker({
		color: wntr_footercolor,
		onShow: function (colpkr) {
			jQuery(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			jQuery(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb) {
			jQuery(wntr_footercolor_tag).css('color', '#' + hex);
			jQuery('#wntr-panel-footercolor').css('backgroundColor', '#' + hex);
			jQuery('#panel_form').on(function() {
				jQuery.cookie('wntr_footercolor', hex);
		    });
		}
	}); 
	//=================== RESET ALL COOKIES ========================//
	jQuery('#reset_panel_form').on(function() {
		jQuery.cookie('wntr_bkgcolor', null);	
		jQuery.cookie('wntr_texture', null);
		jQuery.cookie('wntr_bodyfont', null);
		jQuery.cookie('wntr_bodyfont_color', null);
		jQuery.cookie('wntr_headerfont', null);
		jQuery.cookie('wntr_headerfont_color', null);
		jQuery.cookie('wntr_navfont', null);
		jQuery.cookie('wntr_navfont_color', null);
		jQuery.cookie('wntr_linkcolor', null);
		jQuery.cookie('wntr_footercolor', null);
	});
}); 