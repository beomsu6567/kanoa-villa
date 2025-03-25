<?php
// アイキャッチ画像追加
add_theme_support('post-thumbnails');

// 記事文章の自動整形停止
add_action('init', function () {
  remove_filter('the_title', 'wptexturize');
  remove_filter('the_content', 'wptexturize');
  remove_filter('the_excerpt', 'wptexturize');
  remove_filter('the_title', 'wpautop');
  remove_filter('the_content', 'wpautop');
  remove_filter('the_excerpt', 'wpautop');
  remove_filter('the_editor_content', 'wp_richedit_pre');
});

// 絵文字スクリプト削除
function disable_emoji()
{
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'disable_emoji');


// メニューの登録
add_theme_support('menus');
function register_my_menus()
{
  register_nav_menus(array(
    'header_menu' => 'ヘッダーメニュー',
    'footer_menu' => 'フッターメニュー'
  ));
}
add_action('init', 'register_my_menus');


// 「投稿者」ページの非表示
function redirect_author_page()
{
  if (is_author()) {
    wp_redirect(home_url('/404'));
    exit;
  }
}
add_action('template_redirect', 'redirect_author_page');

// 管理バーをフロントエンドから非表示にする
if (!current_user_can('administrator') && !current_user_can('editor')) {
  add_filter('show_admin_bar', '__return_false');
}

//  全てのページで自動挿入をオフにする
add_action('init', function () {
  remove_filter('the_content', 'wpautop');
});
