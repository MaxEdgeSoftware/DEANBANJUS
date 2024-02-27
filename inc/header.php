<!-- header Start -->
<header id="header" class="header">
    <div class="nav-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="index-2.php"><img style="height: 72px" src="/deenBanjus.png" alt="" /></a>
                    </div>
                    <!-- Phone Menu button -->
                    <button id="menu" class="menu hidden-md-up"></button>
                </div>
                <div class="col-md-9 nav-bg d-flex align-items-center">
                    <nav class="navigation">
                        <ul>
                            <li>
                                <a href="/">Home</a><i class="ion-ios-plus-empty hidden-md-up"></i>
                            </li>
                            <li>
                                <a href="/about.php">About Us</a><i class="ion-ios-plus-empty hidden-md-up"></i>
                            </li>

                            <li>
                                <a href="javascript:avoid(0);">services</a><i class="ion-ios-plus-empty hidden-md-up"></i>
                                <ul class="sub-nav">
                                    <li>
                                        <a href="/services.php">All Services</a>
                                    </li>
                                    <?php
                                    $s = $services;
                                    $s = array_splice($s, 0, 8);
                                    foreach ($s as $service) { ?>
                                        <li>
                                            <a href="/services/<?php echo $service['page']; ?>.php"><?php echo $service['name']; ?></a>
                                        </li>
                                    <?php } ?>

                                </ul>
                            </li>
                            <li>
                                <a href="javascript:avoid(0);">Our Team</a><i class="ion-ios-plus-empty hidden-md-up"></i>
                                <ul class="sub-nav">
                                    <li>
                                        <a href="/team.php">Board of Directors</a>
                                    </li>
                                    <li>
                                        <a href="/management-team.php">Management Team</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="//blog.deenbanjusengineeringltd.com">bolg</a><i class="ion-ios-plus-empty hidden-md-up"></i>
                            </li>
                            <li>
                                <a href="/contact.php">Contact Us</a><i class="ion-ios-plus-empty hidden-md-up"></i>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!--Header End-->