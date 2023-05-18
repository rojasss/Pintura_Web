<!DOCTYPE html>
<html class="wow-animation" lang="en">
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="intense web design multipurpose template">
    <meta name="date" content="Dec 26">
    <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script><link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,700%7CUbuntu:400,700">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"> <a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <!-- Page-->
    <div class="page text-center">
      <div class="page-loader page-loader-variant-1">
        <div><img width='329' height='67' src='images/logo-big.png' alt=''/>
          <div class="offset-top-41 text-center">
            <div class="spinner"></div>
          </div>
        </div>
      </div>
      <!-- Page Head-->

      <?php include "header.php"; ?>
        
      <section data-preset='{"title":"Slider","category":"content, slider","id":"slider"}'>
                  <div class="section parallax-container" data-parallax-img="images/background-01-1920x955.jpg">
                    <div class="parallax-content">
                      <div class="bg-overlay-info">
                        <div class="container container-wide">
                          <!--Swiper-->
                          <div class="swiper-container swiper-slider" data-loop="true" data-dragable="false">
                            <div class="swiper-wrapper text-center">
                            <?php
                                  $res = mysqli_query($conn, "SELECT * FROM `informacion` WHERE `estado` = 1 ;");
                                            if (mysqli_num_rows($res) > 0) {
                                      while ($fs = mysqli_fetch_array($res)) {
                           ?>
                              <div class="swiper-slide" id="page-loader">
                                <div class="swiper-caption swiper-parallax">
                                  <div class="swiper-slide-caption">
                                    <div class="row justify-content-sm-center align-items-sm-center">
                                      <div class="col-xl-7 col-xxl-5 section-xl-top-15"><img class="img-fluid d-none d-xl-inline-block" src="images/<?php echo $fs['imagen']; ?>" width="563" height="616" alt=""></div>
                                      <div class="col-md-10 col-xl-5 col-xxl-4 text-xl-left offset-top-0">
                                        <blockquote class="quote">
                                          <h2><?php echo $fs['titulo']; ?></h2>
                                          <div class="unit unit-lg flex-xl-row unit-spacing-xs offset-top-20">
                                            <div class="unit-left">
                                              <hr class="divider bg-white d-none d-xl-inline-block" style="margin-bottom: 3px;">
                                            </div>
                                            <div class="unit-body">
                                              <div>
                                                <h5><?php echo $fs['resumen']; ?></h5>
                                              </div>
                                              <div class="offset-top-10 d-none d-sm-block">
                                                <p style="color: #e8e8e8;"><?php echo $fs['resumen_m']; ?></p>
                                              </div>
                                            </div>
                                          </div>
                                        </blockquote>
                                        <div class="row justify-content-sm-center justify-content-xl-start offset-top-20 offset-sm-top-50">
                                          <div class="col-sm-10 col-md-6 col-lg-5 col-xl-7"><a class="btn btn-block btn-primary" href="<?php echo $fs['url_01']; ?>">BOOK AN APPOINTMENT</a></div>
                                          <div class="col-sm-10 col-md-5 col-lg-3 col-xl-5 offset-top-10 offset-md-top-0"><a class="btn btn-block btn-default" href="<?php echo $fs['url_info']; ?>">More Info</a></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <?php
                                       }
                                  }
                             ?>
                              <div class="swiper-slide">
                                <div class="swiper-caption swiper-parallax">
                                  <div class="swiper-slide-caption">
                                    <div class="row justify-content-sm-center align-items-sm-center">
                                      <div class="col-xl-8 col-xxl-6"><img class="img-fluid d-none d-xl-inline-block section-xl-top-182 section-xxl-top-110" src="images/home-02-680x488.png" width="680" height="488" alt=""></div>
                                      <div class="col-md-10 col-xl-4 col-xxl-4 text-xl-left offset-top-0">
                                        <h2>We strive to provide a relaxed atmosphere</h2>
                                        <p style="color: #e8e8e8;">If you would like to improve, enhance, or protect your smile, please do not hesitate to contact us today.</p>
                                        <div class="offset-top-20"><span class="icon icon-xxs mdi mdi-cellphone-android text-middle inset-right-10"></span><span class="h6"><a class="text-middle p" href="tel:#">1-800-1234-567</a></span></div>
                                        <div class="row justify-content-sm-center justify-content-xl-start offset-top-20 offset-sm-top-50">
                                          <div class="col-sm-10 col-md-6 col-lg-5 col-xl-12 col-xxl-7">
                                            <div class="inset-xl-left-20 inset-xl-right-20 inset-xxl-left-0 inset-xxl-right-0"><a class="btn btn-block btn-primary" href="schedule.php">BOOK AN APPOINTMENT</a></div>
                                          </div>
                                          <div class="col-sm-10 col-md-5 col-lg-3 col-xl-12 col-xxl-5 offset-top-10 offset-xxl-top-0 offset-md-top-0 offset-xl-top-10">
                                            <div class="inset-xl-left-20 inset-xl-right-20 inset-xxl-left-0 inset-xxl-right-0"><a class="btn btn-block btn-default" href="#">More Info</a></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div class="swiper-caption swiper-parallax">
                                  <div class="swiper-slide-caption">
                                    <div class="row justify-content-sm-center align-items-sm-center">
                                      <div class="col-xl-6 col-xxl-5 section-xl-top-15"><img class="img-fluid d-none d-xl-inline-block" src="images/home-03-363x606.png" width="363" height="606" alt=""></div>
                                      <div class="col-md-10 col-xl-6 col-xxl-4 text-xl-left offset-top-0">
                                        <h2>Appointments</h2>
                                        <div class="offset-top-30">
                                          <p style="color: #e8e8e8;">To make an appointment with our doctor, please complete the form available on this page. Otherwise, we welcome you to contact our scheduling coordinator directly during our normal office hours.</p>
                                        </div>
                                        <div class="row justify-content-sm-center justify-content-xl-start offset-top-30">
                                          <div class="col-sm-10 col-md-6 col-lg-5 col-xl-7"><a class="btn btn-block btn-primary" href="schedule.php">BOOK AN APPOINTMENT</a></div>
                                          <div class="col-sm-10 col-md-5 col-lg-3 col-xl-5 offset-top-10 offset-md-top-0"><a class="btn btn-block btn-default" href="#">More Info</a></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-button swiper-button-prev swiper-parallax mdi mdi-chevron-left"></div>
                            <div class="swiper-button swiper-button-next swiper-parallax mdi mdi-chevron-right"></div>
                            <div class="swiper-pagination"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
        </section>
      <!-- Welcome to Intense-->
      <section class="section-98 section-md-110 novi-background" data-preset='{"title":"Content block 1","category":"content, carousel","reload":true,"id":"content-block-1"}'>
        <div class="container">
          <div class="row justify-content-sm-center align-items-sm-center">
            <!-- Simple quote Slider-->

                    <?php
                                  $res = mysqli_query($conn, "SELECT * FROM `bienvenida` WHERE `estado` = 1 ;");
                                            if (mysqli_num_rows($res) > 0) {
                                      while ($fs = mysqli_fetch_array($res)) {
                           ?>
            <div class="col-md-9 col-xl-6 order-xl-6">
              <div class="owl-carousel owl-carousel-classic owl-carousel-class-light shadow-drop-md" data-items="1" data-nav="false" data-dots="false" data-nav-custom=".owl-custom-navigation">

                <div><img class="img-fluid element-fullwidth" src="images/<?php echo $fs['imagen_1']; ?>" width="525" height="350" alt=""></div>
                <div><img class="img-fluid element-fullwidth" src="images/<?php echo $fs['imagen_2']; ?>" width="525" height="350" alt=""></div>
              
              </div>
            </div>
            <div class="col-md-9 col-xl-6 col-xl-pull-6 text-xl-left offset-top-66 offset-xl-top-0 inset-xl-right-30">
              <h1><?php echo $fs['titulo']; ?></h1>
              <hr class="divider bg-mantis hr-xl-left-0">
              <p class="offset-top-50 text-md-left"><?php echo $fs['descripcion_1']; ?></p>
              <p class="text-md-left"><?php echo $fs['descripcion_2']; ?></p>
              <div class="owl-custom-navigation owl-customer-navigation offset-top-24">
                <div class="owl-nav">
                  <div class="owl-prev mdi mdi-chevron-left" data-owl-prev></div>
                  <div class="owl-next mdi mdi-chevron-right" data-owl-next></div>
                </div>
              </div>
            </div>
            <?php
                                       }
                                  }
                             ?>                           

          </div>
        </div>
      </section>
      <!-- Why choose Intense?-->
      <section class="section-98 section-md-110 bg-polar novi-background" data-preset='{"title":"Icon block 1","category":"content, icon block","reload":false,"id":"icon-block-1"}'>

      <div class="container">

          <h1>¿Por qué elegir Intense?</h1>

          <hr class="divider bg-mantis">
          <div class="row justify-content-sm-center text-lg-left offset-top-50 offset-xl-top-66">
          <?php
                                  $res = mysqli_query($conn, "SELECT * FROM `razones` WHERE `estado` = 1 ;");
                                            if (mysqli_num_rows($res) > 0) {
                                      while ($fs = mysqli_fetch_array($res)) {
                           ?>
            <div class="col-md-9 col-lg-4 offset-xl-0">
              <!-- Icon Box Type 3-->
              <div class="unit align-items-center unit-spacing-xs unit-xs flex-sm-row text-center text-sm-left">
                <div class="unit-left"><span class="icon novi-icon text-middle icon-xs text-info mdi mdi-monitor"></span></div>
                <div class="unit-body">
                  <h4 class="text-spacing-60 text-uppercase font-weight-bold"><?php echo $fs['subtitulo']; ?></h4>
                </div>
              </div>
              <p class="offset-top-10 text-center text-sm-left">T<?php echo $fs['descripcion']; ?></p>
             
            </div>
            <?php
                                       }
                                  }
                             ?> 

            
          <!--  <div class="col-md-9 col-lg-4 offset-xl-0 offset-top-50 offset-lg-top-0">
               Icon Box Type 3-->
             <!-- <div class="unit align-items-center unit-spacing-xs unit-xs flex-sm-row text-center text-sm-left">
                <div class="unit-left"><span class="icon novi-icon text-middle icon-xs text-info mdi mdi-coin"></span></div>
                <div class="unit-body">
                  <h4 class="text-spacing-60 text-uppercase font-weight-bold">THE BEST PRICES </h4>
                </div>
              </div>
              <p class="offset-top-10 text-center text-sm-left">Excellent care and high quality implant teeth at a price that any one can afford , making dental implant costs more accessible. Finally, great quality with a great price!</p>
            </div>
            <div class="col-md-9 col-lg-4 offset-xl-0 offset-top-50 offset-lg-top-0">
               Icon Box Type 3-->
              <!--<div class="unit align-items-center unit-spacing-xs unit-xs flex-sm-row text-center text-sm-left">
                <div class="unit-left"><span class="icon novi-icon text-middle icon-xs text-info mdi mdi-magnify"></span></div>
                <div class="unit-body">
                  <h4 class="text-spacing-60 text-uppercase font-weight-bold">EXPERTISE</h4>
                </div>
              </div>
              <p class="offset-top-10 text-center text-sm-left">Our team of more than 20 professionals have trained in the UK and abroad, creating a highly skilled, friendly and multi-lingual team to best serve our patients’ needs.</p>
            </div>-->
          </div>
                                
        </div>
      </section>
      <!-- Our Services-->
      <section class="section-98 section-md-top-110 section-md-bottom-124 novi-background" data-preset='{"title":"Content block 2","category":"content","reload":false,"id":"content-block-2"}'>
        <div class="container container-wide">
          <h1>Our Services</h1>
          <hr class="divider bg-mantis">
          <p class="offset-top-50">We’re pleased to offer a wide range of dental services</p>
          <div class="row justify-content-sm-center offset-top-66 text-md-left">
            <div class="col-sm-10 col-md-6 col-xl-5 col-xxl-3"><a class="thumbnail-classic" href="single-service.php" target="_self">
                <figure><img width="420" height="310" src="images/service-01-420x310.jpg" alt="">
                </figure></a>
              <h5 class="text-info"><a href="single-service.php">General and Preventive Care</a></h5>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-5 col-xxl-3 offset-top-50 offset-md-top-0"><a class="thumbnail-classic" href="single-service.php" target="_self">
                <figure><img width="420" height="310" src="images/service-02-420x310.jpg" alt="">
                </figure></a>
              <h5 class="text-info"><a href="single-service.php">Cosmetic Dentistry</a></h5>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-5 col-xxl-3 offset-top-50 offset-xxl-top-0"><a class="thumbnail-classic" href="single-service.php" target="_self">
                <figure><img width="420" height="310" src="images/service-03-420x310.jpg" alt="">
                </figure></a>
              <h5 class="text-info"><a href="single-service.php">Restorative Dentistry</a></h5>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-5 col-xxl-3 offset-top-50 offset-xxl-top-0"><a class="thumbnail-classic" href="single-service.php" target="_self">
                <figure><img width="420" height="310" src="images/service-04-420x310.jpg" alt="">
                </figure></a>
              <h5 class="text-info"><a href="single-service.php">Additional Treatments</a></h5>
            </div>
            <!-- next range-->
            <div class="row-spacer d-none d-xxl-inline-block offset-top-66"></div>
            <div class="col-sm-10 col-md-6 col-xl-5 col-xxl-3 offset-top-50 offset-xxl-top-0"><a class="thumbnail-classic" href="single-service.php" target="_self">
                <figure><img width="420" height="310" src="images/service-05-420x310.jpg" alt="">
                </figure></a>
              <h5 class="text-info"><a href="single-service.php">Orthodontics</a></h5>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-5 col-xxl-3 offset-top-50 offset-xxl-top-0"><a class="thumbnail-classic" href="single-service.php" target="_self">
                <figure><img width="420" height="310" src="images/service-06-420x310.jpg" alt="">
                </figure></a>
              <h5 class="text-info"><a href="single-service.php">Pediatric Dentistry</a></h5>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-5 col-xxl-3 offset-top-50 offset-xxl-top-0"><a class="thumbnail-classic" href="single-service.php" target="_self">
                <figure><img width="420" height="310" src="images/service-07-420x310.jpg" alt="">
                </figure></a>
              <h5 class="text-info"><a href="single-service.php">Dentures & Denture Repair</a></h5>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-5 col-xxl-3 offset-top-50 offset-xxl-top-0"><a class="thumbnail-classic" href="single-service.php" target="_self">
                <figure><img width="420" height="310" src="images/service-08-420x310.jpg" alt="">
                </figure></a>
              <h5 class="text-info"><a href="single-service.php">Diagnostics</a></h5>
            </div>
          </div>
          <div class="row justify-content-sm-center">
            <div class="col-sm-8 col-md-6 col-lg-4 col-xl-3 col-xxl-3">
              <div class="inset-left-20 inset-right-20 inset-xxl-left-50 inset-xxl-right-50"><a class="btn btn-block btn-primary" href="services.php">view all services</a></div>
            </div>
          </div>
        </div>
      </section>
      <div class="container container-wide">
        <hr class="hr bg-gray">
      </div>
      <!-- Testimonials-->
      <section class="section-98 section-md-110 novi-background" data-preset='{"title":"Testimonials","category":"content, testimonials","reload":false,"id":"testimonials"}'>
        <div class="container">
          <h1>Testimonials</h1>
          <hr class="divider bg-mantis">
          <div class="row justify-content-sm-center offset-top-66">
            <div class="col-md-9 col-lg-4">
              <blockquote class="quote quote-classic">
                <div class="quote-body">
                  <p>
                    <q>Just a quick note to say thank you so much for the care you took over my appointment today. I am very grateful for your high standard of care.</q>
                  </p>
                  <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                    <div class="unit-left unit-item-narrow"><img class="rounded-circle quote-img" width="80" height="80" src="images/user-alex-ross-80x80.jpg" alt=""></div>
                    <div class="unit-body unit-item-wide">
                      <h6 class="quote-author text-uppercase">
                        <cite class="text-normal">Alex Ross</cite>
                      </h6>
                      <p class="quote-desc text-uppercase text-info">Ceo/Founder at demolink.com</p>
                    </div>
                  </div>
                </div>
              </blockquote>
            </div>
            <div class="col-md-9 col-lg-4 offset-top-41 offset-lg-top-0">
              <blockquote class="quote quote-classic">
                <div class="quote-body">
                  <p>
                    <q>I needed clarification after the appointment and felt at ease to email him and received a fast response.</q>
                  </p>
                  <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                    <div class="unit-left unit-item-narrow"><img class="rounded-circle quote-img" width="80" height="80" src="images/user-john-more-80x80.jpg" alt=""></div>
                    <div class="unit-body unit-item-wide">
                      <h6 class="quote-author text-uppercase">
                        <cite class="text-normal">john more</cite>
                      </h6>
                      <p class="quote-desc text-uppercase text-info">Ceo/Founder at demolink.com</p>
                    </div>
                  </div>
                </div>
              </blockquote>
            </div>
            <div class="col-md-9 col-lg-4 offset-top-41 offset-lg-top-0">
              <blockquote class="quote quote-classic">
                <div class="quote-body">
                  <p>
                    <q>Thank you so much for fitting us in today, don't know what we'd have done without you. My daughter is quite timid, but your doctor was brilliant with her.</q>
                  </p>
                  <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                    <div class="unit-left unit-item-narrow"><img class="rounded-circle quote-img" width="80" height="80" src="images/user-alisa-milano-80x80.jpg" alt=""></div>
                    <div class="unit-body unit-item-wide">
                      <h6 class="quote-author text-uppercase">
                        <cite class="text-normal">alisa milano</cite>
                      </h6>
                      <p class="quote-desc text-uppercase text-info">Ceo/Founder at demolink.com</p>
                    </div>
                  </div>
                </div>
              </blockquote>
            </div>
          </div>
        </div>
      </section>
      <!-- How we can help?-->
      <section class="context-dark" data-preset='{"title":"Call to action","category":"content, cta, parallax","reload":true,"id":"cta"}'>
                <div class="section parallax-container" data-parallax-img="images/background-02-1920x955.jpg">
                  <div class="parallax-content">
                    <div class="bg-overlay-info">
                      <div class="container section-top-66 section-bottom-66 section-xl-bottom-0">
                        <div class="row justify-content-sm-center align-items-sm-center">
                          <div class="col-md-10 col-lg-11 col-xl-4 text-md-left section-xl-bottom-85">
                            <h1>We can help you!</h1>
                            <h5 class="text-regular offset-top-50">We offer a wide range of procedures to help you get that perfect smile.</h5><a class="btn btn-primary offset-top-10" href="schedule.php">BOOK AN APPOINTMENT</a>
                          </div>
                          <div class="col-xl-4"><img class="d-none d-xl-block" src="images/home-06-332x418.png" width="332" height="418" alt=""></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
      </section>
      <!-- Featured News-->
      <section class="section-top-98 section-md-top-110 novi-background" data-preset='{"title":"Blog 1","category":"blog","reload":false,"id":"blog-1"}'>
        <div class="container container-wide">
          <h1>Featured News</h1>
          <hr class="divider bg-mantis">
          <div class="row justify-content-sm-center">
            <div class="col-sm-9 col-xl-4">
              <!-- Post Wide-->
              <article class="post post-wide">
                <!-- Post Media-->
                <header class="post-media novi-excluded">
                  <div><a class="thumbnail-classic" href="blog-single-post.php" target="_self">
                      <figure><img width="700" height="395" src="images/blog-01-570x320.jpg" alt="">
                      </figure></a>
                  </div>
                </header>
                <!-- Post Content-->
                <section class="post-content text-left novi-excluded">
                  <!-- Post Title-->
                  <div class="post-title">
                    <h3 class="text-info"><a href="blog-single-post.php">First Signs of Gum Disease</a></h3>
                  </div>
                  <!-- Post Meta-->
                  <div class="post-meta text-dark small">
                    <p>Post by: &nbsp;John Doe on&nbsp;
                      <time datetime="2018-01-01">15 Feb 2018</time>&nbsp;in&nbsp;<span class="d-block d-sm-inline"></span><a href="#">Dental News</a>
                    </p>
                  </div>
                  <!-- Post Body-->
                  <div class="post-body offset-top-20">
                    <p>If you have been told you have periodontal (gum) disease, you’re not alone. Many adults in the U.S. currently have some form of the disease that can often be dangerous.</p>
                  </div>
                  <!-- Posts controls-->
                  <div class="post-controls text-right offset-top-30">
                    <ul class="list-inline list-inline-sm">
                      <li class="list-inline-item"><a class="btn-more" href="blog-single-post.php"><span class="text-middle font-weight-bold text-uppercase inset-right-8">read more</span><span class="text-middle icon icon-xxs mdi mdi-arrow-right novi-icon"></span></a></li>
                    </ul>
                  </div>
                </section>
              </article>
            </div>
            <div class="col-sm-9 col-xl-4 offset-top-66 offset-xl-top-0">
              <!-- Post Wide-->
              <article class="post post-wide">
                <!-- Post Media-->
                <header class="post-media novi-excluded">
                  <div><a class="thumbnail-classic" href="blog-single-post.php" target="_self">
                      <figure><img width="700" height="395" src="images/blog-02-570x320.jpg" alt="">
                      </figure></a>
                  </div>
                </header>
                <!-- Post Content-->
                <section class="post-content text-left novi-excluded">
                  <!-- Post Title-->
                  <div class="post-title">
                    <h3 class="text-info"><a href="blog-single-post.php">Basic Dental Care</a></h3>
                  </div>
                  <!-- Post Meta-->
                  <div class="post-meta text-dark small">
                    <p>Post by: &nbsp;John Doe on&nbsp;
                      <time datetime="2018-01-01">15 Feb 2018</time>&nbsp;in&nbsp;<span class="d-block d-sm-inline"></span><a href="#">Dental News</a>
                    </p>
                  </div>
                  <!-- Post Body-->
                  <div class="post-body offset-top-20">
                    <p>Today we would like to speak about basic dental care, a set of procedures which involves brushing and flossing your teeth regularly, as well as visiting your local dentist regularly.</p>
                  </div>
                  <!-- Posts controls-->
                  <div class="post-controls text-right offset-top-30">
                    <ul class="list-inline list-inline-sm">
                      <li class="list-inline-item"><a class="btn-more" href="blog-single-post.php"><span class="text-middle font-weight-bold text-uppercase inset-right-8">read more</span><span class="text-middle icon icon-xxs mdi mdi-arrow-right novi-icon"></span></a></li>
                    </ul>
                  </div>
                </section>
              </article>
            </div>
            <div class="col-sm-9 col-xl-4 offset-top-66 offset-xl-top-0">
              <!-- Post Wide-->
              <article class="post post-wide">
                <!-- Post Media-->
                <header class="post-media novi-excluded">
                  <div><a class="thumbnail-classic" href="blog-single-post.php" target="_self">
                      <figure><img width="700" height="395" src="images/blog-03-570x320.jpg" alt="">
                      </figure></a>
                  </div>
                </header>
                <!-- Post Content-->
                <section class="post-content text-left novi-excluded">
                  <!-- Post Title-->
                  <div class="post-title">
                    <h3 class="text-info"><a href="blog-single-post.php">Dry Mouth</a></h3>
                  </div>
                  <!-- Post Meta-->
                  <div class="post-meta text-dark small">
                    <p>Post by: &nbsp;John Doe on&nbsp;
                      <time datetime="2018-01-01">15 Feb 2018</time>&nbsp;in&nbsp;<span class="d-block d-sm-inline"></span><a href="#">Dental News</a>
                    </p>
                  </div>
                  <!-- Post Body-->
                  <div class="post-body offset-top-20">
                    <p>Dry mouth is a syndrome of saliva lack in your mouth. It happens when a mouth gets dry and uncomfortable. Fortunately, many treatments can help against it.</p>
                  </div>
                  <!-- Posts controls-->
                  <div class="post-controls text-right offset-top-30">
                    <ul class="list-inline list-inline-sm">
                      <li class="list-inline-item"><a class="btn-more" href="blog-single-post.php"><span class="text-middle font-weight-bold text-uppercase inset-right-8">read more</span><span class="text-middle icon icon-xxs mdi mdi-arrow-right novi-icon"></span></a></li>
                    </ul>
                  </div>
                </section>
              </article>
            </div>
          </div>
          <div class="row justify-content-sm-center offset-top-66">
            <div class="col-sm-8 col-md-6 col-lg-4 col-xl-3 col-xxl-3">
              <div class="inset-left-20 inset-right-20 inset-xxl-left-50 inset-xxl-right-50"><a class="btn btn-block btn-primary" href="blog.php">view all news</a></div>
            </div>
          </div>
        </div>
      </section>
      <section class="offset-top-124" data-preset='{"title":"Map","category":"map","reload":true,"id":"map"}'>
        <div class="google-map-container" data-zoom="5" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-styles="[{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;lightness&quot;:100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#C6E2FF&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#C5E3BF&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#D1D1B8&quot;}]}]" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png">
          <div class="google-map"></div>
          <ul class="google-map-markers">
            <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
          </ul>
        </div>
      </section>




      <!-- Page Footer-->
      <!-- Footer variant 3-->
      <footer class="section-relative section-top-66 section-bottom-34 page-footer novi-background" data-preset='{"title":"Footer","category":"footer","reload":true,"id":"footer"}'>
        <div class="container">
          <div class="row justify-content-md-center text-xl-left">
            <div class="col-md-12">
              <div class="row justify-content-sm-center">
                <div class="col-sm-10 col-md-3 col-md-6 col-xl-3">
                  <!-- Footer brand-->
                  <div class="footer-brand"><a href="index.php"><img width='138' height='52' src='images/logo.png' alt=''/></a></div>
                  <address class="contact-info offset-top-20 p">
                    <div>
                      <dl>
                        <dt class="font-weight-bold">Address:</dt>
                        <dd class="text-dark d-xl-block">4578 Marmora St, <span class="d-xl-block">San Francisco</span> <span class="d-xl-block">D04 89GR.</span></dd>
                      </dl>
                    </div>
                    <div>
                      <dl class="offset-top-0">
                        <dt class="font-weight-bold">Telephone:</dt>
                        <dd><a class="text-dark" href="tel:#">1-800-1234-567</a></dd>
                      </dl>
                    </div>
                    <div>
                      <dl class="offset-top-0">
                        <dt class="font-weight-bold">E-mail:</dt>
                        <dd><a class="text-dark" href="mailto:#">mail@demolink.org</a></dd>
                      </dl>
                    </div>
                  </address>
                </div>
                <div class="col-sm-10 col-md-3 text-left col-md-10 col-xl-3 offset-md-top-50 offset-xl-top-0 offset-xl-top-10 offset-top-66 offset-md-top-0"> 
                  <!-- Twitter Feed-->
                  <p class="text-uppercase text-spacing-60 font-weight-bold text-center text-xl-left">Twitter Feed</p>
                  <div class="offset-top-20">
                          <div class="twitter" data-twitter-username="templatemonster" data-twitter-date-hours=" hours ago" data-twitter-date-minutes=" minutes ago">
                            <div class="twitter-sm" data-twitter-type="tweet">
                              <div class="twitter-date text-dark small"><span class="icon icon-xxs mdi mdi-twitter text-middle"></span> <span class="text-middle" data-date="text"></span>
                              </div>
                              <div class="twitter-text" data-tweet="text"></div>
                              <div class="twitter-name font-weight-bold big" data-screen_name="text"></div>
                            </div>
                            <div class="twitter-sm" data-twitter-type="tweet">
                              <div class="twitter-date text-dark small"><span class="icon icon-xxs mdi mdi-twitter text-middle"></span> <span class="text-middle" data-date="text"></span>
                              </div>
                              <div class="twitter-text" data-tweet="text"></div>
                              <div class="twitter-name font-weight-bold big" data-screen_name="text"></div>
                            </div>
                          </div>
                  </div>
                </div>
                <div class="col-sm-10 col-md-3 offset-top-66 col-md-6 col-xl-4 offset-md-top-0 offset-xl-top-10">
                  <h6 class="text-uppercase text-spacing-60 text-center text-lg-left">What people say</h6>
                  <div class="offset-xl-top-30">
                          <!-- Simple quote Slider-->
                          <div class="owl-carousel owl-carousel-classic owl-carousel-class-light owl-carousel-simple-quote" data-items="1" data-nav="false" data-dots="true" data-margin="5">
                            <div>
                              <blockquote class="quote quote-simple-2 text-left">
                                <p class="text-darker quote-body offset-bottom-0">
                                  <q>Thank you for your extraordinary dental service! You helped me to get rid of gum disease and mouth cavity inflammation I had suffered.</q>
                                </p>
                                <h6 class="quote-author text-uppercase text-dark">
                                  <cite class="font-default text-normal">- John Doe</cite>
                                </h6>
                              </blockquote>
                            </div>
                            <div>
                              <blockquote class="quote quote-simple-2 text-left">
                                <p class="text-darker quote-body offset-bottom-0">
                                  <q>I am glad I’ve purchased a template from TemplateMonster. Extraordinary customer service, always available.</q>
                                </p>
                                <h6 class="quote-author text-uppercase text-dark">
                                  <cite class="font-default text-normal">- July Mao</cite>
                                </h6>
                              </blockquote>
                            </div>
                          </div>
                    <div class="offset-top-20 text-sm-center text-lg-left">
                            <ul class="list-inline">
                              <li class="list-inline-item"><a class="icon novi-icon fa fa-facebook icon-xxs icon-circle icon-darkest-filled" href="#"></a></li>
                              <li class="list-inline-item"><a class="icon novi-icon fa fa-twitter icon-xxs icon-circle icon-darkest-filled" href="#"></a></li>
                              <li class="list-inline-item"><a class="icon novi-icon fa fa-google-plus icon-xxs icon-circle icon-darkest-filled" href="#"></a></li>
                              <li class="list-inline-item"><a class="icon novi-icon fa fa-linkedin icon-xxs icon-circle icon-darkest-filled" href="#"></a></li>
                            </ul>
                    </div>
                  </div>
                </div>
                <div class="col-sm-10 col-md-3 offset-top-66 col-md-10 offset-xl-top-0 col-md-6 offset-xl-top-10 col-xl-2">
                  <h6 class="text-uppercase text-spacing-60 text-center text-xl-left">Flickr</h6>
                  <div class="offset-xl-top-30">
                          <div class="group-xs flickr widget-flickrfeed" data-lightgallery="group" data-flickr-tags="tm58888_landscapes"><a class="flickr-item thumbnail-classic" data-lightgallery="item" href="" data-image_c="href" data-size="800x800" data-type="flickr-item"><img width="82" height="82" data-title="alt" src="images/_blank.png" alt="" data-image_q="src"></a><a class="flickr-item thumbnail-classic" data-lightgallery="item" href="" data-image_c="href" data-size="800x800" data-type="flickr-item"><img width="82" height="82" data-title="alt" src="images/_blank.png" alt="" data-image_q="src"></a><a class="flickr-item thumbnail-classic" data-lightgallery="item" href="" data-image_c="href" data-size="800x800" data-type="flickr-item"><img width="82" height="82" data-title="alt" src="images/_blank.png" alt="" data-image_q="src"></a><a class="flickr-item thumbnail-classic" data-lightgallery="item" href="" data-image_c="href" data-size="800x800" data-type="flickr-item"><img width="82" height="82" data-title="alt" src="images/_blank.png" alt="" data-image_q="src"></a>
                          </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container offset-top-50">
          <p>Intense Dental Clinic &copy; <span id="copyright-year"></span> . <a class="text-darker" href="#">Privacy Policy</a></p>
        </div>
      </footer>
    </div><a class="builder-button" href="https://ld-wp2.template-help.com/novi-builder/intense-dental-clinic/" target="_blank"><img src="images/novi-icon-26x26.png" width="26" height="26" alt=""><span>Try builder</span></a>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Java script-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>