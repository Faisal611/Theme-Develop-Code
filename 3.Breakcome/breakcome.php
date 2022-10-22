
<section class="sub-header">
    <?php if (is_home()) : ?>
        <h5 class="page-title"> <?php bloginfo('title'); ?> </h5>
    <?php else: ?>
        <ul class="breadcrumb">
            <h5 class="page-title"><?php bloginfo('title'); ?></h5>
            <li><a href="<?php echo home_url() ?>">Home</a></li>
            <li><span class="active"><?php the_title() ?></span></li>
        </ul>
    <?php endif; ?>
</section>
