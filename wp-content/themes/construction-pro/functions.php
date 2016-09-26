<?php
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version		1.0.0
 * 
 * Main Theme Functions File
 * Created by CMSMasters
 * 
 */


// Current Theme Constants
if (!defined('CMSMASTERS_SHORTNAME')) {
	define('CMSMASTERS_SHORTNAME', 'construction-pro');
}

if (!defined('CMSMASTERS_FULLNAME')) {
	define('CMSMASTERS_FULLNAME', 'Construction PRO');
}



/*** START EDIT THEME PARAMETERS HERE ***/

// Theme Settings System Fonts List
if (!function_exists('construction_pro_system_fonts_list')) {
	function construction_pro_system_fonts_list() {
		$fonts = array( 
			"Arial, Helvetica, 'Nimbus Sans L', sans-serif" => 'Arial', 
			"Calibri, 'AppleGothic', 'MgOpen Modata', sans-serif" => 'Calibri', 
			"'Trebuchet MS', Helvetica, Garuda, sans-serif" => 'Trebuchet MS', 
			"'Comic Sans MS', Monaco, 'TSCu_Comic', cursive" => 'Comic Sans MS', 
			"Georgia, Times, 'Century Schoolbook L', serif" => 'Georgia', 
			"Verdana, Geneva, 'DejaVu Sans', sans-serif" => 'Verdana', 
			"Tahoma, Geneva, Kalimati, sans-serif" => 'Tahoma', 
			"'Lucida Sans Unicode', 'Lucida Grande', Garuda, sans-serif" => 'Lucida Sans', 
			"'Times New Roman', Times, 'Nimbus Roman No9 L', serif" => 'Times New Roman', 
			"'Courier New', Courier, 'Nimbus Mono L', monospace" => 'Courier New', 
		);
		
		
		return $fonts;
	}
}



// Theme Settings Google Fonts List
if (!function_exists('construction_pro_get_google_fonts_list')) {
	function construction_pro_get_google_fonts_list() {
		$fonts = array( 
			'' => esc_html__('None', 'construction-pro'), 
			'Roboto:300,300italic,400,400italic,500,500italic,700,700italic' => 'Roboto', 
			'Roboto+Condensed:400,400italic,700,700italic' => 'Roboto Condensed', 
			'Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' => 'Open Sans', 
			'Open+Sans+Condensed:300,300italic,700' => 'Open Sans Condensed', 
			'Droid+Sans:400,700' => 'Droid Sans', 
			'Droid+Serif:400,400italic,700,700italic' => 'Droid Serif', 
			'PT+Sans:400,400italic,700,700italic' => 'PT Sans', 
			'PT+Sans+Caption:400,700' => 'PT Sans Caption', 
			'PT+Sans+Narrow:400,700' => 'PT Sans Narrow', 
			'PT+Serif:400,400italic,700,700italic' => 'PT Serif', 
			'Ubuntu:400,400italic,700,700italic' => 'Ubuntu', 
			'Ubuntu+Condensed' => 'Ubuntu Condensed', 
			'Headland+One' => 'Headland One', 
			'Source+Sans+Pro:300,300italic,400,400italic,700,700italic' => 'Source Sans Pro', 
			'Lato:400,400italic,700,700italic' => 'Lato', 
			'Cuprum:400,400italic,700,700italic' => 'Cuprum', 
			'Oswald:300,400,700' => 'Oswald', 
			'Yanone+Kaffeesatz:300,400,700' => 'Yanone Kaffeesatz', 
			'Lobster' => 'Lobster', 
			'Lobster+Two:400,400italic,700,700italic' => 'Lobster Two', 
			'Questrial' => 'Questrial', 
			'Raleway:300,400,500,600,700' => 'Raleway', 
			'Dosis:300,400,500,700' => 'Dosis', 
			'Cutive+Mono' => 'Cutive Mono', 
			'Quicksand:300,400,700' => 'Quicksand', 
			'Montserrat:400,700' => 'Montserrat', 
			'Cookie' => 'Cookie', 
		);
		
		
		return $fonts;
	}
}



