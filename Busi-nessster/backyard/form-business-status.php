<?php

session_start();
if (isset($_SESSION['username'])) {
    // header('location:dashboard.php');
} else {
    header('location:index.php');
}

include 'connect.php';

$business_Id = $_REQUEST['business_Id'];
$data = $link->rawQueryOne("select * from tb_business_registration where business_Id=?", array($business_Id));
if ($link->count == 0) {
    echo "Data Not Found";
}
$i = $data['business_Active'];
echo $i;
if ($i == 0) {
    $i = 1;
} else if ($i == 1) {
    $i = 0;
}
$link->where("business_Id", $business_Id);
$sql = $link->update("tb_business_registration", array("business_Active" => $i));
header("location:Table-Business.php");