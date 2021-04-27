<?php get_header();?>
<div class="container-fluid">
    <div class="container">
        <div class="row mb-3">
            <div class="col-md-12">
                <?php get_template_part('home-parts/banner');?>
            </div>
        </div>
    </div>
</div>
<!-- <svg style="margin-top:-20px" class="w-100" xmlns="http://www.w3.org/2000/svg" fill="#f3f2f2" viewBox="0 0 1000 100"
    preserveAspectRatio="none">
    <path class="elementor-shape-fill" d="M761.9,44.1L643.1,27.2L333.8,98L0,3.8V0l1000,0v3.9"></path>
</svg>
<div class="elementor-shape elementor-shape-bottom" data-negative="false">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
        <path class="elementor-shape-fill" d="M761.9,44.1L643.1,27.2L333.8,98L0,3.8V0l1000,0v3.9"></path>
    </svg> </div> -->
<!-- <div class="container">
    <div class="row category-news-tauko text-center ">
        <div class="col-md-3 text-center">
            <div class="news-tauko">
                <i class="fa fa-stack-exchange" aria-hidden="true"></i>
                <h1>जीवनसैली </h1>
            </div>

        </div>
        <div class="col-md-3">
            <div class="news-tauko">
                <i class="fa fa-music" aria-hidden="true"></i>
                <h1>मानोरंजन</h1>
            </div>
        </div>
        <div class="col-md-3">
            <div class="news-tauko">
                <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                <h1>प‌र्यटन</h1>
            </div>
        </div>
        <div class="col-md-3">
            <div class="news-tauko">
                <i class="fa fa-mobile" aria-hidden="true"></i>
                <h1>
                    प्रबिधि
                </h1>
            </div>
        </div>
    </div>
</div> -->
<div class="container my-5">
    <div class="row">
        <div class="col-md-4">
            <?php get_template_part('home-parts/taja');?>
        </div>
        <div class="col-md-5">
            <?php get_template_part('home-parts/main');?>
        </div>
        <div class="col-md-3">
            <?php get_template_part('home-parts/popular');?>
        </div>

        <!-- <div class="col my-2">
            <div   class="line"></div>
        </div> -->
    </div>
    <!-- <div class="row">
        <?php //get_template_part('home-parts/banner-news');?>
        <div class="col-12 mt-5">
            <div class="line"></div>
        </div>
    </div> -->
    <div class="row my-3">
        <div class="col-md-8">
            <?php get_template_part('home-parts/grid');?>
        </div>
        <div class="col-md-4">
            <?php get_template_part('home-parts/bicha');?>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-md-8">
            <?php get_template_part('home-parts/bichar');?>
        </div>
        <div class="col-md-4">
            <?php get_template_part('home-parts/twitter');?>
        </div>
    </div>
</div>
<!-- <div class="container-fluid" style="background:#00669b">
    <div class="container">
        <div class="inter mt-5">
            <div class="row py-3">
                <div class="col-md-12">
                    <a href="/?cat=21">
                        <div class="inner-cat text-white">विचार</div>
                    </a>
                </div>
                <?php //get_template_part('home-parts/inter');?>
            </div>
        </div>
    </div>
</div> -->
<div class="container-fluid" style="background:#f6f6f6">
    <div class="container">
        <div class="row my-5">
            <?php get_template_part('home-parts/manoranjan');?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row my-3">
        <div class="col-md-12">
            <?php get_template_part('home-parts/artha');?>
        </div>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-8">
        <?php get_template_part('home-parts/international');?>
    </div>
    <div class="col-md-4">
        <?php get_template_part('home-parts/technology');?>
    </div>
</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="cat-title">
                <a href="/?cat=25">
                    <div class="inner-cat">प‌र्यटन</div>
                </a>
            </div>
        </div>
    </div>
    <div class="row text-center mb-5 my-3">
        <?php get_template_part('home-parts/paryatan');?>
        <div class="col my-3">
            <div class="line"></div>
        </div>
    </div>
</div>
</div>
<!-- <div class="container-fluid" style="background:#000">
    <div class="container">
        <div class="row">
            <?php //get_template_part('home-parts/slide');?>
        </div>
    </div>
</div> -->
<div class="container-fluid" style="background:#ece7e7">
    <div class="container">
        <div class="row my-5">
            <?php get_template_part('home-parts/video');?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row my-4 kala">
        <?php get_template_part('home-parts/kala');?>
    </div>
</div>



<!-- .home -->
<?php get_footer();?>