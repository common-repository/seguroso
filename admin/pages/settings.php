<div class="wrap">
	<h1>G2 Security <?php _e( 'Settings', 'ldomain' ); ?></h1>
	<br>
	<?php
	$config = get_option( 'g2Security' );
	if ( $_POST['save'] == 1 ) {
		if ( $config == $_POST['config'] ) {
			echo '<div class="updated notice notice-success is-dismissible"><p>' . __( 'Configuration Saved', 'ldomain' ) . '</p></div>';
		} else {
			if ( update_option( 'g2Security', $_POST['config'] ) ) {
				echo '<div class="updated notice notice-success is-dismissible"><p>' . __( 'Configuration Saved', 'ldomain' ) . '</p></div>';
			} else {
				echo '<div class="updated error notice-error is-dismissible"><p>' . __( 'Configuration can\'t Saved', 'ldomain' ) . '</p></div>';
			}
		}
		$config = get_option( 'g2Security' );
	}
	?>
	<form action="" method="post">
		<input type="hidden" name="save" value="1" id="">
		<?php
		// Module G2_General
		$settings = array(
			'gg_rpc' => 'Disable XML­RPC ',
			'gg_login_hint' => 'Disable login hints ',
			'gg_block_query' => 'Block Bad Queries ',
			'gg_remove_header' => 'Removes Header ',
			'gg_disable_file_editor' => 'Disable File Editor ',
			'gg_disable_pingback' => 'Disable XML­RPC Pingback and remove header',
		);
		?>
		<?php foreach ( $settings as $k => $v ): ?>
			<label for="config_<?php echo $k; ?>">
				<input value="1" <?php if ( $config[ $k ] == 1 ): ?>checked="checked" <?php endif; ?> type="checkbox" name="config[<?php echo $k; ?>]" id="config_<?php echo $k; ?>"> <?php echo $v; ?>
			</label><br>
		<?php endforeach; ?>
		<label for="err_msg"><?php _e( 'Login Error Message', 'ldomain' ); ?></label>
		<br>
		<input style="width: 80%;" type="text" name="config[gg_login_error_message]" value="<?php echo $config['gg_login_error_message']; ?>" id="err_msg">
		<br><br>
		<h2>Notification</h2>
		<p>Fill the option below if you want to be notified by mail.</p>
		<table class="form-table">
			<tbody>
			<tr>
				<th scope="row">Email Address</th>
				<td>
					<input type="email" class="regular-text" value="<?php echo $config['email']; ?>" name="config[email]">
				</td>
			</tr>
			</tbody>
		</table>
		<p class="submit"></p>
		<button class="button button-primary" type="submit"><?php _e( 'Save Options', 'ldomain' ); ?></button>
	</form>
	<p>Love <b>G2 Security</b>? You can help by doing one simple thing:
		<a href="https://wordpress.org/plugins/seguroso/" target="_blank">Go to WordPress.org now and give this plugin a 5★ rating.</a>
	</p>
</div>