<?php
ob_start();
?>
<?php
include 'connect.php';

$business_Document_Id = $_REQUEST['business_Document_Id'];
$business_Document_Name = $_REQUEST['business_Document_Name'];;

//update
$link->where("business_Document_Id", $business_Document_Id);
$sql = $link->update("tb_business_document", array(
    "business_Document_Name" => $business_Document_Name

));
if ($sql) {
    $img = $_FILES['business_Document']['name'];
    if ($img != null || $img != "") {
        $ext = pathinfo($img, PATHINFO_EXTENSION);
        $filename_without_ext = pathinfo($img, PATHINFO_FILENAME);

        $pimage = $filename_without_ext . $business_Document_Id . '.' . $ext;

        if (move_uploaded_file($_FILES['business_Document']['tmp_name'], "images/" . $pimage)) {
            $link->where('business_Document_Id', $business_Document_Id);
            $a1 = $link->update("tb_business_document", array("business_Document" => "images/" . $pimage));
        }
    }

    header("location:profile-upload-document.php");
}