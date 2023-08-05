<?php
include('connect.php');
$blog_Id = $_REQUEST['blog_Id'];
$data = $link->rawQueryOne("select * from tb_blog where blog_Id=?", array($blog_Id));
if (file_exists($data['blog_Thumb_Image'])) {
    $i = $data['blog_Thumb_Image'];
    $link->where('blog_Id', $blog_Id);
    $sql = $link->delete("tb_blog");
    if ($sql) {
        if (unlink($i)) {
            header('location:Table-Blog.php');
        }
    }
}