<?php $i=0;while ( have_posts() ) : the_post();if($i++<1){?>
<div class="mb-4">
    <a href="<?php the_permalink();?>">
        <div class="popular-news-item">
            <?php the_post_thumbnail('full','style=min-height:450px !important;object-fit:cover');?>
            <div class="popular-title">,
                <h3 class="text-light"><?php the_title();?></h3>
                <div class="popular-date-time">
                    <div class="post-name">
                        <i class="fas fa-user mr-2"></i><?php the_author(); ?>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
<?php } else{?>
<a href="<?php the_permalink();?>" class="post-list d-flex">
    <div class="media">
        <div class="mr-3"><?php the_post_thumbnail('medium');?></div>
        <div class="media-body">
            <h5 class="mt-0"><?php the_title();?></h5>
            <p class="d-none d-sm-block"><?php echo wp_trim_words(get_the_excerpt(),30,'');?></p>
        </div>
    </div>
</a>
<?php }endwhile;appharu_paging();?>