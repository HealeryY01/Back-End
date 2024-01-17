<?php
ob_start();
session_start();
//Thiết lập khi login thành công 
//$is_login = true;

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
            $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
            if (!preg_match($partten, $_POST['username']))
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
        $partten = "/^([A-Z]){1}([\w_.!@#$%^&*()]+){5,31}$/";
        if (!preg_match($partten, $_POST['password']))
            $error['password'] = "Password cho phép sử dụng chữ cái , chữ số, và ký tự đặc biệt, bắt đầu ký tự viết hoa và có độ dài từ 6 đến 32 ký tự";
        else {
            $password = $_POST['password'];
        }
    }
    //Kết luận
    if (empty($error)) {
        $data = array(
            'username' => 'unitop',
            'password' => 'Hieu123@'
        );
        if (($username == $data['username']) && ($password == $data['password'])) {
            $_SESSION['is_login'] = true;
            $_SESSION['user_login'] = 'unitop';
            header("Location: index.php");
        } else {
            echo "Thông tin tài khoản không tồn tại trên hệ thống ";
        }
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
            <p class="error"><?php if (!empty($error['username'])) echo $error['username']; ?></p>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password"/><br>
            <p class="error"><?php if (!empty($error['password'])) echo $error['password']; ?></p>
            <br>
            <input type="submit" name="btn_login" value="Login"/>
        </form>
    </body>
</html>




