<?php $grid_title = get_theme_mod( 'classy_news_grid_posts_title', __( 'Grid Posts', 'classy-news' ) ); ?>
<!-- grid -->
<div class="banner-grid-outer">
	<?php if ( ! empty( $grid_title ) ) : ?>
		<div class="widget-header">
			<h3 class="widget-title"><?php echo esc_html( $grid_title ); ?></h3>
		</div>
	<?php endif; ?>
	<div class="banner-grid-wrapper">
		<?php
		$grid_posts = new WP_Query( $grid_posts_args );
		if ( $grid_posts->have_posts() ) {
			while ( $grid_posts->have_posts() ) :
				$grid_posts->the_post();
				?>
				<div class="post-item">
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
					</div>
				</div>
				<?php
			endwhile;
			wp_reset_postdata();
		}
		?>
	</div>
</div>
<!-- end grid slider -->
