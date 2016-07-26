<?php

  $navigation = [
    'Home' => '/',
    'Areas' => 'areas',
    'Services' => 'servcies',
    'About' => 'about',
    'Project' => 'projects',
    'Contact' => 'contact',
    'Free Quote' => 'quote',
  ];

  $services = [
    'Basements' => [
      'image' => '',
      'title' => 'Basements',
      'desc' => 'Outdoor advertising is low budget and effective product.',
      'link' => '/',
    ],
    'Pullouts' => [
      'image' => '',
      'title' => 'Basements',
      'desc' => 'Outdoor advertising is low budget and effective product.',
      'link' => '/',
    ],
    'Bathroom/kitchen remodeling' => [
      'image' => '',
      'title' => 'Room Remodeling',
      'desc' => 'Outdoor advertising is low budget and effective product.',
      'link' => '/',
    ],
  ];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- META
        ================================================== -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- TITLE
        ================================================== -->
  <title>CongdonRemodeling.com</title>
  <!-- FAVICON
        ================================================== -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
  <!-- GOOGLE FONTS
        ================================================== -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <!-- Montserrat -->
  <!-- STYLES
        ================================================== -->
  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
  <!-- ET line Icon -->
  <link rel="stylesheet" href="lib/et-line-font/et-line.css">
  <!-- Flat Icon -->
  <link rel="stylesheet" href="lib/flaticon/css/flaticon.css">
  <!-- Animate -->
  <link rel="stylesheet" href="css/animate.min.css">
  <!-- Venobox -->
  <link rel="stylesheet" href="lib/venobox/venobox.css">
  <!-- Owl Carousel 2 -->
  <link rel="stylesheet" href="lib/owl.carousel/assets/owl.carousel.css">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
  <!-- Style -->
  <link rel="stylesheet" href="style.css">
  <!-- HEADER SCRIPTS
        ================================================== -->
  <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
</head>

