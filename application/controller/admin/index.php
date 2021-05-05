<?php
    $action = "";
    if(isset($_GET['act'])){
        $action = $_GET['act'];
    }elseif(isset($_POST['act'])){
        $action = $_POST['act'];
    }

    switch($action){
        case "main_page":
            $view_name = VIEW_PATH . "admin/content/main_page.php";
            break;
        case "category":
            require_once CONTROLLER_PATH . "admin/category.php";
            $view_name = VIEW_PATH . "admin/content/category.php";
            break;
        case "product":
            require_once CONTROLLER_PATH . "admin/product.php";
            $view_name = VIEW_PATH . "admin/content/product.php";
            break;
        case "customer":
            require_once CONTROLLER_PATH . "admin/customer.php";
            $view_name = VIEW_PATH . "admin/content/customer.php";
            break;
        case "comment":
            require_once CONTROLLER_PATH . "admin/comment.php";
            break;
        case "statistical":
            require_once CONTROLLER_PATH . "admin/statistical.php";
            $view_name = VIEW_PATH . "admin/content/statistical.php";
            break;
        case "invoices":
            require_once CONTROLLER_PATH . "admin/invoices.php";
            break;
        default:
            $view_name = VIEW_PATH . "admin/content/main_page.php";
        break;
    }
    require_once VIEW_PATH."admin/layout.php";
?>