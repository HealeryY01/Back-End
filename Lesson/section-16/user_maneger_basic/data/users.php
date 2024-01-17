<?php

#Mảng dữ liệu user
/* Thông tin user:
 * Họ về tên => fullname
 * Tên đăng nhập => username
 * Mật khẩu => password
 * Email => email
 * Id => id
 */
$list_users = array(
    1 => array(
        'id'=> 1,
        'fullname' =>'Nguyễn Thế Hiệu',
        'username' => 'healer123',
        'password' => md5('hieu123@'),
        'email' => 'nguyenthehieua2001@gmail.com'
    ),
    2 => array(
        'id'=> 2,
        'fullname' =>'Nguyễn Thị Hải Yến',
        'username' => 'bodao1109',
        'password' => md5('yen123@'),
        'email' => 'haiyenn@gmail.com'
    ),
    3 => array(
        'id'=> 3,
        'fullname' =>'Nguyễn Thị Quỳnh Chi',
        'username' => 'cun17314',
        'password' => md5('chi2014'),
        'email' => 'cunchi@gmail.com'
    ),
);

