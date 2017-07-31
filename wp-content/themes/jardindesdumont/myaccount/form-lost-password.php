<?php
/**
 * Lost password form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-lost-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wc_print_notices(); ?>
<section class="lost-pass">
	<div class="container">
		<h2>RÉINITIALISER VOTRE MOT DE PASSE</h2>

<form method="post" class="form-horizontal center">

	<p>
		<?php echo apply_filters( 'woocommerce_lost_password_message', __( '		Veuillez saisir votre adresse e-mail ci-dessous. Nous vous enverrons les instructions pour créer un nouveau mot de passe.', 'woocommerce' ) ); ?>
	</p>
	<div class="form-group">
		<label class="col-sm-3 control-label" for="user_login"><?php _e( 'Username or email', 'woocommerce' ); ?></label>
		<div class="col-sm-9">
			<input class=" form-control" type="text" name="user_login" id="user_login" />
		</div>
	</div>
	<div class="clear"></div>

	<?php do_action( 'woocommerce_lostpassword_form' ); ?>

		<input type="hidden" name="wc_reset_password" value="true" />
		<input type="submit" class="ui-button ui-button-primary button" value="<?php esc_attr_e( 'Reset password', 'woocommerce' ); ?>" />

	<?php wp_nonce_field( 'lost_password' ); ?>

</form>
</div>
</section>
