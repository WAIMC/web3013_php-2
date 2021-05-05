<footer>
            <!-- Footer Start-->
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href=""><img style="margin: 0 auto; display:block" src=" <?= PUBLIC_IMAGE ?>logo/logo-1.png" width="80px" alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p>Đây là một website ẩm thực, có sẵn trên tất cả các nền tảng,
                                                giúp mọi người mọi gia đình ở mọi cấp độ khám phá, lưu và sắp xếp các món ăn ngon nhất trên thế giới,
                                                đồng thời giúp họ trở thành những người trải nghiệm thưởng thức tốt hơn.
                                                Đăng ký ngay bây giờ để truy cập đầy đủ.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Ghé thăm</h4>
                                    <ul>
                                        <li><a href="?act=about">Giới thiệu</a></li>
                                        <li><a href="?act=about"> Ưu đãi & giảm giá</a></li>
                                        <li><a href="?act=shop"> Shop</a></li>
                                        <li><a href="?act=contact"> Liên hệ chúng tôi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Sản phẩm mới</h4>
                                    <ul>
                                        <li><a href="#">Ăn sáng</a></li>
                                        <li><a href="#">Ăn trưa</a></li>
                                        <li><a href="#">Ăn tối</a></li>
                                        <li><a href="#">Ăn đêm</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Hỗ trợ</h4>
                                    <ul>
                                        <li><a href="#">Các câu hỏi thường gặp</a></li>
                                        <li><a href="#">Điều khoản & điều kiện</a></li>
                                        <li><a href="#">Chính sách bảo mật</a></li>
                                        <li><a href="#">Báo cáo vấn đề thanh toán</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer bottom -->
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-8 col-md-7">
                            <div class="footer-copy-right">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    DU-AN-1 &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | This website is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="" target="_blank">Vinhdvpd04097</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 col-md-5">
                            <div class="footer-copy-right f-right">
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fas fa-globe"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End-->
        </footer>
        <!--? Search model Begin -->
        <div class="search-model-box">
            <div class="h-100 d-flex align-items-center justify-content-center">
                <div class="search-close-btn">+</div>
                <form action="?act=product_detail" method="POST" class="search-model-form">
                    <input type="text" name="keyword" id="search-input" placeholder="Searching key.....">
                    <button type="submit" name="search" style="background-color: #212529;"><i class="fas fa-search color-white"></i></button>
                </form>
            </div>
        </div>
        <!-- Search model end -->

        <!-- JS here -->

        <script src="<?= PUBLIC_JS ?>vendor/modernizr-3.5.0.min.js"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src="<?= PUBLIC_JS ?>vendor/jquery-1.12.4.min.js"></script>
        <script src="<?= PUBLIC_JS ?>popper.min.js"></script>
        <script src="<?= PUBLIC_JS ?>bootstrap.min.js"></script>
        <!-- Jquery Mobile Menu -->
        <script src="<?= PUBLIC_JS ?>jquery.slicknav.min.js"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="<?= PUBLIC_JS ?>owl.carousel.min.js"></script>
        <script src="<?= PUBLIC_JS ?>slick.min.js"></script>

        <!-- One Page, Animated-HeadLin -->
        <script src="<?= PUBLIC_JS ?>wow.min.js"></script>
        <script src="<?= PUBLIC_JS ?>animated.headline.js"></script>
        <script src="<?= PUBLIC_JS ?>jquery.magnific-popup.js"></script>

        <!-- Scrollup, nice-select, sticky -->
        <script src="<?= PUBLIC_JS ?>jquery.scrollUp.min.js"></script>
        <script src="<?= PUBLIC_JS ?>jquery.nice-select.min.js"></script>
        <script src="<?= PUBLIC_JS ?>jquery.sticky.js"></script>

        <!-- contact js -->
        <script src="<?= PUBLIC_JS ?>contact.js"></script>
        <script src="<?= PUBLIC_JS ?>jquery.form.js"></script>
        <script src="<?= PUBLIC_JS ?>jquery.validate.min.js"></script>
        <script src="<?= PUBLIC_JS ?>mail-script.js"></script>
        <script src="<?= PUBLIC_JS ?>jquery.ajaxchimp.min.js"></script>

        <!-- Jquery Plugins, main Jquery -->
        <script src="<?= PUBLIC_JS ?>plugins.js"></script>
        <script src="<?= PUBLIC_JS ?>main.js"></script>



</body>

</html>