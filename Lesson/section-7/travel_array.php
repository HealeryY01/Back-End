<?php
#Duyệt mảng 1 chiều
//$list_prime = array(2,3,5,7);
//$t = 0;
//
//foreach ($list_prime as $item){
//    echo $item."<br>";
//    $t+=$item;
//}
//
//
//foreach ($list_prime as $key => $item){
//    echo "{$key} => {$item}<br>";
//    $t+=$item;
//}
//echo "Tổng : {$t}";

#Duyệt mảng đa chiều 
$list_user = array(
    1 => array('1', 'Nguyễn Thế Hiệu', 'nguyenthehieua2001@gmail.com'),
    2 => array('2', 'Nguyễn Thị Hải Yến', 'haiyen2001@gmail.com')
);
    echo"<pre>";
    print_r($list_user);
    echo"</pre>";
foreach ($list_user as $item) {
//    echo"<pre>";
//    print_r($item);
//    echo"</pre>";
    echo $item['0']."<br>";
    echo $item['1']."<br>";
    echo $item['2']."<br>";
    echo "<br>---------------------------<br>";
}