<div class="cat-title">
    <div class="inner-cat text-white my-5">तस्बिरहरु</div>
</div>
<div class="owl-carousel slide pb-4 ">
    <?php $args = array('showposts' => 10, 'cat' => '-19'); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); ?>
    <div class="photo-gallery">
        <a href="<?php the_permalink();?>"> <?php the_post_thumbnail('full');?></a>
        <div class="gallery-body">
            <a href="<?php the_permalink();?>">
                <h1 class="text-white"><?php the_title();?></h1>
            </a>
        </div>
    </div>
    <?php endwhile; wp_reset_postdata();?>
</div>