// Theme Settings Text Transforms List
if (!function_exists('construction_pro_text_transform_list')) {
	function construction_pro_text_transform_list() {
		$list = array( 
			'none' => 'none', 
			'uppercase' => 'uppercase', 
			'lowercase' => 'lowercase', 
			'capitalize' => 'capitalize', 
		);
		
		
		return $list;
	}
}



// Theme Settings Text Decorations List
if (!function_exists('construction_pro_text_decoration_list')) {
	function construction_pro_text_decoration_list() {
		$list = array( 
			'none' => 'none', 
			'underline' => 'underline', 
			'overline' => 'overline', 
			'line-through' => 'line-through', 
		);
		
		
		return $list;
	}
}



// Theme Settings Custom Color Schemes
if (!function_exists('construction_pro_custom_color_schemes_list')) {
	function construction_pro_custom_color_schemes_list() {
		$list = array( 
			'first' => esc_html__('Custom 1', 'construction-pro'), 
			'second' => esc_html__('Custom 2', 'construction-pro'), 
			'third' => esc_html__('Custom 3', 'construction-pro')
		);
		
		
		return $list;
	}
}

/*** STOP EDIT THEME PARAMETERS HERE ***/



// Theme Plugin Support Constants
if (!defined('CMSMASTERS_WOOCOMMERCE') && class_exists('woocommerce')) {
	define('CMSMASTERS_WOOCOMMERCE', true);
} elseif (!defined('CMSMASTERS_WOOCOMMERCE')) {
	define('CMSMASTERS_WOOCOMMERCE', false);
}

if (!defined('CMSMASTERS_PAYPALDONATIONS') && class_exists('PayPalDonations')) {
	define('CMSMASTERS_PAYPALDONATIONS', true);
} elseif (!defined('CMSMASTERS_PAYPALDONATIONS')) {
	define('CMSMASTERS_PAYPALDONATIONS', false);
}

if (!defined('CMSMASTERS_DONATIONS') && class_exists('Cmsmasters_Donations')) {
	define('CMSMASTERS_DONATIONS', false);
} elseif (!defined('CMSMASTERS_DONATIONS')) {
	define('CMSMASTERS_DONATIONS', false);
}

if (!defined('CMSMASTERS_TIMETABLE') && function_exists('timetable_events_init')) {
	define('CMSMASTERS_TIMETABLE', false);
} elseif (!defined('CMSMASTERS_TIMETABLE')) {
	define('CMSMASTERS_TIMETABLE', false);
}

// Theme Colored Categories Constant
if (!defined('CMSMASTERS_COLORED_CATEGORIES')) {
	define('CMSMASTERS_COLORED_CATEGORIES', true);
}

// Theme Projects Compatible
if (!defined('CMSMASTERS_PROJECT_COMPATIBLE')) {
	define('CMSMASTERS_PROJECT_COMPATIBLE', true);
}

// Theme Profiles Compatible
if (!defined('CMSMASTERS_PROFILE_COMPATIBLE')) {
	define('CMSMASTERS_PROFILE_COMPATIBLE', true);
}


