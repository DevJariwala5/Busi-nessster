<?php
include('connect.php');
$category_Id = $_REQUEST['category_Id'];
$link->where('category_Id',$category_Id);
$sql = $link->delete("tb_business_category");
if($sql)
{
    header('location:table-Categories.php');
}
?>