<?php
    extract($_REQUEST);
    $product = new product;
    if(isset($_POST['btn_insert'])){
        if(strlen($_POST['name_product']) ==0){
            $name_product_error = "Không được để trống tên hàng hóa !";
        }elseif(strlen($_POST['price']) ==0){
            $price_error = "Không được để trống giá hàng hóa !";
        }elseif(strlen($_POST['discount']) ==0){
            $discount_error = "Không được để trống giảm giá hàng hóa !";
        }elseif(strlen($_POST['date']) ==0){
            $date_error = "Không được để trống giảm giá hàng hóa !";
        }else{
            try{
                $up_image = save_file("image", PUBLIC_IMAGE."products/");
                $image = strlen($up_image) > 0 ? $up_image : 'product.png';
                $product->insert_product($_POST['name_product'], $_POST['price'], $_POST['discount'], $image, $_POST['date'], $_POST['description'], $_POST['special'], $_POST['view'], $_POST['status'], $_POST['id_category']);
                $mess_add = "Thêm mới thành công !";
            }catch(Exception $e){
                $mess_add = "Thêm mới thất bại !";
            }
        }
    }elseif(isset($_GET['btn_delete'])){
        try{
            $product->delete_product($_GET['id_product']);
            $mess_delete = "Xóa thành công !";
        }catch(Exception $e){
            $mess_delete = "Xóa thất bại !";
        }
    }elseif(isset($_POST['btn_update'])){
        if(strlen($_POST['name_product']) ==0){
            $name_product_error = "Không được để trống tên hàng hóa !";
        }elseif(strlen($_POST['price']) ==0){
            $price_error = "Không được để trống giá hàng hóa !";
        }elseif(strlen($_POST['discount']) ==0){
            $discount_error = "Không được để trống giảm giá hàng hóa !";
        }elseif(strlen($_POST['date']) ==0){
            $date_error = "Không được để trống giảm giá hàng hóa !";
        }else{
            try{
                $up_image = save_file("image", PUBLIC_IMAGE."products/");
                $image = strlen($up_image) > 0 ? $up_image : $_POST['image2'];
                $product->update_product($_POST['id_product'], $_POST['name_product'], $_POST['price'], $_POST['discount'], $image, $_POST['date'], $_POST['description'], $_POST['special'], $_POST['view'], $_POST['status'], $_POST['id_category']);
                $mess_update = "Cập nhập thành công !";
            }catch(Exception $e){
                $mess_update = "cập nhập thất bại !";
            }
        }
    }
    $items  = $product->select_product();
    $category = new category;
    $id_category = $category->select_category();
?>