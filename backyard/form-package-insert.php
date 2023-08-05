<?php


include('connect.php');
$qry = "select * from tb_packages";
$res = mysqli_query($connect, $qry);
$count = mysqli_num_rows($res);
$i = 0;
if ($count > 0) {

    while ($row = mysqli_fetch_array($res)) {


        if ($_POST['package_Name'] == $row['package_Name']) {
            $i = 1;
            header("location:form-add-package.php?err=1");
        }
    }
}
if ($i == 0) {
    $package_Name = $_REQUEST['package_Name'];
    $sql = $link->insert("tb_packages", array('package_Name' => $package_Name));
    if ($sql) {
        header('location:Table-Packages.php');
    }
}
