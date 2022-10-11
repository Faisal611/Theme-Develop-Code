<?php


/*----------backhand-------*/
add_action('widgets_init','right_sidebar_widgets');
function right_sidebar_widgets() {
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

/*----------Fonthand-------*/
 // <?php dynamic_sidebar('right_sidebar'); ?>