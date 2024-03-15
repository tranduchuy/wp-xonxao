<?php

/**
 * Font section
 */

// Font section.
$wp_customize->add_section(
	'classy_news_font_options',
	array(
		'title' => esc_html__( 'Font ( Typography ) Options', 'classy-news' ),
		'panel' => 'classy_news_theme_options_panel',
	)
);

// Typography - Site Title Font.
$wp_customize->add_setting(
	'classy_news_site_title_font',
	array(
		'default'           => '',
		'sanitize_callback' => 'classy_news_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'classy_news_site_title_font',
	array(
		'label'    => esc_html__( 'Site Title Font Family', 'classy-news' ),
		'section'  => 'classy_news_font_options',
		'settings' => 'classy_news_site_title_font',
		'type'     => 'select',
		'choices'  => classy_news_font_choices(),
	)
);

// Typography - Site Description Font.
$wp_customize->add_setting(
	'classy_news_site_description_font',
	array(
		'default'           => '',
		'sanitize_callback' => 'classy_news_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'classy_news_site_description_font',
	array(
		'label'    => esc_html__( 'Site Description Font Family', 'classy-news' ),
		'section'  => 'classy_news_font_options',
		'settings' => 'classy_news_site_description_font',
		'type'     => 'select',
		'choices'  => classy_news_font_choices(),
	)
);

// Typography - Header Font.
$wp_customize->add_setting(
	'classy_news_header_font',
	array(
		'default'           => '',
		'sanitize_callback' => 'classy_news_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'classy_news_header_font',
	array(
		'label'    => esc_html__( 'Header Font Family', 'classy-news' ),
		'section'  => 'classy_news_font_options',
		'settings' => 'classy_news_header_font',
		'type'     => 'select',
		'choices'  => classy_news_font_choices(),
	)
);

// Typography - Body Font.
$wp_customize->add_setting(
	'classy_news_body_font',
	array(
		'default'           => '',
		'sanitize_callback' => 'classy_news_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'classy_news_body_font',
	array(
		'label'    => esc_html__( 'Body Font Family', 'classy-news' ),
		'section'  => 'classy_news_font_options',
		'settings' => 'classy_news_body_font',
		'type'     => 'select',
		'choices'  => classy_news_font_choices(),
	)
);
