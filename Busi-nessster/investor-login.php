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

    <title><?php echo $project_name; ?> | Investor Log-in </title>
    <script>
    function ck() {

        var s = true;


        document.getElementById("m2").innerHTML = "";
        document.getElementById("m3").innerHTML = "";



        var b = document.f1.investor_Email_Id.value;

        if (b == 0) {
            document.getElementById("m2").innerHTML = "Enter Investor Email";
            s = false;
        }
        var c = document.f1.investor_Password.value;

        if (c == 0) {

            document.getElementById("m3").innerHTML = "Enter Password";
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
    <section class="inner-banner bg_img padding-bottom"
        style="background: url(assets/images/about/bg.png) no-repeat right bottom;">
        <div class="container">
            <div class="inner-banner-wrapper">
                <div class="inner-banner-content">
                    <h2 class="inner-banner-title">login your Investor
                        account</h2>
                    <ul class="breadcums">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <span>Login</span>
                        </li>
                    </ul>
                </div>
                <div class="inner-banner-thumb about d-none d-md-block">
                    <img src="assets/images/account/thumb.png" alt="account">
                </div>
            </div>
        </div>
        <div class="shape1 paroller" data-paroller-factor=".2">
            <img src="assets/images/about/balls.png" alt="about">
        </div>
    </section>
    <!-- Banner Section Ends Here -->


    <!-- Account Section Starts Here -->
    <section class="account-section padding-top padding-bottom">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-7  d-none d-lg-block">
                    <div class="account-thumb">
                        <img src="assets/images/account/login-thumb.png" alt="account">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="account-wrapper">
                        <h2 class="title">Sign In Your As Investor Account</h2>
                        <form class="account-form" name="f1" method="post" onSubmit="return ck();">
                            <div class="form--group">

                                <input type="email" class="form--control" placeholder="Email " name="investor_Email_Id"
                                    id="investor_Email_Id"
                                    value="<?php if (isset($_COOKIE['user'])) {
                                                                                                                                                            echo $_COOKIE['user'];
                                                                                                                                                        } ?>">
                                <td><span id="m2" style="color:red;"></span></td>


                            </div>
                            <div class="form--group">



                                <input type="password" class="form--control" placeholder="Password"
                                    id="investor_Password" name="investor_Password"
                                    value="<?php if (isset($_COOKIE['user'])) {
                                                                                                                                                                echo $_COOKIE['pwd'];
                                                                                                                                                            } ?>">
                                <td><span id="m3" style="color:red;"></span></td>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="form--group custom--checkbox ">
                                    <input type="checkbox" id="check01" name="remember">
                                    <label for="check01">Remember me</label>
                                </div>
                                <div class="form--group forgot-pass">
                                    <a href="investor-forgot-password.php">Fotgot Password?</a>
                                </div>
                            </div>
                            <div>
                                <?php
                                $errmsg = "Email and Password are wrong";
                                if (isset($_GET['err']) && $_GET['err'] == 1)
                                    echo '<center><span style="color:red;">' . $errmsg . '</span></center>';
                                ?>
                            </div>
                            <div class="form--group">
                                <button type="submit" name="submit" class="custom-button">SIGN IN NOW</button>
                                <!-- <input type="submit" name="submit" class="custom-button" value="SIGN IN NOW"> -->

                            </div>
                        </form>
                        <span class="subtitle">Don't have an account yet?</span>
                        <a href="investor-registration1.php" class="create-account theme-four">Create Account</a>
                        <div class="shape">
                            <img src="assets/images/account/shape.png" alt="account">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Account Section Ends Here -->



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

<?php


if (isset($_REQUEST['submit'])) {
    $email = $_POST['investor_Email_Id'];
    $password = $_POST['investor_Password'];

    $qry = "select * from tb_investor_registration where investor_Email_Id='$email' and investor_Password='$password'";
    $res = mysqli_query($connect, $qry);
    $count = mysqli_num_rows($res);
    if ($count > 0) {
        while ($row = mysqli_fetch_array($res)) {
            session_start();
            $_SESSION['investor-username'] = $email;
            $_SESSION['investor_Id'] = $row['investor_Id'];
            $_SESSION['login_type'] = "i";
            header('location:index.php');
        }
    } else {
        header('location:investor-login.php?err=1');
    }
}
if (!empty($_POST['remember'])) {
    setcookie('user', $email, time() + (365 * 24 * 60 * 60));
    setcookie('pwd', $password, time() + (365 * 24 * 60 * 60));
} else {
    setcookie('user', '');
    setcookie('pwd', '');
}
?>

</html>