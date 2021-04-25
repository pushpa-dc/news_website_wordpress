<div class="wrap">
    <div class="cat-title">
        <a href="/?cat=10">
            <div class="inner-cat">प्रविधि</div>
        </a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php $i=0; $args = array('showposts' => 3, 'cat' => '-10'); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); if($i++<1){?>
            <div class="key">
                <a href="<?php the_permalink();?>">
                    <figure>
                        <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail('full');
                    }
                    else {
                        echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
                        . '/images/logo.png" />';
                    };?>
                        <div class="overlay-title1">
                            <h5 class="pt-3"><?php the_title();?></h5>
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <span class=""><?php //echo get_nepali_post_date(get_the_date());?>
                                <?php echo get_the_date();?>

                            </span>

                        </div>
                    </figure>
                </a>
            </div>
            <hr class="w-100">
        </div>
        <!-- .col-md-7 -->
        <?php } else if($i<=2){?>
        <div class="col-md-12 custom-list">
            <div class="media small-list">
                <div class="mr-3">
                    <figure>
                        <?php the_post_thumbnail('thumbnail');?>
                    </figure>
                </div>
                <div class="media-body">
                    <a href="<?php the_permalink();?>">
                        <h5 class="mt-0 mb-1"><?php the_title();?></h5>
                    </a>
                    <span class="text-muted p-2">
                        <i class="fa fa-clock-o my-3" aria-hidden="true"></i>
                        <?php //echo get_nepali_post_date(get_the_date());?>
                        <?php echo get_the_date();?>
                    </span>

                    <!-- <p class="p-2"><?php //echo wp_trim_words(get_the_excerpt(),25,'');?></p> -->
                </div>

            </div>
        </div>
        <?php } else{?>
        <div class="col-md-12">
            <hr class="w-100">
            <div class="media small-list">
                <div class="media-body">
                    <a href="<?php the_permalink();?>">
                        <h5 class="mt-0 mb-1"><?php the_title();?></h5>
                    </a>
                    <span class="text-muted p-2"><?php //echo get_nepali_post_date(get_the_date());?>
                    <?php echo get_the_date();?>
                
                    </span>

                    <!-- <p class="p-2"><?php //echo wp_trim_words(get_the_excerpt(),25,'');?></p> -->
                </div>
                <div class="ml-2">
                    <?php the_post_thumbnail('thumbnail');?>
                </div>
            </div>
        </div>
        <?php } endwhile; wp_reset_postdata();?>
        <!-- .col-md-5 -->
    </div>
</div>
<!-- .row -->