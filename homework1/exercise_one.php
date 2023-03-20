
  <?php

  $name = readline("Как Вас зовут? ");
  $age = (int)readline("Сколько вам лет? ");
  $taskOne = readline("Назовите задачу запланированую перед вами сегодня? ");
  $taskTimeOne = (int)readline("Сколько примерно времени эта задача займёт? ");
  $taskTwo = readline("Назовите вторую задачу на день: ");
  $taskTimeTwo = (int)readline("Сколько примерно времени эта задача займёт? ");
  $taskThree = readline("Назовите третью задачу на день: ");
  $taskTimeThree = (int)readline("Сколько примерно времени эта задача займёт? ");
  
  $timeSum = $taskTimeOne + $taskTimeTwo + $taskTimeThree;

  echo "Вас зовут $name Вам $age лет.\n$name Сегодня у вас запланировано 3 приоритетных задачи на день:\n
  - $taskOne({$taskTimeOne}ч)\n
  - $taskTwo({$taskTimeTwo}ч)\n
  - $taskThree({$taskTimeThree}ч)\n
  Примерное время выполнение плана = {$timeSum}ч";