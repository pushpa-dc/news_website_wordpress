<!-- <aside class="related mt-4">
    <div class="cat-title">
        <div class="inner-cat">सम्बन्धित समाचार</div>
    </div>
    <div class="row">
        <?php //$i=0; $id=get_the_ID(); $allcat = wp_get_post_categories($id); $categoryarr = array_diff($allcat,array(2)); $args = array('showposts' => 4, 'cat'=>implode(',',$categoryarr),'post__not_in'=>array($id));$loop = new WP_Query( $args );while($loop->have_posts()): $loop->the_post(); ?>
        <div class="col-md-3 mb-4">
            <a href="<?php //the_permalink();?>">
                <div class="popular-news-item-1 shadow-sm h-100">
                    <?php //the_post_thumbnail('medium');?>
                    <div class="popular-title-1 p-3">
                        <h5><?php //the_title();?></h5>
                        <div class="popular-date-time-1">
                            <div class="post-date-1">
                                <i class="far fa-clock mr-2"></i>
                                <?php //echo get_nepali_ago(get_the_date('U'))." अगाडि"; ?>
                    <?php //echo get_the_date();?>

                            </div>
                            <div class="post-name">
                                <i class="fas fa-user mr-2"></i><?php //the_author(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <?php //endwhile; wp_reset_postdata();?>
    </div>
</aside> -->


<aside>
    <div class="cat-title mt-3">
        <div class="inner-cat">सम्बन्धित</div>
        <hr>
    </div>
    <?php $args = array('showposts' => 3, 'cat' => ''); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); ?>
    <div class="post-list clearfix">
        <a class="d-flex" href="<?php the_permalink();?>">
            <div class="header">
                <h4><?php the_title();?></h4>
                <p style="font-size:20px"><?php echo wp_trim_words(get_the_excerpt(),25,'');?></p>
            </div>
            <?php the_post_thumbnail('medium');?>
            <div class="writer small-head d-flex">
                <?php $author_id = get_the_author_meta('ID');  $author_image = get_avatar( get_the_author_meta( 'ID' ), 25 );  $custom_image = get_field('image_author', 'user_'. $author_id );?>
                <?php if($custom_image){?>
                <img class="author-img rounded-circle" src="<?php echo $custom_image['sizes']['thumbnail'];?>"
                    style="width:25px !important;height:25px !important" alt="">
                <?php }elseif($author_image){
                                    echo $author_image;
                                     } else{?>
                <span class="color: #00639e; font-size: 20px;">
                    <i class="fas fa-user mr-2"></i>
                </span>
                <?php }?>
                <span class="author-title text-muted my-3 mr-2">
                    <?php the_author_posts_link(); ?>
                </span>
                <span class="text-muted pl-2"><?php echo get_the_date();?></span>
            </div>
        </a>
    </div>
    <?php endwhile;wp_reset_postdata();?>
</aside>