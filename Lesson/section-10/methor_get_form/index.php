<?php
#Get dữ liệu từ url
$mod = $_GET['mod'];
$act = $_GET['act'];
$id = $_GET['id'];

echo "{$mod} - {$act} - {$id}";


function show_array($data) {
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo"</pre>";
    }
}

if (isset($_GET['btn_search'])) {
    show_array($_GET);
    $q = $_GET['q'];
    echo $q;
}
?>
<html>
    <head>
        <title>TRuyền dữ liệu form phương thức GET</title>
    </head>
    <body>
        <a href="?mod=product&act=detail&id=1268">Sản phẩm </a>
        <h1>Tìm kiếm </h1>
        <form action="search.php" method="GET">
            Tìm kiếm: <input type="text" name="q" >
            <input type="submit" name="btn_search" value="Search">
        </form>
    </body>
</html>



