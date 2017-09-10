<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="page-introuvable">
			<div class="row center l-flex">
					<div class="col-md-9">
						<!-- article -->
						<article id="post-404">
							<h1><?php //_e( 'Page not found', 'html5blank' ); ?>PAGE NON TROUVÉE</h1>
							<div class="erreur-number">404</div>

							<div class="row center l-flex">
								<div class="col-md-12 ">
									<p>
										La page que vous avez demandée n’a pas été trouvée. Il se peut que le lien que vous avez utilisé soit rompu ou que vous ayez tapé l’adresse (URL) incorrectement.
									</p>
									<div class="clear"></div>
									<a class="ui-button ui-button-primary" href="<?php echo home_url(); ?>"><?php //_e( 'Return home?', 'html5blank' ); ?>RETOUR À LA PAGE D'ACCUEIL ?</a>
								</div>
							</div>
						</article>
						<!-- /article -->
						</div>
			</div>

		</section>
		<!-- /section -->

	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
