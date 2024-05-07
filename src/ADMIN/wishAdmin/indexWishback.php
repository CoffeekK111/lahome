<?php 
    require_once '../../BACK/connect.php';
    
    $name = $_POST['name'];
    $wish = $_POST['wish'];
    $time = $_POST['time'];

    mysqli_query($connect, "INSERT INTO wish (id, name, description, time) VALUES (NULL, '$name', '$wish', '$time')");
    header('Location: ../../index.html');
?>