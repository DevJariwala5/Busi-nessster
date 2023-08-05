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

    <title><?php echo $project_name; ?> | All Bids</title>

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

                        <ul class="user-dashboard-tab">
                            <li>
                                <a href="profile-dashboard.php" class="">Account Overview</a>
                            </li>
                            <li>
                                <a href="investor-bids.php" class="active">All Your Bids</a>
                            </li>
                            <li>
                                <a href="package.php" class="">Packages</a>
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
                    <h4 class="title">All Approve Bids</h4>

                </div>
                <table class="deposit-table">
                    <thead>
                        <tr>
                            <th>Business Name</th>
                            <th>Business Email</th>
                            <th>Business Contact No</th>
                            <th>Amount</th>
                            <th>Equity</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $investor_Id = $data['investor_Id'];
                        $data = $link->rawQuery("select * from tb_bid b,tb_business_registration br,tb_business_category c where b.business_Id=br.business_Id and c.category_Id=br.category_Id  and  b.investor_Id='$investor_Id'");
                        if ($link->count > 0) {
                            foreach ($data as $d) {
                        ?>
                        <tr>

                            <td data-input="user">
                                <div class="user">
                                    <div class="thumb">
                                        <img src="<?php echo $d['business_Logo']; ?>" alt="deposit">
                                    </div>
                                    <div class="content">

                                        <span class="title"> <a
                                                href="business-details.php?business_Id=<?php echo $d['business_Id']; ?>"><?php echo $d['business_Name']; ?></a></span>
                                        <span class="info"><?php echo $d['category_Name']; ?></span>
                                    </div>
                                </div>
                            </td>
                            <td data-input="start date">
                                <div class="content">
                                    <span style="font-size: 14px;"><?php echo $d['business_Email_Id']; ?></span>
                                </div>
                            </td>
                            <td data-input="start date">
                                <div class="content">
                                    <span class="title"><?php echo $d['business_Contact_No']; ?></span>

                                </div>
                            </td>
                            <td data-input="rate">
                                <div class="content">
                                    <span class="title"><span>₹<?php echo $d['amount']; ?></span></span>

                                </div>
                            </td>
                            <td data-input="rate">
                                <div class="content">
                                    <span class="title"><span><?php echo $d['equity']; ?>%</span></span>

                                </div>
                            </td>
                        </tr>
                        <?php
                            }
                        }
                        ?>


                    </tbody>
                </table>
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