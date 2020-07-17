<?php get_header(); ?>

<div id="container">
    <!--contents -->
    <div id="contents">
        <!--products -->
        <div id="products" class="box">
            <div class="section-header">
                <h2><img src="<?php bloginfo('template_url'); ?>/images/ttl_products.gif" width="130" height="23" alt="PRODUCTS" /></h2>
            </div>
            <?php if (have_posts()) : ?>
                <ul class="item-lists">
                    <?php while (have_posts()) : the_post(); ?>
                        <li>
                            <span class="type">
                                <img src="<?php bloginfo('template_url'); ?>/images/icon_products_a.png" width="20" height="20" alt="" />
                            </span>
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php else : ?>
                                <img src="<?php bloginfo('template_url') ?>/images/thum_noimage.gif" alt="NO IMAGE" width="110" height="110" />
                            <?php endif; ?>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo post_custom('価格'); ?></p>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
        <!--/products -->
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