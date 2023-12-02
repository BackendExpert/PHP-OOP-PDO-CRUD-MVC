<?php 

    require_once("../../config/database.php");
    require_once("../model/userModel.php");

    class userController {
        private $db;
        private $userModel;

        public function __construct(){
            $this->db = new Database;
            $this->userModel = new UserModel($this->db->showAllUsers());
        }

        public function index(){
            $users = $this->userModel->showAllUsers();
            include('../view/index.php');
        }
    }