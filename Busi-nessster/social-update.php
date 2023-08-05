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

    <title><?php echo $project_name; ?> | Social Media Edit</title>
    <script>
    function ck() {

        var s = true;

        document.getElementById("m1").innerHTML = "";
        document.getElementById("m2").innerHTML = "";

        var a = document.f1.business_Social_Media_Name.value;


        if (a == 0) {
            document.getElementById("m1").innerHTML = "Enter Social Media Name";
            s = false;
        }

        var b = document.f1.business_Social_Media_Link.value;


        if (b == 0) {
            document.getElementById("m2").innerHTML = "Enter Social Media Link";
            s = false;
        }


        return s;


    }
    </script>
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

    $email = $_SESSION['business-username'];

    $data = $link->rawQueryOne("select * from tb_business_registration where business_Email_Id=? ", array($email));


    ?>


    <!-- Banner Section Starts Here -->
    <section class="inner-banner bg_img padding-bottom"
        style="background: url(assets/images/about/bg.png) no-repeat right bottom;">
        <div class="container">
            <div class="inner-banner-wrapper">
                <div class="inner-banner-content">
                    <h2 class="inner-banner-title"><?php echo $data['business_Name'] ?>'s Dashboard</h2>
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
                                <img src="<?php echo $data['business_Logo'] ?>" alt="dashboard">
                            </div>
                            <div class="user-content">
                                <span>Welcome</span>
                                <h5 class="name"><?php echo $data['business_Name'] ?></h5>

                                <ul class="user-option">

                                    <li>
                                        <a href="business-update.php?business_Id=<?php echo $data['business_Id'] ?>">
                                            <i class="las la-pen"></i>
                                        </a>
                                    </li>

                                </ul>


                            </div>
                        </div>

                        <ul class="user-dashboard-tab">
                            <li>
                                <a href="profile-business-dashboard.php" class="">Account Overview</a>
                            </li>
                            <li>
                                <a href="profile-upload-document.php" class="">Upload Documents</a>
                            </li>
                            <li>
                                <a href="profile-desciption.php" class="">Add More Description</a>
                            </li>
                            <li>
                                <a href="profile-designation.php" class="">Add Designation</a>
                            </li>
                            <li>
                                <a href="profile-team.php" class="">Add Team Members</a>
                            </li>
                            <li>
                                <a href="profile-social.php" class="active">Add Social Media Links</a>
                            </li>


                            <li>
                                <a href="business-logout.php" class="">Sign Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php
                include('profile-business-top.php');
                ?>
                <?php
                $business_Social_Media_Id = $_REQUEST['business_Social_Media_Id'];


                $data = $link->rawQueryOne("select * from tb_business_social_media where business_Social_Media_Id=?", array($business_Social_Media_Id));
                if ($link->count == 0) {
                    echo "Data Not Found";
                }
                ?>
                <div class="contact-wrapper  fadeInUp" style="    margin: auto;
    margin-top: 50px; max-width: 961px;">
                    <h4 class="title">Add Social Media Links</h4>
                    <form class="contact-form" name="f1" method="post" action="social-update-insert.php"
                        onSubmit="return ck();" enctype="multipart/form-data">
                        <input type="hidden" name="business_Id" value="<?php echo $data['business_Id']; ?>">
                        <input type="hidden" name="business_Social_Media_Id"
                            value="<?php echo $data['business_Social_Media_Id']; ?>">
                        <div class="form--group">
                            <input type="text" class="form--control" placeholder="Social Media Name"
                                name="business_Social_Media_Name" id="business_Social_Media_Name"
                                value="<?php echo $data['business_Social_Media_Name']; ?>">
                            <td><span id="m1" style="color:red;"></span></td>
                        </div>
                        <div class="form--group">
                            <input type="text" class="form--control" placeholder="Social Media Link"
                                name="business_Social_Media_Link" id="business_Social_Media_Link"
                                value="<?php echo $data['business_Social_Media_Link']; ?>">
                            <td><span id="m2" style="color:red;"></span></td>
                        </div>

                        <div class="form--group">
                            <button class="custom-button" name="submit" type="submit">Submit</button>
                        </div>
                    </form>
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