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

    <title><?php echo $project_name; ?> | Team Members</title>
    <script>
    function ck() {

        var s = true;

        document.getElementById("m1").innerHTML = "";
        document.getElementById("m2").innerHTML = "";
        document.getElementById("m3").innerHTML = "";
        document.getElementById("m4").innerHTML = "";
        document.getElementById("m5").innerHTML = "";
        document.getElementById("m6").innerHTML = "";

        var l = document.f1.designation_Name.value;


        if (l == "Select Designation") {

            document.getElementById("m6").innerHTML = "Select Designignation Name";
            s = false;
        }


        var a = document.f1.name.value;


        if (a == 0) {
            document.getElementById("m1").innerHTML = "Enter Your Name";
            s = false;
        }

        var b = document.f1.email.value;
        var em = /^([a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$)/;

        if (b == 0) {
            document.getElementById("m2").innerHTML = "Enter Investor Email";
            s = false;
        } else if (!em.test(b)) {
            document.getElementById("m2").innerHTML = "Enter Valid Email";
            s = false;
        }

        var c = document.f1.gender.value;

        if (c == 0) {

            document.getElementById("m3").innerHTML = "Select Gender";
            s = false;
        }

        var k = document.f1.contact_No.value;


        if (k == 0) {
            document.getElementById("m4").innerHTML = "Enter Phone No";
            s = false;
        }
        var q = document.f1.photo.value;


        if (q == 0) {
            document.getElementById("m5").innerHTML = "Select Photo";
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
                                <a href="profile-team.php" class="active">Add Team Members</a>
                            </li>
                            <li>
                                <a href="profile-social.php" class="">Add Social Media Links</a>
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
                <div class="contact-wrapper  fadeInUp" style="    margin: auto;
    margin-top: 50px; max-width: 961px;">
                    <h4 class="title">Add Team Members</h4>
                    <form class="contact-form" name="f1" method="post" action="team-insert.php" onSubmit="return ck();"
                        enctype="multipart/form-data">
                        <input type="hidden" name="business_Id" value="<?php echo $data['business_Id']; ?>">
                        <div class="form--group">
                            <select id="designation_Name" name="designation_Name" class="form--control">
                                <option selected>Select Designation</option>
                                <?php
                                $id = $data['business_Id'];
                                $data = $link->rawQuery("select * from tb_business_designation where business_Id='$id'");
                                if ($link->count > 0) {
                                    foreach ($data as $d) {
                                ?>
                                <option value="<?php echo $d['designation_Id']; ?>">
                                    <?php echo $d['designation_Name']; ?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                            <td><span id="m6" style="color:red;"></span></td>
                        </div>
                        <div class="form--group">
                            <input type="text" class="form--control" placeholder="name" name="name" id="name">
                            <td><span id="m1" style="color:red;"></span></td>
                        </div>
                        <div class="form--group">
                            <input type="email" class="form--control" placeholder="Email" name="email" id="email">
                            <td><span id="m2" style="color:red;"></span></td>
                        </div>
                        <div class="form--group">
                            <input type="radio" name="gender" id="gender" value="male" style="width: 10%;"> Male
                            <br>
                            <br>

                            <input type="radio" name="gender" id="gender" value="female" style="width: 10%;">Female

                        </div>
                        <td><span id="m3" style="color:red;"></span></td>
                        <div class="form--group">
                            <input type="tel" class="form--control" placeholder="Phone" name="contact_No"
                                id="contact_No">
                            <td><span id="m4" style="color:red;"></span></td>
                        </div>

                        <div class="form--group">
                            <label>Team Member Photo</label>
                            <input type="File" class="form--control" placeholder="Name" name="photo" id="photo">
                            <td><span id="m5" style="color:red;"></span></td>
                        </div>

                        <div class="form--group">
                            <button class="custom-button" name="submit" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="dashborad-header">
                    <h4 class="title">All Team Members</h4>

                </div>
                <table class="deposit-table">

                    <thead>
                        <tr>
                            <th>Designation Name</th>
                            <th>Team Member Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Contact No</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $data = $link->rawQuery("select * from tb_business_designation bd,tb_business_team_member bt where bd.designation_Id=bt.designation_Id and bd.business_Id='$id'");
                        if ($link->count > 0) {
                            foreach ($data as $d) {
                        ?>
                        <tr>
                            <td data-input="currency">
                                <div class="currency">

                                    <div class="content">
                                        <span class="title"><?php echo $d['designation_Name']; ?></span>

                                    </div>
                                </div>
                            </td>
                            <td data-input="user">
                                <div class="user">
                                    <div class="thumb">
                                        <img src="<?php echo $d['photo']; ?>" alt="deposit">
                                    </div>
                                    <div class="content">
                                        <span class="title"><?php echo $d['name']; ?></span>

                                    </div>
                                </div>
                            </td>
                            <td data-input="start date">
                                <div class="content">
                                    <span style="font-size: 14px;"><?php echo $d['email']; ?></span>

                                </div>
                            </td>
                            <td data-input="start date">
                                <div class="content">
                                    <span class="title"><?php echo $d['gender']; ?></span>

                                </div>
                            </td>
                            <td data-input="start date">
                                <div class="content">
                                    <span class="title"><?php echo $d['contact_No']; ?></span>

                                </div>
                            </td>
                            <td data-input="user">
                                <div class="user">

                                    <div class="content">
                                        <a href="team-update.php?team_Id=<?php echo $d['team_Id'] ?>"><button
                                                class="custom-button" name="submit" type="submit"
                                                style=" height: inherit;padding: 12px 10px;width: 93px;background: #4425f1;">Edit</button>
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td data-input="start date">
                                <div class="content">
                                    <div class="content">
                                        <a href="team-delete.php?team_Id=<?php echo $d['team_Id'] ?>"><button
                                                class="custom-button" name="submit" type="submit"
                                                style=" height: inherit;padding: 12px 10px;width: 93px;background: red;">Delete</button>
                                        </a>
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