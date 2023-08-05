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
    <title>Busi Nessster | Dashboard</title>
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

<body>

    <!-- Begin page -->
    <div id="wrapper">


        <!-- Topbar Start -->
        <?php
        include('topbar.php');
        ?>
        <!-- end Topbar -->


        <!-- ========== Left Sidebar Start ========== -->

        <!-- Left Sidebar End -->
        <?php
        include('sidebar.php');
        ?>
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

                                <h4 class="page-title">Dashboard</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <?php
                    include('connect.php');
                    $data4 = $link->rawQueryOne("select count(bid_Id) as deal from tb_bid where bid_Status=1");
                    $data5 = $link->rawQueryOne("SELECT COUNT(business_Id) as business_count FROM tb_business_registration");
                    $data6 = $link->rawQueryOne("SELECT COUNT(investor_Id) as investor_count FROM tb_investor_registration");
                    $data7 = $link->rawQueryOne("SELECT COUNT(package_Id) as package_count FROM tb_packages");
                    ?>
                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="card-box tilebox-one">
                                <i class="icon-layers float-right m-0 h2 text-muted"></i>
                                <h6 class="text-muted text-uppercase mt-0">Total Deals</h6>
                                <h3 class="my-3" data-plugin="counterup"><?php echo $data4['deal']; ?></h3>

                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3">
                            <div class="card-box tilebox-one">
                                <i class="icon-paypal float-right m-0 h2 text-muted"></i>
                                <h6 class="text-muted text-uppercase mt-0">Total Business</h6>
                                <h3 class="my-3"><span
                                        data-plugin="counterup"><?php echo $data5['business_count']; ?></span></h3>

                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3">
                            <div class="card-box tilebox-one">
                                <i class="icon-chart float-right m-0 h2 text-muted"></i>
                                <h6 class="text-muted text-uppercase mt-0">Total Investors</h6>
                                <h3 class="my-3"><span
                                        data-plugin="counterup"><?php echo $data6['investor_count']; ?></span></h3>

                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3">
                            <div class="card-box tilebox-one">
                                <i class="icon-rocket float-right m-0 h2 text-muted"></i>
                                <h6 class="text-muted text-uppercase mt-0">Total Package</h6>
                                <h3 class="my-3" data-plugin="counterup"><?php echo $data7['package_count']; ?></h3>

                            </div>
                        </div>
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
    <!-- END wrapper -->





    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!--Morris Chart-->
    <script src="assets/libs/morris-js/morris.min.js"></script>
    <script src="assets/libs/raphael/raphael.min.js"></script>

    <!-- Dashboard init js-->
    <script src="assets/js/pages/dashboard.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>