<?php
//Tính toán
$price = $_POST['price'];
$num_order = $_POST['num_order'];
$total = $price * $num_order;
//$result = array(
//    'price' => $price,
//    'num_ordr' => $num_order,
//    'total' => $total,
//);
//Xuất thì echo
echo $total;
//echo json_encode($result); // Số , chuỗi , html , json

