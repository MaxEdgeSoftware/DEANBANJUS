<?php

include("data/services.php");
include("data/team.php");
include("data/clients.php");
include("data/testimonials.php");
include("data/contacts.php");
?>
<!DOCTYPE html>
<html lang="en">
<!--  01:03 GMT -->

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>
    HOME - DEEN BANJUS ENGINEERING LITD.
  </title>
  <meta name="description" content="Your trusted partner for comprehensive engineering solutions. From top-notch generator servicing to cutting-edge generator sales, and meticulous air conditioner maintenance, we ensure unwavering performance for your business.">
  <?php include("inc/styles.php"); ?>
</head>

<body>
  <!--loader-->
  <div id="preloader">
    <div class="sk-circle">
      <div class="sk-circle1 sk-child"></div>
      <div class="sk-circle2 sk-child"></div>
      <div class="sk-circle3 sk-child"></div>
      <div class="sk-circle4 sk-child"></div>
      <div class="sk-circle5 sk-child"></div>
      <div class="sk-circle6 sk-child"></div>
      <div class="sk-circle7 sk-child"></div>
      <div class="sk-circle8 sk-child"></div>
      <div class="sk-circle9 sk-child"></div>
      <div class="sk-circle10 sk-child"></div>
      <div class="sk-circle11 sk-child"></div>
      <div class="sk-circle12 sk-child"></div>
    </div>
  </div>
  <!--loader-->
  <?php include("inc/header.php"); ?>

  <!-- star-banner -->
  <!--  Main Banner Start Here-->
  <div class="main-banner">
    <div class="banner-item item-1">
      <div class="container">
        <div>
          <h6 class="banner-text"><span class="span">DEEN BANJUS ENGINEERING</span> </h6>
          <h1>Empowering Reliability, Powering Progress</h1>
          <p>Your trusted partner for comprehensive engineering solutions. From top-notch generator servicing to cutting-edge generator sales, and meticulous air conditioner maintenance, we ensure unwavering performance for your business.</p>
          <a class="btn-text" href="about.php" style="transition: none 0s ease 0s; line-height: 46px; border-width: 2px; margin: 0px; padding: 0px 35px; letter-spacing: 0px; font-weight: 700; font-size: 12px;"> read more</a>
        </div>
      </div>
    </div>
  </div>
  <!--  Main Banner End Here-->

  <!--About-->
  <section id="about_us" class="padding ptb-xs-40 gray-bg">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-12 col-lg-7 about-left">
          <div class="sec_hedding">
            <h2><span>About </span>Comppany</h2>
            <span class="b-line l-left"></span>
          </div>
          <p>
            For over seventeen years (17) years, Deen-Banjus Engineering Limited has served the needs of selected clientele within the Nigerian business community. The company was established since 1991 in Ibadan with Headquarters in Oke-Ade and a branch office at Apata under the name “DEEN-BANJUS TECHNICAL WORKS” as an Electro-Mechanical, installation and Maintenance Services Company to provide support services for various sizes of engine generators, accessories, as well as a good range of spare parts.
          </p>
          <div class="row mt-30">
            <div class="col-lg-4 col-md-4 process mb-40">
              <div class="icon-lf float-left">
                <i class="ion-ios-paperplane-outline"></i>
              </div>
              <div class="right-txt float-right">
                <h3>Quick Help</h3>
                <p><a href="mailto:info@deebanjusengineeringltd.com">Click here</a></p>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 process mb-40">
              <div class="icon-lf float-left">
                <i class="ion-ios-bolt-outline"></i>
              </div>
              <div class="right-txt float-right">
                <h3>Head Office</h3>
                <p>Oke-Ado, Ibadan</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 process mb-40">
              <div class="icon-lf float-left">
                <i class="ion-ios-gear-outline"></i>
              </div>
              <div class="right-txt float-right">
                <h3>Hotline</h3>
                <p>08154520217</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-12 col-lg-5">
          <img src="/assets/bg/2.jpg" class="repo-full" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!--About Us-->

  <!-- OUR_Service -->
  <section id="service_section" class="padding ptb-xs-40">
    <div class="container-fluid">
      <div class="row text-center mb-30">
        <div class="col-sm-12">
          <div class="sec_hedding">
            <h2><span>Our</span> Service</h2>
            <span class="b-line"></span>
          </div>
        </div>
      </div>

      <div class="row gap-3">
        <?php
        foreach ($services as $service) { ?>
          <div class="col-xl-3 col-lg-4 col-md-6 mb-xs-30 margin_bott mb-20">
            <div class="maine_box">
              <div class="items_picher">
                <img src="<?php echo $service['image']; ?>" alt="" />
              </div>

              <div class="box_detail">
                <div class="use_detail">
                  <div class="event_detail">
                    <i class="flaticon-tool-1"></i>
                  </div>
                </div>
                <div class="datail_show">
                  <h3><?php echo substr($service["name"], 0, 30);
                      echo strlen($service["name"]) > 30 ? '...' : '' ?> </h3>
                  <p>
                  </p>
                  <a href="/services/installation-of-generators.php"">Read More</a>
                </div>
              </div>
            </div>
          </div>
          
        <?php } ?>

      </div>
    </div>
  </section>
  <!-- OUR_Service END-->

  <!--Quick Quote Section start-->
  <section id=" feadback" class="padding ptb-xs-40 img_bg1" style="background: #f1f1f1;">
                    <div class="container">
                      <div class="row text-center mb-30 light-color">
                        <div class="col-sm-12">
                          <div class="sec_hedding">
                            <h2 style="color : #068053"><span style="color : #068053">Quick</span> Quote</h2>
                            <span class="b-line"></span>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 col-lg-12">
                          <!-- Contact FORM -->
                          <form action="" method="POST" class="quote-form" id="contact">
                            <!-- IF MAIL SENT SUCCESSFULLY -->
                            <div id="success">
                              <div role="alert" class="alert alert-success">
                                <strong>Thanks</strong> for using our template. Your message
                                has been sent.
                              </div>
                            </div>
                            <!-- END IF MAIL SENT SUCCESSFULLY -->
                            <div class="row">
                              <div class="col-md-4 col-lg-4">
                                <div class="form-field">
                                  <input class="input-sm form-full" id="name" type="text" name="form-name" placeholder="Your Name" />
                                </div>
                              </div>

                              <div class="col-md-4 col-lg-4">
                                <div class="form-field">
                                  <input class="input-sm form-full" id="email" type="text" name="form-email" placeholder="Email" />
                                </div>
                              </div>

                              <div class="col-md-4 col-lg-4">
                                <div class="form-field">
                                  <input class="input-sm form-full" id="sub" type="text" name="form-subject" placeholder="Subject" />
                                </div>
                              </div>

                              <div class="col-md-10 col-lg-10">
                                <div class="form-field">
                                  <textarea class="form-full" id="message" rows="7" name="form-message" placeholder="Your Message"></textarea>
                                </div>
                              </div>
                              <div class="col-md-2 col-lg-2 d-flex align-items-center">
                                <button class="bnt btn-text sent-but mt-xs-30" type="button" id="submit" name="button">
                                  Send
                                </button>
                              </div>
                            </div>
                          </form>
                          <!-- END Contact FORM -->
                        </div>
                      </div>
                    </div>
  </section>
  <!--Quick Quote Section end-->

  <div style="height : 50px" class="my-4"></div>

  <!-- Board Section -->
  <section id="Board" class="padding ptb-xs-40 text-center gray-bg">
    <div class="container">
      <div class="row text-center mb-30">
        <div class="col-sm-12">
          <div class="sec_hedding">
            <h2><span>Board</span> of Directors</h2>
            <span class="b-line"></span>
          </div>
        </div>
      </div>

      <!--Team Carousel -->
      <div class="row mt-10">
        <div class="col-md-12">
          <div id="board-carousel" class="owl-carousel team-carousel nf-carousel-theme">
            <?php
            foreach ($bd as $board) { ?>
              <div class="team_head">
                <div class="team_view">
                  <figure>
                    <!-- <img src="<?php echo $board['image']; ?>" alt="" /> -->
                    <i class="fa fa-2x fa-user"></i>
                  </figure>

                </div>
                <div class="team_discoption text-center mt-15">
                  <span class="team_name"><?php echo $board['name']; ?></span>
                  <span class="postion"><?php echo $board['post']; ?></span>
                </div>
              </div>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
      <!--End Team Carousel -->
    </div>
  </section>
  <!-- End Team Section -->
  <!-- Team Section -->
  <section id="team" class="padding ptb-xs-40 text-center gray-bg">
    <div class="container">
      <div class="row text-center mb-30">
        <div class="col-sm-12">
          <div class="sec_hedding">
            <h2><span>Our</span> Team</h2>
            <span class="b-line"></span>
          </div>
        </div>
      </div>

      <!--Team Carousel -->
      <div class="row mt-10">
        <div class="col-md-12">
          <div id="team-carousel" class="owl-carousel team-carousel nf-carousel-theme">
            <?php
            foreach ($team as $t) { ?>
              <div class="team_head">
                <div class="team_view">
                  <figure>
                    <img src="<?php echo $t['image']; ?>" alt="" />
                  </figure>
                </div>
                <div class="team_discoption text-center mt-15">
                  <span class="team_name"><?php echo $t['name']; ?></span>
                  <span class="postion"><?php echo $t['post']; ?></span>
                </div>
              </div>
            <?php } ?>

          </div>
        </div>
      </div>
      <!--End Team Carousel -->
    </div>
  </section>
  <!-- End Team Section -->



  <!-- Board Section -->
  <section id="Board" class="padding ptb-xs-40 text-center gray-bg">
    <div class="container">
      <div class="row text-center mb-30">
        <div class="col-sm-12">
          <div class="sec_hedding">
            <h2><span>Our</span> Clients</h2>
            <span class="b-line"></span>
          </div>
        </div>
      </div>

      <!--Team Carousel -->
      <div class="row mt-10">
        <div class="col-md-12">
          <div id="clients-carousel" class="owl-carousel team-carousel nf-carousel-theme">
            <?php
            foreach ($clients as $client) { ?>
              <div class="team_head">
                <div class="team_view">
                  <figure>
                    <img style="height : 72px; object-fit : contain" src="<?php echo $client; ?>" alt="" />
                  </figure>
                </div>
              </div>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
      <!--End Team Carousel -->
    </div>
  </section>
  <!-- End Team Section -->

  <!-- Counter Section -->
  <div class="fact-counter-wrapper padding ptb-xs-40">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-sm-30 mb-xs-30">
          <div class="single-fact">
            <div class="icon-boxed">
              <i class="ion-ios-list"></i>
            </div>
            <span class="counter" data-count="3562">0</span>
            <p>Total Projects</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-sm-30 mb-xs-30">
          <div class="single-fact">
            <div class="icon-boxed">
              <i class="ion-happy"></i>
            </div>
            <span class="counter" data-count="1054">0</span>
            <p>Happy Clients</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-xs-30">
          <div class="single-fact">
            <div class="icon-boxed">
              <i class="ion-person-stalker"></i>
            </div>
            <span class="counter" data-count="400">0</span>
            <p>Active Member</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="single-fact">
            <div class="icon-boxed">
              <i class="ion-trophy"></i>
            </div>
            <span class="counter" data-count="67">0</span>
            <p>Won Award</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Counter Section End-->

  <!--Testimonial Section Start-->
  <section class="testimonial_wrapper__block padding ptb-xs-40">
    <div class="container">
      <div class="row text-center mb-30">
        <div class="col-sm-12">
          <div class="sec_hedding">
            <h2><span>Our</span> Testimonial</h2>
            <span class="b-line"></span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div id="testimonial_carosule-wrap" class="owl-carousel testimonial_carosule-wrap">
            <?php
            foreach ($testimonials as $testimonial) { ?>
              <div class="single_carousel pt-40">
                <p>
                  <?php echo $testimonial['testimonial']; ?>
                </p>
                <div class="author_img__block">
                  <div class="author_tablecell__block">
                    <img src="assets/images/author.jpg" alt="" />
                    <p><?php echo $testimonial['client']; ?> <span><?php echo $testimonial['occupation']; ?></span></p>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Testimonial Section End-->


  <?php include("inc/footer.php"); ?>

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
  <?php include("inc/scripts.php"); ?>
</body>

<!--  08:21 GMT -->

</html>