<?php
ob_start();
?>
<?php
session_start();
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- BootStrap Link -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <!-- Icon Link -->
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/line-awesome.min.css" />

    <!-- Plugings Link -->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <link rel="stylesheet" href="assets/css/odometer.css" />
    <link rel="stylesheet" href="assets/css/slick.css" />

    <!-- Custom Link -->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />

    <title><?php echo $project_name; ?> | Business-Startup</title>
    <style>
    .post-title {
        font-size: 18px;
    }

    .post-content .meta-post li i {
        font-size: 18px;
        margin-right: 5px;
        color: #000;
        font-weight: 100;
    }
    </style>
</head>

<body>
    <!-- preloader -->
    <div class="loader-bg">
        <div class="loader-p"></div>
    </div>

    <div class="overlay"></div>

    <!-- Header Section Starts Here -->
    <?php
    include('header.php');
    ?>
    <!-- Header Section Ends Here -->

    <!-- Banner Section Starts Here -->
    <section class="inner-banner bg_img" style="
        background: url(assets/images/privacy-policy/bg.png) no-repeat center
          bottom;
      ">
        <div class="container">
            <div class="inner-banner-wrapper">
                <div class="inner-banner-content">
                    <h2 class="inner-banner-title"> Our All Business Or Startups</h2>
                    <ul class="breadcums">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <span>Business-Startup</span>
                        </li>
                    </ul>
                </div>
                <div class="inner-banner-thumb d-none d-md-block">
                    <img src="assets/images/blog/thumb.png" alt="investment" />
                </div>
            </div>
        </div>
        <div class="shape1 paroller" data-paroller-factor=".2">
            <img src="assets/images/about/balls.png" alt="about" />
        </div>
    </section>
    <!-- Banner Section Ends Here -->

    <!--  Section Start Here -->
    <section class="blog-section padding-top padding-bottom overflow-hidden">
        <div class="container">
            <div class="row gy-5 justify-content-center">
                <div class="col-xl-4 col-lg-12">
                    <div class="blog-sidebar">


                        <div class="sidebar-item">
                            <div class="category-wrapper item-inner">
                                <h5 class="title">Business Category</h5>
                                <?php


                                $data = $link->rawQuery("select * from tb_business_category");
                                if ($link->count > 0) {
                                    foreach ($data as $d) {
                                ?>
                                <ul>
                                    <li class="category-item">
                                        <a href="business-category.php?category_Id=<?php echo $d['category_Id']; ?>">

                                            <span><?php echo $d['category_Name'] ?></span>

                                        </a>
                                    </li>

                                </ul>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="col-xl-8 col-lg-12">
                    <div class="row justify-content-center gy-4">
                        <?php

                        $data = $link->rawQuery("select * from tb_business_registration br ,tb_business_category bc where br.category_Id=bc.category_Id");

                        if ($link->count > 0) {
                            foreach ($data as $d) {
                                if ($d['business_Active'] == 1) {
                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-10  slideInUp" data--delay=".3s">
                            <div class="post-item">
                                <div class="post-thumb">
                                    <a href="business-details.php?business_Id=<?php echo $d['business_Id']; ?>">
                                        <img style="width:270px;height:200px" src="<?php echo $d['business_Logo']; ?>"
                                            alt="blog">
                                    </a>
                                </div>
                                <div class="post-content">
                                    <h4 class="post-title">
                                        <a
                                            href="business-details.php?business_Id=<?php echo $d['business_Id']; ?>"><?php echo $d['business_Name']; ?></a>
                                    </h4>
                                    <ul class="meta-post">
                                        <li>

                                            <span> <i class="las la-tag">Current Revenue:</i></span>
                                            <span
                                                style="font-size: 20px;font-weight: 700;color: #000;"><i>₹</i><?php echo  $d['current_Revenue']; ?></span>
                                            <hr style="height: 1px;color: #4425f1;/* border: 5px; */">

                                        </li>

                                    </ul>


                                    <ul class="meta-post">
                                        <li>

                                            <span> <i class="las la-tag">Business Category:</i></span>
                                            <span
                                                style="font-size: 20px;font-weight: 700;color: #000;"><?php echo  $d['category_Name']; ?></span>


                                        </li>

                                    </ul>
                                    <a href="business-details.php?business_Id=<?php echo $d['business_Id']; ?>"
                                        class="read-more-button">Read More...</a>
                                </div>
                            </div>
                        </div>
                        <?php
                                }
                            }
                        }
                        ?>

                    </div>

                </div>

            </div>
        </div>
    </section>
    <!--  Section Ends Here -->

    <!-- Footer Section Starts Here -->
    <?php
    include('footer.php');
    ?>
    <!-- Footer Section Ends Here -->

    <a href="#0" class="scrollToTop active"><i class="las la-chevron-up"></i></a>
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.ui.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/viewport.jquery.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>