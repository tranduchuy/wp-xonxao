<?php
/**
 * Breadcrumb settings
 */

$wp_customize->add_section(
	'classy_news_breadcrumb_section',
	array(
		'title' => esc_html__( 'Breadcrumb Options', 'classy-news' ),
		'panel' => 'classy_news_theme_options_panel',
	)
);

// Breadcrumb enable setting.
$wp_customize->add_setting(
	'classy_news_breadcrumb_enable',
	array(
		'default'           => true,
		'sanitize_callback' => 'classy_news_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Classy_News_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'classy_news_breadcrumb_enable',
		array(
			'label'    => esc_html__( 'Enable breadcrumb.', 'classy-news' ),
			'type'     => 'checkbox',
			'settings' => 'classy_news_breadcrumb_enable',
			'section'  => 'classy_news_breadcrumb_section',
		)
	)
);

// Breadcrumb - Separator.
$wp_customize->add_setting(
	'classy_news_breadcrumb_separator',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default'           => '/',
	)
);

$wp_customize->add_control(
	'classy_news_breadcrumb_separator',
	array(
		'label'           => esc_html__( 'Separator', 'classy-news' ),
		'section'         => 'classy_news_breadcrumb_section',
		'active_callback' => function( $control ) {
			return ( $control->manager->get_setting( 'classy_news_breadcrumb_enable' )->value() );
		},
	)
);
