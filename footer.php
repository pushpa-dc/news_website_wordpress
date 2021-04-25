<!-- <div class="container-fluid">
    <div class="row footer-top">
        <div class="col-sm-4">One</div>
        <div class="col-sm-4">Two</div>
        <div class="col-sm-4">Three</div>
    </div>
    <div class="row copyright pt-2 pb-2">
        <div class="col-sm-4">&copy;<?php echo date('Y').' '; bloginfo( 'name' );?></div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4"><a href="http://www.appharu.com?ref=etaja">By appharu.com</a></div>
    </div>
</div> -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg search" role="document">
        <div class="modal-content border-0">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body border-0">
                <form class="form-block my-5 my-lg-0" action="/" method="get">
                    <input name="s" value="" class="form-control mr-sm-2" type="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0 s-btn" type="submit"><i
                            class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid footer-nav p-5 f-line" style="background:#333;">
    <div class="container mt-2" style=" padding-right: 15px; padding-left: 15px; color: #000;">
        <div class="mt-0">
            <div class="row">
                <div class="col-md-4">
                    <div class="hamro-advtitle-logo" style="text-align: left;">
                        <div class="text-left">
                            <a href="/">
                                <?php the_custom_logo();?>
                            </a>
                            <div>
                                <li class="text-white my-3">
                                    We bring you the best Premium WordPress <br>Themes that perfect for news,<br>
                                    magazine, personal blog, etc.<br> Check our landing page for details.
                                </li>
                                <div class="text-white">
                                    <li class=""><i class="fa fa-map-marker"></i> Alok Nagar - 31 ,
                                        Minbhawan
                                    </li>
                                    <li class="mb-3"><i class="fa   fa-map-marker"
                                            style="opacity:0"></i>
                                        Kathmandu Nepal
                                    </li>
                                </div>
                                <ul class="footer-icon"
                                    style="display: inline-flex; list-style: none; padding-left: 0px;">
                                    <li><a href="https://www.facebook.com/TajaKhabarOfficial/" target="_blank"><i
                                                class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <h4 class="text-white p-3">Category</h4>
                    <?php $items=wp_get_menu_array('navigation');?>
                    <nav class="navbar pt-3 navbar-expand-lg navbar-light col py-1">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                            aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="d-flex w-100">
                            <div class="collapse navbar-collapse text-center" id="main-menu">
                                <ul class="navbar-nav">
                                    <?php foreach($items as $item):?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link text-light"
                                            href="<?php echo $item['url'];?>"><?php echo $item['title'];?>
                                            <?php if($item['children']):?>
                                            <a data-toggle="dropdown"><svg height="512px" id="Layer_1"
                                                    style="enable-background:new 0 0 512 512;" version="1.1"
                                                    viewBox="0 0 512 512" width="512px" xml:space="preserve"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <polygon style="fill:#fff" ;=""
                                                        points="396.6,160 416,180.7 256,352 96,180.7 115.3,160 256,310.5 ">
                                                    </polygon>
                                                </svg></a>
                                            <div class="dropdown-menu">
                                                <?php foreach($item['children'] as $sitem):?>
                                                <a class="dropdown-item"
                                                    href="<?php echo $sitem['url'];?>"><?php echo $sitem['title'];?></a>
                                                <?php endforeach;?>
                                            </div>
                                            <?php endif;?>
                                        </a>
                                    </li>
                                    <?php endforeach;?>

                                </ul>

                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-md-4 text-white">
                    <div class="">
                        <ul class="hamro-footer-contact-info"
                            style="list-style: none;line-height: 30px; padding-left: 0px;">
                            <img style="display:inline" height="20" width="20"
                                src="<?php echo get_stylesheet_directory_uri();?>/img/user.png" alt="Logo"> Chairman:
                            </li>
                            <br>
                            <img style="display:inline" height="20" width="20"
                                src="<?php echo get_stylesheet_directory_uri();?>/img/user.png" alt="Logo"> Editor:
                         <br>
                            <img style="display:inline" height="20" width="20"
                                src="<?php echo get_stylesheet_directory_uri();?>/img/user.png"
                                alt="Logo"> Administrative chief : </li>
                            <br>
                            <img style="display:inline" height="20" width="20"
                                src="<?php echo get_stylesheet_directory_uri();?>/img/user.png" alt="Logo"> Reporter:
                            </li>
                            <li class=""><i class="fa fa-phone"></i>&nbsp; 9853045093485
                            </li>
                            <li class=""><i class="fa fa-envelope-o"></i> someone@gmail.com</li>
                            <li class=""><i class="fa fa-envelope-o"></i> exampe@example.com</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hamro-footer-copyright">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="hamro-power text-white">Powered by <a class="text-white"
                        href="https://appharu.com/?ref=tatto" target="_blank">
                        Appharu</a></div>
            </div>
        </div>
    </div>
    <?php wp_footer();?>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ed850f786b2e139"></script>

    </body>

    </html>