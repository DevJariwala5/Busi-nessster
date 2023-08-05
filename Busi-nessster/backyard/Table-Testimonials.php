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
    <title>Busi Nessster | Testimonials </title>
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

                                <h4 class="page-title">Testimonials</h4>
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
                                            <th>Testimonials Name</th>
                                            <th>Testimonials Designation</th>

                                            <th>Testimonials Photo</th>
                                            <th>Testimonials Review </th>

                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include('connect.php');
                                        $data = $link->rawQuery("select * from tb_testimonials");
                                        if ($link->count > 0) {
                                            foreach ($data as $d) {
                                        ?>
                                        <tr>
                                            <td><?php echo $d['testimonials_Name']; ?></td>
                                            <td><?php echo $d['testimonials_Designation']; ?> </td>

                                            <td><img src="<?php echo $d['testimonials_Photo']; ?>"
                                                    style="height:100px;width:100px;" /></td>
                                            <td><?php echo $d['testimonials_Review']; ?></td>
                                            <td><a
                                                    href="
                                                    form-testimonials-update.php?testimonials_Id=<?php echo $d['testimonials_Id']; ?>"><input
                                                        type="button" name="edit" class="btn btn-primary"
                                                        value="Edit"></a>
                                            </td>
                                            <td><a
                                                    href="form-testimonials-delete.php?testimonials_Id=<?php echo $d['testimonials_Id']; ?>"><input
                                                        type="button" name="delete" class="btn btn-primary"
                                                        value="Delete"
                                                        style="background-color: red;border-color: red;"></a>
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