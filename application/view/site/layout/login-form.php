<div class="login_part_form_iner">
    <h3> Chào Mừng Trở Lại !</h3>
    <?php
    $mess_log = isset($mess_log) ? $mess_log : '';
    echo "<h5 class='alert alert-warning'>$mess_log</h5>";
    ?>
    <form class="row contact_form" action="?act=login" method="post" enctype="multipart/form-data" novalidate="novalidate">
        <div class="col-md-12 form-group p_star">
            <input type="text" class="form-control" id="name" name="user_name" value="<?=$_POST['user_name'] = isset($_POST['user_name']) ? $_POST['user_name'] : '' ?>" placeholder="Tên Đăng Nhập">
        </div>
        <div class="col-md-12 form-group p_star">
            <input type="password" class="form-control" id="password" name="password" value="<?=$_POST['password'] = isset($_POST['password']) ? $_POST['password'] : '' ?>" placeholder="Mật Khẩu">
        </div>
        <div class="col-md-12 form-group">
            <div class="creat_account d-flex align-items-center">
                <!-- <input type="checkbox" id="f-option" name="ghi_nho" checked="checked"> -->
                <!-- <label for="f-option">Ghi Nhớ</label> -->
            </div>
            <button type="submit" name="btn_login" class="btn_3">
                ĐĂNG NHẬP
            </button>
            <!-- <a class="lost_pass" href="#">Quyên Mật Khẩu</a> -->
        </div>
    </form>
</div>
<span style='color:black'></span>