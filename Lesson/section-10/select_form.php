<?php
if(isset($_POST['pay'])){
    if(empty($_POST['pay'])){
        // Thông báo lỗi
        echo " Cần chọn hình thức thanh toán";
    }else{
        $pay = $_POST['pay'];
        echo $pay;
    } 
}
?>
<html>
    <head>
        <title>Lấy dữ liệu từ radio button</title>
    </head>
    <body>
        <h1>Đặt hàng</h1>
        <form action="" method="POST">
            <label>Hình thức thanh toán</label><br>
            <select name="pay">
                <option value="">--Chọn--</option>
                <option value="cod" >Thanh toán tại nhà</option>
                <option value="banking">Thanh toán qua Thẻ tín dụng</option>
            </select>

            <input type="submit" name="btn_order" value="Đặt hàng">
        </form>
    </body>
</html>
