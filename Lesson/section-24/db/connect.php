<?php
//Kết nối database
$conn = mysqli_connect('localhost', 'root','','healer');
if(!$conn){
    echo "Kết nối không thành công.".mysql_connect_error();
    die();
}
//else{
//    echo "Kết nối thành công.";
//}
