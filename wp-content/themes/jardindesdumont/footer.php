
<div class="social-block">
		<div class="row center">
			<div class="col-md-12 col-xs-12">
				<div class="social-newsletter center-block ">
						<form method="post" action="" onsubmit="">
									<input class="newsletter-email" type="email" name="ne" size="30" placeholder="Restez connectés à l'inspiration de jardinage ..." required="">
									<input class="button newsletter-submit" type="submit" value="abonnez-vous">
						</form>
					</div>
				</div>
		  </div>
 </div>

			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="footer-level-one" >
						<div class="row center">
						  <div class="col-md-3 col-xs-12 text-center">
								<img src="<?php echo get_template_directory_uri();?>/img/footer/icon-payement.png" class=" center-block img-responsive" alt="Responsive image">
								<h4>payement sécurisé</h4>
								<p>Des paiements<br>à votre convenance </p>
							</div>
						  <div class="col-md-3 col-xs-12 text-center">
								<img src="<?php echo get_template_directory_uri();?>/img/footer/icon-transport.png" class="center-block img-responsive" alt="Responsive image">
								<h4>Livrés chez vous</h4>
								<p>Livraison garantie<br>dans le meilleur delay </p>
							</div>
						  <div class="col-md-3 col-xs-12 text-center">
								<img src="<?php echo get_template_directory_uri();?>/img/footer/icon-sav.png" class=" center-block img-responsive" alt="Responsive image">
								<h4>un doute ?</h4>
								<p>Appellez-nous<br>ou visitez notre <a href="#" class="ui-button ui-button-link" title="SAV">SAV</a></p>
							</div>
							<div class="col-md-3 col-xs-12 text-center">
							 <img src="<?php echo get_template_directory_uri();?>/img/footer/icon-avis.png" class="center-block img-responsive" alt="Responsive image">
							 <h4>JArdiniérs passionnés</h4>
							 <p>Découvrez ce que<br>nos clients disent </p>
						 </div>
					 </div>
					</div>

					<div class="footer-level-two" >

						<div class="row hidden-xs f-milieu center">
							<div class="col-md-3 col-xs-12 text-center">
								<h4>0 892 700 205</h4>
								<button class="ui-button ui-button-secondary-red">Call me back</button>
									<a href="/mention-legale/" class="mention-legal" title="WordPress">
										<h5>Pour vous, les curieux</h5>
										<p>Mentions légales<br>Conditions de vente</p>
								</a>
							</div>
							<div class="col-md-6 col-xs-12 text-center">

								<div class="row center">
									<div class="col-md-4 hidden-xs text-center style='background:red;' ">
										<h4 class="app">Application<br>What's this<br>plante</h4>
										<div class="row">
											<div class="col-md-12 col-xs-12 nopadding" style="text-align: right;">
										<span class="badges">Développée par<br>famille Dumont</span>
									</div>
									<div class="col-md-4 col-xs-4 nopadding ">
										<img src="<?php echo get_template_directory_uri();?>/img/footer/badge.png" class="img-badge" alt="Responsive image">
									</div>
								</div>
							</div>
									<div class="Iphone col-md-4 hidden-xs text-center">
										<img src="<?php echo get_template_directory_uri();?>/img/footer/app-download_2.png" class="app-phone center-block img-responsive" alt="Responsive image">
									</div>
									<div class="col-md-4 col-xs-12 text-center">
										<img src="<?php echo get_template_directory_uri();?>/img/footer/app-telecharger.png" class="app-down center-block img-responsive" alt="Responsive image">
									</div>
								</div>

							</div>

							<div class="col-md-3 col-xs-12 text-center">
							 <img src="<?php echo get_template_directory_uri();?>/img/footer/avis-bon.png" class="avis-img center-block img-responsive" alt="Responsive image">
						 </div>
					 </div>

					</div>


				<!-- copyright
				<p class="copyright">
					&copy; <?php //echo date('Y'); ?> Copyright <?php //bloginfo('name'); ?>. <?php //_e('Powered by', 'html5blank'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

        <!-- Script de Partage RS -->
        <!-- Facebook -->
        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.10";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <!-- Twitter -->
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        <!-- /Script de Partage RS -->
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
