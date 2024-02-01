<?php

function contruct() {
    load_model('index');
    load('lib', 'validation');
}

function regAction() {
    global $error, $username, $password, $email, $fullname;
    if (isset($_POST['btn-reg'])) {
        $error = array();
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Không được để trống họ tên";
        } else {
            $fullname = $_POST['fullname'];
        }
    }
    //Kiểm tra username
    if (empty($_POST['username'])) {
        $error['username'] = "Không được để trống tên đăng nhập";
    } else {
        if (!is_username($_POST['username'])) {
            $error['username'] = "Tên đăng nhập không đúng định dạng";
        }
        $username = $_POST['username'];
    }
    //Kiểm tra password
    if (empty($_POST['password'])) {
        $error['password'] = "Không được để trống mật khẩu";
    } else {
        if (!is_username($_POST['password'])) {
            $error['password'] = "Mật khẩu không đúng định dạng";
        }
        $password = md5($_POST['password']);
    }
    //Kiểm tra email
    if (empty($_POST['email'])) {
        $error['email'] = "Không được để trống email";
    } else {
        if (!is_username($_POST['email'])) {
            $error['email'] = "Email không đúng định dạng";
        }
        $email = $_POST['email'];
    }
    //Kết luận
    if(empty($error)){
        if(!user_exists($username, $email)){
            $active_token = md5($username.time());
            $data = array(
                'fullname' => $fullname,
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'active_token' => $active_token 
            );
            add_user($data);
            $content = "";
            
            send_mail('nguyenthehieua2001@gmail.com','Nguyễn Thế Hiệu', 'Kích hoạt tài khoản PhpMaster', $content);
            //Thông báo
            redirect("?mod=users&action=login");
        }else{
            $error['account'] = "Email hoặc username đã tồn tại trên hệ thống" ;
        }
    }
    load_view('reg');
}

function loginAction() {
    load_view('login');
}
