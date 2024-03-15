<?php
/**
 * Adore Themes Customizer
 *
 * @package Classy News
 *
 * Breaking News Section
 */

$wp_customize->add_section(
	'classy_news_breaking_news_section',
	array(
		'title' => esc_html__( 'Breaking News Section', 'classy-news' ),
		'panel' => 'classy_news_frontpage_panel',
	)
);

// Breaking News section enable settings.
$wp_customize->add_setting(
	'classy_news_breaking_news_section_enable',
	array(
		'default'           => false,
		'sanitize_callback' => 'classy_news_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Classy_News_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'classy_news_breaking_news_section_enable',
		array(
			'label'    => esc_html__( 'Enable Breaking News Section', 'classy-news' ),
			'type'     => 'checkbox',
			'settings' => 'classy_news_breaking_news_section_enable',
			'section'  => 'classy_news_breaking_news_section',
		)
	)
);

// Breaking News title settings.
$wp_customize->add_setting(
	'classy_news_breaking_news_title',
	array(
		'default'           => __( 'Breaking News', 'classy-news' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'classy_news_breaking_news_title',
	array(
		'label'           => esc_html__( 'Title', 'classy-news' ),
		'section'         => 'classy_news_breaking_news_section',
		'active_callback' => 'classy_news_if_breaking_news_enabled',
	)
);

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'classy_news_breaking_news_title',
		array(
			'selector'            => '.news-ticker-section .theme-wrapper',
			'settings'            => 'classy_news_breaking_news_title',
			'container_inclusive' => false,
			'fallback_refresh'    => true,
			'render_callback'     => 'classy_news_breaking_news_title_text_partial',
		)
	);
}

// breaking_news content type settings.
$wp_customize->add_setting(
	'classy_news_breaking_news_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'classy_news_sanitize_select',
	)
);

$wp_customize->add_control(
	'classy_news_breaking_news_content_type',
	array(
		'label'           => esc_html__( 'Content type:', 'classy-news' ),
		'description'     => esc_html__( 'Choose where you want to render the content from.', 'classy-news' ),
		'section'         => 'classy_news_breaking_news_section',
		'type'            => 'select',
		'active_callback' => 'classy_news_if_breaking_news_enabled',
		'choices'         => array(
			'post'     => esc_html__( 'Post', 'classy-news' ),
			'category' => esc_html__( 'Category', 'classy-news' ),
		),
	)
);

for ( $i = 1; $i <= 6; $i++ ) {
	// breaking_news post setting.
	$wp_customize->add_setting(
		'classy_news_breaking_news_post_' . $i,
		array(
			'sanitize_callback' => 'classy_news_sanitize_dropdown_pages',
		)
	);

	$wp_customize->add_control(
		'classy_news_breaking_news_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Post %d', 'classy-news' ), $i ),
			'section'         => 'classy_news_breaking_news_section',
			'type'            => 'select',
			'choices'         => classy_news_get_post_choices(),
			'active_callback' => 'classy_news_breaking_news_section_content_type_post_enabled',
		)
	);

}

// breaking_news category setting.
$wp_customize->add_setting(
	'classy_news_breaking_news_category',
	array(
		'sanitize_callback' => 'classy_news_sanitize_select',
	)
);

$wp_customize->add_control(
	'classy_news_breaking_news_category',
	array(
		'label'           => esc_html__( 'Category', 'classy-news' ),
		'section'         => 'classy_news_breaking_news_section',
		'type'            => 'select',
		'choices'         => classy_news_get_post_cat_choices(),
		'active_callback' => 'classy_news_breaking_news_section_content_type_category_enabled',
	)
);

/*========================Active Callback==============================*/
function classy_news_if_breaking_news_enabled( $control ) {
	return $control->manager->get_setting( 'classy_news_breaking_news_section_enable' )->value();
}
function classy_news_breaking_news_section_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'classy_news_breaking_news_content_type' )->value();
	return classy_news_if_breaking_news_enabled( $control ) && ( 'post' === $content_type );
}
function classy_news_breaking_news_section_content_type_category_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'classy_news_breaking_news_content_type' )->value();
	return classy_news_if_breaking_news_enabled( $control ) && ( 'category' === $content_type );
}

/*========================Partial Refresh==============================*/
if ( ! function_exists( 'classy_news_breaking_news_title_text_partial' ) ) :
	// Title.
	function classy_news_breaking_news_title_text_partial() {
		return esc_html( get_theme_mod( 'classy_news_breaking_news_title' ) );
	}
endif;
