<?php
ob_start();
?>
<?php


include 'connect.php';

$bid_Id = $_REQUEST['bid_Id'];
$data = $link->rawQueryOne("select * from tb_bid where bid_Id=?", array($bid_Id));
if ($link->count == 0) {
    echo "Data Not Found";
}
$i = $data['bid_Status'];
echo $i;
if ($i == 0) {
    $i = 1;
} else if ($i == 1) {
    $i = 0;
}
$link->where("bid_Id", $bid_Id);
$sql = $link->update("tb_bid", array("bid_Status" => $i));
header("location:profile-business-dashboard.php");