<?php
/**
 * Pixeltemplate
 * @copyright  Copyright (c) 2010 Pixeltemplate. (http://www.pixeltemplate.com)
 * @license    http://www.pixeltemplate.com/license/
 */
?>
<?php  // Reference:  http://codex.wordpress.org/Widgets_API
class wtAdvanceSearch extends WP_Widget
{
    function  __construct(){
		$widget_settings = array('description' => 'Advanced Search Widget', 'classname' => 'widgets-advancedsearch');
		parent::__construct(false,$name='WT - Advance Search Widget',$widget_settings);
    }
    function widget($args, $instance){
		extract($args);
		$title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title']);
			echo wp_kses_post($before_widget);
			if(!empty($title)) :		
			echo wp_kses_post($before_title);			
		endif;
		if($title)		
		echo wp_kses_post($title);	
		if(!empty($title)) :			
			echo wp_kses_post($after_title);				
		endif;
		?>
		<form method="get" class="woocommerce-product-search" action="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>">
			<div class="product-search-widget">
			    <select class="orderby" name="product_cat">
				<?php  	
				
							$taxonomy     = 'product_cat';
							  $orderby      = 'name';  
							  $show_count   = 0;      // 1 for yes, 0 for no
							  $pad_counts   = 0;      // 1 for yes, 0 for no
							  $hierarchical = 1;      // 1 for yes, 0 for no  
							  $title        = '';  
							  $empty        = 0;	
					
							 $args = array(
								 'taxonomy'     => $taxonomy,
								 'orderby'      => $orderby,
								 'show_count'   => $show_count,
								 'pad_counts'   => $pad_counts,
								 'hierarchical' => $hierarchical,
								 'title_li'     => $title,
								 'hide_empty'   => $empty
						  );
							$all_categories = get_categories( $args ); ?>
								<option value="<?php echo esc_attr_e( '', 'Evessi' );?>" selected="selected"><?php echo esc_attr_e( 'All Categories', 'Evessi' ); ?></option>
						<?php foreach ($all_categories as $cat) {   ?>
								<option value="<?php echo esc_attr($cat->slug); ?>" <?php if(isset($_GET['product_cat']) && $_GET['product_cat'] == $cat->slug){ echo esc_attr("selected='selected'");  } ?>><?php echo esc_html($cat->name);?></option>
						<?php } ?>
				</select>    
				<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search Products&hellip;', 'placeholder', 'Evessi' ); ?>" value="<?php echo esc_attr(get_search_query()); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'Evessi' ); ?>" />
				<input type="hidden" name="post_type" value="product" />
				</div>
				<input type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'Evessi' ); ?>" />
			</form>
	<?php echo wp_kses_post($after_widget);
	}
	function update($new_instance, $old_instance){
		$instance = $old_instance;			
		$instance['title'] = strip_tags($new_instance['title']);
		return $instance;
	}
    function form($instance){
		$instance = wp_parse_args( (array) $instance, array(
		'title'=>'Product Search by Category',
		 ) );			
		$title = esc_attr($instance['title']);
		?>
			<p><label for="<?php echo esc_attr($this->get_field_id('title'));?>"><?php esc_html_e('Title:', 'Evessi'); ?></label><input class="widefat" id="<?php echo esc_attr($this->get_field_id('title'));?>" name="<?php echo esc_attr($this->get_field_name('title'));?>" type="text" value="<?php echo esc_attr($title);?>" /></p>
	<?php }
}
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) :
function wtadvancesearch_register_widgets()
{
    global $wp_widget_factory;
    $wp_widget_factory->register('wtAdvanceSearch');
}
add_action('widgets_init', 'wtadvancesearch_register_widgets');
endif;
// end ServicesWidget
?>
