<?php get_header(); ?>
<!--container -->
<div id="container">
    <!--contents -->
    <div id="contents">
        <!-- contact -->
        <div id="contact" class="box">
            <div class="section-header">
                <h2><img src="<?php bloginfo('template_url'); ?>/images/ttl_contact.gif" width="130" height="23" alt="CONTACT" /></h2>
            </div>
            <div class="box-inner">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                <?php endwhile;
                endif; ?>
            </div>
        </div>
        <!-- /contact -->
    </div>
    <!--/contents -->
    <!--sidebar -->
    <?php get_sidebar(); ?>
    <!--/sidebar -->
</div>
<!--/container -->
<?php get_footer(); ?>