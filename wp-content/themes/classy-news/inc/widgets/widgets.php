<?php

// Featured Posts Widget.
require get_template_directory() . '/inc/widgets/featured-posts-widget.php';

// Express List Widget.
require get_template_directory() . '/inc/widgets/express-list-widget.php';

// Header Post Widget.
require get_template_directory() . '/inc/widgets/header-post.php';

// Posts Carousel Widget.
require get_template_directory() . '/inc/widgets/posts-carousel-widget.php';

// Most Read Widget.
require get_template_directory() . '/inc/widgets/most-read-widget.php';

// Latest Posts Widget.
require get_template_directory() . '/inc/widgets/latest-posts-widget.php';

// Social Widget.
require get_template_directory() . '/inc/widgets/social-widget.php';

/**
 * Register Widgets
 */
function classy_news_register_widgets() {

	register_widget( 'Classy_News_Featured_Posts_Widget' );

	register_widget( 'Classy_News_Express_List_Widget' );

	register_widget( 'Classy_News_Header_Post_Widget' );

	register_widget( 'Classy_News_Posts_Carousel_Widget' );

	register_widget( 'Classy_News_Most_Read_Widget' );

	register_widget( 'Classy_News_Latest_Posts_Widget' );

	register_widget( 'Classy_News_Social_Widget' );

}
add_action( 'widgets_init', 'classy_news_register_widgets' );
