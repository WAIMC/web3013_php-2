<div class="login_part_form_iner">
    <h3> Đổi Mật Khẩu !</h3>
    <?php
    $mess_change_pass = isset($mess_change_pass) ? $mess_change_pass : '';
    echo "<h5 class='alert alert-warning'>$mess_change_pass</h5>";
    ?>
    <form class="row contact_form" action="?act=login&btn_cp" method="post" novalidate="novalidate">
        <div class="col-md-12 form-group p_star">
            <input type="text" class="form-control" id="name" name="user_name" value="<?=$_SESSION['user']['user_name']?>" placeholder="Tên Đăng Nhập" readonly>
        </div>
        <div class="col-md-12 form-group p_star">
            <input type="password" class="form-control" id="password" name="password" value="<?=$password = isset($_SESSION['user']['password']) ? $_SESSION['user']['password'] : '' ?>" placeholder="Mật Khẩu">
        </div>
        <div class="col-md-12 form-group p_star">
            <input type="password" class="form-control" id="password2" name="password2" value="<?=  $_POST['password2'] = isset($_POST['password2']) ? $_POST['password2'] : '' ?>" placeholder="Mật Khẩu Mới">
        </div>
        <div class="col-md-12 form-group p_star">
            <input type="password" class="form-control" id="password3" name="password3" value="<?=  $_POST['password3'] = isset($_POST['password3']) ? $_POST['password3'] : '' ?>" placeholder="Xác Nhận Mật Khẩu Mới">
        </div>
        <div class="col-md-12 form-group">
            <button type="submit" value="submit" name="btn_change" class="btn_3">
                ĐỔI MẬT KHẨU
            </button>
        </div>
    </form>
</div>