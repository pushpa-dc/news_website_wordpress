<div class="custom-shadow">
    <?php $i=0; $args = array('showposts' => 4, 'cat' => $cat[0],); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); if($i++<1){?>
        <div class="main-list kala clearfix">
            <a href="<?php the_permalink();?>">
                <figure style="position:relative">
                    <?php the_post_thumbnail('medium');?>
                    <div class="p-2">
                        <h4 class="">
                            <?php the_title();?>
                        </h4>
                        <span class="tex-muted">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <?php //echo get_nepali_post_date(get_the_date());?>
                            <?php echo get_the_date();?>              
                        </span>
                    </div>
                </figure>
            </a>
        </div>
        <hr>
        <div class="custom-list">
            <?php } else{?>
                <div class="media custom-list-item sano-img p-2">
                    <?php the_post_thumbnail('thumbnail');?>
                    <div class="media-body">
                        <a href="<?php the_permalink();?>">
                            <h5 class="mt-0"><?php the_title();?></h5>
                        </a>
                    </div>
                </div>
                <?php } endwhile; wp_reset_postdata(); ?>
            </div>
        </div>