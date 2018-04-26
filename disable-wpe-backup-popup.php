<?php
/**
 * Plugin Name: Hide WP Engine backup prompt
 * Description: Disables the standard prompt on WP Engine asking "Did you backup first?" when updating plugins / core / etc.
 * Version:     1.0
 * Author:      ryanshoover
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace WPEngineMods;

function disable_wpe_backup_popup() {
	define( 'WPE_POPUP_DISABLED', true );
}

add_action( 'plugins_loaded', __NAMESPACE__ . '\disable_wpe_backup_popup' );
