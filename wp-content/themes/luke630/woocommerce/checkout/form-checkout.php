<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

<div class="row flex-row-reversemobile">
	<div class="col-lg-6 col-md-6 col-sm-12">
			<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col2-set" id="customer_details">
		    <div class="col-full">
			   <div class="collapse-fileds" id="email-collapse">
				   <h3>
					   Contact  
				   </h3>
						 <div class="email-details">
							 <label>Email</label>
							<div class="inner-maildiv" >
 						 		<span id="inner-maildiv">
 								</span>
<!-- 								 <button type="button" class="enter-email" >
									 Enter
								 </button> -->
							 </div>
 			    		</div>
				       
			    	</div>	
				<div class="collapse-fileds" id="billing-collapse">
					<div class="Show-detailsbilling">
 			   	 </div>
				    <?php do_action( 'woocommerce_checkout_billing' ); ?>
				</div>
				    
			</div>
			<div class="col-full">
			    <div class="collapse-fileds" id="shipping-collapse">
						 <div class="Show-detailsshipping">
 			    		</div>
				        <?php do_action( 'woocommerce_checkout_shipping' ); ?>
			    	</div>
				<div class="collapse-fileds" id="payment-collapse">
					<h3>
						Payment  <div class="paymentCards">
							<span class="Card"><img src="https://stellarbrush.com/wp-content/uploads/2023/03/Payment-Icons.png" /></span>
							<span class="Card"><img src="https://stellarbrush.com/wp-content/uploads/2023/03/Payment-Icons-1.png" /></span>
							<span class="Card"><img src="https://stellarbrush.com/wp-content/uploads/2023/03/Payment-Icons-2.png" /></span>
							
<!--  							<span class="Card"><img src="https://stellarbrush.com/wp-content/uploads/2023/02/70594_mastercard_straight_icon.png" /></span>
							<span class="Card"><img src="https://stellarbrush.com/wp-content/uploads/2023/02/70602_visa_straight_icon.png" /></span>
							<span class="Card"><img src="https://stellarbrush.com/wp-content/uploads/2023/02/70606_discover_straight_icon.png" /></span>
							<span class="Card"><img src="https://stellarbrush.com/wp-content/uploads/2023/02/70607_paypal_curved_icon.png" /></span>
							<span class="Card"><img src="https://stellarbrush.com/wp-content/uploads/2023/02/70584_american_express_straight_icon.png" /></span>
							<span class="Card"><img src="https://stellarbrush.com/wp-content/uploads/2023/02/Afterpay_Logo.png" /></span> -->
						</div>
					</h3>
					<div class="suggestion-cion">
	<!-- popover start -->
						<a class="popOverBtn" id="popOverBtn" role="button" data-html="true" data-placement="right" data-popover-content="#a1" data-toggle="popover" data-trigger="focus" tabindex="0"> 
							<i class="fa-regular fa-circle-question"></i>
						</a>
						<div class="popoversection">

												<div class="popOverContent" id="a1">
													<div class="popover-body">
														<h4>CVV Location</h4>
														<p>Visa & MasterCard</p>
														<img src="https://stellarbrush.com/wp-content/uploads/2023/03/CARD.png" alt="card" />
														<span class="border"></span>
														<p>American Express</p>
														<img src="https://stellarbrush.com/wp-content/uploads/2023/03/CARD-1.png" alt="card" />
													</div>
												</div>
						</div>
						<!-- popover End -->
</div>
						 <div class="show-paymentshere" id="show-paymentshere">
 			    		</div>
				        
			    	</div>
			</div>

			
		</div>

		<script>
			var popOverBtn= document.getElementById("popOverBtn");
			popOverBtn.addEventListener("click", (e)=>{
				e.preventDefault();
			})
		</script>
		
		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>
 	
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12">
		<div class="right-side">
				<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>

			<h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>

			<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

			<div id="order_review" class="woocommerce-checkout-review-order">
				<?php do_action( 'woocommerce_checkout_order_review' ); ?>
			</div>

			<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
			<div class="order-totalshow">
				<table id="order-totalshow">
					<tr class="order-total show it">
						<th>Total</th>
						<?php
 
		foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
			$_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

			if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
				?>
						<td class="right-align"><?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?> </td>
							<?php
			}
		}

 		?>
					</tr>
				</table>
			</div>
			<p class="salesTax">
				*Sales tax only applies to Idaho residents
			</p>
		</div>
	</div>
</div>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
