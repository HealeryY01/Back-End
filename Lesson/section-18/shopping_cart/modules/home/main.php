<?php
get_header();
?>
<?php
$list_mobile = get_list_product_by_cat_id(1);
$list_tablet = get_list_product_by_cat_id(2);
$list_laptop = get_list_product_by_cat_id(3);
$info_cat_mobile = get_info_cat(1);
$info_cat_tablet = get_info_cat(2);
$info_cat_laptop = get_info_cat(3);
//show_array($list_product);
?>
<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section list-cart">
                    <a class="section-title" href="<?php echo $info_cat_mobile['url'] ?>"><?php echo $info_cat_mobile['cat_title'] ?></a>
                </div>
                <div class="section-detail">
                    <?php
                    if (!empty($list_mobile)) {
                        ?>
                        <ul class="list-item clearfix">  
                            <?php
                            foreach ($list_mobile as $item) {
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
                <div class="section list-cart">
                    <a class="section-title" href="<?php echo $info_cat_tablet['url'] ?>"><?php echo $info_cat_tablet['cat_title'] ?></a>
                </div>
                <div class="section-detail">
                    <?php
                    if (!empty($list_tablet)) {
                        ?>
                        <ul class="list-item clearfix">  
                            <?php
                            foreach ($list_tablet as $item) {
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
                <div class="section list-cart">
                    <a class="section-title" href="<?php echo $info_cat_laptop['url'] ?>"><?php echo $info_cat_laptop['cat_title'] ?></a>
                </div>
                <div class="section-detail">
                    <?php
                    if (!empty($list_laptop)) {
                        ?>
                        <ul class="list-item clearfix">  
                            <?php
                            foreach ($list_laptop as $item) {
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

<?php
get_footer();
?>