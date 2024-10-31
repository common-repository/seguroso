<div class="wrap">

    <h1>G2 Security DashBoard</h1>

    <p>For support, e-mail us at <a target="_blank" href="https://woocommerce.ezosc.com/?utm_source=g2&utm_medium=link&utm_campaign=dashboard">support@ezosc.com</a>
    </p>
    <h3>Reports</h3>
    <table class="wp-list-table widefat striped plugins">
        <thead>
            <tr>
                <td class="manage-column check-column" scope="col">&nbsp;</td>
                <th width="250" class="manage-column column-name column-primary" scope="col">Type</th>
                <th class="manage-column column-description" scope="col">Status</th>
            </tr>
        </thead>
        <tbody id="report-themes">
            <tr>
                <th align="center" class="check-column" scope="row">&nbsp; <span style="color:green" class="dashicons dashicons-yes"></span></th>
                <td class="plugin-title column-primary">WPScan Vulnerability Database</td>
                <td><?php printf(__('Last request to %s on %s', G2_Vulnerability_Alerts::$id), '<a href="https://wpvulndb.com/" target="_blank">WPScan Vulnerability Database</a>', date_i18n(get_option('date_format') . ' ' . get_option('time_format'), get_option('g2_report_last_check'))); ?>
                </td>
            </tr>

            <tr>
                <th align="center" class="check-column" scope="row">&nbsp; 
                    <?php if (get_option('g2_google_safe_browsing_report') == "Dangerous") { ?>
                        <span style="color:Crimson" class="dashicons dashicons-warning"></span>
                    <?php } else { ?>
                        <span style="color:green" class="dashicons dashicons-yes"></span>
                    <?php } ?>
                </th>

                <td class="plugin-title column-primary">Google Safe Browsing Site Status / BlackListed</td>
                <td>
                    <?php if (get_option('g2_google_safe_browsing_report') == "Dangerous") { ?>
                        <span style="color:red">
                            <?php printf(__('Current status: %s', G2_Google_Safe_Browsing::$id), get_option('g2_google_safe_browsing_report')); ?>
                        </span>
                    <?php } else { ?>
                        <span style="color:green">
                            <?php printf(__('Current status: %s', G2_Google_Safe_Browsing::$id), get_option('g2_google_safe_browsing_report')); ?>
                        </span>
                    <?php } ?>
                    <br><?php printf(__('Last request on %s', G2_Google_Safe_Browsing::$id), date_i18n(get_option('date_format') . ' ' . get_option('time_format'), get_option('g2_report_last_check'))); ?>
                    <br>for more information visit <a href="https://www.google.com/transparencyreport/safebrowsing/diagnostic/?hl=en#url=" target="_blank">Google Safe Browsing Site Status</a> 
                </td>
                </td>
            </tr>

        </tbody>
    </table>

    <h3>WordPress</h3>
    <table class="wp-list-table widefat striped plugins">
        <thead>
            <tr>
                <td scope="col" class="manage-column check-column">&nbsp;</td>
                <th scope="col" class="manage-column column-name column-primary" width="250"><?php _e('Name', G2_Vulnerability_Alerts::$id) ?></th>
                <th scope="col" class="manage-column column-description"><?php _e('Vulnerabilities', G2_Vulnerability_Alerts::$id) ?></th>
            </tr>
        </thead>
        <tbody id="report-wordpress">
            <tr>
                <th scope="row" class="check-column" align="center"><?php echo G2_Vulnerability_Alerts::get_status('wordpress') ?></span></th>
                <td class="plugin-title column-primary"><strong>WordPress</strong> <?php echo sprintf(__('Version %s', G2_Vulnerability_Alerts::$id), get_bloginfo('version')) ?></td>
                <td><?php G2_Vulnerability_Alerts::list_vulnerabilities('wordpress') ?></td>
            </tr>
        </tbody>
    </table>
    <h3><?php _e('Plugins', G2_Vulnerability_Alerts::$id) ?></h3>
    <table class="wp-list-table widefat striped plugins">
        <thead>
            <tr>
                <td scope="col" class="manage-column check-column">&nbsp;</td>
                <th scope="col" class="manage-column column-name column-primary" width="250"><?php _e('Name', G2_Vulnerability_Alerts::$id) ?></th>
                <th scope="col" class="manage-column column-description"><?php _e('Vulnerabilities', G2_Vulnerability_Alerts::$id) ?></th>
            </tr>
        </thead>
        <tbody id="report-plugins">
            <?php foreach (get_plugins() as $name => $details) : ?>
                <tr>
                    <th scope="row" class="check-column" align="center"><?php echo G2_Vulnerability_Alerts::get_status('plugins', $name) ?></span></th>
                    <td class="plugin-title column-primary"><strong><?php echo $details['Name'] ?></strong> <?php echo sprintf(__('Version %s', G2_Vulnerability_Alerts::$id), $details['Version']) ?>
                    </td>
                    <td><?php G2_Vulnerability_Alerts::list_vulnerabilities('plugins', $name) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <h3><?php _e('Themes', G2_Vulnerability_Alerts::$id) ?></h3>
    <table class="wp-list-table widefat striped plugins">
        <thead>
            <tr>
                <td scope="col" class="manage-column check-column">&nbsp;</td>
                <th scope="col" class="manage-column column-name column-primary" width="250"><?php _e('Name', G2_Vulnerability_Alerts::$id) ?></th>
                <th scope="col" class="manage-column column-description"><?php _e('Vulnerabilities', G2_Vulnerability_Alerts::$id) ?></th>
            </tr>
        </thead>
        <tbody id="report-themes">
            <?php foreach (wp_get_themes() as $name => $details) : ?>
                <tr>
                    <th scope="row" class="check-column" align="center"><?php echo G2_Vulnerability_Alerts::get_status('themes', $name) ?></span></th>
                    <td class="plugin-title column-primary"><strong><?php echo $details['Name'] ?></strong> <?php echo sprintf(__('Version %s', G2_Vulnerability_Alerts::$id), $details['Version']) ?>
                    </td>
                    <td><?php G2_Vulnerability_Alerts::list_vulnerabilities('themes', $name) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


    <p>Love <b>G2 Security</b>? You can help by doing one simple thing: <a href="https://wordpress.org/plugins/seguroso/" target="_blank">Go to WordPress.org now and give this plugin a 5★ rating.</a> </p>

</div>