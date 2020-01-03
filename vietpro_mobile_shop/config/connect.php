<?php
    if(!defined('SECURITY')){
        die('Bạn ko có quyền truy cập');
    }
    
    //bước 1: kết nối cơ sở dl
    $connect = mysqli_connect('localhost','root','','phpk181');
    if($connect){
    mysqli_query($connect,"SET NAME 'utf8'");
    //print_r('Kết nối thành công');

    }else{
    echo "kết nối thất bại";
    }


?>