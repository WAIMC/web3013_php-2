<?php
    class invoices_detail{
        public $invoices_detail;
        public $comment;

        // insert invoices detail
        function insert_invoices_detail($id_invoices, $id_product, $price, $date, $amount, $status){
            $this->invoices_detail = new Connection();
            $query = "INSERT INTO invoices_detail (id_invoices, id_product, price, date, amount, status) VALUES(:id_invoices, :id_product, :price, :date, :amount, :status)";
            $args = array(
                "id_invoices"=>$id_invoices,
                "id_product"=>$id_product,
                "price"=>$price,
                "date"=>$date,
                "amount"=>$amount,
                "status"=>$status
            );
            $this->invoices_detail->insertUserValues($query);
            $this->invoices_detail->bind($args);
            return $result = $this->invoices_detail->run();
        }

        // update invoices detail
        function update_invoices_detail($id_invoices_detail, $id_invoices, $id_product, $price, $date, $amount, $status){
            $this->invoices_detail = new Connection;
            $query = "UPDATE invoices_detail SET id_invoices = :id_invoices, id_product = :id_product, price = :price, date = :date,"
            ."amount = :amount, status = :status WHERE id = :id_invoices_detail";
            $args = array(
                "id_invoices_detail"=>$id_invoices_detail,
                "id_invoices"=>$id_invoices,
                "id_product"=>$id_product,
                "price"=>$price,
                "date"=>$date,
                "amount"=>$amount,
                "status"=>$status
            );
            $this->invoices_detail->insertUserValues($query);
            $this->invoices_detail->bind($args);
            return $result = $this->invoices_detail->run();
        }

        // delete invoices detail
        function delete_invoices_detail($id_invoices_detail){
            $this->invoices_detail = new Connection;
            $query = "DELETE FROM invoices_detail WHERE id = :id_invoices_detail";
            $args = array(
                "id_invoices_detail"=>$id_invoices_detail
            );
            $this->invoices_detail->insertUserValues($query);
            $this->invoices_detail->bind($args);
            return $result = $this->invoices_detail->run();
        }

        // select invoices detail
        function select_invoices_detail(){
            $this->invoices_detail = new Connection;
            $query = "SELECT * FROM invoices_detail";
            $this->invoices_detail->insertUserValues($query);
            return $result = $this->invoices_detail->get_row();
        }

        // select invoices detail by id
        function select_invoices_detail_id($id_invoices_detail){
            $this->invoices_detail = new Connection;
            $query = "SELECT * FROM invoices_detail WHERE id = :id_invoices_detail";
            $args = array(
                "id_invoices_detail"=>$id_invoices_detail
            );
            $this->invoices_detail->insertUserValues($query);
            $this->invoices_detail->bind($args);
            return $result = $this->invoices_detail->single_row();
        }

        // select invoices detail by product
        function select_invoices_detail_by_product($id_invoices){
            $this->invoices_detail = new Connection;
            $this->comment = new Connection;
            $query = "SELECT i.*, p.name_product, p.image FROM invoices_detail i JOIN product p ON i.id_product = p.id"
            ." WHERE i.id_invoices = :id_invoices ORDER BY amount DESC";
            $args = array(
                "id_invoices"=>$id_invoices
            );
            $this->comment->insertUserValues($query);
            $this->comment->bind($args);
            return $result = $this->comment->get_row();
        }

        // select invoices detail by invoices
        function select_invoices_detail_by_invoices(){
            $this->invoices_detail = new Connection;
            $this->comment = new Connection;
            $query = "SELECT i.* ,COUNT(*) quantity FROM invoices_detail d JOIN invoices i ON d.id_invoices = i.id"
            ." GROUP BY date HAVING quantity > 0";
            $this->comment->insertUserValues($query);
            return $result = $this->comment->get_row();
        }
    }  
?>