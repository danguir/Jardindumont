<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) {
			echo ' :';
		} ?><?php bloginfo( 'name' ); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">

	<?php wp_head(); ?>

	<?php function wow_init() { ?>
        <script type="text/javascript">
            new WOW().init();
        </script>
	<?php } ?>

</head>

<body <?php body_class(); ?>>

<!--		 wrapper -->
<!--		<div class="wrapper">-->
<!---->
<!--			<!-- header -->
<!--			<header class="hidden-xs header clear" role="banner">-->
<!--					<div id="vertical-bar" class="vertical-bar">-->
<!---->
<!--						<button class="menu-button" id="open-button">-->
<!--							<img src="-->
<?php //echo get_template_directory_uri();?><!--/img/burger-vert.png" id="burger" class="burger burger-vert"/>-->
<!--							<img src="-->
<?php //echo get_template_directory_uri();?><!--/img/burger.png" id="burger" class="burger burger-blanc"/>-->
<!--						</button>-->
<!--						<div class="logo" id="logo">-->
<!--							<a href="--><?php //echo home_url(); ?><!--">-->
<!--								<img src="-->
<?php //echo get_template_directory_uri(); ?><!--/img/logo.png" width="460" alt="Logo" class="logo-img">-->
<!--							</a>-->
<!--						</div>-->
<!--        	<ul class="list-inline" >-->
<!--            <li>-->
<!--                <a href="/my-account/">-->
<!--									<img src="-->
<?php //echo get_template_directory_uri(); ?><!--/img/user.png" alt="user" class="user-icon">                    <p>-->
<!--                </a>-->
<!--        		</li>-->
<!--		        <li>-->
<!--                <a href="/cart/">-->
<!--									<img src="-->
<?php //echo get_template_directory_uri(); ?><!--/img/cart.png" alt="cart" class="cart-icon">                    <p>-->
<!--	            </a>-->
<!--		        </li>-->
<!--            </ul>-->
<!--    </div>-->

<div class="l-header-fixed">
    <header class="l-header">
        <div class="l-header-burger">
            <a href="#" class="menu-button" id="open-button">
                <img src="<?php echo get_template_directory_uri(); ?>/img/MENU.png" width="60" id="burger"/>
            </a>
        </div>

        <div class="l-header-logo">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" width="368" alt="Logo">
            </a>
        </div>

        <div class="l-header-cart">
            <a href="/my-account/">
                <?php if(!is_user_logged_in()): ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/sign_in.png" width="60" alt="user" class="user-icon">
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/signed_in.png" width="60" alt="user" class="user-icon">
                <?php endif; ?>
            </a>
            <a href="/cart/" style="position: relative;">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cart.png" width="60" alt="cart" class="cart-icon">
                <?php if (WC()->cart->get_cart_contents_count() > 0): ?>
                    <span class="l-header-cart-number"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                <?php endif; ?>
            </a>
        </div>

        <!--img src='<?php //echo get_template_directory_uri(); ?>/img/fille.png' class='gallerythumbnail'-->

    </header>
    <!-- /header -->
</div>

<div class="container">
    <div class="menu-wrap">
        <!-- nav -->
        <nav class="nav" role="navigation">
			<?php html5blank_nav(); ?>
            <div class="social">
                <ul class="list-inline">
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/insta.png"
                                         alt="Instagram"/></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png"
                                         alt="Facebook"/></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png"
                                         alt="Twitter"></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/pint.png"
                                         alt="Pintrest"></a>
                    </li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/youtube.png"
                                         alt="Youtube"></a></li>
                </ul>
            </div>
        </nav>
        <button class="close-button" id="close-button"></button>
    </div>

<!--    <div class="content-wrap">-->
<!---->
<!--    </div>-->
    <!-- /Menu wrap -->
</div><!-- /container -->

<!-- version mobile -->
<header class="visible-xs-12 header clear" role="banner">
    <div class="vertical-bar-mobile">
        <button class=" hidden-sm hidden-md hidden-lg menu-button" id="open-button-mobile">
            <img src="<?php echo get_template_directory_uri(); ?>/img/burger-vert.png" id="burger-mobile"
                 class="burger burger-vert"/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/burger.png" id="burger-mobile"
                 class="burger burger-blanc"/>
        </button>

        <div class="logo center hidden-sm hidden-md hidden-lg">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
            </a>
        </div>
        <ul class="hidden-sm hidden-md hidden-lg list-inline">
            <li>
                <a href="/cart/">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cart.png" alt="cart" class="cart-icon">
                    <p>
                </a>
            </li>
        </ul>
    </div>

    <div class="container">
        <div class="menu-wrap">
            <!-- nav -->
            <nav class="nav" role="navigation">
                <ul class="hidden-sm hidden-md hidden-lg list-inline">
                    <li>
                        <a href="/my-account/">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/user.png" alt="user"
                                 class="user-icon">
                            <p>
                        </a>
                    </li>
                </ul>

				<?php html5blank_nav(); ?>
                <div class="social">
                    <ul class="list-inline">
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/insta.png"
                                             alt="Instagram"/></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png"
                                             alt="Facebook"/></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png"
                                             alt="Twitter"></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/pint.png"
                                             alt="Pintrest"></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/youtube.png"
                                             alt="Youtube"></a></li>
                    </ul>
                </div>
            </nav>
            <button class="close-button" id="close-button-mobile"></button>
        </div>

<!--        <div class="content-wrap">-->
<!--        </div>-->
        <!-- /Menu wrap -->
    </div><!-- /container -->
</header>
<!-- /header -->
