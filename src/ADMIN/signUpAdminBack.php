<?php
    require_once '../BACK/connect.php';
    $login = $_POST['login'];
    $password = $_POST['password'];

    $checkAdmin = mysqli_query($connect, "SELECT * FROM lahome.administrator WHERE login = '$login' AND password = '$password'");

    if (mysqli_num_rows($checkAdmin) > 0) {
        header('Location: choise.php');
    } else {
        header('Location: ../index.html');
    }
?>