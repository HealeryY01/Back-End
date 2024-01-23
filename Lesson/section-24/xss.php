<?php
require 'db/connect.php';
if (isset($_POST['btn_add_comment'])) {
    $username = $_POST['username'];
    $content = htmlentities($_POST['content']);
//    echo $content;
//    die();
    if (!empty($username) && !empty($content)) {
        $sql = "INSERT INTO `tbl_comment` (`username`, `content`) VALUES ('$username', '$content')";
//        echo $sql;
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            echo mysqli_errno($conn);
        } else {
            echo "Bạn đã comment thành công";
        }
    }
}
$sql = "SELECT *FROM `tbl_comment`";
$result = mysqli_query($conn, $sql);
$list_comment = array();
while ($row = mysqli_fetch_assoc($result)) {
    $list_comment[] = $row;
}
?>
<html>
    <head>
        <title>Lỗi bảo mật Xss</title>
    </head>
    <body>
        <h1> Bình Luận</h1>
        <label> Tên đăng nhập</label>
        <input type="text" class="" id=""><!-- comment -->
        <label>Nội dung bình luận</label>
        <input type="text" class="" id=""><!-- comment -->
        <input type="submit" id="btn_add_comment" name="btn_add_comment" value="Bình luận" />
    </body>
</html>
