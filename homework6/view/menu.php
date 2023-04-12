<?php if ($username !== null) : ?>
  <p>Рады вас приветствовать, <?= $username ?>. <a href="/?controller=security&action=logout">Выйти</a></p>
  <br>
  <a href="/">Главная</a>
  <a href="/?controller=task">Задачи</a>
<?php else : ?>
  <a href="/?controller=security">Войти</a>
<?php endif ?><br> 
