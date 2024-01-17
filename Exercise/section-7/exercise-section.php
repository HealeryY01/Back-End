<?php
#Bài 1: Tạo mảng lưu trữ số nguyên lẻ 3 =>150
$list_odd = array();
for ($i = 3; $i <= 150; $i += 2) {
    $list_odd[] = $i;
}
//echo"<pre>";
//print_r($list_odd);       
//echo"</pre>";
#Bài 2: Tạo mảng lưu trữ thông tin bài viết 

$list_post_cat = array(
    1 => array(
        'cat_id' => 1,
        'cat_title' => 'Xã hội'
    ),
    2 => array(
        'cat_id' => 2,
        'cat_title' => 'Thể thao'
    )
);
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
//echo"<pre>";
//print_r($list_post_cat);       
//echo"</pre>";
//
//echo"<pre>";
//print_r($list_post);       
//echo"</pre>";
?>

<html>
    <head>
        <title>Bài viết</title>
    </head>
    <body>
        <h1>Danh sách bài viết</h1>
        <ul>
            <?php
            if (!empty($list_post)) {
                foreach($list_post as $item) {
                    ?>

                    <li>
                        <a href=""><?php echo $item['post_title'] ?> </a>
                        <p><?php echo $item['post_desc'] ?> </p>
                    </li> 
                    <?php
                }
            }
            ?>
        </ul>
    </body>
</html>


