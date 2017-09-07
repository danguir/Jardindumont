<?php
	$informations = get_field('informations_sur_le_produit');
?>
<?php if ($informations): ?>
	<div class="l-product-entretien clearfix">
		<div class="col-xs-12">
			<div class="l-product-info-entretien">
				<p>
					<?php echo $informations['texte_dentretien_du_produit']; ?>
				</p>
			</div>
		</div>

		<div class="col-xs-12 col-md-5">
			<div class="l-product-entretien-planning clearfix">
				<div class="<?php echo $informations['planning_dentretien']['m_janvier']; ?>">Janvier</div>
				<div class="<?php echo $informations['planning_dentretien']['m_fevrier']; ?>">Février</div>
				<div class="<?php echo $informations['planning_dentretien']['m_mars']; ?>">Mars</div>
				<div class="<?php echo $informations['planning_dentretien']['m_avril']; ?>">Avril</div>
				<div class="<?php echo $informations['planning_dentretien']['m_mai']; ?>">Mai</div>
				<div class="<?php echo $informations['planning_dentretien']['m_juin']; ?>">Juin</div>
				<div class="<?php echo $informations['planning_dentretien']['m_juillet']; ?>">Juillet</div>
				<div class="<?php echo $informations['planning_dentretien']['m_aout']; ?>">Août</div>
				<div class="<?php echo $informations['planning_dentretien']['m_septembre']; ?>">Septembre</div>
				<div class="<?php echo $informations['planning_dentretien']['m_octobre']; ?>">Octobre</div>
				<div class="<?php echo $informations['planning_dentretien']['m_novembre']; ?>">Novembre</div>
				<div class="<?php echo $informations['planning_dentretien']['m_decembre']; ?>">Décembre</div>
			</div>
			<div class="l-product-entretien-planning-legend">
				<span class="ui-button ui-button-primary">PLANTATION</span> <span class="ui-button ui-button-yellow">RECOLTE</span>
			</div>
		</div>

		<div class="col-xs-12 col-md-1 hidden-xs hidden-sm"></div>

		<div class="col-xs-12 col-md-3">
			<div class="l-product-entretien-info">
				<div class="l-product-entretien-info-image">
					<img style="margin-right: 20px; height: 65px;" src="<?php echo get_template_directory_uri(); ?>/img/icons/ui-icon-soleil-64.png" alt="Soleil">
					<img style="margin-bottom: 10px; height: 65px;" src="<?php echo get_template_directory_uri(); ?>/img/icons/ui-icon-semiombre-64.png" alt="Demi-Ombre">
				</div>
				<p style="text-transform: uppercase;"><strong>Exposition</strong></p>
				<p><?php if(count($informations['exposition'] > 1)) { echo $informations['exposition'][0]." ou ".$informations['exposition'][1]; } else {  echo $informations['exposition'][0]; } ?></p>
			</div>
		</div>

		<div class="col-xs-12 col-md-3">
			<div class="l-product-entretien-info">
				<div class="l-product-entretien-info-image">
					<img style="height: 45px;" src="<?php echo get_template_directory_uri(); ?>/img/icons/ui-icon-humidite-128.png" alt="Arosage">
				</div>
				<p style="text-transform: uppercase;"><strong>Arosage</strong></p>
				<p><?php echo $informations['arosage'] ?></p>
			</div>
		</div>
	</div>
<?php endif; ?>