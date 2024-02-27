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
                        <figure><img src="/assets/services/generator.webp" alt="" /></figure>
                    </div>
                    <div class="text-box mt-40">
                        <div class="box-title mb-20">
                            <h2><?php echo $current['name']; ?></h2>
                        </div>
                        <div class="text-content">
                            <p>
                                Dean Banjus Engineering is your premier destination for top-quality generators, catering to diverse industries with a range of power generation solutions. Our commitment to excellence, reliability, and customer satisfaction makes us the preferred choice for those seeking reliable and efficient generator systems.</p>

                            <h3>Key Features:</h3>

                            <strong>Wide Range of Generators:</strong>
                            <p>Dean Banjus Engineering offers a diverse range of generators to meet various power requirements. From compact portable generators for residential use to robust industrial generators for large-scale operations, we have a solution tailored to your specific needs.</p>
                            <strong>Cutting-edge Technology:</strong>
                            <p>Our generator inventory features state-of-the-art technology and innovations. We stay updated with the latest advancements in power generation to provide you with generators that are not only efficient but also incorporate the latest safety and environmental standards.</p>
                            <strong>Customized Solutions:</strong>
                            <p>Recognizing that each client's power needs are unique, we provide customized solutions. Our experienced team works closely with you to understand your requirements and recommends generators that align with your capacity, efficiency, and budgetary considerations.</p>
                            <strong>Expert Consultation:</strong>
                            <p>Purchasing a generator is a significant investment. Dean Banjus Engineering offers expert consultation services to guide you through the selection process. Whether you need a backup generator for your home or a prime power solution for an industrial facility, our team is here to help you make an informed decision.</p>
                            <strong>Installation Services:</strong>
                            <p>Beyond sales, Dean Banjus Engineering provides professional installation services. Our technicians ensure that your generator is set up correctly, adhering to safety standards and manufacturer specifications, to guarantee optimal performance.</p>
                            <h3>Why Choose Dean Banjus Engineering for Generator Sales?</h3>

                            <strong>Quality Assurance:</strong>
                            <p>We source generators from reputable manufacturers, ensuring that the products we offer are of the highest quality and reliability.</p>
                            <stromng>Customer-Centric Approach:</stromng>
                            <p>Dean Banjus Engineering is committed to a customer-centric approach. We prioritize clear communication, transparency, and personalized service to meet your unique power generation needs.</p>
                            <strong>After-Sales Support:</strong>
                            <p>Our commitment to your satisfaction extends beyond the point of sale. Dean Banjus Engineering provides comprehensive after-sales support, including maintenance services, spare parts availability, and ongoing assistance to ensure the longevity of your generator.</p>
                            <p>Choose Dean Banjus Engineering for your generator needs, and experience the reliability and efficiency of our top-tier power generation solutions. Contact us today to discuss your requirements and find the perfect generator for your applications.</p>
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