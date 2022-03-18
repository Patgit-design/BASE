<?php

function montheme_register_assets()
{
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', []);
    wp_register_style('fonts', 'https://fonts.googleapis.com/css2?family=Gudea:ital@1&family=Lato:wght@100&family=Quattrocento+Sans:wght@400;700&display=swap', []);
    wp_enqueue_style("maincss", get_template_directory_uri() . '/style.css');


    wp_enqueue_style('bootstrap');
    wp_enqueue_style('fonts');
    wp_enqueue_style('style_theme');
}
add_action('wp_enqueue_scripts', 'montheme_register_assets');

function remove_admin_login_header()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');


function montheme_title_separator()
{
    return '|';
}


function montheme_menu_class($classes)
{
    $classes[] = 'nav-item';
    return $classes;
}


function montheme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');

    add_image_size('post-thumbnail', 350, 215, true);
}

function montheme_menu_link_class($attrs)
{
    $attrs['class'] = 'nav-link';
    return $attrs;
}
add_action('after_setup_theme', 'montheme_supports');
add_filter('document_title_separator', 'montheme_title_separator');
add_filter('nav_menu_css_class', 'montheme_menu_class');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');
