<div class="login_part_form_iner">
    <h3> Cập Nhật Tài Khoản !</h3>
    <?php

    $mess_update = isset($mess_update) ? $mess_update : '';
    echo "<h5 class='alert alert-warning'>$mess_update</h5>";
    ?>
    <form class="row contact_form" action="?act=login&btn_update" method="post" novalidate="novalidate" enctype="multipart/form-data">
        <input type="hidden" name="role" value="<?= $_SESSION['user']['role'] ?>">
        <input type="hidden" name="password" value="<?= $_SESSION['user']['password'] ?>">
        <div class="col-md-12 form-group p_star">
            <input type="text" class="form-control" id="name" name="user_name" value="<?= $_SESSION['user']['user_name'] ?>" placeholder="Tên Đăng Nhập" readonly>
        </div>
        <div class="col-md-12 form-group p_star">
            <input type="text" class="form-control" id="ho_ten" name="full_name" value="<?= $_SESSION['user']['full_name'] ?>" placeholder="Họ Và Tên">
        </div>
        <div class="col-md-12 form-group p_star">
            <input type="file" class="form-control" name="image">
            <input name="image2" type="hidden" value="<?= $_SESSION['user']['image'] ?>"> (<?= $_SESSION['user']['image'] ?>)
        </div>
        <div class="col-md-12 form-group p_star">
            <input type="email" class="form-control" id="email" name="email" value="<?= $_SESSION['user']['email'] ?>" placeholder="Địa Chỉ Email">
        </div>
        <div class="col-md-12 form-group p_star">
            <input type="text" class="form-control" id="dia_chi" name="address" value="<?= $_SESSION['user']['address'] ?>" placeholder="Địa Chỉ">
        </div>
        <div class="col-md-12 form-group p_star">
            <input type="text" class="form-control" id="sdt" name="phone" value="<?= $_SESSION['user']['phone'] ?>" placeholder="Số Điện Thoại">
        </div>
        <div class="col-md-12 form-group">
            <button type="submit" value="submit" name="update" class="btn_3">
                CẬP NHẬT
            </button>
        </div>
    </form>
</div>