<?php

/**
 * Adore Themes Customizer
 *
 * @package Classy News
 *
 * Banner Section
 */

$wp_customize->add_section(
	'classy_news_banner_section',
	array(
		'title' => esc_html__( 'Banner Section', 'classy-news' ),
		'panel' => 'classy_news_frontpage_panel',
	)
);

// Banner enable setting.
$wp_customize->add_setting(
	'classy_news_banner_section_enable',
	array(
		'default'           => false,
		'sanitize_callback' => 'classy_news_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Classy_News_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'classy_news_banner_section_enable',
		array(
			'label'    => esc_html__( 'Enable Banner Section', 'classy-news' ),
			'type'     => 'checkbox',
			'settings' => 'classy_news_banner_section_enable',
			'section'  => 'classy_news_banner_section',
		)
	)
);

/*========================Start Banner Slider==============================*/

// Banner Section Sub Heading.
$wp_customize->add_setting(
	'classy_news_banner_section_sub_heading',
	array(
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	new Classy_News_Sub_Section_Heading_Custom_Control(
		$wp_customize,
		'classy_news_banner_section_sub_heading',
		array(
			'label'           => esc_html__( 'Banner Slider Section', 'classy-news' ),
			'settings'        => 'classy_news_banner_section_sub_heading',
			'section'         => 'classy_news_banner_section',
			'active_callback' => 'classy_news_if_banner_enabled',
		)
	)
);

// Banner Slider title settings.
$wp_customize->add_setting(
	'classy_news_banner_slider_title',
	array(
		'default'           => __( 'Main Banner', 'classy-news' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'classy_news_banner_slider_title',
	array(
		'label'           => esc_html__( 'Slider Title', 'classy-news' ),
		'section'         => 'classy_news_banner_section',
		'active_callback' => 'classy_news_if_banner_enabled',
	)
);

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'classy_news_banner_slider_title',
		array(
			'selector'            => '.banner-slider-outer h3.widget-title',
			'settings'            => 'classy_news_banner_slider_title',
			'container_inclusive' => false,
			'fallback_refresh'    => true,
		)
	);
}

// banner slider content type settings.
$wp_customize->add_setting(
	'classy_news_banner_slider_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'classy_news_sanitize_select',
	)
);

$wp_customize->add_control(
	'classy_news_banner_slider_content_type',
	array(
		'label'           => esc_html__( 'Banner Slider Content type:', 'classy-news' ),
		'description'     => esc_html__( 'Choose where you want to render the content from.', 'classy-news' ),
		'section'         => 'classy_news_banner_section',
		'type'            => 'select',
		'active_callback' => 'classy_news_if_banner_enabled',
		'choices'         => array(
			'post'     => esc_html__( 'Post', 'classy-news' ),
			'category' => esc_html__( 'Category', 'classy-news' ),
		),
	)
);

for ( $i = 1; $i <= 3; $i++ ) {
	// banner post setting.
	$wp_customize->add_setting(
		'classy_news_banner_slider_post_' . $i,
		array(
			'sanitize_callback' => 'classy_news_sanitize_dropdown_pages',
		)
	);

	$wp_customize->add_control(
		'classy_news_banner_slider_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Post %d', 'classy-news' ), $i ),
			'section'         => 'classy_news_banner_section',
			'type'            => 'select',
			'choices'         => classy_news_get_post_choices(),
			'active_callback' => 'classy_news_banner_section_content_type_post_enabled',
		)
	);

}

// banner category setting.
$wp_customize->add_setting(
	'classy_news_banner_slider_category',
	array(
		'sanitize_callback' => 'classy_news_sanitize_select',
	)
);

$wp_customize->add_control(
	'classy_news_banner_slider_category',
	array(
		'label'           => esc_html__( 'Category', 'classy-news' ),
		'section'         => 'classy_news_banner_section',
		'type'            => 'select',
		'choices'         => classy_news_get_post_cat_choices(),
		'active_callback' => 'classy_news_banner_section_content_type_category_enabled',
	)
);

