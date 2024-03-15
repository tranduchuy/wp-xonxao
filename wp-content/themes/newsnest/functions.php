<?php


/**
 * NewsNest functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @subpackage NewsNest
 * @since NewsNest 1.0
 */

 if (!function_exists('newsnest_support')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since walker_fse 1.0.0
     *
     * @return void
     */
    function newsnest_support()
    {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        // Add support for block styles.
        add_theme_support('wp-block-styles');
        add_theme_support('post-thumbnails');
        // Enqueue editor styles.
        add_editor_style('style.css');
        //post format support
        add_theme_support( 'post-formats', array('gallery', 'image', 'video', 'audio') );

    }

endif;
add_action('after_setup_theme', 'newsnest_support');



/**
 * Enqueue assets scripts for both backend and frontend
 */
function newsnest_block_assets(){

     // Enqueue theme stylesheet for the front-end.
	 wp_enqueue_style( 'newsnest-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	 wp_enqueue_style( 'newsnest-fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/all.css', array(), '5.15.3' );  
	 wp_enqueue_script('newsnest-jquery-sticky', get_template_directory_uri() . '/assets/js/jquery-sticky.js', array('jquery') );    
     wp_enqueue_script('newsnest-resizesensor', get_template_directory_uri() . '/assets/js/resize-sensor.js', array('jquery') ); 
     wp_enqueue_script('newsnest-sticky-sidebar', get_template_directory_uri() . '/assets/js/sticky-sidebar.js', array('jquery') ); 
	 wp_enqueue_script('newsnest-main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), true);

}

add_action('enqueue_block_assets', 'newsnest_block_assets');

// register own theme pattern

function newsnest_register_pattern_category() {

	$patterns = array();

	$block_pattern_categories = array(
		'newsnest' => array( 'label' => __( 'NewsNest', 'newsnest' ) )
	);

	$block_pattern_categories = apply_filters( 'newsnest_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}

add_action( 'init', 'newsnest_register_pattern_category');

/* add fallback image */

/**
 * NewsNest Set the default image if none exists.
 *
 * @param string $html              The post thumbnail HTML.
 * @param int    $post_id           The post ID.
 * @param int    $post_thumbnail_id The post thumbnail ID.
 * @return html
 */
function newsnest_fallback_post_thumbnail_html( $html, $post_id, $post_thumbnail_id ) {
    if ( empty( $html ) ) {
        $html = '<img class="newsnest-default-img" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/placeholder.jpg" loading="lazy" alt="' . get_the_title( $post_id ) . '" />';
    }

    return $html;
}

add_filter( 'post_thumbnail_html', 'newsnest_fallback_post_thumbnail_html', 5, 3 );
