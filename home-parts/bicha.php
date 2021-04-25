<div class="cat-title">
  <div class="inner-cat">विचार</div>
</div>
<div class="tab-content border" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="">
            <?php $i=0; $args = array('showposts' => 4,  ''); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post();?>
            <a href="<?php the_permalink();?>">
                <li class="custom-list-item border-0 p-2  my-3">
                  <div class="bichar-img small-list">
                    <?php the_post_thumbnail('thumbnail');?>
                  </div>
                    <div class="pl-2">
                        <h5 style="font-size:18px"><?php the_title();?>
                        <div class="d-flex">
                            <small class="watch mt-3">
                                <span style="text-transform:capitalize" class="text-primary">
                                    <img style="display:inline" height="20" width="20"
                                        src="<?php echo get_stylesheet_directory_uri();?>/img/user.png" alt="Logo">
                                    <?php the_author(); ?></span>
                            </small>
                        </div>
                      </h5>
                    </div>

                </li>
            </a>
            <?php endwhile; wp_reset_postdata();?>
        </div>
    </div>
</div>

