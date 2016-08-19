<?php 
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version 	1.0.0
 * 
 * Admin Panel Main Functions
 * Created by CMSMasters
 * 
 */


add_action('admin_menu', 'construction_pro_add_menu');
add_action('admin_init', 'construction_pro_register_settings');


define('CMSMASTERS_PAGE_BASENAME', 'cmsmasters-settings');


require_once(CMSMASTERS_SETTINGS . '/inc/cmsmasters-helper-functions.php');
require_once(CMSMASTERS_SETTINGS . '/cmsmasters-theme-settings-general.php');
require_once(CMSMASTERS_SETTINGS . '/cmsmasters-theme-settings-font.php');
require_once(CMSMASTERS_SETTINGS . '/cmsmasters-theme-settings-color.php');
require_once(CMSMASTERS_SETTINGS . '/cmsmasters-theme-settings-element.php');
require_once(CMSMASTERS_SETTINGS . '/cmsmasters-theme-settings-single.php');
require_once(CMSMASTERS_SETTINGS . '/cmsmasters-theme-settings-demo.php');


function construction_pro_get_settings() {
	$output = array();
	
	
	$page = construction_pro_get_admin_page();
	
	$tab = construction_pro_get_the_tab();
	
	
	switch ($page) {
	case CMSMASTERS_PAGE_BASENAME:
		$cmsmasters_option_name = 'cmsmasters_options_' . CMSMASTERS_SHORTNAME;
		$cmsmasters_settings_page_title = esc_html__('Theme General Settings', 'construction-pro');
		$cmsmasters_page_sections = construction_pro_options_general_sections();
		$cmsmasters_page_fields = construction_pro_options_general_fields();
		$cmsmasters_page_tabs = construction_pro_options_general_tabs();
		
		switch ($tab) {
		case 'general':
			$cmsmasters_option_name = $cmsmasters_option_name . '_general';
			
			break;
		case 'bg':
			$cmsmasters_option_name = $cmsmasters_option_name . '_bg';
			
			break;
		case 'header':
			$cmsmasters_option_name = $cmsmasters_option_name . '_header';
			
			break;
		case 'content':
			$cmsmasters_option_name = $cmsmasters_option_name . '_content';
			
			break;
		case 'footer':
			$cmsmasters_option_name = $cmsmasters_option_name . '_footer';
			
			break;
		}
		
		break;
	case CMSMASTERS_PAGE_BASENAME . '-font':
		$cmsmasters_option_name = 'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_font';
		$cmsmasters_settings_page_title = esc_html__('Theme Fonts Settings', 'construction-pro');
		$cmsmasters_page_sections = construction_pro_options_font_sections();
		$cmsmasters_page_fields = construction_pro_options_font_fields();
		$cmsmasters_page_tabs = construction_pro_options_font_tabs();
		
		switch ($tab) {
		case 'content':
			$cmsmasters_option_name = $cmsmasters_option_name . '_content';
			
			break;
		case 'link':
			$cmsmasters_option_name = $cmsmasters_option_name . '_link';
			
			break;
		case 'nav':
			$cmsmasters_option_name = $cmsmasters_option_name . '_nav';
			
			break;
		case 'heading':
			$cmsmasters_option_name = $cmsmasters_option_name . '_heading';
			
			break;
		case 'other':
			$cmsmasters_option_name = $cmsmasters_option_name . '_other';
			
			break;
		}
		
		break;
	case CMSMASTERS_PAGE_BASENAME . '-color':
		$cmsmasters_option_name = 'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_color';
		$cmsmasters_settings_page_title = esc_html__('Theme Color Schemes', 'construction-pro');
		$cmsmasters_page_sections = construction_pro_options_color_sections();
		$cmsmasters_page_fields = construction_pro_options_color_fields();
		$cmsmasters_page_tabs = construction_pro_options_color_tabs();
		
		
		$cmsmasters_option_name = $cmsmasters_option_name . '_' . $tab;
		
		
		break;
	case CMSMASTERS_PAGE_BASENAME . '-element':
		$cmsmasters_option_name = 'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_element';
		$cmsmasters_settings_page_title = esc_html__('Theme Elements Settings', 'construction-pro');	
		$cmsmasters_page_sections = construction_pro_options_element_sections();
		$cmsmasters_page_fields = construction_pro_options_element_fields();
		$cmsmasters_page_tabs = construction_pro_options_element_tabs();
		
		switch ($tab) {
		case 'sidebar':
			$cmsmasters_option_name = $cmsmasters_option_name . '_sidebar';
			
			break;
		case 'icon':
			$cmsmasters_option_name = $cmsmasters_option_name . '_icon';
			
			break;
		case 'lightbox':
			$cmsmasters_option_name = $cmsmasters_option_name . '_lightbox';
			
			break;
		case 'sitemap':
			$cmsmasters_option_name = $cmsmasters_option_name . '_sitemap';
			
			break;
		case 'error':
			$cmsmasters_option_name = $cmsmasters_option_name . '_error';
			
			break;
		case 'code':
			$cmsmasters_option_name = $cmsmasters_option_name . '_code';
			
			break;
		case 'recaptcha':
			$cmsmasters_option_name = $cmsmasters_option_name . '_recaptcha';
			
			break;
		}
		
		break;
	case CMSMASTERS_PAGE_BASENAME . '-single':
		$cmsmasters_option_name = 'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_single';
		$cmsmasters_settings_page_title = esc_html__('Theme Single Posts Settings', 'construction-pro');
		$cmsmasters_page_sections = construction_pro_options_single_sections();
		$cmsmasters_page_fields = construction_pro_options_single_fields();
		$cmsmasters_page_tabs = construction_pro_options_single_tabs();
		
		switch ($tab) {
		case 'post':
			$cmsmasters_option_name = $cmsmasters_option_name . '_post';
			
			break;
		case 'project':
			$cmsmasters_option_name = $cmsmasters_option_name . '_project';
			
			break;
		case 'profile':
			$cmsmasters_option_name = $cmsmasters_option_name . '_profile';
			
			break;
		}
		
		break;
	case CMSMASTERS_PAGE_BASENAME . '-demo':
		$cmsmasters_option_name = 'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_demo';
		$cmsmasters_settings_page_title = esc_html__('Theme Settings Import/Export', 'construction-pro');
		$cmsmasters_page_sections = construction_pro_options_demo_sections();
		$cmsmasters_page_fields = construction_pro_options_demo_fields();
		$cmsmasters_page_tabs = construction_pro_options_demo_tabs();
		
		switch ($tab) {
		case 'import':
			$cmsmasters_option_name = $cmsmasters_option_name . '_import';
			
			break;
		case 'export':
			$cmsmasters_option_name = $cmsmasters_option_name . '_export';
			
			break;
		}
		
		break;
	default:
		$cmsmasters_option_name = '';
		$cmsmasters_settings_page_title = '';
		$cmsmasters_page_tabs = '';
		$cmsmasters_page_sections = '';
		$cmsmasters_page_fields = '';
		
		break;
	}
	
	
	$output['cmsmasters_option_name'] = $cmsmasters_option_name;
	$output['cmsmasters_page_title'] = $cmsmasters_settings_page_title;
	$output['cmsmasters_page_tabs'] = $cmsmasters_page_tabs;
	$output['cmsmasters_page_sections'] = $cmsmasters_page_sections;
	$output['cmsmasters_page_fields'] = $cmsmasters_page_fields;
	
	
	return $output;
}


