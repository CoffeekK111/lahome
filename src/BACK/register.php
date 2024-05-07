<?php
session_start();
require_once 'connect.php';

$name = $_POST['name'] ?? null;
$login = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;
$repeatpassword = $_POST['repeatpassword'] ?? null;
$phone = $_POST['phone'] ?? null;

$_SESSION['validation'] = [];

function validate_russian_phone_number($tel) {
    $tel = trim((string)$tel);
    if (!$tel) return false;
    $tel = preg_replace('#[^0-9+]+#uis', '', $tel);
    if (!preg_match('#^(?:\\+?7|8|)(.*?)$#uis', $tel, $m)) return false;
    $tel = '+7' . preg_replace('#[^0-9]+#uis', '', $m[1]);
    if (!preg_match('#^\\+7[0-9]{10}$#uis', $tel, $m)) return false;
    return $tel;
}
    $checkUserOfRegister = mysqli_query($connect, "SELECT * FROM lahome.register WHERE phone = '$phone' or login = '$login'");
    if (mysqli_num_rows($checkUserOfRegister) > 0) {
        $err = 'Данный пользователь уже зарегистрирован!';
    } else {
        if (validate_russian_phone_number($phone)) {
            if ($password === $repeatpassword) {
                $password = md5($password);
                mysqli_query($connect, "INSERT INTO register (id, name, login, password, phone) VALUES (NULL, '$name', '$login', '$password', '$phone')");
                header('Location: ../FRONT/frontSignup.php');
            } 
        } else {
            $_SESSION['validation']['phone'] = 'Не верный номер!';
            
        }
        if (!empty($_SESSION['validation'])) {
            header('Location: ../FRONT/frontRegister.php');
        }
    } 
?>