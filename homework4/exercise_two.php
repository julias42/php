
<?php

$array  = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

function minMax(array $array):array
{
  foreach($array as $item){
    $res["Минимальный элемент массива"] = min($array);
    $res["Максимальный элемент массива"] = max($array);
    $res["Среднее арифметическое массива"] = array_sum($array) / count($array);
  }
  return $res;
};

print_r(minMax($array));