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

    ))?>

    <span><?php the_title() ?></span>
    <span><?php the_post_thumbnail();?></span>
    <span>Content: <?php readmore(35) ?></span>
    <span>Content: <?php echo wp_trim_words(get_the_content(),50,'.....')?></span>
    <span>Tag : <?php echo get_the_tag_list() ?></span>
    <span>Category: <?php echo the_category() ?></span>
    <span>Category: <?php single_cat_title()?></span>
    <span>Comments : <?php echo comments_popup_link() ?></span>
    <span>Date: <?php the_data('y m d')?></span>
    <span>Author: <?php the_author(); ?></span>
    <span>Author Img: <?php echo get_avatar( get_the_author_meta('ID'), 60); ?></span>




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



