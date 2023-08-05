<?php
ob_start();
?>
<?php
include 'connect.php';

$designation_Id = $_REQUEST['designation_Id'];
$designation_Name = $_REQUEST['designation_Name'];



//update
$link->where("designation_Id", $designation_Id);
$sql = $link->update("tb_business_designation", array("designation_Name" => $designation_Name));
if ($sql) {
    header("location:profile-designation.php");
}