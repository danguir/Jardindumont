(function ($, root, undefined) {

	$(function () {

	    var localhost = location.protocol + "//" + location.host;

        $('.filter-area .tag-cloud-link').click(function(e){

            e.preventDefault();
            var tags, category_name, products;

            if ($(this).hasClass('is-active')){
                $(this).removeClass('is-active');
            } else {
                $(this).addClass('is-active');
            }

            tags = getTagsSelected();
            tags = formatTagsToAjax(tags);
            category_name = getCatName();

            products = getProducts(tags, category_name);

            log(products);
        });

        $('.link-clear').click(function(e){
            e.preventDefault();
            $('.filter-area .tag-cloud-link').removeClass('is-active');
        });

        function getTagsSelected() {
            var selected = [];
            $('.filter-area .tag-cloud-link.is-active').each(function(){
                selected.push($(this).text());
            });
            return selected;
        }

        function getCatName() {
            var cat = '';
            cat = $('.filter-area').data('category-name');
            return cat;
        }

        function formatTagsToAjax(tags){
            var queryTags = "";
            for(var i=0; i < tags.length; i++)
            {
                queryTags += tags[i];
                if (i != (tags.length - 1))
                    queryTags += "+";
            }
            return queryTags.toLowerCase();
        }

        function getProducts(tags, category_name) {
            return $.post( ajaxurl, { action: 'get_products', tags: tags, category_name: category_name }, function(data){
                return data;
            });
        }

        function setProducts(data){

            var html = "";
            html = '<li class="product type-product status-publish has-post-thumbnail product_cat-experimente first instock shipping-taxable purchasable product-type-simple">';
            html += '<a href="http://dev.jardindumont.local/shop/kit-mon-balcon-naturel/" class="woocommerce-LoopProduct-link">';
            html += '<a href="http://dev.jardindumont.local/shop/kit-mon-balcon-naturel/" class="woocommerce-LoopProduct-link">';
            html += '<img width="300" height="300" src="http://dev.jardindumont.local/wp-content/uploads/2017/08/02-1-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="02" title="02" srcset="http://dev.jardindumont.local/wp-content/uploads/2017/08/02-1-300x300.jpg 300w, http://dev.jardindumont.local/wp-content/uploads/2017/08/02-1-150x150.jpg 150w, http://dev.jardindumont.local/wp-content/uploads/2017/08/02-1-250x250.jpg 250w, http://dev.jardindumont.local/wp-content/uploads/2017/08/02-1-120x120.jpg 120w, http://dev.jardindumont.local/wp-content/uploads/2017/08/02-1-360x360.jpg 360w, http://dev.jardindumont.local/wp-content/uploads/2017/08/02-1-180x180.jpg 180w, http://dev.jardindumont.local/wp-content/uploads/2017/08/02-1.jpg 526w" sizes="(max-width: 300px) 100vw, 300px">';
            html += '<h2 class="woocommerce-loop-product__title">'+data['post_title']+'</h2>';
            html += '<span class="price">Prix à l\'unité : <span class="woocommerce-Price-amount amount">30<span class="woocommerce-Price-currencySymbol">€</span></span></span>';
            html += '</a>';
            html += '<a rel="nofollow" href="/categorie-produit/experimente/?add-to-cart=561" data-quantity="1" data-product_id="561" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">ajouter au panier</a>';
            html += '</li>'
        }

        function log(output) {
            console.log(output);
        }

    });

})(jQuery, this);
