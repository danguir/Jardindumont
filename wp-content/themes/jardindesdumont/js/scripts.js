(function ($, root, undefined) {

	$(function () {

        /****
         * FILTRE
         */
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

            getProducts(tags, category_name);
            $('.woocommerce-pagination').hide();

        });

        $('.link-clear').click(function(e){
            e.preventDefault();
            $('.filter-area .tag-cloud-link').removeClass('is-active');
            tags = getTagsSelected();
            tags = formatTagsToAjax(tags);
            category_name = getCatName();

            getProducts(tags, category_name);
            $('.woocommerce-pagination').show();

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
            $('ul.products:not(.not-filter)').hide();
            $('.loading').show();
            $.post(ajaxurl, {action: 'get_products', tags: tags, category_name: category_name}, function (data) {
                $('.loading').hide();
                $('ul.products:not(.not-filter)').html(data);
                $('ul.products:not(.not-filter)').show();
            });
        }

        /****
         * Calcul de prix total
         */

        $('.qty').bind('keyup mouseup', function () {
            var multiple = $(this).val();
            var price = $('.is-price').data('price');
            var finalPrice = multiple*price;
            $('.price-final .woocommerce-Price-amount').text(finalPrice+"€");
        });

        function log(output) {
            console.log(output);
        }

    });

})(jQuery, this);
