<?php

    
include('connect.php');
$package_Id =$_REQUEST['package_Name'];
$package_Price = $_REQUEST['package_Price'];

$no_Bids = $_REQUEST['no_Bids'];


$sql=$link->insert("tb_package_details",array("package_Id"=>$package_Id,"package_Price"=>$package_Price,"No_Of_Bids"=>$no_Bids));

if($sql)
{
   header('location:Table-Packages-Details.php');
}