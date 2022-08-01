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
     * All Published Settings.
     *
     * @since    1.0.0
     * @access   protected
     * @var      array    $all_published_pages    All published pages.
     */
    protected $all_published_pages;

    /**
     * All language for populate dropdown language.
     *
     * @since    1.0.0
     * @access   protected
     * @var      array    $all_published_pages    All published pages.
     */
    protected $languages;

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

            // Plugin Settings
            'melasimplebooking_ida' => array(
                'field_type' => 'number',
                'class' => '',
                'section' => 'plugin_settings',
                'label' => __( 'simpleBooking IDA number', 'mela-simplebooking' ),
                'description' => __( 'Write here your simpleBooking IDA number', 'mela-simplebooking' ),
            ),
            'melasimplebooking_language' => array(
                'field_type' => 'select',
                'class' => 'selectpicker',
                'section' => 'plugin_settings',
                'label' => __( 'Default language', 'mela-simplebooking' ),
                'description' => __( 'Choose the default language for simpleBooking. (Keep in mind that if you use WPML the language switching is automagic)', 'mela-simplebooking' ),
                'select_placeholder' => __('Select the default language', 'mela-simplebooking'),
                'select_options' => $this->languages,
            ),
            'melasimplebooking_hideonscroll' => array(
                'field_type' => 'checkbox',
                'class' => '',
                'section' => 'plugin_settings',
                'label' => __( 'Hide on scroll', 'mela-simplebooking' ),
                'description' => __( 'Check this to auto-hide the bar on scroll for desktop devices', 'mela-simplebooking' ),
            ),
            'melasimplebooking_disable_banner_pages' => array(
                'field_type' => 'multiple_select',
                'class' => 'selectpicker',
                'section' => 'plugin_settings',
                'label' => __( 'Disable bar', 'mela-simplebooking' ),
                'description' => __( 'Disable the simpleBooking in selected pages', 'mela-simplebooking' ),
                'select_placeholder' => __('Select one or more pages', 'mela-simplebooking'),
                'select_options' => $this->all_published_pages,
            ),
            'melasimplebooking_delete_settings' => array(
                'field_type' => 'checkbox',
                'class' => '',
                'section' => 'plugin_settings',
                'label' => __( 'Delete Settings', 'mela-simplebooking' ),
                'description' => __( 'Check this to delete all settings on plugin unistall', 'mela-simplebooking' ),
            ),
            
            // Style Settings
            'melasimplebooking_custom_color' => array(
                'field_type' => 'text',
                'class' => 'color-field',
                'section' => 'style_settings',
                'label' => __( 'Custom color', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_background_color' => array(
                'field_type' => 'text',
                'class' => 'color-field',
                'section' => 'style_settings',
                'label' => __( 'Background color', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_label_color' => array(
                'field_type' => 'text',
                'class' => 'color-field',
                'section' => 'style_settings',
                'label' => __( 'Label color', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_label_hover_color' => array(
                'field_type' => 'text',
                'class' => 'color-field',
                'section' => 'style_settings',
                'label' => __( 'Label hover color', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_widget_color' => array(
                'field_type' => 'text',
                'class' => 'color-field',
                'section' => 'style_settings',
                'label' => __( 'Widget color', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_widget_bg_color' => array(
                'field_type' => 'text',
                'class' => 'color-field',
                'section' => 'style_settings',
                'label' => __( 'Widget background color', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_widget_element_hover_color' => array(
                'field_type' => 'text',
                'class' => 'color-field',
                'section' => 'style_settings',
                'label' => __( 'Widget element hover color', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_widget_element_bg_color' => array(
                'field_type' => 'text',
                'class' => 'color-field',
                'section' => 'style_settings',
                'label' => __( 'Widget element background color', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_box_shadow_color' => array(
                'field_type' => 'text',
                'class' => 'color-field',
                'section' => 'style_settings',
                'label' => __( 'Box shadow color', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_box_shadow_color_hover' => array(
                'field_type' => 'text',
                'class' => 'color-field',
                'section' => 'style_settings',
                'label' => __( 'Box shadow color hover', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_box_shadow_color_focus' => array(
                'field_type' => 'text',
                'class' => 'color-field',
                'section' => 'style_settings',
                'label' => __( 'Box shadow color focus', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_add_room_box_shadow_color' => array(
                'field_type' => 'text',
                'class' => 'color-field',
                'section' => 'style_settings',
                'label' => __( 'Add room box shadow', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_intent_selection_color' => array(
                'field_type' => 'text',
                'class' => 'color-field',
                'section' => 'style_settings',
                'label' => __( 'Intent selection color', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_intent_selection_days_bg_color' => array(
                'field_type' => 'text',
                'class' => 'color-field',
                'section' => 'style_settings',
                'label' => __( 'Intent selection days background color', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_button_bg_color' => array(
                'field_type' => 'text',
                'class' => 'color-field',
                'section' => 'style_settings',
                'label' => __( 'Button background color', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_button_hover_bg_color' => array(
                'field_type' => 'text',
                'class' => 'color-field',
                'section' => 'style_settings',
                'label' => __( 'Button hover background color', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_icon_color' => array(
                'field_type' => 'text',
                'class' => 'color-field',
                'section' => 'style_settings',
                'label' => __( 'Icon color', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_link_color' => array(
                'field_type' => 'text',
                'class' => 'color-field',
                'section' => 'style_settings',
                'label' => __( 'Link color', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_accent_color' => array(
                'field_type' => 'text',
                'class' => 'color-field',
                'section' => 'style_settings',
                'label' => __( 'Accent color', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_accent_color_hover' => array(
                'field_type' => 'text',
                'class' => 'color-field',
                'section' => 'style_settings',
                'label' => __( 'Accent color hover', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_field_background_color' => array(
                'field_type' => 'text',
                'class' => 'color-field',
                'section' => 'style_settings',
                'label' => __( 'Field background color', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_selected_days_color' => array(
                'field_type' => 'text',
                'class' => 'color-field',
                'section' => 'style_settings',
                'label' => __( 'Selected days color', 'mela-simplebooking' ),
                'description' => '',
            ),
            'melasimplebooking_calendar_background_color' => array(
                'field_type' => 'text',
                'class' => 'color-field',
                'section' => 'style_settings',
                'label' => __( 'Calendar background color', 'mela-simplebooking' ),
                'description' => '',
            ),  

        ];
        // count 142
        $this->languages = [
            "Afrikaans" => "af",
            "Albanian - shqip" => "sq",
            "Amharic - አማርኛ" => "am",
            "Arabic - العربية" => "ar",
            "Aragonese - aragonés" => "an",
            "Armenian - հայերեն" => "hy",
            "Asturian - asturianu" => "ast",
            "Azerbaijani - azərbaycan dili" => "az",
            "Basque - euskara" => "eu",
            "Belarusian - беларуская" => "be",
            "Bengali - বাংলা" => "bn",
            "Bosnian - bosanski" => "bs",
            "Breton - brezhoneg" => "br",
            "Bulgarian - български" => "bg",
            "Catalan - català" => "ca",
            "Central Kurdish - کوردی (دەستنوسی عەرەبی" => "ckb",
            "Chinese - 中文" => "zh",
            "Chinese (Hong Kong - 中文（香港）" => "zh-HK",
            "Chinese (Simplified - 中文（简体）" => "zh-CN",
            "Chinese (Traditional - 中文（繁體）" => "zh-TW",
            "Corsican" => "co",
            "Croatian - hrvatski" => "hr",
            "Czech - čeština" => "cs",
            "Danish - dansk" => "da",
            "Dutch - Nederlands" => "nl",
            "English" => "en",
            "English (Australia" => "en-AU",
            "English (Canada" => "en-CA",
            "English (India" => "en-IN",
            "English (New Zealand" => "en-NZ",
            "English (South Africa" => "en-ZA",
            "English (United Kingdom" => "en-GB",
            "English (United States" => "en-US",
            "Esperanto - esperanto" => "eo",
            "Estonian - eesti" => "et",
            "Faroese - føroyskt" => "fo",
            "Filipino" => "fil",
            "Finnish - suomi" => "fi",
            "French - français" => "fr",
            "French (Canada - français (Canada" => "fr-CA",
            "French (France - français (France" => "fr-FR",
            "French (Switzerland - français (Suisse" => "fr-CH",
            "Galician - galego" => "gl",
            "Georgian - ქართული" => "ka",
            "German - Deutsch" => "de",
            "German (Austria - Deutsch (Österreich" => "de-AT",
            "German (Germany - Deutsch (Deutschland" => "de-DE",
            "German (Liechtenstein - Deutsch (Liechtenstein" => "de-LI",
            "German (Switzerland - Deutsch (Schweiz" => "de-CH",
            "Greek - Ελληνικά" => "el",
            "Guarani" => "gn",
            "Gujarati - ગુજરાતી" => "gu",
            "Hausa" => "ha",
            "Hawaiian - ʻŌlelo Hawaiʻi" => "haw",
            "Hebrew - עברית" => "he",
            "Hindi - हिन्दी" => "hi",
            "Hungarian - magyar" => "hu",
            "Icelandic - íslenska" => "is",
            "Indonesian - Indonesia" => "id",
            "Interlingua" => "ia",
            "Irish - Gaeilge" => "ga",
            "Italian - italiano" => "it",
            "Italian (Italy - italiano (Italia" => "it-IT",
            "Italian (Switzerland - italiano (Svizzera" => "it-CH",
            "Japanese - 日本語" => "ja",
            "Kannada - ಕನ್ನಡ" => "kn",
            "Kazakh - қазақ тілі" => "kk",
            "Khmer - ខ្មែរ" => "km",
            "Korean - 한국어" => "ko",
            "Kurdish - Kurdî" => "ku",
            "Kyrgyz - кыргызча" => "ky",
            "Lao - ລາວ" => "lo",
            "Latin" => "la",
            "Latvian - latviešu" => "lv",
            "Lingala - lingála" => "ln",
            "Lithuanian - lietuvių" => "lt",
            "Macedonian - македонски" => "mk",
            "Malay - Bahasa Melayu" => "ms",
            "Malayalam - മലയാളം" => "ml",
            "Maltese - Malti" => "mt",
            "Marathi - मराठी" => "mr",
            "Mongolian - монгол" => "mn",
            "Nepali - नेपाली" => "ne",
            "Norwegian - norsk" => "no",
            "Norwegian Bokmål - norsk bokmål" => "nb",
            "Norwegian Nynorsk - nynorsk" => "nn",
            "Occitan" => "oc",
            "Oriya - ଓଡ଼ିଆ" => "or",
            "Oromo - Oromoo" => "om",
            "Pashto - پښتو" => "ps",
            "Persian - فارسی" => "fa",
            "Polish - polski" => "pl",
            "Portuguese - português" => "pt",
            "Portuguese (Brazil - português (Brasil" => "pt-BR",
            "Portuguese (Portugal - português (Portugal" => "pt-PT",
            "Punjabi - ਪੰਜਾਬੀ" => "pa",
            "Quechua" => "qu",
            "Romanian - română" => "ro",
            "Romanian (Moldova - română (Moldova" => "mo",
            "Romansh - rumantsch" => "rm",
            "Russian - русский" => "ru",
            "Scottish Gaelic" => "gd",
            "Serbian - српски" => "sr",
            "Serbo - Croatian" => "sh",
            "Shona - chiShona" => "sn",
            "Sindhi" => "sd",
            "Sinhala - සිංහල" => "si",
            "Slovak - slovenčina" => "sk",
            "Slovenian - slovenščina" => "sl",
            "Somali - Soomaali" => "so",
            "Southern Sotho" => "st",
            "Spanish - español" => "es",
            "Spanish (Argentina - español (Argentina" => "es-AR",
            "Spanish (Latin America - español (Latinoamérica" => "es-419",
            "Spanish (Mexico - español (México" => "es-MX",
            "Spanish (Spain - español (España" => "es-ES",
            "Spanish (United States - español (Estados Unidos" => "es-US",
            "Sundanese" => "su",
            "Swahili - Kiswahili" => "sw",
            "Swedish - svenska" => "sv",
            "Tajik - тоҷикӣ" => "tg",
            "Tamil - தமிழ்" => "ta",
            "Tatar" => "tt",
            "Telugu - తెలుగు" => "te",
            "Thai - ไทย" => "th",
            "Tigrinya - ትግርኛ" => "ti",
            "Tongan - lea fakatonga" => "to",
            "Turkish - Türkçe" => "tr",
            "Turkmen" => "tk",
            "Twi" => "tw",
            "Ukrainian - українська" => "uk",
            "Urdu - اردو" => "ur",
            "Uyghur" => "ug",
            "Uzbek - o‘zbek" => "uz",
            "Vietnamese - Tiếng Việt" => "vi",
            "Walloon - wa" => "wa",
            "Welsh - Cymraeg" => "cy",
            "Western Frisian" => "fy",
            "Xhosa" => "xh",
            "Yiddish" => "yi",
            "Yoruba - Èdè Yorùbá" => "yo",
            "Zulu - isiZulu" => "zu"
        ];

        write_log($this->plugin_settings);

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

    public function load_plugin_languages() {

        $result = $this->languages;

        return $result;

    }

}