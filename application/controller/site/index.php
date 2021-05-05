<?php
    $action = "";
    if(isset($_GET['act'])){
        $action = $_GET['act'];
    }elseif(isset($_POST['act'])){
        $action = $_POST['act'];
    }

    $category = new category;
    $product = new product;
    $user_obj = new user;
    $invoices = new invoices;
    $invoices_detail = new invoices_detail;
    

    switch($action){
        case "about":
            $view_name = VIEW_PATH . "site/content/about.php";
            break;
        case "blog_detail":
            //require_once CONTROLLER_PATH . "site/category.php";
            $view_name = VIEW_PATH . "site/content/blog_detail.php";
            break;
        case "blog":
            //require_once CONTROLLER_PATH . "site/product.php";
            $view_name = VIEW_PATH . "site/content/blog.php";
            break;
        case "cart":
            //require_once CONTROLLER_PATH . "site/customer.php";
            $view_name = VIEW_PATH . "site/content/cart.php";
            break;
        case "check_invoices":
            $view_name = VIEW_PATH . "site/content/check_invoices.php";
            break;
        case "contact":
                        if(isset($_POST['send_mail'])){
                        $to = "vinhdvpd04097@fpt.edu.vn";
                        $subject = $_POST['subject'];
                        $message = $_POST['message'];
                        $header = "From : ".$_POST['email'].""." \r\n"."Cc:orther@example.com";

                        $success = mail($to, $subject, $message, $header);
                        if($success){
                            $mess = "Gửi thành công !";
                        }else{
                            $mess = "gửi thất bại";
                        }
                        }
                
            $view_name = VIEW_PATH . "site/content/contact.php";
            break;
        case "list_product":
            $items_category = $category->select_category();
            $items_product = $product->select_product();
            $view_name = VIEW_PATH . "site/content/list_product.php";
            break;
        case "login":
            if(isset($_POST['btn_login'])){
                $user = $user_obj->select_user_by_id($_POST['user_name']);
                if($user){
                    if($user['password'] == base64_encode($_POST['password'])){
                        $_SESSION['user'] = $user;
                        //$mess_log = "Đăng nhập thành công !";
                    }else{
                        $mess_log = "sai mật khẩu !";
                    }
                }else{
                    $mess_log = 'Mã đăng nhập sai !';
                }
            }elseif(isset($_POST['btn_register'])){
                if (strlen($_POST['user_name']) == 0) {
                    $user_name_error = "Không để trống tên người dùng !";
                }elseif ($user_obj->select_user_by_id($_POST['user_name']) != null) {
                    $user_name_error = "Lựa chọn tên tài Khoản khác !";
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
                        $user_obj->insert_user($_POST['user_name'], base64_encode($_POST['password']), $_POST['full_name'], $_POST['email'], $image, $_POST['role'], $_POST['address'], $_POST['phone']);
                        $mess_reg = "Thêm mới thành công !";
                    }catch(Exception $e){
                        $mess_reg = "Thêm mới thất bại !";
                    }
                }
            }
            $view_name = VIEW_PATH . "site/content/login.php";
            break;
        case "product_detail":
            if(isset($_POST['search'])){
                if($product->select_product_by_keyword($_POST['keyword']) != null){
                    $post = $product->select_product_by_keyword($_POST['keyword']);
                    $product_detail = $product->select_product_by_id($post['id']);
                    $product->increase_product_view($post['id']);
                }else{
                    $id_product = '';
                }
            }
            if(isset($_GET['id_product'])){
                $product_detail = $product->select_product_by_id($_GET['id_product']);
                $product->increase_product_view($_GET['id_product']);
            }else{
                $id_product = '';
            }
            $view_name = VIEW_PATH . "site/content/product_detail.php";
            break;
        case "shop":
            $items_category = $category->select_category();
            $items_product = $product->select_product();
            $view_name = VIEW_PATH . "site/content/shop.php";
            break;
        case "home":
            $items = $product->select_special_product();
            $view_name = VIEW_PATH . "site/content/home.php";
            break;
        default:
            $items = $product->select_special_product();
            $view_name = VIEW_PATH . "site/content/home.php";
        break;
    }
    require_once VIEW_PATH."site/layout.php";
?>