<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section class="article">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php //if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<!--a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php //the_post_thumbnail(); // Fullsize image for the single post ?>
				</a-->
			<?php// endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<!--h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1-->
			<!-- /post title -->

			<!-- post details -->
			<span class="date"><?php the_time('j F Y'); ?> <?php //the_time('g:i a'); ?></span>
			<span class="avatar"><?php echo get_avatar(get_the_author_meta('user_email')); ?></span>
			<span class="author"> <?php the_author_posts_link(); ?></span>
			<!--span class="comments"><?php if (comments_open( get_the_ID() ) ) //comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span-->
			<!-- /post details -->

			<?php the_content(); // Dynamic Content ?>

            <div class="block-rs" style="margin-top: 30px;">
                <h2>VOUS AVEZ TROUVEZ CET ARTICLE UTILE ?</h2>
                <h3>PARTAGEZ-LE</h3>
                <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                <a href="https://twitter.com/share" class="twitter-share-button">Partager</a>
            </div>

			<?php //the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			<p><?php //_e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

			<p><?php //_e( '', 'html5blank' ); the_author(); ?></p>

			<?php //edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php //comments_template(); ?>
		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
