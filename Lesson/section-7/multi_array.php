<?php

$list_user = array(
    1 => array('1','Nguyễn Thế Hiệu','nguyenthehieua2001@gmail.com'),
    2 => array('2','Nguyễn Thị Hải Yến','haiyen2001@gmail.com')
);

//echo"<pre>";
//print_r($list_user);
//echo"</pre>";

/*
 * Thêm phần tử 
 * id: 3
 * fullname: Nguyễn Trung Hiếu
 * email : hieu@hmail.com
 */
#Kiểu thêm 1
$list_user[3] = array('3','Nguyễn Trung Hiếu','hieu@hmail.com');
#Kiểu thêm 2
$list_user[4]['id']='4';
$list_user[4]['fullname']='Long';
$list_user[4]['email']='long@gmail.com';

echo"<pre>";
print_r($list_user);
echo"</pre>";


/*
 * Lấy phần tử của mảng đa chiều
 * 
 */
$info = $list_user[3];
echo"<pre>";
print_r($info);
echo"</pre>";

echo $info['0'];
echo"<pre>";
echo  $list_user[3]['2'];
