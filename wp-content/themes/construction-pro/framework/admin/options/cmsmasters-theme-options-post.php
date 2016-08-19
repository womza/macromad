<?php 
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version 	1.0.0
 * 
 * Post Options Functions
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = construction_pro_get_global_options();


$cmsmasters_global_blog_post_layout = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_layout']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_layout'] !== '') ? $cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_layout'] : 'r_sidebar';

$cmsmasters_global_bottom_sidebar = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_sidebar']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_sidebar'] !== '') ? (($cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_sidebar'] == 1) ? 'true' : 'false') : 'true';

$cmsmasters_global_bottom_sidebar_layout = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_sidebar_layout'])) ? $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_sidebar_layout'] : '14141414';

$cmsmasters_global_bg = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_theme_layout']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_theme_layout'] === 'boxed') ? true : false;


$cmsmasters_global_blog_post_title = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_title']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_title'] !== '') ? (($cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_title'] == 1) ? 'true' : 'false') : 'true';

$cmsmasters_global_blog_post_share_box = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_share_box']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_share_box'] !== '') ? (($cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_share_box'] == 1) ? 'true' : 'false') : 'true';

$cmsmasters_global_blog_post_author_box = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_author_box']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_author_box'] !== '') ? (($cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_author_box'] == 1) ? 'true' : 'false') : 'true';

$cmsmasters_global_blog_more_posts_box = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_more_posts_box'])) ? $cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_more_posts_box'] : 'related';


$cmsmasters_option_name = 'cmsmasters_post_';


$tabs_array = array();


$tabs_array['cmsmasters_post'] = array( 
	'label' => esc_html__('Post', 'construction-pro'), 
	'value'	=> 'cmsmasters_post' 
);


$tabs_array['cmsmasters_layout'] = array( 
	'label' => esc_html__('Layout', 'construction-pro'), 
	'value'	=> 'cmsmasters_layout' 
);


if ($cmsmasters_global_bg) {
	$tabs_array['cmsmasters_bg'] = array( 
		'label' => esc_html__('Background', 'construction-pro'), 
		'value'	=> 'cmsmasters_bg' 
	);
}


$tabs_array['cmsmasters_heading'] = array( 
	'label' => esc_html__('Heading', 'construction-pro'), 
	'value'	=> 'cmsmasters_heading' 
);


$custom_post_meta_fields = array( 
	array( 
		'id'	=> 'cmsmasters_post_image', 
		'type'	=> 'content_start', 
		'box'	=> 'true', 
		'hide'	=> 'true' 
	), 
	array( 
		'label'	=> esc_html__('Post Image', 'construction-pro'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'image_link', 
		'type'	=> 'image', 
		'hide'	=> '', 
		'cancel' => 'true', 
		'std'	=> '', 
		'frame' => 'select', 
		'multiple' => false 
	), 
	array( 
		'id'	=> 'cmsmasters_post_image', 
		'type'	=> 'content_finish' 
	), 
	array( 
		'id'	=> 'cmsmasters_post_gallery', 
		'type'	=> 'content_start', 
		'box'	=> 'true', 
		'hide'	=> 'true' 
	), 
	array( 
		'label'	=> esc_html__('Post Gallery', 'construction-pro'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'images', 
		'type'	=> 'images_list', 
		'hide'	=> '', 
		'std'	=> '', 
		'frame' => 'post', 
		'multiple' => true 
	), 
	array( 
		'id'	=> 'cmsmasters_post_gallery', 
		'type'	=> 'content_finish' 
	), 
	array( 
		'id'	=> 'cmsmasters_post_video', 
		'type'	=> 'content_start', 
		'box'	=> 'true', 
		'hide'	=> 'true' 
	), 
	array( 
		'label'	=> esc_html__('Video Type', 'construction-pro'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'video_type', 
		'type'	=> 'radio', 
		'hide'	=> '', 
		'std'	=> 'embedded', 
		'options' => array( 
			'embedded' => array( 
				'label' => esc_html__('Embedded (YouTube, Vimeo)', 'construction-pro'), 
				'value'	=> 'embedded' 
			), 
			'selfhosted' => array( 
				'label' => esc_html__('Self-Hosted', 'construction-pro'), 
				'value'	=> 'selfhosted' 
			) 
		) 
	), 
	array( 
		'label'	=> esc_html__('Embedded Video Link', 'construction-pro'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'video_link', 
		'type'	=> 'text_long', 
		'hide'	=> 'true', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> esc_html__('Self-Hosted Video Links', 'construction-pro'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'video_links', 
		'type'	=> 'repeatable', 
		'hide'	=> 'true', 
		'std'	=> '' 
	), 
	array( 
		'id'	=> 'cmsmasters_post_video', 
		'type'	=> 'content_finish' 
	), 
	array( 
		'id'	=> 'cmsmasters_post_audio', 
		'type'	=> 'content_start', 
		'box'	=> 'true', 
		'hide'	=> 'true' 
	), 
	array( 
		'label'	=> esc_html__('Audio Links', 'construction-pro'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'audio_links', 
		'type'	=> 'repeatable', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'id'	=> 'cmsmasters_post_audio', 
		'type'	=> 'content_finish' 
	), 
	array( 
		'id'	=> 'cmsmasters_post_format', 
		'type'	=> 'content_start', 
		'box'	=> '' 
	), 
	array( 
		'id'	=> 'cmsmasters_post_format', 
		'type'	=> 'content_finish' 
	), 
	array( 
		'id'	=> $cmsmasters_option_name . 'tabs', 
		'type'	=> 'tabs', 
		'std'	=> 'cmsmasters_post', 
		'options' => $tabs_array 
	), 
	array( 
		'id'	=> 'cmsmasters_post', 
		'type'	=> 'tab_start', 
		'std'	=> 'true' 
	), 
	array( 
		'label'	=> esc_html__('Post Title', 'construction-pro'), 
		'desc'	=> esc_html__('Show', 'construction-pro'), 
		'id'	=> $cmsmasters_option_name . 'title', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> $cmsmasters_global_blog_post_title 
	), 
	array( 
		'label'	=> esc_html__('Sharing Box', 'construction-pro'), 
		'desc'	=> esc_html__('Show', 'construction-pro'), 
		'id'	=> $cmsmasters_option_name . 'sharing_box', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> $cmsmasters_global_blog_post_share_box 
	), 
	array( 
		'label'	=> esc_html__('About Author Box', 'construction-pro'), 
		'desc'	=> esc_html__('Show', 'construction-pro'), 
		'id'	=> $cmsmasters_option_name . 'author_box', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> $cmsmasters_global_blog_post_author_box 
	), 
	array( 
		'label'	=> esc_html__('More Posts Box', 'construction-pro'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'more_posts', 
		'type'	=> 'select', 
		'hide'	=> '', 
		'std'	=> $cmsmasters_global_blog_more_posts_box, 
		'options' => array( 
			'related' => array( 
				'label' => esc_html__('Show Related Tab', 'construction-pro'), 
				'value'	=> 'related' 
			), 
			'popular' => array( 
				'label' => esc_html__('Show Popular Tab', 'construction-pro'), 
				'value'	=> 'popular' 
			), 
			'recent' => array( 
				'label' => esc_html__('Show Recent Tab', 'construction-pro'), 
				'value'	=> 'recent' 
			), 
			'hide' => array( 
				'label' => esc_html__('Hide More Posts Box', 'construction-pro'), 
				'value'	=> 'hide' 
			) 
		) 
	), 
	array( 
		'label'	=> esc_html__("'Read More' Buttons Text", 'construction-pro'), 
		'desc'	=> esc_html__("Enter the 'Read More' button text that should be used in you blog shortcode", 'construction-pro'), 
		'id'	=> $cmsmasters_option_name . 'read_more', 
		'type'	=> 'text', 
		'hide'	=> '', 
		'std'	=> esc_attr__('Read More', 'construction-pro') 
	), 
	array( 
		'id'	=> 'cmsmasters_post', 
		'type'	=> 'tab_finish' 
	), 
	array( 
		'id'	=> 'cmsmasters_layout', 
		'type'	=> 'tab_start', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> esc_html__('Page Color Scheme', 'construction-pro'), 
		'desc'	=> '', 
		'id'	=> 'cmsmasters_page_scheme', 
		'type'	=> 'select_scheme', 
		'hide'	=> 'false', 
		'std'	=> 'default' 
	), 
	array( 
		'label'	=> esc_html__('Page Layout', 'construction-pro'), 
		'desc'	=> '', 
		'id'	=> 'cmsmasters_layout', 
		'type'	=> 'radio_img', 
		'hide'	=> '', 
		'std'	=> $cmsmasters_global_blog_post_layout, 
		'options' => array( 
			'r_sidebar' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg', 
				'label' => esc_html__('Right Sidebar', 'construction-pro'), 
				'value'	=> 'r_sidebar' 
			), 
			'l_sidebar' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg', 
				'label' => esc_html__('Left Sidebar', 'construction-pro'), 
				'value'	=> 'l_sidebar' 
			), 
			'fullwidth' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg', 
				'label' => esc_html__('Full Width', 'construction-pro'), 
				'value'	=> 'fullwidth' 
			) 
		) 
	), 
	array( 
		'label'	=> esc_html__('Choose Right\Left Sidebar', 'construction-pro'), 
		'desc'	=> '', 
		'id'	=> 'cmsmasters_sidebar_id', 
		'type'	=> 'select_sidebar', 
		'hide'	=> 'true', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> esc_html__('Bottom Sidebar', 'construction-pro'), 
		'desc'	=> esc_html__('Show', 'construction-pro'), 
		'id'	=> 'cmsmasters_bottom_sidebar', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> $cmsmasters_global_bottom_sidebar 
	), 
	array( 
		'label'	=> esc_html__('Choose Bottom Sidebar', 'construction-pro'), 
		'desc'	=> '', 
		'id'	=> 'cmsmasters_bottom_sidebar_id', 
		'type'	=> 'select_sidebar', 
		'hide'	=> 'true', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> esc_html__('Choose Bottom Sidebar Layout', 'construction-pro'), 
		'desc'	=> '', 
		'id'	=> 'cmsmasters_bottom_sidebar_layout', 
		'type'	=> 'select', 
		'hide'	=> 'true', 
		'std'	=> $cmsmasters_global_bottom_sidebar_layout, 
		'options' => array( 
			'11' => array( 
				'label' => '1/1',
				'value'	=> '11' 
			), 
			'1212' => array( 
				'label' => '1/2 + 1/2',
				'value'	=> '1212' 
			), 
			'1323' => array( 
				'label' => '1/3 + 2/3',
				'value'	=> '1323' 
			), 
			'2313' => array( 
				'label' => '2/3 + 1/3',
				'value'	=> '2313' 
			), 
			'1434' => array( 
				'label' => '1/4 + 3/4',
				'value'	=> '1434' 
			), 
			'3414' => array( 
				'label' => '3/4 + 1/4',
				'value'	=> '3414' 
			), 
			'131313' => array( 
				'label' => '1/3 + 1/3 + 1/3',
				'value'	=> '131313' 
			), 
			'121414' => array( 
				'label' => '1/2 + 1/4 + 1/4',
				'value'	=> '121414' 
			), 
			'141214' => array( 
				'label' => '1/4 + 1/2 + 1/4',
				'value'	=> '141214' 
			), 
			'141412' => array( 
				'label' => '1/4 + 1/4 + 1/2',
				'value'	=> '141412' 
			), 
			'14141414' => array( 
				'label' => '1/4 + 1/4 + 1/4 + 1/4',
				'value'	=> '14141414' 
			) 
		) 
	), 
	array( 
		'id'	=> 'cmsmasters_layout', 
		'type'	=> 'tab_finish' 
	) 
);
