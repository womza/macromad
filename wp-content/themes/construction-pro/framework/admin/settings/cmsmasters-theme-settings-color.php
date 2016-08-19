<?php 
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version		1.0.0
 * 
 * Admin Panel Colors Options
 * Created by CMSMasters
 * 
 */


function construction_pro_options_color_tabs() {
	$tabs = array();
	
	
	foreach (construction_pro_all_color_schemes_list() as $key => $value) {
		$tabs[$key] = $value;
	}
	
	
	return $tabs;
}



function construction_pro_options_color_sections() {
	$tab = construction_pro_get_the_tab();
	
	
	$schemes = construction_pro_all_color_schemes_list();
	
	
	$sections = array();
	
	
	$sections[$tab . '_section'] = $schemes[$tab] . ' ' . esc_html__('Color Scheme Options', 'construction-pro');
	
	
	return $sections;
} 



function construction_pro_options_color_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = construction_pro_get_the_tab();
	}
	
	
	$defaults = construction_pro_color_schemes_defaults();
	
	
	$options = array();
	
	
	if ($tab == 'header' || $tab == 'header_bottom') { // Header & Header Bottom
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_color', 
			'title' => esc_html__('Text Font Color', 'construction-pro'), 
			'desc' => esc_html__('Font color for header text', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['color'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_link', 
			'title' => esc_html__('Primary Font Color', 'construction-pro'), 
			'desc' => esc_html__('Font color for header headings, links, etc', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_secondary', 
			'title' => esc_html__('Secondary Color', 'construction-pro'), 
			'desc' => esc_html__('Secondary color for header headings, links, etc', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['secondary'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_hover', 
			'title' => esc_html__('Rollover Font Color', 'construction-pro'), 
			'desc' => esc_html__('Font color for header links rollovers, etc', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_subtitle', 
			'title' => esc_html__('Subtitle Font Color', 'construction-pro'), 
			'desc' => esc_html__('Font color for navigation subtitle, etc', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['subtitle'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_bg', 
			'title' => esc_html__('Background Color', 'construction-pro'), 
			'desc' => esc_html__('Header block background color', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_bg_scroll', 
			'title' => esc_html__('Background Color on Scroll', 'construction-pro'), 
			'desc' => esc_html__('Header block background color on scroll', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['bg_scroll'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_hover_bg', 
			'title' => esc_html__('Rollover Background Color', 'construction-pro'), 
			'desc' => esc_html__('Background color for main navigation top level links rollovers and some other elements', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['hover_bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_border', 
			'title' => esc_html__('Border Color', 'construction-pro'), 
			'desc' => esc_html__('Color for borders in header block', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['border'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_dropdown_link', 
			'title' => esc_html__('Dropdown Links Color', 'construction-pro'), 
			'desc' => esc_html__('Links color for header main navigation dropdown', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_dropdown_hover', 
			'title' => esc_html__('Dropdown Rollover Font Color', 'construction-pro'), 
			'desc' => esc_html__('Font color for header links rollovers in main navigation dropdown, etc', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_dropdown_subtitle', 
			'title' => esc_html__('Dropdown Subtitle Font Color', 'construction-pro'), 
			'desc' => esc_html__('Font color for navigation dropdown subtitle, etc', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_subtitle'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_dropdown_bg', 
			'title' => esc_html__('Dropdown Background Color', 'construction-pro'), 
			'desc' => esc_html__('Header block background color for main navigation dropdown', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_dropdown_hover_bg', 
			'title' => esc_html__('Dropdown Rollover Background Color', 'construction-pro'), 
			'desc' => esc_html__('Background color for main navigation dropdown links rollovers and some other elements', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_hover_bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_dropdown_border', 
			'title' => esc_html__('Dropdown Border Color', 'construction-pro'), 
			'desc' => esc_html__('Color for borders for main navigation dropdown in header block ', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_border'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_dropdown_shadow', 
			'title' => esc_html__('Dropdown Shadow', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_dropdown_shadow_opacity', 
			'title' => esc_html__('Dropdown Shadow Opacity', 'construction-pro'), 
			'desc' => '', 
			'type' => 'number', 
			'std' => '15', 
			'min' => '0', 
			'max' => '100' 
		);
	} elseif ($tab == 'header_top') { // Header Top
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_color', 
			'title' => esc_html__('Content Font Color', 'construction-pro'), 
			'desc' => esc_html__('Font color for header top main content, headings, links, etc', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['color'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_link', 
			'title' => esc_html__('Primary Font Color', 'construction-pro'), 
			'desc' => esc_html__('Font color for header top headings, links, etc', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['link'] 
		);
			
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_secondary', 
			'title' => esc_html__('Secondary Color', 'construction-pro'), 
			'desc' => esc_html__('Secondary color for header top main content, headings, links, etc', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['secondary'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_hover', 
			'title' => esc_html__('Rollover Font Color', 'construction-pro'), 
			'desc' => esc_html__('Font color for header top links rollovers, etc', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_bg', 
			'title' => esc_html__('Background Color', 'construction-pro'), 
			'desc' => esc_html__('Header top block background color', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_border', 
			'title' => esc_html__('Border Color', 'construction-pro'), 
			'desc' => esc_html__('Color for borders in header top block', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['border'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_dropdown_link', 
			'title' => esc_html__('Dropdown Links Color', 'construction-pro'), 
			'desc' => esc_html__('Links color for header top main navigation dropdown', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_dropdown_hover', 
			'title' => esc_html__('Dropdown Rollover Font Color', 'construction-pro'), 
			'desc' => esc_html__('Font color for header top links rollovers in main navigation dropdown, etc', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_dropdown_bg', 
			'title' => esc_html__('Dropdown Background Color', 'construction-pro'), 
			'desc' => esc_html__('Header top block background color for main navigation dropdown', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_dropdown_border', 
			'title' => esc_html__('Dropdown Border Color', 'construction-pro'), 
			'desc' => esc_html__('Color for borders for main navigation dropdown in header top block ', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_border'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_dropdown_shadow', 
			'title' => esc_html__('Dropdown Shadow', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_dropdown_shadow_opacity', 
			'title' => esc_html__('Dropdown Shadow Opacity', 'construction-pro'), 
			'desc' => '', 
			'type' => 'number', 
			'std' => '2', 
			'min' => '0', 
			'max' => '100' 
		);
	} else { // Other
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_color', 
			'title' => esc_html__('Main Content Font Color', 'construction-pro'), 
			'desc' => esc_html__('Font color for main content', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['color'] : $defaults['default']['color'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_link', 
			'title' => esc_html__('Primary Color', 'construction-pro'), 
			'desc' => esc_html__('First color for links and some other elements', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['link'] : $defaults['default']['link'] 
		);
				
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_secondary', 
			'title' => esc_html__('Secondary Color', 'construction-pro'), 
			'desc' => esc_html__('Secondary color for links and some other elements', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['secondary'] : $defaults['default']['secondary'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_hover', 
			'title' => esc_html__('Highlight Color', 'construction-pro'), 
			'desc' => esc_html__('Color for links rollovers, etc', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['hover'] : $defaults['default']['hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_heading', 
			'title' => esc_html__('Headings Color', 'construction-pro'), 
			'desc' => esc_html__('Color for headings and some other elements', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['heading'] : $defaults['default']['heading'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_bg', 
			'title' => esc_html__('Main Background Color', 'construction-pro'), 
			'desc' => esc_html__('Main background color for some elements', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['bg'] : $defaults['default']['bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_alternate', 
			'title' => esc_html__('Alternate Background Color', 'construction-pro'), 
			'desc' => esc_html__('Alternate background color for some elements', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['alternate'] : $defaults['default']['alternate'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_border', 
			'title' => esc_html__('Borders Color', 'construction-pro'), 
			'desc' => esc_html__('Color for borders', 'construction-pro'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['border'] : $defaults['default']['border'] 
		);
	}
	
	
	return $options;	
}

