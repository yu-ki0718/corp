<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?></title>
	<link rel="alternate" type="application/rss+xml" title="RSS FEED" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- header -->
	<div id="header">
		<div id="header-inner">
			<div id="header-top">
				<div class="fLeft">
					<h1><a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.gif" width="184" height="20" alt="<?php bloginfo('name'); ?>" /></a></h1>
					<p><?php bloginfo('description'); ?></p>
				</div>
				<div class="fRight">
					<ul>
						<li><a href="<?php bloginfo('url'); ?>/sitemap/" class="sitemap">サイトマップ</a></li>
						<li><a href="<?php bloginfo('rss2_url'); ?>" class="rss">RSS FEED</a></li>
					</ul>
					<?php get_search_form(); ?>
				</div>
			</div>
			<div id="header-nav">
				<?php wp_nav_menu(array('theme_location' => 'nav')); ?>
			</div>
			<div id="header-gra">
				<?php if (is_home() || is_404()) : ?>
					<img src="<?php header_image(); ?>" alt="" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" />
				<?php elseif (is_category(array('products', 'products_a', 'products_b', 'products_c', 'products_d')) || in_category(array('products', 'products_a', 'products_b', 'products_c', 'products_d'))) : ?>
					<img src="<?php bloginfo('template_url'); ?>/images/gra_products.jpg" width="960" height="70" alt="" />
				<?php elseif (is_search()) : ?>
					<img src="<?php bloginfo('template_url'); ?>/images/gra_search.jpg" width="960" height="70" alt="" />
				<?php elseif (is_page(array('company', 'access'))) : ?>
					<img src="<?php bloginfo('template_url'); ?>/images/gra_company.jpg" width="960" height="70" alt="" />
				<?php elseif (is_page('contact')) : ?>
					<img src="<?php bloginfo('template_url'); ?>/images/gra_contact.jpg" width="960" height="70" alt="" />
				<?php elseif (is_page('sitemap')) : ?>
					<img src="<?php bloginfo('template_url'); ?>/images/gra_sitemap.jpg" width="960" height="70" alt="" />
				<?php elseif (is_post_type_archive('topics') || is_singular('topics') || is_tax('topicscat')) : ?>
					<img src="<?php bloginfo('template_url'); ?>/images/gra_topics.jpg" width="960" height="70" alt="" />
				<?php else : ?>
					<img src="<?php bloginfo('template_url'); ?>/images/gra_news.jpg" width="960" height="70" alt="" />
				<?php endif; ?>
			</div>
		</div>
	</div>
	</div>
	<!-- /header -->
	<?php dynamic_sidebar(); ?>