<?php
$slider_title   = get_theme_mod( 'classy_news_banner_slider_title', __( 'Main Banner', 'classy-news' ) );
$excerpt_length = get_theme_mod( 'classy_news_slider_excerpt_length', 20 );
?>
<!-- banner slider -->
<div class="banner-slider-outer">
	<?php if ( ! empty( $slider_title ) ) : ?>
		<div class="widget-header">
			<h3 class="widget-title"><?php echo esc_html( $slider_title ); ?></h3>
		</div>
	<?php endif; ?>
	<div class="banner-slider">
		<?php
		$banner_query = new WP_Query( $banner_args );
		if ( $banner_query->have_posts() ) {
			while ( $banner_query->have_posts() ) :
				$banner_query->the_post();
				?>
				<div class="post-item-outer">
					<div class="post-item post-list slider-item">
						<div class="post-item-image">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'post-thumbnail' ); ?>
							</a>
						</div>
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
								<li class="post-comment"><span class="far fa-comment"></span><?php echo absint( get_comments_number( get_the_ID() ) ); ?></li>
							</ul>
							<div class="post-exerpt">
								<?php
								$content = get_the_content();
								$content = strip_shortcodes( $content ); // Remove shortcodes, including image captions
								$content = preg_replace( '/<img(.*?)alt=[\'"](.*?)[\'"](.*?)>/i', '', $content ); // Remove image tags with alt attributes
								$content = wp_kses_post( wp_trim_words( $content, $excerpt_length ) );
								?>
								<p><?php echo $content; ?></p>
							</div>
						</div>
					</div>
				</div>
				<?php
			endwhile;
			wp_reset_postdata();
		}
		?>
	</div>
</div>
<!-- end banner slider -->
