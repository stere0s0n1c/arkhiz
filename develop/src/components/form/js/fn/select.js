
/*
 * Render Custom Select
 *
 * @param  {String} selector             - The current selector.
 * @param  {String} targetWrapper        - Wrapper of the selector.
 * @param  {String} trigger              - Trigger of the selector.
 * @param  {String} itemsWrapper         - Selector's options container.
 * @param  {Element} item                 - Each option of the selector.
 * @return {Void}
 */
( function ( $ ) {
    'use strict';
    $.fn.UixRenderCustomSelect = function( options ) {
 
        // This is the easiest way to have default options.
        const settings = $.extend({
			selector         : '.uix-controls__select',
			targetWrapper    : '.uix-controls__select-wrapper',
			trigger          : '.uix-controls__select-trigger',	
			itemsWrapper     : '.uix-controls__select__option-container',
			item             : '.uix-controls__select__option'
        }, options );
 
        this.each( function() {
			
		
			$( settings.selector ).not( '.js-uix-new' ).each( function() {

				const $this     = $( this );
                
				const classes   = $this.attr( 'class' ),
					  id        = $this.attr( 'id' ),
					  name      = $this.attr( 'name' ),
                      labelText = $this.find( '> span' ).html(),
					  dataExist = $this.data( 'exist' );
                
				let	template  = '';
			
				

				if ( typeof dataExist === typeof undefined && dataExist != 1 ) {

					template  = '<div class="' + classes + ' js-uix-new">';
					template += '<span class="uix-controls__select-trigger">' + $this.find( 'select' ).attr( 'placeholder' ) + '</span><ins class="uix-controls__bar"></ins><ins class="uix-controls__basic-bar"></ins>';
					template += '<div role="presentation" class="uix-controls__select__option-container">';

					$this.find( 'select option' ).each( function( index ) {

						let selected = '';

						if ( $( this ).is( ':selected' ) ) {
							selected = 'is-active';
						}

						template += '<span role="option" class="uix-controls__select__option '+selected+'" data-value="' + $( this ).attr( 'value' ) + '">' + $( this ).html() + '</span>';
					});
					template += '</div></div>';

					if ( typeof labelText != typeof undefined && labelText != '' ) {
						template += '<span class="uix-controls__select-label">' + labelText + '</span>';
					}


					$this.wrap('<div class="'+ settings.targetWrapper.replace( '.', '' )+' '+( $this.hasClass( 'uix-controls--line' ) ? 'uix-controls--line' : '' )+' '+( $this.hasClass( 'is-fullwidth' ) ? 'is-fullwidth' : '' )+' '+( $this.hasClass( 'is-disabled' ) ? 'is-disabled' : '' )+'"></div>');
					$this.hide();
					$this.after( template );	


					//Prevent the form from being initialized again
					$( this ).data( 'exist', 1 );
				}


			});

			//Show/Hide Selector
			$( document ).off( 'click.FORM_CUSTOM_SELECT' ).on( 'click.FORM_CUSTOM_SELECT', settings.trigger, function( e ) {
				e.preventDefault();

				const $selectWrapper    = $( this ).closest( settings.targetWrapper ),
					$selectCurWrapper = $selectWrapper.find( settings.selector + '.js-uix-new' );

				$selectCurWrapper.addClass( 'is-opened' );

			});

			//Do not add off() to this
			$( document.body ).on( 'click', function( e ) {
				
				if ( 
					e.target.className != '' && 
					typeof e.target.className != typeof undefined && 
					Object.prototype.toString.call( e.target.className ) != '[object SVGAnimatedString]' 
				) {
	
					if ( e.target.className.indexOf( 'uix-controls__select__option' ) < 0 ) {
						$( settings.selector + '.js-uix-new' ).removeClass( 'is-opened' );
					}	
				}

				
			});		



			//Set the default selector text
			$( settings.selector + '.js-uix-new' ).each( function( index ) {
				$( this ).find( settings.trigger ).text( $( this ).find( settings.item + '.is-active' ).html() );
			});


			//Change Event Here
			//Prevents the triggering of multiple change events
			$( document ).off( 'click.FORM_CUSTOM_SELECT_ITEM' ).on( 'click.FORM_CUSTOM_SELECT_ITEM', settings.item, function( e ) {
				e.preventDefault();

				const $selectWrapper    = $( this ).closest( settings.targetWrapper ),
					$selectCurWrapper = $selectWrapper.find( settings.selector + '.js-uix-new' ),
					curVal            = $( this ).data( 'value' );

				//Close the selector
				$selectCurWrapper.removeClass( 'is-opened' );

				//Set the selector text
				$selectCurWrapper.find( settings.trigger ).text( $( this ).html() ).addClass( 'is-active' );

				//Activate this option
				$selectCurWrapper.find( settings.item ).removeClass( 'is-active' );
				$( this ).addClass( 'is-active' );

				//Set select option 'selected', by value
				$selectWrapper.find( 'select' ).val( curVal );
				$selectWrapper.find( 'select option' ).removeAttr( 'selected' );
				$selectWrapper.find( 'select option[value="'+curVal+'"]' ).attr( 'selected', 'selected' ).change();

			});



			//Synchronize to the original select change event
			$( settings.selector ).not( '.js-uix-new' ).each( function() {

				const $this       = $( this ).find( 'select' ),
					  $cusSelect  = $this.closest( settings.targetWrapper ).find( settings.selector + '.js-uix-new' );
                
				let	newOptions  = '';


				$this.closest( settings.targetWrapper ).find( 'select option' ).each( function( index ) {

					let selected = '';

					if ( $( this ).is( ':selected' ) ) {
						selected = 'is-active';
					}

					newOptions += '<span role="option" class="uix-controls__select__option '+selected+'" data-value="' + $( this ).attr( 'value' ) + '">' + $( this ).html() + '</span>';
				});


				$cusSelect.find( settings.itemsWrapper ).html( '<div>' + newOptions + '</div>' );


				//Set the default selector text
				$cusSelect.each( function( index ) {
					$( this ).find( settings.trigger ).text( $( this ).find( settings.item + '.is-active' ).html() );
				});

			});

			
			
		});
 
    };
 
}( jQuery ));
