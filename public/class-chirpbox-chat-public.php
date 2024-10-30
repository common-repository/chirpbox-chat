<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://www.getchirpbox.com
 * @since      1.0.0
 *
 * @package    Chirpbox_Chat
 * @subpackage Chirpbox_Chat/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Chirpbox_Chat
 * @subpackage Chirpbox_Chat/public
 * @author     Chirpbox <getchirpbox@gmail.com>
 */
class Chirpbox_Chat_Public {

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
   		$this->chirpbox_chat_options = get_option($this->plugin_name);

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
		 * defined in Chirpbox_Chat_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Chirpbox_Chat_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/chirpbox-chat-public.css', array(), $this->version, 'all' );

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
		 * defined in Chirpbox_Chat_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Chirpbox_Chat_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/chirpbox-chat-public.js', array( 'jquery' ), $this->version, false );

	}


	function insertCode() {
		$site_url = $this->chirpbox_chat_options['site_url'];
		if($site_url) {
			if ($site_url != "" && $site_url != 'undefined') {
				echo '<script>var js=document.createElement(\'script\');js.src="http://getchirpbox.com/webcomponents/webcomponents.js";document.head.appendChild(js);</script>';
				echo '<script>var cb_sn="'.$site_url.'";</script><link rel="import" href="http://getchirpbox.com/frame.html" /><script> window.addEventListener(\'HTMLImportsLoaded\', function(e) {var cb_l=document.querySelector(\'link[rel="import"]\');var cb_c=cb_l.import;var el = cb_c.querySelector(\'.cbox-wrap\');document.body.appendChild(el.cloneNode(true));});</script>';
			}
		}
	}

}
