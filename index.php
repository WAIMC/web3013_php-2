<?php
    require_once "framework/core/framework.class.php";
    framework::run();
        if(isset($_GET['logout'])){
            unset($_SESSION['user']);
        }
        if(isset($_SESSION['user'])){
            if($_SESSION['user']['role'] == 0){
                require_once CONTROLLER_PATH."admin/index.php";
            }else{
                require_once CONTROLLER_PATH."site/index.php";        
            }
        }else{
        require_once CONTROLLER_PATH."site/index.php";
    }
    
?>