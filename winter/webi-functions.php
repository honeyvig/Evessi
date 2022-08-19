<?php
/**
 * Pixeltemplate
 * @copyright  Copyright (c) Pixeltemplate. (http://www.pixeltemplate.com)
 * @license    http://www.pixeltemplate.com/license/
 * @author         Pixeltemplate
 * @version        Release: 1.0
 */
add_image_size('wntr_gallery_thumbnail', 145, 145, true);
if ( ! isset( $content_width ) )
	$content_width = 1150;
/**  Set Default options : Theme Settings  */
function wntr_set_default_options()
{
/*  General Settings  */
	add_option("wntr_logo_image", get_stylesheet_directory_uri()."/images/webi/logo.png"); // set logo image	
	add_option("wntr_logo_image_alt",'Evessi'); // set logo image alt
	add_option("wntr_mob_logo_image", get_stylesheet_directory_uri()."/images/webi/logo.png"); // set logo image
	add_option("wntr_mob_logo_image_alt",'Evessi'); // set logo image alt	
	add_option("wntr_site_icon", get_template_directory_uri()."/images/webi/favicon.png"); // set favicon icon	
	add_option("wntr_showsite_description",'no'); // yes/no, control panel		
	add_option("wntr_contact_email",'demo@demo.com'); // yes/no, control panel
	add_option("wntr_control_panel",'no'); // yes/no, control panel	
		
	add_option("wntr_background_upload",""); // Default, texture specified image
	add_option("wntr_texture",'body-bg.png'); // Default, extra texture image
	add_option("wntr_back_repeat","repeat"); // background repeate
	add_option("wntr_back_position","top+left"); // background position
	add_option("wntr_back_attachment","fixed"); // background attachment
	add_option("wntr_bkg_color","ffffff"); // background color
	add_option("wntr_bodyfont_color","808080"); // body font color
	add_option("wntr_bodyfont",'Open+Sans'); // Open+Sans	
	add_option("wntr_bodyfont_other",'sans-serif'); // Arial	
	
	add_option("wntr_button_font_family",'Open+Sans'); // Button Font
	add_option("wntr_button_color","e3002a "); // button color
	add_option("wntr_button_border_color","e3002a "); // button border color
	add_option("wntr_button_text_color","FFFFFF"); // button Text color
	add_option("wntr_button_opacity","1"); // button opacity 
	add_option("wntr_button_hover_color","000000"); // button hover color
	add_option("wntr_button_hover_border_color","272723"); // button hover border color
	add_option("wntr_button_hover_text_color","FFFFFF"); // button hover Text color
	add_option("wntr_button_hover_opacity","1"); // button opacity 
	add_option("wntr_revslider_alias",'wntr_homeslider');
	
	/*  Sidebar Text Color Settings  */	
	add_option("wntr_sidebar_text_color","333333"); // Sidebar Text Color
	add_option("wntr_sidebar_text_hover_color","e3002a "); // Sidebar Text Link Hover Color
	
	/*  Sidebar setting for other pages  */
	add_option("wntr_page_sidebar","yes");
	add_option("wntr_home_sidebar","yes");
	
	/*  Contact Setting  */
	add_option("wntr_show_topbar_contact","yes"); // show contact informatio
	add_option("wntr_contact_number","610-403-403"); // Contact Number
	add_option("wntr_contact_number_color","000000"); // Contact Number Color
	
	/*  Header Settings  */	
	add_option("wntr_header_background_upload","ffffff"); // Header background image
	add_option("wntr_header_back_repeat","no-repeat"); // header background repeate
	add_option("wntr_header_back_position","top+left"); // header background position
	add_option("wntr_header_back_attachment","fixed"); // header background attachment	
	add_option("wntr_header_bkg_color","ffffff"); // header background color	
	add_option("wntr_header_bkg_opacity","1"); // header background opacity  
	
	/*  Navigation Menu bar & Text Setting  */
	add_option("wntr_header_bottom_bg_color","ffffff"); // Navigation Menu background color
	add_option("wntr_header_bottom_bg_color_opacity","1"); // header  Top background opacity  
	add_option("wntr_top_menu_text_color","000000"); // Navigation Menu text color
	add_option("wntr_top_menu_texthover_color","e3002a"); // Navigation Menu text hover color
	add_option("wntr_sub_menu_link_text_color","313131"); // Navigation Sub Menu text color
	add_option("wntr_sub_menu_link_text_hover_color","e3002a "); // Navigation Sub Menu text hover color
	
	/*  Content Settings  */
	add_option("wntr_h1font",'Open+Sans'); // h1 family google font
	add_option("wntr_h1font_other",'sans-serif'); // h1 family specified font
	add_option("wntr_h1color",'000000'); // h1 family font color	 
	add_option("wntr_h2font",'Open+Sans'); // h2 family google font
	add_option("wntr_h2font_other",'sans-serif'); // h2 family specified font
	add_option("wntr_h2color",'000000'); // h2 family font color	
	add_option("wntr_h3font",'Open+Sans'); // h3 family google font
	add_option("wntr_h3font_other",'sans-serif'); // h3 family specified font
	add_option("wntr_h3color",'000000'); // h3 family font color	
	add_option("wntr_h4font",'Open+Sans'); // h4 family google font
	add_option("wntr_h4font_other",'sans-serif'); // h4 family specified font
	add_option("wntr_h4color",'000000'); // h4 family font color	
	add_option("wntr_h5font",'Open+Sans'); // h5 family google font
	add_option("wntr_h5font_other",'sans-serif'); // h5 family specified font 
	add_option("wntr_h5color",'000000'); // h5 family font color	
	add_option("wntr_h6font",'Open+Sans'); // h6 family google font
	add_option("wntr_h6font_other",'sans-serif'); // h6 family specified font 
	add_option("wntr_h6color",'000000'); // h6 family font color	
	add_option("wntr_link_color","808080"); // link color
	add_option("wntr_hoverlink_color","e3002a "); // link hover color
	
	/*  Footer Settings  */	
	add_option("wntr_footer_bkg_color","f5f5f5"); // footer background color
	add_option("wntr_footer_back_repeat","no-repeat"); // footer background repeate
	add_option("wntr_footer_back_position","center+center"); // footer background position
	add_option("wntr_footer_back_attachment","scroll"); // footer background attachment
	add_option("wntr_footer_title_color","000000"); // footer Title text color
	add_option("wntr_footerlink_color","3d3d3d"); // footer Footerlink color


	add_option("wntr_bottom_footerlink_color","3d3d3d"); // footer Bottom link text color
	add_option("wntr_bottom_footerhoverlink_color","e3002a "); // footer Bottom link hover text color
	add_option("wntr_footer_slog",'Demo Theme'); // copyright statement : Theme By Pixeltemplate
	
}
add_action('init', 'wntr_set_default_options');
function wntr_get_logo() {
	if (trim(get_option('wntr_logo_image_alt')) != '') $logo_alt = get_option('wntr_logo_image_alt') ; else $logo_alt = esc_attr(get_bloginfo('name', 'display' ));
	if (trim(get_option('wntr_logo_image')) != ''){ echo '<img alt="'.get_option('wntr_logo_image_alt').'" src="'.get_option('wntr_logo_image').'" />';}
	           else{echo '<img alt="'.get_option('wntr_logo_image_alt').'" src=" '.get_template_directory_uri(). '/images/webi/logo.png">';}
}
function wntr_get_mob_logo() {
	if (trim(get_option('wntr_mob_logo_image_alt')) != '') $logo_alt = get_option('wntr_mob_logo_image_alt') ; else $logo_alt = esc_attr(get_bloginfo('name', 'display' ));
	if (trim(get_option('wntr_mob_logo_image')) != ''){ echo '<img alt="'.get_option('wntr_mob_logo_image_alt').'" src="'.get_option('wntr_mob_logo_image').'" />';}
	           else{echo '<img alt="'.get_option('wntr_mob_logo_image_alt').'" src=" '.get_template_directory_uri(). '/images/webi/mob-logo.png">';}
}
function wntr_header_background_upload() {
	if (trim(get_option('wntr_header_background_upload')) != ''){ echo '<img alt="'.the_title_attribute().'" src="'.get_option('wntr_header_background_upload').'" />';}
	           else{echo '<img alt="'.the_title_attribute().'" src=" '.get_template_directory_uri(). '/images/webi/header-bg.jpg">';}
}
function wntr_service_contact() {
	echo '<div class="contact-block"><span class="contact-icon"></span>&nbsp;<div class="contact-inner"><div class="contact-title">'.get_option('wntr_contact_title').'</div><div class="contact-inner number">'.get_option('wntr_contact_number').'</div></div></div>';
}
function wntr_service_category_title() {
	echo '<div class="category-list"><div class="box-category-heading"><div class="box-category"><span class="heading-img"></span>'.get_option('wntr_navbar_category_title').'</div></div></div>';
}
function wntr_footer_background_upload() {
	if (trim(get_option('wntr_footer_background_upload')) != ''){ echo '<img alt="'.the_title_attribute().'" src="'.get_option('wntr_footer_background_upload').'" />';}
	           else{echo '<img alt="'.the_title_attribute().'" src=" '.get_template_directory_uri(). '/images/webi/footer-bg.jpg">';}
}
function wntr_get_sort_column() {
	$sort_column=''; 
	if(trim(get_option('wntr_navigation_type'))=='categories'){
		if( trim(get_option('wntr_navigation_sort_column')) =='id' || trim(get_option('wntr_navigation_sort_column'))=='menu_order')
			$sort_column = 'ID';
		elseif(trim(get_option('wntr_navigation_sort_column'))=='name' || trim(get_option('wntr_navigation_sort_column'))=='post_title')
			$sort_column = 'name';
		elseif(trim(get_option('wntr_navigation_sort_column'))=='count')
			$sort_column = 'count';
	}
	elseif(trim(get_option('wntr_navigation_type'))=='pages'){
		if(trim(get_option('wntr_navigation_sort_column'))=='id')
			$sort_column = 'ID';
		elseif(trim(get_option('wntr_navigation_sort_column'))=='menu_order')
			$sort_column = 'menu_order';
		elseif(trim(get_option('wntr_navigation_sort_column'))=='post_title' || trim(get_option('wntr_navigation_sort_column'))=='name')
			$sort_column = 'post_title';
	}
	return $sort_column;
}
function wntr_get_sort_order() {
	$sort_order='';
	if(trim(get_option('wntr_navigation_sort_order'))=='asc')
		return 'asc';
	if(trim(get_option('wntr_navigation_sort_order'))=='desc')
		return 'desc';
	return $sort_order;
}
function wntr_get_all_categories() {
	global $wp_query; 
	if (isset($wp_query->post->ID)) $postid = $wp_query->post->ID; 
	$categories = wp_get_post_categories( $postid );
	$cats = ', ';
	foreach($categories as $c){
		$cat = get_category( $c );	
		$cats .= $cat->name. ',';
	}
	$cats=strtolower(rtrim($cats, " ,"));
	return $cats;
}
function wntr_get_all_tags() {
	global $wp_query; 
	if (isset($wp_query->post->ID)) $postid = $wp_query->post->ID; 
	$alltags = wp_get_post_tags( $postid );
	$tags = ', ';
	foreach($alltags as $tag){
		$tags .= $tag->name. ',';
	}
	$tags=strtolower(rtrim($tags, " ,"));
	return $tags;
}
function wntr_admin_scripts() {
	//Scripts	
	wp_enqueue_script( 'wntr-pscript-admin', get_template_directory_uri() . '/js/winter/admin/pscript_admin.js');
	wp_enqueue_script( 'jscolor', get_template_directory_uri() . '/js/winter/admin/jscolor/jscolor.js');
	wp_enqueue_script( 'easytabs-min', get_template_directory_uri() . '/js/winter/admin/jquery.easytabs.min.js');
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_register_script('wntr-my-upload', get_template_directory_uri() . '/js/winter/admin/custom.js', array('jquery','media-upload','thickbox'));
	wp_enqueue_script('wntr-my-upload');	
}
function wntr_extra_head(){
	$themeinfo = wp_get_theme(get_template_directory() . '/style.css');	
	echo '<meta name="generator" content="'.$themeinfo['Name'].' - '.$themeinfo['Version'].'" />';
}
add_action('wp_head','wntr_extra_head');
add_action( "admin_enqueue_scripts", 'wntr_admin_scripts');
add_action( "admin_enqueue_scripts", 'wntr_admin_styles');
add_action( "admin_enqueue_scripts", 'wntr_admin_metabox_script');
add_action( "admin_enqueue_scripts", 'wntr_admin_metabox_styles');
function wntr_admin_styles() { 
	//Styles
	wp_enqueue_style('wntr-admin', get_template_directory_uri() . '/css/webi/admin/wntr_admin.css');
	wp_enqueue_style('wntr-tab', get_template_directory_uri() . '/css/webi/admin/tab.css');
	wp_enqueue_style('thickbox');
}
function wntr_admin_metabox_script() { 
	//Scripts
	wp_enqueue_script( 'wntr-metabox-script', get_template_directory_uri() . '/js/winter/admin/wntr_metabox_script.js' );
}
function wntr_admin_metabox_styles() { 
	//Styles
	wp_enqueue_style('wntr-metabox-style', get_template_directory_uri() . '/css/webi/admin/wntr_metabox_style.css');
}
function wntr_add_admin_menu_separator($position) {
  global $menu;
  $index = 0;
  foreach($menu as $offset => $section) {
    if (substr($section[2],0,9)=='separator')
      $index++;
    if ($offset>=$position) {
      $menu[$position] = array('','read',"separator{$index}",'','wp-menu-separator');
      break;
    }
  }
  ksort($menu);
}
if ( ! function_exists( 'wntr_admin_header_style' ) ) :
	function wntr_admin_header_style() {}
