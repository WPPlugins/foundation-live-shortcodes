<?php

if ( ! defined( 'ABSPATH' ) ) exit;

class WordPress_Plugin_Template_Settings {
    private $dir;
	private $file;
	private $assets_dir;
	private $assets_url;
	private $settings_base;
	private $settings;

	public function __construct( $file ) {
		$this->file = $file;
		$this->dir = dirname( $this->file );
		$this->assets_dir = trailingslashit( $this->dir ) . 'assets';
		$this->assets_url = esc_url( trailingslashit( plugins_url( '/assets/', $this->file ) ) );
		$this->settings_base = 'epcsc_';

		add_action( 'admin_init', array( $this, 'init' ) );

		add_action( 'admin_init' , array( $this, 'register_settings' ) );

		add_action( 'admin_menu' , array( $this, 'add_menu_item' ) );

		add_filter( 'plugin_action_links_' . plugin_basename( $this->file ) , array( $this, 'add_settings_link' ) );
	}

	public function init() {
		$this->settings = $this->settings_fields();
	}

	public function add_menu_item() {
		$page = add_menu_page( __( 'Shortcodes', 'plugin_textdomain' ) , __( 'Shortcodes', 'plugin_textdomain' ) , 'manage_options' , 'plugin_settings' ,  array( $this, 'settings_page' ) );
		add_action( 'admin_print_styles-' . $page, array( $this, 'settings_assets' ) );
	}

	public function settings_assets() {
		wp_register_style( 'sc-backstyle', EPC_SC_FILES . 'css/sc-backstyle.css', false, '1.0.0' );
        wp_enqueue_style( 'sc-backstyle' );
	}

	public function add_settings_link( $links ) {
		$settings_link = '<a href="options-general.php?page=plugin_settings">' . __( 'Settings', 'plugin_textdomain' ) . '</a>';
  		array_push( $links, $settings_link );
  		return $links;
	}

	private function settings_fields() {

		$settings['standard'] = array(
			'title'					=> __( 'Global Parameters', 'plugin_textdomain' ),
			'description'			=> __( 'For a maximal compatibility, you can define your theme configuration.', 'plugin_textdomain' ),
			'fields'				=> array(
				array(
					'id' 			=> 'radio_buttons',
					'label'			=> __( 'Theme Configuration', 'plugin_textdomain' ),
					'description'	=> __( 'If you do not know your configuration, please contact the creator of your theme or open a support ticket indicating the URL of your website.', 'plugin_textdomain' ),
					'type'			=> 'radio',
					'options'		=> array( 'nothemeupdate' => 'Your theme use Foundation and Modernizr', 'minthemeupdate' => 'Your theme use Foundation and Foundation Icons 3 but no use Modernizr.js', 'miniconthemeupdate' => 'Your theme use Foundation but no use Foundation Icons 3 and Modernizr.js','mediumthemeupdate' => 'Your theme use Modernizr.js but no use Foundation and Foundation Icons 3','maxthemeupdate' => 'Your theme does not use Foundation and Modernizr.js' ),
					'default'		=> 'nothemeupdate'
				),
			)
		);

		$settings = apply_filters( 'plugin_settings_fields', $settings );

		return $settings;
	}

	public function register_settings() {
		if( is_array( $this->settings ) ) {
			foreach( $this->settings as $section => $data ) {

				add_settings_section( $section, $data['title'], array( $this, 'settings_section' ), 'plugin_settings' );

				foreach( $data['fields'] as $field ) {

					$validation = '';
					if( isset( $field['callback'] ) ) {
						$validation = $field['callback'];
					}

					$option_name = $this->settings_base . $field['id'];
					register_setting( 'plugin_settings', $option_name, $validation );

					add_settings_field( $field['id'], $field['label'], array( $this, 'display_field' ), 'plugin_settings', $section, array( 'field' => $field ) );
				}
			}
		}
	}

