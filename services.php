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
    SERVICES - DEEN BANJUS ENGINEERING LITD.
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
  <!--Header End-->
  <!-- Intro Section -->
  <section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
        <div class="title_row">
          <h1 data-title="Services"><span>Services</span></h1>
          <div class="page-breadcrumb">
            <a>Home</a>/ <span>Services</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Intro Section -->
  <!-- Service Section -->
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
                  <a href="/services/<?php echo $service["page"]; ?>.php"">Read More</a>
                </div>
              </div>
            </div>
          </div>
          
        <?php } ?>

      </div>
    </div>
  </section>
  <!-- Service Section end -->
  <?php include("inc/footer.php"); ?>

  <!-- <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
                    <?php include("inc/scripts.php"); ?>
</body>

<!-- services16:32 GMT -->

</html>