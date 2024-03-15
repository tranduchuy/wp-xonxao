<?php

/**
 * Template part for displaying front page introduction.
 *
 * @package Classy News
 */

// Banner Section.
$banner_section = get_theme_mod( 'classy_news_banner_section_enable', false );

if ( false === $banner_section ) {
	return;
}

$slider_content_ids          = $featured_posts_content_ids = $grid_post_content_ids = array();
$banner_content_type         = get_theme_mod( 'classy_news_banner_slider_content_type', 'post' );
$featured_posts_content_type = get_theme_mod( 'classy_news_featured_posts_content_type', 'post' );
$grid_posts_content_type     = get_theme_mod( 'classy_news_grid_posts_content_type', 'post' );

if ( $banner_content_type === 'post' ) {

	for ( $i = 1; $i <= 3; $i++ ) {
		$slider_content_ids[] = get_theme_mod( 'classy_news_banner_slider_post_' . $i );
	}

	$banner_args = array(
		'post_type'           => 'post',
		'post__in'            => array_filter( $slider_content_ids ),
		'orderby'             => 'post__in',
		'posts_per_page'      => absint( 3 ),
		'ignore_sticky_posts' => true,
	);
} else {
	$cat_content_id = get_theme_mod( 'classy_news_banner_slider_category' );
	$banner_args    = array(
		'cat'            => $cat_content_id,
		'posts_per_page' => absint( 3 ),
	);
}

if ( $featured_posts_content_type === 'post' ) {

	for ( $i = 1; $i <= 5; $i++ ) {
		$featured_posts_content_ids[] = get_theme_mod( 'classy_news_featured_posts_post_' . $i );
	}

	$featured_posts_args = array(
		'post_type'           => 'post',
		'post__in'            => array_filter( $featured_posts_content_ids ),
		'orderby'             => 'post__in',
		'posts_per_page'      => absint( 5 ),
		'ignore_sticky_posts' => true,
	);
} else {
	$cat_content_id      = get_theme_mod( 'classy_news_featured_posts_category' );
	$featured_posts_args = array(
		'cat'            => $cat_content_id,
		'posts_per_page' => absint( 5 ),
	);
}

if ( $grid_posts_content_type === 'post' ) {

	for ( $i = 1; $i <= 2; $i++ ) {
		$grid_post_content_ids[] = get_theme_mod( 'classy_news_grid_posts_post_' . $i );
	}

	$grid_posts_args = array(
		'post_type'           => 'post',
		'post__in'            => array_filter( $grid_post_content_ids ),
		'orderby'             => 'post__in',
		'posts_per_page'      => absint( 2 ),
		'ignore_sticky_posts' => true,
	);
} else {
	$cat_content_id  = get_theme_mod( 'classy_news_grid_posts_category' );
	$grid_posts_args = array(
		'cat'            => $cat_content_id,
		'posts_per_page' => absint( 2 ),
	);
}

?>

<div id="classy_news_banner_section" class="main-banner-section style-3 adore-navigation">
	<div class="theme-wrapper">
		<div class="main-banner-section-wrapper">

			<?php

			require get_template_directory() . '/inc/frontpage-sections/banner-sections/banner-featured-posts.php';

			?>
			<div class="banner-slider-grid">
				<?php
				require get_template_directory() . '/inc/frontpage-sections/banner-sections/banner-slider.php';
				require get_template_directory() . '/inc/frontpage-sections/banner-sections/banner-grid-posts.php';
				?>
			</div>
			<?php

			require get_template_directory() . '/inc/frontpage-sections/banner-sections/posts-tab.php';

			?>

		</div>
	</div>
</div>
