<?php 
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version		1.0.0
 * 
 * Admin Panel Post, Project, Profile
 * Created by CMSMasters
 * 
 */


function construction_pro_options_single_tabs() {
	$tabs = array();
	
	
	$tabs['post'] = esc_attr__('Post', 'construction-pro');
	
	if (class_exists('Cmsmasters_Projects')) {
		$tabs['project'] = esc_attr__('Project', 'construction-pro');
	}
	
	if (class_exists('Cmsmasters_Profiles')) {
		$tabs['profile'] = esc_attr__('Profile', 'construction-pro');
	}
	
	
	return $tabs;
}


function construction_pro_options_single_sections() {
	$tab = construction_pro_get_the_tab();
	
	
	switch ($tab) {
	case 'post':
		$sections = array();
		
		$sections['post_section'] = esc_attr__('Blog Post Options', 'construction-pro');
		
		
		break;
	case 'project':
		$sections = array();
		
		$sections['project_section'] = esc_attr__('Portfolio Project Options', 'construction-pro');
		
		
		break;
	case 'profile':
		$sections = array();
		
		$sections['profile_section'] = esc_attr__('Person Block Profile Options', 'construction-pro');
		
		
		break;
	}
	
	
	return $sections;
} 


function construction_pro_options_single_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = construction_pro_get_the_tab();
	}
	
	
	$options = array();
	
	
	switch ($tab) {
	case 'post':
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_layout', 
			'title' => esc_html__('Layout Type', 'construction-pro'), 
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
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_title', 
			'title' => esc_html__('Post Title', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_date', 
			'title' => esc_html__('Post Date', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_cat', 
			'title' => esc_html__('Post Categories', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_author', 
			'title' => esc_html__('Post Author', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_comment', 
			'title' => esc_html__('Post Comments', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_tag', 
			'title' => esc_html__('Post Tags', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_like', 
			'title' => esc_html__('Post Likes', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_nav_box', 
			'title' => esc_html__('Posts Navigation Box', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_share_box', 
			'title' => esc_html__('Sharing Box', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_author_box', 
			'title' => esc_html__('About Author Box', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_more_posts_box', 
			'title' => esc_html__('More Posts Box', 'construction-pro'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'related', 
			'choices' => array( 
				esc_attr__('Show Related Posts', 'construction-pro') . '|related', 
				esc_attr__('Show Popular Posts', 'construction-pro') . '|popular', 
				esc_attr__('Show Recent Posts', 'construction-pro') . '|recent', 
				esc_attr__('Hide More Posts Box', 'construction-pro') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_more_posts_count', 
			'title' => esc_html__('More Posts Box Items Number', 'construction-pro'), 
			'desc' => esc_html__('posts', 'construction-pro'), 
			'type' => 'number', 
			'std' => '3', 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_more_posts_pause', 
			'title' => esc_html__('More Posts Slider Pause Time', 'construction-pro'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'construction-pro'), 
			'type' => 'number', 
			'std' => '0', 
			'min' => '0', 
			'max' => '20' 
		);
		
		
		break;
	case 'project':
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_title', 
			'title' => esc_html__('Project Title', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_details_title', 
			'title' => esc_html__('Project Details Title', 'construction-pro'), 
			'desc' => esc_html__('Enter a project details block title', 'construction-pro'), 
			'type' => 'text', 
			'std' => 'Project details', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_date', 
			'title' => esc_html__('Project Date', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_cat', 
			'title' => esc_html__('Project Categories', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_author', 
			'title' => esc_html__('Project Author', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_comment', 
			'title' => esc_html__('Project Comments', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_tag', 
			'title' => esc_html__('Project Tags', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_like', 
			'title' => esc_html__('Project Likes', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_link', 
			'title' => esc_html__('Project Link', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_share_box', 
			'title' => esc_html__('Sharing Box', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_nav_box', 
			'title' => esc_html__('Projects Navigation Box', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_author_box', 
			'title' => esc_html__('About Author Box', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_more_projects_box', 
			'title' => esc_html__('More Projects Box', 'construction-pro'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'related', 
			'choices' => array( 
				esc_attr__('Show Related Projects', 'construction-pro') . '|related', 
				esc_attr__('Show Popular Projects', 'construction-pro') . '|popular', 
				esc_attr__('Show Recent Projects', 'construction-pro') . '|recent', 
				esc_attr__('Hide More Projects Box', 'construction-pro') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_more_projects_count', 
			'title' => esc_html__('More Projects Box Items Number', 'construction-pro'), 
			'desc' => esc_html__('projects', 'construction-pro'), 
			'type' => 'number', 
			'std' => '3', 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_more_projects_pause', 
			'title' => esc_html__('More Projects Slider Pause Time', 'construction-pro'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'construction-pro'), 
			'type' => 'number', 
			'std' => '0', 
			'min' => '0', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_slug', 
			'title' => esc_html__('Project Slug', 'construction-pro'), 
			'desc' => esc_html__('Enter a page slug that should be used for your projects single item', 'construction-pro'), 
			'type' => 'text', 
			'std' => 'project', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_pj_categs_slug', 
			'title' => esc_html__('Project Categories Slug', 'construction-pro'), 
			'desc' => esc_html__('Enter page slug that should be used on projects categories archive page', 'construction-pro'), 
			'type' => 'text', 
			'std' => 'pj-categs', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_pj_tags_slug', 
			'title' => esc_html__('Project Tags Slug', 'construction-pro'), 
			'desc' => esc_html__('Enter page slug that should be used on projects tags archive page', 'construction-pro'), 
			'type' => 'text', 
			'std' => 'pj-tags', 
			'class' => '' 
		);
		
		
		break;
	case 'profile':
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMASTERS_SHORTNAME . '_profile_post_title', 
			'title' => esc_html__('Profile Title', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMASTERS_SHORTNAME . '_profile_post_details_title', 
			'title' => esc_html__('Profile Details Title', 'construction-pro'), 
			'desc' => esc_html__('Enter a profile details block title', 'construction-pro'), 
			'type' => 'text', 
			'std' => 'Profile details', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMASTERS_SHORTNAME . '_profile_post_cat', 
			'title' => esc_html__('Profile Categories', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMASTERS_SHORTNAME . '_profile_post_comment', 
			'title' => esc_html__('Profile Comments', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMASTERS_SHORTNAME . '_profile_post_like', 
			'title' => esc_html__('Profile Likes', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMASTERS_SHORTNAME . '_profile_post_nav_box', 
			'title' => esc_html__('Profiles Navigation Box', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMASTERS_SHORTNAME . '_profile_post_share_box', 
			'title' => esc_html__('Sharing Box', 'construction-pro'), 
			'desc' => esc_html__('show', 'construction-pro'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMASTERS_SHORTNAME . '_profile_post_slug', 
			'title' => esc_html__('Profile Slug', 'construction-pro'), 
			'desc' => esc_html__('Enter a page slug that should be used for your profiles single item', 'construction-pro'), 
			'type' => 'text', 
			'std' => 'profile', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMASTERS_SHORTNAME . '_profile_pl_categs_slug', 
			'title' => esc_html__('Profile Categories Slug', 'construction-pro'), 
			'desc' => esc_html__('Enter page slug that should be used on profiles categories archive page', 'construction-pro'), 
			'type' => 'text', 
			'std' => 'pl-categs', 
			'class' => '' 
		);
		
		break;
	}
	
	
	return $options;
}

