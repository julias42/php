<?php

$students = [
  'ИТ20' => [
      'Иванов Иван' => 5,
      'Кириллов Кирилл' => 1,
      'Васильев Вася' => 5,
      'Иванов Гриша' => 2
  ],
  'БАП20' => [
      'Антонов Антон' => 2,
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
} if($averageBap20 == $averageIt20){
  echo "Равно!";
} else {
  echo "{$nameGroup[1]}\n";
};

