<?php
    class comment{
        public $comment;

        // insert comment
        function insert_comment($content, $id_product, $id_user, $date, $status){
            $this->comment = new Connection;
            $query = "INSERT INTO comment (content, id_product, id_user, date, status) VALUES(:content, :id_product, :id_user, :date, :status)";
            $args = array(
                "content"=>$content,
                "id_product"=>$id_product,
                "id_user"=>$id_user,
                "date"=>$date,
                "status"=>$status
            );
            $this->comment->insertUserValues($query);
            $this->comment->bind($args);
            return $result = $this->comment->run();
        }

        // update comment
        function update_comment($id_comment, $content, $id_product, $id_user, $date, $status){
            $this->comment = new Connection;
            $query = "UPDATE comment SET content = :content, id_product = :id_product"
            ."id_user = :id_user, date = :date, status = :status WHERE id = :id_comment";
            $args = array(
                "id_comment"=>$id_comment,
                "content"=>$content,
                "id_product"=>$id_product,
                "id_user"=>$id_user,
                "date"=>$date,
                "status"=>$status
            );
            $this->comment->insertUserValues($query);
            $this->comment->bind($args);
            return $result = $this->comment->run();
        }

        // update comment id
        function update_comment_id($id_comment, $status){
            $this->comment = new Connection;
            $query = "UPDATE comment SET status = :status WHERE id = :id_comment";
            $args = array(
                "id_comment"=>$id_comment,
                "status"=>$status
            );
            $this->comment->insertUserValues($query);
            $this->comment->bind($args);
            return $result = $this->comment->run();
        }

        // delete comment id
        function delete_comment($id_comment){
            $this->comment = new Connection;
            $query = "DELETE FROM comment WHERE id = :id_comment";
            $args = array(
                "id_comment"=>$id_comment
            );
            $this->comment->insertUserValues($query);
            $this->comment->bind($args);
            return $result = $this->comment->run();
        }

        // select comment
        function select_comment(){
            $this->comment = new Connection;
            $query = "SELECT * FROM comment";
            $this->comment->insertUserValues($query);
            return $result = $this->comment->get_row();
        }

        // select comment by id comment
        function select_comment_id($id_comment){
            $this->comment = new Connection;
            $query = "SELECT * FROM comment WHERE id_comment=:id_comment";
            $args = array(
                "id_comment"=>$id_comment
            );
            $this->comment->insertUserValues($query);
            $this->comment->bind($args);
            return $result = $this->comment->single_row();
        }

        // select comment by product
        function select_comment_by_product($id_product){
            $this->comment = new Connection;
            $query = "SELECT c.*, p.name_product FROM comment c JOIN product p ON c.id_product = p.id"
            ." WHERE c.id_product = :id_product ORDER BY date DESC";
            $args = array(
                "id_product"=>$id_product
            );
            $this->comment->insertUserValues($query);
            $this->comment->bind($args);
            return $result = $this->comment->get_row();
        }

        // select show comment
        function show_comment($id_product){
            $this->comment = new Connection;
            $query = "SELECT c.*, p.name_product FROM comment c JOIN product p ON c.id_product = p.id"
            ."WHERE c.id_product = :id_product AND c.status = 1 ORDER BY date DESC";
            $args = array(
                "id_product"=>$id_product
            );
            $this->comment->insertUserValues($query);
            $this->comment->bind($args);
            return $result = $this->comment->get_row();
        }
    }
?>