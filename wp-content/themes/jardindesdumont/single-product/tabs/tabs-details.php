<?php
    global $post, $product;
    $informations = get_field('informations_sur_le_produit');
    $terms = get_the_terms( $product->get_id(), 'product_cat' );
    $category_name = $terms[0]->name;
?>
<?php if ($informations): ?>
<div class="l-product-info clearfix">
	<div class="col-xs-12 col-md-5">
		<div class="l-product-info-description">
			<p style="margin: 0px;">
				<?php echo $informations['description']; ?>
			</p>
		</div>

		<div class="l-product-info-image-univers hidden-xs hidden-sm">
            <?php
                switch ($category_name){
                    case "Débutant":
	                    echo '<img class="hidden-xs hidden-sm" src="'.get_template_directory_uri().'/img/papa.png" alt="Julien Dumont - Jardin des Dumont">';
	                    break;
	                case "Enfant":
		                echo '<img class="hidden-xs hidden-sm" src="'.get_template_directory_uri().'/img/fille.png" alt="Louise Dumont - Jardin des Dumont">';
		                break;
	                case "Expérimenté":
		                echo '<img class="hidden-xs hidden-sm" src="'.get_template_directory_uri().'/img/maman.png" alt="Sophie Dumont - Jardin des Dumont">';
		                break;
	                case "Jardigeek":
		                echo '<img class="hidden-xs hidden-sm" src="'.get_template_directory_uri().'/img/fils.png" alt="Pierre Dumont - Jardin des Dumont">';
		                break;
                    default:
	                    echo '<img class="hidden-xs hidden-sm" src="'.get_template_directory_uri().'/img/papa.png" alt="Julien Dumont - Jardin des Dumont">';
                        break;
                }
            ?>
		</div>
	</div>

	<div class="col-xs-12 col-md-7">
		<table class="l-product-info-table">
			<tr>
				<td class="td-title" colspan="2">Contenu du kit</td>
			</tr>
			<?php if ($informations['caracteristiques']['materiels']): ?>
                <tr>
                    <td class="td-bold">Matériels</td>
                    <td><?php echo $informations['caracteristiques']['materiels']; ?></td>
                </tr>
			<?php endif; ?>
			<?php if ($informations['caracteristiques']['plantes']): ?>
                <tr>
                    <td class="td-bold">Plantes</td>
                    <td><?php echo $informations['caracteristiques']['plantes']; ?></td>
                </tr>
			<?php endif; ?>
            <?php if ($informations['caracteristiques']['graines']): ?>
			<tr>
				<td class="td-bold">Graines</td>
				<td><?php echo $informations['caracteristiques']['graines']; ?></td>
			</tr>
            <?php endif; ?>
	        <?php if ($informations['caracteristiques']['boitier']): ?>
			<tr>
				<td class="td-bold">Contenant</td>
				<td><?php echo $informations['caracteristiques']['boitier']; ?></td>
			</tr>
	        <?php endif; ?>
	        <?php if ($informations['caracteristiques']['terreau']): ?>
			<tr>
				<td class="td-bold">Terreau</td>
				<td><?php echo $informations['caracteristiques']['terreau']; ?></td>
			</tr>
	        <?php endif; ?>
		    <?php if ($informations['caracteristiques']['guide_dentretien']): ?>
			<tr>
				<td class="td-bold">Guide d'entretien</td>
				<td><?php echo $informations['caracteristiques']['guide_dentretien']; ?></td>
			</tr>
		    <?php endif; ?>
			<tr>
				<td class="td-title" colspan="2">Caracteristiques</td>
			</tr>
	        <?php if ($informations['contenu_du_kit']['periode']): ?>
			<tr>
				<td class="td-bold">Période de plantation</td>
				<td><?php echo $informations['contenu_du_kit']['periode']; ?></td>
			</tr>
	        <?php endif; ?>
	        <?php if ($informations['contenu_du_kit']['periode_de_recolte']): ?>
			<tr>
				<td class="td-bold">Période de récolte</td>
				<td><?php echo $informations['contenu_du_kit']['periode_de_recolte']; ?></td>
			</tr>
	        <?php endif; ?>
		    <?php if ($informations['contenu_du_kit']['zone_dexplosition']): ?>
			<tr>
				<td class="td-bold">Zone d'exposition</td>
				<td><?php echo $informations['contenu_du_kit']['zone_dexplosition']; ?></td>
			</tr>
	        <?php endif; ?>
			<?php if ($informations['contenu_du_kit']['climat']): ?>
			<tr>
				<td class="td-bold">Climat</td>
				<td><?php echo $informations['contenu_du_kit']['climat']; ?></td>
			</tr>
			<?php endif; ?>
		</table>
	</div>
</div>
<?php endif; ?>