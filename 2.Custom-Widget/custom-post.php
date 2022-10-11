<?php


add_action( 'widgets_init', 'bizup_recent_post_function' );
function bizup_recent_post_function() {
    register_widget( 'bizup_recent_post_widget' );
}

class bizup_recent_post_widget extends WP_Widget {


    public function __construct() {
        $widget_ops = array(
            'description' => 'My Widget is awesome',
        );
        parent::__construct( 'bizup-recent-posts', 'Bizup Recent Post', $widget_ops );
    }

    public function widget( $args, $database ) {
        ob_start();
        ?>
        <div class="recent-posts mb-50">
            <div class="widget-title">
                <h3 class="title"><?php echo $database['title'] ?></h3>
            </div>

            <?php
            $posts = new WP_Query( array(
                'post_type'      => 'post',
                'posts_per_page' => $database['post-count']
            ) );
            while ( $posts->have_posts() ) : $posts->the_post();
                ?>
                <div class="recent-post-widget no-border">
                    <div class="post-img">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                    <div class="post-desc">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <span class="date-post"> <i class="fa fa-calendar"></i> Aug 8, 2021 </span>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
        <?php echo ob_get_clean();

    }

    public function form( $database ) {
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ) ?>">Title:</label>
            <input class="widefat" type="text" name="<?php echo $this->get_field_name( 'title' ); ?>"
                   id="<?php echo $this->get_field_id( 'title' ) ?>" value="<?php echo $database['title'] ?>">

            <label for="<?php echo $this->get_field_id( 'post-count' ); ?>">Post Count:</label>
            <select name="<?php echo $this->get_field_name( 'post-count' ); ?>"
                    id="<?php echo $this->get_field_id( 'post-count' ); ?>">
                <option value="1" <?php if ( $database['post-count'] == 1 ) {
                    echo 'selected="selected"';
                } ?>>1
                </option>
                <option value="2" <?php if ( $database['post-count'] == 2 ) {
                    echo 'selected="selected"';
                } ?>>2
                </option>
                <option value="3" <?php if ( $database['post-count'] == 3 ) {
                    echo 'selected="selected"';
                } ?>>3
                </option>
                <option value="4" <?php if ( $database['post-count'] == 4 ) {
                    echo 'selected="selected"';
                } ?>>4
                </option>
            </select>
        </p>
        <?php
    }
}