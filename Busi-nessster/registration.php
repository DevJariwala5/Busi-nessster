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

    <title><?php echo $project_name; ?> | Registration now</title>


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
                    <h2 class="inner-banner-title">Create your
                        account</h2>
                    <ul class="breadcums">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <span>Registration</span>
                        </li>
                    </ul>
                </div>
                <div class="inner-banner-thumb about d-none d-md-block">
                    <img src="assets/images/account/thumb.png" alt="account">
                </div>
            </div>
        </div>
        <div class="shape1">
            <img src="assets/images/about/balls.png" alt="about">
        </div>
    </section>
    <!-- Banner Section Ends Here -->


    <!-- Account Section Starts Here -->
    <section class="account-section">
        <div class="container">
            <div class="row align-items-center gy-5">

                <div class="col-lg-12">
                    <div class="account-wrapper">
                        <h2 class="title">Create Your Account</h2>



                    </div>
                </div>
            </div>
        </div>


    </section>
    <section class="how-work padding-top">
        <div class="container">
            <div class="row justif-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="how-work-left-content">
                        <div class="section-header wow fadeInUp">
                            <span class="subtitle">How to Do It</span>
                            <h2 class="title">try easy 3 steps to Register as Business or Startup</h2>
                            <p>FundersClub is focused on discovering, funding, and supporting the world’s most promising
                                startups. Fewer than 2% of the startups we review are made available for investment on
                                Busi Nessster.</p>
                        </div>

                        <a href="business-registration.php" class="cmn--btn">Register as Business</a>
                        <a href="business-login.php" class="cmn--btn">Log in</a>

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
                                            <h4 class="title"><a href="#">Quick Registration</a></h4>
                                            <p>Make easy Registration on Investor</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="how-work-item gradient-two">
                                        <div class="how-work-item-thumb theme-two">
                                            <i class="las la-hand-holding-usd"></i>
                                        </div>
                                        <div class="how-work-item-content">
                                            <h4 class="title"><a href="#">Business Listing</a>
                                            </h4>
                                            <p>You can add All details On business</p>
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
                                    <h4 class="title"><a href="#">Get Your Profit</a></h4>
                                    <p>Take Best Profit On Business with Busi Nesster</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="how-work padding-top padding-bottom">
        <div class="container">
            <div class="row justif-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="how-work-left-content">
                        <div class="row align-items-center gy-4">
                            <div class="col-md-6 col-sm-6">
                                <div class="row gy-4">
                                    <div class="col-12 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="how-work-item">
                                            <div class="how-work-item-thumb theme-one">
                                                <i class="las la-atlas"></i>
                                            </div>
                                            <div class="how-work-item-content">
                                                <h4 class="title"><a href="#">Quick Registration</a></h4>
                                                <p>Make easy Registration on Investor</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="how-work-item gradient-two">
                                            <div class="how-work-item-thumb theme-two">
                                                <i class="las la-hand-holding-usd"></i>
                                            </div>
                                            <div class="how-work-item-content">
                                                <h4 class="title"><a href="#">Make An Invest</a>
                                                </h4>
                                                <p>Make Your Best deals On Busi Nessster</p>
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
                                        <h4 class="title"><a href="#">Package</a></h4>
                                        <p>Select Your Best Package on Busi Nessster </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header wow fadeInUp">
                        <span class="subtitle">How to Do It</span>
                        <h2 class="title">try easy 3 steps to invest</h2>
                        <p>Diversify your investment portfolio with insider access to highly vetted startups from
                            Silicon Valley and beyond in just minutes..</p>
                    </div>
                    <a href="investor-registration1.php" class="cmn--btn">Register as Investor</a>
                    <a href="investor-login.php" class="cmn--btn">Log in</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Account Section Ends Here -->


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