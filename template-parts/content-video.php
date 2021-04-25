<div class="col-md-9 text-justify">
    <article class="post-entry">
        <?php get_template_part('template-parts/single-heading');?>
        <?php the_content();?>
    </article>
    <?php comments_template();?>
</div>
<!-- .col-md-8 -->
<div class="col-md-3">
    <?php get_template_part('template-parts/sidebar-video');?>
</div>