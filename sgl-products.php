<!--products -->
<div id="products" class="box">
    <div class="section-header">
        <h2><img src="<?php bloginfo('template_url'); ?>/images/ttl_products.gif" width="130" height="23" alt="PRODUCTS" /></h2>
    </div>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="product-left">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                <?php else : ?>
                    <img src="<?php bloginfo('template_url') ?>/images/noimage.gif" alt="NO IMAGE" width="300" height="300" />
                <?php endif; ?>
            </div>
            <div class="product-right">
                <div class="product-title">
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo post_custom('価格'); ?></p>
                </div>
                <?php the_content(); ?>
            </div>
    <?php endwhile;
    endif; ?>
    <p><?php the_tags('Color：'); ?></p>
</div>
<!--/products -->