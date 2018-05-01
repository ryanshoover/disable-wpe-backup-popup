<?php
/**
 * Plugin Name: Hide WP Engine backup prompt
 * Description: Disables the standard prompt on WP Engine asking "Did you backup first?" when updating plugins / core / etc.
 * Version:     1.1
 * Author:      ryanshoover
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package disable-wpe-backup-popup
 */

namespace WPEngineMods;

/**
 * Disable the WP Engine "Did you back up first?" popup
 * by defining the appropriate constant.
 *
 * @return void
 */
function disable_wpe_backup_popup() {
	// Let admins see the popup on single sites.
	if ( ! is_multisite() && current_user_can( 'manage_options' ) ) {
		return;
	}

	// Let super admins see the popup on multisites.
	if ( is_multisite() && is_super_admin() ) {
		return;
	}

	define( 'WPE_POPUP_DISABLED', true );
}

add_action( 'plugins_loaded', __NAMESPACE__ . '\disable_wpe_backup_popup' );
