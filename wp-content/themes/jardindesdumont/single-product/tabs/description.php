<?php
/**
 * Description tab
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post;

$heading = esc_html( apply_filters( 'woocommerce_product_description_heading', __( 'Description', 'woocommerce' ) ) );

?>

<div class="row">
	<div class="col-md-4">

		<div class="row">
				<div class="col-md-8 banner-panel">
						<p>
							Le Lorem Ipsum est simplement du faux texte employé dans la composition et
							la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie
							depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.
						</p>
						<div class="col-md-8 banner-panel">
						<img src="<?php echo get_template_directory_uri(); ?>/img/product/dad.png" alt="papa" class="">                    <p>
</div>
						</div>
		</div>
	</div>
  <div class="col-md-8">
		<div class="table-responsive">
			<table class="table">
				  <thead>
						<tr class="center">
							 Contenu du kit
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">Graines</th>
							<td>Persil, radis, laitus, mente, lavender, basilic</td>
						</tr>
						<tr>
							<th scope="row">Sol</th>
							 <td>Sol humifière : idéale pour les petits légumes</td>
						 </tr>
					 <th scope="row">Boitier</th>
 						 <td>Boitier à construire soi-même, notice inclus</td>
 					 </tr>
					 <th scope="row">Guide d'entretien</th>
						 <td>Tous les conseils d'entretien à porte de main</td>
					 </tr>
					 </tbody>
			</table>
			<table class="table">
				  <thead>
						<tr>
							 Contenu du kit
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">Graines</th>
							<td>Persil, radis, laitus, mente, lavender, basilic</td>
						</tr>
						<tr>
							<th scope="row">Sol</th>
							 <td>Sol humifière : idéale pour les petits légumes</td>
						 </tr>
					 <th scope="row">Boitier</th>
 						 <td>Boitier à construire soi-même, notice inclus</td>
 					 </tr>
					 <th scope="row">Guide d'entretien</th>
						 <td>Tous les conseils d'entretien à porte de main</td>
					 </tr>
					 </tbody>
			</table>
		</div>

  </div>
</div>




<?php if ( $heading ) : ?>
  <h2><?php echo $heading; ?></h2>
<?php endif; ?>

<?php the_content(); ?>
