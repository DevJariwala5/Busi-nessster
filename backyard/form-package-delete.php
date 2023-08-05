<?php
include('connect.php');
$package_Id = $_REQUEST['package_Id'];
$link->where('package_Id',$package_Id);
$sql = $link->delete("tb_packages");
if($sql)
{
    header('location:Table-Packages.php');
}
?> 	 