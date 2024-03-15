<?php
/**
 * Single Post Options
 */

$wp_customize->add_section(
	'classy_news_single_page_options',
	array(
		'title' => esc_html__( 'Single Post Options', 'classy-news' ),
		'panel' => 'classy_news_theme_options_panel',
	)
);

// Enable single post category setting.
$wp_customize->add_setting(
	'classy_news_enable_single_category',
	array(
		'default'           => true,
		'sanitize_callback' => 'classy_news_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Classy_News_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'classy_news_enable_single_category',
		array(
			'label'    => esc_html__( 'Enable Category', 'classy-news' ),
			'settings' => 'classy_news_enable_single_category',
			'section'  => 'classy_news_single_page_options',
			'type'     => 'checkbox',
		)
	)
);

// Enable single post author setting.
$wp_customize->add_setting(
	'classy_news_enable_single_author',
	array(
		'default'           => true,
		'sanitize_callback' => 'classy_news_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Classy_News_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'classy_news_enable_single_author',
		array(
			'label'    => esc_html__( 'Enable Author', 'classy-news' ),
			'settings' => 'classy_news_enable_single_author',
			'section'  => 'classy_news_single_page_options',
			'type'     => 'checkbox',
		)
	)
);

// Enable single post date setting.
$wp_customize->add_setting(
	'classy_news_enable_single_date',
	array(
		'default'           => true,
		'sanitize_callback' => 'classy_news_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Classy_News_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'classy_news_enable_single_date',
		array(
			'label'    => esc_html__( 'Enable Date', 'classy-news' ),
			'settings' => 'classy_news_enable_single_date',
			'section'  => 'classy_news_single_page_options',
			'type'     => 'checkbox',
		)
	)
);

// Enable single post tag setting.
$wp_customize->add_setting(
	'classy_news_enable_single_tag',
	array(
		'default'           => true,
		'sanitize_callback' => 'classy_news_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Classy_News_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'classy_news_enable_single_tag',
		array(
			'label'    => esc_html__( 'Enable Post Tag', 'classy-news' ),
			'settings' => 'classy_news_enable_single_tag',
			'section'  => 'classy_news_single_page_options',
			'type'     => 'checkbox',
		)
	)
);

// Single post related Posts title label.
$wp_customize->add_setting(
	'classy_news_related_posts_title',
	array(
		'default'           => __( 'Related Posts', 'classy-news' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'classy_news_related_posts_title',
	array(
		'label'    => esc_html__( 'Related Posts Title', 'classy-news' ),
		'section'  => 'classy_news_single_page_options',
		'settings' => 'classy_news_related_posts_title',
	)
);
