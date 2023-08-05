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
     <title>Busi Nessster | Add Package Details</title>
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
         document.getElementById("m4").innerHTML = "";


         var n = document.f1.package_Name.value;


         if (n == "Please Select the Package") {
             document.getElementById("m1").innerHTML = "Please Select The Package";
             s = false;
         }


         var p = document.f1.package_Price.value;

         if (p == 0) {
             document.getElementById("m2").innerHTML = "Enter Package Price";
             s = false;
         } else if (isNaN(p)) {
             document.getElementById("m2").innerHTML = "Enter Digits Only";
             s = false;
         }


         var e = document.f1.no_Bids.value;


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
                                         <form name="f1" method="post" action="form-package-details-insert.php"
                                             onSubmit="return ck();">
                                             <div class="form-group">
                                                 <label for="exampleInputEmail1">Package Name</label>
                                                 <select class="custom-select mb-3" name="package_Name"
                                                     id="package_Name">
                                                     <option selected>Please Select the Package</option>

                                                     <?php
                                                        include('connect.php');
                                                        $data = $link->rawQuery("select * from tb_packages");
                                                        if ($link->count > 0) {
                                                            foreach ($data as $d) {
                                                        ?>
                                                     <option value="<?php echo $d['package_Id']; ?>">
                                                         <?php echo $d['package_Name']; ?></option>
                                                     <?php
                                                            }
                                                        }
                                                        ?>


                                                 </select>
                                                 <td><span id="m1" style="color:red;"></span></td>

                                             </div>
                                             <div class="form-group">
                                                 <label for="exampleInputEmail1">Package Price</label>
                                                 <input type="text" class="form-control" name="package_Price"
                                                     id="package_Price" placeholder="Package Price">
                                                 <td><span id="m2" style="color:red;"></span></td>

                                             </div>

                                             <div class="form-group">
                                                 <label for="exampleInputEmail1">Number Of Bids</label>
                                                 <input type="text" class="form-control" name="no_Bids" id="no_Bids"
                                                     placeholder="Number Of Bids">
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