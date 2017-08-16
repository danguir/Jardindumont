<?php
/*
Template Name: checkout
*/
?>



<?php get_header(); ?>

<section class="checkout-form">
	<div class="container">

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h1>Trouvez le kit de vos rêves</h1>
		</div>
			<div class="wizard">
					<div class="wizard-inner">

							<ul class="nav nav-tabs" role="tablist">
								<div class="connecting-line line-1"><img src="/wp-content/themes/jardindesdumont/img/checkout/step-active.png" alt=""></div>
									<li role="presentation" class="active">
											<a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
													<span class="round-tab">1</span>
											</a>
											<span class="etape-valider">étape</br>validé</span>
									</li>
									<div class="connecting-line line-2"><img src="/wp-content/themes/jardindesdumont/img/checkout/next-step.png" alt=""></div>
									<li role="presentation" class="disabled">
											<a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
													<span class="round-tab">2</span>
											</a>
											<span class="etape-en-cours">étape</br>en cours</span>
									</li>
									<div class="connecting-line line-3"><img src="/wp-content/themes/jardindesdumont/img/checkout/next-step.png" alt=""></div>
									<li role="presentation" class="disabled">
											<a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
													<span class="round-tab">3</span>
											</a>
											<span class="etape-suivante">etape</br>suivante</span>
									</li>
									<div class="connecting-line line-4"><img src="/wp-content/themes/jardindesdumont/img/checkout/next-step.png" alt=""></div>
									<li role="presentation" class="disabled">
											<a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Step 4">
													<span class="round-tab">4</span>
											</a>
											<span class="etape-suivante">etape</br>suivante</span>
									</li>
									<div class="connecting-line line-5"><img src="/wp-content/themes/jardindesdumont/img/checkout/next-step.png" alt=""></div>
									<li role="presentation" class="disabled">
											<a href="#step5" data-toggle="tab" aria-controls="step5" role="tab" title="Step 5">
													<span class="round-tab">5</span>
											</a>
											<span class="etape-suivante">etape</br>suivante</span>
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
											<h3>Validation de panier</h3>
											<!-- si tu récupére le panier ca doit aller pour le style ?? -->
											<div class="woocommerce">
											<section class="cart">
												<div class="container">
												<form class="woocommerce-cart-form" action="http://dev.jardindumont.local/cart/" method="post">

												<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
													<thead>
														<tr>
															<th class="product-thumbnail">&nbsp;</th>
															<th class="product-name">Produits</th>
															<th class="product-price">Prix</th>
															<th class="product-quantity">Quantité</th>
															<th class="product-subtotal">Totale</th>
															<th class="product-remove">&nbsp;</th>
														</tr>
													</thead>
													<tbody>
																<tr class="woocommerce-cart-form__cart-item cart_item">
																	<td class="product-thumbnail">
																		<a href="http://dev.jardindumont.local/shop/kit-plante-sensitive/"><img width="180" height="180" src="//dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-180x180.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" srcset="//dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-180x180.jpg 180w, //dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-150x150.jpg 150w, //dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-250x250.jpg 250w, //dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-768x768.jpg 768w, //dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-700x700.jpg 700w, //dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-120x120.jpg 120w, //dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-300x300.jpg 300w, //dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-600x600.jpg 600w, //dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto.jpg 1600w" sizes="(max-width: 180px) 100vw, 180px">
																		</a>
																	</td>
																	<td class="product-name" data-title="Produit">
																		<a href="http://dev.jardindumont.local/shop/kit-plante-sensitive/">Kit "Plante sensitive"</a>
																	</td>
																	<td class="product-price" data-title="Prix">
																		<span class="woocommerce-Price-amount amount">35<span class="woocommerce-Price-currencySymbol">€</span></span>
																	</td>
																	<td class="product-quantity" data-title="Quantité">
																		<div class="quantity">
																			<span class="woocommerce-Price-amount amount">x1<span class="woocommerce-Price-currencySymbol"></span></span>
																		</div>
																	</td>
																	<td class="product-subtotal" data-title="Total">
																		<span class="woocommerce-Price-amount amount">35<span class="woocommerce-Price-currencySymbol">€</span></span>
																	</td>
																	<td class="product-remove">
																		<a href="http://dev.jardindumont.local/cart/?remove_item=f340f1b1f65b6df5b5e3f94d95b11daf&amp;_wpnonce=4ac92c7c52" class="remove" aria-label="Enlever cet élément" data-product_id="241" data-product_sku="">×</a>
																	</td>
																</tr>

																<tr class="woocommerce-cart-form__cart-item cart_item">
																	<td class="product-thumbnail">
																		<a href="http://dev.jardindumont.local/shop/kit-petit-scientifique/"><img width="180" height="180" src="//dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-180x180.jpeg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" srcset="//dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-180x180.jpeg 180w, //dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-150x150.jpeg 150w, //dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-250x250.jpeg 250w, //dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-768x768.jpeg 768w, //dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-700x700.jpeg 700w, //dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-120x120.jpeg 120w, //dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-300x300.jpeg 300w, //dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-600x600.jpeg 600w, //dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto.jpeg 1600w" sizes="(max-width: 180px) 100vw, 180px"></a>						</td>
																	<td class="product-name" data-title="Produit">
																		<a href="http://dev.jardindumont.local/shop/kit-petit-scientifique/">Kit "Petit scientifique"</a>
																	</td>
																	<td class="product-price" data-title="Prix">
																		<span class="woocommerce-Price-amount amount">20<span class="woocommerce-Price-currencySymbol">€</span></span>
																	</td>
																	<td class="product-quantity" data-title="Quantité">
																			<div class="quantity">
																				<span class="woocommerce-Price-amount amount">x1<span class="woocommerce-Price-currencySymbol"></span></span>
																			</div>
																		</td>
																	<td class="product-subtotal" data-title="Total">
																		<span class="woocommerce-Price-amount amount">20<span class="woocommerce-Price-currencySymbol">€</span></span>
																	</td>
																	<td class="product-remove">
																		<a href="http://dev.jardindumont.local/cart/?remove_item=3cec07e9ba5f5bb252d13f5f431e4bbb&amp;_wpnonce=4ac92c7c52" class="remove" aria-label="Enlever cet élément" data-product_id="247" data-product_sku="">×</a>
																	</td>
																</tr>

																<tr class="woocommerce-cart-form__cart-item cart_item">
																	<td class="product-thumbnail">
																		<a href="http://dev.jardindumont.local/shop/kit-ca-pousse/"><img width="180" height="180" src="//dev.jardindumont.local/wp-content/uploads/2017/08/06-180x180.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" srcset="//dev.jardindumont.local/wp-content/uploads/2017/08/06-180x180.jpg 180w, //dev.jardindumont.local/wp-content/uploads/2017/08/06-150x150.jpg 150w, //dev.jardindumont.local/wp-content/uploads/2017/08/06-250x250.jpg 250w, //dev.jardindumont.local/wp-content/uploads/2017/08/06-120x120.jpg 120w, //dev.jardindumont.local/wp-content/uploads/2017/08/06-360x360.jpg 360w, //dev.jardindumont.local/wp-content/uploads/2017/08/06-300x300.jpg 300w, //dev.jardindumont.local/wp-content/uploads/2017/08/06.jpg 526w" sizes="(max-width: 180px) 100vw, 180px">
																		</a>
																	</td>
																	<td class="product-name" data-title="Produit">
																		<a href="http://dev.jardindumont.local/shop/kit-ca-pousse/">Kit "Ca pousse"</a>
																	</td>
																	<td class="product-price" data-title="Prix">
																		<span class="woocommerce-Price-amount amount">10<span class="woocommerce-Price-currencySymbol">€</span></span>
																	</td>
																	<td class="product-quantity" data-title="Quantité">
																			<div class="quantity">
																				<span class="woocommerce-Price-amount amount">x1<span class="woocommerce-Price-currencySymbol"></span></span>
																			</div>
																	</td>
																	<td class="product-subtotal" data-title="Total">
																		<span class="woocommerce-Price-amount amount">10<span class="woocommerce-Price-currencySymbol">€</span></span>
																	</td>
																	<td class="product-remove">
																		<a href="http://dev.jardindumont.local/cart/?remove_item=0fcbc61acd0479dc77e3cccc0f5ffca7&amp;_wpnonce=4ac92c7c52" class="remove" aria-label="Enlever cet élément" data-product_id="531" data-product_sku="">×</a>
																	</td>
																</tr>
																<tr class="woocommerce-cart-form__cart-item cart_item">
																	<td class="product-thumbnail">
																		<a href="http://dev.jardindumont.local/shop/kit-mon-jardin-secret/"><img width="180" height="180" src="//dev.jardindumont.local/wp-content/uploads/2017/08/07-180x180.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" srcset="//dev.jardindumont.local/wp-content/uploads/2017/08/07-180x180.jpg 180w, //dev.jardindumont.local/wp-content/uploads/2017/08/07-150x150.jpg 150w, //dev.jardindumont.local/wp-content/uploads/2017/08/07-250x250.jpg 250w, //dev.jardindumont.local/wp-content/uploads/2017/08/07-120x120.jpg 120w, //dev.jardindumont.local/wp-content/uploads/2017/08/07-360x360.jpg 360w, //dev.jardindumont.local/wp-content/uploads/2017/08/07-300x300.jpg 300w, //dev.jardindumont.local/wp-content/uploads/2017/08/07.jpg 526w" sizes="(max-width: 180px) 100vw, 180px"></a>
																	</td>
																	<td class="product-name" data-title="Produit">
																		<a href="http://dev.jardindumont.local/shop/kit-mon-jardin-secret/">Kit "Mon jardin secret"</a>
																	</td>
																	<td class="product-price" data-title="Prix">
																		<span class="woocommerce-Price-amount amount">15<span class="woocommerce-Price-currencySymbol">€</span></span>
																	</td>
																	<td class="product-quantity" data-title="Quantité">
																		<div class="quantity">
																			<span class="woocommerce-Price-amount amount">x1<span class="woocommerce-Price-currencySymbol"></span></span>
																		</div>
																	</td>
																	<td class="product-subtotal" data-title="Total">
																		<span class="woocommerce-Price-amount amount">15<span class="woocommerce-Price-currencySymbol">€</span></span>
																	</td>
																	<td class="product-remove">
																		<a href="http://dev.jardindumont.local/cart/?remove_item=df877f3865752637daa540ea9cbc474f&amp;_wpnonce=4ac92c7c52" class="remove" aria-label="Enlever cet élément" data-product_id="533" data-product_sku="">×</a>
																	</td>
																</tr>
														</tbody>
												</table>
												</form>
											</div>
											</section>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
													<button type="button" class="ui-button ui-button-primary next-step">valider Panier</button>
											</div>

									</div>
									<div class="tab-pane" role="tabpanel" id="step2">
											<h3>informations personnelles</h3>

											

											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
													<button type="button" class="ui-button prev-step">Previous</button>
													<button type="button" class="ui-button ui-button-primary next-step">Etape suivante</button>
											</div>
									</div>

									<div class="tab-pane" role="tabpanel" id="step3">
											<h3>Modes de livraison</h3>
											<section class="methode-paiement">
												<div class="container ">
											<div class="row">
													<div class="col-md-4 col-xs-12">
														<div class="border-compte">
															<img  src="<?php echo get_template_directory_uri();?>/img/checkout/adresse.png"  class="center-block img-responsive" alt="Responsive image">
															<a class="link-compte" href="#">classique</a>
															<p>2€ / 5<span> jours</span></p>
														</div>
													</div>
													<div class="col-md-4 col-xs-12">
														<div class="border-compte">
															<img style="width: 118px;" src="<?php echo get_template_directory_uri();?>/img/checkout/express.png" class="center-block img-responsive" alt="Responsive image">
															<a class="link-compte" href="#">express</a>
															<p>9€ / 2 <span> jours</span></p>
													</div>
													</div>
												</div>
											</div>
											</section>

											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
													<!--button type="button" class="ui-button prev-step">Previous</button-->
													<button type="button" class="ui-button ui-button-primary next-step">confirmer</button>
											</div>
									</div>

									<div class="tab-pane" role="tabpanel" id="step4">
											<h3>Modes de livraison</h3>
											<div align="center" id="affected-step4">
													<input type="radio" name="set 4" title="débutant" >
													<input type="radio" name="set 4" title="moyen">
													<input type="radio" name="set 4" title="expert">
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
												<button type="button" class="ui-button prev-step">Previous</button>
													<button type="button" class="ui-button ui-button-primary next-step">confirmer</button>
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
												<button type="button" class="ui-button prev-step">Previous</button>
													<button type="button" class="ui-button ui-button-primary next-step">Etape suivante</button>
											</div>
									</div>
									<div class="tab-pane" role="tabpanel" id="complete">
											<h3>Voila notre proposition </h3>
											<ul>
											<li class=" center post-241 product type-product status-publish has-post-thumbnail product_cat-jardigeek product_tag-jardigeek last instock shipping-taxable purchasable product-type-simple">
												<a href="http://dev.jardindumont.local/product/kit-plante-sensitive/" class="woocommerce-LoopProduct-link"><img width="300" height="300" src="http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="00_MainPhoto" title="00_MainPhoto" srcset="http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-300x300.jpg 300w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-150x150.jpg 150w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-250x250.jpg 250w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-768x768.jpg 768w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-700x700.jpg 700w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-120x120.jpg 120w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-360x360.jpg 360w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-50x50.jpg 50w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto-900x900.jpg 900w, http://dev.jardindumont.local/wp-content/uploads/2017/07/00_MainPhoto.jpg 1600w" sizes="(max-width: 300px) 100vw, 300px"><h2 class="woocommerce-loop-product__title">Kit «&nbsp;Plante sensitive&nbsp;»</h2>
												<span class="price"><span class="woocommerce-Price-amount amount">Prix à l'unité : 35<span class="woocommerce-Price-currencySymbol">€</span></span></span>
											</a></li>
										</ul>


									</div>
									<div class="clearfix"></div>
							</div>
					</form>
			</div>
		</div>
</section>



<?php get_footer(); ?>
