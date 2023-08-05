<?php
ob_start();
?>
<?php
include('connect.php');
$business_Id = $_REQUEST['business_Id'];
$designation_Name = $_REQUEST['designation_Name'];





$sql = $link->insert("tb_business_designation", array(
    "business_Id" => $business_Id,
    "designation_Name" => $designation_Name


));

if ($sql) {
    header('location:profile-designation.php');
}