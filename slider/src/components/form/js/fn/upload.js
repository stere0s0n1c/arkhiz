
/*
 * Render Custom File Type
 *
 * @param  {String} controls                 - Wrapper of controls.
 * @return {Void}
 */
( function ( $ ) {
    'use strict';
    $.fn.UixRenderCustomFile = function( options ) {
 
        // This is the easiest way to have default options.
        const settings = $.extend({
			controls    : '.uix-controls__file-container'
        }, options );
 
        this.each( function() {
		
		
			$( settings.controls ).each( function()  {
				const $fileInput  = $( this ).find( 'input[type="file"]' ),
					$fileBtn    = $( this ).find( '.uix-controls__file-trigger' ),
					$filePath   = $( this ).next( '.uix-controls__file-return' );

				$fileBtn.off( 'click' ).on( 'click', function() {
					$fileInput.focusin();

				});	

				$fileInput.on( 'change', function() {
					$filePath.text( $( this ).val() );
				});	

			});

			
		});
 
    };
 
}( jQuery ));
