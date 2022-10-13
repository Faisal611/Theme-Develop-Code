<?php
// WP_Query arguments
$args = array(
    'post_type'              => array('post'), // use any for any kind of post type, custom post type slug for custom post type
    'post_status'            => array('publish'), // Also support: pending, draft, auto-draft, future, private, inherit, trash, any
    'posts_per_page'         => '5', // use -1 for all post
    'order'                  => 'DESC', // Also support: ASC
    'orderby'                => 'date', // Also support: none, rand, id, title, slug, modified, parent, menu_order, comment_count
    'tax_query'              => array(
        'relation' => 'OR', // Use AND for taking result on both condition true
        array(
            'taxonomy'         => 'category', // taxonomy slug
            'terms'            => array(1, 2), // term ids
            'field'            => 'term_id', // Also support: slug, name, term_taxonomy_id
            'operator'         => 'IN', // Also support: AND, NOT IN, EXISTS, NOT EXISTS
            'include_children' => true,
        ),
        array(
            'taxonomy'         => 'custom-category', // taxonomy slug
            'terms'            => array(1, 2), // term ids
            'field'            => 'term_id', // Also support: slug, name, term_taxonomy_id
            'operator'         => 'IN', // Also support: slug, name, term_taxonomy_id
            'include_children' => true,
        ),
    ),
    'meta_query'             => array(
        'relation' => 'OR', // Use AND for taking result on both condition true
        array(
            'key'     => 'meta-1', // any meta key
            'value'   => 'value-1', // value under that meta
            'compare' => 'LIKE', // Also support: =, !=, >, >=, <, <=, NOT LIKE, IN, NOT IN, BETWEEN, NOT BETWEEN, EXISTS, NOT EXISTS, REGEXP, NOT REGEXP, RLIKE
            'type'    => 'CHAR', // Also support: NUMERIC, BINARY, DATE, DATETIME, DECIMAL, SIGNED, UNSIGNED, TIME
        ),
        array(
            'key'     => 'meta-2', // any meta key
            'value'   => 'value-2', // value under that meta
            'compare' => 'LIKE', // Also support: =, !=, >, >=, <, <=, NOT LIKE, IN, NOT IN, BETWEEN, NOT BETWEEN, EXISTS, NOT EXISTS, REGEXP, NOT REGEXP, RLIKE
            'type'    => 'CHAR', // Also support: NUMERIC, BINARY, DATE, DATETIME, DECIMAL, SIGNED, UNSIGNED, TIME
        ),
    ),
);

// The Query
$query = new WP_Query($args);

// The Loop
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        // do something
    }
} else {
    // no posts found
}

// Restore original Post Data
wp_reset_postdata();
