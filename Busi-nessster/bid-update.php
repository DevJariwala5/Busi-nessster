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

    <title><?php echo $project_name; ?> | Edit Bid</title>
    <script>
    function ck() {

        var s = true;

        document.getElementById("m1").innerHTML = "";


        var a = document.f1.business_Review.value;


        if (a == 0) {
            document.getElementById("m1").innerHTML = "Enter Review";
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

    $business_Id = $_REQUEST['business_Id'];
    $data = $link->rawQueryOne("select * from tb_business_registration,tb_business_category,tb_country ,tb_state,tb_city where tb_business_registration.category_Id=tb_business_category.category_Id and business_Id=?", array($business_Id));
    ?>
    <!-- Banner Section Starts Here -->
    <section class="inner-banner bg_img"
        style="background: url(assets/images/privacy-policy/bg.png) no-repeat center bottom;">
        <div class="container">
            <div class="inner-banner-wrapper">
                <div class="inner-banner-content">
                    <h2 class="inner-banner-title"><?php echo $data['business_Name'] ?> </h2>
                    <ul class="breadcums">

                    </ul>
                </div>
                <div class="inner-banner-thumb d-none d-md-block">
                    <img src="assets/images/blog/thumb.png" alt="investment">
                </div>
            </div>
        </div>
        <div class="shape1 paroller" data-paroller-factor=".2">
            <img src="assets/images/about/balls.png" alt="about">
        </div>
    </section>
    <!-- Banner Section Ends Here -->


    <!-- Blog Section Start Here -->
    <section class="blog-section padding-top overflow-hidden">
        <div class="container">
            <div class="row gy-5 justify-content-center">




                <div class="col-xl-8 col-lg-12">
                    <div class="blog-details-wrapper">
                        <div class="details-header">
                            <h3 class="blog-details-title"><?php echo $data['business_Name']; ?></h3>

                        </div>



                        <div class="details-thumb">
                            <img src="<?php echo $data['business_Logo']; ?>" alt="blog">
                        </div>
                        <div class="padding-top">
                            <h2 class="title mx-100">Business Description</h2>
                        </div>
                        <div class="details-content">

                            <div class="details-pera">
                                <p>
                                    <?php echo $data['business_Description']; ?>
                                </p>
                                <p>
                                    <?php echo $data['business_Description']; ?>
                                </p>
                            </div>


                        </div>
                    </div>
                </div>
                <?php
                $bid = $_REQUEST['business_Id'];
                $investor_Id = $_SESSION['investor_Id'];
                $data1 = $link->rawQueryOne("select * from tb_investor_registration where investor_Id='$investor_Id'");
                $data2 = $link->rawQueryOne("select * from tb_bid where investor_Id=? and business_Id=?", array($investor_Id, $bid));
                if ($link->count > 0) {

                    if ($data2['bid_Status'] == 1 || $data2['bid_Status'] == 0) {
                ?>
                <div class="col-xl-4 col-lg-12">


                    <div class="contact-wrapper  fadeInUp" style=" margin-top: 65px;">
                        <h4 class="title">Bid On this Business</h4>
                        <form class="contact-form" name="f1" method="post" action="bid-update-insert.php">
                            <input type="hidden" name="investor_Id" value="<?php echo $investor_Id; ?>">
                            <input type="hidden" name="business_Id" value="<?php echo $data['business_Id']; ?>">
                            <input type="hidden" name="bid_Id" value="<?php echo $data2['bid_Id']; ?>">

                            <div class=" form--group">
                                <input type="text" class="form--control" placeholder="Enter Amount" name="amount"
                                    id="amount" value="<?php echo $data2['amount'] ?>" required="">
                                <td><span id="m2" style="color:red;"></span></td>

                            </div>

                            <div class="form--group">
                                <input type="tel" class="form--control" placeholder="Percantage Of Equity in %"
                                    name="equity" id="equity" value="<?php echo $data2['equity'] ?>" required="">
                                <td><span id=" m3" style="color:red;"></span></td>
                            </div>


                            <div class="form--group">
                                <button class="custom-button" type="submit">Bid</button>
                            </div>
                    </div>

                    </form>
                </div>
                <?php
                    }
                } else if (isset($_SESSION['investor-username']) && $data1['package_Id'] != "0") {
                    ?>
                <div class="col-xl-4 col-lg-12">


                    <div class="contact-wrapper  fadeInUp" style=" margin-top: 65px;">
                        <h4 class="title">Bid On this Business</h4>
                        <form class="contact-form" name="f1" method="post" action="bid-insert.php">
                            <input type="hidden" name="investor_Id" value="<?php echo $investor_Id; ?>">
                            <input type="hidden" name="business_Id" value="<?php echo $data['business_Id']; ?>">
                            <div class=" form--group">
                                <input type="text" class="form--control" placeholder="Enter Amount" name="amount"
                                    id="amount" required="">
                                <td><span id="m2" style="color:red;"></span></td>

                            </div>

                            <div class="form--group">
                                <input type="tel" class="form--control" placeholder="Percantage Of Equity in %"
                                    name="equity" id="equity" required="">
                                <td><span id=" m3" style="color:red;"></span></td>
                            </div>


                            <div class="form--group">
                                <button class="custom-button" type="submit">Bid</button>
                            </div>
                    </div>

                    </form>
                </div>
                <?php
                }
                ?>


            </div>
    </section>
    <!-- Blog Section Ends Here -->

    <section class="choose-us padding-bottom padding-top overflow-hidden">
        <div class="container">
            <div class="row gy-5">

                <div class="col-lg-12">
                    <div class="choose-us-right-content">
                        <div class="section-header">
                            <span class="subtitle  fadeInUp">More Details</span>
                            <h2 class="title mx-100">More Number About Us</h2>

                        </div>
                        <div class="row g-4 row2">
                            <div class="col-xl-3 col-lg-12 col-md-6  slideInUp" data--delay=".3s">
                                <div class="choose-item-two">

                                    <div class="choose-content-two">
                                        <h5 class="title">Category Name</h5>
                                        <p><?php echo $data['category_Name'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-12 col-md-6  slideInUp" data--delay=".4s">
                                <div class="choose-item-two">

                                    <div class="choose-content-two">
                                        <h5 class="title">Email Id</h5>
                                        <p><?php echo $data['business_Email_Id'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-12 col-md-6  slideInUp" data--delay=".5s">
                                <div class="choose-item-two">

                                    <div class="choose-content-two">
                                        <h5 class="title">Address</h5>
                                        <p><?php echo $data['business_Address'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-12 col-md-6  slideInUp" data--delay=".6s">
                                <div class="choose-item-two">

                                    <div class="choose-content-two">
                                        <h5 class="title">Contact No</h5>
                                        <p><?php echo $data['business_Contact_No'] ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-12 col-md-6  slideInUp" data--delay=".6s">
                                <div class="choose-item-two">

                                    <div class="choose-content-two">
                                        <h5 class="title">Year Established</h5>
                                        <p><?php echo $data['business_Year_Of_Established'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-12 col-md-6  slideInUp" data--delay=".6s">
                                <div class="choose-item-two">

                                    <div class="choose-content-two">
                                        <h5 class="title">Country</h5>
                                        <p><?php echo $data['country_Name'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-12 col-md-6  slideInUp" data--delay=".6s">
                                <div class="choose-item-two">

                                    <div class="choose-content-two">
                                        <h5 class="title">State</h5>
                                        <p><?php echo $data['state_Name'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-12 col-md-6  slideInUp" data--delay=".6s">
                                <div class="choose-item-two">

                                    <div class="choose-content-two">
                                        <h5 class="title">City</h5>
                                        <p><?php echo $data['city_Name'] ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-12 col-md-6  slideInUp" data--delay=".6s">
                                <div class="choose-item-two">

                                    <div class="choose-content-two">
                                        <h5 class="title">Partnership</h5>
                                        <p><?php echo $data['business_Patnership'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-12 col-md-6  slideInUp" data--delay=".6s">
                                <div class="choose-item-two">

                                    <div class="choose-content-two">
                                        <h5 class="title">Percentage Of Ownership</h5>
                                        <p><?php echo $data['percentage_Of_Ownership'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-12 col-md-6  slideInUp" data--delay=".6s">
                                <div class="choose-item-two">

                                    <div class="choose-content-two">
                                        <h5 class="title">Current Revenue</h5>
                                        <p>₹ <?php echo $data['current_Revenue'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-12 col-md-6  slideInUp" data--delay=".6s">
                                <div class="choose-item-two">

                                    <div class="choose-content-two">
                                        <h5 class="title">Percentage Of Growth</h5>
                                        <p><?php echo $data['percentage_Of_Growth'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    if (isset($_SESSION['investor-username']) && $_SESSION['investor-username'] != null) {
        $email = $_SESSION['investor-username'];
        $qry = "select * from tb_investor_registration where investor_Email_Id='$email' ";
        $res = mysqli_query($connect, $qry);
        $count = mysqli_num_rows($res);
        if ($count > 0) {
            while ($row = mysqli_fetch_array($res)) {
    ?>
    <div class="contact-wrapper  fadeInUp" style="    margin: auto;
     max-width: 1180px;">


        <h2 class="title mx-100">Add Review</h2>


        <form class="contact-form" name="f1" method="post" action="review-insert.php" onSubmit="return ck();"
            enctype="multipart/form-data">
            <input type="hidden" name="business_Id" value="<?php echo $data['business_Id']; ?>">
            <input type="hidden" name="investor_Id" value="<?php echo $row['investor_Id'] ?>">



            <div class="form--group">
                <textarea class="form--control" placeholder="Designation business_Review" name="business_Review"
                    id="business_Review" rows="4"> </textarea>
                <td><span id="m1" style="color:red;"></span></td>
            </div>

            <div class="form--group">
                <button class="custom-button" name="submit" type="submit">Add</button>
            </div>
        </form>
    </div>
    <?php
            }
        }
    }
    ?>
    <section class="testimonial-section-two padding-top ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-header text-center">
                        <span class="subtitle  fadeInUp">Feedback</span>
                        <h2 class="title  mx-100">Business Review</h2>
                        <p class=" fadeInUp" data--delay=".6s">
                            Pipsum dolor sit amet consectetur adipisicing elit. Aliquam modi explicabo nam ex unde et
                            dolorum non dolor! Dolorum nobis
                        </p>
                    </div>
                </div>
            </div>

            <div class="testimonial-slider-two">
                <?php

                $data = $link->rawQuery("select * from tb_investor_registration ir,tb_business_review bre where ir.investor_Id = bre.investor_Id and bre.business_Id=?", array($business_Id));
                if ($link->count > 0) {
                    foreach ($data as $d) {
                ?>
                <div class="single-slider">
                    <div class="testimonial-item-two">
                        <div class="testimonial-thumb-two">
                            <img src="<?php echo $d['investor_Photo']; ?> " alt="investor"></a>
                        </div>
                        <div class="testimonial-content-two">
                            <div class="quote-icon">
                                <i class="las la-quote-left"></i>
                            </div>

                            <h4 class="name"><?php echo $d['investor_Name']; ?></h4>
                            <span class="designation">Investor</span>
                            <p><?php echo $d['business_Review']; ?></p>
                        </div>
                    </div>
                </div>
                <?php
                    }
                } else {
                    echo "No Review Found";
                }
                ?>

            </div>
        </div>
    </section>
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