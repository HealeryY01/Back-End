<?php

#1.Kiểm tra số nguyên chẵn 
//function check_even($n) {
//    if ($n % 2 == 0)
//        return true;
//    return FALSE;
//}
//
////Gọi hàm
//if (check_even(7))
//    echo "Đây là số nguyên chẵn";
//else
//    echo " Đây là số nguyên lẻ ";
#2. Tính tổng cách số nguyên tố từ 2 -> $n ($n>=2)
//Số nguyên tố
//1 2 3 4 6 7 ... $n
//$n = $x *$y
//function check_prim($n) {
//    for ($i = 2; $i <= sqrt($n); $i++) {
//        if ($n % $i == 0)
//            return false;
//    }
//    return true;
//}
//
//function total_prim($n) {
//    $t = 0;
//    for ($i = 2; $i <= $n; $i++) {
//        if (check_prim($i))
//            $t += $i;
//    }
//    return $t;
//}
//echo total_prim(15);
#3. Lấy thông tin bài chi tiết một bài viết theo id trong mảng bài viết 
$list_post = array(
    1 => array(
        'id' => 1,
        'post_title' => 'Man City công bố đội hình dự FIFA Club World Cup',
        'post_content' => 'Chi tiết bài viết 1',
        'post_desc' => 'Tiền vệ Kevin De Bruyne có tên trong danh sách 23 cầu thủ Man City dự FIFA Club World Cup tại Arab Saudi từ 12/12 đến 22/12.',
        'cat_id' => 1
    ),
    2 => array(
        'id' => 2,
        'post_title' => "HLV Ten Hag: 'Ai cũng khuyên tôi đừng đến Man Utd'",
        'post_content' => 'Chi tiết bài viết 2',
        'post_desc' => 'ANHHLV Erik ten Hag cho biết nhiều người khuyên ông không nên dẫn dắt Man Utd nhưng ông vẫn ký hợp đồng vì cảm tình với Sir Alex Ferguson.',
        'cat_id' => 2
    )
);

function get_post_by_id($id) {
    global $list_post;
    if (array_key_exists($id, $list_post)) {
        return $list_post[$id];
        return false;
    }
}

$item = get_post_by_id(1);
echo"<pre>";
print_r($item);
echo"</pre>";
