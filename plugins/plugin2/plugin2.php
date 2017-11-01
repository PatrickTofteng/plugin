<?php
/*
Plugin Name: Plugin2
Version: 0.0.1
Description: Desc2
*/

define( 'PLUGIN_FILE2', __FILE__ ); // Plugin file (This file).

class Plugin2
{

	/* When activating the plugin */
	public static function pluginActivated() {
		var_dump('DONT GET THIS PLGUIN');
        die;
	}

}
register_activation_hook(PLUGIN2_FILE, array( 'Plugin2', 'pluginActivated' ));
