<?php
//サイトナビゲーション用
register_nav_menus(array('nav' => 'ナビゲーション'));

//エディタ用スタイルシート
add_editor_style();

//ウィジェット
register_sidebar(array(
    'before_widget' => '<div class="breadcrumbs">',
    'after_widget' => '</div>',
    'name' => 'パンくずリスト'
));

//アイキャッチ画像を利用
add_theme_support('post-thumbnails');
set_post_thumbnail_size(110, 110, true);

//新しい投稿タイプ
function new_post_type()
{
    //トピックスを作る
    register_post_type(
        'topics',
        array(
            'label' => 'トピックス',
            'public' => true,
            'hierarchical' => false,
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'excerpt'
            ),
            'menu_position' => 5
        )
    );
    // 新規タクソノミーを作成
    register_taxonomy(
        'topicscat',
        'topics',
        array(
            'label' => 'トピックスカテゴリー',
            'public' => true,
            'hierarchical' => true,
        )
    );
}
add_action('init', 'new_post_type');
//抜粋の文字数を指定
function new_excerpt_mblength($length)
{
    return 60;
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');
//抜粋の最後の文字列を変更
function new_excerpt_more($more)
{
    return '・・・';
}
add_filter('excerpt_more', 'new_excerpt_more');

//サイトナビゲーション用
register_nav_menus(array('nav' => 'ナビゲーション', 'sitemap' => 'サイトマップ'));

//jQueryを使用する
function new_scripts()
{
    wp_enqueue_script('jquery');

    wp_enqueue_script(
        'base',
        get_template_directory_uri() . '/base.js',
        array('jquery')
    );
}
add_action('wp_enqueue_scripts', 'new_scripts');

//カスタムヘッダー機能を有効化
define('NO_HEADER_TEXT', true);
define('HEADER_IMAGE', '%s/images/gra_main.jpg');
define('HEADER_IMAGE_WIDTH', 960);
define('HEADER_IMAGE_HEIGHT', 300);


add_custom_image_header('', 'admin_header_style');
function admin_header_style()
{
    ?><style type="text/css">
        #headimg {
            width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
            height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
        }
    </style><?php
            }

            //デフォルト画像
            register_default_headers(array(
                'header_evening' => array(
                    'url' => '%s/images/gra_main2.jpg',
                    'thumbnail_url' => '%s/images/gra_main2_thum.jpg'
                ),
                'header_night' => array(
                    'url' => '%s/images/gra_main3.jpg',
                    'thumbnail_url' => '%s/images/gra_main3_thum.jpg'
                )
            ));

            //ウィジェット
            register_sidebar(array(
                'before_widget' => '<div class="free-space">',
                'after_widget' => '</div>',
                'before_title'  => '<h2>',
                'after_title'   => '</h2>',
                'name' => 'サイトからのお知らせ'
            ));
            //投稿フォーマット
            add_theme_support('post-formats', array('gallery'));


            //投稿フォーマット
            add_theme_support('post-formats', array('gallery', 'image', 'status'));

            //ギャラリーのスタイルを削除
            function remove_gallery_style()
            {
                return "<div class='gallery'>";
            }
            add_filter('gallery_style', 'remove_gallery_style');
