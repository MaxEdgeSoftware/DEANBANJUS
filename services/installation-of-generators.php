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
                                At Deen Banjus Engineering, we take pride in delivering seamless and reliable generator installation services. Whether you are a business or a residential customer, our team is dedicated to providing top-notch solutions to meet your power needs. Based in Nigeria and Porto Novo, we bring expertise and efficiency to every generator installation project.
                            </p>

                            <h3>Our Approach:</h3>
                            <p>Our experienced technicians follow a meticulous approach to ensure the successful installation of generators tailored to your specific requirements. We begin with a detailed assessment of your site, considering factors such as power demand, space availability, and local regulations.</p>

                            <h3>Services Offered:</h3>

                            <strong>Customized Design:</strong>
                            <p>We design generator installation plans that align with your unique power demands and facility layout. Our solutions are crafted to optimize efficiency and ensure a seamless integration with your existing infrastructure.</p>
                            <strong>Quality Equipment:</strong>
                            <p>Deen Banjus Engineering sources and installs generators from reputable brands, ensuring that you receive high-quality, reliable equipment. We guide you through the selection process, recommending generators that best match your needs and budget.</p>
                            <strong>Professional Installation:</strong>
                            <p>Our skilled technicians handle the installation process with precision and attention to detail. From electrical connections to fuel systems, we ensure that every component is expertly installed, meeting industry standards and safety regulations.</p>
                            <strong>Testing and Commissioning:</strong>
                            <p>Before handover, we conduct thorough testing and commissioning to validate the functionality and performance of the installed generator. This step guarantees that your generator is ready to provide reliable power whenever needed.</p>
                            <strong>Training and Support:</strong>
                            <p>Deen Banjus Engineering believes in empowering our clients. We provide training on basic operation and maintenance of the installed generator, equipping you with the knowledge to ensure long-term performance.</p>
                            <h3>Why Choose Deen Banjus Engineering?</h3>

                            <ul>
                                <li>Experience: With years of experience in the industry, we bring a wealth of knowledge to every project.</li>
                                <li>Local Presence: Located in Nigeria and Porto Novo, we understand the unique challenges and requirements of the region.</li>
                                <li>Quality Assurance: Our commitment to quality ensures that your generator installation meets the highest standards.</li>
                            </ul>
                            <p>Choose Deen Banjus Engineering for reliable, efficient, and expertly executed generator installations. Contact us today to discuss your project and power your future with confidence.</p>
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