<?php
$mod = $_GET['mod'];
$act = $_GET['act'];
$cat_id = $_GET['cat_id'];
echo "Module : {$mod} <br/> Action: {$act}<br/> Cat_id: {$cat_id} <br/><br/>";
?>

<html>
    <head>
        <title>Danh mục sản phẩm</title>
    </head>
    <body>
        <a href="?mod=product&act=main&cat_id=1">Áo</a>
    </body>
</html>
