<?php
    extract($_REQUEST);
    $invoices = new invoices;
    $invoices_detail = new invoices_detail;

    if(isset($_GET['id_invoices'])){
        if(isset($_GET['btn_delete'])){
            try{
                $invoices_detail->delete_invoices_detail($_GET['id_invoices_detail']);
                $mess_delete = "Xóa thành công !";
            }catch(Exception $e){
                $mess_delete = "Xóa thất bại !".$e;
            }
        }
        $ivc_detail = $invoices_detail->select_invoices_detail_by_product($_GET['id_invoices']);
        if(count($ivc_detail) == 0){
            $items = $invoices_detail->select_invoices_detail_by_invoices();
            $view_name = VIEW_PATH . "admin/content/invoices.php";
        }else{
            $view_name = VIEW_PATH . "admin/content/invoices_detail.php";
        }
    }else{
        if(isset($_POST['sub'])){
            try{
                $invoices->update_note_invoices($_POST['id_invoices'],$_POST['note']);
                $mess_update = "Cập nhập thành công !";
            }catch(Exception $e){
                $mess_update = "Cập nhập thất bại !".$e;
            }
        }
        $items = $invoices_detail->select_invoices_detail_by_invoices();
        $view_name = VIEW_PATH . "admin/content/invoices.php";
    }
?>