<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    //session
    //session laf 1 phiên làm việc trên website,là cách đơn  giản để lưu trữ 1 biến từ trag này sag trag khác
    // 1 session = 1tk user
    //session_start(); //khai báo môi trường làm việc
   // $_SESSION['name'] = giatri ;// cú pháp thực thi
    //hủy session
    //session_unset(); // xóa bỏ tất cả session xinh ra trong cùng phiên ới session bị chọn xóa bỏ
    //unset($name);    //xóa từng session đơn lẻ
    //session_destroy() // xóa bỏ tất cả ss tồn tại
   /* session_start();
    if(isset($_POST['sbm'])){
        $_SESSION['name'] =  $_POST['name'];

    }
    if(isset($_SESSION['name'])){
        echo  $_SESSION['name'];
    }*/
    //hàm chuyển hướng
   // header('location: xoa.php');//cùng thư mục
    //hàm báo lỗi, cho file chết 
    //die('bạn ko có quyền truy cập');
    //hằng
    define('PI','Xin chào vietpro');
    //echo PI ;
    if(defined('PI')){// kiểm tra hăng đúng ko
        echo 'abc';
    }
    
    ?>
    <form action="" method="post">
        <input type="text" name="name" value="">
        <input type="submit" name="sbm" value="">

    </form>
</body>
</html>