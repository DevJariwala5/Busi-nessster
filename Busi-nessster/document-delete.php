<?php
ob_start();
?>
<?php
include('connect.php');
$business_Document_Id = $_REQUEST['business_Document_Id'];

$data = $link->rawQueryOne("select * from tb_business_document where business_Document_Id=?", array($business_Document_Id));

if (file_exists($data['business_Document'])) {
    $i = $data['business_Document'];
    $link->where('business_Document_Id', $business_Document_Id);
    $sql = $link->delete("tb_business_document");
    if ($sql) {
        if (unlink($i)) {
            header('location:profile-upload-document.php');
        }
    }
}