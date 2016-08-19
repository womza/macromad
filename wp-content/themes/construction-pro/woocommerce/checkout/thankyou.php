<?php
/**
 * Thankyou page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.0
 * 
 * @cmsmasters_package 	Construction PRO
 * @cmsmasters_version 	1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( $order ) : ?>

	<?php if ( $order->has_status( 'failed' ) ) : ?>

		<p><?php esc_html_e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction.', 'woocommerce' ); ?></p>

		<p><?php
			if ( is_user_logged_in() )
				esc_html_e( 'Please attempt your purchase again or go to your account page.', 'woocommerce' );
			else
				esc_html_e( 'Please attempt your purchase again.', 'woocommerce' );
		?></p>

		<p>
			<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php esc_html_e( 'Pay', 'woocommerce' ) ?></a>
			<?php if ( is_user_logged_in() ) : ?>
			<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php esc_html_e( 'My Account', 'woocommerce' ); ?></a>
			<?php endif; ?>
		</p>

	<?php else : ?>

		<p><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', esc_html__( 'Thank you. Your order has been received.', 'woocommerce' ), $order ); ?></p>

		<ul class="order_details">
			<li class="order">
				<span><?php esc_html_e( 'Order Number:', 'woocommerce' ); ?></span>
				<span><?php echo $order->get_order_number(); ?></span>
			</li>
			<li class="date">
				<span><?php esc_html_e( 'Date:', 'woocommerce' ); ?></span>
				<span><?php echo date_i18n( get_option( 'date_format' ), strtotime( $order->order_date ) ); ?></span>
			</li>
			<li class="total">
				<span><?php esc_html_e( 'Total:', 'woocommerce' ); ?></span>
				<span><?php echo $order->get_formatted_order_total(); ?></span>
			</li>
			<?php if ( $order->payment_method_title ) : ?>
			<li class="method">
				<span><?php esc_html_e( 'Payment Method:', 'woocommerce' ); ?></span>
				<span><?php echo $order->payment_method_title; ?></span>
			</li>
			<?php endif; ?>
		</ul>

	<?php endif; ?>

	<?php do_action( 'woocommerce_thankyou_' . $order->payment_method, $order->id ); ?>
	<?php do_action( 'woocommerce_thankyou', $order->id ); ?>

<?php else : ?>

	<p><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', esc_html__( 'Thank you. Your order has been received.', 'woocommerce' ), null ); ?></p>

<?php endif; ?>
