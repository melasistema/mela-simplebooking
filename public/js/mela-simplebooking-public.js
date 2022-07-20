(function( $ ) {
	'use strict';
    
	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	document.addEventListener('DOMContentLoaded', function() {
        (function (i, s, o, g, r, a, m) {
            i['SBSyncroBoxParam'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://cdn.simplebooking.it/search-box-script.axd?IDA='+melasimplebooking_settings.melasimplebooking_ida+'','SBSyncroBox');
        
        SBSyncroBox({
            Reference:"sbSyncroBox",
            Converto:{
                InPageContainerId:"melasimplebooking-converto-container",
                FormName:"RichiestaPreventivoDaSitoWeb"
            },

            CodLang: melasimplebooking_settings.melasimplebooking_language,
            Styles: {
                CustomColor: (melasimplebooking_settings.melasimplebooking_color ? melasimplebooking_settings.melasimplebooking_custom_color : ""),
                CustomBGColor: (melasimplebooking_settings.melasimplebooking_background_color ? melasimplebooking_settings.melasimplebooking_background_color : "" ),
                CustomLabelColor: (melasimplebooking_settings.melasimplebooking_label_color ? melasimplebooking_settings.melasimplebooking_label_color : ""),
                CustomLabelHoverColor: (melasimplebooking_settings.melasimplebooking_label_hover_color ? melasimplebooking_settings.melasimplebooking_label_hover_color : ""),
                CustomWidgetColor: (melasimplebooking_settings.melasimplebooking_widget_color ? melasimplebooking_settings.melasimplebooking_widget_color : ""),
                CustomWidgetBGColor: (melasimplebooking_settings.melasimplebooking_widget_bg_color ? melasimplebooking_settings.melasimplebooking_widget_bg_color : ""),
                CustomWidgetElementHoverColor: (melasimplebooking_settings.melasimplebooking_element_hover_color ? melasimplebooking_settings.melasimplebooking_element_hover_color : ""),
                CustomWidgetElementHoverBGColor: (melasimplebooking_settings.melasimplebooking_element_hover_bg_color ? melasimplebooking_settings.melasimplebooking_element_hover_bg_color : ""),
                CustomBoxShadowColor: (melasimplebooking_settings.melasimplebooking_box_shadow_color ? melasimplebooking_settings.melasimplebooking_box_shadow_color : ""),
                CustomBoxShadowColorHover: (melasimplebooking_settings.melasimplebooking_box_shadow_color_hover ? melasimplebooking_settings.melasimplebooking_box_shadow_color_hover : ""),
                CustomBoxShadowColorFocus: (melasimplebooking_settings.melasimplebooking_box_shadow_color_focus ? melasimplebooking_settings.melasimplebooking_box_shadow_color_focus : ""),
                CustomAddRoomBoxShadowColor: (melasimplebooking_settings.melasimplebooking_add_room_box_shadow_color ? melasimplebooking_settings.melasimplebooking_add_room_box_shadow_color : ""),
                CustomIntentSelectionColor: (melasimplebooking_settings.melasimplebooking_intent_selection_color ? melasimplebooking_settings.melasimplebooking_intent_selection_color : ""),
                CustomIntentSelectionDaysBGColor: (melasimplebooking_settings.melasimplebooking_intent_selection_days_bg_color ? melasimplebooking_settings.melasimplebooking_intent_selection_days_bg_color : ""),
                CustomButtonBGColor: (melasimplebooking_settings.melasimplebooking_button_bg_color ? melasimplebooking_settings.melasimplebooking_button_bg_color :  ""),
                CustomButtonHoverBGColor: (melasimplebooking_settings.melasimplebooking_button_hover_bg_color ? melasimplebooking_settings.melasimplebooking_button_hover_bg_color :  ""),
                CustomIconColor: (melasimplebooking_settings.melasimplebooking_icon_color ? melasimplebooking_settings.melasimplebooking_icon_color :  ""),
                CustomLinkColor: (melasimplebooking_settings.melasimplebooking_link_color ? melasimplebooking_settings.melasimplebooking_link_color :  ""),
                CustomAccentColor: (melasimplebooking_settings.melasimplebooking_accent_color ? melasimplebooking_settings.melasimplebooking_accent_color :  ""),
                CustomFieldBackgroundColor: (melasimplebooking_settings.melasimplebooking_field_background_color ? melasimplebooking_settings.melasimplebooking_field_background_color :  ""),
                CustomSelectedDaysColor: (melasimplebooking_settings.melasimplebooking_selected_days_color ? melasimplebooking_settings.melasimplebooking_selected_days_color :  ""),
                CustomCalendarBackgroundColor: (melasimplebooking_settings.melasimplebooking_calendar_background_color ? melasimplebooking_settings.melasimplebooking_calendar_background_color :  ""),
            },
        });


        var id_sb_button =  document.getElementById( 'sb-button' );
        // var id_sb_button_arrow = document.getElementById("sb-button-arrow-icon");
        // jQuery solution --> needs to be nailed in JS
        var id_sb_button_arrow = jQuery( '.sb-button-arrow' );

        // Take care of the default color mobile toggler
        // id_sb_button_arrow.style.color = ((melasimplebooking_settings.melasimplebooking_label_color === "") ? melasimplebooking_settings.melasimplebooking_label_color : '#FFF');
        // jQuery solution --> needs to be nailed in JS
        if ( id_sb_button_arrow ) { id_sb_button_arrow.css( 'color', '#FFF' ) }
    
        if ( id_sb_button ) { id_sb_button.style.backgroundColor = (melasimplebooking_settings.melasimplebooking_background_color ? melasimplebooking_settings.melasimplebooking_background_color : '#0b2027') }

        if ( typeof( id_sb_button ) != 'undefined' && id_sb_button != null ) {
          
            id_sb_button.onclick = function(){
           
                var class_sb = document.getElementsByClassName( 'sb' ); 
                // console.log(class_sb.length);
                // console.log(class_sb[0]);
                class_sb[0].classList.add( 'sb-screen-xs' );
               
                var id_sb_container = document.getElementById( 'sb-container' );
                
                if ( id_sb_container.style.display == 'none' ){
                    
                    id_sb_button.classList.add( 'collapse' ); 
  
                    id_sb_button.style.display = '';
                    id_sb_container.style.display = 'block';
                    
                } else {
                    
                    id_sb_button.classList.remove( 'collapse' );
                    
                    id_sb_button.style.display = '';
                    id_sb_container.style.display = 'none';
                    
                }
            }

        }




    }, false);
    
    // document.addEventListener('DOMContentLoaded', function() {

    //     var id_sb_button =  document.getElementById("sb-button");

    //     // Take care of the default color mobile toggler
    //     id_sb_button.style.color = "#FFF";
    //     // id_sb_button.style.backgroundColor = "#0b2027"; // default SimpleBooking black background color

    //     id_sb_button.style.backgroundColor = (melasimplebooking_settings.melasimplebooking_background_color ? melasimplebooking_settings.melasimplebooking_background_color : '#0b2027');
    //     id_sb_button.style.backgroundColor = '#0b2027';

    //     if (typeof(id_sb_button) != 'undefined' && id_sb_button != null) {
          
    //         id_sb_button.onclick = function(){
           
    //             var class_sb = document.getElementsByClassName("sb"); 
    //             // console.log(class_sb.length);
    //             // console.log(class_sb[0]);
    //             class_sb[0].classList.add("sb-screen-xs");
               
    //             var id_sb_container = document.getElementById("sb-container");
                
    //             if (id_sb_container.style.display=="none"){
                    
    //                 id_sb_button.classList.add("collapse"); 
  
    //                 id_sb_button.style.display = "";
    //                 id_sb_container.style.display = "block";
                    
    //             } else {
                    
    //                 id_sb_button.classList.remove("collapse");
                    
    //                 id_sb_button.style.display = "";
    //                 id_sb_container.style.display = "none";
                    
    //             }
    //         }

    //     }

        
       
    // }, false);

    /* Get the SimpleBooking button text for the mobile */
    // setTimeout(function(){
    //     var get_button_text = jQuery('#sb-container_sb__form-field--checkavailability').val();
    //     if(get_button_text) {
    //         mobile_button_text = get_button_text;
    //     } else {
    //         mobile_button_text = 'Check Availability';
    //     }


    //     var automatic_text =  document.getElementById('melasimplebooking-automatic-text');
    //     if (typeof(automatic_text) != 'undefined' && automatic_text != null) {
    //         automatic_text.innerHTML = mobile_button_text;
    //     }

        
    // }, 300);




})( jQuery );
