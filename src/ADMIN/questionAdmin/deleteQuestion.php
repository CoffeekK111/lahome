<?php 
    require_once '../../BACK/connect.php';

    $id = $_GET['id'];

    mysqli_query($connect, "DELETE FROM lahome.question WHERE lahome.question . id = '$id'");
    header('Location: indexQuestion.php');  
?>