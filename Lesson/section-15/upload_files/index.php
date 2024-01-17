<?php
require 'lib/data.php';
if (isset($_FILES['file'])) {
    show_array($_FILES);
//Thư mực chứa file upload
    $upload_dir = 'uploads/';
//Đường dẫn của file sau khi upload
    $upload_file = $upload_dir . $_FILES['file']['name'];

    if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
        echo"<a href ='$upload_file'> Download:{$_FILES['file']['name']}</a>";
    } else {
        echo "Upload file không thành công ";
    }
}
?>
<html>
    <head>
        <title>Upload file lên server với php</title>
    </head>
    <body>
        <h1>Upload file</h1><!-- comment -->
        <form enctype="multipart/form-data" action="" method="post">
            <input type="file" name="file"/><br><br><!-- comment -->
            <input type="submit" value="Upload file"  />
        </form>
    </body>
</html>



