<div class="row">
    <div class="cat-title w-100">
        <div class="inner-cat">मुख्य <span class="second">खबर</span></div>
    </div>
    <?php $i=0; $args = array('showposts' => 1, 'cat' => '-16'); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); if($i++<1){?>

    <div class="position-relative">
        <?php the_post_thumbnail('full','style=height: 310px;object-fit: cover;');?>
        <!-- <div class="cat-wrapper sub-cat">
                <div class="cat-section d-flex justify-content-between">
                    <div class="sub-cat">
                        <?php //the_category();?>
                    </div>
                    <div class="cat-2">
                        <span class="mx-3">  </span><?php //echo get_nepali_post_date(get_the_date());?>
                    </div>

                </div>
            </div> -->
        <a href="<?php the_permalink();?>">
            <h2 class="py-3"><?php the_title();?></h2>
        </a>

        <p style="font-size:19px;line-height:30px"><?php echo wp_trim_words(get_the_excerpt(),30,'...');?></p>

    </div>
    <!-- .col-md-7 -->
    <?php } else {?>
    <div class="col-md-6 custom-list">
        <div class="card-h mb-3">
            <div class="position-relative bhakhar-news-list">
                <?php the_post_thumbnail();?>
                <div class="cat-wrapper sub-cat">
                    <div class="cat-section d-flex justify-content-between">
                        <div class="sub-cat">
                            <?php the_category();?>
                        </div>
                        <div class="cat-2">
                            <span class="mx-3"> | </span>
                    <?php get_the_date();?>
                            
                            <?php //echo get_nepali_post_date(get_the_date());?>
                        </div>

                    </div>
                </div>
            </div>
            <div class="mt-2">
                <a href="<?php the_permalink();?>">
                    <h5 class="mt-0"><?php the_title();?></h5>
                </a>
                <p style="font-size:19px"><?php echo wp_trim_words(get_the_excerpt(),15,'...');?></p>

            </div>
        </div>
    </div>
    <?php } endwhile; wp_reset_postdata();?>

    <!-- .col-md-5 -->
</div>
<!-- .row -->