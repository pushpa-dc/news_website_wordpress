<div class="col-md-12">
    <div class="cat-title">
        <a href="/?cat=23">
            <div class="inner-cat">खेलकुद</div>
        </a>
        <div class="more"><a href="/?cat=23" class="more">थप समाचार</a></div>
    </div>
</div>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-6">
            <?php $i=0; $args = array('showposts' => 3, 'cat' => ''); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); if($i++<1){?>
            <a href="<?php the_permalink();?>">
                <div class="card border-0 custom-list-item">
                    <?php the_post_thumbnail('full');?>
                    <div class="card-body p-0 mt-3">
                        <h4 class=""><?php the_title();?></h4>
                        <i class="fa fa-clock-o mb-4" aria-hidden="true"></i>
                        <?php echo get_nepali_post_date(get_the_date());?>
                        <p class="mt-2"><?php echo wp_trim_words(get_the_excerpt(),30,'');?></p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 order-first">
            <?php } else {?>
            <a href="<?php the_permalink();?>">
                <?php the_post_thumbnail('full');?>
                <div class="mt-3">
                    <h5><?php the_title();?></h5>
                    <i class="fa fa-clock-o mb-4" aria-hidden="true"></i>
                    <?php echo get_nepali_post_date(get_the_date());?>
                </div>
            </a>
            <?php } endwhile; wp_reset_postdata();?>
        </div>
        <div class="col-md-3  order-last">
            <?php $args = array('showposts' => 2,'offset'=> 3, 'cat' => ''); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post();?>
            <a href="<?php the_permalink();?>">
                <div class="card border-0 custom-list-item">
                    <?php the_post_thumbnail('full');?>
                    <div class="card-body p-0 mt-3">
                        <h5 class=""><?php the_title();?></h5>
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