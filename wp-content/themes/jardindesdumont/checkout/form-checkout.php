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
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );
	return;
}

?>

<section class="checkout-client">
	<?php wc_print_notices(); ?>
	<h2>INFORMATIONS DE COMPTE</h2>
	<!--div class="container">
	<div class="stepwizard">
	    <div class="stepwizard-row setup-panel">
	        <div class="stepwizard-step">
	            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
	            <p>Step 1</p>
	        </div>
	        <div class="stepwizard-step">
	            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
	            <p>Step 2</p>
	        </div>
	        <div class="stepwizard-step">
	            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
	            <p>Step 3</p>
	        </div>
	    </div>
	</div>
	<form role="form">
	    <div class="row setup-content" id="step-1">
	        <div class="col-xs-12">
	            <div class="col-md-12">
	                <h3> Step 1</h3>
	                <div class="form-group">
	                    <label class="control-label">First Name</label>
	                    <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name"  />
	                </div>
	                <div class="form-group">
	                    <label class="control-label">Last Name</label>
	                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" />
	                </div>

<?php //do_action( 'woocommerce_checkout_billing' ); ?>

	                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
	            </div>
	        </div>
	    </div>
	    <div class="row setup-content" id="step-2">
	        <div class="col-xs-12">
	            <div class="col-md-12">
	                <h3> Step 2</h3>
	                <div class="form-group">
	                    <label class="control-label">Company Name</label>
	                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Name" />
	                </div>
	                <div class="form-group">
	                    <label class="control-label">Company Address</label>
	                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address"  />
	                </div>
<?php //do_action( 'woocommerce_checkout_shipping' ); ?>
	                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
	            </div>
	        </div>
	    </div>
	    <div class="row setup-content" id="step-3">
	        <div class="col-xs-12">
	            <div class="col-md-12">
	                <h3> Step 3</h3>
	                <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
	            </div>
	        </div>
	    </div>
	</form>
</div-->





	<div class="container">
		<h2>INFORMATIONS DE COMPTE</h2>
<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col2-set" id="customer_details">
			<div class="col-1">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			</div>

			<div class="col-2">
				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>

	<h3 id="order_review_heading"><?php _e( 'Your order', 'woocommerce' ); ?></h3>

	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

	<div id="order_review" class="woocommerce-checkout-review-order">
		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
	</div>

	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

</form>

</div>
</section>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
