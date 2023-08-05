<?php


include('connect.php');
$testimonials_Name = $_REQUEST['testimonials_Name'];
$testimonials_Designation = $_REQUEST['testimonials_Designation'];
$testimonials_Review = $_REQUEST['testimonials_Review'];


$sql = $link->insert("tb_testimonials", array("testimonials_Name" => $testimonials_Name, "testimonials_Designation" => $testimonials_Designation, "testimonials_Review" => $testimonials_Review));

if ($sql) {
    $img = $_FILES['testimonials_Photo']['name'];
    $ext = pathinfo($img, PATHINFO_EXTENSION);
    $filename_without_ext = pathinfo($img, PATHINFO_FILENAME);
    $pimage = $filename_without_ext . $sql . '.' . $ext;
    if (move_uploaded_file($_FILES['testimonials_Photo']['tmp_name'], "images/" . $pimage)) {
        $link->where('testimonials_Id', $sql);
        $a1 = $link->update("tb_testimonials", array("testimonials_Photo" => "images/" . $pimage));
    }
    header('location:Table-Testimonials.php');
}