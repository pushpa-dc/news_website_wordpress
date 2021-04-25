<?php get_header();?>
<div class="container">
  <?php while ( have_posts() ) : the_post();?>
  <div class="row page">
    <div class="col-md-3">
    <div class="card">
      <img src="https://via.placeholder.com/150
">
      Gopal saud
      Editor
      Facebook : https://www.facebook.com/gopalsaud1
      Twitter : https://twitter.com/gopals_
    </div>
    </div>
    <div class="col-md-3">
      1
    </div>
    <div class="col-md-3">
      1
    </div>
    <div class="col-md-3">
      1
    </div>
  </div>
  <!-- .row -->
</div>
<?php endwhile;wp_reset_postdata();?>
<?php get_footer( );?>