<?php
//Tạo biến đề lưu trứ danh sách thành viên 
$list_user = array();

$ListUser = array();

//Tạo biến lưu trữ danh sách sản phầm 
$list_product = array();

$ListProduct = array();

//Hiển thị thông tin cá nhân
//Tôi là Hiệu, sinh năm 2001, căn nặng 75kg
$lastname = "Hiệu";
$birthday = "01/09/2001";
$weight = "75kg"
?>
<html>
    <head>
        <title>Bài tập</title>
    </head>
    <body>
        <h1>Thông tin cá nhân</h1>
        <p> Tôi là <strong><?php echo $lastname; ?></strong>, sinh năm <strong><?php echo $birthday; ?></strong>, cân nặng <strong><?php echo $weight; ?></strong> </p>
    </body>
</html>