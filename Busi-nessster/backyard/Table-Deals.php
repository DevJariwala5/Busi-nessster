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
    <title>Busi Nessster | Deals </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png">


    <!-- Table datatable css -->
    <link href="assets/libs/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <link href="assets/libs/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

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

                                <h4 class="page-title">Deals</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">




                                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 60%;">


                                    <thead>
                                        <tr>
                                            <th>Business Name</th>
                                            <th>Investor Name</th>

                                            <th>Amount</th>
                                            <th>Equity</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include('connect.php');
                                        $data = $link->rawQuery("select * from tb_bid b,tb_business_registration br,tb_investor_registration ir where b.business_Id=br.business_Id and b.investor_Id=ir.investor_Id and b.bid_Status=1");
                                        if ($link->count > 0) {
                                            foreach ($data as $d) {
                                        ?>
                                        <tr>
                                            <td><?php echo $d['business_Name']; ?></td>
                                            <td><?php echo $d['investor_Name']; ?> </td>

                                            <td><?php echo $d['amount']; ?></td>

                                            <td><?php echo $d['equity']; ?></td>


                                        </tr>


                                        <?php
                                            }
                                        }
                                        ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end row -->

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

    <!-- Datatable plugin js -->
    <script src="assets/libs/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables/dataTables.bootstrap4.min.js"></script>

    <script src="assets/libs/datatables/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables/responsive.bootstrap4.min.js"></script>

    <script src="assets/libs/datatables/dataTables.buttons.min.js"></script>
    <script src="assets/libs/datatables/buttons.bootstrap4.min.js"></script>

    <script src="assets/libs/jszip/jszip.min.js"></script>
    <script src="assets/libs/pdfmake/pdfmake.min.js"></script>
    <script src="assets/libs/pdfmake/vfs_fonts.js"></script>

    <script src="assets/libs/datatables/buttons.html5.min.js"></script>
    <script src="assets/libs/datatables/buttons.print.min.js"></script>

    <script src="assets/libs/datatables/dataTables.keyTable.min.js"></script>
    <script src="assets/libs/datatables/dataTables.select.min.js"></script>

    <!-- Datatables init -->
    <script src="assets/js/pages/datatables.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>


</html>