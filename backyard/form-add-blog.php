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
    <title>Busi Nessster | Blog</title>
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
            document.getElementById("m5").innerHTML = "";


            var n = document.f1.blog_Title.value;


            if (n == 0) {
                document.getElementById("m1").innerHTML = "Enter Blog Title";
                s = false;
            }


            var p = document.f1.blog_Author.value;

            if (p == 0) {
                document.getElementById("m2").innerHTML = "Enter Blog Author";
                s = false;
            }

            var a = document.f1.blog_Date.value;

            if (a == 0) {

                document.getElementById("m3").innerHTML = "Enter Blog Date";
                s = false;
            }

            var e = document.f1.blog_Thumb_Image.value;


            if (e == 0) {
                document.getElementById("m4").innerHTML = "Upload Blog Thumb Image";
                s = false;
            }
            var l = document.f1.blog_Short_Description.value;


            if (l == 0) {
                document.getElementById("m6").innerHTML = "Enter Blog Short Description";
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

                                <h4 class="page-title">Add Package Details</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">


                                <div class="row">
                                    <div class="col-xl-6">
                                        <form name="f1" method="post" action="form-blog-insert.php" onSubmit="return ck(); " enctype="multipart/form-data">

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Blog Title</label>
                                                <input type="text" class="form-control" name="blog_Title" id="blog_Title" placeholder="Enter the Blog Title">
                                                <td><span id="m1" style="color:red;"></span></td>

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Blog Author</label>
                                                <input type="text" class="form-control" name="blog_Author" id="blog_Author" placeholder="Enter the Blog Author">
                                                <td><span id="m2" style="color:red;"></span></td>

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Blog Date</label>
                                                <input type="date" class="form-control" name="blog_Date" id="blog_Date" placeholder="Enter the Blog Date">
                                                <td><span id="m3" style="color:red;"></span></td>

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Blog Thumb Image</label>
                                                <input type="File" class="form-control" name="blog_Thumb_Image" id="blog_Thumb_Image" placeholder="Enter Blog Date">
                                                <td><span id="m4" style="color:red;"></span></td>

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Blog Short Description</label>

                                                <textarea class="form-control" name="blog_Short_Description" rows="4" id="blog_Short_Description" placeholder="Enter Blog Short Desciption"></textarea>
                                                <td><span id="m6" style="color:red;"></span></td>

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Blog Description</label>

                                                <textarea class="form-control" name="blog_Description" rows="4" id="editor" placeholder="Enter Blog Desciption(optional)"></textarea>
                                                <td><span id="m5" style="color:red;"></span></td>

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