<?php
/**
 * Set up the content width value based on the theme's design.
 *
 * @see wntr_content_width()
 *
 * @since Pixeltemplate 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1400;
}
if( ! function_exists( 'wntr_setup' ) ) {
function wntr_setup() {
	/*
	* Makes Pixeltemplate available for translation.
	*
	* Translations can be added to the /languages/ directory.
	* If you're building a theme based on wt, use a find and
	* replace to change '
Evessi' to the name of your theme in all
	* template files.
	*/
	load_theme_textdomain( '
Evessi', get_template_directory() . '/languages' );
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( get_template_directory_uri() . '/fonts/css/font-awesome.css', wntr_fonts_url() ) );
	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );
	/*
	 * Switches default core markup for search form, comment form,
	 * and comments to output valid HTML5.
	 */
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
	/*
	 * This theme supports all available post formats by default.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
	) );
	global $wp_version;
	if ( version_compare( $wp_version, '3.4', '>=' ) ) {
		add_theme_support( 'custom-background' ); 
	}
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary'   => esc_html__( 'WT Header Navigation', 'Evessi' ),
		'account-menu'   => esc_html__( 'WT Header account Links', 'Evessi' ),
		'megamenu'   => esc_html__( 'WT Mega Menu', 'Evessi' ),
		'wishlist'   => esc_html__( 'WT wishlist', 'Evessi' ),
		'footer-menu'   => esc_html__( 'WT Footer Menu Links', 'Evessi' ),
    	));
	/*
	 * This theme uses a custom image size for featured images, displayed on
	 * "standard" posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 604, 270, true );
	// This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );
}
add_action( 'after_setup_theme', 'wntr_setup' );
}
/********************************************************
**************** WINTER CONTENT WIDTH ******************
********************************************************/
if( ! function_exists( 'wntr_content_width' ) ) {
function wntr_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wntr_content_width', 895 );
}
add_action( 'after_setup_theme', 'wntr_content_width', 0 );
}
/**
 * Getter function for Featured Content Plugin.
 *
 * @since Pixeltemplate 1.0
 *
 * @return array An array of WP_Post objects.
 */
if( ! function_exists( 'wntr_get_featured_posts' ) ) {
function wntr_get_featured_posts() {
	/**
	 * Filter the featured posts to return in Pixeltemplate.
	 * @param array|bool $posts Array of featured posts, otherwise false.
	 */
	return apply_filters( 'wntr_get_featured_posts', array() );
}
}
/**
 * A helper conditional function that returns a boolean value.
 * @return bool Whether there are featured posts.
 */
