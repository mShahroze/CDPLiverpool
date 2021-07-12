<?php

if ( ! function_exists( 'brunn_select_include_blog_shortcodes' ) ) {
	function brunn_select_include_blog_shortcodes() {
		foreach ( glob( SELECT_FRAMEWORK_MODULES_ROOT_DIR . '/blog/shortcodes/*/load.php' ) as $shortcode_load ) {
			include_once $shortcode_load;
		}
	}
	
	if ( brunn_select_core_plugin_installed() ) {
		add_action( 'brunn_core_action_include_shortcodes_file', 'brunn_select_include_blog_shortcodes' );
	}
}
