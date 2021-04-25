<div class="container sticky-top">
    <?php dynamic_sidebar('sidebar-single');?>
    <?php get_template_part('home-parts/popular');?>
    <div class="update-taja">
        <div class="cat-title mt-3">
            <div class="inner-cat">ताजा अपडेट</div>
            <hr>
        </div>
        <?php $args = array('showposts' => 4, 'cat' => ''); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); ?>
        <div class="sidebar-list shadow-sm p-2 mt-2 border-0 clearfix">
            <a href="<?php the_permalink();?>">
                <h5><?php the_title();?></h5>
                <?php the_post_thumbnail('thumbnail');?>
                <p><?php echo wp_trim_words(get_the_excerpt(),15,'');?></p>
            </a>
        </div>
        <?php endwhile;wp_reset_postdata();?>
    </div>
</div>