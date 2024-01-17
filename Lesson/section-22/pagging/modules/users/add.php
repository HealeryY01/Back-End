<?php
get_header();
?>
<?php
if (isset($_POST['btn_reg'])) {
    //Phất cờ
    $error = array();
    $alert = array();
    //Kiểm tra fullname
    if (empty($_POST['fullname'])) {
        //Hạ cờ
        $error['fullname'] = "Không được để trống trường Fullname";
    } else {
        $fullname = $_POST['fullname'];
    }
    //Kiểm tra gender
    if (empty($_POST['gender'])) {
        //Hạ cờ
        $error['gender'] = "Bạn cần chọn giới tính";
    } else {
        $gender = $_POST['gender'];
    }
    //Kiểm tra username
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
    //Kiểm tra password
    if (empty($_POST['password'])) {
        //Hạ cờ
        $error['password'] = "Không được để trống trường Password";
    } else {
        $partten = "/^([A-Za-z]){1}([\w_.!@#$%^&*()]+){5,31}$/";
        if (!preg_match($partten, $_POST['password']))
            $error['password'] = "Password cho phép sử dụng chữ cái , chữ số, và ký tự đặc biệt, bắt đầu ký tự viết hoa và có độ dài từ 6 đến 32 ký tự";
        else {
            $password = md5($_POST['password']);
        }
    }
    //Kiểm tra email
    if (empty($_POST['email'])) {
        //Hạ cờ
        $error['email'] = "Không được để trống trường email";
    } else {
        $partten = "/^[a-z][a-z0-9_\.]{5,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$/";
        if (!preg_match($partten, $_POST['email']))
            $error['email'] = "Email không đúng định dạng";
        else {
            $email = $_POST['email'];
        }
    }
    //Kết luận
    if (empty($error)) {
        $sql = "INSERT INTO `tbl_user` (`fullname`,`email`,`password`,`username`,`gender`)" . "VALUES ('{$fullname}','{$email}','{$password}','{$username}','{$gender}')";
        if (mysqli_query($conn, $sql)) {
            $alert['success'] = "Thêm dữ liệu thành công";
        } else {
            echo "Lỗi" . mysql_error($conn);
        }
//        $data = array(
//            'fullname' => $fullname,
//            'email' => $email,
//            'password' => $password,
//            'username' => $username,
//            'gender' => $gender
//        );
//        $id_insert = db_insert("tbl_user", $data);
    }
}
?>
<div id="content">
    <style>
        #form_reg{
            width: 250px;
            margin-top: 20px;
        }
        label{
            display: block;
            margin: 0px 0px 5px 0px;
        }
        input{
            display: block;
            margin-bottom: 10px;
        }
        input[type='text'],input[type='email'],input[type='password']{
            padding: 5px 10px;
            border: 1px solid #dedede;
            width: 100%;
        }
        #bth_reg{
            margin-top: 20px;
            display: block;
            padding: 9px 10px;
            text-align: center;
            background: #ffa84c;
            border: none;
            width: 100%;
            text-transform: uppercase;
        }
        select{
            padding: 6px 10px;
            border: 1px solid #dedede;
            width: 100%;
        }
        p.error{
            color: red;
        }
        p.success {
            margin-top: 10px;
            color: #cb133c;
            font-size: 15px;
        }
    </style>
    <h1>Thêm mới</h1>
    <?php
    if (!empty($alert['success'])) {
        ?>
        <p class="success"><?php echo $alert['success'] ?></p>
        <?php
    }
    ?>
    <form method='post' id='form_reg' action="">
        <label for="fullname">Họ và tên</label>
        <input type="text" name="fullname" id='fullname'/>
        <?php
        if (!empty($error['fullname'])) {
            ?>
            <p class="error"><?php echo $error['fullname'] ?></p>
            <?php
        }
        ?>
        <label for="username">Tên đăng nhập</label>
        <input type="text" name="username" id='username'/>
        <?php
        if (!empty($error['username'])) {
            ?>
            <p class="error"><?php echo $error['username'] ?></p>
            <?php
        }
        ?>
        <label for="email">Email</label>
        <input type="text" name="email" id='email'/>
        <?php
        if (!empty($error['email'])) {
            ?>
            <p class="error"><?php echo $error['email'] ?></p>
            <?php
        }
        ?>
        <label for="password">Mật khẩu</label>
        <input type="password" name="password" id='password'/>
        <?php
        if (!empty($error['password'])) {
            ?>
            <p class="error"><?php echo $error['password'] ?></p>
            <?php
        }
        ?>
        <select name='gender'>
            <option value="">--Chọn giới tính--</option>
            <option value="male">Nam</option>
            <option value="female">Nữ</option>
        </select>
        <?php
        if (!empty($error['gender'])) {
            ?>
            <p class="error"><?php echo $error['gender'] ?></p>
            <?php
        }
        ?>
        <input type="submit" value="Đăng ký" name="btn_reg" id="bth_reg"/>
    </form>
</div>

<?php
get_footer();
?>