endif;
/**
 * Sets the post excerpt length to 40 characters.
 * To override this length in a child theme, remove the filter and add your own
 * function tied to the excerpt_length filter hook.
 * @return int
 */
function wntr_excerpt_length( $length ) {
	return 150;
}
add_filter( 'excerpt_length', 'wntr_excerpt_length' );
function wntr_string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}
/**
 * Returns a "Continue Reading" link for excerpts
 * @return string "Continue Reading" link
 */
function wntr_continue_reading_link() {
	return ' <a class="read-more-link" href="'.esc_url(get_permalink()) . '">' . esc_html__( 'Read More', 'Evessi' ) . '</a>';
}
add_filter( 'excerpt_length', 'wntr_excerpt_length' );
/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and wntr_continue_reading_link().
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 * @return string An ellipsis
 */
function wntr_auto_excerpt_more( $more ) {
	return  '&hellip;' .wntr_continue_reading_link();
}
add_filter( 'excerpt_more', 'wntr_auto_excerpt_more' );
/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 * To override this link in a child theme, remove the filter and add your own
 * function tied to the get_the_excerpt filter hook.
 * @return string Excerpt with a pretty "Continue Reading" link
 */
function wntr_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output = '&hellip;'. wntr_continue_reading_link();
	}
	return $output;
}
/**
 * Deprecated way to remove inline styles printed when the gallery shortcode is used.
 * This function is no longer needed or used. Use the use_default_gallery_style
 * filter instead, as seen above.
 * @deprecated Deprecated in Pixeltemplate for WordPress 3.1
 * @return string The gallery style filter, with the styles themselves removed.
 */
function wntr_remove_gallery_css( $css ) {
	return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );
}
// Backwards compatibility with WordPress 3.0.
if ( version_compare( $GLOBALS['wp_version'], '3.3.2', '<' ) )
	add_filter( 'gallery_style', 'wntr_remove_gallery_css' );
