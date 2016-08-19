<?php
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version 	1.0.0
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */


function construction_pro_theme_colors_primary() {
	$cmsmasters_option = construction_pro_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version 	1.0.0
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */

";
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	" . (($scheme == 'default') ? "body," : '') . "
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme}," : '') . "
	{$rule}input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	{$rule}textarea,
	{$rule}select,
	{$rule}option, 
	{$rule}.cmsmasters_items_sort_block, 
	{$rule}.cmsmasters_items_sort_block a, 
	{$rule}.cmsmasters_prev_arrow, 
	{$rule}.cmsmasters_next_arrow, 
	{$rule}.post_nav .cmsmasters_prev_post a + span, 
	{$rule}.post_nav .cmsmasters_next_post a + span, 
	{$rule}.cmsmasters_owl_slider .owl-buttons div > span, 
	{$rule}.quote_subtitle:before,  
	{$rule}.quote_link:before, 
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers, 
	{$rule}.subpage_nav > a, 
	{$rule}.attachment_nav_btn > a:before, 
	{$rule}.attachment_nav_btn > a:after, 
	{$rule}.widget_custom_posts_tabs_entries .img_placeholder_small	{
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	
	{$rule}input::-webkit-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	
	{$rule}input:-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title > .cmsmasters_toggle_plus span, 
	{$rule}.cmsmasters_notice .notice_close {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */


	/* Start Primary Color */
	" . (($scheme == 'default') ? ".headline_outer a:hover," : '') . "
	{$rule}a,
	{$rule}h1 a:hover,
	{$rule}h2 a:hover,
	{$rule}h3 a:hover,
	{$rule}h4 a:hover,
	{$rule}h5 a:hover,
	{$rule}h6 a:hover,
	{$rule}.color_2,
	{$rule}.cmsmasters_dropcap.type1,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_heading_left .icon_box_heading:before,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon:before,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before, 
	{$rule}#wp-calendar thead th,
	{$rule}.bypostauthor > .comment-body .alignleft:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a:hover,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a:hover,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a:hover,
	{$rule}.post_nav > span a:hover + span, 
	{$rule}.share_posts a:hover, 
	{$rule}.quote_content:before, 
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_info a:hover, 
	{$rule}.post .cmsmasters_post_cont .cmsmasters_post_cont_info a:hover, 
	{$rule}.post .cmsmasters_post_cont .cmsmasters_post_cont_info a.cmsmastersLike, 
	{$rule}.post .cmsmasters_post_cont .cmsmasters_post_cont_info a.cmsmasters_post_comments, 
	{$rule}.opened-article .post .cmsmasters_post_cont .cmsmasters_post_tags a:hover, 
	{$rule}.cmsmasters_project_category a:hover, 
	{$rule}.cmsmasters_slider_project_category a:hover, 
	{$rule}a.cmsmasters_cat_color:hover, 
	{$rule}.portfolio.puzzle .project .project_outer .project_inner	.cmsmasters_project_title a:hover, 
	{$rule}.portfolio.puzzle .project .project_outer .project_inner.cmsmasters_img_rollover .project_cont_wrap .cmsmasters_project_category a, 
	{$rule}.portfolio.opened-article .project .project_sidebar .project_details .project_details_item .project_details_item_desc .cmsmasters_project_category a, 
	{$rule}.cmsmasters_post_cont_info a:hover, 
	{$rule}.widget_categories li > a:hover, 
	{$rule}.widget_archive li > a:hover, 
	{$rule}.widget_recent_comments ul li a:hover, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_wrap .cmsmasters_tab.tab_comments a:hover, 
	{$rule}#wp-calendar tfoot a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}

	" . (($scheme == 'default') ? "#slide_top:hover," : '') . "
	" . (($scheme == 'default') ? "mark," : '') . "
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme} mark," : '') . "
	{$rule}.cmsmasters_dropcap.type2,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left:before,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_item .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_item:hover .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner, 
	{$rule}.owl-pagination .owl-page:hover, 
	{$rule}.owl-pagination .owl-page.active, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=radio] + label:after, 
	{$rule}.cmsmasters_button, 
	{$rule}.post-edit-link, 
	{$rule}.wpcf7 .wpcf7-form .wpcf7-submit, 
	{$rule}.cmsmasters_prev_arrow:hover,
	{$rule}.cmsmasters_next_arrow:hover, 
	{$rule}.post_nav .cmsmasters_prev_post a:hover + span, 
	{$rule}.post_nav .cmsmasters_next_post a:hover + span, 
	{$rule}.cmsmasters_owl_slider.content_slider .owl-buttons div > span:hover, 
	{$rule}.cmsmasters_owl_slider.cmsmasters_big_btns .owl-buttons div > span:hover, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=checkbox] + label:after, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:after, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:after, 
	{$rule}.cmsmasters_notice .notice_close:hover, 
	{$rule}.cmsmasters_table tr.cmsmasters_table_row_header, 
	{$rule}.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list, 
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab:before, 
	{$rule}.cmsmasters_toggles.toggles_mode_accordion .current_toggle .cmsmasters_toggle_title:before, 
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap.current_toggle .cmsmasters_toggle_title .cmsmasters_toggle_plus, 
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap:before, 
	{$rule}.post .cmsmasters_post_footer .button, 
	{$rule}#page .post-password-form input[type=submit], 
	{$rule}.comment_nav a:hover .cmsmasters_prev_arrow, 
	{$rule}.comment_nav a:hover .cmsmasters_next_arrow, 
	{$rule}.cmsmasters_owl_slider .owl-buttons div > span:hover, 
	{$rule}.cmsmasters_wrap_pagination ul li a.page-numbers:hover, 
	{$rule}.subpage_nav > a:hover, 
	{$rule}.cmsmasters_link_line:before,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_block, 
	{$rule}.share_posts a:before, 
	{$rule}.comment-respond #commentform input[type=submit], 
	{$rule}.cmsmasters_img_rollover > a, 
	{$rule}.profile_social_icons_list li a, 
	{$rule}.cmsmasters_profile .pl_social .pl_social_list li a, 
	{$rule}.attachment_nav_btn > a:hover:before, 
	{$rule}.attachment_nav_btn > a:hover:after, 
	{$rule}.widget_custom_contact_form_entries	.form_info.submit_wrap .button, 
	{$rule}.widget_nav_menu > div > ul li a:hover, 
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab a, 
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item a:hover, 
	{$rule}.widget_nav_menu > div > ul li.current-menu-item > a, 
	{$rule}.widget_nav_menu > div > ul li.current_page_item > a, 
	{$rule}.widget_nav_menu > div > ul li.current-menu-ancestor > a, 
	{$rule}.widget_nav_menu > div > ul li.current_page_ancestor > a, 
	{$rule}#wp-calendar td#today, 
	{$rule}.widget_pages ul li.current_page_item a, 
	{$rule}.widget_pages ul li a:hover, 
	{$rule}.widget_custom_contact_info_entries div:before, 
	{$rule}.widget_custom_contact_info_entries span:before, 
	{$rule}.input-checkbox + label:after, 
	{$rule}.input-radio + label:after, 
	{$rule}input.shipping_method + label:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}

	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_border .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:after,
	{$rule}input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]):focus,
	{$rule}textarea:focus,
	{$rule}select:focus	{
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Secondary Color */
	{$rule}.bottom_inner .widget_custom_contact_info_entries div:before, 
	{$rule}.bottom_inner .widget_custom_contact_info_entries span:before, 
	{$rule}.sticky .cmsmasters_post_header .cmsmasters_post_title:before, 
	{$rule}#wp-calendar tfoot a, 
	{$rule}.cmsmasters_project_category a, 
	{$rule}.cmsmasters_slider_project_category a, 
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner:before, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_pricing_item_inner .feature_list li span:before, 
	{$rule}.post .cmsmasters_post_cont .cmsmasters_post_cont_info a, 
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_info a, 
	{$rule}.opened-article .post .cmsmasters_post_cont .cmsmasters_post_tags a, 
	{$rule}.cmsmasters_post_cont_info a, 
	" . (($scheme == 'default') ? ".headline_outer a " : '') . " {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_secondary']) . "
	}

	" . (($scheme == 'default') ? "#slide_top," : '') . "
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_type, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_pricing_item_inner .pricing_header, 
	{$rule}.post.cmsmasters_timeline_type .cmsmasters_post_info	{
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_secondary']) . "
	}

	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_secondary']) . "
	}

	" . (($scheme == 'footer') ? "#footer .footer_inner span.copyright " : '') . " {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_secondary']) . "
	}
	/* Finish Secondary Color */
	
	
	/* Start Highlight Color */
	" . (($scheme == 'footer') ? "#footer .footer_inner nav > div > ul > li > a:hover, " : '') . "
	" . (($scheme == 'footer') ? "#footer .footer_inner nav > div > ul > li.current-menu-item > a, " : '') . "
	" . (($scheme == 'footer') ? "#footer .footer_inner nav > div > ul > li.current_page_item > a, " : '') . "	
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme} .portfolio .cmsmasters_project_category a:hover, " : '') . "
	{$rule}a:hover,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title:hover > a, 
	{$rule}.post .cmsmasters_post_title a:hover, 
	{$rule}.post .cmsmasters_post_cont a.cmsmastersLike.active, 
	{$rule}.post .cmsmasters_post_cont a.cmsmastersLike:hover, 
	{$rule}.post .cmsmasters_post_cont a.cmsmasters_post_comments:hover, 
	{$rule}.project .cmsmasters_project_body_info a.cmsmastersLike.active, 
	{$rule}.project .cmsmasters_project_body_info a.cmsmastersLike:hover, 
	{$rule}.project .cmsmasters_project_body_info a.cmsmasters_post_comments:hover, 
	{$rule}.project .project_cont_wrap a.cmsmastersLike.active, 
	{$rule}.project .project_cont_wrap a.cmsmastersLike:hover, 
	{$rule}.project .project_cont_wrap a.cmsmasters_post_comments:hover, 
	{$rule}.portfolio.opened-article .project .project_sidebar .project_details .project_details_item .project_details_item_desc a.active, 
	{$rule}.portfolio.opened-article .project .project_sidebar .project_details .project_details_item .project_details_item_desc .cmsmasters_project_category a:hover, 
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_details .profile_details_item .profile_details_item_desc a.active, 
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_details .profile_details_item .profile_details_item_desc .cmsmasters_profile_category a:hover, 
	{$rule}.cmsmasters_slider_post_meta_info a.active, 
	{$rule}.cmsmasters_posts_slider .cmsmasters_slider_post_title, 
	{$rule}.cmsmasters_posts_slider .cmsmasters_slider_post_title a:hover, 
	{$rule}.cmsmasters_slider_project_meta_info a.active, 
	{$rule}.search_bar_wrap .search_button button:hover,  
	{$rule}.widget_recent_entries ul li a:hover, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs_wrap .cmsmasters_tab a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}

	{$rule}.bottom_inner .widget_custom_contact_info_entries div:before, 
	{$rule}.bottom_inner .widget_custom_contact_info_entries span:before, 
	{$rule}.subpage_nav > span, 
	{$rule}.widget_custom_contact_form_entries	.form_info.submit_wrap .button:hover,  
	{$rule}.wpcf7 .wpcf7-form .wpcf7-submit:hover, 
	{$rule}.cmsmasters_button:hover, 
	{$rule}.post-edit-link:hover, 
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item:hover:before, 
	{$rule}.cmsmasters_toggles.toggles_mode_accordion .cmsmasters_toggle_title:hover:before, 
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title:hover .cmsmasters_toggle_plus, 
	{$rule}.post .cmsmasters_post_footer .button:hover, 
	{$rule}#page .post-password-form input[type=submit]:hover,
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers.current, 
	{$rule}.comment-respond #commentform input[type=submit]:hover, 
	{$rule}.cmsmasters_img_rollover > a:hover, 
	{$rule}.profile_social_icons_list li a:hover, 
	{$rule}.cmsmasters_profile .pl_social .pl_social_list li a:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.search_bar_wrap > form .search_field > input[type=search]:focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover'] . '!important') . "
	}
	/* Finish Highlight Color */


	/* Start Headings Color */
	" . (($scheme == 'footer') ? "#footer .footer_inner nav > div > ul > li:after, " : '') . "
	" . (($scheme == 'footer') ? "#footer .footer_inner .social_wrap a:hover, " : '') . "
	" . (($scheme == 'footer') ? "#footer .footer_inner nav > div > ul > li > a, " : '') . "
	" . (($scheme == 'default') ? ".headline_outer," : '') . "
	{$rule}h1,
	{$rule}h2,
	{$rule}h3,
	{$rule}h4,
	{$rule}h5,
	{$rule}h6,
	{$rule}h1 a,
	{$rule}h2 a,
	{$rule}h3 a,
	{$rule}h4 a,
	{$rule}h5 a,
	{$rule}h6 a,
	{$rule}fieldset legend,
	{$rule}blockquote footer,
	{$rule}table caption,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_title,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap,
	{$rule}#wp-calendar caption,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > ul li a:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > ul li a:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_archive > li a:before, 
	{$rule}.search_bar_wrap .search_button, 
	{$rule}.post_nav > span a, 
	{$rule}.post_nav > span a:hover, 
	{$rule}.comment_nav a, 
	{$rule}.comment_nav a:hover, 
	{$rule}.share_posts a, 
	{$rule}.cmsmasters_img .cmsmasters_img_caption, 
	{$rule}.cmsmasters_gallery .cmsmasters_gallery_item.cmsmasters_caption figcaption, 
	{$rule}.cmsmasters_notice .notice_content, 
	{$rule}.cmsmasters_table tr.cmsmasters_table_row_footer td, 
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner:before, 
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_title, 
	{$rule}.quote_subtitle, 
	{$rule}.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab a, 
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item a, 
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title > a, 
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_title, 
	{$rule}.post .cmsmasters_post_cont .cmsmasters_post_cont_info, 
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_info, 
	{$rule}.post .cmsmasters_post_cont a.cmsmastersLike span, 
	{$rule}.post .cmsmasters_post_cont a.cmsmasters_post_comments span, 
	{$rule}.post.cmsmasters_masonry_type .cmsmasters_post_cont .cmsmasters_post_date, 
	{$rule}.cmsmasters_link_line, 
	{$rule}.cmsmasters_link_line:hover, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_block .cmsmasters_items_filter_list li a, 
	{$rule}.share_posts a:hover, 
	{$rule}.post_comments .cmsmasters_comment_item_date, 
	{$rule}.cmsmasters_img_rollover > a, 
	{$rule}.cmsmasters_project_category, 
	{$rule}.cmsmasters_slider_project_category, 
	{$rule}.project .cmsmasters_project_body_info a.cmsmastersLike span, 
	{$rule}.project .cmsmasters_project_body_info a.cmsmasters_post_comments span, 	
	{$rule}.project .project_cont_wrap a.cmsmastersLike span, 
	{$rule}.project .project_cont_wrap a.cmsmasters_post_comments span, 
	{$rule}.project .project_inner .cmsmasters_project_body_info .cmsmasters_project_meta_info span, 
	{$rule}.portfolio.opened-article .project .project_sidebar .project_details .project_details_item, 
	{$rule}.portfolio.opened-article .project .project_sidebar .project_features .project_features_item, 
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_details .profile_details_item, 
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_features .profile_features_item, 
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_details .profile_details_item a span, 
	{$rule}.cmsmasters_posts_slider	.cmsmasters_post_cont_info, 
	{$rule}.cmsmasters_slider_post_meta_info	a span, 
	{$rule}.cmsmasters_slider_project_meta_info a span, 
	{$rule}.attachment_nav_btn > a, 
	{$rule}.widget_categories li > a, 
	{$rule}.widget_archive li > a, 
	{$rule}.widget_nav_menu > div > ul li a, 
	{$rule}.widget_pages ul li a,
	{$rule}.widget_recent_comments ul li, 
	{$rule}.widget_recent_entries ul li a, 
	{$rule}.widget_recent_entries ul li span, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs_wrap .cmsmasters_tab a, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs_wrap .cmsmasters_tab span, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs_wrap .cmsmasters_tab small, 
	{$rule}.widget_recent_comments ul li a, 
	{$rule}.widget_custom_twitter_entries .tweet_list .tweet_time, 
	{$rule}.cmsmasters_twitter_wrap .twr_icon, 
	{$rule}.cmsmasters_twitter_wrap .cmsmasters_twitter_item .published {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}

	{$rule}.cmsmasters_hover_slider .cmsmasters_hover_slider_thumbs > li a:before, 
	{$rule}.cmsmasters_icon_list_items .cmsmasters_icon_list_item .cmsmasters_icon_list_icon,
	{$rule}form .formError .formErrorContent, 
	{$rule}.cmsmasters_toggles.toggles_mode_accordion .cmsmasters_toggle_wrap .cmsmasters_toggle_title .cmsmasters_toggle_plus span, 
	{$rule}.cmsmasters_toggles.toggles_mode_accordion .cmsmasters_toggle_wrap.current_toggle  .cmsmasters_toggle_title .cmsmasters_toggle_plus span, 
	{$rule}.cmsmasters_toggles.toggles_mode_accordion .cmsmasters_toggle_wrap .cmsmasters_toggle_title:hover .cmsmasters_toggle_plus span, 
	{$rule}.cmsmasters_items_filter_list li a:before	{
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}

	{$rule}.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab span, 
	{$rule}.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list .cmsmasters_tabs_list_item:hover span {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}

	{$rule}.cmsmasters_owl_slider.cmsmasters_big_btns .owl-buttons div > span, 
	{$rule}.cmsmasters_owl_slider.content_slider .owl-buttons div > span {
		background-color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . ", 0.5);
	}

	{$rule}.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list .cmsmasters_tabs_list_item span {
		border-color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . ", 0);
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	" . (($scheme == 'default') ? "#slide_top," : '') . "
	{$rule}.subpage_nav > span, 
	{$rule}mark,
	{$rule}form .formError .formErrorContent,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top:before,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_border .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner, 
	{$rule}.cmsmasters_button, 
	{$rule}.cmsmasters_button:hover, 
	{$rule}.post-edit-link, 
	{$rule}.post-edit-link:hover, 
	{$rule}.wpcf7 .wpcf7-form .wpcf7-submit, 
	{$rule}.wpcf7 .wpcf7-form .wpcf7-submit:hover, 
	{$rule}.cmsmasters_prev_arrow:hover,
	{$rule}.cmsmasters_next_arrow:hover, 
	{$rule}.post_nav .cmsmasters_prev_post a:hover + span, 
	{$rule}.post_nav .cmsmasters_next_post a:hover + span, 
	{$rule}.comment_nav a:hover .cmsmasters_prev_arrow, 
	{$rule}.comment_nav a:hover .cmsmasters_next_arrow, 
	{$rule}.cmsmasters_owl_slider.content_slider .owl-buttons div > span, 
	{$rule}.cmsmasters_owl_slider.cmsmasters_big_btns .owl-buttons div > span, 
	{$rule}.cmsmasters_notice .notice_close, 
	{$rule}.cmsmasters_table tr.cmsmasters_table_row_header, 
	{$rule}.cmsmasters_owl_slider .owl-buttons div > span:hover, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item .pricing_title, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_price_wrap, 
	{$rule}.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list li a, 
	{$rule}.post .cmsmasters_post_footer .button, 
	{$rule}#page .post-password-form input[type=submit],
	{$rule}.cmsmasters_wrap_pagination ul li a.page-numbers:hover, 
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers.current, 
	{$rule}.subpage_nav > a:hover, 
	{$rule}.post.cmsmasters_timeline_type .cmsmasters_post_info .cmsmasters_post_date, 
	{$rule}.comment-respond #commentform input[type=submit], 
	{$rule}.cmsmasters_img_rollover > a:hover, 
	{$rule}.portfolio.puzzle .project .project_outer .project_inner	.cmsmasters_project_title a, 
	{$rule}.portfolio.puzzle .project .project_outer .project_inner.cmsmasters_img_rollover .project_cont_wrap .cmsmasters_project_category, 
	{$rule}.portfolio.puzzle .project .project_outer .project_inner.cmsmasters_img_rollover .project_cont_wrap .cmsmasters_project_category a:hover, 
	{$rule}.portfolio.puzzle .project .project_outer .project_inner.cmsmasters_img_rollover .project_cont_wrap .cmsmasters_project_footer	a span, 
	{$rule}.profile_social_icons_list li a, 
	{$rule}.cmsmasters_profile .pl_social .pl_social_list li a, 
	{$rule}.attachment_nav_btn > a:hover:before, 
	{$rule}.attachment_nav_btn > a:hover:after, 
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_type, 
	{$rule}.widget_custom_contact_form_entries .form_info.submit_wrap .button, 
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab a, 
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item a:hover, 
	{$rule}.widget_nav_menu > div > ul li a:hover, 
	{$rule}.widget_nav_menu > div > ul li.current-menu-item > a, 
	{$rule}.widget_nav_menu > div > ul li.current_page_item > a, 
	{$rule}.widget_nav_menu > div > ul li.current-menu-ancestor > a, 
	{$rule}.widget_nav_menu > div > ul li.current_page_ancestor > a, 
	{$rule}#wp-calendar td#today, 
	{$rule}.widget_pages ul li.current_page_item a, 
	{$rule}.widget_custom_contact_info_entries div:before, 
	{$rule}.widget_custom_contact_info_entries span:before {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}

	" . (($scheme == 'footer') ? ".bottom_bg," : '') . "
	" . (($scheme == 'default') ? "body," : '') . "
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme}," : '') . "
	" . (($scheme == 'default') ? ".middle_inner," : '') . "
	" . (($scheme == 'default') ? ".headline_outer," : '') . "
	{$rule}input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner, 
	{$rule}.cmsmasters_img.with_caption, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=checkbox] + label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=radio] + label:before, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:before, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title:hover .cmsmasters_toggle_plus span, 
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap.current_toggle .cmsmasters_toggle_title .cmsmasters_toggle_plus span, 
	{$rule}.post.cmsmasters_timeline_type .cmsmasters_post_cont, 
	{$rule}#middle	{
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */


	/* Start Alternate Background Color */
	{$rule}.widget_pages ul li a:hover, 
	{$rule}.cmsmasters_dropcap.type2,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon_wrap {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}

	" . (($scheme == 'footer') ? "#footer.cmsmasters_footer_small," : '') . "
	" . (($scheme == 'footer') ? "#footer .footer_copyright_wrapper," : '') . "
	{$rule}fieldset,
	{$rule}fieldset legend,
	{$rule}.cmsmasters_featured_block,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap:before,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat canvas,
	{$rule}.gallery-item .gallery-icon,
	{$rule}.gallery-item .gallery-caption,
	{$rule}.cmsmasters_prev_arrow,
	{$rule}.cmsmasters_next_arrow, 
	{$rule}.post_nav .cmsmasters_prev_post a + span, 
	{$rule}.post_nav .cmsmasters_next_post a + span, 
	{$rule}.owl-pagination .owl-page,  
	{$rule}.cmsmasters-form-builder .form_info textarea, 
	{$rule}.cmsmasters-form-builder .form_info select, 
	{$rule}.cmsmasters-form-builder .form_info input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]), 
	{$rule}.wpcf7-form input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]), 
	{$rule}.wpcf7-form textarea, 
	{$rule}.wpcf7-form select, 
	{$rule}#page .post-password-form input[type=password], 
	{$rule}.cmsmasters_notice, 
	{$rule}.cmsmasters_table .cmsmasters_table_row_footer, 
	{$rule}.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat_container, 
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title > .cmsmasters_toggle_plus, 
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers, 
	{$rule}.subpage_nav > a, 
	{$rule}.comment-respond #commentform input, 
	{$rule}.comment-respond #commentform textarea, 
	{$rule}.attachment_nav_btn > a:before, 
	{$rule}.attachment_nav_btn > a:after, 
	{$rule}.img_placeholder, 
	{$rule}.widget_archive select, 
	{$rule}.widget_categories select,
	{$rule}textarea,
	{$rule}select,
	{$rule}option,
	{$rule}#wp-calendar caption, 
	{$rule}.widget_pages ul li a, 
	{$rule}.widget_nav_menu > div > ul li a, 
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item a, 
	{$rule}.widget_custom_posts_tabs_entries .img_placeholder_small	{
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}

	{$rule}.search_bar_wrap > form .search_field > input[type=search] {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate'] . '!important') . "
	}

	/* Finish Alternate Background Color */

	/* Start Borders Color */
	{$rule}.cmsmasters_owl_slider .owl-buttons div > span, 
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers.prev, 
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers.next, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li:before, 
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item:before, 
	{$rule}.cmsmasters_toggles.toggles_mode_accordion .cmsmasters_toggle_title:before,
	{$rule}.blog.timeline:before, 
	{$rule}.post.cmsmasters_timeline_type:before, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_divider {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}

	
	{$rule}.sticky .cmsmasters_post_cont, 
	{$rule}input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	{$rule}.cmsmasters-form-builder .form_info .check_parent input[type=checkbox] + label:before, 
	{$rule}.cmsmasters-form-builder .form_info .check_parent input[type=radio] + label:before, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:before, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:before, 
	{$rule}textarea,
	{$rule}select,
	{$rule}option,
	{$rule}hr,
	{$rule}.cmsmasters_divider,
	{$rule}.cmsmasters_widget_divider,
	{$rule}.cmsmasters_img.with_caption,
	{$rule}.cmsmasters_icon_wrap .cmsmasters_simple_icon, 
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_icon_list_type_block .cmsmasters_icon_list_item,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_icon:after,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon:after, 
	{$rule}.widget, 
	{$rule}.cmsmasters_gallery .cmsmasters_gallery_item.cmsmasters_caption figcaption, 
	{$rule}.cmsmasters_table tr, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item, 
	{$rule}.quote_vert, 
	{$rule}.quotes_list, 
	{$rule}.quotes_list .cmsmasters_quote, 
	{$rule}.quote_four:after, 
	{$rule}.quote_four:before, 
	{$rule}.quote_three:before,  
	{$rule}.post .cmsmasters_post_cont .cmsmasters_post_cont_info, 
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_info, 
	{$rule}.cmsmasters_wrap_items_loader, 
	{$rule}.cmsmasters_wrap_pagination, 
	{$rule}.post.cmsmasters_masonry_type .cmsmasters_post_cont .cmsmasters_post_content, 
	{$rule}.post.cmsmasters_timeline_type .cmsmasters_post_cont .cmsmasters_post_content, 
	{$rule}.post.cmsmasters_timeline_type .cmsmasters_post_cont, 
	{$rule}.blog.opened-article .post .cmsmasters_post_cont .cmsmasters_post_content, 
	{$rule}.post_comments .cmsmasters_comment_item_cont_info, 
	{$rule}.portfolio.grid .project .project_inner .cmsmasters_project_content, 
	{$rule}.portfolio.opened-article .project .cmsmasters_project_header, 
	{$rule}.portfolio.opened-article .project .project_content .cmsmasters_project_content, 
	{$rule}.portfolio.opened-article .project .project_sidebar .project_details, 
	{$rule}.portfolio.opened-article .project .project_sidebar .project_features, 
	{$rule}.profiles.opened-article .profile .cmsmasters_profile_header, 
	{$rule}.profiles.opened-article .profile .profile_content .cmsmasters_profile_content, 
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_details, 
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_features, 
	{$rule}.cmsmasters_profile .entry-content, 
	{$rule}.cmsmasters_posts_slider .post .cmsmasters_post_body_info, 
	{$rule}.cmsmasters_posts_slider .project .cmsmasters_slider_project_content {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */


	/* Start Custom Rules */
	{$rule}::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_secondary']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . ";
	}

	{$rule}::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_secondary']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	";
	
	
	$custom_css .= "
	/* Finish Custom Rules */

