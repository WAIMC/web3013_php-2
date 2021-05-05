<main>
    <!-- ? New Product Start -->
    <section class="new-product-area section-padding30">
        <div class="container">
            <!-- Section tittle -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle mb-70">
                        <h2>Điểm Đến Mới</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-pro mb-30 text-center">
                        <div class="product-img">
                            <img src=" <?= PUBLIC_IMAGE ?>gallery/product-1.png" alt="">
                        </div>
                        <div class="product-caption">
                            <h3><a href="?act=shop">Món Khai Vị</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-pro mb-30 text-center">
                        <div class="product-img">
                            <img src=" <?= PUBLIC_IMAGE ?>gallery/product-2.png" alt="">
                        </div>
                        <div class="product-caption">
                            <h3><a href="?act=shop">Món Chính</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-pro mb-30 text-center">
                        <div class="product-img">
                            <img src=" <?= PUBLIC_IMAGE ?>gallery/product-3.png" alt="">
                        </div>
                        <div class="product-caption">
                            <h3><a href="?act=shop">Món Tráng Miệng</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  New Product End -->
    <!--? Gallery Area Start -->
    <div class="gallery-area">
        <div class="container-fluid p-0 fix">
            <div class="row">
                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-gallery mb-30">
                        <div class="gallery-img big-img" style="background-image: url( public/image/gallery/bst-1.png);"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-gallery mb-30">
                        <div class="gallery-img big-img" style="background-image: url( public/image/gallery/bst-2.png);"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img small-img" style="background-image: url( public/image/gallery/bst-3.png);"></div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12  col-md-6 col-sm-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img small-img" style="background-image: url( public/image/gallery/bst-4.png);"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Gallery Area End -->
    <!--? Popular Items Start -->
    <div class="popular-items section-padding30">
        <div class="container">
            <!-- Section tittle -->
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="section-tittle mb-70 text-center">
                        <h2>Các mặt hàng phổ biến</h2>
                        <p>Bữa tối trong tuần, các món yêu thích theo mùa và các ý tưởng khác cho tuần này.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                foreach ($items as $item) {
                ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50 text-center">
                            <div class="popular-img">
                                <img src=" <?= PUBLIC_IMAGE ?>products/<?=$item['image']?>" alt="">
                                <div class="img-cap">
                                    <a href="?act=product_detail&id_product=<?=$item['id']?>"><span>CHI TIẾT</span></a>
                                    <a href="?act=list_product"></a>
                                </div>
                                <div class="favorit-items">
                                    <span class="flaticon-heart"></span>
                                </div>
                            </div>
                            <div class="popular-caption">
                                <h3><?=$item['name_product']?></h3>
                                <span> <del style="color:#35dcd4;">$<?=$item['price']?></del> &nbsp; <strong class="text-danger">$<?=$item['discount']?></strong>  </span>
                            </div>
                      </div>
                    </div>
                <?php
                 } 
                 ?>
            </div>
            <!-- Button -->
            <div class="row justify-content-center">
                <div class="room-btn pt-70">
                    <a href="?act=shop" class="btn view-btn1">XEM NHIỀU SẢN PHẨM HƠN</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular Items End -->
    <!--? Video Area Start -->
    <div class="video-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="video-wrap">
                        <div class="play-btn "><a class="popup-video" href="https://www.youtube.com/watch?v=KMc6DyEJp04"><i class="fas fa-play"></i></a></div>
                    </div>
                </div>
            </div>
            <!-- Arrow -->
            <div class="thumb-content-box">
                <div class="thumb-content">
                    <h3>Video Tiếp Theo</h3>
                    <a href="#"> <i class="flaticon-arrow"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Area End -->
    <!--? Watch Choice  Start-->
    <div class="watch-area section-padding30">
        <div class="container">
            <div class="row align-items-center justify-content-between padding-130">
                <div class="col-lg-5 col-md-6">
                    <div class="watch-details mb-40">
                        <h2>Món Ăn Bạn Muốn Chọn</h2>
                        <p>Shop VINH phân loại các địa điểm ra rất chi tiết: theo mục đích, loại hình, món ăn, giá cả, loại ẩm thực... Điều này giúp cộng đồng lọc địa điểm theo mục đích của mình rất nhanh chóng.</p>
                        <a href="?act=shop" class="btn">Hiển Thị Sản Phẩm</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-10">
                    <div class="choice-watch-img mb-40">
                        <img src=" <?= PUBLIC_IMAGE ?>gallery/choce_food-1.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 col-sm-10">
                    <div class="choice-watch-img mb-40">
                        <img src=" <?= PUBLIC_IMAGE ?>gallery/choce_food-2.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="watch-details mb-40">
                        <h2>Món Ăn Bạn Muốn Chọn</h2>
                        <p>Công cụ tìm kiếm thông minh bằng cách gõ: tên món ăn, hoặc loại. Hệ thống tìm kiếm sử dụng gợi ý & xem nhanh thông tin, giúp bạn tìm sản phẩm nhanh nhất</p>
                        <a href="?act=shop" class="btn">Hiển Thị Sản Phẩm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Watch Choice  End-->
    <!--? Shop Method Start-->
    <div class="shop-method-area">
        <div class="container">
            <div class="method-wrapper">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-package"></i>
                            <h6>Phương thức vận chuyển miễn phí</h6>
                            <p>Phương thức đơn giản, vận chuyển nhanh chóng và miễn phí.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-unlock"></i>
                            <h6>Hệ thống thanh toán an toàn</h6>
                            <p>Hệ thống thanh toán nhanh chóng và đảm bảo an toàn.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-reload"></i>
                            <h6>Chính sách ưu đãi khách hàng</h6>
                            <p>Chính sách nhất quán thân thiện với người dùng.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Method End-->
</main>