<?php get_header(); ?>
<!--container -->
<div id="container">
    <!--contents -->
    <div id="contents">
        <div class="box">
            <img src="<?php bloginfo('template_url'); ?>/images/not_found.gif" width="640" height="300" alt="404 NOT FOUND">
            <p>お探しのページは見つかりませんでした。</p>
            <p><a href="<?php bloginfo('url'); ?>">トップページへ戻る</a></p>
        </div>
    </div>
    <!--/contents -->
    <!--sidebar -->
    <?php get_sidebar(); ?>
    <!--/sidebar -->
</div>
<!--/container -->
<?php get_footer(); ?>