<?php
/**
 * Plugin Name: ACF Image Sync
 * Plugin URI: https://github.com/singhdigvijay99/acf-image-sync
 * Description: Safely sync ACF image fields between WordPress environments without duplicate media.
 * Version: 1.0.0
 * Author: Digvijay Singh
 * License: MIT
 * License URI: https://opensource.org/licenses/MIT
 * Text Domain: acf-image-sync
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/** Constants */
define( 'AIS_VERSION', '1.0.0' );
define( 'AIS_FILE', __FILE__ );
define( 'AIS_PATH', plugin_dir_path( __FILE__ ) );
define( 'AIS_URL', plugin_dir_url( __FILE__ ) );

/** Autoload core */
require_once AIS_PATH . 'includes/class-acf-image-sync.php';

/** Hooks */
register_activation_hook( __FILE__, [ 'ACF_Image_Sync', 'activate' ] );
register_deactivation_hook( __FILE__, [ 'ACF_Image_Sync', 'deactivate' ] );


