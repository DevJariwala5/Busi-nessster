<?php
ob_start();
?>
<?php
include('connect.php');
$business_Id = $_REQUEST['business_Id'];
$business_Social_Media_Name = $_REQUEST['business_Social_Media_Name'];
$business_Social_Media_Link = $_REQUEST['business_Social_Media_Link'];






$sql = $link->insert("tb_business_social_media", array(
    "business_Id" => $business_Id,
    "business_Social_Media_Name" => $business_Social_Media_Name,
    "business_Social_Media_Link" => $business_Social_Media_Link


));

if ($sql) {
    header('location:profile-social.php');
}