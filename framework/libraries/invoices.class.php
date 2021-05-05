<?php
    class invoices{
        public $invoices;

        // insert invoices
        function insert_invoices($id_user, $phone, $address, $note){
            $this->invoices = new Connection;
            $query = "INSERT INTO invoices (id_user, phone, address, note) VALUES (:id_user, :phone, :address, :note)";
            $args = array(
                "id_user"=>$id_user,
                "phone"=>$phone,
                "address"=>$address,
                "note"=>$note
            );
            $this->invoices->insertUserValues($query);
            $this->invoices->bind($args);
            $result = $this->invoices->run();
            global $last_id;
            $last_id = $this->invoices->getLastInsertedID();
            return $result;
        }

        // get last id
        function get_last_id(){
            global $last_id;
            return $last_id;
        }

        // update invoices
        function update_invoices($id_invoices, $id_user, $phone, $address, $note){
            $this->invoices = new Connection;
            $query ="UPDATE invoices SET id_user = :id_user, phone = :phone, address = :address, note = :note WHERE id = :id_invoices";
            $args = array(
                "id_invoices"=>$id_invoices,
                "id_user"=>$id_user,
                "phone"=>$phone,
                "address"=>$address,
                "note"=>$note
            );
            $this->invoices->insertUserValues($query);
            $this->invoices->bind($args);
            return $result = $this->invoices->run();
        }

        // update note invoices
        function update_note_invoices($id_invoices, $note){
            $this->invoices = new Connection;
            $query ="UPDATE invoices SET note = :note WHERE id = :id_invoices";
            $args = array(
                "id_invoices"=>$id_invoices,
                "note"=>$note
            );
            $this->invoices->insertUserValues($query);
            $this->invoices->bind($args);
            return $result = $this->invoices->run();
        }

        // delete invoices 
        function delete_invoices($id_invoices){
            $this->invoices = new Connection;
            $query ="DELETE FROM invoices WHERE id = :id_invoices";
            $args = array(
                "id_invoices"=>$id_invoices
            );
            $this->invoices->insertUserValues($query);
            $this->invoices->bind($args);
            return $result = $this->invoices->run();
        }

        // select invoices
        function select_invoices(){
            $this->invoices = new Connection;
            $query ="SELECT * FROM invoices";
            $this->invoices->insertUserValues($query);
            return $result = $this->invoices->get_row();
        }

        // select invoices by id
        function select_invoices_id($id_invoices){
            $this->invoices = new Connection;
            $query ="SELECT * FROM invoices WHERE id = :id_invoices";
            $args = array(
                "id_invoices"=>$id_invoices
            );
            $this->invoices->insertUserValues($query);
            $this->invoices->bind($args);
            return $result = $this->invoices->single_row();
        }

        // select invoices by user
        function select_invoices_by_user(){
            $this->invoices = new Connection;
            $query = "SELECT i.*, u.user_name FROM invoices i JOIN user u ON i.id_user = u.user_name";
            $this->invoices->insertUserValues($query);
            return $result = $this->invoices->get_row();
        }

        // statistical invoices
        function statistical_invoices(){
            $this->invoices = new Connection;
            $query = "SELECT u.full_name, i.* , COUNT(*) quantity FROM invoices i JOIN "
            ."user u ON i.id_user = u.user_name GROUP BY  u.full_name HAVING quantity > 0";
            $this->invoices->insertUserValues($query);
            return $result = $this->invoices->get_row();
        }
    }
?>