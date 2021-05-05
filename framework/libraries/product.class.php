<?php
    class product {
        public $product;

        // insert product
        function insert_product($name_product, $price, $discount, $image, $date, $description, $special, $view ,$status, $id_category){
            $this->product = new Connection;
            $query = "INSERT INTO product (name_product, price, discount, image, date, description, special, view, status, id_category)"
            ."VALUES (:name_product, :price, :discount, :image, :date, :description, :special, :view, :status, :id_category)";
            $args = array(
                "name_product"=>$name_product,
                "price"=>$price,
                "discount"=>$discount,
                "image"=>$image,
                "date"=>$date,
                "description"=>$description,
                "special"=>$special,
                "view"=>$view,
                "status"=>$status,
                "id_category"=>$id_category
            );
            $this->product->insertUserValues($query);
            $this->product->bind($args);
            return $result = $this->product->run();
        }

        // update product
        function update_product($id_product ,$name_product, $price, $discount, $image, $date, $description, $special, $view ,$status, $id_category){
            $this->product = new Connection;
            $query = "UPDATE product SET name_product = :name_product, price = :price, discount = :discount, image =  :image, date =  :date, description =  :description,"
            ."special = :special, view = :view, status =  :status, id_category =  :id_category WHERE id = :id_product";
            $args = array(
                "id_product"=>$id_product,
                "name_product"=>$name_product,
                "price"=>$price,
                "discount"=>$discount,
                "image"=>$image,
                "date"=>$date,
                "description"=>$description,
                "special"=>$special,
                "view"=>$view,
                "status"=>$status,
                "id_category"=>$id_category
            );
            $this->product->insertUserValues($query);
            $this->product->bind($args);
            return $result = $this->product->run();
        }

        // delete product
        function delete_product($id_product){
            $this->product = new Connection;
            $query = "DELETE FROM product  WHERE id = :id_product";
            $args = array(
                "id_product"=>$id_product
            );
            $this->product->insertUserValues($query);
            $this->product->bind($args);
            return $result = $this->product->run();
        }

        // select product
        function select_product(){
            $this->product = new Connection;
            $query = "SELECT * FROM product";
            $this->product->insertUserValues($query);
            return $result = $this->product->get_row();
        }

        // select product by id
        function select_product_by_id($id_product){
            $this->product = new Connection;
            $query = "SELECT * FROM product  WHERE id = :id_product";
            $args = array(
                "id_product"=>$id_product
            );
            $this->product->insertUserValues($query);
            $this->product->bind($args);
            return $result = $this->product->single_row();  
        }
        
        // increase the number of views
        function increase_product_view($id_product){
            $this->product = new Connection;
            $query = "UPDATE product SET  view = view + 1 WHERE id = :id_product";
            $args = array(
                "id_product"=>$id_product
            );
            $this->product->insertUserValues($query);
            $this->product->bind($args);
            return $result = $this->product->run();
        }

        // select top five product
        function select_top_five_product(){
            $this->product = new Connection;
            $query = "SELECT * FROM product WHERE view > 0 ORDER BY view DESC LIMIT 0, 5";
            $this->product->insertUserValues($query);
            return $result = $this->product->get_row();
        }

        // select special product
        function select_special_product(){
            $this->product = new Connection;
            $query = "SELECT * FROM product WHERE special = 1";
            $this->product->insertUserValues($query);
            return $result = $this->product->get_row();
        }

        // select product by id category
        function select_product_by_category($id_category){
            $this->product = new Connection;
            $query = "SELECT * FROM product WHERE id_category = :id_category";
            $args = array(
                "id_category"=>$id_category
            );
            $this->product->insertUserValues($query);
            $this->product->bind($args);
            return $result = $this->product->get_row();
        }

        // select product by keyword
        function select_product_by_keyword($keyword){
            $this->product = new Connection;
            $query = "SELECT * FROM product WHERE name_product LIKE :keyword";
            $args = array(
                "keyword"=>"%$keyword%"
            );
            $this->product->insertUserValues($query);
            $this->product->bind($args);
            return $result = $this->product->single_row();
        }
    }
?>