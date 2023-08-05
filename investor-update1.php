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
        document.getElementById("m7").innerHTML = "";
        document.getElementById("m8").innerHTML = "";
        document.getElementById("m9").innerHTML = "";

        document.getElementById("m17").innerHTML = "";


        var a = document.f1.investor_Name.value;


        if (a == 0) {
            document.getElementById("m1").innerHTML = "Enter Investor Name";
            s = false;
        }

        var b = document.f1.investor_Email_Id.value;
        var em = /^([a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$)/;

        if (b == 0) {
            document.getElementById("m2").innerHTML = "Enter Investor Email";
            s = false;
        } else if (!em.test(b)) {
            document.getElementById("m2").innerHTML = "Enter Valid Email";
            s = false;
        }

        var c = document.f1.investor_Password.value;

        if (c == 0) {

            document.getElementById("m3").innerHTML = "Enter Password";
            s = false;
        }


        var q = document.f1.investor_Gender.value;


        if (q == 0) {
            document.getElementById("m17").innerHTML = "Select Gender";
            s = false;
        }

        var d = document.f1.investor_Address.value;


        if (d == 0) {
            document.getElementById("m4").innerHTML = "Enter Address";
            s = false;
        }

        var k = document.f1.investor_DOB.value;


        if (k == 0) {
            document.getElementById("m9").innerHTML = "Select Date of Birth";
            s = false;
        }

        var e = document.f1.country_Name.value;


        if (e == "Select Country") {
            document.getElementById("m5").innerHTML = "Select Country";
            s = false;
        }

        var f = document.f1.state_Name.value;


        if (f == "Select State") {
            document.getElementById("m6").innerHTML = "Select State";
            s = false;
        }

        var g = document.f1.city_Name.value;


        if (g == "Select City") {
            document.getElementById("m7").innerHTML = "Select City";
            s = false;
        }

        var h = document.f1.investor_Contact_No.value;


        if (h == 0) {
            document.getElementById("m8").innerHTML = "Enter Contact Number";
            s = false;
        } //else if (isNaN(h)) {
        //     docum8nt.getElementById("m8").innerHTML = "Enter Digits Only";
        //     s = false;
        // } else if (h.length == 10) {
        //     document.getElementById("m8").innerHTML = "Enter 10 Digits Only";
        //     s = false;

        // }



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
                        <form class="account-form" name="f1" method="post"
                            action="investor-update2.php?investor_Id=<?php echo $data['investor_Id']; ?>"
                            onSubmit="return ck();" enctype="multipart/form-data">


                            <div class=" col-lg-6">
                                <div class="form--group">
                                    <input type="text" class="form--control" placeholder="Investor Name"
                                        id="investor_Name" name="investor_Name"
                                        value="<?php echo $data['investor_Name']; ?>">
                                    <td><span id="m1" style="color:red;"></span></td>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form--group">
                                    <input type="email" class="form--control" placeholder="Investor Email"
                                        id="investor_Email_Id" name="investor_Email_Id"
                                        value="<?php echo $data['investor_Email_Id']; ?>">
                                    <td><span id="m2" style="color:red;"></span></td>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form--group">
                                    <input type="password" class="form--control" placeholder="Password"
                                        id="business_Password" name="investor_Password"
                                        value="<?php echo $data['investor_Password']; ?>">
                                    <td><span id="m3" style="color:red;"></span></td>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form--group">
                                    <input type="radio" name="investor_Gender" id="investor_Gender" value="male"
                                        style="width: 4%;"
                                        <?php if ($data['investor_Gender'] == "male") {
                                                                                                                                        echo "checked";
                                                                                                                                    } ?>>
                                    Male
                                    <input type="radio" name="investor_Gender" id="investor_Gender" value="female"
                                        style="width: 4%;"
                                        <?php if ($data['investor_Gender'] == "female") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?>>Female
                                    <td><span id="m17" style="color:red;"></span></td>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form--group">
                                    <textarea class="form--control" placeholder="Address" id="investor_Address"
                                        name="investor_Address"><?php echo $data['investor_Address']; ?></textarea>
                                    <td><span id="m4" style="color:red;"></span></td>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form--group">
                                    <label> Date of Birth</label>
                                    <input type="date" class="form--control" placeholder="Date Of Birth"
                                        id="investor_DOB" name="investor_DOB"
                                        value="<?php echo $data['investor_DOB']; ?>">
                                    <td><span id="m9" style="color:red;"></span></td>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form--group">
                                    <select id="country_Name" name="country_Name" class="form--control">
                                        <option selected>Select Country</option>
                                        <?php

                                        $data2 = $link->rawQuery("select * from tb_country");
                                        if ($link->count > 0) {
                                            foreach ($data2 as $d) {
                                        ?>
                                        <option value="<?php echo $d['country_Id']; ?>" <?php if ($d['country_Id'] == $data['country_Id']) {
                                                                                                    echo "selected";
                                                                                                } ?>>
                                            <?php echo $d['country_Name']; ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                    <td><span id="m5" style="color:red;"></span></td>
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="form--group">
                                    <select id="state_Name" name="state_Name" class="form--control">
                                        <option selected>Select State</option>
                                        <?php

                                        $data3 = $link->rawQuery("select * from tb_state");
                                        if ($link->count > 0) {
                                            foreach ($data3 as $d) {
                                        ?> <option value="<?php echo $d['state_Id']; ?>" <?php if ($d['state_Id'] == $data['state_Id']) {
                                                                                                echo "selected";
                                                                                            } ?>>
                                            <?php echo $d['state_Name']; ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                    <td><span id="m6" style="color:red;"></span></td>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form--group">
                                    <select id="city_Name" name="city_Name" class="form--control">
                                        <option selected>Select City</option>

                                        <?php

                                        $data4 = $link->rawQuery("select * from tb_city");
                                        if ($link->count > 0) {
                                            foreach ($data4 as $d) {
                                        ?> <option value="<?php echo $d['city_Id']; ?>" <?php if ($d['city_Id'] == $data['city_Id']) {
                                                                                            echo "selected";
                                                                                        } ?>>
                                            <?php echo $d['city_Name']; ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                    <td><span id="m7" style="color:red;"></span></td>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form--group">
                                    <input type="text" class="form--control" placeholder="Contact No."
                                        id="investor_Contact_No" name="investor_Contact_No"
                                        value="<?php echo $data['investor_Contact_No']; ?>">
                                    <td><span id="m8" style="color:red;"></span></td>
                                </div>
                            </div>






                            <div class="col-lg-12">
                                <div class="form--group">


                                    <input type="submit" name="submit" class="custom-button" value="NEXT"
                                        style="color: white;">
                                </div>
                            </div>

                        </form>
                        <span class="subtitle">Want no change?</span>
                        <a href="profile-dashboard.php" class="create-account theme-four">Back</a>
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