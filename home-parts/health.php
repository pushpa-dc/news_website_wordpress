<div class="wrap">
    <div class="cat-title">
    <a href="/?cat=6">
        <div class="inner-cat">स्वास्थ्य</div>
    </a>
        <div class="more"><a href="/?cat=6" class="more">थप समाचार</a></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php $i=0; $args = array('showposts' => 3, 'cat' => ''); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); if($i++<1){?>
            <div>
                <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail('full');
                }
                else {
                    echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
                    . '/images/thumbnail-default.jpg" />';
                };?>
                <a href="<?php the_permalink();?>">
                    <h3 class="mt-3"><?php the_title();?></h3>
                </a>
                <i class="fa fa-clock-o my-3" aria-hidden="true"></i> <span
                    class=""><?php echo get_nepali_post_date(get_the_date());?></span>
                <p class="p-2"><?php echo wp_trim_words(get_the_excerpt(),25,'');?></p>
            </div>
            <hr class="w-100">
        </div>
        <!-- .col-md-7 -->
        <?php } else if($i<=2){?>
        <div class="col-md-12 custom-list">
            <div class="media">
                <div class="mr-3">
                    <?php the_post_thumbnail('thumbnail');?>
                </div>
                <div class="media-body">
                <a href="<?php the_permalink();?>"><h5 class="mt-0 mb-1"><?php the_title();?></h5></a>
                    <span class="text-muted p-2"><?php echo get_nepali_post_date(get_the_date());?></span>
                    <p class="p-2"><?php echo wp_trim_words(get_the_excerpt(),25,'');?></p>
                </div>

            </div>
        </div>
        <?php } else{?>
        <div class="col-md-12">
            <hr class="w-100">
            <div class="media">
                <div class="media-body">
                <a href="<?php the_permalink();?>"><h5 class="mt-0 mb-1"><?php the_title();?></h5></a>
                    <span class="text-muted p-2"><?php echo get_nepali_post_date(get_the_date());?></span>
                    <p class="p-2"><?php echo wp_trim_words(get_the_excerpt(),25,'');?></p>
                </div>
                <div class="ml-3">
                    <?php the_post_thumbnail('thumbnail');?>
                </div>
            </div>
        </div>
        <?php } endwhile; wp_reset_postdata();?>
        <!-- .col-md-5 -->
    </div>
</div>
<!-- .row -->