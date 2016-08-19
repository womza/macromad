<?php 
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version 	1.0.0
 * 
 * Admin Panel Element Options
 * Created by CMSMasters
 * 
 */


function construction_pro_options_element_tabs() {
	$tabs = array();
	
	$tabs['sidebar'] = esc_attr__('Sidebars', 'construction-pro');
	$tabs['icon'] = esc_attr__('Social Icons', 'construction-pro');
	$tabs['lightbox'] = esc_attr__('Lightbox', 'construction-pro');
	$tabs['sitemap'] = esc_attr__('Sitemap', 'construction-pro');
	$tabs['error'] = esc_attr__('404', 'construction-pro');
	$tabs['code'] = esc_attr__('Custom Codes', 'construction-pro');
	
	if (class_exists('Cmsmasters_Form_Builder')) {
		$tabs['recaptcha'] = esc_attr__('reCAPTCHA', 'construction-pro');
	}
	
	return $tabs;
}


function construction_pro_options_element_sections() {
	$tab = construction_pro_get_the_tab();
	
	switch ($tab) {
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = esc_attr__('Custom Sidebars', 'construction-pro');
		
		break;
	case 'icon':
		$sections = array();
		
		$sections['icon_section'] = esc_attr__('Social Icons', 'construction-pro');
		
		break;
	case 'lightbox':
		$sections = array();
		
		$sections['lightbox_section'] = esc_attr__('Theme Lightbox Options', 'construction-pro');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = esc_attr__('Sitemap Page Options', 'construction-pro');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = esc_attr__('404 Error Page Options', 'construction-pro');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = esc_attr__('Custom Codes', 'construction-pro');
		
		break;
	case 'recaptcha':
		$sections = array();
		
		$sections['recaptcha_section'] = esc_attr__('Form Builder Plugin reCAPTCHA Keys', 'construction-pro');
		
		break;
	}
	
	return $sections;	
} 


