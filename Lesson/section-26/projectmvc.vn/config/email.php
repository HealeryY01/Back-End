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


$email = array(
    'protocol' => 'smtp',
    'smtp_host'=> 'ssl://smtp.googlemail.com',
    'smtp_port' => 465,
    'smtp_user' => '',
    'smtp_pass' => '',
    'smtp_port' => '7',
    'mailtype' => 'html',
    'charset' => 'UTF-8'
);
