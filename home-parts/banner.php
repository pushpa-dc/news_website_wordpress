<?php dynamic_sidebar('below-banner');?>
<div class="banner text-center">
    <?php $args = array('showposts' => 3, 'cat' => '-17'); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); ?>
    <div class="inside-banner ">
        <a href="<?php the_permalink();?>">
            <div class="d-block">
                <h1 class="m-2 banner-title"><?php the_title();?></h1>
                <div class="watch text-muted">
                                <span style="text-transform:capitalize" class="text-primary">
                                    <img style="display:inline;height:30px !important;width:30px !important" 
                                        src="<?php echo get_stylesheet_directory_uri();?>/img/user.png" alt="Logo">
                                    <?php the_author(); ?></span>
                            </div>
                <?php //if(get_field('subtitle') ): ?>
                <h2 class="my-3 sub-tile">
                    <?php //the_field('subtitle'); ?>
                </h2>
                <?php //endif; ?>

                <h5 class="text-center mb-4 mt-2" style="color: #8a8787;">
                <!-- <i class="fas fa-edit mr-2"></i> -->
                    <?php //the_author(); ?>
                    <?php //if(get_field('writer') ){ ?>
                    <?php //the_field('writer'); ?>
                    <?php //} else{ ?>
                    <?php //the_author(); ?>
                    <?php //} ?>
                </h5>
            </div>
            <div class="text-center">
                <?php the_post_thumbnail('full');?>
                <div class="my-4">
                    <p style="font-size:25px"><?php echo wp_trim_words(get_the_excerpt(),35,'...');?></p>
                </div>
            </div>
        </a>
        <div class="text-center">
            <hr style="width:80%">
        </div>
    </div>
    <?php endwhile; wp_reset_postdata();?>
</div>