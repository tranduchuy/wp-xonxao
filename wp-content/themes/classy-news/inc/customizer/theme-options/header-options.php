<?php
/**
 * Header Options settings
 */

$wp_customize->add_section(
	'classy_news_header_options_section',
	array(
		'title' => esc_html__( 'Header Options', 'classy-news' ),
		'panel' => 'classy_news_theme_options_panel',
	)
);

// Enable topbar Options.
$wp_customize->add_setting(
	'classy_news_enable_topbar',
	array(
		'default'           => true,
		'sanitize_callback' => 'classy_news_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Classy_News_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'classy_news_enable_topbar',
		array(
			'label'    => esc_html__( 'Enable Topbar.', 'classy-news' ),
			'section'  => 'classy_news_header_options_section',
			'settings' => 'classy_news_enable_topbar',
			'type'     => 'checkbox',
		)
	)
);

// Hide Header Left Sidebar Options.
$wp_customize->add_setting(
	'classy_news_hide_header_left_widgets_in_responsive_device',
	array(
		'default'           => false,
		'sanitize_callback' => 'classy_news_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Classy_News_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'classy_news_hide_header_left_widgets_in_responsive_device',
		array(
			'label'    => esc_html__( 'Hide Header Left Widget on Responsive Device.', 'classy-news' ),
			'section'  => 'classy_news_header_options_section',
			'settings' => 'classy_news_hide_header_left_widgets_in_responsive_device',
			'type'     => 'checkbox',
		)
	)
);

// Hide Header Right Sidebar Options.
$wp_customize->add_setting(
	'classy_news_hide_header_right_widgets_in_responsive_device',
	array(
		'default'           => false,
		'sanitize_callback' => 'classy_news_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Classy_News_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'classy_news_hide_header_right_widgets_in_responsive_device',
		array(
			'label'    => esc_html__( 'Hide Header Right Widget on Responsive Device.', 'classy-news' ),
			'section'  => 'classy_news_header_options_section',
			'settings' => 'classy_news_hide_header_right_widgets_in_responsive_device',
			'type'     => 'checkbox',
		)
	)
);
