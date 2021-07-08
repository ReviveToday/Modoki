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