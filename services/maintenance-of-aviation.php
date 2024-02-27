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
                        <figure><img src="/assets/services/aviation.jpeg" alt="" /></figure>
                    </div>
                    <div class="text-box mt-40">
                        <div class="box-title mb-20">
                            <h2><?php echo $current['name']; ?></h2>
                        </div>
                        <div class="text-content">
                            <p>At Dean Banjus Engineering, we specialize in the meticulous maintenance of aviation systems to ensure the safety, reliability, and performance of your aircraft. Our dedicated team of certified technicians and engineers is committed to upholding the highest standards in aviation maintenance, offering comprehensive solutions for both fixed-wing and rotary-wing aircraft.</p>

                            <h3>Key Features:</h3>

                            <strong>Routine Inspections and Preventive Maintenance:</strong>
                            <p>We conduct thorough routine inspections and preventive maintenance procedures to identify and address potential issues before they escalate. Our proactive approach ensures that your aircraft consistently meets regulatory requirements and operates at peak performance.</p>
                            <strong>Aircraft Component Overhauls:</strong>
                            <p>Dean Banjus Engineering is equipped to handle component overhauls for various aviation systems. From engines and avionics to landing gear and hydraulics, our expert technicians ensure that each component undergoes meticulous inspection and overhaul to extend its lifespan and reliability.</p>
                            <strong>Avionics Upgrades and Installations:</strong>
                            <p>Stay at the forefront of aviation technology with our avionics upgrade and installation services. We work with cutting-edge avionics systems to enhance communication, navigation, and safety features in your aircraft, keeping your fleet up-to-date with the latest advancements.</p>
                            <strong>Emergency Repairs and AOG Support:</strong>
                            <p>Recognizing the critical nature of aviation operations, we provide 24/7 emergency repair services and Aircraft On Ground (AOG) support. Our responsive team is ready to address unforeseen issues promptly, minimizing downtime and ensuring your aircraft is back in the air safely.</p>
                            <strong>Compliance with Regulatory Standards:</strong>
                            <p>Dean Banjus Engineering is committed to ensuring that your aircraft complies with the latest aviation regulations. Our team stays updated on industry standards and works diligently to keep your fleet in full compliance with aviation authorities.</p>
                            <h3>Why Choose Dean Banjus Engineering for Aviation Systems Maintenance?</h3>

                            <strong>Certified Technicians:</strong>
                            <p>Our team consists of certified and experienced aviation technicians and engineers with a deep understanding of the complexities of aircraft systems.</p>
                            <strong>Comprehensive Solutions:</strong>
                            <p>From routine maintenance to complex component overhauls and avionics upgrades, Dean Banjus Engineering offers end-to-end solutions for the maintenance of your aviation systems.</p>
                            <strong>Commitment to Safety:</strong>
                            <p>Safety is paramount in aviation. We prioritize rigorous safety protocols to ensure the airworthiness of your aircraft, providing you with peace of mind and confidence in our maintenance services.</p>
                            <p>Ensure the airworthiness and reliability of your aviation systems with Dean Banjus Engineering's dedicated maintenance services. Contact us today to discuss your specific requirements and experience the excellence of working with a trusted partner in aviation engineering.</p>
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