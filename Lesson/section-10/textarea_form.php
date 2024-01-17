<?php
if(isset($_POST['btn_add'])){
    if(empty($_POST['post_detail'])){
        //Xử lý thông báo lỗi
        echo "Bạn cần nhập vào thông tin bài viết";
    }else{
        $post_detail = $_POST['post_detail'];
        echo $post_detail;
    }
}
?>
<html>
    <head>
        <title>Lấy dữ liệu từ text area</title>
    </head>
    <body>
        <h1>Thêm bài viết</h1>
        <form action="" method="POST">
            <label>Chi tiết </label><br><br>
            <textarea name="post_detail" cols="50" rows="15"></textarea><br><br>
            <input type="submit" name="btn_add" value="Thêm bài viết">
        </form>
    </body>
</html>