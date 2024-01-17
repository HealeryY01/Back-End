<?php
if(isset($_POST['btn_login'])){
    //Phất cờ
    $error = array();
    if(empty($_POST['username'])){
        //Hạ cờ
        $error['username'] = "Không được để trống trường Username";
    }else{
        $username = $_POST['username'];
    }
     if(empty($_POST['password'])){
        //Hạ cờ
        $error['password'] = "Không được để trống trường Password";
    }else{
        $password = $_POST['password'];
    }
    //Kết luận
    if(empty($error)){
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
            <input type="text" name="username" id="username" /><br><!-- comment -->
            <p class="error"><?php if(!empty($error['username'])) echo $error['username']; ?></p>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password"/><br>
            <p class="error"><?php if(!empty($error['password'])) echo $error['password']; ?></p>
            <br>
            <input type="submit" name="btn_login" value="Login"/>
        </form>
    </body>
</html>