// Theme Image Thumbnails Size
if (!function_exists('construction_pro_get_image_thumbnail_list')) {
	function construction_pro_get_image_thumbnail_list() {
		$list = array( 
			'cmsmasters-small-thumb' => array( 
				'width' => 		50, 
				'height' => 	50, 
				'crop' => 		true 
			), 
			'cmsmasters-square-thumb' => array( 
				'width' => 		300, 
				'height' => 	300, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Square', 'construction-pro') 
			), 
			'cmsmasters-blog-masonry-thumb' => array( 
				'width' => 		580, 
				'height' => 	400, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Masonry Blog', 'construction-pro') 
			), 
			'cmsmasters-project-thumb' => array( 
				'width' => 		580, 
				'height' => 	350, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Project', 'construction-pro') 
			), 
			'cmsmasters-project-masonry-thumb' => array( 
				'width' => 		580, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry Project', 'construction-pro') 
			), 
			'post-thumbnail' => array( 
				'width' => 		860, 
				'height' => 	390, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Featured', 'construction-pro') 
			), 
			'cmsmasters-masonry-thumb' => array( 
				'width' => 		860, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry', 'construction-pro') 
			), 
			'cmsmasters-full-thumb' => array( 
				'width' => 		1160, 
				'height' => 	750, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Full', 'construction-pro') 
			), 
			'cmsmasters-project-full-thumb' => array( 
				'width' => 		1160, 
				'height' => 	705, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Project Full', 'construction-pro') 
			), 
			'cmsmasters-full-masonry-thumb' => array( 
				'width' => 		1160, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry Full', 'construction-pro') 
			) 
		);
		
		
		if (CMSMASTERS_WOOCOMMERCE) {
			$list['cmsmasters-woo-thumb'] = array( 
				'width' => 		400, 
				'height' => 	400, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Woocommerce', 'construction-pro') 
			);
		}
		
		
		return $list;
	}
}




// Theme Settings All Color Schemes List
if (!function_exists('construction_pro_all_color_schemes_list')) {
	function construction_pro_all_color_schemes_list() {
		$list = array( 
			'default' => 		esc_html__('Default', 'construction-pro'), 
			'header' => 		esc_html__('Header', 'construction-pro'), 
			'header_top' => 	esc_html__('Header Top', 'construction-pro'), 
			'header_bottom' => 	esc_html__('Header Bottom', 'construction-pro'), 
			'footer' => 		esc_html__('Footer', 'construction-pro') 
		);
		
		
		$out = array_merge($list, construction_pro_custom_color_schemes_list());
		
		
		return $out;
	}
}



// Theme Settings Color Schemes Default Colors
if (!function_exists('construction_pro_color_schemes_defaults')) {
	function construction_pro_color_schemes_defaults() {
		$list = array( 
			'default' => array( // content default color scheme
				'color' => 		'#969696', 
				'secondary' => 	'#ce4e45', 
				'link' => 		'#f3c14b', 
				'hover' => 		'#ce4e45', 
				'heading' => 	'#3d3d3d', 
				'bg' => 		'#ffffff', 
				'alternate' => 	'#f9f9f9', 
				'border' => 	'#e9e9e9' 
			), 
			'header' => array( // Header color scheme
				'color' => 				'#aaaaaa', 
				'secondary' => 			'#f3c14b', 
				'link' => 				'#3e3e3e', 
				'hover' => 				'#ce4e45', 
				'subtitle' => 			'#b3b3b3', 
				'bg' => 				'#f9f9f9', 
				'bg_scroll' => 			'#f9f9f9', 
				'hover_bg' => 			'#f9f9f9', 
				'border' => 			'#f3c14b', 
				'dropdown_link' => 		'#ffffff', 
				'dropdown_hover' => 	'#f3c14b', 
				'dropdown_subtitle' => 	'#b3b3b3', 
				'dropdown_bg' => 		'#292929', 
				'dropdown_hover_bg' => 	'#292929', 
				'dropdown_border' => 	'#292929' 
			), 
			'header_top' => array( // Header Top color scheme
				'color' => 				'#f0f0f0', 
				'secondary' => 			'#ce4e45', 
				'link' => 				'#ffffff', 
				'hover' => 				'#3e3e3e', 
				'bg' => 				'#919191', 
				'border' => 			'#aaaaaa', 
				'dropdown_link' => 		'#cfcfcf', 
				'dropdown_hover' => 	'#ffffff', 
				'dropdown_bg' => 		'#292929', 
				'dropdown_border' => 	'#292929' 
			), 
			'header_bottom' => array( // Header Bottom color scheme
				'color' => 				'#ffffff', 
				'secondary' => 			'#ce4e45',  
				'link' => 				'#ffffff', 
				'hover' => 				'#f3c14b', 
				'subtitle' => 			'#9d9d9d', 
				'bg' => 				'#3e3e3e', 
				'bg_scroll' => 			'#3e3e3e', 
				'hover_bg' => 			'#4a4a4a', 
				'border' => 			'#3e3e3e', 
				'dropdown_link' => 		'#ffffff', 
				'dropdown_hover' => 	'#f3c14b', 
				'dropdown_subtitle' => 	'#b3b3b3', 
				'dropdown_bg' => 		'#292929', 
				'dropdown_hover_bg' => 	'#292929', 
				'dropdown_border' => 	'#292929' 
			), 
			'footer' => array( // Footer color scheme
				'color' => 		'#cac9c9', 
				'secondary' => 	'#838282', 
				'link' => 		'#d2d2d2', 
				'hover' => 		'#f3c14b', 
				'heading' => 	'#ffffff', 
				'bg' => 		'#353232', 
				'alternate' => 	'#2f2c2c', 
				'border' => 	'#353232' 
			), 
			'first' => array( // custom color scheme 1
				'color' => 		'#969696', 
				'secondary' => 	'#ce4e45', 
				'link' => 		'#f3c14b', 
				'hover' => 		'#ce4e45', 
				'heading' => 	'#3d3d3d', 
				'bg' => 		'#ffffff', 
				'alternate' => 	'#f9f9f9', 
				'border' => 	'#e9e9e9' 
			), 
			'second' => array( // custom color scheme 2
				'color' => 		'#969696', 
				'secondary' => 	'#ce4e45', 
				'link' => 		'#f3c14b', 
				'hover' => 		'#ce4e45', 
				'heading' => 	'#3d3d3d', 
				'bg' => 		'#ffffff', 
				'alternate' => 	'#f9f9f9', 
				'border' => 	'#e9e9e9' 
			), 
			'third' => array( // custom color scheme 3
				'color' => 		'#969696', 
				'secondary' => 	'#ce4e45', 
				'link' => 		'#f3c14b', 
				'hover' => 		'#ce4e45', 
				'heading' => 	'#3d3d3d', 
				'bg' => 		'#ffffff', 
				'alternate' => 	'#f9f9f9', 
				'border' => 	'#e9e9e9' 
			) 
		);
		
		
		return $list;
	}
}



