<?php

include("data/clients.php");
include("data/testimonials.php");
include("data/contacts.php");
include("data/services.php");
?>

<!DOCTYPE html>
<html lang="en">
<!-- about14:04 GMT -->

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>
    ABOUT US - DEEN BANJUS ENGINEERING LITD.
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
          <h1 data-title="About"><span>About</span></h1>
          <div class="page-breadcrumb"><a href="/">Home</a>/ <span>About</span></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Intro Section End-->

  <!-- About Section -->
  <div id="about-section" class="padding pt-xs-40">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-8">
          <div class="block-title v-line">
            <h2><span>Our</span> MISSION</h2>
            <p class="italic">Our Mission/Objectives</p>
          </div>
          <div class="text-content">
            <p>
              With our passion for excellence, we provide a standard for o t h e r s to imitate by the provision of quality service and maintenance of unparalleled power support services that gives you the most effective route to outsourcing alternative power supply in the event of utility power failure.
            </p>
            <p>
              We want to be seen as providing quality products and services like sound enclosures, electrical control panels, sales and after sales services, maintenance, assembly of generating sets and refurbishments as well as management procedures. Through these, we help our customers realize their dreams of comfortable and higher quality life through stable power supply to their business premises and homes resulting in higher productivity and profitability.
            </p>
          </div>
          <hr class="divider" />
          <div class="post-content">
            <div class="post-img">
              <img class="img-responsive" style="max-height: 350px; object-fit : cover" src="assets/bg/mission.jpg" alt="Photo" />
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="dark-bg our-vision light-color padding-40">
            <div class="block-title">
              <h2><span>Our</span> VISION</h2>
              <!-- <p class="italic">Aenean suscipit eget mi act</p> -->
            </div>
            <p>
              To become the foremost Engineering and Technical Company, offering the best of our services to ensure product quality both locally and internationally.
              We envision that our products and services will be the choice in the future in Nigeria.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About Section End-->



  <!-- Section -->
  <section class="padding ptb-xs-40 gray-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex align-items-center">
          <div>
            <h3 class="bigger_text mt-60 mt-xs-0 mt-sm-2">
              The Company you can trust
            </h3>
            <p>
              For over seventeen (17) years, Deen-Banjus Engineering Limited has served the needs of selected clientele within the Nigerian business community. The company was established
              since 1991 in Ibadan with Headquarters in Oke-Ado and a branch office at Apata under the name "DEEN-BANJUS TECHMCAL WORKS" as an Electro-Mechanical, Installation and Maintenance Services Company to provide support services for various sizes of engine generators, accessories, as well as a good range of spare parts.
            </p>
            <p>
              Now incorporated sa "Deen-Banjus Engineering Ltd" with her modern suite of offices located at 21/23, Olakunle Ajibade Street, Ogudu-Ojota, Lagos State and branches ni Ibadan, Kaduna, Enugu, Abuja, Warri, Port Harcourt and Republic of Benin.
            </p>
          </div>
        </div>

        <div class="col-lg-6 mt-sm-30 mt-xs-30">
          <img style="max-height: 350px; width: 100%; object-fit : cover" src="assets/bg/deen.jpg" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- Section End-->


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