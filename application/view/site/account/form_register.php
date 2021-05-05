<div class="login_part_text text-center">
    <div class="login_part_text_iner">
        <h2>Bạn chưa có tài khoản ?</h2>
        <p>Mới đến cửa hàng của chúng tôi. Có những tiến bộ trong khoa học và công nghệ hàng ngày, và một ví dụ điển hình về điều này là</p>
        <?php
        $mess_reg = isset($mess_reg) ? $mess_reg : '';
            echo "<h5 class='alert alert-warning'>$mess_reg</h5>";
        ?>
        <form class="row contact_form" action="<?= $_SERVER["REQUEST_URI"] ?>" method="post" novalidate="novalidate" enctype="multipart/form-data">
            <input type="hidden" name="role" value="1">
            <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="name" name="user_name" value="<?php if(empty($_POST['user_name'])){$_POST['user_name']="";}else{echo $_POST['user_name'];}?>" placeholder="Tên Đăng Nhập">
                <label for="" style="color: red;"> <?=$user_name_error = isset($user_name_error) ? $user_name_error : '' ?></label>
            </div>
            <div class="col-md-12 form-group p_star">
                <input type="password" class="form-control" id="mat_khau" name="password" value="<?php if(empty($_POST['password'])){$_POST['password']="";}else{echo $_POST['password'];}?>"  placeholder="Nhập Mật Khẩu">
                <label for="" style="color: red;"> <?=$password_error = isset($password_error) ? $password_error : '' ?></label>
            </div>
            <div class="col-md-12 form-group p_star">
                <input type="password" class="form-control" id="mat_khau2" name="password2" value="<?php if(empty($_POST['password2'])){$_POST['password2']="";}else{echo $_POST['password2'];}?>" placeholder="Nhập Lại Mật Khẩu">
                <label for="" style="color: red;"> <?=$password2_error = isset($password2_error) ? $password2_error : '' ?></label>
            </div>
            <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="ho_ten" name="full_name" value="<?php if(empty($_POST['full_name'])){$_POST['full_name']="";}else{echo $_POST['full_name'];}?>" placeholder="Họ Và Tên">
                <label for="" style="color: red;"> <?=$full_name_error = isset($full_name_error) ? $full_name_error : '' ?></label>
            </div>
            <div class="col-md-12 form-group p_star">
                <input type="file" class="form-control" name="image">
            </div>
            <div class="col-md-12 form-group p_star">
                <input type="email" class="form-control" id="email" name="email" value="<?php if(empty($_POST['email'])){$_POST['email']="";}else{echo $_POST['email'];}?>" placeholder="Địa Chỉ Email">
                <label for="" style="color: red;"> <?=$email_error = isset($email_error) ? $email_error : '' ?></label>
            </div>
            <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="dia_chi" name="address" value="<?php if(empty($_POST['address'])){$_POST['address']="";}else{echo $_POST['address'];}?>" placeholder="Địa Chỉ">
                <label for="" style="color: red;"> <?=$address_error = isset($address_error) ? $address_error : '' ?></label>
            </div>
            <div class="col-md-12 form-group p_star">
                <input type="phone" class="form-control" id="sdt" name="phone" value="<?php if(empty($_POST['phone'])){$_POST['phone']="";}else{echo $_POST['phone'];}?>" placeholder="Số Điện Thoại">
                <label for="" style="color: red;"><?=$phone_number = isset($phone_number) ? $phone_number : '' ?></label>
            </div>
            <div class="col-md-12 form-group">
                <button type="submit" value="submit" name="btn_register" class="btn_3">
                    TẠO TÀI KHOẢN
                </button>
            </div>
        </form>
    </div>
</div>