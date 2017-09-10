(function ($, root, undefined) {

	$(function () {

	    $('#shipping_method li').click(function(e){
            $('#shipping_method li').removeClass('is-checked');
            $(this).addClass('is-checked');
        });

	    $(document).ready(function(){
            $('#tab-title-kit_en_detail a').trigger('click');
        });

	    $(document).on('click', '.wc_payment_method', function(e){
	        e.preventDefault();

	        $('.wc_payment_method').removeClass('is-checked');

	        if ($(e.target).hasClass('.wc_payment_method')){
                $(e.target).addClass('is-checked');
            } else {
	            $(e.target).closest('.wc_payment_method').addClass('is-checked');
            }

        });

	    $('.tab-famille .nav a').click(function(){
	        var target = $(this).data('target');
	        var href = $(this).data('href');
	        $('#btn-decouvrir').find('a').attr('href', href);
	        $('.tab-pane').removeClass('active');
	        $("#"+target).addClass('active');
        });

        // $('ul.wc_payment_methods li.wc_payment_method').click(function(e){
        //     alert('lol');
        //     $('ul.wc_payment_methods li.wc_payment_method').removeClass('is-checked');
        //     $(this).addClass('is-checked');
        // });

        $('.argmc-wrapper').on('argmcBeforeStepChange', function(event, currentStep, nextStep) {
            $('.shipping_method').closest('li').removeClass('is-checked');
            $('.shipping_method[checked=checked]').closest('li').addClass('is-checked');
        });

        $('.argmc-wrapper').on('argmcAfterStepChange', function(event, currentStep, nextStep) {
            $('.shipping_method').closest('li').removeClass('is-checked');
            $('.shipping_method[checked=checked]').closest('li').addClass('is-checked');
        });

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

            getProducts(tags, category_name, true);
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

        function getProducts(tags, category_name, image) {
            $('ul.products:not(.not-filter)').hide();
            $('.loading').show();
            $('.loop-univers-image').hide();
            $.post(ajaxurl, {action: 'get_products', tags: tags, category_name: category_name}, function (data) {
                $('.loading').hide();
                $('ul.products:not(.not-filter)').html(data);
                $('ul.products:not(.not-filter)').show();
                if (image)
                    $('.loop-univers-image').show();
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
