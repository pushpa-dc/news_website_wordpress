<div class="cat-title">
  <div class="inner-cat">
    राजनीति
  </div>
</div>
<div class="row">
  <div class="col-md-7">
    <?php $i=0; $args = array('showposts' => 5, 'cat' => ''); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); if($i++<1){?>
    <div class="main-list bg-grey">

      <a href="<?php the_permalink();?>">
        <?php the_post_thumbnail('medium');?>
      </a>
      <div class="my-3 p-3">
        <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
      </div>

      <div class="p-3 ">
        <p><?php echo wp_trim_words(get_the_excerpt(),25,'');?></p>
      </div>
    </div>
  </div>
  <!-- .col-md-7 -->
  <div class="col-md-5 custom-list">
    <?php } else{?>

    <div class="media custom-list-item">
      <div class="small-list">
        <?php the_post_thumbnail('thumbnail');?>
      </div>
      <div class="media-body">
        <h5 class="mt-0"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
      </div>
    </div>
    <?php } endwhile; wp_reset_postdata();?>
  </div>
  <!-- .col-md-5 -->
</div>
<!-- .row -->