<?php
    define('SECURITY',true);
    session_start();
    $cat_id=$_GET['cat_id'];
    include_once('../config/connect.php'); //vào file config => connect
    if(isset($_SESSION['mail'])&& isset($_SESSION['pass'])){
        $sql = "DELETE FROM category WHERE cat_id=$cat_id";
        $query = mysqli_query($connect,$sql);
        header('location:index.php?page_layout=category');
    }else{
        header('location:index.php');
    }
?>