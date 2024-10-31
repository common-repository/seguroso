<?php
/**
 * Fired during plugin activation
 *
 * @link       http://ezosc.com
 * @since      1.0.0
 *
 * @package    Seguroso
 * @subpackage Seguroso/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Seguroso
 * @subpackage Seguroso/includes
 * @author     ezosc team <suport@gmail.com.com>
 */
class Seguroso_Activator {
	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		$config = NULL;
		$settings = array(
			'gg_rpc' => 'Disable XML­RPC ',
			'gg_login_hint' => 'Disable login hints ',
			'gg_block_query' => 'Block Bad Queries ',
			'gg_remove_header' => 'Removes Header ',
			'gg_disable_file_editor' => 'Disable File Editor ',
			'gg_disable_pingback' => 'Disable XML­RPC Pingback and remove header',
		);
		foreach ( $settings as $k => $v ) {
			$config[ $k ] = 1;
		}
		$config['email'] = get_option( 'admin_email' );
		update_option( 'g2Security', $config );
		update_option( 'g2_vulnerability_check', time() );
	}
}
