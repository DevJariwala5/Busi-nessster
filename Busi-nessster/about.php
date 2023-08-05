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

    <title><?php echo $project_name; ?> | About</title>

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
    <section class="inner-banner bg_img padding-bottom"
        style="background: url(assets/images/about/bg.png) no-repeat right bottom;">
        <div class="container">
            <div class="inner-banner-wrapper">
                <div class="inner-banner-content">
                    <h2 class="inner-banner-title">About our company</h2>
                    <ul class="breadcums">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <span>About</span>
                        </li>
                    </ul>
                </div>
                <div class="inner-banner-thumb about d-none d-md-block">
                    <img src="assets/images/about/thumb2.png" alt="about">
                </div>
            </div>
        </div>
        <div class="shape1">
            <img src="assets/images/about/balls.png" alt="about">
        </div>
    </section>
    <!-- Banner Section Ends Here -->


    <!-- Why Choose Us Section Starts Here -->
    <section class="choose-us padding-bottom padding-top overflow-hidden">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-5  d-none d-lg-block">
                    <div class="choose-us-thumb two">
                        <img src="assets/images/choose-us/thumb2.png" alt="choose-us">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="choose-us-right-content">
                        <div class="section-header">

                            <h2 class="title mx-100">About Busi Nessster</h2>
                            <p class=" fadeInUp" data--delay=".6s">
                                Busi Nessster is a community of entrepreneurs, startups, and everything ambitious, We
                                act as
                                a bridge linking your dreams and reality. Our aim is to procure and provide resources
                                that assist you and your startup to thrive. We collaborate with prominent personalities
                                in the field to bring you an exclusive insight into the world of entrepreneurship. From
                                past data to future foresight, everything is just a click away.


                            </p>

                        </div>
                        <div class="row g-4 row2">
                            <div class="col-xl-6 col-lg-12 col-md-6  slideInUp" data--delay=".3s">
                                <div class="choose-item-two">
                                    <div class="choose-thumb-two">
                                        <img src="assets/images/choose-us/reimbursement.png" alt="choose-us">
                                    </div>
                                    <div class="choose-content-two">
                                        <h5 class="title">Vision</h5>
                                        <p> Our vision is to create a resource-filled community of entrepreneurs and
                                            expedite their growth.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-6 col-lg-12 col-md-6  slideInUp" data--delay=".6s">
                                <div class="choose-item-two">
                                    <div class="choose-thumb-two">
                                        <img src="assets/images/choose-us/shield.png" alt="choose-us">
                                    </div>
                                    <div class="choose-content-two">
                                        <h5 class="title">Mission </h5>
                                        <p>In order to achieve our vision we are building an ecosystem where
                                            entrepreneurs have an access to inculcate the best fit resources for their
                                            business.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose Us Section Ends Here -->


    <!-- Investor Section Starts Here -->
    <section class="investor-section padding-top padding-bottom overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-header text-center">
                        <span class="subtitle  fadeInUp">featured investors</span>
                        <h2 class="title  fadeInUp" data--delay=".5s">our top investor</h2>
                        <p class=" fadeInUp" data--delay=".6s">
                            Pipsum dolor sit amet consectetur adipisicing elit. Aliquam modi explicabo nam ex unde et
                            dolorum non dolor! Dolorum nobis
                        </p>
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





    <!-- Testimonial Two Section Starts Here -->
    <section class="testimonial-section-two padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-header text-center">
                        <span class="subtitle  fadeInUp">client feedback</span>
                        <h2 class="title  mx-100">Happy Client What Say About Us</h2>
                        <p class=" fadeInUp" data--delay=".6s">
                            Pipsum dolor sit amet consectetur adipisicing elit. Aliquam modi explicabo nam ex unde et
                            dolorum non dolor! Dolorum nobis
                        </p>
                    </div>
                </div>
            </div>

            <div class="testimonial-slider-two">
                <?php

                $data = $link->rawQuery("select * from tb_testimonials");
                if ($link->count > 0) {
                    foreach ($data as $d) {
                ?>
                <div class="single-slider">
                    <div class="testimonial-item-two">
                        <div class="testimonial-thumb-two">
                            <img src="backyard/<?php echo $d['testimonials_Photo']; ?> " alt="investor"></a>
                        </div>
                        <div class="testimonial-content-two">
                            <div class="quote-icon">
                                <i class="las la-quote-left"></i>
                            </div>
                            <h4 class="name"><?php echo $d['testimonials_Name']; ?></h4>
                            <span class="designation"><?php echo $d['testimonials_Designation']; ?></span>
                            <p><?php echo $d['testimonials_Review']; ?></p>
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
    <!-- Testimonial Two Section Ends Here -->



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