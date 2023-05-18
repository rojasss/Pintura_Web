<?php include "config.php"; ?>


<header class="page-head" data-preset='{"title":"Header","category":"header","reload":true,"id":"header"}'>
        <!-- RD Navbar Transparent-->
        <div class="rd-navbar-wrap">
          <nav class="novi-background rd-navbar rd-navbar-top-panel rd-navbar-light" data-lg-stick-up-offset="79px" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
            <div class="container">
              <div class="rd-navbar-inner">

              <?php
                           $res = mysqli_query($conn, "SELECT * FROM `configuracion` WHERE `estado` = 1 ;");
                                     if (mysqli_num_rows($res) > 0) {
                               while ($fs = mysqli_fetch_array($res)) {
                       ?>
                <div class="rd-navbar-top-panel">
                  <div class="left-side">
                    <ul class="list-inline list-inline-sm list-inline-white text-darker">
                      <li class="list-inline-item"><a class="text-dark novi-icon fa fa-facebook" href="<?php echo $fs['redes_url01']; ?>"></a></li>
                      <li class="list-inline-item"><a class="text-dark novi-icon fa fa-twitter" href="<?php echo $fs['redes_url02']; ?>"></a></li>
                      <li class="list-inline-item"><a class="text-dark novi-icon fa fa-google-plus" href="<?php echo $fs['redes_url03']; ?>"></a></li>
                      <li class="list-inline-item"><a class="text-dark novi-icon fa fa-youtube" href="<?php echo $fs['redes_url04']; ?>"></a></li>

                    </ul>
                  </div>
                  <div class="center">
                    <address class="contact-info text-left"><span><span class="icon mdi mdi-map-marker novi-icon"></span><a class="text-middle p text-dark" href="#"><?php echo $fs['dirrecion']; ?></a></span></address>
                  </div>
                  <div class="right-side">
                    <address class="contact-info text-left"><span><span class="icon mdi mdi-cellphone-android novi-icon"></span><a class="text-middle p font-weight-bold text-dark" href="tel:#"><?php echo $fs['telefono']; ?></a> <span class="p text-info text-middle">Call me please!</span></span></address>
                  </div>
                </div>
                
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Top Panel Toggle-->
                  <button class="rd-navbar-top-panel-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-top-panel"><span></span></button>
                  <!--Navbar Brand-->
                  <div class="rd-navbar-brand"><a href="index.php"><img width='240' height='31' src='images/<?php echo $fs['logo']; ?>' alt=''/></a></div>
                </div>

                <?php
                                      }
                                 }
                ?>
                <div class="rd-navbar-menu-wrap">
                  <div class="rd-navbar-nav-wrap">
                    <div class="rd-navbar-mobile-scroll">
                      <!--Navbar Brand Mobile-->
                      <?php
                      $res = mysqli_query($conn, "SELECT * FROM `configuracion` WHERE `estado` = 1 ;");
                                     if (mysqli_num_rows($res) > 0) {
                               while ($fs = mysqli_fetch_array($res)) {
                       ?>
                      <div class="rd-navbar-mobile-brand"><a href="index.php"><img width='240' height='31' src='images/<?php echo $fs['logo']; ?>' alt=''/></a></div>
                      <?php
                                      }
                                 }
                         ?>
                                
                      <!-- RD Navbar Nav-->

                      
                      <ul class="rd-navbar-nav">
                      <?php
                      $res = mysqli_query($conn, "SELECT * FROM `menu` WHERE `estado` = 1 ;");
                                     if (mysqli_num_rows($res) > 0) {
                               while ($fs = mysqli_fetch_array($res)) {
                       ?>
                        <li class="active"><a href="<?php echo $fs['ruta']; ?>"><span><?php echo $fs['nombre']; ?></span></a>
                        </li>
                        <?php
                                      }
                                 }
                         ?>
                       <!--<li><a href="about-us.php"><span>About</span></a>
                        </li>
                        <li><a href="services.php"><span>Services</span></a>
                                <?php
                                     $res = mysqli_query($conn, "SELECT * FROM `productos` WHERE `estado` = 1 ;");
                                                if (mysqli_num_rows($res) > 0) {
                                          while ($fs = mysqli_fetch_array($res)) {
                                  ?>
                          <ul class="rd-navbar-dropdown">
                            <li><a href="<?php echo $fs['url']; ?>"><span class="text-middle"><?php echo $fs['categoria']; ?>/span></a>
                            </li>
                            <li><a href="single-service.php"><span class="text-middle">Cosmetic Solutions</span></a>
                            </li>
                            <li><a href="single-service.php"><span class="text-middle">Restorative Solutions</span></a>
                            </li>
                            <li><a href="single-service.php"><span class="text-middle">Additional Treatments</span></a>
                            </li>
                            <li><a href="single-service.php"><span class="text-middle">Orthodontics</span></a>
                            </li>
                            <li><a href="single-service.php"><span class="text-middle">Dentures &amp; Denture Repair</span></a>
                            </li>
                            <li><a href="single-service.php"><span class="text-middle">Diagnostic &amp; Preventative</span></a>
                            </li>
                            <li><a href="single-service.php"><span class="text-middle">Single Service</span></a>
                            </li>
                          </ul>
                                   <?php
                                               }
                                          }
                                  ?>
                        </li>  
                        
                        <li><a href="schedule.php"><span>Schedule</span></a>
                        </li>
                        <li><a href="blog.php"><span>News</span></a>
                          <ul class="rd-navbar-dropdown">
                            <li><a href="blog-single-post.php"><span class="text-middle">Single Blog Post</span></a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="contacts.php"><span>Contacts</span></a>
                        </li> -->
                      </ul>

                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>


      </header>
      