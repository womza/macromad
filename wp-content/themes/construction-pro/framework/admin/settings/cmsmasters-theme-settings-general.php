<?php 
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version 	1.0.0
 * 
 * Admin Panel General Options
 * Created by CMSMasters
 * 
 */


function construction_pro_options_general_tabs() {
	$cmsmasters_option = construction_pro_get_global_options();
	
	$tabs = array();
	
	$tabs['general'] = esc_attr__('General', 'construction-pro');
	
	if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_theme_layout'] === 'boxed') {
		$tabs['bg'] = esc_attr__('Background', 'construction-pro');
	}
	
	$tabs['header'] = esc_attr__('Header', 'construction-pro');
	$tabs['content'] = esc_attr__('Content', 'construction-pro');
	$tabs['footer'] = esc_attr__('Footer', 'construction-pro');
	
	return $tabs;
}


function construction_pro_options_general_sections() {
	$tab = construction_pro_get_the_tab();
	
	switch ($tab) {
	case 'general':
		$sections = array();
		
		$sections['general_section'] = esc_attr__('General Options', 'construction-pro');
		
		break;
	case 'bg':
		$sections = array();
		
		$sections['bg_section'] = esc_attr__('Background Options', 'construction-pro');
		
		break;
	case 'header':
		$sections = array();
		
		$sections['header_section'] = esc_attr__('Header Options', 'construction-pro');
		
		break;
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_attr__('Content Options', 'construction-pro');
		
		break;
	case 'footer':
		$sections = array();
		
		$sections['footer_section'] = esc_attr__('Footer Options', 'construction-pro');
		
		break;
	}
	
	return $sections;
} 


