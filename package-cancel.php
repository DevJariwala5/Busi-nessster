<?php
ob_start();
?>
<?php
session_start();

include 'connect.php';

$package_Id = "0";
$remaining_Bid = "0";
$investor_Id = $_SESSION['investor_Id'];

echo $investor_Id;

//update
$link->where("investor_Id", $investor_Id);
$sql = $link->update("tb_investor_registration", array(
    "package_Id" => $package_Id,
    "remaining_Bid" => $remaining_Bid

));
if ($sql) {


    header("location:package.php");
}