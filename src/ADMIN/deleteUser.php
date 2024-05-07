<?php 
    require_once '../BACK/connect.php';

    $id = $_GET['id'];

    mysqli_query($connect, "DELETE FROM lahome.register WHERE lahome.register . id = '$id'");
    header('Location: adminDataUser.php');  
?>