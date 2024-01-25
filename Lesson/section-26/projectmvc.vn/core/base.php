<?php

define('APPPATH') OR exit('Không được quyền truy cập phần này');

//get Controller name
function get_controller() {
    global $config;
    $controller = isset($_GET['controller']) ? $_GET['controller'] : $config['default_controller'];
    return $controller;
}

//get Module name
function get_module() {
    global $config;
    $module = isset($_GET['mod']) ? $_GET['mod'] : $config['default_module'];
    return $module;
}

//get Action name
function get_action() {
    global $config;
    $action = isset($_GET['action']) ? $_GET['action'] : $config['default_action'];
    return $action;
}

function load($type, $name) {
    if ($type == 'lib') {
        $path = LIBPATH . DIRECTORY_SEPARATOR . "{$name}.php";
    }
    if ($type == 'hepler') {
        $path = HELPERPATH . DIRECTORY_SEPARATOR . "{$name}.php";
    }
    if (file_exists($path)) {
        return "$path";
    } else {
        echo "{$type}:{$name} không tồn tại";
    }
}

function call_function($list_function) {
    if (is_array($list_function)) {
        foreach ($list_function as $f) {
            if (function_exists($f())) {
                $f();
            }
        }
    }
}

function load_view($name, $data_send = array()) {
    global $data;
    $data = $data_send;
    $path = MODULESPATH . DIRECTORY_SEPARATOR . get_module() . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . get_controller() . 'Controller.php';
    if (file_exists($path)) {
        if (is_array($data)) {
            foreach ($data as $key_data => $v_data) {
                $$key_data = $v_data;
            }
        }
        require $path;
    } else {
        echo "Không tìm thấy {$path}";
    }
}

function load_model($name) {
    $path = MODULESPATH . DIRECTORY_SEPARATOR . get_module() . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . get_controller() . 'Controller.php';
    if (file_exists($path)) {
       require $path;
    } else {
        echo "Không tìm thấy {$path}";
    }
}

function get_header($name = ''){
    global $data;
    if(empty($name)){
        $name = 'header';
    }else{
        $name = "header-{$name}";
    }
    $path = LAYOUTPATH . DIRECTORY_SEPARATOR .$name .'.php';
    if(file_exists($path)){
        if(is_array($data)){
            foreach($data as $key => $a){
                $key = $a;
            }
        }
        require $path;
    }else{
        echo "Không tìm thấy {$path}";
    }
}

function get_footer($name = ''){
    global $data;
    if(empty($name)){
        $name = 'footer';
    }else{
        $name = "footer-{$name}";
    }
    $path = LAYOUTPATH . DIRECTORY_SEPARATOR .$name .'.php';
    if(file_exists($path)){
        if(is_array($data)){
            foreach($data as $key => $a){
                $key = $a;
            }
        }
        require $path;
    }else{
        echo "Không tìm thấy {$path}";
    }
}