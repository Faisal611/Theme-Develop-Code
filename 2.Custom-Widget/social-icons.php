<?php

add_action( 'widgets_init', 'social_icon_widget' );
function social_icon_widget() {
    register_widget( 'register_social_icon_widget' );
}

class register_social_icon_widget extends WP_Widget {

    public function __construct() {
        $widget_ops = array(
            'description' => 'My Widget is awesome',
        );
        parent::__construct( 'social-icon-widget-id', 'Bizup Social Icon', $widget_ops );
    }

    public function widget( $args, $instance ) {
        ?>
        <div class="textwidget white-color pb-40">
            <p><?php echo $instance['content'] ?></p>
        </div>
        <ul class="footer-social">
            <?php if ( ! empty( $instance['fb'] ) ) { ?>
                <li>
                    <a href="<?php echo $instance['fb'] ?>" target="_blank"><span><i class="fa fa-facebook"></i></span></a>
                </li>
            <?php }; ?>
            <?php if ( ! empty( $instance['twitter'] ) ) { ?>
                <li>
                    <a href="<?php echo $instance['twitter'] ?>" target="_blank"><span><i
                                class="fa fa-twitter"></i></span></a>
                </li>
            <?php }; ?>
            <?php if ( ! empty( $instance['pinterest'] ) ) { ?>
                <li>
                    <a href="<?php echo $instance['pinterest'] ?>" target="_blank"><span><i
                                class="fa fa-pinterest-p"></i></span></a>
                </li>
            <?php }; ?>
            <?php if ( ! empty( $instance['pinterest'] ) ) { ?>
                <li>
                    <a href="<?php echo $instance['instagram'] ?>" target="_blank"><span><i class="fa fa-instagram"></i></span></a>
                </li>
            <?php }; ?>
        </ul>
        <?php
    }

    public function form( $instance ) {
        ob_start()
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'content' ) ?>">Description :</label>
            <textarea class="widefat" name="<?php echo $this->get_field_name( 'content' ) ?>"
                      id="<?php echo $this->get_field_id( 'content' ) ?>" rows="3"
                      value="<?php echo $instance['content'] ?>"></textarea>

            <label for="<?php echo $this->get_field_id( 'fb' ) ?>">Facebook :</label>
            <input class="widefat" type="text" name="<?php echo $this->get_field_name( 'fb' ) ?>"
                   id="<?php echo $this->get_field_id( 'fb' ) ?>" value="<?php echo $instance['fb'] ?>">

            <label for="<?php echo $this->get_field_id( 'twitter' ) ?>">Twitter:</label>
            <input class="widefat" type="text" name="<?php echo $this->get_field_name( 'twitter' ) ?>"
                   id="<?php echo $this->get_field_id( 'twitter' ) ?>" value="<?php echo $instance['twitter'] ?>">

            <label for="<?php echo $this->get_field_id( 'pinterest' ) ?>">Pinterest:</label>
            <input class="widefat" type="text" name="<?php echo $this->get_field_name( 'pinterest' ) ?>"
                   id="<?php echo $this->get_field_id( 'pinterest' ) ?>" value="<?php echo $instance['pinterest'] ?>">

            <label for="<?php echo $this->get_field_id( 'instagram' ) ?>">Instagram:</label>
            <input class="widefat" type="text" name="<?php echo $this->get_field_name( 'instagram' ) ?>"
                   id="<?php echo $this->get_field_id( 'instagram' ) ?>" value="<?php echo $instance['instagram'] ?>">
        </p>
        <?php
        echo ob_get_clean();
    }

}

