<?php 
    require_once '../../BACK/connect.php';

    $id = $_GET['id'];

    mysqli_query($connect, "DELETE FROM lahome.wish WHERE lahome.wish . id = '$id'");
    header('Location: indexWish.php');  
?>