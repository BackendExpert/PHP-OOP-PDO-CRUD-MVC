<?php 

    class userModel{
        private $con;
        private $tbl = "user_tbl";

        public function __construct($db){
            $this->con = $db;
        }

        public function showAllUsers(){
            $get_all_user = "SELECT * FROM " . $this->tbl;
            $all_users_exc = $this->con->prepare($get_all_user);
            $all_users_exc->execute();
            return $all_users_exc;
        }
    }