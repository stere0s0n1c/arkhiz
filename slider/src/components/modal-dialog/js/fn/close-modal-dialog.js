
/*
 * Close Modal Dialog
 *
 * @return {Void}
 */	

import '@uixkit/plugins/Miscellaneous/scrollLock';

( function ( $ ) {
    'use strict';
    $.fn.UixCloseModalDialog = function( options ) {
 
        // This is the easiest way to have default options.
        const settings = $.extend({
			target  : '.uix-modal-box'
        }, options );
		
 
        this.each( function() {
		

			//Enable mask to close the window.
			$( '.uix-modal-mask' ).removeClass( 'js-uix-disabled' );
			
			$( settings.target ).removeClass( 'is-active' );
			TweenMax.to( '.uix-modal-mask', 0.3, {
				css: {
					opacity : 0,
					display : 'none'
				}
			});
				
			$( settings.target ).find( '.uix-modal-box__content' ).removeClass( 'js-uix-no-fullscreen' );
			
			
			// Unlocks the page
			$.scrollLock( false );
			
			//Remove class for body
			//When scrollLock is used, scrollTop value will change
			$( 'body' ).removeClass( 'scrollLock' );		
			
			
			//Prevent automatic close from affecting new fire effects
			clearTimeout( window.setCloseModalDialog );
			
			
		});
 
    };
 
}( jQuery ));