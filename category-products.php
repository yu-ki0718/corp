<?php get_header(); ?>

<div id="container">
    <!--contents -->
    <div id="contents">
        <div id="original-products" class="box">
            <div class="section-header">
                <h2><img src="<?php bloginfo('template_url'); ?>/images/ttl_original_products.gif" width="225" height="23" alt="ORIGINAL PRODUCTS" /></h2>
            </div>
            <img src="<?php bloginfo('template_url'); ?>/images/item_products.jpg" width="283" height="222" alt="" class="items-img" />
            <div class="items-detail">
                <h3><img src="<?php bloginfo('template_url'); ?>/images/ttl_confidence.gif" width="209" height="27" alt="×××製の確かな自信" /></h3>
                <p><img src="<?php bloginfo('template_url'); ?>/images/products_text.gif" width="229" height="45" alt="" /></p>
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
            </div>
        </div>
        <!--products -->
        <div id="products" class="box">
            <div class="section-header">
                <h2><img src="<?php bloginfo('template_url'); ?>/images/ttl_products.gif" width="130" height="23" alt="PRODUCTS" /></h2>
            </div>
            <?php
            $catId = get_query_var('cat'); //カテゴリーID
            $children = get_terms('category', array('child_of' => $catId, 'fields' => 'ids'));
            foreach ($children as $child) : //子のカテゴリーがあるだけ繰り返し
                query_posts('cat=' . $child . '&posts_per_page= 4');
                ?>

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
                                <p><?php echo post_custom('価格'); ?></p>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                    <?php the_category(); ?>
                <?php endif;
                    wp_reset_query(); ?>
            <?php endforeach; ?>
        </div>
        <!--/products -->
    </div>
    <!--/contents -->

    <!--sidebar -->
    <?php get_sidebar(); ?>
    <!--/sidebar -->
</div>

<?php get_footer(); ?>