// Slider excerpt length setting.
$wp_customize->add_setting(
	'classy_news_slider_excerpt_length',
	array(
		'default'           => 20,
		'sanitize_callback' => 'classy_news_sanitize_number_range',
	)
);

$wp_customize->add_control(
	'classy_news_slider_excerpt_length',
	array(
		'label'           => esc_html__( 'Slider Excerpt Length:', 'classy-news' ),
		'description'     => esc_html__( 'Min: 1', 'classy-news' ),
		'section'         => 'classy_news_banner_section',
		'type'            => 'number',
		'input_attrs'     => array(
			'min' => 1,
		),
		'active_callback' => 'classy_news_if_banner_enabled',
	)
);

/*========================End Banner Slider==============================*/

/*========================Start Featured Posts==============================*/

// Featured Posts Sub Heading.
$wp_customize->add_setting(
	'classy_news_featured_posts_sub_heading',
	array(
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	new Classy_News_Sub_Section_Heading_Custom_Control(
		$wp_customize,
		'classy_news_featured_posts_sub_heading',
		array(
			'label'           => esc_html__( 'Featured Posts Section', 'classy-news' ),
			'settings'        => 'classy_news_featured_posts_sub_heading',
			'section'         => 'classy_news_banner_section',
			'active_callback' => 'classy_news_if_banner_enabled',
		)
	)
);

// Featured Posts title settings.
$wp_customize->add_setting(
	'classy_news_featured_posts_title',
	array(
		'default'           => __( 'Featured Posts', 'classy-news' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'classy_news_featured_posts_title',
	array(
		'label'           => esc_html__( 'Featured Posts Title', 'classy-news' ),
		'section'         => 'classy_news_banner_section',
		'active_callback' => 'classy_news_if_banner_enabled',
	)
);

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'classy_news_featured_posts_title',
		array(
			'selector'            => '.featured-posts h3.widget-title',
			'settings'            => 'classy_news_featured_posts_title',
			'container_inclusive' => false,
			'fallback_refresh'    => true,
		)
	);
}

// banner featured posts content type settings.
$wp_customize->add_setting(
	'classy_news_featured_posts_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'classy_news_sanitize_select',
	)
);

$wp_customize->add_control(
	'classy_news_featured_posts_content_type',
	array(
		'label'           => esc_html__( 'Featured Posts Content type:', 'classy-news' ),
		'description'     => esc_html__( 'Choose where you want to render the content from.', 'classy-news' ),
		'section'         => 'classy_news_banner_section',
		'settings'        => 'classy_news_featured_posts_content_type',
		'type'            => 'select',
		'active_callback' => 'classy_news_if_banner_enabled',
		'choices'         => array(
			'post'     => esc_html__( 'Post', 'classy-news' ),
			'category' => esc_html__( 'Category', 'classy-news' ),
		),
	)
);

for ( $i = 1; $i <= 5; $i++ ) {
	// Featured Posts post setting.
	$wp_customize->add_setting(
		'classy_news_featured_posts_post_' . $i,
		array(
			'sanitize_callback' => 'classy_news_sanitize_dropdown_pages',
		)
	);

	$wp_customize->add_control(
		'classy_news_featured_posts_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Post %d', 'classy-news' ), $i ),
			'section'         => 'classy_news_banner_section',
			'type'            => 'select',
			'choices'         => classy_news_get_post_choices(),
			'active_callback' => 'classy_news_featured_posts_section_content_type_post_enabled',
		)
	);

}

// Featured Posts category setting.
$wp_customize->add_setting(
	'classy_news_featured_posts_category',
	array(
		'sanitize_callback' => 'classy_news_sanitize_select',
	)
);

