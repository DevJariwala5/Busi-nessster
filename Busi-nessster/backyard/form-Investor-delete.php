<?php
include('connect.php');
$investor_Id = $_REQUEST['investor_Id'];
$link->where('investor_Id',$investor_Id);
$sql = $link->delete("tb_investor_registration");
if($sql)
{
    header('location:Table-Investors.php');
}
?>