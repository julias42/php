<?php var_dump($task)?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Задачи</title>
</head>
<body>
  <h1>Задачи</h1>
  <?php if (is_null($username)) : ?>
      <a href="/?controller=security">Войти</a>
    <?php else : ?>
     <p>Рады вас приветствовать, <?= $username ?>.</p><br>
    <a href="/">Главная</a>
    <a href="/?controller=security&action=logout">Выйти</a>
    <?php endif; ?><br>
    <form action="/?controller=tasks&action==add" method="post">
      <input type="text" name="tasks" placeholder="Опишите новую задачу">
      <input type="submit" value="Добавить">
    </form>
    <?php foreach ($tasks as $key => $task) :?>
      <div>
          <?=$task->getDescription()?>
          <a href="/?controller=tasks&action=done&key=<?=$key?>">[Done]</a><br><br>
    </div>
<?php endforeach; ?>
    
</body>
</html>