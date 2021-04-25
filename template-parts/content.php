</div>
<div class="py-5 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="post-title-wraper w-100">
                    <header class="single-header-title text-left">
                        <h1 class="my-3 display-4 font-weight-bold single-mob-title"><?php the_title();?></h1>
                    </header>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 border-right">
            <div class="row">
                <div class="col-md-3 author-img my-3">
                    <?php $author_id = get_the_author_meta('ID');  $author_image = get_avatar( get_the_author_meta( 'ID' ), 40 );  $custom_image = get_field('image_author', 'user_'. $author_id );?>
                    <?php if($custom_image){?>
                    <img class="author-img mr-2" src="<?php echo $custom_image['sizes']['thumbnail'];?>" width="40"
                        height="40" alt="">
                    <?php }elseif($author_image){
                                    echo $author_image;
                                     } else{?>
                    <span class="color: #00639e; font-size: 20px;">
                        <i class="fas fa-user mr-2"></i>
                    </span>
                    <?php }?>
                    <span class="author-title my-3 mr-2">
                        <?php the_author_posts_link(); ?>
                    </span>
                </div>
                <div class="col-md-6 my-3">
                    <div class="author-title">
                        <i class="far fa-clock mr-2"></i>
                        प्रकाशित मिति :
                        <?php echo get_the_date();?>

                    </div>
                </div>
                <div class="col-md-3 my-3">
                    <div class="font-change">
                        <ul class="list-unstyled list-inline text-right nav justify-content-end">
                            <li class="16px">
                                <a><span id="smaller">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-out"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                            <path
                                                d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z" />
                                            <path fill-rule="evenodd"
                                                d="M3 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z" />
                                        </svg>
                                    </span></a>
                            </li>
                            <!-- <li class="18px">
                                <a><span id="resize"><img
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAXCAYAAADgKtSgAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAN5JREFUeNpiYBgFwwow4pFzAOJ4IFYA4o1AvACIPwBxARALYFEPkn9AjKUgA/8D8X0gboDi+1BDC6By6Hg/Kb4yQOP3QzEy2A+1GCtgwWP4BSyWfSDFdUxEqHGAuhBELyTFcHwuB4XveqihH6CRdQCLGpJcngClP0CDJhGIFaH0fWi4B0AtNiA1eSbgiaT/UIP3Qw2/jy9CcQFsrnKAGk50asEVoaAgmI8URA5QCx9QK/eCIus8UiZ5j8U3ZKdzUIQaQl0NS/ckpXNmItQ8gOIfOMomASxJdBQMRwAQYAByFjY37W3ONQAAAABJRU5ErkJggg=="
                                            alt="change font"></span></a>
                            </li> -->
                            <li class="20px">
                                <a><span id="bigger">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
  <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
  <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
</svg>
                                </span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="wraper-single-img-1">
                <?php if (has_post_thumbnail() ) {
                    the_post_thumbnail();
                } else { ?>
                <img src="<?php bloginfo('template_directory');?>/img/thumbnail-default.jpg" alt="" />
                <?php  } ?>
            </div>
            <article class="post-entry text-justify">
                <div class="row text-muted post-meta">
                    <div class="col-sm-12">
                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                        <div class="addthis_inline_share_toolbox s-device"></div>
                    </div>
                </div>
                <hr>

                <?php the_content();?>
                <a href="https://shorturl.at/bwBGN?1212" target="_blank"><img
                        src="https://i.ibb.co/1qjpzSk/hellonepal.gif" alt="" class=" pb-3" width="300"
                        height="112" /></a>

                <?php the_tags( '<ul class="nav mt-4 mb-4 tag-list"><li class="nav-item">', '</li><li>', '</li></ul>' ); ?>
            </article>
            <style>

            </style>
            <?php dynamic_sidebar( 'scomment' );?>
            <a href="https://bit.ly/3dEtGN5" target="_blank"><img src="https://i.ibb.co/1qjpzSk/hellonepal.gif" alt=""
                    class=" pb-3" width="300" height="112"></a>
            <div class="footer-share">
                <div class="addthis_inline_share_toolbox"></div>
            </div>
            <?php comments_template();?>
        </div>
        <!-- .col-md-8 -->
        <div class="col-md-4">
            <?php get_sidebar();?>
        </div>

        <div class="col-md-8">
            <?php get_template_part('related');?>
        </div>

    </div>