<?php if ( have_posts() ) { ?>

<div class="blog-post-wrapper">
	<?php
		while ( have_posts() ) {
			the_post();
			?>
				<div class="post-wrapper">
					<div class="blog-inner">
						<div class="post-imag-date-wrapper">
							<a href="<?php echo esc_url( get_permalink() ); ?>" class="post-image-wrapper">
								<?php
								if ( has_post_thumbnail( get_the_ID() ) ) {
									echo get_the_post_thumbnail( get_the_ID(), 'medium_large' );
								}
								?>
							</a>
							<?php
								$news_date_value = get_field('date', $post);
								if ($news_date_value) {
									$date = new DateTime($news_date_value);
									$month_numeric = $date->format('n');
									$news_month = $date->format('M');
									$news_day = $date->format('j');
									$news_year = $date->format('Y');?>
									<div class="post-date"><?php echo esc_html( $news_day ); ?><span><?php echo esc_html( $news_month) ?></span> <span><?php echo esc_html( $news_year) ?></span></div>
								<?php
								}
								
							?>
						</div>
						<div class="post-content">
							<?php
								$author_id = get_the_author_meta('ID');
								$author_name = get_the_author_meta('display_name', $author_id);
							?>
							<h6 class="post-Author">
								<?php echo 'Author: ' . esc_html($author_name); ?>
							</h6>
							<h5 class="post-title">
								<a href="<?php echo esc_url( get_permalink() ); ?>">
								<?php echo esc_html( get_the_title() ); ?>
								</a>
							</h5>
							<div class="post-description"><?php echo wp_kses_post( wp_trim_words(get_the_excerpt(), 15) ); ?></div>
							
							<div class="post-button text-link">
								<a href="<?php echo esc_url( get_permalink() ); ?>" class="elementor-button">Read <span class="last">more</span></a>
							</div>
						</div>
					</div>
				</div>
			<?php
		} ?>
</div>
<?php wp_reset_postdata();
} else {
echo esc_html__( 'No Post Was Found', 'customchildtheme' );
} ?>