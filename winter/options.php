<?php
/** Adding wt Menu in admin panel. */
function wntr_theme_setting_menu() {	
	add_theme_page( esc_html__('Theme Settings','Evessi'), esc_html__('PT Theme Settings','Evessi'), 'manage_options', 'wntr_theme_settings', 'wntr_theme_settings_page' );		
}
?>