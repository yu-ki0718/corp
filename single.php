<?php get_header(); ?>
<!--container -->
<div id="container">
    <!--contents -->
    <div id="contents">
        <?php if (in_category('info') || in_category('seminar')) : ?>
            <?php get_template_part('sgl', 'news'); ?>
        <?php else : ?>
            <?php get_template_part('sgl', 'products'); ?>
        <?php endif; ?>
    </div>
    <!--/contents -->
    <!--sidebar -->
    <?php get_sidebar(); ?>
    <!--/sidebar -->
</div>
<!--/container -->
<?php get_footer(); ?>