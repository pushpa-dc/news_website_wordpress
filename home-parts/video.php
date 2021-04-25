<div class="cat-title">
  <a href="/?cat=14">
    <div class="inner-cat text-white">भिडियो</div>
  </a>
</div>
<div class="row intertain pb-5">
  <?php $args = array('showposts' => 3, 'cat' => '-14'); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); ?>
  <div class="col-md-4 mb-3">
    <a href="<?php the_permalink();?>">
    
      <figure style="position:relative">
      <span class="text-white">
            <i class="fa fa-play vide-play-icon mb-3 video-title" aria-hidden="true"></i>
          </span>
        <?php the_post_thumbnail('square');?>
        <div class="overlay-title">
          <h6 class="pt-2 text-white video-title">
            <?php the_title();?>
          </h6>
        </div>
      </figure>
    </a>
  </div>
  <?php endwhile; wp_reset_postdata();?>
</div>