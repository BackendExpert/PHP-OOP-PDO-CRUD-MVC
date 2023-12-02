<?php 
    include("../../../headers/header.php");
    require("../controller/userController.php");
?>

<style>
    .table{
        margin: 30px 0;
    }
    .add-user{
        margin: 20px 0;
    }
</style>

<div class="container">
    <a href="../../../"><button class="btn btn-primary">Back</button></a>
    <a href=""><button class="btn btn-success add-user">Add New User</button></a>
    <table class="table">
        <thead>
            <tr>
                <th>Fisrst Name </th>
                <th>Last Name </th>
                <th>Mobile Number </th>
                <th>Address </th>
                <th>Join Date </th>
                <th>Last Update </th>
                <th>Action </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php 
                    $list_user = users_show_all();
                    if($list_user){
                        foreach($list_user as $user){
                ?>
                    <td><?php $user['fname']?></td>
                    <td><?php $user['lname']?></td>
                    <td><?php $user['mobile_no']?></td>
                    <td><?php $user['user_address']?></td>
                    <td><?php $user['join_at']?></td>
                    <td><?php $user['update_at']?></td>
                    <td>
                        <a href=""><button class="btn btn-warning">Edit</button></a>
                        <a href=""><button class="btn btn-danger">Delete</button></a>
                    </td>                    

                <?php
                        }
                    }                
                ?>
            </tr>
        </tbody>
    </table>
</div>