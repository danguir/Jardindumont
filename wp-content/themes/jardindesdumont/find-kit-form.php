<?php
/*
Template Name: Find Kit Form
*/
?>



<?php get_header(); ?>

<section class="kit-form">
	<div class="container">

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h1>Trouvez le kit de vos rêves</h1>
		</div>
			<div class="wizard">
					<div class="wizard-inner">
							<div class="connecting-line"></div>
							<ul class="nav nav-tabs" role="tablist">

									<li role="presentation" class="active">
											<a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
													<span class="round-tab">1</span>
											</a>
									</li>

									<li role="presentation" class="disabled">
											<a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
													<span class="round-tab">2</span>
											</a>
									</li>
									<li role="presentation" class="disabled">
											<a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
													<span class="round-tab">3</span>
											</a>
									</li>
									<li role="presentation" class="disabled">
											<a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 4">
													<span class="round-tab">4</span>
											</a>
									</li>
									<li role="presentation" class="disabled">
											<a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 5">
													<span class="round-tab">5</span>
											</a>
									</li>
									<li role="presentation" class="disabled">
											<a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 6">
													<span class="round-tab">6</span>
											</a>
									</li>

									<li role="presentation" class="disabled">
											<a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
													<span class="round-tab">7</span>
											</a>
									</li>
							</ul>
					</div>

					<form role="form">
							<div class="tab-content">
									<div class="tab-pane active" role="tabpanel" id="step1">
											<h3>Vous cherchez un kit pour ...</h3>
											<div align="center" id="affected">
													<input type="radio" name="set 1" title="Bord de la fênetre" >
													<input type="radio" name="set 1" title="Balcon">
													<input type="radio" name="set 1" title="Espace interieur">
													<input type="radio" name="set 1" title="exterieur">
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
													<button type="button" class="btn btn-primary next-step">Save and continue</button>
											</div>
									</div>
									<div class="tab-pane" role="tabpanel" id="step2">
											<h3>Votre passion c’est ... </h3>
											<div align="center" id="affected-step2">
													<input type="radio" name="set 2" title="Légumes" >
													<input type="radio" name="set 2" title="Fleurs">
													<input type="radio" name="set 2" title="Fruits">
													<input type="radio" name="set 2" title="Plantes tout simplement">
													<input type="radio" name="set 2" title="Je ne sais pas">
											</div>

											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
													<button type="button" class="btn btn-default prev-step">Previous</button>
													<button type="button" class="btn btn-primary next-step">Save and continue</button>
											</div>
									</div>

									<div class="tab-pane" role="tabpanel" id="step3">
											<h3>C’est un cadeau ?</h3>
											<div align="center" id="affected-step3">
													<input type="radio" name="set 3" title="Non, c’est pour moi" >
													<input type="radio" name="set 3" title="Oui, c’est pour un proche">
													<input type="radio" name="set 3" title="C’est pour un enfant">
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
													<button type="button" class="btn btn-default prev-step">Previous</button>
													<button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button>
											</div>
									</div>
									<div class="tab-pane" role="tabpanel" id="step4">
											<h3>Débutant ou plutôt expert ? /h3>
											<div align="center" id="affected-step4">
													<input type="radio" name="set 4" title="débutant" >
													<input type="radio" name="set 4" title="moyen">
													<input type="radio" name="set 4" title="expert">
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
													<button type="button" class="btn btn-default prev-step">Previous</button>
													<button type="button" class="btn btn-primary next-step">Save and continue</button>
											</div>
									</div>
									<div class="tab-pane" role="tabpanel" id="step5">
											<h3>Vous aimez éléctronique ?</h3>
											<div align="center" id="affected-step5">
													<input type="radio" name="set 5" title="oui" >
													<input type="radio" name="set 5" title="moyen">
													<input type="radio" name="set 5" title="non">
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
													<button type="button" class="btn btn-default prev-step">Previous</button>
													<button type="button" class="btn btn-primary next-step">Save and continue</button>
											</div>
									</div>
									<div class="tab-pane" role="tabpanel" id="step6">
											<h3>Votre budjet ...</h3>
											<div align="center" id="affected-step6">
													<input type="radio" name="set 6" title="10–50€" >
													<input type="radio" name="set 6" title="50–100€">
													<input type="radio" name="set 6" title="100–150€">
													<input type="radio" name="set 6" title="150€ +">
											</div>
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
													<button type="button" class="btn btn-default prev-step">Previous</button>
													<button type="button" class="btn btn-primary next-step">Save and continue</button>
												</div>
									</div>
									<div class="tab-pane" role="tabpanel" id="complete">
											<h3>Complete</h3>
											<p>You have successfully completed all steps.</p>
									</div>
									<div class="clearfix"></div>
							</div>
					</form>
			</div>
		</div>
</section>



<?php get_footer(); ?>
