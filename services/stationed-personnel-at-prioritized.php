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
                        <figure><img src="/assets/bg/mission.jpg" alt="" /></figure>
                    </div>
                    <div class="text-box mt-40">
                        <div class="box-title mb-20">
                            <h2><?php echo $current['name']; ?></h2>
                        </div>
                        <div class="text-content">
                            <p>
                                Dean Banjus Engineering recognizes the critical role that prioritized cell sites, including Base Station Controllers (BSCs), play in maintaining seamless communication networks. Our stationed personnel services are designed to ensure the continuous operation, monitoring, and maintenance of these vital infrastructure components, providing you with peace of mind and uninterrupted connectivity.</p>

                            <h3>Key Features:</h3>

                            <strong>Dedicated On-site Presence:</strong>
                            <p>Dean Banjus Engineering deploys experienced and skilled personnel to be stationed directly at prioritized cell sites, including BSCs. This on-site presence ensures immediate response capabilities and allows for proactive monitoring of the equipment.</p>
                            <strong>Continuous Monitoring:</strong>
                            <p>Our stationed personnel are tasked with continuous monitoring of critical systems and equipment. This includes real-time surveillance of network performance, equipment status, and environmental conditions, enabling swift responses to potential issues and ensuring the reliability of your communication infrastructure.</p>
                            <strong>Preventive Maintenance:</strong>
                            <p>Proactive maintenance is essential for preventing potential faults. Our stationed personnel are trained to conduct routine inspections and preventive maintenance tasks at prioritized cell sites, addressing minor issues before they escalate and cause disruptions.</p>
                            <strong>Emergency Response and Troubleshooting:</strong>
                            <p>In the event of an emergency or system fault, our stationed personnel are immediately available to provide on-site troubleshooting and resolution. This rapid response minimizes downtime and contributes to the overall resilience of your communication network.</p>
                            <strong>Customized Service Plans:</strong>
                            <p>Dean Banjus Engineering tailors service plans to match the unique requirements of each prioritized cell site. Whether you need around-the-clock monitoring or scheduled maintenance, our services are customized to ensure optimal performance.</p>
                            <h3>Why Choose Dean Banjus Engineering for Stationed Personnel Services?</h3>

                            <strong>Experienced and Trained Personnel:</strong>
                            <p>Our stationed personnel are highly trained and experienced in the specific requirements of prioritized cell sites, ensuring effective monitoring and maintenance.</p>
                            <strong>Proactive Fault Management:</strong>
                            <p>We adopt a proactive approach to fault management, aiming to identify and address issues before they impact the operation of your communication network.</p>
                            <strong>Comprehensive Support:</strong>
                            <p>Dean Banjus Engineering offers end-to-end support, from routine maintenance to emergency response, providing you with a comprehensive solution for the continuous operation of prioritized cell sites.</p>
                            <p>Ensure the reliability and performance of your communication infrastructure with Dean Banjus Engineering's stationed personnel services. Contact us today to discuss your specific requirements and experience the advantage of having dedicated experts safeguarding your prioritized cell sites.
                            </p>
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