<?php
ob_start();
?>
<?php
include('connect.php');
$business_Id = $_REQUEST['business_Id'];
$business_Document_Name = $_REQUEST['business_Document_Name'];





$sql = $link->insert("tb_business_document", array(
    "business_Id" => $business_Id,
    "business_Document_Name" => $business_Document_Name


));

if ($sql) {
    $img = $_FILES['business_Document']['name'];
    $ext = pathinfo($img, PATHINFO_EXTENSION);
    $filename_without_ext = pathinfo($img, PATHINFO_FILENAME);
    $pimage = $filename_without_ext . $sql . '.' . $ext;
    if (move_uploaded_file($_FILES['business_Document']['tmp_name'], "images/" . $pimage)) {
        $link->where('business_Document_Id', $sql);
        $a1 = $link->update("tb_business_document", array("business_Document" => "images/" . $pimage));

        header('location:profile-upload-document.php');
    }
}