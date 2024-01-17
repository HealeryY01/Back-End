<?php
require 'lib/validation.php';
if (isset($_POST['btn_reg'])) {
    //Phất cờ
    $error = array();
    if (empty($_POST['fullname'])) {
        //Hạ cờ
        $error['fullname'] = "Không được để trống trường Fullname";
    } else {
        $fullname = $_POST['fullname'];
    }
    if (empty($_POST['gender'])) {
        //Hạ cờ
        $error['gender'] = "Bạn cần chọn giới tính";
    } else {
        $gender = $_POST['gender'];
    }

    //Kết luận
    if (empty($error)) {
        //Xử lý không có lỗi
        echo "Gender: {$gender}";
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
        <h1>Đăng ký</h1>
        <form action="" method="POST">
            <label for="fullname">Họ và tên</label><br>
            <input type="text" name="fullname" id="fullname" value="<?php echo set_value('fullname'); ?>"/><br>
            <?php echo form_error('fullname'); ?><br>
            <label>Giới tính</label><br>
            <select name="gender">
                <option value="">--Chọn giới tính--</option>
                <option <?php if (!empty($gender) && $gender == 'male') echo "selected='selected'"; ?> value="male">Nam</option>
                <option <?php if (!empty($gender) && $gender == 'female') echo "selected='selected'"; ?> value="female">Nữ</option>
            </select><br><br>
             <?php echo form_error('gender'); ?><br><br>
            <input type="submit" name="btn_reg" value="Register"/>
        </form>
    </body>
</html>
