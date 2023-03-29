<?php

$arraySum = [];
$arrayOne = [1,2,5,4,7,8,9,7,8,9,7,6,5];
$arrayTwo = [2,5,4,8,2,7,3,5,4,6,8,7,9];

for($i = 0; $i <= count($arrayOne); $i++){
  for($i = 0; $i <= count($arrayTwo); $i++){
    $arraySum[] = $arrayOne[$i] * $arrayTwo[$i];
  }
  print_r($arraySum);
}







