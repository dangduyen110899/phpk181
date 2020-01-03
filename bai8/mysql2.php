<?php
    //lệnh bổ trợ nâng cao cho select
    //1.where 
    // ví dụ : lấy tất cả các thành viên ở hn
    SELECT * FROM `member` WHERE `address`= 'Ha Noi'
    //2,3: OR : AND : hoặc và
    //lấy ra các thành viên ở hn và sn 2000
    SELECT * FROM `member` WHERE `address`= 'Ha Noi' AND birthday >='2000-01-01' AND birthday <='1999-12-31'
    //4.lấy ra tất cả các thành viên ở hn hoặc sinh năm 2000
    thay and  => or
    //order by (sx theo thứ tự tăng dần ASC, giảm dần : DESC)
    SELECT * FROM sinhvienk60 ORDER BY diemthi ASC
    //limit giới hạn bản ghi hiển thị
    //lấy 5 sp cũ nhất
    SELECT * FROM product ORDER BY prd_id ASC limit 5
    //kết nối banngr
    SELECT * FROM product inner join category on product.cart_id = category.cart_id 
    
    
?>