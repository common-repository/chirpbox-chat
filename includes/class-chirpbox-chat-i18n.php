<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://www.getchirpbox.com
 * @since      1.0.0
 *
 * @package    Chirpbox_Chat
 * @subpackage Chirpbox_Chat/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Chirpbox_Chat
 * @subpackage Chirpbox_Chat/includes
 * @author     Chirpbox <getchirpbox@gmail.com>
 */
class Chirpbox_Chat_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'chirpbox-chat',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
