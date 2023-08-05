<?php
ob_start();
?>
<?php
session_start();
include('connect.php');
$category_Id = $_REQUEST['category_Id'];
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
    <style>
    .justify-content-center {
        justify-content: left !important;
    }
    </style>
    <style>
    .post-title {
        font-size: 18px;
    }

    .post-content .meta-post li i {
        font-size: 18px;
        margin-right: 5px;
        color: #777;
    }
    </style>
    <title><?php echo $project_name; ?> | Business Category</title>
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
                    <h2 class="inner-banner-title"> Our Business Or Startups</h2>
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
                        $data = $link->rawQuery("select * from tb_business_registration tbb,tb_business_category tbc where tbb.category_Id=tbc.category_Id and tbb.category_Id=?", array($category_Id));
                        if ($link->count > 0) {
                            foreach ($data as $d) {

                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-10  slideInUp" data--delay=".3s">
                            <div class="post-item">
                                <div class="post-thumb">
                                    <a href="business-details.php?business_Id=<?php echo $d['business_Id']; ?>">
                                        <img src="<?php echo $d['business_Logo']; ?>" alt="blog">
                                    </a>
                                </div>
                                <div class="post-content">
                                    <h4 class="post-title">
                                        <a
                                            href="business-details.php?business_Id=<?php echo $d['business_Id']; ?>"><?php echo $d['business_Name']; ?></a>
                                    </h4>
                                    <ul class="meta-post">
                                        <li>

                                            <i class="las la-tag">Current Revenue</i>
                                            <?php echo $d['current_Revenue']; ?>

                                        </li>

                                    </ul>


                                    <ul class="meta-post">
                                        <li style="display: block;width: 100%;">

                                            <i class="">Business Category:</i>
                                        </li>
                                        <li>
                                            <?php echo $d['category_Name']; ?>
                                        </li>

                                    </ul>
                                    <a href="business-details.php?business_Id=<?php echo $d['business_Id']; ?>"
                                        class="read-more-button">Read More...</a>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        } else {
                            ?>
                        <h4 style="color:#777;
    text-align: center;
    padding-top: 75px;">No Data Found</h4>
                        <?php
                        }
                        ?>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!--  Section Ends Here -->

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
                                <input type="text" class="form--control" placeholder="Enter the Ammount" required />
                            </div>
                        </div>
                    </div>
                </form>
                <div class="profit-title-wrapper d-flex justify-content-between my-5 mb-3">
                    <h5 class="daily-profit text--secondary">
                        Daily Profit - <span class="ammount">0.1200</span>BTC
                    </h5>
                    <h5 class="daily-profit theme-four">
                        Total Profit - <span class="ammount">24.1200</span>BTC
                    </h5>
                </div>
                <div class="invest-range-area">
                    <div class="main-amount">
                        <input type="text" class="calculator-invest" id="btc-amount" readonly />
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