<?php
include('connect.php');
$contact_Id = $_REQUEST['contact_Id'];
$link->where('contact_Id', $contact_Id);
$sql = $link->delete("tb_contact");
if ($sql) {
    header('location:Table-Contact-us.php');
}