// CMSMasters Framework Directories Constants
if (!defined('CMSMASTERS_FRAMEWORK')) {
	define('CMSMASTERS_FRAMEWORK', get_template_directory() . '/framework');
}

if (!defined('CMSMASTERS_ADMIN')) {
	define('CMSMASTERS_ADMIN', CMSMASTERS_FRAMEWORK . '/admin');
}

if (!defined('CMSMASTERS_SETTINGS')) {
	define('CMSMASTERS_SETTINGS', CMSMASTERS_ADMIN . '/settings');
}

if (!defined('CMSMASTERS_OPTIONS')) {
	define('CMSMASTERS_OPTIONS', CMSMASTERS_ADMIN . '/options');
}

if (!defined('CMSMASTERS_ADMIN_INC')) {
	define('CMSMASTERS_ADMIN_INC', CMSMASTERS_ADMIN . '/inc');
}

if (!defined('CMSMASTERS_CLASS')) {
	define('CMSMASTERS_CLASS', CMSMASTERS_FRAMEWORK . '/class');
}

if (!defined('CMSMASTERS_FUNCTION')) {
	define('CMSMASTERS_FUNCTION', CMSMASTERS_FRAMEWORK . '/function');
}


if (!defined('CMSMASTERS_COMPOSER')) {
	define('CMSMASTERS_COMPOSER', get_template_directory() . '/cmsmasters-c-c');
}



// Load Framework Parts
require_once(CMSMASTERS_ADMIN_INC . '/config-functions.php');

require_once(CMSMASTERS_SETTINGS . '/cmsmasters-theme-settings.php');

require_once(CMSMASTERS_OPTIONS . '/cmsmasters-theme-options.php');

require_once(CMSMASTERS_ADMIN_INC . '/admin-scripts.php');

