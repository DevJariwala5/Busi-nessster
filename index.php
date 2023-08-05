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

    <title><?php echo $project_name; ?> | Home</title>

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
    <section class="banner-section bg_img" style="background: url(assets/images/banner/bg.png) center bottom;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4  d-none d-lg-block">
                    <div class="banner-thumb">
                        <img src="assets/images/banner/thumb.png" alt="banner">
                        <div class="shapes ">
                            <div class="shape2">
                                <img src="assets/images/banner/shape1.png" alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="banner-content">
                        <h1 class="banner-title"><span class="text--base">Invest in the world’s</span><span>most
                                promising startups</span>
                        </h1>
                        <span class="subtitle">Diversify your investment portfolio with insider access to highly vetted
                            startups from India and beyond in just minutes.</span>
                        <div class="button-group d-flex flex-wrap align-items-center">
                            <a href="registration.php" class="cmn--btn btn--secondary">get started</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section Ends Here -->


    <!-- How it Works Section Starts Here -->
    <section class="how-work padding-top padding-bottom">
        <div class="container">
            <div class="row justif-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="how-work-left-content">
                        <div class="section-header wow fadeInUp">
                            <span class="subtitle">How to Do It</span>
                            <h2 class="title">try easy 3 step to invest</h2>
                            <p style="text-align:justify;">Mission-critical business tools. Powerful performance
                                benchmarks. Trusted fundraising
                                recommendations. Busi Nesster supports you at every point along your entrepreneurial
                                journey so
                                when it’s time to raise money, you have the best shot at investment. Get started on the
                                path to fundraising success</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row align-items-center gy-4">
                        <div class="col-md-6 col-sm-6">
                            <div class="row gy-4">
                                <div class="col-12 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="how-work-item">
                                        <div class="how-work-item-thumb theme-one">
                                            <i class="las la-atlas"></i>
                                        </div>
                                        <div class="how-work-item-content">
                                            <h4 class="title"><a href="#"> Start a Company </a></h4>
                                            <p> Prepare for investment and growth with easy incorporation and legal
                                                tools. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="how-work-item gradient-two">
                                        <div class="how-work-item-thumb theme-two">
                                            <i class="las la-hand-holding-usd"></i>
                                        </div>
                                        <div class="how-work-item-content">
                                            <h4 class="title"><a href="#"> Grow Your Startup </a>
                                            </h4>
                                            <p> Make your company more attractive to investors with personalized
                                                recommendations. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="how-work-item gradient-four">
                                <div class="how-work-item-thumb theme-four">
                                    <i class="las la-wallet"></i>
                                </div>
                                <div class="how-work-item-content">
                                    <h4 class="title"><a href="#"> Raise Capital </a></h4>
                                    <p> Discover your best sources for funding and find and apply for investment. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How it Works Section Ends Here -->


    <!-- Sponsor Section Starts Here -->

    <div class="sponsor-section wow fadeInUp">
        <div class="container">
            <div class="sponsor-slider">
                <?php


                $data = $link->rawQuery("select * from tb_business_registration");
                if ($link->count > 0) {
                    foreach ($data as $d) {
                ?>
                <div class="single-slide">
                    <div class="brand-item">
                        <img src="<?php echo $d['business_Logo'] ?>" alt="">
                    </div>
                </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Sponsor Section Ends Here -->


    <!-- Feature Section STarts Here -->
    <section class="feature-section padding-top">
        <div class="container">
            <div class="row align-items-center gy-5 ">
                <div class="col-lg-6 col-md-10 wow fadeInLeft d-none d-lg-block">
                    <div class="feature-thumb">
                        <img src="assets/images/feature/thumb.png" alt="feature">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <div class="feature-content">
                        <div class="section-header">

                            <h2 class="title">The world’s largest startup network.</h2>
                            <p>
                                With over 800,000 founders and 85,000 investment professionals on our platform, we’ll
                                connect you to the whole startup ecosystem. We understand what investors want to see
                                from a startup, and we can help you put your best foot forward.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section Ends Here -->

    <section class="feature-section padding-top">
        <div class="container">
            <div class="row align-items-center gy-5 ">

                <div class="col-lg-6 wow fadeInRight">
                    <div class="feature-content">
                        <div class="section-header">

                            <h2 class="title">Feedback and tools personalized to your journey.</h2>
                            <p>
                                With powerful performance benchmarks, tailored feedback, and clear next steps for your
                                startup, you’ll learn where to focus your efforts and find the tools you need to execute
                                right at your fingertips.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-10 wow fadeInLeft d-none d-lg-block">
                    <div class="feature-thumb">
                        <img src="assets/images/feature/thumb.png" alt="feature">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Section STarts Here -->
    <section class="feature-section padding-top">
        <div class="container">
            <div class="row align-items-center gy-5 ">
                <div class="col-lg-6 col-md-10 wow fadeInLeft d-none d-lg-block">
                    <div class="feature-thumb">
                        <img src="assets/images/feature/thumb.png" alt="feature">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <div class="feature-content">
                        <div class="section-header">

                            <h2 class="title">Designed to help you succeed</h2>
                            <p>
                                Our mission is to help founders win. Whether your next milestone is initially setting up
                                your company the right way or successfully closing a Series C, we are here to help you
                                hit it.


                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section Ends Here -->
    <!-- Plan Section Starts Here -->
    <section class="plan-section padding-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-header text-center">
                        <span class="subtitle wow fadeInUp">choose your plan</span>
                        <h2 class="title wow fadeInUp" data-wow-delay=".4s">All Package Plan
                        </h2>

                    </div>
                </div>
            </div>
            <div class="plan-wrapper row g-4">
                <?php

                $data = $link->rawQuery("select * from tb_package_details pd ,tb_packages p where pd.package_Id=p.package_Id");
                if ($link->count > 0) {
                    foreach ($data as $d) {
                ?>
                <div class="col-sm-6 col-lg-12">
                    <div class="plan-item wow fadeIn" data-wow-delay=".1s">
                        <div class="plan-inner-part">
                            <h2 class="plan-interest-percent"><?php echo $d['package_Name'] ?></h2>
                        </div>
                        <div class="plan-inner-part">
                            <ul class="plan-invest-limit">
                                <li>
                                    <i class="fas fa-check"></i>
                                    Price : <?php echo $d['package_Price'] ?> ₹
                                </li>

                            </ul>
                        </div>
                        <div class="plan-inner-part">
                            <h2 class="plan-invest-time"><?php echo $d['No_Of_Bids'] ?> <sub>Bid</sub></h2>
                        </div>

                    </div>
                </div>
                <?php
                    }
                }
                ?>



            </div>

        </div>
    </section>
    <!-- Plan Section Ends Here -->


    <!-- Counter Section Starts Here -->
    <section class="counter-section padding-top">
        <div class="container">
            <div class="row justif-content-center gy-5">
                <div class="col-lg-4 col-sm-6">
                    <div class="counter-wrapper">
                        <div class="counter-item">
                            <div class="counter-inner">

                                <span class="odometer title" data-odometer-final="350"></span>
                                <h2 class="counter-sign">+</h2>
                            </div>
                        </div>
                        <span class="info">Startups
                            Funded</span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="counter-wrapper">
                        <div class="counter-item">
                            <div class="counter-inner">

                                <span class="odometer title" data-odometer-final="117"></span>

                                <h2 class="counter-sign">M+</h2>
                            </div>
                        </div>
                        <span class="info">Invested on
                            Bus Nesster</span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="counter-wrapper">
                        <div class="counter-item">
                            <div class="counter-inner">

                                <span class="odometer title" data-odometer-final="30B"></span>
                                <h2 class="counter-sign">B+</h2>
                            </div>
                        </div>
                        <span class="info">Portfolio
                            Valuation</span>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Counter Section Ends Here -->


    <!-- Why Choose Us Section Starts Here -->

    <!-- Why Choose Us Section Ends Here -->


    <!-- Testimonial Section Starts Here -->
    <section class="testimonial-seciton padding-top pb-180 overflow-hidden">
        <div class="container">
            <div class="row gy-4 align-items-center justify-content-center">
                <div class="col-lg-5 d-none d-lg-block   slideInLeft">
                    <div class="testimonial-thumb">
                        <img src="assets/images/testimonial/thumb2.png" alt="testimonial">
                    </div>
                </div>
                <div class="col-lg-7 col-md-10">
                    <div class="testimonial-content">
                        <div class="section-header text-center">
                            <span class="subtitle wow fadeInUp">our happly client</span>
                            <h2 class="title wow fadeInUp" data-wow-delay=".5s">Discover Our Happy
                                Client Feedback</h2>
                        </div>

                        <div class="testimonial-slider-wrapper">

                            <div class="testimonial-img">
                                <div class="testimonial-img-slider">
                                    <?php

                                    $data = $link->rawQuery("select * from tb_testimonials");
                                    if ($link->count > 0) {
                                        foreach ($data as $d) {
                                    ?>
                                    <div class="img-item">
                                        <img src="backyard/<?php echo $d['testimonials_Photo'] ?>" alt="testimonial">
                                    </div>

                                    <?php
                                        }
                                    }
                                    ?>


                                </div>
                            </div>

                            <div class="testimonial-slider">
                                <?php

                                $data = $link->rawQuery("select * from tb_testimonials");
                                if ($link->count > 0) {
                                    foreach ($data as $d) {
                                ?>
                                <div class="content-item">
                                    <div class="quote-icon">
                                        <i class="las la-quote-left"></i>
                                    </div>

                                    <div class="content-inner">
                                        <p>
                                            <?php echo $d['testimonials_Review'] ?>
                                        </p>
                                        <h5 class="name"><?php echo $d['testimonials_Name']; ?></h5>
                                        <span class="designation"><?php echo $d['testimonials_Designation']; ?></span>
                                    </div>
                                </div>
                                <?php
                                    }
                                }
                                ?>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Testimonial Section Ends Here -->


    <!-- Help Section Starts Here -->

    <!-- Help Section Ends Here -->


    <!-- Affiliate Section Starts Here -->

    <!-- Affiliate Section Ends Here -->


    <!-- Blog Section Start Here -->
    <section class="blog-section padding-bottom overflow-hidden">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-7">
                    <div class="section-header text-center">
                        <span class="subtitle wow fadeInUp">Busi Nessster blog post</span>
                        <h2 class="title wow fadeInUp" data-wow-delay=".5s">Best Comunity Platform
                            for investment</h2>

                    </div>
                </div>
            </div>
            <div class="row justify-content-center gy-4">
                <?php

                $data = $link->rawQuery("select * from tb_blog order by blog_Id desc LIMIT 3");
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
    </section>
    <!-- Blog Section Ends Here -->


    <!-- Payment Gateway Section Starts Here -->

    <!-- Payment Gateway Section Ends Here -->


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