/**
 * Return the URL for the first link found in the post content.
 *
 * @since Twenty Eleven 1.0
 * @return string|bool URL or false when no link is present.
 */
function wntr_url_grabber() {
	if ( ! preg_match( '/<a\s[^>]*?href=[\'"](.+?)[\'"]/is', get_the_content(), $matches ) )
		return false;
	return esc_url_raw( $matches[1] );
}
function wntr_get_widget($location = '') {
	if ( is_active_sidebar($location) ) { 
		dynamic_sidebar($location); 
	}
}
if (version_compare( $GLOBALS['wp_version'], '3.3', '>=' )) 	
	get_template_part('winter/widgets');		
/**
 * Removes the default styles that are packaged with the Recent Comments widget.
 *
 * To override this in a child theme, remove the filter and optionally add your own
 * function tied to the widgets_init action hook.
 * This function uses a filter (show_recent_comments_widget_style) new in WordPress 3.1
 * to remove the default style. Using Pixeltemplate in WordPress 3.0 will show the styles,
 * but they won't have any effect on the widget in default Pixeltemplate styling.
 *
 */
function wntr_remove_recent_comments_style() {
	add_filter( 'show_recent_comments_widget_style', '__return_false' );
}
add_action( 'widgets_init', 'wntr_remove_recent_comments_style' );
function wntr_get_pagination($range = 4){  
	// $paged - number of the current page  
	global $paged, $wp_query, $max_page;  
	// How much pages do we have?  
	if ( !$max_page ) {  
		$max_page = $wp_query->max_num_pages;  
	}  
	// We need the pagination only if there are more than 1 page  
	if($max_page > 1){  
		if(!$paged){  
			$paged = 1;  
		}  
		// On the first page, don't put the First page link  
		if($paged != 1){  
			echo '<a class="first" href=" '. get_pagenum_link(1) .' "> << </a>';  
		}
		// To the previous page  
		previous_posts_link(' < ');
		// We need the sliding effect only if there are more pages than is the sliding range  
		if($max_page > $range){  
		 // When closer to the beginning  
			 if($paged < $range){  
			   for($i = 1; $i <= ($range + 1); $i++){  
			   	 if($i==$paged){$class = "current number"; }else { $class = "number"; } 
				 echo "<a class='".$class."' href='" . get_pagenum_link($i). "'>$i</a>";  
			   }  
			 }  
			 // When closer to the end  
			 elseif($paged >= ($max_page - ceil(($range/2)))){  
			   for($i = $max_page - $range; $i <= $max_page; $i++){  
				  if($i==$paged){$class = "current number"; }else { $class = "number"; } 
				 echo "<a class='".$class."' href='" . get_pagenum_link($i). "'>$i</a>";   
			   }  
			 }  
			 // Somewhere in the middle  
			 elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){  
			   for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){  
				  if($i==$paged){$class = "current number"; }else { $class = "number"; } 
				 echo "<a class='".$class."' href='" . get_pagenum_link($i). "'>$i</a>";  
			   }  
			 }  
		}  
		// Less pages than the range, no sliding effect needed  
		else{  
		 for($i = 1; $i <= $max_page; $i++){  
		  if($i==$paged){$class = "current number"; }else { $class = "number"; } 
		   echo "<a class='".$class."' href='" . get_pagenum_link($i). "'>$i</a>";  
		 }  
		}  
		// Next page  
		next_posts_link(' > ');  
		// On the last page, don't put the Last page link  
		if($paged != $max_page){  
		 echo '<a class="last" href=" '. get_pagenum_link($max_page) .' "> >> </a>';  
		}  
	}  
}  	
function wntr_posts_next_link_attributes($html){
	$html = str_replace('<a','<a class="next-post"',$html);
	return $html;
	}
	function wntr_posts_previous_link_attributes($html){
	$html = str_replace('<a','<a class="prev-post"',$html);
	return $html;
	}
add_filter('next_post_link','wntr_posts_next_link_attributes',10,1);
add_filter('previous_post_link','wntr_posts_previous_link_attributes',10,1);
function wntr_get_first_post_images($post_ID){
	global $post, $posts;
	$first_img_src = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	if (isset($matches[1][0]))
	$first_img_src = $matches[1][0];
	if(empty($first_img_src)){ 
		return 0;
	}
	return $first_img_src;
}
function wntr_print_images_thumb($src,$alttext, $width=200,$height=200,$align='left')
{	
	$src = wntr_mr_image_resize($src, $width, $height, true, $align, false);
	if( empty ( $src ) || $src == 'image_not_specified' ):
		$src = get_template_directory_uri()."/images/webi/placeholder.png";
		$src = wntr_mr_image_resize($src, $width, $height, true, $align, false);
	endif;
	$return = '';
	$return .= '<img src="'.$src.'"';
	$return .= " title='$alttext' alt='$alttext' width='$width' height='$height' />";	
	echo wp_kses_post($return);
}
function wntr_excerpt($limit) 
{
      $excerpt = explode(' ', wntr_strip_images(strip_tags(get_the_excerpt())), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'.<div class="read-more"><a class="read-more-link" href="'.esc_url(get_permalink()).'">'.esc_html__( 'Read More' , 'Evessi' ).'</a></div>';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return $excerpt;
}
function wntr_blog_post_excerpt( $limit ) {
$excerpt = get_the_excerpt();
$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, $limit);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
return $excerpt;
}
function wntr_portfolio_excerpt($limit) 
{
    $contents = substr(wntr_strip_images(strip_tags(get_the_excerpt())),0,$limit);	
	$excerpt = $contents; if (strlen($contents) >= $limit){ $excerpt .= '&hellip;'; }
  	return $excerpt;
}
if ( ! function_exists( 'wntr_go_top' ) ) :
function wntr_go_top(){ ?>
<div class="backtotop"><a style="display: none;" id="to_top" href="#">Top</a></div>
<?php } 
endif;
/* Favi Icon fucntion */
if ( ! function_exists( 'wntr_site_icon' ) ) {
	function wntr_site_icon() {
		if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
			echo '<link rel="shortcut icon" type="image/png" href="'.get_option('wntr_site_icon').'" />';
		}
		else
	    {
			echo '<link rel="shortcut icon" type="image/png" href="'.get_template_directory_uri().'/winter/favicon.ico" />';
	    }
	}
}
add_action('wp_head','wntr_site_icon');
add_action('admin_head','wntr_site_icon');
if ( ! function_exists( 'wntr_strip_images' ) ) :
function wntr_strip_images($content){	
   $content = preg_replace('/<img[^>]+./','',$content);
   return preg_replace('/<\/?a[^>]*>/','',$content);
}
endif;
/**
 * Remove inline styles printed when the gallery shortcode is used.
 * Galleries are styled by the theme in Pixeltemplate's style.css. This is just
 * a simple filter call that tells WordPress to not use the default styles.
 */
add_filter( 'use_default_gallery_style', '__return_false' );
/**
 * Enqueue Pixeltemplate Fonts
 */
function wntr_load_fonts() {
    $fonts_url = '';
 
    /* Translators: If there are characters in your language that are not
    * supported by Lato, translate this to 'off'. Do not translate
    * into your own language.
    */
   
	$Rubik = _x( 'on', 'Rubik font: on or off', 'Evessi' ); 
		if ('off' !== $Rubik ) {
			$font_families = array(); 
			if ( 'off' !== $Rubik ) {
				$font_families[] = 'Rubik:300,400,500,700';
			}
		    $query_args = array(
				'family' => urlencode( implode( '|', $font_families ) ),
				'subset' => urlencode( 'latin,latin-ext' ),
			);
	 
			$fonts_url = esc_url( add_query_arg( $query_args, 'https://fonts.googleapis.com/css' ));
		} 
    return esc_url_raw( $fonts_url );
}
/*
Enqueue scripts and styles.
*/
function wntr_google_fonts() {
    wp_enqueue_style( 'wntr-google-fonts', wntr_load_fonts(), array(), '1.0.0' );
}
add_action( 'get_header', 'wntr_google_fonts' );
//Load responsive.css file in the header
function wntr_responsive()
{
wp_enqueue_style('wntr-responsive', get_stylesheet_directory_uri() . '/responsive.css');

wp_enqueue_style('quick-view', get_template_directory_uri() . '/quick-view.css');
}
add_action('wp_footer','wntr_responsive');
/**
 * Enqueue Pixeltemplate Styles
 */
