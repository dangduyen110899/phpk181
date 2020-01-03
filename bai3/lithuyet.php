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
    /*1. get : pt gửi data từ client lên server thong qua các tham sô trên url, start ?, nối &
      2. thông báo cho server : $_GET['thamso]
      3. kiểm tra biến tồn tại không: hàm isset($tenbien)
      4.var-dump trả về kiểu dữ liệu +gt
      5.json: chuyển sag mảng để làm vc trong php

     
    
    if(isset($_GET['sbm'])){
        $user=$_GET['user'];
        $pass=$_GET['pass'];
        //echo $user.'<br/>'.$pass;
    }
*/
//gọi file json, đọc nội dung file thành chuỗi
    $data_json = file_get_contents('data.json');
    //chuyển json về mảng
    $arr_json = json_decode($data_json,true);
    //làm vc vs mảng json
    foreach ($arr_json as $key => $val) {
        echo $key.' : '.$val.'<br/>';
    }
    //thêm dữ liệu mới vào json
    //ghi dl vào json
    $data_en_json = json_encode($arr_json,JSON_UNESCAPED_UNICODE);
    file_put_contents('data.json',$data_en_json);

?>
</body>
</html>