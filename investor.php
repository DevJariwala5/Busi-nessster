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

    <title><?php echo $project_name; ?> | Investor</title>

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
        style="background: url(assets/images/investor/bg.png) no-repeat center bottom;">
        <div class="container">
            <div class="inner-banner-wrapper">
                <div class="inner-banner-content">
                    <h2 class="inner-banner-title">our all investors</h2>
                    <ul class="breadcums">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <span>investor</span>
                        </li>
                    </ul>
                </div>
                <div class="inner-banner-thumb d-none d-md-block">
                    <img src="assets/images/investor/thumb.png" alt="about">
                </div>
            </div>
        </div>
        <div class="shape1 paroller" data-paroller-factor=".3" data-paroller-direction="horizontal">
            <img src="assets/images/investor/shape.png" alt="about">
        </div>
    </section>
    <!-- Banner Section Ends Here -->


    <!-- Investor Section Starts Here -->
    <section class="investor-section padding-top overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-header text-center">
                        <span class="subtitle  fadeInUp">featured investors</span>
                        <h2 class="title  fadeInUp" data--delay=".5s">our top investor</h2>

                    </div>
                </div>
            </div>
            <div class="row justify-content-center gy-5">

                <?php

                $data = $link->rawQuery("select *,SUM(amount) as iamout from tb_investor_registration i,tb_bid b where i.investor_Id=b.investor_Id and b.bid_Status group by b.investor_Id order by iamout desc");
                if ($link->count > 0) {
                    foreach ($data as $d) {
                ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6  slideInUp" data--delay=".3s">

                    <div class="investor-item">
                        <div class="investor-thumb">
                            <a href="investor-dashboard.php?investor_Id=<?php echo $d['investor_Id']; ?>"><img
                                    src="<?php echo $d['investor_Photo']; ?>" alt="investor"></a>
                        </div>
                        <div class="investor-content">

                            <h4 class="name"><?php echo $d['investor_Name']; ?></h4>

                            <span class="designation">Top Investor</span>
                            <h3 class="invest-ammount">₹ <?php echo $d['iamout']; ?></h3>
                        </div>
                    </div>

                </div>
                <?php
                    }
                }
                ?>
            </div>
    </section>

    <!-- Investor Section Ends Here -->


    <!-- Support Section Starts Here -->

    <!-- Support Section Ends Here -->


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


    <!-- Payment Gateway Section Starts Here -->

    <!-- Payment Gateway Section Ends Here -->





    <!-- Footer Section Starts Here -->
    <?php
    include('footer.php');
    ?>
    <!-- Footer Section Ends Here -->


    <a href="#0" class="scrollToTop active"><i class="las la-chevron-up"></i></a>
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
    </script>
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