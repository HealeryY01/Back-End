<?php
#Thêm phần tử có key xác định
$info = array('id' => 1, 'fullname' => 'Nguyễn Thế Hiệu', 'email' => 'Ngueynthehieua2001@gmail.com');
//Lưu trữ thêm số điện thoại
//Số điẹn thoại => tel, phone
echo"<pre>";
print_r($info);
echo"</pre>";
$info['phone'] = '0365680157';
echo"<pre>";
print_r($info);
echo"</pre>";


#Thêm phần tử có key mặc định 
$list_prime = array(2,3,5,7);
echo"<pre>";
print_r($list_prime);
echo"</pre>";
$list_prime[]= '11';
echo"<pre>";
print_r($list_prime);
echo"</pre>";