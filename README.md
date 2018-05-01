# Hide WP Engine backup prompt
Contributors: ryanshoover
Requires at least: 3.0
Tested up to: 4.9
Requires PHP: 5.3
License: GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt

Disables the standard prompt on WP Engine asking \"Did you backup first?\" when updating plugins / core / etc.

## Description
WordPress will "nag" you to backup your site before you install or update plugins,  themes, or core. This is great in production sites, but a little annoying in development sites or sites where the daily backup is sufficient.

Install & activate this plugin and watch that "nag" box disappear.

## Installation

1. Upload the plugin to `wp-content/plugins/`
1. Activate the plugin

## Changelog

### 1.1

* Top level admins will still see the backup prompt:
  * Administrators on a single site setup.
  * Super Administrators on a multisite setup.
