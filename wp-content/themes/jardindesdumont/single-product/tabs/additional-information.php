<?php
/**
 * Additional Information tab
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/additional-information.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author        WooThemes
 * @package       WooCommerce/Templates
 * @version       3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

$heading = esc_html( apply_filters( 'woocommerce_product_additional_information_heading', __( 'Additional information', 'woocommerce' ) ) );

?>

<div class="row">
	<div class="col-md-9">
		<div class="row">
				<div class="col-md-8 banner-panel">
						<p>
							Le Lorem Ipsum est simplement du faux texte employé dans la composition et
							la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie
							depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.
						</p>
						<div class="col-md-8 banner-panel">
								<img src="<?php echo get_template_directory_uri(); ?>/img/product/dad.png" alt="papa" class="">
						</div>
					</div>
		</div>
	</div>
<div class="col-md-11">
			<table class="table table-condensed table-responsive">
				<thead>
						<tr>
								<th colspan="2">Contenu du kit</th>
						</tr>
				</thead>

					<tbody>
						<tr>
							<th>Graines</th>
							<td>Persil, radis, laitus, mente, lavender, basilic</td>
						</tr>
						<tr>
							<th>Sol</th>
							 <td>Sol humifière : idéale pour les petits légumes</td>
						 </tr>
					 <th>Boitier</th>
 						 <td>Boitier à construire soi-même, notice inclus</td>
 					 </tr>
					 <th>Guide d'entretien</th>
						 <td>Tous les conseils d'entretien à porte de main</td>
					 </tr>
					 </tbody>
			</table>
			<table class="table">
				<thead>
						<tr>
								<th colspan="2">caracteristiques</th>
						</tr>
				</thead>
					<tbody>
						<tr>
							<th scope="row">Période de plantation</th>
							<td>De février à mai</td>
						</tr>
						<tr>
							<th scope="row">Période de récolte</th>
							 <td>En août-septembre</td>
						 </tr>
					 <th scope="row">Zone d'exposition</th>
 						 <td>Semi-ombre ; ensoleillée</td>
 					 </tr>
					 <th scope="row">Climat</th>
						 <td>Recommandé en bord de mer Résiste aux embruns et au vent ;résistant aux vents ;résistant au climat montagnard ; climat tempéré</td>
					 </tr>
					 </tbody>
			</table>
</div>
</div>



<?php if ( $heading ) : ?>
	<h2><?php echo $heading; ?></h2>
<?php endif; ?>

<?php do_action( 'woocommerce_product_additional_information', $product ); ?>
