<html>
    <head>
        <title>Hệ thống điều hướng cơ bản</title>
        <link rel="stylesheet" href="public/css/reset.css" type="text/css"/>
        <link rel="stylesheet" href="public/css/style.css" type="text/css"/>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <a id="logo">HEADER</a>
                <div id="user-login">                  
                    <p>Xin chào <strong><?php
                            if (is_login()) {
                                echo info_user('fullname');
                            }
                            ?></strong> (<a href="?page=logout" style="text-decoration: none;">Thoát</a>)</p>
                </div>
                <ul id="main-menu">
                    <li><a href="?page=home">Trang chủ</a></li>
                    <li><a href="?page=about">Giới thiệu</a></li>
                    <li><a href="?page=news">Tin tức</a></li>
                    <li><a href="?page=course">Khóa học</a></li>
                    <li><a href="?page=product">Sản phẩm</a></li>
                    <li><a href="?page=contact">Liên hệ</a></li>  
                </ul>
            </div>
            <!-- end header -->
