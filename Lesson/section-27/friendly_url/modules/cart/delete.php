<?php
//Xóa từng sản phẩm 
$id = (int)$_GET['id'];
delete_cart($id);
redirect("?mod=cart&act=show");
