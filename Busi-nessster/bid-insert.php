<?php
ob_start();
?>
<?php
include('connect.php');
$investor_Id = $_REQUEST['investor_Id'];
$business_Id = $_REQUEST['business_Id'];
$amount = $_REQUEST['amount'];
$equity = $_REQUEST['equity'];




$sql = $link->insert("tb_bid", array(
    "investor_Id" => $investor_Id,
    "business_Id" => $business_Id,
    "amount" => $amount,
    "equity" => $equity




));

if ($sql) {

    $data =  $link->rawQueryOne("select * from tb_investor_registration where investor_Id='$investor_Id'");
    $remaining_Bid = $data['remaining_Bid'];

    $remaining_Bid = $remaining_Bid - 1;

    $link->where("investor_Id", $investor_Id);
    $sql1 = $link->update("tb_investor_registration", array(

        "remaining_Bid" => $remaining_Bid

    ));
    if ($sql1) {
        header("location:business-details.php?business_Id=$business_Id");
    }
}