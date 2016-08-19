<?php
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version 	1.0.0
 * 
 * Theme Secondary Color Schemes Rules
 * Created by CMSMasters
 * 
 */


function construction_pro_theme_colors_secondary() {
	$cmsmasters_option = construction_pro_get_global_options();


	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();


	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version 	1.0.0
 * 
 * Theme Secondary Color Schemes Rules
 * Created by CMSMasters
 * 
 */

";


	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');


		if (CMSMASTERS_WOOCOMMERCE) {
			$custom_css .= "
/***************** Start {$title} WooCommerce Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	{$rule}.widget ul.product_list_widget li .widget_product_info del .amount, 
	{$rule}.cmsmasters_single_product .cmsmasters_product_left_column .product_meta > span .sku, 
	{$rule}.cart_totals .shipping #shipping_method .amount, 
	{$rule}.shop_table .shipping #shipping_method .amount, 
	{$rule}#ship-to-different-address, 
	{$rule}.select2-container .select2-choice, 
	{$rule}.select2-container.select2-drop-above .select2-choice, 
	{$rule}.select2-container.select2-container-active .select2-choice, 
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice, 
	{$rule}.select2-drop.select2-drop-active, 
	{$rule}.select2-drop.select2-drop-above.select2-drop-active {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_color']) . "
	}

	{$rule}.widget_shopping_cart .widget_shopping_cart_content .cart_list li a.remove, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list li a.remove, 
	{$rule}.shop_table td.product-remove .remove {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_color']) . "
	}

	/* Finish Main Content Font Color */


	/* Start Primary Color */
	{$rule}.cmsmasters_single_product .posted_in > a:hover, 
	{$rule}.required, 
	{$rule}.cmsmasters_product_cat > a:hover, 
	{$rule}.cmsmasters_star_rating .cmsmasters_star_color_wrap .cmsmasters_star, 
	{$rule}.woocommerce-info a:not(.button):hover, 
	{$rule}.woocommerce-message a:not(.button):hover, 
	{$rule}.woocommerce-error a:not(.button):hover, 
	{$rule}.comment-form-rating .stars > span a:hover, 
	{$rule}.comment-form-rating .stars > span a.active {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}

	{$rule}.widget_shopping_cart .widget_shopping_cart_content .buttons .button, 
	{$rule}.widget_product_categories .product-categories .cat-item:hover, 
	{$rule}.widget_price_filter .price_slider_wrapper .price_slider .ui-slider-range, 
	{$rule}.cmsmasters_woo input[type=radio] + label:after, 
	{$rule}#shipping_method input[type=checkbox] + label:after, 
	{$rule}#ship-to-different-address input[type=checkbox] + label:after, 
	{$rule}.payment_methods input[type=checkbox] + label:after,  
	{$rule}.cart_totals input[type=radio] + label:after, 
	{$rule}.shipping-calculator-button:before, 
	{$rule}.woocommerce-remove-coupon:before, 
	{$rule}.cmsmasters_woo .button, 
	{$rule}.shop_table td.product-remove .remove:hover, 
	{$rule}.widget_shopping_cart .widget_shopping_cart_content .cart_list li a.remove:hover, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list li a.remove:hover, 
	{$rule}.cmsmasters_dynamic_cart .cmsmasters_dynamic_cart_button:hover, 
	{$rule}.cmsmasters_product_buttons .cmsmasters_product_buttons_wrap > a, 
	{$rule}.out-of-stock, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button, 
	{$rule}.shop_table thead tr, 
	{$rule}.order_details li span:first-child, 
	{$rule}.customer_details tr:first-child td, 
	{$rule}.customer_details tr:first-child th {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}

	{$rule}.select2-container.select2-container-active .select2-choice, 
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice, 
	{$rule}.select2-drop.select2-drop-active, 
	{$rule}.select2-drop.select2-drop-above.select2-drop-active {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */


	/* Start Secondary Color */
	{$rule}.cmsmasters_single_product .cmsmasters_woo_tabs .cmsmasters_tabs_list li a,  
	{$rule}.woocommerce-info a, 
	{$rule}.woocommerce-message a, 
	{$rule}.woocommerce-error a, 
	{$rule}.cmsmasters_product_cat > a {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_secondary']) . "
	}

	{$rule}.cmsmasters_dynamic_cart .cmsmasters_dynamic_cart_button, 
	{$rule}.onsale {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_secondary']) . "
	}
	/* Finish Secondary Color */


	/* Start Highlight Color */
	{$rule}.widget ul.product_list_widget li a:hover, 
	{$rule}.cmsmasters_single_product .posted_in > a, 
	{$rule}.shop_table td a:hover, 
	{$rule}.cmsmasters_products .product.product-category a:hover > h3, 
	{$rule}.cmsmasters_products .product.product-category a:hover > h3 > mark, 
	{$rule}.cmsmasters_product_title a:hover, 
	{$rule}.widget_shopping_cart .widget_shopping_cart_content .cart_list li > a:hover, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list li	> a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}

	{$rule}.widget_shopping_cart .widget_shopping_cart_content .buttons .button:hover, 
	{$rule}.cmsmasters_woo .button:hover, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button:hover, 
	{$rule}.cmsmasters_product_buttons .cmsmasters_product_buttons_wrap > a:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */


	/* Start Headings Color */
	{$rule}.widget ul.product_list_widget li .reviewer, 
	{$rule}.widget ul.product_list_widget li a, 
	{$rule}.widget ul.product_list_widget li .widget_product_info .amount, 
	{$rule}.widget ul.product_list_widget li a, 
	{$rule}.widget_product_categories .product-categories .cat-item > a, 
	{$rule}.widget_product_categories .product-categories .cat-item, 
	{$rule}.cmsmasters_single_product .single_variation_wrap .single_variation .price ins .amount, 
	{$rule}.cmsmasters_single_product .single_variation_wrap .single_variation .price > .amount, 
	{$rule}.cmsmasters_single_product .product_info_top .price > .amount, 
	{$rule}.cmsmasters_single_product .cmsmasters_woo_tabs #reviews .comment-respond label, 
	{$rule}.cmsmasters_single_product .cmsmasters_woo_tabs .comment_container .comment-text .meta time, 
	{$rule}.cmsmasters_single_product .cmsmasters_woo_tabs .shop_attributes, 
	{$rule}.cmsmasters_single_product .product_meta, 
	{$rule}.cmsmasters_single_product .product_info_top .price ins, 
	{$rule}.woocommerce .shop_table, 
	{$rule}.woocommerce-view-order .order_details td:first-child, 
	{$rule}.woocommerce-view-order .order_details th:first-child, 
	{$rule}.woocommerce .myaccount_user strong, 
	{$rule}.customer_details, 
	{$rule}.woocommerce-order-received .woocommerce .shop_table.order_details, 
	{$rule}.order_details li span:last-child, 
	{$rule}.customer_details tr:last-child td, 
	{$rule}.customer_details tr:last-child th, 
	{$rule}#order_review .shop_table tr.order-total .amount, 
	{$rule}#order_review .shop_table tbody tr td:first-child, 
	{$rule}#order_review .shop_table tbody tr th:first-child, 
	{$rule}#order_review .shop_table tfoot tr td:first-child, 
	{$rule}#order_review .shop_table tfoot tr th:first-child, 
	{$rule}.woocommerce-billing-fields, 
	{$rule}.woocommerce-shipping-fields, 
	{$rule}.shipping-calculator-button:hover, 
	{$rule}.shipping-calculator-button, 
	{$rule}.cmsmasters_woo a.woocommerce-remove-coupon:hover, 
	{$rule}.cmsmasters_woo a.woocommerce-remove-coupon, 
	{$rule}.cart_totals .amount,  
	{$rule}.cart_totals th, 
	{$rule}.shop_table td .amount, 
	{$rule}.shop_table td a, 
	{$rule}.cmsmasters_product_info .price > .amount, 
	{$rule}.cmsmasters_product_info .price ins > .amount, 
	{$rule}.woocommerce-info, 
	{$rule}.woocommerce-message, 
	{$rule}.woocommerce-error, 
	{$rule}.cmsmasters_products .product.product-category a h3 > mark, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list li	> a, 
	{$rule}.widget_shopping_cart .widget_shopping_cart_content .cart_list li > a, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .total,
	{$rule}.widget_shopping_cart .widget_shopping_cart_content .total, 	
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list li .quantity, 
	{$rule}.widget_shopping_cart .widget_shopping_cart_content .cart_list li .quantity, 
	{$rule}.cmsmasters_added_product_info .cmsmasters_added_product_info_text {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}

	{$rule}.cmsmasters_dynamic_cart .cmsmasters_added_product_info, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content {
		-webkit-box-shadow:0px 6px 3px -5px rgba(61, 61, 61, 0.15), 0px 0px 1px 1px rgba(61, 61, 61, 0.05);
		-moz-box-shadow:0px 6px 3px -5px rgba(61, 61, 61, 0.15), 0px 0px 1px 1px rgba(61, 61, 61, 0.05);
		box-shadow:0px 6px 3px -5px rgba(61, 61, 61, 0.15), 0px 0px 1px 1px rgba(61, 61, 61, 0.05);
	}
	/* Finish Headings Color */


	/* Start Main Background Color */
	{$rule}.widget_shopping_cart .widget_shopping_cart_content .buttons .button, 
	{$rule}.widget_product_categories .product-categories .cat-item:hover a, 
	{$rule}.my_account_orders .order-actions a:hover, 
	{$rule}.cmsmasters_woo .button, 
	{$rule}.shop_table thead tr th, 
	{$rule}.shop_table thead tr td, 
	{$rule}.woocommerce-view-order .order_details thead th:first-child, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button, 
	{$rule}.cmsmasters_dynamic_cart .cmsmasters_dynamic_cart_button, 
	{$rule}.cmsmasters_product_buttons .cmsmasters_product_buttons_wrap > a > span, 
	{$rule}.onsale, 
	{$rule}.out-of-stock, 
	{$rule}.shop_table td.product-remove .remove:hover, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list li a.remove, 
	{$rule}.widget_shopping_cart .widget_shopping_cart_content .cart_list li a.remove, 
	{$rule}.shop_table td.product-remove .remove, 
	{$rule}.order_details li span:first-child, 
	{$rule}.customer_details tr:first-child td, 
	{$rule}.customer_details tr:first-child th {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}

	{$rule}.widget_price_filter .price_slider_wrapper .price_slider .ui-slider-handle, 
	{$rule}.cmsmasters_added_product_info, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content, 
	{$rule}.cmsmasters_product_img_wrap:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */


	/* Start Alternate Background Color */ 
	{$rule}.widget_product_categories .product-categories .cat-item, 
	{$rule}.cmsmasters_single_product .cmsmasters_woo_tabs .cmsmasters_tabs_list,  
	{$rule}.cmsmasters_woo input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]), 
	{$rule}.cmsmasters_woo select, 
	{$rule}.cmsmasters_woo textarea, 
	{$rule}.woocommerce-info, 
	{$rule}.woocommerce-message, 
	{$rule}.woocommerce-error, 
	{$rule}.select2-container.select2-container-active .select2-choice, 
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice, 
	{$rule}.select2-drop.select2-drop-active, 
	{$rule}.select2-drop.select2-drop-above.select2-drop-active, 
	{$rule}.woocommerce-ordering select, 
	{$rule}.select2-container .select2-choice, 
	{$rule}.select2-container.select2-drop-above .select2-choice, 
	{$rule}#order_review .shop_table tr.order-total td, 
	{$rule}#order_review .shop_table tr.order-total th, 
	{$rule}.woocommerce-view-order .order_details tfoot tr:last-child th, 
	{$rule}.woocommerce-view-order .order_details tfoot tr:last-child td, 
	{$rule}.order_details li span:last-child, 
	{$rule}.customer_details tr:last-child td, 
	{$rule}.customer_details tr:last-child th, 
	{$rule}.woocommerce-order-received .woocommerce .shop_table.order_details tfoot tr:last-child td, 
	{$rule}.woocommerce-order-received .woocommerce .shop_table.order_details tfoot tr:last-child th {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */


	/* Start Borders Color */
	{$rule}.comment-form-rating .stars > span, 
	{$rule}.cmsmasters_star_rating .cmsmasters_star {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}

	{$rule}.widget_price_filter .price_slider_wrapper .price_slider {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}

	{$rule}.widget_price_filter .price_slider_wrapper .price_slider .ui-slider-handle, 
	{$rule}.cmsmasters_single_product .cmsmasters_woo_tabs .comment-text .meta, 
	{$rule}.cmsmasters_woo input[type=radio] + label:before, 
	{$rule}#shipping_method input[type=checkbox] + label:before, 
	{$rule}#ship-to-different-address input[type=checkbox] + label:before, 
	{$rule}.payment_methods input[type=checkbox] + label:before,  
	{$rule}.cart_totals input[type=radio] + label:before, 
	{$rule}.cart_totals table tr.order-total td, 
	{$rule}.cart_totals table tr.order-total th, 
	{$rule}.shop_table td,
	{$rule}.shop_table th,
	{$rule}.select2-container .select2-choice, 
	{$rule}.select2-container.select2-drop-above .select2-choice {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}

	@media only screen and (max-width: 767px) {
		{$rule}.shop_table.cart .cart_item {
			" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
		}
	}

	/* Finish Borders Color */

/***************** Finish {$title} WooCommerce Color Scheme Rules ******************/


";
		}
	}


	$custom_css .= "
