<?php

    class statistical{
        public $statistical;

        // statistical product
        function statistical_product(){
            $this->statistical = new Connection;
            $query = "SELECT c.id, c.name_category, COUNT(*) quantity, MIN(p.discount) price_min, MAX(p.price) price_max, AVG(p.price) price_avg"
            ." FROM product p JOIN category c ON p.id_category = c.id GROUP BY c.id, c.name_category ";
            $this->statistical->insertUserValues($query);
            return $result = $this->statistical->get_row();
        }


        // statistical comment
        function statistical_comment(){
            $this->statistical = new Connection;
            $query = "SELECT p.name_product, c.*, COUNT(*) quantity, MIN(c.date) oldest_min, MAX(c.date) newest_max "
            ." FROM comment c JOIN product p ON c.id_product = p.id GROUP BY p.name_product HAVING quantity > 0 ";
            $this->statistical->insertUserValues($query);
            return $result = $this->statistical->get_row();
        }
    }
?>