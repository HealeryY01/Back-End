<?php
#Xóa luôn mảng 
$list_users = array(
    1 => array('1','Nguyễn Thế Hiệu','nguyenthehieua2001@gmail.com'),
    2 => array('2','Nguyễn Thị Hải Yến','haiyen2001@gmail.com','haiyentv.vn')
);
echo"<pre>";
print_r($list_users);
echo"</pre>";

unset($list_users);

echo"<pre>";
print_r($list_users);
echo"</pre>";



#Xóa phần tử trong mảng đa chiều
$list_user = array(
    1 => array('1','Nguyễn Thế Hiệu','nguyenthehieua2001@gmail.com'),
    2 => array('2','Nguyễn Thị Hải Yến','haiyen2001@gmail.com','haiyentv.vn')
);
//echo"<pre>";
//print_r($list_user);
//echo"</pre>";

//Xóa thông tin của id là 2
//unset($list_user[2]['3']);
//echo"<pre>";
//print_r($list_user);
//echo"</pre>";

$info = array('id' => 1, 'fullname' => 'Nguyễn Thế Hiệu', 'email' => 'Nguyenthehieua2001@gmail.com','website' => 'hieutv.vn');
//echo"<pre>";
//print_r($info);
//echo"</pre>";
#Xóa phần tử mảng một chiều 
 unset($info['website']);
//echo"<pre>";
//print_r($info);
//echo"</pre>";