<?php
/**
 * Pagination setting
 */

// Pagination setting.
$wp_customize->add_section(
	'classy_news_pagination',
	array(
		'title' => esc_html__( 'Pagination', 'classy-news' ),
		'panel' => 'classy_news_theme_options_panel',
	)
);

// Pagination enable setting.
$wp_customize->add_setting(
	'classy_news_pagination_enable',
	array(
		'default'           => true,
		'sanitize_callback' => 'classy_news_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Classy_News_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'classy_news_pagination_enable',
		array(
			'label'    => esc_html__( 'Enable Pagination.', 'classy-news' ),
			'settings' => 'classy_news_pagination_enable',
			'section'  => 'classy_news_pagination',
			'type'     => 'checkbox',
		)
	)
);

// Pagination - Pagination Style.
$wp_customize->add_setting(
	'classy_news_pagination_type',
	array(
		'default'           => 'numeric',
		'sanitize_callback' => 'classy_news_sanitize_select',
	)
);

$wp_customize->add_control(
	'classy_news_pagination_type',
	array(
		'label'           => esc_html__( 'Pagination Style', 'classy-news' ),
		'section'         => 'classy_news_pagination',
		'type'            => 'select',
		'choices'         => array(
			'default' => __( 'Default (Older/Newer)', 'classy-news' ),
			'numeric' => __( 'Numeric', 'classy-news' ),
		),
		'active_callback' => function( $control ) {
			return ( $control->manager->get_setting( 'classy_news_pagination_enable' )->value() );
		},
	)
);
