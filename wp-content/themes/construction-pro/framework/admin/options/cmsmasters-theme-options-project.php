<?php 
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version 	1.0.0
 * 
 * Project Options Functions
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = construction_pro_get_global_options();


$cmsmasters_global_bottom_sidebar = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_sidebar']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_sidebar'] !== '') ? (($cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_sidebar'] == 1) ? 'true' : 'false') : 'true';

$cmsmasters_global_bottom_sidebar_layout = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_sidebar_layout'])) ? $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_sidebar_layout'] : '14141414';

$cmsmasters_global_bg = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_theme_layout']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_theme_layout'] === 'boxed') ? true : false;


$cmsmasters_global_portfolio_project_title = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_project_title']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_project_title'] !== '') ? (($cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_project_title'] == 1) ? 'true' : 'false') : 'true';

$cmsmasters_global_portfolio_project_details_title = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_project_details_title']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_project_details_title'] !== '') ? $cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_project_details_title'] : esc_html__('Project details', 'construction-pro');

$cmsmasters_global_portfolio_project_share_box = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_project_share_box']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_project_share_box'] !== '') ? (($cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_project_share_box'] == 1) ? 'true' : 'false') : 'true';

$cmsmasters_global_portfolio_project_author_box = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_project_author_box']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_project_author_box'] !== '') ? (($cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_project_author_box'] == 1) ? 'true' : 'false') : 'true';

$cmsmasters_global_portfolio_more_projects_box = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_more_projects_box'])) ? $cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_more_projects_box'] : 'related';


$cmsmasters_option_name = 'cmsmasters_project_';


$tabs_array = array();


$tabs_array['cmsmasters_project'] = array( 
	'label' => esc_html__('Project', 'construction-pro'), 
	'value'	=> 'cmsmasters_project' 
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


$custom_project_meta_fields = array( 
	array( 
		'id'	=> 'cmsmasters_project_images', 
		'type'	=> 'content_start', 
		'box'	=> 'true', 
		'hide'	=> 'true' 
	), 
	array( 
		'label'	=> esc_html__('Project Images', 'construction-pro'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'images', 
		'type'	=> 'images_list', 
		'hide'	=> '', 
		'std'	=> '', 
		'frame' => 'post', 
		'multiple' => true 
	), 
	array( 
		'label'	=> esc_html__('Number of Columns', 'construction-pro'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'columns', 
		'type'	=> 'radio', 
		'hide'	=> 'true', 
		'std'	=> 'three', 
		'options' => array( 
			'three' => array( 
				'label' => esc_html__('Three', 'construction-pro'), 
				'value'	=> 'three' 
			), 
			'two' => array( 
				'label' => esc_html__('Two', 'construction-pro'), 
				'value'	=> 'two' 
			), 
			'one' => array( 
				'label' => esc_html__('One', 'construction-pro'), 
				'value'	=> 'one' 
			) 
		) 
	),
	array( 
		'label'	=> esc_html__('Project Images Rollover Background Color', 'construction-pro'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'images_rollover_bg', 
		'type'	=> 'rgba', 
		'hide'	=> 'true', 
		'std'	=> '#000000'
	), 
	array( 
		'id'	=> 'cmsmasters_project_images', 
		'type'	=> 'content_finish' 
	), 
	array( 
		'id'	=> 'cmsmasters_project_video', 
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
		'id'	=> 'cmsmasters_project_video', 
		'type'	=> 'content_finish' 
	), 
	array( 
		'id'	=> $cmsmasters_option_name . 'tabs', 
		'type'	=> 'tabs', 
		'std'	=> 'cmsmasters_project', 
		'options' => $tabs_array 
	), 
	array( 
		'id'	=> 'cmsmasters_project', 
		'type'	=> 'tab_start', 
		'std'	=> 'true' 
	), 
	array( 
		'label'	=> esc_html__('Project Title', 'construction-pro'), 
		'desc'	=> esc_html__('Show', 'construction-pro'), 
		'id'	=> $cmsmasters_option_name . 'title', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> $cmsmasters_global_portfolio_project_title 
	), 
	array( 
		'label'	=> esc_html__('Project Size', 'construction-pro'), 
		'desc'	=> esc_html__('Recomended Featured Image dimensions', 'construction-pro') . ' - ', 
		'id'	=> $cmsmasters_option_name . 'size', 
		'type'	=> 'radio_img_pj', 
		'hide'	=> '', 
		'std'	=> 'one_x_one', 
		'options' => array( 
			'one_x_one' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/one_x_one.jpg', 
				'size' => '580 x 348', 
				'label' => '1 x 1', 
				'value'	=> 'one_x_one' 
			), 
			'one_x_two' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/one_x_two.jpg', 
				'size' => '580 x 696', 
				'label' => '1 x 2', 
				'value'	=> 'one_x_two' 
			), 
			'one_x_three' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/one_x_three.jpg', 
				'size' => '580 x 1044', 
				'label' => '1 x 3', 
				'value'	=> 'one_x_three' 
			), 
			'two_x_one' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/two_x_one.jpg', 
				'size' => '1160 x 348', 
				'label' => '2 x 1', 
				'value'	=> 'two_x_one' 
			), 
			'two_x_two' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/two_x_two.jpg', 
				'size' => '1160 x 696', 
				'label' => '2 x 2', 
				'value'	=> 'two_x_two' 
			), 
			'two_x_three' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/two_x_three.jpg', 
				'size' => '1160 x 1044', 
				'label' => '2 x 3', 
				'value'	=> 'two_x_three' 
			), 
			'three_x_one' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/three_x_one.jpg', 
				'size' => '1740 x 348', 
				'label' => '3 x 1', 
				'value'	=> 'three_x_one' 
			), 
			'three_x_two' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/three_x_two.jpg', 
				'size' => '1740 x 696', 
				'label' => '3 x 2', 
				'value'	=> 'three_x_two' 
			), 
			'three_x_three' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/three_x_three.jpg', 
				'size' => '1740	x 1044', 
				'label' => '3 x 3', 
				'value'	=> 'three_x_three' 
			), 
			'four_x_four' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/four_x_four.jpg', 
				'size' => '1060 x 696', 
				'label' => '4 x 4', 
				'value'	=> 'four_x_four' 
			) 
		) 
	), 
	array( 
		'label'	=> esc_html__('Project Details Title', 'construction-pro'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'details_title', 
		'type'	=> 'text_long', 
		'hide'	=> '', 
		'std'	=> $cmsmasters_global_portfolio_project_details_title 
	), 
	array( 
		'label'	=> esc_html__('Project Info', 'construction-pro'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'features', 
		'type'	=> 'repeatable_multiple', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> esc_html__("Project Link Text", 'construction-pro'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'link_text', 
		'type'	=> 'text', 
		'hide'	=> '', 
		'std'	=> esc_html__('View Project', 'construction-pro') 
	), 
	array( 
		'label'	=> esc_html__("Project Link URL", 'construction-pro'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'link_url', 
		'type'	=> 'text_long', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> '', 
		'desc'	=> esc_html__('Redirect to project link URL instead of opening project page', 'construction-pro'), 
		'id'	=> $cmsmasters_option_name . 'link_redirect', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> 'true' 
	), 
	array( 
		'label'	=> esc_html__("Project Link Target", 'construction-pro'), 
		'desc'	=> esc_html__('Open link in a new tab', 'construction-pro'), 
		'id'	=> $cmsmasters_option_name . 'link_target', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> 'true' 
	), 
	array( 
		'label'	=> esc_html__('Project Features 1 Title', 'construction-pro'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'features_one_title', 
		'type'	=> 'text_long', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> esc_html__('Project Features 1', 'construction-pro'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'features_one', 
		'type'	=> 'repeatable_multiple', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> esc_html__('Project Features 2 Title', 'construction-pro'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'features_two_title', 
		'type'	=> 'text_long', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> esc_html__('Project Features 2', 'construction-pro'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'features_two', 
		'type'	=> 'repeatable_multiple', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> esc_html__('Project Features 3 Title', 'construction-pro'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'features_three_title', 
		'type'	=> 'text_long', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> esc_html__('Project Features 3', 'construction-pro'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'features_three', 
		'type'	=> 'repeatable_multiple', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> esc_html__('Sharing Box', 'construction-pro'), 
		'desc'	=> esc_html__('Show', 'construction-pro'), 
		'id'	=> $cmsmasters_option_name . 'sharing_box', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> $cmsmasters_global_portfolio_project_share_box 
	), 
	array( 
		'label'	=> esc_html__('About Author Box', 'construction-pro'), 
		'desc'	=> esc_html__('Show', 'construction-pro'), 
		'id'	=> $cmsmasters_option_name . 'author_box', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> $cmsmasters_global_portfolio_project_author_box 
	), 
	array( 
		'label'	=> esc_html__('More Posts Box', 'construction-pro'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'more_posts', 
		'type'	=> 'select', 
		'hide'	=> '', 
		'std'	=> $cmsmasters_global_portfolio_more_projects_box, 
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
		'id'	=> 'cmsmasters_project', 
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

