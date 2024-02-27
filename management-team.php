<?php

include("data/clients.php");
include("data/testimonials.php");
include("data/contacts.php");
include("data/services.php");
include("data/team.php");
?>

<!DOCTYPE html>
<html lang="en">
<!-- about14:04 GMT -->

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>
    MANAGEMENT TEAM - DEEN BANJUS ENGINEERING LITD.
  </title>
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


  <!-- Intro Section -->
  <section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
        <div class="title_row">
          <h1 data-title="About"><span>Management Team</span></h1>
          <div class="page-breadcrumb"><a href="/">Home</a>/ <span>Management TEam</span></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Intro Section End-->



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
          <div id="boasrd-carousel" class="row gap-3">
            <?php
            foreach ($team as $t) { ?>
              <div class="col-md-4 col-lg-3 col-12 margin_bott team_head mb-20">

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
  <?php include("inc/footer.php"); ?>


  <!-- Site Wraper End -->
  <?php include("inc/scripts.php"); ?>
  <!-- Map api Js -->
  <script type="text/javascript" src="../../../../maps.google.com/maps/api/jse8d0?sensor=false&amp;.js"></script>
</body>

<!-- about14:25 GMT -->

</html>