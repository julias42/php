<?php

$array  = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$res = array_map(function(int $array){
  return $array % 2;
},$array);

for($i = 0;$i <= count($array); $i++){
 if($res[$i] == 0){
  $res[$i] = "Четное";
} else $res[$i] = "Нечетное";
};

print_r($res);