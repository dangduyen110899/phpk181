<?php
    $fileupload = $_GET["fileupload"];//dùng get hứng tham số
    //buoc 1 : mở file
    $file_path = 'dulieu/'.$fileupload;
    //bước 2 : thông báo tải file cho trình duyệt
    // header("Content-Disposition: attachment; filename = $fileupload ");//tải xuống
    //buwocs 3 thông báo định dạng file trả về
    header("Content-Type: application/pdf");
    //bước 4 đọc file
    readfile($file_path);

?>