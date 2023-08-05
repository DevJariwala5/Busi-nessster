<?php
include('connect.php');
$package_Details_Id = $_REQUEST['package_Details_Id'];
$link->where('package_Details_Id',$package_Details_Id);
$sql = $link->delete("tb_package_details");
if($sql)
{
    header('location:Table-Packages-Details.php');
}
?>