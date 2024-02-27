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
                        <figure><img style="width : 100%" src="/assets/services/tell.webp" alt="" /></figure>
                    </div>
                    <div class="text-box mt-40">
                        <div class="box-title mb-20">
                            <h2><?php echo $current['name']; ?></h2>
                        </div>
                        <div class="text-content">
                            <p>
                                Dean Banjus Engineering stands at the forefront of delivering advanced and reliable solutions in the field of telecommunications, with a focus on optimizing the performance and efficiency of Base Transceiver Stations (BTS). As a crucial component of cellular networks, the BTS is responsible for facilitating communication between mobile devices and the core network. Our specialized BTS services are crafted to ensure the seamless functioning, enhanced coverage, and longevity of your telecommunications infrastructure.</p>

                            <h3>Key Features:</h3>

                            <strong>Optimized Network Connectivity:</strong>
                            <p>At the heart of our BTS services is the optimization of network connectivity. We employ state-of-the-art technologies and protocols to enhance signal strength, call quality, and data transmission, providing users with a superior mobile experience.</p>
                            <strong>Continuous Monitoring and Diagnostics:</strong>
                            <p>Dean Banjus Engineering prioritizes real-time monitoring and diagnostics of BTS operations. Our dedicated team ensures that the BTS is operating at peak efficiency, promptly identifying and addressing any issues that may arise. This continuous oversight contributes to the reliability and stability of your cellular network.</p>
                            <strong>Proactive Maintenance and Upgrades:</strong>
                            <p>Proactive maintenance is a cornerstone of our BTS services. Regular inspections, preventive maintenance, and timely upgrades are conducted to keep the BTS equipment in optimal condition. This approach minimizes downtime, enhances system resilience, and ensures that your telecommunications infrastructure remains at the forefront of technology.</p>
                            <strong>Network Expansion and Capacity Planning:</strong>
                            <p>To meet the growing demands of mobile users, Dean Banjus Engineering offers network expansion and capacity planning services. Whether it's increasing coverage, improving capacity, or planning for future growth, our BTS services are designed to align with your evolving operational requirements.</p>
                            <strong>Security Enhancements:</strong>
                            <p>Security is paramount in the telecommunications landscape. Our BTS services include implementing security enhancements to safeguard against potential threats, ensuring the integrity and confidentiality of your network.</p>
                            <h3>Why Choose Dean Banjus Engineering for BTS Services?</h3>

                            <strong> Industry Expertise:</strong>
                            <p>With years of expertise in telecommunications engineering, Dean Banjus Engineering brings a deep understanding of BTS operations and optimization.</p>
                            <strong>Collaborative Approach:</strong>
                            <p>Our collaborative approach involves working closely with clients to understand their unique needs, tailoring BTS solutions to meet specific operational goals.</p>
                            <strong>Reliability and Innovation:</strong>
                            <p>Dean Banjus Engineering is committed to delivering reliable and innovative BTS services, contributing to the efficiency and effectiveness of your cellular network.
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