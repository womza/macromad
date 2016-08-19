<?php 
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version		1.0.0
 * 
 * Admin Panel Theme Settings Import/Export
 * Created by CMSMasters
 * 
 */


function construction_pro_options_demo_tabs() {
	$tabs = array();
	
	
	$tabs['import'] = esc_attr__('Import', 'construction-pro');
	$tabs['export'] = esc_attr__('Export', 'construction-pro');
	
	
	return $tabs;
}


function construction_pro_options_demo_sections() {
	$tab = construction_pro_get_the_tab();
	
	
	switch ($tab) {
	case 'import':
		$sections = array();
		
		$sections['import_section'] = esc_html__('Theme Settings Import', 'construction-pro');
		
		
		break;
	case 'export':
		$sections = array();
		
		$sections['export_section'] = esc_html__('Theme Settings Export', 'construction-pro');
		
		
		break;
	}
	
	
	return $sections;
} 


function construction_pro_options_demo_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = construction_pro_get_the_tab();
	}
	
	
	$options = array();
	
	
	switch ($tab) {
	case 'import':
		$options[] = array( 
			'section' => 'import_section', 
			'id' => CMSMASTERS_SHORTNAME . '_demo_import', 
			'title' => esc_html__('Theme Settings', 'construction-pro'), 
			'desc' => esc_html__("Enter your theme settings data here and click 'Import' button", 'construction-pro'), 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		
		break;
	case 'export':
		$options[] = array( 
			'section' => 'export_section', 
			'id' => CMSMASTERS_SHORTNAME . '_demo_export', 
			'title' => esc_html__('Theme Settings', 'construction-pro'), 
			'desc' => esc_html__("Click here to export your theme settings data to the file", 'construction-pro'), 
			'type' => 'button', 
			'std' => esc_attr__('Export Theme Settings', 'construction-pro'), 
			'class' => 'cmsmasters-demo-export' 
		);
		
		
		break;
	}
	
	
	return $options;	
}

