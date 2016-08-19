<?php
/**
 * Single Product Meta
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 * 
 * @cmsmasters_package 	Construction PRO
 * @cmsmasters_version 	1.0.0
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product;

$cat_count = sizeof( get_the_terms( $post->ID, 'product_cat' ) );
$tag_count = sizeof( get_the_terms( $post->ID, 'product_tag' ) );

?>
<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

		<span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'woocommerce' ); ?> <span class="sku" itemprop="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></span>

	<?php endif; ?>

	<?php
	if (get_the_terms($product->id, 'product_cat')) {
		echo '<span class="posted_in">' . 
			'<strong>' . esc_html(_n('Category:', 'Categories:', $cat_count, 'woocommerce')) . '</strong> ' . 
			construction_pro_get_the_category_list($product->id, 'product_cat', ', ') . 
		'</span>';
	}
	?>

	<?php echo $product->get_tags( ', ', '<span class="tagged_as">' . esc_html(_n( 'Tag:', 'Tags:', $tag_count, 'woocommerce' )) . ' ', '</span>' ); ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>
