<?php
session_start();
if (isset($_SESSION['username'])) {
    // header('location:dashboard.php');
} else {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>Busi Nessster | Add Package</title>
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

    <script>
    function ck() {

        var s = true;

        document.getElementById("m1").innerHTML = "";

        var n = document.f1.package_name.value;
        var nr = /^[A-Za-z]{3,15}$/;

        if (n == 0) {
            document.getElementById("m1").innerHTML = "Enter Package Name";
            s = false;
        } else if (!nr.test(n)) {
            document.getElementById("m1").innerHTML = "Enter Character Only";
            s = false;
        }


        return s;
    }
    </script>

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">


        <!-- Topbar Start -->
        <?php
        include('topbar.php');
        ?>
        <!-- end Topbar -->


        <!-- ========== Left Sidebar Start ========== -->
        <?php
        include('sidebar.php');
        ?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">

                                <h4 class="page-title">Add Package</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">


                                <div class="row">
                                    <div class="col-xl-6">
                                        <form name="f1" method="post" action="form-package-insert.php"
                                            onSubmit="return ck();">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Package Name</label>
                                                <input type="text" class="form-control" name="package_Name"
                                                    id="package_name" placeholder="Enter Package Name">
                                                <td><span id="m1" style="color:red;"></span></td>


                                            </div>
                                            <div>
                                                <?php
                                                $errmsg = "Already Exist";
                                                if (isset($_GET['err']) && $_GET['err'] == 1)
                                                    echo '<center><span style="color:red;">' . $errmsg . '</span></center>';
                                                ?>
                                            </div>
                                            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                                        </form>
                                    </div><!-- end col -->



                                </div><!-- end row -->
                            </div>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->






                </div> <!-- end container-fluid -->

            </div> <!-- end content -->



            <!-- Footer Start -->
            <?php
            include('footer.php');
            ?>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>

    <div class="rightbar-overlay"></div>



    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>


</html>