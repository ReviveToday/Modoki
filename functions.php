<?php
/**
 * ReviveToday Wave III theme, sourced from Wave II.
 *
 * @package rt-modoki
 * @author soup-bowl <code@soupbowl.io>
 * @license MIT
 */

// Additional scripts.
add_action(
	'wp_enqueue_scripts',
	function () {
		wp_enqueue_script( 'rt-dark', get_stylesheet_directory_uri() . '/dark.js', array(), '1', true );
	}
);

// Create additional menus.
add_action(
	'after_setup_theme',
	function() {
		register_nav_menus([
			'footer_menu' => 'Footer Menu',
		]);
	}
);

// Display menu in the footer part.
add_action(
	'generate_footer',
	function() {
		wp_nav_menu([
			'fallback_cb' => false,
			'depth'       => 1,
			'menu'        => 'footer_menu',
		]);
	}
);
