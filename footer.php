<!-- Page Footer-->
<!-- Footer variant 3-->
<footer class="section-relative section-top-66 section-bottom-34 page-footer novi-background" data-preset='{"title":"Footer","category":"footer","reload":true,"id":"footer"}'>
    <?php

    $res = mysqli_query($conn, "SELECT * FROM `configuracion`;");

    $fs = mysqli_fetch_array($res)

    ?>

    <div class="container">
        <div class="row justify-content-md-center text-xl-left">
            <div class="col-md-12">
                <div class="row justify-content-sm-center">
                    <div class="col-sm-10 col-md-3 col-md-6 col-xl-3">
                        <!-- Footer brand-->
                        <div class="footer-brand"><a href="index.php"><img width='138' height='52' src='images/<?php echo $fs['logofooter']; ?>' alt='' /></a></div>
                        <address class="contact-info offset-top-20 p">
                            <div>
                                <dl>
                                    <dt class="font-weight-bold">Address:</dt>
                                    <dd class="text-dark d-xl-block"><?php echo $fs['direccion']; ?></dd>
                                </dl>
                            </div>
                            <div>
                                <dl class="offset-top-0">
                                    <dt class="font-weight-bold">Telephone:</dt>
                                    <dd><a class="text-dark" href="tel:#"><?php echo $fs['telefono']; ?></a></dd>
                                </dl>
                            </div>
                            <div>
                                <dl class="offset-top-0">
                                    <dt class="font-weight-bold">E-mail:</dt>
                                    <dd><a class="text-dark" href="mailto:#"><?php echo $fs['email']; ?></a></dd>
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
                                    <li class="list-inline-item"><a class="icon novi-icon fa fa-facebook icon-xxs icon-circle icon-darkest-filled" href="<?php echo $fs['facebook']; ?>"></a></li>
                                    <li class="list-inline-item"><a class="icon novi-icon fa fa-twitter icon-xxs icon-circle icon-darkest-filled" href="<?php echo $fs['twitter']; ?>"></a></li>
                                    <li class="list-inline-item"><a class="icon novi-icon fa fa-google-plus icon-xxs icon-circle icon-darkest-filled" href="<?php echo $fs['google']; ?>"></a></li>
                                    <li class="list-inline-item"><a class="icon novi-icon fa fa-linkedin icon-xxs icon-circle icon-darkest-filled" href="<?php echo $fs['linkedin']; ?>"></a></li>
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
        <p><?php echo $fs['copyrigth']; ?></p>
    </div>
</footer>
</div><a class="builder-button" href="https://ld-wp2.template-help.com/novi-builder/intense-dental-clinic/" target="_blank"><img src="images/novi-icon-26x26.png" width="26" height="26" alt=""><span>Try builder</span></a>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Java script-->
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>