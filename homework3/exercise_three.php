<?php

$students = [
  'ИТ20' => [
      'Иванов Иван' => 3,
      'Кириллов Кирилл' => 2,
      'Васильев Вася' => 5,
      'Иванов Гриша' => 3
  ],
  'БАП20' => [
      'Антонов Антон' => 5,
      'Биббов Боба' => 2,
      'Боббов Биба' => 4,
      'Горохов Горох' => 3
  ]
];

$valuesIt20 = array_values($students['ИТ20']);
$averageIt20 = array_sum($valuesIt20) / count($students['ИТ20']);
$valuesBap20 = array_values($students['БАП20']);
$averageBap20 = array_sum($valuesBap20) / count($students['БАП20']);
$nameGroup = array_keys($students);
echo "Среднее арифметическое группы ИТ20: {$averageIt20}\n";
echo "Среднее арифметическое группы БАП20: {$averageBap20}\n";


if ($averageBap20 < $averageIt20) {
  echo "{$nameGroup[0]}\n";
} if($averageBap20 > $averageIt20){
  echo "{$nameGroup[1]}\n";
} else {echo "Равно!";};

//$deduction = [];
//$values[] = $valuesBap20;
//$values[] = $valuesIt20;
//for($i = 0; $i <= 3; $i++){
 // $students = 
//}
//while($values)
//print_r($key);
