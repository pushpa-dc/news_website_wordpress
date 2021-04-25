<?php $args = array('showposts' => 4, 'cat' => '-21'); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); ?>
<div class="col-md-3 p-2 inter clearfix">
    <div class="p-2" style="position:relative">
        <a href="<?php the_permalink();?>">
            <figure  style="overflow: hidden;">
                <?php the_post_thumbnail('large');?>
            </figure>
        </a>
        <h5 class="pt-2"> <a class="text-light" href="<?php the_permalink();?>"> <?php echo wp_trim_words(get_the_title(),8,'');?></a></h5>
    </div>
</div>
<?php endwhile; wp_reset_postdata();?>