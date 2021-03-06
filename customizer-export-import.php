<?php
/**
 * Plugin Name: Customizer Export/Import
 * Plugin URI: http://www.wpbeaverbuilder.com/wordpress-customizer-export-import-plugin/
 * Description: Adds settings export and import functionality to the WordPress customizer.
 * Version: 0.1
 * Author: The Beaver Builder Team
 * Author URI: http://www.wpbeaverbuilder.com
 * License: GNU General Public License v2.0
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: customizer-export-import
 */
define( 'CEI_VERSION', '0.1' );
define( 'CEI_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'CEI_PLUGIN_URL', plugins_url( '/', __FILE__ ) );
define( 'CEI_TD', 'customizer-export-import' );

/* Classes */
require_once CEI_PLUGIN_DIR . 'classes/class-cei-core.php';

/* Actions */
add_action( 'plugins_loaded', 'CEI_Core::load_plugin_textdomain' );
add_action( 'init', 'CEI_Core::init' );
add_action( 'customize_controls_print_scripts', 'CEI_Core::controls_print_scripts' );
add_action( 'customize_controls_enqueue_scripts', 'CEI_Core::controls_enqueue_scripts' );
add_action( 'customize_register', 'CEI_Core::register' );