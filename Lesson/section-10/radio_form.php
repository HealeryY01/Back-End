<?php
if (isset($_POST['btn_reg'])) {
    $show_gender = array(
        'male' => 'nam',
        'female' => 'nữ'
    );
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    if (empty($_POST['gender'])) {
        // Xuất lỗi
        echo "Bạn chưa chọn giới tính";
    } else {
        $gender = $_POST['gender'];
        echo $show_gender[$gender];
    }
}
?>
<html>
    <head>
        <title>Lấy dữ liệu từ radio button</title>
    </head>
    <body>
        <h1>Đăng ký</h1>
        <form action="" method="POST">
            <input type="radio" name="gender" value="male" id="made" checked="checked">
            <label for="made">Nam</label><br>
            <input type="radio" name="gender" value="female" id="female">
            <label for="femade">Nữ</label><br>
            <input type="submit" name="btn_reg" value="Register">
        </form>
    </body>
</html>