<body id="page-index">
  <!-- START PRELOADER
        ================================================== -->
  <div class="preloader">
    <div class="preloader-inner">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- END PRELOADER -->
  <!-- START HOME
        ================================================== -->
  <section id="home" class="fixed-background">
    <!-- START HEADER TOP -->
    <div class="header-top">
      <div class="container">
        <div class="header-top-inner">
          <div class="row">
            <div class="col-md-9 col-sm-8">
              <div class="header-top-left">
                <ul>
                  <li>
                    <span class="icon-phone"></span>
                    <a href="tel:540-379-4597">540 379-4597</a>
                  </li>
                  <li>
                    <span class="icon-envelope"></span>
                    <a href="mailto:info@congdonremodeling.com">info@congdonremodeling.com</a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.col-md-9 col-sm-8 -->
            <div class="col-md-3 col-sm-4">
              <div class="header-top-right pull-right">
                <!--ul class="header-top-social social-icon">
                  <li>
                    <a href="https://www.facebook.com" target="_blank">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.twitter.com" target="_blank">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://plus.google.com" target="_blank">
                      <i class="fa fa-google-plus"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.linkedin.com" target="_blank">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.pinterest.com" target="_blank">
                      <i class="fa fa-pinterest"></i>
                    </a>
                  </li>
                </ul-->
              </div>
            </div>
            <!-- /.col-md-3 col-sm-4 -->
          </div>
          <!-- /.row -->
        </div>
      </div>
      <!-- /.container -->
    </div>
    <!-- END HEADER TOP -->
    <!-- START NAVBAR -->
    <nav class="navbar navbar-default hidden-xs">
      <div class="container">
        <!-- NAVBAR HEADER -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#builder-navbar" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->
          <a class="navbar-brand" href="index.html">
            <!--img src="img/logo.png" alt="Logo"-->
            Congdon Remodeling
          </a>
        </div>
        <!-- /.navbar-header -->
        <!-- NAVBAR COLLAPSE -->
        <div class="collapse navbar-collapse" id="builder-navbar">
          <ul class="nav navbar-nav navbar-right">
          <? foreach ($navigation as $key => $value) : ?>
            <li class=""><a href="<?= $value ?>"><?= $key ?></a></li>
          <?php endforeach ?>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container- -->
    </nav>
    <!-- /.navbar -->
    <!-- END NAVBAR -->
    <!-- START MOBILE MENU -->
    <nav class="navbar-custom visible-xs">
      <div class="container">
        <!-- NAVBAR HEADER -->
        <div class="navbar-trigger">
          <button type="button" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <img src="img/logo.png" alt="Logo">
          </a>
        </div>
        <!-- /.navbar-header -->
        <div class="navbar-expand">
          <ul class="nav navbar-nav">
            <? foreach ($navigation as $key => $value) : ?>
              <li class=""><a href="<?= $value ?>"><?= $key ?></a></li>
            <?php endforeach ?>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END MOBILE NAV -->
    <!-- START SLIDER -->
    <div class="slider">
      <div class="container">
        <div class="slider-carousel">
          <div class="single-slide">
            <div class="single-slide-text">
              <h3 class="animated fadeInDownY" style="animation-delay: 0s">Build your dream with</h3>
              <h1 class="animated slideInLeftX" style="animation-delay: .3s"><span>Builder</span> Construction</h1>
              <p class="animated fadeInUpY" style="animation-delay: .6s">If you’ve followed along and done the steps above, you’ve created a good starting place. You’re going to properly.</p>
              <div class="btn-group animated fadeInUpY" style="animation-delay: .6s">
                <a href="#">Learn More<span>Learn More</span></a>
                <a href="https://vimeo.com/97151630" class="btn-icon" data-type="vimeo" data-autoplay="true"><i class="icon-video"></i><span><i class="icon-video"></i></span></a>
              </div>
            </div>
            <div class="single-slide-image">
              <img src="img/slider/slide-1.png" alt="slide-1" class="img-responsive animated slideInRightX" style="animation-delay: .6s">
            </div>
          </div>
          <!-- /.single-slide -->
          <div class="single-slide">
            <div class="single-slide-text">
              <h3 class="animated fadeInDownY" style="animation-delay: 0s">We Build</h3>
              <h1 class="animated slideInLeftX" style="animation-delay: .3s"><span>EVERYTHING</span> YOU NEED</h1>
              <p class="animated fadeInUpY" style="animation-delay: .6s">If you’ve followed along and done the steps above, you’ve created a good starting place. You’re going to properly.</p>
              <div class="btn-group animated fadeInUpY" style="animation-delay: .6s">
                <a href="#">Learn More<span>Learn More</span></a>
                <a href="https://vimeo.com/97151630" class="btn-icon" data-type="vimeo" data-autoplay="true"><i class="icon-video"></i><span><i class="icon-video"></i></span></a>
              </div>
            </div>
            <div class="single-slide-image">
              <img src="img/slider/slide-1.png" alt="slide-1" class="img-responsive animated slideInRightX" style="animation-delay: .6s">
            </div>
          </div>
          <!-- /.single-slide -->
          <div class="single-slide">
            <div class="single-slide-text">
              <h3 class="animated fadeInDownY" style="animation-delay: 0s">Build your dream with</h3>
              <h1 class="animated slideInLeftX" style="animation-delay: .3s"><span>Builder</span> Construction</h1>
              <p class="animated fadeInUpY" style="animation-delay: .6s">If you’ve followed along and done the steps above, you’ve created a good starting place. You’re going to properly.</p>
              <div class="btn-group animated fadeInUpY" style="animation-delay: .6s">
                <a href="#">Learn More<span>Learn More</span></a>
                <a href="https://vimeo.com/97151630" class="btn-icon" data-type="vimeo" data-autoplay="true"><i class="icon-video"></i><span><i class="icon-video"></i></span></a>
              </div>
            </div>
            <div class="single-slide-image">
              <img src="img/slider/slide-1.png" alt="slide-1" class="img-responsive animated slideInRightX" style="animation-delay: .6s">
            </div>
          </div>
          <!-- /.single-slide -->
        </div>
      </div>
      <!-- /.container -->
    </div>
    <!-- END SLIDER -->
  </section>
  <!-- END HOME -->
  <!-- START SERVICE
        ================================================== -->
  <section id="service" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
          <!-- SECTION TITLE -->
          <div class="section-title text-center">
            <h2><span>Our</span> Services</h2>
            <p>All the rumors have finally died down and many iPod does support video its fifth generation.</p>
          </div>
        </div>
        <!-- /.col-md-6 col-md-offset-3 -->
      </div>
      <!-- /.row -->
      <div class="row">
      <?php foreach ($services as $service) : ?>
          <div class="col-md-4 col-sm-4">
            <div class="single-service">
              <img src="img/service/service-image-1.jpg" alt="service-image-1" class="img-responsive">
              <div class="service-details">
                <h4><?= $service['title'] ?></h4>
                <p><?= $service['desc'] ?></p>
                <a href="<?= $service['link'] ?>">Read More<i class="fa fa-long-arrow-right"></i></a>
              </div>
            </div>
          </div>
      <?php endforeach ?>
        <!-- /.col-md-4 col-sm-4 -->
      </div>
      <!-- /.row- -->
    </div>
    <!-- /.container- -->
  </section>
  <!-- END SERVICE -->
  <!-- START PROMO 1
        ================================================== -->
  <section id="promo" class="fixed-background">
    <div class="promo-inner">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="promo-content-left">
              <h4>We provide the best consulting services</h4>
              <p>If you’ve followed along and done the steps above, you’ve created a good starting place. You’re going to need to make sure your pages properly.</p>
            </div>
            <div class="promo-content-right">
              <a href="#" class="btn primary-btn">
                                    Contact Us <i class="fa fa-long-arrow-right"></i>
                                    <span>Contact Us <i class="fa fa-long-arrow-right"></i></span>
                                </a>
            </div>
          </div>
          <!-- /.col-md-10 col-md-offset-1 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
  </section>
  <!-- END PROMO 1 -->
  <!-- START PROJECT
        ================================================== -->
  <section id="project" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
          <!-- SECTION TITLE -->
          <div class="section-title text-center">
            <h2><span>Our</span> Projects</h2>
            <p>All the rumors have finally died down and many iPod does support video its fifth generation.</p>
          </div>
        </div>
        <!-- /.col-md-6 col-md-offset-3 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="container-fluid">
      <div class="row">
        <div class="project-trigger">
          <div class="button-group filters-button-group">
            <button class="button is-checked" data-filter="*">All</button>
            <button class="button" data-filter=".building">Building</button>
            <button class="button" data-filter=".electric">Electric</button>
            <button class="button" data-filter=".painting">Painting</button>
            <button class="button" data-filter=".others">Others</button>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="grid">
            <div class="element-item building">
              <a class="venobox" data-gall="project-gallery" href="img/project/preview/preview-1.jpg">
                <img src="img/project/thumb/thumb-1.jpg" alt="thumb-1">
                <div class="item-details">
                  <div class="centrize">
                    <div class="v-center">
                      <i class="plus-icon"></i>
                      <h5 class="hidden-xs">Building</h5>
                      <h4 class="hidden-xs">Construction</h4>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- /.element-item -->
            <div class="element-item electric">
              <a class="venobox" data-gall="project-gallery" href="img/project/preview/preview-2.jpg">
                <img src="img/project/thumb/thumb-2.jpg" alt="thumb-2">
                <div class="item-details">
                  <div class="centrize">
                    <div class="v-center">
                      <i class="plus-icon"></i>
                      <h5 class="hidden-xs">Others</h5>
                      <h4 class="hidden-xs">Construction</h4>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- /.element-item -->
            <div class="element-item painting building">
              <a class="venobox" data-gall="project-gallery" href="img/project/preview/preview-3.jpg">
                <img src="img/project/thumb/thumb-3.jpg" alt="thumb-3">
                <div class="item-details">
                  <div class="centrize">
                    <div class="v-center">
                      <i class="plus-icon"></i>
                      <h5 class="hidden-xs">Painting</h5>
                      <h4 class="hidden-xs">Construction</h4>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- /.element-item -->
            <div class="element-item others electric">
              <a class="venobox" data-gall="project-gallery" href="img/project/preview/preview-4.jpg">
                <img src="img/project/thumb/thumb-4.jpg" alt="thumb-4">
                <div class="item-details">
                  <div class="centrize">
                    <div class="v-center">
                      <i class="plus-icon"></i>
                      <h5 class="hidden-xs">Others</h5>
                      <h4 class="hidden-xs">Construction</h4>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- /.element-item -->
            <div class="element-item painting others electric">
              <a class="venobox" data-gall="project-gallery" href="img/project/preview/preview-5.jpg">
                <img src="img/project/thumb/thumb-5.jpg" alt="thumb-5">
                <div class="item-details">
                  <div class="centrize">
                    <div class="v-center">
                      <i class="plus-icon"></i>
                      <h5 class="hidden-xs">Electric</h5>
                      <h4 class="hidden-xs">Construction</h4>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- /.element-item -->
          </div>
        </div>
        <!-- /.col-md-12 -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-12">
          <div class="link-only text-center">
            <a href="page-project.html">See More Works <i class="fa fa-long-arrow-right"></i></a>
          </div>
        </div>
        <!-- /.col-md-12 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- END PROJECT -->

  <!-- START FOOTER BOTTOM
        ================================================== -->
  <div class="footer-bottom">
    <div class="container">
      <div class="copyright-text text-center">
        <p>Copyright © 2016 Builder.</p>
        <p>Design by <a href="https://www.behance.net/googoling">Faridul Haque</a> and Develop by <a href="http://themeebit.com">ThemeeBiT</a></p>
      </div>
    </div>
    <!-- /.container -->
  </div>
  <!-- END FOOTER BOTTOM -->
  <!-- SCRIPTS
        ================================================== -->
  <!-- jQuery -->
  <script src="js/jquery-1.12.1.min.js"></script>
  <!-- Bootstrap -->
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!-- Owl Carousel 2 -->
  <script src="lib/owl.carousel/owl.carousel.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Counterup -->
  <script src="js/jquery.counterup.min.js"></script>
  <!-- Venobox -->
  <script src="lib/venobox/venobox.min.js"></script>
  <!-- Easing -->
  <script src="js/jquery.easing.min.js"></script>
  <!-- Isotope -->
  <script src="js/isotope.pkgd.min.js"></script>
  <!-- Packery -->
  <script src="js/packery-mode.pkgd.min.js"></script>
  <!-- Knob -->
  <script src="js/jquery.knob.min.js"></script>
  <!-- SmoothScroll For Chrome -->
  <script src="js/SmoothScroll.chrome.js"></script>
  <!-- Script -->
  <script src="js/script.js"></script>
</body>

</html>
