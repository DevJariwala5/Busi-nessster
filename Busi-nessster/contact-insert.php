<?php
ob_start();
?>
<?php
include('connect.php');

$contact_Name = $_REQUEST['contact_Name'];
$contact_Email = $_REQUEST['contact_Email'];
$contact_Phone = $_REQUEST['contact_Phone'];
$contact_Message = $_REQUEST['contact_Message'];



$sql = $link->insert("tb_contact", array(
    "contact_Name" => $contact_Name,
    "contact_Email" => $contact_Email,
    "contact_Phone" => $contact_Phone,
    "contact_Message" => $contact_Message

));

if ($sql) {

    header('location:contact.php');
}