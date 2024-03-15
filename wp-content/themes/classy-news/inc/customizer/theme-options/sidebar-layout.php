<?php
/**
 * Sidebar settings.
 */

$wp_customize->add_section(
	'classy_news_sidebar_option',
	array(
		'title' => esc_html__( 'Sidebar Options', 'classy-news' ),
		'panel' => 'classy_news_theme_options_panel',
	)
);

// Sidebar Option - Global Sidebar Position.
$wp_customize->add_setting(
	'classy_news_sidebar_position',
	array(
		'sanitize_callback' => 'classy_news_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'classy_news_sidebar_position',
	array(
		'label'   => esc_html__( 'Global Sidebar Position', 'classy-news' ),
		'section' => 'classy_news_sidebar_option',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'classy-news' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'classy-news' ),
		),
	)
);

// Sidebar Option - Post Sidebar Position.
$wp_customize->add_setting(
	'classy_news_post_sidebar_position',
	array(
		'sanitize_callback' => 'classy_news_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'classy_news_post_sidebar_position',
	array(
		'label'   => esc_html__( 'Post Sidebar Position', 'classy-news' ),
		'section' => 'classy_news_sidebar_option',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'classy-news' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'classy-news' ),
		),
	)
);

// Sidebar Option - Page Sidebar Position.
$wp_customize->add_setting(
	'classy_news_page_sidebar_position',
	array(
		'sanitize_callback' => 'classy_news_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'classy_news_page_sidebar_position',
	array(
		'label'   => esc_html__( 'Page Sidebar Position', 'classy-news' ),
		'section' => 'classy_news_sidebar_option',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'classy-news' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'classy-news' ),
		),
	)
);
