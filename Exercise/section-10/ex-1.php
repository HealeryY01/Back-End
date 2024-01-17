<?php
#bài 1
if(isset($_POST['btn_login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $username . '-' . $password;
}
?>
<html>
    <head>
        <title>From đăng nhập </title>
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
            #btn_login{
                margin-top: 20px;
            }
        </style>
        <h1>Form đăng nhập</h1>
        <form action="" method="post" >
            <label for="username">Tên đăng nhập</label> 
            <input type="text" name="username" id="username"/>
            <label for="password">Mật khẩu</label> 
            <input type="password" name="password" id="password"/>
            <input type="submit" id="btn_login" name="btn_login" value="Đăng nhập"/>
        </form>
    </body>
</html>

