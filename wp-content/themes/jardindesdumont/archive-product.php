<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
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
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 * @hooked WC_Structured_Data::generate_website_data() - 30
		 */
		do_action( 'woocommerce_before_main_content' );
	?>


<header class="woocommerce-products-header">
    <div class="page-categorie">
        <div class="">
            <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

                    <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>

				<?php endif; ?>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <p>
					<?php
					/**
					 * woocommerce_archive_description hook.
					 *
					 * @hooked woocommerce_taxonomy_archive_description - 10
					 * @hooked woocommerce_product_archive_description - 10
					 */
					do_action( 'woocommerce_archive_description' );
					?>

                </p>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <!--<div align="center" id="affected">
                    <input class="filter-button" data-filter="potager" type="checkbox" name="potager" title="potager">
                    <input class="filter-button" data-filter="fruitiers" type="checkbox" name="fruitiers"
                           title="fruitiers">
                    <input class="filter-button" data-filter="Plantes" type="checkbox" name="Plantes" title="Plantes">
                    <input class="filter-button" data-filter="fleurs" type="checkbox" name="fleurs" title="fleurs">
                    <input class="filter-button" data-filter="arbres" type="checkbox" name="arbres" title="arbres">
                    <input class="filter-button" data-filter="intérieur" type="checkbox" name="intérieur"
                           title="intérieur">
                    <input class="filter-button" data-filter="balcon" type="checkbox" name="balcon" title="balcon">
                    <input class="filter-button" data-filter="terrasse" type="checkbox" name="terrasse"
                           title="terrasse">
                    <input class="filter-button" data-filter="jardin" type="checkbox" name="jardin" title="jardin">
                </div>-->
                <div class="filter-area" data-category-name="<?php echo slugify(single_cat_title('', false)); ?>">
		            <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
                </div>

                <a class="link-clear" href="#" data-filter="all">Reinitialiser les filtres</a>
            </div>
        </div>
    </div>
</header>

		<?php if ( have_posts() ) : ?>

			<?php
				/**
				 * woocommerce_before_shop_loop hook.
				 *
				 * @hooked wc_print_notices - 10
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				//do_action( 'woocommerce_before_shop_loop' );
			?>
			<section class="up-sells upsells center products">
				<?php wc_print_notices(); ?>
				<div class="container">
					<!--div class="col-sm-3">
						<a href="#">
							<img src="<?php echo get_template_directory_uri();?>/img/categorie/Banniere_1.png" class=""/>
						</a>
					</div-->
			<?php woocommerce_product_loop_start(); ?>

				<?php woocommerce_product_subcategories(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/**
						 * woocommerce_shop_loop hook.
						 *
						 * @hooked WC_Structured_Data::generate_product_data() - 10
						 */
						do_action( 'woocommerce_shop_loop' );
					?>

					<?php wc_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>

			<?php woocommerce_product_loop_end(); ?>
		</div>

			<?php
				/**
				 * woocommerce_after_shop_loop hook.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			?>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php
				/**
				 * woocommerce_no_products_found hook.
				 *
				 * @hooked wc_no_products_found - 10
				 */
				do_action( 'woocommerce_no_products_found' );
			?>

		<?php endif; ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>
</section>


	<section class="Trouver-kit">
		<div class="container">
			<img src="<?php echo get_template_directory_uri();?>/img/categorie/loop.png" class="loop"/>
			<h2>Trouvez le kit qui vous convient</h2>
			<div class="col-sm-12 center">
					<a href="#" class="Trouver-kit-link">lancer la recherche</a>
      </div>
		</div>
</section>

<section class="upsells-costumised up-sells upsells center products">
		<div class="container">
		<ul class="products">


				<li class="post-249 product type-product status-publish has-post-thumbnail product_cat-jardigeek product_cat-pour-ceux-qui-debutent first instock sale shipping-taxable purchasable product-type-simple">
	<a href="http://dev.jardindumont.local/product/kit-saveurs-du-monde/" class="woocommerce-LoopProduct-link">

