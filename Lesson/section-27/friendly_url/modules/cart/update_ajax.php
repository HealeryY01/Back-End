<?php
//Tính toán
$id = $_POST['id'];
$qty = $_POST['qty'];
//Lấy thông tin sản phẩm
$item = get_product_by_id($id);
if(isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])){
    //Cập nhật số lượng
    $_SESSION['cart']['buy'][$id]['qty'] = $qty;
    
    //Cập nhật tổng tiền
    $sub_total = $qty * $item['price'];
    $_SESSION['cart']['buy'][$id]['sub_total'] = $sub_total;
    
    //Cập nhật toàn bộ giỏ hàng
    update_info_cart();
    
    //Lấy tổng giá trị trong giot hàng
    $total = get_total_cart();
    
    //Giá trị trả về
    $data = array(
        'sub_total' => currenct_format($sub_total),
        'total' => currenct_format($total)
    );
    echo json_encode($data);
}


