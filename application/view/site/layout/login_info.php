<?php
    if(isset($_GET['btn_cp'])){
        if(isset($_POST['btn_change'])){
            if($_POST['password2'] == $_POST['password3'] && $_POST['password2'] != null ){
                try{
                    $pass = base64_encode($_POST['password2']);
                    $user_obj = new user;
                    $user_obj->change_password($_POST['user_name'], $pass);
                    $mess_change_pass = "Đổi mật khẩu thành công !";
                }catch(Exception $e){
                    $mess_change_pass = "Đổi mật khẩu thất bại ! ".$e;
                }
            }else{
                $mess_change_pass = "Mật khẩu trống hoặc xác nhận mật khẩu mới sai !";
            }
        }
        require_once  VIEW_PATH . "site/account/change_pass.php";
    }elseif(isset($_GET['btn_update'])){
        if(isset($_POST['update'])){
            try{
                $user_obj = new user;
                $up_image = save_file("image", PUBLIC_IMAGE."customer/");
                $image = strlen($up_image) > 0 ? $up_image : $_POST['image2'];
                $user_obj->update_user($_POST['user_name'],$_POST['password'],$_POST['full_name'],$_POST['email'],$image, $_POST['role'], $_POST['address'], $_POST['phone']);
                $mess_update = "Cập nhập thành công !";
            }catch(Exception $e){
                $mess_update = "Cập nhập thất bại !".$e;
            }
        }
        require_once  VIEW_PATH . "site/account/update_form.php";
    }elseif(isset($_GET['btn_logout'])){
        unset($_SESSION['user']);
    }else{
        require_once VIEW_PATH . "site/account/login_form_info.php";
    }
?>