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
{   // Swiper CSS (CDN)
    wp_enqueue_style(
        'swiper',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        [],
        '11'
    );
    //wp_enqueue_style('swiper-bundle.min', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
    wp_enqueue_style('css-base', get_template_directory_uri() . '/assets/css/base.css');
    wp_enqueue_style('css-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('css-edit', get_template_directory_uri() . '/assets/css/edit.css');


    wp_enqueue_script(
        'swiper',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        [],
        '11',
        true // フッターで
    );

    // home.js（Swiperに依存）
    wp_enqueue_script(
        'home-js',
        get_template_directory_uri() . '/assets/js/home.js',
        ['swiper'],
        '1.0.0',
        true
    );
    wp_enqueue_script('script-home', get_template_directory_uri() . '/assets/js/home.js', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