function construction_pro_options_general_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = construction_pro_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'general':
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMASTERS_SHORTNAME . '_theme_layout', 
			'title' => esc_html__('Theme Layout', 'construction-pro'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'liquid', 
			'choices' => array( 
				esc_attr__('Liquid', 'construction-pro') . '|liquid', 
				esc_attr__('Boxed', 'construction-pro') . '|boxed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMASTERS_SHORTNAME . '_logo_type', 
			'title' => esc_html__('Logo Type', 'construction-pro'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'image', 
			'choices' => array( 
				esc_attr__('Image', 'construction-pro') . '|image', 
				esc_attr__('Text', 'construction-pro') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMASTERS_SHORTNAME . '_logo_url', 
			'title' => esc_html__('Logo Image', 'construction-pro'), 
			'desc' => esc_html__('Choose your website logo image.', 'construction-pro'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMASTERS_SHORTNAME . '_logo_url_retina', 
			'title' => esc_html__('Retina Logo Image', 'construction-pro'), 
			'desc' => esc_html__('Choose logo image for retina displays.', 'construction-pro'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_retina.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMASTERS_SHORTNAME . '_logo_title', 
			'title' => esc_html__('Logo Title', 'construction-pro'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => ((get_bloginfo('name')) ? get_bloginfo('name') : CMSMASTERS_FULLNAME), 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMASTERS_SHORTNAME . '_logo_subtitle', 
			'title' => esc_html__('Logo Subtitle', 'construction-pro'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMASTERS_SHORTNAME . '_logo_custom_color', 
			'title' => esc_html__('Custom Text Colors', 'construction-pro'), 
			'desc' => esc_html__('enable', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMASTERS_SHORTNAME . '_logo_title_color', 
			'title' => esc_html__('Logo Title Color', 'construction-pro'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMASTERS_SHORTNAME . '_logo_subtitle_color', 
			'title' => esc_html__('Logo Subtitle Color', 'construction-pro'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '' 
		);
		
		break;
	case 'bg':
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMASTERS_SHORTNAME . '_bg_col', 
			'title' => esc_html__('Background Color', 'construction-pro'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#ffffff' 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMASTERS_SHORTNAME . '_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMASTERS_SHORTNAME . '_bg_img', 
			'title' => esc_html__('Background Image', 'construction-pro'), 
			'desc' => esc_html__('Choose your custom website background image url.', 'construction-pro'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMASTERS_SHORTNAME . '_bg_rep', 
			'title' => esc_html__('Background Repeat', 'construction-pro'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'no-repeat', 
			'choices' => array( 
				esc_attr__('No Repeat', 'construction-pro') . '|no-repeat', 
				esc_attr__('Repeat Horizontally', 'construction-pro') . '|repeat-x', 
				esc_attr__('Repeat Vertically', 'construction-pro') . '|repeat-y', 
				esc_attr__('Repeat', 'construction-pro') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMASTERS_SHORTNAME . '_bg_pos', 
			'title' => esc_html__('Background Position', 'construction-pro'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'top center', 
			'choices' => array( 
				esc_attr__('Top Left', 'construction-pro') . '|top left', 
				esc_attr__('Top Center', 'construction-pro') . '|top center', 
				esc_attr__('Top Right', 'construction-pro') . '|top right', 
				esc_attr__('Center Left', 'construction-pro') . '|center left', 
				esc_attr__('Center Center', 'construction-pro') . '|center center', 
				esc_attr__('Center Right', 'construction-pro') . '|center right', 
				esc_attr__('Bottom Left', 'construction-pro') . '|bottom left', 
				esc_attr__('Bottom Center', 'construction-pro') . '|bottom center', 
				esc_attr__('Bottom Right', 'construction-pro') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMASTERS_SHORTNAME . '_bg_att', 
			'title' => esc_html__('Background Attachment', 'construction-pro'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'scroll', 
			'choices' => array( 
				esc_attr__('Scroll', 'construction-pro') . '|scroll', 
				esc_attr__('Fixed', 'construction-pro') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMASTERS_SHORTNAME . '_bg_size', 
			'title' => esc_html__('Background Size', 'construction-pro'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'cover', 
			'choices' => array( 
				esc_attr__('Auto', 'construction-pro') . '|auto', 
				esc_attr__('Cover', 'construction-pro') . '|cover', 
				esc_attr__('Contain', 'construction-pro') . '|contain' 
			) 
		);
		
		break;
	case 'header':
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_fixed_header', 
			'title' => esc_html__('Fixed Header', 'construction-pro'), 
			'desc' => esc_html__('enable', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_header_overlaps', 
			'title' => esc_html__('Header Overlaps Content', 'construction-pro'), 
			'desc' => esc_html__('enable', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_header_top_line', 
			'title' => esc_html__('Top Line', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_header_top_height', 
			'title' => esc_html__('Top Height', 'construction-pro'), 
			'desc' => esc_html__('pixels', 'construction-pro'), 
			'type' => 'number', 
			'std' => '30', 
			'min' => '30' 
		);

		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_header_top_line_bg_img_enable', 
			'title' => esc_html__('Top Line Background Image Visibility', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_header_top_line_bg_img', 
			'title' => esc_html__('Top Line Background Image', 'construction-pro'), 
			'desc' => esc_html__('Choose your custom website top line background image url.', 'construction-pro'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/header_top_line_bg.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_header_top_line_short_info', 
			'title' => esc_html__('Top Short Info', 'construction-pro'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'construction-pro') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_header_top_line_add_cont', 
			'title' => esc_html__('Top Additional Content', 'construction-pro'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'nav', 
			'choices' => array( 
				esc_attr__('None', 'construction-pro') . '|none', 
				esc_attr__('Top Line Social Icons', 'construction-pro') . '|social', 
				esc_attr__('Top Line Navigation', 'construction-pro') . '|nav' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_header_styles', 
			'title' => esc_html__('Header Styles', 'construction-pro'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'l_nav', 
			'choices' => array( 
				esc_attr__('Default Style', 'construction-pro') . '|default', 
				esc_attr__('Compact Style Left Navigation', 'construction-pro') . '|l_nav', 
				esc_attr__('Compact Style Right Navigation', 'construction-pro') . '|r_nav', 
				esc_attr__('Compact Style Center Navigation', 'construction-pro') . '|c_nav'
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_header_mid_height', 
			'title' => esc_html__('Header Middle Height', 'construction-pro'), 
			'desc' => esc_html__('pixels', 'construction-pro'), 
			'type' => 'number', 
			'std' => '106', 
			'min' => '80' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_header_bot_height', 
			'title' => esc_html__('Header Bottom Height', 'construction-pro'), 
			'desc' => esc_html__('pixels', 'construction-pro'), 
			'type' => 'number', 
			'std' => '54', 
			'min' => '40' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_header_search', 
			'title' => esc_html__('Header Search', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_header_add_cont', 
			'title' => esc_html__('Header Additional Content', 'construction-pro'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'social', 
			'choices' => array( 
				esc_attr__('None', 'construction-pro') . '|none', 
				esc_attr__('Header Social Icons', 'construction-pro') . '|social', 
				esc_attr__('Header Custom HTML', 'construction-pro') . '|cust_html' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_header_add_cont_cust_html', 
			'title' => esc_html__('Header Custom HTML', 'construction-pro'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'construction-pro') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_header_bot_add_cont', 
			'title' => esc_html__('Header Bottom Additional Content', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_header_bot_add_cont_cust_html', 
			'title' => esc_html__('Header Bottom Custom HTML', 'construction-pro'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'construction-pro') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_layout', 
			'title' => esc_html__('Layout Type by Default', 'construction-pro'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_attr__('Right Sidebar', 'construction-pro') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_attr__('Left Sidebar', 'construction-pro') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_attr__('Full Width', 'construction-pro') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_archives_layout', 
			'title' => esc_attr__('Archives Layout Type', 'construction-pro'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_attr__('Right Sidebar', 'construction-pro') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_attr__('Left Sidebar', 'construction-pro') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_attr__('Full Width', 'construction-pro') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_search_layout', 
			'title' => esc_html__('Search Layout Type', 'construction-pro'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_attr__('Right Sidebar', 'construction-pro') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_attr__('Left Sidebar', 'construction-pro') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_attr__('Full Width', 'construction-pro') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
				
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_other_layout', 
			'title' => esc_html__('Other Layout Type', 'construction-pro'), 
			'desc' => 'Layout for pages of non-listed types', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_attr__('Right Sidebar', 'construction-pro') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_attr__('Left Sidebar', 'construction-pro') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_attr__('Full Width', 'construction-pro') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_heading_alignment', 
			'title' => esc_html__('Heading Alignment by Default', 'construction-pro'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'left', 
			'choices' => array( 
				esc_attr__('Left', 'construction-pro') . '|left', 
				esc_attr__('Right', 'construction-pro') . '|right', 
				esc_attr__('Center', 'construction-pro') . '|center' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_heading_scheme', 
			'title' => esc_html__('Heading Custom Color Scheme by Default', 'construction-pro'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'default', 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_heading_bg_image_enable', 
			'title' => esc_html__('Heading Background Image Visibility by Default', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_heading_bg_image', 
			'title' => esc_html__('Heading Background Image by Default', 'construction-pro'), 
			'desc' => esc_html__('Choose your custom heading background image by default.', 'construction-pro'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/breadcrumbs_bg.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_heading_bg_repeat', 
			'title' => esc_html__('Heading Background Repeat by Default', 'construction-pro'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'repeat', 
			'choices' => array( 
				esc_attr__('No Repeat', 'construction-pro') . '|no-repeat', 
				esc_attr__('Repeat Horizontally', 'construction-pro') . '|repeat-x', 
				esc_attr__('Repeat Vertically', 'construction-pro') . '|repeat-y', 
				esc_attr__('Repeat', 'construction-pro') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_heading_bg_attachment', 
			'title' => esc_html__('Heading Background Attachment by Default', 'construction-pro'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'scroll', 
			'choices' => array( 
				esc_attr__('Scroll', 'construction-pro') . '|scroll', 
				esc_attr__('Fixed', 'construction-pro') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_heading_bg_size', 
			'title' => esc_html__('Heading Background Size by Default', 'construction-pro'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'auto', 
			'choices' => array( 
				esc_attr__('Auto', 'construction-pro') . '|auto', 
				esc_attr__('Cover', 'construction-pro') . '|cover', 
				esc_attr__('Contain', 'construction-pro') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_heading_bg_color', 
			'title' => esc_html__('Heading Background Color Overlay by Default', 'construction-pro'), 
			'desc' => '',  
			'type' => 'rgba', 
			'std' => '' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_heading_height', 
			'title' => esc_html__('Heading Height by Default', 'construction-pro'), 
			'desc' => esc_html__('pixels', 'construction-pro'), 
			'type' => 'number', 
			'std' => '90', 
			'min' => '90' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_breadcrumbs', 
			'title' => esc_html__('Breadcrumbs Visibility by Default', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_bottom_scheme', 
			'title' => esc_html__('Bottom Custom Color Scheme', 'construction-pro'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'footer', 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_bottom_sidebar', 
			'title' => esc_html__('Bottom Sidebar Visibility by Default', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_bottom_sidebar_layout', 
			'title' => esc_html__('Bottom Sidebar Layout by Default', 'construction-pro'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => '14141414', 
			'choices' => array( 
				'1/1|11', 
				'1/2 + 1/2|1212', 
				'1/3 + 2/3|1323', 
				'2/3 + 1/3|2313', 
				'1/4 + 3/4|1434', 
				'3/4 + 1/4|3414', 
				'1/3 + 1/3 + 1/3|131313', 
				'1/2 + 1/4 + 1/4|121414', 
				'1/4 + 1/2 + 1/4|141214', 
				'1/4 + 1/4 + 1/2|141412', 
				'1/4 + 1/4 + 1/4 + 1/4|14141414' 
			) 
		);
		
		break;
	case 'footer':
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMASTERS_SHORTNAME . '_footer_scheme', 
			'title' => esc_html__('Footer Custom Color Scheme', 'construction-pro'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'footer', 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMASTERS_SHORTNAME . '_footer_type', 
			'title' => esc_html__('Footer Type', 'construction-pro'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'default', 
			'choices' => array( 
				esc_attr__('Default', 'construction-pro') . '|default', 
				esc_attr__('Small', 'construction-pro') . '|small' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMASTERS_SHORTNAME . '_footer_additional_content', 
			'title' => esc_html__('Footer Additional Content', 'construction-pro'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'nav', 
			'choices' => array( 
				esc_attr__('None', 'construction-pro') . '|none', 
				esc_attr__('Footer Navigation', 'construction-pro') . '|nav', 
				esc_attr__('Social Icons', 'construction-pro') . '|social', 
				esc_attr__('Custom HTML', 'construction-pro') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMASTERS_SHORTNAME . '_fixed_footer', 
			'title' => esc_html__('Fixed Footer', 'construction-pro'), 
			'desc' => esc_html__('enable', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMASTERS_SHORTNAME . '_footer_height', 
			'title' => esc_html__('Footer Height', 'construction-pro'), 
			'desc' => esc_html__('pixels', 'construction-pro'), 
			'type' => 'number', 
			'std' => '362', 
			'min' => '200' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMASTERS_SHORTNAME . '_footer_logo', 
			'title' => esc_html__('Footer Logo', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMASTERS_SHORTNAME . '_footer_logo_url', 
			'title' => esc_html__('Footer Logo', 'construction-pro'), 
			'desc' => esc_html__('Choose your website footer logo image.', 'construction-pro'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_footer.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMASTERS_SHORTNAME . '_footer_logo_url_retina', 
			'title' => esc_html__('Footer Logo for Retina', 'construction-pro'), 
			'desc' => esc_html__('Choose your website footer logo image for retina.', 'construction-pro'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_footer_retina.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMASTERS_SHORTNAME . '_footer_nav', 
			'title' => esc_html__('Footer Navigation', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMASTERS_SHORTNAME . '_footer_social', 
			'title' => esc_html__('Footer Social Icons', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMASTERS_SHORTNAME . '_footer_html', 
			'title' => esc_html__('Footer Custom HTML', 'construction-pro'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'construction-pro') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMASTERS_SHORTNAME . '_footer_copyright', 
			'title' => esc_html__('Copyright Text', 'construction-pro'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => CMSMASTERS_FULLNAME . ' &copy; 2015 | ' . esc_html__('All Rights Reserved', 'construction-pro'), 
			'class' => '' 
		);
		
		break;
	}
	
	return $options;	
}

