<?php 
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version		1.0.0
 * 
 * Likes Post Type
 * Changed by CMSMasters
 * 
 */


class Construction_pro_Likes {
	public function __construct() { 
		$like_labels = array( 
			'name' => esc_html__('Likes', 'construction-pro'), 
			'singular_name' => esc_html__('Like', 'construction-pro') 
		);
		
		
		$like_args = array( 
			'labels' => $like_labels, 
			'public' => false, 
			'capability_type' => 'post', 
			'hierarchical' => false, 
			'exclude_from_search' => true, 
			'publicly_queryable' => false, 
			'show_ui' => false, 
			'show_in_nav_menus' => false 
		);
		
		
		$reg = 'register_';
		
		$reg_pt = $reg . 'post_type';
		
		
		$reg_pt('cmsmasters_like', $like_args);
	}
}


function construction_pro_likes_init() {
	global $lk;
	
	
	$lk = new Construction_pro_Likes();
}


add_action('init', 'construction_pro_likes_init');

