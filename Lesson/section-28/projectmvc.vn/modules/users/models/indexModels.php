<?php

function add_user($data) {
    return db_insert('tbl_user', $data);
}

function user_exists($username, $email) {
    $check_user = db_num_rows("SELECT * FROM `tbl_user` WHERE `email` = '{$email}' OR `username` = '{$username}'");
    echo $check_user;
    if ($check_user > 0)
        return true;
    return false;
}

function get_list_users(){
    $result = db_fetch_array("SELECT * FROM `tbl_user`");
    return $result;
}
function get_user_by_id($id){
    $item = db_fetch_row("SELECT * FROM `tbl_user` WHERE `user_id` = {$id}");
    return $item;
}
