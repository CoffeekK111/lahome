<?php 
    require_once 'connect.php';

    $name = $_POST['name'];
    $question = $_POST['question'];
    $phone = $_POST['phone'];

    function validate_russian_phone_number($tel)
    {
        $tel = trim((string)$tel);
        if (!$tel) return false;
        $tel = preg_replace('#[^0-9+]+#uis', '', $tel);
        if (!preg_match('#^(?:\\+?7|8|)(.*?)$#uis', $tel, $m)) return false;
        $tel = '+7' . preg_replace('#[^0-9]+#uis', '', $m[1]);
        if (!preg_match('#^\\+7[0-9]{10}$#uis', $tel, $m)) return false;
        return $tel;
    }

    if (validate_russian_phone_number($phone)) {
        mysqli_query($connect, "INSERT INTO lahome.question (id, name, question, phone) VALUES (NULL, '$name', '$question', '$phone')");
        header('Location: ../index.html');
    }
?>