<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
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
	exit; // Exit if accessed directly
}

?>


<?php do_action( 'woocommerce_before_customer_login_form' ); ?>

<section class="login-formulaire">

<div class="container">
	<?php wc_print_notices(); ?>
 <h2 class="title-form"><?php //_e( 'Login', 'woocommerce' ); ?>CONNECTEZ-VOUS À VOTRE COMPTE </h2>
	<div class="login-woo">
		<form class="woocomerce-form woocommerce-form-login login" method="post">
			<?php do_action( 'woocommerce_login_form_start' ); ?>
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="username"><?php //_e( 'Username or email address', 'woocommerce' ); ?> Email<span class="required">*</span></label>
				<input type="text" class="ui-input" name="username" id="username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
			</p>
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="password"><?php// _e( 'Password', 'woocommerce' ); ?> Mot de pass<span class="required">*</span></label>
				<input class="ui-input" type="password" name="password" id="password" />
			</p>
			<?php do_action( 'woocommerce_login_form' ); ?>
			<p class="form-row center">
				<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
				<input type="submit" class="ui-button ui-button-primary" name="login" value="<?php esc_attr_e( 'Connexion', 'woocommerce' ); ?>" />
				<!--label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline"
					<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php _e( 'Se souvenir de moi', 'woocommerce' ); ?></span>
				</label-->
			</p>
			<p class="woocommerce-LostPassword lost_password">
				<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php _e( 'Lost your password?', 'woocommerce' ); ?></a>
			</p>
			<?php do_action( 'woocommerce_login_form_end' ); ?>
		</form>

		<p class="new_user">
			<a href="<?php echo get_permalink(woocommerce_get_page_id('myaccount')) . 'register'; ?>"><?php _e( 'Register' ); ?></a>
			<!--a href="/my-account/form-register/">Vous avez pas de compte ? créer un nouveau compte</a-->
		</p>

	</div>
</div>
</section>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
