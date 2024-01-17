<?php
#Tạo mảng rỗng
$error = array();
$error['username']= "Bạn không được để trống tên đăng nhập";
echo"<pre>";
print_r($error);
echo"</pre>";
#Tạo mảng với key mặc định
$list_odd = array(1,3,5);

#Tạo mảng với key xác định
//User : Họ tên ,emali,id
$info = array('id' => 1, 'fullname' => 'Nguyễn Thế Hiệu', 'email' => 'Ngueynthehieua2001@gmail.com');

echo"<pre>";
print_r($info);
echo"</pre>";
