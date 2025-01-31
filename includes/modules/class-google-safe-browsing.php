<?php
/*
 * Google Safe Browsing
 * check if the site is black listed on google and send a notidication
 * 
 */

class G2_Google_Safe_Browsing {

    static public $id = 'g2-security-gsb';
    static $ezosc_url = 'http://api.ezosc.com/g2/google_safe_browsing.php?domain=';
    static $google_url = "https://www.google.com/transparencyreport/safebrowsing/diagnostic/?hl=en#url=";

    public function __construct() {
        $nextRun = get_option('g2_google_safe_browsing_check_next');
        if (time() >= $nextRun) {
            update_option('g2_google_safe_browsing_check_next', time() + ( 12 * 60 * 60 ) + rand(60,600));
            add_action('init', array($this, 'safe_browsing_check'), 20);
        }
        //update_option('g2_google_safe_browsing_check_next', time() - ( 12 * 60 * 60 ));
    }

    public function safe_browsing_check() {

        $config = get_option('g2Security');
        if (empty($config['email'])) return;

        $isNoSafe = false;

        $domain_name = preg_replace('/^www\./', '', $_SERVER['SERVER_NAME']);
        $url =  G2_Google_Safe_Browsing::$ezosc_url . $domain_name;
        $response = wp_remote_get($url);
        if (is_array($response)) {
            $body = trim($response['body']); // use the content

            update_option('g2_google_safe_browsing_check', time());
            
            if ($body == "Dangerous"){
                $isNoSafe = true;
            }
             update_option('g2_google_safe_browsing_report', $body);

            // send email if vulnderabilities have been detected
            $config = get_option('g2Security');
            if (!empty($config['email']) && $isNoSafe) {

                $message = 'We have detected that your site is Blacklisted on Google' . "\n\n"
                        . 'Please visit this url to find what happen: ' . G2_Google_Safe_Browsing::$google_url . $domain_name
                        . "\n\n"
                        . 'This message was sent automatically from "G2 Security". ' . "\n\n"
                        . 'Click here if you need Wordpress Support:' . "\n"
                        . 'http://ezosc.com';


                $email = $config['email'];
                $sent = wp_mail($email, 'G2 Alert - ' . get_option('blogname') . ' - Google Blacklisted', $message);
            }
        }
    }

}

new G2_Google_Safe_Browsing();