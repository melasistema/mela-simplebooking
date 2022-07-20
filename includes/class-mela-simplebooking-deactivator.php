<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://lucavisciola.com
 * @since      1.0.0
 *
 * @package    Mela_Simplebooking
 * @subpackage Mela_Simplebooking/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Mela_Simplebooking
 * @subpackage Mela_Simplebooking/includes
 * @author     Luca Visciola <info@melasistema.com>
 */
class Mela_Simplebooking_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {

        $option_name = 'melasimplebooking_options';
        $options = get_option( 'melasimplebooking_options' );
        
        if( $options['melasimplebooking_delete_settings'] == 'on' ) {

            delete_option( $option_name );

        }

	}

}