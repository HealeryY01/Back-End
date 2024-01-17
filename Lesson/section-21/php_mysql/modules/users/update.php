<?php
get_header();
?>
<?php
$id = (int) $_GET['id'];
?>
<?php
if (isset($_POST['btn_update'])) {
    //Phất cờ
    $error = array();
    $alert = array();
    //Kiểm tra fullname
    if (empty($_POST['fullname'])) {
        //Hạ cờ
        $error['fullname'] = "Không được để trống trường Fullname";
    } else {
        $fullname = $_POST['fullname'];
    }
    //Kiểm tra gender
    if (empty($_POST['gender'])) {
        //Hạ cờ
        $error['gender'] = "Bạn cần chọn giới tính";
    } else {
        $gender = $_POST['gender'];
    }
    //Kết luận
    if (empty($error)) {
        $sql = "UPDATE `tbl_user` SET `fullname`= '{$fullname}' , `gender` = '{$gender}' WHERE `user_id` = {$id}";
        if (mysqli_query($conn, $sql)) {
            $alert['success'] = "Cập nhật dữ liệu thành công";
        } else {
            echo "Lỗi" . mysql_error($conn);
        }
//        $data = array(
//            'fullname' => $fullname,
//            'gender' => $gender
//        );
//        db_update("tbl_user", $data, "`user_id` = {$id}");
    } 
}
//$sql = "SELECT * FROM `tbl_user` WHERE `user_id` = {$id}";
//$result = mysqli_query($conn, $sql);
//$item = mysqli_fetch_array($result);

$item = db_fetch_row("SELECT * FROM `tbl_user` WHERE `user_id` = {$id}");
?>
<div id="content">
    <style>
        #form_reg{
            width: 250px;
            margin-top: 20px;
        }
        label{
            display: block;
            margin: 0px 0px 5px 0px;
        }
        input{
            display: block;
            margin-bottom: 10px;
        }
        input[type='text'],input[type='email'],input[type='password']{
            padding: 5px 10px;
            border: 1px solid #dedede;
            width: 100%;
        }
         input[type='submit']{
            margin-top: 20px;
            display: block;
            padding: 9px 10px;
            text-align: center;
            background: #ffa84c;
            border: none;
            width: 100%;
            text-transform: uppercase;
            cursor: pointer;
        }
        select{
            padding: 6px 10px;
            border: 1px solid #dedede;
            width: 100%;
        }
        p.error{
            color: red;
        }
        p.success {
            margin-top: 10px;
            color: #cb133c;
            font-size: 15px;
        }
    </style>
    <h1>Thêm mới</h1>
    <?php
    if (!empty($alert['success'])) {
        ?>
        <p class="success"><?php echo $alert['success'] ?></p>
        <?php
    }
    ?>
    <form method='post' id='form_reg' action="">
        <label for="fullname">Họ và tên</label>
        <input type="text" name="fullname" id='fullname' value="<?php if (!empty($item['fullname'])) echo $item['fullname']; ?>"/>
        <?php
        if (!empty($error['fullname'])) {
            ?>
            <p class="error"><?php echo $error['fullname'] ?></p>
            <?php
        }
        ?>        
        <select name='gender'>
            <option value="">--Chọn giới tính--</option>
            <option <?php if (isset($item['gender']) && $item['gender'] == 'male') echo "selected='seclected'"; ?> value="male">Nam</option>
            <option <?php if (isset($item['gender']) && $item['gender'] == 'female') echo "seleceted='seclected'"; ?> value="female">Nữ</option>
        </select>
        <?php
        if (!empty($error['gender'])) {
            ?>
            <p class="error"><?php echo $error['gender'] ?></p>
            <?php
        }
        ?>
        <input type="submit" value="Cập nhật" name="btn_update" id="btn_update"/>
    </form>
</div>

<?php
get_footer();
?>
