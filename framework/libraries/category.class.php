<?php
    class category{

        public $category;

        // insert category
        function insert_category($name_category){
            $this->category = new Connection();
            $query = "INSERT INTO category (name_category) VALUES(:name_category)";
            $args = array("name_category"=>$name_category);
            $this->category->insertUserValues($query);
            $this->category->bind($args);
            return $result = $this->category->run();
        }

        // delete category
        function delete_category($id_category){
            $this->category = new Connection();
            $query = "DELETE FROM category WHERE id = :id_category";
            $args = array("id_category"=>$id_category);
            $this->category->insertUserValues($query);
            $this->category->bind($args);
            return $result = $this->category->run();
        }

        // update category
        function update_category($id_category,$name_category){
            $this->category = new Connection();
            $query = "UPDATE category SET name_category = :name_category WHERE id = :id_category";
            $args = array(
                "id_category"=>$id_category,
                "name_category"=>$name_category
            );
            $this->category->insertUserValues($query);
            $this->category->bind($args);
            return $result = $this->category->run();
        }

        // select category
        function select_category(){
            $this->category = new Connection();
            $query = "SELECT * FROM category";
            $this->category->insertUserValues($query);
            return $result = $this->category->get_row();
        }

        // select category by id
        function select_category_id($id_category){
            $this->category = new Connection();
            $query = "SELECT * FROM category WHERE id=:id_category";
            $args = array("id_category"=>$id_category);
            $this->category->insertUserValues($query);
            $this->category->bind($args);
            return $result = $this->category->single_row();
        }

        // select category by category name
        function select_category_name($name_category){
            $this->category = new Connection();
            $query = "SELECT * FROM category WHERE name_category LIKE :name_category";
            $args = array("name_category"=>"%$name_category%");
            $this->category->insertUserValues($query);
            $this->category->bind($args);
            return $result = $this->category->single_row();
        }
    }
?>