<?php
$latest_news_enable = get_theme_mod( 'classy_news_latest_news_tab_enable', true );
$random_news_enable = get_theme_mod( 'classy_news_random_news_tab_enable', true );

if ( $latest_news_enable === true || $random_news_enable === true ) {

	$latest_news_title = get_theme_mod( 'classy_news_latest_news_tab_title', __( 'Latest News', 'classy-news' ) );
	$random_news_title = get_theme_mod( 'classy_news_random_news_tab_title', __( 'Random News', 'classy-news' ) );

	?>
	<!-- Post Tab -->
	<div class="post-tabs-wrapper">
		<div class="post-tabs-head">
			<ul class="post-tabs">
				<?php if ( $latest_news_enable === true ) : ?>
					<li><a href="#tab-1" class="latest"><i class="far fa-clock"></i><?php echo esc_html( $latest_news_title ); ?></a></li>
				<?php endif; ?>
				<?php if ( $random_news_enable === true ) : ?>
					<li><a href="#tab-3" class="latest"><i class="fas fa-random"></i><?php echo esc_html( $random_news_title ); ?></a></li>
				<?php endif; ?>
			</ul>
		</div>
		<div class="post-tab-content-wrapper">
			<?php if ( $latest_news_enable === true ) : ?>
				<div class="post-tab-container" id="tab-1">
					<?php
					$latest_news_args  = array(
						'post_type'      => 'post',
						'post_status'    => 'publish',
						'posts_per_page' => absint( 5 ),
					);
					$latest_news_query = new WP_Query( $latest_news_args );
					if ( $latest_news_query->have_posts() ) :
						while ( $latest_news_query->have_posts() ) :
							$latest_news_query->the_post();
							?>
							<div class="post-item post-list">
								<div class="post-item-content">
									<div class="entry-cat no-bg">
										<?php the_category( '', '', get_the_ID() ); ?>
									</div>
									<h3 class="entry-title">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h3>
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
					endif;
					?>
				</div>
			<?php endif; ?>
			<?php if ( $random_news_enable === true ) : ?>
				<div class="post-tab-container" id="tab-3">
					<?php
					$random_posts_args = array(
						'posts_per_page'      => absint( 5 ),
						'post_type'           => 'post',
						'ignore_sticky_posts' => true,
						'orderby'             => 'rand',
					);
					$random_query      = new WP_Query( $random_posts_args );
					if ( $random_query->have_posts() ) {
						while ( $random_query->have_posts() ) :
							$random_query->the_post();
							?>
							<div class="post-item post-list">
								<div class="post-item-content">
									<div class="entry-cat no-bg">
										<?php the_category( '', '', get_the_ID() ); ?>
									</div>
									<h3 class="entry-title">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h3>
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
			<?php endif; ?>
		</div>
	</div>
	<!-- End Post Tab -->

<?php } ?>
