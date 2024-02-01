<?php

function contruct() {
    load_model('home');
}

function indexAction() {
    $data['title_page']= "Trang chủ";
    load_view('index');
}

function addAction() {
}

function editAction(){
}