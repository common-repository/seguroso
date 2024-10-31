<?php
/**
 * Plugin Name: G2 Security
 * Plugin URI: http://ezosc.com/
 * Description: A WordPress security plugin provides free security, protecting your website from hacks and malware. 
 * Author: ezOSC
 * Author URI: http://www.ezosc.com
 * Version: 1.2.3
 * Text Domain: seguroso
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-seguroso-activator.php
 */
function activate_seguroso() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-seguroso-activator.php';
	Seguroso_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-seguroso-deactivator.php
 */
function deactivate_seguroso() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-seguroso-deactivator.php';
	Seguroso_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_seguroso' );
register_deactivation_hook( __FILE__, 'deactivate_seguroso' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-seguroso.php';

/**
 * Include Modules
 */
require plugin_dir_path( __FILE__ ) . 'includes/modules/class-general.php';
require plugin_dir_path( __FILE__ ) . 'includes/modules/class-google-recaptcha.php';
require plugin_dir_path( __FILE__ ) . 'includes/modules/class-duplicate.php';
require plugin_dir_path( __FILE__ ) . 'includes/modules/class-vulnerability-alerts.php';
require plugin_dir_path( __FILE__ ) . 'includes/modules/class-google-safe-browsing.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_seguroso() {

	$plugin = new Seguroso();
	$plugin->run();

}
run_seguroso();


/*
 * Add Extra Link in Plugin Page
*/
function seguroso_extra_links($links, $file) {
	if ($file == plugin_basename(__FILE__)) {
		$links[]  = '<a target="_blank" href="http://ezosc.om" title="We provide WP Support" style="padding:1px 5px;color:#fff;background:#feba12;border-radius:1px;">We provide WP Support</a>';
	}
	return $links;
}
add_filter('plugin_row_meta', 'seguroso_extra_links', 10, 2);