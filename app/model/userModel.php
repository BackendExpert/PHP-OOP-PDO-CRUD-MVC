<?php 
    require_once("../../../config/database.php");

    class userM extends DB{
        
        public function add_user(){

        }

        public function read_all_user(){
            $all_users = "SELECT * FROM user_tbl";
            $all_users_exc = $this->connect()->prepare($all_users);
            $all_users_exc->execute();
        }
    }