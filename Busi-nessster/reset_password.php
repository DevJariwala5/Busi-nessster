<?php
ob_start();
?>
<?php
include 'connect.php';
$cmail = $_REQUEST['cmail'];
$newpass = $_REQUEST['newpass'];
echo $cmail;
echo $newpass;
$link->where("business_Email_Id", $cmail);
$sql = $link->update("tb_business_registration", array("business_Password" => $newpass));
if ($sql) {
    header("location:success.php");
}
?>