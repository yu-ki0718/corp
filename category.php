<?php get_header(); ?>

<div id="container">
    <!--contents -->
    <div id="contents">
        <!--news -->
        <div id="news" class="box">
            <div class="section-header">
                <h2><img src="<?php bloginfo('template_url'); ?>/images/ttl_news.gif" width="80" height="23" alt="NEWS" /></h2>
            </div>
            <?php if (have_posts()) : ?>
                <dl>
                    <?php while (have_posts()) : the_post(); ?>
                        <dt><?php the_time('Y/m/d'); ?></dt>
                        <?php
                                $cats = get_the_category();
                                $cats = $cats[0];
                                ?>
                        <dd class="<?php echo $cats->category_nicename; ?>">
                            <a href="<?php the_permalink(); ?>" <?php if (has_post_format('gallery')) echo 'class="photo"' ?>><?php the_title(); ?></a><?php the_excerpt(); ?></dd>
                    <?php endwhile; ?>
                </dl>
            <?php endif; ?>
        </div>
        <!--/news -->
    </div>
    <!--/contents -->

    <!--sidebar -->
    <?php get_sidebar(); ?>
    <!--/sidebar -->
</div>

<?php get_footer(); ?>