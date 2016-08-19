<?php
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version 	1.0.0
 * 
 * Content Composer Attributes Filters
 * Created by CMSMasters
 * 
 */

/* // Sc Name Shortcode Attributes Filter
add_filter('sc_name_atts_filter', 'sc_name_atts');

function sc_name_atts() { // copy default atts from shortcodes.php in plugin folder, paste here and add custom atts
	return array( 
		'attr_name_1' => 				'attr_std_val_1', 
		'attr_name_2' => 				'attr_std_val_2', 
		'attr_name_3' => 				'attr_std_val_3', 
		...
		'custom_attr_name_1' => 		'custom_attr_val_1', 
		'custom_attr_name_2' => 		'custom_attr_val_2', 
		'custom_attr_name_3' => 		'custom_attr_val_3' 
	);
} */


/* Register Admin Panel JS Scripts */
function register_admin_js_scripts() {
	global $pagenow;
	
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('composer-shortcodes-extend', get_template_directory_uri() . '/cmsmasters-c-c/js/cmsmasters-c-c-shortcodes-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.0', true);
		
		wp_localize_script('composer-shortcodes-extend', 'composer_shortcodes_extend', array( 
			'quotes_field_slider_type_title' => 		esc_attr__('Slider Type', 'construction-pro'), 
			'quotes_field_slider_type_descr' => 		esc_attr__('Choose your quotes slider style type', 'construction-pro'), 
			'quotes_field_type_choice_box' => 			esc_attr__('Boxed', 'construction-pro'), 
			'quotes_field_type_choice_center' => 		esc_attr__('Centered', 'construction-pro'), 
			'cmsmasters_blog_field_filter_bg_color' => 		esc_attr__('Filter Background Color', 'construction-pro'), 
			'cmsmasters_portfolio_field_filter_bg_color' => 	esc_attr__('Filter Background Color', 'construction-pro'), 
			'cmsmasters_portfolio_field_rollover_bg_color' => 	esc_attr__('Rollover Background Color', 'construction-pro'), 
			'cmsmasters_posts_slider_field_rollover_bg_color' => 	esc_attr__('Rollover Background Color', 'construction-pro'), 
			'cmsmasters_featured_block_field_bd_color' => 	esc_attr__('Border Color', 'construction-pro'), 
			'cmsmasters_featured_block_field_bd_width' => 	esc_attr__('Border Width', 'construction-pro'), 
		));
	}
}

add_action('admin_enqueue_scripts', 'register_admin_js_scripts');


// Blog Shortcode Attributes Filter
add_filter('cmsmasters_blog_atts_filter', 'cmsmasters_blog_atts');

function cmsmasters_blog_atts() {
	return array( 
		'orderby' => 			'date', 
		'order' => 				'DESC', 
		'count' => 				'12', 
		'categories' => 		'', 
		'layout' => 			'standard', 
		'layout_mode' => 		'', 
		'columns' => 			'', 
		'metadata' => 			'', 
		'filter' => 			'', 
		'filter_bg_color' => 	'', 
		'filter_cats_text' => 	'', 
		'pagination' => 		'pagination', 
		'more_text' => 			'', 
		'classes' => 			'' 
	);
}


// portfolio Shortcode Attributes Filter
add_filter('cmsmasters_portfolio_atts_filter', 'cmsmasters_portfolio_atts');

function cmsmasters_portfolio_atts() {
	return array( 
		'orderby' => 			'date', 
		'order' => 				'DESC', 
		'count' => 				'12', 
		'categories' => 		'', 
		'layout' => 			'grid', 
		'layout_mode' => 		'perfect', 
		'columns' => 			'4', 
		'metadata_grid' => 		'', 
		'metadata_puzzle' => 	'', 
		'gap' => 				'large', 
		'rollover_bg_color' => 	'', 
		'filter' => 			'', 
		'filter_bg_color' => 	'', 
		'filter_cats_text' => 	'', 
		'sorting' => 			'', 
		'sorting_name_text' => 	'', 
		'sorting_date_text' => 	'', 
		'pagination' => 		'pagination', 
		'more_text' => 			'', 
		'classes' => 			'' 
	);
}


// Quotes Shortcode Attributes Filter
add_filter('cmsmasters_quotes_atts_filter', 'cmsmasters_quotes_atts');

function cmsmasters_quotes_atts() {
	return array( 
		'mode' => 				'grid', 
		'type' => 				'boxed', 
		'columns' => 			'2', 
		'speed' => 				'10', 
		'animation' => 			'', 
		'animation_delay' => 	'', 
		'classes' => 			'' 
	);
}


// Posts Slider Attributes Filter
add_filter('cmsmasters_posts_slider_atts_filter', 'cmsmasters_posts_slider_atts');

function cmsmasters_posts_slider_atts() {
	return array( 
		'orderby' => 				'', 
		'order' => 					'', 
		'post_type' => 				'', 
		'blog_categories' => 		'', 
		'portfolio_categories' => 	'', 
		'columns' => 				'', 
		'amount' => 				'', 
		'count' => 					'', 
		'pause' => 					'', 
		'speed' => 					'', 
		'blog_metadata' => 			'', 
		'portfolio_metadata' => 	'', 
		'rollover_bg_color' => 		'', 
		'animation' => 				'', 
		'animation_delay' => 		'', 
		'classes' => 				''
	);
}


// Featured Block Attributes Filter
add_filter('cmsmasters_featured_block_atts_filter', 'cmsmasters_featured_block_atts');

function cmsmasters_featured_block_atts() {
	return array( 
		'text_width' => 		'100', 
		'text_position' => 		'center', 
		'text_padding' => 		'', 
		'text_align' => 		'left', 
		'color_overlay' => 		'', 
		'fb_bg_color' => 		'', 
		'bg_img' => 			'', 
		'bg_position' => 		'', 
		'bg_repeat' => 			'', 
		'bg_attachment' => 		'', 
		'bg_size' => 			'', 
		'top_padding' => 		'', 
		'bottom_padding' => 	'', 
		'border_radius' => 		'', 
		'bd_color' =>	 		'', 
		'bd_width' =>	 		'', 
		'animation' => 			'', 
		'animation_delay' => 	'', 
		'classes' => 			'' 
	);
}


// Clients Attributes Filter
add_filter('cmsmasters_clients_atts_filter', 'cmsmasters_clients_atts');

function cmsmasters_clients_atts() {
	return array( 
		'columns' => 			'5', 
		'layout' => 			'', 
		'height' => 			'180', 
		'autoplay' => 			'', 
		'speed' => 				'1', 
		'arrow_control' => 		'', 
		'animation' => 			'', 
		'animation_delay' => 	'', 
		'classes' => 			'' 
	);
}