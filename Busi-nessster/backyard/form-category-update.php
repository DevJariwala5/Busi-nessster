<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>Busi Nessster | Edit Category</title>
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

    <script>
    function ck() {

        var s = true;

        document.getElementById("m1").innerHTML = "";



        var n = document.f1.category.value;


        if (n == 0) {
            document.getElementById("m1").innerHTML = "Enter Category";
            s = false;
        }
        return s;
    }
    </script>

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
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Uplon</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Update Category</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Category</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <?php
                    include('connect.php');
                    $category_Id = $_REQUEST['category_Id'];
                    $data = $link->rawQueryOne("select * from tb_business_category where category_Id=?", array($category_Id));
                    if ($link->count == 0) {
                        echo "Data Not Found";
                    }
                    ?>

                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">

                                <h4 class="header-title mb-4">Input</h4>

                                <div class="row">
                                    <div class="col-xl-6">
                                        <form name="f1" action="form-update-insert.php" method="post"
                                            onSubmit="return ck();">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Category</label>
                                                <input type="hidden" name="category_Id"
                                                    value=<?php echo $category_Id; ?>>
                                                <input type="text" class="form-control" name="category_Name"
                                                    id="category" placeholder="Add Category (For eg. IT)"
                                                    value="<?php echo $data['category_Name']; ?>">
                                                <td><span id="m1" style="color:red;"></span></td>

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





    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>


</html>