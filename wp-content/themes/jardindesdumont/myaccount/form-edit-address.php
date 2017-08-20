<?php
/**
 * Edit address form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-address.php.
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
 * @version 3.0.9
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$page_title = ( 'billing' === $load_address ) ? __( 'Billing address', 'woocommerce' ) : __( 'Shipping address', 'woocommerce' );

do_action( 'woocommerce_before_edit_account_address_form' ); ?>

		<?php if ( ! $load_address ) : ?>
			<?php wc_get_template( 'myaccount/my-address.php' ); ?>
		<?php else : ?>

<<<<<<< HEAD
			<section class="edit-adress-form">
				<div class="container">
						<div class="col-md-12 col-sm-12">
							<h1><?php echo apply_filters( 'woocommerce_my_account_edit_address_title', $page_title, $load_address ); ?></h1>

							<form method="post">

=======
	<form method="post">

		<h3><?php echo apply_filters( 'woocommerce_my_account_edit_address_title', $page_title, $load_address ); ?></h3>
>>>>>>> 44263c8212c9cb24c41286ecea884e79bdb14782

		<div class="woocommerce-address-fields">
			<?php do_action( "woocommerce_before_edit_address_form_{$load_address}" ); ?>

			<div class="woocommerce-address-fields__field-wrapper">
				<?php
					foreach ( $address as $key => $field ) {
<<<<<<< HEAD
						//var_dump($field['country_field']);
=======
>>>>>>> 44263c8212c9cb24c41286ecea884e79bdb14782
						if ( isset( $field['country_field'], $address[ $field['country_field'] ] ) ) {
							$field['country'] = wc_get_post_data_by_key( $field['country_field'], $address[ $field['country_field'] ]['value'] );
						}
						woocommerce_form_field( $key, $field, wc_get_post_data_by_key( $key, $field['value'] ) );
					}
				?>
			</div>

			<?php do_action( "woocommerce_after_edit_address_form_{$load_address}" ); ?>

			<p>
				<input type="submit" class="button" name="save_address" value="<?php esc_attr_e( 'Save address', 'woocommerce' ); ?>" />
				<?php wp_nonce_field( 'woocommerce-edit_address' ); ?>
				<input type="hidden" name="action" value="edit_address" />
			</p>
		</div>

	</form>

<<<<<<< HEAD
</div>
</div>
</section>

=======
>>>>>>> 44263c8212c9cb24c41286ecea884e79bdb14782
<?php endif; ?>

<?php do_action( 'woocommerce_after_edit_account_address_form' ); ?>
