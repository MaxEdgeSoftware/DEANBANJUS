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
                                Dean Banjus Engineering recognizes the critical importance of Mobile Switching Centers (MSCs) and branches in the seamless operation of telecommunication networks. Our stationed personnel services are tailored to ensure the continuous monitoring, maintenance, and efficient functioning of MSCs and branches, providing you with a robust and reliable telecommunications infrastructure.
                            </p>

                            <h3>Key Features:</h3>

                            <strong>On-site Expertise:</strong>
                            <p>Dean Banjus Engineering deploys skilled and experienced personnel to be stationed directly at MSCs and branches. This on-site presence ensures immediate response capabilities and brings expert knowledge to the heart of your telecommunication operations.</p>
                            <strong>Continuous Monitoring and Network Management:</strong>
                            <p>Our stationed personnel are dedicated to the continuous monitoring of MSCs and branch operations. This includes real-time surveillance of network performance, equipment status, and traffic patterns. This proactive approach allows for the identification of potential issues and the swift implementation of corrective measures.</p>
                            <strong>Preventive Maintenance:</strong>
                            <p>Proactive maintenance is essential for preventing potential faults. Our stationed personnel conduct routine inspections and preventive maintenance tasks, ensuring that MSCs and branches operate at optimal efficiency. This approach minimizes the risk of downtime and enhances the overall resilience of your telecommunication network.</p>
                            <strong>Emergency Response and Troubleshooting:</strong>
                            <p>In the event of emergencies, system faults, or disruptions, our stationed personnel are readily available for on-site troubleshooting and resolution. This immediate response minimizes downtime, safeguards against service disruptions, and contributes to the reliability of your telecommunication infrastructure.</p>
                            <strong>Customized Service Plans:</strong>
                            <p>Dean Banjus Engineering tailors service plans to match the unique requirements of each MSC and branch. Whether you need 24/7 monitoring or scheduled maintenance, our services are customized to ensure the optimal performance of these critical components.</p>
                            <h3>Why Choose Dean Banjus Engineering for Stationed Personnel Services at MSCs and Branches?</h3>

                            <strong>Specialized Expertise:</strong>
                            <p> Our stationed personnel possess specialized expertise in the operations and maintenance of MSCs and branches, ensuring effective monitoring and support.</p>
                            <strong>Proactive Fault Management:</strong>
                            <p>We adopt a proactive approach to fault management, aiming to identify and address issues before they impact the operation of your telecommunication network.</p>
                            <strong>Comprehensive Support:</strong>
                            <p>Dean Banjus Engineering offers end-to-end support, from routine maintenance to emergency response, providing you with a comprehensive solution for the continuous operation of MSCs and branches.</p>
                            <p>Ensure the reliability and efficiency of your telecommunication infrastructure with Dean Banjus Engineering's stationed personnel services. Contact us today to discuss your specific requirements and experience the advantage of having dedicated experts safeguarding your MSCs and branches.
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