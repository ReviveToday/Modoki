<?php
/**
 * ReviveToday Wave III theme, sourced from Wave II.
 *
 * @package rt-modoki
 * @author soup-bowl <code@soupbowl.io>
 * @license MIT
 */

/**
 * Add the configuration options added by this child.
 */
require_once __DIR__ . '/custom/class-rt-settings.php';

( new Rt_Settings() )->register_hooks();

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

// Adjust the copyright for ReviveToday.
add_filter(
	'generate_copyright',
	function( $copyright ) {
		$copyright = sprintf(
			'<span class="copyright">&copy; %1$s - %2$s %3$s</span>, a <a href="%4$s">soupbowl</a> site. <a href="%5$s">Theme details</a>.',
			'2018',
			date( 'Y' ),
			get_bloginfo( 'name' ),
			esc_url( 'https://www.soupbowl.io/' ),
			esc_url( 'https://github.com/revivetoday/Modoki' )
		);

		return $copyright;
	},
	10,
	1
);