function construction_pro_create_settings_field($args = array()) {
	$defaults = array( 
		'id' => 		'default_field', 
		'title' => 		esc_html__('Default Field', 'construction-pro'), 
		'desc' => 		esc_html__('This is a default description.', 'construction-pro'), 
		'std' => 		'', 
		'type' => 		'text', 
		'section' => 	'main_section', 
		'choices' => 	array(), 
		'class' => 		'', 
		'min' => 		'', 
		'max' => 		'', 
		'step' => 		'', 
		'frame' => 		'select', 
		'multiple' => 	false 
	);
	
	extract(wp_parse_args($args, $defaults));
	
	$field_args = array( 
		'type' => 		esc_attr($type), 
		'id' => 		esc_attr($id), 
		'desc' => 		$desc, 
		'std' => 		$std, 
		'choices' => 	$choices, 
		'label_for' => 	esc_attr($id), 
		'class' => 		esc_attr($class), 
		'min' => 		esc_attr($min), 
		'max' => 		esc_attr($max), 
		'step' => 		esc_attr($step), 
		'frame' => 		esc_attr($frame), 
		'multiple' => 	esc_attr($multiple) 
	);
	
	add_settings_field( 
		esc_attr($id), 
		esc_html($title), 
		'construction_pro_form_field_fn', 
		__FILE__, 
		$section, 
		$field_args 
	);
}


function construction_pro_register_settings() {
	$settings_output = construction_pro_get_settings();
	
	
	$cmsmasters_option_name = $settings_output['cmsmasters_option_name'];
	
	
	$current_page = (isset($_GET['page'])) ? trim($_GET['page']) : '';
	
	$page_updated = (isset($_GET['settings-updated'])) ? trim($_GET['settings-updated']) : '';
	
	
	register_setting($cmsmasters_option_name, $cmsmasters_option_name, 'construction_pro_validate_options');
	
	
	if (!empty($settings_output['cmsmasters_page_sections'])) {
		foreach ($settings_output['cmsmasters_page_sections'] as $id => $title) {
			add_settings_section($id, $title, 'construction_pro_section_fn', __FILE__);
		}
	}
	
	
	if (!empty($settings_output['cmsmasters_page_fields'])) {
		foreach ($settings_output['cmsmasters_page_fields'] as $option) {
			construction_pro_create_settings_field($option);
		}
	}
	
	
	if (($current_page === 'cmsmasters-settings-color' || $current_page === 'cmsmasters-settings-font') && $page_updated) {
		construction_pro_regenerate_styles();
	}
}


function construction_pro_settings_scripts() {
	wp_enqueue_style('wp-jquery-ui-dialog');
	
	
	wp_enqueue_style('cmsmasters_theme_settings_css', get_template_directory_uri() . '/framework/admin/settings/css/cmsmasters-theme-settings.css', array(), '1.0.0', 'screen');
	
	
	if (is_rtl()) {
		wp_enqueue_style('cmsmasters_theme_settings_css_rtl', get_template_directory_uri() . '/framework/admin/settings/css/cmsmasters-theme-settings-rtl.css', array(), '1.0.0', 'screen');
	}
	
	
	wp_enqueue_script('jquery-ui-sortable');
	
	
	wp_enqueue_script('cmsmasters_theme_settings_js', get_template_directory_uri() . '/framework/admin/settings/js/cmsmasters-theme-settings.js', array('jquery', 'farbtastic'), '1.0.0', true);
	
	wp_localize_script('cmsmasters_theme_settings_js', 'cmsmasters_setting', array( 
		'palettes' => 						implode(',', cmsmasters_color_picker_palettes()), 
		'remove' => 						esc_attr__('Remove', 'construction-pro'), 
		'remove_sidebar' => 				esc_html__('Do you realy want to remove this sidebar?', 'construction-pro'), 
		'find' => 							esc_attr__('Find icons', 'construction-pro'), 
		'remove_icon' => 					esc_html__('Do you realy want to remove this social icon?', 'construction-pro'), 
		'theme_uri' => 						get_template_directory_uri(), 
		'shortname' => 						CMSMASTERS_SHORTNAME, 
		'done' => 							esc_html__('All theme settings were imported successfully.', 'construction-pro'), 
		'fail' => 							esc_html__("Error on page!!!\nPlease reload page and try again.", 'construction-pro'), 
		'nonce_ajax_import_settings' => 	wp_create_nonce('cmsmasters_ajax_import_settings-nonce'), 
		'nonce_ajax_export_settings' => 	wp_create_nonce('cmsmasters_ajax_export_settings-nonce') 
	));
	
	
	wp_enqueue_script('cmsmasters_theme_settings_js_toggle', get_template_directory_uri() . '/framework/admin/settings/js/cmsmasters-theme-settings-toggle.js', array('jquery'), '1.0.0', true);
	
	wp_localize_script('cmsmasters_theme_settings_js_toggle', 'cmsmasters_settings', array( 
		'shortname' => 	CMSMASTERS_SHORTNAME 
	));
	
	
	wp_enqueue_media();
}


function construction_pro_add_menu() {
	$settings_output = construction_pro_get_settings();
	
	
	$add_menu = 'add_menu_';
	
	$add_menu_p = $add_menu . 'page';
	
	
	$add_menu_p( 
		esc_attr__('Theme Settings', 'construction-pro'), 
		esc_attr__('Theme Settings', 'construction-pro'), 
		'manage_options', 
		CMSMASTERS_PAGE_BASENAME, 
		'construction_pro_settings_page_fn', 
		'' 
	);
	
	
	$add_submenu = 'add_submenu_';
	
	$add_submenu_p = $add_submenu . 'page';
	
	
	$cmsmasters_settings_general = $add_submenu_p( 
		CMSMASTERS_PAGE_BASENAME, 
		esc_attr__('Theme General Settings', 'construction-pro'), 
		esc_attr__('General', 'construction-pro'), 
		'manage_options', 
		CMSMASTERS_PAGE_BASENAME, 
		'construction_pro_settings_page_fn' 
	);
	
	add_action('load-' . $cmsmasters_settings_general, 'construction_pro_settings_scripts');
	
	
	$cmsmasters_settings_font = $add_submenu_p( 
		CMSMASTERS_PAGE_BASENAME, 
		esc_attr__('Theme Fonts Settings', 'construction-pro'), 
		esc_attr__('Fonts', 'construction-pro'), 
		'manage_options', 
		CMSMASTERS_PAGE_BASENAME . '-font', 
		'construction_pro_settings_page_fn' 
	);
	
	add_action('load-' . $cmsmasters_settings_font, 'construction_pro_settings_scripts');
	
	
	$cmsmasters_settings_color = $add_submenu_p( 
		CMSMASTERS_PAGE_BASENAME, 
		esc_attr__('Theme Color Schemes', 'construction-pro'), 
		esc_attr__('Colors', 'construction-pro'), 
		'manage_options', 
		CMSMASTERS_PAGE_BASENAME . '-color', 
		'construction_pro_settings_page_fn' 
	);
	
	add_action('load-' . $cmsmasters_settings_color, 'construction_pro_settings_scripts');
	
	
	$cmsmasters_settings_element = $add_submenu_p( 
		CMSMASTERS_PAGE_BASENAME, 
		esc_attr__('Theme Elements Settings', 'construction-pro'), 
		esc_attr__('Elements', 'construction-pro'), 
		'manage_options', 
		CMSMASTERS_PAGE_BASENAME . '-element', 
		'construction_pro_settings_page_fn' 
	);
	
	add_action('load-' . $cmsmasters_settings_element, 'construction_pro_settings_scripts');
	
	
	$cmsmasters_settings_single = $add_submenu_p( 
		CMSMASTERS_PAGE_BASENAME, 
		esc_attr__('Theme Single Posts Settings', 'construction-pro'), 
		esc_attr__('Single Posts', 'construction-pro'), 
		'manage_options', 
		CMSMASTERS_PAGE_BASENAME . '-single', 
		'construction_pro_settings_page_fn' 
	);
	
	add_action('load-' . $cmsmasters_settings_single, 'construction_pro_settings_scripts');
	
	
	$cmsmasters_settings_demo = $add_submenu_p( 
		CMSMASTERS_PAGE_BASENAME, 
		esc_attr__('Theme Settings Import/Export', 'construction-pro'), 
		esc_attr__('Import/Export', 'construction-pro'), 
		'manage_options', 
		CMSMASTERS_PAGE_BASENAME . '-demo', 
		'construction_pro_settings_page_fn' 
	);
	
	add_action('load-' . $cmsmasters_settings_demo, 'construction_pro_settings_scripts');
}


