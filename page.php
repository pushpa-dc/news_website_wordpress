<?php get_header();?>
<div class="container">

    <?php while ( have_posts() ) : the_post();?>
    <div class="row page">
        <div class="col-md-8 text-justify">
            <article class="post-entry">
                <header>
                    <h1><?php the_title();?></h1>
                </header>
                <?php the_content();?>
            </article>
            <?php comments_template();?>
        </div>
        <!-- .col-md-8 -->
        <div class="col-md-4">
            <?php get_sidebar();?>
        </div>
    </div>
    <!-- .row -->
</div>
<?php endwhile;wp_reset_postdata();?>
<?php get_footer();?>