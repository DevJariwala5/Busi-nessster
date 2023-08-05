<?php
ob_start();
?>
<?php
include 'connect.php';
$cmail = $_REQUEST['cmail'];
$newpass = $_REQUEST['newpass'];
echo $cmail;
echo $newpass;
$link->where("investor_Email_Id", $cmail);
$sql = $link->update("tb_investor_registration", array("investor_Password" => $newpass));
if ($sql) {
    header("location:success.php");
}
?>