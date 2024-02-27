<?php

include("../data/services.php");
include("../data/team.php");
include("../data/clients.php");
include("../data/testimonials.php");
include("../data/contacts.php");
$req = $_SERVER['REQUEST_URI'];
$slug = str_replace(["/services/", ".php"], "", $req);

$current = null;
foreach ($services as $serv) {
    if ($serv['page'] == $slug) {
        $current = $serv;
    }
}
if (!$current) exit("Not found");
?>
<!DOCTYPE html>
<html lang="en">
<!-- services-details16:33 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>

        <?php echo $current['name']; ?>DEEN BANJUS ENGINEERING LITD.
    </title>
    <?php include("../inc/styles.php"); ?>

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

    <?php include("../inc/header.php"); ?>

    <!-- Intro Section -->
    <section class="inner-intro bg-img light-color overlay-before parallax-background">
        <div class="container">
            <div class="row title">
                <div class="title_row">
                    <h1 data-title="<?php echo $current['name']; ?>"><span><?php echo $current['name']; ?></span></h1>
                    <div class="page-breadcrumb">
                        <a>Home</a>/ <span><?php echo $current['name']; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Intro Section -->
    <!-- Service Section -->
    <div id="services-section" class="pt-80 pt-xs-60">
        <div class="container">
            <div class="row">
                <?php include("../inc/service_sidebar.php"); ?>
                <div class="col-lg-8">
                    <div class="full-pic">
                        <figure><img src="/assets/services/ac.jpeg" alt="" /></figure>
                    </div>
                    <div class="text-box mt-40">
                        <div class="box-title mb-20">
                            <h2><?php echo $current['name']; ?></h2>
                        </div>
                        <div class="text-content">
                            <p>At Dean Banjus Engineering, we recognize the vital role that air conditioning systems play in maintaining a comfortable and productive environment. Our air conditioning system servicing goes beyond routine maintenance – we deliver comprehensive solutions to ensure optimal performance, energy efficiency, and a healthy indoor climate for your commercial or industrial spaces.</p>

                            <h3>Key Features:</h3>

                            <strong>Proactive Maintenance:</strong>
                            <p>Our skilled technicians conduct thorough inspections and maintenance routines to keep your air conditioning systems in peak condition. We address issues such as filter cleaning, refrigerant checks, and component inspections to enhance efficiency and prevent potential breakdowns.</p>
                            <strong>Energy Efficiency Optimization:</strong>
                            <p>Dean Banjus Engineering is committed to helping you achieve energy efficiency goals. Our servicing includes assessments of your air conditioning systems to identify areas for improvement, optimizing settings and components to reduce energy consumption without compromising performance.</p>
                            <strong>Duct Cleaning and Air Quality Enhancement:</strong>
                            <p>We go beyond the mechanics to ensure that your indoor air quality remains high. Our services include duct cleaning and inspections to remove contaminants, allergens, and pollutants, promoting a healthier and more comfortable working environment.</p>
                            <strong>Emergency Repairs and Troubleshooting:</strong>
                            <p>Should unexpected issues arise, our team is equipped to provide 24/7 emergency repair services. We understand the urgency of maintaining a comfortable indoor climate, and our responsive technicians work swiftly to address problems and restore optimal functionality.</p>
                            <strong>Customized Service Plans:</strong>
                            <p>Dean Banjus Engineering offers flexible service plans tailored to your specific needs. Whether you require regular maintenance, seasonal check-ups, or emergency repairs, our customizable plans ensure that your air conditioning systems are always in top-notch condition.</p>
                            <h3>Why Choose Dean Banjus Engineering for Air Conditioning System Servicing?</h3>

                            <strong>Skilled Technicians:</strong>
                            <p>Our team comprises experienced and certified technicians with expertise in servicing a wide range of air conditioning systems.</p>
                            <strong>Energy Efficiency Experts:</strong>
                            <p>Dean Banjus Engineering is dedicated to helping clients achieve energy efficiency goals. We provide recommendations and implement strategies to optimize your systems for reduced energy consumption.</p>
                            <strong>Comprehensive Solutions:</strong>
                            <p>From routine maintenance to emergency repairs, we offer end-to-end solutions for your air conditioning systems, ensuring they operate at peak performance throughout the year.</p>
                            <p>Ensure a comfortable and efficient indoor climate for your commercial or industrial space with Dean Banjus Engineering's air conditioning system servicing. Contact us today to discuss your requirements and experience the reliability and expertise of a trusted engineering partner.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Service Section end -->
    <!-- Service Section end -->
    <?php include("../inc/footer.php"); ?>

    <!-- <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <?php include("../inc/scripts.php"); ?>
</body>

<!-- services-details16:38 GMT -->

</html>