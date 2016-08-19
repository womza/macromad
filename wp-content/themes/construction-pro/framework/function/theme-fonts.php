<?php
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version 	1.0.0
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


function construction_pro_theme_fonts() {
	$cmsmasters_option = construction_pro_get_global_options();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version 	1.0.0
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


/***************** Start Theme Font Styles ******************/

	/* Start Content Font */
	body, 
	.footer_inner nav > div > ul > li > a, 
	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap, 
	.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_center .quote_content, 
	.post.cmsmasters_masonry_type .cmsmasters_post_cont .cmsmasters_post_content, 
	.post.cmsmasters_timeline_type .cmsmasters_post_cont .cmsmasters_post_content, 
	.about_author .about_author_cont, 
	.portfolio.opened-article .project .project_sidebar .project_details .project_details_item .project_details_item_desc .cmsmasters_project_category a, 
	.profiles.opened-article .profile .profile_sidebar .profile_details .profile_details_item .profile_details_item_desc .cmsmasters_profile_category a, 
	.profiles.opened-article .profile .profile_sidebar .profile_details .profile_details_item a span, 
	#wp-calendar td, 
	#wp-calendar td	a, 
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_wrap .cmsmasters_tab.tab_comments p {
		font-family:" . construction_pro_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_style'] . ";
	}
	
	.cmsmasters_wrap_pagination ul li .page-numbers.prev, 
	.cmsmasters_wrap_pagination ul li .page-numbers.next {
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] . "px;
	}
	
	.header_mid_inner .slogan_wrap_inner .slogan_wrap_text .cmsmasters_meta_block .cmsmasters_meta_block_cell p {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] - 1) . "px;
	}
	
	body code, 
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_wrap .cmsmasters_tab.tab_comments p, 
	#wp-calendar td	a, 
	#wp-calendar td, 
	.cmsmasters_wrap_pagination ul li .page-numbers {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] - 2) . "px;
	}
	
	.post.cmsmasters_masonry_type .cmsmasters_post_cont .cmsmasters_post_content,
	.post.cmsmasters_timeline_type .cmsmasters_post_cont .cmsmasters_post_content, 
	.blog.opened-article .post .cmsmasters_post_cont .cmsmasters_post_content, 
	.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_center .quote_content, 
	.about_author .about_author_cont {
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] + 2) . "px;	
	}
	
	#footer.cmsmasters_footer_default .footer_inner .footer_custom_html {
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] + 4) . "px;
	}
	
	.portfolio.opened-article .project .project_sidebar .project_details .project_details_item a, 
	.portfolio.opened-article .project .project_sidebar .project_details .project_details_item a > span, 
	.profiles.opened-article .profile .profile_sidebar .profile_details .profile_details_item a, 
	.profiles.opened-article .profile .profile_sidebar .profile_details .profile_details_item > span, 
	.portfolio.opened-article .project .project_sidebar .project_details .project_details_item .project_details_item_desc .cmsmasters_project_category a, 
	.profiles.opened-article .profile .profile_sidebar .profile_details .profile_details_item .profile_details_item_desc .cmsmasters_profile_category a, 
	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap {
		font-weight:700; /* static */
	}
	.portfolio.opened-article .project .project_sidebar .project_details .project_details_item .project_details_item_desc .cmsmasters_project_category a, 
	.profiles.opened-article .profile .profile_sidebar .profile_details .profile_details_item .profile_details_item_desc .cmsmasters_profile_category a {
		text-transform:none;
	}
	
	@media only screen and (max-width: 950px) {
		#page .widget_archive li > a, 
		#page .widget_custom_posts_tabs_entries .cmsmasters_tabs_wrap .cmsmasters_tab a {
			font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] - 1) . "px;
		}
	}
		
	/* Finish Content Font */


	/* Start Link Font */
	a {
		font-family:" . construction_pro_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_text_decoration'] . ";
	}
	
	a:hover {
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_hover_decoration'] . ";
	}
	/* Finish Link Font */


	/* Start Navigation Title Font */
	#navigation > li > a, 
	.top_line_nav > li > a {
		font-family:" . construction_pro_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_text_transform'] . ";
	}
	
	.top_line_nav > li > a {
		font-weight:500; /* static */
	}
	
	.top_line_nav > li > a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_size'] - 1) . "px;
	}
	
	#navigation > li > a > span:before {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_size'] + 3) . "px;
	}
	
	#navigation > li.menu-item-icon > a > span > span.nav_subtitle,
	#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-icon > a > span > span.nav_subtitle {
		padding-left:" . ceil(((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_size'] + 3) * 1.4) . "px;
	}
	
	body.rtl #navigation > li.menu-item-icon > a > span > span.nav_subtitle,
	body.rtl #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-icon > a > span > span.nav_subtitle {
		padding-right:" . ceil(((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_size'] + 3) * 1.4) . "px;
		padding-left:0; /* static */
	}
	
	#navigation > li > a[data-tag]:before,
	#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a[data-tag]:before {
		margin-top:" . round(((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_line_height'] - ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_line_height'] - 2)) / 2) . "px;
	}
	
	.header_top .header_top_inner nav > div > ul li a, 
	nav #navigation > li > a > span.nav_subtitle {
		text-transform:none;
	}
	
	@media only screen and (max-width: 1024px) {
		html #page #header nav #navigation li a {
			font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_size'] - 1) . "px;
			font-weight:400; /* static */
		}
		
		html #page #header nav #navigation > li > a {
			font-weight:500; /* static */
		}
		
		html #page #header nav #navigation li li li a {
			font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_size'] - 3) . "px;
		}
		
		html #page #header nav #navigation > li.menu-item-hide-text > a > span,
		html #page #header nav #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-hide-text > a > span {
			font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_size'] . "px;
			line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_line_height'] . "px;
		}
		
		html #page #header nav #navigation > li.menu-item-icon > a > span > span.nav_subtitle,
		html #page #header nav #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-icon > a > span > span.nav_subtitle {
			padding-left:" . ceil(((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_size'] + 3) * 1.4) . "px;
		}
	}
	/* Finish Navigation Title Font */


	/* Start Navigation Dropdown Font */
	#navigation ul li a, 
	.header_top_inner nav > div > ul > li ul li a, 
	#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a {
		font-family:" . construction_pro_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_text_transform'] . ";
	}
	
	#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_font_size'] + 1) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_line_height'] + 1) . "px;
		font-weight:800; /* static */
	}
	
	#navigation > li a span.nav_subtitle, 
	#navigation li a[data-tag]:before {
		font-family:" . construction_pro_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_system_font'] . ";
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_line_height'] - 1) . "px;
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_text_transform'] . ";
		font-weight:400; /* static */
	}
	
	#navigation ul li a span:before {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_font_size'] + 3) . "px;
	}
	
	.header_top_inner nav > div > ul > li ul li a {
		font-weight:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_font_weight'] + 300) . ";
	}
	
	#navigation > li a span.nav_subtitle {
		text-transform:none;
		font-weight:300;
	}
	
	@media only screen and (max-width: 1024px) {
		html #page #header nav #navigation > li.menu-item-hide-text > a > span > span.nav_subtitle,
		html #page #header nav #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-hide-text > a > span > span.nav_subtitle {
			font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_font_size'] - 2) . "px;
			line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_line_height'] - 2) . "px;
		}
	}
	/* Finish Navigation Dropdown Font */


	/* Start H1 Font */
	h1,
	h1 a,
	#header .logo .title {
		font-family:" . construction_pro_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_dropcap {
		font-family:" . construction_pro_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_icon_list_items.cmsmasters_icon_list_icon_type_number .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	.cmsmasters_icon_box.box_icon_type_number:before,
	.cmsmasters_icon_box.cmsmasters_icon_heading_left.box_icon_type_number .icon_box_heading:before {
		font-family:" . construction_pro_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_style'] . ";
	}
	
	.cmsmasters_dropcap.type1 {
		font-size:36px; /* static */
	}
	
	.cmsmasters_dropcap.type2 {
		font-size:20px; /* static */
	}
	
	.headline_outer .headline_inner .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] + 10) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] + 14) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] + 20) . "px;
	}
	
	.headline_outer .headline_inner.align_left .headline_icon {
		padding-left:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] + 10) . "px;
	}
	
	.headline_outer .headline_inner.align_right .headline_icon {
		padding-right:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] + 10) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon {
		padding-top:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] + 30) . "px;
	}
	/* Finish H1 Font */


	/* Start H2 Font */
	h2,
	h2 a,
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap, 
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a, 
	.comment-respond .comment-reply-title, 
	.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_pricing_item_inner .pricing_header .cmsmasters_price_wrap .cmsmasters_price, 
	.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_pricing_item_inner .pricing_header .cmsmasters_price_wrap .cmsmasters_coins, 
	.quote_content:before, 
	.post.cmsmasters_timeline_type .cmsmasters_post_info .cmsmasters_post_date {
		font-family:" . construction_pro_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_text_decoration'] . ";
	}
	
	.quote_content:before {
		font-size:50px; /* static */
		line-height:50px; /* static */
	}
	
	.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner:before {
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_size'] . "px;
	}
	
	.post.cmsmasters_timeline_type .cmsmasters_post_info .cmsmasters_post_date {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_size'] - 4) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] - 8) . "px;
	}
	
	.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner:before {
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] - 6) . "px;
	}
	
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap {
		font-size:24px; /* static */
		line-height:30px; /* static */
	}
	
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap, 
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] + 10) . "px;
	}
	
	.cmsmasters_counters.counters_type_horizontal .cmsmasters_counter_wrap .cmsmasters_counter.counter_has_icon .cmsmasters_counter_inner {
		padding-" . ((is_rtl()) ? 'right' : 'left') . ":" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] + 14) . "px;
	}
	
	.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_pricing_item_inner .pricing_header .cmsmasters_price_wrap .cmsmasters_price {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] - 2) . "px;
	}
	
	.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_pricing_item_inner .pricing_header .cmsmasters_price_wrap .cmsmasters_coins {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_size'] - 6) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] - 12) . "px;
	}
	
	/* Finish H2 Font */


	/* Start H3 Font */
	h3,
	h3 a, 
	.post.cmsmasters_default_type .cmsmasters_post_title a, 
	.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap, 
	.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_pricing_item_inner .pricing_header .pricing_title, 
	.post.cmsmasters_timeline_type .cmsmasters_post_title, 
	.post.cmsmasters_timeline_type .cmsmasters_post_title a {
		font-family:" . construction_pro_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_text_decoration'] . ";
	}
	
	.bypostauthor > .comment-body .alignleft:before {
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_size'] . "px;
	}
	
	.bypostauthor > .comment-body .alignleft:before {
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] . "px;
	}
	
	.bypostauthor > .comment-body .alignleft:before {
		width:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] . "px;
	}
	
	.bypostauthor > .comment-body .alignleft:before {
		height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] . "px;
	}
	
	.post.cmsmasters_timeline_type .cmsmasters_post_title, 
	.post.cmsmasters_timeline_type .cmsmasters_post_title a {
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] - 2) . "px;
	}
	
	.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_pricing_item_inner .pricing_header .pricing_title {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] + 4) . "px;
	}
	
	.post.cmsmasters_default_type .cmsmasters_post_title a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] + 4) . "px;
	}
	
	/* Finish H3 Font */


	/* Start H4 Font */
	h4, 
	h4 a, 
	.cmsmasters_items_filter_wrap .cmsmasters_items_filter_block .cmsmasters_items_filter_list li a, 
	.post.cmsmasters_masonry_type .cmsmasters_post_cont .cmsmasters_post_header .cmsmasters_post_title,
	.post.cmsmasters_masonry_type .cmsmasters_post_cont .cmsmasters_post_header .cmsmasters_post_title a,
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a, 
	.post_nav > span a, 
	.comment_nav a, 
	.cmsmasters_table tr.cmsmasters_table_row_header th, 
	.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_pricing_item_inner .pricing_header .cmsmasters_price_wrap .cmsmasters_period, 
	.quote_title, 
	.widget .cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item > a, 
	.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item > a, 
	.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title > a, 
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_title, 
	.post .cmsmasters_post_footer .button, 
	#page .post-password-form input[type=submit], 
	.cmsmasters_single_slider .cmsmasters_single_slider_item_title, 
	.post_comments .cmsmasters_comment_item_cont_info .cmsmasters_comment_item_title, 
	.portfolio.opened-article .project .project_sidebar .project_details .project_details_item .project_details_item_title, 
	.portfolio.opened-article .project .project_sidebar .project_features .project_features_item .project_features_item_title, 
	.profiles.opened-article .profile .profile_sidebar .profile_details .profile_details_item .profile_details_item_title, 
	.profiles.opened-article .profile .profile_sidebar .profile_features .profile_features_item .profile_features_item_title, 
	.attachment_nav_btn > a, 
	#wp-calendar th, 
	.widget_pages ul li a {
		font-family:" . construction_pro_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_text_decoration'] . ";
	}
	
	.post.cmsmasters_masonry_type .cmsmasters_post_cont .cmsmasters_post_header .cmsmasters_post_title, 
	.post.cmsmasters_masonry_type .cmsmasters_post_cont .cmsmasters_post_header .cmsmasters_post_title a, 
	.cmsmasters_slider_post_title, 
	.cmsmasters_slider_post_title a {
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_line_height'] - 6) . "px;		
	}
	
	.cmsmasters_profile .entry-title a, 
	.cmsmasters_profile .entry-title {
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] . "px;
	}
	
	.cmsmasters_profile .profile .pl_subtitle {
		font-weight:300; /* static */
	}
	
	.post_comments .cmsmasters_comment_item_cont_info .cmsmasters_comment_item_title {
		font-weight:600; /* static */
	}	
	
	.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_pricing_item_inner .pricing_header .cmsmasters_price_wrap .cmsmasters_period {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_line_height'] - 9) . "px;
	}
	
	.cmsmasters_single_slider .cmsmasters_single_slider_item_title, 
	.cmsmasters_single_slider .cmsmasters_single_slider_item_title a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_line_height'] - 4) . "px;
	}
	
	.widget .cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item > a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] - 2) . "px;
	}
	
	.widget_pages ul li a, 
	#page .post-password-form input[type=submit], 
	.post .cmsmasters_post_footer .button, 
	.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title > a, 
	.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item > a, 
	.portfolio.opened-article .project .project_sidebar .project_details .project_details_item .project_details_item_title, 
	.portfolio.opened-article .project .project_sidebar .project_features .project_features_item .project_features_item_title, 
	.profiles.opened-article .profile .profile_sidebar .profile_details .profile_details_item .profile_details_item_title, 
	.profiles.opened-article .profile .profile_sidebar .profile_features .profile_features_item .profile_features_item_title, 
	.cmsmasters_profile .profile .pl_subtitle {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_line_height'] - 2) . "px;
	}
	
	.profiles.opened-article .profile .profile_sidebar .profile_details .profile_details_title, 
	.profiles.opened-article .profile .profile_sidebar .profile_features .profile_features_title, 
	.profiles.opened-article .profile .profile_sidebar .profile_social_icons .profile_social_icons_title, 
	.portfolio.opened-article .project .project_sidebar .share_posts .share_posts_title, 
	.portfolio.opened-article .project .project_sidebar .project_features .project_features_title, 
	.portfolio.opened-article .project .project_sidebar .project_details .project_details_title {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] + 2) . "px;
	}
	
	.quote_title {
		font-weight:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_weight'] - 100) . ";
	}
	
	.quote_title, 
	.about_author .about_author_cont_title, 
	.about_author .about_author_cont_title a, 
	.post_comments .cmsmasters_comment_item_title, 
	.post_comments .cmsmasters_comment_item_title a, 
	.post_comments .cmsmasters_comment_item_cont_info .cmsmasters_comment_item_title, 
	.cmsmasters_profile .profile .pl_subtitle {
		text-transform:none;
	}
	
	@media only screen and (max-width: 1024px) {
		.cmsmasters_items_filter_wrap .cmsmasters_items_filter_block .cmsmasters_items_filter_list li > a.button {
			font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] - 3) . "px;
			line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_line_height'] - 5) . "px;
		}
	}
	/* Finish H4 Font */


	/* Start H5 Font */
	h5,
	h5 a, 
	.cmsmasters_stats .cmsmasters_stat_wrap .cmsmasters_stat_title,  
	.share_posts a,  
	.comment-respond .comment-reply-title a, 
	.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_pricing_item_inner .pricing_header .cmsmasters_price_wrap .cmsmasters_currency, 
	.post .cmsmasters_post_cont .cmsmasters_post_cont_info, 
	.post .cmsmasters_post_cont .cmsmasters_post_cont_info a,
	.cmsmasters_archive_type .cmsmasters_archive_item_info, 
	.cmsmasters_archive_type .cmsmasters_archive_item_info a, 
	.opened-article .post .cmsmasters_post_cont .cmsmasters_post_tags, 
	.opened-article .post .cmsmasters_post_cont .cmsmasters_post_tags a, 
	.cmsmasters_link_line, 
	.cmsmastersLike, 
	.cmsmasters_post_comments, 
	.blog.opened-article .post .cmsmasters_post_cont .cmsmasters_post_tags, 
	.comment-respond .comment-notes, 
	.comment-respond .logged-in-as, 
	.comment-respond .logged-in-as a, 
	.cmsmasters_archive_type .cmsmasters_archive_item_type, 
	#wp-calendar caption, 
	.widget_custom_twitter_entries .tweet_list .tweet_time {
		font-family:" . construction_pro_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_text_decoration'] . ";
	}
	
	.cmsmastersLike:before, 
	.cmsmasters_post_comments:before {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] + 2) . "px;
	}
	
	.cmsmastersLike span, 
	.cmsmasters_post_comments span {
		font-weight:600;
	}
	
	.cmsmasters_stats .cmsmasters_stat_wrap .cmsmasters_stat_title {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_line_height'] - 1) . "px;
	}
	
	.cmsmasters_stats.stats_mode_circles	.cmsmasters_stat_wrap .cmsmasters_stat_title {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] + 3) . "px;
	}
	
	.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_pricing_item_inner .pricing_header .cmsmasters_price_wrap .cmsmasters_currency {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] + 1) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_line_height'] - 8) . "px;
	}
	/* Finish H5 Font */


	/* Start H6 Font */
	h6,
	h6 a, 
	.post_comments .cmsmasters_comment_item_date, 
	.headline_outer, 
	.headline_outer a, 
	.cmsmasters_project_category, 
	.cmsmasters_project_category a, 
	.cmsmasters_profile_category, 
	.cmsmasters_profile_category a, 
	.cmsmasters_slider_project_category, 
	.cmsmasters_slider_project_category a, 
	.post.cmsmasters_masonry_type .cmsmasters_post_cont .cmsmasters_post_cont_info,
	.post.cmsmasters_masonry_type .cmsmasters_post_cont .cmsmasters_post_cont_info a, 
	.post.cmsmasters_masonry_type .cmsmasters_post_cont .cmsmasters_post_date, 
	.post.cmsmasters_timeline_type .cmsmasters_post_cont .cmsmasters_post_cont_info, 
	.post.cmsmasters_timeline_type .cmsmasters_post_cont .cmsmasters_post_cont_info a, 
	.post_comments .cmsmasters_comment_item_cont_info > a, 
	.cmsmasters_posts_slider	.cmsmasters_post_cont_info, 
	.cmsmasters_posts_slider	.cmsmasters_post_cont_info a, 
	.widget_recent_entries li a, 
	.widget_recent_comments li,  
	.widget_recent_comments li a,  
	#wp-calendar tfoot a, 
	.widget_custom_posts_tabs_entries .cmsmasters_tabs_wrap .cmsmasters_tab a, 
	.widget_custom_posts_tabs_entries .cmsmasters_tabs_wrap .cmsmasters_tab span, 
	.cmsmasters_twitter_wrap .cmsmasters_twitter_item .published {
		font-family:" . construction_pro_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_text_decoration'] . ";
	}
	
	.cmsmasters_twitter_wrap .cmsmasters_twitter_item .published {
		height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_line_height'] . "px;
	}
	
	.widget_custom_posts_tabs_entries .cmsmasters_tabs_wrap .cmsmasters_tab .ovh a, 
	.widget_custom_posts_tabs_entries .cmsmasters_tabs_wrap .cmsmasters_tab .ovh {
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_line_height'] - 6) . "px;
	}
	
	/* Finish H6 Font */


	/* Start Button Font */
	.widget_nav_menu > div > ul li a, 
	.widget_custom_contact_form_entries .form_info.submit_wrap .button, 
	.cmsmasters_button, 
	.post-edit-link, 
	.header_bot_inner .slogan_wrap .slogan_wrap_inner .slogan_wrap_text .cmsmasters_header_bot_btn, 
	.wpcf7 .wpcf7-form .wpcf7-submit, 
	.comment-respond #commentform input[type=submit], 
	.cmsmasters_items_sort_block, 
	.cmsmasters_items_sort_block a {
		font-family:" . construction_pro_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_text_transform'] . ";
	}
	
	.gform_wrapper .gform_footer input.button, 
	.gform_wrapper .gform_footer input[type=submit] {
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_size'] . "px !important;
	}
	
	.header_bot_inner .slogan_wrap .slogan_wrap_inner .slogan_wrap_text .cmsmasters_header_bot_btn {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_size'] + 1) . "px;
		font-weight:600;
	}
	
	.cmsmasters_items_sort_block, 
	.cmsmasters_items_sort_block a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_size'] - 2) . "px;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg, 
	.cmsmasters_button.cmsmasters_but_icon_divider, 
	.cmsmasters_button.cmsmasters_but_icon_inverse {
		padding-left:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_line_height'] + 40) . "px;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_divider:before, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:before, 
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_divider:after, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:after {
		width:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_line_height'] + 18) . "px;
	}	
	
	/* Finish Button Font */


	/* Start Small Text Font */
	small,
	.widget_recent_entries li span, 
	.header_top_inner .meta_wrap, 
	form .formError .formErrorContent, 
	.cmsmasters_img .cmsmasters_img_caption, 
	.cmsmasters_gallery .cmsmasters_gallery_item.cmsmasters_caption figcaption,  
	.cmsmasters_notice .notice_content, 
	.cmsmasters_table tr.cmsmasters_table_row_footer td, 
	.quote_subtitle, 
	.quote_link {
		font-family:" . construction_pro_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_text_transform'] . ";
	}
	
	.cmsmasters_table tr.cmsmasters_table_row_footer td {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] + 1) . "px;
	}
	
	.quote_subtitle, 
	.quote_link {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] + 2) . "px;
	}

	.cmsmasters_notice .notice_content {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] + 3) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_line_height'] + 2) . "px;
		font-weight:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_weight'] + 400) . ";
		text-transform:uppercase;
	}
	
	.cmsmasters_table tr.cmsmasters_table_row_footer td, 
	.cmsmasters_img .cmsmasters_img_caption, 
	.cmsmasters_gallery .cmsmasters_gallery_item.cmsmasters_caption figcaption {
		font-weight:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_weight'] + 500) . ";
		text-transform:uppercase;
	}
	
	.header_top_inner .meta_wrap {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] + 1) . "px;
		font-weight:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_weight'] + 100) . ";
		
	}

	#navigation > li.menu-item-mega > div.menu-item-mega-container ul ul li.menu-item-mega-description span.menu-item-mega-description-container {
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_line_height'] . "px;
	}
	
	.gform_wrapper .description, 
	.gform_wrapper .gfield_description, 
	.gform_wrapper .gsection_description, 
	.gform_wrapper .instruction {
		font-family:" . construction_pro_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_system_font'] . " !important;
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] . "px !important;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_line_height'] . "px !important;
	}
	
	@media only screen and (max-width: 950px) {
		.widget_recent_comments li, 
		.widget_recent_comments li a, 
		.widget_recent_entries li span, 
		.widget_custom_posts_tabs_entries .cmsmasters_tabs_wrap .cmsmasters_tab small {
			font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] + 1) . "px;
		}
	}
	
	/* Finish Small Text Font */


	/* Start Text Fields Font */
	input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	textarea,
	select,
	option,
	code {
		font-family:" . construction_pro_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_input_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_input_font_font_style'] . ";
	}
	
	.gform_wrapper input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	.gform_wrapper textarea, 
	.gform_wrapper select {
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_input_font_font_size'] . "px !important;
	}
	/* Finish Text Fields Font */


	/* Start Blockquote Font */
	blockquote {
		font-family:" . construction_pro_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_quote_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_quote_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_quote_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_quote_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_quote_font_font_style'] . ";
	}
	
	q {
		font-family:" . construction_pro_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_quote_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_quote_font_system_font'] . ";
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_quote_font_font_style'] . ";
	}
	/* Finish Blockquote Font */

