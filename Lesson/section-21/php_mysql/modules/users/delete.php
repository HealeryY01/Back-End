<?php
$id = (int)$_GET['id'];
//$sql = "DELETE FROM `tbl_user` WHERE `user_id` = {$id}";
//if(mysqli_query($conn, $sql)){
//   redirect("?mod=users&act=main");  
//}
db_delete("tbl_user","`user_id` = {$id}");
redirect("?mod=users&act=main"); 