if ( ! function_exists( 'wntr_load_styles' ) ) :
function wntr_load_styles() {
	wp_enqueue_style('wntr-isotope', get_template_directory_uri() . '/css/isotop-port.css');
	wp_enqueue_style('wntr-custom', get_template_directory_uri() . '/css/webi/custom.css');
	wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/webi/owl.carousel.css');
	wp_enqueue_style('owl-transitions', get_template_directory_uri() . '/css/webi/owl.transitions.css');		
	wp_enqueue_style('shadowbox', get_template_directory_uri() . '/css/webi/shadowbox.css');
	wp_enqueue_style('animate-min', get_template_directory_uri() . '/css/webi/animate.min.css');
	wp_enqueue_style('wntr-shortcode-style', get_template_directory_uri() . '/css/webi/shortcode_style.css');
	wp_enqueue_style('slick-theme', get_template_directory_uri() . '/css/webi/slick-theme.css');
	wp_enqueue_style('slick', get_template_directory_uri() . '/css/webi/slick.css');
	wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/css/webi/bootstrap.min.css');
	//Adds front end control panel css
	if(get_option('wntr_control_panel') == 'yes'):
		wp_enqueue_style('wntr-wntr-style', get_template_directory_uri() . '/css/webi/wntr-style.css');
	endif; 
	//Adds wocommerce style
	if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) :
		wp_enqueue_style('wntr-woocommerce-css', get_template_directory_uri() . '/css/webi/woocommerce.css');
	endif;
}
endif;
add_action('get_header', 'wntr_load_styles');
/**
 * Enqueue Pixeltemplate Scripts
 */
if ( ! function_exists( 'wntr_load_scripts' ) ) :
function wntr_load_scripts() {	
		wp_enqueue_script( 'jqtransform', get_template_directory_uri() . '/js/winter/jquery.jqtransform.js', array(), '', false);
		wp_enqueue_script( 'jqtransform-script', get_template_directory_uri() . '/js/winter/jquery.jqtransform.script.js', array(), '', false);
		wp_enqueue_script( 'wntr-custom-script', get_template_directory_uri() . '/js/winter/jquery.custom.min.js', array(), '', false);
		wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', array(), '', false);
		wp_enqueue_script( 'custom-min', get_template_directory_uri() . '/js/winter/custom.min.js', array(), '', false);
		wp_enqueue_script( 'easypiechart', get_template_directory_uri() . '/js/winter/jquery.easypiechart.min.js', array(), '', false);
		wp_enqueue_script( 'wntr-custom', get_template_directory_uri() . '/js/winter/custom.js', array(), '', false);
		wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/js/winter/owl.carousel.min.js', array(), '', false);
		wp_enqueue_script( 'formalize', get_template_directory_uri() . '/js/winter/jquery.formalize.min.js', array(), '', false);
		wp_enqueue_script( 'respond', get_template_directory_uri() . '/js/winter/respond.min.js', array(), '', false);
		wp_enqueue_script( 'validate', get_template_directory_uri() . '/js/winter/jquery.validate.js', array(), '', false);
		wp_enqueue_script( 'shadowbox', get_template_directory_uri() . '/js/winter/shadowbox.js', array(), '', false);		
		wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/winter/waypoints.min.js', array(), '', false);
		wp_enqueue_script( 'megamenu', get_template_directory_uri() . '/js/winter/jquery.megamenu.js', array(), '', false);	
		wp_enqueue_script( 'easyResponsiveTabs', get_template_directory_uri() . '/js/winter/easyResponsiveTabs.js', array(), '', false);
		wp_enqueue_script( 'jtree-min', get_template_directory_uri() . '/js/winter/jquery.treeview.js', array(), '', false);	
		wp_enqueue_script( 'scroll-min', get_template_directory_uri() . '/js/winter/jquery.jscroll.min.js', array(), '', false);
		wp_enqueue_script( 'countUp', get_template_directory_uri() . '/js/winter/countUp.js', array(), '', false);
		wp_enqueue_script( 'doubletaptogo', get_template_directory_uri() . '/js/winter/doubletaptogo.js', array(), '', false);
		wp_enqueue_script( 'slick-min', get_template_directory_uri() . '/js/winter/slick.min.js', array(), '', false);
		wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/winter/bootstrap.min.js', array(), '', false);
		wp_enqueue_script( 'countdown', get_template_directory_uri() . '/js/winter/jquery.countdown.min.js', array(), '', false);
?>

<?php }
endif;
add_action( 'wp_enqueue_scripts', 'wntr_load_scripts' );
/**
 * Enqueue Pixeltemplate Control Panel Scripts
 */
