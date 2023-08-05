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

    <title><?php echo $project_name; ?></title>

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
                <div class="inner-banner-content mx-650">
                    <h2 class="inner-banner-title mx-650">frequently asked questions</h2>
                    <ul class="breadcums">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <span>Faq</span>
                        </li>
                    </ul>
                </div>
                <div class="inner-banner-thumb about2 d-none d-md-block">
                    <img src="assets/images/faq/thumb2.png" alt="about">
                </div>
            </div>
        </div>
        <div class="shape1 paroller" data-paroller-factor=".4" data-paroller-direction="horizontal">
            <img src="assets/images/about/balls.png" alt="about">
        </div>
    </section>
    <!-- Banner Section Ends Here -->


    <!-- Help Section Starts Here -->
    <section class="help-section padding-top padding-bottom">
        <div class="container">
            <div class="help-content">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-header text-center">
                            <span class="subtitle  fadeInUp">frequently asked questions</span>
                            <h2 class="title mx-100">have many question about us</h2>
                            <p class=" fadeInUp" data--delay=".6s">
                                Dapibus et amet sociis, arcu orci orci tincidunt neque. Purus etortor sjustmauris
                                eumalesuada architecto.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq-tab-menu nav-tabs nav border-0 row g-4 justify-content-center">
                    <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-2  fadeInUp" data--delay=".1s">
                        <a href="#investor" class="item active" data-bs-toggle="tab">
                            <div class="thumb">
                                <img src="assets/images/help/trading.png" alt="">
                            </div>
                            <h5>Become an investor</h5>
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-2  fadeInUp" data--delay=".2s">
                        <a href="#privacy" class="item" data-bs-toggle="tab">
                            <div class="thumb">
                                <img src="assets/images/help/password.png" alt="">
                            </div>
                            <h5>our company privacy</h5>
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-2  fadeInUp" data--delay=".3s">
                        <a href="#account" class="item" data-bs-toggle="tab">
                            <div class="thumb">
                                <img src="assets/images/help/support.png" alt="">
                            </div>
                            <h5>how setting account</h5>
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-2  fadeInUp" data--delay=".4s">
                        <a href="#account" class="item" data-bs-toggle="tab">
                            <div class="thumb">
                                <img src="assets/images/help/support.png" alt="">
                            </div>
                            <h5>how setting account</h5>
                        </a>
                    </div>
                </div>
                <div class="tab-content  fadeInUp">
                    <div class="tab-pane show fade active" id="investor">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="faq-wrapper">
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h5 class="title">Why You Should Become An Investor?</h5>
                                            <div class="arrow">
                                                <i class="fas fa-angle-up"></i>
                                            </div>
                                        </div>
                                        <div class="faq-content">
                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis
                                                distinctio quas at, voluptates saepe asperiores nesciunt nulla dolor
                                                dolore alias! Saepe laboriosam aliquid, ullam nihil nostrum quibusdam
                                                iste expedita inventore?
                                            </p>
                                        </div>
                                    </div>
                                    <div class="faq-item open active">
                                        <div class="faq-title">
                                            <h5 class="title">Can I Invest Using Cryptocurrency?</h5>
                                            <div class="arrow">
                                                <i class="fas fa-angle-up"></i>
                                            </div>
                                        </div>
                                        <div class="faq-content">
                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis
                                                distinctio quas at, voluptates saepe asperiores nesciunt nulla dolor
                                                dolore alias! Saepe laboriosam aliquid, ullam nihil nostrum quibusdam
                                                iste expedita inventore?
                                            </p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h5 class="title">Why You Choose Us?</h5>
                                            <div class="arrow">
                                                <i class="fas fa-angle-up"></i>
                                            </div>
                                        </div>
                                        <div class="faq-content">
                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis
                                                distinctio quas at, voluptates saepe asperiores nesciunt nulla dolor
                                                dolore alias! Saepe laboriosam aliquid, ullam nihil nostrum quibusdam
                                                iste expedita inventore?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="faq-wrapper">
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h5 class="title">Why You Should Become An Investor?</h5>
                                            <div class="arrow">
                                                <i class="fas fa-angle-up"></i>
                                            </div>
                                        </div>
                                        <div class="faq-content">
                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis
                                                distinctio quas at, voluptates saepe asperiores nesciunt nulla dolor
                                                dolore alias! Saepe laboriosam aliquid, ullam nihil nostrum quibusdam
                                                iste expedita inventore?
                                            </p>
                                        </div>
                                    </div>
                                    <div class="faq-item open active">
                                        <div class="faq-title">
                                            <h5 class="title">Can I Invest Using Cryptocurrency?</h5>
                                            <div class="arrow">
                                                <i class="fas fa-angle-up"></i>
                                            </div>
                                        </div>
                                        <div class="faq-content">
                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis
                                                distinctio quas at, voluptates saepe asperiores nesciunt nulla dolor
                                                dolore alias! Saepe laboriosam aliquid, ullam nihil nostrum quibusdam
                                                iste expedita inventore?
                                            </p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h5 class="title">Why You Choose Us?</h5>
                                            <div class="arrow">
                                                <i class="fas fa-angle-up"></i>
                                            </div>
                                        </div>
                                        <div class="faq-content">
                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis
                                                distinctio quas at, voluptates saepe asperiores nesciunt nulla dolor
                                                dolore alias! Saepe laboriosam aliquid, ullam nihil nostrum quibusdam
                                                iste expedita inventore?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane show fade" id="privacy">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="faq-wrapper">
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h5 class="title">Frequently gets updated based on new data insights.</h5>
                                            <div class="arrow">
                                                <i class="fas fa-angle-up"></i>
                                            </div>
                                        </div>
                                        <div class="faq-content">
                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis
                                                distinctio quas at, voluptates saepe asperiores nesciunt nulla dolor
                                                dolore alias! Saepe laboriosam aliquid, ullam nihil nostrum quibusdam
                                                iste expedita inventore?
                                            </p>
                                        </div>
                                    </div>
                                    <div class="faq-item open active">
                                        <div class="faq-title">
                                            <h5 class="title">Drives internal pageviews to.</h5>
                                            <div class="arrow">
                                                <i class="fas fa-angle-up"></i>
                                            </div>
                                        </div>
                                        <div class="faq-content">
                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis
                                                distinctio quas at, voluptates saepe asperiores nesciunt nulla dolor
                                                dolore alias! Saepe laboriosam aliquid, ullam nihil nostrum quibusdam
                                                iste expedita inventore?
                                            </p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h5 class="title">Showcases expertise, trust, and authority.</h5>
                                            <div class="arrow">
                                                <i class="fas fa-angle-up"></i>
                                            </div>
                                        </div>
                                        <div class="faq-content">
                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis
                                                distinctio quas at, voluptates saepe asperiores nesciunt nulla dolor
                                                dolore alias! Saepe laboriosam aliquid, ullam nihil nostrum quibusdam
                                                iste expedita inventore?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="faq-wrapper">
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h5 class="title">Frequently gets updated based on new data insights.</h5>
                                            <div class="arrow">
                                                <i class="fas fa-angle-up"></i>
                                            </div>
                                        </div>
                                        <div class="faq-content">
                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis
                                                distinctio quas at, voluptates saepe asperiores nesciunt nulla dolor
                                                dolore alias! Saepe laboriosam aliquid, ullam nihil nostrum quibusdam
                                                iste expedita inventore?
                                            </p>
                                        </div>
                                    </div>
                                    <div class="faq-item open active">
                                        <div class="faq-title">
                                            <h5 class="title">Drives internal pageviews to.</h5>
                                            <div class="arrow">
                                                <i class="fas fa-angle-up"></i>
                                            </div>
                                        </div>
                                        <div class="faq-content">
                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis
                                                distinctio quas at, voluptates saepe asperiores nesciunt nulla dolor
                                                dolore alias! Saepe laboriosam aliquid, ullam nihil nostrum quibusdam
                                                iste expedita inventore?
                                            </p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h5 class="title">Showcases expertise, trust, and authority.</h5>
                                            <div class="arrow">
                                                <i class="fas fa-angle-up"></i>
                                            </div>
                                        </div>
                                        <div class="faq-content">
                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis
                                                distinctio quas at, voluptates saepe asperiores nesciunt nulla dolor
                                                dolore alias! Saepe laboriosam aliquid, ullam nihil nostrum quibusdam
                                                iste expedita inventore?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane show fade" id="account">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="faq-wrapper">
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h5 class="title">Frequently gets updated based on new data insights.</h5>
                                            <div class="arrow">
                                                <i class="fas fa-angle-up"></i>
                                            </div>
                                        </div>
                                        <div class="faq-content">
                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis
                                                distinctio quas at, voluptates saepe asperiores nesciunt nulla dolor
                                                dolore alias! Saepe laboriosam aliquid, ullam nihil nostrum quibusdam
                                                iste expedita inventore?
                                            </p>
                                        </div>
                                    </div>
                                    <div class="faq-item open active">
                                        <div class="faq-title">
                                            <h5 class="title">Drives internal pageviews to.</h5>
                                            <div class="arrow">
                                                <i class="fas fa-angle-up"></i>
                                            </div>
                                        </div>
                                        <div class="faq-content">
                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis
                                                distinctio quas at, voluptates saepe asperiores nesciunt nulla dolor
                                                dolore alias! Saepe laboriosam aliquid, ullam nihil nostrum quibusdam
                                                iste expedita inventore?
                                            </p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h5 class="title">Showcases expertise, trust, and authority.</h5>
                                            <div class="arrow">
                                                <i class="fas fa-angle-up"></i>
                                            </div>
                                        </div>
                                        <div class="faq-content">
                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis
                                                distinctio quas at, voluptates saepe asperiores nesciunt nulla dolor
                                                dolore alias! Saepe laboriosam aliquid, ullam nihil nostrum quibusdam
                                                iste expedita inventore?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="faq-wrapper">
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h5 class="title">Frequently gets updated based on new data insights.</h5>
                                            <div class="arrow">
                                                <i class="fas fa-angle-up"></i>
                                            </div>
                                        </div>
                                        <div class="faq-content">
                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis
                                                distinctio quas at, voluptates saepe asperiores nesciunt nulla dolor
                                                dolore alias! Saepe laboriosam aliquid, ullam nihil nostrum quibusdam
                                                iste expedita inventore?
                                            </p>
                                        </div>
                                    </div>
                                    <div class="faq-item open active">
                                        <div class="faq-title">
                                            <h5 class="title">Drives internal pageviews to.</h5>
                                            <div class="arrow">
                                                <i class="fas fa-angle-up"></i>
                                            </div>
                                        </div>
                                        <div class="faq-content">
                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis
                                                distinctio quas at, voluptates saepe asperiores nesciunt nulla dolor
                                                dolore alias! Saepe laboriosam aliquid, ullam nihil nostrum quibusdam
                                                iste expedita inventore?
                                            </p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h5 class="title">Showcases expertise, trust, and authority.</h5>
                                            <div class="arrow">
                                                <i class="fas fa-angle-up"></i>
                                            </div>
                                        </div>
                                        <div class="faq-content">
                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis
                                                distinctio quas at, voluptates saepe asperiores nesciunt nulla dolor
                                                dolore alias! Saepe laboriosam aliquid, ullam nihil nostrum quibusdam
                                                iste expedita inventore?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Help Section Ends Here -->


    <!-- Affiliate Commission Section Stats Here -->
    <section class="commission-section bg_img"
        style="background: url(assets/images/affiliate/bg.jpg) no-repeat center;">
        <div class="container">
            <div class="commission-wrapper">
                <div class="commission-thumb d-none d-lg-block">
                    <img src="assets/images/commission/thumb.png" alt="commission">
                </div>
                <div class="commission-content">
                    <h2 class="title">30% <br>
                        <span>Affiliate Commission</span>
                    </h2>
                    <p>
                        Phasellus a non dui hymenaeos mi ideu non ut lacus, nec erat consequataceuaugueid augue gravida
                        consequat Magna erat nuncsit.
                    </p>
                    <a href="affiliate.html" class="cmn--btn">View Details</a>
                    <div class="shape1">
                        <img src="assets/images/commission/shape1.png" alt="commission">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Affiliate Commission Section Ends Here -->


    <!-- Testimonial Two Section Starts Here -->
    <section class="testimonial-section-two padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-header text-center">
                        <span class="subtitle  fadeInUp">client feedback</span>
                        <h2 class="title  fadeInUp" data--delay=".5s">Happy Client What Say About Us</h2>
                        <p class=" fadeInUp" data--delay=".6s">
                            Pipsum dolor sit amet consectetur adipisicing elit. Aliquam modi explicabo nam ex unde et
                            dolorum non dolor! Dolorum nobis
                        </p>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider-two">
                <div class="single-slider">
                    <div class="testimonial-item-two">
                        <div class="testimonial-thumb-two">
                            <img src="assets/images/testimonial/item2.png" alt="">
                        </div>
                        <div class="testimonial-content-two">
                            <div class="quote-icon">
                                <i class="las la-quote-left"></i>
                            </div>
                            <h4 class="name">Robindronat</h4>
                            <span class="designation">Hyip Investor</span>
                            <p>Placerat pellentesque eros elit lobortis eleifend amet vivamus integer sed tellus
                                quibusdam mauris. Leo cras molestie.</p>
                        </div>
                    </div>
                </div>
                <div class="single-slider">
                    <div class="testimonial-item-two">
                        <div class="testimonial-thumb-two">
                            <img src="assets/images/testimonial/item4.png" alt="">
                        </div>
                        <div class="testimonial-content-two">
                            <div class="quote-icon">
                                <i class="las la-quote-left"></i>
                            </div>
                            <h4 class="name">Robindronat</h4>
                            <span class="designation">Hyip Investor</span>
                            <p>Placerat pellentesque eros elit lobortis eleifend amet vivamus integer sed tellus
                                quibusdam mauris. Leo cras molestie.</p>
                        </div>
                    </div>
                </div>
                <div class="single-slider">
                    <div class="testimonial-item-two">
                        <div class="testimonial-thumb-two">
                            <img src="assets/images/testimonial/item3.png" alt="">
                        </div>
                        <div class="testimonial-content-two">
                            <div class="quote-icon">
                                <i class="las la-quote-left"></i>
                            </div>
                            <h4 class="name">Robindronat</h4>
                            <span class="designation">Hyip Investor</span>
                            <p>Placerat pellentesque eros elit lobortis eleifend amet vivamus integer sed tellus
                                quibusdam mauris. Leo cras molestie.</p>
                        </div>
                    </div>
                </div>
                <div class="single-slider">
                    <div class="testimonial-item-two">
                        <div class="testimonial-thumb-two">
                            <img src="assets/images/testimonial/item4.png" alt="">
                        </div>
                        <div class="testimonial-content-two">
                            <div class="quote-icon">
                                <i class="las la-quote-left"></i>
                            </div>
                            <h4 class="name">Robindronat</h4>
                            <span class="designation">Hyip Investor</span>
                            <p>Placerat pellentesque eros elit lobortis eleifend amet vivamus integer sed tellus
                                quibusdam mauris. Leo cras molestie.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Two Section Ends Here -->


    <!-- Payment Gateway Section Starts Here -->
    <section class="payment-gateway padding-bottom">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-5">
                    <div class="section-header">
                        <h2 class="title  fadeInUp" data--delay=".5s">Choose Yor Payment
                            Gateway</h2>
                        <p class=" fadeInUp" data--delay=".6s">
                            Risus et ut arcu sem nulla. Sit lacus lorem, sed turpis erat rhoncus nibh. Lacinia mauris
                            vel, nibh sociis praesent aliquam proin, sit ut nec ultrices, odio lacus
                        </p>
                    </div>
                </div>
                <div class="col-lg-7  fadeInRight">
                    <div class="payment-gateway-slider">
                        <div class="sigle-slider">
                            <div class="gateway-item">
                                <img src="assets/images/gateway/icon1.png" alt="gateway">
                                <span class="coin-name">Bitcoin</span>
                            </div>
                        </div>
                        <div class="sigle-slider">
                            <div class="gateway-item">
                                <img src="assets/images/gateway/icon2.png" alt="gateway">
                                <span class="coin-name">Bitcoin</span>
                            </div>
                        </div>
                        <div class="sigle-slider">
                            <div class="gateway-item">
                                <img src="assets/images/gateway/icon3.png" alt="gateway">
                                <span class="coin-name">Ethereum</span>
                            </div>
                        </div>
                        <div class="sigle-slider">
                            <div class="gateway-item">
                                <img src="assets/images/gateway/icon4.png" alt="gateway">
                                <span class="coin-name">Ripple</span>
                            </div>
                        </div>
                        <div class="sigle-slider">
                            <div class="gateway-item">
                                <img src="assets/images/gateway/icon2.png" alt="gateway">
                                <span class="coin-name">Ethereum</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Payment Gateway Section Ends Here -->


    <!-- Profit Calculation Section Starts Here -->
    <section class="profit-calculation wow slideInUp overflow-hidden">
        <div class="container">
            <div class="profit-calculation-wrapper">
                <h3 class="title">Calculate How Much You Profit</h3>
                <form class="profit-form">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6">
                            <div class="form--group">
                                <select>
                                    <option value="plan01">Select the Plan</option>
                                    <option value="plan01">Business Plan</option>
                                    <option value="plan01">Professional Plan</option>
                                    <option value="plan01">Individual Plan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form--group">
                                <select>
                                    <option value="plan01">Select the Currency</option>
                                    <option value="plan01">Bitcoin</option>
                                    <option value="plan01">Ethereum</option>
                                    <option value="plan01">Ripple</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form--group">
                                <input type="text" class="form--control" placeholder="Enter the Ammount" required>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="profit-title-wrapper d-flex justify-content-between my-5 mb-3">
                    <h5 class="daily-profit text--secondary">Daily Profit - <span class="ammount">0.1200</span>BTC</h5>
                    <h5 class="daily-profit theme-four">Total Profit - <span class="ammount">24.1200</span>BTC</h5>
                </div>
                <div class="invest-range-area">
                    <div class="main-amount">
                        <input type="text" class="calculator-invest" id="btc-amount" readonly>
                    </div>
                    <div class="invest-amount" data-min="01 BTC" data-max="10000 BTC">
                        <div id="btc-range" class="invest-range-slider"></div>
                    </div>
                    <button type="submit" class="custom-button px-0">Invest now</button>
                </div>
            </div>
        </div>
    </section>
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