function construction_pro_options_element_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = construction_pro_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => CMSMASTERS_SHORTNAME . '_sidebar', 
			'title' => esc_html__('Custom Sidebars', 'construction-pro'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => '' 
		);
		
		break;
	case 'icon':
		$options[] = array( 
			'section' => 'icon_section', 
			'id' => CMSMASTERS_SHORTNAME . '_social_icons', 
			'title' => esc_html__('Social Icons', 'construction-pro'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => array( 
				'cmsmasters-icon-twitter-circled|#|' . esc_attr__('Twitter', 'construction-pro') . '|true||', 
				'cmsmasters-icon-facebook-circled|#|' . esc_attr__('Facebook', 'construction-pro') . '|true||', 
				'cmsmasters-icon-gplus-circled|#|' . esc_attr__('Google+', 'construction-pro') . '|true||', 
				'cmsmasters-icon-vimeo-circled|#|' . esc_attr__('Vimeo', 'construction-pro') . '|true||', 
				'cmsmasters-icon-skype-circled|#|' . esc_attr__('Skype', 'construction-pro') . '|true||' 
			) 
		);
		
		break;
	case 'lightbox':
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_skin', 
			'title' => esc_html__('Skin', 'construction-pro'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'dark', 
			'choices' => array( 
				esc_attr__('Dark', 'construction-pro') . '|dark', 
				esc_attr__('Light', 'construction-pro') . '|light', 
				esc_attr__('Mac', 'construction-pro') . '|mac', 
				esc_attr__('Metro Black', 'construction-pro') . '|metro-black', 
				esc_attr__('Metro White', 'construction-pro') . '|metro-white', 
				esc_attr__('Parade', 'construction-pro') . '|parade', 
				esc_attr__('Smooth', 'construction-pro') . '|smooth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_path', 
			'title' => esc_html__('Path', 'construction-pro'), 
			'desc' => esc_html__('Sets path for switching windows', 'construction-pro'), 
			'type' => 'radio', 
			'std' => 'vertical', 
			'choices' => array( 
				esc_attr__('Vertical', 'construction-pro') . '|vertical', 
				esc_attr__('Horizontal', 'construction-pro') . '|horizontal' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_infinite', 
			'title' => esc_html__('Infinite', 'construction-pro'), 
			'desc' => esc_html__('Sets the ability to infinite the group', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_aspect_ratio', 
			'title' => esc_html__('Keep Aspect Ratio', 'construction-pro'), 
			'desc' => esc_html__('Sets the resizing method used to keep aspect ratio within the viewport', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_mobile_optimizer', 
			'title' => esc_html__('Mobile Optimizer', 'construction-pro'), 
			'desc' => esc_html__('Make lightboxes optimized for giving better experience with mobile devices', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_max_scale', 
			'title' => esc_html__('Max Scale', 'construction-pro'), 
			'desc' => esc_html__('Sets the maximum viewport scale of the content', 'construction-pro'), 
			'type' => 'number', 
			'std' => 1, 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_min_scale', 
			'title' => esc_html__('Min Scale', 'construction-pro'), 
			'desc' => esc_html__('Sets the minimum viewport scale of the content', 'construction-pro'), 
			'type' => 'number', 
			'std' => 0.2, 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_inner_toolbar', 
			'title' => esc_html__('Inner Toolbar', 'construction-pro'), 
			'desc' => esc_html__('Bring buttons into windows, or let them be over the overlay', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_smart_recognition', 
			'title' => esc_html__('Smart Recognition', 'construction-pro'), 
			'desc' => esc_html__('Sets content auto recognize from web pages', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_fullscreen_one_slide', 
			'title' => esc_html__('Fullscreen One Slide', 'construction-pro'), 
			'desc' => esc_html__('Decide to fullscreen only one slide or hole gallery the fullscreen mode', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_fullscreen_viewport', 
			'title' => esc_html__('Fullscreen Viewport', 'construction-pro'), 
			'desc' => esc_html__('Sets the resizing method used to fit content within the fullscreen mode', 'construction-pro'), 
			'type' => 'select', 
			'std' => 'center', 
			'choices' => array( 
				esc_attr__('Center', 'construction-pro') . '|center', 
				esc_attr__('Fit', 'construction-pro') . '|fit', 
				esc_attr__('Fill', 'construction-pro') . '|fill', 
				esc_attr__('Stretch', 'construction-pro') . '|stretch' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_controls_toolbar', 
			'title' => esc_html__('Toolbar Controls', 'construction-pro'), 
			'desc' => esc_html__('Sets buttons be available or not', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_controls_arrows', 
			'title' => esc_html__('Arrow Controls', 'construction-pro'), 
			'desc' => esc_html__('Enable the arrow buttons', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_controls_fullscreen', 
			'title' => esc_html__('Fullscreen Controls', 'construction-pro'), 
			'desc' => esc_html__('Sets the fullscreen button', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_controls_thumbnail', 
			'title' => esc_html__('Thumbnails Controls', 'construction-pro'), 
			'desc' => esc_html__('Sets the thumbnail navigation', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_controls_keyboard', 
			'title' => esc_html__('Keyboard Controls', 'construction-pro'), 
			'desc' => esc_html__('Sets the keyboard navigation', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_controls_mousewheel', 
			'title' => esc_html__('Mouse Wheel Controls', 'construction-pro'), 
			'desc' => esc_html__('Sets the mousewheel navigation', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_controls_swipe', 
			'title' => esc_html__('Swipe Controls', 'construction-pro'), 
			'desc' => esc_html__('Sets the swipe navigation', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_controls_slideshow', 
			'title' => esc_html__('Slideshow Controls', 'construction-pro'), 
			'desc' => esc_html__('Enable the slideshow feature and button', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMASTERS_SHORTNAME . '_sitemap_nav', 
			'title' => esc_html__('Website Pages', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMASTERS_SHORTNAME . '_sitemap_categs', 
			'title' => esc_html__('Blog Archives by Categories', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMASTERS_SHORTNAME . '_sitemap_tags', 
			'title' => esc_html__('Blog Archives by Tags', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMASTERS_SHORTNAME . '_sitemap_month', 
			'title' => esc_html__('Blog Archives by Month', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMASTERS_SHORTNAME . '_sitemap_pj_categs', 
			'title' => esc_html__('Portfolio Archives by Categories', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMASTERS_SHORTNAME . '_sitemap_pj_tags', 
			'title' => esc_html__('Portfolio Archives by Tags', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMASTERS_SHORTNAME . '_error_color', 
			'title' => esc_html__('Text Color', 'construction-pro'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '#f9f9f9' 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMASTERS_SHORTNAME . '_error_bg_color', 
			'title' => esc_html__('Background Color', 'construction-pro'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '#ffffff' 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMASTERS_SHORTNAME . '_error_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMASTERS_SHORTNAME . '_error_bg_image', 
			'title' => esc_html__('Background Image', 'construction-pro'), 
			'desc' => esc_html__('Choose your custom error page background image.', 'construction-pro'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMASTERS_SHORTNAME . '_error_bg_rep', 
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
			'section' => 'error_section', 
			'id' => CMSMASTERS_SHORTNAME . '_error_bg_pos', 
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
			'section' => 'error_section', 
			'id' => CMSMASTERS_SHORTNAME . '_error_bg_att', 
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
			'section' => 'error_section', 
			'id' => CMSMASTERS_SHORTNAME . '_error_bg_size', 
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
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMASTERS_SHORTNAME . '_error_search', 
			'title' => esc_html__('Search Line', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMASTERS_SHORTNAME . '_error_sitemap_button', 
			'title' => esc_html__('Sitemap Button', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMASTERS_SHORTNAME . '_error_sitemap_link', 
			'title' => esc_html__('Sitemap Page URL', 'construction-pro'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMASTERS_SHORTNAME . '_custom_css', 
			'title' => esc_html__('Custom CSS', 'construction-pro'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMASTERS_SHORTNAME . '_custom_js', 
			'title' => esc_html__('Custom JavaScript', 'construction-pro'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMASTERS_SHORTNAME . '_api_key', 
			'title' => esc_html__('Twitter API key', 'construction-pro'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMASTERS_SHORTNAME . '_api_secret', 
			'title' => esc_html__('Twitter API secret', 'construction-pro'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMASTERS_SHORTNAME . '_access_token', 
			'title' => esc_html__('Twitter Access token', 'construction-pro'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMASTERS_SHORTNAME . '_access_token_secret', 
			'title' => esc_html__('Twitter Access token secret', 'construction-pro'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'recaptcha':
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => CMSMASTERS_SHORTNAME . '_recaptcha_public_key', 
			'title' => esc_html__('reCAPTCHA Public Key', 'construction-pro'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => CMSMASTERS_SHORTNAME . '_recaptcha_private_key', 
			'title' => esc_html__('reCAPTCHA Private Key', 'construction-pro'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	}
	
	return $options;	
}

