<?php 
  require_once '../BACK/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Админ панель</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/style.css" />
</head>
<style>
  th, td {
    padding: 20px;
    margin-right: 10px;
}

th {
    background: #606060;
    color: #fff;
}

td {
    background: #b5b5b5;
}
</style>
<body>
  <div class="container-fluidd">
    <table>
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>LOGIN</th>
        <th>PHONE</th>
        <th>DELETE</th>
      </tr>
      <?php 
        $users = mysqli_query($connect, "SELECT * FROM lahome.register");
        $users = mysqli_fetch_all($users);
        foreach ($users as $user) {
          ?>
            <tr>
            <td><?= $user[0] ?></td>
            <td><?= $user[1] ?></td>
            <td><?= $user[2] ?></td>
            <td><?= $user[4] ?></td>
            <td><a href="deleteUser.php?id=<?= $user[0] ?>"><button type="button" class="btn btn-danger">Удалить запись</button></a></td>
          </tr>
          <?php
        }
      ?>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>