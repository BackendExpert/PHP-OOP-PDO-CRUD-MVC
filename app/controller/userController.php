<?php 

    require_once("../../model/userModel.php");

    function users_show_all(){
        $show_users = new userM();
        $exc_user = $show_users->read_all_user();

        if($exc_user){
            $users_arrary = array();
            while($row = $show_users->fetch(PDO::FETCH_ASSOC)){
                $users_arrary[] = $row;
            }
            return $users_arrary;
        }
    }