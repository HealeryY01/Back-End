<?php
/*
 * Bước 1: Xây dựng gioa diện
 * Bước 2:Chuẩn bị dữu liệu => Tạo biến
 * Bước 3:Đổ dữ liệu php lê html
 */
$fullname = "Nguyễn Thế Hiệu";
$username = "Healer";
$email = "nguyenthehieua2001@gmail.com";
?>
<html>
    <head>
        <title>Demo</title>
    </head>
    <body>
        <h1>Thông tin cá nhân</h1>
        <p> Họ và tên: <strong><?php echo"$fullname"; ?></strong> </p>
        <p>Username: <strong><?php echo"$username"; ?></strong></p>
        <p>Email: <strong><?php echo"$email"; ?></strong> </p>
    </body>
</html>



