<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta http-equiv="Location" content="http://example.com/">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Food shop | Vinh</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href=" <?= PUBLIC_IMAGE ?>favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href=" <?= PUBLIC_CSS ?>bootstrap.min.css">
    <link rel="stylesheet" href=" <?= PUBLIC_CSS ?>owl.carousel.min.css">
    <link rel="stylesheet" href=" <?= PUBLIC_CSS ?>flaticon.css">
    <link rel="stylesheet" href=" <?= PUBLIC_CSS ?>slicknav.css">
    <link rel="stylesheet" href=" <?= PUBLIC_CSS ?>animate.min.css">
    <link rel="stylesheet" href=" <?= PUBLIC_CSS ?>magnific-popup.css">
    <link rel="stylesheet" href=" <?= PUBLIC_CSS ?>fontawesome-all.min.css">
    <link rel="stylesheet" href=" <?= PUBLIC_CSS ?>themify-icons.css">
    <link rel="stylesheet" href=" <?= PUBLIC_CSS ?>slick.css">
    <link rel="stylesheet" href=" <?= PUBLIC_CSS ?>nice-select.css">
    <link rel="stylesheet" href=" <?= PUBLIC_CSS ?>style.css">
</head>

<body>
    <div id="preloader-active" style="display: none;">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?=PUBLIC_IMAGE?>logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="?act=home"><img src=" <?= PUBLIC_IMAGE ?>logo/logo-1.png" width="80px" height="50%" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <?php require_once VIEW_PATH . "site/layout/menu.php"; ?>
                        </div>
                        <!-- Header Right -->
                        <div class="header-right">
                            <ul>
                                <li>
                                    <div class="nav-search search-switch">
                                        <span class="flaticon-search">
                                        </span>
                                    </div>
                                </li>
                                <li> <a href="?act=login"><span class="flaticon-user"></span></a></li>
                                <li><a href="?act=cart"><span class="flaticon-shopping-cart"></span></a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? slider Area Start -->
        <div class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center slide-bg">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms">Lựa chọn sản phẩm phù hợp cho bạn</h1>
                                    <p data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms">Đây là một website ẩm thực, có sẵn trên tất cả các nền tảng,
                                        giúp mọi người mọi gia đình ở mọi cấp độ khám phá, lưu và sắp xếp các món ăn ngon nhất trên thế giới,
                                        đồng thời giúp họ trở thành những người trải nghiệm thưởng thức tốt hơn.
                                        Đăng ký ngay bây giờ để truy cập đầy đủ.</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s" data-duration="2000ms">
                                        <a href="" class="btn hero-btn">Mua ngay</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                                <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                    <img src="<?= PUBLIC_IMAGE ?>hero/list-food-2.png" alt="" class=" heartbeat">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- ? New Product Start -->