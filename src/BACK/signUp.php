<?php 
    require_once('connect.php');
    $login = $_POST['login'];
    $password = md5($_POST['password']);
    
    $checkUser = mysqli_query($connect, "SELECT * FROM lahome.register WHERE login = '$login' AND password = '$password'");
    
    if (mysqli_num_rows($checkUser) > 0) {
        header('Location: ./../FRONT/signUpPeopleIndex.html');
    } else {
        header('Location: ./../FRONT/frontRegister.php');
    }
?>