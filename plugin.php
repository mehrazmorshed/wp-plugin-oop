<?php
/*
 * Plugin Name:       Plugin Name
 * Plugin URI:        https://wordpress.org/plugins/plugin-slug/
 * Description:       Plugin short description.
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Mehraz Morshed
 * Author URI:        https://profiles.wordpress.org/mehrazmorshed/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       plugin-text-domain
 * Domain Path:       /languages
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if (!class_exists('Plugin_Class')) {

    final class Plugin_Class {

        public function __construct() {

        	$this->define();

        	$this->include();

        	$this->hook();
        }

        public function define() {

        	// Define Constants
        }

        public function include() {

        	// Include Files
        }

        public function hook() {

            // Add Hooks
        }

    }

    // Instantiate the class
    $plugin_class = new Plugin_Class();
}