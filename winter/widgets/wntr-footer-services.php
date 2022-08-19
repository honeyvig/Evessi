<?php  // Reference:  http://codex.wordpress.org/Widgets_API
class FooterServiceWidget extends WP_Widget
{
    function __construct(){
		$widget_settings = array('description' => 'Footer Services Widget', 'classname' => 'widgets-footerservices');
		parent::__construct(false,$name='WT - Footer Services Widget',$widget_settings);
    }
    function widget($args, $instance){
		extract($args);
		$title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title']);
		$address = empty($instance['address']) ? '' : $instance['address'];
		$email_title = empty($instance['email_title']) ? '' : $instance['email_title'];
		$linkURL = empty($instance['linkURL']) ? '' : $instance['linkURL'];
	    $window_target = isset($instance['window_target']) ? $instance['window_target'] : false;
		$ph_no = empty($instance['ph_no']) ? '' : $instance['ph_no'];
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
		<ul class="toggle-block">
			<li>
				<div class="contact_wrapper">

					<div class="address">
						<div class="address_content">						
							<?php if(!empty($address)) : ?>
								<div class="contact_address"><?php echo esc_html($address); ?></div>
							<?php endif; ?>	
						</div>	
					</div>
					<?php if(!empty($ph_no)) : ?>
					<div class="phone">							
						<div class="contact_phone"><?php echo esc_html($ph_no); ?></div>
					</div>
					<?php endif; ?>	

										<div class="email">				
						<?php if(!empty($email_title)) : ?>
							<div class="contact_email"><a href="<?php if($linkURL == ""): echo esc_url(home_url( '/' )) ; else:?>
							<?php echo esc_url($linkURL); endif;?>">
							<?php echo esc_attr($email_title);  ?></a>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</li>
		</ul>
		<?php		
		echo balanceTags(wp_kses_post($after_widget));						
	}
    function update($new_instance, $old_instance){
		$instance = $old_instance;		
		$instance['window_target'] = false;
		if (isset($new_instance['window_target'])) $instance['window_target'] = true;
		$instance['title'] =($new_instance['title']);
		$instance['address'] =($new_instance['address']);
		$instance['email_title'] =($new_instance['email_title']);		
		$instance['linkURL'] = strip_tags($new_instance['linkURL']);
		$instance['ph_no'] =($new_instance['ph_no']);
		return $instance;
	}
    function form($instance){
		$instance = wp_parse_args( (array) $instance, array(
		'title'=>'Our Address', 		
		'address'=>'12, Lorem Ipsum Amet, Australiya 395', 
		'email_title'=>'demo@demo.com',
		'linkURL'=>'#',
		'ph_no'=>'Call us : 0123-456-789',
		'window_target'=> true) );	
		$title = esc_attr($instance['title']);
		$address = esc_attr($instance['address']);
		$email_title = esc_attr($instance['email_title']);
		$ph_no = esc_attr($instance['ph_no']);
		$linkURL = esc_attr($instance['linkURL']);
		?>
		<p><label for="<?php echo esc_attr($this->get_field_id('title'));?>"><?php esc_html_e('Title:', 'Evessi'); ?></label><input class="widefat" id="<?php echo esc_attr($this->get_field_id('title'));?>" name="<?php echo esc_attr($this->get_field_name('title'));?>" type="text" value="<?php echo esc_attr($title);?>" /></p>
		<p><label for="<?php echo esc_attr($this->get_field_id('address'));?>"><?php esc_html_e('Address:', 'Evessi'); ?></label><textarea cols="18" rows="3" class="widefat" id="<?php echo esc_attr($this->get_field_id('address'));?>" name="<?php echo esc_attr($this->get_field_name('address'));?>" ><?php echo esc_html($address);?></textarea></p>	
		<p><label for="<?php echo esc_attr($this->get_field_id('email_title'));?>"><?php esc_html_e('E-mail:', 'Evessi'); ?></label><input class="widefat" id="<?php echo esc_attr($this->get_field_id('email_title'));?>" name="<?php echo esc_attr($this->get_field_name('email_title'));?>" type="text" value="<?php echo esc_attr($email_title);?>" /></p>		
		<p><label for="<?php echo esc_attr($this->get_field_id('linkURL'));?>"><?php esc_html_e('Link URL:', 'Evessi'); ?><br /></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL'));?>" type="text" value="<?php echo esc_attr($linkURL);?>" />
		<label>(e.g. mailto:demo@demo.com)</label><br />
		<input class="checkbox" type="checkbox" <?php checked($instance['window_target'], true) ?> id="<?php echo esc_attr($this->get_field_id('window_target')); ?>" name="<?php echo esc_attr($this->get_field_name('window_target')); ?>" /><label for="<?php echo esc_attr($this->get_field_id('window_target')); ?>"><?php esc_html_e('Open Link In New Window', 'Evessi'); ?></label></p>		
		<div style="border-bottom:2px solid #ddd; margin-bottom:10px;">&nbsp;</div>
		<p><label for="<?php echo esc_attr($this->get_field_id('ph_no'));?>"><?php esc_html_e('Phone No:', 'Evessi'); ?></label><input class="widefat" id="<?php echo esc_attr($this->get_field_id('ph_no'));?>" name="<?php echo esc_attr($this->get_field_name('ph_no'));?>" type="text" value="<?php echo esc_attr($ph_no);?>" /></p>	
		<?php
	}
}

function footer_service_register_widgets()
{
    global $wp_widget_factory;
    $wp_widget_factory->register('FooterServiceWidget');
}
add_action('widgets_init', 'footer_service_register_widgets');
// end BlogWidget
?>