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

    <title><?php echo $project_name; ?> | Investor Update </title>
    <script>
    function ck() {

        var s = true;

        document.getElementById("m1").innerHTML = "";
        document.getElementById("m2").innerHTML = "";
        document.getElementById("m3").innerHTML = "";
        document.getElementById("m4").innerHTML = "";
        document.getElementById("m5").innerHTML = "";
        document.getElementById("m6").innerHTML = "";



        var a = document.f1.investor_Business_Name.value;


        if (a == 0) {
            document.getElementById("m1").innerHTML = "Enter Business Name";
            s = false;
        }

        var l = document.f1.investor_Business_Description.value;


        if (l == 0) {
            document.getElementById("m2").innerHTML = "Enter the Business Description";
            s = false;
        }



        var k = document.f1.investor_Business_Website.value;

        if (k == 0) {
            document.getElementById("m3").innerHTML = "Enter your business website";
            s = false;
        }


        var m = document.f1.investor_Business_Valuation.value;


        if (m == 0) {
            document.getElementById("m4").innerHTML = "Enter busines valuation";
            s = false;
        }




        var n = document.f1.investor_Invested_Companies.value;


        if (n == 0) {
            document.getElementById("m5").innerHTML = "Enter Invested Comapnies";
            s = false;
        }



        var o = document.f1.investor_Total_Investment_Values.value;


        if (o == 0) {
            document.getElementById("m6").innerHTML = "Enter Total Investment Values";
            s = false;
        }




        return s;
    }
    </script>

</head>

<body>
    <!-- preloader -->


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
                    <h2 class="inner-banner-title">Update your
                        account</h2>
                    <ul class="breadcums">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <span>Update</span>
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
    <?php

    $investor_Id = $_REQUEST['investor_Id'];
    $data = $link->rawQueryOne("select * from tb_investor_registration where investor_Id=?", array($investor_Id));
    if ($link->count == 0) {
        echo "Data Not Found";
    }
    ?>

    <!-- Account Section Starts Here -->
    <section class="account-section padding-top padding-bottom">
        <div class="container">
            <div class="row align-items-center gy-5">

                <div class="col-lg-12">
                    <div class="account-wrapper">
                        <h2 class="title">Update Your Account</h2>
                        <form class="account-form" name="f1" method="post" onSubmit="return ck();"
                            action="investor-update-insert.php" enctype="multipart/form-data">


                            <input type="hidden" name="investor_Id" value="<?php echo $_REQUEST['investor_Id']; ?>">
                            <input type="hidden" name="investor_Name" value="<?php echo $_REQUEST['investor_Name']; ?>">
                            <input type="hidden" name="investor_Email_Id"
                                value="<?php echo $_REQUEST['investor_Email_Id']; ?>">
                            <input type="hidden" name="investor_Password"
                                value="<?php echo $_REQUEST['investor_Password']; ?>">
                            <input type="hidden" name="investor_Gender"
                                value="<?php echo $_REQUEST['investor_Gender']; ?>">
                            <input type="hidden" name="investor_Address"
                                value="<?php echo $_REQUEST['investor_Address']; ?>">
                            <input type="hidden" name="investor_DOB" value="<?php echo $_REQUEST['investor_DOB']; ?>">
                            <input type="hidden" name="country_Name" value="<?php echo $_REQUEST['country_Name']; ?>">
                            <input type="hidden" name="state_Name" value="<?php echo $_REQUEST['state_Name']; ?>">
                            <input type="hidden" name="city_Name" value="<?php echo $_REQUEST['city_Name']; ?>">
                            <input type="hidden" name="investor_Contact_No"
                                value="<?php echo $_REQUEST['investor_Contact_No']; ?>">
                            <div class=" col-lg-6">
                                <div class="form--group">
                                    <input type="text" class="form--control" placeholder="Business Name"
                                        id="investor_Business_Name" name="investor_Business_Name"
                                        value="<?php echo $data['investor_Business_Name']; ?>">
                                    <td><span id="m1" style="color:red;"></span></td>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form--group">

                                    <textarea class="form--control" name="investor_Business_Description" rows="4"
                                        id="investor_Business_Description"
                                        placeholder="investor Description"><?php echo $data['investor_Business_Description']; ?></textarea>
                                    <td><span id="m2" style="color:red;"></span></td>
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="form--group">
                                    <input type="text" class="form--control" placeholder="Investor Business website"
                                        id="investor_Business_Website" name="investor_Business_Website"
                                        value="<?php echo $data['investor_Business_Website']; ?>">
                                    <td><span id="m3" style="color:red;"></span></td>
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="form--group">
                                    <input type="text" class="form--control" placeholder="Invested valuation"
                                        id="investor_Business_Valuation" name="investor_Business_Valuation"
                                        value="<?php echo $data['investor_Business_Valuation']; ?>">
                                    <td><span id="m4" style="color:red;"></span></td>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form--group">
                                    <input type="text" class="form--control" placeholder="Invested Companies"
                                        id="investor_Invested_Companies" name="investor_Invested_Companies"
                                        value="<?php echo $data['investor_Invested_Companies']; ?>">
                                    <td><span id="m5" style="color:red;"></span></td>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form--group">
                                    <input type="text" class="form--control" placeholder="Total Invested Values"
                                        id="investor_Total_Investment_Values" name="investor_Total_Investment_Values"
                                        value="<?php echo $data['investor_Total_Investment_Values']; ?>">
                                    <td><span id="m6" style="color:red;"></span></td>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form--group">
                                    <input type="file" class="form--control" id="investor_Photo" name="investor_Photo">
                                    <img src="<?php echo $data['investor_Photo']; ?>" style="height:140px;width:140px">

                                </div>
                            </div>



                            <div class="col-lg-12">
                                <div class="form--group">


                                    <!-- <input type="submit" name="submit" class="custom-button" value="Registration"> -->
                                    <button type="submit" name="submit" class="custom-button" value="">Update</button>
                                </div>
                            </div>

                        </form>
                        <span class="subtitle">Already you have an account here?</span>
                        <a href="investor-registration2.php" class="create-account theme-four">Sign in</a>
                        <div class="shape">
                            <img src="assets/images/account/side.jpg" alt="account">
                        </div>
                    </div>
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