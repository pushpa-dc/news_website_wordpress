<?php $args = array('showposts' => 3, 'cat' => ''); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); ?>
<div class="col-md-4 p-3 main-list clearfix">
    <div class="p-3" style="position:relative">
        <a href="<?php the_permalink();?>">
        <figure style="overflow: hidden;">
        <?php the_post_thumbnail('medium');?>
        </figure>
        </a>
        <h4 class="pt-2"> <a class="text-light" href="<?php the_permalink();?>"><?php the_title();?></a></h4>
    </div>
</div>
<?php endwhile; wp_reset_postdata();?>