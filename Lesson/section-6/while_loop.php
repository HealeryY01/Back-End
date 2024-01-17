<?php

//Tính tổng các số chẵn từ 0 đến 10 => 2 + 4 + 6 + 8 + 10 + 10
$t = 0;
$i = 0;
while ($i <= 10) {
    
    $t += $i;
    $i+=2;
}
echo $t;

