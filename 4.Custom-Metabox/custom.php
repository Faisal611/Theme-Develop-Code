<?php

add_action('cmb2_admin_init','banner_slider_metabox');
    function banner_slider_metabox() {
        $banner_slider = new_cmb2_box(array(
            'id'            => 'banner_slider_metabox',
            'title'         => __( 'Test Metabox', 'sheikh_theme' ),
            'object_types'  => array( 'banner-slider' ), // Post type
            // 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
            // 'context'    => 'normal',
            // 'priority'   => 'high',
            // 'show_names' => true, // Show field names on the left
            // 'cmb_styles' => false, // false to disable the CMB stylesheet
            // 'closed'     => true, // true to keep the metabox closed by default
            // 'classes'    => 'extra-class', // Extra cmb2-wrap classes
            // 'classes_cb' => 'yourprefix_add_some_classes', // Add classes through a callback.
        ));

        $banner_slider->add_field(array(
            'name'       => esc_html__( 'Test Text', 'cmb2' ),
            'desc'       => esc_html__( 'field description (optional)', 'cmb2' ),
            'id'         => 'yourprefix_demo_text',
            'type'       => 'text',
            'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a bool value
            // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
            // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
            // 'on_front'        => false, // Optionally designate a field to wp-admin only
            // 'repeatable'      => true,
            // 'column'          => true, // Display field value in the admin post-listing columns
            // 'repeatable' => true,
            // 'column' => array(
            // 	'name'     => esc_html__( 'Column Title', 'cmb2' ), // Set the admin column title
            // 	'position' => 2, // Set as the second column.
            // );
            // 'display_cb' => 'yourprefix_display_text_small_column', // Output the display of the column values through a callback.
        ));

        $banner_slider->add_field(array(
            'name' => __('Button Text','sheikh_theme'),
            'id'    => '__btn_text__',
            'type'  => 'text'
        ));

        $banner_slider->add_field(array(
            'name' => __('Button Link','sheikh_theme'),
            'id'    => '__btn_link__',
            'type'  => 'text_url'
        ));
    }