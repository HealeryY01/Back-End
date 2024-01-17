<?php
require 'lib/validation.php';
if (isset($_POST['btn_login'])) {
    //Phất cờ
    $error = array();
    if (empty($_POST['username'])) {
        //Hạ cờ
        $error['username'] = "Không được để trống trường Username";
    } else {
        if (!(strlen($_POST['username']) >= 6 && strlen($_POST['username']) <= 32)) {
            $error['username'] = "Số lượng yêu cầu từ 6 đến 32 ký tự";
        } else {
            if (!is_username($_POST['username']))
                $error['username'] = "Username cho phép sử dụng chuỗi ký tự, chữ số, dấu chấm , dấu gạch dưới và có độ dài từ 6 đến 32 ký tự";
            else {
                $username = $_POST['username'];
            }
        }
    }
    if (empty($_POST['password'])) {
        //Hạ cờ
        $error['password'] = "Không được để trống trường Password";
    } else {
        $password = $_POST['password'];
    }
    //Kết luận
    if (empty($error)) {
        //Xử lý không có lỗi
        echo "Username: {$username} <br> Password: {$password}";
    }
}
?>
<html>
    <head>
        <title>Chuẩn hóa dữ liệu form đăng nhập</title>
    </head>
    <body>
        <style>
            p.error{
                color: red;
            }
        </style>
        <h1>Đăng nhập</h1>
        <form action="" method="POST">
            <label for="username">Username </label><br>
            <input type="text" name="username" id="username" /><br>
            <?php echo form_error('username'); ?>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password"/><br>
            <p class="error"><?php if (!empty($error['password'])) echo $error['password']; ?></p>
            <br>
            <input type="submit" name="btn_login" value="Login"/>
        </form>
    </body>
</html>


