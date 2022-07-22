<?php

/**
 * The General Helper Functions fot the /includes.
 *
 * @link       https://lucavisciola.com
 * @since      1.0.0
 *
 * @package    Mela_Simplebooking
 * @subpackage Mela_Simplebooking/includes
 */

/**
 * General Helper for the plugin.
 *
 *
 * @package    Mela_Simplebooking
 * @subpackage Mela_Simplebooking/includes
 * @author     Luca Visciola <info@melasistema.com>
 */
class Mela_Simplebooking_Plugin_Helper_Functions {
	        
	/*
	**
	**	Get actual language (WPML compatible)
	**
	*/
	public function melasimplebooking_get_actual_language() {

		$lang = '';
		$options = get_option( 'melasimplebooking_options' );

		// That's deprecated i believe, so is better go with apply_filters on te WPML API
		if( !defined( 'ICL_LANGUAGE_CODE' ) ) {

		    if( empty( $options['melasimplebooking_language'] ) ) {
	            $lang = 'EN';
	        } else {
	            $lang = strtoupper( $options['melasimplebooking_language'] );
	        }
	        
	    } else {
	        $lang = strtoupper( ICL_LANGUAGE_CODE );
	    }
	    
	    return $lang;
	}

}