if ( ! function_exists( 'wntr_load_controlpanel_script' ) ) :
function wntr_load_controlpanel_script() {
	if(get_option('wntr_control_panel') == 'yes') : ?>
	<script type="text/javascript">
		var wntr_theme_path = "<?php echo get_template_directory_uri() ?>";			
	</script> 
<?php
        wp_enqueue_script( 'jquery-colorpicker', get_template_directory_uri() . '/js/winter/colorpicker/colorpicker.js', array(), '', false);
		wp_enqueue_script( 'jquery-cookie', get_template_directory_uri() . '/js/winter/colorpicker/jquery.cookie.js', array(), '', false);
		wp_enqueue_script( 'jquery-pscript', get_template_directory_uri() . '/js/winter/colorpicker/pscript.js', array(), '', false);	
	endif;	
}
endif;
add_action( 'wp_enqueue_scripts', 'wntr_load_controlpanel_script' );
if ( ! function_exists( 'wntr_breadcrumbs' ) ) :
function wntr_breadcrumbs() { ?>
<div class="breadcrumbs">
  <?php if ( function_exists('yoast_breadcrumb') ) { ?>
  <?php yoast_breadcrumb('<p id="breadcrumbs">','</p>'); ?>
  <?php } ?>
</div>
<?php }
endif;
function wntr_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="search-form" action="' . esc_url( home_url( '/' ) ) . '" >
    <div><label class="screen-reader-text" for="s">' . esc_html__( 'Search for:', 'Evessi' ) . '</label>
    <input class="search-field" type="text" placeholder="' . esc_attr__( 'Search..', 'Evessi' ) . '" value="' . get_search_query() . '" name="s" id="s" />
    <input class="search-submit" type="submit" id="searchsubmit" value="'. esc_attr__( 'Go', 'Evessi' ) .'" />
    </div>
    </form>';
    return $form;
}
add_filter( 'get_search_form', 'wntr_search_form' );
if ( ! function_exists( 'wntr_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own wntr_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 */
function wntr_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments.
	?>
<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
  <p>
    <?php esc_html_e( 'Pingback:', 'Evessi' ); ?>
    <?php comment_author_link(); ?>
    <?php edit_comment_link( esc_html__( '(Edit)', 'Evessi' ), '<span class="edit-link">', '</span>' ); ?>
  </p>
</li>
<?php
			break;
		default :
		// Proceed with normal comments.
		global $post;
	?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
  <div id="comment-<?php comment_ID(); ?>" class="comment-body">
    <div class="alignleft"> <?php echo get_avatar( $comment, 48 ); ?> </div>
    <div class="author-content">
      <h6><?php echo wp_kses_post($comment->comment_author); ?></h6>
      <?php edit_comment_link( esc_html__( 'Edit', 'Evessi' ), ' ' ); ?>
      <div class="clearfix"></div>
      <abbr class="published" title="<?php echo the_title_attribute() ?>"><?php printf( esc_html__( '%1$s at %2$s', 'Evessi' ), get_comment_date(),  get_comment_time() ); ?></abbr> </div>
    <div class="comment-content">
      <?php comment_text(); ?>
      <div class="reply">
        <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
      </div>
    </div>
    <?php if ( $comment->comment_approved == '0' ) : ?>
    <em class="comment-awaiting-moderation">
    <?php esc_html_e( 'Your comment is awaiting moderation.', 'Evessi' ); ?>
    </em> <br />
    <?php endif; ?>
  </div>
  <!-- #comment-##  -->
</li>
<?php
		break;
	endswitch; // end comment_type check
}
endif;
if ( ! function_exists( 'wntr_entry_meta' ) ) :
/**
 * Print HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own wntr_entry_meta() to override in a child theme.
 *
 * @since Pixeltemplate 1.0
 *
 * @return void
 */
function wntr_entry_meta() {
}
endif;
if ( ! function_exists( 'wntr_sticky_post' ) ) :
function wntr_sticky_post() {
	if ( is_sticky() && is_home() && ! is_paged() )
		echo '<div class="meta-inner"><span class="sticky-post">' . esc_html__( 'Sticky', 'Evessi' ) . '</span></div>';
}
endif;
if ( ! function_exists( 'wntr_categories_links' ) ) :
function wntr_categories_links() {
	// Translators: used between list items, there is a space after the comma.
	$categories_list = get_the_category_list( esc_html__( ', ', 'Evessi' ) );
	if ( $categories_list ) {
		echo '<div class="meta-inner"><span class="categories-links"><i class="fa fa-list"></i>' . $categories_list . '</span></div>';
	}
}
endif;
if ( ! function_exists( 'wntr_tags_links' ) ) :
function wntr_tags_links() {
	// Translators: used between list items, there is a space after the comma.
	$tag_list = get_the_tag_list( '', esc_html__( ', ', 'Evessi' ) );
	if ( $tag_list ) {
		echo '<div class="meta-inner"><span class="tags-links"><i class="fa fa-tags"></i>' . $tag_list . '</span></div>';		
	}
}
endif;
if ( ! function_exists( 'wntr_author_link' ) ) :
function wntr_author_link() {
	// Post author
	if ( 'post' == get_post_type() ) {
		printf( '<div class="meta-inner"><span class="author vcard"><i class="fa fa-pencil-square-o"></i><a class="url fn n" href="%1$s" title="%2$s" rel="author">'.esc_html__("by ",'Evessi').'%3$s</a></span></div>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_attr( sprintf( esc_html__( 'View all posts by %s', 'Evessi' ), get_the_author() ) ),
			get_the_author()
		);
	}
}
endif;
if ( ! function_exists( 'wntr_comments_link' ) ) :
function wntr_comments_link() {
	//comments open
	if ( comments_open() && ! is_single() ) :
	echo '<div class="meta-inner"><span class="comments-link"> <i class="fa fa-comment-o"></i>';
	comments_popup_link( esc_html__( 'Leave a Comment', 'Evessi' ), esc_html__( '1 Comment', 'Evessi' ), esc_html__( '% Comments', 'Evessi' ) ); 
	echo '</span></div>';
	endif; 
}
endif;
if ( ! function_exists( 'wntr_entry_date' ) ) :
/**
 * Print HTML with date information for current post.
 *
 * Create your own wntr_entry_date() to override in a child theme.
 *
 * @since Pixeltemplate 1.0
 *
 * @param boolean $echo (optional) Whether to echo the date. Default true.
 * @return string The HTML-formatted post date.
 */
function wntr_entry_date( $echo = true ) {
	if ( has_post_format( array( 'chat', 'status' ) ) )
		$format_prefix = _x( '%1$s on %2$s', '1: post format name. 2: date', 'Evessi' );
	else
		$format_prefix = '%2$s';
	$day = get_the_date('d'); 
	$month = get_the_date('M');
	$year = get_the_date('Y'); 
	$date = sprintf( '<div class="meta-inner"><span class="date"><a href="%1$s" title="%2$s" rel="bookmark"><i class="fa fa-calendar-o" aria-hidden="true"></i>
<time class="entry-date" datetime="%3$s">'.$month.', '.$day.' '.$year.'</time></a></span></div>',
		esc_url( get_permalink() ),
		esc_attr( sprintf( esc_html__( 'Permalink to %s', 'Evessi' ), the_title_attribute( 'echo=0' ) ) ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( sprintf( $format_prefix, get_post_format_string( get_post_format() ), get_the_date() ) )
	);
	if ( $echo )
		echo wp_kses_post($date);
	return $date;
}
endif;
if ( ! function_exists( 'wntr_post_entry_date' ) ) :
function wntr_post_entry_date( ) {
	$date = get_the_date();	
	$day = get_the_date('d'); 
	$month = get_the_date('M');
	$year = get_the_date('Y'); 
	$date = '<div class="entry-date">'.$day.' '.$month.' '.$year.'</div>';
	echo wp_kses_post($date);
	return $date;
}
endif;
if ( ! function_exists( 'wntr_posts_short_description' ) ) :
function wntr_posts_short_description() {
	$wntr_posts_short_description = get_post_meta(get_the_ID(), 'wntr_posts_short_description', true);
	if(empty($wntr_posts_short_description))
		$wntr_posts_short_description = wntr_excerpt(24);
	return $wntr_posts_short_description;
}
endif;
if ( ! function_exists( 'wntr_posts_show_thumbnail' ) ) :
function wntr_posts_show_thumbnail() {
	$wntr_posts_show_thumbnail = get_post_meta(get_the_ID(), 'wntr_posts_show_thumbnail', true);
	if(empty($wntr_posts_show_thumbnail))
		$wntr_posts_show_thumbnail = '';
	return $wntr_posts_show_thumbnail;
}
endif;
if ( ! function_exists( 'wntr_page_layout' ) ) :
function wntr_page_layout() {
	$page_layout_class = '';
	global $wp_query;	
	if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	if(is_shop()):
		$page_id = wc_get_page_id('shop');
	else:
		$page_id = $wp_query->get_queried_object_id();
	endif;
	}else{
		$page_id = $wp_query->get_queried_object_id();
	}
	$wntr_page_layout = get_post_meta($page_id, 'wntr_page_layout', true);
	if(empty($wntr_page_layout))
		$wntr_page_layout = '';
		
	if($wntr_page_layout == "box"):
		$page_layout_class = "box-page";
	elseif($wntr_page_layout == "wide"):
		$page_layout_class = "wide-page";
	endif;
	return $page_layout_class;
}
endif;
if ( ! function_exists( 'wntr_sidebar_position' ) ) :
function wntr_sidebar_position() {
  $sidebar_class = '';
  global $wp_query;  
  if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
  if(is_shop() || is_archive()):
    $page_id = wc_get_page_id('shop');
  else:
    $page_id = $wp_query->get_queried_object_id();
  endif;
  }else{
    $page_id = $wp_query->get_queried_object_id();
  }
  $wntr_sidebar_position = get_post_meta($page_id, 'wntr_sidebar_position', true);
  if(empty($wntr_sidebar_position))
    $wntr_sidebar_position = '';
  if($wntr_sidebar_position == "left"):
    $sidebar_class = "left-sidebar";
  elseif($wntr_sidebar_position == "right"):
    $sidebar_class = "right-sidebar";
  elseif($wntr_sidebar_position == "disabled"):
    $sidebar_class = "full-width";
  endif;
  return $sidebar_class;
}
endif;
if ( ! function_exists( 'wntr_blog_box_display' ) ) :
function wntr_blog_box_display() {
	$main_container = '';
	$wntr_blog_box_display = get_post_meta(get_the_ID(), 'wntr_blog_box_display', true);
	if(empty($wntr_blog_box_display))
		$wntr_blog_box_display = '';
	if($wntr_blog_box_display == 'masonry'):
		$main_container = 'masonry';
	elseif($wntr_blog_box_display == 'grid'):
		$main_container = 'grid';
	endif;
	return $main_container;
}
endif;
if ( ! function_exists( 'wntr_blog_box_columns_class' ) ) :
function wntr_blog_box_columns_class() {
	$columns_class = '';
	$wntr_blog_box_columns = get_post_meta(get_the_ID(), 'wntr_blog_box_columns', true);
	if(empty($wntr_blog_box_columns))
		$wntr_blog_box_columns = '';
	if($wntr_blog_box_columns == 'two'):
		$columns_class = 'two-col';
	elseif($wntr_blog_box_columns == 'three'):
		$columns_class = 'three-col';
	elseif($wntr_blog_box_columns == 'four'):
		$columns_class = 'four-col';
	endif;
	return $columns_class;
}
endif;
if ( ! function_exists( 'wntr_blog_box_columns_number' ) ) :
function wntr_blog_box_columns_number() {
	$columns_number = '';
	$wntr_blog_box_columns = get_post_meta(get_the_ID(), 'wntr_blog_box_columns', true);
	if(empty($wntr_blog_box_columns))
		$wntr_blog_box_columns = '';
	if($wntr_blog_box_columns == 'two'):
		$columns_number = '2';
	elseif($wntr_blog_box_columns == 'three'):
		$columns_number = '3';
	elseif($wntr_blog_box_columns == 'four'):
		$columns_number = '4';
	endif;
	return $columns_number;
}
endif;
if ( ! function_exists( 'wntr_blog_box_posts_per_page' ) ) :
function wntr_blog_box_posts_per_page() {
	$wntr_blog_box_posts_per_page = get_post_meta(get_the_ID(), 'wntr_blog_box_posts_per_page', true);
	if(empty($wntr_blog_box_posts_per_page))
		$wntr_blog_box_posts_per_page = '';
	return $wntr_blog_box_posts_per_page;
}
endif;
if ( ! function_exists( 'wntr_blog_list_posts_per_page' ) ) :
function wntr_blog_list_posts_per_page() {
	$wntr_blog_list_posts_per_page = get_post_meta(get_the_ID(), 'wntr_blog_list_posts_per_page', true);
	if(empty($wntr_blog_list_posts_per_page))
		$wntr_blog_list_posts_per_page = '';
	return $wntr_blog_list_posts_per_page;
}
endif;
if ( ! function_exists( 'wntr_blog_filter_columns_class' ) ) :
function wntr_blog_filter_columns_class() {
	$columns_class = '';
	$wntr_blog_filter_columns = get_post_meta(get_the_ID(), 'wntr_blog_filter_columns', true);
	if(empty($wntr_blog_filter_columns))
		$wntr_blog_filter_columns = '';
	if($wntr_blog_filter_columns == 'two'):
		$columns_class = 'two-col';
	elseif($wntr_blog_filter_columns == 'three'):
		$columns_class = 'three-col';
	elseif($wntr_blog_filter_columns == 'four'):
		$columns_class = 'four-col';
	endif;
	return $columns_class;
}
endif;
if ( ! function_exists( 'wntr_blog_filter_columns_number' ) ) :
function wntr_blog_filter_columns_number() {
	$columns_number = '';
	$wntr_blog_filter_columns = get_post_meta(get_the_ID(), 'wntr_blog_filter_columns', true);
	if(empty($wntr_blog_filter_columns))
		$wntr_blog_filter_columns = '';
	if($wntr_blog_filter_columns == 'two'):
		$columns_number = '2';
	elseif($wntr_blog_filter_columns == 'three'):
		$columns_number = '3';
	elseif($wntr_blog_filter_columns == 'four'):
		$columns_number = '4';
	endif;
	return $columns_number;
}
endif;
if ( ! function_exists( 'wntr_testimonial_box_posts_per_page' ) ) :
function wntr_testimonial_box_posts_per_page() {
	$wntr_testimonial_box_posts_per_page = get_post_meta(get_the_ID(), 'wntr_testimonial_box_posts_per_page', true);
	if(empty($wntr_testimonial_box_posts_per_page))
		$wntr_testimonial_box_posts_per_page = '';
	return $wntr_testimonial_box_posts_per_page;
}
endif;
if ( ! function_exists( 'wntr_testimonial_list_posts_per_page' ) ) :
function wntr_testimonial_list_posts_per_page() {
	$wntr_testimonial_list_posts_per_page = get_post_meta(get_the_ID(), 'wntr_testimonial_list_posts_per_page', true);
	if(empty($wntr_testimonial_list_posts_per_page))
		$wntr_testimonial_list_posts_per_page = '';
	return $wntr_testimonial_list_posts_per_page;
}
endif;
if ( ! function_exists( 'wntr_testimonial_box_columns_class' ) ) :
function wntr_testimonial_box_columns_class() {
	$columns_class = '';
	$wntr_testimonial_box_columns = get_post_meta(get_the_ID(), 'wntr_testimonial_box_columns', true);
	if(empty($wntr_testimonial_box_columns))
		$wntr_testimonial_box_columns = '';
	if($wntr_testimonial_box_columns == 'two'):
		$columns_class = 'two-col';
	elseif($wntr_testimonial_box_columns == 'three'):
		$columns_class = 'three-col';
	elseif($wntr_testimonial_box_columns == 'four'):
		$columns_class = 'four-col';
	endif;
	return $columns_class;
}
endif;
if ( ! function_exists( 'wntr_testimonial_box_columns_number' ) ) :
function wntr_testimonial_box_columns_number() {
	$columns_number = '';
	$wntr_testimonial_box_columns = get_post_meta(get_the_ID(), 'wntr_testimonial_box_columns', true);
	if(empty($wntr_testimonial_box_columns))
		$wntr_testimonial_box_columns = '';
	if($wntr_testimonial_box_columns == 'two'):
		$columns_number = '2';
	elseif($wntr_testimonial_box_columns == 'three'):
		$columns_number = '3';
	elseif($wntr_testimonial_box_columns == 'four'):
		$columns_number = '4';
	endif;
	return $columns_number;
}
endif;
if ( ! function_exists( 'wntr_staff_box_posts_per_page' ) ) :
function wntr_staff_box_posts_per_page() {
	$wntr_staff_box_posts_per_page = get_post_meta(get_the_ID(), 'wntr_staff_box_posts_per_page', true);
	if(empty($wntr_staff_box_posts_per_page))
		$wntr_staff_box_posts_per_page = '';
	return $wntr_staff_box_posts_per_page;
}
endif;
if ( ! function_exists( 'wntr_staff_list_posts_per_page' ) ) :
function wntr_staff_list_posts_per_page() {
	$wntr_staff_list_posts_per_page = get_post_meta(get_the_ID(), 'wntr_staff_list_posts_per_page', true);
	if(empty($wntr_staff_list_posts_per_page))
		$wntr_staff_list_posts_per_page = '';
	return $wntr_staff_list_posts_per_page;
}
endif;
if ( ! function_exists( 'wntr_staff_box_columns_class' ) ) :
function wntr_staff_box_columns_class() {
	$columns_class = '';
	$wntr_staff_box_columns = get_post_meta(get_the_ID(), 'wntr_staff_box_columns', true);
	if(empty($wntr_staff_box_columns))
		$wntr_staff_box_columns = '';
	if($wntr_staff_box_columns == 'two'):
		$columns_class = 'two-col';
	elseif($wntr_staff_box_columns == 'three'):
		$columns_class = 'three-col';
	elseif($wntr_staff_box_columns == 'four'):
		$columns_class = 'four-col';
	endif;
	$columns_class;
	return $columns_class;
}
endif;
if ( ! function_exists( 'wntr_staff_box_columns_number' ) ) :
function wntr_staff_box_columns_number() {
	$columns_number = '';
	$wntr_staff_box_columns = get_post_meta(get_the_ID(), 'wntr_staff_box_columns', true);
	if(empty($wntr_staff_box_columns))
		$wntr_staff_box_columns = '';
	if($wntr_staff_box_columns == 'two'):
		$columns_number = '2';
	elseif($wntr_staff_box_columns == 'three'):
		$columns_number = '3';
	elseif($wntr_staff_box_columns == 'four'):
		$columns_number = '4';
	endif;
	return $columns_number;
}
endif;
if ( ! function_exists( 'wntr_content_position' ) ) :
function wntr_content_position() {
	$wntr_content_position = get_post_meta(get_the_ID(), 'wntr_content_position', true);
	if(empty($wntr_content_position))
		$wntr_content_position = '';
	return $wntr_content_position;
}
endif;
if ( ! function_exists( 'wntr_is_related_posts' ) ) :
function wntr_is_related_posts() {
	$wntr_is_related_posts = get_post_meta(get_the_ID(), 'wntr_posts_show_related_posts', true);
	if(empty($wntr_is_related_posts))
		$wntr_is_related_posts = '';
	return $wntr_is_related_posts;
}
endif;
if ( ! function_exists( 'wntr_is_author_info' ) ) :
function wntr_is_author_info() {
	$wntr_is_author_info = get_post_meta(get_the_ID(), 'wntr_posts_show_author_info', true);
	if(empty($wntr_is_author_info))
		$wntr_is_author_info = '';
	return $wntr_is_author_info;
}
endif;
if ( ! function_exists( 'paginate_links' ) ) :
function paginate_links() {
	$output ='';
	if ( $GLOBALS['wp_query']->max_num_pages > 1 ) {
	$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
	$pagenum_link = html_entity_decode( get_pagenum_link() );
	$query_args   = array();
	$url_parts    = explode( '?', $pagenum_link );
	if ( isset( $url_parts[1] ) ) {
		wp_parse_str( $url_parts[1], $query_args );
	}
	$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
	$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';
	$format  = $GLOBALS['wp_rewrite']->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
	$format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';
	// Set up paginated links.
	$links = paginate_links( array(
		'base'     => $pagenum_link,
		'format'   => $format,
		'total'    => $GLOBALS['wp_query']->max_num_pages,
		'current'  => $paged,
		'mid_size' => 1,
		'add_args' => array_map( 'urlencode', $query_args ),
		'prev_text' =>  wp_kses( __( '<i class="fa fa-angle-left"></i>', 'Evessi' ),wntr_allowed_html()),
		'next_text' =>  wp_kses( __( '<i class="fa fa-angle-right"></i>', 'Evessi' ),wntr_allowed_html()),
	) );
	if ( $links ) :
	$output .= '<nav class="navigation paging-navigation" role="navigation">';
		$output .= '<div class="pagination loop-pagination">';
		$output .= $links;
		$output .= '</div>';
	$output .= '</nav>';
	endif; 
	}
	return $output;
}
endif;
// Adds custom image height X width for small thumbnails
add_image_size( 'wntr-blog-posts-list', 1220, 550, true );
add_image_size( 'wntr-small-thumb', 80, 80, true );
//Create HTML list of nav menu items and allow HTML tags.
class Description_Walker extends Walker_Nav_Menu { 
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$classes = empty ( $item->classes ) ? array () : (array) $item->classes;	 
		$class_names = join(' ', apply_filters(	'nav_menu_css_class', array_filter( $classes ), $item ) );	 
		! empty ( $class_names ) and $class_names = ' class="'. esc_attr( $class_names ) . '"';
		// Build default menu items
		$output .= "<li id='menu-item-$item->ID' $class_names>";
		$attributes = '';	 
		! empty( $item->attr_title )
		and $attributes .= ' title="' . esc_attr( $item->attr_title ) .'"';
		! empty( $item->target )
		and $attributes .= ' target="' . esc_attr( $item->target ) .'"';
		! empty( $item->xfn )
		and $attributes .= ' rel="' . esc_attr( $item->xfn ) .'"';
		! empty( $item->url )
		and $attributes .= ' href="' . esc_attr( $item->url ) .'"';
		// Build the description (you may need to change the depth to 0, 1, or 2)
		$description = ( ! empty ( $item->description ) and 1 == $depth ) ? '<span class="nav_desc">'. $item->description . '</span>' : '';		 
		$title = apply_filters( 'the_title', $item->title, $item->ID );		 
		$item_output = $args->before . "<a $attributes>" . $args->link_before . $title . '</a> ' . $args->link_after . $description . $args->after;
		// Since $output is called by reference we don't need to return anything.
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args, $id  );
	}
} 
// Allow HTML descriptions in WordPress Menu
if ( ! function_exists( 'wntr_shop_body_classes' ) ) :
function wntr_shop_body_classes( $classes ) {

	 $sidebar_class = '';
	  global $wp_query;  
	  if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	  if(is_shop() || is_archive()):
	    $page_id = wc_get_page_id('shop');
	  else:
	    $page_id = $wp_query->get_queried_object_id();
	  endif;
	  }else{
	    $page_id = $wp_query->get_queried_object_id();
	  }
	  $wntr_sidebar_position = get_post_meta($page_id, 'wntr_sidebar_position', true);
	 
	  if(empty($wntr_sidebar_position))
	    $wntr_sidebar_position = 'shop-left-sidebar';
	  if($wntr_sidebar_position == "left"):
	    $classes[] = "shop-left-sidebar";
	  elseif($wntr_sidebar_position == "right"):
	    $classes[] = "shop-right-sidebar";
	  elseif($wntr_sidebar_position == "disabled"):
	    $classes[] = "shop-full-width";
	  endif;
	
