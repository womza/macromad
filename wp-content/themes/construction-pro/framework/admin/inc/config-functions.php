<?php
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version 	1.0.0
 * 
 * Theme and Plugin functions
 * Created by CMSMasters
 * 
 */


// Theme Settings Google Fonts List
if (!function_exists('cmsmasters_google_fonts_list')) {
	function cmsmasters_google_fonts_list() {
		$fonts = construction_pro_get_google_fonts_list();
		
		
		return $fonts;
	}
}



// Theme Settings Font Weights List
if (!function_exists('cmsmasters_font_weight_list')) {
	function cmsmasters_font_weight_list() {
		$list = array( 
			'normal' => 	'normal', 
			'100' => 		'100', 
			'200' => 		'200', 
			'300' => 		'300', 
			'400' => 		'400', 
			'500' => 		'500', 
			'600' => 		'600', 
			'700' => 		'700', 
			'800' => 		'800', 
			'900' => 		'900', 
			'bold' => 		'bold', 
			'bolder' => 	'bolder', 
			'lighter' => 	'lighter', 
		);
		
		
		return $list;
	}
}



// Theme Settings Font Styles List
if (!function_exists('cmsmasters_font_style_list')) {
	function cmsmasters_font_style_list() {
		$list = array( 
			'normal' => 	'normal', 
			'italic' => 	'italic', 
			'oblique' => 	'oblique', 
			'inherit' => 	'inherit', 
		);
		
		
		return $list;
	}
}



// WP Color Picker Palettes
if (!function_exists('cmsmasters_color_picker_palettes')) {
	function cmsmasters_color_picker_palettes() {
		$palettes = array( 
			'#969696', 
			'#f3c14b', 
			'#ce4e45', 
			'#ce4e45', 
			'#3d3d3d', 
			'#ffffff', 
			'#f9f9f9', 
			'#e9e9e9' 
		);
		
		
		return $palettes;
	}
}


// Theme Image Thumbnails Size
if (!function_exists('cmsmasters_image_thumbnail_list')) {
	function cmsmasters_image_thumbnail_list() {
		$list = construction_pro_get_image_thumbnail_list();
		
		
		return $list;
	}
}



// Theme Settings Color Schemes List
if (!function_exists('cmsmasters_color_schemes_list')) {
	function cmsmasters_color_schemes_list() {
		$list = construction_pro_all_color_schemes_list();
		
		
		unset($list['header']);
		
		unset($list['navigation']);
		
		unset($list['header_top']);
		
		unset($list['header_bottom']);
		
		
		$out = array_merge($list, construction_pro_custom_color_schemes_list());
		
		
		return $out;
	}
}