/***************** Finish Theme Font Styles ******************/


";


if (CMSMASTERS_WOOCOMMERCE) {

	$custom_css .= "
/***************** Start WooCommerce Font Styles ******************/

	/* Start Content Font */
	.cmsmasters_single_product .cmsmasters_product_left_column .product_meta > span .sku, 
	.cart_totals .shipping #shipping_method .amount, 
	.shop_table .shipping #shipping_method .amount, 
	#ship-to-different-address {
		font-family:" . construction_pro_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_style'] . ";
	}
		
	#ship-to-different-address {
		text-transform:none;
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start H1 Font */
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	
	.cmsmasters_single_product .product_info_top .price > .amount, 
	.cmsmasters_single_product .product_info_top .price ins {
		font-family:" . construction_pro_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_text_decoration'] . ";
	}
	
	.cmsmasters_single_product .product_info_top .price > .amount, 
	.cmsmasters_single_product .product_info_top .price ins {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] - 2) . "px;
	}
	
	.cmsmasters_single_product .product_info_top .posted_in > a {
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] - 2) . "px;
	}

	.cmsmasters_single_product .product_info_top .price > .amount, 
	.cmsmasters_single_product .product_info_top .price ins {
		font-weight:700; /*static*/
	}
	
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	.cmsmasters_single_product .single_variation_wrap .single_variation .price ins .amount, 
	.cmsmasters_single_product .single_variation_wrap .single_variation .price > .amount, 
	.cmsmasters_product_info .price > .amount, 
	.cmsmasters_product_info .price ins > .amount {
		font-family:" . construction_pro_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_text_decoration'] . ";
	}
		
	.cmsmasters_products .product-category a > h3 {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] - 2) . "px;
	}
	
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.widget_categories li > a, 
	.widget_archive li > a, 
	.widget ul.product_list_widget li .amount, 
	.widget_product_categories .product-categories .cat-item a, 
	.widget_layered_nav_filters ul li > a, 
	.widget_layered_nav ul li > a, 
	.cmsmasters_single_product .single_variation_wrap .single_variation .price del .amount, 
	.cmsmasters_single_product .cmsmasters_woo_tabs .shop_attributes th, 
	.cmsmasters_single_product .product_info_top .price del, 
	.woocommerce-view-order .order_details thead th:first-child, 
	.customer_details tr td, 
	.customer_details tr th, 
	.woocommerce-order-received .woocommerce .shop_table.order_details, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total, 
	.widget_shopping_cart .widget_shopping_cart_content .total, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list li .quantity, 
	.widget_shopping_cart .widget_shopping_cart_content .cart_list li .quantity, 
	.cmsmasters_product_buttons .cmsmasters_product_buttons_wrap > a > span, 
	.cmsmasters_product_info .price del > .amount, 
	.onsale, 
	.out-of-stock, 
	.woocommerce-info, 
	.woocommerce-message, 
	.woocommerce-error, 
	.woocommerce-info a, 
	.woocommerce-message a, 
	.woocommerce-error a, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button, 
	.widget_shopping_cart .widget_shopping_cart_content .buttons .button, 
	.cmsmasters_added_product_info .cmsmasters_added_product_info_text, 
	.shop_table	thead tr th, 
	.shop_table td .amount, 
	.cmsmasters_woo .button, 
	.cart_totals th, 
	.cart_totals .amount, 
	.woocommerce-billing-fields, 
	.woocommerce-shipping-fields, 
	.order_details li span:first-child, 
	.woocommerce-order-received .woocommerce .shop_table.order_details thead th, 
	.cmsmasters_single_product .cmsmasters_woo_tabs #reviews .comment-respond label {
		font-family:" . construction_pro_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_text_decoration'] . ";
	}
	
	.widget_categories li > a, 
	.widget_archive li > a, 
	.widget ul.product_list_widget li .amount, 
	.widget_product_categories .product-categories .cat-item a, 
	.widget_layered_nav ul li > a, 
	.widget_layered_nav_filters ul li > a, 
	.cmsmasters_single_product .cmsmasters_woo_tabs .shop_attributes th, 
	.woocommerce-order-received .woocommerce .shop_table.order_details, 
	.shop_table td .amount, 
	.woocommerce-info, 
	.woocommerce-message, 
	.woocommerce-error, 
	.woocommerce-info a, 
	.woocommerce-message a, 
	.woocommerce-error a, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list li .quantity, 
	.widget_shopping_cart .widget_shopping_cart_content .cart_list li .quantity, 
	.cmsmasters_product_buttons .cmsmasters_product_buttons_wrap > a > span, 
	.onsale, 
	.out-of-stock, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button, 
	.widget_shopping_cart .widget_shopping_cart_content .buttons .button, 
	.cmsmasters_added_product_info .cmsmasters_added_product_info_text {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] - 1) . "px;
	}
	
	.cmsmasters_woo .button {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_line_height'] - 2) . "px;
	}

	.cmsmasters_single_product .cmsmasters_woo_tabs .comment_container .comment-text .meta .verified {
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_line_height'] . "px;
	}
	
	.widget ul.product_list_widget li .amount, 
	.woocommerce-order-received .woocommerce .shop_table.order_details, 
	.shop_table td .amount, 
	.widget_shopping_cart .widget_shopping_cart_content .cart_list li .quantity, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list li .quantity {
		font-weight:400; /*static*/
	}
	
	.widget_layered_nav ul li > a, 
	.widget_layered_nav_filters ul li > a, 
	.cmsmasters_single_product .cmsmasters_woo_tabs .comment_container .comment-text .meta h4 {
		font-weight:600;/*static*/
	}
	
	.widget_categories li > a, 
	.widget_archive li > a, 
	.cmsmasters_single_product .cmsmasters_woo_tabs .comment_container .comment-text .meta h4, 
	.woocommerce-order-received .woocommerce .shop_table.order_details {
		text-transform:none;
	}
	
	.cmsmasters_single_product .product_info_top .price del {
		text-decoration:line-through;
	}
	
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.widget ul.product_list_widget li .reviewer, 
	.widget ul.product_list_widget li a, 
	.cmsmasters_single_product .cmsmasters_woo_tabs .comment_container .comment-text .meta time, 
	.cmsmasters_single_product .product_meta, 
	.cmsmasters_single_product .product_meta a, 
	.cmsmasters_single_product .posted_in > a, 
	.woocommerce-order-received .woocommerce .shop_table.order_details tbody th:first-child, 
	.woocommerce-order-received .woocommerce .shop_table.order_details tbody td:first-child, 
	.woocommerce-order-received .woocommerce .shop_table.order_details tfoot th:first-child, 
	.woocommerce-order-received .woocommerce .shop_table.order_details tfoot td:first-child, 
	.woocommerce-order-received .woocommerce .shop_table.order_details tfoot tr:last-child .amount, 
	.order_details li span:last-child, 
	#order_review .shop_table tr.order-total .amount, 
	#order_review .shop_table tbody tr td:first-child, 
	#order_review .shop_table tbody tr th:first-child, 
	#order_review .shop_table tfoot tr td:first-child, 
	.woocommerce-view-order .order_details td:first-child, 
	.woocommerce-view-order .order_details th:first-child, 
	.woocommerce-view-order .order_details tfoot tr:last-child td, 
	.woocommerce-view-order .order_details tfoot tr:last-child th, 
	.woocommerce-view-order .order_details tfoot tr:last-child .amount, 
	#order_review .shop_table tfoot tr th:first-child, 
	.shop_table td a, 
	.shop_table td.product-remove .remove, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list li	> a, 
	.widget_shopping_cart .widget_shopping_cart_content .cart_list li > a, 
	.shipping-calculator-button, 
	.woocommerce-remove-coupon {
		font-family:" . construction_pro_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_text_decoration'] . ";
	}
	
	.widget ul.product_list_widget li .reviewer, 
	.cmsmasters_single_product .cmsmasters_woo_tabs .comment_container .comment-text .meta time {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] - 1) . "px;
	}

	
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	
	.cmsmasters_product_cat > a {
		font-family:" . construction_pro_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_text_decoration'] . ";
	}
	
	@media only screen and (max-width: 950px) {
		.widget_recent_entries li a {
			font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_size'] + 2) . "px;
		}
	}
	
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	/* Finish Small Text Font */

/***************** Finish WooCommerce Font Styles ******************/


";

}

	
	return $custom_css;
}

