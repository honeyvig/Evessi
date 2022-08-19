<?php
/**
 * Pixeltemplate
 * @copyright  Copyright (c) 2010 Pixeltemplate. (http://www.pixeltemplate.com)
 * @license    http://www.pixeltemplate.com/license/
 */
?><?php  // Reference:  http://codex.wordpress.org/Widgets_API
class FooterAboutWidget extends WP_Widget
{
    function  __construct(){
		$widget_settings = array('description' => 'Footer About Me Widget', 'classname' => 'widgets-about');
		parent::__construct(false,$name='WT - Footer About Me Widget',$widget_settings);
    }
    function widget($args, $instance){
		extract($args);
		$title = apply_filters('widget_title', empty($instance['title']) ? 'About Me' : $instance['title']);
		$is_template_path = isset($instance['is_template_path']) ? $instance['is_template_path'] : false;
        $window_target = isset($instance['window_target']) ? $instance['window_target'] : false;
		$description = empty($instance['description']) ? '' : $instance['description']; 
		 ?>
				<div class="wntr-about-text">	 
					<div class="wntr-about-description">					
					<?php echo esc_attr($description); ?>
					</div>
				</div>
		<?php
		echo wp_kses_post($after_widget);					
	}
    function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['window_target'] = false;
		$instance['is_template_path'] = false;
		if (isset($new_instance['window_target'])) $instance['window_target'] = true;
		if (isset($new_instance['is_template_path'])) $instance['is_template_path'] = true;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['description'] = strip_tags($new_instance['description']);
		return $instance;
	}
    function form($instance){
		$instance = wp_parse_args( (array) $instance, array(
		'title'=>'About Us', 
		'description' => 'Lorem Ipsum has been the industrys standard my text ever since the 1500s, when annknown printer took a galley of it to matook a galley of ita type specimen book.',
		) );
		$title = esc_attr($instance['title']);
		$description = esc_attr($instance['description']);
		?>
		<p><label for="<?php echo esc_attr($this->get_field_id('description'));?>">Description:</label>
			<textarea cols="18" rows="3" class="widefat" id="<?php echo esc_attr($this->get_field_id('description'));?>" name="<?php echo esc_attr($this->get_field_name('description'));?>" ><?php echo esc_html($description);?></textarea>
		</p>
		<?php
	}
}

function footer_about_register_widgets()
{
    global $wp_widget_factory;
    $wp_widget_factory->register('FooterAboutWidget');
}
add_action('widgets_init', 'footer_about_register_widgets');
// end AboutWidget
?>
