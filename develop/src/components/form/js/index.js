
/* 
 *************************************
 * <!-- Form -->
 *************************************
 */
/*
    Note:
	
	If you use the "change" event to asynchronously change a custom control of select, radio or checkbox, 
	you need add a callback function that initializes the style:
	

	$( document ).UixRenderCustomSelect(); //Render Custom Select
	$( document ).UixRenderCustomRadioCheckbox(); //Render Custom Radio, Toggle And Checkbox
	$( document ).UixRenderControlsLineEff(); //Create Line Effect on Click
	$( document ).UixRenderControlsDisable(); //Disabled Controls Status
	$( document ).UixRenderCustomFile(); //Render Custom File Type
	$( document ).UixRenderCustomFileDropzone(); //Render Custom File Dropzone
	$( document ).UixRenderControlsHover(); //Hover Effect
	$( document ).UixRenderCustomMultiSel(); //Render Multiple Selector Status
	$( document ).UixRenderCustomSingleSel(); //Render Single Selector Status
	$( document ).UixRenderNormalRadio(); //Render Normal Radio Status
	$( document ).UixRenderDatePicker(); //Render Date Picker

	
*/

import {
    templateUrl,
    homeUrl,
    ajaxUrl,
    browser,
    UixModuleInstance,
    UixGUID,
    UixMath,
    UixCssProperty
} from '@uixkit/core/_global/js';
import UixRenderNormalRadio from '@uixkit/core/form/js/fn/normal-radio';
import UixRenderDatePicker from '@uixkit/core/form/js/fn/datepicker';
import UixRenderControlsHover from '@uixkit/core/form/js/fn/controls-hover';
import UixRenderCustomSingleSel from '@uixkit/core/form/js/fn/single-seletor';
import UixRenderCustomMultiSel from '@uixkit/core/form/js/fn/multi-seletor';
import UixRenderCustomFileDropzone from '@uixkit/core/form/js/fn/file-dropzone';
import UixRenderCustomFile from '@uixkit/core/form/js/fn/upload';
import UixRenderControlsDisable from '@uixkit/core/form/js/fn/controls-disable';
import UixRenderControlsLineEff from '@uixkit/core/form/js/fn/controls-line';
import UixRenderCustomRadioCheckbox from '@uixkit/core/form/js/fn/radio-and-checkbox';
import UixRenderCustomSelect from '@uixkit/core/form/js/fn/select';


import '../scss/_basic.scss';
import '../scss/_layout.scss';
import '../scss/_theme_material.scss';
import '../scss/_jquery.datetimepicker.scss';



