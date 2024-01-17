<?php

#Hàm có 1 tham số
//function check_even($n){
//    if($n %2 == 0){
//        echo"{$n} là số chẵn";
//    }
//}
//check_even(6);
#Hàm có 2 tham số
//function sum ($a,$b){
//    $t = $a + $b;
//    echo $t;
//}
//sum(2,3);

#Hàm có tham số tùy biến 

function show_array($data) {
    if (is_array($data)) {
        echo"<pre>";
        print_r($data);
        echo"</pre>";
    }
}

//function sum_multi_number() {
////   echo func_num_args();
//    $list_args = func_get_args();
//    $t = 0;
//    foreach ($list_args as $value) {
//        $t += $value;
//    }
////   show_array($list_args);
//    echo $t;
//}

//sum_multi_number(2, 5);

//$list_number = array (2,4,5,6);
//function sum_multi_number($list_number = array()){
//    if(is_array($list_number)){
//        $t = 0;
//        foreach ($list_number as $value){
//            $t += $value;
//        }
//        echo $t;
//    }
//}
//sum_multi_number($list_number);



// <input type = 'text' name = '' value = '' id = '' class = '' /> 
 function create_input_text($name, $value, $option = array()){
     $name = func_get_arg(0);
     $value = func_get_arg(1);
     $option = func_get_arg(2);
     if(!empty($option)){
         $id = $option['id'];
         $class = $option['class'];
     }
     $input_html = "<input type = 'text' name = '{$name}' value = '{$value}' id = '{$id}' class = '{$class}'/>";     
     echo $input_html;
 }
 
 create_input_text('usurname','',$option =array ('id' => 'username','class' => 'form_input'));