<?php
//========================
// CẤU TRÚC ĐIỀU KHIỂN IF
//========================
#IF
//Kiểm tra số chẵn
//$a =10;
//if($a%2 == 0){
//    echo "{$a} là số chẵn ";
//}

#IF Else
//Kiểm tra tính chẵn lẻ

//$a =20;
//if ($a % 2 == 0) {
//    echo "{$a} là số chẵn ";
//} else {
//    echo "{$a} là số lẻ ";
//}

#IF elseif...else..
// 0 1 2 3 4 5 6 7 8 9 10
//$point = 7;
//if ($point < 4) {
//    echo 'F';
//} elseif ($point < 5.5) {
//    echo 'D';
//} elseif ($point < 7) {
//    echo 'C';
//} elseif ($point < 8.5) {
//    echo 'B';
//} else {
//    echo 'A';
//}


#Cấu trúc điều khiển lồng nhau 
$point = 11;
if ($point >= 0 && $point <= 10) {
    if ($point < 4) {
        echo 'F';
    } elseif ($point < 5.5) {
        echo 'D';
    } elseif ($point < 7) {
        echo 'C';
    } elseif ($point < 8.5) {
        echo 'B';
    } else {
        echo 'A';
    }
} else {
    echo "Dữ liệu bạn nhập vào không hợp lệ";
}