<?php
ob_start();
?>
<?php
include 'connect.php';

$business_Social_Media_Id = $_REQUEST['business_Social_Media_Id'];
$business_Social_Media_Name = $_REQUEST['business_Social_Media_Name'];
$business_Social_Media_Link = $_REQUEST['business_Social_Media_Link'];




//update
$link->where("business_Social_Media_Id", $business_Social_Media_Id);
$sql = $link->update("tb_business_social_media", array(
    "business_Social_Media_Name" => $business_Social_Media_Name,
    "business_Social_Media_Link" => $business_Social_Media_Link
));


if ($sql) {
    header("location:profile-social.php");
}