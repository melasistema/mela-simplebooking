<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://lucavisciola.com
 * @since      1.0.0
 *
 * @package    Mela_Simplebooking
 * @subpackage Mela_Simplebooking/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Mela_Simplebooking
 * @subpackage Mela_Simplebooking/admin
 * @author     Luca Visciola <info@melasistema.com>
 */
class Mela_Simplebooking_Admin_Options  {

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
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      array   $plugin_settings    The plugin settings.
	 */
	protected $plugin_settings;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since 	   1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 * @param      array     $plugin_settings    All plugin settings.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		$plugin_options = new Mela_Simplebooking_Plugin_Config();
		$this->plugin_settings = $plugin_options->load_plugin_settings();


	}

	/**
	 * @internal never define functions inside callbacks.
	 * these functions could be run multiple times; this would result in a fatal error.
	 */
	 
	/**
	 * Add Options fields
	 */
	public function melasimplebooking_settings_init() {

		// Register a new setting for "melasimplebooking" page.
	    register_setting( 'melasimplebooking', 'melasimplebooking_options' );
	    
		// Register a new section in the "melasimplebooking" page.
	    add_settings_section(
	        'melasimplebooking_section_main_options',
	        __( 'Setup simple booking details, styles and more.', 'mela-simplebooking' ), 
	        array( $this,'melasimplebooking_section_main_options_callback' ),
	        'melasimplebooking'
	    );

	    foreach($this->plugin_settings as $setting => $value) {

		    add_settings_field(
		    	
		    	$setting,
		    	__( $setting, 'mela-simplebooking' ),
		    	array( $this, 'melasimplebooking_render_fields' ),
		    	'melasimplebooking',
		    	'melasimplebooking_section_main_options',
		    	array(
		    		'label_for'         => $setting,
		            'class'             => 'melasimplebooking_row',
		            'melasimplebooking_custom_data' => array(
		            	'field_type' => empty( $value['field_type'] ) ? "" : $value['field_type'],
		            	'label' => empty( $value['label'] ) ? "" : $value['label'],
		            	'description' => empty( $value['description'] ) ? "" : $value['description'],
		            	'select_options' => empty( $value['select_options'] ) ? "" : $value['select_options'],
		            ),
		    	)
		    );
		};

	}

	/**
	 * Add the top level menu page.
	 */
	public function melasimplebookig_add_options_menu() {
		/**
		 * Add the top level menu page.
		 */
		add_menu_page(
	        'Melasimplebooking',
	        'SimpleBooking',
	        'manage_options',
	        'melasimplebooking',
	        array( $this, 'melasimplebooking_options_page_html' ),
	        'dashicons-buddicons-pm',
	    );
	}
	 
	/**
	 * Render fields callback function. Used throught loop ... for now v.1
	 *
	 * WordPress has magic interaction with the following keys: label_for, class.
	 * - the "label_for" key value is used for the "for" attribute of the <label>.
	 * - the "class" key value is used for the "class" attribute of the <tr> containing the field.
	 * Note: you can add custom key value pairs to be used inside your callbacks.
	 *
	 * @param array $args
	 */
	public function melasimplebooking_render_fields( $args ) {

	    // Get the value of the setting we've registered with register_setting()
	    $options = get_option( 'melasimplebooking_options' );
	    // Get options for populating selects
	    $select_options = $args['melasimplebooking_custom_data']['select_options'];

	    ?>

	    	<?php 

	    		switch ($args['melasimplebooking_custom_data']['field_type']) {

	    			case 'text': 
	    			case 'number':?>

	    				<input type="<?php echo esc_attr( $args['melasimplebooking_custom_data']['field_type'] ); ?>" id="<?php echo esc_attr( $args['label_for'] ); ?>" name="melasimplebooking_options[<?php echo esc_attr( $args['label_for'] ); ?>]"  value="<?php echo empty($options[$args['label_for']]) ? " " : $options[$args['label_for']]; ?>">

	    				<?php break;

	    			case 'checkbox':?>

	    				<input type="<?php echo esc_attr( $args['melasimplebooking_custom_data']['field_type'] ); ?>" id="<?php echo esc_attr( $args['label_for'] ); ?>" name="melasimplebooking_options[<?php echo esc_attr( $args['label_for'] ); ?>]" <?php echo (!empty($options[$args['label_for']]) && $options[$args['label_for']] == true) ? "checked" : ""; ?>><?php _e($args['melasimplebooking_custom_data']['label'], 'mela-simplebooking'); ?></input>

	    				<?php break;

	    			case 'multiple_select': ?>

						<select multiple type="<?php echo esc_attr( $args['melasimplebooking_custom_data']['field_type'] ); ?>" id="<?php echo esc_attr( $args['label_for'] ); ?>" name="melasimplebooking_options[<?php echo esc_attr( $args['label_for'] ); ?>][]"  value="<?php echo !empty( $options[$args['label_for']] ) && !empty( in_array( $args['label_for'], $options[$args['label_for']] ) ) ? $options[$args['label_for']] : ""; ?>">
				
							<option value="" <?php empty( $options[$args['label_for']] ) ? "selected" : ""; ?> disabled><?php _e( 'Select one or more options...', 'melasimplebooking' ); ?></option>

							<?php if (!empty($select_options)) {

								foreach ($select_options as $key => $value) { ?>

									<option value="<?php echo $value; ?>" <?php echo ( in_array($value, $options[$args['label_for']])) ? 'selected' : '' ?>><?php if ($key) { echo $key; } ?></option>

								<?php } 
								
							} ?>

						</select>
    			
    				<?php break;

	    			default:
	    				// code...
	    				break;
	    		}

	    	?>

		    <p class="description">
		        <?php esc_html_e( esc_attr( $args['melasimplebooking_custom_data']['description'] ), 'mela-simplebooking' ); ?>
		    </p>
	    <?php
	}

	/**
	 * Custom option and settings:
	 *  - callback functions
	 */
	/**
	 * Developers section callback function.
	 *
	 * @param array $args  The settings array, defining title, id, callback.
	 */
	function melasimplebooking_section_main_options_callback( $args ) {
	    ?>
	    <p id="<?php echo esc_attr( $args['id'] ); ?>"><?php esc_html_e( 'At the moment all options are in this section with no structure', 'mela-simplebooking' ); ?></p>
	    <?php
	}
	  
	/**
	 * Top level menu callback function
	 */
	function melasimplebooking_options_page_html() {
	    // check user capabilities
	    if ( ! current_user_can( 'manage_options' ) ) {
	        return;
	    }
	 
	    // add error/update messages
	 
	    // check if the user have submitted the settings
	    // WordPress will add the "settings-updated" $_GET parameter to the url
	    if ( isset( $_GET['settings-updated'] ) ) {
	        // add settings saved message with the class of "updated"
	        add_settings_error( 'melasimplebooking_messages', 'melasimplebooking_message', __( 'Settings Saved', 'mela-simplebooking' ), 'updated' );
	    }
	 
	    // show error/update messages
	    settings_errors( 'melasimplebooking_messages' );
	    ?>
	    <div class="wrap">
	        <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
	        <form action="options.php" method="post">
	            <?php
	            // output security fields for the registered setting "melasimplebooking"
	            settings_fields( 'melasimplebooking' );
	            // output setting sections and their fields
	            // (sections are registered for "melasimplebooking", each field is registered to a specific section)
	            do_settings_sections( 'melasimplebooking' );
	            // output save settings button
	            submit_button( 'Save Settings' );
	            ?>
	        </form>
	    </div>
	    <?php
	}

}