function construction_pro_section_fn($desc) {
	$tab = construction_pro_get_the_tab();
	
	switch ($tab) {
	case 'general':
		echo '';
		
		break;
	default:
		break;
	}
}


function construction_pro_settings_page_fn() {
	$settings_output = construction_pro_get_settings();
	$current_tab = construction_pro_get_the_tab();
	
	echo '<div class="wrap">';
	
	construction_pro_settings_page_header();
	
	if ($current_tab != 'wpml') {
		echo '<form action="options.php" method="post" class="cmsmasters_admin_page"' . (($current_tab == 'recaptcha') ? ' style="background-color:#fdffc6; padding:35px 0 15px 25px; margin:0;"' : '') . '>' . 
		'<p class="submit-top">' . 
			(($current_tab != 'import' && $current_tab != 'export') ? '<input name="submit-top" type="submit" class="button button-primary button-large" value="' . esc_attr__('Save Changes', 'construction-pro') . '" />' : '') . 
		'</p>';
		
		settings_fields($settings_output['cmsmasters_option_name']);
		
		do_settings_sections(__FILE__);
		
		echo '<p class="submit">' . 
				(($current_tab != 'import' && $current_tab != 'export') ? '<input name="submit" type="submit" class="button button-primary button-large" value="' . esc_attr__('Save Changes', 'construction-pro') . '" />' : (($current_tab == 'import') ? '<input name="import" type="button" class="button button-primary button-large cmsmasters-demo-import" value="' . esc_attr__('Import Settings', 'construction-pro') . '" />' : '')) . 
			'</p>' . 
		'</form>';
	} else {
		do_settings_sections(__FILE__);
	}
	
	echo '</div>';
}


