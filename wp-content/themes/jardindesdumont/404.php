<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="page-introuvable">
			<div class="row center">
					<div class="col-md-9">
						<!-- article -->
						<article id="post-404">
							<h1><?php //_e( 'Page not found', 'html5blank' ); ?>PAGE NON TROUVÉE</h1>
							<div class="erreur-number">404</div>

							<div class="row center">
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



		<section class="tab-famille">
					<div class="row center">
					<div id="exTab1" class="container">
						<div class="col-md-10 col-md-offset-1">

						<ul  class="nav nav-pills">
								<li class="maman">
					        <a  href="#1a" data-toggle="tab">
										<span class="nom-famille">Sophie Dumont</span>
									</a>
								</li>
								<li class="fils">
									<a  href="#2a" data-toggle="tab">
										<span class="nom-famille">Pierre Dumont</span>
									</a>
								</li>
								<li class="fille">
									<a  href="#3a" data-toggle="tab">
										<span class="nom-famille">Louise Dumont</span>
									</a>
								</li>
								<li class="papa">
									<a  href="#4a" data-toggle="tab">
										<span class="nom-famille">Louise Dumont</span>
									</a>
								</li>
							</ul>
							<div class="tab-content clearfix">
							  <div class="tab-pane active" id="1a">
				          <p>
										Sophie est une jeune femme de 34 ans, directrice d’une agence de voyage.
										Maman et épouse, elle gère d’une main de fer le quotidien de toute la famille. Alors, le week end elle aime se détendre dans son jardin et s’occuper de ses fleurs. Mais ce qu’elle aime plus que tout c’est partager cette passion avec sa famille.
									</p>
								</div>
								<div class="tab-pane" id="2a">
				           <p>
										 Pierre est un jeune adolescent de 14 ans. Passionné par les jeux vidéos et les nouvelles technologie en général, la nature et le jardinage ne l’a jamais beaucoup intéressé. Mais depuis qu’il a découvert le jardinage numérique, il est devenu un adepte des après-midi jardinage.
									 </p>
								</div>
				        <div class="tab-pane" id="3a">
									<p>
										Louise est une petite fille pleine d’énergie. Du haut de ses 5 ans, elle à beaucoup de hobbies, dont la danse, le saxophone et la gymnastique. Alors à force de voir sa maman s’occuper de ses roses, c’est tout naturellement qu’elle s’est intéressé au jardinage. Elle est très ouverte et curieuse de découvrir la nature.
								 </p>
								</div>
				          <div class="tab-pane" id="4a">
										<p>
										Julien est un jeune père de famille de 36 ans. Comptable dans une grande société, le stress et la fatigue rythme son quotidien. Pour relâcher la pression, sa femme Sophie lui propose de se mettre au jardinage. Bien qu’il n’y connait rien, Julien est enthousiaste à l’idée d’apprendre et de découvrir les bienfaits du jardinage, en famille. 							 </p>
								</div>
							</div>
						</div>


					</div>
				</section>

	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
