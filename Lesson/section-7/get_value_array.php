<?php

$info = array('id' => 1, 'fullname' => 'Nguyễn Thế Hiệu', 'email' => 'Ngueynthehieua2001@gmail.com');
//Lấy dữ liệu fullname


echo $info['fullname'];

//Lấy số nguyên tố đầu tiên 
$list_prime = array(2,3,5,7);
echo $list_prime[0];
?>
<html>
    <head>
        <title>
            Lấy dữ liệu
        </title>
    </head>
    <body>
        <p>Id : <strong><?php echo $info['id']; ?></strong></p>
          <p>Họ và tên : <strong><?php echo $info['fullname']; ?></strong></p>
            <p>Email: <strong><?php echo $info['email']; ?></strong></p>
    </body>
</html>
