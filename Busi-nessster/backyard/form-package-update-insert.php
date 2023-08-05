<?php
include ('connect.php');
$package_Id=$_REQUEST['package_Id'];
$package_Name = $_REQUEST['package_Name'];


$link->where("package_Id",$package_Id);
$sql = $link->update("tb_packages",array("package_Name"=>$package_Name));
if($sql)
{
    header("location:Table-Packages.php");
}

?>