/***************** Finish {$title} Color Scheme Rules ******************/


/***************** Start {$title} Button Color Scheme Rules ******************/

	{$rule}.cmsmasters_button.cmsmasters_but_bg_hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}

	{$rule}.cmsmasters_button.cmsmasters_but_bg_hover:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}

	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_hor, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}

	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_hor:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}

	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert:hover, 
	{$rule}.cmsmasters_button.cm.sms_but_bg_expand_hor:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_slide_left, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_slide_right, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_slide_top, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_slide_bottom, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_expand_vert, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_expand_hor, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_expand_diag {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}

	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_hor:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}

	{$rule}.cmsmasters_button.cmsmasters_but_shadow {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}

	{$rule}.cmsmasters_button.cmsmasters_but_shadow:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_shadow {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}

	{$rule}.cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_light_bg, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}

	{$rule}.cmsmasters_button.cmsmasters_but_icon_dark_bg:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_light_bg:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_light_bg, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_divider {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}

	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider:after {
		" . cmsmasters_color_css('border-right-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}

	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}

	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:before {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}

	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}

	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_inverse {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}

	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover:before, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_inverse:before {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}

	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover:after, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_inverse:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}

	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_right {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}

	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_right:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_slide_left, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_slide_right {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}

	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_right, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_top, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}

	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_right:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_top:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_hover_slide_left, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_hover_slide_right, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_hover_slide_top, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}

/***************** Finish {$title} Button Color Scheme Rules ******************/


";
	}


	return $custom_css;
}

