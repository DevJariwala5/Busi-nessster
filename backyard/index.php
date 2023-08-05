<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Busi Nessster | Log In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png">


    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />

</head>
<script>
function ck() {

    var s = true;

    document.getElementById("m1").innerHTML = "";
    document.getElementById("m2").innerHTML = "";


    var n = document.f1.email.value;


    if (n == 0) {
        document.getElementById("m1").innerHTML = "Enter Email";
        s = false;
    }


    var p = document.f1.password.value;

    if (p == 0) {
        document.getElementById("m2").innerHTML = "Enter Password";
        s = false;
    }


    return s;
}
</script>

<body class="authentication-bg " style="background-color: #4324ec">

    <div class="account-pages pt-5 my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="account-card-box">
                        <div class="card mb-0" style="border: 4px solid #4324ec">
                            <div class="card-body p-4">

                                <div class="text-center">
                                    <div class="my-3">
                                        <a href="index.php">
                                            <span><img src="assets/images/logo.png" alt="" height="60px"></span>
                                        </a>
                                    </div>
                                    <h5 class="text-muted text-uppercase py-3 font-16">Sign In</h5>
                                </div>

                                <form name="f1" method="post" class="mt-2" onSubmit="return ck();" action="">

                                    <div class="form-group mb-3">
                                        <input class="form-control" type="text" name="email"
                                            placeholder="Enter your Email" id="email">
                                        <td><span id="m1" style="color:red;"></span></td>

                                    </div>

                                    <div class="form-group mb-3">
                                        <input class="form-control" type="password" id="password" name="password"
                                            placeholder="Enter your password">
                                        <td><span id="m2" style="color:red;"></span></td>
                                    </div>




                                    <div class="form-group text-center">
                                        <input class="btn btn-success btn-block waves-effect waves-light" name="submit"
                                            type="submit" value=" Log In "
                                            style="background-color: #e38e32;border-color: #e38e32;">
                                    </div>


                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>


                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>
<?php
include('connect.php');

if (isset($_REQUEST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $qry = "select * from admin where email='$email' and password='$password'";
    $res = mysqli_query($connect, $qry);
    $count = mysqli_num_rows($res);
    if ($count > 0) {
        while ($row = mysqli_fetch_array($res)) {
            session_start();
            $_SESSION['username'] = $email;
            header('location:dashboard.php');
        }
    } else {
        header('location:index.php?err=1');
    }
}
?>




</html>