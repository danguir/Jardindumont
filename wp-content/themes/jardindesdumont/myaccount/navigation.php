<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
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

do_action( 'woocommerce_before_account_navigation' );
?>

<!--nav class="woocommerce-MyAccount-navigation">
	<ul>
		<?php// foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
			<li class="<?php //echo wc_get_account_menu_item_classes( $endpoint ); ?>">
				<a href="<?php //echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>"><?php// echo esc_html( $label ); ?></a>
			</li>
		<?php// endforeach; ?>
	</ul>
</nav-->
<section class="navigation-compte">
	<div class="container ">
		<div class="row">
			<div class="col-md-4 col-xs-12">
				<div class="border-compte">
					<img src="<?php echo get_template_directory_uri();?>/img/compte-client/farmer-icon.png" class="center-block img-responsive" alt="Responsive image">
					<a class="link-compte" href="/my-account/edit-account/">Mon compte</a>
					<p>Informations <br> personnelles</p>
				</div>
			</div>
			<div class="col-md-4 col-xs-12">
				<div class="border-compte">
					<img style="width: 80px;" src="<?php echo get_template_directory_uri();?>/img/compte-client/cart.png" class="center-block img-responsive" alt="Responsive image">
					<a class="link-compte" href="/cart/">Panier</a>
					<p>Votre panier<br> est vide</p>
			</div>
			</div>

		</div>
		<div class="row">
			<div class="col-md-4 col-xs-12">
				<div class="border-compte">
					<img style="width: 80px;" src="<?php echo get_template_directory_uri();?>/img/compte-client/commande-icon.png" class="center-block img-responsive" alt="Responsive image">
					<a class="link-compte" href="/my-account/orders/">Commandes</a>
					<p>Historique <br>des commandes</p>
				</div>
			</div>
			<div class="col-md-4 col-xs-12">
				<div style="height: 197px;" class="border-compte">
				<img style="width: 90px;" src="<?php echo get_template_directory_uri();?>/img/compte-client/wishlist.png" class="center-block img-responsive" alt="Responsive image">
				<a class="link-compte" href="/my-lists/">wishlist</a>
				<p>Ce que vous plait</p>
			</div>
			</div>
		</div>


		<div class="row">
			<div class="col-md-4 col-xs-12">
				<div class="border-compte">
					<img style="width: 80px;" src="<?php echo get_template_directory_uri();?>/img/compte-client/adresse.png" class="center-block img-responsive" alt="Responsive image">
					<a class="link-compte" href="/my-account/orders/">Addresses</a>
					<p>Facturation et livraison</p>
				</div>
			</div>
			<div class="col-md-4 col-xs-12">
				<div style="height: 197px;" class="border-compte">
				<img style="width: 90px;" src="<?php echo get_template_directory_uri();?>/img/compte-client/paiement.png" class="center-block img-responsive" alt="Responsive image">
				<a class="link-compte" href="/my-account/payment-methods/">Fortefeuille</a>
				<p>Mode de paiement</p>
			</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<a href="/my-account/customer-logout/">Logout</a>
			</div>
		</div>
</div>
</section>


<?phpdo_action( 'woocommerce_after_account_navigation' ); ?>
