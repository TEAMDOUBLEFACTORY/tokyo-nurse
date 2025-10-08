<?php

/* ---------------------------------------
 * 基本機能
 * -------------------------------------- */

add_theme_support('post-thumbnails');

add_shortcode('theme_url', 'shortcode_theme_url');
function shortcode_theme_url()
{
    return get_template_directory_uri();
}

/* ---------------------------------------
 * CSS / JavaScriptの読み込み
 * -------------------------------------- */
function my_script_init()
{
    //wp_enqueue_style('swiper-bundle.min', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
    wp_enqueue_style('css-base', get_template_directory_uri() . '/assets/css/base.css');
    wp_enqueue_style('css-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('css-edit', get_template_directory_uri() . '/assets/css/edit.css');

    // 下層ページ用CSS
      wp_enqueue_style('css-lower', get_template_directory_uri() . '/assets/css/lower.css');
   

    wp_enqueue_script('script-common', get_template_directory_uri() . '/assets/js/common.js', true);
    wp_enqueue_script('script-home', get_template_directory_uri() . '/assets/js/home.js', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');