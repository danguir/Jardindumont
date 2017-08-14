/**
 * main.js
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 *
 * Copyright 2014, Codrops
 * http://www.codrops.com
 */


 /*------------------------------------*\
     SIDE MENU
 \*------------------------------------*/
(function() {

	var bodyEl = document.body,
		content = document.querySelector('.content-wrap'),
		openbtn = document.getElementById('open-button'),
		closebtn = document.getElementById('close-button'),
		isOpen = false;
		//console.log(openbtn);
	function init() {
		initEvents();
	}

	function initEvents() {

		openbtn.addEventListener( 'click', toggleMenu );
		if( closebtn ) {
			closebtn.addEventListener( 'click', toggleMenu );
		}

		// close the menu element if the target it´s not the menu element or one of its descendants..
		content.addEventListener( 'click', function(ev) {
			var target = ev.target;
			if( isOpen && target !== openbtn ) {
				toggleMenu();
			}
		} );
	}

	function toggleMenu() {
		if( isOpen ) {
			classie.remove( bodyEl, 'show-menu' );
		}
		else {
			classie.add( bodyEl, 'show-menu' );
		}
		isOpen = !isOpen;
	}

	init();

})();

/*Fin KIT wiard tabs
jQuery(document).ready(function () {
    jQuery('.nav-tabs > li a[title]').tooltip();
    jQuery('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = jQuery(e.target);
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });
    jQuery(".next-step").click(function (e) {
        var $active = jQuery('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);
    });
    jQuery(".prev-step").click(function (e) {
        var $active = jQuery('.wizard .nav-tabs li.active');
        prevTab($active);
    });
});

function nextTab(elem) {
    jQuery(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    jQuery(elem).prev().find('a[data-toggle="tab"]').click();
}*/




/*Load more ctegory page
jQuery(function () {
    jQuery("div #article-loop").slice(0, 4).show();
		jQuery("#loadMore").on('click', function (e) {
			//e.preventDefault();
			jQuery("div:hidden").slice(0, 8).slideDown();
			//alert(jQuery("div#article-loop:hidden").length );
			if (jQuery("div:hidden").length == 0) {
					jQuery("#load").fadeOut('slow');
			}
			jQuery('html,body').animate({
					scrollTop: jQuery(this).offset().top
			}, 1500);
    });
});*/

 /*------------------------------------*\
     VERTICAL MENU
 \*------------------------------------*/


	var templateUrl = '/wp-content/themes/jardindesdumont';

		jQuery(window).scroll(function () {
            // set distance user needs to scroll before we fadeIn navbar
			if (jQuery(this).scrollTop() > 100) {
				jQuery('#vertical-bar').css('background-color', 'rgba(0, 0, 0, 0.5)');
				jQuery("#vertical-bar").css('height', '60px');
				jQuery("#logo a img").css('height', '43px');
				jQuery("#logo a img").css('width', '188px');
				jQuery("#vertical-bar .list-inline li a img").css('width', '44px');
				jQuery("#burger").attr('src', templateUrl + '/img/burger.png');
				jQuery(".menu-button #burger").css('width', '40px');
				jQuery(".menu-button #burger").css('height', '22px');

			} else {
				jQuery('#vertical-bar').css('background-color', 'transparent');
				jQuery("#logo a img").css('height', '70px');
				jQuery("#logo a img").css('width', '300px');
				jQuery("#vertical-bar .list-inline li a img").css('width', '60px');
				jQuery("#burger").attr('src', templateUrl + '/img/burger-vert.png');
				jQuery(".menu-button #burger").css('width', '48px');
				jQuery(".menu-button #burger").css('height', '27px');
			}
		});


/********************************
FILTER CATGORIE PAGE
********************************/

/*jQuery('div.tags').delegate('input:checkbox', 'change', function(){
     var $lis = jQuery('.results > li').hide();
     //For each one checked
     jQuery('input:checked').each(function(){
          $lis.filter('.' + $(this).attr('rel')).show();
     });
});

$('input#someCheckbox').click(function() {
    if ($(this).is(':checked')) {
        // checked
    } else {
       // not checked
    };
});*/


jQuery(document).ready(function(){
    jQuery("input:checkbox").change(function(){
        var value = jQuery(this).attr('data-filter');
				//if ($(this).is(':checked')) {
        if(value == "all"){
            jQuery('.filter').show('1000');
        }
        else{
            jQuery(".filter").not('.'+value).hide('3000');
            jQuery('.filter').filter('.'+value).show('3000');
        }
			//}
    });

    if (jQuery(".filter-button").removeClass("active")) {
			jQuery(this).removeClass("active");
		}
			jQuery(this).addClass("active");
});

//Radio and checkbox button
jQuery("#affected").zInput();
jQuery("#affected-step2").zInput();
jQuery("#affected-step3").zInput();
jQuery("#affected-step4").zInput();
jQuery("#affected-step5").zInput();
jQuery("#affected-step6").zInput();


//NAV TAB HOMEPAGE
jQuery('.nav-pills li').click(function(){
	$('.nav-pills li').removeClass('active');
	$(this).addClass('active');
});


//STIKY MENU CATEGORIE PAGE
var topSticky = jQuery('.sticky-scroll-box').offset().top;
var stickyHeight = jQuery('.sticky-scroll-box').height();

jQuery(window).scroll(function (event) {
	var limit = jQuery('.networking ').offset().top - stickyHeight - 100;
	var stickyScroll = jQuery(this).scrollTop();
	var windowTop = jQuery(window).scrollTop();

	if (stickyScroll >= topSticky) {
		jQuery('.sticky-scroll-box').addClass('fixed-sticky');
	} else {
		jQuery('.sticky-scroll-box').removeClass('fixed-sticky');
	}

	if (limit < windowTop) {
		var diff = limit - windowTop;
		jQuery('.sticky-scroll-box').css({top: diff});
	}
	//jQuery('.sticky-scroll-box').width(jQuery('.sticky-scroll-box').parent().width());
	});




	/*function stepnext(n){
	    if(n != 0){
			//$(".stepwizard-row a").switchClass('btn-primary','btn-default');
	        jQuery(".stepwizard-row a").removeClass('btn-primary');
	        jQuery(".stepwizard-row a").addClass('btn-default');
			jQuery('.stepwizard a[href="#step-'+n+'"]').tab('show');
			//$('.stepwizard-row a[href="#step-'+n+'"]').switchClass('btn-default','btn-primary');
	      jQuery('.stepwizard-row a[href="#step-'+n+'"]').removeClass('btn-default');
	      jQuery('.stepwizard-row a[href="#step-'+n+'"]').addClass('btn-primary');
	    }
	}
	stepnext(1);*/


	jQuery(document).ready(function () {

    var navListItems = jQuery('div.setup-panel div a'),
            allWells = jQuery('.setup-content'),
            allNextBtn = jQuery('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = jQuery(jQuery(this).attr('href')),
                $item = jQuery(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = jQuery(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = jQuery('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        jQuery(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                jQuery(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    jQuery('div.setup-panel div a.btn-primary').trigger('click');
});