	public function settings_section( $section ) {
		$html = '<p> ' . $this->settings[ $section['id'] ]['description'] . '</p>' . "\n";
		echo $html;
	}

	public function display_field( $args ) {

		$field = $args['field'];

		$html = '';

		$option_name = $this->settings_base . $field['id'];
		$option = get_option( $option_name );

		$data = '';
		if( isset( $field['default'] ) ) {
			$data = $field['default'];
			if( $option ) {
				$data = $option;
			}
		}

		switch( $field['type'] ) {
			case 'radio':
				foreach( $field['options'] as $k => $v ) {
					$checked = false;
					if( $k == $data ) {
						$checked = true;
					}
					$html .= '<div class="addfield-block"><label for="' . esc_attr( $field['id'] . '_' . $k ) . '"><input type="radio" ' . checked( $checked, true, false ) . ' name="' . esc_attr( $option_name ) . '" value="' . esc_attr( $k ) . '" id="' . esc_attr( $field['id'] . '_' . $k ) . '" /> ' . $v . '</label></div> ';
				}
			break;
		}

		switch( $field['type'] ) {

			case 'checkbox_multi':
			case 'radio':
			case 'select_multi':
				$html .= '<br/><span class="description">' . $field['description'] . '</span>';
			break;

			default:
				$html .= '<label for="' . esc_attr( $field['id'] ) . '"><span class="description">' . $field['description'] . '</span></label>' . "\n";
			break;
		}
		
		echo $html;
	}

	public function validate_field( $data ) {
		if( $data && strlen( $data ) > 0 && $data != '' ) {
			$data = urlencode( strtolower( str_replace( ' ' , '-' , $data ) ) );
		}
		return $data;
	}

	public function settings_page() {

		// Build page HTML
		$html = '<div class="wrap" id="plugin_settings">' . "\n";
			$html .='<div id="sc-adminpage"><div class="head-info">Foundation Live  Shortcodes</div><img class="zurb-hero" src="http://epicadesign.fr/cdn-themes/global/images/zurb-hero.svg" /><div class="general-info"><strong>Based on :</strong><ul><li>ZURB Foundation Framework - v 5.5.0</li><li>Foundation Icon Fonts 3</li><li><a href="http://foundation.zurb.com/" target="_blank">Go ZURB Foundation website</a></li></ul></div><div class="general-info"><strong>Developed by :</strong><ul><li>Epica design</li><li>Website: <a href="http://epicadesign.fr" target="_blank">http://epicadesign.fr</a></li><li>Contact: contact@epicadesign.fr</li></ul></div></div>';
			$html .= '<form method="post" action="options.php" enctype="multipart/form-data">' . "\n";
				// Get settings fields
				ob_start();
				settings_fields( 'plugin_settings' );
				do_settings_sections( 'plugin_settings' );
				$html .= ob_get_clean();

				$html .= '<p class="submit">' . "\n";
					$html .= '<input name="Submit" type="submit" class="button-primary" value="' . esc_attr( __( 'Save Settings' , 'plugin_textdomain' ) ) . '" />' . "\n";
				$html .= '</p>' . "\n";
			$html .= '</form>' . "\n";
		$html .= '</div>' . "\n";
		
		// Free version only
		$html .= '<div id="promobox" style="margin:30px 0"><div class="panel callout radius"><h4>You want more shortcodes !!!</h4><p><strong>Purchase the <span style="color:#f1592a">PRO version</span> for <span style="color:#f1592a">only 12 €uros</span></strong>. <a style="float:right" class="button radius warning" href="http://epicadesign.fr/shop/foundation-live-shortcodes-pro/" target="_blank">Purchase Pro Version</a></p><p>PRO version add Slider shortcode - Modal Box shortcode - Tabs shortcode - Tooltip shortcode <br />and Dropdown Button shortcode.</p></div>';

		echo $html;
	}

}

$settings = new WordPress_Plugin_Template_Settings( __FILE__ );

