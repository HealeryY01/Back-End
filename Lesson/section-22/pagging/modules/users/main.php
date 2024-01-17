<?php
get_header();
?>
<?php
//Xuất dữ liệu 
//$sql = "SELECT * FROM `tbl_user`";
//$result = mysqli_query($conn, $sql);
//$list_users = array();
//$num_rows = mysqli_num_rows($result);
//if ($num_rows > 0) {
//    while ($row = mysqli_fetch_assoc($result)) {
//        $list_users[] = $row;
//    }
//}

$num_rows = db_num_rows("SELECT * FROM `tbl_user`");
//Số lượng bản ghi lên trang
$num_per_page = 3;
$total_rows = $num_rows;
//=>Tổng số trang
$num_page = ceil($total_rows/$num_per_page);
$page = isset($_GET['page'])?(int)($_GET['page']):1;
$start = ($page -1)*$num_per_page;

$list_users = get_users($start,$num_per_page);



foreach ($list_users as &$user) {
    $user['url_update'] = "?mod=users&act=update&id={$user['user_id']}";
    $user['url_delete'] = "?mod=users&act=delete&id={$user['user_id']}";
}
unset($user);
?>
<div id="content">
    <a class="add_new" href="?mod=users&act=add">Thêm mới</a>
    <h1>Danh sách thành viên</h1>
    <?php
    if (!empty($list_users)) {
        ?>
        <table class="table_data">
            <thead>
                <tr>
                    <td>Stt</td>
                    <td>Id</td>
                    <td>Fullname</td>
                    <td>Username</td>
                    <td>Email</td>
                    <td>Gender</td>
                    <td>Thao tác</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $temp = $start;
                foreach ($list_users as $user) {
                    $temp++;
                    ?>
                    <tr>
                        <td><?php echo $temp; ?></td>
                        <td><?php echo $user['user_id']; ?></td>
                        <td><?php echo $user['fullname']; ?></td>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo show_gender($user['gender']); ?></td>
                        <td><a href="<?php echo $user['url_update']; ?>"> Sửa</a> | <a href="<?php echo $user['url_delete']; ?>"> Xóa</a></td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
        <?php echo get_pagging($num_page,$page,"?mod=users&act=main"); ?>
        <p class="num_rows">Có <?php echo $num_rows; ?> thành viên trong hệ thống</p> 
        <div class="clearfix"></div>
        <?php
    }
    ?>
</div>

<?php
get_footer();
?>
