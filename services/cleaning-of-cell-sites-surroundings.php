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
                            <p>
                                At Dean Banjus Engineering, we recognize the importance of maintaining clean and well-maintained surroundings for optimal cell site performance. Our specialized cell site surroundings cleaning services are designed to ensure that your communication infrastructure operates efficiently in a clutter-free and environmentally responsible environment.</p>

                            <h3>Key Features:</h3>

                            <strong>Site Inspection and Assessment:</strong>
                            <p>Our cleaning services commence with a detailed site inspection and assessment. We evaluate the surroundings of your cell site, identifying potential sources of debris, vegetation, or other impediments that may affect the site's functionality.</p>
                            <strong>Debris Removal and Vegetation Control:</strong>
                            <p>Dean Banjus Engineering excels in the removal of debris and control of vegetation surrounding cell sites. We clear away leaves, branches, and other debris that could impact the equipment's performance. Our team also implements vegetation control measures to prevent the growth of plants that may interfere with antennas or other critical components.</p>
                            <strong>Equipment Cleaning:</strong>
                            <p>We understand the sensitivity of cell site equipment to environmental factors. Our cleaning services include the meticulous cleaning of antennas, cabinets, and other equipment to remove dust, dirt, and other pollutants that could compromise signal quality and system performance.</p>
                            <strong>Erosion Control:</strong>
                            <p>Soil erosion can be a concern in certain environments. Dean Banjus Engineering implements erosion control measures to protect the stability of the cell site surroundings, ensuring that soil erosion does not negatively impact the infrastructure.</p>
                            <strong>Environmentally Responsible Practices:</strong>
                            <p>We prioritize environmentally responsible cleaning practices. Our team utilizes eco-friendly cleaning agents and follows best practices to minimize the environmental impact of our cleaning services, aligning with sustainability goals.</p>
                            <h3>Why Choose Dean Banjus Engineering for Cell Site Surroundings Cleaning?</h3>

                            <strong>Expertise in Telecom Infrastructure:</strong>
                            <p>With specialized knowledge in telecom infrastructure, Dean Banjus Engineering understands the unique requirements of maintaining clean surroundings for optimal cell site performance.</p>
                            <strong>Customized Cleaning Solutions:</strong>
                            <p>Our cleaning services are tailored to the specific needs of each cell site. Whether in urban or rural environments, we adapt our cleaning solutions to suit the unique challenges of each location.</p>
                            <strong>Proactive Maintenance Approach:</strong>
                            <p>Beyond cleaning, Dean Banjus Engineering adopts a proactive maintenance approach. We identify potential issues during cleaning operations and provide recommendations for preventive measures to enhance the long-term functionality of your cell site.</p>
                            <p>Ensure the optimal performance of your cell site infrastructure with Dean Banjus Engineering's specialized surroundings cleaning services. Contact us today to discuss your specific requirements and experience the reliability and expertise of a trusted partner in engineering solutions.
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