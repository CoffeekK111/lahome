<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Выбор админ панели</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/style.css" />
</head>
<style>
    .link_choise_adm {
        color: #fff;
        text-decoration: none;
        margin-top: 140px;
    }
    .btn_adm {
        margin: 0 0 0 480px;
    }
    .btn_adm .btn_center {
        margin: 450px 0 0 30px;
        padding: 30px;
    }
</style>
<body>
  <div class="container-fluidd">
    <div class="btn_adm">
        <a href="adminDataUser.php" class="link_choise_adm"><button type="button" class="btn btn-primary btn_right btn_center">База данных людей</button></a>
        <a href="wishAdmin/indexWish.php" class="link_choise_adm"><button type="button" class="btn btn-primary btn_right btn_center">База данных пожеланий людей</button></a>
        <a href="questionAdmin/indexQuestion.php" class="link_choise_adm"><button type="button" class="btn btn-primary btn_right btn_center">База данных вопросов</button></a>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>
</html>