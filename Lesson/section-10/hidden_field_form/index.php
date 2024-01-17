<?php

function show_array($data) {
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo"</pre>";
    }
}

//show_array($_SERVER);
//Kiểm tra submit form
if (isset($_POST['btn_login'])) {
    $info_user = array(
        'username' => 'admin',
        'password' => 'admin!@#'
    );
    $error = array();
    if (empty($_POST['username'])) {
        $error['username'] = "Không được để trống Tên đăng nhập <br>";
    } else {
        $username = $_POST['username'];
    }

    if (empty($_POST['username'])) {
        $error['password'] = "Không được để trống Mật khẩu";
    } else {
        $password = $_POST['password'];
    }
    $username = $_POST['username'];
    $password = $_POST['password'];

    /*
     * B1: Kiểm tra dữ liệu
     * B2: Gán dữ liệu 
     * B3: Kiểm tra login
     * B4: Xử lý login
     * --- Chuyển hướng cart.php
     * --- Thôgn báo: Lỗi đăng nhập 
     */

    if (empty($error)) {//Dữ liệu đã nhập
        if (($username == $info_user['username']) && $password == $info_user['password']) {
            $redirect_to = $_POST['redirect_to'];
            echo $redirect_to;
            header("Location:{$redirect_to}");
        }else{
            $error['login'] = "Tên đăng nhập hoặc mật khẩu khôgn chính xác";
        }
    } if(!empty($error)){
        show_array($error);
    }
}
?>
<html>
    <head>
        <title>Nhận dữ liệu từ hidden field</title>
    </head>
    <body>
        <h1>Đăng nhập</h1>
        <form action="" method="POST">
            Username: <input type="text" name="username" ><br><br>
            Password: <input type="password" name="password"><br><br>
            <input type="hidden" name="redirect_to" value="cart.php"/>
            <input type="submit" name="btn_login" value="Login">
        </form>
    </body>
</html>



