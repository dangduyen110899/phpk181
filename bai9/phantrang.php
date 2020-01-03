<?php
//thuạt tonas phân trang
//trang 1  : SELECT * FROM product LIMIT 0,5;
//trang 2  : SELECT * FROM product LIMIT 5,5;
//$start = ($page-1)*$limit;
//viduj
1. sp 0
2. sp 1
3. sp 2
SELECT * FROM product LIMIT 0,3
4. sp 3
5. sp 4
6. sp 5
SELECT * FROM product LIMIT 3,3
7. sp 6
8. sp 7
SELECT * FROM product LIMIT 6,3
//$start = ($page-1)*$limit;

?>