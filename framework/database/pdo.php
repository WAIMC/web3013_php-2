<?php

    class Connection
    {
        private $host = "localhost";
        private $dbName = "php-2";
        private $user = "root";
        private $pass = '';
        private $charset = 'utf8';
    
        private $dbh;
        private $error;
        private $stmt;
    
        //connection
        public function __construct()
        {
            $dsn     = "mysql:host=" . $this->host . ";dbname=" . $this->dbName . ";charset=" . $this->charset;
            $options = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false
            );
    
            try {
                // setup connection
                $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
            }
            //catch any errors
            catch (PDOException $e) {
                $this->error = $e->getMessage();
            }
    
        }
    
        //prepare statement
        public function insertUserValues($query)
        {
            $this->stmt = $this->dbh->prepare($query);
        }
    
        //bind values
        public function bind($param, $type = null)
        {
            foreach($param as $key=>$value){
                if (is_null($type)) {
                    switch (true) {
                        case is_int($value):
                            $type = PDO::PARAM_INT;
                            break;
                        case is_bool($value):
                            $type = PDO::PARAM_BOOL;
                            break;
                        case is_null($value):
                            $type = PDO::PARAM_NULL;
                            break;
                        default:
                            $type = PDO::PARAM_STR;
                    }
                }

            //actual value binding
            $this->stmt->bindValue($key, $value, $type);
            }
        }
        //execute statement
        public function run()
        {
             $this->stmt->execute();
        }

        // get last inserted id
        function getLastInsertedID(){
            return $result = $this->dbh->lastInsertId();
            //$stmt = $db->query("SELECT LAST_INSERT_ID()");
            // $lastId = $stmt->fetchColumn();
        }

        // get single row
        function single_row(){
            $this->run();
            $result = $this->stmt->fetch();
            
            return $result;
        }

        // get all row
        function get_row(){
            $this->run();
            return $result = $this->stmt->fetchAll();
        }
    }
?>