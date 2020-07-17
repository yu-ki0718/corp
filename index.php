<?php get_header(); ?>

<div id="container">
	<!--contents -->
	<div id="contents">
		<!--news -->
		<?php
		$pickup = array(
			'category_name=news' => 'news',
			'posts_per_page' => 2,
			'post__in'  => get_option('sticky_posts'),
			'ignore_sticky_posts' => 1
		);
		query_posts($pickup);
		?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="box pick-up">
					<?php
							$cats = get_the_category();
							$cats = $cats[0];
							?>
					<h2 class="pick-<?php echo $cats->category_nicename; ?>">
						<img src="<?php bloginfo('template_url'); ?>/images/ttl_pick_news.gif" width="165" height="23" alt="PICK UP NEWS" /></h2>
					<?php if (has_post_thumbnail()) : ?>
						<?php the_post_thumbnail(); ?>
					<?php else : ?>
						<img src="<?php bloginfo('template_url') ?>/images/pickup.gif" alt="PICK UP" />
					<?php endif; ?>
					<div class="pick-inner">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<span><?php the_time('Y/m/d'); ?></span>
						<?php the_excerpt(); ?>
					</div>
				</div>
		<?php endwhile;
		endif;
		wp_reset_query(); ?>
		<!--/news -->
		<!--products -->
		<div id="products" class="box">
			<div class="section-header">
				<h2><img src="<?php bloginfo('template_url'); ?>/images/ttl_products.gif" width="130" height="23" alt="PRODUCTS" /></h2>
			</div>
			<?php query_posts('category_name=products&posts_per_page=4'); ?>
			<?php if (have_posts()) : ?>
				<ul class="item-lists">
					<?php while (have_posts()) : the_post(); ?>
						<li>
							<span class="type">
								<?php
										$cats = get_the_category();
										$cats = $cats[0];
										?>
								<img src="<?php bloginfo('template_url'); ?>/images/icon_<?php echo $cats->category_nicename ?>.png" width="20" height="20" alt="" />
							</span>
							<?php if (has_post_thumbnail()) : ?>
								<?php the_post_thumbnail(); ?>
							<?php else : ?>
								<img src="<?php bloginfo('template_url') ?>/images/thum_noimage.gif" alt="NO IMAGE" width="110" height="110" />
							<?php endif; ?>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</li>
					<?php endwhile;
						wp_reset_query(); ?>
				</ul>
			<?php endif; ?>
		</div>
		<!--/products -->
		<!--topics -->
		<div id="topics" class="box">
			<div class="section-header">
				<h2><img src="<?php bloginfo('template_url'); ?>/images/ttl_topics.gif" width="95" height="23" alt="TOPICS" /></h2>
				<p><a href="<?php bloginfo('url'); ?>/topics/">一覧を見る</a></p>
			</div>
			<?php query_posts('post_type=topics&posts_per_page=2'); ?>
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
	</div>
	<!--/contents -->

	<!--sidebar -->
	<?php get_sidebar(); ?>
	<!--/sidebar -->
</div>

<?php get_footer(); ?>