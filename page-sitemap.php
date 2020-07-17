<?php get_header(); ?>
<!--container -->
<div id="container">
    <!--contents -->
    <div id="contents">

        <!-- sitemap -->
        <div id="sitemap" class="box">
            <div class="section-header">
                <h2><img src="<?php bloginfo('template_url'); ?>/images/ttl_sitemap.gif" width="105" height="23" alt="SITEMAP" /></h2>
            </div>
            <div class="sitemap-inner">
                <h3>サイトマップ</h3>
                <?php wp_nav_menu(array('theme_location' => 'sitemap')); ?>
            </div>
        </div>
        <!-- /sitemap -->
    </div>
    <!--/contents -->
    <!--sidebar -->
    <?php get_sidebar(); ?>
    <!--/sidebar -->
</div>
<!--/container -->
<?php get_footer(); ?>