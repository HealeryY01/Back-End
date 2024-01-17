<?php
if (isset($_POST['btn-login'])) {
    $error = array();
    #Kiểm trả username
    if (empty($_POST['username'])) {
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
    #Kiểm trả password
    if (empty($_POST['password'])) {
        $error['password'] = "Không được để trống trường Password";
    } else {
        $partten = "/^[A-Za-z0-9_\.!@#$%^&*()]{6,32}$/";
        if (!preg_match($partten, $_POST['password']))
            $error['password'] = "Password cho phép sử dụng chữ cái , chữ số, và ký tự đặc biệt, bắt đầu ký tự viết hoa và có độ dài từ 6 đến 32 ký tự";
        else {
            $password = $_POST['password'];
        }
    }
    //Kết luận
    if (empty($error)) {
        if (check_login($username, $password )) {
            //Lưu trữ phiên đăng nhập 
               $_SESSION['is_login']=true;
               $_SESSION['user_login']=$username;
               //Chuyển hướng vào trong hệ thống
               redirect("?page=home");
        } else {
          $error['account'] = "Username hoặc Password không tồn tại trên hệ thống ";
        }
    }
}
?>

<html>
    <head>
        <title>Trang đăng nhập</title>
        <link rel="stylesheet" href="public/css/reset.css" type="text/css"/>
        <link rel="stylesheet" href="public/css/login.css" type="text/css"/>
    </head>
    <body>
        <div id="wp-form-login">
            <h1 class="page-title">ĐĂNG NHẬP</h1>
            <form id="form-login" action="" method="post">
                <input type="text" name="username" value="" id="username" placeholder="Username"/>
                <p class="error"><?php if (!empty($error['username'])) echo $error['username']; ?></p>
                <input type="password" name="password" value="" id="password" placeholder="Password"/>
                <p class="error"><?php if (!empty($error['password'])) echo $error['password']; ?></p>
                <input type="submit" id="btn-login" name="btn-login" value="Đăng nhập" />
                <p class="error"><?php if (!empty($error['account'])) echo $error['account']; ?></p>
            </form>
            <a href="" id="lost-pass">Quên mật khẩu?</a>
        </div>
    </body>
</html>



