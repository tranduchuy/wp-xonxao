<?php
if ( ! class_exists( 'Classy_News_Posts_Carousel_Widget' ) ) {
	/**
	 * Adds Classy News Posts Carousel Widget.
	 */
	class Classy_News_Posts_Carousel_Widget extends WP_Widget {

		/**
		 * Register widget with WordPress.
		 */
		public function __construct() {
			$carousel_widget = array(
				'classname'   => 'widget adore-widget posts-carousel-widget adore-navigation',
				'description' => __( 'Retrive Posts Carousel Widgets', 'classy-news' ),
			);
			parent::__construct(
				'classy_news_posts_carousel_widget',
				__( 'Adore Widget: Posts Carousel Widget', 'classy-news' ),
				$carousel_widget
			);
		}

		/**
		 * Front-end display of widget.
		 *
		 * @see WP_Widget::widget()
		 *
		 * @param array $args     Widget arguments.
		 * @param array $instance Saved values from database.
		 */
		public function widget( $args, $instance ) {
			if ( ! isset( $args['widget_id'] ) ) {
				$args['widget_id'] = $this->id;
			}
			$carousel_title       = ( ! empty( $instance['title'] ) ) ? $instance['title'] : '';
			$carousel_title       = apply_filters( 'widget_title', $carousel_title, $instance, $this->id_base );
			$viewall_button_label = ( ! empty( $instance['view_all_button_label'] ) ) ? $instance['view_all_button_label'] : '';
			$carousel_post_count  = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
			$carousel_post_offset = isset( $instance['offset'] ) ? absint( $instance['offset'] ) : '';
			$carousel_category    = isset( $instance['category'] ) ? absint( $instance['category'] ) : '';
			$viewall_button_link  = ( ! empty( $instance['view_all_button_link'] ) ) ? $instance['view_all_button_link'] : esc_url( get_category_link( $carousel_category ) );
			$slides_to_show       = isset( $instance['slides_to_show'] ) ? $instance['slides_to_show'] : 'two-column';

			echo $args['before_widget'];
			if ( ! empty( $carousel_title || $viewall_button_label ) ) {
				?>
				<div class="widget-header">
					<?php echo $args['before_title'] . esc_html( $carousel_title ) . $args['after_title']; ?>
					<?php if ( !empty( $viewall_button_label ) ): ?>
						<a href="<?php echo esc_url( $viewall_button_link ); ?>"><?php echo esc_html( $viewall_button_label ); ?></a>
					<?php endif; ?>
				</div>
			<?php } ?>
			<div class="adore-widget-body">
				<div class="carousel-wrapper <?php echo esc_attr( $slides_to_show ); ?>">
					<?php
					$carousel_widgets_args = array(
						'post_type'      => 'post',
						'posts_per_page' => absint( $carousel_post_count ),
						'offset'         => absint( $carousel_post_offset ),
						'cat'            => absint( $carousel_category ),
					);
					$query                 = new WP_Query( $carousel_widgets_args );
					if ( $query->have_posts() ) :
						while ( $query->have_posts() ) :
							$query->the_post();
							?>
							<div class="post-item-outer">
								<div class="post-item overlay-post" style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'post-thumbnail' ) ); ?>');">
									<div class="post-overlay-wrapper">
										<div class="post-overlay">
											<div class="post-item-content">
												<div class="entry-cat">
													<?php the_category( '', '', get_the_ID() ); ?>								
												</div>
												<h2 class="entry-title">
													<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
												</h2>
												<ul class="entry-meta">
													<li class="post-author"> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><span class="far fa-user"></span><?php echo esc_html( get_the_author() ); ?></a></li>
													<li class="post-date"> <span class="far fa-calendar-alt"></span><?php echo esc_html( get_the_date() ); ?></li>
													<li class="post-comment"> <span class="far fa-comment"></span><?php echo absint( get_comments_number( get_the_ID() ) ); ?></li>
												</ul>
											</div>   
										</div>
									</div>
								</div>
							</div>
							<?php
						endwhile;
						wp_reset_postdata();
					endif;
					?>
				</div>
			</div>
			<?php
			echo $args['after_widget'];
		}

		/**
		 * Back-end widget form.
		 *
		 * @see WP_Widget::form()
		 *
		 * @param array $instance Previously saved values from database.
		 */
		public function form( $instance ) {
			$carousel_title       = isset( $instance['title'] ) ? $instance['title'] : '';
			$viewall_button_label = isset( $instance['view_all_button_label'] ) ? $instance['view_all_button_label'] : '';
			$viewall_button_link  = isset( $instance['view_all_button_link'] ) ? $instance['view_all_button_link'] : '';
			$carousel_post_count  = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
			$carousel_post_offset = isset( $instance['offset'] ) ? absint( $instance['offset'] ) : '';
			$carousel_category    = isset( $instance['category'] ) ? absint( $instance['category'] ) : '';
			$carousel_orderby     = isset( $instance['orderby'] ) && in_array( $instance['orderby'], array( 'title', 'date' ) ) ? $instance['orderby'] : 'date';
			$carousel_order       = isset( $instance['order'] ) && in_array( $instance['order'], array( 'asc', 'desc' ) ) ? $instance['order'] : 'desc';
			$slides_to_show       = isset( $instance['slides_to_show'] ) ? $instance['slides_to_show'] : 'two-column';
			?>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Section Title:', 'classy-news' ); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $carousel_title ); ?>" />
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'view_all_button_label' ) ); ?>"><?php esc_html_e( 'View All Button:', 'classy-news' ); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'view_all_button_label' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'view_all_button_label' ) ); ?>" type="text" value="<?php echo esc_attr( $viewall_button_label ); ?>" />
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'view_all_button_link' ) ); ?>"><?php esc_html_e( 'View All Button URL:', 'classy-news' ); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'view_all_button_link' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'view_all_button_link' ) ); ?>" type="text" value="<?php echo esc_attr( $viewall_button_link ); ?>" />
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'slides_to_show' ) ); ?>"><?php esc_html_e( 'Slides to show:', 'classy-news' ); ?></label>
				<select id="<?php echo esc_attr( $this->get_field_id( 'slides_to_show' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'slides_to_show' ) ); ?>" class="widefat" style="width:100%;">
					<option value="one-column" <?php selected( 'one-column', $slides_to_show ); ?>><?php esc_html_e( 'One Column', 'classy-news' ); ?></option>
					<option value="two-column" <?php selected( 'two-column', $slides_to_show ); ?>><?php esc_html_e( 'Two Column', 'classy-news' ); ?></option>
					<option value="three-column" <?php selected( 'three-column', $slides_to_show ); ?>><?php esc_html_e( 'Three Column', 'classy-news' ); ?></option>
					<option value="four-column" <?php selected( 'four-column', $slides_to_show ); ?>><?php esc_html_e( 'Four Column', 'classy-news' ); ?></option>
				</select>
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>"><?php esc_html_e( 'Number of posts to show (Min:1 | Max:5):', 'classy-news' ); ?></label>
				<input class="tiny-text" id="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number' ) ); ?>" type="number" step="1" min="1" max="5" value="<?php echo absint( $carousel_post_count ); ?>" size="3" />
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'offset' ) ); ?>"><?php esc_html_e( 'Number of posts to displace or pass over:', 'classy-news' ); ?></label>
				<input class="tiny-text" id="<?php echo esc_attr( $this->get_field_id( 'offset' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'offset' ) ); ?>" type="number" step="1" min="0" value="<?php echo absint( $carousel_post_offset ); ?>" size="3" />
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'category' ) ); ?>"><?php esc_html_e( 'Select the category to show posts:', 'classy-news' ); ?></label>
				<select id="<?php echo esc_attr( $this->get_field_id( 'category' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'category' ) ); ?>" class="widefat" style="width:100%;">
					<?php
					$categories = classy_news_get_post_cat_choices();
					foreach ( $categories as $category => $value ) {
						?>
						<option value="<?php echo absint( $category ); ?>" <?php selected( $carousel_category, $category ); ?>><?php echo esc_html( $value ); ?></option>
					<?php } ?>      
				</select>
			</p>
			<?php
		}

		/**
		 * Sanitize widget form values as they are saved.
		 *
		 * @see WP_Widget::update()
		 *
		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.
		 *
		 * @return array Updated safe values to be saved.
		 */
		public function update( $new_instance, $old_instance ) {
			$instance                          = $old_instance;
			$instance['title']                 = sanitize_text_field( $new_instance['title'] );
			$instance['view_all_button_label'] = sanitize_text_field( $new_instance['view_all_button_label'] );
			$instance['view_all_button_link']  = esc_url_raw( $new_instance['view_all_button_link'] );
			$instance['slides_to_show']        = wp_strip_all_tags( $new_instance['slides_to_show'] );
			$instance['number']                = (int) $new_instance['number'];
			$instance['offset']                = (int) $new_instance['offset'];
			$instance['category']              = (int) $new_instance['category'];
			return $instance;
		}

	}
}
