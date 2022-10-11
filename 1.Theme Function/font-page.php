<!DOCTYPE html>
<html <?php language_attributes(); ?>>



<head>
    <meta name="description" content="<?php bloginfo('description');?>">
    <meta charset="<?php bloginfo('charset');?>">
    <?php wp_head();?>
</head>

<body <?php body_class(); ?>>


    <?php wp_nav_menu(array(
        'theme_location' => 'main-menu',
        'menu_class' => 'nav navbar-nav main-menu',
        'fallback_cb'   => 'default_main_menu',
        'walker' =>  new shipper_Nav_walker(),

    )) ?>

    <h3 class="post-title"><?php the_title() ?></h3>
    <?php the_post_thumbnail();?>
    <p class="post-text"> <?php readmore(35) ?></p>
    <h3>Tag : <?php echo get_the_tag_list() ?></h3>
    <h3>Category : <?php echo get_the_category() ?></h3>



    <!-- Post Pagination -->
    <?php
    the_posts_pagination( array(
        'screen_reader_text'        =>'',
        'prev_text'                 => __('<i class="ion-arrow-left-b"></i>', 'shipper'),
        'next_text'                 => __('<i class="ion-arrow-right-b"></i>', 'shipper'),
    ));
    ?>

</body>
    <?php wp_footer();?>
</html>



