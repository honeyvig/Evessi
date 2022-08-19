<?php
/*
  Plugin Name: Pixeltemplate Custom Widgets
  Plugin URI: http://www.pixeltemplate.com
  Description: Pixeltemplate Default Homepage Slide Show for Pixeltemplate WordPress themes.
  Version: 1.0
  Author: Pixeltemplate
  Author URI: http://www.pixeltemplate.com
  @copyright  Copyright (c) 2010 Pixeltemplate. (http://www.pixeltemplate.com)
  @license    http://www.pixeltemplate.com/license/
 */
?>
<?php 
//  Creating Widget 
// Reference : http://codex.wordpress.org/Widgets_API
/**
 * Register widgetized areas, including two sidebars and four widget-ready columns in the footer.
 *
 * To override wntr_widgets_init() in a child theme, remove the action hook and add your own
 * function tied to the init hook.
 *
 
 * @uses register_sidebar
 */
function wntr_register_sidebars() {

	register_sidebar( array(
		'name' => esc_html__( 'Header Shopping Cart Area', '
Shoesly' ),
		'id' => 'header-widget',
		'description' => esc_html__( 'The Cart on header', '
Shoesly' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s tab_content">', 
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Header currency Widget Area', '
Shoesly' ),
		'id' => 'header-currency',
		'description' => esc_html__( 'The header currency widget area', '
Shoesly' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => ' ',
		'after_title' => ' ',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Header Search Widget Area', '
Shoesly' ),
		'id' => 'header-search',
		'description' => esc_html__( 'The header search widget area', '
Shoesly' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => ' ',
		'after_title' => ' ',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'First Footer Widget Area', '
Shoesly' ),
		'id' => 'first-footer-widget-area',
		'description' => esc_html__( 'First Footer Widget Area', '
Shoesly' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => esc_html__( 'Second Footer Widget Area', '
Shoesly' ),
		'id' => 'second-footer-widget-area',
		'description' => esc_html__( 'Second Footer Widget Area', '
Shoesly' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => esc_html__( 'Third Footer Widget Area', '
Shoesly' ),
		'id' => 'third-footer-widget-area',
		'description' => esc_html__( 'Third Footer Widget Area', '
Shoesly' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => esc_html__( 'Fourth Footer Widget Area', '
Shoesly' ),
		'id' => 'fourth-footer-widget-area',
		'description' => esc_html__( 'Fourth Footer Widget Area', '
Shoesly' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
		
	register_sidebar( array(
		'name' => esc_html__( 'Footer Bottom Widget Area', '
Shoesly' ),
		'id' => 'footer-bottom-widget-area',
		'description' => esc_html__( 'Footer Bottom Widget Area', '
Shoesly' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );


}
/**
 * Register sidebars by running wntr_widgets_init() on the widgets_init hook. 
 */
add_action( 'widgets_init', 'wntr_register_sidebars' );
get_template_part('winter/widgets/wntr-follow-us');
get_template_part('winter/widgets/wntr-footer-aboutus');
get_template_part('winter/widgets/wntr-footer-services');
get_template_part('winter/widgets/wntr-advance-search');
?>