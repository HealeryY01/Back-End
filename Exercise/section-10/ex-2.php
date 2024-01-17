<?php
if (isset($_POST['btn_reg'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    echo $fullname . '-' . $username . '-' . $password . '-' . $phone . '-' . $gender;
}
?>
<html>
    <head>
        <title>From đăng ký </title>
    </head>
    <body>
        <style>
            label{
                display: block;
                padding: 8px 0px;
            }
            input{
                display: block;
            }
            select,#btn_reg{
                margin-top: 20px;
            }
        </style>
        <h1>Form đăng ký</h1>
        <form action="" method="post" >
            <label for="fullname">Họ và tên</label> 
            <input type="text" name="fullname" id="fullname"/>
            <label for="username">Tên đăng nhập</label> 
            <input type="text" name="username" id="username"/>
            <label for="password">Mật khẩu</label> 
            <input type="password" name="password" id="password"/>
            <label for="phone">Số điện thoại</label> 
            <input type="text" name="phone" id="phone"/>
            <select name="gender" >
                <option value="">--Chọn giới tính--</option>
                <option value="male">Nam</option>
                <option value="female">Nữ</option>
            </select>
            <input type="submit" id="btn_reg" name="btn_reg" value="Đăng ký"/>
        </form>
    </body>
</html>
