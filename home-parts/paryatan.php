<style>
		.paryatan img{
		
			min-height: 190px;
    object-fit: cover;
		}
	</style>
<?php $args = array('showposts' => 4, 'cat' => '-25'); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); ?>
<div class="col-md-3 main-list clearfix">
	
    <div class="paryatan" style="position:relative">
        <a href="<?php the_permalink();?>">
            <?php the_post_thumbnail('medium');?>
        </a>
        <h5 class="pt-2"> <a class="" href="<?php the_permalink();?>">
<?php echo wp_trim_words(get_the_title(),8,'');?>
</h5>
            <span class="tex-muted mb-3">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <span class=""><?php //echo get_nepali_post_date(get_the_date());?>
                <?php echo get_the_date();?>
                
                </span>
                
            </span>
    </div>
</div>
<?php endwhile; wp_reset_postdata();?>