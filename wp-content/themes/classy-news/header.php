<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Classy News
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary-content"><?php esc_html_e( 'Skip to content', 'classy-news' ); ?></a>

		<div id="loader">
			<div class="loader-container">
				<div id="preloader">
					<div class="pre-loader-5"></div>
				</div>
			</div>
		</div><!-- #loader -->

		<header id="masthead" class="site-header">

			<?php if ( get_theme_mod( 'classy_news_enable_topbar', true ) === true ) : ?>
				<div class="top-header">
					<div class="theme-wrapper">
						<div class="top-header-wrap">
							<div class="left-side">
								<div class="top-info">
									<?php echo esc_html( wp_date( 'l, F j, Y' ) ); ?>
								</div>
							</div>
							<div class="right-side">
								<div class="social-icons">
									<?php
									if ( has_nav_menu( 'social' ) ) {
										wp_nav_menu(
											array(
												'menu_class'     => 'menu social-links',
												'link_before'    => '<span class="screen-reader-text">',
												'link_after'     => '</span>',
												'theme_location' => 'social',
											)
										);
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>
			<div class="middle-header">
				<?php
				$header_left_widget_hide_on_mobile  = get_theme_mod( 'classy_news_hide_header_left_widgets_in_responsive_device', false ) === true ? 'hide-mobile' : '';
				$header_right_widget_hide_on_mobile = get_theme_mod( 'classy_news_hide_header_right_widgets_in_responsive_device', false ) === true ? 'hide-mobile' : '';
				$header_left_widget                 = is_active_sidebar( 'header-left-widgets-area' ) ? '' : 'no-header-left-sidebar';
				$header_right_widget                = is_active_sidebar( 'header-right-widgets-area' ) ? '' : 'no-header-right-sidebar';
				$site_title_position                = implode( ' ', array( $header_left_widget, $header_right_widget ) );
				?>
				<div class="theme-wrapper">
					<div class="middle-header-wrap <?php echo esc_attr( ! empty( get_header_image() ) ? 'adore-header-image' : '' ); ?> <?php echo esc_attr( $site_title_position ); ?>" style="background-image: url('<?php echo esc_url( get_header_image() ); ?>')">
						<?php if ( is_active_sidebar( 'header-left-widgets-area' ) ) : ?>
							<aside class="header-left-sidebar <?php echo esc_attr( $header_left_widget_hide_on_mobile ); ?>">
								<?php dynamic_sidebar( 'header-left-widgets-area' ); ?>
							</aside>
						<?php endif; ?>
						<div class="site-branding">
							<?php if ( has_custom_logo() ) { ?>
								<div class="site-logo">
									<?php the_custom_logo(); ?>
								</div>
							<?php } ?>

							<?php if ( get_theme_mod( 'classy_news_header_text_display', true ) === true ) { ?>

								<div class="site-identity">
									<?php
									if ( is_front_page() && is_home() ) :
										?>
									<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
										<?php
								else :
									?>
									<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
									<?php
								endif;

								$classy_news_description = get_bloginfo( 'description', 'display' );
								if ( $classy_news_description || is_customize_preview() ) :
									?>
									<p class="site-description">
										<?php
											echo $classy_news_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
										?>
										</p>
									<?php endif; ?>
								</div>
							<?php } ?>
						</div><!-- .site-branding -->
						<?php if ( is_active_sidebar( 'header-right-widgets-area' ) ) : ?>
							<aside class="header-right-sidebar <?php echo esc_attr( $header_right_widget_hide_on_mobile ); ?>">
								<?php dynamic_sidebar( 'header-right-widgets-area' ); ?>
							</aside>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="header-outer-wrapper">
				<div class="adore-header">
					<div class="theme-wrapper">
						<div class="header-wrapper">
							<div class="header-nav-search">
								<div class="header-navigation">
									<span class="classy-home-icon">
										<a href="<?php echo esc_url( get_home_url() ); ?>">
											<i class="fa fa-home" aria-hidden="true"></i>
										</a>
									</span>
									<nav id="site-navigation" class="main-navigation">
										<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
											<span></span>
											<span></span>
											<span></span>
										</button>
										<?php
										if ( has_nav_menu( 'primary' ) ) {
											wp_nav_menu(
												array(
													'theme_location' => 'primary',
													'menu_id' => 'primary-menu',
												)
											);
										}
										?>
									</nav><!-- #site-navigation -->
								</div>
								<div class="header-end">
									<div class="display-random-post">
										<?php
										$args         = array(
											'posts_per_page' => 1,
											'post_type' => 'post',
											'ignore_sticky_posts' => true,
											'orderby'   => 'rand',
										);
										$random_query = new WP_Query( $args );
										if ( $random_query->have_posts() ) {
											while ( $random_query->have_posts() ) :
												$random_query->the_post();
												?>
												<a href="<?php the_permalink(); ?>" title="<?php esc_attr_e( 'View Random Post', 'classy-news' ); ?>">
													<i class="fas fa-random"></i>
												</a>
												<?php
											endwhile;
											wp_reset_postdata();
										}
										?>
									</div>
									<div class="navigation-search">
										<div class="navigation-search-wrap">
											<a href="#" title="Search" class="navigation-search-icon">
												<i class="fa fa-search"></i>
											</a>
											<div class="navigation-search-form">
												<?php get_search_form(); ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
			if ( is_front_page() ) {
				require get_template_directory() . '/inc/frontpage-sections/breaking-news.php';
			}
			?>
		</header><!-- #masthead -->

		<div id="primary-content" class="primary-content">

			<?php
			if ( ! is_front_page() || is_home() ) {

				if ( is_front_page() ) {

					$sorted_sections = array( 'banner', 'main-widgets-area', 'above-footer-widgets-area' );

					foreach ( $sorted_sections as $sorted_section ) {
						require get_template_directory() . '/inc/frontpage-sections/' . $sorted_section . '.php';
					}
				}

				?>

				<div id="content" class="site-content theme-wrapper">
					<div class="theme-wrap">

					<?php } ?>
