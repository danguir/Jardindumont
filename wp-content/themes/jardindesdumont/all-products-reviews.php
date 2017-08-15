<?php
/*
Template Name: Rating and Reviews

 */



get_header(); ?>


<div id="reviews" class="woocommerce-Reviews all-reviews">

	<div id="comments">
		<!--h2 class="woocommerce-Reviews-title">Reviews</h2-->
      <div class="container">
        <div class="col-md-12 center">
          <h2 class="center">Avis des clients</h2>
          <p>
            La Famille Dumont accorde une grande importance à la satisfaction du client et garantit une authenticité et une transparence des avis.
            Partagez avec nous vos impressions. Nous sommes à  votre écoute et avons besoin de vous pour vous satisfaire chaque jour davantage.
            A vos claviers !
            Un grand merci de toute la famille Dumont.   

          </p>
          <button class="ui-button ui-button-primary center">Laisser un avis</button>
        </div>

        <div class="col-md-12 images-review center">
    			<img src="http://dev.jardindumont.local/wp-content/themes/jardindesdumont/img/product/avis-client.png" alt="Logo" class="logo-img">
    			<img src="http://dev.jardindumont.local/wp-content/themes/jardindesdumont/img/product/avis-client-1.png" alt="Logo" class="avis-img">
    		</div>
        <div class="col-md-12">
			       <p class="woocommerce-noreviews">There are no reviews yet.</p>
        </div>
      </div>
	</div>

  <div class="col-md-12">
		<div id="review_form_wrapper">
			<div id="review_form">
					<div id="respond" class="comment-respond">
        		<span id="reply-title" class="comment-reply-title">Be the first to review “Kit «&nbsp;Petit Scientifique&nbsp;»” <small><a rel="nofollow" id="cancel-comment-reply-link" href="/product/kit-petit-scientifique/#respond" style="display:none;">Annuler la réponse.</a></small></span>
            <form action="http://dev.jardindumont.local/wp-comments-post.php" method="post" id="commentform" class="comment-form">
        				<div class="comment-form-rating">
                    <label for="rating">Your rating</label>
                    <p class="stars"><span><a class="star-1" href="#">1</a><a class="star-2" href="#">2</a><a class="star-3" href="#">3</a><a class="star-4" href="#">4</a><a class="star-5" href="#">5</a></span></p><select name="rating" id="rating" aria-required="true" required="" style="display: none;">
        							<option value="">Rate…</option>
        							<option value="5">Perfect</option>
        							<option value="4">Good</option>
        							<option value="3">Average</option>
        							<option value="2">Not that bad</option>
        							<option value="1">Very poor</option>
        						</select>
                </div>
                <p class="comment-form-comment"><label for="comment">Your review <span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required=""></textarea></p><p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Submit"> <input type="hidden" name="comment_post_ID" value="247" id="comment_post_ID">
                  <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                </p>
                  <input type="hidden" id="_wp_unfiltered_html_comment_disabled" name="_wp_unfiltered_html_comment" value="8862ea34ce"><script>(function(){if(window===window.parent){document.getElementById('_wp_unfiltered_html_comment_disabled').name='_wp_unfiltered_html_comment';}})();</script>
    		      </form>
	       </div><!-- #respond -->
		  </div>
    </div>
  </div>


</div>


<?php get_footer(); ?>
