<?php

/**
 * Define the Plugin Config
 *
 * Define the array of all admin settings fields
 * and they're infos
 *
 * @link       https://lucavisciola.com
 * @since      1.0.0
 *
 * @package    Mela_Simplebooking
 * @subpackage Mela_Simplebooking/includes
 */

/**
 * Define the settings fields.
 *
 * Define the array of all admin settings fields
 * and they're infos
 *
 * @since      1.0.0
 * @package    Mela_Simplebooking
 * @subpackage Mela_Simplebooking/includes
 * @author     Luca Visciola <info@melasistema.com>
 */
class Mela_Simplebooking_Plugin_Config {

    /**
     * The Plugin Settings.
     *
     * @since    1.0.0
     * @access   protected
     * @var      array    $plugin_settings    All plugin settings.
     */
    protected $plugin_settings;

     /**
     * The Plugin Settings.
     *
     * @since    1.0.0
     * @access   protected
     * @var      array    $all_published_pages    All published pages.
     */
    protected $all_published_pages;

    /**
     * Config the plugin settings.
     *
     * Configure all settings fields for the plugin
     *
     * @since    1.0.0
     */
    public function __construct() {

        $this->all_published_pages = $this->melasimplebooking_return_pages();

        $this->plugin_settings = [

            // Simple Booking Settings + extra layout
            'melasimplebooking_ida' => array(
                'field_type' => 'number',
                'label' => __( 'The Simple Numerello', 'mela-simplebooking' ),
                'description' => __( 'After purchased the SimpleBooking service you\'ll recieve an IDA number for your landing', 'mela-simplebooking' ),
            ),
            'melasimplebooking_language' => array(
                'field_type' => 'text',
                'label' => __( 'Language code', 'mela-simplebooking' ),
                'description' => __( 'Please use the default language code es.IT', 'mela-simplebooking' ),
            ),
            'melasimplebooking_hideonscroll' => array(
                'field_type' => 'checkbox',
                'label' => __( 'Hide Simplebooking banner when scrolling', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_disable_banner_pages' => array(
                'field_type' => 'multiple_select',
                'label' => __( 'Hide banner in certain pages', 'mela-simplebooking' ),
                'description' => __( 'Disable the banner in selected pages', 'mela-simplebooking' ),
                'select_options' => $this->all_published_pages,
            ),
            'melasimplebooking_custom_color' => array(
                'field_type' => 'text',
                'label' => __( '', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_background_color' => array(
                'field_type' => 'text',
                'label' => __( '', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_label_color' => array(
                'field_type' => 'text',
                'label' => __( '', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_label_hover_color' => array(
                'field_type' => 'text',
                'label' => __( '', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_widget_color' => array(
                'field_type' => 'text',
                'label' => __( '', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_widget_bg_color' => array(
                'field_type' => 'text',
                'label' => __( '', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_widget_element_hover_color' => array(
                'field_type' => 'text',
                'label' => __( '', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_widget_element_bg_color' => array(
                'field_type' => 'text',
                'label' => __( '', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_box_shadow_color' => array(
                'field_type' => 'text',
                'label' => __( '', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_box_shadow_color_hover' => array(
                'field_type' => 'text',
                'label' => __( '', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_box_shadow_color_focus' => array(
                'field_type' => 'text',
                'label' => __( '', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_add_room_box_shadow_color' => array(
                'field_type' => 'text',
                'label' => __( '', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_intent_selection_color' => array(
                'field_type' => 'text',
                'label' => __( '', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_intent_selection_days_bg_color' => array(
                'field_type' => 'text',
                'label' => __( '', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_button_bg_color' => array(
                'field_type' => 'text',
                'label' => __( '', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_button_hover_bg_color' => array(
                'field_type' => 'text',
                'label' => __( '', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_icon_color' => array(
                'field_type' => 'text',
                'label' => __( '', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_link_color' => array(
                'field_type' => 'text',
                'label' => __( '', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_accent_color' => array(
                'field_type' => 'text',
                'label' => __( '', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_field_background_color' => array(
                'field_type' => 'text',
                'label' => __( '', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_selected_days_color' => array(
                'field_type' => 'text',
                'label' => __( '', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_calendar_background_color' => array(
                'field_type' => 'text',
                'label' => __( '', 'mela-simplebooking' ),
                'description' => '',
            ),

            // Plugin Settings
            'melasimplebooking_delete_settings' => array(
                'field_type' => 'checkbox',
                'label' => __( 'Delete Settings', 'mela-simplebooking' ),
                'description' => __( 'Check this to delete all settings when DEACTIVATE the plugin (..for now, because we need to take care of unistall method)', 'mela-simplebooking' ),
            ),
            

        ];

    }

    /**
     * TODO --> this method should be sit somewhere else, maybe in the class-mela-simplebooking-plugin-helper-function
     * 
     * Return pages created in WP for populate the select options of melasimplebooking_disable_banner_pages
     *
     * Compatible with WPML
     *
     * @since    1.0.0
     */
    private function melasimplebooking_return_pages() {

        global $sitepress;

        if ( $sitepress ) {
            //changes to the default language
            $default_language = $sitepress->get_default_language();
            $sitepress->switch_lang( $default_language );
        }
        
        $args = array(
            'post_type'         => 'page',
            'posts_per_page'    => -1,
            'post_status'       => 'publish',
            'suppress_filters'  => false
        );

        $posts = get_posts( $args );

        if( defined( 'ICL_LANGUAGE_CODE' ) ) {
            $lang = ICL_LANGUAGE_CODE;
            //changes to the current language
            $sitepress->switch_lang( $lang );
        }

        // Gather the result
        $all_published_pages = [];

        if ( $posts ) {
            foreach ( $posts as $post ) {
                $all_published_pages[$post->post_title] = $post->ID;
            }
        }
        // ..and return it
        return $all_published_pages;

    }

    public function load_plugin_settings() {

        $result = $this->plugin_settings;

        return $result;

    }

}