<?php get_header();?>
<div class="container mt-4">
    <div class="row category">
        <div class="col-md-8">
            <div class="cat-title">
                <div class="inner-cat"><?php single_cat_title();?></div>
            </div>
            <?php get_template_part('loop');?>
        </div>
        <!-- .col-md-8 -->
        <div class="col-md-4">
            <?php get_sidebar();?>
        </div>
    </div>
</div>
<!-- .row -->
<?php get_footer();?>