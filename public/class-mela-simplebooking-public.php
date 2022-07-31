<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://lucavisciola.com
 * @since      1.0.0
 *
 * @package    Mela_Simplebooking
 * @subpackage Mela_Simplebooking/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Mela_Simplebooking
 * @subpackage Mela_Simplebooking/public
 * @author     Luca Visciola <info@melasistema.com>
 */
class Mela_Simplebooking_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		$this->general_helper = new Mela_Simplebooking_Plugin_Helper_Functions;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Mela_Simplebooking_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Mela_Simplebooking_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/mela-simplebooking-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Mela_Simplebooking_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Mela_Simplebooking_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		$options = get_option( 'melasimplebooking_options' );

		// Manage languages --> WPML Compatible
		$actual_language = $this->general_helper->melasimplebooking_get_actual_language();

		// Get the Frontend plugin options for localize_script
		$melasimplebooking_localized_settings = array(
	        'melasimplebooking_ida' => !empty($options['melasimplebooking_ida']) ? $options['melasimplebooking_ida'] : "",
	        'melasimplebooking_language' => $actual_language,
	        'melasimplebooking_hideonscroll' => !empty($options['melasimplebooking_hideonscroll']) ? $options['melasimplebooking_hideonscroll'] : "",
	        'melasimplebooking_custom_color' => !empty($options['melasimplebooking_custom_color']) ? $options['melasimplebooking_custom_color'] : 'orange',
	        'melasimplebooking_background_color' => !empty($options['melasimplebooking_background_color']) ? $options['melasimplebooking_background_color'] : 'black',
	        'melasimplebooking_label_color' => !empty($options['melasimplebooking_label_color']) ? $options['melasimplebooking_label_color'] : "white",
	        'melasimplebooking_label_hover_color' => !empty($options['melasimplebooking_label_hover_color']) ? $options['melasimplebooking_label_hover_color'] : "orange",
	        'melasimplebooking_widget_color' => !empty($options['melasimplebooking_widget_color']) ? $options['melasimplebooking_widget_color'] : "white",
	        'melasimplebooking_widget_bg_color' => !empty($options['melasimplebooking_widget_bg_color']) ? $options['melasimplebooking_widget_bg_color'] : "black",
	        'melasimplebooking_widget_element_hover_color' =>  !empty($options['melasimplebooking_widget_element_hover_color']) ? $options['melasimplebooking_widget_element_hover_color'] : "orange",
	        'melasimplebooking_widget_element_bg_color' => !empty($options['melasimplebooking_widget_element_bg_color']) ? $options['melasimplebooking_widget_element_bg_color'] : "black",
	        'melasimplebooking_box_shadow_color' => !empty($options['melasimplebooking_box_shadow_color']) ? $options['melasimplebooking_box_shadow_color'] : "black",
	        'melasimplebooking_box_shadow_color_hover' => !empty($options['melasimplebooking_box_shadow_color_hover']) ? $options['melasimplebooking_box_shadow_color_hover'] : "orange",
	        'melasimplebooking_box_shadow_color_focus' => !empty($options['melasimplebooking_box_shadow_color_focus']) ? $options['melasimplebooking_box_shadow_color_focus'] : "orange",
	        'melasimplebooking_add_room_box_shadow_color' => !empty($options['melasimplebooking_add_room_box_shadow_color']) ? $options['melasimplebooking_add_room_box_shadow_color'] : "black",
	        'melasimplebooking_intent_selection_color' => !empty($options['melasimplebooking_intent_selection_color']) ? $options['melasimplebooking_intent_selection_color'] : "orange",
	        'melasimplebooking_intent_selection_days_bg_color' => !empty($options['melasimplebooking_intent_selection_days_bg_color']) ? $options['melasimplebooking_intent_selection_days_bg_color'] : "",
	        'melasimplebooking_button_bg_color' => !empty($options['melasimplebooking_button_bg_color']) ? $options['melasimplebooking_button_bg_color'] : "orange",
	        'melasimplebooking_button_hover_bg_color' => !empty($options['melasimplebooking_button_hover_bg_color']) ? $options['melasimplebooking_button_hover_bg_color'] : "",
	        'melasimplebooking_icon_color' => !empty($options['melasimplebooking_icon_color']) ? $options['melasimplebooking_icon_color'] : "orange",
	        'melasimplebooking_link_color' => !empty($options['melasimplebooking_link_color']) ? $options['melasimplebooking_link_color'] : "orange",
	        'melasimplebooking_accent_color' => !empty($options['melasimplebooking_accent_color']) ? $options['melasimplebooking_accent_color'] : "orange",
	        'melasimplebooking_accent_color_hover' => !empty($options['melasimplebooking_accent_color_hover']) ? $options['melasimplebooking_accent_color_hover'] : "orange",
	        'melasimplebooking_field_background_color' => !empty($options['melasimplebooking_field_background_color']) ? $options['melasimplebooking_field_background_color'] : "black",
	        'melasimplebooking_selected_days_color' => !empty($options['melasimplebooking_selected_days_color']) ? $options['melasimplebooking_selected_days_color'] : "black",
	        'melasimplebooking_calendar_background_color' => !empty($options['melasimplebooking_calendar_background_color']) ? $options['melasimplebooking_calendar_background_color'] : "black",
	    );

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/mela-simplebooking-public.js', array( 'jquery' ), $this->version, false );
		// Localize the settings so we can access them in JS files
		wp_localize_script( $this->plugin_name, 'melasimplebooking_settings', $melasimplebooking_localized_settings);

		// Add Hide On Scroll JS if options is set to true  --> on for WP API)
		if( isset($options['melasimplebooking_hideonscroll']) && $options['melasimplebooking_hideonscroll'] == true ) {
        
	        wp_enqueue_script( $this->plugin_name . '_hideonscroll', plugin_dir_url( __FILE__ ) . 'js/mela-simplebooking-public-hideonscroll.js', array(), $this->version, true );
	    }

	}

	/*
	**
	**	Add Simplebooking container div
	**
	*/
	public function add_melasimplebooking_html() { 

		$options = get_option( 'melasimplebooking_options' ); ?>

		<?php

			global $post;
	        global $sitepress;

	        // Hold the disabled pages and take care of NULL disable_banner_pages
	        if ( !isset( $options['melasimplebooking_disable_banner_pages'] ) ) {

	        	$disable_banner_pages = [];

	        } else {

	        	$disable_banner_pages = $options['melasimplebooking_disable_banner_pages'];

	        }

	        // Check if WPML
	        if ( $sitepress ) {

	        	$wpml_default_language = $sitepress->get_default_language();
	        	$default_lang_page_id = icl_object_id( $post->ID, 'page', false, $wpml_default_language );

	        } else {

	        	$default_lang_page_id = $post->ID;

	        }

		?>

		<!-- If this page it's not disabled - add the HTML markup for the simpleBooking availability  -->
		<?php if ( !in_array( $default_lang_page_id, $disable_banner_pages ) ) { ?>

	        <div id="sb-wrapper">
	        	
	        	<!-- Mobile bar toggler -->
	            <div id="sb-button">
	                <div class="sb-button-div">
	                    <span id="melasimplebooking-automatic-text" class="sb-button-span"></span>
	                    <span id="sb-button-arrow-icon" class="sb-button-arrow dashicons dashicons-arrow-down-alt2"></span>
	                </div>    
	            </div>
	            <!-- simpleBooking form container -->
	            <div id="sb-container"></div>

	        </div>  

	    <?php }

	}

}