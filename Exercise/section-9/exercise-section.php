<?php
#Bài 1
$total_rows = 100;
$num_per_page = 25;

//$num_page = ceil($total_rows / $num_per_page);
//echo $num_page;
#Bài 2
//$list_number = array (2,3,4,6,11,1,21);
//$list_even =  array();
//if (!empty($list_number) && is_array($list_number)){
//    foreach($list_number as $num ){
//        if ($num % 2 == 0){
//            $list_even[] = $num;
//        }
//    }
//    print_r($list_even);
//}
#Bài 3
$list_post_cat = array(
    1 => array(
        'id' => 1,
        'cat_title' => 'Giáo dục',
        'lever' => 0
    ),
    2 => array(
        'id' => 2,
        'cat_title' => 'Khuyến học',
        'lever' => 1
    ),
    3 => array(
        'id' => 3,
        'cat_title' => 'Du học',
        'lever' => 1
    ),
    4 => array(
        'id' => 4,
        'cat_title' => 'Thể thao',
        'lever' => 0
    ),
    5 => array(
        'id' => 5,
        'cat_title' => 'Châu Âu',
        'lever' => 1
    ),
    6 => array(
        'id' => 2,
        'cat_title' => 'Châu Á',
        'lever' => 1
    )
);
?>
<html>
    <head>
        <title>Thư viên hàm php</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <td>STT</td>
                    <td>Tên</td>
                </tr>
            </thead>  
            <tbody>
                <?php
                if (!empty($list_post_cat)) {
                    $t = 0;
                    foreach ($list_post_cat as $item) {
                        $t++;
                        ?>
                        <tr>
                            <td><?php echo $t ?></td>
                            <td><?php echo str_repeat('--',$item['lever']).$item['cat_title']?></td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody> 
        </table>
    </body>
</html>
