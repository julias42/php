<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <style>
    .container {
      height: 100vh;
    }
  </style>
  <title>Главная</title>

</head>

<body>
  <div class="container text-center">
    <h1>
      <?=$pageHeader?>
    </h1>
    <?php if (is_null($username)) : ?>
      <a href="/?controller=security">Войти</a>
    <?php else : ?>
     <p>Рады вас приветствовать, <?= $username ?>.</p><br>
    <a href="/?controller=tasks">Задачи</a> <a href="/?controller=security&action=logout">Выйти</a>
    <?php endif ?><br>
  </div>
</body>

</html>