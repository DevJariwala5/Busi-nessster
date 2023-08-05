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

    <title><?php echo $project_name; ?> | Contact-Us</title>
    <script>
    function ck() {

        var s = true;

        document.getElementById("m1").innerHTML = "";
        document.getElementById("m2").innerHTML = "";
        document.getElementById("m3").innerHTML = "";
        document.getElementById("m4").innerHTML = "";



        var a = document.f1.contact_Name.value;


        if (a == 0) {
            document.getElementById("m1").innerHTML = "Enter Your Name";
            s = false;
        }

        var b = document.f1.contact_Email.value;
        var em = /^([a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$)/;

        if (b == 0) {
            document.getElementById("m2").innerHTML = "Enter Investor Email";
            s = false;
        } else if (!em.test(b)) {
            document.getElementById("m2").innerHTML = "Enter Valid Email";
            s = false;
        }

        var c = document.f1.contact_Phone.value;

        if (c == 0) {

            document.getElementById("m3").innerHTML = "Enter Your Phone No";
            s = false;
        }


        var q = document.f1.contact_Message.value;


        if (q == 0) {
            document.getElementById("m4").innerHTML = "Enter Contact Message";
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
    <section class="inner-banner bg_img overflow-initial"
        style="background: url(assets/images/contact/bg.png) no-repeat center bottom;">
        <div class="container">
            <div class="inner-banner-wrapper d-flex contact">
                <div class="inner-banner-content contact-banner">
                    <h2 class="inner-banner-title">get in touch <br>
                        with us</h2>
                    <ul class="breadcums">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <span>Contact</span>
                        </li>
                    </ul>
                </div>
                <div class="contact-wrapper  fadeInUp">
                    <h4 class="title">Send Us a Message</h4>
                    <form class="contact-form" name="f1" method="post" action="contact-insert.php"
                        onSubmit="return ck();">

                        <div class="form--group">
                            <input type="text" class="form--control" placeholder="Name" name="contact_Name"
                                id="contact_Name">
                            <td><span id="m1" style="color:red;"></span></td>
                        </div>
                        <div class="form--group">
                            <input type="email" class="form--control" placeholder="Email" name="contact_Email"
                                id="contact_Email">
                            <td><span id="m2" style="color:red;"></span></td>
                        </div>
                        <div class="form--group">
                            <input type="tel" class="form--control" placeholder="Phone" name="contact_Phone"
                                id="contact_Phone">
                            <td><span id="m3" style="color:red;"></span></td>
                        </div>

                        <div class="form--group">
                            <textarea class="form--control" cols="30" rows="10" placeholder="Message"
                                name="contact_Message" id="contact_Message"></textarea>
                            <td><span id="m4" style="color:red;"></span></td>
                        </div>
                        <div class="form--group">
                            <button class="custom-button" type="submit">SUBMIT NOW</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="shape1 paroller" data-paroller-factor=".2">
            <img src="assets/images/about/balls.png" alt="about">
        </div>
    </section>
    <!-- Banner Section Ends Here -->


    <!-- Contact Info Section Starts Here -->
    <section class="contact-info padding-top padding-bottom">
        <div class="container">
            <div class="row gy-5 flex-column-reverse flex-lg-row">
                <div class="col-lg-6 col-xl-7">
                    <div class="row g-4 justify-content-center mb-4">
                        <div class="col-md-6 col-lg-10 col-xl-6  fadeInLeft">
                            <div class="contact-info-item">
                                <div class="contact-item-thumb">
                                    <img src="assets/images/contact/location.png" alt="contact">
                                </div>
                                <div class="contact-item-content">
                                    <h4 class="title">Office Address</h4>
                                    <p>419, Squaare One Commercial, Near Sentosa Heights, Bhimrad-Canel Road, Surat,
                                        Gujarat 395007</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6 col-lg-10 col-xl-6  fadeInLeft">
                            <div class="contact-info-item">
                                <div class="contact-item-thumb">
                                    <img src="assets/images/contact/email.png" alt="contact">
                                </div>
                                <div class="contact-item-content">
                                    <h4 class="title">Email Address</h4>
                                    <a href="info@accreteit.com">info@accreteit.com</a>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-10 col-xl-6  fadeInLeft">
                            <div class="contact-info-item">
                                <div class="contact-item-thumb">
                                    <img src="assets/images/contact/phone.png" alt="contact">
                                </div>
                                <div class="contact-item-content">
                                    <h4 class="title">Contact Number</h4>
                                    <a href="Tel:90172834">+9181414-35995</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5  fadeInRight d-none d-lg-block">
                    <div class="contact-info-thumb">
                        <img src="assets/images/contact/thumb.png" alt="contact">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Info Section Ends Here -->






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