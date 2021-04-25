<?php get_header();?>
<div class="container">
    <div class="row category">
        <div class="col-md-12 text-justify">
            <?php if(have_posts()): while ( have_posts() ) : the_post();?>
            <a href="<?php the_permalink();?>" class="post-list w-100">
                <div class="media media-category mb-3 bg-white p-3">
                    <div class="mr-3"><?php the_post_thumbnail('medium');?></div>
                    <div class="media-body">
                        <h5 class="mt-0"><?php the_title();?></h5>
                        <p class="d-none d-sm-block"><?php echo wp_trim_words(get_the_excerpt(),30,'');?></p>
                        <span class="cat-date"><i class="fas fa-clock mr-2"></i>Published On :
                            <?php the_time('j F, Y' ); ?></span>
                    </div>


                </div>
                <hr class="w-100">
            </a>
            <?php endwhile; appharu_paging(); wp_reset_postdata(); else:?>
            <div class="text-center">
                <h2 style="color:red"> <i class="fas fa-exclamation-triangle mr-3"></i>Posts not found</h2>
            </div>
            <?php endif;?>
        </div>
    </div>
</div>
<style>.modal{background:#fff}</style>
<?php get_footer();?>
<!-- .row -->