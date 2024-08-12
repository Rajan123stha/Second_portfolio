<?php
register_nav_menus(
    array(
        'primary-menu' => __('Header Menu'),
    )
);
function my_custom_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'my-custom-theme'),
        )
    );
}
add_action('after_setup_theme', 'my_custom_theme_setup');

function my_custom_theme_scripts()
{
    wp_enqueue_style('my-custom-theme-style', get_stylesheet_uri());
    wp_enqueue_style('my-custom-theme-fontawesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css');
    // Add other styles and scripts as needed
}
add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');
