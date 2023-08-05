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
    <title>Busi Nessster | Business Details
    </title>
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
                                $business_Id = $_REQUEST['business_Id'];

                                $data = $link->rawQueryOne("select * from tb_business_registration,tb_business_category,tb_country ,tb_state,tb_city where tb_business_registration.category_Id=tb_business_category.category_Id and business_Id=?", array($business_Id));
                                ?>
                                <h4 class="page-title"><?php echo  $data['business_Name']; ?>'s Business Details</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                </div> <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="header-title">Business Details</h4>


                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">



                                <tbody>

                                    <tr>

                                        <th>Business Logo</th>
                                        <td><img src="../<?php echo $data['business_Logo']; ?>"
                                                style="height:100px;width:100px;" /></td>

                                    </tr>
                                    <tr>

                                        <th>Name</th>
                                        <td><?php echo  $data['business_Name']; ?></td>

                                    </tr>
                                    <tr>

                                        <th>Category</th>
                                        <td><?php echo  $data['category_Name']; ?></td>

                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?php echo  $data['business_Email_Id']; ?></td>

                                    </tr>

                                    <tr>

                                        <th>Address</th>
                                        <td><?php echo  $data['business_Address']; ?></td>

                                    </tr>
                                    <tr>
                                        <th>Contact No</th>
                                        <td><?php echo  $data['business_Contact_No']; ?></td>

                                    </tr>
                                    <tr>
                                        <th>Year Of Established</th>
                                        <td><?php echo  $data['business_Year_Of_Established']; ?></td>

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
                                    <?php
                                    $data1 = $link->rawQuery("select * from tb_business_registration,tb_business_social_media where tb_business_registration.business_Id=tb_business_social_media.business_Id and tb_business_registration.business_Id=?", array($business_Id));
                                    if ($link->count > 0) {
                                        foreach ($data1 as $d) {
                                    ?>

                                    </tr>
                                    <th><?php echo  $d['business_Social_Media_Name']; ?></th>
                                    <td><?php echo  $d['business_Social_Media_Link']; ?></td>
                                    <?php
                                        }
                                    }
                                    ?>
                                    </tr>
                                    <tr>
                                        <th>Partnership</th>
                                        <td><?php echo  $data['business_Patnership']; ?></td>

                                    </tr>
                                    <tr>
                                        <th>Business Description</th>
                                        <td><?php echo  $data['business_Description']; ?></td>

                                    </tr>

                                    <tr>
                                        <th>Business Ownership</th>
                                        <td><?php echo  $data['percentage_Of_Ownership']; ?></td>

                                    </tr>

                                    <tr>

                                        <th>Current Revenue</th>
                                        <td><?php echo  $data['current_Revenue']; ?></td>

                                    </tr>
                                    <tr>
                                        <th>Percentage of Growth</th>
                                        <td><?php echo  $data['percentage_Of_Growth']; ?></td>

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