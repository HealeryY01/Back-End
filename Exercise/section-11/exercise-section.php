<?php
require 'lib/data.php';
require 'lib/validation.php';
/*
 * Bước 1: Xây dựng giao diện\
 * Bước 2: Validation
 * 2.2 : Tạo hàm is_phone_number
 * 2.3 : Xử lý submit form
 * Bước 3: Xuất dữ liệu
 */
if (isset($_POST['btn_reg'])) {
    $error = array();
    #Chuẩn háo fullname
    if (empty($_POST['fullname'])) {
        $error['fullname'] = "Không được để trống Họ và tên";
    } else {
        $fullname = $_POST['fullname'];
    }
    #Chuẩn háo username
    if (empty($_POST['username'])) {
        $error['username'] = "Không được để trống Tên đăng nhập";
    } else {
        if (!is_username($_POST['username'])) {
            $error['username'] = "Tên đăng nhập không đúng định dạng";
        } else {
            $username = $_POST['username'];
        }
    }
    #Chuẩn háo password
    if (empty($_POST['password'])) {
        $error['password'] = "Không được để trống Mật khẩu";
    } else {
        if (!is_username($_POST['password'])) {
            $error['password'] = "Mật khẩu không đúng định dạng";
        } else {
            $password = md5($_POST['password']);
        }
    }
    #Chuẩn háo phone
    if (empty($_POST['phone'])) {
        $error['phone'] = "Không được để trống Số điện thoại";
    } else {
        if (!is_username($_POST['phone'])) {
            $error['phone'] = "Số điện thoại không đúng định dạng";
        } else {
            $phone = $_POST['phone'];
        }
    }
    if (empty($error)) {
        $info = array(
            'fullname' => $fullname,
            'username' => $username,
            'password' => $password,
            'phone' => $phone
        );
        show_array($info);
    }
}
?>
<html>
    <head>
        <title>Form đăng ký</title>
    </head>
    <body>
        <style>
            label{
                display: block;
                margin-top: 15px;
            }
            input[type='text'], input[type='password']{
                padding: 5px 10px;
                border: 1px solid #c3bbbb;
            }
            #btn_reg{
                margin-top: 20px;
                padding: 5px 20px;
                border: none;
                background: #000000;
                color: #fff;
                display: block;
                cursor: pointer;
            }

            .error{
                color: #f00;
                font-style: italic;
            }
        </style>
        <h1>Đăng ký tài khoản </h1>
        <form action="" method="POST">
            <label for="fullname">Họ và tên</label>
            <input type="text" name="fullname" id="fullname" value=" <?php echo set_value('fullname'); ?> " />
            <?php echo form_error('fullname'); ?>
            <label for="username">Tên đăng nhập</label><br>
            <input type="text" name="username" id="username" value="<?php echo set_value('username'); ?>" />
            <?php echo form_error('username'); ?>
            <label for="password">Mật khẩu</label><br>
            <input type="password" name="password" id="password"/>
            <?php echo form_error('password'); ?>
            <label for="phone">Số điện thoại</label>
            <input type="text" name="phone" id="phone" value="<?php echo set_value('phone'); ?>" />
            <?php echo form_error('phone'); ?>
            <input type="submit" name="btn_reg" value="Đăng ký" id="btn_reg"/>
        </form>
    </body>
</html>