$wp_customize->add_control(
	'classy_news_featured_posts_category',
	array(
		'label'           => esc_html__( 'Category', 'classy-news' ),
		'section'         => 'classy_news_banner_section',
		'type'            => 'select',
		'choices'         => classy_news_get_post_cat_choices(),
		'active_callback' => 'classy_news_featured_posts_section_content_type_category_enabled',
	)
);

/*========================End Featured Posts==============================*/

/*========================Start Grid Posts==============================*/

// Grid Posts Sub Heading.
$wp_customize->add_setting(
	'classy_news_grid_posts_sub_heading',
	array(
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	new Classy_News_Sub_Section_Heading_Custom_Control(
		$wp_customize,
		'classy_news_grid_posts_sub_heading',
		array(
			'label'           => esc_html__( 'Grid Posts Section', 'classy-news' ),
			'settings'        => 'classy_news_grid_posts_sub_heading',
			'section'         => 'classy_news_banner_section',
			'active_callback' => 'classy_news_if_banner_enabled',
		)
	)
);

// Grid Posts title settings.
$wp_customize->add_setting(
	'classy_news_grid_posts_title',
	array(
		'default'           => __( 'Grid Posts', 'classy-news' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'classy_news_grid_posts_title',
	array(
		'label'           => esc_html__( 'Grid Posts Title', 'classy-news' ),
		'section'         => 'classy_news_banner_section',
		'active_callback' => 'classy_news_if_banner_enabled',
	)
);

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'classy_news_grid_posts_title',
		array(
			'selector'            => '.banner-grid-outer h3.widget-title',
			'settings'            => 'classy_news_grid_posts_title',
			'container_inclusive' => false,
			'fallback_refresh'    => true,
		)
	);
}

// Grid content type settings.
$wp_customize->add_setting(
	'classy_news_grid_posts_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'classy_news_sanitize_select',
	)
);

$wp_customize->add_control(
	'classy_news_grid_posts_content_type',
	array(
		'label'           => esc_html__( 'Grid Posts Content type:', 'classy-news' ),
		'description'     => esc_html__( 'Choose where you want to render the content from.', 'classy-news' ),
		'section'         => 'classy_news_banner_section',
		'settings'        => 'classy_news_grid_posts_content_type',
		'type'            => 'select',
		'active_callback' => 'classy_news_if_banner_enabled',
		'choices'         => array(
			'post'     => esc_html__( 'Post', 'classy-news' ),
			'category' => esc_html__( 'Category', 'classy-news' ),
		),
	)
);

for ( $i = 1; $i <= 2; $i++ ) {
	// Grid Posts post setting.
	$wp_customize->add_setting(
		'classy_news_grid_posts_post_' . $i,
		array(
			'sanitize_callback' => 'classy_news_sanitize_dropdown_pages',
		)
	);

	$wp_customize->add_control(
		'classy_news_grid_posts_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Post %d', 'classy-news' ), $i ),
			'section'         => 'classy_news_banner_section',
			'type'            => 'select',
			'choices'         => classy_news_get_post_choices(),
			'active_callback' => 'classy_news_grid_posts_section_content_type_post_enabled',
		)
	);

}

// Grid Posts category setting.
$wp_customize->add_setting(
	'classy_news_grid_posts_category',
	array(
		'sanitize_callback' => 'classy_news_sanitize_select',
	)
);

$wp_customize->add_control(
	'classy_news_grid_posts_category',
	array(
		'label'           => esc_html__( 'Category', 'classy-news' ),
		'section'         => 'classy_news_banner_section',
		'type'            => 'select',
		'choices'         => classy_news_get_post_cat_choices(),
		'active_callback' => 'classy_news_grid_posts_section_content_type_category_enabled',
	)
);

/*========================End Grid Posts==============================*/

/*========================Start Posts Tab==============================*/

