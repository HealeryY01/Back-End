<?php
//show_array($list_user);
get_header();
?>
<div id="content">
    <h1>Danh sách thành viên</h1>
    <table>
        <thead>
            <tr>
                <td>Stt</td>
                <td>Tên</td>
                <td>Email</td>
                <td>Tuổi</td>
                <td>Thu nhập</td>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($list_users)) {
                $t = 0;
                foreach ($list_users as $user) {
                    $t++;
                    ?>
                    <tr>
                        <td><?php echo $t ?></td>
                        <td><?php echo $user['fullname']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['age']; ?></td>
                        <td><?php echo currency_format($user['earn'], '$'); ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>

<?php
//show_array($list_user);
get_footer();
?>

