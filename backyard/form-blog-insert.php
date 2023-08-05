<?php


include('connect.php');
$blog_Title = $_REQUEST['blog_Title'];
$blog_Author = $_REQUEST['blog_Author'];
$blog_Date = $_REQUEST['blog_Date'];
$blog_Short_Description = $_REQUEST['blog_Short_Description'];
$blog_Description = $_REQUEST['blog_Description'];


$sql = $link->insert("tb_blog", array("blog_Title" => $blog_Title, "blog_Author" => $blog_Author, "blog_Date" => $blog_Date, "blog_Short_Description" => $blog_Short_Description, "blog_Description" => $blog_Description));

if ($sql) {
    $img = $_FILES['blog_Thumb_Image']['name'];
    $ext = pathinfo($img, PATHINFO_EXTENSION);
    $filename_without_ext = pathinfo($img, PATHINFO_FILENAME);
    $pimage = $filename_without_ext . $sql . '.' . $ext;
    if (move_uploaded_file($_FILES['blog_Thumb_Image']['tmp_name'], "images/" . $pimage)) {
        $link->where('blog_Id', $sql);
        $a1 = $link->update("tb_Blog", array("blog_Thumb_Image" => "images/" . $pimage));
    }
    header('location:Table-Blog.php');
}