require_once(CMSMASTERS_ADMIN_INC . '/plugin-activator.php');

require_once(CMSMASTERS_CLASS . '/likes-posttype.php');

require_once(CMSMASTERS_CLASS . '/twitteroauth.php');

require_once(CMSMASTERS_CLASS . '/widgets.php');

require_once(CMSMASTERS_FUNCTION . '/breadcrumbs.php');

require_once(CMSMASTERS_FUNCTION . '/likes.php');

require_once(CMSMASTERS_FUNCTION . '/pagination.php');

require_once(CMSMASTERS_FUNCTION . '/single-comment.php');

require_once(CMSMASTERS_FUNCTION . '/theme-functions.php');

require_once(CMSMASTERS_FUNCTION . '/theme-fonts.php');

require_once(CMSMASTERS_FUNCTION . '/theme-colors-primary.php');

require_once(CMSMASTERS_FUNCTION . '/theme-colors-secondary.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions-post.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions-project.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions-profile.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions-shortcodes.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions-widgets.php');


// Theme Colored Categories Functions
if (CMSMASTERS_COLORED_CATEGORIES) {
	require_once(CMSMASTERS_FUNCTION . '/theme-colored-categories.php');
}


if (class_exists('Cmsmasters_Content_Composer')) {
	require_once(CMSMASTERS_COMPOSER . '/filters/cmsmasters-c-c-atts-filters.php');
}


// Woocommerce functions
if (CMSMASTERS_WOOCOMMERCE) {
	require_once(get_template_directory() . '/woocommerce/cmsmasters-woo-functions.php');
}



// Load Theme Local File
if (!function_exists('construction_pro_load_theme_textdomain')) {
	function construction_pro_load_theme_textdomain() {
		load_theme_textdomain('construction-pro', CMSMASTERS_FRAMEWORK . '/languages');
	}
}

// Load Theme Local File Action
if (!has_action('after_setup_theme', 'construction_pro_load_theme_textdomain')) {
	add_action('after_setup_theme', 'construction_pro_load_theme_textdomain');
}



// Framework Activation & Data Import
if (!function_exists('construction_pro_theme_activation')) {
	function construction_pro_theme_activation() {
		if (get_option('cmsmasters_active_theme') != CMSMASTERS_SHORTNAME) {
			add_option('cmsmasters_active_theme', CMSMASTERS_SHORTNAME, '', 'yes');
			
			
			construction_pro_add_global_options();
			
			
			construction_pro_regenerate_styles();
			
			
			construction_pro_add_global_icons();
			
			
			wp_redirect(esc_url(admin_url('admin.php?page=cmsmasters-settings&upgraded=true')));
		}
	}
}

add_action('after_switch_theme', 'construction_pro_theme_activation');



// Framework Deactivation
if (!function_exists('construction_pro_theme_deactivation')) {
	function construction_pro_theme_deactivation() {
		delete_option('cmsmasters_active_theme');
	}
}

// Framework Deactivation Action
if (!has_action('switch_theme', 'construction_pro_theme_deactivation')) {
	add_action('switch_theme', 'construction_pro_theme_deactivation');
}


// Woocommerce Custom Placeholder

add_filter( 'woocommerce_placeholder_img_src', 'construction_pro_custom_woocommerce_placeholder', 10 );

function construction_pro_custom_woocommerce_placeholder( $image_url ) {
	$image_url = get_template_directory_uri() . '/img/placeholder_wc.png';
	return $image_url;
}


function construction_pro_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
}


add_filter( 'comment_form_fields', 'construction_pro_comment_field_to_bottom' );


/**
 * Return url of post
 */
function get_url_of_content_by_category_id($category_id) {
	$permalink = "#";
	$arg = array(
		'category' => (int) $category_id,
		'numberposts' => 1,
	);

	if ($posts = get_posts($arg)) {
		foreach ($posts as $post) {
			$permalink = the_permalink($post);
		}
		wp_reset_postdata();
	}

	return $permalink;
}