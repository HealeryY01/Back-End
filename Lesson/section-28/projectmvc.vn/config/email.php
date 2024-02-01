<?php
/*
 * --------------------
 * EMAIL
 * --------------------
 * Trong phần này chúng ta khai báo các thông tínoos để cấu hình gửi email bằng php
 * --------------------
 * GIẢI THÍCH BIẾN
 * --------------------
 * protocol: Giao thức gửi email
 * smtp_host: Host gửi mail
 * smtp_port: Cổng
 * smtp_user: Tên đăng nhập tài khỏa gửi email
 * smtp_pass: Password tài khảon gửi mail
 * smtp_port: Cổng
 * mailtype: Định dạng nội dung mail
 * charset: Mã ký tự nội dung mail(UTF-8)
 */


$config['email'] = array(
    'protocol' => 'smtp',
    'smtp_host'=> 'ssl://smtp.googlemail.com',
    'smtp_port' => 587,
    'smtp_user' => 'nguyenthehieua2001@gmail.com',
    'smtp_fullname' => 'Nguyễn Thế Hiệu',
    'smtp_pass' => 'Hieu2001@',
    'smtp_secure' => 'tls',    
    'smtp_timeout' => '7',
    'mailtype' => 'html',
    'charset' => 'UTF-8'
);
