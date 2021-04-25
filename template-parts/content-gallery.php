<div class="col-md-8 text-justify">
    <article class="post-entry">
        <?php get_template_part('template-parts/single-heading');?>
        <?php the_content();?>
    </article>
    <?php comments_template(); get_template_part('related');?>
</div>
<!-- .col-md-8 -->
<div class="col-md-4">
    <?php get_sidebar();?>
</div>