<div class="col-md-12 my-2">
	<?php dynamic_sidebar( 'top-banner' );?>
</div>
<div class="col-12 mt-3">
	<a href="/?cat=17">
  <div class="inner-cat">ब्यानर</div>
	</a>
		
</div>
<?php $args = array('showposts' => 4, 'cat' => '-17'); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); ?>
<div class="col-md-3">
  <a class="" href="<?php the_permalink();?>">
	  <style>
		  .byanar img{
			  height: 180px;
		  }
	  </style>
    <div class="box h-100 pb-3">
      <figure class="byanar" style="overflow: hidden;">
        <?php the_post_thumbnail('medium');?>
        <h5 class="mt-2 p-2">
          <?php echo wp_trim_words(get_the_title(),6,'');?>
        </h5>
      </figure>
      <div class="cat-section">
        <div class="cat-2 p-2 text-muted"> 
          <?php //echo get_nepali_post_date(get_the_date());?>
			<i class="fas fa-clock text-dark text-muted" style="background:transparent"></i>
          <?php echo get_the_date();?>
        </div>
      </div>
    </div>
  </a>
</div>
<?php endwhile; wp_reset_postdata();?>

<div class="col-md-12 my-2">
	<?php dynamic_sidebar( 'bottom-banner' );?>
</div>

