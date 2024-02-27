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
                        <figure><img src="/assets/bg/1.jpg" alt="" /></figure>
                    </div>
                    <div class="text-box mt-40">
                        <div class="box-title mb-20">
                            <h2><?php echo $current['name']; ?></h2>
                        </div>
                        <div class="text-content">
                            <p>At Dean Banjus Engineering, we understand that issues with your critical infrastructure can arise at any time. Our 24-hour attention to fault calls service is designed to provide immediate and reliable support, ensuring that your systems are back up and running swiftly, day or night.</p>

                            <h3>Key Features:</h3>

                            <strong>Rapid Response Team:</strong>
                            <p>Dean Banjus Engineering boasts a dedicated rapid response team ready to address fault calls 24/7. Our experienced technicians are equipped to handle a wide range of issues, from minor glitches to major malfunctions, ensuring a prompt resolution to keep your operations running smoothly.</p>
                            <strong>Real-time Troubleshooting:</strong>
                            <p>Upon receiving a fault call, our team engages in real-time troubleshooting to identify the root cause of the issue. This proactive approach allows us to swiftly develop a targeted solution, minimizing downtime and reducing the impact on your operations.</p>
                            <strong>Clear Communication:</strong>
                            <p>We prioritize transparent and clear communication throughout the fault resolution process. Our team keeps you informed about the status of the fault call, the identified issue, proposed solutions, and expected resolution timelines, ensuring that you are always in the loop.</p>
                            <strong>Remote Diagnostics and Support:</strong>
                            <p>Utilizing advanced technology, Dean Banjus Engineering offers remote diagnostics and support. In many cases, our technicians can assess and resolve issues remotely, saving time and providing a rapid solution without the need for an on-site visit.</p>
                            <strong>Emergency On-site Assistance:</strong>
                            <p>For issues that require on-site attention, our rapid response team is mobilized immediately. Whether it's a generator malfunction, equipment failure, or any other infrastructure issue, we are prepared to dispatch technicians to your location to address the fault promptly.</p>
                            <h3>Why Choose Dean Banjus Engineering for 24-Hour Fault Call Attention?</h3>

                            <strong>Round-the-Clock Availability:</strong>
                            <p>Our commitment to 24/7 fault call attention means that you can rely on Dean Banjus Engineering whenever an issue arises, day or night, weekends, or holidays.</p>
                            <strong>Experienced Technicians:</strong>
                            <p>Our team consists of skilled and certified technicians with extensive experience in fault resolution for various engineering systems.</p>
                            <strong>Efficient Problem Resolution:</strong>
                            <p>We prioritize efficiency in fault resolution, aiming to restore your systems to optimal functionality as quickly as possible to minimize disruptions to your operations.</p>
                            <p>Count on Dean Banjus Engineering for 24-hour attention to fault calls, providing you with the assurance that your critical infrastructure receives immediate and expert support whenever issues arise. Contact us today to discuss your specific requirements and experience the reliability and expertise of a trusted partner in engineering solutions.</p>
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