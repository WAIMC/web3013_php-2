<?php
    extract($_REQUEST);
    $category = new category;
    if(isset($_POST['btn_insert'])){
        if(strlen($_POST['name_category']) ==0){
            $name_category_error = "Không được để trống tên loại hàng !";
        }elseif($category->select_category_name($_POST['name_category']) != null){
            $name_category_error = "Không được trùng tên loại hàng !";
        }else{
            try{
                $category->insert_category($_POST['name_category']);
                $mess_add = "Thêm mới thành công !";
            }catch(Exception $e){
                $mess_add = "Thêm mới thất bại !";
            }
        }
    }elseif(isset($_GET['btn_delete'])){
        try{
            $category->delete_category($_GET['id_category']);
            $mess_delete = "Xóa thành công !";
        }catch(Exception $e){
            $mess_delete = "Xóa thất bại !";
        }
    }elseif(isset($_POST['btn_update'])){
        if(strlen($_POST['name_category']) ==0){
            $name_category_error_up = "Không được để trống tên loại hàng !";
        }elseif($category->select_category_name($_POST['name_category']) != null){
            $name_category_error_up = "Không được trùng tên loại hàng !";
        }else{
            try{
                $category->update_category($_POST['id_category'], $_POST['name_category']);
                $mess_update = "Cập nhập thành công !";
            }catch(Exception $e){
                $mess_update = "cập nhập thất bại !";
            }
        }
    }
    $items  = $category->select_category();
?>