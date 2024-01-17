<?php

#Hàm trả về dữ liệu trong nội bộ hàm 

function show_array($data) {
    if (is_array($data)) {
        echo"<pre>";
        print_r($data);
        echo"</pre>";
    }
}

//function sum ($a,$b){
//    $t = $a + $b;
//    echo $t;
//}
//sum(2,3);
//
#Hàm trả dữ liệu thôgn qua return 
function sum($a, $b) {
    $t = $a + $b;
    return $t;
}
$t = sum(2, 5);
echo $t;
