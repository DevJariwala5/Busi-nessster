<?php
include('connect.php');
$package_Details_Id = $_REQUEST['package_Details_Id'];
$data = $link->rawQueryOne("select * from tb_package_details,tb_packages where tb_package_details.package_Id=tb_packages.package_Id and package_Details_Id=?", array($package_Details_Id));

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>Busi Nessster | Package Details Edit</title>
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
        document.getElementById("m2").innerHTML = "";
        document.getElementById("m3").innerHTML = "";
        document.getElementById("m4").innerHTML = "";


        var n = document.f1.package_name.value;
        var nr = /^[A-Za-z]{3,15}$/;

        if (n == "Select the Package") {
            document.getElementById("m1").innerHTML = "Please Select The Pakage";
            s = false;
        }


        var p = document.f1.package_price.value;

        if (p == 0) {
            document.getElementById("m2").innerHTML = "Enter Package Price";
            s = false;
        } else if (isNaN(p)) {
            document.getElementById("m2").innerHTML = "Enter Digits Only";
            s = false;
        }

        var a = document.f1.package_duration.value;

        if (a == 0) {
            document.getElementById("m3").innerHTML = "Enter Packge Duration";
            s = false;
        }

        var e = document.f1.no_bids.value;


        if (e == 0) {
            document.getElementById("m4").innerHTML = "Enter Number of Bids";
            s = false;
        } else if (isNaN(e)) {
            document.getElementById("m4").innerHTML = "Enter Digits Only";
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
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Uplon</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Add Package</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Package</h4>
                            </div>
                        </div>
                    </div>


                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">

                                <h4 class="header-title mb-4">Input</h4>


                                <div class="row">
                                    <div class="col-xl-6">

                                        <form name="f1" method="post" action="form-package-details-update-insert.php"
                                            onSubmit="return ck();">
                                            <div class="form-group">
                                                <input type="hidden" name="package_Details_Id"
                                                    value=<?php echo $package_Details_Id; ?>>

                                                <label for="exampleInputEmail1">Package Name</label>
                                                <input type="text" class="form-control" name="package_Name"
                                                    id="package_name" placeholder="Enter Package Name"
                                                    value="<?php echo $data['package_Name']; ?>" readonly>
                                                <td><span id="m1" style="color:red;"></span></td>


                                                </select>
                                                <td><span id=" m1" style="color:red;"></span></td>

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Package Price</label>
                                                <input type="text" class="form-control" name="package_Price"
                                                    id="package_price" placeholder="Package Price"
                                                    value="<?php echo $data['package_Price']; ?>">
                                                <td><span id="m2" style="color:red;"></span></td>

                                            </div>


                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Number Of Bids</label>
                                                <input type="text" class="form-control" name="no_Bids" id="no_bids"
                                                    placeholder="Number Of Bids"
                                                    value="<?php echo $data['No_Of_Bids']; ?>">
                                                <td><span id="m4" style="color:red;"></span></td>

                                            </div>




                                            <button type="submit" class="btn btn-primary">Submit</button>
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