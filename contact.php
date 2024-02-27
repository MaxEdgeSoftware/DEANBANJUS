<?php

include("data/testimonials.php");
include("data/contacts.php");
include("data/services.php");
include("data/company.php");
?>
<!DOCTYPE html>
<html lang="en">
<!-- contact117:44 GMT -->

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>
    Contact - DEEN BANJUS ENGINEERING LITD.
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
          <h1 data-title="Contact"><span>Contact</span></h1>
          <div class="page-breadcrumb"><a>Home</a>/ <span>Contact</span></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Intro Section End-->

  <!-- CONTENT -->

  <!-- Contact Section -->
  <section class="padding pt-xs-40">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-8">
          <div class="headeing pb-30">
            <h2>Get in Touch</h2>
            <span class="b-line l-left line-h"></span>
          </div>
          <!-- Contact FORM -->
          <form class="contact-form" id="contact">
            <!-- IF MAIL SENT SUCCESSFULLY -->
            <div id="success">
              <div role="alert" class="alert alert-success">
                <strong>Thanks</strong> for using using our serivice. Your message
                has been sent.
              </div>
            </div>
            <!-- END IF MAIL SENT SUCCESSFULLY -->
            <div class="row">
              <div class="col-md-6 col-lg-6">
                <div class="form-field">
                  <input class="input-sm form-full" id="name" type="text" name="form-name" placeholder="Your Name" />
                </div>
                <div class="form-field">
                  <input class="input-sm form-full" id="email" type="text" name="form-email" placeholder="Email" />
                </div>
                <div class="form-field">
                  <input class="input-sm form-full" id="sub" type="text" name="form-subject" placeholder="Subject" />
                </div>
              </div>
              <div class="col-md-6 col-lg-6">
                <div class="form-field">
                  <textarea class="form-full" id="message" rows="7" name="form-message" placeholder="Your Message"></textarea>
                </div>
              </div>
              <div class="col-md-12 col-lg-12 mt-30">
                <button class="btn-text" type="button" id="submit" name="button">
                  Send Message
                </button>
              </div>
            </div>
          </form>
          <!-- END Contact FORM -->
        </div>

        <div class="col-md-4 col-lg-4 contact mt-xs-30">
          <div class="headeing pb-20">
            <h2>Contact Info</h2>
            <span class="b-line l-left line-h"></span>
          </div>
          <div class="contact-info">
            <ul class="info">
              <li>
                <div class="icon ion-ios-location"></div>
                <div class="content">
                  <p><?php echo $contacts[0]['address']; ?>,</p>
                </div>
              </li>

              <li>
                <div class="icon ion-android-call"></div>
                <div class="content">
                  <?php echo $contacts[0]['tel']; ?>
                </div>
              </li>
              <li>
                <div class="icon ion-ios-email"></div>
                <div class="content">
                  <a href="mailto:<?php echo $contacts[0]['email']; ?>"><?php echo $contacts[0]['email']; ?></a>
                </div>
              </li>
            </ul>
            <ul class="event-social" style="display: none;">
              <li>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Map Section -->
  </section>

  <!--End Contact-->
  <!--Testimonial Section Start-->
  <section class=" padding ">
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
  <!-- footer -->
  <?php include("inc/footer.php"); ?>

  <?php include("inc/scripts.php"); ?>

</body>

<!-- contact117:44 GMT -->

</html>