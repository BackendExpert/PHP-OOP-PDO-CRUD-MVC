<?php 

    require_once("../model/userModel.php");

    function users_show_all(){
        $show_users = new userM();
        $exc_user = $show_users->read_all_user();

        if($exc_user){
            $users_arrary = array();
            while($row = $show_users->dba_fetch()){
                $users_arrary[] = $row;
            }
            return $users_arrary;
        }
    }