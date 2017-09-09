<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="category-page">
			<div class="container">
				<?php
					/**
					 * woocommerce_before_main_content hook.
					 *
					 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
					 * @hooked woocommerce_breadcrumb - 20
					 */
					do_action( 'woocommerce_before_main_content' );
				?>
				<div class="row center">
                    <div class="col-md-1 hidden-xs hidden-sm"></div>
					<div class="col-md-10 col-xs-12 description">
						<h1><?php /*_e( 'Categories for ', 'html5blank' ); */ single_cat_title(); ?></h1>
						<?php echo category_description( $category_id ); ?>
					</div>
                    <div class="col-md-1 hidden-xs hidden-sm"></div>

					</div>
						<div class="col-md-2 col-xs-12 nopadding nopadding">
							<div class="side-menu-article center sticky-scroll-box">
                                <img src="<?php echo get_template_directory_uri();?>/img/Icon-menu-article.png" id="" class=""/>
                                <?php
                                $terms = get_terms( 'post_tag', array(
	                                'hide_empty' => false,
                                ) );
                                ?>
                                <ul>
                                    <li class="title">Catégories</li>
                                    <?php
                                        foreach ($terms as $term) {
                                            echo "<li><a href='".get_term_link($term)."'>".$term->name."</a></li>";
                                        }
                                    ?>
								</ul>
								</div>
							</div>

							<div class="col-md-10">
								<?php get_template_part('loop'); ?>
							</div>


						<?php get_template_part('pagination'); ?>


					</div>
				</section>	<!-- /section -->

				<!--div class="row center">
					<div class="col-md-12col-xs-12 ">
						<button class="ui-button ui-button-primary" id="loadMore">Afficher plus</button>
					</div>
				</div-->

				<section class="networking center " >
					<h2>Suivez-nous</h2>
						<div class="elementor-image">
							<img class="img-responsive" src="/wp-content/uploads/elementor/thumbs/network-nanlykb10ak10mvebkcyinqog9pz2hde2y78jtl0gy.png" title="network" alt="network">
						</div>
				</section>
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
