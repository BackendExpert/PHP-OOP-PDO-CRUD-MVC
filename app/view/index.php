<?php 
    include("../headers/header.php");
?>

<style>
    .add-user{
        margin: 30px 0;
    }
    .table{
        margin: 20px 0;
    }
</style>

<div class="container">
    <a href=""><button class="btn btn-success add-user">Add New User</button></a>
    <table class="table">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>Join Date</th>
                <th>Last Update</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                while ($row = $users->fetch(PDO::FETCH_ASSOC)) : 
            ?>

            <?php 
                endwhile;
            ?>
        </tbody>
    </table>
</div>