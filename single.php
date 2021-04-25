<?php get_header();?>
<div class="container-fluid">
    <?php while ( have_posts() ) : the_post();?>
    <?php get_template_part('template-parts/content');?>
 
    <!-- .row -->
    <?php endwhile; wp_reset_postdata();?>
</div>
<?php get_footer();?>