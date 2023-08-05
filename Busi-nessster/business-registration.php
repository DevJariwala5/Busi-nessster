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

    <title><?php echo $project_name; ?> | Business Registration</title>
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
            document.getElementById("m10").innerHTML = "";
            document.getElementById("m11").innerHTML = "";
            document.getElementById("m12").innerHTML = "";
            document.getElementById("m13").innerHTML = "";
            document.getElementById("m14").innerHTML = "";
            document.getElementById("m15").innerHTML = "";
            document.getElementById("m16").innerHTML = "";
            document.getElementById("m17").innerHTML = "";


            var a = document.f1.business_Name.value;


            if (a == 0) {
                document.getElementById("m1").innerHTML = "Enter Business Name";
                s = false;
            }

            var b = document.f1.business_Email_Id.value;
            var em = /^([a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$)/;

            if (b == 0) {
                document.getElementById("m2").innerHTML = "Enter Business Email";
                s = false;
            } else if (!em.test(b)) {
                document.getElementById("m2").innerHTML = "Enter Valid Email";
                s = false;
            }

            var c = document.f1.business_Password.value;

            if (c == 0) {

                document.getElementById("m3").innerHTML = "Enter Password";
                s = false;
            }
            var q = document.f1.category_Name.value;


            if (q == "Select Category of Business") {
                document.getElementById("m17").innerHTML = "Select Category of Business";
                s = false;
            }

            var d = document.f1.business_Address.value;


            if (d == 0) {
                document.getElementById("m4").innerHTML = "Enter Address";
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

            var h = document.f1.business_Contact_No.value;


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


            var i = document.f1.business_Year_Of_Established.value;


            if (i == 0) {
                document.getElementById("m9").innerHTML = "Enter Year of Established";
                s = false;
            }

            var j = document.f1.business_Patnership.value;


            if (j == 0) {
                document.getElementById("m10").innerHTML = "Enter Business Partnership";
                s = false;
            }

            var k = document.f1.business_Website.value;
            if (k == 0) {
                document.getElementById("m11").innerHTML = "Enter your business website";
                s = false;
            }

            var l = document.f1.business_Description.value;


            if (l == 0) {
                document.getElementById("m12").innerHTML = "Enter the Business Description";
                s = false;
            }
            var m = document.f1.percentage_Of_Ownership.value;


            if (m == 0) {
                document.getElementById("m13").innerHTML = "Enter the % of ownership";
                s = false;
            }
            var n = document.f1.current_Revenue.value;


            if (n == 0) {
                document.getElementById("m14").innerHTML = "Enter Current revenue";
                s = false;
            }
            var o = document.f1.percentage_Of_Growth.value;


            if (o == 0) {
                document.getElementById("m15").innerHTML = "Enter busines growth %";
                s = false;
            }


            var p = document.f1.business_Logo.value;


            if (p == 0) {
                document.getElementById("m16").innerHTML = "Upload Business Logo";
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


    <!-- Banner Section Starts Here -->
    <section class="inner-banner bg_img padding-bottom" style="background: url(assets/images/about/bg.png) no-repeat right bottom;">
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
    <section class="account-section padding-top padding-bottom">
        <div class="container">
            <div class="row align-items-center gy-5">

                <div class="col-lg-12">
                    <div class="account-wrapper">
                        <h2 class="title">Create Your Account</h2>
                        <form class="account-form" name="f1" method="post" action="business-registration-insert.php" onSubmit="return ck();" enctype="multipart/form-data">


                            <div class=" col-lg-6">
                                <div class="form--group">
                                    <input type="text" class="form--control" placeholder="Business Name" id="business_Name" name="business_Name">
                                    <td><span id="m1" style="color:red;"></span></td>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form--group">
                                    <input type="email" class="form--control" placeholder="Business Email" id="business_Email_Id" name="business_Email_Id">
                                    <td><span id="m2" style="color:red;"></span></td>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form--group">
                                    <input type="password" class="form--control" placeholder="Password" id="business_Password" name="business_Password">
                                    <td><span id="m3" style="color:red;"></span></td>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form--group">
                                    <select id="category_Name" name="category_Name" class="form--control">
                                        <option selected>Select Category of Business</option>


                                        <?php
                                        $data = $link->rawQuery("select * from tb_business_category");
                                        if ($link->count > 0) {
                                            foreach ($data as $d) {
                                        ?>
                                                <option value="<?php echo $d['category_Id']; ?>">
                                                    <?php echo $d['category_Name']; ?></option>
                                        <?php
                                            }
                                        }
                                        ?>

                                    </select>
                                    <td><span id="m17" style="color:red;"></span></td>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form--group">
                                    <textarea class="form--control" placeholder="Address" id="business_Address" name="business_Address"></textarea>
                                    <td><span id="m4" style="color:red;"></span></td>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form--group">
                                    <select id="country_Name" name="country_Name" class="form--control">
                                        <option selected>Select Country</option>
                                        <?php

                                        $data = $link->rawQuery("select * from tb_country");
                                        if ($link->count > 0) {
                                            foreach ($data as $d) {
                                        ?>
                                                <option value="<?php echo $d['country_Id']; ?>">
                                                    <?php echo $d['country_Name']; ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                    <td><span id="m5" style="color:red;"></span></td>
                                </div>
                            </div>

                            <div id="statedropdown">
                                <div class="col-lg-6">
                                    <div class="form--group">

                                        <select id="state_Name" name="state_Name" class="form--control" onchange="statedropdown(this.value)">
                                            <option selected>Select State</option>
                                            <?php

                                            $data = $link->rawQuery("select * from tb_state");
                                            if ($link->count > 0) {
                                                foreach ($data as $d) {
                                            ?> <option value="<?php echo $d['state_Id']; ?>">
                                                        <?php echo $d['state_Name']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                        <td><span id="m6" style="color:red;"></span></td>
                                    </div>
                                </div>
                            </div>
                            <div id="citydropdown">
                                <div class="col-lg-6">
                                    <div class="form--group">
                                        <select id="city_Name" name="city_Name" class="form--control">
                                            <option selected>Select City</option>

                                        </select>
                                        <td><span id="m7" style="color:red;"></span></td>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form--group">
                                    <input type="text" class="form--control" placeholder="Contact No." id="business_Contact_No" name="business_Contact_No">
                                    <td><span id="m8" style="color:red;"></span></td>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form--group">
                                    <input type="text" class="form--control" placeholder="Year of Established" id="business_Year_Of_Established" name="business_Year_Of_Established">
                                    <td><span id="m9" style="color:red;"></span></td>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form--group">
                                    <input type="text" class="form--control" placeholder="Partnership" id="business_Patnership" name="business_Patnership">
                                    <td><span id="m10" style="color:red;"></span></td>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form--group">
                                    <input type="text" class="form--control" placeholder="Business Website" id="business_Website" name="business_Website">
                                    <td><span id="m11" style="color:red;"></span></td>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form--group">

                                    <textarea class="form--control" name="business_Description" rows="4" id="business_Description" placeholder="Business Description"></textarea>
                                    <td><span id="m12" style="color:red;"></span></td>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form--group">
                                    <input type="text" class="form--control" placeholder="Percentage of Ownership" id="percentage_Of_Ownership" name="percentage_Of_Ownership">
                                    <td><span id="m13" style="color:red;"></span></td>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form--group">
                                    <input type="text" class="form--control" placeholder="Current Revenue" id="current_Revenue" name="current_Revenue">
                                    <td><span id="m14" style="color:red;"></span></td>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form--group">
                                    <input type="text" class="form--control" placeholder="Percentage of growth" id="percentage_Of_Growth" name="percentage_Of_Growth">
                                    <td><span id="m15" style="color:red;"></span></td>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form--group">
                                    <input type="file" class="form--control" id="business_Logo" name="business_Logo">
                                    <td><span id="m16" style="color:red;"></span></td>
                                </div>
                            </div>


                            <div>
                                <?php
                                $errmsg = "Email Already Exist";
                                if (isset($_GET['err']) && $_GET['err'] == 1)
                                    echo '<center><span style="color:red;">' . $errmsg . '</span></center>';
                                ?>
                            </div>
                            <div class="col-lg-12">
                                <div class="form--group">


                                    <button type="submit" name="submit" class="custom-button">Registration</button>
                                </div>
                            </div>

                        </form>
                        <span class="subtitle">Already you have an account here?</span>
                        <a href="business-login.php" class="create-account theme-four">Sign in</a>

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
    <script>
        function statedropdown(val) {
            $.ajax({
                type: "POST",
                url: "citydd.php",
                data: "state_Id=" + val,
                success: function(data) {
                    $('#citydropdown').html(data);
                }
            });
        }
    </script>

</body>


</html>