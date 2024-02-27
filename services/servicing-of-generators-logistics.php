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
                                At Dean Banjus Engineering, we take pride in providing comprehensive solutions for the servicing of generators and logistics. Our commitment is to ensure that your power generation systems are not only well-maintained but also supported by efficient and streamlined logistics, guaranteeing optimal performance and minimal disruptions to your operations.</p>

                            <h3>Key Features:</h3>

                            <strong>Proactive Generator Servicing:</strong>
                            <p>Our highly skilled technicians specialize in the proactive servicing of generators, employing rigorous maintenance schedules to keep your equipment in peak condition. Regular inspections, oil changes, and component checks are part of our comprehensive servicing approach.</p>
                            <strong>Emergency Repairs and Troubleshooting:</strong>
                            <p>Recognizing the critical nature of power supply, we offer 24/7 emergency repair services. Our responsive team is equipped to address unforeseen issues promptly, minimizing downtime and ensuring your generators are back in operation as quickly as possible.</p>
                            <strong>Logistics Optimization:</strong>
                            <p>Dean Banjus Engineering goes beyond servicing by offering tailored logistics solutions for generator maintenance. We manage the entire process, from scheduling routine maintenance to procuring spare parts, ensuring a seamless and hassle-free experience for our clients.</p>
                            <storng>Scheduled Maintenance Programs:</storng>
                            <p>We understand that a well-maintained generator is a reliable generator. Our scheduled maintenance programs are designed to align with your operational needs, preventing unexpected breakdowns and extending the lifespan of your power generation equipment.</p>
                            <strong>Logistical Efficiency:</strong>
                            <p>Our logistics solutions are geared towards efficiency. We optimize the supply chain for spare parts and fuel, ensuring that essential components are readily available when needed. This streamlined approach enhances the overall reliability of your power generation systems.</p>
                            <h3>Why Choose Dean Banjus Engineering for Generator Servicing and Logistics?</h3>

                            <strong>Expert Technicians:</strong>
                            <p>Our team consists of experienced and certified technicians with in-depth knowledge of generator systems, ensuring top-notch servicing.</p>
                            <strong>Comprehensive Logistics Support:</strong>
                            <p>We handle the logistics intricacies, allowing you to focus on your core business. From spare parts procurement to fuel supply, our logistics support is designed for maximum efficiency.</p>
                            <strong>Tailored Solutions:</strong>
                            <p>Every client's needs are unique, and we tailor our services accordingly. Dean Banjus Engineering takes a personalized approach to generator servicing and logistics, addressing specific requirements with precision.</p>
                            <p>Ensure the reliability of your power generation systems with Dean Banjus Engineering's dedicated generator servicing and logistics solutions. Contact us today to discuss your requirements and experience the difference of working with a trusted partner in engineering excellence.</p>
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