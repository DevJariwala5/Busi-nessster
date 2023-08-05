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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BootStrap Link -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Icon Link -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">

    <!-- Plugings Link -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/slick.css">

    <!-- Custom Link -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <title><?php echo $project_name; ?> | Blog</title>
    <style>
    .justify-content-center {
        justify-content: initial !important;
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
    <section class="inner-banner bg_img"
        style="background: url(assets/images/privacy-policy/bg.png) no-repeat center bottom;">
        <div class="container">
            <div class="inner-banner-wrapper">
                <div class="inner-banner-content">
                    <h2 class="inner-banner-title">our latest
                        blog post</h2>
                    <ul class="breadcums">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <span>blog post</span>
                        </li>
                    </ul>
                </div>
                <div class="inner-banner-thumb d-none d-md-block">
                    <img src="assets/images/blog/thumb.png" alt="investment">
                </div>
            </div>
        </div>
        <div class="shape1 paroller" data-paroller-factor=".2">
            <img src="assets/images/about/balls.png" alt="about">
        </div>
    </section>
    <!-- Banner Section Ends Here -->


    <!-- Blog Section Start Here -->
    <section class="blog-section padding-top padding-bottom overflow-hidden">
        <div class="container">
            <div class="row gy-5 justify-content-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="row justify-content-center gy-4">
                        <?php

                        $data = $link->rawQuery("select * from tb_blog");
                        if ($link->count > 0) {
                            foreach ($data as $d) {
                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-10 wow slideInUp" data-wow-delay=".3s">
                            <div class="post-item">
                                <div class="post-thumb">
                                    <a href="blog-details.php?blog_Id=<?php echo $d['blog_Id']; ?>">
                                        <img src="backyard/<?php echo $d['blog_Thumb_Image']; ?>" alt="blog">
                                    </a>
                                </div>
                                <div class="post-content">
                                    <h4 class="post-title">
                                        <a
                                            href="blog-details.php?blog_Id=<?php echo $d['blog_Id']; ?>"><?php echo $d['blog_Title']; ?></a>
                                    </h4>
                                    <ul class="meta-post">
                                        <li>

                                            <i class="las la-tag"></i>
                                            <?php echo $d['blog_Author']; ?>

                                        </li>
                                        <li>

                                            <i class="las la-calendar-check"></i>
                                            <?php echo $d['blog_Date']; ?>

                                        </li>
                                    </ul>
                                    <p><?php echo $d['blog_Short_Description']; ?></p>
                                    <a href="blog-details.php?blog_Id=<?php echo $d['blog_Id']; ?>"
                                        class="read-more-button">Read More...</a>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        }
                        ?>





                    </div>

                </div>
            </div>
    </section>
    <!-- Blog Section Ends Here -->


    <!-- Profit Calculation Section Starts Here -->

    <!-- Profit Calculation Section Ends Here -->


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