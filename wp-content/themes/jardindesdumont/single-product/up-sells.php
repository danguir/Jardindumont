<?php
/**
 * Single Product Up-Sells
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/up-sells.php.
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
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="hashtag-dumont">
	<div class="container full-width">

		<h2>#lafamilledumont</h2>
		<p>L’univers de La Famille Dumont forme un art de vivre  qu'on partage avec ses connaisseurs de par le monde.</p>
		    <div class="col-md-12">
		        <div class="well">
		            <div id="myCarousel" class="carousel slide media-carousel">

		                <!-- Carousel items -->
		                <div class="carousel-inner">
		                    <div class="item active">
		                        <div class="row">
		                            <div class="col-sm-3"><a href="#x"><img src="http://placehold.it/500x500" alt="Image" class="img-responsive"></a>
		                            </div>
		                            <div class="col-sm-3"><a href="#x"><img src="http://placehold.it/500x500" alt="Image" class="img-responsive"></a>
		                            </div>
		                            <div class="col-sm-3"><a href="#x"><img src="http://placehold.it/500x500" alt="Image" class="img-responsive"></a>
		                            </div>
		                            <div class="col-sm-3"><a href="#x"><img src="http://placehold.it/500x500" alt="Image" class="img-responsive"></a>
		                            </div>
																<div class="col-sm-3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
		                            </div>
		                        </div>
		                        <!--/row-->
		                    </div>
		                    <!--/item-->
		                    <div class="item">
		                        <div class="row">
		                            <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
		                            </div>
		                            <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
		                            </div>
		                            <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
		                            </div>
		                            <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
		                            </div>
																<div class="col-sm-3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
																</div>
		                        </div>
		                        <!--/row-->
		                    </div>
		                    <!--/item-->
		                    <div class="item">
		                        <div class="row">
		                            <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
		                            </div>
		                            <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
		                            </div>
		                            <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
		                            </div>
		                            <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
		                            </div>
																<div class="col-sm-3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
																</div>
		                        </div>
		                        <!--/row-->
		                    </div>
		                    <!--/item-->
		                </div>
		                <!--/carousel-inner-->

										<a data-slide="prev" href="#media" class="left carousel-control">
											<img src="<?php echo get_template_directory_uri();?>/img/product/arrow-left.png" class=""/>
										</a>
			 							<a data-slide="next" href="#media" class="right carousel-control">
											<img src="<?php echo get_template_directory_uri();?>/img/product/arrow-right.png" class=""/>
										</a>
		            </div>
		            <!--/myCarousel-->
								<div class="col-sm-12 center">
									<a href="#" class="add-photo">ajoutez une photo</a>

		        </div>
		        <!--/well-->
		</div>
</div>
	</section>




<?php
if ( $upsells ) : ?>

	<section class="up-sells upsells center products">
		<div class="container">
		<h2><?php esc_html_e( 'Vous allez aimer', 'woocommerce' ) ?></h2>

		<?php woocommerce_product_loop_start(); ?>

			<?php foreach ( $upsells as $upsell ) : ?>

				<?php
				 	$post_object = get_post( $upsell->get_id() );
					setup_postdata( $GLOBALS['post'] =& $post_object );

					wc_get_template_part( 'content', 'product' ); ?>

			<?php endforeach; ?>

		<?php woocommerce_product_loop_end(); ?>
</div>
	</section>

<?php endif;

wp_reset_postdata();
