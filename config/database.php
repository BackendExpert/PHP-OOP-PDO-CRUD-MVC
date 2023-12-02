<?php

    class Database{
        private $host = "localhost";
        private $user = "root";
        private $pass = "";
        private $db_name = "php_pdo_oop_crud_mvc";

        public function makeConnection(){
            $this->con -= null;

            try {
                $this->con = new PDO("mysql:host={$this->host}; dbname={$this->db_name}", $this->user, $this->pass);
                $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (PDOException $e){
                echo "Connection Lost : " . $e->getMessage();
            }
            return $this->con;
        }
    }