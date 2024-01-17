<?php

#Danh mục 
/*
 * id => id
 * Tên danh mục => cat_title
 */

$list_product_cat = array(
    1 => array(
        'id' => 1,
        'cat_title' => "Điện thoại"
    ),
    2 => array(
        'id' => 2,
        'cat_title' => "Tablet"
    ),
    3 => array(
        'id' => 3,
        'cat_title' => "Lap top"
    ),
);

#Dữ liệu sản phẩm 

/*
 * id => id 
 * Tên sản phẩm => product_title
 * Giá => price
 * Mã sản phẩm => code
 * Mô tả => product_desc
 * Ảnh đại diện => product_thumb =>url
 * Nội dung => product_content
 * Id danh mục => cat_id
 */

$list_product = array(
    1 => array(
        'id' => 1,
        'product_title' => 'iPhone 15 Pro Max',
        'price' => 33190000,
        'code' => 'HEALER_P#1',
        'product_desc' => 'iPhone 15 Pro Max mẫu điện thoại mới nhất của Apple cuối cùng cũng đã chính thức được ra mắt vào tháng 09/2023. Mẫu điện thoại này sở hữu một con chip với hiệu năng mạnh mẽ Apple A17 Pro, màn hình đẹp mắt và cụm camera vô cùng chất lượng.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/305658/TimerThumb/iphone-15-pro-max-(4).jpg',
        'product_content' => "<p>Đặc điểm nổi bật của iPhone 15 Pro Max: <br>
• Tăng độ cứng cáp và tối ưu khối lượng với chất liệu Titan<br>
• Bứt phá mọi giới hạn về hiệu năng nhờ chip A17 Pro<br>
• Phiên bản duy nhất cải tiến camera tele 5x<br>
• Tích hợp camera 48 MP<br>
• Nút tác vụ (Action Button) thay thế cần gạt rung<br>
• Chuyển đổi cổng sạc USB-C, truyền tải dữ liệu tốc độ cao</p><p><img src='https://cdn.tgdd.vn/Products/Images/42/299033/iphone-15-pro-130923-102854.jpg'/></p>",
        'cat_id' => 1,
    ),
    2 => array(
        'id' => 2,
        'product_title' => 'iPhone 15 Pro',
        'price' => 28290000,
        'code' => 'HEALER_P#2',
        'product_desc' => 'Cuối cùng thì iPhone 15 Pro cũng đã chính thức ra mắt vào tháng 09/2023 sau nhiều đồn đoán trong thời gian qua. Ở lần ra mắt này Apple mang đến một chiếc máy với vẻ ngoài cứng cáp đẹp mắt, một khả năng quay video chuyên nghiệp đi cùng bộ cấu hình cực khủng - hàng đầu phân khúc điện thoại hiện nay.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/305658/TimerThumb/iphone-15-pro-max-(4).jpg',
        'product_content' => "<p>Đặc điểm nổi bật của iPhone 15 Pro: <br>
• Chế tác bộ bộ khung viền từ chất liệu Titanium cứng cáp<br>
• Sở hữu cấu hình mạnh mẽ bậc nhất trong ngành điện thoại<br>
• Camera hỗ trợ chụp zoom quang hoặc 3x<br>
• Hỗ trợ quay video chất lượng 4K cùng khả năng chống rung đỉnh cao<br>
• Thay thế gạt rung bằng Action Button mới lạ và tiện lợi<br>
• Chuyển đổi cổng sạc USB-C, truyền tải dữ liệu tốc độ cao</p><p><img src='https://cdn.tgdd.vn/Products/Images/42/299033/iphone-15-pro-130923-102854.jpg'/></p>",
        'cat_id' => 1,
    ),
    3 => array(
        'id' => 3,
        'product_title' => 'Samsung Galaxy S23 Ultra 5G',
        'price' => 22890000,
        'code' => 'HEALER_P#3',
        'product_desc' => 'Tại sự kiện Samsung Unpacked thường niên, Samsung Galaxy Z Fold4 256GB chính thức được trình làng thị trường công nghệ, mang trên mình nhiều cải tiến đáng giá giúp Galaxy Z Fold trở thành dòng điện thoại gập đã tốt nay càng tốt hơn.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/249948/TimerThumb/samsung-galaxy-s23-ultra.jpg',
        'product_content' => "<p>Galaxy Z Fold4 (2022) ra mắt với ngoại hình gần như là không đổi khi so với Galaxy Z Fold3, nếu bạn chỉ nhìn bề ngoài thì bạn sẽ khó lòng phân biệt được 2 sản phẩm này. Máy vẫn sử dụng khung viền Armor Aluminum bền bỉ, mặt kính màn hình phụ là Corning Gorilla Glass Victus+, mặt kính màn hình chính là Ultra Thin Glass.</p><p><img src='https://cdn.tgdd.vn/Products/Images/42/250625/samsung-galaxy-z-fold4-100822-064950.jpg'/></p>",
        'cat_id' => 1,
    ),
    4 => array(
        'id' => 4,
        'product_title' => 'iPad Pro M2 11 inch WiFi',
        'price' => 20690000,
        'code' => 'HEALER_T#2',
        'product_desc' => 'Cơn sốt của iPhone 14 series chưa kịp lắng xuống thì mới đây nhà Apple lại vừa tung ra bộ sản phẩm tablet cho năm 2022 với nhiều điểm thu hút. Con chip Apple M2 từng khuấy đảo thị trường laptop bây giờ đã được xuất hiện trên iPad Pro M2 11 inch WiFi 128GB, nó quả thực là một tin chấn động trong giới công nghệ bởi đây có thể là chiếc máy tính bảng có hiệu năng vô đối trên thị trường (10/2022).',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/522/294104/TimerThumb/ipad-pro-m2-11-inch-(22).jpg',
        'product_content' => "<p>Pad Pro M2 có một diện mạo cao cấp với mặt lưng làm từ kim loại chắc chắn, đi kèm với độ mỏng chỉ 5.9 mm giúp cho tổng thể thiết bị thêm phần sang trọng. Dường như Apple đang rất nỗ lực để biến thiết bị của hãng trở nên ngày càng thanh mảnh, chắc hẳn trên thị trường tablet hiện tại chưa có cái tên nào có thể vượt qua độ mỏng của iPad Pro M2.</p><p><img src='https://cdn.tgdd.vn/Products/Images/522/294104/ipad-pro-m2-11-inch-231022-053252.jpg'/></p>",
        'cat_id' => 2,
    ),
     5 => array(
        'id' => 5,
        'product_title' => 'iPad Air 5 M1 WiFi 64GB',
        'price' => 14990000,
        'code' => 'HEALER_T#1',
        'product_desc' => 'iPad Air 5 M1 WiFi 64 GB có nhiều tính năng đặc biệt: Kết nối Apple Pencil 2, Kết nối bàn phím rời, Micro kép, Mở khóa bằng vân tay, Nam châm và sạc cho Apple Pencil.
                           Tổng kết lại với những người thích xem phim nghe nhạc, lướt mạng xã hội giải trí trên một thiết bị màn hình to thì đây là 1 trong những máy tính bảng đáng chú ý.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/522/248096/TimerThumb/ipad-air-5-(28).jpg',
        'product_content' => "<p>iPad Air 5 M1 WiFi 64 GB đã được công bố tại sự kiện Peek Performance diễn ra hôm 9/3 (theo giờ Việt Nam). Năm nay Apple đã có những thay đổi lớn về cả hiệu năng và bổ sung màu sắc mới cho thiết bị.</p><p><img src='https://cdn.tgdd.vn/Products/Images/522/248096/ipad-air-5-150322-044250.jpeg'/></p>",
        'cat_id' => 2,
    ),
    6 => array(
        'id' => 6,
        'product_title' => 'iPad Air 5 M1 WiFi Cellular 64GB',
        'price' => 17990000,
        'code' => 'HEALER_T#3',
        'product_desc' => 'So với chiếc iPad Air 5 M1 WiFi 64GB thì chiếc iPad Air 5 M1 WiFi Cellular 64GB đã có một điểm khác biệt đáng kể đó là phương thức kết nối khi bạn vừa có thể sử dụng Wifi và mạng di động một cách bình thường nhưng vẫn cho một trải nghiệm rất tuyệt vời.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/522/274155/TimerThumb/ipad-air-5-m1-wifi-cellular-64gb-(22).jpg',
        'product_content' => "<p>Máy tính bảng được trang bị một màn hình lớn lên đến 10.9 inch vừa đủ không quá to nhưng cũng không nhỏ cho bạn dễ dàng trải nghiệm, sử dụng. Đi kèm với đó chiếc màn hình Retina IPS LCD này sẽ mang lại cho bạn những trải nghiệm về màu sắc tốt hơn.</p><p><img src='https://cdn.tgdd.vn/Products/Images/522/274155/ipad-air-5-m1-wifi-cellular-64gb-5.jpg'/></p>",
        'cat_id' => 2,
    ),
    7 => array(
        'id' => 7,
        'product_title' => 'MSI Gaming Cyborg 15 A12VF i7 12650H (267VN)',
        'price' => 25990000,
        'code' => 'HEALER_L#1',
        'product_desc' => 'Bộ vi xử lý Intel Core i7 12650H (Gen 12) và card đồ họa NVIDIA GeForce RTX 4060 8 GB đều trang bị cho chiếc laptop RTX 40 series này khả năng xử lý hiệu suất cao và đáp ứng được nhu cầu làm việc với các tác vụ nặng như thiết kế đồ họa, xử lý video và chơi game nặng với độ phân giải cao.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/306138/msi-gaming-cyborg-15-a12vf-i7-267vn-thumb-600x600.jpg',
        'product_content' => "<p>Laptop MSI Gaming Cyborg 15 A12VF i7 12650H (267VN) với cấu hình mạnh mẽ, được thiết kế dành riêng cho các game thủ đam mê thể thao điện tử. Một chiếc laptop gaming đáp ứng được hoàn hảo các nhu cầu chơi game và xử lý đồ họa.</p><p><img src='https://cdn.tgdd.vn/Products/Images/44/306138/msi-gaming-cyborg-15-a12vf-i7-267vn-acv-3.jpg'/></p>",
        'cat_id' => 3,
    ),
    8 => array(
        'id' => 8,
        'product_title' => 'Asus TUF Gaming F15 FX507ZC4 i5 12500H (HN229W)',
        'price' => 21990000,
        'code' => 'HEALER_L#2',
        'product_desc' => 'Laptop Asus TUF Gaming F15 FX507ZC4 i5 12500H (HN229W) với cấu trúc mạnh mẽ, hiệu năng vượt trội cùng mức giá hoàn toàn ưu đãi tại Thế Giới Di Động. Đây chính xác là mẫu laptop gaming được thiết kế dành riêng cho những anh em đam mê thể thao điện tử, đáp ứng đầy đủ đến cả những công việc thiết kế, sáng tạo.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/317709/asus-tuf-gaming-f15-fx507zc4-i5-hn229w-thumb-600x600.jpg',
        'product_content' => "<p> Laptop Asus TUF Gaming được trang bị màn hình IPS có kích thước 15.6 inch, độ phân giải Full HD (1920 x 1080) cùng tốc độ làm mới 144 Hz, mang lại trải nghiệm chơi game mượt mà, thời gian phản hồi nhanh chóng khi chơi các tựa game eSports, những khung cảnh chuyển động sắc nét và mượt mà sẽ nâng tầm trải nghiệm của người dùng hơn rất nhiều.</p><p><img src='https://cdn.tgdd.vn/Products/Images/44/317709/Kit/asus-tuf-gaming-f15-fx507zc4-i5-hn229w-note-fix.jpg'/></p>",
        'cat_id' => 3,
    ),
     9 => array(
        'id' => 9,
        'product_title' => 'Gigabyte Gaming G5 i5 12500H (KF-E3PH333SH)',
        'price' => 25790000,
        'code' => 'HEALER_L#3',
        'product_desc' => 'Trải nghiệm thư viện game đa dạng, đầy hấp dẫn qua hiệu năng vượt trội từ con chip Intel dòng H, card rời RTX 40 series cũng các tính năng hiện đại trên laptop Gigabyte Gaming G5 i5 12500H (KF-E3PH333SH). Mẫu laptop gaming tầm trung này chắc chắn sẽ là phương tiện giải trí tuyệt vời cho các anh em game thủ.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/317185/gigabyte-gaming-g5-i5-kf-e3ph333sh-thumb-600x600.jpg',
        'product_content' => "<p>  Laptop Gigabyte với sự trang bị là con chip Intel Core i5 12500H dòng H đầy mạnh mẽ đi cùng với card rời NVIDIA GeForce RTX 4060 8 GB hỗ trợ xử lý trơn tru các công việc nặng như coding, máy học,... cho phép bạn chơi các tựa game đầy hấp dẫn với khung cảnh bắt mắt, thế giới ảo sống động như thật với các hiệu ứng dò tia, ánh sáng, đổ bóng hoàn hảo. Ngoài ra, mức cấu hình trên cũng rất thích hợp để bạn chỉnh sửa đồ hoạ 2D, 3D cũng như edit các video ngắn.</p><p><img src='https://cdn.tgdd.vn/Products/Images/44/317185/Slider/vi-vn-gigabyte-gaming-g5-i5-kf-e3ph333sh-slider-3.jpg'/></p>",
        'cat_id' => 3,
    ),
);
