<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://lucavisciola.com
 * @since             1.0.0
 * @package           Mela_Simplebooking
 *
 * @wordpress-plugin
 * Plugin Name:       Mela simpleBooking
 * Plugin URI:        https://melasistema.com
 * Description:       Setup simpleBooking mobile friendly bar and more
 * Version:           1.0.0
 * Author:            Luca Visciola
 * Author URI:        https://lucavisciola.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mela-simplebooking
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MELA_SIMPLEBOOKING_VERSION', '1.0.0' );

/**
 * Add write_log debug
 * Use it in all plugin files to write in WP default log es. write_log($var)
 * arrays or objects
 */
if ( !function_exists( 'write_log' ) ) {
    function write_log( $log ) {
        if ( true === WP_DEBUG ) {
            if ( is_array( $log ) || is_object( $log ) ) {
                error_log( print_r( $log, true ) );
            } else {
                error_log( $log );
            }
        }
    }
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-mela-simplebooking-activator.php
 */
function activate_mela_simplebooking() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mela-simplebooking-activator.php';
	Mela_Simplebooking_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-mela-simplebooking-deactivator.php
 */
function deactivate_mela_simplebooking() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mela-simplebooking-deactivator.php';
	Mela_Simplebooking_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_mela_simplebooking' );
register_deactivation_hook( __FILE__, 'deactivate_mela_simplebooking' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-mela-simplebooking.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_mela_simplebooking() {

	$plugin = new Mela_Simplebooking();
	$plugin->run();

}
run_mela_simplebooking();
