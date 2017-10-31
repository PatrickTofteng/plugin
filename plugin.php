<?php
/*
Plugin Name: Plugin
Version: 0.0.1
Description: Desc
*/

define( 'PLUGIN_FILE', __FILE__ ); // Plugin file (This file).

class Plugin
{

	/* When activating the plugin */
	public static function pluginActivated() {
		var_dump('test plugin activated');
        die;
	}

}
register_activation_hook(PLUGIN_FILE, array( 'Plugin', 'pluginActivated' ));
