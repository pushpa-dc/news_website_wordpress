<?php get_header();?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex align-items-center" style="padding: 40px 0px 80px;">
                <div class="author-img">
                    <?php $author_id = get_the_author_meta('ID');  $author_image = get_avatar( get_the_author_meta( 'ID' ), 70 );  $custom_image = get_field('image_author', 'user_'. $author_id );?>
                    <?php if($custom_image){?>

                    <img
                        class="author-img"
                        src="<?php echo $custom_image['sizes']['thumbnail'];?>"
                        width="70"
                        height="70"
                        alt="">
                <?php }elseif($author_image){
                                    echo $author_image;
                                     } else{?>
                    <span class="    color: #00639e; font-size: 20px;">
                        <i class="fas fa-user mr-2"></i>
                    </span>
                    <?php }?>
                </div>
                <div class="uk-card-body ml-3">
                    <h3 class="uk-card-title">
                        <a class="uk-link-reset"><?php the_author();?></a>
                    </h3>
                    <p><?php the_author_description();?></p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="cat-title">
                <a href="/?cat=10" class="more">
                    <div class="inner-cat"><?php the_author();?></div>
                </a>
            </div>
            <?php while ( have_posts() ) : the_post();?>
            <a href="<?php the_permalink();?>" class="post-list d-flex">
                <div class="media">
                    <div class="mr-3"><?php the_post_thumbnail('thumbnail');?></div>

                    <div class="media-body">
                        <h5 class="mt-0"><?php the_title();?></h5>
                      
                        <p class="d-none d-sm-block"><?php echo wp_trim_words(get_the_excerpt(),30,'');?></p>
                    </div>
                </div>
            </a>
            <?php endwhile; appharu_paging();?>
        </div>

        <div class="col-md-4">
            <?php get_sidebar();?>
        </div>

    </div>
</div>

<?php get_footer();?>