<?php $featured_title = get_theme_mod( 'classy_news_featured_posts_title', __( 'Featured Posts', 'classy-news' ) ); ?>
<!-- Featured Posts -->
<div class="featured-posts">
	<?php if ( ! empty( $featured_title ) ) : ?>
		<div class="widget-header">
			<h3 class="widget-title"><?php echo esc_html( $featured_title ); ?></h3>
		</div>
	<?php endif; ?>
	<?php
	$featured_posts_query = new WP_Query( $featured_posts_args );
	if ( $featured_posts_query->have_posts() ) {
		while ( $featured_posts_query->have_posts() ) :
			$featured_posts_query->the_post();
			?>
			<div class="post-item post-list">
				<div class="post-item-content">
					<div class="entry-cat no-bg">
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
				</div>
			</div>
			<?php
		endwhile;
		wp_reset_postdata();
	}
	?>
</div>
<!-- End Featured Posts -->
