<?php
if ( ! class_exists( 'Classy_News_Header_Post_Widget' ) ) {
	/**
	 * Adds Classy News Header Posts Widget.
	 */
	class Classy_News_Header_Post_Widget extends WP_Widget {

		/**
		 * Register widget with WordPress.
		 */
		public function __construct() {
			$header_post_widget = array(
				'classname'   => 'widget adore-widget header-post-widget',
				'description' => __( 'Retrive Header Posts Widgets', 'classy-news' ),
			);
			parent::__construct(
				'classy_news_header_post_widget',
				__( 'Adore Widget: Header Posts Widget', 'classy-news' ),
				$header_post_widget
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

			$header_posts = isset( $instance['select_posts'] ) ? absint( $instance['select_posts'] ) : '';
			$post_thumbnail        = isset( $instance['post_thumbnail'] ) ? $instance['post_thumbnail'] : 'enable-thumbnail';
			$thumbnail_position    = isset( $instance['thumbnail_position'] ) ? $instance['thumbnail_position'] : 'left-thumbnail';
			$post_meta    = isset( $instance['post_meta'] ) ? $instance['post_meta'] : 'disable-meta';

			echo isset( $args['before_widget'] ) ? $args['before_widget'] : '';
				?>
			<div class="header-post-outer">
				<div class="header-post-wrapper">
					<?php
					$header_posts_args = array(
						'post_type'           => 'post',
						'post__in'            => array( $header_posts ),
						'orderby'             => 'post__in',
						'posts_per_page'      => absint( 1 ),
						'ignore_sticky_posts' => true,
					);
					$header_posts = new WP_Query( $header_posts_args );
					if ( $header_posts->have_posts() ) {
						while ( $header_posts->have_posts() ) :
							$header_posts->the_post();
							?>
							<div class="post-item post-list <?php echo esc_attr( $thumbnail_position ); ?>">
									<?php if ( $post_thumbnail === 'enable-thumbnail' ) : ?>
										<div class="post-item-image">
											<a href="<?php the_permalink(); ?>">
												<?php the_post_thumbnail( 'post-thumbnail' ); ?>
											</a>
										</div>
									<?php endif; ?>
									<div class="post-item-content">
										<h2 class="entry-title header-title">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h2>
										<?php if ( $post_meta === 'enable-meta' ) : ?>
										<ul class="entry-meta">
											<li class="post-author"> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><span class="far fa-user"></span><?php echo esc_html( get_the_author() ); ?></a></li>
											<li class="post-date"> <span class="far fa-calendar-alt"></span><?php echo esc_html( get_the_date() ); ?></li>
											<li class="post-comment"><span class="far fa-comment"></span><?php echo absint( get_comments_number( get_the_ID() ) ); ?></li>
										</ul>
										<?php endif; ?>
									</div>
							</div>
							<?php
						endwhile;
						wp_reset_postdata();
					}
					?>
				</div>
			</div>
			<?php
			echo isset( $args['after_widget'] ) ? $args['after_widget'] : '';
		}

		/**
		 * Back-end widget form.
		 *
		 * @see WP_Widget::form()
		 *
		 * @param array $instance Previously saved values from database.
		 */
		public function form( $instance ) {
			$header_posts          = isset( $instance['select_posts'] ) ? absint( $instance['select_posts'] ) : '';
			$post_thumbnail        = isset( $instance['post_thumbnail'] ) ? $instance['post_thumbnail'] : 'enable-thumbnail';
			$thumbnail_position    = isset( $instance['thumbnail_position'] ) ? $instance['thumbnail_position'] : 'left-thumbnail';
			$post_meta    = isset( $instance['post_meta'] ) ? $instance['post_meta'] : 'disable-meta';
			?>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'select_posts' ) ); ?>"><?php esc_html_e( 'Select the Post to show:', 'classy-news' ); ?></label>
				<select id="<?php echo esc_attr( $this->get_field_id( 'select_posts' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'select_posts' ) ); ?>" class="widefat" style="width:100%;">
					<?php
					$posts = classy_news_get_post_choices();
					foreach ( $posts as $post_id => $post_title ) {
						?>
						<option value="<?php echo absint( $post_id ); ?>" <?php selected( $header_posts, $post_id ); ?>><?php echo esc_html( $post_title ); ?></option>
					<?php } ?>      
				</select>
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'post_thumbnail' ) ); ?>"><?php esc_html_e( 'Image Options:', 'classy-news' ); ?></label>
				<select id="<?php echo esc_attr( $this->get_field_id( 'post_thumbnail' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'post_thumbnail' ) ); ?>" class="widefat" style="width:100%;">
					<option value="enable-thumbnail" <?php selected( 'enable-thumbnail', $post_thumbnail ); ?>><?php esc_html_e( 'Show', 'classy-news' ); ?></option>
					<option value="disable-thumbnail" <?php selected( 'disable-thumbnail', $post_thumbnail ); ?>><?php esc_html_e( 'Hide', 'classy-news' ); ?></option>
				</select>
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'thumbnail_position' ) ); ?>"><?php esc_html_e( 'Image Position:', 'classy-news' ); ?></label>
				<select id="<?php echo esc_attr( $this->get_field_id( 'thumbnail_position' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'thumbnail_position' ) ); ?>" class="widefat" style="width:100%;">
					<option value="left-thumbnail" <?php selected( 'left-thumbnail', $thumbnail_position ); ?>><?php esc_html_e( 'Left', 'classy-news' ); ?></option>
					<option value="right-thumbnail" <?php selected( 'right-thumbnail', $thumbnail_position ); ?>><?php esc_html_e( 'Right', 'classy-news' ); ?></option>
				</select>
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'post_meta' ) ); ?>"><?php esc_html_e( 'Post Meta Options:', 'classy-news' ); ?></label>
				<select id="<?php echo esc_attr( $this->get_field_id( 'post_meta' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'post_meta' ) ); ?>" class="widefat" style="width:100%;">
					<option value="enable-meta" <?php selected( 'enable-meta', $post_meta ); ?>><?php esc_html_e( 'Show', 'classy-news' ); ?></option>
					<option value="disable-meta" <?php selected( 'disable-meta', $post_meta ); ?>><?php esc_html_e( 'Hide', 'classy-news' ); ?></option>
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
			$instance                           = $old_instance;
			$instance['select_posts']   = (int) $new_instance['select_posts'];
			$instance['post_thumbnail'] = wp_strip_all_tags( $new_instance['post_thumbnail'] );
			$instance['thumbnail_position'] = wp_strip_all_tags( $new_instance['thumbnail_position'] );
			$instance['post_meta'] = wp_strip_all_tags( $new_instance['post_meta'] );
			return $instance;
		}

	}
}