function construction_pro_form_field_fn($args = array()) {
	extract($args);
	
	$settings_output = construction_pro_get_settings();
	
	$cmsmasters_option_name = esc_attr($settings_output['cmsmasters_option_name']);
	
	$options = get_option($cmsmasters_option_name);
	
	if (!isset($options[$id])) {
		$options[$id] = $std;
	}
	
	$field_class = ($class != '') ? ' ' . esc_attr($class) : '';
	
	$id = (isset($id) ? esc_attr($id) : '');
	$min = (isset($min) ? esc_attr($min) : '');
	$max = (isset($max) ? esc_attr($max) : '');
	$step = (isset($step) ? esc_attr($step) : '');
	
	
	switch ($type) {
	case 'text':
		$options[$id] = esc_attr(stripslashes($options[$id]));
		
		echo '<input class="regular-text' . $field_class . '" type="text" id="' . $id . '" name="' . $cmsmasters_option_name . '[' . $id . ']" value="' . $options[$id] . '" />' . 
		(($desc != '') ? '<br />' . '<span class="description">' . $desc . '</span>' : '');
		
		break;
	case 'multi-text':
		foreach ($choices as $item) {
			$item = explode('|', $item);
			$item[0] = esc_html($item[0]);
			
			if (!empty($options[$id])) {
				foreach ($options[$id] as $option_key => $option_val) {
					if ($item[1] == $option_key) {
						$value = $option_val;
					}
				}
			} else {
				$value = '';
			}
			
			echo '<span>' . $item[0] . ':</span> ' . 
			'<input class="' . $field_class . '" type="text" id="' . $id . '|' . $item[1] . '" name="' . $cmsmasters_option_name . '[' . $id . '|' . $item[1] . ']" value="' . $value . '" />' . 
			'<br />';
		}
		
		echo (($desc != '') ? '<span class="description">' . $desc . '</span>' : '');
		
		break;
	case 'textarea':
		$options[$id] = stripslashes($options[$id]);
		
		echo '<textarea class="textarea' . $field_class . '" id="' . $id . '" name="' . $cmsmasters_option_name . '[' . $id . ']" rows="5" cols="30">' . $options[$id] . '</textarea>' . 
		(($desc != '') ? '<br />' . '<span class="description">' . $desc . '</span>' : '');
		
		break;
	case 'select':
		echo '<select id="' . $id . '" class="select' . $field_class . '" name="' . $cmsmasters_option_name . '[' . $id . ']">';
		
		foreach ($choices as $item) {
			$item = explode('|', $item);
			$item[0] = esc_html($item[0]);
			
			$selected = ($options[$id] == $item[1]) ? ' selected="selected"' : '';
			
			echo '<option value="' . $item[1] . '"' . $selected . '>' . $item[0] . '</option>';
		}
		
		echo '</select>' . 
		(($desc != '') ? '<br />' . '<span class="description">' . $desc . '</span>' : '');
		
		break;
	case 'select_scheme':
		echo '<select id="' . $id . '" class="select_scheme' . $field_class . '" name="' . $cmsmasters_option_name . '[' . $id . ']">';
		
		foreach ($choices as $key => $value) {
			$selected = ($options[$id] == $key) ? ' selected="selected"' : '';
			
			echo '<option value="' . esc_attr($key) . '"' . $selected . '>' . esc_html($value) . '</option>';
		}
		
		echo '</select>' . 
		(($desc != '') ? '<br />' . '<span class="description">' . $desc . '</span>' : '');
		
		break;
	case 'checkbox':
		echo '<input class="checkbox' . $field_class . '" type="checkbox" id="' . $id . '" name="' . $cmsmasters_option_name . '[' . $id . ']" value="1" ' . checked($options[$id], 1, false) . ' /> &nbsp;' . 
		(($desc != '') ? '<span class="description">' . $desc . '</span>' : '');
		
		break;
	case 'multi-checkbox':
		foreach ($choices as $item) {
			$item = explode('|', $item);
			$item[0] = esc_html($item[0]);
			$checked = '';
			
			if (isset($options[$id][$item[1]]) && $options[$id][$item[1]] == 'true') {
				$checked = ' checked="checked"';
			}
			
			echo '<input class="checkbox' . $field_class . '" type="checkbox" id="' . $id . '|' . $item[1] . '" name="' . $cmsmasters_option_name . '[' . $id . '|' . $item[1] . ']" value="1"' . $checked . ' /> &nbsp;' . 
			'<label for="' . $id . '|' . $item[1] . '">' . $item[0] . '</label>' . 
			'<br />';
		}
		
		echo (($desc != '') ? '<span class="description">' . $desc . '</span>' : '');
		
		break;
	case 'number':
		$options[$id] = esc_attr(stripslashes($options[$id]));
		
		echo '<input class="small-text' . $field_class . '" type="number" id="' . $id . '" name="' . $cmsmasters_option_name . '[' . $id . ']" value="' . $options[$id] . '"' . (($min != '') ? ' min="' . $min . '"' : '') . (($max != '') ? ' max="' . $max . '"' : '') . (($step != '') ? ' step="' . $step . '"' : '') . ' />' . 
		(($desc != '') ? ' &nbsp; ' . '<span class="description">' . $desc . '</span>' : '');
		
		break;
	case 'radio':
		foreach ($choices as $item) {
			$item = explode('|', $item);
			$item[0] = esc_html($item[0]);
			
			echo '<input class="radio' . $field_class . '" type="radio" id="' . $id . '|' . $item[1] . '" name="' . $cmsmasters_option_name . '[' . $id . ']" value="' . $item[1] . '" ' . checked($options[$id], $item[1], false) . ' /> &nbsp;' . 
			'<label for="' . $id . '|' . $item[1] . '">' . $item[0] . '</label>' . 
			'<br />';
		}
		
		echo (($desc != '') ? '<span class="description">' . $desc . '</span>' : '');
		
		break;
	case 'radio_img':
		foreach ($choices as $item) {
			$item = explode('|', $item);
			$item[0] = esc_html($item[0]);
			
			echo '<div style="text-align:center; float:' . (is_rtl() ? 'right' : 'left') . '; margin-' . (is_rtl() ? 'left' : 'right') . ':20px;">' . 
				'<input class="radio' . $field_class . '" type="radio" id="' . $id . '|' . $item[2] . '" name="' . $cmsmasters_option_name . '[' . $id . ']" value="' . $item[2] . '" ' . checked($options[$id], $item[2], false) . ' />' . 
				'<br />' . 
				'<label for="' . $id . '|' . $item[2] . '">' . 
					'<img src="' . esc_url($item[1]) . '" alt="' . esc_attr($item[0]) . '" title="' . esc_attr($item[0]) . '" />' . 
					'<br />' . 
					$item[0] . 
				'</label>' . 
			'</div>';
		}
		
		echo (($desc != '') ? '<div style="clear:both;"></div>' . '<br />' . '<span class="description">' . $desc . '</span>' : '');
		
		break;
	case 'button':
		echo '<input type="button" id="' . $id . '" name="' . $cmsmasters_option_name . '[' . $id . ']" value="' . $std . '" class="button button-primary button-large ' . $class . '" />' . 
		'<br /><br />' . 
		'<span class="description">' . 
			(($desc != '') ? $desc . '<br />' : '') . 
		'</span>';
		
		
		break;
	case 'color':
		$options[$id] = esc_attr(stripslashes($options[$id]));
		
		
		echo '<input type="text" id="' . $id . '" name="' . $cmsmasters_option_name . '[' . $id . ']" value="' . $options[$id] . '" class="cmsmasters-color-field" data-default-color="' . $std . '" />' . 
		'<br />' . 
		'<span class="description">' . 
			(($desc != '') ? $desc . '<br />' : '') . 
		'</span>';
		
		
		break;
	case 'rgba':
		$options[$id] = esc_attr(stripslashes($options[$id]));
		
		
		echo '<input type="text" id="' . $id . '" name="' . $cmsmasters_option_name . '[' . $id . ']" value="' . $options[$id] . '" class="cmsmasters-color-field" data-default-color="' . $std . '" data-alpha="true" data-reset-alpha="true" />' . 
		'<br />' . 
		'<span class="description">' . 
			(($desc != '') ? $desc . '<br />' : '') . 
		'</span>';
		
		
		break;
	case 'upload':
		$image_array = explode('|', $std);
		
		
		$id_array = explode('|', $options[$id]);
		
		
		$image = (isset($image_array[1]) && $image_array[1] != '') ? $image_array[1] : '';
		
		
		if ( 
			$options[$id] != $std && 
			isset($id_array[1]) && 
			$id_array[1] != '' 
		) {
			$image = $id_array[1];
		}
		
		
		echo '<div class="cmsmasters_upload_parent cmsmasters_select_parent">' . 
			'<input type="button" id="cmsmasters_upload_' . $id . '_button" class="cmsmasters_upload_button button button-large" value="' . esc_attr__('Choose Image', 'construction-pro') . '" data-title="' . esc_attr__('Choose Image', 'construction-pro') . '" data-button="' . esc_attr__('Insert Image', 'construction-pro') . '" data-id="cmsmasters-media-select-frame-' . $id . '" data-classes="media-frame cmsmasters-media-select-frame' . ((!isset($description)) ? ' cmsmasters-frame-no-description' : '') . ((!isset($caption)) ? ' cmsmasters-frame-no-caption' : '') . ((!isset($align)) ? ' cmsmasters-frame-no-align' : '') . ((!isset($link)) ? ' cmsmasters-frame-no-link' : '') . ((!isset($size)) ? ' cmsmasters-frame-no-size' : '') . '" data-library="image" data-type="' . $frame . '"' . (($frame == 'post') ? ' data-state="insert"' : '') . ' data-multiple="' . $multiple . '" />' . 
			'<div class="cmsmasters_upload"' . (($image != '') ? ' style="display:block;"' : '') . '>' . 
				'<img src="' . (($image != '') ? $image : '') . '" class="cmsmasters_preview_image" alt="" />' . 
				'<a href="#" class="cmsmasters_upload_cancel admin-icon-remove" title="' . esc_attr__('Remove', 'construction-pro') . '"></a>' . 
			'</div>' . 
			'<input id="' . $id . '" name="' . $cmsmasters_option_name . '[' . $id . ']" type="hidden" class="cmsmasters_upload_image" value="' . (($options[$id] == '') ? $std : $options[$id]) . '" />' . 
		'</div>' . 
		'<div style="clear:both;"></div>' . 
		(($desc != '') ? '<br />' . '<span class="description">' . $desc . '</span>' : '');
		
		
		break;
	case 'typorgaphy':
		$system_font = (in_array('system_font', $choices)) ? true : false;
		$google_font = (in_array('google_font', $choices)) ? true : false;
		$font_size = (in_array('font_size', $choices)) ? true : false;
		$line_height = (in_array('line_height', $choices)) ? true : false;
		$font_weight = (in_array('font_weight', $choices)) ? true : false;
		$font_style = (in_array('font_style', $choices)) ? true : false;
		$text_transform = (in_array('text_transform', $choices)) ? true : false;
		$text_decoration = (in_array('text_decoration', $choices)) ? true : false;
		
		if ($system_font) {
			echo '<div class="cmsmasters_admin_block">' . 
				'<select class="select" id="' . $id . '_system_font" name="' . $cmsmasters_option_name . '[' . $id . '_system_font]">';
				
				foreach (construction_pro_system_fonts_list() as $key => $value) {
					echo '<option value="' . esc_attr($key) . '"' . (($options[$id . '_system_font'] == $key) ? ' selected="selected"' : '') . '>' . esc_html($value) .'</option>';
				}
				
				echo '</select>' . 
				' &nbsp; ' . 
				'<label for="' . $id . '_system_font">' . esc_html__('System Font', 'construction-pro') . '</label>' . 
			'</div>';
		}
		
		if ($google_font) {
			echo '<div class="cmsmasters_admin_block">' . 
				'<select class="select" id="' . $id . '_google_font" name="' . $cmsmasters_option_name . '[' . $id . '_google_font]">';
				
				foreach (cmsmasters_google_fonts_list() as $key => $value) {
					echo '<option value="' . esc_attr($key) . '"' . (($options[$id . '_google_font'] == $key) ? ' selected="selected"' : '') . '>' . esc_html($value) .'</option>';
				}
				
				echo '</select>' . 
				' &nbsp; ' . 
				'<label for="' . $id . '_google_font">' . esc_html__('Google Font', 'construction-pro') . '</label>' . 
			'</div>';
		}
		
		if ($font_size) {
			echo '<div class="cmsmasters_admin_block">' . 
				'<input class="small-text" type="number" id="' . $id . '_font_size_number" name="' . $cmsmasters_option_name . '[' . $id . '_font_size]" value="' . $options[$id . '_font_size'] . '" min="0" step="1" /> ' . 
				' &nbsp; ' . 
				'<label for="' . $id . '_font_size_number">' . esc_html__('Font Size', 'construction-pro') . ' <em>(' . esc_html__('in pixels', 'construction-pro') . ')</em></label>' . 
			'</div>';
		}
		
		if ($line_height) {
			echo '<div class="cmsmasters_admin_block">' . 
				'<input class="small-text" type="number" id="' . $id . '_line_height_number" name="' . $cmsmasters_option_name . '[' . $id . '_line_height]" value="' . $options[$id . '_line_height'] . '" min="0" step="1" /> ' . 
				' &nbsp; ' . 
				'<label for="' . $id . '_line_height_number">' . esc_html__('Line Height', 'construction-pro') . ' <em>(' . esc_html__('in pixels', 'construction-pro') . ')</em></label>' . 
			'</div>';
		}
		
		if ($font_weight) {
			echo '<div class="cmsmasters_admin_block">' . 
				'<select class="select" id="' . $id . '_font_weight" name="' . $cmsmasters_option_name . '[' . $id . '_font_weight]">';
				
				foreach (cmsmasters_font_weight_list() as $key => $value) {
					echo '<option value="' . esc_attr($key) . '"' . (($options[$id . '_font_weight'] == $key) ? ' selected="selected"' : '') . '>' . esc_html($value) .'</option>';
				}
				
				echo '</select>' . 
				' &nbsp; ' . 
				'<label for="' . $id . '_font_weight">' . esc_html__('Font Weight', 'construction-pro') . '</label>' . 
			'</div>';
		}
		
		if ($font_style) {
			echo '<div class="cmsmasters_admin_block">' . 
				'<select class="select" id="' . $id . '_font_style" name="' . $cmsmasters_option_name . '[' . $id . '_font_style]">';
				
				foreach (cmsmasters_font_style_list() as $key => $value) {
					echo '<option value="' . esc_attr($key) . '"' . (($options[$id . '_font_style'] == $key) ? ' selected="selected"' : '') . '>' . esc_html($value) .'</option>';
				}
				
				echo '</select>' . 
				' &nbsp; ' . 
				'<label for="' . $id . '_font_style">' . esc_html__('Font Style', 'construction-pro') . '</label>' . 
			'</div>';
		}
		
		if ($text_transform) {
			echo '<div class="cmsmasters_admin_block">' . 
				'<select class="select" id="' . $id . '_text_transform" name="' . $cmsmasters_option_name . '[' . $id . '_text_transform]">';
				
				foreach (construction_pro_text_transform_list() as $key => $value) {
					echo '<option value="' . esc_attr($key) . '"' . (($options[$id . '_text_transform'] == $key) ? ' selected="selected"' : '') . '>' . esc_html($value) .'</option>';
				}
				
				echo '</select>' . 
				' &nbsp; ' . 
				'<label for="' . $id . '_text_transform">' . esc_html__('Text Transform', 'construction-pro') . '</label>' . 
			'</div>';
		}
		
		if ($text_decoration) {
			echo '<div class="cmsmasters_admin_block">' . 
				'<select class="select" id="' . $id . '_text_decoration" name="' . $cmsmasters_option_name . '[' . $id . '_text_decoration]">';
				
				foreach (construction_pro_text_decoration_list() as $key => $value) {
					echo '<option value="' . esc_attr($key) . '"' . (($options[$id . '_text_decoration'] == $key) ? ' selected="selected"' : '') . '>' . esc_html($value) .'</option>';
				}
				
				echo '</select>' . 
				' &nbsp; ' . 
				'<label for="' . $id . '_text_decoration">' . esc_html__('Text Decoration', 'construction-pro') . '</label>' . 
			'</div>';
		}
		
		echo (($desc != '') ? '<span class="description">' . $desc . '</span>' : '');
		
		break;
	case 'sidebar':
		echo (($desc != '') ? '<span class="description">' . $desc . '</span>' . '<br />' . '<br />': '') . 
		'<div class="sidebar_management">' . 
			'<p>' . 
				'<input class="all-options" type="text" id="new_sidebar_name" />' . 
				'<input class="button" type="button" id="add_sidebar" value="' . esc_attr__('Add Sidebar', 'construction-pro') . '" />' . 
			'</p>' . 
			'<div></div>' . 
			'<ul>';
			
			if (isset($options[$id]) && is_array($options[$id])) {
				$i = 0;
				
				foreach($options[$id] as $sidebar) {
					$i++;
					
					echo '<li>' . 
						'<a href="#" class="sidebar_del admin-icon-remove"></a> ' . 
						esc_html($sidebar) . 
						'<input type="hidden" name="' . $cmsmasters_option_name . '[' . $id . '_-_' . $i . ']" value="' . esc_attr($sidebar) . '" />' . 
					'</li>';
				}
			}
			
			echo '</ul>' . 
			'<input id="custom_sidebars_number" type="hidden" name="' . $cmsmasters_option_name . '[' . $id . '_number]" value="' . ((isset($options[$id]) && is_array($options[$id])) ? $i : 0) . '" />' . 
		'</div>';
		
		break;
	case 'social':
		echo (($desc != '') ? '<span class="description">' . $desc . '</span>' . '<br />' . '<br />': '') . 
		'<div class="icon_management">' . 
			'<p>' . 
				'<input class="icon_upload_image all-options" type="hidden" id="' . $id . '" value="" />' . 
				'<span id="' . $id . '_icon" data-class="cmsmasters_new_icon_img"></span>' . 
				'<input id="' . $id . '_button" class="cmsmasters_icon_choose_button button" type="button" value="' . esc_attr__('Choose icon', 'construction-pro') . '" />' . 
				'<a href="#" class="cmsmasters_remove_icon admin-icon-remove" title="' . esc_attr__('Cancel changes', 'construction-pro') . '"></a>' . 
			'</p>' . 
			'<span class="cl"><br /></span>' . 
			'<span class="icon_upload_link" style="display:none;">' . 
				'<label for="new_icon_color">' . 
					'<span class="cmsmasters_col_label">' . esc_html__('Icon Color', 'construction-pro') . '</span>' . 
					'<input class="cmsmasters-color-field" type="text" id="new_icon_color" value="" data-default-color="" data-alpha="true" data-reset-alpha="true" /> ' . 
				'</label>' . 
				'<label for="new_icon_hover">' . 
					'<span class="cmsmasters_col_label">' . esc_html__('Icon Hover Color', 'construction-pro') . '<br /><em>' . esc_html__('if not selected - Icon Color will be used', 'construction-pro') . '</em></span>' . 
					'<input class="cmsmasters-color-field" type="text" id="new_icon_hover" value="" data-default-color="" data-alpha="true" data-reset-alpha="true" /> ' . 
				'</label>' . 
				'<label for="new_icon_link">' . 
					'<input class="all-options" type="text" id="new_icon_link" /> ' . 
					esc_html__('Icon Link', 'construction-pro') . 
				'</label>' . 
				'<label for="new_icon_title">' . 
					'<input class="all-options" type="text" id="new_icon_title" /> ' . 
					esc_html__('Icon Title', 'construction-pro') . 
				'</label>' . 
				'<label for="new_icon_target">' . 
					'<input type="checkbox" id="new_icon_target" value="true" /> ' . 
					esc_html__('Open link in a new tab/window?', 'construction-pro') . 
				'</label>' . 
			'</span>' . 
			'<span class="cl"></span>' . 
			'<input class="button button-primary" type="button" id="add_icon" value="' . esc_attr__('Add Icon', 'construction-pro') . '" />' . 
			'<input class="button button-primary" type="button" id="edit_icon" value="' . esc_attr__('Save Icon', 'construction-pro') . '" />' . 
			'<ul>';
			
			
			$i = 0;
			
			
			if (isset($options[$id]) && is_array($options[$id])) {
				foreach($options[$id] as $icon) {
					$i++;
					
					
					$icon_attrs = explode('|', $icon);
					
					
					echo '<li>' . 
						'<div class="' . $icon_attrs[0] . '">' . 
							'<input type="hidden" id="' . $cmsmasters_option_name . '_' . $id . '_-_' . $i . '" name="' . $cmsmasters_option_name . '[' . $id . '_-_' . $i . ']" value="' . esc_attr($icon) . '" />' . 
						'</div>' . 
						'<a href="#" class="icon_del admin-icon-remove" title="' . esc_attr__('Remove', 'construction-pro') . '"></a> ' . 
						'<span class="icon_move admin-icon-move"></span> ' . 
					'</li>';
				}
			}
			
			
			echo '</ul>' . 
			'<input id="custom_icons_number" type="hidden" name="' . $cmsmasters_option_name . '[' . $id . '_number]" value="' . $i . '" />' . 
		'</div>';
		
		
		break;
	}
}


