<?php
/**
 * @package 	WordPress
 * @subpackage 	Construction PRO
 * @version 	1.0.0
 * 
 * Website WooCommerce Functions
 * Created by CMSMasters
 * 
 */


/* Woocommerce Dynamic Cart */
function construction_pro_woocommerce_cart_dropdown() {
	global $woocommerce;
	
	
	$cart_link = $woocommerce->cart->get_cart_url();
	
	
	$cart_count = $woocommerce->cart->get_cart_contents_count();
	
	$cart_subtotal = $woocommerce->cart->get_cart_subtotal();
	
	
	$cart_currency_symbol = get_woocommerce_currency_symbol();
	
	$cart_currency_symbol_pos = get_option('woocommerce_currency_pos');
	
	$cart_currency = $cart_currency_symbol;
	
	
	if ($cart_currency_symbol_pos == 'left_space') {
		$cart_currency = $cart_currency_symbol . ' ';
	} elseif ($cart_currency_symbol_pos == 'right_space') {
		$cart_currency = ' ' . $cart_currency_symbol;
	}
	
	
	$cart_price = str_replace($cart_currency, '', $cart_subtotal);
	
	
	$cart_subtotal_html = '';
	
	if ($cart_currency_symbol_pos == 'left') {
		$cart_subtotal_html .= '<span class="currency">' . esc_html($cart_currency_symbol) . '</span>' . $cart_price;
	} elseif ($cart_currency_symbol_pos == 'right') {
		$cart_subtotal_html .= $cart_price . '<span class="currency">' . esc_html($cart_currency_symbol) . '</span>';
	} elseif ($cart_currency_symbol_pos == 'left_space') {
		$cart_subtotal_html .= '<span class="currency">' . esc_html($cart_currency_symbol) . '</span> ' . $cart_price;
	} elseif ($cart_currency_symbol_pos == 'right_space') {
		$cart_subtotal_html .= $cart_price . ' <span class="currency">' . esc_html($cart_currency_symbol) . '</span>';
	}
	
	
	$output = '<div class="cmsmasters_dynamic_cart">' .  
		'<a href="javascript:void(0);" class="cmsmasters_dynamic_cart_button">' . 
			'<span class="count cmsmasters_theme_icon_basket"></span>' . 
		'</a>' . 
		'<div class="widget_shopping_cart_content"></div>' . 
	'</div>';
	
	
	echo $output;
}


/* Woocommerce Add to Cart Button */
function construction_pro_woocommerce_add_to_cart_button() {
	global $woocommerce, 
		$product;
	
	
	if ( 
		$product->is_purchasable() && 
		$product->product_type == 'simple' && 
		$product->is_in_stock() 
	) {
		echo '<a href="' . esc_url($product->add_to_cart_url()) . '" data-product_id="' . esc_attr($product->id) . '" data-product_sku="' . esc_attr($product->get_sku()) . '" class="button add_to_cart_button cmsmasters_add_to_cart_button product_type_simple cmsmasters_theme_icon_basket ajax_add_to_cart" title="' . esc_attr__('Agregar', 'construction-pro') . '">' .
			'<span>' . esc_html__('Agregar', 'construction-pro') . '</span>' .
		'</a>' . 
		'<a href="' . esc_url($woocommerce->cart->get_cart_url()) . '" class="button added_to_cart wc-forward cmsmasters_theme_icon_check" title="' . esc_attr__('Ver Carrito', 'construction-pro') . '">' .
			'<span>' . esc_html__('Ver Carrito', 'construction-pro') . '</span>' .
		'</a>';
	}
	
	
	echo '<a href="' . esc_url(get_permalink($product->id)) . '" data-product_id="' . esc_attr($product->id) . '" data-product_sku="' . esc_attr($product->get_sku()) . '" class="button cmsmasters_details_button cmsmasters_theme_icon_details">' . 
		'<span>' . esc_html__('Detalles', 'constructionpro') . '</span>' .
	'</a>';
}


/* Woocommerce Rating */
function construction_pro_woocommerce_rating($icon_trans = '', $icon_color = '', $in_review = false, $comment_id = '', $show = true) {
	global $product;
	
	
	if (get_option( 'woocommerce_enable_review_rating') === 'no') {
		return;
	}
	
	
	$rating = (($in_review) ? intval(get_comment_meta($comment_id, 'rating', true)) : ($product->get_average_rating() ? $product->get_average_rating() : '0'));
	
	$itemprop = $in_review ? 'reviewRating' : 'aggregateRating';
	
	$itemtype = $in_review ? 'Rating' : 'AggregateRating';
	
	
	$out = "
<div class=\"cmsmasters_star_rating\" itemprop=\"{$itemprop}\" itemscope itemtype=\"http://schema.org/{$itemtype}\" title=\"" . sprintf(esc_html__('Rated %s out of 5', 'construction-pro'), $rating) . "\">
<div class=\"cmsmasters_star_trans_wrap\">
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
</div>
<div class=\"cmsmasters_star_color_wrap\" style=\"width:" . (($rating / 5) * 100) . "%\">
	<div class=\"cmsmasters_star_color_inner\">
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
	</div>
</div>
<span class=\"rating dn\"><strong itemprop=\"ratingValue\">" . esc_html($rating) . "</strong> " . esc_html__('out of 5', 'construction-pro') . "</span>
</div>
";
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}


add_theme_support('woocommerce');


if (version_compare(WOOCOMMERCE_VERSION, '2.1') >= 0) {
	add_filter('woocommerce_enqueue_styles', '__return_false');
} else {
	define('WOOCOMMERCE_USE_CSS', false);
}

