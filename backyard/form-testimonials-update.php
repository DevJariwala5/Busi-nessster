<?php
session_start();
if (isset($_SESSION['username'])) {
    // header('location:dashboard.php');
} else {
    header('location:index.php');
}
include('connect.php');
$testimonials_Id = $_REQUEST['testimonials_Id'];
$data = $link->rawQueryOne("select * from tb_testimonials where testimonials_Id=?", array($testimonials_Id));
if ($link->count == 0) {
    echo "Data Not Found";
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>Busi Nessster | Testimonials Edit</title>
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



        var n = document.f1.testimonials_Name.value;


        if (n == 0) {
            document.getElementById("m1").innerHTML = "Enter the Testimonials Name";
            s = false;
        }


        var p = document.f1.testimonials_Designation.value;

        if (p == 0) {
            document.getElementById("m2").innerHTML = "Enter the Testimonials Designation";
            s = false;
        }




        var d = document.f1.editor.value;


        if (d == 0) {
            document.getElementById("m4").innerHTML = "Enter Testimonials Review";
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

                                <h4 class="page-title">Add Testimonials </h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">


                                <div class="row">
                                    <div class="col-xl-6">
                                        <form name="f1" method="post" action="form-testimonials-update-insert.php"
                                            onSubmit="return ck(); " enctype="multipart/form-data">

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Testimonials Name</label>
                                                <input type="text" class="form-control" name="testimonials_Name"
                                                    id="testimonials_Nametestimonials_Name"
                                                    placeholder="Enter the Testimonials Name"
                                                    value="<?php echo $data['testimonials_Name'] ?>">
                                                <td><span id="m1" style="color:red;"></span></td>

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Testimonials Designation</label>
                                                <input type="text" class="form-control" name="testimonials_Designation"
                                                    id="testimonials_Designation"
                                                    placeholder="Enter the Testimonials Designation"
                                                    value="<?php echo $data['testimonials_Designation'] ?>">
                                                <td><span id="m2" style="color:red;"></span></td>

                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Testimonials Photo</label>
                                                <input type="File" class="form-control" name="testimonials_Photo"
                                                    id="testimonials_Photo" placeholder="Choose the Testimonials Photo">
                                                <img src="<?php echo $data['testimonials_Photo']; ?>"
                                                    style="height:50px;width:50px">
                                                <td><span id="m3" style="color:red;"></span></td>

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Testimonials Review</label>

                                                <textarea class="form-control" name="testimonials_Review" rows="4"
                                                    id="editor"
                                                    placeholder="Enter Testimonials Review"><?php echo $data['testimonials_Review'] ?></textarea>
                                                <td><span id="m4" style="color:red;"></span></td>

                                            </div>


                                            <input type="hidden" name="testimonials_Id"
                                                value="<?php echo $data['testimonials_Id']; ?>">

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
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
    </script>

</body>


</html>