/***************** Start Header Color Scheme Rules ******************/

	/* Start Header Content Color */
	.header_mid {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_color']) . "
	}
	/* Finish Header Content Color */


	/* Start Header Primary Color */
	.header_mid a,
	.header_mid h1 a:hover,
	.header_mid h2 a:hover,
	.header_mid h3 a:hover,
	.header_mid h4 a:hover,
	.header_mid h5 a:hover,
	.header_mid h6 a:hover,
	.header_mid .color_2,
	.header_mid h1,
	.header_mid h2,
	.header_mid h3,
	.header_mid h4,
	.header_mid h5,
	.header_mid h6,
	.header_mid h1 a,
	.header_mid h2 a,
	.header_mid h3 a,
	.header_mid h4 a,
	.header_mid h5 a,
	.header_mid h6 a,
	.header_mid #navigation > li > a,
	.header_mid #navigation > li > a:hover,
	.header_mid #navigation > li.current-menu-item > a,
	.header_mid #navigation > li.current_page_item > a,
	.header_mid #navigation > li.current-menu-ancestor > a,
	.header_mid #navigation > li.menu-item-highlight > a, 
	.header_mid_inner .social_wrap a:hover, 
	.header_mid_inner .slogan_wrap_inner .slogan_wrap_text .cmsmasters_meta_block .cmsmasters_meta_block_cell:before {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_link']) . "
	}

	a.responsive_nav, 
	.header_mid .button:hover,
	.header_mid #navigation > li > a[data-tag]:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_link']) . "
	}

	.header_mid input[type=text]:focus,
	.header_mid input[type=email]:focus,
	.header_mid input[type=password]:focus,
	.header_mid input[type=search]:focus,
	.header_mid textarea:focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_link']) . "
	}
	/* Finish Header Primary Color */


	/* Start Header Secondary Color */
	.header_mid_inner .cmsmasters-resp-nav-toggle.cmsmasters-icon-angle-up, 
	.search_button_open button, 
	.header_mid_inner .social_wrap a {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_secondary']) . "	
	}

	@media only screen and (max-width: 1024px) {
		.header_mid #navigation > li > a,
		.header_mid #navigation > li > a:hover,
		.header_mid #navigation > li.current-menu-item > a,
		.header_mid #navigation > li.current_page_item > a,
		.header_mid #navigation > li.current-menu-ancestor > a,
		.header_mid #navigation > li.menu-item-highlight > a {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_secondary']) . "	
		}
	}

	@media only screen and (max-width: 950px) {
		.header_mid_inner.cmsmasters_search_single .search_wrap .search_bar_wrap form {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_secondary']) . "	
			" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_secondary']) . "	
		}
	}

	@media only screen and (max-width: 950px) {
		.header_mid_inner .search_wrap .search_bar_wrap form {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_secondary']) . "	
			" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_secondary']) . "	
		}
	}
	/* Finish Header Secondary Color */


	/* Start Header Rollover Color */
	.header_mid a:hover,
	.header_mid #navigation > li.menu-item-highlight > a > span:first-child, 
	.header_mid_inner .social_wrap a:hover, 
	p.search_button_open button:hover, 
	.search_button_open button:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_hover']) . "
	}

	a.responsive_nav:hover, 
	a.responsive_nav.active, 
	.header_mid .button, 
	.header_mid #navigation > li.menu-item-highlight > a[data-tag]:before, 
	.header_mid #navigation ul li > a[data-tag]:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_hover']) . "
	}

	.header_mid_inner .search_wrap.search_opened.cmsmasters_header_search_focus .search_bar_wrap form {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_hover']) . "
	}
	/* Finish Header Rollover Color */


	/* Start Header Subtitle Color */
	.header_mid #navigation > li > a > span > span.nav_subtitle {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_subtitle']) . "
	}
	/* Finish Header Subtitle Color */


	/* Start Header Background Color */
	.header_mid .button,
	.header_mid .button:hover,
	.header_mid #navigation > li > a[data-tag]:before {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bg']) . "
	}

	.header_mid input[type=text]:focus,
	.header_mid input[type=number]:focus,
	.header_mid input[type=email]:focus,
	.header_mid input[type=password]:focus,
	.header_mid input[type=search]:focus,
	.header_mid textarea:focus,
	.header_mid_outer {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bg']) . "
	}

	/* Finish Header Background Color */


	/* Start Header Background Color on Scroll */
	.header_mid_scroll .header_mid_outer {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bg_scroll']) . "
	}

	@media only screen and (max-width: 1024px) {
		.header_mid_outer {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bg_scroll']) . "
		}
	}

	/* Finish Header Background Color on Scroll */


	/* Start Header Rollover Background Color */
	.header_mid .header_hover_bg {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_hover_bg']) . "
	}
	/* Finish Header Rollover Background Color */


	/* Start Header Borders Color */
	.header_mid input[type=text],
	.header_mid input[type=number],
	.header_mid input[type=email],
	.header_mid input[type=password],
	.header_mid input[type=search],
	.header_mid input[type=submit],
	.header_mid textarea,
	.header_mid select,
	.header_mid option, 
	.header_mid_inner .search_wrap.search_opened .search_bar_wrap form {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_border']) . "
	}

	.header_mid hr,
	.header_mid .cmsmasters_divider {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_border']) . "
	}

	#navigation li.cmsmasters_mov_bar span {
		" . cmsmasters_color_css('background', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_border']) . "
	}
	/* Finish Header Borders Color */


	/* Start Header Dropdown Link Color */
	a.responsive_nav:hover, 
	a.responsive_nav, 
	.header_mid #navigation ul li a, 
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li > a, 
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li > a[data-tag]:before {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_link']) . "
	}

	@media only screen and (max-width: 1024px) {
		.header_mid #navigation > li > a {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_link']) . "
		}
	}
	/* Finish Header Dropdown Link Color */


	/* Start Header Dropdown Rollover Color */
	.header_mid #navigation ul li > a:hover,
	.header_mid #navigation ul li.current-menu-item > a,
	.header_mid #navigation ul li.current_page_item > a,
	.header_mid #navigation > li li.menu-item-highlight > a,
	.header_mid #navigation > li li.menu-item-highlight > a:hover,
	.header_mid #navigation > li.menu-item-mega li > a:hover,
	.header_mid #navigation > li.menu-item-mega li li > a:hover,
	.header_mid #navigation > li.menu-item-mega > ul > li > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.current-menu-item > a,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.current_page_item > a,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight > a,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight:hover > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a[href]:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li:hover > a:hover, 
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a > span:before {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_hover']) . "
	}

	@media only screen and (max-width: 1024px) {
		.header_mid #navigation > li > a:hover,
		.header_mid #navigation > li.current-menu-item > a,
		.header_mid #navigation > li.current_page_item > a,
		.header_mid #navigation > li.menu-item-highlight > a,
		.header_mid #navigation > li > a:hover > span > span.nav_subtitle,
		.header_mid #navigation > li.current-menu-item > a > span > span.nav_subtitle,
		.header_mid #navigation > li.current_page_item > a > span > span.nav_subtitle,
		.header_mid #navigation > li.menu-item-highlight > a > span > span.nav_subtitle {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_hover']) . "
		}
	}

	@media only screen and (min-width: 1024px) {
		.header_mid #navigation > li.menu-item-mega > ul > li > a,
		.header_mid #navigation ul li:hover > a,
		.header_mid #navigation > li li.menu-item-highlight:hover > a,
		.header_mid #navigation > li.menu-item-mega li:hover > a,
		.header_mid #navigation > li.menu-item-mega > ul > li:hover > a,
		.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li:hover > a,
		.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li:hover > a,
		.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight:hover > a {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_hover']) . "
		}
	}

	.header_mid #navigation > li:not(.menu-item-mega) ul li > a[data-tag]:hover:before, 
	.header_mid #navigation > li:not(.menu-item-mega) ul li.current-menu-item > a[data-tag]:before,
	.header_mid #navigation > li:not(.menu-item-mega) ul li.menu-item-highlight > a[data-tag]:before,
	.header_mid #navigation > li.menu-item-mega li li:hover > a[data-tag]:hover:before,
	.header_mid #navigation > li.menu-item-mega li li.current-menu-item > a[data-tag]:before, 
	.header_mid #navigation > li.menu-item-mega li li.menu-item-highlight > a[data-tag]:before, 
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight > a[data-tag]:before, 
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li > a[data-tag]:hover:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_hover']) . "
	}

	@media only screen and (max-width: 1024px) {
		.header_mid #navigation > li > a[data-tag]:hover:before,
		.header_mid #navigation > li.current-menu-item > a[data-tag]:before,
		.header_mid #navigation > li.current_page_item > a[data-tag]:before,
		.header_mid #navigation > li.menu-item-highlight > a[data-tag]:before {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_hover']) . "
		}
	}

	@media only screen and (min-width: 1024px) {
		.header_mid #navigation > li:not(.menu-item-mega) ul li:hover > a[data-tag]:before {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_hover']) . "
		}
	}
	/* Finish Header Dropdown Rollover Color */


	/* Start Header Dropdown Subtitle Color */
	.header_mid #navigation > li > a > span.nav_subtitle, 
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a:hover > span > span.nav_subtitle,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a > span > span.nav_subtitle {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_subtitle']) . "
	}

	@media only screen and (max-width: 1024px) {
		.header_mid #navigation > li > a > span > span.nav_subtitle {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_subtitle']) . "
		}
	}

	@media only screen and (min-width: 1024px) {
		.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li:hover > a > span > span.nav_subtitle {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_subtitle']) . "
		}
	}
	/* Finish Header Dropdown Subtitle Color */


	/* Start Header Dropdown Background Color */
	.header_mid input[type=text],
	.header_mid input[type=number],
	.header_mid input[type=email],
	.header_mid input[type=password],
	.header_mid input[type=search],
	.header_mid input[type=submit],
	.header_mid button,
	.header_mid textarea,
	.header_mid select,
	.header_mid option,
	.header_mid #navigation ul,
	.header_mid #navigation > li.menu-item-mega li > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_bg']) . "
	}

	@media only screen and (max-width: 1024px) {
		.header_mid #navigation {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_bg']) . "
		}
	}

	@media only screen and (min-width: 1024px) {
		.header_mid #navigation > li.menu-item-mega li:hover > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_bg']) . "
		}
	}
	/* Finish Header Dropdown Background Color */


	/* Start Header Dropdown Rollover Background Color */
	.header_mid #navigation ul li > a:hover,
	.header_mid #navigation ul li.current-menu-item > a,
	.header_mid #navigation ul li.current_page_item > a,
	.header_mid #navigation ul li.menu-item-highlight > a,
	.header_mid #navigation > li.menu-item-mega li li:hover > a:hover,
	.header_mid #navigation > li.menu-item-mega li li.current-menu-item > a,
	.header_mid #navigation > li.menu-item-mega li li.current_page_item > a,
	.header_mid #navigation > li.menu-item-mega li.menu-item-highlight > a {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_hover_bg']) . "
	}

	@media only screen and (max-width: 1024px) {
		.header_mid #navigation > li > a:hover,
		.header_mid #navigation > li.current-menu-item > a,
		.header_mid #navigation > li.current_page_item > a,
		.header_mid #navigation > li.menu-item-mega > div > ul > li > a:hover, 
		.header_mid #navigation > li.menu-item-mega > div > ul > li.current-menu-item > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_hover_bg']) . "
		}
	}

	@media only screen and (min-width: 1024px) {
		.header_mid #navigation ul li:hover > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_hover_bg']) . "
		}
	}
	/* Finish Header Dropdown Rollover Background Color */


	/* Start Header Dropdown Borders Color */
	@media only screen and (max-width: 1024px) {
		.header_mid #navigation li a, 
		.header_mid #navigation > li > a:hover,
		.header_mid #navigation > li.current-menu-item > a,
		.header_mid #navigation > li.current_page_item > a {
			" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_border']) . "
		}
	}

	.header_mid #navigation ul li a,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li li li:first-child {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_border']) . "
	}
	/* Finish Header Dropdown Borders Color */


	/* Start Header Custom Rules */
	.header_mid ::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bg']) . "
	}

	.header_mid ::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bg']) . "
	}
	";


	if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_shadow']) {
		$custom_css .= "
		.header_mid,
		.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container {
			-webkit-box-shadow:0 2px 6px 0 rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_bg']) . ', ' . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_shadow_opacity'] / 100) . ");
			-moz-box-shadow:0 2px 6px 0 rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_bg']) . ', ' . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_shadow_opacity'] / 100) . ");
			box-shadow:0 2px 6px 0 rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_bg']) . ', ' . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_shadow_opacity'] / 100) . ");
		}

		.cmsmasters_boxed .header_mid {
			-webkit-box-shadow:0 12px 12px -6px rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_bg']) . ', ' . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_shadow_opacity'] / 100) . ");
			-moz-box-shadow:0 12px 12px -6px rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_bg']) . ', ' . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_shadow_opacity'] / 100) . ");
			box-shadow:0 12px 12px -6px rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_bg']) . ', ' . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_shadow_opacity'] / 100) . ");
		}

		";
	}


	$custom_css .= "
	/* Finish Header Custom Rules */

