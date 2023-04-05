<?php

$array  = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$res = array_map(function(int $array){
  return $array % 2;
}, $array);

foreach($array as $key => $value){
 $res[$key] == 0? $res[$key] ="Чётное" : $res[$key] ="Нечётное";
};

print_r($res);