<?php
//có 3 bước để lấy csdl
//bước 1: kết nối cơ sở dl
 $connect = mysqli_connect('localhost','root','','hocphp181');
 if($connect){
    mysqli_query($connect,"SET NAME 'utf8'");
    //print_r('Kết nối thành công');

 }else{
    echo "kết nối thất bại";
 }
 //buwocs 2: viết truy vấn và thực thi
$sql = "SELECT * FROM member";
$query = mysqli_query($connect,$sql);
// buwocs 3: lấy ra bản ghi
//hàm 1 : đếm số bản ghi
//$num_row = mysqli_num_rows($query);
//echo $num_row;
//hàm lấy ra bản ghi trong table
//$row = mysqli_fetch_assoc($query)
//sử dụng vòng lặp while lấy ra dữ liệu
while($row = mysqli_fetch_assoc($query)){
    echo $row['name'].'<br/>'.$row['birthday'].'<br/>'.$row['address'].'<br/>'.$row['phone'].'<br/>'.$row['code'];
    echo '<hr/>';
}




?>