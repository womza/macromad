<?php 
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version		1.0.0
 * 
 * Admin Panel Fonts Options
 * Created by CMSMasters
 * 
 */


function construction_pro_options_font_tabs() {
	$tabs = array();
	
	$tabs['content'] = esc_attr__('Content', 'construction-pro');
	$tabs['link'] = esc_attr__('Links', 'construction-pro');
	$tabs['nav'] = esc_attr__('Navigation', 'construction-pro');
	$tabs['heading'] = esc_attr__('Heading', 'construction-pro');
	$tabs['other'] = esc_attr__('Other', 'construction-pro');
	
	return $tabs;
}


function construction_pro_options_font_sections() {
	$tab = construction_pro_get_the_tab();
	
	switch ($tab) {
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_html__('Content Font Options', 'construction-pro');
		
		break;
	case 'link':
		$sections = array();
		
		$sections['link_section'] = esc_html__('Links Font Options', 'construction-pro');
		
		break;
	case 'nav':
		$sections = array();
		
		$sections['nav_section'] = esc_html__('Navigation Font Options', 'construction-pro');
		
		break;
	case 'heading':
		$sections = array();
		
		$sections['heading_section'] = esc_html__('Headings Font Options', 'construction-pro');
		
		break;
	case 'other':
		$sections = array();
		
		$sections['other_section'] = esc_html__('Other Fonts Options', 'construction-pro');
		
		break;
	}
	
	return $sections;
} 


function construction_pro_options_font_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = construction_pro_get_the_tab();
	}
	
	
	$cmsmasters_option = construction_pro_get_global_options();
	
	
	$options = array();
	
	switch ($tab) {
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_content_font', 
			'title' => esc_html__('Main Content Font', 'construction-pro'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'', 
				'font_size' => 			'13', 
				'line_height' => 		'20', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'link':
		$options[] = array( 
			'section' => 'link_section', 
			'id' => CMSMASTERS_SHORTNAME . '_link_font', 
			'title' => esc_html__('Links Font', 'construction-pro'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'', 
				'font_size' => 			'13', 
				'line_height' => 		'20', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'link_section', 
			'id' => CMSMASTERS_SHORTNAME . '_link_hover_decoration', 
			'title' => esc_html__('Links Hover Text Decoration', 'construction-pro'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'none', 
			'choices' => construction_pro_text_decoration_list() 
		);
		
		break;
	case 'nav':
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => CMSMASTERS_SHORTNAME . '_nav_title_font', 
			'title' => esc_html__('Navigation Title Font', 'construction-pro'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic', 
				'font_size' => 			'12', 
				'line_height' => 		'20', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => CMSMASTERS_SHORTNAME . '_nav_dropdown_font', 
			'title' => esc_html__('Navigation Dropdown Font', 'construction-pro'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic', 
				'font_size' => 			'11', 
				'line_height' => 		'20', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		break;
	case 'heading':
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => CMSMASTERS_SHORTNAME . '_h1_font', 
			'title' => esc_html__('H1 Tag Font', 'construction-pro'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic', 
				'font_size' => 			'22', 
				'line_height' => 		'28', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => CMSMASTERS_SHORTNAME . '_h2_font', 
			'title' => esc_html__('H2 Tag Font', 'construction-pro'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic', 
				'font_size' => 			'20', 
				'line_height' => 		'26', 
				'font_weight' => 		'800', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => CMSMASTERS_SHORTNAME . '_h3_font', 
			'title' => esc_html__('H3 Tag Font', 'construction-pro'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic', 
				'font_size' => 			'18', 
				'line_height' => 		'24', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => CMSMASTERS_SHORTNAME . '_h4_font', 
			'title' => esc_html__('H4 Tag Font', 'construction-pro'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic', 
				'font_size' => 			'14', 
				'line_height' => 		'22', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => CMSMASTERS_SHORTNAME . '_h5_font', 
			'title' => esc_html__('H5 Tag Font', 'construction-pro'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic', 
				'font_size' => 			'11', 
				'line_height' => 		'20', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => CMSMASTERS_SHORTNAME . '_h6_font', 
			'title' => esc_html__('H6 Tag Font', 'construction-pro'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic', 
				'font_size' => 			'10', 
				'line_height' => 		'20', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		break;
	case 'other':
		$options[] = array( 
			'section' => 'other_section', 
			'id' => CMSMASTERS_SHORTNAME . '_button_font', 
			'title' => esc_html__('Button Font', 'construction-pro'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic', 
				'font_size' => 			'13', 
				'line_height' => 		'20', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => CMSMASTERS_SHORTNAME . '_small_font', 
			'title' => esc_html__('Small Tag Font', 'construction-pro'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic', 
				'font_size' => 			'10', 
				'line_height' => 		'18', 
				'font_weight' => 		'300', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => CMSMASTERS_SHORTNAME . '_input_font', 
			'title' => esc_html__('Text Fields Font', 'construction-pro'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'', 
				'font_size' => 			'13', 
				'line_height' => 		'20', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => CMSMASTERS_SHORTNAME . '_quote_font', 
			'title' => esc_html__('Blockquote Font', 'construction-pro'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'', 
				'font_size' => 			'13', 
				'line_height' => 		'20', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	}
	
	return $options;	
}

