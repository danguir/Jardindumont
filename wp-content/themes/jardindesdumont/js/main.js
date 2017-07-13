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




 /*------------------------------------*\
     VERTICAL MENU
 \*------------------------------------*/


/*(function () {
  jQuery(document).ready(function(){*/

	//jQuery("#vertical-bar").hide();

		jQuery(window).scroll(function () {
            // set distance user needs to scroll before we fadeIn navbar
			if (jQuery(this).scrollTop() > 100) {
				//jQuery('#vertical-bar').fadeIn();
				jQuery('#vertical-bar').css('background-color', 'rgba(0, 0, 0, 0.5)');
			} else {
				//jQuery('#vertical-bar').fadeOut();
				jQuery('#vertical-bar').css('background-color', 'transparent');

			}
		});

/*
});
  }(jQuery));*/





/*$(document).ready(function() {
    $('.gallerythumbnail').on('click', function() {
        var img = $('<img />', {src    : this.src,
                                'class': 'fullImage'
                  });
        $('.showimagediv').html(img).show();
    });
});*/


/*jQuery('.elementor-tab-title').click(function(){
	var tabId = jQuery(this).data('tab');
	//alert(jQuery(this).data('tab'));
	//jQuery('.image-tab-'+tabId).find('img').hide();

	jQuery('.image-tab-1').find('img').hide();
	//jQuery('.showimagemaman').show()
	jQuery('.image-tab-1').addClass('showimagemaman');


});*/

 /*MAKE YOUR NAVIGATION APPEAR ON SCROLL

(function($) {
    $(document).ready(function(){
        $(window).scroll(function(){
            if ($(this).scrollTop() > 200) {
                $('#vertical-bar').fadeIn(500);
            } else {
                $('#vertical-bar').fadeOut(500);
            }
        });
    });
})(jQuery);*/
