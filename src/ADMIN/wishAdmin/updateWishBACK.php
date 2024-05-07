<?php 
    require_once '../../BACK/connect.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $wish = $_POST['wish'];
    $time = $_POST['time'];

    mysqli_query($connect, "UPDATE lahome.wish SET name = '$name', description = '$wish', time = '$time' WHERE lahome.wish . id = '$id'");
    header('Location: indexWish.php');  
?>