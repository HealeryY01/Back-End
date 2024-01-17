<?php
$cat_id = (int) $_GET['cat_id'];
#Lấy thông tin của danh mục
$info_cat = get_info_cat($cat_id);
#Lấy danh sách bài viết
$list_item = get_list_product_by_cat_id($cat_id);
?>
<?php
get_header();
?>
<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title"><?php echo $info_cat['cat_title']; ?></h3>
                    <p class="section-desc">Có <?php echo count($list_item); ?> sản phẩm trong mục này</p>
                </div>
                <div class="section-detail">
                    <?php
                    if (!empty($list_item)) {
                        ?>
                        <ul class="list-item clearfix">  
                            <?php
                            foreach ($list_item as $item) {
                                ?>
                                <li>
                                    <a href="<?php echo $item['url'] ?>" title="" class="thumb">
                                        <img src="<?php echo $item['product_thumb'] ?>" alt="">
                                    </a>
                                    <a href="<?php echo $item['url'] ?>" title="" class="title"><?php echo $item['product_title'] ?></a>
                                    <p class="price"><?php echo currency_format($item['price']) ?></p>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
get_footer();
?>

