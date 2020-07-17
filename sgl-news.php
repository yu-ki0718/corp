        <!--news -->
        <div id="news" class="box">
            <div class="section-header">
                <h2><img src="<?php bloginfo('template_url'); ?>/images/ttl_news.gif" width="80" height="23" alt="NEWS" /></h2>
            </div>
            <?php if (have_posts()) : ?>
                <div class="box-inner">
                    <?php while (have_posts()) : the_post(); ?>
                        <?php
                                $cats = get_the_category();
                                $cats = $cats[0];
                                ?>
                        <h3><span class="ttl-<?php echo $cats->category_nicename; ?>"><?php the_title(); ?></span></h3>
                        <p class="data">更新日：<?php the_time('Y/m/d'); ?></p>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
        <!--/news -->
        <div class="box">
            <span class="fLeft"><?php previous_post_link('&laquo; %link', '前の情報を見る', TRUE); ?></span>
            <span class="fRight"><?php next_post_link('%link &raquo;', '次の情報を見る', TRUE) ?></span>
        </div>
        </div>
        <!--/contents -->