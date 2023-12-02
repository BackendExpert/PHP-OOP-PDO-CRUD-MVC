<?php 

    class DB{
        private $host = "localhost";
        private $user = "root";
        private $pass = "";
        private $db_name = "php_pdo_oop_crud_mvc";

        public function connect(){
            $con = 'mysql:host' . $this->host . 'dbname =' . $this->db_name;
            $pdo = new PDO($con, $this->user, $this->pass);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        }
    }