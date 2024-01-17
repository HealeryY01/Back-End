<?php
#Bài tập 1
//Tính tổng các số chẵn 
//T = 2 + 4 + 6 + ..+n (n>=2)
// Cách 1
//$t = 0;
//$n = 10;
//for($i = 2 ; $i <= $n; $i++ ){
//    if($i % 2 == 0){
//        $t += $i;
//    }
//}
//echo "Tổng các số chẵn trong dẫy số là {$t}";

//Cách 2
//for($i = 2 ; $i <= $n; $i+=2 ){
//        $t += $i;
//}
//echo "Tổng các số chẵn trong dẫy số là {$t}";

#Bài tập 2
//T = 1/3 + 1/6 + .. +1/n (n>=3)
// Cách 1
//$t1 = 0;
//$n = 6;
//for($i = 3 ; $i <= $n; $i++ ){
//    if($i % 3 == 0){
//        $t1 +=(1/$i);
//    }
//}
//echo "Tổng các số trong dẫy số là {$t1}";

// Cách 2
//$t1 = 0;
//$n = 6;
//for($i = 3 ; $i <= $n; $i+=3 ){
//        $t1 +=(1/$i);
//}
//echo "Tổng các số trong dẫy số là {$t1}";

#Bài tập 3
//T2 = 1/2 + 2/3 + .. + n/n+1 (n>=1)
//$t2 = 0;
//$n = 2;
//for($i = 1 ; $i <= $n; $i++ ){
//        $t2 +=($i/($i+1));
//}
//echo "Tổng các số trong dẫy số là {$t2}";

#Bài tập 3
//Giải phương trình bặc 2 : ax^2 + bx + c = 0
$a = 1;
$b = 1;
$c = -2;

if ($a != 0) {
    $delta = $b * $b - 4 * $a * $c;
    if ($delta < 0) {
        echo "Phương trình vô số nghiệm ";
    } elseif ($delta == 0) {
        $x = -$b / 2 * $a;
        echo "Phương trình có nghiệm kép: x = {$x}";
    } else {
        $x1 = (-$b + sqrt($delta)) / 2 * $a;
        $x2 = (-$b - sqrt($delta)) / 2 * $a;
        echo"Phương trình có 2 nghiệm :<br> x1 : {$x1} <br> x2 : {$x2}";
    }
} else {
    echo "Đây không phải phương trình bậc 2";
}