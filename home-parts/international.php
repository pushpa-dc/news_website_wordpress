<div class="cat-title">
    <a href="/?cat=23">
        <div class="inner-cat">प्रवास</div>
    </a>
</div>
<div class="row prabash">
    <div class="col-md-4">
        <?php $i=0; $args = array('showposts' => 3, 'cat' => '-23'); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); if($i++<1){?>
        <a href="<?php the_permalink();?>">
            <div class="card border-0 custom-list-item">
                <?php the_post_thumbnail('full');?>
                <div class="card-body p-0 mt-3">
                    <h5 class="">
                        <?php echo wp_trim_words(get_the_title(),8,'');?>
                    </h5>
                    <i class="fa fa-clock-o mb-3" aria-hidden="true"></i>
                    <?php //echo get_nepali_post_date(get_the_date());?>
                    <?php echo get_the_date();?>

                    <p class="mt-2" style="font-size:20px"><?php echo wp_trim_words(get_the_excerpt(),40,'');?></p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-4 order-first">
        <?php } else {?>
        <a href="<?php the_permalink();?>">
            <?php the_post_thumbnail('full');?>
            <div class="mt-3">
                <h5>
                    <?php echo wp_trim_words(get_the_title(),8,'');?>
                </h5>
                <small class="mb-4">
                    <i class="fa fa-clock-o mb-3" aria-hidden="true"></i>
                    <?php echo get_the_date();?>

                </small>
            </div>
        </a>
        <?php } endwhile; wp_reset_postdata();?>
    </div>
    <div class="col-md-4  order-last">
        <?php $args = array('showposts' => 2,'offset'=> 3, 'cat' => ''); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post();?>
        <a href="<?php the_permalink();?>">
            <div class="card border-0 custom-list-item">
                <?php the_post_thumbnail('full');?>
                <div class="card-body p-0 mt-3">
                    <h5 class="">
                        <?php echo wp_trim_words(get_the_title(),8,'');?>
                    </h5>
                    <small>
                        <i class="fa fa-clock-o mb-3" aria-hidden="true"></i>
                        <?php echo get_the_date();?>

                    </small>

                </div>
            </div>
        </a>
        <?php endwhile; wp_reset_postdata();?>
    </div>
</div>
<!-- .row -->