<ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link bg-dark text-white" id="home-tab" data-toggle="tab" href="#home" role="tab"
            aria-controls="home" aria-selected="true">
            <div class="inner-cat d-block bg-dark w-100">लोकप्रिय</div>
        </a>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="">
            <?php //if ( function_exists('stats_get_csv') && $top_posts = stats_get_csv('postviews', 'days=7&limit=5') ) : foreach($top_posts as $p){if($p['post_id']!=0){$post_ids[]=$p['post_id'];}} endif;?>
            <!-- 'post__in'=>$post_ids -->
            <?php $i=0; $args = array('showposts' => 5); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post();?>
            <a href="<?php the_permalink();?>">
                <li class="custom-list-item  border p-2  my-3">
                    <div class="pl-2">
                        <h5 style="font-size:18px"><?php the_title();?></h5>
                        <div class="d-flex">
                            <small class="watch">
                                <span style="text-transform:capitalize" class="text-primary">
                                    <img style="display:inline" height="20" width="20"
                                        src="<?php echo get_stylesheet_directory_uri();?>/img/user.png" alt="Logo">
                                    <?php the_author(); ?></span>
                            </small>
                        </div>
                    </div>

                </li>
            </a>
            <?php endwhile; wp_reset_postdata();?>
        </div>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="wrapper">
            <div class="update-taja">
                <?php $args = array('showposts' => 4, 'cat' => ''); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); ?>
                <div class="post-list sidebar-list clearfix">
                    <a href="<?php the_permalink();?>">
                        <h5><?php the_title();?></h5>
                        <?php the_post_thumbnail('thumbnail');?>
                        <p><?php echo wp_trim_words(get_the_excerpt(),15,'');?></p>
                    </a>
                </div>
                <?php endwhile;wp_reset_postdata();?>
            </div>
        </div>
    </div>
</div>

<style>
    .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
        color: #495057;
        background-color: #2568ba !important;
        border-color: #dee2e6 #dee2e6 #fff;
    }

    .nav-tabs .nav-link.active .inner-cat {
        color: #fff !important
    }
</style>



<!-- <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active text-white" id="home-tab" data-toggle="tab" href="#home" role="tab"
            aria-controls="home" aria-selected="true">
            <div class="inner-cat">लोकप्रिय</div>
        </a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
            aria-selected="false">
            <div class="inner-cat">भर्खरै</div>
        </a>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="wrapper">
            <?php //if ( function_exists('stats_get_csv') && $top_posts = stats_get_csv('postviews', 'days=7&limit=7') ) : foreach($top_posts as $p){if($p['post_id']!=0){$post_ids[]=$p['post_id'];}} endif;?>
            <?php //$i=0; $args = array('showposts' => 7,  'post__in'=>$post_ids); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post();?>
            <a href="<?php //the_permalink();?>">
                <li class="custom-list-item  border-0  my-3">
                    <div class="pl-2">
                        <h5 style="font-size:18px"><?php //the_title();?></h5>
                        <div class="d-flex">
                            <small class="watch">
                                <span class="">
                                    <?php //echo get_nepali_ago(get_the_date('U'))." अगाडि"; ?>
                                    <?php //echo get_the_date();?>

                                </span>

                                <span class="mx-2"> | </span> <span
                                    style="text-transform:capitalize"><?php// the_author(); ?></span>
                            </small>
                        </div>
                    </div>

                </li>
            </a>
            <?php //endwhile; wp_reset_postdata();?>
        </div>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="wrapper">
            <div class="update-taja">
                <?php //$args = array('showposts' => 4, 'cat' => ''); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); ?>
                <div class="post-list sidebar-list clearfix">
                    <a href="<?php //the_permalink();?>">
                        <h5><?php //the_title();?></h5>
                        <?php //the_post_thumbnail('thumbnail');?>
                        <p><?php //echo wp_trim_words(get_the_excerpt(),15,'');?></p>
                    </a>
                </div>
                <?php //endwhile;wp_reset_postdata();?>
            </div>
        </div>
    </div>
</div>

<style>
.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #495057;
    background-color: #2568ba!important;
    border-color: #dee2e6 #dee2e6 #fff;
}
.nav-tabs .nav-link.active .inner-cat{
    color:#fff !important
}
</style> -->