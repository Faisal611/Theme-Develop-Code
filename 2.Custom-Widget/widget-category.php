<?php
add_action('widgets_init','bizup_custom_category');
function bizup_custom_category() {
    register_widget('bizup_category_widget');
}
class bizup_category_widget extends WP_Widget {


    public function __construct() {
        $widget_ops = array(
            'description' => 'My Widget is awesome',
        );
        parent::__construct( 'custom_category_widget', 'Bizup Custom Category', $widget_ops );
    }

    public function widget( $args, $datebase ) {
        ob_start();
        ?>
        <div class="categories">
            <div class="widget-title">
                <h3 class="title"><?php echo $datebase['title']; ?></h3>
            </div>
            <?php
            $posts = new WP_Query(array(
                'post_type' =>'post',
                'posts_per_page' => $datebase['post-count']
            ));
            ?>
            <ul>
                <?php while ($posts->have_posts()) : $posts->the_post();?>
                    <li><a href="#"><?php the_category(',','');?></a></li>
                <?php endwhile; wp_reset_postdata();?>
            </ul>
        </div>
        <?php echo ob_get_clean();
    }

    public function form( $datebase ) {
        ob_start();
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title')?>">Title:</label>
            <input class="widefat" type="text" name="<?php echo $this->get_field_name('title')?>" id="<?php echo $this->get_field_id('title')?>" value="<?php echo $datebase['title']?>">

            <label for="<?php echo $this->get_field_id('post-count')?>">Post Count</label>
            <select class="widefat" name="<?php echo $this->get_field_name('post-count')?>" id="<?php echo $this->get_field_id('post-count')?>">
                <option value="1" <?php  if($datebase['post-count'] == 1) {echo 'selected';}?>>1</option>
                <option value="2" <?php  if($datebase['post-count'] == 2) {echo 'selected';}?>>2</option>
                <option value="3" <?php  if($datebase['post-count'] == 3) {echo 'selected';}?>>3</option>
                <option value="4" <?php  if($datebase['post-count'] == 4) {echo 'selected';}?>>4</option>
            </select>
        </p>
        <?php echo ob_get_clean();
    }
}

