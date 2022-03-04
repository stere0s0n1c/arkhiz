
/*
 * Render Single Selector Status
 *
 * @param  {String} controls                 - Wrapper of controls.
 * @return {Void}
 */
( function ( $ ) {
    'use strict';
    $.fn.UixRenderCustomSingleSel = function( options ) {
 
        // This is the easiest way to have default options.
        const settings = $.extend({
			controls    : '.uix-controls__single-sel'
        }, options );
 
        this.each( function() {
		
		
			$( settings.controls ).each( function()  {
				$( this ).find( '> span' ).each( function()  {

					const targetID  = '#' + $( this ).parent().attr( 'data-targetid' );
					let	switchIDs = '';

					//add switch IDs
					$( this ).parent().find( '> span' ).each( function()  {
						if ( typeof $( this ).data( "switchid" ) != typeof undefined ) {
							switchIDs += $( this ).data( "switchid" ) + ',';
						}

					});

					$( this ).parent().attr( "data-switchids", switchIDs.replace(/,\s*$/, '' ) );


					//Set actived style from their values
					if ( $( targetID ).val() == $( this ).data( 'value' ) ) {
						$( this ).addClass( 'is-active' ).attr( 'aria-checked', true );
					} else {
						$( this ).removeClass( 'is-active' ).attr( 'aria-checked', false );
					}	


				});
			});

			
		});
 
    };
 
}( jQuery ));
