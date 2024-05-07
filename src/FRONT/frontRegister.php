<?php 
  session_start();
  // require_once '../BACK/register.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Регистрация</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <style>
  .form-horizontal .btn {
    width: 180px;
  }
  </style>
  <body>
    <section>     
    <div class="container-fluidd">
    <div class="offset-md-4 col-md-4 offset-sm-3 col-sm-6">
      <div class="form-container">
        <h3 class="title">Регистрация</h3>
        <span class="description">Введите данные для Регистрации:</span>
        <form action="../BACK/register.php" class="form-horizontal" method="post" >
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Введите имя..."  
            pattern="^[А-Яа-яЁё\s]+$" title="Только русское имя" required/>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="login" placeholder="Введите логин..." 
            pattern="/^[a-z0-9-_]{2,20}$/i" 
            title="Разрешено использовать только латинские буквы, цифры, тире и знак подчёркивания. Длина логина от 2 до 20 символов (включительно)" required/>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Введите пароль..." required/>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="repeatpassword" placeholder="Подтвердите пароль..." required/>
          </div>
          <div class="form-group">
            <p>Только российские номера телефонов. +7xxxxxxxxxx</p>
            <input type="tel" class="form-control" name="phone" placeholder="Введите номер..." required/>
            <?php 
              if (isset($_SESSION['validation'])) {
                $_SESSION['validation']['phone'];
              }
            ?>
          </div>
          <div class="form-group">
            <h3>Уже есть аккаунт? <a href="../FRONT/frontSignUp.php">Войдите</a></h3>
          </div>
          <div class="form-group">
            <input type="checkbox" class="checkbox" />
            <span class="check-label">Я согласен с <a href="">Условиями</a> и
              <a href="">Политикой конфиденциальности.</a></span>
          </div>
          <button class="btn signin">Зарегистрироваться</button>
        </form>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
