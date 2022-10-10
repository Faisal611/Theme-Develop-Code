<?php
require_once ('custom-widget/custom-category.php');

if (! function_exists('century_theme_setup')) {
    add_action('after_setup_theme','century_theme_setup');
    function century_theme_setup () {
        flush_rewrite_rules();
        load_theme_textdomain('centurytheme',get_template_directory().'/lang');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support( 'automatic-feed-links' );
        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script','style', 'navigation-widgets',
        ));
        add_theme_support('post-formats',array(
            'aside','image','video', 'quote','link','gallery','status','audio','chat',
        ));
        register_nav_menus(array(
            'main-menu' =>__('Main Menu')
        ));

    }
}

add_action('widgets_init','right_sidebar_function');
function right_sidebar_function () {
    register_sidebar(array(
        'name'          => __( 'Right Sidebar', 'centurytheme' ),
        'id'            => 'right-sidebar',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'centurytheme' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ));
}

add_action('wp_enqueue_scripts', 'century_style');
function century_style()
{
    wp_enqueue_style('bundle-css', get_template_directory_uri() . '/assets/css/bundle.css');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('stylesheet', get_stylesheet_uri());

}



add_action('wp_enqueue_scripts', 'century_scripts');
function century_scripts()
{

    wp_enqueue_script('bundle-js', get_template_directory_uri() . '/assets/js/bundle.js', array('jquery'));
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'));


    /*---------------------------------------------------*/

    wp_enqueue_script('html5shiv', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
    wp_script_add_data('html5shiv', 'conditional', 'lt IE 9');

    wp_enqueue_script('respond', 'https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js');
    wp_script_add_data('respond', 'conditional', 'lt IE 9');
}
