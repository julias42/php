
  <?php

$tasks = (int)readline("Напишите количество задач запланированныч перед вами сегодня? ");

while($tasks >= 10){
  echo "Вы реально сможете осилить столько за один день?\n";
  $task = (int)readline("Напишите Реальное количество задач! ");
};

$timeSum = 0;
for($i = 1; $i <= $tasks; $i++){
  ${"taskName$i"} = readline("Какая задача запланирована? ");
  ${"taskTime$i"} = (int)readline("Сколько времени эта задача займет? ");
  
};

echo "Сегодня у вас запланировано {$task} приоритетных задачи на день:\n";
for($i = 1; $i <= $tasks; $i++){
  echo " - ${"taskName$i"}(${"taskTime$i"}ч)\n";
  $timeSum = $timeSum + ${"taskTime$i"};
};

echo "Примерное время выполнение плана = {$timeSum}ч.\n";