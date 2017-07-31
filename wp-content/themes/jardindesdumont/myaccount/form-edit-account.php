<?php
/**
 * Edit account form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-account.php.
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
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_edit_account_form' ); ?>
<section class="info-compte">
	<div class="container">
		<h2>INFORMATIONS DE COMPTE</h2>
<div class="col-sm-12">
<form class="form-horizontal center" action="" method="post">

	<?php do_action( 'woocommerce_edit_account_form_start' ); ?>
	<div class="form-group">
			<label for="account_first_name" class="col-sm-3 control-label"><?php _e( 'First name', 'woocommerce' ); ?> <span class="required">*</span></label>
 			<div class="col-sm-9">
					<input type="text" class="form-control " name="account_first_name" id="account_first_name" value="<?php echo esc_attr( $user->first_name ); ?>" />
			</div>
	</div>
	<div class="form-group">
		<label for="account_last_name" class="col-sm-3 control-label"><?php _e( 'Last name', 'woocommerce' ); ?> <span class="required">*</span></label>
		<div class="col-sm-9">
			<input type="text" class="form-control" name="account_last_name" id="account_last_name" value="<?php echo esc_attr( $user->last_name ); ?>" />
		</div>
	</div>
	<div class="clear"></div>
	<div class="form-group">
		<label for="account_email" class="col-sm-3 control-label"><?php _e( 'Email address', 'woocommerce' ); ?> <span class="required">*</span></label>
		<div class="col-sm-9">
			<input type="email" class="form-control" name="account_email" id="account_email" value="<?php echo esc_attr( $user->user_email ); ?>" />
		</div>
	</div>

	<fieldset>
		<legend><?php _e( 'Password change', 'woocommerce' ); ?></legend>

		<div class="form-group">
			<label for="password_current" class="col-sm-3 control-label"><?php _e( 'Current password (leave blank to leave unchanged)', 'woocommerce' ); ?></label>
			<div class="col-sm-9">
				<input type="password" class="form-control" name="password_current" id="password_current" />
			</div>
		</div>
		<div class="form-group">
			<label for="password_1" class="col-sm-3 control-label"><?php _e( 'New password (leave blank to leave unchanged)', 'woocommerce' ); ?></label>
			<div class="col-sm-9">
				<input type="password" class="form-control" name="password_1" id="password_1" />
			</div>
		</div>
		<div class="form-group">
			<label for="password_2" class="col-sm-3 control-label"><?php _e( 'Confirm new password', 'woocommerce' ); ?></label>
			<div class="col-sm-9">
					<input type="password" class="form-control" name="password_2" id="password_2" />
			</div>
		</div>
	</fieldset>
	<div class="clear"></div>

	<?php do_action( 'woocommerce_edit_account_form' ); ?>

	<p>
		<?php wp_nonce_field( 'save_account_details' ); ?>
			<input type="submit" class="ui-button ui-button-primary button" name="save_account_details" value="<?php esc_attr_e( 'Save changes', 'woocommerce' ); ?>" />
		<input type="hidden" name="action" value="save_account_details" />
	</p>

	<?php do_action( 'woocommerce_edit_account_form_end' ); ?>
</form>
</div>
</div>
</section>

<?php do_action( 'woocommerce_after_edit_account_form' ); ?>
