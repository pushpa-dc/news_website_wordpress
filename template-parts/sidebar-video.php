<aside class="related text-left">
<div class="cat-title">थप भिडियोहरु</div>
<div class="row">
    <?php $id=get_the_ID(); $allcat = wp_get_post_categories($id);
    $categoryarr = array_diff($allcat,array(2));
    $args = array('showposts' => 5, 'cat'=>implode(',',$categoryarr),'post__not_in'=>array($id),
    'tax_query' => array(
        array(
            'taxonomy' => 'post_format',
            'field' => 'slug',
            'terms' => array( 'post-format-video' )
        )
    ));
    $loop = new WP_Query( $args );while($loop->have_posts()): $loop->the_post(); ?>
    <div class="col-12">
        <div class="post-list video-list">
            <a href="<?php the_permalink();?>">
                <h5><?php the_title();?></h5>
                <div class="video-thumb"><?php the_post_thumbnail('medium');?></div>
                <span class="play-icon"><i class="fa fa-play-circle fa-2x"></i></span>
            </a>
        </div>
    </div>
    
        <?php endwhile; wp_reset_postdata();?>
</div>
<!-- .row -->
</aside>