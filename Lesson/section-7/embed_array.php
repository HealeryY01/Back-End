<?php
# Xuất dữ liệu mảng 1 chiều
$list_prime = array(2, 3, 5, 7);
/*
 * B1: Chuyển bị mảng cần xử lý 
 * B2: Tạo cấu trúc HTML mẫu
 * B3: Duyệt mảng
 * B4: Đổ dữ liệu 
 */
?>
<html>
    <head>
        <title>Nhúng dữ liệu mảng lên HTMl</title>
    </head>
    <body>
        <h1>Danh sách số nguyên tố </h1>
        <table border="1">
            <thead>
                <tr>
                    <td align="center" width="50">Stt</td>
                    <td align="center" width="200">Số nguyên tố</td>
                </tr>
            </thead>
            <tbody align="center" >
                <?php
                $temp = 0;
                foreach ($list_prime as $item) {
                    $temp++;
                    ?>
                    <tr>
                        <td><?php echo $temp; ?></td>
                        <td><?php echo $item; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </body>
</html>


<?php
# Xuất dữ liệu mảng đa chiều
$list_user = array(
    1 => array('1', 'Nguyễn Thế Hiệu', 'nguyenthehieua2001@gmail.com'),
    2 => array('2', 'Nguyễn Thị Hải Yến', 'haiyen2001@gmail.com')
);

function show_array($data) {
    if (is_array($data)) {
        echo"<pre>";
        print_r($data);
        echo"</pre>";
    }
}

/*
 * B1: Chuyển bị mảng cần xử lý 
 * B2: Tạo cấu trúc HTML mẫu
 * B3: Duyệt mảng
 * B4: Đổ dữ liệu 
 */
?>
<html>
    <head>
        <title>Nhúng dữ liệu mảng lên HTMl</title>
    </head>
    <body>
        <h1>Danh sách số thành viên </h1>
        <?php if (!empty($list_user)) { ?>
            <table border="1">
                <thead>
                    <tr>
                        <td align="center" width="50">Stt</td>
                        <td align="center" width="50">Id</td>
                        <td align="center" width="200">Họ và Tên</td>
                        <td align="center" width="200">Email</td>
                    </tr>
                </thead>
                <tbody align="center" >
                    <?php
                    $temp1 = 0;
                    foreach ($list_user as $user) {
//                    show_array($user);
                        $temp1++;
                        ?>
                        <tr>
                            <td><?php echo $temp1; ?></td>
                            <td><?php echo $user ['0']; ?></td>
                            <td><?php echo $user ['1']; ?></td>
                            <td><?php echo $user ['2']; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        <?php } else { ?>
            <p>Không tồn tại dữ liệu</p>    
        <?php }
        ?>
    </body>
</html>