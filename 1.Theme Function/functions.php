<?php

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

        /*---Default Menu --*/
        function default_main_menu() {

            echo '<ul class="nav navbar-nav main-menu">';
            echo '<li><a href="' . home_url() . '" class="transition">HOME</a></li>';
            echo '</ul>';
        }

        /*---The Content --*/
        function readmore( $count ) {
            $content   = get_the_content();
            $explode   = explode( " ", $content );
            $lessArray = array_slice( $explode, 0, $count );
            echo implode( ' ', $lessArray );
        }

        /*---Image Link --*/
        function all_images() {
            $image  = get_post_thumbnail_id( get_the_ID() );
            $images = wp_get_attachment_image_src( $image, 400 );
            return $images[0];
        }

        /*----- Add Image size ----*/
        add_image_size( 'recent_post_image_size', 100, 100, true );

        /*-----Time zone----*/
		date_default_timezone_set( 'Asia/Dhaka' );
		function current_default_time() {
            $data = date( 'd / M' );
            return $data;
        }
    }
}

/*------- Sidebar register area ------*/
add_action('widgets_init', 'right_sidebar_widgets');
function right_sidebar_widgets()
{
    register_sidebar(array(
        'name' => __('Last Sidebar', 'shipper'),
        'id' => 'last_sidebar',
        'description' => __('Last Right Sidebar', 'shipper'),
        'before_widget' => '<div class="col-md-4">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="title">',
        'after_title' => '</h4>'
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
