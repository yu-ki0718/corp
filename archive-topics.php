<?php get_header(); ?>

<div id="container">
	<!--contents -->
	<div id="contents">
		<!--topics -->
		<div id="topics" class="box">
			<div class="section-header">
				<h2><img src="<?php bloginfo('template_url'); ?>/images/ttl_topics.gif" width="95" height="23" alt="TOPICS" /></h2>
			</div>
			<?php if (have_posts()) : ?>
				<ul class="item-lists">
					<?php while (have_posts()) : the_post(); ?>
						<li>

							<?php if (has_post_thumbnail()) : ?>
								<?php the_post_thumbnail('thumbnail'); ?>
							<?php else : ?>
								<img src="<?php bloginfo('template_url') ?>/images/thum_topics_noimage.gif" alt="NO IMAGE" width="280" height="100" />
							<?php endif; ?>
							<span><?php the_time('Y/m/d'); ?></span>

							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

							<?php the_excerpt(); ?>
							<p class="term-link"><?php echo get_the_term_list($post->ID, 'topicscat', 'Category: ', '・', ''); ?> </p>

						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif;
			wp_reset_query(); ?>
		</div>
		<!--/topics -->
		<?php if (function_exists('wp_pagenavi')) {
			wp_pagenavi();
		} ?>
	</div>
	<!--/contents -->

	<!--sidebar -->
	<?php get_sidebar(); ?>
	<!--/sidebar -->
</div>

<?php get_footer(); ?>