<?php
ob_start();
?>
<?php
include 'connect.php';

$business_Id = $_REQUEST['business_Id'];
$investor_Id = $_REQUEST['investor_Id'];
$bid_Id = $_REQUEST['bid_Id'];
$amount = $_REQUEST['amount'];
$equity = $_REQUEST['equity'];





//update
$link->where("bid_Id", $bid_Id);
$sql = $link->update("tb_bid", array(
    "business_Id" => $business_Id,
    "investor_Id" => $investor_Id,
    "amount" => $amount,
    "equity" => $equity
));
if ($sql) {
    header("location:business-details.php?business_Id= $business_Id ");
}