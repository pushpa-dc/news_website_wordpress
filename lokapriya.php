<aside class="related mt-4">
    <div class="cat-title">
        <div class="inner-cat">लोकप्रिय समाचार</div>
    </div>
    <div class="row">
        <?php if ( function_exists('stats_get_csv') && $top_posts = stats_get_csv('postviews', 'days=7&limit=5') ) : foreach($top_posts as $p){if($p['post_id']!=0){$post_ids[]=$p['post_id'];}} endif;?>
        <?php $i=0; $args = array('showposts' => 6,  'post__in'=>$post_ids); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post();?>
        <div class="col-md-4 mb-4">
            <a href="<?php the_permalink();?>">
                <div class="popular-news-item">
                    <?php the_post_thumbnail('medium');?>
                    <div class="popular-title">
                        <h5><?php the_title();?></h5>
                        <div class="popular-date-time">
                            <div class="post-date">
                                <i class="far fa-clock mr-2"></i>
                                <?php echo get_nepali_ago(get_the_date('U'))." अगाडि"; ?>
                            </div>
                            <div class="post-name">
                                <i class="fas fa-user mr-2"></i><?php the_author(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <?php endwhile; wp_reset_postdata();?>
</aside>