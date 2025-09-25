<?php
function sida_enqueue_assets()
{
    wp_enqueue_style(
        'sida-google-fonts',
        'https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        [],
        null
    );

    $dir = get_template_directory();
    $uri = get_template_directory_uri();

    $css = $dir . '/dist/style.css';
    if (file_exists($css)) {
        wp_enqueue_style('sida-style', $uri . '/dist/style.css', [], filemtime($css));
    }

    $js = $dir . '/dist/main.js';
    if (file_exists($js)) {
        wp_enqueue_script('sida-script', $uri . '/dist/main.js', [], filemtime($js), true);
    }
}
add_action('wp_enqueue_scripts', 'sida_enqueue_assets');

add_theme_support('post-thumbnails');
