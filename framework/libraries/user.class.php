<?php
    class user{
        public $user;

        // insert user 
        function insert_user($user_name, $password, $full_name, $email, $image, $role, $address, $phone){
            $this->user = new Connection;
            $query = "INSERT INTO user (user_name, password, full_name, email, image, role, address, phone)"
            ."VALUES (:user_name, :password, :full_name, :email, :image, :role, :address, :phone)";
            $args  = array(
                "user_name"=>$user_name,
                "password"=>$password,
                "full_name"=>$full_name,
                "email"=>$email,
                "image"=>$image,
                "role"=>$role,
                "address"=>$address,
                "phone"=>$phone
            );
            $this->user->insertUserValues($query);
            $this->user->bind($args);
            return $result = $this->user->run();
        }

        // update user
        function update_user($user_name, $password, $full_name, $email, $image, $role, $address, $phone){
            $this->user = new Connection;
            $query = "UPDATE user SET password = :password, full_name = :full_name, email = :email, image = :image, role = :role, address = :address, phone =:phone WHERE user_name = :user_name ";
            $args  = array(
                "user_name"=>$user_name,
                "password"=>$password,
                "full_name"=>$full_name,
                "email"=>$email,
                "image"=>$image,
                "role"=>$role,
                "address"=>$address,
                "phone"=>$phone
            );
            $this->user->insertUserValues($query);
            $this->user->bind($args);
            return $result = $this->user->run();
        }

        // delete user
        function delete_user($user_name){
            $this->user = new Connection;
            $query = "DELETE FROM user WHERE user_name = :user_name ";
            $args  = array(
                "user_name"=>$user_name
            );
            $this->user->insertUserValues($query);
            $this->user->bind($args);
            return $result = $this->user->run();
        }

        // select user
        function select_user(){
            $this->user = new Connection;
            $query = "SELECT * FROM user";
            $this->user->insertUserValues($query);
            return $result = $this->user->get_row();
        }

        // select user by id
        function select_user_by_id($user_name){
            $this->user = new Connection;
            $query = "SELECT * FROM user WHERE user_name = :user_name ";
            $args  = array(
                "user_name"=>$user_name
            );
            $this->user->insertUserValues($query);
            $this->user->bind($args);
            return $result = $this->user->single_row();
        }

        // change password
        function change_password($user_name, $password){
            $this->user = new Connection;
            $query = "UPDATE user SET password = :password WHERE user_name = :user_name ";
            $args  = array(
                "user_name"=>$user_name,
                "password"=>$password
            );
            $this->user->insertUserValues($query);
            $this->user->bind($args);
            return $result = $this->user->run();
        }

        // check login
        function check_login($user_name, $password){
            $this->user = new Connection;
            $query = "SELECT * FROM user  WHERE  password = :password AND user_name = :user_name ";
            $args  = array(
                "user_name"=>$user_name,
                "password"=>$password
            );
            $this->user->insertUserValues($query);
            $this->user->bind($args);
            return $result = $this->user->single_row();
        }

        // is valid user
        function is_valid_user($user_name){
            $this->user = new Connection;
            $query = "SELECT * FROM user  WHERE user_name = :user_name ";
            $args  = array(
                "user_name"=>$user_name
            );
            $this->user->insertUserValues($query);
            $this->user->bind($args);
            return $result = $this->user->single_row();
        }
    }
?>