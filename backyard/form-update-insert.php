<?php
include ('connect.php');
$category_Id=$_REQUEST['category_Id'];
$category_Name = $_REQUEST['category_Name'];


$link->where("category_Id",$category_Id);
$sql = $link->update("tb_business_category",array("category_Name"=>$category_Name));
if($sql)
{
    header("location:Table-Categories.php");
}

?>