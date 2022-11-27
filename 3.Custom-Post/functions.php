<?php
add_action('after_setup_theme','sheikh_theme_setup');
    function sheikh_theme_setup () {
        /*---- Register Post ---- */

        register_post_type('banner-slider',array(
            'labels' => array(
                'name' => 'All Banner Slider',
                'add_new' => __('Abb New Slider','sheikh_theme'),
                'add_new_item' => __('Abb New Slider','sheikh_theme')
            ),
            'public' => true,
            'menu_icon' => 'dashicons-embed-photo',
            'menu_position' => 5,
            'supports' => array(
                'title', 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields', 'post-formats'
            ),

        ));

        /*----- Tags ------*/
        register_taxonomy ('banner_slider','banner-slider',
            array (
                'labels' => array(
                    'name' => __('Category', 'sheikh_theme'),
                    'add_new' => __('Add New' , 'sheikh_theme'),
                    'add_new_item' => __('Add new service category','sheikh_theme'),
                ),
                'public' => true,
                'hierarchical' => true
            ));

        /*----- Tags ------*/
        register_taxonomy('banner_tag','banner-slider',
            array(
                'labels' => array(
                    'name' => __('Tags', 'sheikh_theme'),
                    'add_new' => __('Add New Tags', 'sheikh_theme'),
                    'add_new_item' => __('Add New Tags', 'sheikh_theme')
                ),
                'public'    => true,
                'hierarchical'  => false
            ));
    }