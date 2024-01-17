<!doctype html>
<html lang="en">

    <head>
        <title>Healer Store</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
              integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
              crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="public/css/style.css">
        <link rel="stylesheet" href="public/responsive.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"
                integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
                integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    </head>

    <body>
        <div id="site">
            <div class="containner">
                <div id="header-wp" class="clearfix">
                    <div class="wp-inner">
                        <a href="?page=home" title="" id="logo" class="fl-left">HEALER STORE</a>
                        <div id="cart-wp" class="fl-right">
                            <a href="?mod=cart&act=show" title="" id="btn-cart">
                                <span id="icon"><i class="fa-sharp fa-solid fa-cart-plus"></i></span>
                                <?php
                                $num_order = get_num_order_cart();
                                if ($num_order > 0) {
                                    ?>
                                    <span id="num"><?php echo $num_order; ?></span>
                                    <?php
                                }
                                ?>
                            </a>
                        </div>
                    </div>
                </div>