function construction_pro_validate_options($input) {
	$valid_input = array();
	
	$settings_output = construction_pro_get_settings();
	$options = $settings_output['cmsmasters_page_fields'];
	
	foreach ($options as $option) {
		switch ($option['type']) {
		case 'text':
			switch ($option['class']) {
			case 'numeric':
				$input[$option['id']] = trim($input[$option['id']]);
				
				$valid_input[$option['id']] = (is_numeric($input[$option['id']])) ? $input[$option['id']] : esc_html__('Expecting a Numeric value!', 'construction-pro');
				
				if (is_numeric($input[$option['id']]) == false) {
					add_settings_error(
						$option['id'],
						CMSMASTERS_SHORTNAME . '_txt_numeric_error',
						esc_html__('Expecting a Numeric value! Please fix.', 'construction-pro'),
						'error'
					);
				}
				
				break;
			case 'multinumeric':
				$input[$option['id']] = trim($input[$option['id']]);
				
				if ($input[$option['id']] != '') {
					$valid_input[$option['id']] = (preg_match('/^-?\d+(?:,\s?-?\d+)*$/', $input[$option['id']]) == 1) ? $input[$option['id']] : esc_html__('Expecting comma separated numeric values', 'construction-pro');
				} else {
					$valid_input[$option['id']] = $input[$option['id']];
				}
				
				if ($input[$option['id']] != '' && preg_match('/^-?\d+(?:,\s?-?\d+)*$/', $input[$option['id']]) != 1) {
					add_settings_error(
						$option['id'],
						CMSMASTERS_SHORTNAME . '_txt_multinumeric_error',
						esc_html__('Expecting comma separated numeric values! Please fix.','construction-pro'),
						'error'
					);
				}
				
				break;
			case 'nohtml':
				$input[$option['id']] = sanitize_text_field($input[$option['id']]);
				
				$valid_input[$option['id']] = addslashes($input[$option['id']]);
				
				break;
			case 'url':
				$input[$option['id']] = trim($input[$option['id']]);
				
				$valid_input[$option['id']] = esc_url_raw($input[$option['id']]);
				
				break;
			case 'email':
				$input[$option['id']] = trim($input[$option['id']]);
				
				if ($input[$option['id']] != '') {
					$valid_input[$option['id']] = (is_email($input[$option['id']]) !== false) ? $input[$option['id']] : esc_html__('Invalid email! Please re-enter!', 'construction-pro');
				} elseif ($input[$option['id']] == '') {
					$valid_input[$option['id']] = esc_html__('This setting field cannot be empty! Please enter a valid email address.', 'construction-pro');
				}
				
				if (is_email($input[$option['id']]) == false || $input[$option['id']] == '') {
					add_settings_error(
						$option['id'],
						CMSMASTERS_SHORTNAME . '_txt_email_error',
						esc_html__('Please enter a valid email address.', 'construction-pro'),
						'error'
					);
				}
				
				break;
			default:
				$allowed_html = array( 
					'a' => array( 
						'href' => array(), 
						'title' => array(), 
						'class' => array(), 
						'target' => array() 
					), 
					'b' => array(), 
					'em' => array(), 
					'i' => array(), 
					'strong' => array() 
				);
				
				$input[$option['id']] = trim($input[$option['id']]);
				$input[$option['id']] = force_balance_tags($input[$option['id']]);
				$input[$option['id']] = wp_kses( $input[$option['id']], $allowed_html);
				
				$valid_input[$option['id']] = addslashes($input[$option['id']]);
				
				break;
			}
			
			break;
		case 'multi-text':
			$textarray = array();
			$text_values = array();
			
			foreach ($option['choices'] as $k => $v) {
				$pieces = explode('|', $v);
				
				$text_values[] = $pieces[1];
			}
			
			foreach ($text_values as $v) {
				if (!empty($input[$option['id'] . '|' . $v])) {
					switch ($option['class']) {
						case 'numeric':
							$input[$option['id'] . '|' . $v] = trim($input[$option['id'] . '|' . $v]);
							
							$input[$option['id'] . '|' . $v] = (is_numeric($input[$option['id'] . '|' . $v])) ? $input[$option['id'] . '|' . $v] : '';
						break;
						
						default:
							$input[$option['id'] . '|' . $v] = sanitize_text_field($input[$option['id'] . '|' . $v]);
							$input[$option['id'] . '|' . $v] = addslashes($input[$option['id'] . '|' . $v]);
						break;
					}
					
					$textarray[$v] = $input[$option['id'] . '|' . $v];
				} else {
					$textarray[$v] = '';
				}
			}
			
			if (!empty($textarray)) {
				$valid_input[$option['id']] = $textarray;
			}
			
			break;
		case 'textarea':
			switch ($option['class']) {
			case 'inlinehtml':
				$input[$option['id']] = trim($input[$option['id']]);
				$input[$option['id']] = force_balance_tags($input[$option['id']]);
				$input[$option['id']] = addslashes($input[$option['id']]);
				
				$valid_input[$option['id']] = wp_filter_kses($input[$option['id']]);
				
				break;
			case 'nohtml':
				$input[$option['id']] = sanitize_text_field($input[$option['id']]);
				
				$valid_input[$option['id']] = addslashes($input[$option['id']]);
				
				break;
			case 'allowlinebreaks':
				$input[$option['id']] = wp_strip_all_tags($input[$option['id']]);
				
				$valid_input[$option['id']] = addslashes($input[$option['id']]);
				
				break;
			default:
				$allowed_html = array( 
					'script' => array( 
						'type' => array() 
					), 
					'style' => array( 
						'type' => array(), 
						'media' => array() 
					), 
					'a' => array( 
						'class' => array(), 
						'href' => array(), 
						'title' => array(), 
						'target' => array() 
					), 
					'b' => array(), 
					'blockquote' => array( 
						'cite' => array() 
					), 
					'br' => array(), 
					'dd' => array(), 
					'dl' => array(), 
					'dt' => array(), 
					'em' => array(), 
					'i' => array(), 
					'li' => array(), 
					'ol' => array(), 
					'p' => array( 
						'class' => array(), 
						'style' => array() 
					), 
					'span' => array( 
						'class' => array(), 
						'style' => array() 
					), 
					'abbr' => array( 
						'class' => array(), 
						'title' => array(), 
						'style' => array() 
					), 
					'div' => array( 
						'class' => array(), 
						'style' => array() 
					), 
					'img' => array( 
						'src' => array(),
						'width' => array(),
						'height' => array(), 
						'class' => array(),
						'alt' => array() 
					), 
					'q' => array( 
						'cite' => array() 
					), 
					'strong' => array(), 
					'ul' => array(), 
					'h1' => array( 
						'align' => array(), 
						'class' => array(), 
						'id' => array(), 
						'style' => array() 
					), 
					'h2' => array( 
						'align' => array(), 
						'class' => array(), 
						'id' => array(), 
						'style' => array() 
					), 
					'h3' => array( 
						'align' => array(), 
						'class' => array(), 
						'id' => array(), 
						'style' => array() 
					), 
					'h4' => array( 
						'align' => array(), 
						'class' => array(), 
						'id' => array(), 
						'style' => array() 
					), 
					'h5' => array( 
						'align' => array(), 
						'class' => array(), 
						'id' => array(), 
						'style' => array() 
					), 
					'h6' => array( 
						'align' => array(), 
						'class' => array(), 
						'id' => array(), 
						'style' => array() 
					) 
				);
				
				$input[$option['id']] = trim($input[$option['id']]);
				$input[$option['id']] = force_balance_tags($input[$option['id']]);
				$input[$option['id']] = wp_kses($input[$option['id']], $allowed_html);
				
				$valid_input[$option['id']] = addslashes($input[$option['id']]);
				
				break;
			}
			
			break;
		case 'select':
			$select_values = array();
			
			foreach ($option['choices'] as $k => $v) {
				$pieces = explode('|', $v);
				
				$select_values[] = $pieces[1];
			}
			
			$valid_input[$option['id']] = (in_array($input[$option['id']], $select_values) ? $input[$option['id']] : '');
			
			break;
		case 'select_scheme':
			$select_values = array();
			
			
			foreach ($option['choices'] as $k => $v) {
				$select_values[] = $k;
			}
			
			
			$valid_input[$option['id']] = (in_array($input[$option['id']], $select_values) ? $input[$option['id']] : '');
			
			
			break;
		case 'checkbox':
			if (!isset($input[$option['id']])) {
				$input[$option['id']] = null;
			}
			
			$valid_input[$option['id']] = (($input[$option['id']] == 1) ? 1 : 0);
			
			break;
		case 'multi-checkbox':
			$checkboxarray = array();
			$check_values = array();
			
			foreach ($option['choices'] as $k => $v) {
				$pieces = explode('|', $v);
				
				$check_values[] = $pieces[1];
			}
			
			foreach ($check_values as $v) {
				if (!empty($input[$option['id'] . '|' . $v])) {
					$checkboxarray[$v] = 'true';
				} else {
					$checkboxarray[$v] = 'false';
				}
			}
			
			if (!empty($checkboxarray)) {
				$valid_input[$option['id']] = $checkboxarray;
			}
			
			break;
		case 'number':
			$input[$option['id']] = trim($input[$option['id']]);
			$valid_input[$option['id']] = (is_numeric($input[$option['id']])) ? $input[$option['id']] : esc_html__('Number!', 'construction-pro');
			
			if (is_numeric($input[$option['id']]) == false) {
				add_settings_error(
					$option['id'],
					CMSMASTERS_SHORTNAME . '_txt_numeric_error',
					esc_html__('Expecting a Numeric value! Please fix.', 'construction-pro'),
					'error'
				);
			}
			
			break;
		case 'radio':
			$select_values = array();
			
			foreach ($option['choices'] as $k => $v) {
				$pieces = explode('|', $v);
				
				$select_values[] = $pieces[1];
			}
			
			$valid_input[$option['id']] = (in_array($input[$option['id']], $select_values) ? $input[$option['id']] : '');
			
			break;
		case 'radio_img':
			$select_values = array();
			
			foreach ($option['choices'] as $k => $v) {
				$pieces = explode('|', $v);
				
				$select_values[] = $pieces[2];
			}
			
			$valid_input[$option['id']] = (in_array($input[$option['id']], $select_values) ? $input[$option['id']] : '');
			
			break;
		case 'typorgaphy':
			foreach ($option['choices'] as $v) {
				if (!empty($input[$option['id'] . '_' . $v])) {
					$valid_input[$option['id'] . '_' . $v] = $input[$option['id'] . '_' . $v];
				} else {
					$valid_input[$option['id'] . '_' . $v] = '';
				}
			}
			
			break;
		case 'sidebar':
			$valid_vals = array();
			
			for ($n = 1, $i = $input[$option['id'] . '_number']; $n <= $i; $n++) {
				$valid_vals[] = $input[$option['id'] . '_-_' . $n];
			}
			
			if (!empty($valid_vals)) {
				$valid_input[$option['id']] = $valid_vals;
			}
			
			break;
		case 'heading':
			$valid_vals = array();
			
			for ($n = 1, $i = $input[$option['id'] . '_number']; $n <= $i; $n++) {
				$valid_vals[] = $input[$option['id'] . '_-_' . $n];
			}
			
			if (!empty($valid_vals)) {
				$valid_input[$option['id']] = $valid_vals;
			}
			
			break;
		case 'social':
			$valid_vals = array();
			
			for ($n = 1, $i = $input[$option['id'] . '_number']; $n <= $i; $n++) {
				$valid_vals[] = $input[$option['id'] . '_-_' . $n];
			}
			
			if (!empty($valid_vals)) {
				$valid_input[$option['id']] = $valid_vals;
			}
			
			break;
		default:
			$valid_input[$option['id']] = $input[$option['id']];
			
			break;
		}
	}
	
	return $valid_input;
}