/***************** Finish Header Color Scheme Rules ******************/


/***************** Start Header Bottom Color Scheme Rules ******************/

	/* Start Header Bottom Content Color */
	.header_bot {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_color']) . "
	}
	/* Finish Header Bottom Content Color */


	/* Start Header Bottom Primary Color */
	.header_bot a,
	.header_bot h1 a:hover,
	.header_bot h2 a:hover,
	.header_bot h3 a:hover,
	.header_bot h4 a:hover,
	.header_bot h5 a:hover,
	.header_bot h6 a:hover,
	.header_bot .color_2,
	.header_bot h1,
	.header_bot h2,
	.header_bot h3,
	.header_bot h4,
	.header_bot h5,
	.header_bot h6,
	.header_bot h1 a,
	.header_bot h2 a,
	.header_bot h3 a,
	.header_bot h4 a,
	.header_bot h5 a,
	.header_bot h6 a,
	.header_bot #navigation > li > a,
	.header_bot .social_wrap a:hover, 
	.header_bot #navigation > li > a[data-tag]:before, 
	.header_bot_inner .slogan_wrap .slogan_wrap_inner .slogan_wrap_text .cmsmasters_header_bot_btn:hover, 
	.header_bot .cmsmasters-resp-nav-toggle.cmsmasters-icon-angle-down {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_link']) . "
	}

	.header_bot .button:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_link']) . "
	}

	.header_bot input[type=text]:focus,
	.header_bot input[type=email]:focus,
	.header_bot input[type=password]:focus,
	.header_bot input[type=search]:focus,
	.header_bot textarea:focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_link']) . "
	}

	@media only screen and (max-width: 1024px) {
		#page .header_bot #navigation > li a .cmsmasters-resp-nav-toggle.cmsmasters-icon-angle-down:before {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_link']) . "
		}
	}
	/* Finish Header Bottom Primary Color */


	/* Start Header Bottom Secondary Color */
	.header_bot #navigation li.menu-item-mega > div.menu-item-mega-container > ul > li > a[data-tag]:before, 
	.header_bot #navigation > li > a[data-tag]:before, 
	.header_bot_inner .slogan_wrap .slogan_wrap_inner .slogan_wrap_text .cmsmasters_header_bot_btn:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_secondary']) . "
	}
	/* Finish Header Bottom Secondary Color */


	/* Start Header Bottom Rollover Color */
	.header_bot a:hover,
	.header_bot .button,
	.header_bot #navigation > li > a:hover,
	.header_bot #navigation > li.current-menu-item > a,
	.header_bot #navigation > li.current_page_item > a,
	.header_bot #navigation > li.current-menu-ancestor > a,
	.header_bot #navigation > li.menu-item-highlight > a, 
	.header_bot #navigation > li > a > span:before, 
	.header_bot #navigation li.menu-item-mega > div.menu-item-mega-container > ul > li > a[data-tag] > span:before, 
	.header_bot .cmsmasters-resp-nav-toggle.cmsmasters-icon-angle-up, 
	.header_bot .resp_nav_wrap .resp_nav_wrap_inner .responsive_nav.active {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_hover']) . "
	}

	@media only screen and (min-width: 1024px) {
		.header_bot #navigation > li:hover > a {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_hover']) . "
		}
	}

	.header_bot #navigation > li > a[data-tag]:hover:before, 
	.header_bot #navigation > li.current-menu-item > a[data-tag]:before,
	.header_bot #navigation > li.menu-item-highlight > a[data-tag]:before, 
	.header_bot #navigation > li li.menu-item-highlight > a, 
	.header_bot #navigation li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-highlight > a[data-tag]:before, 
	.header_bot #navigation li.menu-item-mega > div.menu-item-mega-container > ul > li > a[data-tag]:hover:before, 
	.header_bot_inner .slogan_wrap .slogan_wrap_inner .slogan_wrap_text .cmsmasters_header_bot_btn {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_hover']) . "
	}
	/* Finish Header Bottom Rollover Color */


	/* Start Header Bottom Subtitle Color */
	.header_bot nav #navigation > li > a > span.nav_subtitle {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_subtitle']) . "
	}
	/* Finish Header Bottom Subtitle Color */


	/* Start Header Bottom Background Color */	
	.header_bot input[type=text]:focus,
	.header_bot input[type=number]:focus,
	.header_bot input[type=email]:focus,
	.header_bot input[type=password]:focus,
	.header_bot input[type=search]:focus,
	.header_bot textarea:focus,
	.header_bot_outer {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_bg']) . "
	}
	/* Finish Header Bottom Background Color */


	/* Start Header Bottom Background Color on Scroll */
	.header_bot_scroll .header_bot_outer {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_bg_scroll']) . "
	}

	@media only screen and (max-width: 1024px) {
		.header_bot_outer {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_bg_scroll']) . "
		}
	}
	/* Finish Header Bottom Background Color on Scroll */


	/* Start Header Bottom Rollover Background Color */
	.header_bot .header_bottom_hover_bg, 
	.header_bot .header_bot_inner nav > div > ul > li.current-menu-item, 
	.header_bot .header_bot_inner nav > div > ul > li.current_page_item, 
	.header_bot .header_bot_inner nav > div > ul > li.current-menu-ancestor	{
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_hover_bg']) . "
	}
	/* Finish Header Bottom Rollover Background Color */


	/* Start Header Borders Color */
	.header_bot input[type=text],
	.header_bot input[type=number],
	.header_bot input[type=email],
	.header_bot input[type=password],
	.header_bot input[type=seach],
	.header_bot input[type=submit],
	.header_bot button,
	.header_bot textarea,
	.header_bot select,
	.header_bot option {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_border']) . "
	}

	.header_bot hr,
	.header_bot .cmsmasters_divider {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_border']) . "
	}
	/* Finish Header Bottom Borders Color */


	/* Start Header Bottom Dropdown Link Color */
	.header_bot #navigation ul li a, 
	.header_bot #navigation li.menu-item-mega > div.menu-item-mega-container > ul > li > a[data-tag]:before	{
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_link']) . "
	}

	@media only screen and (max-width: 1024px) {
		.header_bot #navigation > li > a {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_link']) . "
		}
	}

	.header_bot #navigation ul li > a[data-tag]:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_link']) . "
	}
	/* Finish Header Bottom Dropdown Link Color */


	/* Start Header Bottom Dropdown Rollover Color */
	.header_bot #navigation ul li > a:hover,
	.header_bot #navigation ul li.current-menu-item > a,
	.header_bot #navigation ul li.current-menu-ancestor > a,
	.header_bot #navigation ul li.current_page_item > a,
	.header_bot #navigation > li li.menu-item-highlight > a,
	.header_bot #navigation > li li.menu-item-highlight > a:hover,
	.header_bot #navigation > li.menu-item-mega li > a:hover,
	.header_bot #navigation > li.menu-item-mega li li > a:hover,
	.header_bot #navigation > li.menu-item-mega > ul > li > a,
	.header_bot #navigation > li.menu-item-mega > ul > li > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.current-menu-item > a,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.current_page_item > a,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight > a,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight:hover > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a[href]:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li:hover > a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_hover']) . "
	}

	@media only screen and (max-width: 1024px) {
		.header_bot #navigation > li > a:hover,
		.header_bot #navigation > li.current-menu-item > a,
		.header_bot #navigation > li.current_page_item > a,
		.header_bot #navigation > li.menu-item-highlight > a,
		.header_bot #navigation > li > a:hover > span > span.nav_subtitle,
		.header_bot #navigation > li.current-menu-item > a > span > span.nav_subtitle,
		.header_bot #navigation > li.current_page_item > a > span > span.nav_subtitle,
		.header_bot #navigation > li.menu-item-highlight > a > span > span.nav_subtitle {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_hover']) . "
		}
	}

	@media only screen and (min-width: 1024px) {
		.header_bot #navigation > li.menu-item-mega > ul > li > a,
		.header_bot #navigation ul li:hover > a,
		.header_bot #navigation > li li.menu-item-highlight:hover > a,
		.header_bot #navigation > li.menu-item-mega li:hover > a,
		.header_bot #navigation > li.menu-item-mega > ul > li:hover > a,
		.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li:hover > a,
		.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li:hover > a,
		.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight:hover > a {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_hover']) . "
		}
	}

	.header_bot #navigation > li:not(.menu-item-mega) ul li > a[data-tag]:hover:before, 
	.header_bot #navigation > li:not(.menu-item-mega) ul li.current-menu-item > a[data-tag]:before,
	.header_bot #navigation > li:not(.menu-item-mega) ul li.menu-item-highlight > a[data-tag]:before,
	.header_bot #navigation > li.menu-item-mega li li:hover > a[data-tag]:hover:before,
	.header_bot #navigation > li.menu-item-mega li li.current-menu-item > a[data-tag]:before, 
	.header_bot #navigation > li.menu-item-mega li li.menu-item-highlight > a[data-tag]:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_hover']) . "
	}

	@media only screen and (max-width: 1024px) {
		.header_bot #navigation > li > a[data-tag]:hover:before,
		.header_bot #navigation > li.current-menu-item > a[data-tag]:before,
		.header_bot #navigation > li.current_page_item > a[data-tag]:before,
		.header_bot #navigation > li.menu-item-highlight > a[data-tag]:before {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_hover']) . "
		}
	}

	@media only screen and (min-width: 1024px) {
		.header_bot #navigation > li:not(.menu-item-mega) ul li:hover > a[data-tag]:before {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_hover']) . "
		}
	}
	/* Finish Header Bottom Dropdown Rollover Color */


	/* Start Header Bottom Dropdown Subtitle Color */
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a:hover > span > span.nav_subtitle,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a > span > span.nav_subtitle {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_subtitle']) . "
	}

	@media only screen and (max-width: 1024px) {
		.header_bot #navigation > li > a > span > span.nav_subtitle {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_subtitle']) . "
		}
	}

	@media only screen and (min-width: 1024px) {
		.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li:hover > a > span > span.nav_subtitle {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_subtitle']) . "
		}
	}
	/* Finish Header Bottom Dropdown Subtitle Color */


	/* Start Header Bottom Dropdown Background Color */
	.header_bot #navigation ul li > a[data-tag]:before {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_bg']) . "
	}

	.header_bot input[type=text],
	.header_bot input[type=number],
	.header_bot input[type=email],
	.header_bot input[type=password],
	.header_bot input[type=search],
	.header_bot input[type=submit],
	.header_bot button,
	.header_bot textarea,
	.header_bot select,
	.header_bot option,
	.header_bot #navigation ul,
	.header_bot #navigation > li.menu-item-mega li > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_bg']) . "
	}

	@media only screen and (max-width: 1024px) {
		.header_bot #navigation {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_bg']) . "
		}
	}

	@media only screen and (min-width: 1024px) {
		.header_bot #navigation > li.menu-item-mega li:hover > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_bg']) . "
		}
	}
	/* Finish Header Bottom Dropdown Background Color */


	/* Start Header Bottom Dropdown Rollover Background Color */
	.header_bot #navigation ul li > a:hover,
	.header_bot #navigation ul li.current-menu-item > a,
	.header_bot #navigation ul li.current_page_item > a,
	.header_bot #navigation ul li.menu-item-highlight > a,
	.header_bot #navigation > li.menu-item-mega li li:hover > a:hover,
	.header_bot #navigation > li.menu-item-mega li li.current-menu-item > a,
	.header_bot #navigation > li.menu-item-mega li li.current_page_item > a,
	.header_bot #navigation > li.menu-item-mega li.menu-item-highlight > a {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_hover_bg']) . "
	}

	@media only screen and (max-width: 1024px) {
		.header_bot #navigation > li > a:hover,
		.header_bot #navigation > li.current-menu-item > a,
		.header_bot #navigation > li.current_page_item > a,
		.header_bot #navigation > li.menu-item-mega > div > ul > li > a:hover, 
		.header_bot #navigation > li.menu-item-mega > div > ul > li.current-menu-item > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_hover_bg']) . "
		}
	}

	@media only screen and (min-width: 1024px) {
		.header_bot #navigation ul li:hover > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_hover_bg']) . "
		}
	}
	/* Finish Header Bottom Dropdown Rollover Background Color */


	/* Start Header Bottom Dropdown Borders Color */
	@media only screen and (max-width: 1024px) {
		.header_bot #navigation li a, 
		.header_bot #navigation > li > a:hover,
		.header_bot #navigation > li.current-menu-item > a,
		.header_bot #navigation > li.current_page_item > a {
			" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_border']) . "
		}
	}

	.header_bot #navigation ul li a,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li li li:first-child {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_border']) . "
	}
	/* Finish Header Bottom Dropdown Borders Color */


	/* Start Header Bottom Custom Rules */
	.header_bot ::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_bg']) . "
	}

	.header_bot ::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_bg']) . "
	}
	";


	if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_shadow']) {
	$custom_css .= "
	.header_bot, 
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container {
		-webkit-box-shadow:0 4px 6px 0 rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_bg']) . ', ' . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_shadow_opacity'] / 100) . ");
		-moz-box-shadow:0 4px 6px 0 rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_bg']) . ', ' . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_shadow_opacity'] / 100) . ");
		box-shadow:0 4px 6px 0 rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_bg']) . ', ' . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_shadow_opacity'] / 100) . ");
	}
	";
	}


	$custom_css .= "
	/* Finish Header Bottom Custom Rules */

