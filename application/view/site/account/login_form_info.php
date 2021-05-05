<div class="login_part_form_iner">
    <form class="row contact_form" action="" method="post" novalidate="novalidate">
        <div class="col-md-12 form-group p_star">
            <img src='<?= PUBLIC_IMAGE ?>customer/<?= $_SESSION['user']['image'] ?>' style="border-radius:50%;width:100%;display:block;margin:auto;margin-top:0rem;" title="profile image" class="img-circle img-responsive">
        </div>
        <div class="col-md-12 form-group p_star">
            <h3 class="text-center"><?= $_SESSION['user']['full_name'] ?></h3>
        </div>
        <div class="col-md-12 form-group">
            <ul class="list-group">
                <li class="list-group-item" style="text-align: center;">
                    <a class='btn_3' style='width:100%' href='?act=login&btn_logout'><span style='color: #635c5c;'>Đăng xuất</span></a>
                </li>
                <li class="list-group-item" style="text-align: center;">
                    <a class='btn_3' style='width:100%' href='?act=login&btn_cp'><span style='color: #635c5c;'>Đổi mật khẩu</span></a>
                </li>
                <li class="list-group-item" style="text-align: center;">
                    <a class='btn_3' style='width:100%' href='?act=login&btn_update'><span style='color: #635c5c;'>Cập nhật tài khoản</span></a>
                </li>
            </ul>
        </div>
        <div class="col-md-12 form-group">
            <?php
            if ($_SESSION['user']['role'] == 0) {
                echo "
                <li style='text-align: center;'>
                    <a class='btn_3' style='width:100%' href='?admin'><span style='color: #635c5c;'>Quản trị website</span></a>

                </li>";
            }
            ?>
        </div>
    </form>
</div>