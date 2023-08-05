<?php
ob_start();
?>
<?php
include('connect.php');
$business_Social_Media_Id = $_REQUEST['business_Social_Media_Id'];
$link->where('business_Social_Media_Id', $business_Social_Media_Id);
$sql = $link->delete(" tb_business_social_media");
if ($sql) {
    header('location:profile-social.php');
}