/***************** Finish Header Bottom Color Scheme Rules ******************/


/***************** Start Header Top Color Scheme Rules ******************/

	/* Start Header Top Content Color */
	.header_top,
	.header_top_inner .social_wrap a {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_color']) . "
	}
	/* Finish Header Top Content Color */


	/* Start Header Top Primary Color */
	.header_top a,
	.header_top h1 a:hover,
	.header_top h2 a:hover,
	.header_top h3 a:hover,
	.header_top h4 a:hover,
	.header_top h5 a:hover,
	.header_top h6 a:hover,
	.header_top .color_2,
	.header_top h1,
	.header_top h2,
	.header_top h3,
	.header_top h4,
	.header_top h5,
	.header_top h6,
	.header_top h1 a,
	.header_top h2 a,
	.header_top h3 a,
	.header_top h4 a,
	.header_top h5 a,
	.header_top h6 a,
	.responsive_top_nav, 
	.header_top #top_line_nav > li > a, 
	.header_top #top_line_nav > li:after {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_link']) . "
	}

	.header_top .button:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_link']) . "
	}

	.header_top input[type=text]:focus,
	.header_top input[type=number]:focus,
	.header_top input[type=email]:focus,
	.header_top input[type=password]:focus,
	.header_top input[type=search]:focus,
	.header_top textarea:focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_link']) . "
	}

	.header_top_but .cmsmasters-icon-up-open-1:before, 
	.header_top_but .cmsmasters-icon-up-open-1:after, 
	.header_top_but .cmsmasters-icon-up-open-1 span:before, 
	.header_top_but .cmsmasters-icon-up-open-1 span:after, 
	.header_top_but .cmsmasters-icon-down-open-1:before, 
	.header_top_but .cmsmasters-icon-down-open-1:after, 
	.header_top_but .cmsmasters-icon-down-open-1 span:before, 
	.header_top_but .cmsmasters-icon-down-open-1 span:after {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_link']) . "
	}

	.header_top .header_top_outer .header_top_inner .header_top_left, 
	.header_top .header_top_outer .header_top_inner .header_top_right {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_link']) . "
	}

	/* Finish Header Top Primary Color */


	/* Start Header Top Rollover Color */
	.responsive_top_nav:hover,
	.responsive_top_nav.active, 
	.header_top a:hover,
	.header_top .button,
	.header_top_inner .social_wrap a:hover, 
	.header_top #top_line_nav > li > a:hover,
	.header_top #top_line_nav > li.current-menu-item > a,
	.header_top #top_line_nav > li.current_page_item > a {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_hover']) . "
	}

	@media only screen and (min-width: 1024px) {
		.header_top #top_line_nav > li:hover > a {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_hover']) . "
		}
	}
	/* Finish Header Top Rollover Color */


	/* Start Header Top Background Color */
	.header_top #top_line_nav > li > a > span.cmsmasters_count {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_bg']) . "
	}
	
	.header_top input[type=text]:focus,
	.header_top input[type=number]:focus,
	.header_top input[type=email]:focus,
	.header_top input[type=password]:focus,
	.header_top input[type=search]:focus,
	.header_top textarea:focus,
	.header_top {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_bg']) . "
	}
	/* Finish Header Top Background Color */


	/* Start Header Top Borders Color */
	.header_top input[type=text],
	.header_top input[type=number],
	.header_top input[type=email],
	.header_top input[type=password],
	.header_top input[type=search],
	.header_top input[type=submit],
	.header_top button,
	.header_top textarea,
	.header_top select,
	.header_top option {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_border']) . "
	}

	.header_top hr,
	.header_top .cmsmasters_divider {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_border']) . "
	}

	@media only screen and (max-width: 1024px) {
		html #page #header .header_top .header_top_outer .header_top_inner .header_top_right {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_border']) . "
		}
	}
	/* Finish Header Top Borders Color */


	/* Start Header Top Dropdown Link Color */
	.header_top #top_line_nav ul li a {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_link']) . "
	}

	@media only screen and (max-width: 1024px) {
		.header_top #top_line_nav > li > a {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_link']) . "
		}
	}
	/* Finish Header Top Dropdown Link Color */


	/* Start Header Top Dropdown Rollover Color */
	.header_top #top_line_nav ul li > a:hover,
	.header_top #top_line_nav ul li.current-menu-item > a,
	.header_top #top_line_nav ul li.current_page_item > a {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_hover']) . "
	}

	@media only screen and (max-width: 1024px) {
		.header_top #top_line_nav > li > a:hover,
		.header_top #top_line_nav > li.current-menu-item > a,
		.header_top #top_line_nav > li.current_page_item > a {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_hover']) . "
		}
	}

	@media only screen and (min-width: 1024px) {
		.header_top #top_line_nav ul li:hover > a {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_hover']) . "
		}
	}
	/* Finish Header Top Dropdown Rollover Color */


	/* Start Header Top Dropdown Background Color */	
	.header_top input[type=text],
	.header_top input[type=number],
	.header_top input[type=email],
	.header_top input[type=password],
	.header_top input[type=search],
	.header_top input[type=submit],
	.header_top button,
	.header_top textarea,
	.header_top select,
	.header_top option {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_bg']) . "
	}

	@media only screen and (max-width: 1024px) {
		.header_top #top_line_nav {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_bg']) . "
		}
	}

	@media only screen and (min-width: 1024px) {
		.header_top #top_line_nav ul {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_bg']) . "
		}
	}
	/* Finish Header Top Dropdown Background Color */


	/* Start Header Top Dropdown Border Color */
	@media only screen and (max-width: 1024px) {
		.header_top #top_line_nav li a, 
		.header_top #top_line_nav > li > a:hover,
		.header_top #top_line_nav > li.current-menu-item > a,
		.header_top #top_line_nav > li.current_page_item > a {
			" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_border']) . "
		}
	}

	.header_top #top_line_nav ul li a {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_border']) . "
	}
	/* Finish Header Top Dropdown Border Color */


	/* Start Header Top Custom Rules */
	.header_top ::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_bg']) . "
	}

	.header_top ::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_bg']) . "
	}
	";


	if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_shadow']) {
	$custom_css .= "
	.header_top_inner nav > div > ul > li ul {
		-webkit-box-shadow:0 0 2px 0 rgba(0, 0, 0, rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_bg']) . ', ' . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_shadow_opacity'] / 100) . ");
		-moz-box-shadow:0 0 2px 0 rgba(0, 0, 0, rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_bg']) . ', ' . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_shadow_opacity'] / 100) . ");
		box-shadow:0 0 2px 0 rgba(0, 0, 0, rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_bg']) . ', ' . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_shadow_opacity'] / 100) . ");
	}
	";
	}


	$custom_css .= "
	/* Finish Header Top Custom Rules */

/***************** Finish Header Top Color Scheme Rules ******************/

";


	return $custom_css;
}

