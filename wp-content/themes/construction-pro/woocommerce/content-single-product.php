<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * Override this template by copying it to yourtheme/woocommerce/content-single-product.php
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


/**
 * woocommerce_before_single_product hook
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );


if ( post_password_required() ) {
	echo get_the_password_form();
	return;
}

global $post, $product;

$cat_count = sizeof( get_the_terms( $post->ID, 'product_cat' ) );
$tag_count = sizeof( get_the_terms( $post->ID, 'product_tag' ) );

?>

<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class('cmsmasters_single_product'); ?>>
	<div class="cmsmasters_product_right_column">
	<?php
		/**
		 * woocommerce_before_single_product_summary hook
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
	?>
	</div>
	<div class="summary entry-summary cmsmasters_product_left_column">
	<?php 
		woocommerce_template_single_title();
		
		echo '<div class="product_info_top">';
			woocommerce_template_single_price();
			
			do_action( 'woocommerce_product_meta_start' );
			
				if (get_the_terms($product->id, 'product_cat')) {
					echo '<span class="posted_in">' . 
						construction_pro_get_the_category_list($product->id, 'product_cat', ', ') . 
					'</span>';
				}
			
			do_action( 'woocommerce_product_meta_end' );
		echo '</div>';
		
		construction_pro_woocommerce_rating('cmsmasters_theme_icon_star_empty', 'cmsmasters_theme_icon_star_full');
		
		woocommerce_template_single_excerpt();
		
		echo '<div class="product_meta">';
			do_action( 'woocommerce_product_meta_start' );
			
			echo $product->get_tags( ', ', '<span class="tagged_as">' . esc_html(_n( 'Tag:', 'Tags:', $tag_count, 'woocommerce' )) . ' ', '</span>' );
	?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

		<span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'woocommerce' ); ?> <span class="sku" itemprop="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></span>

	<?php endif; ?>

	<?php		
			do_action( 'woocommerce_product_meta_end' );
		echo '</div>';
		
		woocommerce_template_single_add_to_cart();
		
		woocommerce_template_single_sharing();
	?>
	</div>
	<div class="cl"></div>
	<?php
		/**
		 * woocommerce_after_single_product_summary hook
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
	?>

	<meta itemprop="url" content="<?php the_permalink(); ?>" />

</div><!-- #product-<?php the_ID(); ?> -->

<?php do_action( 'woocommerce_after_single_product' ); ?>
