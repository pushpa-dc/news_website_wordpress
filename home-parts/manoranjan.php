<div class="cat-title">
    <a class="text-dark" href="/?cat=4" class="more">
        <div class="inner-cat">मनोरञ्जन</div>
    </a>
</div>
<div class="row no-gutters">
    <div class="col-md-7">
        <?php $i=0; $args = array('showposts' => 5, 'cat' => '-4'); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); if($i++<1){?>
        <div class="main-list bg-grey mr-5">
            <a href="<?php the_permalink();?>">
                <figure>
                    <?php the_post_thumbnail('full');?>
                    <div class="p-3">
                        <a href="<?php the_permalink();?>">
                            <h3><?php the_title();?></h3>
                        </a>
                    </div>
                    <div class="p-3">
                        <p style="font-size:20px"><?php echo wp_trim_words(get_the_excerpt(),35);?></p>
                    </div>
                </figure>
            </a>
           
        </div>
    </div>
    <!-- .col-md-4 -->
    <div class="row col-md-5 gallery-block">
        <?php }  elseif($i<=5){?>
        <div class="">
            <a href="<?php the_permalink();?>">
                <?php the_post_thumbnail('full');?>
                <div class="card-body p-0 mt-3">
                    <h5 class=""><?php the_title();?></h5>
                </div>
            </a>
        </div>

        <?php }  else{ if($i==4){echo('</div><div class="col-md-4"> <div class="bg-grey d-flex h-100 pt-3 "> ');}?>
        <ul class="list-unstyled w-50 d-flex custom-list popular sidebar-list">
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
</div>