function wntr_has_featured_posts() {
	return ! is_paged() && (bool) wntr_get_featured_posts();
}
/********************************************************
**************** WINTER SIDEBAR ******************
********************************************************/
if( ! function_exists( 'wntr_widgets_init' ) ) {
function wntr_widgets_init() {
	register_sidebar( array(
		'name' => esc_html__( 'Main Sidebar', '
Evessi' ),
		'id' => 'sidebar-1',
		'description' => esc_html__( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', '
Evessi' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	


     register_sidebar( array(
        'name' =>__( 'Shop sidebar', '
Evessi'),
        'id' => 'shop-sidebar',
        'description' => __( 'Appears on the static front page template', '
Evessi' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'wntr_widgets_init' );
}



/********************************************************
**************** WINTER FONT SETTING ******************
********************************************************/
if( ! function_exists( 'wntr_fonts_url' ) ) {
function wntr_fonts_url() {
	$fonts_url = '';
	/* Translators: If there are characters in your language that are not
	 * supported by Source Sans Pro, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$source_sans_pro = _x( 'on', 'Source Sans Pro font: on or off', '
Evessi' );
	/* Translators: If there are characters in your language that are not
	 * supported by Bitter, translate this to 'off'. Do not translate into your
	 * own language.
	 */
	$Roboto = _x( 'on', 'Roboto font: on or off', '
Evessi' );
	if ( 'off' !== $source_sans_pro || 'off' !== $Roboto ) {
		$font_families = array();
		if ( 'off' !== $source_sans_pro )
			$font_families[] = 'Source Sans Pro:300,400,700,300italic,400italic,700italic';
		if ( 'off' !== $Roboto )
			$font_families[] = 'Roboto:300,400,500,700';
		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);
		$fonts_url = esc_url( add_query_arg( $query_args, "//fonts.googleapis.com/css" ));
	}
	return $fonts_url;
}
}
/********************************************************
************ WINTER SCRIPT SETTING ***************
********************************************************/
if( ! function_exists( 'wntr_scripts_styles' ) ) {
function wntr_scripts_styles() {
	// Add Opensans fonts, used in the main stylesheet.
	wp_enqueue_style( 'wntr-fonts', wntr_fonts_url(), array(), null );
	// Add Genericons font, used in the main stylesheet.
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/fonts/css/font-awesome.css', array(), '4.7.0' );
	// Loads our main stylesheet.
	wp_enqueue_style( 'wntr-style', get_stylesheet_uri(), array(), '1.0' );
	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'wntr-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20130402' );
	}
	// Loads JavaScript file with functionality specific to Winter.
	wp_enqueue_script( 'wntr-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '2014-02-01', true );
	// Adds JavaScript for handling the navigation menu hide-and-show behavior.
	wp_enqueue_script( 'wntr-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'wntr_scripts_styles' );
}
/********************************************************
************ WINTER IMAGE ATTACHMENT ***************
********************************************************/
if ( ! function_exists( 'wntr_the_attached_image' ) ) :
/**
 * Print the attached image with a link to the next attached image.
 * @return void
 */
function wntr_the_attached_image() {
	/**
	 * Filter the image attachment size to use.
	 *
	 * @since Pixeltemplate 1.0
	 *
	 * @param array $size {
	 *     @type int The attachment height in pixels.
	 *     @type int The attachment width in pixels.
	 * }
	 */
	$attachment_size     = apply_filters( 'wntr_attachment_size', array( 1400, 1100 ) );
	$next_attachment_url = wp_get_attachment_url();
	$post                = get_post();
	/*
	 * Grab the IDs of all the image attachments in a gallery so we can get the URL
	 * of the next adjacent image in a gallery, or the first image (if we're
	 * looking at the last image in a gallery), or, in a gallery of one, just the
	 * link to that image file.
	 */
	$attachment_ids = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    => -1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID'
	) );
	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}
		// get the URL of the next image attachment...
		if ( $next_id )
			$next_attachment_url = get_attachment_link( $next_id );
		// or get the URL of the first image attachment.
		else
			$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
	}
	printf( '<a href="%1$s" title="%2$s" rel="attachment">%3$s</a>',
		esc_url( $next_attachment_url ),
		the_title_attribute( array( 'echo' => false ) ),
		wp_get_attachment_image( $post->ID, $attachment_size )
	);
}
endif;
/********************************************************
************ WINTER GET URL **********************
********************************************************/
function wntr_get_link_url() {
	$content = get_the_content();
	$has_url = get_url_in_content( $content );
	return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}

if( ! function_exists( 'wpb_move_comment_field_to_bottom' ) ) {
function wpb_move_comment_field_to_bottom( $fields ) {
$comment_field = $fields['comment'];
unset( $fields['comment'] );
$fields['comment'] = $comment_field;
return $fields;
}
 
add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );
}

if( ! function_exists( 'wntr_update_comment_fields' ) ) {
function wntr_update_comment_fields( $fields ) {
	$commenter = wp_get_current_commenter();
	$req       = get_option( 'require_name_email' );
	$label     = $req ? '*' : ' ' . esc_attr__( '(optional)', '
Evessi' );
	$aria_req  = $req ? "aria-required='true'" : '';
	$fields['author'] =
		'<p class="comment-form-author comment-block">
			<input id="author" name="author" type="text" placeholder="' . esc_attr__( "Name*", "
Evessi" ) . '" value="' . esc_attr( $commenter['comment_author'] ) .
		'" size="30" ' . $aria_req . ' />
		</p>';
	$fields['email'] =
		'<p class="comment-form-email comment-block">
			<input id="email" name="email" type="email" placeholder="' . esc_attr__( "E-mail*", "
Evessi" ) . '" value="' . esc_attr( $commenter['comment_author_email'] ) .
		'" size="30" ' . $aria_req . ' />
		</p>';
	$fields['url'] =
		'<p class="comment-form-url comment-block">
			<input id="url" name="url" type="url"  placeholder="' . esc_attr__( "Website", "
Evessi" ) . '" value="' . esc_attr( $commenter['comment_author_url'] ) .
		'" size="30" />
			</p>';
	return $fields;
}
add_filter( 'comment_form_default_fields', 'wntr_update_comment_fields' );
}


/********************************************************
************ Woocommerce related product**************
********************************************************/

function woocommerce_output_related_products(){
	$args = array( 
        'posts_per_page' => 8,  
        'columns' => 4,  
        'orderby' => 'rand' 
 ); 
   	woocommerce_related_products( apply_filters( 'woocommerce_output_related_products_args', $args ) ); 
}
/********************************************************
************ WINTER LIST AUTHOR SETTING**************
********************************************************/
if ( ! function_exists( 'wntr_list_authors' ) ) :
/**
 * Print a list of all site contributors who published at least one post.
 * @return void
 */
function wntr_list_authors() {
	$contributor_ids = get_users( array(
		'fields'  => 'ID',
		'orderby' => 'post_count',
		'order'   => 'DESC',
		'who'     => 'authors',
	) );
	foreach ( $contributor_ids as $contributor_id ) :
		$post_count = count_user_posts( $contributor_id );
		// Move on if user has not published a post (yet).
		if ( ! $post_count ) {
			continue;
		}
	?>
<div class="contributor">
  <div class="contributor-info">
    <div class="contributor-avatar"><?php echo esc_html(get_avatar( $contributor_id, 132 )); ?></div>
    <div class="contributor-summary">
      <h2 class="contributor-name"><?php echo esc_html(get_the_author_meta( 'display_name', $contributor_id )); ?></h2>
      <p class="contributor-bio"> <?php echo esc_attr(get_the_author_meta( 'description', $contributor_id )); ?> </p>
      <a class="contributor-posts-link" href="<?php echo esc_url( get_author_posts_url( $contributor_id ) ); ?>"> <?php printf( _n( '%d Article', '%d Articles', $post_count, '
Evessi' ), $post_count ); ?> </a> </div>
    <!-- .contributor-summary -->
  </div><!-- .contributor-info -->
</div><!-- .contributor -->
<?php
	endforeach;
}
endif;
/**
 * Extend the default WordPress body classes.
 *
 * Adds body classes to denote:
 * 1. Single or multiple authors.
 * 2. Presence of header image.
 * 3. Index views.
 * 4. Full-width content layout.
 * 5. Presence of footer widgets.
 * 6. Single views.
 * 7. Featured content layout.
 *
 * @since Pixeltemplate 1.0
 *
 * @param array $classes A list of existing body class values.
 * @return array The filtered body class list.
 */

if( ! function_exists( 'wntr_body_classes' ) ) {
function wntr_body_classes( $classes ) {
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}
	if ( get_header_image() ) {
		$classes[] = 'header-image';
	} else {
		$classes[] = 'masthead-fixed';
	}
	if ( is_archive() || is_search() || is_home() ) {
		$classes[] = 'list-view';
	}
	if ( ( ! is_active_sidebar( 'sidebar-2' ) )
		|| is_page_template( 'page-templates/full-width.php' )
		|| is_page_template( 'page-templates/contributors.php' )
		|| is_attachment() ) {
	}
	if ( is_singular() && ! is_front_page() ) {
		$classes[] = 'singular';
	}
	if ( is_front_page() && 'slider' == get_theme_mod( 'wntr_Featured_Content_layout' ) ) {
		$classes[] = 'slider';
	} elseif ( is_front_page() ) {
		$classes[] = 'grid';
	}
	return $classes;
}
add_filter( 'body_class', 'wntr_body_classes' );
}
/**
 * Extend the default WordPress post classes.
 *
 * Adds a post class to denote:
 * Non-password protected page with a post thumbnail.
 * @param array $classes A list of existing post class values.
 * @return array The filtered post class list.
 */
function wntr_post_classes( $classes ) {
	if ( ! post_password_required() && has_post_thumbnail() ) {
		$classes[] = 'has-post-thumbnail';
	}
	return $classes;
}
add_filter( 'post_class', 'wntr_post_classes' );
// Custom template tags for this theme.
require_once( trailingslashit( get_template_directory() ). 'inc/template-tags.php' );
// Add Theme Customizer functionality.
require_once( trailingslashit( get_template_directory() ). 'inc/customizer.php' );

function wntr_title_tag() {
   add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'wntr_title_tag' );
/*Add Winter custom function */
require_once( trailingslashit( get_template_directory() ). 'winter/webi-functions.php' );
/*Add Winter theme setting in menu */
require_once( trailingslashit( get_template_directory() ). 'winter/options.php' );
/*Add TGMPA library file */
require  trailingslashit(get_template_directory()).'/winter/wntr-plugins-install.php' ;
add_action( 'admin_menu', 'wntr_theme_setting_menu' );
function wntr_theme_settings_page() {
	$locale_file = get_template_part('winter/admin/theme-setting');
	if (is_readable( $locale_file ))		
		require_once( trailingslashit( get_template_directory() ). 'winter/admin/theme-setting.php' );
}
/* Control Panel Tags Function Includes */
require_once( trailingslashit( get_template_directory() ). 'winter/controlpanel/wntr_control_panel.php' );
require_once( trailingslashit( get_template_directory() ). 'mr-image-resize.php' );
/* Adds woocommerce functions if active */
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) :
	require_once( trailingslashit( get_template_directory() ). 'winter/woocommerce-functions.php' );
endif;
/********************************************************
**************** One Click Import Data ******************
********************************************************/
if ( ! function_exists( 'sampledata_import_files' ) ) :
function sampledata_import_files() {
    return array(
		 array(
            'import_file_name'             => 'Default Demo',
			'local_import_file'            => trailingslashit( get_stylesheet_directory() ) . 'demo-content/default/Evessi.wordpress.xml',
            'local_import_customizer_file' => trailingslashit( get_stylesheet_directory() ) . 'demo-content/default/Evessi_customizer_export.dat',
			'local_import_widget_file'     => trailingslashit( get_stylesheet_directory() ) . 'demo-content/default/Evessi_widgets_settings.wie',
            'import_notice'                => esc_html__( 'Please wait for a few minutes, do not close the window or refresh the page until the data is imported.', 'Evessi' ),
        ),
		);
}
add_filter( 'pt-ocdi/import_files', 'sampledata_import_files' );
endif;
if ( ! function_exists( 'sampledata_after_import' ) ) :
function sampledata_after_import($selected_import) {
        //Set Menu
		$primary = get_term_by('name', 'MainMenu', 'nav_menu');
		$headeraccount_menu = get_term_by('name', 'Header Account Links', 'nav_menu');
		$mega_menu = get_term_by('name', 'Mega Menu', 'nav_menu');
		$wishlist = get_term_by('name', 'wishlist', 'nav_menu');
		$footer_menu = get_term_by('name', 'Foomenu1', 'nav_menu');
		
		set_theme_mod( 'nav_menu_locations' , array( 
		 'primary'   => $primary->term_id,
		 'account-menu'   => $headeraccount_menu->term_id,
		 'megamenu'   => $mega_menu->term_id,
		 'wishlist'   => $wishlist->term_id,
		 'footer-menu'   => $footer_menu->term_id,
		 ) 
        );

		update_option("wntr_show_category_title","yes"); // show category title
		update_option("mc4wp_default_form_id","9233"); // show mailchip 
		
        //Start
            $args_rps_active = array(
			    'show_date' => 1,
			    'count'    => 1,
			    'count'    => 1
			    
			  );
            update_option( 'widget_recent-posts', $args_rps_active,true);
            update_option( 'widget_archives', $args_rps_active,true);
            update_option( 'widget_categories', $args_rps_active,true);
        //END

       //import megamenu
     	if(class_exists('APMM_Class')){
          	$apmega_settings = array(
                    'enabled'=>1,
                     'orientation'=>'horizontal',
                     'trigger_option'=>'onhover',
                     'effect_option'=>'fade',
                     'theme_type'=>'custom_themes',
                     'theme'=>1,
                     'themes_style_manager'=>'custom theme',
					 'custom_themes'=>'default theme'
            );
          	$ap_mega['megamenu'] = $apmega_settings;
            update_option('wpmegabox_settings',$ap_mega,true);
            
        }
		
		//Import Revolution Slider
       if ( class_exists( 'RevSlider' ) ) {
           $slider_array = array(
              get_stylesheet_directory()."/demo-content/default/wntr_homeslider.zip",
              );
 
           $slider = new RevSlider();
        
           foreach($slider_array as $filepath){
             $slider->importSliderFromPost(true,true,$filepath);  
           }
           echo esc_html__( 'Slider processed', '
Evessi' );
      }
	 
	   //Set Front page and blog page
       $page = get_page_by_title( 'Home');
       if ( isset( $page->ID ) ) {
        update_option( 'page_on_front', $page->ID );
        update_option( 'show_on_front', 'page' );
       }
	   $post = get_page_by_title( 'Blog');
       if ( isset( $page->ID ) ) {
        update_option( 'page_for_posts', $post->ID );
        update_option( 'show_on_posts', 'post' );
       }



        $importer = new OCDI_Plugin();
                     
        if(class_exists('Woocommerce')){                        
        // Set Woocommerce Default Pages.
		$woopages = array(
            'woocommerce_shop_page_id' => 'shop',
            'woocommerce_cart_page_id' => 'cart',
            'woocommerce_checkout_page_id' => 'checkout',
            'woocommerce_myaccount_page_id' => 'my account',
            'woocommerce_lost_password_page_id' => 'lost-password',
            'woocommerce_edit_address_page_id' => 'edit-address',
            'woocommerce_view_order_page_id' => 'view-order',
            'woocommerce_change_password_page_id' => 'change-password',
            'woocommerce_logout_page_id' => 'logout',   
            'woocommerce_pay_page_id' => 'pay',
            'woocommerce_thanks_page_id' => 'order-received'
        );
            foreach($woopages as $woo_page_name => $woo_page_title) {
                $woopage = get_page_by_title( $woo_page_title );
                if(isset( $woopage ) && $woopage->ID) {
                    update_option($woo_page_name, $woopage->ID); // Front Page
                }
            }
        }
        
        
        if(class_exists('YITH_WCWL')){
        	// echo '<pre>';print_r($options);die; 
          	 $page_data = array(
                'post_status' 		=> 'publish',
                'post_type' 		=> 'page',
                'post_author' 		=> 1,
                'post_name' 		=> esc_sql( _x( 'wishlist', 'page_slug', '
Evessi' ) ),
                'post_title' 		=> __( 'Wishlist', '
Evessi' ),
                'post_content' 		=> '[yith_wcwl_wishlist]'
            );
            $page_id = wp_insert_post( $page_data );

            update_option( 'yith-wcwl-page-id', $page_id );
            update_option( 'yith_wcwl_wishlist_page_id', $page_id );
        }

        
}
add_action( 'pt-ocdi/after_import', 'sampledata_after_import' );
endif;
function ocdi_change_time_of_single_ajax_call() {
	return 10;
}
add_action( 'pt-ocdi/time_for_one_ajax_call', 'ocdi_change_time_of_single_ajax_call' );
/* remove notice info*/
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

function wntr_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'wntr_mime_types');

add_filter( 'widget_display_callback', 'wpse8170_widget_display_callback', 10, 3 );
function wpse8170_widget_display_callback( $instance, $widget, $args ) {
    $instance['filter'] = false;
    return $instance;
} 


function _s_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', '_s_pingback_header' );


/**
 * Extend Recent Posts Widget 
 *
 * Adds different formatting to the default WordPress Recent Posts Widget
 */

Class Wb_Recent_Posts_Widget extends WP_Widget_Recent_Posts {

        function widget($args, $instance) {

                if ( ! isset( $args['widget_id'] ) ) {
                $args['widget_id'] = $this->id;
            }

            $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : ( 'Recent Posts' );

            /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
            $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

            $number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
            if ( ! $number )
                $number = 5;
            $show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;

            /**
             * Filter the arguments for the Recent Posts widget.
             *
             * @since 3.4.0
             *
             * @see WP_Query::get_posts()
             *
             * @param array $args An array of arguments used to retrieve the recent posts.
             */
            $r = new WP_Query( apply_filters( 'widget_posts_args', array(
                'posts_per_page'      => $number,
                'no_found_rows'       => true,
                'post_status'         => 'publish',
                'ignore_sticky_posts' => true
            ) ) );

            if ($r->have_posts()) :
            ?>
            <?php echo wp_kses_post($args['before_widget']); ?>
            <?php if ( $title ) {
                echo wp_kses_post($args['before_title']) . $title . $args['after_title'];
            } ?>
            <ul>
            <?php while ( $r->have_posts() ) : $r->the_post(); ?>
                <li>
                	<span class="recent-posts-thumbnail"> 
	                <?php 
					 the_post_thumbnail('wntr-small-thumb');
	               	 $postImage = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
					?>
					<?php echo get_the_post_thumbnail( $postImage ); ?>
					</span>
                   
					<span class="recent-post-detail">
                  <a href="<?php the_permalink(); ?>"><?php get_the_title() ? the_title() : the_ID(); ?></a>
                <?php if ( $show_date ) : ?>
                    <span class="post-date"><?php echo get_the_date(); ?></span>
                <?php endif; ?>
                </span>
                </li>
            <?php endwhile; ?>
            </ul>
            <?php echo wp_kses_post($args['after_widget']); ?>
            <?php
            // Reset the global $the_post as this query will have stomped on it
            wp_reset_postdata();

            endif;
        }
}


function wbplugin_register_widgets(){
	global $wp_widget_factory;
	
    $wp_widget_factory->register("Wb_Recent_Posts_Widget");

}
add_action('widgets_init', 'wbplugin_register_widgets');

function wbplugin_remove_widget() {
	global $wp_widget_factory;

	$wp_widget_factory->unregister("WP_Widget_Recent_Posts");
    $wp_widget_factory->unregister("WP_Widget_Meta");
}
add_action('widgets_init', 'wbplugin_remove_widget');


// Hook in
add_filter( 'woocommerce_paypal_express_checkout_button_img_url' , 'custom_override_woocommerce_paypal_express_checkout_button_img_url' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_woocommerce_paypal_express_checkout_button_img_url( $variablen ) {
     $express_checkout_img_url = 'https://www.paypalobjects.com/webstatic/en_US/i/buttons/checkout-logo-large.png'; 
     return $express_checkout_img_url;
}
    
?>