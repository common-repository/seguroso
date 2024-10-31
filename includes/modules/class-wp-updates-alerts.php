<?php
/*
 * Google Recaptcha Integration
 * 
 * Thanks to the plugin === Google Captcha (reCAPTCHA) by BestWebSoft ===
 * https://wordpress.org/plugins/google-captcha/
 */

class G2_WP_Updates_Alerts {
    static public $id = 'g2-security-wua';

    public function __construct() {
        $nextRun = get_option('g2_wp_updates_alerts_check_next');
        if (time() >= $nextRun) {
            update_option('g2_wp_updates_alerts_check_next', time() + ( 12 * 60 * 60 ) + rand(60,600));
            add_action('init', array($this, 'wp_update_check'), 20);
        } 
        //update_option('g2_wp_updates_alerts_check_next', time() - ( 12 * 60 * 60 ));
    }
    
    public function wp_update_check() {
        $config = get_option('g2Security');
        if (empty($config['email'])) return;
        
        //Get List of Plugins/Theme to update
        $pluginsUpdateList = Array();
        $themeUpdateList = Array();
        $coreUpdate = Array();
        
        $updateList = array_merge($pluginsUpdateList, $themeUpdateList, $coreUpdate);
        update_option('g2_wp_updates_alerts_check', time());
        
        if (sizeof($updateList) > 0){
            $config = get_option('g2Security');
            if (!empty($config['email'])) {
                $plugin_url = get_admin_url() . 'plugins.php?plugin_status=upgrade';

                $message = 'We have detected one or more of your plugins/theme need an update.' 
                        . implode("\n - ", $updateList) . "\n\n" 
                        . 'Please visit this url to update your wordpress site: ' .$plugin_url
                        . "\n\n"
                        . 'This message was sent automatically from "G2 Security". ' . "\n\n"
                        . 'Click here if you need Wordpress Support:' . "\n"
                        . 'http://ezosc.com';


                $email = $config['email'];
                $sent = wp_mail($email, 'G2 Alert - ' . get_option('blogname') . ' - Available Updates', $message);
            }
        }
        

    }
    
    /**
     * Removes the update nag for non admin users.
     *
     * @return void
     */
    public static function remove_update_nag_for_nonadmins() {
        if ( !current_user_can( 'update_plugins' ) ) { 
                remove_action( 'admin_notices', 'update_nag', 3 );
        }
    }
    
}

// include file G2_WP_Updates_Alerts
// to do call G2_WP_Updates_Alerts::remove_update_nag_for_nonadmins from admin