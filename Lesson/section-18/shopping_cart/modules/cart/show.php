<?php
get_header();
?>
<?php
$list_buy = get_list_buy_cart();
//show_array($list_buy);
?>
<div id="main-content-wp" class="cart-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <h3 class="title">Giỏ hàng</h3>
            </div>
        </div>
    </div>
    <div id="wrapper" class="wp-inner clearfix">
        <?php
        if (!empty($list_buy)) {
            ?>
            <div class="section" id="info-cart-wp">
                <div class="sectio-detail table-responsive">
                    <form action="?mod=cart&act=update" method="post">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Mã sản phẩm</td>
                                    <td>Ảnh sản phẩm</td>
                                    <td>Tên sản phẩm</td>
                                    <td>Giá sản phẩm</td>
                                    <td>Số lượng</td>
                                    <td colspan="2">Thành tiền</td>                            
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($list_buy as $item) {
                                    ?>
                                    <tr>
                                        <td><?php echo $item['code']; ?></td>
                                        <td>
                                            <a href="<?php echo $item['url']; ?>" class="thumb_cart">
                                                <img src="<?php echo $item['product_thumb']; ?>" alt=""/>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="<?php echo $item['url']; ?>" title="<?php echo $item['product_title']; ?>" class="name-product"><?php echo $item['product_title']; ?></a>
                                        </td>
                                        <td><?php echo currency_format($item['price']); ?></td>
                                        <td>
                                            <input type="number" min='1' max='10' name="qty[<?php echo $item['id']; ?>]" value="<?php echo $item['qty']; ?>" class="num-order">
                                        </td>
                                        <td><?php echo currency_format($item['sub_total']); ?></td>
                                        <td>
                                            <a href="<?php echo $item['url_delete_cart']; ?>" title="Xóa sản phẩm" class="del-product"><i class="fa-regular fa-trash-can"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <div class="clearfix">
                                            <p id="total-price" class="fl-right">Tổng giá: <span><?php echo currency_format(get_total_cart()); ?></span></p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="7">
                                        <div class="clearfix">
                                            <div class="right">
                                                <input type="submit" id="update-cart" name="btn_update_cart" value="Cập nhật giỏ hàng">
                                                <a href="?mod=cart&act=checkout" id="checkout-cart" title="">Thanh toán</a>
                                            </div>
                                        </div>
                                    </td> 
                                </tr>
                            </tfoot>
                        </table>
                    </form>
                </div>
            </div>
            <div class="section" id="action-cart-wp">
                <div class="section-detail">
                    <p class="title">Click vào<span>"Cập nhật giỏ hàng"</span> để cập nhật số lượng. Nhập vào số lượng 0 để xóa sản phẩm khỏi giỏ hàng.Nhấn vào thanh toán đẻ hoàn tất mua hàng.</p>
                    <a href="?" title="" id="buy-more">Mua tiếp</a>
                    <a href="?mod=cart&act=delete_all" title="" id="delete">Xóa giỏ hàng</a>
                </div>
            </div>
            <?php
        } else {
            ?>
            <div class="section" id="cart_empty">
                <p>Không có sản phẩm nào trong giỏ hàng, click<a href="?"> Vào đây</a> để quay trở lại trang chủ</p>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<?php
get_footer();
?>