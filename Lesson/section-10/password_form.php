<?php
/*
 * B1: Kiểm tra submit form
 * B2: Lấy dữ liệu
 */

if (isset($_POST['btn_login'])) {

    if (empty($_POST['username'])) {
        echo "Không được để trống Tên đăng nhập <br>";
    } else {
        $username = $_POST['username'];
    }

    if (empty($_POST['username'])) {
        echo "Không được để trống Mật khẩu";
    } else {
        $password = $_POST['password'];
        echo $password;
    }
}
?>

<html>
    <head>
        <title>Lấy dữ liệu từ textbox</title>
    </head>
    <body>
        <h1>Đăng nhập</h1>
        <form action="" method="POST">
            Username: <input type="text" name="username" ><br><br>
            Password: <input type="password" name="password"><br><br>
            <input type="submit" name="btn_login" value="Login">
        </form>
    </body>
</html>

