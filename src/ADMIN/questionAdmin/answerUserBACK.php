<?php 
    require_once '../../BACK/connect.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $question = $_POST['question'];
    $phone = $_POST['phone'];

    mysqli_query($connect, "UPDATE lahome.question SET name = '$name', question = '$question', phone = '$phone' WHERE lahome.question . id = '$id'");
    header('Location: indexQuestion.php');  
?>