function theme_admin_bar_render() {
	global $wp_admin_bar;
	
	
	$wp_admin_bar->add_menu(array( 
		'id' => CMSMASTERS_SHORTNAME . '_options', 
		'title' => esc_attr__('Theme Settings', 'construction-pro'), 
		'href' => esc_url(admin_url('admin.php?page=cmsmasters-settings')) 
	));
	
	
	$wp_admin_bar->add_menu(array( 
		'parent' => CMSMASTERS_SHORTNAME . '_options', 
		'id' => CMSMASTERS_SHORTNAME . '_theme_settings', 
		'title' => esc_attr__('General', 'construction-pro'), 
		'href' => esc_url(admin_url('admin.php?page=cmsmasters-settings')) 
	));
	
	$wp_admin_bar->add_menu(array( 
		'parent' => CMSMASTERS_SHORTNAME . '_options', 
		'id' => CMSMASTERS_SHORTNAME . '_theme_settings_font', 
		'title' => esc_attr__('Fonts', 'construction-pro'), 
		'href' => esc_url(admin_url('admin.php?page=cmsmasters-settings-font')) 
	));
	
	$wp_admin_bar->add_menu(array( 
		'parent' => CMSMASTERS_SHORTNAME . '_options', 
		'id' => CMSMASTERS_SHORTNAME . '_theme_settings_color', 
		'title' => esc_attr__('Colors', 'construction-pro'), 
		'href' => esc_url(admin_url('admin.php?page=cmsmasters-settings-color')) 
	));
	
	$wp_admin_bar->add_menu(array( 
		'parent' => CMSMASTERS_SHORTNAME . '_options', 
		'id' => CMSMASTERS_SHORTNAME . '_theme_settings_element', 
		'title' => esc_attr__('Elements', 'construction-pro'), 
		'href' => esc_url(admin_url('admin.php?page=cmsmasters-settings-element')) 
	));
	
	$wp_admin_bar->add_menu(array( 
		'parent' => CMSMASTERS_SHORTNAME . '_options', 
		'id' => CMSMASTERS_SHORTNAME . '_theme_settings_single', 
		'title' => esc_attr__('Single', 'construction-pro'), 
		'href' => esc_url(admin_url('admin.php?page=cmsmasters-settings-single')) 
	));
}

