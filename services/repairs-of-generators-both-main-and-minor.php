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
                        <figure><img src="/assets/services/4.jpg" alt="" /></figure>
                    </div>
                    <div class="text-box mt-40">
                        <div class="box-title mb-20">
                            <h2><?php echo $current['name']; ?></h2>
                        </div>
                        <div class="text-content">
                            <p>
                                Dean Banjus Engineering is your trusted partner in providing comprehensive and efficient repair solutions for generators. Whether you're facing minor issues or require major repairs, our team of skilled technicians is dedicated to restoring your generator to optimal functionality, minimizing downtime, and ensuring reliable power supply for your operations.</p>

                            <h3>Key Features:</h3>

                            <strong> Expertise:</strong>
                            <p> technicians begin each repair with a thorough diagnostic assessment to pinpoint the root cause of the issue. We leverage our expertise to identify both major and minor problems, ensuring a comprehensive understanding before proceeding with the repair process.</p>
                            <strong> Generator Repairs:</strong>
                            <p>When faced with major issues such as engine malfunctions, alternator failures, or complex electrical problems, Dean Banjus Engineering is equipped to handle extensive generator repairs. Our team is experienced in overhauls, component replacements, and system reconfigurations to address significant issues.</p>
                            <storng>Minor Generator Repairs:</storng>
                            <p>Even seemingly minor issues can impact the performance of your generator. Our technicians specialize in addressing minor repairs promptly, such as fixing fuel system problems, addressing electrical issues, and replacing worn-out components. Timely attention to minor repairs prevents them from escalating into major breakdowns.</p>
                            <strong>Emergency Repair Services:</strong>
                            <p>Recognizing the critical nature of generator functionality, we offer 24/7 emergency repair services. Our rapid response team is ready to address unexpected issues, ensuring that your generator is back in operation swiftly to minimize disruptions to your power supply.</p>
                            <strong>Preventive Maintenance Recommendations:</strong>
                            <p>In addition to repairs, we provide insights into preventive maintenance practices to help you minimize the risk of future issues. Our goal is to not only fix current problems but also to enhance the overall longevity and reliability of your generator.</p>
                            <strong>Why Choose Dean Banjus Engineering for Generator Repairs?</strong>

                            <strong>Skilled Technicians:</strong>
                            <p>Our team comprises highly skilled technicians with extensive experience in repairing generators of various types and sizes.</p>
                            <strong>Efficient Turnaround Time:</strong>
                            <p>We understand the importance of swift repairs. Dean Banjus Engineering prioritizes efficiency to minimize downtime and ensure a quick turnaround for your generator repairs.</p>
                            <strong>Transparent Communication:</strong>
                            <p>Transparency is key in our approach. We keep you informed at every step of the repair process, providing clear communication on the issues identified, proposed solutions, and expected timelines.</p>
                            <p>Trust Dean Banjus Engineering for all your generator repair needs, from minor fixes to major overhauls. Contact us today to discuss your requirements and experience the reliability and expertise of a trusted partner in generator services.</p>
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