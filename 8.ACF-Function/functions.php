<?php
/*----------------- ACF Options ----------------*/
add_action('acf/init','acf_header_option');
function acf_header_option () {

    // Check Function Exists
    if (function_exists('acf_add_options_page')) {

        //Register options page.
        acf_add_options_page(array(
            'page_title'    => __('Theme Settings','else-blog'),
            'menu_title'    => __('Theme Option','theme-blog'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}