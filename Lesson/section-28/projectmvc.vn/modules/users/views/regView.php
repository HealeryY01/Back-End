<html>
    <head>
        <title>Trang đăng nhập</title>
        <link rel="stylesheet" href="public/css/reset.css" type="text/css"/>
        <link rel="stylesheet" href="public/css/login.css" type="text/css"/>
    </head>
    <body>
        <div id="wp-form-login">
            <h1 class="page-title">ĐĂNG KÝ TÀI KHOẢN</h1>
            <form id="form-login" action="" method="post">
                <input type="text" name="fullname" value="<?php echo set_value('fullname') ?>" id="fullname" placeholder="Fullname"/>
                <?php  echo form_error('fullname'); ?>
                <input type="text" name="email" value="<?php echo set_value('email') ?>" id="email" placeholder="Email"/>
                <?php  echo form_error('username'); ?>
                <input type="text" name="username" value="<?php echo set_value('username') ?>" id="username" placeholder="Username"/>
                <?php  echo form_error('username'); ?>
                <input type="password" name="password" value="<?php echo set_value('password') ?>" id="password" placeholder="Password"/>
                <?php  echo form_error('password'); ?>
                <input type="submit" id="btn-login" name="btn-reg" value="ĐĂNG KÝ" />
                <?php  echo form_error('account'); ?>
            </form>
            <a href="<?php  echo base_url('?mod=users&avtion=login'); ?>" id="lost-pass">Đăng nhập</a>
        </div>
    </body>
</html>


