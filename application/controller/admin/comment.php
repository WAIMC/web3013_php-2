<?php
    extract($_REQUEST);
    $comment = new comment;
    $statistical = new statistical;
    if(isset($_GET['id_product'])){
        if(isset($_GET['btn_delete'])){
            try{
                $comment->delete_comment($_GET['id_comment']);
                $mess_delete = "Xóa bình luận thành công !";
            }catch(Exception $e){
                $mess_delete = "Xóa bình luận thất bại !".$e;
            }
        }elseif(isset($_GET['btn_update'])){
            try{
                $comment->update_comment_id($_GET['id_comment'], $_GET['status']);
                $mess_update = "Cập nhập thành công !";
            }catch(Exception $e){
                $mess_update = "Cập nhập thất bại !";
            }
        }
        $items = $comment->select_comment_by_product($_GET['id_product']);
        if(count($items) == 0){
            $items = $statistical->statistical_comment();
            $view_name = VIEW_PATH . "admin/content/comment.php";
        }else{
            $view_name = VIEW_PATH . "admin/content/comment_detail.php";
        }
    }else{
        $items  = $statistical->statistical_comment();
        $view_name = VIEW_PATH . "admin/content/comment.php";
    }
?>