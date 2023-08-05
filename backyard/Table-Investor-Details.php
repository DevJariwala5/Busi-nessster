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
    <title>Busi Nessster | Investor Details</title>
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
        include("topbar.php");
        ?>
        <!-- end Topbar -->


        <!-- ========== Left Sidebar Start ========== -->
        <?php
        include("sidebar.php");
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

                                <?php
                                include('connect.php');
                                $investor_Id = $_REQUEST['investor_Id'];

                                $data = $link->rawQueryOne("select * from tb_investor_registration,tb_country ,tb_state,tb_city where investor_Id=?", array($investor_Id));

                                ?>
                                <h4 class="page-title"><?php echo  $data['investor_Name']; ?>'s Investor Details</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                </div> <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="header-title">Investor Details</h4>


                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">



                                <tbody>

                                    <tr>

                                        <th>Photo</th>
                                        <td><img src="../<?php echo $data['investor_Photo']; ?>"
                                                style="height:100px;width:100px;" /></td>

                                    </tr>
                                    <tr>

                                        <th>Name</th>
                                        <td><?php echo  $data['investor_Name']; ?></td>

                                    </tr>
                                    <tr>

                                        <th>Email</th>
                                        <td><?php echo  $data['investor_Email_Id']; ?></td>

                                    </tr>

                                    <tr>
                                        <th>Contact No</th>
                                        <td><?php echo  $data['investor_Contact_No']; ?></td>

                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td><?php echo  $data['investor_Address']; ?></td>

                                    </tr>


                                    <tr>
                                        <th>Gender</th>
                                        <td><?php echo  $data['investor_Gender']; ?></td>

                                    </tr>
                                    <tr>
                                        <th>Date Of Birth</th>
                                        <td><?php echo  $data['investor_DOB']; ?></td>

                                    </tr>
                                    <tr>
                                        <th>Country</th>
                                        <td><?php echo  $data['country_Name']; ?></td>

                                    </tr>
                                    <tr>
                                        <th>state</th>
                                        <td><?php echo  $data['state_Name']; ?></td>

                                    </tr>
                                    <tr>
                                        <th>City</th>
                                        <td><?php echo  $data['city_Name']; ?></td>

                                    </tr>
                                    <tr>
                                        <th>Investor Business Name</th>
                                        <td><?php echo  $data['investor_Business_Name']; ?></td>

                                    </tr>
                                    <tr>
                                        <th>Investor Business Description</th>
                                        <td><?php echo  $data['investor_Business_Description']; ?></td>

                                    </tr>
                                    <tr>
                                        <th>Investor Business_Website</th>
                                        <td><?php echo  $data['investor_Business_Website']; ?></td>

                                    </tr>
                                    <tr>
                                        <th>Investor Business Valuation</th>
                                        <td><?php echo  $data['investor_Business_Valuation']; ?></td>

                                    </tr>
                                    <tr>
                                        <th>Invested Companies</th>
                                        <td><?php echo  $data['investor_Invested_Companies']; ?></td>

                                    </tr>
                                    <tr>
                                        <th>Total Investment Values</th>
                                        <td><?php echo  $data['investor_Total_Investment_Values']; ?></td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end row -->







            </div> <!-- end container-fluid -->

        </div> <!-- end content -->



        <!-- Footer Start -->
        <?php
        include("footer.php");

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