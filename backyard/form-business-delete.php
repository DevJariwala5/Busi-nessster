<?php

session_start();
if (isset($_SESSION['username'])) {
    // header('location:dashboard.php');
} else {
    header('location:index.php');
}

include('connect.php');
$business_Id = $_REQUEST['business_Id'];

$data = $link->rawQueryOne("select * from tb_business_registration where business_Id=?", array($business_Id));
if (file_exists($data['business_Logo'])) {
    $i = $data['business_Logo'];
    $link->where('business_Id', $business_Id);
    $sql = $link->delete("tb_business_registration");
    if ($sql) {
        if (unlink($i)) {
            header('location:Table-Business.php');
        }
    }
}