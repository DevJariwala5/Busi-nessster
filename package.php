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

    <title><?php echo $project_name; ?> | Packages</title>

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

    <?php

    $email = $_SESSION['investor-username'];

    $data = $link->rawQueryOne("select * from tb_investor_registration where investor_Email_Id=? ", array($email));


    ?>

    <!-- Banner Section Starts Here -->
    <section class="inner-banner bg_img padding-bottom"
        style="background: url(assets/images/about/bg.png) no-repeat right bottom;">
        <div class="container">
            <div class="inner-banner-wrapper">
                <div class="inner-banner-content">
                    <h2 class="inner-banner-title"><?php echo $data['investor_Name'] ?>'s Dashboard</h2>
                    <ul class="breadcums">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <span>Dashboard</span>
                        </li>
                    </ul>
                </div>
                <div class="inner-banner-thumb about d-none d-md-block">
                    <img src="assets/images/dashboard/thumb.png" alt="about">
                </div>
            </div>
        </div>
        <div class="shape1 paroller" data-paroller-factor=".2">
            <img src="assets/images/about/balls.png" alt="about">
        </div>
    </section>
    <!-- Banner Section Ends Here -->


    <!-- User Dashboard Section Starts Here -->

    <section class="user-dashboard padding-top padding-bottom">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-3">
                    <div class="dashboard-sidebar">
                        <div class="close-dashboard d-lg-none">
                            <i class="las la-times"></i>
                        </div>

                        <div class="dashboard-user">
                            <div class="user-thumb">
                                <img src="<?php echo $data['investor_Photo']; ?>" alt="dashboard">
                            </div>
                            <div class="user-content">
                                <span>Welcome</span>
                                <h5 class="name"><?php echo $data['investor_Name']; ?></h5>

                                <ul class="user-option">

                                    <li>
                                        <a href="investor-update1.php?investor_Id=<?php echo $data['investor_Id']; ?>">
                                            <i class="las la-pen"></i>
                                        </a>
                                    </li>

                                </ul>


                            </div>
                        </div>
                        <input type="hidden" name="investor_Id" value="<?php echo $data['investor_Id'] ?>">

                        <ul class="user-dashboard-tab">
                            <li>
                                <a href="profile-dashboard.php" class="">Account Overview</a>
                            </li>
                            <li>
                                <a href="investor-bids.php" class="">All Your Bids</a>
                            </li>
                            <li>
                                <a href="package.php" class="active">Packages</a>
                            </li>
                            <li>
                                <a href="remain-bids.php" class="">Remaining Bids</a>
                            </li>
                            <li>
                                <a href="business-logout.php" class="">Sign Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php
                include('profile-investor-top.php');
                ?>
                <div class="dashborad-header">


                    <section class="plan-sectionpadding-bottom overflow-hidden">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <div class="section-header text-center mb-70">
                                        <span class="subtitle  fadeInUp">choose your plan</span>
                                        <h2 class="title">our Package plan</h2>

                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="investor_Id" value="<?php echo $data['investor_Id'] ?>">
                            <div class="row gy-4 justify-content-center">

                                <?php
                                $investor_Id = $_SESSION['investor_Id'];
                                $data2 = $link->rawQueryOne("select * from tb_investor_registration ir where ir.investor_Id='$investor_Id'");
                                $data3 = $link->rawQuery("select * from tb_package_details pd ,tb_packages p where pd.package_Id=p.package_Id");
                                if ($link->count > 0) {
                                    foreach ($data3 as $d) {
                                ?>

                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 slideInUp">


                                    <div class="plan-item-three">
                                        <div class="left-content">
                                            <h2 class="title"><?php echo $d['package_Name'] ?></h2>

                                        </div>
                                        <div class="right-content">
                                            <ul class="plan-info">
                                                <li><span class="info">Package Price</span><span
                                                        class="result">₹<?php echo $d['package_Price'] ?></span>
                                                </li>
                                                <li><span class="info">No Of Bids</span><span
                                                        class="result"><?php echo $d['No_Of_Bids'] ?></span></li>

                                        </div>
                                        <div class="plan-hover">
                                            <div class="left-content">
                                                <h2 class="title"><?php echo $d['package_Name'] ?></h2>
                                                <h5 class="subtitle">₹<?php echo $d['package_Price'] ?></h5>
                                            </div>
                                            <div class="right-content">
                                                <?php
                                                        if ($data2['package_Id'] == $d['package_Id']) {
                                                        ?>
                                                <a class="invest-button">Already Purchased</a>
                                                <?php
                                                        } else {
                                                            if ($data2['package_Id'] != 0) {
                                                            ?>
                                                <a href="payment-process.php?package_Id=<?php echo $d['package_Id'] ?>&amount=<?php echo $d['package_Price']; ?>"
                                                    class="invest-button">Upgrade</a>
                                                <?php
                                                            } else {
                                                            ?>
                                                <a href="payment-process.php?package_Id=<?php echo $d['package_Id'] ?>&amount=<?php echo $d['package_Price']; ?>"
                                                    class="invest-button">Buy</a>
                                                <?php
                                                            }

                                                            ?>

                                                <?php
                                                        }
                                                        ?>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <?php
                                    }
                                }
                                if ($data2['package_Id'] != 0) {
                                    $data_package = $link->rawQueryone("select * from tb_package_details pd ,tb_packages p where pd.package_Id=p.package_Id and p.package_Id=?", array($data2['package_Id']));

                                    ?>
                                <h2 class="title">Your Package plan</h2>

                                <?php
                                    if ($link->count > 0) {

                                    ?>

                                <div class="col-sm-6 col-md-10 col-xl-12  slideInUp">
                                    <div class="plan-item-two">
                                        <div class="left-content">
                                            <h2 class="title"><?php echo $data_package['package_Name'] ?></h2>

                                        </div>
                                        <div class="right-content">
                                            <ul class="plan-info">
                                                <li><span class="info">Package Price</span><span
                                                        class="result">₹<?php echo $data_package['package_Price'] ?></span>
                                                </li>
                                                <li><span class="info">No Of Bids</span><span
                                                        class="result"><?php echo $data_package['No_Of_Bids'] ?></span>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="plan-hover">
                                            <div class="left-content">
                                                <h2 class="title"><?php echo $data_package['package_Name'] ?></h2>
                                                <h5 class="subtitle">₹<?php echo $data_package['package_Price'] ?></h5>
                                            </div>
                                            <div class="right-content">
                                                <a href="package-cancel.php?package_Id=<?php echo $data_package['package_Id'] ?>"
                                                    class="invest-button"
                                                    style=" background: red;color: white;">Cancel</a>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <?php
                                    }

                                    ?>
                                <?php
                                }
                                ?>


                            </div>
                    </section>
                </div>

            </div>
        </div>
        </div>
    </section>

    <!-- User Dashboard Section Ends Here -->





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