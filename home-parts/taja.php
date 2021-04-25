<div class="cat-title">
  <div class="inner-cat">ताजा <span class="second">खबर</span></div>
</div>
<div class="border">
  <?php $i=0; $args = array('showposts' => 3, 'cat' =>'-20'); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); if($i++<1){?>
  <div class="main-list">
    <a href="<?php the_permalink();?>">
      <figure style="position:relative">
        <?php the_post_thumbnail('medium');?>
        <div class="overlay-title-1">
          <h5 class="my-2 p-2">
            <?php the_title();?>
          </h5>
          <span class="text-dark p-2">
            <i class="fa fa-clock-o mb-4" aria-hidden="true"></i>
            <?php echo get_nepali_post_date(get_the_date());?>
            <?php //echo get_the_date();?>
          </span>
        </div>
      </figure>
      <hr>
    </a>
  </div>
  <div class="custom-list">
    <?php } else{?>
    <div class="custom-list-item p-2">
      <div class="">
        <a href="<?php the_permalink();?>">
          <h5 class="my-2"><?php the_title();?></h5>
          <i class="fa fa-clock-o mb-4" aria-hidden="true"></i>
          <?php echo get_nepali_post_date(get_the_date());?>
        </a>
      </div>
    </div>
    <?php } endwhile; wp_reset_postdata(); ?>
  </div>
</div>