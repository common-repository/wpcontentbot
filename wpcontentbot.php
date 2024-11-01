<?php 
/*
 * Plugin Name: WP Content Bot
 * Plugin URI: https://wpcontentbot.io/
 * Description: WP Content Bot is a WordPress plugin that automates content creation for your website by using artificial intelligence and natural language processing.
 * Version: 1.0.2
 * Requires at least: 5.2
 * Requires PHP: 7.2
 * Author: Toast Plugins
 * Author URI: https://www.toastplugins.co.uk/
 * Text Domain: cg
 * License: GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


if ( ! class_exists( 'WPCB' ) ) {

    class WPCB{

        public $version = '';

        public function __construct() {
			// Do nothing.
		}

        public function initialize() {

            $default_headers = array('Version' => 'Version',);
            $this->version = get_file_data(__FILE__, $default_headers, 'plugin')['Version']; 

            $this->define( 'WPCB', true );
            $this->define( 'WPCB_PATH', plugin_dir_path( __FILE__ ) );
            $this->define( 'WPCB_DIR_URL', plugin_dir_url( __FILE__ ) );
            $this->define( 'WPCB_VERSION', $this->version );

            include_once WPCB_PATH.'/includes/setup.php';
            include_once WPCB_PATH.'/includes/enqueue.php';
            include_once WPCB_PATH.'/includes/functions.php';
            include_once WPCB_PATH.'/templates/load-template.php';

        }

        public function define( $name, $value = true ) {
			if ( ! defined( $name ) ) {
				define( $name, $value );
			}
		}

    }

}

$wpcb = new WPCB();
$wpcb->initialize();