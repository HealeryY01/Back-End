<?php

function contruct() {
//    echo "Dùng chung , load đàu tiên";
    load_model('index');
}

function indexAction() {
    load('helper', 'format');
    $list_users = get_list_users();
//    show_array($list_users);
    $data['list_users']=$list_users;
//    $data['a']=100;
    load_view('index', $data);
}

function addAction() {
    echo "Thên dữ liệu";
}

function aditAction(){
    $id = (int)$_GET['id'];
    $item = get_user_by_id($id);
//    show_array($item);
}