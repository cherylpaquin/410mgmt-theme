<?php

// style and scripts
add_action('wp_enqueue_scripts', 'bootscore_child_enqueue_styles');
function bootscore_child_enqueue_styles()
{

    // style.css
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('owl-carousel', get_stylesheet_directory_uri() . '/css/owl.carousel.min.css');
    wp_enqueue_style('owl-theme', get_stylesheet_directory_uri() . '/css/owl.theme.default.min.css');

    // Compiled main.css
    $modified_bootscoreChildCss = date('YmdHi', filemtime(get_stylesheet_directory() . '/css/main.css'));
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css', array('parent-style'), $modified_bootscoreChildCss);

    wp_enqueue_script('owl-carousel', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('jquery-mousewheel', get_stylesheet_directory_uri() . '/js/jquery.mousewheel.min.js', array('jquery'), '1.0.0', true);

    // custom.js
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js', false, '', true);
}

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Featured Artists',
        'menu_title' => 'Featured Artists',
        'menu_slug' => 'featured-artists',
        'capability' => 'edit_posts',
        'position' => '6',
        'icon_url' => 'dashicons-format-audio',
        'redirect' => false,
    ));

    acf_add_options_page(array(
        'page_title' => 'What We Do',
        'menu_title' => 'What We Do',
        'menu_slug' => 'what-we-do',
        'capability' => 'edit_posts',
        'position' => '7',
        'icon_url' => 'dashicons-star-filled',
        'redirect' => false,
    ));
    acf_add_options_page(array(
        'page_title' => 'Our Work',
        'menu_title' => 'Our Work',
        'menu_slug' => 'our-work',
        'capability' => 'edit_posts',
        'position' => '8',
        'icon_url' => 'dashicons-admin-site',
        'redirect' => false,
    ));

    acf_add_options_page(array(
        'page_title' => 'Our Team',
        'menu_title' => 'Our Team',
        'menu_slug' => 'our-team',
        'capability' => 'edit_posts',
        'position' => '9',
        'icon_url' => 'dashicons-admin-users',
        'redirect' => false,
    ));

    acf_add_options_page(array(
        'page_title' => 'Call to Action',
        'menu_title' => 'Call to Action',
        'menu_slug' => 'call-action',
        'capability' => 'edit_posts',
        'redirect' => false,
    ));
}
