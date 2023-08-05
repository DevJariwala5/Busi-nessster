<?php
include('connect.php');
$testimonials_Id = $_REQUEST['testimonials_Id'];
$data = $link->rawQueryOne("select * from tb_testimonials where testimonials_Id=?", array($testimonials_Id));
if (file_exists($data['testimonials_Photo'])) {
    $i = $data['testimonials_Photo'];
    $link->where('testimonials_Id', $testimonials_Id);
    $sql = $link->delete("tb_testimonials");
    if ($sql) {
        if (unlink($i)) {
            header('location:Table-Testimonials.php');
        }
    }
}