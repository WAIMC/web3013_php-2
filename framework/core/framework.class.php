<?php
class framework
{
    static function run()
    {
        self::init();
        self::autoload();
        self::dispatch();
    }

    // Initialization

    private static function init()
    {

        // Define path constants

        define("DS", DIRECTORY_SEPARATOR);
        define("ROOT", getcwd() . DS);
        define("APP_PATH", ROOT . 'application' . DS);
        define("FRAMEWORK_PATH", ROOT . "framework" . DS);
        define("PUBLIC_PATH", "public" . DS);


        define("CONTROLLER_PATH", APP_PATH . "controller" . DS);
        define("MODEL_PATH", APP_PATH . "model" . DS);
        define("VIEW_PATH", APP_PATH . "view" . DS);


        define("CORE_PATH", FRAMEWORK_PATH . "core" . DS);
        define('DB_PATH', FRAMEWORK_PATH . "database" . DS);
        define("LIB_PATH", FRAMEWORK_PATH . "libraries" . DS);
        define("HELPER_PATH", FRAMEWORK_PATH . "helper" . DS);

        define("PUBLIC_CSS", PUBLIC_PATH . "css" . DS);
        define("PUBLIC_IMAGE", PUBLIC_PATH . "image" . DS);
        define("PUBLIC_JS", PUBLIC_PATH . "js" . DS);
        define("PUBLIC_FONT", PUBLIC_PATH . "fonts" . DS);

        //load database
        require_once DB_PATH . "pdo.php";

        // Load libraries
        require_once LIB_PATH . "category.class.php";
        require_once LIB_PATH . "comment.class.php";
        require_once LIB_PATH . "invoices.class.php";
        require_once LIB_PATH . "invoices_detail.class.php";
        require_once LIB_PATH . "product.class.php";
        require_once LIB_PATH . "user.class.php";
        require_once LIB_PATH . "statistical.class.php";

        // save file image
        function save_file($fieldname, $target_dir){
            $file_uploaded = $_FILES[$fieldname];
            $file_name = basename($file_uploaded["name"]);
            $target_path = $target_dir . $file_name;
            move_uploaded_file($file_uploaded["tmp_name"], $target_path);
            return $file_name;
        }

        // Start session
        session_start();
    }

    // auto loading

    private static function autoload()
    {

        //spl_autoload_register(array(__CLASS__, 'load'));
    }


    // Define a custom load method

    private static function load($class_name)
    {
        // Here simply autoload app’s controller and model classes

        // if (substr($class_name, -10) == "Controller") {

        //     // Controller

        //     require_once CURR_CONTROLLER_PATH . "$class_name.class.php";
        // } elseif (substr($class_name, -5) == "Model") {

        //     // Model

        //     require_once  MODEL_PATH . "$class_name.class.php";
        // }
    }
    // Routing and dispatching

    private static function dispatch()
    {
        // Instantiate the controller class and call its action method

        // $controller_name = CONTROLLER . "Controller";

        // $action_name = ACTION . "Action";

        // $controller = new $controller_name;

        // $controller->$action_name();
    }
}
