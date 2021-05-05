<!--================login_part Area =================-->
<section class="login_part section_padding ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <?php
                    require_once VIEW_PATH . 'site/account/form_register.php';
                ?>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="login_part_form">
                    <?php
                    if (isset($_SESSION['user'])) {
                        require_once VIEW_PATH . 'site/layout/login_info.php';
                    } else {
                        //$ma_kh = get_cookie("ma_kh");
                        //$mat_khau = get_cookie("mat_khau");
                        require_once  VIEW_PATH .'site/layout/login-form.php';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================login_part end =================-->