if (get_option('wntr_show_topbanner') == 'yes') :
	$classes[] = 'topbar';
	else:
	$classes[] = 'no-topbar';
endif;
return $classes;
if (get_option('wntr_show_topbanner_text') == 'yes') :
	$classes[] = 'topbar';
	else:
	$classes[] = 'no-topbar';
endif;
return $classes;
}
endif;
add_filter( 'body_class', 'wntr_shop_body_classes' );
function wntr_is_blog () {
	global  $post;
	$posttype = get_post_type($post );
	return ( ((is_archive()) || (is_author()) ||  (is_home()) ||  (is_tag())) && ( $posttype == 'post')  ) ? true : false ;
}
/* To display Wishlist in product block */
if ( in_array( 'yith-woocommerce-wishlist/init.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ):
if( ! function_exists( 'wntr_add_to_wishlist_in_product' ) ){
    function wntr_add_to_wishlist_in_product(){
        echo do_shortcode( "[yith_wcwl_add_to_wishlist]" );
    }
}
add_action( 'woocommerce_after_shop_loop_item', 'wntr_add_to_wishlist_in_product', 11 );
endif;
/* compare product block */
if ( in_array( 'yith-woocommerce-compare/init.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ):
if( ! function_exists( 'wntr_add_to_compare_in_product' ) ){
    function wntr_add_to_compare_in_product(){
        echo do_shortcode( "[yith_compare_button]" );
    }
}
add_action( 'woocommerce_after_shop_loop_item', 'wntr_add_to_compare_in_product', 11 );
endif;
/* Move the price div */
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_price', 5 );
function wntr_product_navigation()
{		
		global $post , $previous ,$next;
		$current_url = get_permalink( $post->ID );
		$next_text = '';
		$previous_text = '';		
		
		// Get the previous and next product links
		$previous_link = get_permalink(get_adjacent_post(false,'',false)); 
		$next_link = get_permalink(get_adjacent_post(false,'',true));
		
		// Create the two links provided the product exists
		if ( $next_link != $current_url ) {
				$next = "<a href='" . esc_url($next_link) . "'>" . $next_text . "</a>";
			}
			if ( $previous_link != $current_url ) {
				$previous = "<a href='" .esc_url($previous_link) . "'>" . $previous_text . "</a>";
		}
		
		// Create the two links provided the product exists
			if ( $next_link != $current_url ) {
				$next_text = get_adjacent_post(false,'',true)->post_title;
				$next = "<a href='" .esc_url( $next_link ). "'>" . $next_text . "</a>";
			} 
			if ( $previous_link != $current_url ) {
				$previous_text = get_adjacent_post(false,'',false)->post_title;
				$previous = "<a href='" . esc_url($previous_link) . "'>" . $previous_text . "</a>";
			}
			
		// Create HTML Output
		$output  = '<div class="wntr_product_nav_buttons">'; 
		if ( $previous != '' )
			$output .= '<span class="previous"> ' . $previous . '</span>';
		if ( $next != '' )
			$output .= '<span class="next">' . $next .'</span>';
		$output .= '</div>';
		
		// Display the final output
		echo wp_kses_post($output);
}
add_action( 'woocommerce_single_product_summary', 'wntr_product_navigation', 5 );
/*	This function is used to convert hex color into rgb or rgba */
function wntr_hex_to_rgba($color, $opacity = false) {
 
	$default = 'rgb(0,0,0)';
 		//Return default if no color provided
		if(empty($color))
          return $default; 
 		//Sanitize $color if "#" is provided 
        if ($color[0] == '#' ) {
        	$color = substr( $color, 1 );
        } 
        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
                return $default;
        } 
        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);
        //Check if opacity is set(rgba or rgb)
        if($opacity){
        	if(abs($opacity) > 1)
        		$opacity = 1.0;
        	$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
        	$output = 'rgb('.implode(",",$rgb).')';
        } 
        //Return rgb(a) color string
        return $output;
}
// Display the additional product images
function wntr_second_product_thumbnail() {
	global $product, $woocommerce,$id;
	$attachment_ids = $product->get_gallery_image_ids();
	$id =	get_post_thumbnail_id( $product->get_id() );
		if ( count($attachment_ids) > 0 ) {
			$secondary_image_id = $attachment_ids['0'];		
			echo wp_get_attachment_image( $secondary_image_id, 'shop_catalog', '', $attr = array( 'class' => 'secondary-image attachment-shop-catalog' ) );
		}
		else{				
			echo wp_get_attachment_image( $id, 'shop_catalog', '', $attr = array( 'class' => 'secondary-image attachment-shop-catalog' ) );		
		}
	
}
add_action( 'woocommerce_before_shop_loop_item_title', 'wntr_second_product_thumbnail');
/* for escaping i.e wp_kses( __()); the html element update to WP 4.3.1 */
function wntr_allowed_html() {
	 $wntr_allowed_html = array(
	'span' => array(
	 'class' => array(),
	 'style' => array(),
	),
	'div' => array(
	 'class' => array(),
	 'style' => array(),
	),
	'a' => array(
	 'href' => array(),
	),
	'i' => array(
	 'class' => array(),
	),
	);
return  $wntr_allowed_html;
}
/* Transfer the php data to custom js */
function wntr_load_more(){
	// Register the script
	wp_enqueue_script( 'phpvariable', get_template_directory_uri() . '/js/winter/webiloadmore.js', array(), '', false);	
	// Localize the script with new data
	$translation_array = array(
		'wntr_loadmore' => get_option( 'wntr_loadmore' ),
		'wntr_pagination' => get_option( 'wntr_pagination' ),
		'wntr_nomore' =>  get_option( 'wntr_nomore' )
	);
	wp_localize_script( 'phpvariable', 'php_var', $translation_array );
	// Enqueued script with localized data.
	wp_enqueue_script( 'phpvariable' );
}
add_action( 'wp_enqueue_scripts', 'wntr_load_more' );
/* Function to show cart header cart dropdown in all pages */
function wntr_always_show_cart() {
    return false;
}
add_filter( 'woocommerce_widget_cart_is_hidden', 'wntr_always_show_cart', 40, 0 );
/* advanced search */
if ( ! function_exists( 'wntr_advanced_search_query' ) ) :
function wntr_advanced_search_query($query) {
    if($query->is_search()) {
        	if (isset($_GET['product_cat']) && !empty($_GET['product_cat'])) {
					$query->set('tax_query', array(array(
						'taxonomy' => 'product_cat',
						'field' => 'slug',
						'terms' => array($_GET['product_cat']) )
				));
			}   
		}
        return $query;
   }
  endif;
add_action('pre_get_posts', 'wntr_advanced_search_query', 1027);
/*  Out of Stock */
if ( ! function_exists( 'wntr_out_of_stock' ) ) :
function wntr_out_of_stock() {
 global $product;
 	if ( !$product->is_in_stock() ) {
        echo '<div class="soldout_wrapper"><span class="soldout">'.esc_html__('SOLD OUT','Evessi').'</span></div>';
    }
}
endif;
add_action('woocommerce_before_shop_loop_item_title', 'wntr_out_of_stock');
//dequeue css from plugins
add_action('wp_print_styles', 'wntr_dequeue_css_from_plugins', 100);
function wntr_dequeue_css_from_plugins()  {
wp_dequeue_style('newsletter');
}	
/******* Zoom Gallary**********/
add_action( 'after_setup_theme', 'wntr_gallery_setup' );
function wntr_gallery_setup() {
   add_theme_support( 'wc-product-gallery-zoom' );
   add_theme_support( 'wc-product-gallery-lightbox' );
   add_theme_support( 'wc-product-gallery-slider' );
}
//Percentage sale badge
if (!function_exists('wntr_sale_percentage')) {  
function wntr_sale_percentage() {
global $product; 
$max_percentage = 0;
if ( $product->is_on_sale() ) { 
if ( $product->is_type( 'simple' ) ) {
 	 $max_percentage = ( ( $product->get_regular_price() - $product->get_sale_price() ) / $product->get_regular_price() ) * 100;
} else {
$percentage = 0;
foreach ( $product->get_children() as $child_id ) {
    $variation = wc_get_product( $child_id );
    $price = $variation->get_regular_price();
    $sale = $variation->get_sale_price();
    if ( $price != 0 && ! empty( $sale ) ) $percentage = ( $price - $sale ) / $price * 100;
    if ( $percentage > $max_percentage ) {
        $max_percentage = $percentage;
    }
} 
} 
echo "<span class='onsale'>-" . round($max_percentage) . "%</span>";
} 
}
}
add_action( 'woocommerce_before_shop_loop_item_title', 'wntr_sale_percentage',10 ); 
add_action( 'woocommerce_product_thumbnails', 'wntr_sale_percentage', 10 );  // Single Product page
//Remove Sales Flash 
add_filter('woocommerce_sale_flash', 'woo_custom_hide_sales_flash');
function woo_custom_hide_sales_flash()
{ return false;}
// Woocommerce rating stars always
add_filter('woocommerce_product_get_rating_html', 'wntr_get_rating_html', 10, 2);
function wntr_get_rating_html($rating_html, $rating) {
  	if ( $rating > 0 ) {
    	$title = sprintf( __( 'Rated %s out of 5', 'Evessi' ), $rating );
  	} else {
    	$title = 'Not yet rated';
    	$rating = 0;
  	}
  	$rating_html  = '<div class="star-rating" title="' . $title . '">';
  	$rating_html .= '<span style="width:' . ( ( $rating / 5 ) * 100 ) . '%"><strong class="rating">' . $rating . '</strong> ' . esc_attr__( 'out of 5', 'Evessi' ) . '</span>';
  	$rating_html .= '</div>';
  	return $rating_html;
}
/* remove type attr*/
add_filter('wp_enqueue_style', 'wntr_remove_type_attr', 10, 2);
add_filter('wp_enqueue_script', 'wntr_remove_type_attr', 10, 2);
function wntr_remove_type_attr($tag, $handle) {
    return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
}
// display post view
function wntr_getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 view";
    }
    return ''.$count.' views';
}
function wntr_setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

// Remove cross-sells at cart
 
remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );


add_action( "customize_register", "wntr_theme_customize_register" );
function wntr_theme_customize_register( $wp_customize ) {

 //=============================================================
 // Remove header image and widgets option from theme customizer
 //=============================================================
 $wp_customize->remove_control("header_image");
 $wp_customize->remove_panel("widgets");
}
