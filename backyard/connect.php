<?php 

include('MysqliDb.php');

$link = new MysqliDb("localhost","root","","db_project") or die();
$connect = mysqli_connect("localhost","root","","db_project") or die();

$project_name = "Busi Nessster";