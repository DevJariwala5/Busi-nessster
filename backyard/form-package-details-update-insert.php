<?php
include ('connect.php');
$package_Details_Id=$_REQUEST['package_Details_Id'];
$package_Price = $_REQUEST['package_Price'];
$no_Bids = $_REQUEST['no_Bids'];


$link->where("package_Details_Id",$package_Details_Id);
$sql = $link->update("tb_package_details",array("package_Price"=>$package_Price,"No_Of_Bids"=>$no_Bids));
if($sql)
{
  header('location:Table-Packages-Details.php');
}