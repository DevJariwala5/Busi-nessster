<?php
ob_start();
?>
<?php
include('connect.php');
$business_Id = $_REQUEST['business_Id'];
$business_Description = $_REQUEST['business_Description'];


$link->where("business_Id", $business_Id);
$sql = $link->update("tb_business_registration", array("business_Description" => $business_Description));
if ($sql) {
    header("location:profile-desciption.php");
}