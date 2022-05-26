<?php

function hajime_files()
{
    wp_enqueue_style('hajime_main_styles', get_stylesheet_uri());
    wp_enqueue_style('pico_css', 'https://unpkg.com/@picocss/pico@latest/css/pico.min.css');
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v6.1.1/css/all.css');
}

add_action('wp_enqueue_scripts', 'hajime_files');

function hajime_features()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support(
        'html5',
        array('comment-list', 'comment-form', 'search-form')
    );
}

add_action('after_setup_theme', 'hajime_features');

?>

<!-- end -->