// Posts Tab Sub Heading.
$wp_customize->add_setting(
	'classy_news_posts_tab_sub_heading',
	array(
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	new Classy_News_Sub_Section_Heading_Custom_Control(
		$wp_customize,
		'classy_news_posts_tab_sub_heading',
		array(
			'label'           => esc_html__( 'Posts Tab Section', 'classy-news' ),
			'settings'        => 'classy_news_posts_tab_sub_heading',
			'section'         => 'classy_news_banner_section',
			'active_callback' => 'classy_news_if_banner_enabled',
		)
	)
);

// Latest News Tab Enable.
$wp_customize->add_setting(
	'classy_news_latest_news_tab_enable',
	array(
		'default'           => true,
		'sanitize_callback' => 'classy_news_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Classy_News_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'classy_news_latest_news_tab_enable',
		array(
			'label'           => esc_html__( 'Enable Latest News Tab', 'classy-news' ),
			'type'            => 'checkbox',
			'settings'        => 'classy_news_latest_news_tab_enable',
			'section'         => 'classy_news_banner_section',
			'active_callback' => 'classy_news_if_banner_enabled',
		)
	)
);

// Latest News Tab title settings.
$wp_customize->add_setting(
	'classy_news_latest_news_tab_title',
	array(
		'default'           => __( 'Latest News', 'classy-news' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'classy_news_latest_news_tab_title',
	array(
		'label'           => esc_html__( 'Latest News Title Label', 'classy-news' ),
		'section'         => 'classy_news_banner_section',
		'active_callback' => 'classy_news_if_banner_enabled',
	)
);

// Random News Tab Enable.
$wp_customize->add_setting(
	'classy_news_random_news_tab_enable',
	array(
		'default'           => true,
		'sanitize_callback' => 'classy_news_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Classy_News_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'classy_news_random_news_tab_enable',
		array(
			'label'           => esc_html__( 'Enable Random News Tab', 'classy-news' ),
			'type'            => 'checkbox',
			'settings'        => 'classy_news_random_news_tab_enable',
			'section'         => 'classy_news_banner_section',
			'active_callback' => 'classy_news_if_banner_enabled',
		)
	)
);
// Random News Tab title settings.
$wp_customize->add_setting(
	'classy_news_random_news_tab_title',
	array(
		'default'           => __( 'Random News', 'classy-news' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'classy_news_random_news_tab_title',
	array(
		'label'           => esc_html__( 'Random News Title Label', 'classy-news' ),
		'section'         => 'classy_news_banner_section',
		'active_callback' => 'classy_news_if_banner_enabled',
	)
);

/*========================End Posts Tab==============================*/

/*========================Active Callback==============================*/
function classy_news_if_banner_enabled( $control ) {
	return $control->manager->get_setting( 'classy_news_banner_section_enable' )->value();
}

// banner slider
function classy_news_banner_section_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'classy_news_banner_slider_content_type' )->value();
	return classy_news_if_banner_enabled( $control ) && ( 'post' === $content_type );
}
function classy_news_banner_section_content_type_category_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'classy_news_banner_slider_content_type' )->value();
	return classy_news_if_banner_enabled( $control ) && ( 'category' === $content_type );
}

// banner featured posts
function classy_news_featured_posts_section_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'classy_news_featured_posts_content_type' )->value();
	return classy_news_if_banner_enabled( $control ) && ( 'post' === $content_type );
}
function classy_news_featured_posts_section_content_type_category_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'classy_news_featured_posts_content_type' )->value();
	return classy_news_if_banner_enabled( $control ) && ( 'category' === $content_type );
}

// banner grid posts
function classy_news_grid_posts_section_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'classy_news_grid_posts_content_type' )->value();
	return classy_news_if_banner_enabled( $control ) && ( 'post' === $content_type );
}
function classy_news_grid_posts_section_content_type_category_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'classy_news_grid_posts_content_type' )->value();
	return classy_news_if_banner_enabled( $control ) && ( 'category' === $content_type );
}
