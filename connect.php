<?php
ob_start();
?>
<?php

include('MysqliDb.php');

$link = new MysqliDb("localhost", "root", "", "db_project") or die();
$connect = mysqli_connect("localhost", "root", "", "db_project") or die();

$project_name = "Busi Nessster";
$host_name = 'mail.accreteit.com';
$port = '587';
$email_username = 'student@accreteit.com';
$email_password = 'Kem_6o??';
$team_name = 'Busi Nessster';