<?php get_header(); ?>
<!--container -->
<div id="container">
	<!--contents -->
	<div id="contents">
		<!--topics -->
		<div id="topics" class="box">
			<div class="section-header">
				<h2><img src="<?php bloginfo('template_url'); ?>/images/ttl_topics.gif" width="95" height="23" alt="TOPICS" /></h2>
			</div>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="topics-left">
						<p><?php the_time('Y/m/d'); ?></p>
					</div>
					<div class="topics-right">
						<h3><?php the_title(); ?></h3>
						<?php the_post_thumbnail('large'); ?>
						<?php the_content(); ?>
						<p class="term-link"><?php echo get_the_term_list($post->ID, 'topicscat', 'Category: ', '・', ''); ?></p>
					</div>
			<?php endwhile;
			endif; ?>
		</div>
		<!--/topics -->
	</div>
	<!--/contents -->
	<!--sidebar -->
	<?php get_sidebar(); ?>
	<!--/sidebar -->
</div>
<!--/container -->
<?php get_footer(); ?>