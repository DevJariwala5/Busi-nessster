<?php
ob_start();
?>
<?php
include('connect.php');
$business_Id = $_REQUEST['business_Id'];
$investor_Id = $_REQUEST['investor_Id'];
$business_Review = $_REQUEST['business_Review'];





$sql = $link->insert("tb_business_review", array(
    "business_Id" => $business_Id,
    "investor_Id" => $investor_Id,
    "business_Review" => $business_Review



));

if ($sql) {
    header("location:business-details.php?business_Id=$business_Id");
}