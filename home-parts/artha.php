<div class="cat-title">
    <a class="text-dark" href="/?cat=4" class="more">
        <div class="inner-cat">अर्थ व्यापार</div>
    </a>
</div>
<div class="row">
    <div class="col-md-5">
        <?php $i=0; $args = array('showposts' => 7, 'cat' => '-4'); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); if($i++<1){?>
        <div class="main-list bg-grey">
            <a href="<?php the_permalink();?>">
                <?php the_post_thumbnail('medium');?>
            </a>
            <div class="p-3">
                <a href="<?php the_permalink();?>">
                    <h3><?php the_title();?></h3>
                </a>
            </div>
            <div class="p-3">
                <p style="font-size:20px"><?php echo wp_trim_words(get_the_excerpt(),35);?></p>
            </div>
        </div>
    </div>
    <!-- .col-md-4 -->
    <div class="col-md-3">
        <?php }  elseif($i<=3){?>
        <div class="card border-0 custom-list-item custom-list-item">
            <a href="<?php the_permalink();?>">
                <?php the_post_thumbnail('full');?>
                <div class="card-body p-0 mt-3">
                    <h5 class=""><?php the_title();?></h5>
                </div>
            </a>
        </div>

        <?php }  else{ if($i==4){echo('  </div><div class="col-md-4"> <div class="bg-grey h-100 pt-3 "> ');}?>
        <ul class="list-unstyled custom-list popular sidebar-list">
            <li class="d-flex custom-list-item small-list pl-3">
                <a href="<?php the_permalink();?>">
                    <?php the_post_thumbnail('thumbnail');?>
                </a>
                <div class="media-body">
                    <a href="<?php the_permalink();?>">
                        <h6 class="p-2" style="font-size:18px"><?php echo wp_trim_words(get_the_title(),7);?>
                        </h6>
                        <small class=" p-2 text-dark">
                            <?php echo get_nepali_post_date(get_the_date());?>

                        </small>
                    </a>
                </div>
            </li>
        </ul>
        <?php  }  endwhile; wp_reset_postdata();?>
    </div>
</div>
<!-- .row -->