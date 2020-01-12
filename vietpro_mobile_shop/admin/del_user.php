<?php
    define('SECURITY',true);
    session_start();
    $user_id=$_GET['user_id'];
    include_once('../config/connect.php'); //vào file config => connect
    if(isset($_SESSION['mail'])&& isset($_SESSION['pass'])){
        $sql = "DELETE FROM user WHERE user_id=$user_id";
        $query = mysqli_query($connect,$sql);
        header('location:index.php?page_layout=user');
    }else{
        header('location:index.php');
    }
?>