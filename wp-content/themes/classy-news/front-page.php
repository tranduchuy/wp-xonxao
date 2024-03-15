<?php
/**
 * The front page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Classy News
 */

get_header();

// Call home.php if Homepage setting is set to latest posts.
if ( classy_news_is_latest_posts() ) {

	require get_home_template();

} elseif ( classy_news_is_frontpage() ) {
	$sorted_sections = array( 'banner', 'main-widgets-area', 'above-footer-widgets-area' );
	foreach ( $sorted_sections as $sorted_section ) {
		require get_template_directory() . '/inc/frontpage-sections/' . $sorted_section . '.php';
	}
}

if ( true === get_theme_mod( 'classy_news_enable_frontpage_content', false ) && 'page' === get_option( 'show_on_front' ) ) {
	?>
	<div id="primary-content" class="primary-content">
		<div id="content" class="site-content theme-wrapper">
			<div class="theme-wrap">
				<main id="primary" class="site-main">
					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'single' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
							endif;

						endwhile; // End of the loop.
					?>
				</main><!-- #main -->
				<?php
				if ( classy_news_is_sidebar_enabled() ) {
					get_sidebar();
				}
				?>
			</div>
		</div>
	</div>
	<?php
}

get_footer();
