<?php

$arraySum = [];
$arrayOne = range(1,10);
$arrayTwo = range(1,10);

for($i = 0; $i <= count($arrayOne); $i++){
  for($i = 0; $i <= count($arrayTwo); $i++){
    $arraySum[] = $arrayOne[$i] * $arrayTwo[$i];
  }
};
print_r($arraySum);






