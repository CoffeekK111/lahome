<?php 
    $connect = mysqli_connect('localhost', 'root', 'lb20vf04', 'lahome');
    
    if(!$connect) {
        die("Ошибка подключения БД");
    }
?>