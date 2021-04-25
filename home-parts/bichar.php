<div class="cat-title">
    <a href="/?cat=7">
        <div class="inner-cat">अन्तरवार्ता</div>
    </a>
</div>
<div class="antarwarta">
    <div class="row">
        <div class="col-md-6">
            <?php $i=0; $args = array('showposts' => 4, 'cat' => '-7'); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); if($i++<1){?>
            <a href="<?php the_permalink();?>">
                <div class="card border-0 custom-list-item">
                    <figure>
                        <?php the_post_thumbnail('full');?>
                        <i class="fas fa-microphone-alt"></i>
                    </figure>
                    <div class="card-body p-0 mt-3">
                        <h3 class=""><?php the_title();?></h3>
                        <i class="fa fa-clock-o mb-4" aria-hidden="true"></i>
                        <?php //echo get_nepali_post_date(get_the_date());?>
                        <?php echo get_the_date();?>

                        <p class="mt-2 lead"><?php echo wp_trim_words(get_the_content(),30,'');?></p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <?php } else {?>
            <div class="custom-list">
                <a href="<?php the_permalink();?>" class="d-flex w-100">
                    <?php the_post_thumbnail('thumbnail');?>
                    <div class="ml-3">
                        <h5><?php echo wp_trim_words(get_the_title(),10,'');?></h5>
                        <i class="fa fa-clock-o mb-4" aria-hidden="true"></i>
                        <?php echo get_nepali_post_date(get_the_date());?>
                    </div>
                </a>
            </div>
            <hr class="w-100">
            <?php } endwhile; wp_reset_postdata();?>
        </div>
        <div class="col-md-3">
            <?php $args = array('showposts' => 2,'offset'=> 3, 'cat' => '7'); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post();?>
            <a href="<?php the_permalink();?>">
                <div class="card border-0 custom-list-item d-flex">
                    <figure>
                        <?php the_post_thumbnail('full');?>
                        <i class="fas fa-microphone-alt"></i>
                    </figure>
                    <div class="card-body p-0 mt-3">
                        <h5 class=""><?php echo wp_trim_words(get_the_title(),8,'');?></h5>
                        <i class="fa fa-clock-o mb-4" aria-hidden="true"></i>
                        <?php echo get_nepali_post_date(get_the_date());?>
                    </div>
                </div>
            </a>
            <?php endwhile; wp_reset_postdata();?>
        </div>
    </div>
</div>
<!-- .row -->