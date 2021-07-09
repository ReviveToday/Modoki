<?php
/**
 * ReviveToday Wave III theme, sourced from Wave II.
 *
 * @package rt-modoki
 * @author soup-bowl <code@soupbowl.io>
 * @license MIT
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * In a normal GeneratePress site, you'd get a very professional-looking error 404 page with a helpful search box.
 * Not with ReviveToday! You get a pretty looking but fucking useless Commodore 64 screen. Believe me I have more
 * important things to be doing in life, and be more of a proper adult. But as Jack says in Pirates of the Caribbean-
 * "I love those moments. I like to wave at them as they pass by." 
 */
global $wp;

get_header(); ?>

<div id="primary" <?php generate_do_element_classes( 'content' ); ?>>
	<main id="main" <?php generate_do_element_classes( 'main' ); ?>>
		
		<div class="e404">
			<div>
				<p class="cmctr">*** Commodore 64 Basic V2 ***</p>
				<p class="cmctr">64K RAM System 38911 BASIC bytes free</p>
				<p>Ready.</p>
				<p>LOAD RT,8</p>
				<h1>Error 404</h1>
				<p>We tried our tape of this content, but it didn't work.</p>
				<p>Things you can do about it:</p>
				<ul>
					<li>Try the search <a href="<?php echo home_url(); ?>">on the homepage</a>.</li>
					<li>See this URL in the <a href="https://web.archive.org/web/*/<?php echo home_url( $wp->request ); ?>">Wayback Machine</a>.</li>
					<li>Seek assistance in <a href="https://revive.today/discord">our Discord</a>.</li>
				</ul>
				<p class="flashtilde">■</p>
			</div>
		</div>

	</main>
</div>

<?php

get_footer();
