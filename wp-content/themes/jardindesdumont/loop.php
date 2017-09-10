<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<div class="col-md-6 col-xs-12 center category-idee" id="article-loop">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" class="clearfix img-crop" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(array(430,426), ['title' => the_title('', '', false)]); ?>
					</a>
				<?php endif; ?>
				<!-- /post thumbnail -->

				<!-- post title -->
				<div class="">
					<div class="col-md-12">
						<h2 class="article-title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h2>

					</div>

                    <?php
                    $auteur = get_field('auteur_de_larticle');
                    switch ($auteur) {
                        case "julien":
                            ?>
                            <div class="col-md-12">
                                <span class="avatar">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/articles/auteur-julien.png" class="avatar" alt="Julien Dumont">
                                </span>
                            </div>
                            <div class="col-md-12">
                                <span class="author">Julien Dumont</span>
                            </div>
                            <?php
                            break;
                        case "sophie":
	                        ?>
                            <div class="col-md-12">
                                <span class="avatar">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/articles/auteur-sophie.png" class="avatar" alt="Sophie Dumont">
                                </span>
                            </div>
                            <div class="col-md-12">
                                <span class="author">Sophie Dumont</span>
                            </div>
	                        <?php
                            break;
                        case "louise":
	                        ?>
                            <div class="col-md-12">
                                <span class="avatar">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/articles/auteur-louise.png" class="avatar" alt="Louise Dumont">
                                </span>
                            </div>
                            <div class="col-md-12">
                                <span class="author">Louise Dumont</span>
                            </div>
	                        <?php
                            break;
                        case "pierre":
	                        ?>
                            <div class="col-md-12">
                                <span class="avatar">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/articles/auteur-pierre.png" class="avatar" alt="Pierre Dumont">
                                </span>
                            </div>
                            <div class="col-md-12">
                                <span class="author">Pierre Dumont</span>
                            </div>
	                        <?php
                            break;
                        default:
	                        ?>
                            <div class="col-md-12">
                                <span class="avatar">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/articles/auteur-julien.png" class="avatar" alt="Julien Dumont">
                                </span>
                            </div>
                            <div class="col-md-12">
                                <span class="author">Julien Dumont</span>
                            </div>
	                        <?php
                            break;
                    }
                    ?>
				</div>

	</article>
	<!-- /article -->
		</div>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