export const FORM = ( ( module, $, window, document ) => {
	if ( window.FORM === null ) return false;
	
	
	
    module.FORM               = module.FORM || {};
    module.FORM.version       = '0.1.8';
    module.FORM.documentReady = function( $ ) {

		
		/*
		 * Callbacks for special forms (supports asynchronous)
		 * Add this code to initialize the style when calling 
		 * the form externally with other scripts
		 *
		 * @return {Void}
		 */
		const customSpecialFormsInit = function() {
			$( document ).UixRenderCustomSelect(); //Render Custom Select
			$( document ).UixRenderCustomRadioCheckbox(); //Render Custom Radio, Toggle And Checkbox
			$( document ).UixRenderControlsLineEff(); //Create Line Effect on Click
			$( document ).UixRenderControlsDisable(); //Disabled Controls Status
			$( document ).UixRenderCustomFile(); //Render Custom File Type
			$( document ).UixRenderCustomFileDropzone(); //Render Custom File Dropzone
			$( document ).UixRenderControlsHover(); //Hover Effect
			$( document ).UixRenderCustomMultiSel(); //Render Multiple Selector Status
			$( document ).UixRenderCustomSingleSel(); //Render Single Selector Status
			$( document ).UixRenderNormalRadio(); //Render Normal Radio Status
			$( document ).UixRenderDatePicker(); //Render Date Picker	
		};
		
		
	
		customSpecialFormsInit();

		
		
		/* 
		 ---------------------------
		 Click Event of Submit Button
		 ---------------------------
		 */ 
		//Search Submit Event in WordPress
		$( '.uix-search-box__submit' ).off( 'click' ).on( 'click', function() {
			$( this ).closest( 'form' ).submit();
		});
		
		
		/* 
		 ---------------------------
		 Click Event of add / remove input field dynamically
		 ---------------------------
		 */ 
		$( '.uix-controls__dynamic-fields-container' ).each(function(){


			const $this            = $( this );
            
			const $addButton       = $this.find( '.uix-controls__dynamic-fields__addbtn' ), //The add button
				  $appendWrapper   = $this.find( '.uix-controls__dynamic-fields__append' ), //The field wrapper ID or class 
                  loopCls          = '.uix-controls__dynamic-fields__tmpl__wrapper',
                  defaultItems     = $appendWrapper.find( loopCls ).length;
                  
            
			let	x                = ( defaultItems == 0 ) ? 1 : defaultItems+1,
                maxField         = $this.data( 'max-fields' ),
				fieldHTML        = '';

			//Maximum number of forms added
			if ( typeof maxField === typeof undefined ) {
				 maxField = 5;
			}

			//Add a field
			const addOne = function( fieldCode ) {
				
				
				//replace the index of field name
				fieldCode = fieldCode.replace(/___GUID___/gi, UixGUID.create() );
				
				//hide add button
				if ( x == maxField ) $addButton.hide();
				
				if ( x <= maxField ) { 

					
					$appendWrapper.append( fieldCode );
					$.when( $appendWrapper.length > 0 ).then( function() {

						//Initialize Form
						customSpecialFormsInit();
					});
					
					x++;
				}

			};

            // default item
            if ( defaultItems == 0 ) {
                addOne( $this.find( '.uix-controls__dynamic-fields__tmpl' ).html() );
            }
            
			
			//Prevent duplicate function assigned
			$addButton.off( 'click' ).off( 'click' ).on( 'click', function( e ) {
				e.preventDefault();

                
                //template init
				addOne( $this.find( '.uix-controls__dynamic-fields__tmpl' ).html() );
                
                //Remove per item
                //Prevent duplicate function assigned
                $this.find( '.uix-controls__dynamic-fields__removebtn' ).off( 'click' ).on( 'click', function( e ) {
                    e.preventDefault();


                    //display add button
                    $addButton.show();


                    //remove current item
                    $( this ).closest( loopCls ).remove();


                    x--;
                });	   
                
				return false;
			});





		} );	
		
		
		
		/* 
		 ---------------------------
		 Click Event of Custom Input Number 
		 ---------------------------
		 */ 	
		$( document ).off( 'click.FORM_NUMBER_BTN_ADD' ).on( 'click.FORM_NUMBER_BTN_ADD', '.uix-controls__number__btn--add', function( e ) {

			let step           = parseFloat( $( this ).data( 'step' ) ),
				decimals       = $( this ).data( 'decimals' ),
				$numberInput   = $( this ).closest( '.uix-controls__number' ).find( 'input[type="number"]' ),
				numberInputVal = parseFloat( $numberInput.val() ),
				max            = $numberInput.attr( 'max' );
			
			
			if ( typeof step === typeof undefined || isNaN( step ) ) step = 1;
			if ( typeof decimals === typeof undefined ) decimals = 0;
			if ( typeof max != typeof undefined && parseFloat( numberInputVal + step ) > max ) {
				step = 0;
			}

			
			numberInputVal = parseFloat( numberInputVal + step );
			
			
			$numberInput.val( numberInputVal.toFixed( decimals ) );
		});

		$( document ).off( 'click.FORM_NUMBER_BTN_REMOVE' ).on( 'click.FORM_NUMBER_BTN_REMOVE', '.uix-controls__number__btn--remove', function( e ) {

			let step           = $( this ).data( 'step' ),
				decimals       = $( this ).data( 'decimals' ),
				$numberInput   = $( this ).closest( '.uix-controls__number' ).find( 'input[type="number"]' ),
				numberInputVal = parseFloat( $numberInput.val() ),
				min            = $numberInput.attr( 'min' );

			if ( typeof step === typeof undefined || isNaN( step ) ) step = 1;
			if ( typeof decimals === typeof undefined ) decimals = 0;
			if ( typeof min != typeof undefined && parseFloat( numberInputVal - step ) < min ) {
				step = 0;
			}
			
			numberInputVal -= step;	

			$numberInput.val( numberInputVal.toFixed( decimals ) );
		});

			
		

		/* 
		 ---------------------------
		 Click Event of Multiple Selector
		 ---------------------------
		 */ 
		const multiSel     = '.uix-controls__multi-sel',
			multiSelItem = multiSel + ' > span';

		$( document ).off( 'click.FORM_MULTI_SEL' ).on( 'click.FORM_MULTI_SEL', multiSelItem, function( e ) {
			e.preventDefault();

			let $selector     = $( this ).parent(),
				$option       = $( this ),
				targetID      = '#' + $selector.data( "targetid" ),
				curVal        = $option.data( 'value' ),
				tarVal        = $( targetID ).val() + ',',
				resVal        = '';



			$option.toggleClass( 'is-active' ).attr( 'aria-checked', function( index, attr ) {
				return attr == 'true' ? false : true;
			});

			if ( tarVal.indexOf( curVal + ',' ) < 0 ) {
				resVal = tarVal + curVal + ',';
			} else {
				resVal = tarVal.replace( curVal + ',', '' );
			}

			resVal = resVal
							.replace(/,\s*$/, '' )
							.replace(/^,/, '' );

			$( targetID ).val( resVal );


			//Dynamic listening for the latest value
			$( targetID ).focus().blur();

		} );


		/* 
		 ---------------------------
		 Click Event of Single Selector
		 ---------------------------
		 */ 
		const singleSel     = '.uix-controls__single-sel',
			singleSelItem = singleSel + ' > span';


		/*
		 * Initialize single switch
		 *
		 * @param  {Element} obj                 - Radio controls. 
		 * @return {Void}
		 */
		const hideAllSingleSelItems = function( obj ) {
			obj.each( function( index )  {

				let $sel                = $( this ),
					defaultValue        = $( '#' + $sel.attr( 'data-targetid' ) ).val(),
					deffaultSwitchIndex = 0;

				//get default selected switch index
				$sel.find( '> span' ).each( function( index )  {

					if ( defaultValue == $( this ).data( 'value' ) ) {
						deffaultSwitchIndex = index;
					}


				});


				if ( typeof $sel.data( 'switchids' ) != typeof undefined && $sel.data( 'switchids' ) != '' ) {
					const _switchIDsArr = $sel.data( 'switchids' ).split( ',' );
					_switchIDsArr.forEach( function( element, index ) {

						if ( deffaultSwitchIndex != index ) {
							$( '#' + element ).hide();
						} else {
							$( '#' + element ).show();
						}


					});



				}

			});

		};

		hideAllSingleSelItems( $( singleSel ) );


		$( document ).off( 'click.FORM_SINGLE_SEL' ).on( 'click.FORM_SINGLE_SEL', singleSelItem, function( e ) {
			e.preventDefault();

			let $selector     = $( this ).parent(),
				$option       = $( this ),
				targetID      = '#' + $selector.data( "targetid" ),
				switchID      = '#' + $option.data( "switchid" ),
				curVal        = $option.data( 'value' );


			//Radio Selector
			$selector.find( '> span' ).removeClass( 'is-active' ).attr( 'aria-checked', false );
			$( targetID ).val( curVal );
			$option.addClass( 'is-active' ).attr( 'aria-checked', true );


			//Switch some options
			if ( typeof $option.data( "switchid" ) != typeof undefined ) {
				 hideAllSingleSelItems( $selector );
				 $( switchID ).show();
			}



			//Dynamic listening for the latest value
			$( targetID ).focus().blur();

		} );

		
		/* 
		 ---------------------------
		 Click Event of Normal Radio
		 ---------------------------
		 */ 
		const normalRadio     = '.uix-controls__radio',
			normalRadioItem = normalRadio + ' > label';


		/*
		 * Initialize single switch
		 *
		 * @param  {Element} obj                 - Radio controls. 
		 * @return {Void}
		 */
		const hideAllNormalRadioItems = function( obj ) {
			obj.each( function( index )  {

				let $sel                = $( this ),
					defaultValue        = $( '#' + $sel.attr( "data-targetid" ) ).val(),
					deffaultSwitchIndex = 0;

				//get default selected switch index
				$sel.find( '> label' ).each( function( index )  {

					if ( defaultValue == $( this ).data( 'value' ) ) {
						deffaultSwitchIndex = index;
					}


				});


				if ( typeof $sel.data( 'switchids' ) != typeof undefined && $sel.data( 'switchids' ) != '' ) {
					const _switchIDsArr = $sel.data( 'switchids' ).split( ',' );
					_switchIDsArr.forEach( function( element, index ) {

						if ( deffaultSwitchIndex != index ) {
							$( '#' + element ).hide();
						} else {
							$( '#' + element ).show();
						}


					});



				}

			});

		};

		hideAllNormalRadioItems( $( normalRadio ) );


		$( document ).off( 'click.FORM_NORMAL_RADIO' ).on( 'click.FORM_NORMAL_RADIO', normalRadioItem, function( e ) {
			e.preventDefault();

			const $selector     = $( this ).parent(),
				$option       = $( this ),
				targetID      = '#' + $selector.data( "targetid" ),
				switchID      = '#' + $option.data( "switchid" ),
				curVal        = $option.data( 'value' );


			//Radio Selector
			$selector.find( '> label' )
				.removeClass( 'is-active' )
			    .find( '[type="radio"]' ).prop( 'checked', false );
			
			$( targetID ).val( curVal );
			$option
				.addClass( 'is-active' )
			    .find( '[type="radio"]' ).prop( 'checked', true );
			



			//Switch some options
			if ( typeof $option.data( "switchid" ) != typeof undefined ) {
				 hideAllNormalRadioItems( $selector );
				 $( switchID ).show();
			}



			//Dynamic listening for the latest value
			$( targetID ).focus().blur();

		} );	
		



		
		
		
		/* 
		 ---------------------------
		 Click Event of Checkbox and Toggle 
		 ---------------------------
		 */ 
		const checkboxSel     = '.uix-controls__toggle [type="checkbox"], .uix-controls__checkbox [type="checkbox"]';

		$( document ).on( 'change', checkboxSel, function( e ) {
			//hide or display a associated div
			const $obj      = $( this ).closest( '.uix-controls' ),
				targetID  = '#' + $obj.attr( 'data-targetid' );
			
			if ( this.checked ) {
				$obj.addClass( 'is-active' ).attr( 'aria-checked', true );
				$( targetID ).show();
			} else {
				$obj.removeClass( 'is-active' ).attr( 'aria-checked', false );
				$( targetID ).hide();
			}
			
		});
		
		
    };

    module.components.documentReady.push( module.FORM.documentReady );
	

	return class FORM {
		constructor() {
			this.module = module;
		}
		
	};
	
})( UixModuleInstance, jQuery, window, document );


