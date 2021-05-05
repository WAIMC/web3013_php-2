<?php
    extract($_REQUEST);
    $customer = new user;
    if(isset($_POST['btn_insert'])){
        if (strlen($_POST['user_name']) == 0) {
            $user_name_error = "Không để trống tên người dùng !";
        }elseif ($customer->select_user_by_id($_POST['user_name']) != null) {
            $full_name_error = "Lựa chọn tên tài Khoản khác !";
        }  elseif (strlen($_POST['full_name']) == 0) {
            $full_name_error = "Họ tên không để trống";
        } elseif (!is_string($_POST['full_name'])) {
            $name_error = "Chỉ chứa kí tự a đến z";
        } elseif (strlen($_POST['password']) == 0) {
            $password_error = "Mật khẩu không để trống";
        } elseif ($_POST['password2'] != $_POST['password']) {
            $password2_error = "Nhập lại mật khẩu không đúng";
        } elseif (strlen($_POST['email']) == 0) {
            $email_error = " Không để trống email";
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $email_error = " Không đúng định dạng email";
        } elseif (strlen($_POST['address']) == 0) {
            $address_error = "Địa chỉ không để trống";
        } elseif (strlen($_POST['phone']) == 0) {
            $phone_number = "Số điện thoại không để trống";
        } else {
            try{
                $up_image = save_file("image", PUBLIC_IMAGE."customer/");
                $image = strlen($up_image) > 0 ? $up_image : 'customer.png';
                $customer->insert_user($_POST['user_name'], base64_encode($_POST['password']), $_POST['full_name'], $_POST['email'], $image, $_POST['role'], $_POST['address'], $_POST['phone']);
                $mess_add = "Thêm mới thành công !";
            }catch(Exception $e){
                $mess_add = "Thêm mới thất bại !";
            }
        }
    }elseif(isset($_GET['btn_delete'])){
        try{
            $customer->delete_user($_GET['user_name']);
            $mess_delete = "Xóa thành công !";
        }catch(Exception $e){
            $mess_delete = "Xóa thất bại !";
        }
    }elseif(isset($_POST['btn_update'])){
        if (strlen($_POST['full_name']) == 0) {
            $full_name_error = "Họ tên không để trống";
        } elseif (!is_string($_POST['full_name'])) {
            $name_error = "Chỉ chứa kí tự a đến z";
        } elseif (strlen($_POST['password']) == 0) {
            $password_error = "Mật khẩu không để trống";
        } elseif ($_POST['password2'] != $_POST['password']) {
            $password2_error = "Nhập lại mật khẩu không đúng";
        } elseif (strlen($_POST['email']) == 0) {
            $email_error = " Không để trống email";
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $email_error = " Không đúng định dạng email";
        } elseif (strlen($_POST['address']) == 0) {
            $address_error = "Địa chỉ không để trống";
        } elseif (strlen($_POST['phone']) == 0) {
            $phone_number = "Số điện thoại không để trống";
        } else {
            try{
                $up_image = save_file("image", PUBLIC_IMAGE."customer/");
                $image = strlen($up_image) > 0 ? $up_image : $_POST['image2'];
                $customer->update_user($_POST['user_name'], base64_encode($_POST['password']), $_POST['full_name'], $_POST['email'], $image, $_POST['role'], $_POST['address'], $_POST['phone']);
                $mess_update = "Cập nhập thành công !";
            }catch(Exception $e){
                $mess_update = "Cập nhập thất bại !";
            }
        }
    }
    $items  = $customer->select_user();
?>