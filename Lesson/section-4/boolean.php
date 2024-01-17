<?php

$a = 10;
if ($a % 2 == 0) { //true | false
    echo "{$a} là số chẵn";
}

function checkEven($n) {
    if ($n % 2 == 0) { //true | false
        return true;
    }
    return false;
}

$check = checkEven(4);