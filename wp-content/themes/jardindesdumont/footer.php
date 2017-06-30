			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->





			<footer class="o-footer">
  <div class="o-grid">
    <div class="o-grid__row u-valign-top">
      <div class="o-grid__col-m-5 o-grid__col-s-12 u-self-align-middle">

      <form method="post" action="https://www.soshape.com/contact#contact_form" id="contact_form" class="o-input-group o-form--subscribe" accept-charset="UTF-8"><input type="hidden" value="customer" name="form_type"><input type="hidden" name="utf8" value="✓">


            <input type="hidden" name="contact[tags]" value="newsletter">
            <input type="email" class="o-input-group__field" name="contact[email]" id="Email" aria-label="Newsletter" placeholder="Newsletter" value="">
                <button type="submit" class="o-input-group__button o-button--reset">
                  <svg class="o-button__ico o-ico o-ico--mail">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ico-mail"></use>
                  </svg>
                  <span class="o-button__label u-hide-accessible">OK</span>
                </button>

      </form>

      </div>
      <div class="o-grid__col-s-4 o-grid__col--offset-s-1 o-grid__col-m-2 o-grid__col--offset-m-1">
        <h4 class="o-footer__title">Pour les plus curieux</h4>
        <ul class="o-footer__list">

            <li class="o-footer__item">
              <a class="o-footer__link" href="/pages/mentions-legales">Mentions légales</a>
            </li>

            <li class="o-footer__item">
              <a class="o-footer__link" href="/pages/cgv">Conditions Générales de Vente</a>
            </li>

            <li class="o-footer__item">
              <a class="o-footer__link" href="/pages/charte-de-confidentialite">Charte de Confidentialité</a>
            </li>

            <li class="o-footer__item">
              <a class="o-footer__link" href="/pages/reglement-jeu-concours">Satisfait Et Remboursé</a>
            </li>

        </ul>
      </div>
      <div class="o-grid__col-s-4 o-grid__col--offset-s-1 o-grid__col-m-2">
        <h4 class="o-footer__title">Contactez-nous</h4>
        <ul class="o-footer__list">

            <li class="o-footer__item">01 76 42 00 56</li>


            <li class="o-footer__item">
              <a class="o-footer__link" href="mailto:hello@soshape.com">hello@soshape.com</a>
            </li>

        </ul>
        <ul class="o-footer__list-social">
          <li class="o-footer__item">
            <a class="o-footer__link" href="https://www.instagram.com/soshapeparis" target="_blank">
              <svg class="o-ico o-ico--instagram">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#social-instagram"></use>
              </svg>
            </a>
          </li>
          <li class="o-footer__item">
            <a class="o-footer__link" href="https://www.facebook.com/Soshape" target="_blank">
              <svg class="o-ico o-ico--facebook">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#social-facebook"></use>
              </svg>
            </a>
          </li>
          <li class="o-footer__item">
            <a class="o-footer__link" href="https://twitter.com/soshapeparis" target="_blank">
              <svg class="o-ico o-ico--twitter">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#social-twitter"></use>
              </svg>
            </a>
          </li>
        </ul>
        <ul class="o-footer__list">
          <li class="o-footer__item"></li>
          <li class="o-footer__item o-footer__credits">© 2017 So Shape</li>
        </ul>
      </div>
      <div class="o-grid__col-m-1 o-grid__col-s-2 u-self-align-bottom">
        <button class="o-footer__logo o-button--reset" href="https://www.soshape.com">
          <svg class="o-ico o-ico--logo">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
          </svg>
          <audio id="sosang" src="//cdn.shopify.com/s/files/1/0249/9003/t/7/assets/sosang.mp3?11903968464906439981"></audio>
        </button>
      </div>
    </div>
  </div>
</footer>

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>
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
