<?php
include('connect.php');

$qry = "select * from tb_business_category";
$res = mysqli_query($connect, $qry);
$count = mysqli_num_rows($res);
$i = 0;
if ($count > 0) {

    while ($row = mysqli_fetch_array($res)) {


        if ($_POST['category_Name'] == $row['category_Name']) {
            $i = 1;
            header("location:form-add-category.php?err=1");
        }
    }
}
if ($i == 0) {

    $category_Name = $_REQUEST['category_Name'];
    $sql = $link->insert("tb_business_category", array("category_Name" => $category_Name));
    if ($sql) {
        header('location:Table-Categories.php');
    } else {
    }
}