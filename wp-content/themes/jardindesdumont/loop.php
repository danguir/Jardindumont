<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<div class="col-md-5 center" id="article-loop">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(array(420,420)); // Declare pixel size you need inside the array ?>
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

					<div class="col-md-12">
						<span class="avatar"><?php echo get_avatar(get_the_author_meta('user_email')); ?></span>
					</div>
					<div class="col-md-12">
						<span class="author"> <?php the_author_posts_link(); ?></span>
					</div>

				</div>

				<!-- /post title -->

				<!-- post details >
				<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
				<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
				< /post details -->

				<?php //html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

		<?php //edit_post_link(); ?>

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