<img width="300" height="300" src="http://dev.jardindumont.local/wp-content/uploads/2017/07/00-Main-Photo-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="00-Main Photo" title="00-Main Photo" srcset="http://dev.jardindumont.local/wp-content/uploads/2017/07/00-Main-Photo-300x300.jpg 300w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00-Main-Photo-150x150.jpg 150w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00-Main-Photo-250x250.jpg 250w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00-Main-Photo-768x768.jpg 768w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00-Main-Photo-700x700.jpg 700w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00-Main-Photo-120x120.jpg 120w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00-Main-Photo-360x360.jpg 360w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00-Main-Photo-50x50.jpg 50w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00-Main-Photo-900x900.jpg 900w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00-Main-Photo.jpg 1600w" sizes="(max-width: 300px) 100vw, 300px"><h2 class="woocommerce-loop-product__title">Kit «&nbsp;Saveurs du monde&nbsp;»</h2>
	<span class="price"><del><span class="woocommerce-Price-amount amount">29<span class="woocommerce-Price-currencySymbol">€</span></span></del> <ins><span class="woocommerce-Price-amount amount">25<span class="woocommerce-Price-currencySymbol">€</span></span></ins></span>
</a>
</li>



				<li class="post-263 product type-product status-publish has-post-thumbnail product_cat-jardigeek  instock sale shipping-taxable purchasable product-type-simple">
	<a href="http://dev.jardindumont.local/product/mon-jardin-dinterieur/" class="woocommerce-LoopProduct-link">

<img width="300" height="300" src="http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-300x300.jpeg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="00_MainPhoto" title="00_MainPhoto" srcset="http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-300x300.jpeg 300w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-150x150.jpeg 150w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-250x250.jpeg 250w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-768x768.jpeg 768w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-700x700.jpeg 700w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-120x120.jpeg 120w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-360x360.jpeg 360w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-50x50.jpeg 50w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-900x900.jpeg 900w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto.jpeg 1600w" sizes="(max-width: 300px) 100vw, 300px"><h2 class="woocommerce-loop-product__title">Mon jardin d’intérieur</h2>
	<span class="price"><del><span class="woocommerce-Price-amount amount">30<span class="woocommerce-Price-currencySymbol">€</span></span></del> <ins><span class="woocommerce-Price-amount amount">25<span class="woocommerce-Price-currencySymbol">€</span></span></ins></span>
</a>
</li>


				<li class="post-245 product type-product status-publish  instock shipping-taxable purchasable product-type-simple">
	<a href="http://dev.jardindumont.local/product/kit-paradis-tropical/" class="woocommerce-LoopProduct-link"><img src="http://dev.jardindumont.local/wp-content/plugins/woocommerce/assets/images/placeholder.png" alt="Placeholder" width="300" class="woocommerce-placeholder wp-post-image" height="300"><h2 class="woocommerce-loop-product__title">Kit «&nbsp;Paradis Tropical&nbsp;»</h2>
	<span class="price"><span class="woocommerce-Price-amount amount">Prix à l'unité : 40<span class="woocommerce-Price-currencySymbol">€</span></span></span>
</a>
</li>


				<li class="post-241 product type-product status-publish has-post-thumbnail product_cat-jardigeek product_tag-jardigeek last instock shipping-taxable purchasable product-type-simple">
	<a href="http://dev.jardindumont.local/product/kit-plante-sensitive/" class="woocommerce-LoopProduct-link"><img width="300" height="300" src="http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="00_MainPhoto" title="00_MainPhoto" srcset="http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-300x300.jpg 300w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-150x150.jpg 150w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-250x250.jpg 250w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-768x768.jpg 768w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-700x700.jpg 700w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-120x120.jpg 120w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-360x360.jpg 360w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-50x50.jpg 50w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-900x900.jpg 900w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto.jpg 1600w" sizes="(max-width: 300px) 100vw, 300px"><h2 class="woocommerce-loop-product__title">Kit «&nbsp;Plante sensitive&nbsp;»</h2>
	<span class="price"><span class="woocommerce-Price-amount amount">Prix à l'unité : 35<span class="woocommerce-Price-currencySymbol">€</span></span></span>
</a></li>


		</ul>
</div>
	</section>

	<section class="networking center " >
		<h2>Suivez-nous</h2>
		<div class="elementor-image">
				<img src="http://dev.jardindumont.local/wp-content/uploads/elementor/thumbs/network-nanlykb10ak10mvebkcyinqog9pz2hde2y78jtl0gy.png" title="network" alt="network">		</div>
			</section>
	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		//do_action( 'woocommerce_sidebar' );
	?>


<?php get_footer( 'shop' ); ?>
