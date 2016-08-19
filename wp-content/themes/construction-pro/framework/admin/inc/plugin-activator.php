<?php
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version 	1.0.0
 * 
 * TGM-Plugin-Activation 2.5.2
 * Created by CMSMasters
 * 
 */


locate_template('/framework/class/class-tgm-plugin-activation.php', true, true);


if (!function_exists('construction_pro_register_theme_plugins')) {

function construction_pro_register_theme_plugins() { 
	$plugins = array( 
		array( 
			'name'					=> 'CMSMasters Content Composer', 
			'slug'					=> 'cmsmasters-content-composer', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/cmsmasters-content-composer.zip', 
			'required'				=> true, 
			'version'				=> '1.5.4', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> true 
		), 
		array( 
			'name'					=> 'CMSMasters Mega Menu', 
			'slug'					=> 'cmsmasters-mega-menu', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/cmsmasters-mega-menu.zip', 
			'required'				=> true, 
			'version'				=> '1.2.6', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> true 
		), 
		array( 
			'name'					=> 'CMSMasters Contact Form Builder', 
			'slug'					=> 'cmsmasters-contact-form-builder', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/cmsmasters-contact-form-builder.zip', 
			'required'				=> false, 
			'version'				=> '1.3.5', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> true 
		), 
		array( 
			'name' 					=> 'LayerSlider WP', 
			'slug' 					=> 'LayerSlider', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/LayerSlider.zip', 
			'required'				=> false, 
			'version'				=> '5.6.5', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> 'Revolution Slider', 
			'slug' 					=> 'revslider', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/revslider.zip', 
			'required'				=> false, 
			'version'				=> '5.2.5', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> 'Contact Form 7', 
			'slug' 					=> 'contact-form-7', 
			'required' 				=> false 
		), 
		array( 
			'name' 					=> 'WordPress SEO by Yoast', 
			'slug' 					=> 'wordpress-seo', 
			'required' 				=> false 
		), 
		array( 
			'name' 					=> 'WooCommerce', 
			'slug' 					=> 'woocommerce', 
			'required'				=> false 
		), 
		array( 
			'name' 					=> 'PayPal Donations', 
			'slug' 					=> 'paypal-donations', 
			'required'				=> false 
		) 
	);
	
	
	$config = array( 
		'id' => 				'construction-pro', 
		'default_path' => 		'', 
		'menu' => 				'theme-required-plugins', 
		'parent_slug' => 		'themes.php', 
		'capability' => 		'edit_theme_options', 
		'has_notices' => 		true, 
		'dismissable' => 		true, 
		'dismiss_msg' => 		'', 
		'is_automatic' => 		false, 
		'message' => 			''
	);
	
	
	tgmpa($plugins, $config);
}

}

add_action('tgmpa_register', 'construction_pro_register_theme_plugins');

