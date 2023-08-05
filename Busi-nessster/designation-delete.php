<?php
ob_start();
?>
<?php
include('connect.php');
$designation_Id = $_REQUEST['designation_Id'];
$link->where('designation_Id', $designation_Id);
$sql = $link->delete("tb_business_designation");
if ($sql) {
    header('location:profile-designation.php');
}