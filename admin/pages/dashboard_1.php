<div class="wrap">

	<h1>G2 Security DashBoard</h1>
	
        <p>For support, e-mail us at <a href="https://woocommerce.ezosc.com/?utm_source=g2&utm_medium=link&utm_campaign=dashboard">support@ezosc.com</a>
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
			<td class="plugin-title column-primary">WP/Plugins/Themes Updates</td>
			<td>Last scan on July 22, 2016 7:03 pm</td>
		</tr>
			<tr>
			<th align="center" class="check-column" scope="row">&nbsp; <span style="color:green" class="dashicons dashicons-yes"></span></th>
			<td class="plugin-title column-primary">WPScan Vulnerability Database</td>
			<td>Last request to WPScan Vulnerability Database on July 22, 2016 7:03 pm</td>
		</tr>
		</tbody>
	</table>
        
        
        <h3>WordPress</h3>
	
	<table class="wp-list-table widefat striped plugins">
	<thead>
            <tr>
                    <td class="manage-column check-column" scope="col">&nbsp;</td>
                    <th width="250" class="manage-column column-name column-primary" scope="col">Settings</th>
                    <th class="manage-column column-description" scope="col"></th>
            </tr>
                               
	</thead>
	<tbody id="report-wordpress">
		<tr>
			<th align="center" class="check-column" scope="row">&nbsp; <span style="color:green" class="dashicons dashicons-yes"></span></th>
			<td class="plugin-title column-primary">WordPress Version 4.5.3</td>
			<td>- -</td>
		</tr>
                <tr>
			<th align="center" class="check-column" scope="row">&nbsp; <span style="color:green" class="dashicons dashicons-yes"></span></th>
			<td class="plugin-title column-primary">Core Integrity</td>
			<td>php_errorlog, wp-admin/php.php</td>
		</tr>
                
                <tr>
			<th align="center" class="check-column" scope="row">&nbsp; <span style="color:green" class="dashicons dashicons-yes"></span></th>
			<td class="plugin-title column-primary">PHP Version</td>
                        <td>Verify PHP version PHP version >= PHP 5.2.4 (<a href="https://ezosc.org/wp-requirements/" target="_blank">Minimum version required by WordPress</a>)</td>
		</tr>
                
                <tr>
			<th align="center" class="check-column" scope="row">&nbsp; <span style="color:green" class="dashicons dashicons-yes"></span></th>
			<td class="plugin-title column-primary">Remove WordPress version</td>
			<td></td>
		</tr>
                
                <tr>
			<th align="center" class="check-column" scope="row">&nbsp; <span style="color:green" class="dashicons dashicons-yes"></span></th>
			<td class="plugin-title column-primary">Protect uploads directory</td>
                        <td>php_errorlog, wp-admin/php.php <a href="#">Fix it Now</a></td>
		</tr>
                
                <tr>
			<th align="center" class="check-column" scope="row">&nbsp; <span style="color:green" class="dashicons dashicons-yes"></span></th>
			<td class="plugin-title column-primary">Restrict wp-content access</td>
			<td>php_errorlog, wp-admin/php.php</td>
		</tr>
                
                <tr>
			<th align="center" class="check-column" scope="row">&nbsp; <span style="color:green" class="dashicons dashicons-yes"></span></th>
			<td class="plugin-title column-primary">Information leakage (readme.html)</td>
			<td>php_errorlog, wp-admin/php.php</td>
		</tr>
                
                <tr>
			<th align="center" class="check-column" scope="row">&nbsp; <span style="color:green" class="dashicons dashicons-yes"></span></th>
			<td class="plugin-title column-primary">Default admin account</td>
			<td>php_errorlog, wp-admin/php.php</td>
		</tr>
                
                <tr>
			<th align="center" class="check-column" scope="row">&nbsp; <span style="color:green" class="dashicons dashicons-yes"></span></th>
			<td class="plugin-title column-primary">Database table prefix</td>
			<td>php_errorlog, wp-admin/php.php</td>
		</tr>
                
                <tr>
			<th align="center" class="check-column" scope="row">&nbsp; <span style="color:green" class="dashicons dashicons-yes"></span></th>
			<td class="plugin-title column-primary">Error logs</td>
			<td>php_errorlog, wp-admin/php.php</td>
		</tr>
                
                <tr>
			<th align="center" class="check-column" scope="row">&nbsp; <span style="color:red" class="dashicons dashicons-no"></span></th>
			<td class="plugin-title column-primary">WordPress</td>
			<td>Version 4.5.3 (Verify WordPress version)</td>
		</tr>
	</tbody>
	</table>
	
	<h3>WordPress</h3>
	<table class="wp-list-table widefat striped plugins">
		<thead>
		<tr>
			<td scope="col" class="manage-column check-column">&nbsp;</td>
			<th scope="col" class="manage-column column-name column-primary" width="250"><?php _e( 'Name', G2_Vulnerability_Alerts::$id ) ?></th>
			<th scope="col" class="manage-column column-description"><?php _e( 'Vulnerabilities', G2_Vulnerability_Alerts::$id ) ?></th>
		</tr>
		</thead>
		<tbody id="report-wordpress">
		<tr>
			<th scope="row" class="check-column" align="center"><?php echo G2_Vulnerability_Alerts::get_status( 'wordpress' ) ?></span></th>
			<td class="plugin-title column-primary"><strong>WordPress</strong> <?php echo sprintf( __( 'Version %s', G2_Vulnerability_Alerts::$id ), get_bloginfo( 'version' ) ) ?></td>
			<td><?php G2_Vulnerability_Alerts::list_vulnerabilities( 'wordpress' ) ?></td>
		</tr>
		</tbody>
	</table>
	<h3><?php _e( 'Plugins', G2_Vulnerability_Alerts::$id ) ?></h3>
	<table class="wp-list-table widefat striped plugins">
		<thead>
		<tr>
			<td scope="col" class="manage-column check-column">&nbsp;</td>
			<th scope="col" class="manage-column column-name column-primary" width="250"><?php _e( 'Name', G2_Vulnerability_Alerts::$id ) ?></th>
			<th scope="col" class="manage-column column-description"><?php _e( 'Vulnerabilities', G2_Vulnerability_Alerts::$id ) ?></th>
		</tr>
		</thead>
		<tbody id="report-plugins">
		<?php foreach ( get_plugins() as $name => $details ) : ?>
			<tr>
				<th scope="row" class="check-column" align="center"><?php echo G2_Vulnerability_Alerts::get_status( 'plugins', $name ) ?></span></th>
				<td class="plugin-title column-primary"><strong><?php echo $details['Name'] ?></strong> <?php echo sprintf( __( 'Version %s', G2_Vulnerability_Alerts::$id ), $details['Version'] ) ?>
				</td>
				<td><?php G2_Vulnerability_Alerts::list_vulnerabilities( 'plugins', $name ) ?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
	<h3><?php _e( 'Themes', G2_Vulnerability_Alerts::$id ) ?></h3>
	<table class="wp-list-table widefat striped plugins">
		<thead>
		<tr>
			<td scope="col" class="manage-column check-column">&nbsp;</td>
			<th scope="col" class="manage-column column-name column-primary" width="250"><?php _e( 'Name', G2_Vulnerability_Alerts::$id ) ?></th>
			<th scope="col" class="manage-column column-description"><?php _e( 'Vulnerabilities', G2_Vulnerability_Alerts::$id ) ?></th>
		</tr>
		</thead>
		<tbody id="report-themes">
		<?php foreach ( wp_get_themes() as $name => $details ) : ?>
			<tr>
				<th scope="row" class="check-column" align="center"><?php echo G2_Vulnerability_Alerts::get_status( 'themes', $name ) ?></span></th>
				<td class="plugin-title column-primary"><strong><?php echo $details['Name'] ?></strong> <?php echo sprintf( __( 'Version %s', G2_Vulnerability_Alerts::$id ), $details['Version'] ) ?>
				</td>
				<td><?php G2_Vulnerability_Alerts::list_vulnerabilities( 'themes', $name ) ?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
	

        <p>Love <b>G2 Security</b>? You can help by doing one simple thing: <a href="https://wordpress.org/plugins/seguroso/" target="_blank">Go to WordPress.org now and give this plugin a 5★ rating.</a> </p>

</div>