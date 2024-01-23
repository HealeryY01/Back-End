<?php
require 'db/connect.php';
if (isset($_POST['btn_login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
//    $sql = "SELECT * FROM `tbl_user` WHERE `username`= '{$username}' AND `password` = '{$password}'";
    $sql = "SELECT * FROM `tbl_user` WHERE `username`= '" . $username . "' AND `password` = '" . $password . "'";
    $result = mysqli_query($conn, $sql);
//    echo $sql;
    if (mysqli_num_rows($result) > 0) {
        echo "Bạn được phép đăng nhập";
    } else {
        echo "Thông tin đăng nhập không hợp lệ";
    }
}
?>

<html>
    <head>
        <title>SQL Injecttion</title>
    </head>
    <body>
        <h1 class="page-title">ĐĂNG NHẬP TÀI KHOẢN</h1>
        <form id="form-login" action="" method="post"><br>
            <label> Tên đăng nhập</label><br>
            <input type="text" name="username" value="" id="username" placeholder="Username"/><br>
            <label> Mật khẩu </label><br>
            <input type="password" name="password" value="" id="password" placeholder="Password"/><br><br>
            <input type="submit" id="btn-login" name="btn-login" value="Đăng nhập" />
        </form>
    </body>
</html>