add_action('wp_before_admin_bar_render', 'theme_admin_bar_render');


function construction_pro_show_msg($message, $msgclass = 'info') {
	echo '<div id="message" class="' . $msgclass . '">' . $message . '</div>';
}


function construction_pro_admin_msgs() {
	global $pagenow;
	
	$cmsmasters_settings_pg = (isset($_GET['page'])) ? strpos($_GET['page'], CMSMASTERS_PAGE_BASENAME) : '';
	
	$set_errors = get_settings_errors(); 
	
	if ($pagenow == 'admin.php' && current_user_can('manage_options') && $cmsmasters_settings_pg !== false && !empty($set_errors)) {
		if ($set_errors[0]['code'] == 'settings_updated' && isset($_GET['settings-updated'])) {
			construction_pro_show_msg('<p><strong>' . $set_errors[0]['message'] . '</strong></p>', 'updated');
		} else {
			foreach ($set_errors as $set_error) {
				construction_pro_show_msg('<p class="setting-error-message" title="' . esc_attr($set_error['setting']) . '">' . $set_error['message'] . '</p>', 'error');
			}
		}
	}
}

add_action('admin_notices', 'construction_pro_admin_msgs');


function construction_pro_add_global_options() {
	$cmsmasters_option_names = array( 
		array( 
			'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_general', 
			construction_pro_options_general_fields('general') 
		), 
		array( 
			'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_bg', 
			construction_pro_options_general_fields('bg') 
		), 
		array( 
			'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_header', 
			construction_pro_options_general_fields('header') 
		), 
		array( 
			'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_content', 
			construction_pro_options_general_fields('content') 
		), 
		array( 
			'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_footer', 
			construction_pro_options_general_fields('footer') 
		), 
		array( 
			'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_font_content', 
			construction_pro_options_font_fields('content') 
		), 
		array( 
			'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_font_link', 
			construction_pro_options_font_fields('link') 
		), 
		array( 
			'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_font_nav', 
			construction_pro_options_font_fields('nav') 
		), 
		array( 
			'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_font_heading', 
			construction_pro_options_font_fields('heading') 
		), 
		array( 
			'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_font_other', 
			construction_pro_options_font_fields('other') 
		), 
		array( 
			'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_element_sidebar', 
			construction_pro_options_element_fields('sidebar') 
		), 
		array( 
			'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_element_icon', 
			construction_pro_options_element_fields('icon') 
		), 
		array( 
			'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_element_lightbox', 
			construction_pro_options_element_fields('lightbox') 
		), 
		array( 
			'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_element_sitemap', 
			construction_pro_options_element_fields('sitemap') 
		), 
		array( 
			'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_element_error', 
			construction_pro_options_element_fields('error') 
		), 
		array( 
			'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_element_code', 
			construction_pro_options_element_fields('code') 
		), 
		array( 
			'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_element_recaptcha', 
			'' 
		), 
		array( 
			'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_single_post', 
			construction_pro_options_single_fields('post') 
		), 
		array( 
			'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_single_project', 
			construction_pro_options_single_fields('project') 
		), 
		array( 
			'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_single_profile', 
			construction_pro_options_single_fields('profile') 
		)
	);
	
	foreach (construction_pro_all_color_schemes_list() as $key => $value) {
		array_push($cmsmasters_option_names, array( 
			'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_color_' . $key, 
			construction_pro_options_color_fields($key) 
		));
	}
	
	foreach ($cmsmasters_option_names as $cmsmasters_option_name) {
		$start_options = array();
		
		if ($cmsmasters_option_name[1] !== '') {
			foreach ($cmsmasters_option_name[1] as $selected_option) {
				if ( 
					is_array($selected_option['std']) && 
					$selected_option['id'] !== CMSMASTERS_SHORTNAME . '_social_icons' 
				) {
					foreach ($selected_option['std'] as $key => $value) {
						$start_options[$selected_option['id'] . '_' . $key] = $value;
					}
				} else {
					$start_options[$selected_option['id']] = $selected_option['std'];
				}
			}
			
			if (count($start_options) == 1) {
				foreach ($start_options as $key => $val) {
					if (empty($val)) {
						$start_options_val = '';
					} else {
						$start_options_val = $start_options;
					}
				}
			} else {
				$start_options_val = $start_options;
			}
		} else {
			$start_options_val = '';
		}
		
		if (get_option($cmsmasters_option_name[0]) == false) {
			add_option($cmsmasters_option_name[0], $start_options_val, '', 'yes');
		}
	}
}


function construction_pro_get_global_options() {
	$cmsmasters_option = array();
	
	$cmsmasters_option_names = array( 
		'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_general', 
		'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_bg', 
		'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_header', 
		'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_content', 
		'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_footer', 
		'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_font_content', 
		'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_font_link', 
		'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_font_nav', 
		'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_font_heading', 
		'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_font_other', 
		'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_element_sidebar', 
		'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_element_icon', 
		'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_element_lightbox', 
		'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_element_sitemap', 
		'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_element_error', 
		'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_element_code', 
		'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_element_recaptcha', 
		'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_single_post', 
		'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_single_project', 
		'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_single_profile'
	);
	
	foreach (construction_pro_all_color_schemes_list() as $key => $value) {
		array_push($cmsmasters_option_names, 'cmsmasters_options_' . CMSMASTERS_SHORTNAME . '_color_' . $key);
	}
	
	foreach ($cmsmasters_option_names as $cmsmasters_option_name) {
		if (get_option($cmsmasters_option_name) != false) {
			$option = get_option($cmsmasters_option_name);
			
			$cmsmasters_option = array_merge($cmsmasters_option, $option);
		}
	}
	
	return $cmsmasters_option;
}

