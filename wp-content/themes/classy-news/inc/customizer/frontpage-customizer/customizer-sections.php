<?php
// Home Page Customizer panel.
$wp_customize->add_panel(
	'classy_news_frontpage_panel',
	array(
		'title'    => esc_html__( 'Frontpage Sections', 'classy-news' ),
		'priority' => 140,
	)
);

$customizer_settings = array( 'breaking-news', 'banner' );

foreach ( $customizer_settings as $customizer ) {

	require get_template_directory() . '/inc/customizer/frontpage-customizer/' . $customizer . '.php';

}
