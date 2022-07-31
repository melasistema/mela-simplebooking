(function( $ ) {
	'use strict';
    
    /*************************
        Predefined Variables
    *************************/
    var MELASIMPLEBOOKING = {},
      $window = $(window),
      $document = $(document),
      $body = $('body');

    //Check if function exists
    $.fn.exists = function () {
      return this.length > 0;
    };

    function melasimplebooking_check_ida() {
        if (melasimplebooking_settings.melasimplebooking_ida) {
            return true;
        } else {
            return false;
        }
    }

    function melasimplebooking_get_sb_dom_elements() {

        var elements = {

            "id_sb_container" : document.getElementById( 'sb-container' ),
            "id_sb_wrapper" : document.getElementById( 'sb-wrapper' ),
            "id_sb_button" : document.getElementById( 'sb-button' ),
            "id_sb_button_arrow" : document.getElementById( 'sb-button-arrow-icon' ),
            "converto_wrapper" : document.getElementById( 'mela-converto-wrapper' ),
            "disabled_simplebooking" : '<div style="text-align:center; padding:20px; background-color:black">' 
                                            +'<h6 style="color:white">Per un corretto funzionamento del plugin è necessario inserire il proprio numero IDA relativo all\'attività rilasciato da simpleBooking per funzionare correttamente</h6>'
                                            +'<p style="color:white; font-size:0.8rem">Visita il sito di <a style="color:#F2C812" href="https://simplebooking.travel" target="_blank">simpleBooking</a> per maggiori informazioni</p>'
                                            +'</div>',

        };

        return elements; 

    }

    // Select2 bootstrap
    MELASIMPLEBOOKING.LoadSimpleBooking = function() {
        
        (function (i, s, o, g, r, a, m) {
                i['SBSyncroBoxParam'] = r; i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date(); a = s.createElement(o),
                m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })( window, document, 'script', 'https://cdn.simplebooking.it/search-box-script.axd?IDA=' + melasimplebooking_settings.melasimplebooking_ida + '','SBSyncroBox' );
        
        SBSyncroBox({
            Reference:"sbSyncroBox",
            Converto:{
                InPageContainerId:"melasimplebooking-converto-container",
                FormName:"MelasimpleBookingForm"
            },

            CodLang: melasimplebooking_settings.melasimplebooking_language,
            Styles: {
                // Theme: 'light-pink',
                CustomColor: melasimplebooking_settings.melasimplebooking_color,
                CustomBGColor: melasimplebooking_settings.melasimplebooking_background_color,
                CustomLabelColor: melasimplebooking_settings.melasimplebooking_label_color,
                CustomLabelHoverColor: melasimplebooking_settings.melasimplebooking_label_hover_color,
                CustomWidgetColor: melasimplebooking_settings.melasimplebooking_widget_color,
                CustomWidgetBGColor: melasimplebooking_settings.melasimplebooking_widget_bg_color,
                CustomWidgetElementHoverColor: melasimplebooking_settings.melasimplebooking_element_hover_color,
                CustomWidgetElementHoverBGColor: melasimplebooking_settings.melasimplebooking_element_hover_bg_color,
                CustomBoxShadowColor: melasimplebooking_settings.melasimplebooking_box_shadow_color,
                CustomBoxShadowColorHover: melasimplebooking_settings.melasimplebooking_box_shadow_color_hover,
                CustomBoxShadowColorFocus: melasimplebooking_settings.melasimplebooking_box_shadow_color_focus,
                CustomAddRoomBoxShadowColor: melasimplebooking_settings.melasimplebooking_add_room_box_shadow_color,
                CustomIntentSelectionColor: melasimplebooking_settings.melasimplebooking_intent_selection_color ,
                CustomIntentSelectionDaysBGColor: melasimplebooking_settings.melasimplebooking_intent_selection_days_bg_color,
                CustomButtonBGColor: melasimplebooking_settings.melasimplebooking_button_bg_color,
                CustomButtonHoverBGColor: melasimplebooking_settings.melasimplebooking_button_hover_bg_color,
                CustomIconColor: melasimplebooking_settings.melasimplebooking_icon_color,
                CustomLinkColor: melasimplebooking_settings.melasimplebooking_link_color,
                CustomAccentColor: melasimplebooking_settings.melasimplebooking_accent_color,
                CustomAccentColorHover: melasimplebooking_settings.melasimplebooking_accent_color_hover,
                CustomFieldBackgroundColor: melasimplebooking_settings.melasimplebooking_field_background_color,
                CustomSelectedDaysColor: melasimplebooking_settings.melasimplebooking_selected_days_color,
                CustomCalendarBackgroundColor: melasimplebooking_settings.melasimplebooking_calendar_background_color,
            },
        });

    }

    MELASIMPLEBOOKING.MelasimplebookingErrorRender = function ( mela_variables ) {

        if ( mela_variables.id_sb_container ) {

            mela_variables.id_sb_container.innerHTML = mela_variables.disabled_simplebooking;

        } else if ( mela_variables.converto_wrapper ) {

            mela_variables.converto_wrapper.innerHTML = mela_variables.disabled_simplebooking;

        }

    }

    MELASIMPLEBOOKING.MelasimplebookingMobileToggler = function ( mela_variables ) {

        // Set the toogle arrow in UP position if present
        if ( mela_variables.id_sb_button_arrow ) {
            mela_variables.id_sb_button_arrow.classList.add( "up-position" );
        }


        if ( typeof( mela_variables.id_sb_button ) != 'undefined' && mela_variables.id_sb_button != null ) {

            if ( mela_variables.id_sb_button_arrow ) { mela_variables.id_sb_button_arrow.style.color = melasimplebooking_settings.melasimplebooking_label_color }
            if ( mela_variables.id_sb_button ) { mela_variables.id_sb_button.style.backgroundColor = melasimplebooking_settings.melasimplebooking_background_color }

            // Force some classes on refresh based on the screensize
            if ( screen.width > '1214' ) {

                mela_variables.id_sb_container.classList.add( "slideup" );
                mela_variables.id_sb_button_arrow.classList.remove( "up-position" );
                mela_variables.id_sb_button_arrow.classList.add( "down-position" );

            } else {

                mela_variables.id_sb_container.classList.remove( "slideup" );
                mela_variables.id_sb_container.classList.add( "slidedown" );
                mela_variables.id_sb_button_arrow.classList.remove( "down-position" );
                mela_variables.id_sb_button_arrow.classList.add( "up-positionn" );

            }

            // On toogler click
            mela_variables.id_sb_button.onclick = function(){

                if ( mela_variables.id_sb_container.classList.contains( "slideup" )  ) {

                    mela_variables.id_sb_container.classList.remove( "slideup" );
                    mela_variables.id_sb_container.classList.add( "slidedown" );

                    mela_variables.id_sb_button_arrow.classList.remove( "down-position" );
                    mela_variables.id_sb_button_arrow.classList.add( "up-position" );

                } else {

                    mela_variables.id_sb_container.classList.remove( "slidedown" );
                    mela_variables.id_sb_container.classList.add( "slideup" );

                    mela_variables.id_sb_button_arrow.classList.remove( "up-position" );
                    mela_variables.id_sb_button_arrow.classList.add( "down-position" );
                }

            }


            /**
             * 
             *  Clone the simpleBooking button text on the mobile toggle (so it's the right one for all languages)
             *  It's done with a Timeout function so we make it sure that the simpleBoooking iFrame is loaded
             * 
             * */
           
            setTimeout( function(){

                var form = document.getElementById( "sb-container_sb__form" );
                var id_sb_button_text = document.getElementById( "melasimplebooking-automatic-text" );
                var get_button_text = form.getElementsByClassName( "sb__btn--verify" )[0].value;
                var mobile_button_text = 'Check Availability';
      
                if ( id_sb_button_text ) { 
                    id_sb_button_text.style.color = melasimplebooking_settings.melasimplebooking_label_color; 
                }  
                
                if( get_button_text ) {

                    mobile_button_text = get_button_text;

                    var automatic_text =  document.getElementById( 'melasimplebooking-automatic-text' );
                    if ( typeof( automatic_text ) != 'undefined' && automatic_text != null ) {

                        automatic_text.innerHTML = mobile_button_text;

                    }
                }

            }, 800);

        }

    }

    MELASIMPLEBOOKING.MelasimplebookingResizeHandler = function( mela_variables ) {

        /*
        ** We keep it here?
        **
        **/
        // Check on resize event to keep the container Up if resize windows in browser
        window.addEventListener( 'resize', ( event ) => {

            if ( mela_variables.id_sb_container && window.innerWidth > '1214' ) {

                if ( mela_variables.id_sb_container.classList.contains( "slidedown" ) ) {

                    // console.log('SB CONTAINER > 1214 remove slidedown and add slideup class');

                    mela_variables.id_sb_container.classList.remove( "slidedown" );
                    mela_variables.id_sb_container.classList.add( "slideup" );

                }

            } else if (  mela_variables.id_sb_wrapper && window.innerWidth < '1214') {

                // console.log('SB WRAPPER < 1214 remove slidedown and add slideup class');

                if ( mela_variables.id_sb_wrapper.classList.contains( "hide" ) ) {
                
                    mela_variables.id_sb_wrapper.classList.remove('hide');

                }            
            }

        }, false);


    }


    /*************************
        Let's have fun
    *************************/

    // Init Functions
    function init() {
        // console.log( 'init' );
    } init();

    // Document Ready functions
    $document.ready( function () {
        // console.log( 'document ready' );
        // let mela_variables = melasimplebooking_get_sb_dom_elements();
        // MELASIMPLEBOOKING.MelasimplebookingResizeHandler( mela_variables );
    });

    // Window Load functions
    window.onload = function () {
        // console.log('onload');

        let mela_variables = melasimplebooking_get_sb_dom_elements();

        if ( melasimplebooking_check_ida() ) {

            MELASIMPLEBOOKING.LoadSimpleBooking();
            MELASIMPLEBOOKING.MelasimplebookingMobileToggler( mela_variables );
            MELASIMPLEBOOKING.MelasimplebookingResizeHandler( mela_variables );
            
        } else {

            MELASIMPLEBOOKING.MelasimplebookingErrorRender( mela_variables );

        }
    }




})( jQuery );
