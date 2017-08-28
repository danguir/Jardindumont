<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

			<?php 	function wow_init() { ?>
					<script type="text/javascript">
						new WOW().init();
					</script>
				<?php } ?>

	</head>

	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">


					<div id="vertical-bar" class="vertical-bar">

						<button class="menu-button" id="open-button">
							<img src="<?php echo get_template_directory_uri();?>/img/burger-vert.png" id="burger" class="burger burger-vert"/>
							<img src="<?php echo get_template_directory_uri();?>/img/burger.png" id="burger" class="burger burger-blanc"/>
						</button>

						<div class="logo" id="logo">
							<a href="<?php echo home_url(); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
							</a>
						</div>

        	<ul class="list-inline" >
            <li>
                <a href="/my-account/">
									<img src="<?php echo get_template_directory_uri(); ?>/img/user.png" alt="user" class="user-icon">                    <p>
                </a>
        		</li>
		        <li>
                <a href="/cart/">
									<img src="<?php echo get_template_directory_uri(); ?>/img/cart.png" alt="cart" class="cart-icon">                    <p>
	            </a>
		        </li>
        </ul>
    </div>

		<!--img src='<?php //echo get_template_directory_uri(); ?>/img/fille.png' class='gallerythumbnail'-->

		<div class="container">
		<div class="menu-wrap">
		<!-- nav -->
		<nav class="nav" role="navigation">
			<?php html5blank_nav(); ?>
			<div class="social">
				<ul class="list-inline">
						<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/insta.png" alt="Instagram"/></a></li>
						<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="Facebook"/></a></li>
						<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt="Twitter"></a></li>
						<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/pint.png" alt="Pintrest"></a></li>
						<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/youtube.png" alt="Youtube"></a></li>
				</ul>
			</div>
		</nav>
		<button class="close-button" id="close-button"></button>
	</div>

	<div class="content-wrap">

	</div><!-- /Menu wrap -->

	</div><!-- /container -->




			</header>
			<!-- /header -->
