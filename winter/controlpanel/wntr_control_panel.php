<?php
add_action( 'wp_head', 'wntr_customstyle' );
function wntr_customstyle() { ?>
<?php
$font_family1 = get_option('wntr_bodyfont');
$font_family1 = str_replace(' ', '+', $font_family1);
$font_family2 = get_option('wntr_navfont');
$font_family2 = str_replace(' ', '+', $font_family2);
$font_family3 = get_option('wntr_h1font');
$font_family3 = str_replace(' ', '+', $font_family3);
$font_family4 = get_option('wntr_h2font');
$font_family4 = str_replace(' ', '+', $font_family4);
$font_family5 = get_option('wntr_h3font');
$font_family5 = str_replace(' ', '+', $font_family5);
$font_family6 = get_option('wntr_h4font');
$font_family6 = str_replace(' ', '+', $font_family6);
$font_family7 = get_option('wntr_h5font');
$font_family7 = str_replace(' ', '+', $font_family7);
$font_family8 = get_option('wntr_h6font');
$font_family8 = str_replace(' ', '+', $font_family8);
// REMOVES DUPLICATE GOOGLE FONT CALL
$fonts_array = array($font_family1,$font_family2,$font_family3,$font_family4,$font_family5,$font_family6,$font_family7,$font_family8);
// REMOVES DUPLICATE GOOGLE FONT CALL
$fonts_array= array_unique($fonts_array);
foreach ($fonts_array as $key => $val) {
	if($val!='' && $val!='please-select' && $val!='Other+Fonts' && $val!='Open+Sans'){ ?>
		<link href='https://fonts.googleapis.com/css?family=<?php echo esc_attr($val); ?>' rel='stylesheet' type='text/css' />
	<?php }
}
// end REMOVES DUPLICATE GOOGLE FONT CALL
?>
<style type="text/css">
	<?php if( (get_option('wntr_h1font') == "Other+Fonts") || get_option('wntr_h1font') == "please-select"){  
	if	(get_option('wntr_h1font_other') != ""){ ?>
	h1 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('wntr_h1font_other'))); ?>',sans-serif, Arial, Helvetica;		
	}	
	<?php } } elseif(get_option('wntr_h1font') != "" && get_option('wntr_h1font') != "please-select"){ ?>
	h1 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('wntr_h1font'))); ?>',sans-serif, Arial, Helvetica;
	}	
	<?php } ?>
	<?php if (get_option('wntr_h1color') != ""){ ?>
	h1 {	
		color:#<?php echo esc_attr(get_option('wntr_h1color')); ?>;	
	}	
	<?php } ?>
	<?php if( (get_option('wntr_h2font') == "Other+Fonts") || get_option('wntr_h2font') == "please-select"){  
	if	(get_option('wntr_h2font_other') != ""){ ?>
	h2 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('wntr_h2font_other'))); ?>',sans-serif, Arial, Helvetica;	
	}	
	<?php } } elseif(get_option('wntr_h2font') != "" && get_option('wntr_h2font') != "please-select"){ ?>
	h2 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('wntr_h2font'))); ?>',sans-serif, Arial, Helvetica;
	}	
	<?php } ?>
	<?php if(get_option('wntr_h2color') != ""){ ?>
	h2 {	
		color:#<?php echo esc_attr(get_option('wntr_h2color')); ?>;	
	}	
	<?php } ?>
	<?php 
	if( (get_option('wntr_h3font') == "Other+Fonts") || get_option('wntr_h3font') == "please-select"){  
	if	(get_option('wntr_h3font_other') != ""){ ?>
	h3 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('wntr_h3font_other'))); ?>',sans-serif, Arial, Helvetica;
	}	
	<?php } } elseif(get_option('wntr_h3font') != "" && get_option('wntr_h3font') != "please-select"){ ?>
	h3 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('wntr_h3font'))); ?>',sans-serif, Arial, Helvetica;
	}	
	<?php } ?>
	<?php if (get_option('wntr_h3color') != ""){ ?>
	h3 { color:#<?php echo esc_attr(get_option('wntr_h3color')); ?>;}
	<?php } ?>
	<?php if( (get_option('wntr_h4font') == "Other+Fonts") || get_option('wntr_h4font') == "please-select"){  
	if	(get_option('wntr_h4font_other') != ""){ ?>
	h4 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('wntr_h4font_other'))); ?>',sans-serif, Arial, Helvetica;
	}	
	<?php } } elseif(get_option('wntr_h4font') != "" && get_option('wntr_h4font') != "please-select"){ ?>
	h4 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('wntr_h4font'))); ?>',sans-serif, Arial, Helvetica;
	}	
	<?php } ?>	
	<?php if(get_option('wntr_h4color') != ""){ ?>
	h4 {	
		color:#<?php echo esc_attr(get_option('wntr_h4color')); ?>;	
	}	
	<?php } ?>
	<?php if( (get_option('wntr_h5font') == "Other+Fonts") || get_option('wntr_h5font') == "please-select"){  
	if	(get_option('wntr_h5font_other') != ""){ ?>
	h5 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('wntr_h5font_other'))); ?>',sans-serif, Arial, Helvetica;
	}	
	<?php } } elseif(get_option('wntr_h5font') != "" && get_option('wntr_h5font') != "please-select"){ ?>
	h5 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('wntr_h5font'))); ?>',sans-serif, Arial, Helvetica;
	}	
	<?php } ?>
	<?php if(get_option('wntr_h5color') != ""){ ?>
	h5 {	
		color:#<?php echo esc_attr(get_option('wntr_h5color')); ?>;	
	}	
	<?php } ?>
	<?php if( (get_option('wntr_h6font') == "Other+Fonts") || get_option('wntr_h6font') == "please-select"){  
	if	(get_option('wntr_h6font_other') != ""){ ?>
	h6 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('wntr_h6font_other'))); ?>',sans-serif, Arial, Helvetica;
	}	
	<?php } } elseif(get_option('wntr_h6font') != "" && get_option('wntr_h6font') != "please-select"){ ?>
	h6 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('wntr_h6font'))); ?>',sans-serif, Arial, Helvetica;
	}	
	<?php }  ?>	
	<?php 
	if(get_option('wntr_h6color') != ""){ ?>
	h6 {	
		color:#<?php echo esc_attr(get_option('wntr_h6color')); ?>;	
	}	
	<?php } ?>
	<?php if( (get_option('wntr_h3font') == "Other+Fonts") || get_option('wntr_h3font') == "please-select"){  
	if	(get_option('wntr_h3font_other') != ""){ ?>
	.home-service h3.widget-title {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('wntr_h3font_other'))); ?>',sans-serif, Arial, Helvetica;	
	}	
	<?php } } elseif(get_option('wntr_h3font') != "" && get_option('wntr_h3font') != "please-select"){ ?>
	.home-service h3.widget-title {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('wntr_h3font'))); ?>',sans-serif, Arial, Helvetica;
	}	
	<?php } ?>
	.primary-sidebar a{
		color:#<?php echo esc_attr(get_option('wntr_sidebar_text_color')); ?>;
	}
	 .primary-sidebar .widget ul li a:hover,.primary-sidebar a:hover {
		color:#<?php echo esc_attr(get_option('wntr_sidebar_text_hover_color')); ?>;
	}		
	a ,.category_link .link-text:hover{
		color:#<?php echo esc_attr(get_option('wntr_link_color')); ?>;
	}
	.site-footer a:hover, a:hover ,.woocommerce .woocommerce-breadcrumb span a:hover, .woocommerce-page .woocommerce-breadcrumb span a:hover, .breadcrumbs a:hover,.blog-posts-content .post-title a:hover,.entry-header .entry-title a:hover,
	.custom-testimonial .style-1 .testimonial-title a:hover,.brands li:hover h3.title, .brands li:hover mark.count,
	.cat_img_block:hover .category,.service-block a:hover,.category_link .link-text,.primary-sidebar li.current-cat a,.woocommerce-loop-category__title:hover,.woocommerce-loop-category__title:hover mark,.woocommerce-MyAccount-navigation ul li.is-active a,.woocommerce-MyAccount-navigation ul li a:hover{
		color:#<?php echo esc_attr(get_option('wntr_hoverlink_color')); ?>;
	}
	<?php 
	if( (get_option('wntr_h3font') == "Other+Fonts") || get_option('wntr_h3font') == "please-select"){  
	if	(get_option('wntr_h3font_other') != ""){ ?>
	h3 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('wntr_h3font_other'))); ?>',sans-serif, Arial, Helvetica;	
	}	
	<?php } } elseif(get_option('wntr_h3font') != "" && get_option('wntr_h3font') != "please-select"){ ?>
	h3 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('wntr_h3font'))); ?>',sans-serif, Arial, Helvetica;	
	}	
	<?php } ?>
	
	.site-footer .widget-title{color:#<?php echo esc_attr(get_option('wntr_footer_title_color')); ?>; }
	.footer-bottom a, .footer-bottom{color:#<?php echo esc_attr(get_option('wntr_bottom_footerlink_color')); ?>;}
	.footer-bottom a:hover{color:#<?php echo esc_attr(get_option('wntr_bottom_footerhoverlink_color')); ?>;}
	
	body {
		background-color:#<?php echo esc_attr(get_option('wntr_bkg_color')) ; ?> ;
		<?php if(get_option('wntr_background_upload')==''){ ?>
		background-image: url("<?php echo esc_url(get_template_directory_uri()); ?>/images/webi/colorpicker/pattern/<?php echo esc_attr(get_option('wntr_texture')); ?>");
		background-position:<?php echo esc_attr(str_replace('+',' ',get_option('wntr_back_position'))); ?> ;
		background-repeat:<?php echo esc_attr(get_option('wntr_back_repeat')); ?>;
		background-attachment:<?php echo esc_attr(get_option('wntr_back_attachment')); ?>;
		<?php } else { ?>
		background-image: url("<?php echo esc_attr(get_option('wntr_background_upload')); ?>");
		background-position:<?php echo esc_attr(str_replace('+',' ',get_option('wntr_back_position'))); ?>;
		background-repeat:<?php echo get_option('wntr_back_repeat'); ?>;
		background-attachment:<?php echo esc_attr(get_option('wntr_back_attachment')); ?>;
		<?php } ?>			
		color:#<?php echo esc_attr(get_option('wntr_bodyfont_color')); ?>;
	} 
	.topbar-outer{background:<?php echo wntr_hex_to_rgba(esc_attr(get_option('wntr_topbar_bkg_color')),esc_attr(get_option('wntr_topbar_bkg_opacity'))); ?>;color:#<?php echo esc_attr(get_option('wntr_topbar_text_color')); ?>; }
	.topbar-text,.topbar-outer .nav-menu-right li a,.wntr-topbar-menu-links ul li a{color:#<?php echo esc_attr(get_option('wntr_topbar_text_color')); ?>;}
	.topbar-outer .nav-menu-right li a:hover,.login-out:hover,.nav-menu-right li a::before,.account-label::before,.topbar-text::before,.nav-menu-right li:hover{color:#<?php echo esc_attr(get_option('wntr_hoverlink_color')); ?>;}
	.headerbottom-text {color:#<?php echo esc_attr(get_option('wntr_headerbottom_text_color')); ?>;}
	.box-category{background-color:<?php echo wntr_hex_to_rgba(esc_attr(get_option('wntr_category_bkg_color'))); ?>}
	.header-fix.sticky-menu{background-color:<?php echo wntr_hex_to_rgba(esc_attr(get_option('wntr_header_bkg_color'))); ?>}
	.header-bottom{background-color:<?php echo wntr_hex_to_rgba(esc_attr(get_option('wntr_header_bottom_bg_color')),esc_attr(get_option('wntr_header_bottom_bg_color_opacity'))); ?>;}
	.mega-menu ul li a{color:#<?php echo esc_attr(get_option('wntr_top_menu_text_color')); ?>; }
	.mega-menu ul li a:hover{color:#<?php echo esc_attr(get_option('wntr_top_menu_texthover_color')); ?>; }
	.mega-menu ul li .sub a, .wntr-topbar-menu-links .sub-menu li a{color:#<?php echo esc_attr(get_option('wntr_sub_menu_link_text_color')); ?>; }
	.mega-menu ul li .sub a:hover, .wntr-topbar-menu-links .sub-menu li a:hover,#menu-header-custom-links > li > a:hover{color:#<?php echo esc_attr(get_option('wntr_sub_menu_link_text_hover_color')); ?>; }
	.contact-block .contact-inner .label{color:#<?php echo esc_attr(get_option('wntr_contact_label_color')); ?>;}
	.contact-block .contact-inner.number{color:#<?php echo esc_attr(get_option('wntr_contact_number_color')); ?>;}
	.header-top {
		

		<?php if(get_option('wntr_header_background_upload')!=''){ ?>
		background-image: url("<?php echo esc_attr(get_option('wntr_header_background_upload')); ?>");
		background-position:<?php echo esc_attr(str_replace('+',' ',get_option('wntr_header_back_position'))); ?>;
		background-repeat:<?php echo esc_attr(get_option('wntr_header_back_repeat')); ?>;
		background-attachment:<?php echo esc_attr(get_option('wntr_header_back_attachment')); ?>;
		<?php } ?>
	}
	.site-header{
		background-color:<?php echo wntr_hex_to_rgba(esc_attr(get_option('wntr_header_bkg_color')),esc_attr(get_option('wntr_header_bkg_opacity'))); ?>;
	}
	.site-footer {
		background-color:<?php echo wntr_hex_to_rgba(esc_attr(get_option('wntr_footer_bkg_color'))); ?>;
	} 


	
	.site-footer{
		
		<?php if(get_option('wntr_footer_background_upload')!=''){ ?>
		background-image: url("<?php echo esc_attr(get_option('wntr_footer_background_upload')); ?>");
		background-position:<?php echo esc_attr(str_replace('+',' ',get_option('wntr_footer_back_position'))); ?>;
		background-repeat:<?php echo esc_attr(get_option('wntr_footer_back_repeat')); ?>;
		background-attachment:<?php echo esc_attr(get_option('wntr_footer_back_attachment')); ?>;
		<?php } ?>
	}
	.footer a, .site-footer .wntr-about-description, .site-footer .contact_address, .site-footer .contact_phone{color:#<?php echo esc_attr(get_option('wntr_footerlink_color')); ?>;}
	<?php 
	if( (get_option('wntr_bodyfont') == "Other+Fonts") || get_option('wntr_bodyfont') == "please-select"){  
	if	(get_option('wntr_bodyfont_other') != ""){ ?>
	body {	
		font-family: '<?php echo esc_attr(str_replace('+',' ',get_option('wntr_bodyfont_other'))); ?>',sans-serif, Arial, Helvetica;	
	}	
	<?php } } elseif(get_option('wntr_bodyfont') != "" && get_option('wntr_bodyfont') != "please-select"){ ?>
	body {	
		font-family: '<?php echo esc_attr(str_replace('+',' ',get_option('wntr_bodyfont'))); ?>',sans-serif, Arial, Helvetica;	
	}


.widget button, .widget input[type="button"], .widget input[type="reset"], .widget input[type="submit"], a.button, button, .contributor-posts-link, input[type="button"], input[type="reset"], input[type="submit"], .button_content_inner a, .woocommerce #content input.button, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce-page #content input.button, .woocommerce-page #respond input#submit, .woocommerce-page a.button, .woocommerce-page button.button, .woocommerce-page input.button, .woocommerce .wishlist_table td.product-add-to-cart a,.woocommerce .wc-proceed-to-checkout .checkout-button:hover,
.woocommerce-page input.button:hover,.woocommerce #content input.button.disabled,.woocommerce #content input.button:disabled,.woocommerce #respond input#submit.disabled,.woocommerce #respond input#submit:disabled,.woocommerce a.button.disabled,.woocommerce a.button:disabled,.woocommerce button.button.disabled,.woocommerce button.button:disabled,.woocommerce input.button.disabled,.woocommerce input.button:disabled,.woocommerce-page #content input.button.disabled,.woocommerce-page #content input.button:disabled,.woocommerce-page #respond input#submit.disabled,.woocommerce-page #respond input#submit:disabled,.woocommerce-page a.button.disabled,.woocommerce-page a.button:disabled,.woocommerce-page button.button.disabled,.woocommerce-page button.button:disabled,.woocommerce-page input.button.disabled,.woocommerce-page input.button:disabled,.loadgridlist-wrapper .woocount:hover,#primary .entry-summary .single_add_to_cart_button,.loadgridlist-wrapper .woocount{
	background-color:<?php echo wntr_hex_to_rgba(esc_attr(get_option('wntr_button_color')),esc_attr(get_option('wntr_button_opacity'))); ?>;
	color:#<?php echo esc_attr(get_option('wntr_button_text_color')); ?>;
	border-color:#<?php echo esc_attr(get_option('wntr_button_border_color')); ?>;
	 font-family:<?php echo esc_attr(get_option('wntr_button_font_family')); ?>;
<?php  if(get_option('wntr_button_font_family') != "" && get_option('wntr_button_font_family') != "please-select"){ ?>
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('wntr_button_font_family'))); ?>',sans-serif, Arial, Helvetica;
	<?php } ?>
}


.widget input[type="button"]:hover,.widget input[type="button"]:focus,.widget input[type="reset"]:hover,.widget input[type="reset"]:focus,.widget input[type="submit"]:hover,.widget input[type="submit"]:focus,a.button:hover,a.button:focus,button:hover,button:focus,.contributor-posts-link:hover,input[type="button"]:hover,input[type="button"]:focus,input[type="reset"]:hover,input[type="reset"]:focus,input[type="submit"]:hover,input[type="submit"]:focus,.calloutarea_button a.button:hover,.calloutarea_button a.button:focus,.button_content_inner a:hover,.button_content_inner a:focus,.woocommerce #content input.button:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce-page #content input.button:hover, .woocommerce-page #respond input#submit:hover, .woocommerce-page a.button:hover, .woocommerce-page button.button:hover, .woocommerce #content table.cart .checkout-button:hover,#primary .entry-summary .single_add_to_cart_button:hover,.woocommerce .wc-proceed-to-checkout .checkout-button{
		background-color:<?php echo wntr_hex_to_rgba(esc_attr(get_option('wntr_button_hover_color')),esc_attr(get_option('wntr_button_hover_opacity'))); ?>;
		color:#<?php echo esc_attr(get_option('wntr_button_hover_text_color')); ?>;
		border-color:#<?php echo esc_attr(get_option('wntr_button_hover_border_color')); ?>;
	}	
	<?php }  ?>		
</style>
<?php if(get_option('wntr_control_panel') == 'no') return; 
	$bkg_color = get_option('wntr_bkg_color') ;
	$texture = get_option('wntr_texture');
	$bodyfont = str_replace('+',' ',get_option('wntr_bodyfont'));
	$bodyfont_color = get_option('wntr_bodyfont_color');
	$headerfont = str_replace('+',' ',get_option('wntr_headerfont'));
	$headerfont_color = get_option('wntr_h1color');
	$navfont = str_replace('+',' ',get_option('wntr_navfont'));
	$navfont_color = get_option('wntr_navlink_color');
	$link_color = get_option('wntr_link_color');
	$link_color_hover = get_option('wntr_hoverlink_color');
	$footer_link_color = get_option('wntr_footerlink_color');
?>
<script type="text/javascript">
var bkg_color_default = '<?php echo esc_attr($bkg_color); ?>',
	bodyfont_color_default = '<?php echo esc_attr($bodyfont_color); ?>',
	headerfont_color_default = '<?php echo esc_attr($headerfont_color); ?>',
	navfont_color_default = '<?php echo esc_attr($navfont_color); ?>',
	link_color_default = '<?php echo esc_attr($link_color); ?>',
	footer_link_color_default = '<?php echo esc_attr($footer_link_color); ?>';
</script>
<?php } 
add_action( 'wp_head', 'wntr_panel_head' );
function wntr_panel_head(){
	if(get_option('wntr_control_panel') == 'no') return;
	//=========================================== Background Settings ===========================================//
	$wntr_bkgcolor = isset($_COOKIE['wntr_bkgcolor']) ? $_COOKIE['wntr_bkgcolor'] : '';
	$wntr_texture = isset($_COOKIE['wntr_texture']) ? $_COOKIE['wntr_texture'] : '';
	$style = '';
	if ( $wntr_bkgcolor != '' || $wntr_texture != '' ) {
		if ( $wntr_bkgcolor != '' ) $style .= '<style type="text/css">body{ background-color: #' .$wntr_bkgcolor. '; }</style>';
		if ( $wntr_texture != '' ) $style .= '<style type="text/css">body{ background-image: url('.get_template_directory_uri().'/css/images/'.$wntr_texture.'.png) }</style>';
		echo wp_kses_post($style);
	}	
	//=========================================== Body Settings ===========================================//
	$wntr_bodyfont_tag = 'body';
	$wntr_bodyfont = isset($_COOKIE['wntr_bodyfont']) ? $_COOKIE['wntr_bodyfont'] : '';
	$wntr_bodyfont_color = isset($_COOKIE['wntr_bodyfont_color']) ? $_COOKIE['wntr_bodyfont_color'] : '';
	$body_style = '';					
	if ( $wntr_bodyfont != '' || $wntr_bodyfont_color != '') {
		if ( $wntr_bodyfont != '' ) {
			$wntr_bodyfont_family = str_replace(' ', '+', $wntr_bodyfont);
			$body_style .= '<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family='.$wntr_bodyfont_family.'" />';
			$body_style .= '<style type="text/css">'.$wntr_bodyfont_tag.' { font-family: '.$wntr_bodyfont.'; }</style>';
		}
		if ( $wntr_bodyfont_color != '' ) {
			$body_style .= '<style type="text/css">'.$wntr_bodyfont_tag.' { color: #'.$wntr_bodyfont_color.'; }</style>';
		}	
		echo wp_kses_post($body_style);
	}
	//=========================================== Header Settings ===========================================//
	$wntr_headerfont_tag = 'h1,h2,h3,h4,h5,h6,.entry-title, .entry-title a,#secondary .widget-title,.widget-title,#footer-widget-area .widget-title,h3.service-block1,.block2 .widget-title,h3.featured-title-slide,.page h2,.block3 h3,.block3 h3,.entry-content a';
	$wntr_headerfont = isset($_COOKIE['wntr_headerfont']) ?	$_COOKIE['wntr_headerfont'] : '';
	$wntr_headerfont_color = isset($_COOKIE['wntr_headerfont_color']) ? $_COOKIE['wntr_headerfont_color'] : '';
	$header_style = '';
	if ( $wntr_headerfont != '' || $wntr_headerfont_color != '' ) {
		if ( $wntr_headerfont != '' ) {
			$wntr_headerfont_family = str_replace(' ', '+', $wntr_headerfont);
			$header_style .= '<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family='.$wntr_headerfont_family.'" />';
			$header_style .= '<style type="text/css">'.$wntr_headerfont_tag.' { font-family: '.$wntr_headerfont.'; }</style>';
		}
		if ( $wntr_headerfont_color != '' ) {
			$header_style .= '<style type="text/css">'.$wntr_headerfont_tag.' { color: #'.$wntr_headerfont_color.'; }</style>';
		}	
		echo wp_kses_post($header_style);
	}
	//=========================================== Navigation Settings ===========================================//
	$wntr_navfont_tag = '.mega-menu ul li a';
	$wntr_navfont = isset($_COOKIE['wntr_navfont']) ? $_COOKIE['wntr_navfont'] : '';
	$wntr_navfont_color = isset($_COOKIE['wntr_navfont_color']) ? $_COOKIE['wntr_navfont_color'] : '';
	$nav_style = '';
	if ( $wntr_navfont != '' || $wntr_navfont_color != '') {
		if ( $wntr_navfont != '' ) {
			$wntr_navfont_family = str_replace(' ', '+', $wntr_navfont);
			$nav_style .= '<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family='.$wntr_navfont_family.'" />';
			$nav_style .= '<style type="text/css">'.$wntr_navfont_tag.' { font-family: '.$wntr_navfont.'; }</style>';
		}
		if ( $wntr_navfont_color != '' ) {
			$nav_style .= '<style type="text/css">'.$wntr_navfont_tag.'{ color: #'.$wntr_navfont_color.'; }</style>';
		}		
		echo wp_kses_post($nav_style);
	}
	//=========================================== Link Settings ===========================================//
	$wntr_linkcolor = isset($_COOKIE['wntr_linkcolor']) ? $_COOKIE['wntr_linkcolor'] : '';
	$link_style = '';
	if ($wntr_linkcolor != '') {
		$link_style .= '<style type="text/css">a{ color: #' .$wntr_linkcolor. '; }</style>';	
		echo wp_kses_post($link_style);
	}
	//=========================================== Footer Link Settings ===========================================//
	$wntr_footercolor_tag = '.footer a';
	$wntr_footercolor = isset($_COOKIE['wntr_footercolor']) ? $_COOKIE['wntr_footercolor'] : '';
	$footer_style = '';
	if ($wntr_footercolor != '') {
		$footer_style .= '<style type="text/css">'.$wntr_footercolor_tag.'{ color: #' .$wntr_footercolor. '; }</style>';	
		echo wp_kses_post($footer_style);
	}	
}
add_action('wntr_show_panel','wntr_control_panel');
function wntr_control_panel(){
	$google_fonts = array('Droid+Sans','Antic','Bitter','Droid+Serif','Philosopher','Oxygen','Rokkitt','Galdeano','Open+Sans','Oswald','Play','Varela','Andika'); ?>
<div id="wntr-control-panel">
  <div id="wntr-panel-container">
    <div class="wntr-panel-bg"> <a id="wntr-panel-switch" href="#"><span class="icon-settings"></span></a>
      <div id="wntr-panel-inner">
        <div class="wntr-panel-title-main"> <span class="main-title">Theme Settings</span> </div>
        <!--wntr-panel-title-main-->
        <form method="post" id="panel_form" name="panel_form">
          <div class="wntr-panel-block">
            <div class="wntr-panel-title-back">Background Color</div>
            <?php
						$bkgcolor = (isset($_COOKIE['wntr_bkgcolor'])) ? $_COOKIE['wntr_bkgcolor'] : (get_option('wntr_bkg_color'));
						if($bkgcolor == ''){$bkgcolor_style='style="background-color:#767676"';}else{$bkgcolor_style = ($bkgcolor != (get_option('wntr_bkg_color'))) ? 'style="background-color:#'.$bkgcolor.'"' : 'style="background-color:#'.(get_option('wntr_bkg_color')).'"';}
						?>
            <div class="wntr-panel-colorpicker">
              <input id="wntr-panel-bkgcolor" class="wntr-item" type="text" name="wntr-panel-bkgcolor" <?php echo esc_attr($bkgcolor_style); ?>>
            </div>
          </div>
          <!--wntr-panel-block-->
          <div class="wntr-panel-block">
            <div class="wntr-panel-title-text-back">Background Texture</div>
            <div class="clear"></div>
            <?php 
							for ( $i=1; $i<=18; $i++ ) { ?>
            <a id="wntr-bkg-texture<?php echo esc_attr($i); ?>" class="wntr-panel-item" href="#" title="body-bg<?php echo esc_attr($i); ?>"></a>
            <?php } ?>
          </div>
          <!--wntr-panel-block-->
          <div class="wntr-panel-block">
            <div class="wntr-panel-title">Body font</div>
            <?php 
						$bodyfont_color = (isset($_COOKIE['wntr_bodyfont_color'])) ? $_COOKIE['wntr_bodyfont_color'] : (get_option('wntr_bodyfont_color'));
						if($bodyfont_color == ''){$bodyfont_color_style='style="background-color:#555555"';}else{$bodyfont_color_style = ($bodyfont_color != (get_option('wntr_bodyfont_color'))) ? 'style="background-color:#'.$bodyfont_color.'"' : 'style="background-color:#'.(get_option('wntr_bodyfont_color')).'"';}
						?>
            <?php
						$body_font = '';
						$body_font = ( isset( $_COOKIE['wntr_bodyfont'] ) ) ? $_COOKIE['wntr_bodyfont'] : str_replace('+', ' ', get_option('wntr_bodyfont')); ?>
            <select name="wntr-panel-body-font" id="wntr-panel-body-font">
              <?php foreach( $google_fonts as $font ) { ?>
              <?php $encoded_value = str_replace( '+', ' ', $font ); ?>
              <option value="<?php echo esc_attr($encoded_value); ?>" <?php selected( $body_font, $encoded_value ); ?>><?php echo esc_html($encoded_value); ?></option>
              <?php } ?>
            </select>
            <div class="wntr-panel-colorpicker">
              <input id="wntr-panel-body-font-color" class="wntr-item" type="text" name="wntr-panel-body-font-color" <?php echo esc_attr($bodyfont_color_style); ?>>
            </div>
          </div>
          <!--wntr-panel-block-->
          <div class="wntr-panel-block">
            <div class="wntr-panel-title">
              <?php esc_attr_e('Header font','Evessi');?> 
            </div>
            <?php 
						$headerfont_color = (isset($_COOKIE['wntr_headerfont_color'])) ? $_COOKIE['wntr_headerfont_color'] : (get_option('wntr_h1color'));
						if($headerfont_color == ''){$headerfont_color_style='style="background-color:#767676"';}else{	$headerfont_color_style = ($headerfont_color != (get_option('wntr_h1color'))) ? 'style="background-color:#'.$headerfont_color.'"' : 'style="background-color:#'.(get_option('wntr_h1color')).'"';}	
						?>
            <?php
						$header_font = '';
						$header_font = ( isset( $_COOKIE['wntr_headerfont'] ) ) ? $_COOKIE['wntr_headerfont'] : str_replace('+', ' ', get_option('wntr_headerfont')); ?>
            <select name="wntr-panel-header-font" id="wntr-panel-header-font">
              <?php foreach( $google_fonts as $font ) { ?>
              <?php $encoded_value = str_replace( '+', ' ', $font ); ?>
              <option value="<?php echo esc_attr($encoded_value); ?>" <?php selected( $header_font, $encoded_value ); ?>><?php echo esc_html($encoded_value); ?></option>
              <?php } ?>
            </select>
            <div class="wntr-panel-colorpicker">
              <input id="wntr-panel-header-font-color" class="wntr-item" type="text" name="wntr-panel-header-font-color" <?php echo esc_attr($headerfont_color_style); ?>>
            </div>
          </div>
          <!--wntr-panel-block-->
          <div class="wntr-panel-block">
            <div class="wntr-panel-title">Navigation font</div>
            <?php 
						$navfont_color = (isset($_COOKIE['wntr_navfont_color'])) ? $_COOKIE['wntr_navfont_color'] : (get_option('wntr_navlink_color'));
						if($navfont_color == ''){$navfont_color_style='style="background-color:#333333"';}else{$navfont_color_style = ($navfont_color != (get_option('wntr_navlink_color'))) ? 'style="background-color:#'.$navfont_color.'"' : 'style="background-color:#'.(get_option('wntr_navlink_color')).'"';}
						?>
            <?php
						$nav_font = '';
						$nav_font = ( isset( $_COOKIE['wntr_navfont'] ) ) ? $_COOKIE['wntr_navfont'] : str_replace('+', ' ', get_option('wntr_navfont')); ?>
            <select name="wntr-panel-nav-font" id="wntr-panel-nav-font">
              <?php foreach( $google_fonts as $font ) { ?>
              <?php $encoded_value = str_replace( '+', ' ', $font ); ?>
              <option value="<?php echo esc_attr($encoded_value); ?>" <?php selected( $nav_font, $encoded_value ); ?>><?php echo esc_html($encoded_value); ?></option>
              <?php } ?>
            </select>
            <div class="wntr-panel-colorpicker">
              <input id="wntr-panel-nav-font-color" class="wntr-item" type="text" name="wntr-panel-nav-font-color" <?php echo esc_attr($navfont_color_style); ?>>
            </div>
          </div>
          <!--wntr-panel-block-->
          <div class="wntr-panel-block">
            <div class="wntr-panel-title">
              <?php esc_attr_e('Link Color','Evessi');?>
            </div>
            <?php
						$linkcolor = (isset($_COOKIE['wntr_linkcolor'])) ? $_COOKIE['wntr_linkcolor'] : (get_option('wntr_link_color'));
						if($linkcolor == ''){$linkcolor_style='style="background-color:#767676"';}else{$linkcolor_style = ($linkcolor != (get_option('wntr_link_color'))) ? 'style="background-color:#'.$linkcolor.'"' : 'style="background-color:#'.(get_option('wntr_link_color')).'"';}
						?>
            <div class="wntr-panel-colorpicker">
              <input id="wntr-panel-linkcolor" class="wntr-item" type="text" name="wntr-panel-linkcolor" <?php echo esc_attr($linkcolor_style); ?>>
            </div>
          </div>
          <!--wntr-panel-block-->
          <div class="wntr-panel-block">
            <div class="wntr-panel-title-back">
              <?php esc_attr_e('Footer Link Color','Evessi');?>
            </div>
            <?php
						$footercolor = (isset($_COOKIE['wntr_footercolor'])) ? $_COOKIE['wntr_footercolor'] : (get_option('wntr_footerlink_color'));
						if($footercolor == ''){$footercolor_style='style="background-color:#FFFFFF"';}else{$footercolor_style = ($footercolor != (get_option('wntr_footerlink_color'))) ? 'style="background-color:#'.$footercolor.'"' : 'style="background-color:#'.(get_option('wntr_footerlink_color')).'"';}
						?>
            <div class="wntr-panel-colorpicker">
              <input id="wntr-panel-footercolor" class="wntr-item" type="text" name="wntr-panel-footercolor" <?php echo esc_attr($footercolor_style); ?> />
            </div>
          </div>
          <!--wntr-panel-block-->
          <div class="more-set"> <a style="color:#000; font-size:12px;" href="<?php echo esc_url(admin_url()); ?>admin.php?page=wntr_theme_settings" target="_blank">
            <?php esc_attr_e('See more settings in admin panel','Evessi');?>
            </a> </div>
          <!--more-set-->
        </form>
        <!--panel_form-->
        <?php
					if ( isset($_REQUEST['apply']) ) {
						$wntr_bkgcolor = $_COOKIE['wntr_bkgcolor'];
						$wntr_texture = $_COOKIE['wntr_texture'];
						$wntr_bodyfont = $_COOKIE['wntr_bodyfont'];
						$wntr_bodyfont_color = $_COOKIE['wntr_bodyfont_color'];
						$wntr_headerfont = $_COOKIE['wntr_headerfont'];
						$wntr_headerfont_color = $_COOKIE['wntr_headerfont_color'];
						$wntr_navfont = $_COOKIE['wntr_navfont'];
						$wntr_navfont_color = $_COOKIE['wntr_navfont_color'];
						$wntr_linkcolor = $_COOKIE['wntr_linkcolor'];
						$wntr_footercolor = $_COOKIE['wntr_footercolor'];
					} 
					elseif ( isset($_REQUEST['reset']) || !(isset($_REQUEST['reset'])) ) {
						$wntr_bkgcolor = $wntr_texture = $wntr_bodyfont = $wntr_bodyfont_color = $wntr_headerfont = $wntr_headerfont_color = $wntr_navfont = $wntr_navfont_color = $wntr_linkcolor = $wntr_footercolor ='';
 					} 
				?>
      </div>
      <!--wntr-panel-inner-->
    </div>
    <!--wntr-panel-bg-->
  </div>
  <!--wntr-panel-container-->
</div>
<!--wntr-control-panel-->
<?php } ?>