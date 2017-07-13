<?php
/**
 * Single Product Price, including microdata for SEO
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
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
	exit; // Exit if accessed directly
}

global $product;

?>
<div class="row">
	<div class="col-md-2">
			<?php if ( $max_value && $min_value === $max_value ) {
				?>
				<div class="quantity hidden">
					<input type="hidden" value="1" class="qty" name="<?php echo esc_attr( $input_name ); ?>" value="<?php echo esc_attr( $min_value ); ?>" />
				</div>
				<?php
			} else {
				?>
				<div class="quantity">
					<input type="number" value="1" class="input-text qty text" step="<?php echo esc_attr( $step ); ?>" min="<?php echo esc_attr( $min_value ); ?>" max="<?php echo esc_attr( 0 < $max_value ? $max_value : '' ); ?>" name="<?php echo esc_attr( $input_name ); ?>" value="<?php echo esc_attr( $input_value ); ?>" title="<?php echo esc_attr_x( 'Qty', 'Product quantity input tooltip', 'woocommerce' ) ?>" size="4" pattern="<?php echo esc_attr( $pattern ); ?>" inputmode="<?php echo esc_attr( $inputmode ); ?>" />
				</div>
				<?php
			}
			?>

  </div>

	<div class="col-md-2">
		<img src="<?php echo get_template_directory_uri();?>/img/product/x.png" class="calcule center-block img-responsive" alt="Responsive image">
  </div>
	<div class="col-md-2">
  	<p class="price"><?php echo $product->get_price_html(); ?></p>

  </div>
	<div class="col-md-2">
		<img src="<?php echo get_template_directory_uri();?>/img/product/egale.png" class="calcule center-block img-responsive" alt="Responsive image">
  </div>
  <div class="col-md-2">
		<p class="price"><?php //echo $product->get_total_price_html();  ?>65€</p>

  </div>
</div>
<!--div class="row">
	<div class="col-md-2"><p>Quantité</p></div>
	<div class="col-md-2"></div>
	<div class="col-md-2"><p>Prix à l'unité</p></div>
	<div class="col-md-2"><p>Prix finale sans livraison</p></div>

</div-->
