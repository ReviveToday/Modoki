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

add_action(
	'login_enqueue_scripts',
	function() {
		wp_enqueue_style( 'rt-login', get_stylesheet_directory_uri() . '/style-login.css', array(), '1' );
	}
);

add_action(
	'after_setup_theme',
	function() {
		add_theme_support( 'editor-styles' );
		add_editor_style( 'style-editor.css' );
	}
);

add_action(
	'wp_head',
	function() {
		?>
		<meta name="theme-color" content="#138e96">
		<?php
	}
);

// Create additional menus.
add_action(
	'after_setup_theme',
	function() {
		register_nav_menus(
			array(
				'footer_menu' => 'Footer Menu',
			)
		);
	}
);

// Remove GeneratePress menu (is there a genuine config purpose?).
add_action(
	'admin_menu',
	function() {
		remove_submenu_page( 'themes.php', 'generate-options' );
	},
	999
);

// Share buttons and last updated segments.
add_action(
	'generate_after_content',
	function() {
		if ( is_page() ) {
			?>
			<hr>
			<?php

			$lu_conf = get_post_meta( get_the_ID(), 'rt_show_last_updated', true );
			if ( ! empty( $lu_conf ) && ( true === $lu_conf || '1' === $lu_conf ) ) {
				echo wp_kses_post( '<em>Last updated: ' . get_the_modified_date() . '</em>' );
			}

			$sb_conf = get_post_meta( get_the_ID(), 'rt_show_sharing_buttons', true );
			if ( ! empty( $sb_conf ) && ( true === $sb_conf || '1' === $sb_conf ) ) {
				get_template_part( 'template-parts/social', 'buttons' );
			}
		}
	}
);

// Display menu in the footer part.
add_action(
	'generate_footer',
	function() {
		wp_nav_menu(
			array(
				'fallback_cb' => false,
				'depth'       => 1,
				'menu'        => 'footer_menu',
			)
		);
	}
);

// Adjust the copyright for ReviveToday.
add_filter(
	'generate_copyright',
	function( $copyright ) {
		$copyright = sprintf(
			'<span class="copyright">&copy; %1$s - %2$s %3$s</span>, a <a href="%4$s">soupbowl</a> site. <a href="%5$s">Theme details</a>.',
			'2018',
			gmdate( 'Y' ),
			get_bloginfo( 'name' ),
			esc_url( 'https://www.soupbowl.io/' ),
			esc_url( 'https://github.com/revivetoday/Modoki' )
		);

		return $copyright;
	},
	10,
	1
);

// Bright/dark mode toggleswitch.
add_filter(
	'generate_navigation_search_menu_item_output',
	function( $aaa ) {
		$aaa .= '<span class="menu-bar-item"><a class="rt-bright-toggle" aria-label="" href="#">🔆</a></span>';
		return $aaa;
	},
	10,
	1
);

add_filter(
	'pt_cv_field_thumbnail_not_found',
	function() {
		$banner = get_stylesheet_directory_uri() . '/img/rt-default-banner.png';
		return wp_kses_post(
			"<img src=\"{$banner}\" class=\"pt-cv-thumbnail\">"
		);
	}
);
