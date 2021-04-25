<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    <?=wp_title('&laquo;',true,'right')?>
    <?= bloginfo('name')?>
  </title>
  <?php wp_head();?>
</head>

<body>
  <div id="fb-root"></div>
  <script>
    (function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=401514826619301";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
  
  <div class="dot"></div>
  <div class="container-fluid">

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <ul class="nav">
            <li class="nav-item mt-5 mb-3">
              <a href="nav-link" style="margin: 15px 0px;">
                <?php the_custom_logo();?>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-6">
          <ul class="nav justify-content-end col top-nav align-items-center h-100 hamro-footer-social-icons">
            <li><a href="https://www.facebook.com/TajaKhabarOfficial/" target="_blank"><i class="fa fa-facebook"
                  aria-hidden="true"></i></a></li>
            <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          </ul>
          <?php //dynamic_sidebar( 'logo-right' );?>
        </div>

      </div>
    </div>
  </div>
  <div class="container-fluid my-nav navbar-dark">
    <div class="container">
      <div class="row">
        <?php get_template_part('nav');?>
      </div>
    </div>
  </div>
  
  <?php //the_field('show_banner', 'option'); ?>
  <!-- 
  <div class="col-md-12 my-2">
    <?php //dynamic_sidebar( 'bottom-nav' );?>
  </div> -->