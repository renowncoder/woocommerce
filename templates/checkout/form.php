<?php do_action('woocommerce_before_checkout_form');

global $woocommerce;

// filter hook for include new pages inside the payment method
$get_checkout_url = apply_filters( 'woocommerce_get_checkout_url', $woocommerce->cart->get_checkout_url() ); ?>

<form name="checkout" method="post" class="checkout" action="<?php echo esc_url( $get_checkout_url ); ?>">
	
	<div class="col2-set" id="customer_details">
		<div class="col-1">

			<?php do_action('woocommerce_checkout_billing'); ?>
						
		</div>
		<div class="col-2">
		
			<?php do_action('woocommerce_checkout_shipping'); ?>
					
		</div>
	</div>
	
	<h3 id="order_review_heading"><?php _e('Your order', 'woothemes'); ?></h3>
	
	<?php do_action('woocommerce_checkout_order_review'); ?>
	
</form>

<?php do_action('woocommerce_after_checkout_form'); ?>